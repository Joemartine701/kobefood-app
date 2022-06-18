<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p><strong>Name:</strong> {{$dataReceived['first_name']}}  {{$dataReceived['last_name']}} </p>
    <p><strong>Phone:</strong> {{$dataReceived['phone']}}</p>
    <p><strong>Email:</strong> {{$dataReceived['email']}}</p>
    <br>
    <h2>Message</h2>
    {{$dataReceived['message']}}
</body>
</html>