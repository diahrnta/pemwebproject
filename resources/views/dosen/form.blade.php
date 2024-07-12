<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Tambah Dosen</x-slot>
    <x-slot name="card_title">Form Tambah Dosen</x-slot>
    <form action="{{ route('dosen.store') }}" method="post">
        @csrf
        @if ($dosen->nidn)
        <input type="hidden" name="nidn" value="{{ $dosen->nidn }}">
        @else
        <div class="form-group">
            <label for="nidn">NIDN</label>
            <input type="text" name="nidn" id="nidn" value="{{ $dosen->nidn}}" class="form-control">
        </div>
        @endif
        <div class="form-group">
            <label for="nama">Nama Dosen</label>
            <input type="text" name="nama" id="nama" value="{{ $dosen->nama}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="tmp_lahir">Tempat Lahir</label>
            <input type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $dosen->tmp_lahir}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir"
                value="{{ date('Y-m-d', strtotime($dosen->tgl_lahir ?? now())) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-select form-select-lg mb-3">
                <option>--Pilih--</option>
                <option value="L" {{ $dosen->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $dosen->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="prodi_id">Prodi</label>
            <select name="prodi_id" class="form-select form-select-lg mb-3">
                <option>--Pilih--</option>
                @foreach($list_prodi as $prodi)
                <option value="{{ $prodi->id }}" {{ $dosen->prodi_id==$prodi->id ? 'selected': ''}}>
                    {{ $prodi->nama}}
                </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('dosen.show') }}" class="btn btn-success mr-2">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>
