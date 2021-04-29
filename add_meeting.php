<?php
require_once 'connection.php';//include the connection file

$Meeting_Name=isset($_POST['Meeting_Name'])?$_POST['Meeting_Name']:"";
$Meeting_Description=isset($_POST['Meeting_Description'])?$_POST['Meeting_Description']:"";
$Meeting_DateTime=isset($_POST['Meeting_DateTime'])?$_POST['Meeting_DateTime']:"";
$Meeting_Duration=isset($_POST['Meeting_Duration'])?$_POST['Meeting_Duration']:"";
$Meeting_Room_ID=isset($_POST['Meeting_Room_ID'])?$_POST['Meeting_Room_ID']:"";
session_start();
$user=$_SESSION["login"];


$SQL = "INSERT INTO `meetings`( `Meeting_Name`, `Meeting_Description`, `Meeting_DateTime`, `Meeting_Duration`, `Meeting_Status_ID`, `Meeting_Room_ID`, `Organizer_ID`) VALUES (";
$SQL.="'".$Meeting_Name."', '".$Meeting_Description."', '".$Meeting_DateTime."', '".$Meeting_Duration."', '01', '".$Meeting_Room_ID."', '".$user."')";
$result = mysqli_query($connection,$SQL);

if (!$result) //if the query fails
    die("Database access failed: " . mysqli_error($connection));

    if($Meeting_Name !='')
    {
    header("Location:record_added_successfully.php");
    }

?>