<?php

class User {
   public string  $name; 
   public string  $city;
   
   function setName ($name){
       $this->name = $name;
   }
    function setCity ($city){
       $this->city = $city;
   }
    function check (string $name, string $city): bool {
        if ($name == $this->name and $city == $this->city){
            return true;
            }
        else{
            return false;
        }
   }
}