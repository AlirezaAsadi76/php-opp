<?php
class human{
   private $name;
   private $lastname;
   private $code;
   public function setname($name)
   {
       $this->name=$name;
   }
   public function setlastname($lastname)
   {
       $this->lastname=$lastname;
   }
   public function setcode($code)
   {
       $this->code=$code;
   }
}
$hu=new human();
$hu->setname("alireza");
$hu->setlastname("asadi");
$hu->setcode("12345");
var_dump($hu);
