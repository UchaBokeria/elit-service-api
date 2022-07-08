<?php

/**
 * The Calls Controller
 * Route to get the information about a call
 * 
 * @package     Calls
 * @version     1.0
 * @author      Ucha Bokeria <
 * @link        https://github.com/UchaBokeria/
 */

class Calls extends Database
{

    public function About()
    {
        
        Post();
        Guardian();
        CallScheme::CheckParameters();

        return parent::GET("    SELECT      asterisk_call_log.id AS id,
                                            FROM_UNIXTIME(call_datetime) AS datetime,
                                            IF(call_type_id = 1, source, destination) AS phone,   
                                            CONCAT(
                                                'http://192.168.4.250:8000/" . substr(date('Y/m/d'),-8) . "/', asterisk_call_record.name,'.', asterisk_call_record.format
                                            ) AS record
                                            
                                FROM        asterisk_call_log
                                LEFT JOIN   asterisk_call_record ON asterisk_call_log_id = asterisk_call_log.id
                                WHERE       IF(call_type_id = 1, source like :source, destination like :destination); ",
                                [ 'source' => "%$_POST[phone]%", 'destination' => "%$_POST[phone]%" ] );

    }

}