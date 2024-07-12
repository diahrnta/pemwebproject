<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Detail Mahasiswa</x-slot>
    <x-slot name="card_title">Detail Mahasiswa :: {{ $mahasiswa->id }} - {{ $mahasiswa->nama }}</x-slot>
    <table class="table table-striped table-sm">
        <tr>
            <th class="w-25">NIM</th>
            <td>{{ $mahasiswa->nim }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $mahasiswa->nama }}</td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td>{{ $mahasiswa->tmp_lahir }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $mahasiswa->tgl_lahir }}</td>
        </tr>
        <tr>
            <th>IPK</th>
            <td>{{ $mahasiswa->ipk }}</td>
        </tr>
        <tr>
            <th>Prodi</th>
            <td>{{ $mahasiswa->prodi->nama }}</td>
        </tr>
        <tr>
            <th>Rombel</th>
            <td>{{ $mahasiswa->rombel->kode }}</td>
        </tr>
    </table>
    <div>
        <a href="{{ route('mahasiswa.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>
