<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../resources/css/main.css">
    <link rel="stylesheet" href="../resources/css/radio.css">
<style>
    @import url('http://fonts.cdnfonts.com/css/stigo');
    p.velkyfrajer{

        /*font-size: 20px;
        font-family: "Roboto", sans-serif;
        margin: 0 auto;*/
        font-size: 20px;
        text-align: center;
        font-family: 'Stigo', sans-serif;

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
        font-family: 'Stigo', sans-serif;

        background: -webkit-linear-gradient(#f17109, #b004da);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    /*submit button style*/


</style>

</head>
@include('nav')
<body>


<div class="raketa">
    <p class="velkyfrajer">Ste prihlásený ako - {{$prihlasenie->meno}}</p>

</div>

<div class="container">

    <div class="textik">Kde sa tvorí žlč?</div><hr>
    <img src="obrázok1.jpg" width="300" height="400">
    <p>                      </p>
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="radioApple" name="radioFruit" value="Odpoved 1" checked>
        <label for="radioApple">V pečeni</label><br>

        <input class="styl" type="radio" id="correct1" name="radioFruit" value="Odpoved 2">
        <label for="radioBanana">V žlčníku</label><br>

        <input class="styl" type="radio" id="correct1" name="radioFruit" value="Odpoved 3">
        <label for="radioOrange">V pankrease</label><br>

        <input class="styl" type="radio" id="jozo" name="radioFruit" value="Odpoved 4">
        <label for="radioOrange">V žlčových uzlíkoch</label><br>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(1)">NEXT</button>

</div>

<div class="container">
    <div class="textik">Čo je na obrázku dva ?</div><hr>
    <img src="pic1.jpg" width="300" height="400">
    <p>                      </p>
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="radioApple" name="radioFruit" value="apple" checked>
        <label for="radioApple">Apple</label>

        <input class="styl" type="radio" id="correct2" name="radioFruit" value="banana">
        <label for="radioBanana">Banana</label><br>

        <input class="styl" type="radio" id="radioOrange" name="radioFruit" value="orange">
        <label for="radioOrange">Orange</label>

        <input class="styl" type="radio" id="radioOrange" name="radioFruit" value="orange">
        <label for="radioOrange">Orange</label>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(2)">NEXT</button>

</div>

<div class="container">
    <div class="textik">Čo je na obrázku tri ?</div><hr>
    <img src="pic1.jpg" width="300" height="400">
    <p>                      </p>
    <input type="radio" name="question3" >300<br>
    <input type="radio" name="question3">400<br>
    <input type="radio" name="question3">150<br>
    <input type="radio" name="question3" id="correct3">500<br>
    <button class="glow-on-hover" class="glow-on-hover" onclick="result()">Vyhodnotiť</button>

    <div class="radio-toolbar">
        <input type="radio" id="radioApple" name="radioFruit" value="apple" checked>
        <label for="radioApple">Apple</label>

        <input type="radio" id="radioBanana" name="radioFruit" value="banana">
        <label for="radioBanana">Banana</label><br>

        <input type="radio" id="radioOrange" name="radioFruit" value="orange">
        <label for="radioOrange">Orange</label>

        <input type="radio" id="radioOrange" name="radioFruit" value="orange">
        <label for="radioOrange">Orange</label>
    </div>
    <p>&nbsp;</p>

</div>
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
