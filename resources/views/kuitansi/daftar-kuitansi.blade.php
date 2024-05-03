<x-main>
    <x-slot:title>{{ $title }}</x-slot:title>

    <a href="/tambah-kuitansi">
        <div class="btn btn-success" style="margin-bottom: 10px;">Tambah data</div>
    </a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Terima Dari</th>
                <th scope="col">Nominal</th>
                <th scope="col">Keperluan</th>
                <th scope="col">Kuitansi</th>
                <th scope="col">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kuitansi as $data)
                <tr>
                    <td>{{ $data->pengaju }}</td>
                    <td>{{ $data->nominal }}</td>
                    <td>{{ $data->keperluan }}</td>
                    <td>{{ $data->jenis_kuitansi }}</td>
                    <td>{{ $data->tanggal }}</td>
                </tr>
            @empty
                <div class="btn btn-danger">
                    Data kuitansi belum tersedia.
                </div>
            @endforelse
        </tbody>
    </table>
    {{-- {{ $data->links() }} --}}
</x-main>
