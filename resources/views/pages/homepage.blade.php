@extends('layout.content')

@section('content')
    <section>
      <div class="container mt-4">
        <!-- Swiper -->
        <div class="swiper1">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">

            <div class="swiper-slide d-flex d-lg-flex justify-content-between ">
                <div class="bg-control-text d-flex align-items-baseline">
                  <div class="col-11 swiper-slide-text mt-5 ms-4 top-0">
                    <h5 class="fw-bold text-white text-start ps-3">His Excellency Hem Vanndy, Chair of CCC</h5><br>
                    <p class="ps-3 px-4 fs-6 text-start text-white ">His Excellency Hem Vanndy chaired the Country Dialogue (on 22-23 January 2020 at Phnom Penh Hotel), the open and inclusive forum for all stakeholders, communities, CSOs, donors and DPs to develop new Funding Request Applications for HIV/AIDS, Tuberculosis and Resilient and Sustainable System for Health in Cambodia for the period of 2021-2023.</p>
                  </div>
                </div>
                <div class="col-7 swiper-slide-img">
                  <img src="{{ asset('assets/img/Slider/img-02-slide.jpg')}}" alt="" >
                </div>
              </div>

            <div class="swiper-slide d-flex d-lg-flex justify-content-between ">
                <div class="bg-control-text d-flex align-items-baseline">
                  <div class="col-11 swiper-slide-text mt-5 ms-4 top-0">
                    <h5 class="fw-bold text-white text-start ps-3">7th CCC meeting 8 Sept 2022</h5><br>
                    <p class="ps-3 px-4 fs-6 text-start text-white ">The 7th CCC meeting was held on 08 September 2022 and presided over by H.E. Mr. Hem Vanndy, CCC Chair. Excellency CCC Chair started the physical meeting by warmly welcoming all the participants, and asked the CCC Secretariat to confirm the quorum required for the meeting, then introduced agenda of the meeting for comment and adoption.</p>
                  </div>
                </div>
                <div class="col-7 swiper-slide-img">
                  <img src="{{ asset('assets/img/Slider/img-03-slide.jpg')}}" alt="" >
                </div>
              </div>

              <div class="swiper-slide d-flex d-lg-flex justify-content-between ">
                <div class="bg-control-text d-flex align-items-baseline">
                  <div class="col-11 swiper-slide-text mt-5 ms-4 top-0">
                    <h5 class="fw-bold text-white text-start ps-3">His Excellency Hem Vanndy, Chair of CCC</h5><br>
                    <p class="ps-3 px-4 fs-6 text-start text-white ">His Excellency Hem Vanndy chaired the Country Dialogue (on 22-23 January 2020 at Phnom Penh Hotel), the open and inclusive forum for all stakeholders, communities, CSOs, donors.</p>
                  </div>
                </div>
                <div class="col-7 swiper-slide-img">
                  <img src="{{ asset('assets/img/Slider/img-01-slide.jpg')}}" alt="" >
                </div>
              </div>
            </div>
            <div class="swiper-pagination">
            </div>
          </div>
        </div>



        
        <!-- swiper responsive  -->
        <div class="swiper2">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <!-- slide 1 -->
              <div class="swiper-slide d-flex d-lg-flex justify-content-between ">
                <div class="bg-control-text d-flex align-items-baseline">
                </div>
                <div class="col-sm-12 col-xs-12 swiper-slide-img">
                  <img src="{{ asset('assets/img/Slider/img-01-slide.jpg')}}" alt="" >
                </div>
  
                <div class="text-responsive">
                  <div class="col-sm-10 swiper-slide-text mt-4 ms-4 top-0">
                    <h5 class="fw-bold text-white text-start ps-sm-1 pb-sm-5">His Excellency Hem Vanndy, Chair of CCC<span class="rounded-5 fs-6">...</span></h5><br>
                    <p class="ps-3 px-4 fs-6 text-start text-white ">His Excellency Hem Vanndy chaired the Country Dialogue (on 22-23 January 2020 at Phnom Penh Hotel), the open and inclusive forum for all stakeholders, communities, CSOs, donors.</p>
                  </div>
                </div>
              </div>
              <!-- slide 2 -->
              <div class="swiper-slide d-flex d-lg-flex justify-content-between ">
                <div class="bg-control-text d-flex align-items-baseline">
                </div>
                <div class="col-sm-12 col-xs-12 swiper-slide-img">
                  <img src="{{ asset('assets/img/Slider/img-02-slide.jpg')}}" alt="" >
                </div>
  
                <div class="text-responsive">
                  <div class="col-sm-10 swiper-slide-text mt-4 ms-4 top-0">
                    <h5 class="fw-bold text-white text-start ps-sm-1 pb-sm-5">His Excellency Hem Vanndy, Chair of CCC<span class="rounded-5 fs-6">...</span></h5><br>
                    <p class="ps-3 px-4 fs-6 text-start text-white ">His Excellency Hem Vanndy chaired the Country Dialogue (on 22-23 January 2020 at Phnom Penh Hotel), the open and inclusive forum for all stakeholders, communities, CSOs, donors and DPs to develop new Funding Request Applications for HIV/AIDS, Tuberculosis and Resilient and Sustainable System for Health in Cambodia for the period of 2021-2023.</p>
                  </div>
                </div>
              </div>
              <!-- slide 3 -->
              <div class="swiper-slide d-flex d-lg-flex justify-content-between ">
                <div class="bg-control-text d-flex align-items-baseline">
                </div>
                <div class="col-sm-12 col-xs-12 swiper-slide-img">
                  <img src="{{ asset('assets/img/Slider/img-03-slide.jpg')}}" alt="" >
                </div>
  
                <div class="text-responsive">
                  <div class="col-sm-10 swiper-slide-text mt-4 ms-4 top-0">
                    <h5 class="fw-bold text-white text-start ps-sm-1 pb-sm-5">7th CCC meeting 8 Sept 2022<span class="rounded-5 fs-6">...</span></h5><br>
                    <p class="ps-3 px-4 fs-6 text-start text-white ">The 7th CCC meeting was held on 08 September 2022 and presided over by H.E. Mr. Hem Vanndy, CCC Chair. Excellency CCC Chair started the physical meeting by warmly welcoming all the participants, and asked the CCC Secretariat to confirm the quorum required for the meeting, then introduced agenda of the meeting for comment and adoption.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="content-wrapper container mt-5">
        <div class="content-wraper-block">
          <div class="head-titles text-center">
            <h2 class="fw-bold">Home</h2>
          </div>
          <div class="customize-hr d-flex justify-content-center">
            <div class="hr mt-4"></div>
          </div>
          <div class="content-detail mt-4 mb-5">
            <p class="fs-5 text-secondary">The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.</p>
          </div>

          <div class="head-titles text-center">
            <h2 class="fw-bolder">News</h2>
          </div>
          <div class="customize-hr d-flex justify-content-center">
            <div class="hr mt-4"></div>
          </div>
          <div class="row justify-content-center align-items-center g-4 mt-4">
            <!-- card 1 -->
            <div class="col-xl-4 col-sm-12 col-md-6 ">
              <a href="/drop-down-menu/View-detail01.html" class="card rounded-0 text-decoration-none">
                <div class="card-img">
                  <div class="card-img-hvr">
                    <img src="{{ asset('assets/img/Card/card-img-01.jpg')}}" class="card-img-top rounded-0" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-text text-dark">
                    <h1 class="fw-bold fs-5">The CCC shall normally hold four regular meetings per calendar year at approximately quarterly intervals. A calendar of regular meetings shall be prepared by the CCC</h1>
                    <p class="pt-2">The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituencies represented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance the performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituencies represented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, Test
                    TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund. The purpose of the CCC is to enhance the performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituencies represented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.</p></div>
                </div>
              </a>
            </div>
            <!-- card 2 -->
            <div class="col-xl-4 col-sm-12 col-md-6 ">
              <a href="/drop-down-menu/View-detail02.html" class="card rounded-0 text-decoration-none">
                <div class="card-img">
                  <div class="card-img-hvr">
                    <img src="{{ asset('assets/img/Card/card-img-02.jpg')}}" class="card-img-top rounded-0" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-text text-dark">
                    <h1 class="fw-bold fs-5">Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing</h1>
                    <p class="pt-2">The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS,
                      TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.
                      
                      TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.
                      TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.</p></div>
                </div>
              </a>
            </div>
            <!-- card 3 -->
            <div class="col-xl-4 col-sm-12 col-md-6 ">
              <a href="/drop-down-menu/View-detail02.html" class="card rounded-0 text-decoration-none">
                <div class="card-img">
                  <div class="card-img-hvr">
                    <img src="{{ asset('assets/img/Card/card-img-03.jpg')}}" class="card-img-top rounded-0" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-text text-dark">
                    <h1 class="fw-bold fs-5">Tuberculosis and malaria and to monitor and support the implementation of CCC-initiated activities in line with priority national programs and supported by the Global Fund.</h1>
                    <p class="pt-2">The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituencies represented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituencies represented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS,
                      TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituencies represented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance the performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.</p></div>
                </div>
              </a>
            </div>
            <!-- card 4 -->
            <div class="col-xl-4 col-sm-12 col-md-6">
              <a href="/drop-down-menu/View-detail02.html" class="card rounded-0 text-decoration-none">
                <div class="card-img">
                  <div class="card-img-hvr">
                    <img src="{{ asset('assets/img/Card/card-img-04.jpg')}}" class="card-img-top rounded-0" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-text text-dark">
                    <h1 class="fw-bold fs-5">The CCC shall normally hold four regular meetings per calendar year at approximately quarterly intervals. A calendar of regular meetings shall be prepared by the CCC</h1>
                    <p class="pt-2">The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS.The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS,The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS,</p></div>
                </div>
              </a>
            </div>
            <!-- card 5 -->
            <div class="col-xl-4 col-sm-12 col-md-6">
              <a href="/drop-down-menu/View-detail02.html" class="card rounded-0 text-decoration-none">
                <div class="card-img">
                  <div class="card-img-hvr">
                    <img src="{{ asset('assets/img/Card/card-img-05.jpg')}}" class="card-img-top rounded-0" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-text text-dark">
                    <h1 class="fw-bold fs-5">TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and</h1>
                    <p class="pt-2">The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS,
                      TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS,</p></div>
                </div>
              </a>
            </div>
            <!-- card 6 -->
            <div class="col-xl-4 col-sm-12 col-md-6">
              <a href="/drop-down-menu/View-detail02.html" class="card rounded-0 text-decoration-none">
                <div class="card-img">
                  <div class="card-img-hvr">
                    <img src="{{ asset('assets/img/Card/card-img-06.jpg')}}" class="card-img-top rounded-0" alt="...">
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-text text-dark">
                    <h1 class="fw-bold fs-5">CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies.</h1>
                    <p class="pt-2">The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituencies represented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS,
                      TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituencies represented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies. The CCC is a multi-sectoral national platform to coordinate and facilitate Global Fund activities to fight against HIV/AIDS, TB and malaria in Cambodia.The CCC is comprised of representatives of stakeholder constituenciesrepresented at the national level. The mandate of the CCC is to mobilize a national multi-sectoral response to develop and submit proposals to the Global Fund to scale up the fight against HIV/AIDS, TB and malaria, and to oversee and support the implementation of activities that are initiated by the CCC in line with national program priorities and supported by the Global Fund.The purpose of the CCC is to enhance performance of the Global Fund activities in Cambodia in partnership with stakeholder constituencies, to promote efficient program implementation, to avoid duplication by harmonizing Global Fund activities with other programs throughout Cambodia, and to strengthen coordination among stakeholder constituencies.</p></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="content-wrapper container">
        <div class="content-wrapper-block">
          <div class="head-titles text-center mt-5">
            <h2 class="fw-bolder">Video</h2>
          </div>
          <div class="customize-hr d-flex justify-content-center">
            <div class="hr mt-4"></div>
          </div>
          <div class="row justify-content-center align-items-center mt-5 yt-link">
            <div class="col-xl-4 col-sm-12 col-md-6 mb-3">
              <div class="card card-body-yt-link">
                <iframe class="youtube-link" src="https://www.youtube.com/embed/dEhTkM_cKUo?si=aN1TfvV6w8MrYlqJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body overflow-text">
                  <h1 class="card-text fs-5 fw-bold">Census 2020, Cambodian Community - Cambodian Complete Count Committee (CCCC)</h1>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-12 col-md-6 mb-3">
              <div class="card card-body-yt-link">
                <iframe class="youtube-link" src="https://www.youtube.com/embed/gNn8JmxYJc0?si=DQzj68LmtaBAoANS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body overflow-text">
                  <h1 class="card-text fs-5 fw-bold">GIZ: Effectiveness of Coordinated Service Delivery, Cambodia. 2019</h1>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-12 col-md-6 mb-3">
              <div class="card card-body-yt-link">
                <iframe class="youtube-link" src="https://www.youtube.com/embed/uzMGQMFZHOs?si=tvV2TTVo8mN-d9dO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body overflow-text">
                  <h1 class="card-text fs-5 fw-bold">Cambodia 2017 - Countering the Connectivity Conundrum</h1>
                </div>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="content-wrapper container mb-lg-5">
        <div class="content-wrapper-block">
          <div class="head-titles text-center mt-5">
            <h2 class="fw-bolder">Partner</h2>
          </div>
          <div class="customize-hr d-flex justify-content-center">
            <div class="hr mt-4"></div>
          </div>
                  
          <div class="row justify-content-start align-items-center mt-5 ms-0">
            <div class="col-4 partner">
                <img src="{{ asset('assets/img/partner/partner-logo-01.jpg')}}" alt="">
            </div>
            <div class="col-4 partner">
              <img src="{{ asset('assets/img/partner/partner-logo-02.jpg')}}" alt="">
            </div>
              <div class="col-2 partner-two mt-3 ms-3">
                <img src="{{ asset('assets/img/partner/partner-logo-03.png')}}" alt="">
              </div>
              <div class="col-2 partner-two ms-4 mt-3">
                <img src="{{ asset('assets/img/partner/partner-logo-04.png')}}" alt="">
              </div>
              <div class="col-2 partner-three ms-3 mt-3">
                <img src="{{ asset('assets/img/partner/partner-logo-05.png')}}" alt="">
              </div>
          </div>
        </div>
      </div>
    </section>
    


@endsection

@section('script')
<script>
        var swiper = new Swiper(".mySwiper", {
          slidesPreview: 1,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        loop:true,
        speed:1000,
        centeredSlides: true,
        autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        },
        keyboard: {
          enabled: true,
        },
      });
      AOS.init();
    </script>
@endsection