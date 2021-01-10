<?php
require_once 'validation.php';
function logi()
{
  
  echo "<br><br><br>
    <h1>LOGIN</h1><br>";
    echo "<input type='text' name='uname' placeholder='USERNAME'><br><br>";
echo "<input type='password' name='pwd' placeholder='PASSWORD'><br><br>";
echo "<input type='submit' name='sub' id='sub'>";
echo "<p class='notice_form'>";
echo @$msg;
}

function register()
{
    echo "<br><br><br>
    <h1>REGISTER</h1><br>";
    echo "<input type='email' name='uname' placeholder='EMAIL ID'><br><br>";
echo "<input type='password' name='pwd' placeholder='PASSWORD'><br><br>";
echo "<input type='number' name='phone' placeholder='MOBILE NUMBER'><br><br>";
echo "<input type='submit' name='sub_reg'>";
echo "<p class='notice_form'>";
echo @$msg;

}
?>


