<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Selection</title>
</head>
<body>

<h1>Date and Time Selection</h1>

<form action="process_form.php" method="post">
    <label for="date">Select Date:</label>
    <input type="date" id="date" name="date" required>

    <br>

    <label for="time">Select Time:</label>
    <input type="time" id="time" name="time" required>

    <br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
