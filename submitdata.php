<?php 
//print_r($_POST);
include('config.php');
if(!empty($_POST)){
	$name= $_POST['user_name'];
	$emailid= $_POST['user_emailid'];
	$mobile= $_POST['user_mobileno'];
	
	$url = 'http://172.16.5.58:81/REST-API/post_data.php';
	$data = json_encode(array(
	'name' => $name,
	'email' => $emailid,
	'mobile' => $mobile
	));
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	$result  = curl_exec($ch);
	echo $result;exit;
	curl_close($ch);
	
}
?>