<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Detail Dosen</x-slot>
    <x-slot name="card_title">Detail Dosen :: {{ $dosen->id }} - {{ $dosen->nama }}</x-slot>
    <table class="table table-striped table-sm">
        <tr>
            <th class="w-25">NIDN</th>
            <td>{{ $dosen->nidn }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $dosen->nama }}</td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td>{{ $dosen->tmp_lahir }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $dosen->tgl_lahir }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $dosen->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
        </tr>
        <tr>
            <th>Prodi</th>
            <td>{{ $dosen->prodi->nama }}</td>
        </tr>
    </table>
    <div>
        <a href="{{ route('dosen.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>
