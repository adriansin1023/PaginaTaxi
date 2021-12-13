<?php
function db_query($query) {
    $connection = mysqli_connect("localhost","id16980624_jesus","2y^Pz-S3Vx_Gi0ri","id16980624_programa_wep");
   
    
    
    $result = mysqli_query($connection,$query);

    return $result;
}

function edit($tblname,$form_data,$field_id,$id){
	$sql = "UPDATE ".$tblname." SET ";
	$data = array();

	foreach($form_data as $column=>$value){

		$data[] =$column."="."'".$value."'";

	}
	$sql.= implode(',',$data);
	$sql.=" where ".$field_id." = ".$id."";

	return db_query($sql); 
}
function select_id($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);
	return $sql;

}
function delete($tblname,$field_id,$id){

	$sql = "delete from ".$tblname." where ".$field_id."=".$id."";
	
	return db_query($sql);
}

?>