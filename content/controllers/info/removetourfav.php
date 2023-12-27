<?php

include('../../../lib/functions.php');
include('../../../lib/models.php');
if (isset($_POST['idt'])) {
    $id = $_POST['idu'];
    echo $id;
    echo $_POST['idt'];
    delete_tourfv($id, $_POST['idt']);
}
else {
    delete_tourfv($_SESSION['user']['id'], $_GET['idt']);
    header('Location: index.php?controller=info&action=tourfav');
}