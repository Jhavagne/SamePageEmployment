<html>
<?php

  include 'header.php';
?>
<?php

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'error=empty') !== false){//checking for empty in the url
  echo "<script> window.alert('All Fields are Required!') </script>";
}
if(strpos($url, 'error=username') !== false){//checking for empty in the url
  echo "<script> window.alert('Username Already Exists!') </script>";
}
if(strpos($url, 'error=pwnotequal') !== false){//checking for empty in the url
  echo "<script> window.alert('Passwords Must Match!') </script>";
}

  if(isset($_SESSION['ID'])) {
    echo $_SESSION['ID'];
  } else {
    echo "<center>You are not logged in!</center>";
  }
?>
<br><br><br>
<?php
  if(isset($_SESSION['ID'])) {
    echo "You are already logged in";
  } else {
    echo "
    <div class = 'form-box'>
    <table>
        <center>
        <form action='includes/signup.inc.php' method='POST'>
        <tr><center>
        <td><strong>
           Part 1: Basic Information
        </strong></td>
        </center></tr>
        <tr> 
          <td>
          Email Address:
          </td>
          <td>
          <input type='text'  class = 'form-t' placeholder='Email Address' name='email'>
          </td>
        </tr>
        <tr>
         <td>
          User Name:
          </td>
          <td>
          <input type='text' class = 'form-t' placeholder='User Name' name='uname'>
          </td>
        </tr>
        <tr>
          <td>
          Password:
          </td>
          <td>
          <input type='password' class = 'form-t' placeholder='Password' name='pwd'>
          </td>
        </tr>
        <tr>
          <td>
          Confirm Password:
          </td>
          <td>
          <input type='password'class = 'form-t' ' placeholder='Re-Enter Password ' name='pw2'>
          </td>
        </tr>
        <tr>
          <td>
          Account Type:
          </td>
          <td>
          Job Seeker
          <input type='radio' class = 'form-radio' name='type' value='seeker'>
          Employer Contact
          <input type='radio' class = 'form-radio'  name='type' value='employer'>
          Recruiter
          <input type='radio' class = 'form-radio'  name='type' value='recruiter'>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
          <center>
          <button class ='b' type = 'submit'>Proceed -></button>
          </center>
          </td><td></td>
        </tr>
        </form>
            <center>
      </table>
  </div><center>";
  }
  ?>
</body>
</html>