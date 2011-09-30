<?php


    
    //$html = "<div id=\"ajax_divisions\">";
    
    foreach($divisions as $division) {
        $html .= "<option value=\"" . $division->getId() . "\">" . $division->getCategory() . " " . $division->getWeight() . "</option>";
    }
    
    //$html .= "</div>";
    echo $html;
?>
