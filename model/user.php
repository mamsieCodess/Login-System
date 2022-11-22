<?php

class User{
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    function __construct($firstname,$lastname,$email,$password)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;

    }
    
    //getters and setters to get the private fields
    function setFirstname($firstname){
        $this->firstname = $firstname;
        return $this;
    }
    function getFirstname(){
        return $this->firstname;
    }

    function setLastname($lastname){
        $this->lastname = $lastname;
        return $this;
    }
    function getLastname(){
        return $this->lastname;
    }

    function setEmail($email){
        $this->email = $email;
        return $this;
    }
    function getEmail(){
        return $this->email;
    }

    function setPassword($password){
        $this->password = $password;
        return $this;
    }
    function getPassword(){
        return $this->password;
    }

}