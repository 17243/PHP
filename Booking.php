<?php

class Booking
{
    private $destination_;

    private $passengerList_;

    private $insurance_;

    /**
     * Booking constructor.
     * @param $dest string destination of booking
     * @param $passList array list of passenger
     * @param $insurance bool
     */
    public function __construct($dest, $passList, $insurance)
    {
        $this->destination_ = $dest;
        $this->passengerList_ = $passList;
        $this->insurance_ = $insurance;
    }

    /**
     * @return string destination of booking
     */
    public function getDestination()
    {
        return $this->destination_;
    }

    /**
     * @return array list of passenger
     */
    public function getPassengerList()
    {
        return $this->passengerList_;
    }

    /**
     * @return bool
     */
    public function isInsurance()
    {
        return $this->insurance_;
    }
}