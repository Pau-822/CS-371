<?php
include 'show_meetings.php'
?>


<html lang="en">
    <head>
        <title> Meeting Organizer </title>
        <link rel="stylesheet" type="text/css" href="homepage.css">
    </head>
    <body>
        <div class ="navigationBar">
            <a class="active" href="homepage.html">Home</a>
            <a href = "meetings.php"> Meetings</a>
            <a href = "new_meeting.php"> New Meeting</a>
            <a href="logout.php">Logout</a>
        </div>

        <div style="padding-left: 16px;">
            <h2>Meeting Scheduler</h2>
            <?php echo $html ?>
        </div>
        
    </body>
</html>