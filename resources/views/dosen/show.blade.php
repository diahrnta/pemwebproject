<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Data Dosen</x-slot>
    <x-slot name="card_title">Daftar Dosen Aktif</x-slot>
    <h2 class="text-center">Data Dosen</h2>
    <a href="{{ route('dosen.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah
                Data</i></button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_dosen as $dosen)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dosen->nidn }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->tmp_lahir }}</td>
                <td>{{ $dosen->tgl_lahir }}</td>
                <td>{{ $dosen->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>{{ $dosen->prodi->nama }}</td>
                <td>
                    <form action="{{ route('dosen.destroy', $dosen->nidn) }}" method="post">
                        <a href="{{ route('dosen.view', $dosen->nidn) }}" class="btn btn-transparant"><i
                                class="fas fa-eye text-info"></i></a>
                        <a href="{{ route('dosen.edit', $dosen->nidn) }}" class="btn btn-transparant"><i
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
