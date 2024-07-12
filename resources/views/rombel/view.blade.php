<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Detail Rombongan Belajar</x-slot>
    <x-slot name="card_title">Detail Rombel :: {{ $rombel->id }} - {{ $rombel->nama }}</x-slot>
    <table class="table table-striped table-sm">
        <tr>
            <th class="w-25">Id</th>
            <td>{{ $rombel->id }}</td>
        </tr>
        <tr>
            <th>Kode</th>
            <td>{{ $rombel->kode }}</td>
        </tr>
        <tr>
            <th>Tahun Masuk</th>
            <td>{{ $rombel->thn_masuk }}</td>
        </tr>
        <tr>
            <th>Dosen Pembimbing</th>
            <td>{{ $rombel->dosen->nama }}</td>
        </tr>
    </table>
    <div>
        <a href="{{ route('rombel.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>
