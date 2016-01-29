<?php

class Singleton{

    static private $instance = null;
    private $configuration;


    private function __construct()
    {
        echo("Creating new Singleton");
        //$this->configuration
    }
    static function getInstance(){
        if(Singleton::$instance === null){
            Singleton::$instance = new Singleton();
        }
        return Singleton::$instance;
    }

    public function addToConfig($newEntery){
        $this->configuration[] = $newEntery;
    }

    public function getConfig(){
        return $this->configuration;// = $newEntry;
    }
}



?>