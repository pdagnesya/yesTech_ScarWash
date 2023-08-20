@extends('public_pages.template')

@section('content')
    <section class="container" style="padding-top:100px;max-width: 90%">
        <div class="text-center bg-black text-white py-5">
            <h1>Price List</h1>
        </div>

        <div class="text-center" style="padding-top: 40px">
            <b>Rasakan perbedaan luar biasa setelah sepatu dan tas Anda menjalani perawatan cuci khusus di tempat kami! 
            Kami menggunakan teknik cuci terbaik dan bahan ramah lingkungan, sehingga Anda tidak perlu khawatir tentang kerusakan pada sepatu Anda. 
            Masukkan email anda untuk mendapatkan infprmasi terbaru dari kami.</b>
        </div>

        <div class="container"style="display: block;" >
            <div class="row gx-2 gy-2 mt-2">
                <div class="col-lg-6" style="padding-left: 125px" >
                   <img src="{{asset('images/pricelist.jpg')}}" width="1000px">
                </div>

                <div class="col-lg-6">
                    <img src="">
                </div>
            </div>
        </div>
    </section>
    <br><br>
@endsection