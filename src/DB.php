<?php

namespace IgnisWeb\ViewaLasVegas;

use PDO;
use PDOException;

class DB
{
    private static string $SERVER = 'db';
    private static string $DBNAME = 'VLV';
    private static string $USERNAME = 'root';
    private static string $PASSWORD = '';

    /**
     * @return PDO
     */
    public static function getDB(): PDO
    {
        $server = self::$SERVER;
        $dbname = self::$DBNAME;
        $username = self::$USERNAME;
        $password = self::$PASSWORD;

        try {
            // Connect with: Server, User, Password, Database
            $DB = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

            // because default: errormode_silent, change to ERRMODE_EXCEPTION
            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $DB;
        } catch (PDOException $e) {
            print('Error: ' . $e);
            exit();
        }
    }

    static function getHotels(): array
    {
        $DB = DB::getDB();
        try {
            $stmt = $DB->prepare('SELECT id, name, stars, fk_pk_location_id, description, img_url FROM hotel');

            if ($stmt->execute()) {
                while ($row = $stmt->fetch()) {
                    $hotels[] = new Hotel($row['name'], $row['stars'], DB::getLocation($row['fk_pk_location_id']), $row['description'], $row['img_url']);
                }
            }

            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $hotels ?? [];
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }

    static function getLocation(int $locationId)
    {
        $DB = DB::getDB();
        try {
            $stmt = $DB->prepare('SELECT id, country, country_id, postal_code, city, street, house_number FROM location WHERE id = :locationId');
            $stmt->bindParam(":locationId", $locationId);

            if ($stmt->execute()) {
                $row = $stmt->fetch();
                if (empty($row)) {
                    return [];
                }
                $location = new Location($row['country'], $row['country_id'], $row['postal_code'], $row['city'], $row['street'], $row['house_number']);
            }

            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $location ?? []; // if $location isset -> $location; else -> []
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }
}