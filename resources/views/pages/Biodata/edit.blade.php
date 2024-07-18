@extends('layouts.app')

@section('title', 'Edit Biodata')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Biodata</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Schedules</a></div>
                    <div class="breadcrumb-item">Edit Biodata</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('biodata.update', ['biodatum' => $biodata->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Biodata</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="saudara_sd">Jumlah Saudara Masih Sekolah SD:</label>
                                <input type="number"
                                    class="form-control @error('saudara_sd') is-invalid @enderror"
                                    name="saudara_sd"
                                    value="{{ $biodata->saudara_sd }}">
                                @error('saudara_sd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="saudara_smp">Jumlah Saudara Masih Sekolah SMP:</label>
                                <input type="number"
                                    class="form-control @error('saudara_smp') is-invalid @enderror"
                                    name="saudara_smp"
                                    value="{{ $biodata->saudara_smp }}">
                                @error('saudara_smp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="saudara_sma">Jumlah Saudara Masih Sekolah SMA:</label>
                                <input type="number"
                                    class="form-control @error('saudara_sma') is-invalid @enderror"
                                    name="saudara_sma"
                                    value="{{ $biodata->saudara_sma }}">
                                @error('saudara_sma')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <!-- Page Specific JS File -->
@endpush
