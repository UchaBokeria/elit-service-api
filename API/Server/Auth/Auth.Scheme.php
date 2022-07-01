<?php

trait AuthScheme
{

    public static function GenerateToken()
    {
        
        return  password_hash('*ah#s;a1./ad^81@23|has-dy%h92=12}h$', PASSWORD_BCRYPT).
                bin2hex(random_bytes(20)).
                rand(1,250);

    }

    public static function CheckParameters()
    {

        $RequiredFields = RequireFields(["username","password"]);

        if(!$RequiredFields["missing"]) HttpBadRequest($RequiredFields["msg"]);

    }

}