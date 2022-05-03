<?php include_once("config.php"); ?>

<?php
if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
    $table = $_GET['table'];
    $page = $_GET['page'];

    $cek =   mysqli_query($con, "SELECT * FROM $table WHERE Id='$Id'") or die(mysqli_error($con));

    if (mysqli_num_rows($cek) > 0) {
        $delete = mysqli_query($con, "DELETE FROM $table WHERE Id='$Id'") or die(mysqli_error($con));
        if ($delete) {
            echo '<script>document.location="index.php?page=' . $page . '&status=1";</script>';
        } else {
            echo '<script>document.location="index.php?page=' . $page . '&status=2";</script>';
        }
    } else {
        echo '<script>document.location="index.php?page=' . $page . '&status=3";</script>';
    }
}
?>