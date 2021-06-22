<?php
require '../conn.php';

$idcustomer = $_POST['idcustomer'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['email'];

$sql = "UPDATE customer SET fullname=?, address=?, email=?  WHERE idcustomer=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssi', $fullname, $address, $email, $idcustomer);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');