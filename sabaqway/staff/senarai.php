<h1>Customer List</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM customer ORDER BY username";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->fullname; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->email; ?></td>
            <td>
                <a href="reset.php?idcustomer=<?php echo $row->idcustomer; ?>">Reset</a>
                |
                <a href="index.php?menu=edit&idcustomer=<?php echo $row->idcustomer; ?>">Edit</a>
                |
                <a href="padam.php?idcustomer=<?php echo $row->idcustomer; ?>">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>