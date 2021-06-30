@extends('layouts.app')

@section('content')
<dl class="row mt-5">
    
    <dt class="col-sm-3">ID:</dt>
    <dd class="col-sm-9">{{ $cursusWeb->id }}</dd>

    <dt class="col-sm-3">Naam Cursus:</dt>
    <dd class="col-sm-9">{{ $cursusWeb->naam_cursus }}</dd>

    <dt class="col-sm-3">Start Datum:</dt>
    <dd class="col-sm-9">{{ date('F d, Y', strtotime($cursusWeb->start)) }}</dd>

    <dt class="col-sm-3">Eind Datum:</dt>
    <dd class="col-sm-9">{{ date('F d, Y', strtotime($cursusWeb->end)) }}</dd>

    <dt class="col-sm-3">Afgerond:</dt>
    <dd class="col-sm-9">{{ $cursusWeb->is_afgerond ? 'Yes' : 'No' }}</dd>

    <dt class="col-sm-3">Commentaar:</dt>
    <dd class="col-sm-9">{{ $cursusWeb->commentaar }}</dd>

    <dt class="col-sm-3">Created at:</dt>
    <dd class="col-sm-9">{{ date('F d, Y', strtotime($cursusWeb->created_at)) }}</dd>

    <dt class="col-sm-3">Updated at:</dt>
    <dd class="col-sm-9">{{ date('F d, Y', strtotime($cursusWeb->updated_at)) }}</dd>
</dl>
@endsection