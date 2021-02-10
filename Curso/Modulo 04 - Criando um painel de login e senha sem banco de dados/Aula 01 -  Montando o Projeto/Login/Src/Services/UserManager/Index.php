<?php
    require_once('../../Data/User/index.php');

    class UserManager{
        private $userData;

        public function __construct(){
            $this->userData = new UserData();
        }

        public function Register(User $user){
           if((strlen($user->getName()) > 3) and (strlen($user->getPass()) >=3)and(strpos($user->getEmail(), '@') > 0)){
                return $this->userData->Register($user);
           }else{
               return -2;//dados invalidos
           }
        }

    }
