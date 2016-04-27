<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
        $dataSet = CS50::query("SELECT * FROM flights ORDER BY flight_date ASC");
            
        $flights = [];

        foreach ($dataSet as $data)
        {
            $flights[] = [
                "flight-number" => $data["flight_number"],
                "flight-date" => $data["flight_date"],
                "flight-depart" => $data["flight_origin"],
                "flight-start" => $data["flight_start"],
                "flight-arrive" => $data["flight_destination"],
                "flight-end" => $data["flight_end"],
                "assigned" => $data["assigned"]
            ];
        }
        
        // else render form
        render("maint_flights_form.php", ["flights" => $flights,"title" => "Flights"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["flight-number"]) OR empty($_POST["flight-date"]) OR empty($_POST["flight-depart"]) OR empty($_POST["flight-start"]) OR empty($_POST["flight-arrive"]) OR empty($_POST["flight-end"]))
        {
            apologize("All fields are required.");
        }
        else
        {
            CS50::query("INSERT INTO flights (flight_number, flight_date, flight_origin, flight_destination, flight_start, flight_end) VALUES(?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE flight_id=flight_id", $_POST["flight-number"], $_POST["flight-date"], strtoupper($_POST["flight-depart"]), strtoupper($_POST["flight-arrive"]), $_POST["flight-start"], $_POST["flight-end"]);
            
            $dataSet = CS50::query("SELECT * FROM flights ORDER BY flight_date ASC");
            
            $flights = [];
            
            foreach ($dataSet as $data)
            {
                $flights[] = [
                    "flight-number" => $data["flight_number"],
                    "flight-date" => $data["flight_date"],
                    "flight-depart" => $data["flight_origin"],
                    "flight-start" => $data["flight_start"],
                    "flight-arrive" => $data["flight_destination"],
                    "flight-end" => $data["flight_end"],
                    "assigned" => $data["assigned"]
                ];
            }
            
            // render dashboard
            render("maint_flights_form.php", ["flights" => $flights, "title" => "Flights"]);
        }    
    }
?>