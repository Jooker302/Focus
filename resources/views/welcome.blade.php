@extends('layouts.user')

@section('content')

 <!-- slider section -->
 <div class="hero_area">
 <section class=" slider_section position-relative">
    {{-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li> <span>-</span>
      <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
    </ol> --}}
    <div class="glass">
      {{-- <h6>
        Glasses
      </h6> --}}
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <div>
                    <h1>
                      Welcome to
                    </h1>
                    <div style="display: flex; justify-content:inline">
                    <h2 style="color: #38C5EB">

                      Focus</h2><h2 style="margin-left: 10px"> Optiplex
                    </h2>
                </div>
                    <div class="btn-box">
                      <a href="{{url('product')}}" class="btn-1">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <div>
                    <h1>
                      Welcome to
                    </h1>
                    <h2>
                      Glasses shop
                    </h2>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      {{-- <div class="custom_carousel-control">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div> --}}
    </div>
  </section>
  <!-- end slider section -->
</div>

<!-- about section -->
{{--
<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              <span>About</span> our shop
            </h2>
          </div>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters,
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section> --}}


<!-- end about section -->

<!-- glass section -->




<!-- end glass section -->

<!-- quality section -->

<section class="quality_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        <span> Best</span> Quality
      </h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <ul class="nav nav-tabs detail-box" id="myTab" role="tablist">
          <li class="">
            <a class=" active" id="QTab1Link" data-toggle="tab" href="#qTab1" role="tab" aria-controls="qTab1" aria-selected="true">
              <h6 id="QTab1Link" data-toggle="tab" href="#qTab1" role="tab" aria-controls="qTab1" aria-selected="true">
                <span>01</span>
                It is a long established fact that a reader will be distracted
              </h6>
            </a>
          </li>
          <li class="">
            <a class="" id="QTab2Link" data-toggle="tab" href="#qTab2" role="tab" aria-controls="qTab2" aria-selected="false">
              <h6 id="QTab2Link" data-toggle="tab" href="#qTab2" role="tab" aria-controls="qTab2" aria-selected="false">
                <span>02</span>
                by the readable content of a page when looking at its
              </h6>
            </a>
          </li>
          <li class="">
            <a class="" id="QTab3Link" data-toggle="tab" href="#qTab3" role="tab" aria-controls="qTab3" aria-selected="false">
              <h6 id="QTab3Link" data-toggle="tab" href="#qTab3" role="tab" aria-controls="qTab3" aria-selected="false">
                <span>03</span>
                layout. The point of using Lorem Ipsum is that it has a
              </h6>
            </a>
          </li>
          <li class="">
            <a class="" id="QTab4Link" data-toggle="tab" href="#qTab4" role="tab" aria-controls="qTab4" aria-selected="false">
              <h6 id="QTab4Link" data-toggle="tab" href="#qTab4" role="tab" aria-controls="qTab4" aria-selected="false">
                <span>04</span>
                more-or-less normal distribution of letters,
              </h6>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-6 tab-content">
        <div class="img-container tab-pane  fade show active" id="qTab1" role="tabpanel" aria-labelledby="QTab1Link">
          <div class="img-box ">
            <img src="images/quality-img.jpg" alt="">
          </div>
        </div>
        <div class="img-container tab-pane fade" id="qTab2" role="tabpanel" aria-labelledby="QTab2Link">
          <div class="img-box  ">
            <img src="images/buy-img.png" alt="">
          </div>
        </div>
        <div class="img-container tab-pane fade" id="qTab3" role="tabpanel" aria-labelledby="QTab3Link">
          <div class="img-box  ">
            <img src="images/quality-img.jpg" alt="">
          </div>
        </div>
        <div class="img-container tab-pane fade" id="qTab4" role="tabpanel" aria-labelledby="QTab4Link">
          <div class="img-box  ">
            <img src="images/buy-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="glass_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2 style="color:white">
          <span> Best </span> Picks
        </h2>
      </div>
      <div class="glass_container">
        <div class="box">
          <div class="img-box">
            <img src="images/g-1.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/g-2.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/g-3.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/g-4.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/g-5.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/g-6.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/g-7.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/g-8.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="{{url('product')}}">
          See More
        </a>
      </div>
    </div>
  </section>
<!-- end quality section -->

<!-- offer section -->




<!-- end offer section -->

<!-- buy section -->

<section class="buy_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        <span class="s-1">
          Buy
        </span>
        your stylish
        <span class="s-2">
          glasses
        </span>
      </h2>
    </div>
    <div class="box">
      <div class="img-box">
        <img src="images/buy-img.png" alt="">
      </div>
      <div class="detail-box">
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when
          looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
          letters, <br>
          It is a long established fact that a reader will be distracted by the readable content of a page when
          looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
          letters,
        </p>
        <a href="{{url('product')}}">
          Buy Now
        </a>
      </div>
    </div>
  </div>
</section>


<section class="offer_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="img-box">
            <img src="images/offer-img.jpg" alt="">
            <div class="price">
              <h4>
                $60
              </h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 offset-md-1">
          <div class="detail-box">
            <h2>
              Book <br>
              our <br>
              special <br>
              offer
            </h2>
            <a href="{{url('product')}}">
              See More offer
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end buy section -->

<!-- client section -->

<section class="client_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container">
      <h2>
        <span> What </span> Says Our Cutomer
      </h2>
    </div>
    <div class="box">
      <div class="detail-box">
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
          some form, by injected humour, or randomised words which don't look even slightly believable.There are many
          variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
          injected humour, or randomised words which don't look even slightly believable.
        </p>
      </div>
      <div class="client-id">
        <div class="img-box">
          <img src="images/client.png" alt="">
        </div>
        <h5>
          Jacksmith sand
        </h5>
      </div>
    </div>
  </div>
</section>

<!-- end client section -->

<!-- contact section -->

{{-- <section class="contact_section layout_padding">
  <div class="container">
    <h2>
      Request A call back
    </h2>
    <div class="">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Name">
                </div>
                <div>
                  <input type="text" placeholder="Phone Number">
                </div>
                <div>
                  <input type="email" placeholder="Email">
                </div>
                <div class="">
                  <input type="text" placeholder="Message" class="message_input">
                </div>
                <div class="mt-5 d-flex justify-content-center ">
                  <button type="submit">
                    Send
                  </button>
                </div>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section> --}}

@endsection
