@extends('layouts.MainLogin')

@section('content')
<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            <a href="/login" class="logo d-flex align-items-center w-auto h-auto">
                                <img src="assets/img/logo-lppm-itats.jpg" alt="Logo LPPM" class="w-128 h-auto">
                                {{-- <span class="d-none d-lg-block">Pengabdian & Jurnal</span> --}}
                            </a>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                    <p class="text-center small">Masukkan NIP & password untuk login</p>
                                </div>

                                {{-- alert error --}}
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </symbol>
                                </svg>

                                @if ($errors->any())
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                        <div>{{ $errors->first() }}</div>
                                    </div>
                                @endif

                                <!-- Form statis -->
                                <form action="{{route('login')}}" method="POST" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourNIP" class="form-label">NIP</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="nip" class="form-control" id="yourNIP" placeholder="NIP" required> <!-- Ganti 'Username' dengan 'NIP' -->
                                            <div class="invalid-feedback">NIP wajib diisi!</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                                        <div class="invalid-feedback">Password wajib diisi!</div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        {{-- <div class="credits">
                            Designed by <a href="https://bootstrapmade.com/">Mahameru, Ibrahim, Ryan</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
