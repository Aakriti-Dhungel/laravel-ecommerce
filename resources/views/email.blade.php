<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Request Notification</title>
    <style>
        body {
            background-color: #28a745;
            border-radius: 12px;
            padding: 20px;
            width: 75%;
            color: #fff;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5;
        }
        h1 {
            font-size: 22px;
            margin-bottom: 12px;
        }
        p {
            font-size: 15px;
            margin-bottom: 20px;
        }
        footer {
            font-size: 13px;
            margin-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.3);
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Dear {{ $data['to'] }},</h1>
        <p>{{ $data['message'] }}</p>
        <footer>
            Regards,<br>
            <strong>Vendor Request System</strong>
        </footer>
    </div>
</body>
</html>
