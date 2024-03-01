<?php
class Customer
{
    public string $firstName;
    public string $lastName;
    private string $password;
    public array $accounts;

    function __construct(string $firstName, string $lastName, string $password, array $accounts)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = $password;
        $this->accounts = $accounts;        
    }
    function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}