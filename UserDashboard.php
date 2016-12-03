<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        html,
        body,
        head {
            margin: 0;
            padding: 0;
        }
        
        body {
            margin: 20px;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        span {
            padding: 20px;
        }
        
        .vote-count {
            float: right;
            font-size: 23px;
        }
    </style>


    <title>View </title>
</head>

<body>

    <h1 id="h">World Congress 2017 <small>My Dashboard</small></h1>

    <form class="form-horizontal" action="view">

        <br>
        <br>
        <div class="row">
            <div class="col-md-5">
                <h4>My Stats</h4>
                <table class="table">
                    <tr>
                        <td>No. of Questions Asked</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>No. of Questions Answered</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Joined On</td>
                        <td>2016-08-12</td>
                    </tr>
                </table>
                <h4>My Sessions</h4>
                <p><a href="Fav.php">Favorite Sessions</a></p>
                <p><a href="Fav.php">Visited Sessions</a></p>
                <h4>My Questions</h4>
                <div class="panel panel-default">
                    <div class="panel-body"><strong>How to print hello in PHP?</strong>
                        <p>Asked On 2016-08-25</p>
                        <strong>15 users upvoted this</strong>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body"><strong>How to print hello in PHP?</strong>
                        <p>Asked On 2016-08-25</p>
                        <strong>15 users upvoted this</strong>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body"><strong>How to print hello in PHP?</strong>
                        <p>Asked On 2016-08-25</p>
                        <strong>15 users upvoted this</strong>
                    </div>
                </div>

            </div>

            <div class="col-md-7">
                <img src="Images/index.jpg" alt="..." class="img-rounded">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="#" class="btn btn-large btn-primary">Home</a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>