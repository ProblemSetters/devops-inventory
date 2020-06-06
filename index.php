<?php
$php_dir = "./mysqli_docker/";

include $php_dir."connect_db.php";
echo '<br>';
include $php_dir."create_db.php";
echo '<br>';
include $php_dir."create_table.php";
echo '<br>';
include $php_dir."add_item.php";
echo '<br>';
include $php_dir."select_data.php";
echo '<br>';
?>