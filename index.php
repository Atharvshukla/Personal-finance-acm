<html>
<head>
<title>Personal Finance</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale-1">
<link href="css/global.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form class="formcon" action="login.php" method="post">
                <h1>Personal Finance</h1>
                <h2>Login</h2>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="user" class="form-control" placeholder="Enter Username" requiered>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control"  placeholder="Password" requiered>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <a class="btn btn-warning btn-block" href="register.html" role="button" >Register</a>
                <a class="btn btn-warning btn-block" href="finance.php" role="button" >Finance</a>
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>

</div>
</html>