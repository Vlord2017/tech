<?php
//core
function dbcon(){
	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "thesis";
    return $koneksidb	= mysqli_connect($host,$user,$pass,$db);
   
   
   if (! $koneksidb) {
  echo "Fallo en la Conexion !";
}
mysqli_select_db($koneksidb,$db)
	 or die ("Base de Datos no encontrada, porfavor ponganse en contacto con el administrador del sistema!");
	/**
	/**
 * mysql_connect($host,$user,$pass);
 * 	mysql_select_db($db);
 */
}

function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/thesis/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/thesis/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
