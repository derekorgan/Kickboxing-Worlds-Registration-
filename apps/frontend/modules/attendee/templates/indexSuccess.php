<div class="login-box">
	<h2 class="header-padding">Registered Attendees<span class="logout"><a href="<?php echo url_for("sf_guard_signout") ?>">Logout</a></span></h2>
<table class="data">
	<thead>
		<tr>
			<th>Name</th>
			<th>Type of Attendee</th>
			<th colspan="2">Additional Info</th>
			<th>Actions</th>

		</tr>
	</thead>
	
	<tbody>
            
                
                <?php foreach ($attendees as $attendee): ?>
		<tr>
			<td><?php echo $attendee->getFirstName() ?></td>
			<td><?php echo $attendee->getType() ?></td>
			<td colspan="2">
                            
                          <?php if($attendee->getType() == 'Competitor'): ?>
                            
                            
                            <?php if($attendee->getDivision()->getDiscipline()->getSex() != NULL): ?>
                              <?php echo $attendee->getDivision()->getDiscipline()->getSex() ?>,
                            <?php endif; ?>
                            
                            <?php if($attendee->getDivision()->getDiscipline()->getName() != NULL): ?>
                              <?php echo $attendee->getDivision()->getDiscipline()->getName() ?>,
                            <?php endif; ?>
                              
                            <?php echo $attendee->getDivision()->getCategory() ?> 
                              
                            <?php if($attendee->getDivision()->getWeight() != NULL): ?>
                              <span class="">- Under</span>
                              <?php echo $attendee->getDivision()->getWeight() ?>
                            <?php endif; ?>
                            <span class=""></span>
					      <?php else: ?>
						    -
                          <?php endif; ?>
                        </td>
                        <td class="center"><a href="<?php echo url_for("@attendee_edit?id=" . $attendee->getId()) ?>">Edit</a> | <a href="<?php echo url_for('@atten_delete?id='.$attendee->getId()); ?>">Delete</a></td>

		</tr>
                <?php endforeach; ?>
                
	</tbody>
</table>
<br>
<div class="buttonrow"><a style="text-align: center" class="btn btn-black btn-login" href="<?php echo url_for("@attendee_new") ?>">Add Attendee</a></div>
			
		</div>


<?php /*
<h1>Attendees List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Division</th>
      <th>Type</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Accomodation</th>
      <th>Sharing with</th>
      <th>Flight datetime</th>
      <th>Flight number</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($attendees as $attendee): ?>
    <tr>
      <td><a href="<?php echo url_for('attendee/show?id='.$attendee->getId()) ?>"><?php echo $attendee->getId() ?></a></td>
      <td><?php echo $attendee->getDivisionId() ?></td>
      <td><?php echo $attendee->getTypeId() ?></td>
      <td><?php echo $attendee->getFirstName() ?></td>
      <td><?php echo $attendee->getLastName() ?></td>
      <td><?php echo $attendee->getAccomodation() ?></td>
      <td><?php echo $attendee->getSharingWith() ?></td>
      <td><?php echo $attendee->getFlightDatetime() ?></td>
      <td><?php echo $attendee->getFlightNumber() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php //echo url_for('attendee/new') ?>">New</a>
*/ ?>
<?php /*
<h1>Attendees List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Profile</th>
      <th>Division</th>
      <th>Type</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Sex</th>
      <th>Club name</th>
      <th>Accomodation</th>
      <th>Sharing with1</th>
      <th>Sharing with2</th>
      <th>Flight datetime</th>
      <th>Flight time</th>
      <th>Flight number</th>
      <th>Visa</th>
      <th>Dob</th>
      <th>Passport</th>
      <th>Expiry date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($attendees as $attendee): ?>
    <tr>
      <td><a href="<?php echo url_for('attendee/show?id='.$attendee->getId()) ?>"><?php echo $attendee->getId() ?></a></td>
      <td><?php echo $attendee->getProfileId() ?></td>
      <td><?php echo $attendee->getDivisionId() ?></td>
      <td><?php echo $attendee->getTypeId() ?></td>
      <td><?php echo $attendee->getFirstName() ?></td>
      <td><?php echo $attendee->getLastName() ?></td>
      <td><?php echo $attendee->getSex() ?></td>
      <td><?php echo $attendee->getClubName() ?></td>
      <td><?php echo $attendee->getAccomodation() ?></td>
      <td><?php echo $attendee->getSharingWith1() ?></td>
      <td><?php echo $attendee->getSharingWith2() ?></td>
      <td><?php echo $attendee->getFlightDatetime() ?></td>
      <td><?php echo $attendee->getFlightTime() ?></td>
      <td><?php echo $attendee->getFlightNumber() ?></td>
      <td><?php echo $attendee->getVisa() ?></td>
      <td><?php echo $attendee->getDob() ?></td>
      <td><?php echo $attendee->getPassport() ?></td>
      <td><?php echo $attendee->getExpiryDate() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('attendee/new') ?>">New</a>
*/ ?>