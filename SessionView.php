<!DOCTYPE html>

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
            button{
                width: 500px
            }
        </style>


        <title>View </title>
    </head>
    <body>

        <h1 id="h">World Congress 2017 <small>Session</small></h1>

        <form class="form-horizontal" action="view">

            <br>
            <br>
            <div class="row">
                <div class="col-md-6">

                    <button type="button" class="btn btn-default "><h4>Session 01 </h4> [09:00 - 10:00]  </button>
                    <button type="button" id="testBtn" class="btn btn-default glyphicon glyphicon-heart-empty " data-loading-text=" ... "></button>

                    <br>
                    <br>
                    <button type="button" class="btn btn-primary "><h4>Session 02 </h4> [10:00 - 11:30]</button>
                    <button type="button" id="testBtn" class="btn btn-default glyphicon glyphicon-heart-empty " data-loading-text=" ... "></button>

                    <br>
                    <br>
                    <button type="button" class="btn btn-success "><h4>Session 03 </h4>[11:30 - 12:30]</button>
                    <button type="button" id="testBtn" class="btn btn-default glyphicon glyphicon-heart-empty " data-loading-text=" ... "></button>

                    <br>
                    <br>
                    <button type="button" class="btn btn-info "><h4>Session 04 </h4> [12:30 - 14:00]</button>
                    <button type="button" id="testBtn" class="btn btn-default glyphicon glyphicon-heart-empty " data-loading-text=" ... "></button>

                    <br>
                    <br>
                    <button type="button" class="btn btn-warning "><h4>Session 05 </h4>[14:00 - 15:30]</button>
                    <button type="button" id="testBtn" class="btn btn-default glyphicon glyphicon-heart-empty " data-loading-text=" ... "></button>
                    <br>
                    <br>
                    <button type="button" class="btn btn-danger "><h4>Session 06 </h4> [15:30 - 17:00]</button>
                    <button type="button" id="testBtn" class="btn btn-default glyphicon glyphicon-heart-empty " data-loading-text=" ... "></button>
                    <br>
                    <br>
                    <button type="button" class="btn btn-default "><h4>Session 07 </h4> [17:00 - 18:00]</button>
                    <button type="button" id="testBtn" class="btn btn-default glyphicon glyphicon-heart-empty " data-loading-text=" ... "></button>
                    <br>
                    <br>
                    <button type="button" class="btn btn-info "><h4>Session 08 </h4>[18:00 - 19:00]</button>
                    <button type="button" id="testBtn" class="btn btn-default glyphicon glyphicon-heart-empty " data-loading-text=" ... "></button>


                </div>

                <div class="col-md-6">
                    <img src="Images/index.jpg" alt="..." class="img-rounded">
                    <br>

                    <span class="glyphicon glyphicon-home"></span>
                    <a href="#" class="btn btn-large btn-primary">Home</a>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">


                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

