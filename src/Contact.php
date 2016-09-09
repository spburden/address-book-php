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

    
    }
?>
