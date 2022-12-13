@extends ('layout.header')

@section('content')
    <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">

                        <div class="breadcrumbs__item ">
                            <a href="#">Home</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="#">Tentang Kami</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="#">Tentang Web Ini</a>
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

                            <h1 class="page-header__title">Tentang Web Ini</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-50 justify-between items-center">
                @foreach ($data as $row)

                    <div class="col-lg-6 pr-50 sm:pr-15">
                        <div class="composition -type-8">
                            <div class="-el-1"><img style="width: 400px; height: 400px;"
                                                    src="{{asset('logotentangweb/'.$row->logoitc)}}" alt="$row->logo">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <h2 class="text-30 lh-16">Webex SMKN 1 Garut</h2>
                        <p class="text-dark-1 mt-30">{{$row->pembuka}}</p>
                        <p class="pr-50 lg:pr-0 mt-25">{{$row->isi}}</p>
                    </div>
            </div>
            @endforeach
        </div>
    </section>



    <section class="layout-pt-lg layout-pb-md">
        <div data-anim-wrap class="container">
            <div data-anim-child="slide-left delay-1" class="row y-gap-20 justify-between items-center">
                <div class="col-lg-6">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Learn from the best instructors</h2>

                        <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur.</p>

                    </div>

                </div>
            </div>

            <div class="row y-gap-30 pt-50">

                @foreach ($anggota as $row)

                    <div class="col-lg-3 col-sm-6">
                        <div data-anim-child="slide-left delay-2" class="teamCard -type-1 -teamCard-hover">
                            <div class="teamCard__image">
                                <img style="width: 300px; height: 350px;" src="{{asset('fotoanggota/'.$row->foto)}}"
                                     alt="image">
                                <div class="teamCard__socials">
                                    <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                        <a href="#"><i class="icon-facebook text-white"></i></a>
                                        <a href="#"><i class="icon-twitter text-white"></i></a>
                                        <a href="#"><i class="icon-instagram text-white"></i></a>
                                        <a href="#"><i class="icon-linkedin text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="teamCard__content">
                                <h4 class="teamCard__title">{{$row->nama}}</h4>
                                <p class="teamCard__text">{{$row->keterangan}}</p>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
