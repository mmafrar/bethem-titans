<!DOCTYPE html>
<?php require 'DatabaseConnection.php';?>
//Please send the eventId as the URL parameter to this password_get_info
<?php $sessionId = 1;?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WC2017";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `sessions` WHERE sessionId = $sessionId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_close($conn);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            html,body,head{
                margin: 0;
                padding: 0;
            }
            body{
                margin:20px;
                padding: 20px;
            }
            h1{
                text-align:center;
            }
            span{
                padding: 20px;
            }
        </style>


        <title>View </title>
    </head>
    <body>

        <h1 id="h">World Congress 2017 <small>Session Details</small></h1>

        <form class="form-horizontal" action="view">

            <br>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <h4>Event Details</h4>
                    <table class="table"><tr>
                            <td>Session Name</td>
                            <td><?php echo $row['sessionName'];?></td>
                        </tr> 
                        <tr>
                            <td>Starting At</td>
                            <td><?php echo $row['sessionTime'];?></td>
                        </tr>    
                         
                        <tr>
                            <td>Speaker</td>
                            <td><?php echo $row['PresenterName'];?></td>
                        </tr>    
                        <tr>
                            <td>Speaker Qualifications</td>
                            <td><?php echo $row['PresenterQual'];?></td>
                        </tr>   
                    </table>
                </div>

                <div class="col-md-7">
                    <img src="Images/index.jpg" alt="..." class="img-rounded">
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="index.php" class="btn btn-large btn-primary">Home</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>