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

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function getOne()
        {
            return $_SESSION['new_contact'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }

        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        function saveOne()
        {
            array_push($_SESSION['new_contact'], $this);
        }
    }
?>
