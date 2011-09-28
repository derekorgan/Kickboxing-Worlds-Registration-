<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $attendee->getId() ?></td>
    </tr>
    <tr>
      <th>Division:</th>
      <td><?php echo $attendee->getDivisionId() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $attendee->getTypeId() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $attendee->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $attendee->getLastName() ?></td>
    </tr>
    <tr>
      <th>Accomodation:</th>
      <td><?php echo $attendee->getAccomodation() ?></td>
    </tr>
    <tr>
      <th>Sharing with:</th>
      <td><?php echo $attendee->getSharingWith() ?></td>
    </tr>
    <tr>
      <th>Flight datetime:</th>
      <td><?php echo $attendee->getFlightDatetime() ?></td>
    </tr>
    <tr>
      <th>Flight number:</th>
      <td><?php echo $attendee->getFlightNumber() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('attendee/edit?id='.$attendee->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('attendee/index') ?>">List</a>
