<html>
<?php

  include 'header.php';
?>
<?php

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'error=empty') !== false){//checking for empty in the url
  echo "ERROR: TEXT FIELD EMPTY";
}
if(strpos($url, 'error=username') !== false){//checking for empty in the url
  echo "ERROR: USERNAME ALREADY EXISTS";
}

  if(isset($_SESSION['ID'])) {
    echo $_SESSION['ID'];
  } else {
    echo "<center>You are not logged in!</center>";
  }
?>
<br><br><br>
<?php
    echo "
    <div class = 'form-box'>
    <table>
          <center>
        <form action='includes/signupSeeker.inc.php' method='POST'>
        <tr><center>
        <td><strong>
           Part 2: Advanced Information
        </strong></td>
        </center></tr>
        <tr> 
          <td>
          Name:
          </td>
          <td>
          <input type='text'  class = 'form-t' placeholder='First Name' name='first'>
          </td>
          <td>
          <input type='text'  class = 'form-t' placeholder='Last Name' name='last'>
          </td>
        </tr>
        <tr>
         <td>
          Address:
          </td>
          <td>
          <input type='text' class = 'form-t' placeholder='Address' name='address'>
          </td>
          <td>
          <input type='text' class = 'form-t' placeholder='City' name='city'>
          </td>
        </tr>
        <tr>
        <td></td>
          <td>
          <input type='text' class = 'form-t' placeholder='Zip' name='zip'>
          </td>
          <td>
            <select class = 'form-st' name = 'state'>
                  <option value='' disabled selected>State</option>
                  <option value='AL'>Alabama</option>
                  <option value='AK'>Alaska</option>
                  <option value='AZ'>Arizona</option>
                  <option value='AR'>Arkansas</option>
                  <option value='CA'>California</option>
                  <option value='CO'>Colorado</option>
                  <option value='CT'>Connecticut</option>
                  <option value='DE'>Delaware</option>
                  <option value='DC'>District Of Columbia</option>
                  <option value='FL'>Florida</option>
                  <option value='GA'>Georgia</option>
                  <option value='HI'>Hawaii</option>
                  <option value='ID'>Idaho</option>
                  <option value='IL'>Illinois</option>
                  <option value='IN'>Indiana</option>
                  <option value='IA'>Iowa</option>
                  <option value='KS'>Kansas</option>
                  <option value='KY'>Kentucky</option>
                  <option value='LA'>Louisiana</option>
                  <option value='ME'>Maine</option>
                  <option value='MD'>Maryland</option>
                  <option value='MA'>Massachusetts</option>
                  <option value='MI'>Michigan</option>
                  <option value='MN'>Minnesota</option>
                  <option value='MS'>Mississippi</option>
                  <option value='MO'>Missouri</option>
                  <option value='MT'>Montana</option>
                  <option value='NE'>Nebraska</option>
                  <option value='NV'>Nevada</option>
                  <option value='NH'>New Hampshire</option>
                  <option value='NJ'>New Jersey</option>
                  <option value='NM'>New Mexico</option>
                  <option value='NY'>New York</option>
                  <option value='NC'>North Carolina</option>
                  <option value='ND'>North Dakota</option>
                  <option value='OH'>Ohio</option>
                  <option value='OK'>Oklahoma</option>
                  <option value='OR'>Oregon</option>
                  <option value='PA'>Pennsylvania</option>
                  <option value='RI'>Rhode Island</option>
                  <option value='SC'>South Carolina</option>
                  <option value='SD'>South Dakota</option>
                  <option value='TN'>Tennessee</option>
                  <option value='TX'>Texas</option>
                  <option value='UT'>Utah</option>
                  <option value='VT'>Vermont</option>
                  <option value='VA'>Virginia</option>
                  <option value='WA'>Washington</option>
                  <option value='WV'>West Virginia</option>
                  <option value='WI'>Wisconsin</option>
                  <option value='WY'>Wyoming</option>
              </select>
          </td>
        </tr>
        <tr>
          <td>
          Gender:
          </td>
          <td>
           Male <input type='radio' name='gender' value='male' checked> 
            Female <input type='radio' name='gender' value='female'> 
            Other <input type='radio' name='gender' value='other'> 
          </td>
        </tr>
        <tr>
          <td>
          Date Of Birth:
          </td>
          <td>
          <select class = 'form-s' name='DOBMonth'>
  <option>Month</option>
  <option value='January'>January</option>
  <option value='Febuary'>Febuary</option>
  <option value='March'>March</option>
  <option value='April'>April</option>
  <option value='May'>May</option>
  <option value='June'>June</option>
  <option value='July'>July</option>
  <option value='August'>August</option>
  <option value='September'>September</option>
  <option value='October'>October</option>
  <option value='November'>November</option>
  <option value='December'>December</option>
</select>

<select class = 'form-s' name='DOBDay'>
  <option>Day</option>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  <option value='6'>6</option>
  <option value='7'>7</option>
  <option value='8'>8</option>
  <option value='9'>9</option>
  <option value='10'>10</option>
  <option value='11'>11</option>
  <option value='12'>12</option>
  <option value='13'>13</option>
  <option value='14'>14</option>
  <option value='15'>15</option>
  <option value='16'>16</option>
  <option value='17'>17</option>
  <option value='18'>18</option>
  <option value='19'>19</option>
  <option value='20'>20</option>
  <option value='21'>21</option>
  <option value='22'>22</option>
  <option value='23'>23</option>
  <option value='24'>24</option>
  <option value='25'>25</option>
  <option value='26'>26</option>
  <option value='27'>27</option>
  <option value='28'>28</option>
  <option value='29'>29</option>
  <option value='30'>30</option>
  <option value='31'>31</option>
</select>

<select class = 'form-s' name='DOBYear'>
  <option>Year</option>
  <option value='1993'>1993</option>
  <option value='1992'>1992</option>
  <option value='1991'>1991</option>
  <option value='1990'>1990</option>
  <option value='1989'>1989</option>
  <option value='1988'>1988</option>
  <option value='1987'>1987</option>
  <option value='1986'>1986</option>
  <option value='1985'>1985</option>
</select>
          </td>
        </tr>
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

  ?>
</body>
</html>