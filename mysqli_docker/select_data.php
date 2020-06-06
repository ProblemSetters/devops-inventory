<?php
$db_host = getenv('MYSQL_HOSTNAME');
$db_root_user = getenv('MYSQL_ROOT_USER');
$db_root_password = getenv('MYSQL_ROOT_PASSWORD');
$db_name = getenv('MYSQL_DATABASE');

$conn = new mysqli($db_host, $db_root_user, $db_root_password, $db_name);

if($conn->connect_error)
{
    echo("Connection Failed: " . $conn->connect_error);
}
$sql = "select TaskName, TaskDescription, date_time FROM TaskList";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Task Name   | Task Description                          | Time Stamp <br>";
    while ($row = $result->fetch_assoc())
    {
        echo $row["TaskName"]." | ".$row["TaskDescription"] . "  |  " . $row["date_time"]. "<br>"; 
    }
}
else
{
    echo("0 Results");
}
$conn->close();
?>
