<?php


//This is really not Secure.... 
header("Access-Control-Allow-Origin: *");//I allow all servers to request
header("Access-Control-Allow-Headers: *");//I allow all headers

if(isset($_POST)){
    $url = "http://crashpredictr-env.jjrxtdfaz3.us-east-2.elasticbeanstalk.com/predict/ALAMEDA";//I pull from ED CHIN
    $crashData = file_get_contents($url);
    echo $crashData;
}else if(isset($_GET)){
    $url = "http://crashpredictr-env.jjrxtdfaz3.us-east-2.elasticbeanstalk.com/predict/ALAMEDA";
    $crashData = file_get_contents($url);
    echo $crashData;
}else{
    return 'Post not set';
}