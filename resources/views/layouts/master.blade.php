<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include ('favicon')
        <link rel="stylesheet" href="/fonts/firacode/fira_code.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <!-- Page title -->
        <title>Fredesk: Custom Web Development Company in Berlin. Enterprise Web Apps</title>    
</head>
    <body>
        <div id="app">
            <pacman-loader :loading="loading" color="#00d1b2" size="25px" 
                style="position:absolute;top:50%;left:45%;z-index:9999;background:#fff cover;"></pacman-loader>
            @include ('layouts.header')
            <router-view></router-view>
            @include ('layouts.footer')
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
