<?php class Db
{

    public static function getConnection()
    {
      $paramsPath = ROOT . '/config/db_params.php';
      $params = include($paramsPath);


      $dsn = "mysql:host={localhost};dbname={$params['dbname']}";
      $db = new PDO($dsn, $params['user'], $params['password']);

      return $db;
    }
}
?>