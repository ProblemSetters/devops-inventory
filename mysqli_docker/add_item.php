<?php
$db_host = getenv('MYSQL_HOSTNAME');
$db_root_user = getenv('MYSQL_ROOT_USER');
$db_root_password = getenv('MYSQL_ROOT_PASSWORD');
$db_name = getenv('MYSQL_DATABASE');

$conn = new mysqli($db_host,$db_root_user,$db_root_password,$db_name);

if ($conn->connect_error)
{
    echo("Connection Failed: ". $conn->connect_error);
}

$sql = "INSERT INTO TaskList (TaskName,TaskDescription)
        VALUES (
            'Insert Data',
            'Insert Data into MySQL DB using PHP'
        )";

if ($conn->query($sql) === TRUE)
{
    echo "Inserted Data SuccessFully";
}
else {
    echo "Error: ".$sql. "<br>" . $conn->error;
}

$conn->close();
?>
