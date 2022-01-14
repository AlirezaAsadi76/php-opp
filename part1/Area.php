<?php
class area
{
    private $X;
    private $Y;
    public function setx($x)
    {
        $this->X=$x;
    }
    public function sety($y)
    {
        $this->Y=$y;
    }
    public function getx()
    {
        return $this->X;
    }
    public function gety()
    {
        return $this->X;
    }
    public function Area()
    {
        $z=$this->X*$this->Y;
        return $z."\n";
    }
    public function Env()
    {
        $z=$this->X+$this->Y;
        return 2*$z."\n";
    }
}
$obj=new area();
$obj->setx(10);
$obj->sety(10);
echo $obj->Area();
echo $obj->Env();