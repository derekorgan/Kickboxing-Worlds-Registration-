<?php
	$html = '<option value="">Select One</option>';

    foreach($divisions as $division) {
        $html .= "<option value=\"" . $division->getId() . "\">" . $division->getCategory() . " " . $division->getWeight() . "</option>";
    }
    
    
    echo $html;
?>
