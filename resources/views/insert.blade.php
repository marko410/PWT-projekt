<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../resources/css/main.css">
    <style>
        @import url('http://fonts.cdnfonts.com/css/balthazar');
        p.meno{
            font-size: 30px;
            font-family: "Balthasar", sans-serif;
            margin: 0 auto;
            text-align: center;
        }

        div.megakantajner{
           border: 5px solid pink;
            background-color: rgba(0, 0, 255, 0.08);
            padding: 10px;


    margin-bottom: 39px;

            display:block;
            text-align: center;
            align-items: center;
            justify-content: center;
            position:relative;
            width: 60%;
            height: 280px;
            margin-inline: auto;
            border-radius: 25px;
            border: 2px solid pink;
        }

        div.kontajner{
             border: 5px solid pink;
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

        }

        div.baton{
            margin-top:10px;
            margin-bottom: 10px ;
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

    min-width:7em;
        }
        h1.nadpis{
            position: relative;
            /* left:2%; */
            font-size: 50px;
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        p.meno{
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        div.omg{

            position: relative;
            top:-10%;
            margin: 2px;
         //   text-decoration: underline 4px solid pink;
            width: 30%;
            font-weight: bolder;

            font-family: 'Balthasar', sans-serif;
            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }


    </style>

</head>
<body>
@include('nav')
<form method="post" action="{{route('insert')}}">
<div class="kontajner">
    <h1 class="nadpis">Vedecký Quiz</h1>
    <div class="megakantajner">

        <p class="meno">Meno </p><br>
        <div class="inp">
            <input type="text" name="meno" placeholder="Meno" ><br>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="baton">
        <button type="submit"  class="glow-on-hover" onclick="audijko()" >
            HRAJ!
        </button>
    </div>
    </div>
    <audio id="hitovicka" src="infosound.wav" preload="auto"></audio>

        @if(session()->has('error'))
            <div class="omg">
                <div class="alert alert-danger" >
                    <script>
                        var hitovica2 = document.getElementById("hitovicka");
                        hitovica2.play();
                    </script>
                    {{ session()->get('error') }}
                </div>
            </div>
        @endif




    </div>
</form>
<audio id="hitovicarna" src="playsound.wav" preload="auto"></audio>
<script>
    function audijko(){
        var hitovica4 = document.getElementById("hitovicarna");
        hitovica4.play();
    }
</script>


</body>
</html>
