<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Data Mahasiswa</x-slot>
    <x-slot name="card_title">Daftar Mahasiswa Aktif</x-slot>
    <h2 class="text-center">Data Mahasiswa</h2>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <a href="{{ route('mahasiswa.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah
                Data</i></button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
                <th>Prodi</th>
                <th>Rombel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_mahasiswa as $mahasiswa)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->tmp_lahir }}</td>
                <td>{{ $mahasiswa->tgl_lahir }}</td>
                <td>{{ $mahasiswa->ipk }}</td>
                <td>{{ $mahasiswa->prodi->nama }}</td>
                <td>{{ $mahasiswa->rombel->kode."
                    ".$mahasiswa->rombel->thn_masuk." [".$mahasiswa->rombel->dosen->nama."]" }}
                </td>
                <td>
                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="post">
                        <a href="{{ route('mahasiswa.view', $mahasiswa->nim) }}" class="btn btn-transparant"><i
                                class="fas fa-eye text-info"></i></a>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" class="btn btn-transparant"><i
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
