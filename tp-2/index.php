<?php
$result = ""; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']);

    if ($weight > 0 && $height > 0) {
        $bmi = $weight / ($height * $height);
        if ($bmi < 18.5) {
            $interpretation = "Underweight";
        } elseif ($bmi < 25) {
            $interpretation = "Normal weight";
        } elseif ($bmi < 30) {
            $interpretation = "Overweight";
        } else {
            $interpretation = "Obesity";
        }
        $result = "Hello, $name. Your BMI is " . number_format($bmi, 2) . " ($interpretation).";
    } else {
        $result = "Invalid input values.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator with jQuery and Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>BMI Calculator</h1>
    <?php if ($result != "") { echo "<p>$result</p>"; } ?>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" required><br>
        <label for="height">Height (m):</label>
        <input type="number" id="height" name="height" required><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
     
