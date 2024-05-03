<x-main>
    <x-slot:title>{{ $title }}</x-slot:title>

    <form action="{{ route('updateKuitansi', $kuitansi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="pengaju" class="form-label">Nama Pengaju</label>
                    <input type="text" class="form-control" id="pengaju" name="pengaju"
                        value="{{ $kuitansi->pengaju }}">
                    <div id="pengaju" class="form-text">Nama pengaju/penerima pembuat kuitansi</div>
                    @error('pengaju')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="keperluan" class="form-label">Guna Keperluan</label>
                    <input type="text" class="form-control" id="keperluan" name="keperluan"
                        value="{{ $kuitansi->keperluan }}">
                    @error('keperluan')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="text" class="form-control" id="nominal" name="nominal"
                        value="{{ $kuitansi->nominal }}">
                    @error('nominal')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="terbilang" class="form-label">Terbilang</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang"
                        value="{{ $kuitansi->terbilang }}">
                    @error('terbilang')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-4">
                <label for="jenis_kuitansi" class="form-label">Jenis Kuitansi</label>
                <select class="form-select" name="jenis_kuitansi" id="jenis_kuitansi">
                    {{-- <option selected>Jenis Kuitansi</option> --}}
                    <option value="{{ $kuitansi->jenis_kuitansi }}">{{ $kuitansi->jenis_kuitansi }}</option>
                    <option value="Pemasukan">Pemasukan</option>
                    <option value="Pengeluaran">Pengeluaran</option>
                    <option value="Penerimaan Barang">Penerimaan Barang</option>
                </select>
                @error('jenis_kuitansi')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-4">
                <label for="pembayaran" class="form-label">Metode Pembayaran</label>
                <select class="form-select" name="pembayaran" id="pembayaran">
                    {{-- <option selected>Metode Pembayaran</option> --}}
                    <option value="{{ $kuitansi->pembayaran }}">{{ $kuitansi->pembayaran }}</option>
                    <option value="Tunai">Tunai</option>
                    <option value="Transfer">Transfer</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                @error('pembayaran')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-4">
                <label for="tanggal" class="form-label">Tanggal Pembuatan</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control"
                    value="{{ $kuitansi->tanggal }}">
                @error('tanggal')
                    <div class="text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <br>
        {{-- <button type="reset" class="btn btn-md btn-warning">Reset</button> --}}
        <a href="{{ route('daftarKuitansi') }}">
            <button type="button" class="btn btn-warning">Kembali</button>
        </a>
        <button type="submit" class="btn btn-md btn-success me-3">Simpan</button>
    </form>
</x-main>
