<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($attendee->getId(), 'attendee_edit', $attendee) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_profile_id">
  <?php echo $attendee->getProfile() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_division_id">
  <?php //echo $attendee->getDivision()->getDiscipline()->getName() . " " . $attendee->getDivision()->getDiscipline()->getSex()
        //            . " - " . $attendee->getDivision()->getCategory() . " " . $attendee->getDivision()->getWeight() //{discipline.name discipline.sex - division.category division.weight} ?>
  <?php echo $attendee->getDivision() ?>  
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_type_id">
  <?php echo $attendee->getType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_first_name">
  <?php echo $attendee->getFirstName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_last_name">
  <?php echo $attendee->getLastName() ?>
</td>
<td class="sf_admin_enum sf_admin_list_td_sex">
  <?php echo $attendee->getSex() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_club_name">
  <?php echo $attendee->getClubName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_accomodation">
  <?php echo $attendee->getAccomodation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_sharing_with1">
  <?php echo $attendee->getSharingWith1() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_sharing_with2">
  <?php echo $attendee->getSharingWith2() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_flight_datetime">
  <?php echo false !== strtotime($attendee->getFlightDatetime()) ? format_date($attendee->getFlightDatetime(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_time sf_admin_list_td_flight_time">
  <?php echo $attendee->getFlightTime() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_flight_number">
  <?php echo $attendee->getFlightNumber() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_visa">
  <?php echo $attendee->getVisa() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_dob">
  <?php echo false !== strtotime($attendee->getDob()) ? format_date($attendee->getDob(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_passport">
  <?php echo $attendee->getPassport() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_expiry_date">
  <?php echo false !== strtotime($attendee->getExpiryDate()) ? format_date($attendee->getExpiryDate(), "f") : '&nbsp;' ?>
</td>
