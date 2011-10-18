<?php

require_once dirname(__FILE__).'/../lib/attendeeGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/attendeeGeneratorHelper.class.php';

/**
 * attendee actions.
 *
 * @package    kickboxing
 * @subpackage attendee
 * @author     Derek Organ
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class attendeeActions extends autoAttendeeActions
{
    
    
      public function executeIndex(sfWebRequest $request)
      {
        // sorting
        if(!$request->getParameter('sort')) {
            $sort = 'id';
            $sort_type = 'desc';
            $this->setSort(array($sort, $sort_type));
        } else if($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort'))) {
          $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
        }

        // pager
        if ($request->getParameter('page'))
        {
          $this->setPage($request->getParameter('page'));
        }

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();
      }
    
    public function executeExcel()
    {
        $this->setLayout(false);
        $pdo = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
        
        $query = '
            SELECT 
            CONCAT(p.first_name, \' \',p.last_name) as "Registered User",
            p.email_address as "Register Email",
            p.country as "Register Country",
            t.name as "Attendee Type" ,
            CONCAT(a.first_name, \' \',a.last_name) as "Attendee",
            CONCAT(disc.name, \' \',disc.sex) as "Discipline",
            CONCAT(divi.category, \' \', divi.weight) as "Division",
            a.sex as "Sex",
            a.club_name as "Club Name",
            a.accomodation as "Accommodation",
            a.`sharing_with1` as "Sharing With A",
            a.`sharing_with2` as "Sharing With B",
            a.`flight_number` as "Flight Number",
            a.`flight_datetime` as "Flight Date",
            a.`flight_time` as "Flight Time",
            if(a.visa > 0, \'Yes\', \'No\') as "Visa",
            a.dob as "Date of Birth",
            a.passport as "Passport",
            a.`expiry_date` as "Passport Expiry"

            from `profile` p, `type` t,

            `attendee` AS a LEFT JOIN `division` AS divi ON (a.division_id = `divi`.id) 
            LEFT JOIN discipline AS disc ON (divi.discipline_id = disc.id)

            where a.profile_id = p.id
             AND a.type_id = t.id             
        ';
        
        
        $stmt = $pdo->prepare($query);

        $stmt->execute();

        $this->results = $stmt->fetchAll();
        
        
        $hdrs = $this->results[0]; //what if no results? 
        $this->headers = array();
        $i = 0;
        foreach($hdrs as $key => $value) {
            if($i % 2 == 0)
                $this->headers[]  = $key;
            ++$i;
        }
        
        $response = $this->getContext()->getResponse(); 
        $response->clearHttpHeaders(); 
        $response->setHttpHeader('Content-Type', 'application/vnd.ms- 
    excel;charset=utf-8'); 
        $response->setHttpHeader('Content-Disposition:', 'attachment; 
    filename=export.xls');  
        
    }
}
