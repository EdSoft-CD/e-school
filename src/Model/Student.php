<?php namespace Attendancy\Model;

// src/Model/Student.php

class Student
{
    private $id;

    private string $first_name;
    
    private string $last_name;

    private string $gender;

    private string $school;

    private string $class;

    public function __construct($id, $first_name, $last_name)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getGender()
    {
        return $this->gender;
    }
}
