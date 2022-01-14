<?php
class Calc
{
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
    public function Result()
    {
        return $this->name." - ".$this->lastname;
    }
    public function Wellcom()
    {
        echo $this->name." - ".$this->lastname;
    }
}
$obj=new Calc();
$obj->setname("alireza");
$obj->setlastname("asadi");
echo $obj->Result();
$obj->Wellcom();