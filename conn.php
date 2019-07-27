<?php
$con = mysqli_connect("localhost","root","","intrenship");
if(mysqli_connect_errno())
{
	echo "failed to connect to mysql: ".
	mysli_connect_error();
}
?>