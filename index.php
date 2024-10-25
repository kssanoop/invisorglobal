<?php 
$page=@$_GET['page'];
if($page=='')
	$page='home';
include('header.php');
if($page=='home')
{
	include('home.php');
}
if($page=='zohobooks')
{
	include('zohobooks.php');
}

include('footer.php');
 ?>