@extends('tampilan.dashboard')
@section('lala')
<center>
    
        <div class="btn btn-dark m-3">
            <table class="table">
                <tr>
                    <th colspan="">
                        <h3 class="text-info">S-24 Caffe</h3>
                    </th>
                </tr>
                <tr>
                    <td class="text-info h4">Terima Kasih Sudah Memesan</td>
                </tr>
            </table>
        </div><br>

        {{-- vgsdfs --}}

        <div class="btn btn-dark m-3">
            <table class="table">
                
                    <tr>
                        <th colspan="" class="text-info">Pemesan</th>
                        <th colspan="3" class="text-warning">Coffe</th>
                        <th colspan="3" class="text-success">Bvrages</th>
                        <th colspan="3" class="text-danger">Bland</th>
                        <th colspan="" class="text-primary">Harga</th>
                        <th colspan="2" class="text-info">Perubahan</th>
                    </tr>
                    <tr>
                        {{-- pemesan --}}
                        <td class="text-light">Nama</td>
                        {{-- coffe --}}
                        <td class="text-light">Minuman</td>
                        <td class="text-light">Qty</td>
                        <td class="text-light">/Coffe</td>
                        {{-- bvrages --}}
                        <td class="text-light">Minuman</td>
                        <td class="text-light">Qty</td>
                        <td class="text-light">/Bvrages</td>
                        {{-- blands --}}
                        <td class="text-light">Minuman</td>
                        <td class="text-light">Qty</td>
                        <td class="text-light">/Bland</td>
                        {{-- harga --}}
                        <td class="text-light">Total</td>
                        {{-- perubahan --}}
                        <td class="text-light">Ubah</td>
                        <td class="text-light">Edit</td>
                    </tr>
                @foreach ($psn as $key=>$value)
                    <tr>
                        {{-- pemesan --}}
                        <td class="text-light">{{ $value->name }}</td>
                        {{-- coffe --}}
                        <td class="text-light">{{ $value->coffes->name }}</td>
                        <td class="text-light">{{ $value->qtyc }}</td>
                        <td class="text-light">{{ $value->perqtyc }}</td>
                        {{-- bvrages --}}
                        <td class="text-light">{{ $value->bvrages->name }}</td>
                        <td class="text-light">{{ $value->qtyb }}</td>
                        <td class="text-light">{{ $value->perqtyb }}</td>
                        {{-- bland --}}
                        <td class="text-light">{{ $value->blands->name }}</td>
                        <td class="text-light">{{ $value->qtya }}</td>
                        <td class="text-light">{{ $value->perqtya }}</td>
                        {{-- perubahan --}}
                        <td class="text-light">
                            @php
                                // coofe
                                $qtyc = $value->qtyc;
                                $perqtyc = $value->perqtyc;
                                $coffe = $qtyc * $perqtyc;
                                // Bvrages
                                $qtyb = $value->qtyb;
                                $perqtyb = $value->perqtyb;
                                $bvrages = $qtyb * $perqtyb;
                                // blands
                                $qtya = $value->qtya;
                                $perqtya = $value->perqtya;
                                $bland = $qtya * $perqtya;
                                // jumlah
                                $cb = $coffe + $bvrages;
                                echo $cb + $bland;
                            @endphp
                        </td>
                        <td><a href="{{ url('orders/'.$value->id.'/edit') }}" class="btn btn-light">Ubah</a></td>
                        <td class="text-light">
                            <form action="{{ url('orders/'.$value->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="text-dark btn btn-light" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    
</center>
    
    
@endsection