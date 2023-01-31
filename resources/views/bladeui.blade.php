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






