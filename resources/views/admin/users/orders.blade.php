@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">Informacije pošiljatelja</div>
          <form>
            <div class="form-group">
              <label for="name_s">Ime</label>
              <input type="text" class="form-control" id="name_s" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="lname_s">Prezime</label>
              <input type="text" class="form-control" id="lname_s" placeholder="Another input">
            </div>
            <div class="form-group">
              <label for="adress_s">Adresa</label>
              <input type="text" class="form-control" id="adress_s" placeholder="Another input">
            </div>
            <div class="form-group">
              <label for="city_s">Grad</label>
              <input type="text" class="form-control" id="city_s" placeholder="Another input">
            </div>
            <div class="form-group">
              <label for="pbr_s">Poštanski broj</label>
              <input type="text" class="form-control" id="pbr_s" placeholder="Another input">
            </div>
            <div class="form-group">
              <label for="kt_s">Kontakt telefon</label>
              <input type="text" class="form-control" id="kt_s" placeholder="Another input">
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
