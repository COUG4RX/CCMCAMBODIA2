@extends('layout.content')

@section('content')

<section>
    <div class="container">
        <div class="page-content border">
            <div class="head-titles ccc-page-text text-center">
                <h2 class="fw-bolder">CCC Membership List</h2>
            </div>
              <div class="customize-hr d-flex justify-content-center">
                <div class="hr mt-4"></div>
              </div>
              <ol class="ol-text mt-5 mx-5 text-secondary fs-5">
                <li>
                    <span>Membership on the CCC is granted to an organisation, institution or ministry, which then selects an individual to represent it at CCC meetings. In a situation where there is no organisation that is qualified to represent a constituency, membership may be granted to an individual in her or his personal capacity.</span>
                </li>
                <li>
                    <span>
                        Each organization proposed for membership on the CCC, and each individual proposed in her/his personal capacity rather than as representative of an organization, must be approved by the CCC.</span>
                </li>
                <li>
                    <span>Each constituency represented on the CCC shall elect/appoint the number of members as provided in Table 1 “CCC Composition” above, and an officially designated alternate for each member. No other person, whether a member of the CCC or not, shall be eligible to represent or vote other than for the constituency that they represent. Each constituency will officially communicate the names of the member and designated alternate to the CCC Secretariat.</span>
                </li>
              </ol><br><br>

              <div class="doc-img-content d-flex justify-content-center">
                  <div class="row doc d-flex gap-5">
                    <div class="content-item col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <img src="{{asset('assets/img/About-CCC/membership-img-01.png')}}" alt="">
                    </div>
                    <div class="content-item col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <img src="{{asset('assets/img/About-CCC/membership-img-02.png')}}" alt="">
                    </div>
                    <div class="content-item col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <img src="{{asset('assets/img/About-CCC/membership-img-01.png')}}" alt="">
                    </div>
                    <div class="content-item col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <img src="{{asset('assets/img/About-CCC/membership-img-01.png')}}" alt="">
                    </div>
                    <div class="content-item col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <img src="{{asset('assets/img/About-CCC/membership-img-01.png')}}" alt="">
                    </div>
                    <div class="content-item col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <img src="{{asset('assets/img/About-CCC/membership-img-01.png')}}" alt="">
                    </div>
                    <div class="content-item col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <img src="{{asset('assets/img/About-CCC/membership-img-02.png')}}" alt="">
                    </div>
                    <div class="content-item col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <img src="{{asset('assets/img/About-CCC/membership-img-03.png')}}" alt="">
                    </div>
                    <div class="content-item col-xs-4 d-none">
                      <!-- none  -->
                    </div>
                  </div>
              </div><br><br>
        </div>
    </div>
  </section>
@endsection