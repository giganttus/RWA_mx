@extends('layouts.app')

@section('content')

    <!-- Kartica za zahtjeve -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                <div class="form-group col-md-12 text-right">
                    <a href="{{route('orders.request')}}">Nazad</a>
                </div>


                @else
            <div class="card text-center">
                <!-- pošiljatelj  -->
                <div class="card-header">
                    Zahtjevi za dostavu
                </div>

                <div class="card-body">
                    <div class="container ">
                        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                        <div class="row justify-content-center text-left">
                            <div class="col-md-12">
                                <h5 class="card-title">Podatci o pošiljatelju</h5>
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
                                            <label for="address">Adresa</label>
                                            <input type="text" class="form-control" name="address" placeholder="Adresa" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact">Kontakt tel</label>
                                            <input type="text" class="form-control" name="contact" placeholder="06x/xxx-xxx" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">Grad</label>
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

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
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
                                        <div class="form-group col-md-6">
                                            <label for="details">Opis paketa</label>
                                            <input type="text" class="form-control" name="details" placeholder="npr: odjeća, obuća, tehnika" required>
                                        </div>
                                    </div>



                                    <br>
                                    <br>
                                    <h5 class="card-title">Podatci o primatelju</h5>
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
                                            <label for="address2">Adresa</label>
                                            <input type="text" class="form-control" name="address2" placeholder="Adresa" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact2">Kontakt tel</label>
                                            <input type="text" class="form-control" name="contact2" placeholder="06x/xxx-xxx" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city2">Grad</label>
                                            <input type="text" class="form-control" name="city2" required>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="state2" >Županija</label>
                                            <select name="state2" class="custom-select" required>
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
                                            <label for="zip2">Poštanski broj</label>
                                            <input type="text" class="form-control" name="zip2" required>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Posalji</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </div>

@endsection