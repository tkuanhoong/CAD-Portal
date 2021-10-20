@foreach ($events as $event)
   {{$event->title}} <br>
   @foreach($event->users as $event)
    {{ $event->pivot->full_name }} <br>
   @endforeach
@endforeach