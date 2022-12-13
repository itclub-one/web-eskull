@extends ('layout.header')

@section('content')
    <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">

                        <div class="breadcrumbs__item ">
                            <a class="texttt" href="#">Home</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a class="texttt" data-el-toggle=".js-explore-toggle" href="#">Jelajahi</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a class="texttt" data-el-toggle=".js-explore-toggle" href="#">Sekbid</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a class="texttt" href="#">{{$data->nama_eskul}}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-header -type-1">
        <div class="container">
            <div class="page-header__content">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">

                            <h1 class="page-header__title">{{$data->nama_eskul}}</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="shopCompleted-header">
                        <img src="{{asset('logoeskul/'.$data->logo)}}" alt="{{$data->logo}}">
                    </div>

                    <div class="shopCompleted-info">
                        <div class="row no-gutters y-gap-32">
                            <div class="col-md-3 col-sm-6">
                                <div class="shopCompleted-info__item">
                                    <div class="subtitle">PEMBINA</div>
                                    <div class="title text-purple-1 mt-5">{{$data->pembina}}</div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="shopCompleted-info__item">
                                    <div class="subtitle">KETUA</div>
                                    <div class="title text-purple-1 mt-5">{{$data->ketua}}</div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="shopCompleted-info__item">
                                    <div class="subtitle">WAKIL KETUA</div>
                                    <div class="title text-purple-1 mt-5">{{$data->wakilketua}}</div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="shopCompleted-info__item">
                                    <div class="subtitle">JADWAL KUMPULAN</div>
                                    <div class="title text-purple-1 mt-5">{{$data->jadwal_kumpulan}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shopCompleted-footer bg-light-4 border-light rounded-8">
                        <div class="shopCompleted-footer__wrap">
                            <center>
                                <h2 class="title">
                                    VISI & MISI
                                </h2>
                            </center>
                            <div data-anim="slide-up delay-3" class="row justify-center">
                                <div class="col-xl-8 col-lg-9 col-md-11">
                                    <h5>VISI</h5>
                                    <p class="mt-30">{{$data->visi}}</p>
                                </div>

                                <div class="col-xl-8 col-lg-9 col-md-11">
                                    <div class="mt-60 lg:mt-40">
                                        <h5>MISI</h5>
                                        <p class="mt-30">{!! nl2br(e($data->misi_eskul)) !!}</p>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-9 col-md-11">
                                    <div class="mt-60 lg:mt-40">
                                        <h5>Program Kerja</h5>
                                        <p class="mt-30">{!! nl2br(e($data->program_kerja)) !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
