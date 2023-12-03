<?php
require_once('/DA/lib/models.php');
require_once('/DA/admin/models/category.php');
if (!empty($_POST)) {
    category_update();
}
$id = $_GET['id'];

$data = get_a_record('category',$id);
foreach($data as $e){
    echo $e['id'];
}
include('admin/views/category/edit.php');
