<x-main>
    <x-slot:title>{{ $title }}</x-slot:title>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="pengaju" class="form-label">Nama Pengaju</label>
                    <input type="text" class="form-control" id="pengaju" name="pengaju">
                    <div id="pengaju" class="form-text">Nama pengaju/penerima pembuat kuitansi</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="keperluan" class="form-label">Guna Keperluan</label>
                    <input type="text" class="form-control" id="keperluan" name="keperluan">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="text" class="form-control" id="nominal" name="nominal">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="terbilang" class="form-label">Terbilang</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang">
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-4">
                <select class="form-select" name="jenis_kuitansi">
                    <option selected>Jenis Kuitansi</option>
                    @foreach ($jenisKuitansi as $data)
                        <option value="{{ $data }}">{{ $data }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-4">
                <select class="form-select" name="pembayaran">
                    <option selected>Metode Pembayaran</option>
                    @foreach ($pembayaran as $data)
                        <option value="{{ $data }}">{{ $data }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-4">
                <input type="date" name="tanggal" id="tanggal" class="form-control">
            </div>
        </div>
        <br>
        <button type="reset" class="btn btn-md btn-warning">Reset</button>
        <button type="submit" class="btn btn-md btn-success me-3">Simpan</button>
    </form>
</x-main>
