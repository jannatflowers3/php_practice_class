<?php
$http = fsockopen("www.prothomalo.com",80);
$req = "GET/HTTP/1.1";
$req .= "Host:wwww.example.com\r\n";
$req.= "Connection :Close\r\r\n";

fputs($http,$req);

while(!feof($http)){
    echo fgets($http,1024);
}
fclose($http);

?>