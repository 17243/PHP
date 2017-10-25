<?php

class Passenger
{
    private $lastName_;

    private $firstName_;

    private $age_;

    /**
     * Passager constructor.
     * @param $lName string last name of passenger
     * @param $fName string first name of passenger
     * @param $age int age of passenger
     */
    public function __construct($lName, $fName, $age)
    {
        $this->lastName_ = $lName;
        $this->firstName_= $fName;
        $this->age_= $age;
    }

    /**
     * @return string last name of passenger
     */
    public function getLastName()
    {
        return $this->lastName_;
    }

    /**
     * @return string first name of passenger
     */
    public function getFirstName()
    {
        return $this->firstName_;
    }

    /**
     * @return int age of passenger
     */
    public function getAge()
    {
        return $this->age_;
    }
}