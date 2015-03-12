<!DOCTYPE html>
<html>
 <head>
	<title>get-user-ip</title>
 </head>
 <body>
<?php
function get_user_ip(){
 $r=null;
 function f(&$m,$i){$v=$_SERVER[$i];$m[0]=$v;$m[1]=$i;return !filter_var($v,275);};//FILTER_VALIDATE_IP
 if(f($r,'HTTP_CLIENT_IP')){if(f($r,'HTTP_X_FORWARDED_FOR')){f($r,'REMOTE_ADDR');};};
 return $r;
};

//trace(get_user_ip());
?>
 </body>
</html>
