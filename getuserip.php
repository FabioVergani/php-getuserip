<!DOCTYPE html>
<html>
 <head>
	<title>get-user-ip</title>
 </head>
 <body>
<?php
function get_user_ip(){
 $f=filter_var;
 $o=&$_SERVER;
 $b=FILTER_VALIDATE_IP;
 $i='HTTP_CLIENT_IP';
 $r=$o[$i];
 if(!$f($r,$b)){$i='HTTP_X_FORWARDED_FOR';$r=$o[$i];if(!$f($r,$b)){$i='REMOTE_ADDR';$r=$o[$i];};};
 return array($r,$i);
};
//
$ip=get_user_ip();
echo($ip[0].'-'.$ip[1]);
?>
 </body>
</html>
