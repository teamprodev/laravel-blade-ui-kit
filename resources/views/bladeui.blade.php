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
    <x-label for="Form" />

    <x-form action="{{route('bladeui')}}">
        <x-label for="Email" />
        <x-email name="email" class="p-4" value="{{$bladeui->email}}"/>
        <br>

        <x-label for="Password" />
        <x-input name="password" id="confirmPassword" type="password" class="p-4" value="{{$bladeui->password}}"/>
        <br>

        <x-label for="About" />
        <textarea name="about" id="about" rows="3" >{{$bladeui->about}}</textarea>
        <br>

        <x-label for="Markdown Text" />
        <x-easy-mde name="markdown" value="{{$bladeui->markdown}}">Markdown text</x-easy-mde>
        <br>

        <x-label for="Color Picker" />
        <x-color-picker name="color" value="{{$bladeui->color}}"/>
        <br>

        <table id="example" class="display wrap table-bordered " style="border-collapse: collapse; width: 100%; padding-top: 10px">
            <thead class="border border-dark">
            <tr class="border border-dark">
                <th style="text-align: center;" class="border border-dark">email</th>
                <th style="text-align: center;" class="border border-dark">password</th>
                <th style="text-align: center;" class="border border-dark">about</th>
                <th style="text-align: center;" class="border border-dark">markdown</th>
            </thead>
        </table>
        @bukScripts

        <script>
            var columns = [
                {data: "email", name: 'email'},
                {data: 'password', name: 'password'},
                {data: 'about', name: 'about'},
                {data: 'markdown', name: 'markdown'},
            ];
        </script>
        <x-laravelYajra dom="'Qlfrtip'" getData="{{ route('yajra.data') }}" tableTitle="{{ __('Data') }}"></x-laravelYajra>

        <x-label for="Flat-Pickr" />
        <x-flat-pickr name="date_1" value="{{$bladeui->date_1}}"/>
        <br>

        <x-label for="Pikaday" />
        <x-pikaday name="date_2" value="{{$bladeui->date_2}}"/>
        <br>

        <x-label for="Flat-Pickr" />
        <x-flat-pickr name="date_1" value="{{$bladeui->date_1}}"/>
        <br>

        <x-label for="Pikaday" />
        <x-pikaday name="date_2" value="{{$bladeui->date_2}}"/>
        <br>

        <x-form-button :action="route('bladeui')" class="p-4 bg-red-500">
            Submit
        </x-form-button>
    </x-form>

</body>
</html>
<table>
<?php if($_POST != null){
        echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));
    }?>

</table>






