<x-main>
    <x-slot:title>{{ $title }}</x-slot:title>
    <table class="table table-bordered">
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
            @forelse ($data as $item)
                <tr>
                    <td>{{ $item->pengaju }}</td>
                    <td>{{ $item->nominal }}</td>
                    <td>{{ $item->keperluan }}</td>
                    <td>{{ $item->jenis_kuitansi }}</td>
                    <td>{{ $item->tanggal }}</td>
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
