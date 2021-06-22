@extends('layouts.app')

@section('buttons')
<a class="btn btn-primary" href="{{route('cursussen.create')}}" role="button">Voeg een nieuwe cursus toe</a>
@endsection
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Start datum</th>
            <th>Eind datum</th>
            <th>Leerjaar</th>
            <th>Afgerond?</th>
            <th class="Actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cursusweb as $cursusweb)
            <tr>
                <td>{{ $cursusweb->id }}</td>
                <td>{{ $cursusweb->naam_cursus }}</td>
                <td>{{ date('F d, Y', strtotime($cursusweb->start)) }}</td>
                <td>{{ date('F d, Y', strtotime($cursusweb->end)) }}</td>
                <td>{{ $cursusweb->is_afgerond ? 'Yes' : 'No' }}</td>
                <td>{{ date('F d, Y', strtotime($cursusweb->created_at)) }}</td>
                <td class="actions">
                    <a
                        href="{{ action('CursusController@show', ['cursusweb' => $cursusweb->id]) }}"
                        alt="View"
                        title="View">
                      View
                    </a>
                    <a
                        href="{{ action('CursusController@edit', ['cursusweb' => $cursusweb->id]) }}"
                        alt="Edit"
                        title="Edit">
                      Edit
                    </a>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
@endsection