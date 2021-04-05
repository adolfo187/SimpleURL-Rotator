<?php
$urls = array(
    '1' => 'https://www.google.com', // URL DEFAULT
    '2' => 'https://github.com',
    '3' => 'http://stackoverflow.com'
);

$cookie_name = 'clkads';
if(!isset($_COOKIE[$cookie_name])){
    setcookie($cookie_name,'2', time() + 1800);
    $click = 1;
}else{
    $vez = $_COOKIE[$cookie_name] + 1;
    setcookie($cookie_name,$vez,time()+ 1800);
    $click = $_COOKIE[$cookie_name];
}

switch($click){
    case 2:
        header("Location: " . $urls[2]);
        die();
    break;
    
    case 3:
        header("Location: " . $urls[3]);
        die();
    break;

    default:
    header("Location: " .  $urls[1]);
die();
}
?>
