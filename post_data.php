<?php 
include('config.php');
$response = json_decode(file_get_contents('php://input'),true);
if(isset($response['name']) && (!empty($response['name']))){
	$name = $response['name']; 
}
if(isset($response['email']) && (!empty($response['email']))){
	$email = $response['email']; 
}
if(isset($response['mobile']) && (!empty($response['mobile']))){
	$mobile = $response['mobile']; 
}
 $sql_query = "INSERT INTO user (full_name,email_id,mobile_number) values('".$name."','".$email."','".$mobile."');";
//die;
$result = mysql_query($sql_query);
if($result){
	echo 'SUCCESS';
	}
else{
	echo 'FAIL';
}
?>