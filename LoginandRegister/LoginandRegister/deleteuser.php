<?php
include_once('connection.php');

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "DELETE FROM tbl_user WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Mission deleted successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header('Location: listeConsultants.php');
    exit();
}
?>
