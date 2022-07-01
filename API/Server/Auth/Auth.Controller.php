<?php

/**
 * Authorization Controller
 * Route to get an access Token
 * 
 * @package     Authorization
 * @version     1.0
 * @author      Ucha Bokeria <
 * @link        https://github.com/UchaBokeria/
 */

class Auth extends Database
{

    public function GetToken()
    {

        Post();
        AuthScheme::CheckParameters();

        $User = parent::GET("   SELECT  id,
                                        token,
                                        password 
                                FROM    users 
                                WHERE   username = :username ; ",
                                [   'username' => $_POST["username"]   ]);
        
        if(!parent::Exists()) Unauthorized();
        elseif(!password_verify($_POST["password"], $User[0]["password"])) Unauthorized();

        $Token = AuthScheme::GenerateToken();
        parent::SET("   UPDATE  users SET   token = :token, 
                                            last_actived = NOW() 
                        WHERE   id = :id ",
                        [   
                            "token" => $Token, 
                            "id" => $User[0]["id"]   
                        ]);
        $Response = [ 'id' => $User[0]["id"], 'token' => $Token ];
        return $Response;

    }

    public function Register()
    {

        /** * ! ! ! NOT FOR USERS ! ! ! * */

        Post();
        return parent::SET("    INSERT INTO users SET username = :username, password = :password, token = :token", 
                            [
                                'token' => AuthScheme::GenerateToken(),
                                'username' => $_POST["username"], 
                                'password' => password_hash($_POST["password"], PASSWORD_BCRYPT)
                            ]);

    }

}