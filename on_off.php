<?
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', true);

if(isset($_POST['action'])){
	$action = $_POST['action'];
	//file_put_contents("on_off.txt", $action);
	file_put_contents("on_off.html", $action);
}

echo dirname(__FILE__);

$val = "on";	
$val = file_get_contents("on_off.html");
if($val == "off"){
	$action = "on";
	$text = 'The service is OFF now.';
	$button = "Turn it ON";
}else{
	$action = "off";
	$text = 'The service is ON now!';
	$button = "Turn it OFF";
}

?>
<!DOCTYPE html>
<html>
<body>
<div style="width:300px;border:1px solid red; margin:20px; padding:20px;">
	<form action="on_off.php" method="POST">
		<?=$text?>
		<input type="hidden" name="action" value="<?=$action?>">
		<br>
	  <input type="submit" style="margin-top:10px;" value="<?=$button?>">
	</form> 
</div>
</body>
</html>