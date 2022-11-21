<?php

$server_domain=$_SERVER["SERVER_NAME"];
$server_ip=$_SERVER['SERVER_ADDR'];
$server_hostname=gethostname();

echo "서버 도메인 : ".$server_domain."<br>";
echo "서버 호스트명 : ".$server_hostname."<br>";
echo "서버 아이피 : ".$server_ip."<br>";
echo "현재 일시 : ".date("Y-m-d H:i:s")."<br/>";

?>