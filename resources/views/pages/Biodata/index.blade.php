@extends('layouts.app')

@section('title', 'Registrations')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Registrations</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Registrations</a></div>
                    <div class="breadcrumb-item">All Registrations</div>
                </div>
            </div>
            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Registrations</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('biodata.create') }}" class="btn btn-primary">New Registration</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET" action="{{ route('registrasi.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="nama">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Jumlah Saudara Sekolah SD</th>
                                            <th>Jumlah Saudara Sekolah SMP</th>
                                            <th>Jumlah Saudara Sekolah SMA</th>
                                            
                                            <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($biodatas as $biodata)
                                            <tr>
                                                <td>{{ $biodata->saudara_sd }}</td>
                                                <td>{{ $biodata->saudara_smp }}</td>
                                                <td>{{ $biodata->saudara_sma }}</td>
                                                
                                                <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('biodata.edit', $biodata->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('biodata.destroy', $biodata->id) }}" method="POST" class="ml-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger btn-icon">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $biodatas->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
