<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body class="antialiased">
    <h1>Bonjour <?php echo request('nom') ," ", request('prenom') ?></h1>
    </body>
</html>
