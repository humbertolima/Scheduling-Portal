<?php

    // configuration
    require("../includes/config.php");
            
    CS50::query("DELETE FROM flights WHERE flight_number = ? AND flight_date = ?", $_GET["fNum"], $_GET["fDate"]);

    CS50::query("DELETE FROM assignedflights WHERE flight_number = ? AND flight_date = ?", $_GET["fNum"], $_GET["fDate"]);

    redirect("/maint_flights.php");
    
?>