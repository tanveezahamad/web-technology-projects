<!DOCTYPE html>
<html>
<head>
    <title>RCB Team Details</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
body {
            background-image: url('ipl1.png');
            background-size: cover;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>RCB Team Details</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="matches-played">Matches Played:</label>
        <input type="checkbox" name="attributes[]" value="matches_played" id="matches-played"><br>

        <label for="matches-won">Matches Won:</label>
        <input type="checkbox" name="attributes[]" value="matches_won" id="matches-won"><br>

        <label for="matches-lost">Matches Lost:</label>
        <input type="checkbox" name="attributes[]" value="matches_lost" id="matches-lost"><br>

        <label for="net-strike-rate">Net Strike Rate (NRR):</label>
        <input type="checkbox" name="attributes[]" value="nrr" id="net-strike-rate"><br>

        <label for="total-points">Total Points:</label>
        <input type="checkbox" name="attributes[]" value="total_points" id="total-points"><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Replace with your database credentials
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mini";

        // Create a connection to the database
        $conn = new mysqli($servername, $username, $password, $database);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve selected attributes from checkboxes
        $selectedAttributes = isset($_POST['attributes']) ? $_POST['attributes'] : [];
        $attributesList = implode(', ', $selectedAttributes);

        // Query the database to get "GT" team data
        $sql = "SELECT $attributesList FROM ipl WHERE team_name = 'RCB'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>RCB Team Details</h2>";
            echo "<table>";
            echo "<tr><th>Attribute</th><th>Value</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
                foreach ($selectedAttributes as $attribute) {
                    echo "<tr>";
                    echo "<td>$attribute</td>";
                    echo "<td>" . $row[$attribute] . "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        } else {
            echo "No data available for RCB team.";
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>
