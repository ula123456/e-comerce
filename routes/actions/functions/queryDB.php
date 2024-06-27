<?php 

function Exe($sql){ 
	global $db;
	
	$statement = $db->prepare($sql);
	$result=$statement ->execute();
	return $result ;
            
            
}
function Execute($sql){ 
	global $db;
	
	$statement = $db->prepare($sql);
	$statement ->execute();
	$result[0] = $statement->fetch();
            
            return $result ;

}

function ExecuteNUM($sql){ 
	global $db;
	
	$statement = $db->prepare($sql);
	$statement ->execute();
	$result = $statement->fetchColumn();
            
            return $result ;

}

function whileData($sql)
{

	global $db;
	
	$dbh = $db->query($sql);
	if (!$dbh) {return  [];}
	$data_cat = [];
	while($row_cat = $dbh->fetch()) { $data_cat[]=$row_cat;	}
	
    return $data_cat;
}
