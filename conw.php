<?php
$link=mysqli_connect("localhost","root","123456") or die(mysqli_error($link));
mysqli_select_db($link,"finance") or die(mysqli_error($link));



?>