<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../resources/css/main.css">



    <style>
        @import url('http://fonts.cdnfonts.com/css/balthazar');
        p.velkyfrajer{

            /*font-size: 20px;
            font-family: "Roboto", sans-serif;
            margin: 0 auto;*/
            font-size: 20px;
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        div.raketa{
            /*border: 5px solid darkgray;
            background-color: gray;
            padding: 10px;
            margin: 10px;*/
            position: relative;
            width: 100%;
            right:43%;
        // background-color: rgba(0, 0, 255, 0.1);
            margin-top: 5px;
            height: 30px;
        //padding: 0px;

        }
        body{
            background-image: url("bcg.jpeg");
            /*margin: auto;
            width: 60%;
            border: 5px solid gray;
            background-color: dimgray;
            padding: 10px;*/
        }

        .container {
            border: 3px solid pink;
            border-radius: 10px;
            width: 60%;
            padding: 20px;
            display: none;
            text-align: center;
            background-color: rgba(0, 0, 255, 0.1);

            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        button {
            margin-top: 10px;
        }
        img{

            justify-content: right;
            margin-bottom: 50px;
            left: 50%;
            border: 3px solid pink;

        }
        div.textik{
            font-size: 35px;
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        /*submit button style*/

        div.kon2{
        // border: 5px solid pink;
            background-color: rgba(0, 0, 255, 0.1);
            padding: 10px;
            margin: 10px;
            margin-bottom: 45px;
            display:block;
            text-align: center;
            justify-content: center;
            position: relative;
            width: 40%;
            right: -28%;

            border-radius: 25px;
            border: 2px solid pink;
        }

        .radio-toolbar {
            margin: 10px;
        //display: block;

        }
        input.styl{

        }

        .radio-toolbar input[type="radio"] {
            opacity: 0;
            position: fixed;
            width: 20px;
            height: 20px;

        }

        .radio-toolbar label {
            display: inline-block;
            background: hotpink;
            padding: 10px 20px;
            font-family: sans-serif, B;
            font-size: 16px;
            border: 2px solid pink;
            border-radius: 4px;
            width:180px;
            margin-bottom: 3px;
        }

        .radio-toolbar label:hover {
            background-color: pink;
        }

        .radio-toolbar input[type="radio"]:focus + label {
            border: 2px dashed pink;
        }

        .radio-toolbar input[type="radio"]:checked + label {
            background-color: pink;
            border-color: hotpink;
        }







    </style>

</head>
@include('nav')
<body>


<div class="raketa">
    <p class="velkyfrajer">Ste prihlásený ako - {{$prihlasenie->meno}}</p>

</div>

<div class="container">

    <div class="textik">Kde sa tvorí žlč?</div><hr>
    <img src="obrázok1.jpg" width="450" height="400">

    <div class="kon2">
<<<<<<< HEAD
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="correct1" name="odpoved1" value="Odpoved 1" >
            <label for="Odpoved1">V pečeni</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved1"  value="Odpoved 2">
            <label for="Odpoved2">V žlčníku</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved1" value="Odpoved 3">
            <label for="Odpoved3">V pankrease</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved1" value="Odpoved 4">
            <label for="Odpoved4">V žlčových uzlíkoch</label><br>
        </div>
=======
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="correct1" name="odpoved1" value="Odpoved 1" >
        <label for="Odpoved1">V pečeni</label><br>

        <input class="styl" type="radio" id="Odpoved2"  name="odpoved1"  value="Odpoved 2">
        <label for="Odpoved2">V žlčníku</label><br>

        <input class="styl" type="radio" id="Odpoved3"  name="odpoved1" value="Odpoved 3">
        <label for="Odpoved3">V pankrease</label><br>

        <input class="styl" type="radio" id="Odpoved4"  name="odpoved1" value="Odpoved 4">
        <label for="Odpoved4">V žlčových uzlíkoch</label><br>
    </div>
>>>>>>> feature/oprava
    </div>
    <button class="glow-on-hover" class="next" onclick="next(1)">NEXT</button>

</div>

<div class="container">
    <div class="textik">Vydychovaný vzduch obsahuje najviac?</div><hr>
    <img src="obrázok2.jpg" width="450" height="400">

    <div class="kon2">
<<<<<<< HEAD
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1" name="odpoved2" value="Odpoved 1" >
            <label for="Odpoved1">Kyslíku</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved2" value="Odpoved 2">
            <label for="Odpoved2">Oxidu uhličitého</label><br>

            <input class="styl" type="radio" id="correct2"  name="odpoved2" value="Odpoved 3" >
            <label for="Odpoved3">Dusíku</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved2" value="Odpoved 4">
            <label for="Odpoved4">Vodnej pary</label><br>
        </div>
=======
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="Odpoved1" name="odpoved2" value="Odpoved 1" >
        <label for="Odpoved1">Kyslíku</label><br>

        <input class="styl" type="radio" id="Odpoved2"  name="odpoved2" value="Odpoved 2">
        <label for="Odpoved2">Oxidu uhličitého</label><br>

        <input class="styl" type="radio" id="correct2"  name="odpoved2" value="Odpoved 3" >
        <label for="Odpoved3">Dusíku</label><br>

        <input class="styl" type="radio" id="Odpoved4"  name="odpoved2" value="Odpoved 4">
        <label for="Odpoved4">Vodnej pary</label><br>
    </div>
>>>>>>> feature/oprava
    </div>
    <button class="glow-on-hover" class="next" onclick="next(2)">NEXT</button>

</div>

<div class="container">
    <div class="textik">Koľko litrov krvi prečerpá za deň ľudské srdce?</div><hr>
    <img src="obrázok3.jpg" width="450" height="400">

    <div class="kon2">
<<<<<<< HEAD
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved3" value="Odpoved 1"  >
            <label for="Odpoved1">4500</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved3" value="Odpoved 2">
            <label for="Odpoved2">5500</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved3" value="Odpoved 3">
            <label for="Odpoved3">6500</label><br>

            <input class="styl" type="radio" id="correct3"  name="odpoved3" value="Odpoved 4">
            <label for="Odpoved4">7500</label><br>
        </div>
=======
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="Odpoved1"  name="odpoved3" value="Odpoved 1"  >
        <label for="Odpoved1">4500</label><br>

        <input class="styl" type="radio" id="Odpoved2"  name="odpoved3" value="Odpoved 2">
        <label for="Odpoved2">5500</label><br>

        <input class="styl" type="radio" id="Odpoved3"  name="odpoved3" value="Odpoved 3">
        <label for="Odpoved3">6500</label><br>

        <input class="styl" type="radio" id="correct3"  name="odpoved3" value="Odpoved 4">
        <label for="Odpoved4">7500</label><br>
    </div>
>>>>>>> feature/oprava
    </div>
    <button class="glow-on-hover"  onclick="result()">Vyhodnotiť</button>

</div>




<!--<div class="container">
    <div class="textik">Čo je na obrázku tri ?</div><hr>
    <img src="pic1.jpg" width="300" height="400">
    <p>                      </p>

    <div class="radio-toolbar">
        <input class="styl" type="radio" id="Odpoved1" value="Odpoved 1" checked>
        <label for="Odpoved 1">V pečeni</label><br>

        <input class="styl" type="radio" id="correct1"  value="Odpoved 2">
        <label for="Odpoved 2">V žlčníku</label><br>

        <input class="styl" type="radio" id="Odpoved3"  value="Odpoved 3">
        <label for="Odpoved 3">V pankrease</label><br>

        <input class="styl" type="radio" id="Odpoved4" value="Odpoved 4">
        <label for="Odpoved 4">V žlčových uzlíkoch</label><br>
    </div>
    <button class="glow-on-hover" class="glow-on-hover" onclick="result()">Vyhodnotiť</button>
    <p>&nbsp;</p>

</div>

<div class="container">
    <div class="textik">Čo je na obrázku tri ?</div><hr>
    <img src="pic1.jpg" width="300" height="400">
    <p>                      </p>

    <div class="radio-toolbar">
        <input class="styl" type="radio" id="Odpoved1" value="Odpoved 1" checked>
        <label for="Odpoved 1">V pečeni</label><br>

        <input class="styl" type="radio" id="correct1"  value="Odpoved 2">
        <label for="Odpoved 2">V žlčníku</label><br>

        <input class="styl" type="radio" id="Odpoved3"  value="Odpoved 3">
        <label for="Odpoved 3">V pankrease</label><br>

        <input class="styl" type="radio" id="Odpoved4" value="Odpoved 4">
        <label for="Odpoved 4">V žlčových uzlíkoch</label><br>
    </div>
    <button class="glow-on-hover" class="glow-on-hover" onclick="result()">Vyhodnotiť</button>
    <p>&nbsp;</p>

</div>
-->
<script>
    // displaying the first block of question
    document.getElementsByClassName('container')[0].style.display = "block";

    // DEFINING THE NEXT FUNCTION
    function next(id) {
        document.getElementsByClassName('container')[id-1].style.display = "none";
        document.getElementsByClassName('container')[id].style.display = "block";
    }
    //getting final result

    function result() {
        var score = 0;
        if (document.getElementById('correct1').checked) {
            score++;
        }
        if (document.getElementById('correct2').checked) {
            score++;
        }
        if (document.getElementById('correct3').checked) {
            score++;
        }

        alert("your score is: "+ score);

    }



</script>

</body>
</html>
