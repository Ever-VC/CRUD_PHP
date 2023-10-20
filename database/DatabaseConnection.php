<?php

interface DatabaseConnection {
    public static function connect($host, $port, $dbname, $user, $pass);
    public static function selectAll($sql);
    public static function selectById($sql);
    public static function insert($sql, $data);
    public static function update($sql, $data);
    public static function delete($sql);
    public static function close();
}