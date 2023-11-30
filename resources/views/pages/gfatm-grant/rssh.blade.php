@extends('layout.content')

@section('content')

<section>
    <div class="container">
        <div class="page-content pb-5  d-flex bg-transparent shadow-none justify-content-center align-items-center flex-column">
            <img src="{{asset('assets/img/Document/no_data.svg')}}" style="width: 500px; height: 300px;" alt="">

              <div class="no-info d-flex justify-content-center align-items-center flex-column gap-3">
                <span class="text-color-custom fs-3">No information available</span>
                <span class="text-color-custom fs-5">There is no information in English about this page.</span>
              </div>
        </div>
    </div>
  </section>

@endsection