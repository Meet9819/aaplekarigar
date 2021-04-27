<?php

//test_api.php

include('EApi.php');

$api_object = new EAPI();

if($_GET["action"] == 'fetch_all')
{
	$data = $api_object->fetch_all();
}



echo json_encode($data);

?>