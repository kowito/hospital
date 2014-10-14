<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>ระบบงานโรงพยาบาล | @yield('title')</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
        <?= stylesheet_link_tag() ?>
        <?= javascript_include_tag() ?>
        
    </head>
    <body>
        <div class="page-header" id="header">
            {{ HTML::image('/assets/logo.png') }}
        </div>
        <div class='container-fluid'>
            <div class='row'>
                @yield('content')
            </div>
        </div>
    </body>
</html>