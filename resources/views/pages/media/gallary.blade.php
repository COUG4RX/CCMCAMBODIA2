@extends('layout.content')

@section('content')


<section>
    <div class="container">
        <div class="page-content bg-transparent shadow-none">
            <div class="head-titles ccc-page-text text-center">
                <h2 class="fw-bolder">Gallery</h2>
            </div>
              <div class="customize-hr d-flex justify-content-center">
                <div class="hr my-4"></div>
              </div>

              <div class="row justify-content-center align-items-center g-4 my-2 mb-5">
                <!-- card 1 -->
                <div class="col-lg-4 col-sm-12 col-md-6">
                  <a href="#" class="card rounded-0 text-decoration-none">
                    <div class="card-img">
                      <div class="card-img-hvr">
                        <img src="{{asset('assets/img/Card/img-galary-01.jpg')}}" class="card-img-top rounded-0" alt="...">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- card 2 -->
                <div class="col-lg-4 col-sm-12 col-md-6">
                  <a href="#" class="card rounded-0 text-decoration-none">
                    <div class="card-img">
                      <div class="card-img-hvr">
                        <img src="{{asset('assets/img/Card/card-img-04.jpg')}}" class="card-img-top rounded-0" alt="...">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- card 3 -->
                <div class="col-lg-4 col-sm-12 col-md-6">
                  <a href="#" class="card rounded-0 text-decoration-none">
                    <div class="card-img">
                      <div class="card-img-hvr">
                        <img src="{{asset('assets/img/Card/card-img-03.jpg')}}" class="card-img-top rounded-0" alt="...">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- card 4 -->
                <div class="col-lg-4 col-sm-12 col-md-6">
                  <a href="#" class="card rounded-0 text-decoration-none">
                    <div class="card-img">
                      <div class="card-img-hvr">
                        <img src="{{asset('assets/img/Card/img-activity-03.jpg')}}" class="card-img-top rounded-0" alt="...">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- card 5 -->
                <div class="col-lg-4 col-sm-12 col-md-6">
                  <a href="#" class="card rounded-0 text-decoration-none">
                    <div class="card-img">
                      <div class="card-img-hvr">
                        <img src="{{asset('assets/img/Card/card-img-06.jpg')}}" class="card-img-top rounded-0" alt="...">
                      </div>
                    </div>
                  </a>
                </div>
                <!-- card 6 -->
                <div class="col-lg-4 col-sm-12 col-md-6">
                  <a href="#" class="card rounded-0 text-decoration-none">
                    <div class="card-img">
                      <div class="card-img-hvr">
                        <img src="{{asset('assets/img/Card/img-galary-06.jpg')}}" class="card-img-top rounded-0" alt="...">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
        </div>
    </div>
  </section>


@endsection