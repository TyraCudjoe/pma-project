@extends('layouts.app')

@section('buttons')
<a class="btn btn-primary" href="{{route('cursussen.create')}}" role="button">Voeg een nieuwe cursus toe</a>
@endsection
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID:</th>
            <th>Naam:</th>
            <th>Start datum:</th>
            <th>Eind datum:</th>
            <th>Afgerond:</th>
            <th>Commentaar:</th>
            <th>Gemaakt op:</th>
            <th class="Actions">Actions:</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cursusWeb as $cursusWeb)
        <tr>
            <td>{{ $cursusWeb->id }}</td>
            <td>{{ $cursusWeb->naam_cursus }}</td>
            <td>{{ date('F d, Y', strtotime($cursusWeb->start)) }}</td>
            <td>{{ date('F d, Y', strtotime($cursusWeb->end)) }}</td>
            <td>{{ $cursusWeb->is_afgerond ? 'Yes' : 'No' }}</td>
            <td>{{ $cursusWeb->commentaar }}</td>
            <td>{{ date('F d, Y', strtotime($cursusWeb->created_at)) }}</td>
            <td class="actions">
                <a href="{{ action('CursusController@show', ['cursusWeb' => $cursusWeb->id]) }}" alt="View"
                    title="View">
                    View
                </a>
                <a href="{{ action('CursusController@edit', ['cursusWeb' => $cursusWeb->id]) }}" alt="Edit"
                    title="Edit">
                    Edit
                </a>
                <form action="{{ action('CursusController@destroy', ['cursusWeb' => $cursusWeb->id]) }}" method="POST">
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <button type="submit" class="btn btn-link" title="delete" value="delete">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
@endsection