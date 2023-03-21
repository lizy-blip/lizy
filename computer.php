<?php
class computer
{
    public $model;
    public $volume;

function volumeup(){
    $this->volume++;
}
function volumedown(){
    $this->volume--;
}
function __construct($m,$u)
{
    $this->model=$m;
    $this->volume=$u;
}
}
$computer=new computer('x,y,z',2);
echo $computer->model;
echo $computer->volume;
?>