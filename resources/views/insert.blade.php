<!DOCTYPE html>
<html>
<head>

    <style>
        p.meno{
            font-size: 30px;
            font-family: "Roboto", sans-serif;
            margin: 0 auto;
            text-align: center;
        }
        body{
            margin: auto;
            width: 60%;
            border: 5px solid gray;
            background-color: dimgray;
            padding: 10px;
        }
        div.kontajner{
            border: 5px solid darkgray;
            background-color: gray;
            padding: 10px;
            margin: 10px;

        }
        div.baton{
            margin: 0 auto;
            text-align: center;
        }
        div.inp{
            text-align: center;
        }
    </style>

</head>
<body>
@include('nav')
<form method="post" action="{{route('insert')}}">
    <div class="kontajner">
        <p class="meno">Meno Hráča</p><br>
        <div class="inp">
            <input type="text" name="meno" placeholder="meno" ><br>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">


    </div>
    <div class="baton">
        <input type="submit" value="Hrať">
    </div>
</form>

</body>
</html>
