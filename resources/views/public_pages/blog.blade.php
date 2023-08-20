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
    </div>--}}

    <section class="container" style="padding-top:100px;max-width: 90%">
        <div class="text-center bg-black text-white py-5">
            <h1>Blog Scar Wash</h1>
        </div>

        <div class="row gx-4 gy-4 mt-2">
            @foreach ($posts as $item)
            <div class="col-lg-4">
                <div class="card rounded-2" >
                    <img class="w-100 object-fit-cover" style="height:400px; width:200px; align-items: center; justify-content: center;"
                        src={{asset('uploads/'.$item->banner_image)}}>
                    <div class="p-2">

                        <b>{{$item->title}}</b>
                        <div>
                            {!! $item->body !!}
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <br>
            @endforeach


        </div>
    </section>
    <br>
    <br>
    <hr/>

@endsection
