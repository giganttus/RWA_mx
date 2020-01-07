@extends('layouts.app')

@section('content')
    <!-- Naslov stranice -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    Zahtjevi za dostavu
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Kartica za zahtjeve -->
    <div class="row justify-content-center">
        <div class="col-md-6">


            <div class="card text-center">
                <!-- pošiljatelj  -->
                <div class="card-header">
                    Informacije pošiljatelja
                </div>

                <div class="card-body">
                    <div class="container ">
                        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                        <div class="row justify-content-center text-left">
                            <div class="col-md-12">

                                <form class="was-validated" method="post" action="submit">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Ime</label>
                                            <input type="text" class="form-control" name="name" placeholder="Ime" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="lastname">Prezime</label>
                                            <input type="text" class="form-control" name="lastname" placeholder="Prezime" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="contact">Kontakt tel</label>
                                            <input type="text" class="form-control" name="contact" placeholder="06x/xxx-xxx" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="details">Opis paketa</label>
                                            <input type="text" class="form-control" name="details" placeholder="npr: odjeća, obuća, tehnika" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="size" >Veličina paketa</label>
                                        <select name="size" class="custom-select" required>
                                            <option selected>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                    </div>

                                    <br>
                                    <br>
                                    <!-- primatelj  -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name2">Ime</label>
                                            <input type="text" class="form-control" name="name2" placeholder="Ime" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lastname2">Prezime</label>
                                            <input type="text" class="form-control" name="lastname2" placeholder="Prezime" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="address">Adresa</label>
                                            <input type="text" class="form-control" name="address" placeholder="Adresa" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact2">Kontakt tel</label>
                                            <input type="text" class="form-control" name="contact2" placeholder="06x/xxx-xxx" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" required>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="state" >Županija</label>
                                            <select name="state" class="custom-select" required>
                                                <option selected>HNŽ</option>
                                                <option>HBŽ</option>
                                                <option>ŽZH</option>
                                                <option>BPŽ</option>
                                                <option>SŽ</option>
                                                <option>TŽ</option>
                                                <option>USŽ</option>
                                                <option>ZDŽ</option>
                                                <option>ŽP</option>
                                                <option>ŽSB</option>
                                                <option>FBiH</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="zip">Poštanski broj</label>
                                            <input type="text" class="form-control" name="zip" required>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Posalji</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection