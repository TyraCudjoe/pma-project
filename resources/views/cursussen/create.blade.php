@extends('layouts.app')

@section('content')
<div class="col">
    <form action="{{ route('cursussen.store') }}" method="POST">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="cursussen">Cursus naam</label>
            <div class="col-sm-10">
                <input name="cursussen" type="text" class="form-control" required
                    placeholder="Geef de cursus een naam" />
                <small class="form-text text-muted">De naam van de cursus.</small>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="klassen">Klas</label>
            <div class="col-sm-10">
                <select name="klassen" class="form-control" id="" required>
                    @foreach($klassen as $klassen => $display)
                    <option value="{{ $klassen }}">{{ $display }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">De verschillende klassen.</small>
            </div>
        </div>

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

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="docent_id">User</label>
            <div class="col-sm-10">
                <select name="docent_id" class="form-control" id="docent_id" required>
                    @foreach($docenten as $id => $display)
                    <option value="{{ $id }}">{{ $display }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">The user booking the room.</small>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="commentaar">Commentaar</label>
            <div class="col-sm-10">
                <input name="commentaar" type="text" class="form-control" placeholder="Voeg eventuele commentaar" />
                <small class="form-text text-muted">Commentaar op deze cursus.</small>
            </div>
        </div>

        <!-- <input type="hidden" name="is_reservation" value="1"/> -->

        <!-- @csrf -->

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