@include('nav')

    <!DOCTYPE html>
<html>
<head>

    <style>
        @import url('http://fonts.cdnfonts.com/css/balthasar');

    </style>

</head>

<body>
@if($prihlasenie)
    ID:{{$prihlasenie->id}}<br>
    Meno: {{$prihlasenie->meno}}<br>
    Skore: {{$prihlasenie->score}}<br>
@else
    0 bodov
@endif
</body>
</html>
