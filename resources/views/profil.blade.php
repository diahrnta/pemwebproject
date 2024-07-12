<x-layout>
    <!-- Mengirimkan judul halaman dan judul kartu melalui slot -->
    <x-slot name="title">Halaman Profil</x-slot>
    <x-slot name="card_title">Profilku</x-slot>

    <div class="card-body">
        <div class="container">
            <h4 class="text-center mt-4">Selamat Datang Di Website Akademik Kampus<br /></h4>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="card-title">Profile</h5>
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/diah.jpg') }}" class="img-fluid" alt="Profile Image">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Nama :</strong> Diah Ernita</li>
                                        <li class="list-group-item"><strong>Email :</strong> {{ auth()->user()->email }}</li>
                                        <li class="list-group-item"><strong>Role :</strong> {{ auth()->user()->role }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
