<?php

function post_without_wait($url, $params){
    foreach ($params as $key => &$val) {
    if (is_array($val)) $val = implode(',', $val);
        $post_params[] = $key.'='.urlencode($val);
    }
    $post_string = implode('&', $post_params);

    $parts=parse_url($url);
    $schema = '';
    $port= 80;

    if($parts['scheme'] == 'ssl'){
        $schema = $parts['scheme'].'://';
        $port = 443;
    }
    $fp = fsockopen($schema.$parts['host'],
        isset($parts['port'])?$parts['port']:$port,
        $errno, $errstr, 30);

    $out = "POST ".$parts['path']." HTTP/1.1\r\n";
    $out.= "Host: ".$parts['host']."\r\n";
    $out.= "Content-Type: application/x-www-form-urlencoded\r\n";
    $out.= "Content-Length: ".strlen($post_string)."\r\n";
    $out.= "Connection: Close\r\n\r\n";
    if (isset($post_string)) $out.= $post_string;

    fwrite($fp, $out);
    fclose($fp);
}


