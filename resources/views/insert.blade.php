<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../resources/css/main.css">
    <style>
        @import url('http://fonts.cdnfonts.com/css/stigo');
        p.meno{
            font-size: 30px;
            font-family: "Roboto", sans-serif;
            margin: 0 auto;
            text-align: center;
        }

        div.megakantajner{
            //border: 5px solid pink;
            background-color: rgba(0, 0, 255, 0.08);
            padding: 10px;
            margin: 20px;
            margin-top: 50px;
            //display:block;
            text-align: center;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 40%;
            height: 260px;
            right: -30%;
            border-radius: 25px;
            border: 2px solid pink;
        }

        div.kontajner{
           // border: 5px solid pink;
            background-color: rgba(0, 0, 255, 0.1);
            padding: 10px;
            margin: 10px;
            margin-bottom: 45px;
            display:block;
            text-align: center;
            align-items: center;
            justify-content: center;
            position: relative;

            border-radius: 25px;
            border: 2px solid pink;
            //width: 20%;
            //right: -39%;
        }

        div.baton{
            margin: 0 auto;
            text-align: center;
        }
        div.inp{
            text-align: center;
        }

        input[type=text] {
            width: 10%;
            padding: 7px 15px;
            margin: 10px 5px;
            box-sizing: border-box;
            border: 4px solid pink;
            border-radius: 5px;
        }
        h1.nadpis{
            position: relative;
            //left:2%;
            font-size: 50px;
            text-align: center;
            font-family: 'Stigo', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        p.meno{
            text-align: center;
            font-family: 'Stigo', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    </style>

</head>
<body>
@include('nav')
<form method="post" action="{{route('insert')}}">

    <h1 class="nadpis">Vedecký Quiz</h1>
    <div class="megakantajner">
    <div class="kontajner">
        <p class="meno">Meno Hráča</p><br>
        <div class="inp">
            <input type="text" name="meno" placeholder="meno" ><br>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
    </div>

        <p></p>


    <div class="baton">-
        <button type="submit"  class="glow-on-hover"  >
            HRAJ!
        </button>
    </div>
    </div>
</form>
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
</body>
</html>
