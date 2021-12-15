<?php
    $request = $_SERVER['REQUEST_METHOD'];
    echo $request .'<br>';
    print_r($_REQUEST['name']);