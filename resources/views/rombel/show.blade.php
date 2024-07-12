<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Data Rombongan Belajar</x-slot>
    <x-slot name="card_title">Daftar Rombel Aktif</x-slot>
    <h2 class="text-center">Data Rombel</h2>
    <a href="{{ route('rombel.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah
                Data</i></button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Tahun Masuk</th>
                <th>Dosen Pembimbing</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_rombel as $rombel)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $rombel->kode }}</td>
                <td>{{ $rombel->thn_masuk }}</td>
                <td>{{ $rombel->dosen->nama }}</td>
                <td>
                    <form action="{{ route('rombel.destroy', $rombel->id) }}" method="post">
                        <a href="{{ route('rombel.view', $rombel->id) }}" class="btn btn-transparant"><i
                                class="fas fa-eye text-info"></i></a>
                        <a href="{{ route('rombel.edit', $rombel->id) }}" class="btn btn-transparant"><i
                                class="fas fa-edit text-warning"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-transparant"><i
                                class="fas fa-trash text-danger"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
