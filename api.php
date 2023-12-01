<?php
if (!empty($_FILES['file']['tmp_name'])) {
    echo 'có';
}
else {
    echo 'không có';
}