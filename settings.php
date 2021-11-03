<?php 
ob_start();
if(!isset($_SESSION))
{
    session_start();
}
require_once 'nedmin/netting/class.crud.php';
$db=new crud();


//1.Kullanım
// $sql=$db->read("settings");


//2.Özel Kullanım
$sql=$db->qSql("SELECT * FROM settings");



$row=$sql->fetchAll(PDO::FETCH_ASSOC);
foreach ($row as $key) {
	$settings[$key['settings_key']]=$key['settings_value'];

	//echo $key['settings_key']."-->".$key['settings_value']."<br>";

}



 ?>