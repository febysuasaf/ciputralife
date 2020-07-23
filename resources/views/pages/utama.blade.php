@extends('layouts.app')
@section('content')

<section class="ftco-section bg-light">
    {{-- <div class="overlay"></div>
    <div class="overlay-2"></div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                {{-- <span class="subheading">Why Choose Us?</span> --}}
                <h2 class="mb-2">Konfirmasi Data Karyawan Ciputra Life</h2>
            </div>
            <div>
                <form action="{{ URL::to('submit') }}" method="post" class="appointment">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input hidden style="border:none" name='token' id="token" value="{{ Session::get('token') }}" width=50% >
                                    <input type="text" class="form-control" name="nama" required placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" required placeholder="Email" width=50% >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nik" required placeholder="NIK" width=50%>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mobile" required placeholder="No Tlp" width=50%>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Kirim data" class="btn btn-primary py-3 px-4" width=50%>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
@endsection
