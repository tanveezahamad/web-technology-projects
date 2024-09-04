<?php
if (isset($_POST['search'])) {
    $city = $_POST['city'];
    $cut = $_POST['current_temp'];
    $dataToStore = "City: $city\ncurrent Temparature: $cut\n";
    file_put_contents('weather.txt', $dataToStore, FILE_APPEND | LOCK_EX);
    header("Location: w.php?city=$city");
}
?>
