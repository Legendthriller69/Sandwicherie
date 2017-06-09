<?php
include_once('config.inc.php');
include_once('constante.php');


function getConnexion() {

	global $pdo;
	
	if($pdo == null) {
		try {
			$pdo = new PDO(DSN,USER,PASS);
			$pdo->exec('SET NAMES utf8');
		}
		catch (PDOException  $e){
			die('<div align="center" class="alert alert-danger">
					<h1>Error</h1>
					<h3>Can\'t connect to database</h3>
				</div>');
		}
	}
	
	return $pdo;
}

function get($query, $data = null)
{
	$bdd = getConnexion();
	
	
	if($data == null)
	{
		$request = $bdd->query($query);
		
		return $request->fetchAll(PDO::FETCH_ASSOC);
	}
	else
	{
		$request = $bdd->prepare($query);
		
		$request->execute($data);
		
		return $request->fetchAll(PDO::FETCH_ASSOC);
	}

	
}

function add($datas, $table){
	$bdd = getConnexion(); //on ouvre la connexion ? la base de donn?es

	foreach($datas as $key => $value){
		$keys[] = $key;
		$values[] = $value;
	}

	$strSQL = "INSERT INTO ".$table." (";
	foreach($keys as $ky => $k){
		$strSQL .= $k . ",";
	}

	$strSQL = substr($strSQL,0,-1) . ") VALUES(";
	foreach($values as $vl => $v){
		$strSQL .= "?,";
	}

	$strSQL = substr($strSQL,0,-1) . ")";

	$query = $bdd->prepare($strSQL);
	if($query->execute($values)) return $bdd->lastInsertId();
	else return false;
}

function update($id, $datas, $table){

	//Connect to the database
	$bdd = getConnexion();
	
	//Put values and keys in differents arrays
	foreach($datas as $key => $value){
		$keys[] = $key;
		$values[] = $value;
	}

	$query = "UPDATE ".$table." SET ";
	
	//Add all table in the query
	foreach($datas as $key => $value){
		$query .= $key . " = ?,";
	} 
	
	// substr($query,0,-1) -> remove the last ','
	$query = substr($query,0,-1) . " WHERE id = ?";
	
	$values[] = $id;
	
	$data = $bdd->prepare($query);
	
	if($data->execute($values)) return true;
	else return false;
}

function delete($id, $table){
	$bdd = getConnexion();
	
	$query = "DELETE FROM ".$table." WHERE id = ?";
	
	$data = $bdd->prepare($query);
	
	if($data->execute(array($id))) return true;
	else return false;
}

if(!function_exists('mime_content_type')) {
function mime_content_type($filename) {

	$mime_types = array(
		
		// video
		'mp4' => 'video/mp4',
		'mov' => 'video/quicktime',
		'ogg' => 'video/ogg',
		'avi' => 'video/x-msvideo',
		'mkv' => 'video/x-matroska',
		
		// audio/video
		'mp3' => 'audio/mpeg',
		'qt' => 'video/quicktime',
		'mov' => 'video/quicktime',

	);

	$ext = strtolower(array_pop(explode('.',$filename)));
	if (array_key_exists($ext, $mime_types)) {
		return $mime_types[$ext];
	}
	elseif (function_exists('finfo_open')) {
		$finfo = finfo_open(FILEINFO_MIME);
		$mimetype = finfo_file($finfo, $filename);
		finfo_close($finfo);
		return $mimetype;
	}
	else {
		return 'application/octet-stream';
	}
}
}

function normalizePath($path)
{
    $parts = array();// Array to build a new path from the good parts
    $path = str_replace('\\', '/', $path);// Replace backslashes with forwardslashes
    $path = preg_replace('/\/+/', '/', $path);// Combine multiple slashes into a single slash
    $segments = explode('/', $path);// Collect path segments
    $test = '';// Initialize testing variable
    foreach($segments as $segment)
    {
        if($segment != '.')
        {
            $test = array_pop($parts);
            if(is_null($test))
                $parts[] = $segment;
            else if($segment == '..')
            {
                if($test == '..')
                    $parts[] = $test;

                if($test == '..' || $test == '')
                    $parts[] = $segment;
            }
            else
            {
                $parts[] = $test;
                $parts[] = $segment;
            }
        }
    }
    return implode('/', $parts);
}

function error_404(){
	return '<div align="center" class="alert alert-danger">
				<h1>404 Error</h1>
				<h3>Page not found</h3>
			</div>';
}

function check_input($data) {
	if (isset($data) && !empty($data))
	{ 
		return $data;
	}
	else 
	{
		return false;
	}
}