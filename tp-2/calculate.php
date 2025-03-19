<?php
header('Content-Type: application/json');

if (isset($_POST['name'], $_POST['weight'], $_POST['height'])) {
    $name = htmlspecialchars($_POST['name']);
    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']);

    if ($weight <= 0 || $height <= 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid input values.']);
        exit;
    }

    $bmi = $weight / ($height * $height);
    $interpretation = ($bmi < 18.5) ? "Underweight" :
                      ($bmi < 25) ? "Normal weight" :
                      ($bmi < 30) ? "Overweight" : "Obesity";

    echo json_encode([
        'success' => true,
        'bmi' => $bmi,
        'message' => "Hello, $name. Your BMI is " . number_format($bmi, 2) . " ($interpretation)."
    ]);
    exit;
}

echo json_encode(['success' => false, 'message' => 'Data not received.']);
exit;
?>