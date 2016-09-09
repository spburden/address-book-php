<?php
    class Contact
    {
        private $name;
        private $phoneNumber;
        private $address;

    function __construct($newName, $newPhoneNumber, $newAddress)
    {
        $this->name = $newName;
        $this->phoneNumber = $newPhoneNumber;
        $this->address = $newAddress;
    }

    function setName($name)
    {
        $this->test = (string) $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = (string) $phoneNumber;
    }

    function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    function setAddress($address)
    {
        $this->address = (string) $address;
    }

    function getAddress()
    {
        return $this->address;
    }


    }
?>
