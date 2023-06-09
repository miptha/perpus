<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Keranjang</h1>
        </div>
    </div>

    @include('admin-lte/flash')

    <div class="row">
        <div class="col-md-6 mb-4">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input wire:model="tanggal_pinjam" type="date" class="form-control" id="tanggal_pinjam">
            @error('tanggal_pinjam') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="col-md-6 mb-4">
            <label for="tanggal_kembali">Tanggal Kembali</label>
            <input wire:model="tanggal_kembali" type="date" class="form-control" id="tanggal_kembali">
            @error('tanggal_kembali') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-2">
            @if ($keranjang->tanggal_pinjam)
                <strong>Tanggal Pinjam: {{$keranjang->tanggal_pinjam}}</strong>
                <strong class="float-right">Kode Pinjam : {{$keranjang->kode_pinjam}}</strong>
            @else
                <button wire:click="pinjam({{$keranjang->id}})" class="btn btn-sm btn-success">Pinjam</button>
            @endif
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
             <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th><th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($keranjang->detail_peminjaman as $item)
                        @if($keranjang->petugas_pinjam != 1)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->buku->judul}}</td>
                                <td>{{$item->buku->penulis}}</td>
                                <td>{{$item->buku->tahun_terbit}}</td>
                                <td>
                                    @if (!$keranjang->tanggal_pinjam)
                                        <button wire:click="hapus({{$keranjang->id}}, {{$item->id}})" class="btn btn-sm btn-danger">Hapus</button>
                                    @endif       
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            @if (!$keranjang->tanggal_pinjam)
                 <button wire:click="hapusMasal" class="btn btn-sm btn-danger">Hapus Masal</button>
            @endif        
        </div>
    </div>
</div>