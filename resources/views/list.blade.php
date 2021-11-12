<!DOCTYPE html>
<html>
<head>
<style>
    p.velkyfrajer{
        font-size: 20px;
        font-family: "Roboto", sans-serif;
        margin: 0 auto;
    }

    div.raketa{
        border: 5px solid darkgray;
        background-color: gray;
        padding: 10px;
        margin: 10px;
    }
    body{
        margin: auto;
        width: 60%;
        border: 5px solid gray;
        background-color: dimgray;
        padding: 10px;
    }
</style>

</head>
<body>


<div class="raketa">
    <p class="velkyfrajer">Ste prihlásený ako : {{$prihlasenie->meno}}</p>

</div>
</body>
</html>
