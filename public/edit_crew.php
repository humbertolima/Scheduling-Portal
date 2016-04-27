<?php

    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
        $data = CS50::query("SELECT * FROM assignedflights WHERE flight_number = ? AND flight_date = ?", $_GET["fNum"], $_GET["fDate"]);
        
        $data1 = CS50::query("SELECT first_name, last_name, username, permissions FROM users");
                
        $flights = [];
        $pilots = [];
        $fas = [];
        
        $flights[] = [
            "flight-number" => $data[0]["flight_number"],
            "flight-date" => $data[0]["flight_date"],
            "captain" => $data[0]["captain"],
            "fOfficer" => $data[0]["first_officer"],
            "fa-lead" => $data[0]["fal"],
            "fa-1" => $data[0]["fa1"],
            "fa-2" => $data[0]["fa2"],
            "fa-3" => $data[0]["fa3"],
            "fa-4" => $data[0]["fa4"],
            "fa-5" => $data[0]["fa5"]
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
        render("edit_crew_form.php", ["flights" => $flights, "pilots" => $pilots, "fas" => $fas, "title" => "Edit Crew"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        CS50::query("UPDATE assignedflights SET captain = ?, first_officer = ?, fal = ?, fa1 = ?, fa2 = ?, fa3 = ?, fa4 = ?, fa5 = ? WHERE flight_number = ? AND flight_date = ?", $_POST["captain"], $_POST["first-officer"], $_POST["fa-lead"], $_POST["first-junior"], $_POST["second-junior"], $_POST["third-junior"], $_POST["fourth-junior"], $_POST["fifth-junior"], $_POST["flight-number"], $_POST["flight-date"]);
        
        $data = CS50::query("SELECT * FROM assignedflights WHERE flight_number = ? AND flight_date = ?", $_POST["flight-number"], $_POST["flight-date"]);
        
        if (empty($data[0]["captain"]) && empty($data[0]["first_officer"]) && empty($data[0]["fal"]) && empty($data[0]["fa1"]) && empty($data[0]["fa2"]) && empty($data[0]["fa3"]) && empty($data[0]["fa4"]) && empty($data[0]["fa5"]))
        {
            CS50::query("DELETE FROM assignedflights WHERE flight_number = ? AND flight_date = ?", $_POST["flight-number"], $_POST["flight-date"]);
            
            CS50::query("UPDATE flights SET assigned = 0 WHERE flight_number = ? AND flight_date = ?", $_POST["flight-number"], $_POST["flight-date"]);
            
        }

        redirect("/");
    }
?>