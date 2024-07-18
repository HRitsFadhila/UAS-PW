@extends('layouts.app')

@section('title', 'Edit Schedule')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Schedule</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Schedules</a></div>
                    <div class="breadcrumb-item">Edit Schedule</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('registrasi.update', $registrasi) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Schedule</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    name="nama" value="{{ $registrasi->nama }}"> 
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text"
                                    class="form-control @error('username')
                                    is-invalid
                                @enderror"
                                    name="username" value="{{ $registrasi->username }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email" value="{{ $registrasi->email }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="text"
                                    class="form-control @error('handphone')
                                    is-invalid
                                @enderror"
                                    name="handphone" value="{{ $registrasi->handphone }}">
                                @error('handphone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">{{ __('Tanggal Lahir') }}</label>
                                <input type="date"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    name="tanggal_lahir"
                                    value="{{ $registrasi->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="Password"
                                    class="form-control @error('password')
                                    is-invalid
                                @enderror"
                                    name="password" value="{{ $registrasi->password }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki" class="selectgroup-input"
                                            @if ($registrasi->jenis_kelamin == 'Laki-laki') checked @endif>
                                        <span class="selectgroup-button">Laki-laki</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="selectgroup-input"
                                            @if ($registrasi->jenis_kelamin == 'Perempuan') checked @endif>
                                        <span class="selectgroup-button">Perempuan</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                    <option value="Islam" @if($registrasi->agama == 'Islam') selected @endif>Islam</option>
                                    <option value="Kristen" @if($registrasi->agama == 'Kristen') selected @endif>Kristen</option>
                                    <option value="Hindu" @if($registrasi->agama == 'Hindu') selected @endif>Hindu</option>
                                    <option value="Budha" @if($registrasi->agama == 'Budha') selected @endif>Budha</option>
                                    <option value="Khonghucu" @if($registrasi->agama == 'Khonghucu') selected @endif>Khonghucu</option>
                                </select>
                                @error('agama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label>Biografi</label>
                            <textarea class="form-control @error('biografi') is-invalid @enderror" name="biografi" rows="4">{{ $registrasi->biografi }}</textarea>
                            @error('biografi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                            
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush