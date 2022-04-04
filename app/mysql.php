<?php
    use \mysql;

    class Mysql extends \Mysql {
        protected $data = [
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 'UAdeO',
            'port' => 3306
        ];
    }
?>