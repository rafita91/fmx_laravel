<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Default') | Panel de administración</title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->   
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/materialize/css/materialize.css') }}">
        <!--Import custom.css-->   
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        
    @include('admin.template.partials.unique')
        
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('plugins/materialize/js/materialize.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
