@extends('layouts.main-layout')
@section('content')
       

<h1>homepage</h1>
<a href="{{route('form')}}">nuovo ospite</a>     
<div>
    <h2>ospiti:</h2>
    <ul>
        @foreach ($ospiti as $ospite)
        <li>
            <span>{{$ospite->name}} --> {{$ospite->lastname}}</span>
            <a href="{{route('ospite', $ospite ->id)}}">Vedi Dettagli Ospite</a>
        </li>
        @endforeach
    </ul>       
</div>                                                              
@endsection