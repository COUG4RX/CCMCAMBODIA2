@extends('layout.content')

@section('content')

<section>
    <div class="container">
        <div class="page-content border py-5">
          <div class="row card-oversight-control">
            <div class="col-10 col-lg-4 col-sm-6 member-list oversight-plan-link d-flex mx-lg-5 mx-md-5 mx-sm-3 mb-sm-5">
              <div class="member-list-img my-2">
                  <img src="{{asset('assets/img/Committees/pdf.png')}}" alt="">
              </div>
              <div class="member-list-text my-3">
                <h6>Principal Recipient MEF/MoH-LIT</h6>
                  <span class="text-secondary">Link File: 
                      <span class="ms-2">
                          <a href="https://ccmcambodia.org/file_manager/CCC%20Membership%20list%20Jan2021-Dec2023%20(3)-8473fd4c-6571-470e-bd00-3f9acf78f8a5.pdf" class="py-1 px-2 border rounded-1">File</a>
                      </span>
                  </span>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

@endsection