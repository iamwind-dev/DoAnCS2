<?php
require_once('/DA/lib/models.php');
require_once('/DA/admin/models/category.php');
if (!empty($_POST)) {
    category_update();
}
$id = $_GET['id'];
$idType='category_id';
$data = get_a_record('category',$id,$idType);
include('admin/views/category/edit.php');
