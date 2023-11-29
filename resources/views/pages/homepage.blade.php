@extends('layout.content')
<style>

</style>
@section('css')

@endsection

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
                    <p class="ps-3 px-4 fs-6 text-start text-white ">His Excellency Hem Vanndy chaired the Country Dialogue (on 22-23 January 2020 at Phnom Penh Hotel), the open and inclusive forum for all stakeholders, communities, CSOs, donors.</p>
                  </div>
                </div>
                <div class="col-7 swiper-slide-img">
                  <img src="{{ asset('assets/img/Slider/img-01-slide.jpg')}}" alt="" >
                </div>
              </div>

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
                  <img src="img/Slider/img-01-slide.jpg" alt="" >
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
                  <img src="img/Slider/img-02-slide.jpg" alt="" >
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
                  <img src="img/Slider/img-03-slide.jpg" alt="" >
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
                    <img src="img/Card/card-img-01.jpg" class="card-img-top rounded-0" alt="...">
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
                    <img src="img/Card/card-img-02.jpg" class="card-img-top rounded-0" alt="...">
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
                    <img src="img/Card/card-img-03.jpg" class="card-img-top rounded-0" alt="...">
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
                    <img src="img/Card/card-img-04.jpg" class="card-img-top rounded-0" alt="...">
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
                    <img src="img/Card/card-img-05.jpg" class="card-img-top rounded-0" alt="...">
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
                    <img src="img/Card/card-img-06.jpg" class="card-img-top rounded-0" alt="...">
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
      <div class="content-wrapper container">
        <div class="content-wrapper-block">
          <div class="head-titles text-center mt-5">
            <h2 class="fw-bolder">Partner</h2>
          </div>
          <div class="customize-hr d-flex justify-content-center">
            <div class="hr mt-4"></div>
          </div>

          <div class="row justify-content-start align-items-center mt-5 ms-0">
            <div class="col-4 partner">
                <img src="img/partner/partner-logo-01.jpg" alt="">
            </div>
            <div class="col-4 partner">
              <img src="img/partner/partner-logo-02.jpg" alt="">
            </div>
              <div class="col-2 partner-two mt-3 ms-3">
                <img src="img/partner/partner-logo-03.png" alt="">
              </div>
              <div class="col-2 partner-two ms-4 mt-3">
                <img src="img/partner/partner-logo-04.png" alt="">
              </div>
              <div class="col-2 partner-three ms-3 mt-3">
                <img src="img/partner/partner-logo-05.png" alt="">
              </div>
          </div>
        </div>
      </div>
    </section>

      <!-- offcanvas  -->
    <section>
    <div class="offcanvas offcanvas-start gap-0" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header d-flex justify-content-center">
        <div class="offcanvas-title offcanvas-banner"  id="offcanvasExampleLabel">
          <img src="img/Logo/logo-website.png" alt="">
        </div>
        <i type="button" class="fa-solid fa-xmark btn-close-custom fs-3 fw-bold p-2" style="color: #fafafa;" data-bs-dismiss="offcanvas" aria-label="Close">
          </i>
      </div>
      <div class="offcanvas-body">
        <div>
          <a href="#" class="active p-1 pointer-event text-decoration-none"><i class="fa-solid fa-house me-2"></i> Home</a>
        </div>

        <!-- drop down offcanvas  -->
        <!-- About CCC  -->
        <div class="dropdown dropdown-offcanvas mt-3">
          <button class="btn btn-custom d-flex" id="rotateButton" type="button" data-bs-toggle="dropdown">
            <a href="#" class="text-decoration-none"><i class="fa-solid fa-circle-info me-2"></i>
              About CCC <span class="angle-right" id="icon"><i class="fa-solid fa-angle-down"></i></span></a>
          </button>

          <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone">
            <li><a class="dropdown-item " href="/drop-down-menu/CCC_meeting_menu_category.html"><i class="fa-solid fa-angle-right me-2"></i> Meeting</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Introduction.html"><i class="fa-solid fa-angle-right me-2"></i> introduction</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Mandate.html"><i class="fa-solid fa-angle-right me-2"></i> Mandate</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/governance.html"><i class="fa-solid fa-angle-right me-2"></i> governance</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Role and Responsibility.html"><i class="fa-solid fa-angle-right me-2"></i> Roles and Responsibility</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Core-Principles.html"><i class="fa-solid fa-angle-right me-2"></i> Core Principles</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Structure.html"><i class="fa-solid fa-angle-right me-2"></i> Structure</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Office-Bearers.html"><i class="fa-solid fa-angle-right me-2"></i> Office Bearers</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Secretariat.html"><i class="fa-solid fa-angle-right me-2"></i> Secretariat</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2"></i> Membership</a>
              <ul class="ms-2">
                <li><a href="/drop-down-menu/membership.html">Membership</a></li>
                <li><a href="/drop-down-menu/Right of member.html">Right of Members</a></li>
                <li><a href="/drop-down-menu/Responsibility of member.html">Responsibilities of the Member</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- committee  -->
        <div class="dropdown dropdown-offcanvas mt-3 position-relative">
          <button class="btn btn-custom d-flex" id="rotateButton2" type="button" data-bs-toggle="dropdown">
            <a href="#" class="text-decoration-none"><i class="fa-solid fa-box-open me-2"></i>
              Committee <span class="angle-right" id="icon2"><i class="fa-solid fa-angle-down"></i></span></a>
          </button>

          <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone2">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2"></i> Oversight Committee</a>
              <ul class="ms-2">
                <li><a href="/drop-down-menu/Member list.html">CCC-OC Member List</a></li>
                <li><a href="/drop-down-menu/Terms of Reference.html">CCC-OC Terms of Reference</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- document  -->
        <div class="dropdown dropdown-offcanvas mt-3 position-relative">
          <button class="btn btn-custom d-flex" id="rotateButton3" type="button" data-bs-toggle="dropdown">
            <a href="#" class="text-decoration-none"><i class="fa-solid fa-folder-open me-2"></i>
              Document <span class="angle-right" id="icon3"><i class="fa-solid fa-angle-down"></i></span></a>
          </button>

          <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone3">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2"></i>CCC Document</a>
              <ul class="ms-2">
                <li><a href="/drop-down-menu/CCC Oversight Plan.html">CCC Oversight Plan</a></li>
                <li><a href="/drop-down-menu/CCC Governance Manual.html">CCC Governance Manual 25072019_VH-9Aug2019</a></li>
                <li><a href="/drop-down-menu/Others.html">Others</a></li>
              </ul>
            </li>

            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2"></i>Meeting Minute</a>
              <ul class="ms-2">
                <li><a href="/drop-down-menu/CCC OC.html">CCC-OC</a></li>
                <li><a href="/drop-down-menu/CCC.html">CCC</a></li>
              </ul>
            </li>

            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2"></i>Report</a>
              <ul class="ms-2">
                <li><a href="/drop-down-menu/CCC-OC Oversight Visit.html">CCC-OC Oversight Visit</a></li>
                <li><a href="/drop-down-menu/CCC Retreat Reports.html">CCC Retreat Reports</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- GFATM Grant  -->
        <div class="dropdown dropdown-offcanvas mt-3 text-start">
          <button class="btn btn-custom d-flex" id="rotateButton4" type="button" data-bs-toggle="dropdown">
            <a href="#" class="text-decoration-none"><i class="fa-solid fa-gift me-2"></i>
              GFATM Grant <span class="angle-right" id="icon4"><i class="fa-solid fa-angle-down"></i></span></a>
          </button>

          <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone4">
            <li><a class="dropdown-item " href="/drop-down-menu/TB-HIV.html"><i class="fa-solid fa-angle-right me-2"></i> TB/HIV</a></li>
            <li><a class="dropdown-item " href="/drop-down-menu/TB.html"><i class="fa-solid fa-angle-right me-2"></i> TB</a></li>
            <li><a class="dropdown-item " href="/drop-down-menu/HIV.html"><i class="fa-solid fa-angle-right me-2"></i> HIV</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Malaria.html"><i class="fa-solid fa-angle-right me-2"></i> Malaria</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/RSSH.html"><i class="fa-solid fa-angle-right me-2"></i> RSSH</a></li>
            <li><a class="dropdown-item" href="/drop-down-menu/Multi-Countries TB Migrant.html"><i class="fa-solid fa-angle-right me-2"></i> Multi-COuntries Tb Migrant</a></li>
          </ul>
        </div>

        <!-- Principles  -->
        <div class="dropdown dropdown-offcanvas mt-3 position-relative">
          <button class="btn btn-custom d-flex" id="rotateButton5" type="button" data-bs-toggle="dropdown">
            <a href="#" class="text-decoration-none"><i class="fa-solid fa-book-bookmark me-2"></i>
              Principal Recipients <span class="angle-right" id="icon5"><i class="fa-solid fa-angle-down"></i></span></a>
          </button>

          <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone5">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2"></i>Principal Recipient MEF/MoH-LIT</a>
              <ul class="ms-2">
                <li><a href="/drop-down-menu/PUDR.html">PUDR</a></li>
                <li><a href="/drop-down-menu/Management Letter.html">Management Letter</a></li>
                <li><a href="/drop-down-menu/Audit Report.html">Audit Report</a></li>
              </ul>
            </li>

            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2"></i>Principal Recipient UNOPS</a>
              <ul class="ms-2">
                <li><a href="/drop-down-menu/UNOPS-PUDR.html">PUDR</a></li>
                <li><a href="/drop-down-menu/UNOPS-Management.html">Management Letter</a></li>
                <li><a href="/drop-down-menu/UNOPS-Audit-Reprt.html">Audit Report</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- Activity  -->
        <div class="no-dropdown mt-3">
          <a href="/drop-down-menu/Activity.html" class=" text-decoration-none "><i class="fa-solid fa-message me-2"></i></i> Activity</a>
        </div>

        <!-- Career  -->
        <div class="no-dropdown mt-3">
          <a href="/drop-down-menu/Career.html" class=" text-decoration-none"><i class="fa-solid fa-suitcase me-2"></i></i> Career</a>
        </div>

        <!-- Media  -->
        <div class="dropdown dropdown-offcanvas mt-3 text-start">
          <button class="btn btn-custom d-flex" id="rotateButton6" type="button" data-bs-toggle="dropdown">
            <a href="#" class="text-decoration-none"><i class="fa-solid fa-desktop me-2"></i>
              Media <span class="angle-right" id="icon6"><i class="fa-solid fa-angle-down"></i></span></a>
          </button>

          <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone6">
            <li><a class="dropdown-item " href="/drop-down-menu/News.html"><i class="fa-solid fa-angle-right me-2"></i> News</a></li>
            <li><a class="dropdown-item " href="/drop-down-menu/Videos.html"><i class="fa-solid fa-angle-right me-2"></i> Video</a></li>
            <li><a class="dropdown-item " href="/drop-down-menu/Gallery.html"><i class="fa-solid fa-angle-right me-2"></i> Gallery</a></li>
          </ul>
        </div>

        <!-- Contact Us  -->
        <div class="no-dropdown mt-3">
          <a href="/drop-down-menu/Contact Us.html" class=" text-decoration-none"><i class="fa-solid fa-user me-2"></i></i> Contact Us</a>
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