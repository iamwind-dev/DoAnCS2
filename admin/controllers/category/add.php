<?php
require_once('lib/models.php');
require_once('admin/models/category.php');
if (!empty($_POST)) {

    category_add();
}

include('admin/views/category/add.php');
