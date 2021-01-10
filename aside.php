<?php
//  error_reporting(0);
require_once 'functions.php';
?>

<!-- aside buttons -->
<aside>
    <div class="aside_form">
    <form method="POST">
       <br> 
<button name="login" value="LOGIN">LOGIN</button>
<button name="reg" value="REGISTER">REGISTER</button>
  <br>
  <!-- aside buttons -->


<!-- calling button values -->
<?php
require_once 'validation.php'; 
//extract($_POST);

if(isset($login))
{
   echo logi();
}
else if(@$reg)
{
    echo register();
}
else
{
    echo "";
}
?>
<!-- calling button values -->
</form> 
    </div>
</aside>



