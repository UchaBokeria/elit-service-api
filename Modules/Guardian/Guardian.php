<?php

class Guardian extends Database
{

    public function checkToken()
    {

        $TOKEN = $this->getBearerToken();
        if(!isset($TOKEN) || empty($TOKEN)) return false;

        $matches = parent::GET("    SELECT    users.id AS USERID,
                                              token AS TOKEN
                                             
                                    FROM      users 
                                    WHERE     token = :token ; ", 
                                    [ 'token' => $TOKEN ]);

        $exists = parent::Exists();
        if($exists) $_SESSION["USER"] = $matches[0];

        return $exists;

    }

    private function getAuthorizationHeader()
    {

        $headers = null;
        if (isset($_SERVER['Authorization'])) $headers = trim($_SERVER["Authorization"]);

        elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);

        elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            $requestHeaders =   array_combine(array_map('ucwords', 
                                array_keys($requestHeaders)), 
                                array_values($requestHeaders));
            if (isset($requestHeaders['Authorization'])) $headers = trim($requestHeaders['Authorization']);
        }

        return $headers;

    }

    public function getBearerToken() 
    {

        $headers = $this->getAuthorizationHeader();

        if (!empty($headers)) 
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) return $matches[1];

        return null;

    }

}