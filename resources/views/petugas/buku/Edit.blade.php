@if ($edit)
        <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Edit Buku</h4>
                <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input wire:model="judul" type="text" class="form-control" id="judul">
                        @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input wire:model="penulis" type="text" class="form-control" id="penulis">
                                @error('penulis') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input wire:model="stok" type="number" class="form-control" id="stok" min="1">
                                @error('stok') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tahun">Tahun Terbit</label>
                                <input wire:model="tahun_terbit" type="number" class="form-control" id="tahun" min="1">
                                @error('tahun_terbit') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sampul">Sampul</label>
                        <input wire:model="sampul" type="file" class="form-control" id="sampul" min="1">
                        @error('sampul') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="kode">Kode Buku</label>
                                <select wire:model="kode_buku" class="form-control" id="kode">
                                    <option selected value="">Pilih Kode Buku</option>
                                    @foreach ($kode as $item)
                                        <option value="{{$item->nama}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                                @error('kode_buku') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <select wire:model="penerbit_id" class="form-control" id="penerbit">
                                    <option selected value="">Pilih Penerbit</option>
                                    @foreach ($penerbit as $item)
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                                @error('penerbit_id') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                <span type="button" wire:click="update({{$buku_id}})" class="btn btn-success">Update</span>
                </div>
            </div>
            </div>
        </div>
    @endif