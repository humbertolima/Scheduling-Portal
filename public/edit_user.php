<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $dataSet = CS50::query("SELECT * FROM users WHERE id = ?", $_GET["id"]);
            
        $users = [];

        foreach ($dataSet as $data)
        {
            $users[] = [
                "user-id" => $data["id"],
                "first-name" => $data["first_name"],
                "last-name" => $data["last_name"],
                "username" => $data["username"],
                "permissions" => $data["permissions"],
                "email" => $data["email"]
            ];
        }
        
        
        // else render form
        render("edit_user_form.php", ["users" => $users, "title" => "Edit User"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
            CS50::query("UPDATE users SET first_name = ?, last_name = ?, username = ?, email = ?, permissions = ? WHERE id = ?", ucfirst($_POST["first-name"]), ucfirst($_POST["last-name"]), $_POST["username"], $_POST["email"], $_POST["permissions"], $_POST["user-id"]);
            
            $dataSet = CS50::query("SELECT * FROM users ORDER BY last_name ASC");
            
            $users = [];
            
            foreach ($dataSet as $data)
            {
                $users[] = [
                    "user-id" => $data["id"],
                    "first-name" => $data["first_name"],
                    "last-name" => $data["last_name"],
                    "username" => $data["username"],
                    "permissions" => $data["permissions"],
                    "email" => $data["email"]
                ];
            }
            
            // render dashboard
            render("maint_users_form.php", ["users" => $users, "title" => "Users"]);
           
    }
?>