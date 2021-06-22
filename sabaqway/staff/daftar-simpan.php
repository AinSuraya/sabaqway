<?php
require '../conn.php';

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = password_hash($username, PASSWORD_DEFAULT);
$address = $_POST['address'];
$email = $_POST['email'];

$sql = "INSERT INTO customer VALUES (null, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('sssss', $username, $fullname, $address, $email, $password);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, username ini telah wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location: index.php?menu=senarai');
}