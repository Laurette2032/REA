<?php
class Recipe extends Model
{

    private $id;
    private $quantity;
    private $unity;


    public function __construct($id, $quantity, $unity)
    {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->unity = $unity;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getUnity()
    {
        return $this->unity;
    }
    public function setUnity($unity)
    {
        $this->unity = $unity;
    }
}
