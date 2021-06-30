<div class="form-group row">
            <label class="col-sm-2 col-form-label" for="naam_cursus">Cursus naam</label>
            <div class="col-sm-10">
                <input name="naam_cursus" type="text" class="form-control" required
                    placeholder="Geef de cursus een naam" value="{{ $cursusWeb->naam_cursus ?? '' }}"/>
                <small class="form-text text-muted">De naam van de cursus.</small>
            </div>
        </div>

        

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="start">Start Date</label>
            <div class="col-sm-10">
                <input name="start" type="date" class="form-control" required placeholder="yyyy-mm-dd" value="{{ $cursusWeb->start ?? '' }}"/>
                <small class="form-text text-muted">Start datum van deze cursus.</small>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="end">End Date</label>
            <div class="col-sm-10">
                <input name="end" type="date" class="form-control" required placeholder="yyyy-mm-dd" value="{{ $cursusWeb->end ?? '' }}"/>
                <small class="form-text text-muted">Eind datum van deze cursus.</small>
            </div>
        </div>

        

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="commentaar">Commentaar</label>
            <div class="col-sm-10">
                <input name="commentaar" type="text" class="form-control" placeholder="Voeg eventuele commentaar" value="{{ $cursusWeb->commentaar ?? '' }}"/>
                <small class="form-text text-muted">Commentaar op deze cursus.</small>
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />