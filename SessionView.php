<?php

    include_once 'connection.php';
    $query="SELECT * FROM Sessions";

    $result=mysqli_query($connection,$query);

    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

}


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
        </style>


        <title>View </title>
    </head>
    <body>

        <h1 id="h">World Congress 2017 <small>Session</small></h1>

        <form class="form-horizontal" action="view">

            <br>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <?
                    $query="SELECT * FROM Sessions";

                    $result=mysqli_query($connection,$query);

                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo "<button onclick=\"location.href='SessionDetails?sesID={$row['sessionID']}'\" type=\"button\" class=\"btn btn-default btn-block\"><h4>{$row['sessionName']}</h4>{$row['sessionTime']}</button>
                              <button onclick=\"location . href = 'SessionDetails?sesID={$row['sessionID']}&uname={$row['username']}'\" type=\"button\" id=\"testBtn\" class=\"btn btn-default glyphicon glyphicon-heart-empty \" data-loading-text=\" ... \"></button>

                               ";
                    }
                    ?>

<!--                    <br>-->
<!--                    <button type="button" class="btn btn-primary btn-block"><h4>Session 02 </h4> [10:00 - 11:30]</button>-->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <button type="button" class="btn btn-success btn-block"><h4>Session 03 </h4>[11:30 - 12:30]</button>-->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <button type="button" class="btn btn-info btn-block"><h4>Session 04 </h4> [12:30 - 14:00]</button>-->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <button type="button" class="btn btn-warning btn-block"><h4>Session 05 </h4>[14:00 - 15:30]</button>-->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <button type="button" class="btn btn-danger btn-block"><h4>Session 06 </h4> [15:30 - 17:00]</button>-->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <button type="button" class="btn btn-default btn-block"><h4>Session 07 </h4> [17:00 - 18:00]</button>-->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <button type="button" class="btn btn-info btn-block"><h4>Session 08 </h4>[18:00 - 19:00]</button>-->
                </div>

                <div class="col-md-7">
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
