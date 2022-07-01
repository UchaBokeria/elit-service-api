<?php

/* Learn Configs */
Learn('Configs', "json", function($dir,$filename) {
    $parameters = json_decode(file_get_contents("./$dir/$filename"),true);
    foreach ($parameters as $key => $value) define(strtoupper($key), $value);
    define('payment_required', 1);
    
    var_dump(payment_required); 
});