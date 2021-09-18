<?php

include_once "Crud.php";
include_once "Session.php";

class UserController{

    private $crud;

    public function __construct(){

        $this->crud = new Crud();

    }

    public function login($email, $password){

        $sql = "SELECT * FROM users where email = '".$email."' and password = '".md5($password)."'";

        $user = $this->crud->read($sql);       

        if(count($user)){
        
            Session::start();
            Session::set('active_user',$user);

            header("location: admin/posts/index.php");
            var_dump('hello'); die();

        }else{
            var_dump('false part'); die();
            return false;
        }

    }

    public function logout(){
        Session::start();
        session_unset();
    }


}

?>