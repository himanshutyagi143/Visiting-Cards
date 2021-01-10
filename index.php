<?php
 require_once 'config.php';
require_once 'head.php';
 
extract($_POST);

if(@$_GET['pid'] == 'page1')
{
    require_once('cards.php');
}
else if(@$_GET['pid'] == 'page2')
{
    require_once('services.php');
}
else
{
    require_once 'main.php';
 }



require_once 'aside.php';

require_once 'footer.php';



?>



