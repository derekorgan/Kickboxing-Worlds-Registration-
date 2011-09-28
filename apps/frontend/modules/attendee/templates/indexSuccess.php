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
		<tr>
			<td>John Doe</td>
			<td>Compeditor</td>
			<td colspan="2">Male, Semi Contact, Senior Men - Under 74kg</td>
			<td class="center"><a href="add.html">Edit</a> | <a href="#">Remove</a></td>

		</tr>
		<tr>
			<td>Sarah Sharp</td>
			<td>Compeditor</td>
			<td colspan="2">Female, Light Contact, Cadet Girls - Under 55kg</td>
			<td class="center"><a href="add.html">Edit</a> | <a href="#">Remove</a></td>

		</tr>
		<tr>
			<td>Simon Breen</td>
			<td>Coach</td>
			<td colspan="2">-</td>
			<td class="center"><a href="add.html">Edit</a> | <a href="#">Remove</a></td>

		</tr>
		<tr>
			<td>Andrew Jackson</td>
			<td>Staff</td>
			<td colspan="2">-</td>
			<td class="center"><a href="add.html">Edit</a> | <a href="#">Remove</a></td>

		</tr>
		<tr>
			<td>Tom Sidwell</td>
			<td>Spectator</td>
			<td colspan="2">-</td>
			<td class="center"><a href="add.html">Edit</a> | <a href="#">Remove</a></td>

		</tr>
		<tr>
			<td>Anna Smith</td>
			<td>Spectator</td>
			<td colspan="2">-</td>
			<td class="center"><a href="add.html">Edit</a> | <a href="#">Remove</a></td>

		</tr>
		<tr>
			<td>David Ford</td>
			<td>Referee</td>
			<td colspan="2">-</td>
			<td class="center"><a href="add.html">Edit</a> | <a href="#">Remove</a></td>

		</tr>
	</tbody>
</table>
							<br>
							<div class="buttonrow">


								<form method="post" action="add.html"><button class="btn btn-black btn-login">Add Attendee</button></form>


							</div>
			
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