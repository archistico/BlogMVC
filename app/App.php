<?php

use Core\Config;
use Core\Database\MysqlDatabase;

class App{

    public $title = "Blog";
    public $boxtitle = "Generale";
    public $menus = [
         /*'0' => [
            testo => 'Homepage',
            icona => 'home',
            sottomenu => [
            ]],*/
        '1' => [
            testo => 'Blog',
            icona => 'list',
            sottomenu => [
                [icona => 'list', testo=> 'Blog list', url => '?p=posts.index'],
            ]],
        '2' => [
            testo => 'Admin',
            icona => 'key',
            sottomenu => [
                [icona => 'key', testo=> 'User login', url => '?p=users.login'],
                [icona => 'list', testo=> 'Users list', url => '?p=admin.users.index'],

                [icona => 'plus', testo=> 'Post add', url => '?p=admin.posts.add'],
                [icona => 'list', testo=> 'Posts list', url => '?p=admin.posts.index'],

                [icona => 'plus', testo=> 'Category add', url => '?p=admin.categories.add'],
                [icona => 'list', testo=> 'Categories list', url => '?p=admin.categories.index'],

            ]],
    ];

    private $db_instance;
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load(){
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
    }

    public function getTable($name){
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb(){
        $config = Config::getInstance(ROOT . '/config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

    public function getMenu() {
        return $this->menus;
    }
}