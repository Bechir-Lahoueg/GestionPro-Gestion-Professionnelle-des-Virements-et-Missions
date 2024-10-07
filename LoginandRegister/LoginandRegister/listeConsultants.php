<?php
session_start();
include_once('connection.php');

// Retrieve list of users
$sql = "SELECT * FROM `tbl_user` ";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>List des consultants</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>";
                echo " <a href='deleteuser.php?id=" . $row['id'] . "' class='btn btn-danger'>Refuser</a>  | <a href='virement.php'>Faire un virement</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
        }
        ?>
    </table>
</body>

</html>
