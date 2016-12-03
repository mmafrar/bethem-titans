<?php
    session_start();
    require_once('connection.php');
    $message = "";
?>

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
            
            body{
                background-image: url("img/back.jpg")
            }
        </style>
        <title>World Congress - 2017</title>
    </head>
    <body>

        <h1 id="h">World Congress 2017 <small>Login</small></h1>

        <form method="post" class="form-horizontal" action="">

            <br>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name </label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                </div>

                <div class="col-md-7">
                    <img src="Images/index.jpg" alt="..." class="img-rounded">
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" name="submit" class="btn btn-default">Login</button>
                        <span class="glyphicon glyphicon-home"></span>
                        <a href="#" class="btn btn-large btn-primary">Home</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>

<?php

    if(isset($_POST["submit"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        // Querying the user table
        $sql = "SELECT username, password FROM User WHERE username='$username' AND password='$password'";
        $result = $connection->query($sql);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["username"]=$username;
            $message = "<font color=green> <br/> <b> Login Success </b> </font>";
            header("Location: UserDashboard.php");

        } else {
            $message = "<font color=red> <br/> <b> Wrong username or password.<br>Please try again.</b> </font>";
        }
    }

    echo "<br/>" . $message;

    // Close connection
    if(isset($connection)){
        $connection->close();
    }
?>