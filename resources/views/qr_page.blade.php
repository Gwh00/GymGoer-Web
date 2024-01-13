<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Page</title>
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Scan the QR Code</h1>
        <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code" style="margin-top: 20px;">
    </div>
</body>
</html>
