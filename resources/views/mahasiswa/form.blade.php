<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Tambah Mahasiswa</x-slot>
    <x-slot name="card_title">Form Tambah Mahasiswa</x-slot>
    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        @if (isset($mahasiswa->nim))
        <input type="hidden" name="nim_" value="{{ $mahasiswa->nim }}">
        @else
        <div class="form-group">
            <label for="nim_">NIM</label>
            <input type="text" name="nim_" id="nim_" value="{{ $mahasiswa->nim }}" class="form-control">
        </div>
        @endif
        <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="tmp_lahir">Tempat Lahir</label>
            <input type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $mahasiswa->tmp_lahir}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir"
                value="{{ date('Y-m-d', strtotime($mahasiswa->tgl_lahir ?? now())) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="ipk">IPK</label>
            <input type="number" name="ipk" id="ipk" value="{{ $mahasiswa->ipk}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="prodi_id">Prodi</label>
            <select name="prodi_id" class="form-select form-select-lg mb-3">
                <option>--Pilih--</option>
                @foreach($list_prodi as $prodi)
                <option value="{{ $prodi->id }}" {{ $mahasiswa->prodi_id==$prodi->id ? 'selected': ''}}>
                    {{ $prodi->nama}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="rombel_id">Rombel</label>
            <select name="rombel_id" class="form-select form-select-lg mb-3">
                <option>--Pilih--</option>
                @foreach($list_rombel as $rombel)
                <option value="{{ $rombel->id }}" {{ $mahasiswa->rombel_id==$rombel->id ? 'selected': ''}}>
                    {{ $rombel->kode . ' - ' . $rombel->thn_masuk . ' - ' . $rombel->dosen->nama}}
                </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('mahasiswa.show') }}" class="btn btn-success mr-2">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>
