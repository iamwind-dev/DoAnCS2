<?php
if (!empty($_FILES['file']['tmp_name'])) {
    echo $_FILES['file']['name'];
}
else {
    echo $_POST['image'];
}