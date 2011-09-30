<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $attendee->getId() ?></td>
    </tr>
    <tr>
      <th>Profile:</th>
      <td><?php echo $attendee->getProfileId() ?></td>
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
      <th>Sex:</th>
      <td><?php echo $attendee->getSex() ?></td>
    </tr>
    <tr>
      <th>Club name:</th>
      <td><?php echo $attendee->getClubName() ?></td>
    </tr>
    <tr>
      <th>Accomodation:</th>
      <td><?php echo $attendee->getAccomodation() ?></td>
    </tr>
    <tr>
      <th>Sharing with1:</th>
      <td><?php echo $attendee->getSharingWith1() ?></td>
    </tr>
    <tr>
      <th>Sharing with2:</th>
      <td><?php echo $attendee->getSharingWith2() ?></td>
    </tr>
    <tr>
      <th>Flight datetime:</th>
      <td><?php echo $attendee->getFlightDatetime() ?></td>
    </tr>
    <tr>
      <th>Flight time:</th>
      <td><?php echo $attendee->getFlightTime() ?></td>
    </tr>
    <tr>
      <th>Flight number:</th>
      <td><?php echo $attendee->getFlightNumber() ?></td>
    </tr>
    <tr>
      <th>Visa:</th>
      <td><?php echo $attendee->getVisa() ?></td>
    </tr>
    <tr>
      <th>Dob:</th>
      <td><?php echo $attendee->getDob() ?></td>
    </tr>
    <tr>
      <th>Passport:</th>
      <td><?php echo $attendee->getPassport() ?></td>
    </tr>
    <tr>
      <th>Expiry date:</th>
      <td><?php echo $attendee->getExpiryDate() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('attendee/edit?id='.$attendee->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('attendee/index') ?>">List</a>
