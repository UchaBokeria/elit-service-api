<?php

trait CallScheme
{

    public static function CheckParameters()
    {

        $RequiredFields = RequireFields(["phone"]);
        
        if(!$RequiredFields["missing"]) HttpBadRequest($RequiredFields["msg"]);

        if(!is_string($_POST["phone"])) HttpBadRequest("Phone - Parameter Must Be String");

    }

}