

<form  method="post" action="">
  <table >
    <tr>
      <td>First Name:</td>
        <td><input type="text" name="fname" /></td>
      </tr>
    <tr>
      <td>Last Name:</td>
        <td><input type="text" name="lname" /></td>
      </tr>
    <tr>
      <td>Email:</td>
        <td><input type="email" name="Email" /></td>
      </tr>
     <tr>
      <td>Password:</td>
        <td><input type="password" name="password" /></td>
      </tr>
    <tr>
        <td><input type="submit" name="submit" value="Update" /></td>
      </tr>
  </table>
</form>

<?php
include ('user.php');
$user= new user();
$user->updateAccount();

?>