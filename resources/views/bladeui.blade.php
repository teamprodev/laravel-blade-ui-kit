<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <title>Document</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
</body>
</html>
<table>
<?php if($_POST != null){
        echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));
    }?>

</table>






