<?php
// src/models/StudentManager

class StudentManager
{
    private $databaseConnection;

    public function __construct($databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }
}