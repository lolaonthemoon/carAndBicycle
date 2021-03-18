<?php


class Car
{
	/**
	 * @var integer
	 */
	private $nbWheels;
	/**
	 * @var int
	 */
	private $currentSpeed;

	/**
	 * @var string
	 */
	private $color;
	/** 

	 * @var integer
	 */
	private $nbSeats = 1;
	/** 
	 * @var string
	 */
	private $energyType;
	/** 
	 * @var integer
	 */
	private $energyLevel;


	public function __construct(string $color, int $nbSeats, string $energyType)
	{
		$this->color = $color;
		$this->nbSeats = $nbSeats;
		$this->energyType = $energyType;
	}
	/**
	 * @return ()
	 */
	public function starttheCar()
	{
		$this->currentSpeed = 1;
		return "Go !";
	}
	/**
	 * @return int
	 */
	public function getCurrentSpeed(): int
	{
		return $this->currentSpeed;
	}
	/**
	 * @return int
	 */
	public function getNbWheels(): int
	{
		return $this->nbWheels;
	}

	/**
	 * @return string
	 */
	public function getColor(): string
	{
		return $this->color;
	}
	/**
	 * @return int
	 */
	public function getNbSeats(): int
	{
		return $this->nbWheels;
	}

	/**
	 * @return string
	 */
	public function getEnergy(): string
	{
		return $this->energyType;
	}
	/**
	 * @return int
	 */
	public function getEnergyLevel(): int
	{
		return $this->energyLevel;

		/**
		 * @return int
		 */
	}
	/**
	 * @return ()
	 */
	public function forward()
	{
		$this->currentSpeed = 15;
		return "Go !";
	}
	//  stop car setting speed to 0
	/**
	 * @return ()
	 */
	public function brake(): string
	{
		$sentence = "";
		while ($this->currentSpeed > 0) {
			$this->currentSpeed--;
			$sentence .= "Brake !!!";
		}
		$sentence .= "I'm stopped !";
		return $sentence;
	}
}
