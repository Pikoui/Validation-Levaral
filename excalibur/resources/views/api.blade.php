@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="fr">
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Game !</title>

<center><p id="total">0</p></center>
</head>

<img src="images/cookie.jpg" width=312px height=312px onClick = "Add()">
<img src="images/macarons.jpg" width=10px height=10px onClick = "Add()">

</body>
<script>
let Cookies = 0;
let AddCookies = 1;
function Add() {
Cookies = Cookies + AddCookies;
document.getElementById("total").innerHTML = Cookies;
}
let Macarons = 0;
let AddMacarons = 20;
function Add() {
Macarons = Macarons + AddMacarons;
document.getElementById("total").innerHTML = Macarons;
}
</script>
</html>
@endsection