<?php 

session_start();

include_once '../db.php';

if(!empty($_POST)){

    $start = mysqli_real_escape_string($db, $_POST['start']);
    $end = mysqli_real_escape_string($db, $_POST['end']);
    $id = mysqli_real_escape_string($db, $_POST['id']);

    $tableName = $_SESSION['tableName'];

    $query = "UPDATE $tableName SET start_event='$start', end_event='$end' WHERE event_id='$id'";

    mysqli_query($db, $query);

}

?>