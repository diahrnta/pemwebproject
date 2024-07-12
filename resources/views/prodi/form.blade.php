<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Tambah Prodi</x-slot>
    <x-slot name="card_title">Form Tambah Prodi</x-slot>
    <form action="{{ route('prodi.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" name="kode" id="kode" value="{{ $prodi->kode }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Nama Prodi</label>
            <input type="text" name="nama" id="nama" value="{{ $prodi->nama}}" class="form-control">
        </div>
        <input type="hidden" name="id" value="{{ $prodi->id }}">
        <a href="{{ route('prodi.show') }}" class="btn btn-success mr-2">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>