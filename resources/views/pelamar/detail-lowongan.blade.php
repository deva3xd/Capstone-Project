@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg text-white">Detail Lowongan</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><span class="text-white">Home</span></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><span class="text-white-50">Lowongan</span></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><span class="text-white-50">Detail</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                <img src="images/blog/3.jpg" alt="" class="img-fluid rounded">

                                <div class="blog-item-content mt-4">
                                    <h2 class="mt-3 mb-3 text-md">nama perusahaan</h2>
                                    <div class="blog-item-meta mb-5">
                                        <span class="text-muted text-capitalize mr-3"><i
                                                class="ti-pencil-alt mr-2"></i>web developer</span>
                                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th
                                            January</span>
                                    </div>

                                    <p class="lead mb-4">Non illo quas blanditiis repellendus laboriosam minima animi.
                                        Consectetur accusantium pariatur repudiandae!</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus,
                                        consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus
                                        distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae.</p>

                                    <p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the
                                        emotional sensation of stress from our first instances of social rejection ridicule.
                                        We quickly learn to fear and thus automatically.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat
                                        tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis itaque quidem,
                                        voluptatem autem eos animi laborum iusto expedita sapiente.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
