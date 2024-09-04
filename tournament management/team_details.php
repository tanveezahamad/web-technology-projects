<!DOCTYPE html>
<html>
<head>
    <title>Enter Team Details</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-image: url('ipl1.png'); background-size: cover; ">
    <div class="form-container">
        <h1>Enter Team Details</h1>
        <form action="process_details.php" method="post">
            <div class="form-group">
                <label for="team-name">Team Name:</label>
                <input type="text" name="team-name" id="team-name" required>
            </div>

            <div class="form-group">
                <label for="matches-played">Matches Played:</label>
                <input type="number" name="matches-played" id="matches-played" required>
            </div>

            <div class="form-group">
                <label for="matches-won">Matches Won:</label>
                <input type="number" name="matches-won" id="matches-won" required>
            </div>

            <div class="form-group">
                <label for="matches-lost">Matches Lost:</label>
                <input type="number" name="matches-lost" id="matches-lost" required>
            </div>

            <div class="form-group">
                <label for="net-strike-rate">Net Strike Rate (NRR):</label>
                <input type="text" name="net-strike-rate" id="net-strike-rate" required pattern="[-+]?\d{1,4}(\.\d{1,2})?">
            </div>

            <div class="form-group">
                <label for="total-points">Total Points:</label>
                <input type="number" name="total-points" id="total-points" required>
            </div>

            <input type="submit" value="Submit" class="submit-button">
        </form>
    </div>
</body>
</html>
