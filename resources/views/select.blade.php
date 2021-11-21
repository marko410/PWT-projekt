@include('nav')

    <!DOCTYPE html>
<html>
<head>

    <style>
        @import url('http://fonts.cdnfonts.com/css/stigo');

    </style>

</head>

<body>
@if($prihlasenie)
    ID:{{$prihlasenie->id}}<br>
    Meno: {{$prihlasenie->meno}}<br>
    <?php  // Skore: {{$prihlasenie->skore}}<br>?>
@else
    0 bodov
@endif
</body>
</html>
