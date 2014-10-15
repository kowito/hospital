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
                <div  class="col-md-2">
                    <div class="navbar navbar-default" role="navigation">
                        
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active" ><a href="#">ระบบงานเวชระเบียน</a></li>
                            <li><a href="#">ระบบงานเผู้ป่วยนอก</a></li>
                            <li><a href="#">ระบบงานเห้องตรวจแพทย์</a></li>
                            <li><a href="#">ระบบงานเห้องปฏิบัติการ (LAB)</a></li>
                            <li><a href="#">ระบบงานเรังสีวิทยา</a></li>
                            <li><a href="#">ระบบงานเเภสัชกรรม</a></li>
                            <li><a href="#">ระบบงานเจัดซื้อยาและเวชภัณฑ์</a></li>
                            <li><a href="#">ระบบงานเสร้างเสริมสุขภาพ</a></li>
                            <li><a href="#">ระบบงานเการเงินผู้ป่วยนอก</a></li>
                            <li><a href="#">ระบบงานเผู้ดูแลระบบ (System Admin)</a></li>
                            <li><a href="#">ระบบงานเ Online Report</a></li>
                            <li><a href="#">ระบบงานเให้รหัสโรค (Coder)</a></li>
                            <li><a href="#">ระบบงานเนัดหมายผู้ป่วย</a></li>
                            <li><a href="#">ระบบงานเประชาสัมพันธ์</a></li>
                        </ul>
                        
                    </div>
                </div>

                <div  class="col-md-10"> @yield('content') </div>
                
            </div>
        </div>
    </body>
</html>