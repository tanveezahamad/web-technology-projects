<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $serviceChoice = $_POST['serviceChoice'];
    $numberOfMembers = $_POST['numberOfMembers'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $contactNumber = $_POST['contactNumber'];

    // Store the data in a database or file
    // For this example, we'll store it in a simple text file
    $data = "Service: $serviceChoice\nMembers: $numberOfMembers\nStart Date: $startDate\nEnd Date: $endDate\nName: $name\nAge: $age\nContact Number: $contactNumber\n";

    // Append data to a file (you can choose a different storage method)
    file_put_contents('booking_data.txt', $data, FILE_APPEND);

    // Display a confirmation message
} else {
    // Handle invalid requests or direct access to this script
    echo "Invalid request.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="book" id="book">
        <div class="container">
            <div class="main-text">
                <h1><span>B</span>ooking details have been successfully Stored</h1>
            </div>
            <!-- Other HTML content as needed -->
        </div>
    </section>
    <div class="container col-xxl-8 pl-6 pb-5" >
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="book-img.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <div class="booking-details">
                    <?php
                    // Function to display the last seven booking details
                    function displayLastSevenBookingDetails() {
                        $lines = file('booking_data.txt');
                        $numEntries = count($lines);

                        // Display up to the last seven entries
                        $start = max(0, $numEntries - 7);
                        echo "<h2>Booking Details:</h2>";
                        echo '<ul>';
                        for ($i = $start; $i < $numEntries; $i++) {
                            $entry = trim($lines[$i]);
                            echo "<li>$entry</li>";
                        }
                        echo '</ul>';
                        echo "<h2>Your Trip will be in between of the days</h2>";
                    }

                    displayLastSevenBookingDetails();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
