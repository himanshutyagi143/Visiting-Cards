<?php
require_once 'head.php';

 @$a = $_REQUEST['color'];

?>
<table border="1px" width="80%" style="text-align: center; margin: 0 auto; height: 500px;">
    <tr>
        <td width="35%">
            <form method="POST">
                <br>
                <h1>Visiting Card Details</h1>
                <input type="text" name="name" placeholder="Enter name"><br><br>
                <input type="email" name="email" placeholder="email"><br><br>
            <input type="number" name="number" placeholder="Mobile no."><br><br>
               
                <input type="submit" value="Update data" name="sub">
                    </form>
        </td>
        <td width="40%">
            <?php
            extract($_POST);
            ?>
<div class="box" style=" color: #fff; border: 1px solid; width: 63%; margin: 0 auto; height: 200px; background-color: <?php echo $a; ?>; ">

<?php
extract($_POST);
if(isset($_POST['sub']))
{
    echo '<br>';
    echo $name;
    echo '<br><br>';
    echo $email;
    echo '<br><br>';
    echo $number;
 
}
else
{
    echo "no results";
}
?>
    </div>
        </td>
    </tr>
</table>
<?php
require_once 'footer.php';
?>

