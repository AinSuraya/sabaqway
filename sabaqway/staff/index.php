<?php
require '../conn.php';

# kalau staff
if (!isset($_SESSION['staff'])) {
    header('location: ../logout.php');
}
?>
<!doctype html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SWK</title>
    <link rel="stylesheet" href="../nav.css">
    <style>
        * {
            font-family: Verdana, serif;
        }
    </style>
</head>
<body>

<h2><ul>
    <marquee direction="right" height="70" width="100%" bgcolor="pink" loop="20">
    <font face="times new roman" size="30" color="maroon"><center>SABAQWAY KITCHEN</font></center>
    </marquee>
    <li><a href="index.php?menu=senarai">Customer</a></li>
    <li><a href="index.php?menu=daftar">Register Menu</a></li>
    <li><a href="index.php?menu=katalaluan">Password</a></li>
    <li><a href="../logout.php">Logout</a></li>
</ul></h2>
<h3>Staff</h3><br>
<center><div>
    <?php
    $menu = 'senarai';
    if (isset($_GET['menu'])) $menu = $_GET['menu'];
    require "$menu.php";
    ?>
</div></center>
</body>
</html>