@extends('layouts.master')
@section('nav')
<div class="navbar navbar-default" role="navigation">
    <ul class="nav nav-pills nav-stacked">
        <li><a href="/hn">ระบบงานเวชระเบียน</a></li>
        <li><a href="/opd">ระบบงานเผู้ป่วยนอก</a></li>
        <li><a href="/clinic">ระบบงานเห้องตรวจแพทย์</a></li>
        <li><a href="/lab">ระบบงานเห้องปฏิบัติการ (LAB)</a></li>
        <li><a href="/rad">ระบบงานเรังสีวิทยา</a></li>
        <li><a href="/phama">ระบบงานเเภสัชกรรม</a></li>
        <li><a href="/medical_supply">ระบบงานเจัดซื้อยาและเวชภัณฑ์</a></li>
        <li><a href="#">ระบบงานเสร้างเสริมสุขภาพ</a></li>
        <li><a href="/opd_finance">ระบบงานเการเงินผู้ป่วยนอก</a></li>
        <li class="active" ><a href="#">ระบบงานเผู้ดูแลระบบ (System Admin)</a></li>
        <li><a href="/report">ระบบงานเ Online Report</a></li>
        <li><a href="/helth_coding">ระบบงานเให้รหัสโรค (Coder)</a></li>
        <li><a href="/appointment">ระบบงานเนัดหมายผู้ป่วย</a></li>
        <li><a href="/public_relation">ระบบงานเประชาสัมพันธ์</a></li>
    </ul>
</div>
@stop