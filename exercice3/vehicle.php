<?php
require_once ('db.php');

// connection to DB
class Vehicle
{

    // methode post:
    public function setVehicle($newVehicle)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $make = $_POST['make'] ?? null;
            $model = $_POST['model'] ?? null;
            $year = $_POST['year'] ?? null;
            $color = $_POST['color'] ?? null;
        }
        // to insert new data in the DB:
        $sql = 'INSERT INTO vehicle(make, model, year, color) VALUES(:make, :model, :year; :color)';
        $statement = $connection->prepare($sql);
        $statement->bindValue('make', $make);
        $statement->bindValue('model', $model);
        $statement->bindValue('year', $year);
        $statement->bindValue('color', $color);
        
        if (! $statement->execute()) {
            $errorMessage = 'Unsuccessful request';
            include '../Template/error.php';
            die();
        }
    }
}