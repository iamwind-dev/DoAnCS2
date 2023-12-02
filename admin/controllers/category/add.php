<?php
require_once('/DA/lib/models.php');
require_once('/DA/admin/models/category.php');
if (!empty($_POST)) {
    
    category_add();
}

include('admin/views/category/add.php');
