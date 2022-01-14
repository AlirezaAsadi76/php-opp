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
   public function getname()
   {
       return $this->name;
   }
   public function getlastname()
   {
       return $this->lastname;
   }
   public function getcode()
   {
       return $this->code;
   }
}
$hu=new human();
$hu->setname("alireza");
$hu->setlastname("asadi");
$hu->setcode("12345");
echo $hu->getname();
//var_dump($hu);
