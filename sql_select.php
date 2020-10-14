<?php
include "mysql_conf.php";
//id,tag,product,product_type,purchase_date,supplier,location,remark
/*
if(isset($_POST['id']))
	$id=$_POST['id'];
	array_push($key,"id");
	array_push($modify,$id);
if(isset($_POST['product']))
$product=$_POST['product'];
*/
$id;
//$product="DELL OptiPlex 9020 SFF";
$tag;
$product;
$product_type;
$purchase_date;
$supplier;
$location;
$key=array();
$modify=array();

if(isset($_POST['id'])){
	array_push($key,"id");
	array_push($modify,$_POST['id']);
}
if(!empty($_POST['tag'])){
	array_push($key,"tag");
	array_push($modify,$_POST['tag']);
}
if(!empty($_POST['product'])){
	array_push($key,"product");
	array_push($modify,$_POST['product']);
}
if(!empty($_POST['product_type'])){
	array_push($key,"product_type");
	array_push($modify,$product_type);
}
if(!empty($_POST['purchase_date'])){
	array_push($key,"purchase_date");
	array_push($modify,$_POST['purchase_date']);
}
if(!empty($_POST['supplier'])){
	array_push($key,"supplier");
	array_push($modify,$_POST['supplier']);
}
if(!empty($_POST['location'])){
	array_push($key,"location");
	array_push($modify,$_POST['location']);
}

function select($conn,$key,$modify){
	$query="select * from device where ";
	for($i=0;$i<count($key);$i++){

		if($i==0){
			if ($key[$i]=="purchase_date"){
				$query=$query." `".$key[$i]."` >= '".$modify[$i]."'";
			}else{
				$query=$query."`".$key[$i]."` LIKE '%".$modify[$i]."%'";
			}
		}else{
			if ($key[$i]=="purchase_date"){
				$query=$query." `".$key[$i]."` >= '".$modify[$i]."'";
			}
			else{
				$query=$query." AND `".$key[$i]."` LIKE '%".$modify[$i]."%'";

			}
		}
	}
	$query=$query."order by 'location' ASC";
	//echo "</br>".$query;
/*<JSON>result
	$sth = mysqli_query($conn,$query);
	$rows = array();
	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	print json_encode($rows);
	$conn->close();*/
//	<td> result
	$result = $conn->query($query);
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo  "<tr><td>".$row["location"]. "\t"."</td><td>".$row["tag"]. "\t"."</td>" ."<td>".$row["product"]. "</td>" ."\t"."<td>".$row["purchase_date"]. "\t"."</td>" ."<td>".$row["supplier"]."\t"."</td></tr>";
	  }
	} else {
	  echo "<tr><td>NO RESULT</td></tr>";
	}
	$conn->close();
}

if (count($key)>0)
	select($conn,$key,$modify);
else{

	$query="select * from device order by 'location' ASC";
	$result = $conn->query($query);
	while($row = $result->fetch_assoc()) {
	    echo  "<tr><td>".$row["location"]. "\t"."</td><td>".$row["tag"]. "</td>" ."\t"."<td>".$row["product"]. "</td>" ."\t"."<td>".$row["purchase_date"]. "</td>" ."\t"."<td>".$row["supplier"]."\t"."</td></tr>";
	  }
	 
	$conn->close();
}


?>