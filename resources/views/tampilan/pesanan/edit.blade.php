@extends('tampilan.dashboard')
@section('lala')


    
    <div class="row justify-content-center mt-4">
        <h1 class="p-1 h3 fw-normal text-center text-light bg-dark">Ubah Pesanan</h1>
    </div>

    <main class="form-registration mt-2">
        <center>
            <form action="{{ url('orders/'.$psn->id) }}"  method="post">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
                {{-- nama --}}
                <div class="btn btn-dark m-2">
                    <table class="table text-light">
                        <tr>
                            <th colspan="">
                                <h3 class="text-info">Name Pemesanan</h3>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Nama" autocomplete="off" value="{{ $psn->name }}">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div><br>


                {{-- cooffe --}}
                <div class="btn btn-dark m-2">
                    <table class="table text-light">
                        <tr>
                            <th colspan="3">
                                <h3 class="text-warning">Coffe</h3>
                            </th>
                        </tr>
                        <tr>
                            <td >
                                <div class="form-floating">
                                    <label for="coffe">Minuman Coffe</label>
                                    <select  id="coffe" name="coffes_id" class="form-control">
                                        <option value="1">Americano</option> 
                                        <option value="2">Kopi Gula Aren</option>
                                        <option value="3">Strawberry zevy</option> 
                                        <option value="4">Caramel Machiato</option> 
                                    </select>
                                </div>
                                <div class="form-floating">
                                    <label for="qtyc">Qty Coffe</label>
                                    <input type="number" id="qtyc" class="form-control" name="qtyc" value="{{ $psn->qtyc }}">
                                </div>
                                <div class="form-floating">
                                    <label for="perqtyc">Harga /Qty coffe</label>
                                    <input type="number" id="perqtyc" value="20000" class="form-control" name="perqtyc" value="{{ $psn->perqtyc }}">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>


                {{-- Bland --}}
                <div class="btn btn-dark m-2">
                    <table class="table text-light">
                        <tr>
                            <th colspan="3">
                                <h3 class="text-success">Bland</h3>
                            </th>
                        </tr>
                    <tr>
                        <td >
                            <div class="form-floating">
                                <label for="bland">Minuman Bland</label>
                                <select  id="bland" name="blands_id" class="form-control">
                                    <option value="1">Milk Regal</option> 
                                    <option value="2">Nutel Boomb</option>
                                    <option value="3">Tropical Punc</option> 
                                    <option value="4">Banana Smothies</option> 
                                </select>
                            </div>
                            <div class="form-floating">
                                <label for="qtya">Qty Bland</label>
                                <input type="number" id="qtya" class="form-control" name="qtya" value="{{ $psn->qtya }}">
                            </div>
                            <div class="form-floating">
                                <label for="perqtya">Harga /Qty Bland</label>
                                <input type="number" id="perqtya" value="15000" class="form-control" name="perqtya" value="{{ $psn->perqtya }}">
                            </div>
                        </td>
                    </tr>
                    </table>
                </div>
                

                {{-- bvrages --}}
                <div class="btn btn-dark m-2">
                    <table class="table text-light">
                        <tr>
                            <th colspan="3">
                                <h3 class="text-danger">Bvrages</h3>
                            </th>
                        </tr>
                    <tr>
                        <td >
                            <div class="form-floating">
                                <label for="bvrages">Minuman Bvrages</label>
                                <select  id="bvrages" name="bvrages_id" class="form-control">
                                    <option value="1">Thai Tea</option> 
                                    <option value="2">Soda Gembira</option>
                                    <option value="3">Orange Squash</option> 
                                    <option value="4">Creamy Yakult Mangga</option> 
                                </select>
                            </div>
                            <div class="form-floating">
                                <label for="qtyb">Qty Bvrages</label>
                                <input type="number" id="qtyb" class="form-control" name="qtyb" value="{{ $psn->qtyb }}">
                            </div>
                            <div class="form-floating">
                                <label for="perqtyb">Harga /Qty Bvrages</label>
                                <input type="number" id="perqtyb" value="25000" class="form-control" name="perqtyb" value="{{ $psn->perqtyb }}">
                            </div>
                        </td>
                    </tr>
                    </table>
                </div>
                <button class="w-75 btn btn-info text-dark" type="submit">Ubah</button>
            </form>
        </center>
        
    </main>
    
@endsection