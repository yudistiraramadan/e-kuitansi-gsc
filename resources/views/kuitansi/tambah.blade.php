<x-main>
    <x-slot:title>{{ $title }}</x-slot:title>

    <form>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="pengaju" class="form-label">Nama Pengaju</label>
                    <input type="text" class="form-control" id="pengaju" aria-describedby="pengaju">
                    <div id="pengaju" class="form-text">Nama pengaju/penerima pembuat kuitansi</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="keperluan" class="form-label">Guna Keperluan</label>
                    <input type="text" class="form-control" id="keperluan">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="text" class="form-control" id="nominal" aria-describedby="nominal">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="terbilang" class="form-label">Terbilang</label>
                    <input type="text" class="form-control" id="terbilang">
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-4">
                <input type="date" name="" id="" class="form-control">
            </div>
        </div>
    </form>
</x-main>
