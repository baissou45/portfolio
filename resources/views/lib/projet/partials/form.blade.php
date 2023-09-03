    <div class="row">
        <div class="form-group col-sm-12 col-md-4">
            <label for="nom" class="col-sm-1-12 col-form-label">Nom</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" value="{{ old('nom', $projet->nom ?? '') }}" name="nom" id="nom">
            </div>
            @if ($errors->has('nom'))
                <div class="text-danger">
                    {{ $errors->first('nom') }}
                </div>
            @endif
        </div>

        <div class="form-group col-sm-12 col-md-4">
            <label for="technologies" class="col-sm-1-12 col-form-label">Technologies</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" value="{{ old('technologies', $projet->technologies ?? '') }}" name="technologies" id="technologies" placeholder="Flutter, Laravel">
            </div>
            @if ($errors->has('technologies'))
                <div class="text-danger">
                    {{ $errors->first('technologies') }}
                </div>
            @endif
        </div>

        <div class="form-group col-sm-12 col-md-4">
            <label for="client" class="col-sm-1-12 col-form-label">Nbr Equipe</label>
            <div class="col-sm-1-12">
                <input type="number" class="form-control" value="{{ old('equipe', $projet->equipe ?? "") }}" name="equipe" id="equipe">
            </div>
            @if ($errors->has('client'))
                <div class="text-danger">
                    {{ $errors->first('client') }}
                </div>
            @endif
        </div>

        <div class="form-group col-sm-12 col-md-4">
            <label for="lien" class="col-sm-1-12 col-form-label">lien</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" value="{{ old('lien', $projet->lien ?? 'https://') }}" name="lien" id="lien">
            </div>
            @if ($errors->has('lien'))
                <div class="text-danger">
                    {{ $errors->first('lien') }}
                </div>
            @endif
        </div>

        <div class="form-group col-sm-12 col-md-4">
            <label for="client" class="col-sm-1-12 col-form-label">Client</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" value="{{ old('client', $projet->client ?? '') }}" name="client" id="client" placeholder="Mega Devs SARL">
            </div>
            @if ($errors->has('client'))
                <div class="text-danger">
                    {{ $errors->first('client') }}
                </div>
            @endif
        </div>

        <div class="form-group col-sm-12 col-md-4">
            <label for="date" class="col-sm-1-12 col-form-label">Date</label>
            <div class="col-sm-1-12">
                <input type="date" class="form-control" value="{{ old('date', $projet->date ?? '') }}" name="date" id="date" placeholder="01/2000 - 09/2003">
            </div>
            @if ($errors->has('date'))
                <div class="text-danger">
                    {{ $errors->first('date') }}
                </div>
            @endif
        </div>

        <div class="form-group col-sm-12 col-md-4">
            <label for="couleur">Type</label>
            <select class="form-control" name="type" id="">
                <option {{ isset($projet) && $projet->type == 'web' ? 'selected' : '' }} value="web"> Web </option>
                <option {{ isset($projet) && $projet->type == 'mobile' ? 'selected' : '' }} value="mobile"> Mobile </option>
                <option {{ isset($projet) && $projet->type == 'package' ? 'selected' : '' }} value="package"> Package </option>
            </select>
        </div>

        <div class="form-group col-sm-12 col-md-4">
            <label class="custom-file">
                <span class="custom-file-control">Couverture</span>
                <input type="file" class="form-control" name="cover">
                @if ($errors->has('cover'))
                    <div class="text-danger">
                        {{ $errors->first('cover') }}
                    </div>
                @endif
            </label>
        </div>

        <div class="form-group col-sm-12 col-md-4">
            <label class="custom-file">
                <span class="custom-file-control">Ajouter des images</span>
                <input type="file" class="form-control" name="images[]" multiple>
            </label>
        </div>

    </div>

    <div class="form-group col-sm-12 col-md-12">
        <label for="description">Description</label>
        <textarea class="form-control ckeditor" name="description" id="description" rows="3"> {{ old('description', $projet->description ?? '') }} </textarea>
        @if ($errors->has('description'))
            <div class="text-danger">
                {{ $errors->first('description') }}
            </div>
        @endif
    </div>