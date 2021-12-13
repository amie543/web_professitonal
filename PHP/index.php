<?php
    $request = $_SERVER['REQUEST_METHOD'];
    echo $request .'<br>';
    if($request=='GET'){
        print_r($_GET);
        echo '<br><br>Method is GET';
    }elseif($request=='POST'){
        echo 'Invalid Method<br> Your Request POST Method Not Allow';
    }elseif($request=='PUT'){
        echo 'Invalid Method<br> Your Request PUT Method Not Allow';
    }elseif($request=='DELETE'){
        echo 'Invalid Method<br> Your Request DELETE Method Not Allow';
    }else {
        echo 'Invalid Request';
    }
