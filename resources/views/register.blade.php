<form action="register" method="POST" accept-charset="UTF-8" class="formaddcarrera" enctype="multipart/form-data">
    @csrf
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nick</label>
        <div class="col-sm-10">
          <input type="text"  class="form-control" name="nick" max-length="100" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">password</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="passwd" max-length="200" required>
        </div>
      </div>

      <div class="form-group row">
          <label class="col-sm-2 col-form-label">nom de la mascota</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nommascota" max-length="200" required>
          </div>
      </div>

      <div class="form-group row">
          <label class="col-sm-2 col-form-label">color</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="color" max-length="200" required>
          </div>
      </div>

      <div class="form-group row">
          <label class="col-sm-2 col-form-label">raça</label>
          <div class="col-lg-2">
          <select class="form-select form-select-md mb-2" name="raza" id="aseguradora">
            <option value="Boxer">Boxer</option>
            <option value="Buldog">Buldog</option>
            <option value="Labrador">Labrador</option>
            <option value="Caniche">Caniche</option>
          </select>
          </div>
      </div>

      <div class="form-group row">
          <label class="col-sm-2 col-form-label">Sexe</label>
          <div class="col-sm-10">
            <input type="radio" name="sexo" value="masculino"  required/>Mascle
            <input type="radio" name="sexo" value ="femenino" required/>Femella
          </div>
      </div>

      <div class="form-group row">
          <label class="col-sm-2 col-form-label">edat</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="edat"  required>
          </div>
      </div>

      <div class="form-group row"  id="divOp">
          <label class="col-lg-12 col-form-label">Nom de l'huma</label>
          <div class="col-lg-12">
            <input type="text" class="form-control" id="fed" name="nomhuma" maxlength="100">
          </div>
      </div>

      <div class="form-group row"   id="divOp">
          <label class="col-lg-12 col-form-label">Telefon</label>
          <div class="col-lg-12">
            <input type="text" class="form-control" id="fed" name="telefon" maxlength="100">
          </div>
      </div>

      <div class="form-group row">
        <label for="cartel" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="cartel" name="foto" accept=".jpg" required>
        </div>
    </div>

    

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary" name="send">Inscribirse</button>
        </div>
      </div>
  </form>

  <a href="{{url('/')}}">Volver</a>