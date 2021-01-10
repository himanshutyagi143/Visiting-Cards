<?php

if(@$key == null)
{
    echo "Page Not Found";
}
else
{

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Card</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
<a href="./"><img src="image/1.png"></a>

<p class="head_socio">
<a href="#">Visiting Cards</a>
&nbsp;&nbsp;||&nbsp;&nbsp;
<a href="#">Birthday Cards</a>
&nbsp;&nbsp;||&nbsp;&nbsp;
<a href="#">New Year Cards</a>
</p>
</header>

<nav>

<ul>
    <li><a href="./">HOME</a></li>
    <li><a href="?pid=page1">CARDS</a></li>
    <li><a href="?pid=page2">SERVICES</a></li>
    <li><a href="?pid=page3">PRICING</a></li>
    <li><a href="?pid=page4">CONTACT US</a></li>
</ul>
</nav>

<section>
<?php
}
?>




