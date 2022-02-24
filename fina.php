<?php
include"conw.php";

?>
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
            <form class="formcon" action="" method="post">
                <h1>Personal Finance</h1>
                <div class="form-group">
                  <label>Salary</label>
                  <input type="text" name="salary" id="salary" class="form-control" placeholder="Enter Your Salary" requiered>
                </div>
				<div class="form-group">
                  <label>Expenses</label>
                  <input type="text" name="expens" id="expens" class="form-control" placeholder="Enter Your Expenses" requiered>
                </div>
               <div class="form-group">
                  <label>Saving</label>
                  <input type="text" name="saving" id="saving" class="form-control" placeholder="Enter Your Savings" requiered>
                </div>
				<div class="form-group">
                  <label>Investment</label>
                  <input type="text" name="invest" id="invest" class="form-control" placeholder="Enter Investment" requiered>
                </div>
                <button type="submit" name="insert"class="btn btn-primary btn-block">Insert</button>
				<button type="submit" name="update"class="btn btn-primary btn-block">Update</button>
				<button type="submit" name="delete"class="btn btn-primary btn-block">Delete</button>
               
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
		<h1></h1>
		</div>
    </div>

</div>
<?php
if(isset($_POST["insert"]))
{
	mysqli_query($link,"insert into table values(NULL,'$POST[salary]','$POST[expens]','$POST[saving]','$POST[invest]')");
}
?>
</html>