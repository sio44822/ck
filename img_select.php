<?PHP
include 'mysql_conf.php';
$dir="./設備圖片";
if(!empty($_POST['location'])){
	$dir=$dir."/".$_POST['location'];
}
//$dir=$dir."/"."103";
$file=scandir($dir);
$result=array();
for($i=2;$i<count($file);$i++){
	$object = new stdClass();
	$object->{"item"} = $file[$i];
	array_push($result,$object);
	//array_push($result,object($result->{'item'}=$file[$i]));
}


//ECHO json_encode($file, JSON_FORCE_OBJECT)
//print_r($result);
echo json_encode($result);
//print_r($object);


?>