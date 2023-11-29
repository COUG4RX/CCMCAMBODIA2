@extends('layout.content')

@section('content')


<section>
    <div class="container">
        <div class="page-content oversight-plan-content border">
              <div class="row card-oversight-control">
                <div class="col-10 col-lg-4 col-sm-6 member-list oversight-plan-link d-flex mx-lg-5 mx-md-5 mx-sm-3 mb-sm-5">
                  <div class="member-list-img my-2">
                      <img src="{{ asset('assets/img/Committees/pdf.png') }}" alt="">
                  </div>
                  <div class="member-list-text my-3">
                    <h6>GF_CCM_Governance <br>_Manual Final_25072019 VHRev 9Aug</h6>
                      <span class="text-secondary">Link File: 
                          <span class="ms-2">
                              <a href="https://ccmcambodia.org/file_manager/CCC%20Membership%20list%20Jan2021-Dec2023%20(3)-8473fd4c-6571-470e-bd00-3f9acf78f8a5.pdf" class="py-1 px-2 border rounded-1">File</a>
                          </span>
                      </span>
                  </div>
              </div>
                <div class="col-12">
                    <div class="oversight-plan-btn d-flex justify-content-center align-items-center w-100 gap-4 ">
                        <button class="btn btn-secondary btn-previous py-2 px-4"><i class="fa-solid fa-angles-left"></i> Previous</button>
                        <button class="btn btn-secondary btn-next py-2 px-4">Next <i class="fa-solid fa-angles-right"></i></button>
                    </div>
                </div>
              </div><br><br>
        </div>
    </div>
  </section>

@endsection