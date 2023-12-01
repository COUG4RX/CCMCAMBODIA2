<?php
$route_name = request()->route()->getName();
$route_name = explode('.', $route_name);
$route_prefix = $route_name[0];
?>

<div class="offcanvas offcanvas-start gap-0" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header d-flex justify-content-center">
      <div class="offcanvas-title offcanvas-banner"  id="offcanvasExampleLabel">
        <img src="{{asset('assets/img/Logo/logo-website.png')}}" alt="">
      </div>
      <i type="button" class="fa-solid fa-xmark btn-close-custom fs-3 fw-bold p-2" style="color: #fafafa;" data-bs-dismiss="offcanvas" aria-label="Close">
        </i>
    </div>
    <div class="offcanvas-body">
      <div class="dropdown-offcanvas">
        <a href="{{ route('homepage') }}" class="p-1 pointer-event text-decoration-none {{ isset($route_name[0]) && $route_name[0] == 'homepage' ? 'active' : '' }}"><i class="fa-solid fa-house me-2 "></i>Home</a>
      </div>

      <!-- drop down offcanvas  -->
      <!-- About CCC  -->
      <div class="dropdown dropdown-offcanvas mt-3 active">
        <button class="btn btn-custom d-flex" id="rotateButton" type="button" data-bs-toggle="dropdown">
          <a href="#" class="text-decoration-none {{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }} "><i class="fa-solid fa-circle-info me-2"></i>
            About CCC <span class="angle-right" id="icon"><i class="fa-solid fa-angle-down"></i></span></a>
        </button>

        <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone">
          <li><a class="dropdown-item" href="{{ route('about.meeting') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'meeting' ? 'active' : '' }}"></i> <span class="{{ isset($route_name[1]) && $route_name[1] == 'meeting' ? 'active' : '' }}">Meeting</span></a></li>
          <li><a class="dropdown-item" href="{{ route('about.introduction') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'introduction' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'introduction' ? 'active' : '' }}">introduction</span> </a></li>
          <li><a class="dropdown-item" href="{{ route('about.mandate') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'mandate' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'mandate' ? 'active' : '' }}">Mandate</span> </a></li>
          <li><a class="dropdown-item" href="{{ route('about.governance') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'governance' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'governance' ? 'active' : '' }}">governance</span> </a></li>
          <li><a class="dropdown-item" href="{{ route('about.role-and-responsibility') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'role-and-responsibility' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'role-and-responsibility' ? 'active' : '' }}">Roles and Responsibility</span></a></li>
          <li><a class="dropdown-item" href="{{ route('about.core-principle') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'core-principle' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'core-principle' ? 'active' : '' }}">Core Principles</span> </a></li>
          <li><a class="dropdown-item" href="{{ route('about.structure') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'structure' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'structure' ? 'active' : '' }}">Structure</span> </a></li>
          <li><a class="dropdown-item" href="{{ route('about.office-bearers') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'office-bearers' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'office-bearers' ? 'active' : '' }}">Office Bearers</span> </a></li>
          <li><a class="dropdown-item" href="{{ route('about.secretariat') }}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'secretariat' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'secretariat' ? 'active' : '' }}">Secretariat</span> </a></li>
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'membership' || isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ||  isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'membership' || isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ||  isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }}">Membership</span> </a>
            <ul class="ms-2">
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'membership'  ? 'active' : '' }}"><a href="{{ route('about.membership') }}" class="{{ isset($route_name[1]) && $route_name[1] == 'membership'  ? 'active' : '' }}">Membership</a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }}"><a href="{{ route('about.right-member') }}" class="{{ isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }}">Right of Members</a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ? 'active' : '' }}"><a href="{{ route('about.responsibility-of-member') }}" class="{{ isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ? 'active' : '' }}">Responsibilities of the Member</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <!-- committee  -->
      <div class="dropdown dropdown-offcanvas mt-3 position-relative">
        <button class="btn btn-custom d-flex" id="rotateButton2" type="button" data-bs-toggle="dropdown">
          <a href="#" class="text-decoration-none {{ isset($route_name[1]) && $route_name[1] == 'committess' || isset($route_name[1]) && $route_name[1] == 'member-list' ||  isset($route_name[1]) && $route_name[1] == 'term-of-reference' ? 'active' : '' }}"><i class="fa-solid fa-box-open me-2"></i>
            Committee <span class="angle-right" id="icon2"><i class="fa-solid fa-angle-down"></i></span></a>
        </button>

        <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone2">
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'committess' || isset($route_name[1]) && $route_name[1] == 'member-list' ||  isset($route_name[1]) && $route_name[1] == 'term-of-reference' ? 'active' : '' }}"></i> <span class="{{ isset($route_name[1]) && $route_name[1] == 'committess' || isset($route_name[1]) && $route_name[1] == 'member-list' ||  isset($route_name[1]) && $route_name[1] == 'term-of-reference' ? 'active' : '' }}">Oversight Committee</span></a>
            <ul class="ms-2">
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'member-list' ? 'active' : '' }}"><a href="{{ route('committess.member-list') }}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'member-list' ? 'active' : '' }}">CCC-OC Member List</span></a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'term-of-reference' ? 'active' : '' }}"><a href="{{ route('committess.term-of-reference') }}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'term-of-reference' ? 'active' : '' }}">CCC-OC Terms of Reference</span></a></li>
            </ul>
          </li>
        </ul>
      </div>

      <!-- document  -->
      <div class="dropdown dropdown-offcanvas mt-3 position-relative">
        <button class="btn btn-custom d-flex" id="rotateButton3" type="button" data-bs-toggle="dropdown">
          <a href="#" class="text-decoration-none {{ isset($route_name[1]) && $route_name[1] == 'document' || isset($route_name[1]) && $route_name[1] == 'ccc-oversight-plan' ||  isset($route_name[1]) && $route_name[1] == 'ccc-governance' ||  isset($route_name[1]) && $route_name[1] == 'other'  || isset($route_name[1]) && $route_name[1] == 'ccc-oc' ||  isset($route_name[1]) && $route_name[1] == 'ccc' || isset($route_name[1]) && $route_name[1] == 'ccc-oc-oversight' || isset($route_name[1]) && $route_name[1] == 'ccc-retreat-report' ? 'active' : '' }}"><i class="fa-solid fa-folder-open me-2 "></i>
            Document <span class="angle-right" id="icon3"><i class="fa-solid fa-angle-down"></i></span></a>
        </button>

        <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone3">
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'document' || isset($route_name[1]) && $route_name[1] == 'ccc-oversight-plan' ||  isset($route_name[1]) && $route_name[1] == 'ccc-governance' ||  isset($route_name[1]) && $route_name[1] == 'other'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'document' || isset($route_name[1]) && $route_name[1] == 'ccc-oversight-plan' ||  isset($route_name[1]) && $route_name[1] == 'ccc-governance' ||  isset($route_name[1]) && $route_name[1] == 'other'  ? 'active' : '' }}">CCC Document</span></a>
            <ul class="ms-2">
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-oversight-plan' ? 'active' : '' }}"><a href="{{ route('document.ccc-oversight-plan') }}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-oversight-plan' ? 'active' : '' }}">CCC Oversight Plan</span></a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-governance' ? 'active' : '' }}"><a href="{{ route('document.ccc-governance') }}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-governance' ? 'active' : '' }}">CCC Governance Manual 25072019_VH-9Aug2019</span></a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'other'  ? 'active' : '' }}"><a href="{{ route('document.other') }}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'other'  ? 'active' : '' }}">Others</span></a></li>
            </ul>
          </li>

          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'meeting-minute' || isset($route_name[1]) && $route_name[1] == 'ccc-oc' ||  isset($route_name[1]) && $route_name[1] == 'ccc'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'meeting-minute' || isset($route_name[1]) && $route_name[1] == 'ccc-oc' ||  isset($route_name[1]) && $route_name[1] == 'ccc'  ? 'active' : '' }}">Meeting Minute</span></a>
            <ul class="ms-2">
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-oc'  ? 'active' : '' }}"><a href="{{ route('document.ccc-oc') }}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-oc'  ? 'active' : '' }}">CCC-OC</span></a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'ccc'  ? 'active' : '' }}"><a href="{{ route('document.ccc') }}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'ccc'  ? 'active' : '' }}">CCC</span></a></li>
            </ul>
          </li>

          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'ccc-oc-oversight' || isset($route_name[1]) && $route_name[1] == 'ccc-retreat-report' ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-oc-oversight' || isset($route_name[1]) && $route_name[1] == 'ccc-retreat-report' ? 'active' : '' }}">Report</span></a>
            <ul class="ms-2">
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-oc-oversight'  ? 'active' : '' }}"><a href="{{ route('document.ccc-oc-oversight') }}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-oc-oversight'  ? 'active' : '' }}">CCC-OC Oversight Visit</span></a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-retreat-report'  ? 'active' : '' }}"><a href="{{route('document.ccc-retreat-report')}}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'ccc-retreat-report'  ? 'active' : '' }}">CCC Retreat Reports</span></a></li>
            </ul>
          </li>
        </ul>
      </div>

      <!-- GFATM Grant  -->
      <div class="dropdown dropdown-offcanvas mt-3 text-start">
        <button class="btn btn-custom d-flex" id="rotateButton4" type="button" data-bs-toggle="dropdown">
          <a href="#" class="text-decoration-none {{ isset($route_name[1]) && $route_name[1] == 'tb-hiv' || isset($route_name[1]) && $route_name[1] == 'tb' ||  isset($route_name[1]) && $route_name[1] == 'hiv' || isset($route_name[1]) && $route_name[1] == 'malaria' || isset($route_name[1]) && $route_name[1] == 'rssh' || isset($route_name[1]) && $route_name[1] == 'multi-countries'  ? 'active' : '' }}"><i class="fa-solid fa-gift me-2 "></i><span class="">GFATM Grant</span>
             <span class="angle-right" id="icon4"><i class="fa-solid fa-angle-down"></i></span></a>
        </button>

        <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone4">
          <li><a class="dropdown-item " href="{{route('gfatm-grant.tb-hiv')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'tb-hiv'  ? 'active' : '' }}"></i> <span class="{{ isset($route_name[1]) && $route_name[1] == 'tb-hiv'  ? 'active' : '' }}">TB/HIV</span></a></li>
          <li><a class="dropdown-item " href="{{route('gfatm-grant.tb')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'tb'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'tb'  ? 'active' : '' }}">TB</span> </a></li>
          <li><a class="dropdown-item " href="{{route('gfatm-grant.hiv')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'hiv'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'hiv'  ? 'active' : '' }}">HIV</span> </a></li>
          <li><a class="dropdown-item" href="{{route('gfatm-grant.malaria')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'malaria'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'malaria'  ? 'active' : '' }}">Malaria</span> </a></li>
          <li><a class="dropdown-item" href="{{route('gfatm-grant.rssh')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'rssh'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'rssh'  ? 'active' : '' }}">RSSH</span> </a></li>
          <li><a class="dropdown-item" href="{{route('gfatm-grant.multi-countries')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'multi-countries'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'multi-countries'  ? 'active' : '' }}">Multi-COuntries Tb Migrant</span> </a></li>
        </ul>
      </div>

      <!-- Principles  -->
      <div class="dropdown dropdown-offcanvas mt-3 position-relative">
        <button class="btn btn-custom d-flex " id="rotateButton5" type="button" data-bs-toggle="dropdown">
          <a href="#" class="text-decoration-none {{ isset($route_name[1]) && $route_name[1] == 'pudr' || isset($route_name[1]) && $route_name[1] == 'management-letter' ||  isset($route_name[1]) && $route_name[1] == 'audit-report' || isset($route_name[1]) && $route_name[1] == 'unops-pudr' || isset($route_name[1]) && $route_name[1] == 'unops-management-letter' || isset($route_name[1]) && $route_name[1] == 'unops-audit-report'  ? 'active' : '' }}"><i class="fa-solid fa-book-bookmark me-2"></i>
            Principal Recipients <span class="angle-right" id="icon5"><i class="fa-solid fa-angle-down"></i></span></a>
        </button>

        <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone5">
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'pudr' || isset($route_name[1]) && $route_name[1] == 'management-letter' || isset($route_name[1]) && $route_name[1] == 'audit-report'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'pudr' || isset($route_name[1]) && $route_name[1] == 'management-letter' || isset($route_name[1]) && $route_name[1] == 'audit-report'  ? 'active' : '' }}">Principal Recipient MEF/MoH-LIT</span></a>
            <ul class="ms-2">
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'pudr'  ? 'active' : '' }}"><a href="{{route('principle.pudr')}}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'pudr'  ? 'active' : '' }}">PUDR</span></a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'management-letter'  ? 'active' : '' }}"><a href="{{route('principle.management-letter')}}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'management-letter'  ? 'active' : '' }}">Management Letter</span></a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'audit-report'  ? 'active' : '' }}"><a href="{{route('principle.audit-report')}}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'audit-report'  ? 'active' : '' }}">Audit Report</span></a></li>
            </ul>
          </li>

          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'unops-pudr' || isset($route_name[1]) && $route_name[1] == 'unops-management-letter' || isset($route_name[1]) && $route_name[1] == 'unops-audit-report'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'unops-pudr' || isset($route_name[1]) && $route_name[1] == 'unops-management-letter' || isset($route_name[1]) && $route_name[1] == 'unops-audit-report'  ? 'active' : '' }}">Principal Recipient UNOPS</span></a>
            <ul class="ms-2">
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'unops-pudr'  ? 'active' : '' }}"><a href="{{route('principle.unops-pudr')}}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'unops-pudr'  ? 'active' : '' }}">PUDR</span></a></li>
              <li class=" {{ isset($route_name[1]) && $route_name[1] == 'unops-management-letter'  ? 'active' : '' }}"><a href="{{route('principle.unops-management-letter')}}"><span class=" {{ isset($route_name[1]) && $route_name[1] == 'unops-management-letter'  ? 'active' : '' }}">Management Letter</span></a></li>
              <li class="{{ isset($route_name[1]) && $route_name[1] == 'unops-audit-report'  ? 'active' : '' }}"><a href="{{route('principle.unops-audit-report')}}"><span class="{{ isset($route_name[1]) && $route_name[1] == 'unops-audit-report'  ? 'active' : '' }}">Audit Report</span></a></li>
            </ul>
          </li>
        </ul>
      </div>

      <!-- Activity  -->
      <div class="no-dropdown mt-3">
        <a href="{{route('activity.activity')}}" class=" text-decoration-none "><i class="fa-solid fa-message me-2 {{ isset($route_name[0]) && $route_name[0] == 'activity'  ? 'active' : '' }}"></i></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'activity'  ? 'active' : '' }}">Activity</span></a>
      </div>

      <!-- Career  -->
      <div class="no-dropdown mt-3">
        <a href="{{route('career')}}" class=" text-decoration-none"><i class="fa-solid fa-suitcase me-2 {{ isset($route_name[0]) && $route_name[0] == 'career'  ? 'active' : '' }}"></i></i><span class="{{ isset($route_name[0]) && $route_name[0] == 'career'  ? 'active' : '' }}">Career</span> </a>
      </div>

      <!-- Media  -->
      <div class="dropdown dropdown-offcanvas mt-3 text-start">
        <button class="btn btn-custom d-flex" id="rotateButton6" type="button" data-bs-toggle="dropdown">
          <a href="#" class="text-decoration-none {{ isset($route_name[1]) && $route_name[1] == 'news' || isset($route_name[1]) && $route_name[1] == 'video' || isset($route_name[1]) && $route_name[1] == 'gallary' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02'  ? 'active' : '' }}"><i class="fa-solid fa-desktop me-2"></i>
            Media <span class="angle-right" id="icon6"><i class="fa-solid fa-angle-down"></i></span></a>
        </button>

        <ul class="dropdown-menu ms-4 dropdown-menu-offcanvas" id="dNone6">
          <li><a class="dropdown-item " href="{{route('media.news')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'news' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'news' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02'  ? 'active' : '' }}">News</span> </a></li>
          <li><a class="dropdown-item " href="{{route('media.video')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'video'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'video'  ? 'active' : '' }}">Video</span> </a></li>
          <li><a class="dropdown-item " href="{{route('media.gallary')}}"><i class="fa-solid fa-angle-right me-2 {{ isset($route_name[1]) && $route_name[1] == 'gallary'  ? 'active' : '' }}"></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'gallary'  ? 'active' : '' }}"></span> Gallery</a></li>
        </ul>
      </div>

      <!-- Contact Us  -->
      <div class="no-dropdown mt-3">
        <a href="{{route('contact-us.contact-us')}}" class=" text-decoration-none"><i class="fa-solid fa-user me-2 {{ isset($route_name[1]) && $route_name[1] == 'contact-us'  ? 'active' : '' }}"></i></i><span class="{{ isset($route_name[1]) && $route_name[1] == 'contact-us'  ? 'active' : '' }}"> Contact Us</span></a>
      </div>
    </div>
  </div>