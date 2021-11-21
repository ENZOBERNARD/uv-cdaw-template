<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body class="antialiased">
    <h1>Bonjour <?php echo request('nom')?></h1>
    </body>
</html>
