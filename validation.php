<?php
extract($_POST);
if(isset($sub))
{
if($uname == '' and $pwd == '')
{
 $msg = "Please Enter All Details";
 }
else if($uname == '')
{
    $msg = "Please Enter Username";
}
else if($pwd == '')
{
    $msg = "Please Enter Password";
}
else
{
    if($uname == 'Himanshu' and $pwd == '12345')
    {
        header("location: profile.php");
    }
    else{
        $msg = "Username or Password is incorrect";
    }
}
}

if(isset($sub_reg))
{
    if($uname == '' and $pwd == '' and $phone == '')
    {
        $msg = "Please enter All Details";
    }
    else if($uname == '')
    {
        $msg = "Please Enter Username";
    }
    else if($pwd == '')
    {
        $msg = "Please Enter Password";
    }
    else if($phone == '')
    {
        $msg = "Please Enter Mobile Number";
    }
    else
    {
        $msg = "Thankyou";
    }
}
echo @$msg;
?>