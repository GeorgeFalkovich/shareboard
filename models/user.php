<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 06/01/2020
 * Time: 20:46
 */

class UserModel extends Model {

    public function register() {

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['password'])) {
            $password = md5($post['password']);
        }

        if(isset($post['submit'])){
            if($post['name'] == '' || $post['email'] == '' || $post['password'] == '') {
                Messages::setMsg('Please Fill All Filelds!', 'error');
                return;
            }
            //Check if the user allready exists
            $this->query('SELECT * FROM users WHERE email = :email');
            $this->bind(':email', $post['email']);
            $this->execute();
            $row = $this->single();
            if($row) {
                Messages::setMsg('This user already exists!', 'user_taken');
            }

            else {
                // Insert into MySQL
                $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
                $this->bind(':name', $post['name']);
                $this->bind(':email', $post['email']);
                $this->bind(':password', $password);
                $this->execute();
                // Verify
                if($this->lastInsertId()){
                    // Redirect
                    echo("<script>location.href = '"."/shareboard/users/login';</script>");
                  //  header('Location: '.ROOT_URL.'users/login');
                }
            }


        }
        return;
    }

    public function login() {

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($post['password'])) {
            $password = md5($post['password']);
        }

        if(isset($post['submit'])){
            // Insert into MySQL
            $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $row = $this->single();


            if($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "email" => $row['email']
                );

                echo("<script>location.href = '"."/shareboard/shares';</script>");
             //   header('Location: '.ROOT_URL.'shares');
            }
            else {
                Messages::setMsg('Incorrect Login', 'error');
            }

        }
        return;
    }

    public function logout() {
        return;
    }
}