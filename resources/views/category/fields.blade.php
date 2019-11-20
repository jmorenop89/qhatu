    @csrf
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror" 
        id="name" placeholder="Nombre" name="name">
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
    </div>