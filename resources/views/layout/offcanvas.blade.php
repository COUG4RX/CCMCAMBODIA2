

<div class="offcanvas offcanvas-start gap-0" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header d-flex justify-content-center">
      <div class="offcanvas-title offcanvas-banner"  id="offcanvasExampleLabel">
        <img src="/img/Logo/logo-website.png" alt="">
      </div>
      <i type="button" class="fa-solid fa-xmark btn-close-custom fs-3 fw-bold p-2" style="color: #fafafa;" data-bs-dismiss="offcanvas" aria-label="Close">
        </i>
    </div>
    <div class="offcanvas-body">
      <div class="dropdown-offcanvas">
        <a href="{{ route('homepage') }}" class="p-1 pointer-event text-decoration-none"><i class="fa-solid fa-house me-2 "></i>Home</a>
      </div>

      <!-- drop down offcanvas  -->
      <!-- About CCC  -->
      <div class="dropdown dropdown-offcanvas mt-3 active">
        <button class="btn btn-custom d-flex " id="rotateButton" type="button" data-bs-toggle="dropdown">
          <a href="#" class="text-decoration-none"><i class="fa-solid fa-circle-info me-2"></i>
            About CCC <span class="angle-right" id="icon"><i class="fa-solid fa-angle-down"></i></span></a>
        </button>

        <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone">
          <li><a class="dropdown-item" href="{{ route('about.meeting') }}"><i class="fa-solid fa-angle-right me-2"></i> <span class="">Meeting</span></a></li>
          <li><a class="dropdown-item" href="{{ route('about.introduction') }}"><i class="fa-solid fa-angle-right me-2"></i> introduction</a></li>
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