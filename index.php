<?php
// Parse URL parameters
parse_str($_SERVER['QUERY_STRING'],$parameters);

// Read blacklist file
$blacklist = file('blacklists/'.$parameters['country'].'txt', FILE_IGNORE_NEW_LINES);

//Check if zone is blacklisted and redirect 
if(!in_array($parameters['zone'],$blacklist)) {
    header('Location: http://fast.linkssl.bid/'.str_replace('&zone','?zone',$_SERVER['QUERY_STRING']), true, 302);
    exit;
} else {
    header('Location: http://google.com', true, 302);
    exit;
}         
?>
