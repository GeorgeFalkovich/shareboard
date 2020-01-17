<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 15/01/2020
 * Time: 21:15
 */

class Messages
{

    public static function setMsg($text, $type) {
        if($type == 'error') {
            $_SESSION['errorMsg'] = $text;
        }
        if($type == "user_taken") {
            $_SESSION['user_taken'] = $text;
        }
        else {
            $_SESSION['successMsg'] = $text;
        }
    }

    public static function display(){
        if(isset($_SESSION['errorMsg'])) {
            echo '<div class="alert alert-danger">'.$_SESSION['errorMsg'].'</div>';
            unset($_SESSION['errorMsg']);
        }

        if(isset($_SESSION['successMsg'])) {
            echo '<div class="alert alert-succes">'.$_SESSION['successMsg'].'</div>';
            unset($_SESSION['successMsg']);
        }

        if(isset($_SESSION['user_taken'])) {
            echo '<div class="alert alert-danger">'.$_SESSION['user_taken'].'</div>';
            unset($_SESSION['user_taken']);
        }
    }

}