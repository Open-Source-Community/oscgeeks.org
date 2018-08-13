@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/companies.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/footer2.css') }}">

@endsection

@section('content')
    <div class="container">
        <h1 style="font-size: 400%;color: white;" class="text-center">Previous Sponsors</h1>
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Itworkx.png?raw=true"
                         alt="Itworx Logo">
                    <div class="card-body">
                        <a href="http://www.itworx.com/" target="_blank" class="btn btn-outline-warning">http://www.itworx.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Tmentors.png?raw=true"
                         alt="Tmentors Logo">
                    <div class="card-body">
                        <a href="http://tmentors.com/" target="_blank" class="btn btn-outline-warning">http://tmentors.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/code%20touch.png?raw=true"
                         alt="Code Touch Logo">
                    <div class="card-body">
                        {{--<button class="btn btn-outline-warning" disabled >WebSite</button>--}}
                        <a href="http://www.sharpmobile.ca/" target="_blank" class="btn btn-outline-warning">http://www.sharpmobile.ca</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Vad.png?raw=true"
                         alt="Vadecom Logo">
                    <div class="card-body">
                        <a href="https://vadecom.net/en" target="_blank" class="btn btn-outline-warning">https://vadecom.net/en</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Sewedy.png?raw=true"
                         alt="ElSewedy Electric Logo">
                    <div class="card-body">
                        <a href="http://www.elsewedyelectric.com/" target="_blank" class="btn btn-outline-warning">http://www.elsewedyelectric.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Acs.png?raw=true"
                         alt="ACS Logo">
                    <div class="card-body">
                        <a href="http://www.acs-egypt.com/English/Default.aspx" target="_blank"
                           class="btn btn-outline-warning">http://www.acs-egypt.com/...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/Assct.png?raw=true"
                         alt="Asset Logo">
                    <div class="card-body">
                        <a href="http://asset.com.eg/" target="_blank" class="btn btn-outline-warning">http://asset.com.eg</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/BOsta.png?raw=true"
                         alt="Bosta Logo">
                    <div class="card-body">
                        <a href="https://bosta.co/" target="_blank" class="btn btn-outline-warning">https://bosta.co</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top img-responsive"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/sponsers/National%20technology.png?raw=true"
                         alt="National technology Logo">
                    <div class="card-body">
                        <a href="http://nt-me.com/" target="_blank" class="btn btn-outline-warning">http://nt-me.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection