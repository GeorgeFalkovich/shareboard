<?php

/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 06/01/2020
 * Time: 21:50
 */

 abstract class Controller{
     protected $request;
     protected $action;

     public function __construct($action, $request) {
         $this->action = $action;
         $this->request = $request;
     }

     public function executeAction() {
         return $this->{$this->action}();
     }

     protected function returnView($viewmodel, $fullView) {
         $view = 'views/'.get_class($this). '/' . $this->action. '.php';
            if($fullView) {
                require('views/main.php');
            } else {
                require($view);
            }
     }
 }