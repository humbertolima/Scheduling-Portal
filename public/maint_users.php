<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
        $dataSet = CS50::query("SELECT * FROM users ORDER BY last_name ASC");
            
        $users = [];

        foreach ($dataSet as $data)
        {
            $users[] = [
                "user-id" => $data["id"],
                "first-name" => $data["first_name"],
                "last-name" => $data["last_name"],
                "username" => $data["username"],
                "password" => $data["hash"],
                "permissions" => $data["permissions"],
                "email" => $data["email"]
            ];
        }
        
        // else render form
        render("maint_users_form.php", ["users" => $users, "title" => "Users"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["first-name"]) OR empty($_POST["last-name"]) OR empty($_POST["username"]) OR empty($_POST["password"]) OR empty($_POST["email"]) OR empty($_POST["permissions"]))
        {
            apologize("All fields are required.");
        }
        else
        {
            
            CS50::query("INSERT INTO users (first_name, last_name, username, hash, email, permissions) VALUES(?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE id=id", ucfirst($_POST["first-name"]), ucfirst($_POST["last-name"]), $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["email"], $_POST["permissions"]);
            
            $dataSet = CS50::query("SELECT * FROM users ORDER BY last_name ASC");
            
            $users = [];
            
            foreach ($dataSet as $data)
            {
                $users[] = [
                    "user-id" => $data["id"],
                    "first-name" => $data["first_name"],
                    "last-name" => $data["last_name"],
                    "username" => $data["username"],
                    "password" => $data["hash"],
                    "permissions" => $data["permissions"],
                    "email" => $data["email"]
                ];
            }
            
            // render dashboard
            render("maint_users_form.php", ["users" => $users, "title" => "Users"]);
        }    
    }
?>