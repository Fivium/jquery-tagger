<?php
	$aResult = array();
	$jsonresult = "";
	
	function namefilter($var) {
		return (stripos($var['suggestion'], $_GET['search']) !== false);
	}

	$aData = array(
		"1" => array("id"=>"1", "key"=>"Gerd Müller","suggestion"=>"Gerd Müller, Hamburg", "suggestable"=>"true"),
		"2" => array("id"=>"2", "key"=>"Hans Huber","suggestion"=>"Hans Huber, München","suggestable"=>"true"),
		"3" => array("id"=>"3", "key"=>"Gustav Schmidt","suggestion"=>"Gustav Schmidt, Berlin","suggestable"=>"true"),
		"4" => array("id"=>"4", "key"=>"Erwin Schumbladt","suggestion"=>"Erwin Schumbladt, Hannover","suggestable"=>"true")
	);
	
	if ($_GET['elementId'] == 'sel1') {
		$aResult = array_filter($aData, 'namefilter');
	}
	if (count($aResult) == 0) {
		$jsonresult = json_encode(json_decode("{}"));
	} else {
		$jsonresult = json_encode($aResult);
	}
	echo($jsonresult);
?>