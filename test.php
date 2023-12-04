<?php
$sql = "INSERT INTO abc SET " . "; SELECT LAST_INSERT_ID();";
echo $sql;