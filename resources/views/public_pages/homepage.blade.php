@extends('public_pages.template')

@section('content')
    {{-- <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('show', ['slug' => $post->slug]) }}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{!! Str::substr($post->body, 0, 60) !!}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{ $post->user->name }}</a>
                            on {{ date('F d, Y', strtotime($post->created_at)) }}
                        </p>
                    </div>

                    <hr class="my-4" />
                @endforeach

                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> 
            </div>
        </div>
    </div>
     <!-- SECTION TYPE 1 : HERO --> --}}
     <section class="app-section-hero">
        <div class="container">
            <div class="row">
                <!-- LEFT IMAGE -->
                <div class="col-lg-4 col-12">
                    <img class="w-100 app-hero-img"
                        src="{{ asset('images/endors_dono.png') }}">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                    <div class="d-grid gap-4 app-hero-first-content">
                        <h1 class="mt-5" style="color: #FFA41B"> SCARWASH! Layanan Jasa Profesional untuk Sepatu & Tas Anda yang Kusam dan Kotor</h1>
                        <div>
                            Rasakan perbedaan luar biasa setelah sepatu dan tas Anda menjalani perawatan cuci khusus di tempat kami! 
                            Kami menggunakan teknik cuci terbaik dan bahan ramah lingkungan, sehingga Anda tidak perlu khawatir tentang kerusakan pada sepatu Anda. 
                            Masukkan email anda untuk mendapatkan infprmasi terbaru dari kami.
                        </div>
                        <div>
                            <form class="d-flex gap-2">
                                <input class="app-input flex-grow-1" placeholder="Enter your email">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 2 -->
    <section class="bg-black text-white py-5">
        <div class="container">
            <div class="d-flex">
                <h1>Promo ScarWash</h1>
                <a class="btn text-white ms-auto" href="/yes-blog/blog">More ></a>
            </div>
            <div class="row mt-4 gy-4">
                @foreach ($posts as $item)
                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src={{asset('uploads/'.$item->banner_image)}}>
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>{{$item->title}}</b>
                        <div>
                            {!! $item->body !!}
                        </div>
                        <a class="btn btn-light">DETAILS</a>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="{{ asset('images/promo2.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Nikmati Keseruan Ramadhan bersama Flash Sale SCARWASH</b>
                        <a class="btn btn-light">DETAILS</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="{{ asset('images/promo3.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Discount 50% untuk member dan 25% untuk reguler</b>
                        <a class="btn btn-light">DETAILS</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="{{ asset('images/promo4.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Nikmati Keseruan November 2022 bersama Deep Cleaning</b>
                        <a class="btn btn-light">DETAILS</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 3 -->
    <section class="container py-5 container d-grid gap-4">
        <div class="row">
            <div class="col">
                <h2>Kenapa Harus Menggunakan Jasa SCARWASH?</h2>
            </div>
            <div class="col">
                SCARWASH memberikan perawatan dengan detail tiap prosesnya untuk hasil yang memuaskan. Bahan yang digunakan tidak akan merusak sepatu Anda. Kualitas yang Tak Tertandingi, Harga yang Bersahabat.Percayakan Sepatu dan Tas Anda pada Tim Ahli Kami.
            </div>
        </div>

        <div>
            <img style="height:400px;" class="w-100 object-fit-cover rounded-3"
                src="{{ asset('images/toko_1.jpg') }}">
        </div>

        <div class="row">
            <div class="col-lg-3">
                <h3>Free Pick Up Delivery</h3>
                <p>Gratis biaya pengiriman area Surabaya - Sidoarjo</p>
            </div>

            <div class="col-lg-3">
                <h3>Customer Service</h3>
                <p>Kami Siap Menjawab Setiap Pertanyaan dan Permintaan Anda</p>
            </div>

            <div class="col-lg-3">
                <h3>Expert Technician</h3>
                <p>Pengalaman tim yang sudah expert di bidang cuci sepatu dan tas</p>
            </div>

            <div class="col-lg-3">
                <h3>Affordable Price</h3>
                <p>Harga yang lebih terjangkau dengan kualitas terbaik</p>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 4 -->
    <section class="container py-5">
        <div class="text-center">
            <h1>LAYANAN YANG KAMI BERIKAN</h1>
            <p>Kami menyajikan layanan yang terbaik pada bidang kami. Setiap langkah kami dedikasikan untuk memberikan pengalaman pelanggan yang luar biasa, memastikan kepuasan sepenuh hati dan kepercayaan pelanggan. </p>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('images/fast_cleaning.png') }}"  height="360px">
                <div class="py-2 d-grid gap-2">
                    <h2>Fast Cleaning</h2>
                    <p>Membersihkan bagian luar midsole dan upper</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('images/repair.png') }}" height="360px" >
                <div class="py-2 d-grid gap-2">
                    <h2>Repair/Reglue</h2>
                    <p>Memperbaiki/mengelem ulang sepatu yang lekang atau yang sudah lepas</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('images/unyellowing_.png') }}" height="360px">
                <div class="py-2 d-grid gap-2">
                    <h2>Unyellowing</h2>
                    <p>Menghilangkan noda kuning pada Midsole hingga menjadi putih kembali (Tidak bisa untuk sole berbahan boots atau busa)</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('images/pelayanan_coloring.png') }}" height="360px">
                <div class="py-2 d-grid gap-2">
                    <h2>Repaint / Change Color</h2>
                    <p>Mewarnai ulang atau mengubah warna sepatu (Sudah termasuk deep cleaning)</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('images/deep_cleaning.png') }}" height="360px">
                <div class="py-2 d-grid gap-2">
                    <h2>Deep Cleaninng</h2>
                    <p>Mencuci seluruh bagian sepatu. Mulai dari Upper, Laces, Insole, Midsole, Outsole, dll. (+Parfum anti bakterial)</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('images/bag_care.png') }}" height="360px">
                <div class="py-2 d-grid gap-2">
                    <h2>Bag Care</h2>
                    <p>Mencuci seluruh bagian tas dan koper</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 5 : EMBED MAP -->
    <section class="bg-black py-5 text-center">
        <div class="text-white">
            <h1>OUR LOCATION</h1>
            <p>Find us at here</p>
        </div>
        <div class="container">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1586.36253830524!2d112.76168589815605!3d-7.265826472407318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb66387222e5%3A0xec4739245ca18d8!2sLaundry%20Sepatu%20Surabaya%20(Scarwash%20Dharmahusada)!5e0!3m2!1sen!2sid!4v1690674167015!5m2!1sen!2sid" 
                width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 6 : GALLERY -->
    <section class="py-5 bg-black text-white">
        <div class="d-flex container">
            <h1>Gallery</h1>
            <a href="/blog" class="btn text-white ms-auto my-auto">More</a> 
        </div>

        <div class="row gx-4 mt-4">
            @foreach ($posts as $item)
            <img img style="height:300px;" class="col-2 object-fit-cover"
                    src={{asset('uploads/'.$item->banner_image)}}>
            {{-- <img style="height:300px;" class="col-2 object-fit-cover"
                src="{{ asset('images/endors_dono.png') }}"> --}}
            {{-- <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('images/toko_1.jpg') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('images/fast_cleaning.png') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('images/repair.png') }}">
            <img style="height:300px;" class="col-1 object-fit-cover"
                src="{{ asset('images/bag_care.png') }}"> --}}
            @endforeach
        </div>

        {{-- <div class="row gx-4 mt-4">
            <img style="height:300px;" class="col-1 object-fit-cover"
                src="{{ asset('images/unyellowing_.png') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('images/pelayanan_coloring.png') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('images/deep_cleaning.png') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
            src="{{ asset('images/parfume.png') }}">
            <img style="height:300px;" class="col-2 object-fit-cover"
            src="{{ asset('images/alamat_toko.png') }}">
        </div> --}}
    </section>
    <hr />
@endsection
