<?php
require '../conn.php';

$kata1 = $_POST['kata1'];
$kata2 = $_POST['kata2'];
$kata3 = $_POST['kata3'];

if ($kata2 != $kata3) {
    ?>
    <script>
        alert('Maaf, sila pastikan kata laluan baru sama dengan ulang kata laluan baru.');
        window.location = 'index.php?menu=katalaluan';
    </script>
    <?php
} else {
    $sql = "SELECT * FROM staff";
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($kata1, $row->staffpassword)) {
        $password = password_hash($kata2, PASSWORD_DEFAULT);
        $sql = "UPDATE staff SET staffpassword = '$password'";
        $conn->query($sql);
        ?>
        <script>
            alert('Kata laluan baru telah berjaya disimpan.');
            window.location = 'index.php?menu=katalaluan';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Maaf, sila pastikan kata laluan asal salah.');
            window.location = 'index.php?menu=katalaluan';
        </script>
        <?php
    }
}