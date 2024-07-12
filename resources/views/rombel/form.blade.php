<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Tambah Rombongan Belajar</x-slot>
    <x-slot name="card_title">Form Tambah Rombel</x-slot>
    <form action="{{ route('rombel.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" name="kode" id="kode" value="{{ $rombel->kode }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="thn_masuk">Tahun Masuk</label>
            <input type="date" name="thn_masuk" id="thn_masuk"
                value="{{ date('Y-m-d', strtotime($rombel->thn_masuk ?? now())) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="dosen_pa">Dosen Pembimbing Akademik</label>
            <select name="dosen_pa" class="form-select form-select-lg mb-3">
                <option>--Pilih--</option>
                @foreach($list_dosen as $dosen)
                <option value="{{ $dosen->nidn }}" {{ $rombel->dosen_pa==$dosen->nidn ? 'selected': ''}}>
                    {{ $dosen->nama}}
                </option>
                @endforeach
            </select>
        </div>
        <input type="hidden" name="id" value="{{ $rombel->id }}">
        <a href="{{ route('rombel.show') }}" class="btn btn-success mr-2">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>
