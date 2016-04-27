<!DOCTYPE html>

<html>

<head>

    <!-- http://getbootstrap.com/ -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <link href="/css/styles.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (isset($title)): ?>
        <title>Scheduling Portal:
            <?= htmlspecialchars($title) ?>
        </title>
        <?php else: ?>
            <title>Scheduling Portal</title>
            <?php endif ?>

                <!-- https://jquery.com/ -->
                <script src="/js/jquery-1.11.3.min.js"></script>

                <!-- http://getbootstrap.com/ -->
                <script src="/js/bootstrap.min.js"></script>

                <script src="/js/scripts.js"></script>

</head>

<body>

    <div class="container">

        <div id="top">
            <div>
                <h1><b><ul><a href="/">Scheduling Portal</a></u></b></h1>
            </div>
            <?php if (!empty($_SESSION["id"]) && ($_SESSION["permissions"] == "Admin")): ?>
                <ul class="nav nav-pills">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="maint_flights.php">Flights</a></li>
                    <li><a href="maint_users.php">Users</a></li>
                    <li><a href="logout.php"><strong>Log Out</strong></a></li>
                </ul>
                <?php elseif (!empty($_SESSION["id"]) && ($_SESSION["permissions"] == "Pilot")): ?>
                    <ul class="nav nav-pills">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                    <?php elseif (!empty($_SESSION["id"]) && ($_SESSION["permissions"] == "FA")): ?>
                        <ul class="nav nav-pills">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="logout.php"><strong>Log Out</strong></a></li>
                        </ul>
                        <?php endif ?>
        </div>

        <div id="middle">