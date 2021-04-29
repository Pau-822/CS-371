<?php

require_once 'connection.php';

$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (!$connection)
    die("Unable to connect to MySQL" .mysqli_error($connection));
session_start();
$user=$_SESSION["login"];
$query = "SELECT m.Meeting_ID,m.Meeting_Name,m.Meeting_Description,m.Meeting_DateTime,
m.Meeting_Duration,m.Meeting_Status_ID,ms.Meeting_Status_Name,m.Meeting_Room_ID,r.Capacity,
e.Employee_ID,e.UsrFirst_Name,e.UsrLast_Name
FROM meetings m 
inner join rooms r on (r.Room_ID=m.Meeting_Room_ID) 
inner join meeting_statuses ms on (ms.Meeting_Status_ID=m.Meeting_Status_ID) 
inner join employee e on (e.Employee_ID=m.Organizer_ID) 
WHERE e.Employee_ID='$user'";
$result = mysqli_query($connection,$query);



if (!$result)
    die("Database access failed: " . mysqli_error($connection));

$html = "";


while ($row = mysqli_fetch_assoc($result)) {
    $html.="Meeting ID: " . $row['Meeting_ID'] . "<br>";
    $html.="Meeting Name: " . $row['Meeting_Name'] . "<br>";
    $html.="Meeting Description: " . $row['Meeting_Description'] . "<br>";
    $html.="Meeting DateTime: " . $row['Meeting_DateTime'] . "<br>";
    $html.="Meeting Duration: " . $row['Meeting_Duration'] . "<br>";
    $html.="Meeting Status ID: " . $row['Meeting_Status_ID'] . " " . $row['Meeting_Status_Name'] . "<br>";
    $html.="Meeting Room ID: " . $row['Meeting_Room_ID'] . " Capacity: " . $row['Capacity'] . " people" . "<br>";
    $html.="Organizer ID: " . $row['Employee_ID'] . " " . $row['UsrFirst_Name'] . " " . $row['UsrLast_Name'] . "<br>";    
    $html.="<br><br>";}



mysqli_close($connection);


?>