<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $data = CS50::query("SELECT * FROM users WHERE id = ?", $_GET["id"]);
            
        $users = [];

        $users[] = [
            "user-id" => $data[0]["id"],
            "first-name" => $data[0]["first_name"],
            "last-name" => $data[0]["last_name"],
            "username" => $data[0]["username"],
        ];
        
        
        // else render form
        render("pass_reset_form.php", ["users" => $users, "title" => "Password Reset"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
            // TODO
        
        if (empty($_POST["password"]) || empty($_POST["confirm"]))
        {
            apologize("All fields are mandatory.");
        }
        else if ($_POST["password"] != $_POST["confirm"])
        {
            apologize("Confirmation does not match Password.");
        }
        else
        {
            CS50::query("UPDATE users SET hash = ? WHERE id = ?", password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["user-id"]);
            
            redirect("/");
        }
           
    }
?>