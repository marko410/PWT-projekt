@include('nav')
@if($task)
    ID:{{$task->id}}<br>
    Uloho: {{$task->content}}<br>
    Zodpovedna osoba: {{$task->owner}}<br>
@else
    Uloha neexistuje
@endif
