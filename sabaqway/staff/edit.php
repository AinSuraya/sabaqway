<?php
$idcustomer = $_GET['idcustomer'];
$sql = "SELECT username, fullname, address, email, custpassword FROM customer WHERE idcustomer = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idcustomer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username, $fullname, $address, $email, $password);
$stmt->fetch();
$stmt->close();
?>
<h1>Edit Customer</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idcustomer" value="<?php echo $idcustomer; ?>">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" value="<?php echo $username; ?>" readonly></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="fullname" value="<?php echo $fullname; ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>