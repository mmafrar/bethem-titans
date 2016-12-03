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
        <title>View </title>
    </head>
    <body>

        <h1 id="h">World Congress 2017 <small>Login</small></h1>

        <form class="form-horizontal" action="view">

            <br>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter your question here </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Eg:- What is static in Java?">
                    </div>
                </div>

                <div class="col-md-7">
                    <img src="Images/index.jpg" alt="..." class="img-rounded">
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-default">Ask Question</button>
                        <span class="glyphicon glyphicon-home"></span>
                        <a href="index.php" class="btn btn-large btn-primary">Home</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
