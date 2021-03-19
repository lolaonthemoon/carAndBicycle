<?php


require_once "/home/laurence/work/POO/carAndBicycle/Vehicle.php";

class Camion extends Vehicle

{
    const ALLOWED_ENERGY = ['fuel', 'petroil', 'gaz'];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $capacity;
    /**
     * @var integer
     */
    private $load = 0;

    public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->load =  0;
        $this->setCapacity($capacity);
        $this->setEnergy($energy);
    }




    /**
     * Get the value of capacity
     *
     * @return  integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @param  integer  $capacity
     *
     * @return  self
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get the value of energy
     *
     * @return  	private
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /** redefined to control energy is allowed
     * Set the value of energy
     *
     * @param  	private  $energy
     *
     * @return  self
     */

    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGY)) {
            $this->energy = $energy;
        }
    }

    //   
    // check is the truck is full ie load equals capacity
    // return the status full or in filling in a string
    public function fullStatus(): string
    {
        if ($this->load  == $this->getCapacity()) {
            $status = 'full';
        } else {
            $status = 'in filling';
        };
        return $status;
    }

    // loads the truck adding $load value
    public function loadTheTruck(int $load)
    {
        $this->load = $this->load + $load;
    }
};
