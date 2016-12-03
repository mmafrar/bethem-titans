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

        <h1 id="h">World Congress 2017 <small>Login</small></h1>

        <form class="form-horizontal" action="view">

            <br>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>

                <div class="col-md-7">
                    <img src="Images/index.jpg" alt="..." class="img-rounded">
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-default">Login</button>
                        <span class="glyphicon glyphicon-home"></span>
                        <a href="#" class="btn btn-large btn-primary">Home</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>