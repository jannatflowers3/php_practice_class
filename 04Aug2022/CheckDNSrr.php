<?php

$domain = "prothomalo.com";
$record = checkdnsrr($domain,"MX");

if($record){
    echo "the domain '$domain' has a DNS record";
}
else {
    echo "the domain '$domain' has no DNS server record";
}
?>