<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Data Prodi</x-slot>
    <x-slot name="card_title">Daftar Prodi Aktif</x-slot>
    <h2 class="text-center">Data Prodi</h2>
    <a href="{{ route('prodi.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah
                Data</i></button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_prodi as $prodi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $prodi->kode }}</td>
                <td>{{ $prodi->nama }}</td>
                <td>
                    <form action="{{ route('prodi.destroy', $prodi->id) }}" method="post">
                        <a href="{{ route('prodi.view', $prodi->id) }}" class="btn btn-transparant"><i
                                class="fas fa-eye text-info"></i></a>
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-transparant"><i
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
