<?php
include "config.php";
$param = [
'client_id'     =>$config['cilent_id'],
'redirect_url   =>$config['redirect_url'],
'scope'         =>$config['scope'],
];
$url_query = http_build_query($param);
$login_url = $config['auth_url'].'authorize?'.$url_query
?>
<a href="<?php echo $login_url?>">Sign Up</a>
