<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    @bukStyles
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.4.0/css/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css">
</head>
<body>
@bukScripts

<table id="example" class="display wrap table-bordered " style="border-collapse: collapse; width: 100%; padding-top: 10px">
    <thead class="border border-dark">
    <tr class="border border-dark">
        <th style="text-align: center;" class="border border-dark">email</th>
        <th style="text-align: center;" class="border border-dark">password</th>
        <th style="text-align: center;" class="border border-dark">about</th>
        <th style="text-align: center;" class="border border-dark">markdown</th>
    </thead>
</table>
<x-laravelYajra dom="'Qlfrtip'" getData="{{ route('yajra.data') }}" tableTitle="{{ __('Data') }}"></x-laravelYajra>
    <div id="uppy"></div>

    <form name="eri_form" action="#" id="eri_form" method="post">
        @csrf
        <div class="inline-block p-2" style="width: 80%;">
            <x-eimzo_login></x-eimzo_login>
        </div>
        <div class="inline-block">
            <x-eimzo_login_update_button></x-eimzo_login_update_button>
        </div>
        <div style="margin-top: 3em;">
            <x-eimzo_login_sign_button></x-eimzo_login_sign_button>
        </div>
    </form>
</body>

<script>
    var columns = [
        {data: "email", name: 'email'},
        {data: 'password', name: 'password'},
        {data: 'about', name: 'about'},
        {data: 'markdown', name: 'markdown'},
    ];
</script>

<x-laravelUppy url="{{route('uppy',$bladeui->id)}}" target="#uppy" fieldName="uppy"></x-laravelUppy>
</html>
<table>
<?php if($_POST != null){
        echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));
    }?>

</table>






