<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>ระบบงานโรงพยาบาล | @yield('title')</title>
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <?= stylesheet_link_tag() ?>
        <?= javascript_include_tag() ?>

    </head>
    <body>
        <div id="main-container">

            <div class="page-header" id="header">
                {{ HTML::image('/assets/logo.png', 'OSGD - Hospital', array('class' => 'logo')) }}
            </div>
            <div class='row'>
              <div  class="col-md-12">
                @yield('login')
              </div>
            </div>

            <div class='row'>
                <div  class="col-md-2">

                    @yield('nav')

                </div>

                <div  class="col-md-10"> @yield('content') </div>

            </div>
        </div>
    </body>
</html>
