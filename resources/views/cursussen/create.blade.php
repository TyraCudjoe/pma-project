@extends('layouts.app')

@section('content')
<div class="col">
    <form action="{{ route('cursussen.store') }}" method="POST">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="naam_cursus">Cursus naam</label>
            <div class="col-sm-10">
                <input name="naam_cursus" type="text" class="form-control" required
                    placeholder="Geef de cursus een naam" />
                <small class="form-text text-muted">De naam van de cursus.</small>
            </div>
        </div>

        <!-- <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="klassen">Klas</label>
            <div class="col-sm-10">
                <select name="klassen" class="form-control" id="" required>
                    @foreach($klassen as $klassen => $display)
                    <option value="{{ $klassen }}">{{ $display }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">De verschillende klassen.</small>
            </div>
        </div> -->

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="start">Start Date</label>
            <div class="col-sm-10">
                <input name="start" type="date" class="form-control" required placeholder="yyyy-mm-dd" />
                <small class="form-text text-muted">Start datum van deze cursus.</small>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="end">End Date</label>
            <div class="col-sm-10">
                <input name="end" type="date" class="form-control" required placeholder="yyyy-mm-dd" />
                <small class="form-text text-muted">Eind datum van deze cursus.</small>
            </div>
        </div>

        <!-- <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="id">User</label>
            <div class="col-sm-10">
                <select name="docenten" class="form-control" id="" required>
                    @foreach($docenten as $docent_id => $display)
                    <option value="{{ $docent_id }}">{{ $display }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">De docent die de cursus heeft gemaakt.</small>
            </div>
        </div> -->

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="commentaar">Commentaar</label>
            <div class="col-sm-10">
                <input name="commentaar" type="text" class="form-control" placeholder="Voeg eventuele commentaar" />
                <small class="form-text text-muted">Commentaar op deze cursus.</small>
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />


        <div class="form-group row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Cursus toevoegen</button>
            </div>
            <div class="col-sm-9">
                <a href="{{ route('cursussen.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection