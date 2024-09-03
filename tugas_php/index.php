<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <style>
        /* styles.css */
        body {
            background-color: #eff0f3;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #0d0d0d;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #fffffe;
            padding: 15px;
            box-sizing: border-box;
        }

        .content {
            flex: 1;
            padding: 15px;
            box-sizing: border-box;
        }

        .sidebar h2, .content h2 {
            margin-top: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #ff8e3c;
        }
    </style>
</head>
<body>
<?php
    // Header
    echo '<header>';
    echo '<h1>' . "Header" . '</h1>';
    echo '</header>';
    ?>

    <div class="container">
        <?php
        // Sidebar
        echo '<aside class="sidebar">';
        echo '<h2>Sidebar</h2>';
        echo '<ul>';
        
        // Array yang berisi daftar tautan
        $links = [
            'Biodata' => 'profile.php',
            'Link 2' => '#',
            'Link 3' => '#'
        ];
        // Loop untuk menghasilkan elemen daftar tautan
        foreach ($links as $name => $url) {
            // Menghasilkan elemen daftar dengan tautan
            echo '<li><a href="' . htmlspecialchars($url) . '">' . htmlspecialchars($name) . '</a></li>';
        }
        
        echo '</ul>';
        echo '</aside>';
        ?>

        <?php
        // Content
        echo '<main class="content">';
        echo '<h2>Content Area</h2>';
        echo '<p>' . "This is the main content area." . '</p>';
        echo '</main>';
        ?>
    </div>
</body>
</html>
