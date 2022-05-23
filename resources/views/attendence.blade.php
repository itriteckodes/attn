<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendence Marked</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <style>
        p,h4{
            color: black;
        }
        body {
    font-family: Ubuntu, "times new roman", times, roman, serif;
}

    </style>
</head>
<body>
    <img style="margin-top:60px"  src="{{asset('uos.png')}}" height="100"  width="120" alt="" srcset="">
        <h1>Your Attendence was marked</h1>
        <br>
        <p color="black">Attendence was marked on {{Carbon\Carbon::now()->format('d/m/Y')}}</p>
        <br>
        <p>Your MiyPromo team</p>

</body>
</html>
