
<html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Community Bank Database </title>
        <link rel="stylesheet" type="text/css" href="homepage.css">
    </head>
    <body>
    <div class ="navigationBar">

            <a class="active" href="homepage.html">Home</a>
            <a href = "meetings.php"> Meetings</a>
            <a href = "new_meeting.php"> New Meeting</a>
            <a href="logout.php">Logout</a>
        </div>
        <div style="padding-left:16px">
            <h2>Create New Meeting</h2>
            <form method="post" action="add_meeting.php">
            <table>
                    <tr><td>Meeting Name: </td><td><input type="varchar" name="Meeting_Name"></td></tr>
                    <tr><td>Meeting Description: </td><td><input type="varchar" name="Meeting_Description"></td></tr>
                    <tr><td>Meeting DateTime: </td><td><input type="datetime" name="Meeting_DateTime"></td></tr>
                    <tr><td>Meeting Duration: </td><td><input type="int" name="Meeting_Duration"></td></tr>
                    <tr><td>Room ID: </td><td><input type="varchar" name="Meeting_Room_ID"></td></tr>                
                    <tr><td><input type="submit" value="Submit"></td><td></td>
                </table>
            </form>
        
        </div>
    </body>
    </html>
