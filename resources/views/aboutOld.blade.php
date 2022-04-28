<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Page</title>
    {{-- Cara link style CSS --}}
    <link rel="stylesheet" href="css/styleHome.css">

</head>

<body>
    <h1 style="text-align: center">Hello world</h1>
    <h1 style="text-align: center">{{ $name }}</h1>
    <h1 style="text-align: center"> random number : {{ time() }}</h1>
    {{-- Cara masukkan js script --}}
    {{-- <script src="js/alert.js"></script> --}}
</body>


</html>
