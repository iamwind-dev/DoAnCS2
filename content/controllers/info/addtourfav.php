<?php
include('lib/config/database.php');
include('lib/functions.php');
include('lib/models.php');
if (isset($_POST['idt'])) {
    $id = $_POST['idu'];

    $tourfv = array(
        'user_id' => $id,
        'tour_id' => $_POST['idt'],
    );
    insert('tourfav', $tourfv);
}