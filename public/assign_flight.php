<?php

    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $data = CS50::query("SELECT * FROM flights WHERE flight_number = ? AND flight_date = ?", $_GET["fNum"], $_GET["fDate"]);
        
        $data1 = CS50::query("SELECT first_name, last_name, username, permissions FROM users");
                
        $flights = [];
        $pilots = [];
        $fas = [];

        
        $flights[] = [
            "flight-number" => $data[0]["flight_number"],
            "flight-date" => $data[0]["flight_date"]
        ];
        
        foreach ($data1 as $data)
        {
            if ($data["permissions"] == "Pilot")
            {
                $pilots[] = [
                    "first-name" => $data["first_name"],
                    "last-name" => $data["last_name"],
                    "username" => $data["username"]
                ];
            }
            elseif ($data["permissions"] == "FA")
            {
                $fas[] = [
                    "first-name" => $data["first_name"],
                    "last-name" => $data["last_name"],
                    "username" => $data["username"]
                ];
            }
        }
        
        // else render form
        render("assign_flight_form.php", ["flights" => $flights, "pilots" => $pilots, "fas" => $fas, "title" => "Assign Flights"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        CS50::query("INSERT INTO assignedflights (flight_number, flight_date, captain, first_officer, fal, fa1, fa2, fa3, fa4, fa5) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE flight_number=flight_number", $_POST["flight-number"], $_POST["flight-date"], $_POST["captain"], $_POST["first-officer"], $_POST["fa-lead"], $_POST["first-junior"], $_POST["second-junior"], $_POST["third-junior"], $_POST["fourth-junior"], $_POST["fifth-junior"]);

        
        CS50::query("UPDATE flights SET assigned = 1 WHERE flight_number = ? AND flight_date = ?", $_POST["flight-number"], $_POST["flight-date"]);

        redirect("/");
           
    }
?>