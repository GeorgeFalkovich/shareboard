<?php

/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 06/01/2020
 * Time: 21:50
 */

 class Home extends Controller {
     protected function Index() {
        $viewmodel = new HomeModel();
        $this->returnView($viewmodel->Index(), true);
     }
 }