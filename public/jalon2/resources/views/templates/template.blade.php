

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="../resources/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{URL::asset('css/styles.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('css/carou2.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('css/navbar.css')}}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    </head>
    @if (Auth::check())
    @include('navigation-menu')
    @else
    @include('elements.header')
    @endif
<div>
    @yield('content')
</div>
</body>
