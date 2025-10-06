@extends('pastel-layout')
@section("content")
     <div>Szia, {{$name}}</div>
       <div>Ez a nap van ma: {{ $day }}</div>
        <div>Szám: {{$number}} </div>
         @if ($logikai)
             <div>Igaz</div>
             <div>sadasasdads</div>
         @else
            <div>Hamis</div>
         @endif
@endsection
