@include('nav')
<form method="post" action="{{route('insert')}}">
    Uloha:<br>
    <input type="text" name="content" placeholder="Co treba robit"><br>
    Zodpovedná osoba: <br>
    <input type="text"name="owner" placeholder="Majitel ulohy"><br>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="Ulozit">
</form>
