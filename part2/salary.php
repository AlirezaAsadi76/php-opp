<?php
class salary{
    private $name;
    private $lastname;
    private $degree;
    private $clock;
    public function setname($name)
    {
        $this->name=$name;
    }
    public function setlastname($lastname)
    {
        $this->lastname=$lastname;
    }
    public function setdegree($degree)
    {
        $this->degree=$degree;
    }
    public function setclock($clock)
    {
        $this->clock=$clock;
    }
    public function getname()
    {
        return $this->name;
    }
    public function getlastname()
    {
        return $this->lastname;
    }
    public function getdegree()
    {
        return $this->degree;
    }
    public function getclock()
    {
        return $this->clock;
    }
    public function Salary()
    {
        if($this->degree=='bachlor')
        {
            $salary=$this->clock*10000;
            return $salary;
        }
        elseif($this->degree=='master')
        {
            $salary=$this->clock*20000;
            return $salary;
        }
        elseif($this->degree=='phd')
        {
            $salary=$this->clock*300000;
            return $salary;
        }
    }
}
$obj=new salary();
$obj->setname("alireza");
$obj->setlastname("asadi");
$obj->setdegree("master");
$obj->setclock(130);

echo $obj->Salary();