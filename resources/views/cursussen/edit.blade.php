@extends('layouts.app')

@section('content')
<div class="col">
    <form action="{{ route('cursussen.update', ['cursusWeb' => $cursusWeb]) }}" method="POST">
    <input name="_method" type="hidden" value="PUT">
        
        @include('cursussen.fields')

        <div class="form-group row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Cursus bijwerken</button>
            </div>
            <div class="col-sm-9">
                <a href="{{ route('cursussen.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection