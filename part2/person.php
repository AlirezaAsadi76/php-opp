<?php
include_once 'human.php';
class person extends human
{
    private $fathername;

    private $code;
    public function setfathername($fathername)
    {
        $this->fathername=$fathername;
    }
    public function setcode($code)
    {
        $this->code=$code;
    }
    public function getfathername()
    {
        return $this->fathername;
    }
    public function getcode()
    {
        return $this->code;
    }
    public function Info()
    {
        $info=$this->getname()." - ".$this->getlastname()." - ".$this->fathername." - ".$this->code;
        return $info;
    }
}
$obj=new person();
$obj->setname("alireza");
$obj->setlastname("asadi");
$obj->setfathername("heshmat allah");
$obj->setcode("137666767");

echo $obj->Info();