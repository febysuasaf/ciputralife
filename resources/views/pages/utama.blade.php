@extends('layouts.app')
@section('content')

<section class="ftco-section ftco-fullwidth">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                {{-- <span class="subheading">Why Choose Us?</span> --}}
                <h2 class="mb-2">Konfirmasi Data Karyawan Ciputra Life</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row d-sm-flex text-wrapper align-items-stretch">
            <div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch"
                style="background-image: url();"></div>
            <div class="one-half half-text d-flex justify-content-end align-items-center">
                <div class="text-inner pt-md-5 pl-md-5">
                    <div class="row d-flex">
                        <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                        <form action="{{ URL::to('submit') }}" method="post" class="appointment">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input hidden style="border:none" name='token' id="token" value="{{ Session::get('token') }}" >
                                            <input type="text" class="form-control" name="nama" required placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" required placeholder="Email" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nik" required placeholder="NIK">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mobile" required placeholder="No Tlp">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Kirim data" class="btn btn-primary py-3 px-4">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
