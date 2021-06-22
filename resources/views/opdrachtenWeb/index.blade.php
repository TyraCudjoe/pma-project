@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Hoofdstuk</th>
            <th>Opdracht</th>
        </tr>
    </thead>
    <tbody>
        @foreach($opdrachtenWeb as $opdrachten_web)
        <tr>
            <td>{{$opdrachten_web->id}}</td>
            <td>{{$opdrachten_web->hoofdstuk}}</td>
            <td>{{$opdrachten_web->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection