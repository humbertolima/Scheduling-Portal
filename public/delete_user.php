<?php

    // configuration
    require("../includes/config.php");
            
    CS50::query("DELETE FROM users WHERE id = ?", $_GET["id"]);

    redirect("/maint_users.php");
    
?>