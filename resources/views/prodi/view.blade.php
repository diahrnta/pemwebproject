<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Detail Prodi</x-slot>
    <x-slot name="card_title">Detail Prodi :: {{ $prodi->id }} - {{ $prodi->nama }}</x-slot>
    <table class="table table-striped table-sm">
        <tr>
            <th class="w-25">Id</th>
            <td>{{ $prodi->id }}</td>
        </tr>
        <tr>
            <th>Kode</th>
            <td>{{ $prodi->kode }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $prodi->nama }}</td>
        </tr>
    </table>
    <div>
        <a href="{{ route('prodi.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>
