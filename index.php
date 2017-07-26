<?php
$goodURL = 'http://fast.linkssl.bid/'.str_replace('&zone','?zone',$_SERVER['QUERY_STRING']);
$badURL = 'http://google.com/';

// Read blacklist file into array $parameters, redirect if failed
parse_str($_SERVER['QUERY_STRING'],$parameters);
$file = 'blacklists/'.$parameters['country'].'.txt';
if (file_exists ($file)) {
    $blacklist = file($file, FILE_IGNORE_NEW_LINES);
} else {
    header('Location: '.$badURL, true, 302);
    exit;    
}

//Check if zone is blacklisted & redirect accordingly 
if(!in_array($parameters['zone'],$blacklist)) {
    header('Location: '.$goodURL, true, 302);
    exit;
} else {
    header('Location: '.$badURL, true, 302);
    exit;
} 
?>
