@extends('backend/layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_document_alt"></i>Riwayat Hidup</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ url('dashboard') }}">Home</a></li>
                <li><i class="ico_document_alt"></i>Riwayat hidup</li>
                <li><i class="fa fa-files-o"></i>Pengalaman Kerja</li>
            </ol>
        </div>    
        </div>

        <!-- form -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} pengalaman_kerja
                    </header>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>OPPS!</strong> There were some problems with your input. <br> <br>
                        <ul>
                            @foreach ($error->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-sucess">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="pengalaman_kerja_form" method="POST"
                                action="{{ isset($pengalaman_kerja) ? route('pengalaman_kerja.update', $pengalaman_kerja->id) : route('pengalaman_kerja.store') }}">
                                {!! csrf_field() !!}
                                {!! isset($pengalaman_kerja) ? method_field('PUT') : '' !!}
                                <input type="hidden" name="id" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->id : '' }}"> 
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Nama Perusahaan
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="nama" name="nama" minlenght="5"
                                        value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->nama : '' }}" require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Jabatan
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" minlenght="2" 
                                        value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->jabatan : '' }}"
                                        require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Tahun Masuk
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" 
                                        value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_masuk : '' }}"
                                        require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Tahun Keluar
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="tahun_keluar" name="tahun_keluar" 
                                        value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_keluar : '' }}"
                                        require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lf-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <a href="{{ route('pengalaman_kerja.index') }}"><button class="btn btn-default"
                                            type="button">Cancel</button></a>
                                    </div>
                                </div>
                                </form>
                            </div>
                    </div>
                </section>

            </div>
        </div>
    </section>

</section>
@endsection

@push('content-css')
<link rel="stylesheet" href="{{ asset('backens/css/bootstrap-datepicker.css') }}">
@endpush
@push('content-js')
    <script src="{{ asset('backend/js/bootstrap-datepicker.js') }}"> </script>
    <script type="text/javascript">
        $('#tahun_masuk').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });$('tahun_kelluar').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        })
    </script>
@endpush
    
 