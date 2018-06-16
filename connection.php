<?php

/**
 * Class Db
 */
class Db {

    /**
     * @var null
     */
    private static $instance = NULL;

    /**
     * Db constructor.
     */
    private function __construct() {}

    /**
     *
     */
    private function __clone() {}

    /**
     * @return null|PDO
     */
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=post', 'post', 'post', $pdo_options);
      }
      return self::$instance;
    }
}
?>