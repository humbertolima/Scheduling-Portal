<?php

    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $data = CS50::query("SELECT * FROM flights WHERE flight_number = ? AND flight_date = ?", $_GET["fNum"], $_GET["fDate"]);
                
        $flights = [];

        
        $flights[] = [
            "flight-number" => $data[0]["flight_number"],
            "flight-date" => $data[0]["flight_date"],
            "flight-origin" => $data[0]["flight_origin"],
            "flight-destination" => $data[0]["flight_destination"],
            "flight-start" => $data[0]["flight_start"],
            "flight-end" => $data[0]["flight_end"]
        ];
        
        // else render form
        render("edit_flights_form.php", ["flights" => $flights, "title" => "Flights"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
            CS50::query("UPDATE flights SET flight_origin = ?, flight_destination = ?, flight_start = ?, flight_end = ? WHERE flight_number = ? AND flight_date = ?", strtoupper($_POST["flight-depart"]), strtoupper($_POST["flight-arrive"]), $_POST["flight-start"], $_POST["flight-end"], $_POST["flight-number"], $_POST["flight-date"]);
            
            $dataSet = CS50::query("SELECT * FROM flights ORDER BY flight_date ASC");
            
            $flights = [];
            
            foreach ($dataSet as $data)
            {
                $flights[] = [
                    "flight-number" => $data["flight_number"],
                    "flight-date" => $data["flight_date"],
                    "flight-depart" => $data["flight_origin"],
                    "flight-arrive" => $data["flight_destination"],
                    "flight-start" => $data["flight_start"],
                    "flight-end" => $data["flight_end"],
                    "assigned" => $data["assigned"]
                ];
            }
            
            // render dashboard
            render("maint_flights_form.php", ["flights" => $flights, "title" => "Flights"]);
           
    }
?>