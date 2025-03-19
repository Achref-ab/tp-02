<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator with jQuery and Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">BMI Calculator</h1>
        <div id="result" class="mt-3"></div>
        <form id="bmiForm" class="mt-3">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="height">Height (m):</label>
                <input type="number" id="height" name="height" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>