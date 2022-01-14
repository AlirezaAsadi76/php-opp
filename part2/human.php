<?php
class human{
   private $name;
   private $lastname;
   public function setname($name)
   {
       $this->name=$name;
   }
   public function setlastname($lastname)
   {
       $this->lastname=$lastname;
   }

   public function getname()
   {
       return $this->name;
   }
   public function getlastname()
   {
       return $this->lastname;
   }

}
$hu=new human();
$hu->setname("alireza");
$hu->setlastname("asadi");

echo $hu->getname();

