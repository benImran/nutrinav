<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 29/05/2017
 * Time: 14:08
 */
class Connect
{
    private static $pdoconnect = null;

    /**
     * @return Connect|null|PDO
     */
    public static function getPdo()
    {
        if (is_null(self::$pdoconnect)) {

            try {
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION; // ATTR_ERRMODE = rapport d'erreur
                // ERMMODE_EXCEPTION sa va nous donner les exception
                self::$pdoconnect = new PDO('mysql:dbname=nutribox;host=localhost','root','root', $pdo_options);
                self::$pdoconnect->exec("SET NAMES UTF8");
            }

            catch(Exception $exception) {

                die('Erreur :'.$exception->getMessage());
            }
        }
        return self::$pdoconnect;
    }

}