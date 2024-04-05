@extends('layouts.frontend')
@section('content')
    <!-- @php 
        var_dump($posts); // model ကနေ conroller ကနေ တဆင့် compact လုပ်ပြီး ပေးလိုက်သော data ပါမပါ ထုတ်ကြည့် 
    @endphp -->
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-primary border-bottom mb-4">
            <!-- Original Code -->
            <!-- <div class="container">                
                <div class="text-start text-light my-5">
                    <h1 class="fw-bolder">Welcome to EI EI Blog!</h1>
                    <p class="lead mb-0">This is m
                        y first Laravel Blog Project. <br> Don't have to be great to start but have to start to be great. Let's do it.</p>
                </div>
            </div> -->

            <!-- Start Banner -->
            <div id="carouselExample" class="carousel slide carousel-fade"  data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('frontend/images/banner1.jpg')}}" class="d-block w-100 carousel-img" alt="...">
                        <div class="carousel-text">
                            <h3>Welcome to EI EI Blog</h3>
                            <p class="d-none d-md-block">This is m
                        y first Laravel Blog Project. <br> Don't have to be great to start but have to start to be great. Let's do it
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontend/images/banner2.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-text">
                            <h3>To be Great</h3>
                            <p class="d-none d-md-block">You do not have to be Great, to Start but you have to start to be Great!
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontend/images/banner3.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-text">
                            <h3>Dream home journey</h3>
                            <p class="d-none d-md-block">We understand that buying or selling a property is a significant life event. <br> Where your dream home journey begins with a promise.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontend/images/banner4.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-text">
                            <h3>Discover Home Through Real Eyes</h3>
                            <p class="d-none d-md-block">Our platform captures the authentic experiences of homeowners, buyers, and sellers. <br>Turned real estate dreams into reality.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End Banner --> 

        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title">Featured Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-primary" href="{{route('front.show',12)}}">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{$post->image}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->created_at}}</div>
                                    <h2 class="card-title h4">{{$post->title}}</h2>
                                    <p class="card-text">{{$post->description}}</p>
                                    <a class="btn btn-primary" href="{{route('front.show',$post->id)}}">Read more →</a>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection
        