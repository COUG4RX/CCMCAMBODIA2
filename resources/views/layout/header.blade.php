<?php
$route_name = request()->route()->getName();
$route_name = explode('.', $route_name);
$route_prefix = $route_name[0];
?>

<header>
    <!-- banner  -->
    <div class="banner container-fluid position-relative sticky-top">
        <div class="container banner-content d-flex justify-content-between">
            <div class="logo-image">
                <img class="img-fluid" src="{{ asset('assets/img/Logo/logo-website.png')}}" alt="">
            </div>
            <div class="switch-languages d-flex text-decoration-none align-items-center justify-content-end">
                <a href="#" class="english fw-bold text-decoration-none"><span>English</span></a>
                <span class="px-3 text-secondary"> | </span>
                <a href="#" class="khmer fw-bold text-decoration-none text-danger"><span>ខ្មែរ</span></a>
            </div>
        </div>
    </div>
    <!-- end banner  -->

    <!-- Navbar  -->
    <div class="container-fluid bg-nav sticky-top header">
        <div class="container sticky-top">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="search-bar search-bar-responsive d-none" id="search-bar">
                    <a href="#"><i class="search-icon fas fa-search position-absolute z-2 mt-1" id="search1" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample"></i></a>
                    <div style="min-height: 120px;">
                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                            <div class="card card-body rounded-pill" style="width: 180px;">
                                <input class="clear rounded-pill border-0 " type="search" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse py-1" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{ route('homepage') }}" class="nav-link text-white {{ isset($route_name[0]) && $route_name[0] == 'homepage' ? 'active' : '' }} fw-medium fs-6" aria-current="page" >Home</a>
                        </li>
                        <!-- drop down  About CCC-->
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ isset($route_name[0]) && $route_name[0] == 'about' ? 'active' : '' }} fw-medium fs-6 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About CCC
                                <i class="fa-solid fa-angle-down ps-1"></i>
                            </a>
                            <!-- drop-down  -->
                            <ul class="dropdown-menu-all rounded-2 border-0 position-absolute list-unstyled ps-2">
                                <li class="dropdown-hvr pt-3">
                                    <a href="{{ route('about.meeting') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'meeting' ? 'active' : '' }}">Meeting</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{ route('about.introduction') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'introduction' ? 'active' : '' }}">introduction</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{ route('about.mandate') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'mandate' ? 'active' : '' }}">Mandate</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{ route('about.governance') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'governance' ? 'active' : '' }}">governance</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{ route('about.role-and-responsibility') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'role-and-responsibility' ? 'active' : '' }}">Roles and Responsibility</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{ route('about.core-principle') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'core-principle' ? 'active' : '' }}">
                                        Core Principles</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{ route('about.structure') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'structure' ? 'active' : '' }}">Structure</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{ route('about.office-bearers') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'office-bearers' ? 'active' : '' }}">Office Bearers</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{ route('about.secretariat') }}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'secretariat' ? 'active' : '' }}">
                                        Secretariat</a>
                                </li>
                                <li class="dropdown-hvr d-flex justify-content-between position-relative">
                                    <a href="#" class="dd-color text-decoration-none text-dark pb-3 {{ isset($route_name[1]) && $route_name[1] == 'membership' || isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ||  isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }}">Membership</a>
                                    <i class="mt-2 me-3 fa-solid fa-angle-right"></i>
                                    <!-- sub dropdown About CCC -->
                                    <ul class="sub-dropdown rounded-3 ps-2 list-unstyled">
                                        <li class="sub-dropdown-hvr pt-3 "><a href="{{ route('about.membership') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'membership'  ? 'active' : '' }}">Membership</a></li>
                                        <li class="sub-dropdown-hvr"><a href="{{ route('about.right-member') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'right-member' ? 'active' : '' }}">Right of Members</a> </li>
                                        <li class="sub-dropdown-hvr pb-3"><a href="{{ route('about.responsibility-of-member') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'responsibility-of-member' ? 'active' : '' }}">Responsibilities of the Members</a></li>
                                    </ul>
                                    <!-- end sub-dropdown -->
                                </li>
                            </ul>
                        </li>
                        <!-- end dropdown  -->

                        <!-- Committees  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-medium fs-6 text-white {{ isset($route_name[1]) && $route_name[1] == 'committess' || isset($route_name[1]) && $route_name[1] == 'member-list' ||  isset($route_name[1]) && $route_name[1] == 'term-of-reference' ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Committees
                                <i class="fa-solid fa-angle-down ps-1"></i>
                            </a>
                            <ul class="dropdown-menu-all rounded-2 border-0 position-absolute list-unstyled ps-2">
                                <li class="dropdown-hvr d-flex justify-content-between position-relative">
                                    <a href="#" class="dd-color text-decoration-none text-dark py-2 {{ isset($route_name[1]) && $route_name[1] == 'committess' || isset($route_name[1]) && $route_name[1] == 'member-list' ||  isset($route_name[1]) && $route_name[1] == 'term-of-reference' ? 'active' : '' }} ">
                                        Oversight Committee</a>
                                    <i class="mt-2 me-3 fa-solid fa-angle-right"></i>
                                    <!-- sub dropdown About CCC -->
                                    <ul class="sub-dropdown rounded-3 ps-2 list-unstyled">
                                        <li class="sub-dropdown-hvr pt-3 "><a href="{{ route('committess.member-list') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'member-list' ? 'active' : '' }}">CCC-OC Member List</a></li>
                                        <li class="sub-dropdown-hvr pb-3"><a href="{{ route('committess.term-of-reference') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'term-of-reference' ? 'active' : '' }}">
                                                CCC-OC Terms of Reference</a> </li>
                                    </ul>
                                    <!-- end sub-dropdown -->
                                </li>
                            </ul>
                        </li>
                        <!-- end committees  -->

                        <!-- Document  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-medium fs-6 text-white {{ isset($route_name[1]) && $route_name[1] == 'document' || isset($route_name[1]) && $route_name[1] == 'ccc-oversight-plan' ||  isset($route_name[1]) && $route_name[1] == 'ccc-governance' ||  isset($route_name[1]) && $route_name[1] == 'other'  || isset($route_name[1]) && $route_name[1] == 'ccc-oc' ||  isset($route_name[1]) && $route_name[1] == 'ccc' || isset($route_name[1]) && $route_name[1] == 'ccc-oc-oversight' || isset($route_name[1]) && $route_name[1] == 'ccc-retreat-report' ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Document
                                <i class="fa-solid fa-angle-down ps-1"></i>
                            </a>
                            <ul class="dropdown-menu-all rounded-2 border-0 position-absolute list-unstyled ps-2">
                                <div class="control-sub-dropdown-hvr">
                                    <li class="dropdown-hvr d-flex justify-content-between position-relative">
                                        <a href="#" class="dd-color text-decoration-none text-dark pt-2 {{ isset($route_name[1]) && $route_name[1] == 'document' || isset($route_name[1]) && $route_name[1] == 'ccc-oversight-plan' ||  isset($route_name[1]) && $route_name[1] == 'ccc-governance' ||  isset($route_name[1]) && $route_name[1] == 'other'  ? 'active' : '' }}">
                                            CCC Document</a>
                                        <i class="mt-2 me-3 fa-solid fa-angle-right"></i>
                                        <!-- sub dropdown About CCC -->
                                        <ul class="sub-dropdown rounded-3 ps-2 list-unstyled">
                                            <li class="sub-dropdown-hvr pt-3"><a href="{{ route('document.ccc-oversight-plan') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'ccc-oversight-plan' ? 'active' : '' }}">
                                                    CCC Oversight Plan</a> </li>
                                            <li class="sub-dropdown-hvr"><a href="{{ route('document.ccc-governance') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'ccc-governance' ? 'active' : '' }}">
                                                    CCC Governance Manual 25072019_VH-9Aug2019</li>
                                            <li class="sub-dropdown-hvr pb-3"><a href="{{ route('document.other') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'other'  ? 'active' : '' }}">
                                                Others</a> </li>
                                        </ul>
                                        <!-- end sub-dropdown -->
                                    </li>
                                </div>

                                <li class="dropdown-hvr d-flex justify-content-between position-relative">
                                    <a href="#" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'meeting-minute' || isset($route_name[1]) && $route_name[1] == 'ccc-oc' ||  isset($route_name[1]) && $route_name[1] == 'ccc'  ? 'active' : '' }}">
                                        Meeting Minute</a>
                                    <i class="mt-2 me-3 fa-solid fa-angle-right"></i>
                                    <!-- sub dropdown About CCC -->
                                    <ul class="sub-dropdown rounded-3 ps-2 list-unstyled">
                                        <li class="sub-dropdown-hvr pt-3"><a href="{{ route('document.ccc-oc') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'ccc-oc'  ? 'active' : '' }} ">
                                                CCC-OC</a> </li>
                                        <li class="sub-dropdown-hvr pb-3"><a href="{{ route('document.ccc') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'ccc'  ? 'active' : '' }}">
                                                CCC</a> </li>
                                    </ul>
                                    <!-- end sub-dropdown -->
                                </li>
                                <li class="dropdown-hvr d-flex justify-content-between position-relative pb-3">
                                    <a href="#" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'ccc-oc-oversight' || isset($route_name[1]) && $route_name[1] == 'ccc-retreat-report' ? 'active' : '' }}">
                                        Reports</a>
                                    <i class="mt-2 me-3 fa-solid fa-angle-right"></i>
                                    <!-- sub dropdown About CCC -->
                                    <ul class="sub-dropdown rounded-3 ps-2 list-unstyled">
                                        <li class="sub-dropdown-hvr pt-3"><a href="{{ route('document.ccc-oc-oversight') }}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'ccc-oc-oversight'  ? 'active' : '' }}">
                                                CCC-OC Oversight Visit</a> </li>
                                        <li class="sub-dropdown-hvr pb-3"><a href="{{route('document.ccc-retreat-report')}}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'ccc-retreat-report'  ? 'active' : '' }}">
                                                CCC Retreat Reports</a> </li>
                                    </ul>
                                    <!-- end sub-dropdown -->
                                </li>
                            </ul>
                        </li>
                        <!-- end Document  -->

                        <!-- GFATM  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-medium fs-6 text-white {{ isset($route_name[1]) && $route_name[1] == 'tb-hiv' || isset($route_name[1]) && $route_name[1] == 'tb' ||  isset($route_name[1]) && $route_name[1] == 'hiv' || isset($route_name[1]) && $route_name[1] == 'malaria' || isset($route_name[1]) && $route_name[1] == 'rssh' || isset($route_name[1]) && $route_name[1] == 'multi-countries'  ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                GFATM Grant
                                <i class="fa-solid fa-angle-down ps-1"></i>
                            </a>
                            <ul class="dropdown-menu-all rounded-2 border-0 position-absolute list-unstyled ps-2">
                                <li class="dropdown-hvr pt-3">
                                    <a href="{{route('gfatm-grant.tb-hiv')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'tb-hiv'  ? 'active' : '' }}">TB/HIV</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{route('gfatm-grant.tb')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'tb'  ? 'active' : '' }}">TB</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{route('gfatm-grant.hiv')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'hiv'  ? 'active' : '' }}">HIV</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{route('gfatm-grant.malaria')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'malaria'  ? 'active' : '' }}">Malaria</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{route('gfatm-grant.rssh')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'rssh'  ? 'active' : '' }}">RSSH</a>
                                </li>
                                <li class="dropdown-hvr pb-3">
                                    <a href="{{route('gfatm-grant.multi-countries')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'multi-countries'  ? 'active' : '' }}">
                                        Multi-Countries TB Migrant</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end GFATM  -->

                        <!-- principal  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-medium fs-6 text-white {{ isset($route_name[1]) && $route_name[1] == 'pudr' || isset($route_name[1]) && $route_name[1] == 'management-letter' ||  isset($route_name[1]) && $route_name[1] == 'audit-report' || isset($route_name[1]) && $route_name[1] == 'unops-pudr' || isset($route_name[1]) && $route_name[1] == 'unops-management-letter' || isset($route_name[1]) && $route_name[1] == 'unops-audit-report'  ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Principle Recipients
                                <i class="fa-solid fa-angle-down ps-1"></i>
                            </a>
                            <ul class="dropdown-menu-all rounded-2 border-0 position-absolute list-unstyled ps-2">
                                <li class="dropdown-hvr d-flex justify-content-between position-relative">
                                    <a href="#" class="dd-color text-decoration-none text-dark pt-3 {{ isset($route_name[1]) && $route_name[1] == 'pudr' || isset($route_name[1]) && $route_name[1] == 'management-letter' || isset($route_name[1]) && $route_name[1] == 'audit-report'  ? 'active' : '' }}">
                                        Principle Recipient <br> MEF / MoH-LIT</a>
                                    <i class="mef-angle-right me-3 fa-solid fa-angle-right"></i>
                                    <!-- sub dropdown About CCC -->
                                    <ul class="sub-dropdown rounded-3 ps-2 list-unstyled mt-3">
                                        <li class="sub-dropdown-hvr pt-3 "><a href="{{route('principle.pudr')}}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'pudr'  ? 'active' : '' }}">PUDR</a></li>
                                        <li class="sub-dropdown-hvr"><a href="{{route('principle.management-letter')}}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'management-letter'  ? 'active' : '' }}">
                                                Management Letter</a> </li>
                                        <li class="sub-dropdown-hvr pb-3"><a href="{{route('principle.audit-report')}}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'audit-report'  ? 'active' : '' }}">
                                                Audit Report</a> </li>
                                    </ul>
                                    <!-- end sub-dropdown -->
                                </li>
                                <li class="dropdown-hvr d-flex justify-content-between position-relative">
                                    <a href="#" class="dd-color text-decoration-none text-dark pb-3 {{ isset($route_name[1]) && $route_name[1] == 'unops-pudr' || isset($route_name[1]) && $route_name[1] == 'unops-management-letter' || isset($route_name[1]) && $route_name[1] == 'unops-audit-report'  ? 'active' : '' }}">
                                        Principle Recipient UNOPS</a>
                                    <i class="mt-2 me-3 fa-solid fa-angle-right"></i>
                                    <!-- sub dropdown About CCC -->
                                    <ul class="sub-dropdown rounded-3 ps-2 list-unstyled">
                                        <li class="sub-dropdown-hvr pt-3 "><a href="{{route('principle.unops-pudr')}}" class="text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'unops-pudr'  ? 'active' : '' }}">PUDR</a></li>
                                        <li class="sub-dropdown-hvr"><a href="{{route('principle.unops-management-letter')}}" class="text-decoration-none text-dark  {{ isset($route_name[1]) && $route_name[1] == 'unops-management-letter'  ? 'active' : '' }} ">
                                                Management Letter</a> </li>
                                        <li class="sub-dropdown-hvr pb-3"><a href="{{route('principle.unops-audit-report')}}" class="text-decoration-none text-dark pb-3  {{ isset($route_name[1]) && $route_name[1] == 'unops-audit-report'  ? 'active' : '' }}">
                                                Audit Report</a> </li>
                                    </ul>
                                    <!-- end sub-dropdown -->
                                </li>
                            </ul>
                        </li>
                        <!-- end principle  -->

                        <li class="nav-item">
                            <a href="{{route('activity.activity')}}" class="nav-link fw-medium fs-6 text-white  {{ isset($route_name[0]) && $route_name[0] == 'activity'  ? 'active' : '' }}">Activity</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('career')}}" class="nav-link fw-medium fs-6 text-white  {{ isset($route_name[0]) && $route_name[0] == 'career'  ? 'active' : '' }}">Career</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-medium fs-6 text-white {{ isset($route_name[1]) && $route_name[1] == 'news' || isset($route_name[1]) && $route_name[1] == 'video' || isset($route_name[1]) && $route_name[1] == 'gallary' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02'  ? 'active' : '' }}" href="#">
                                Media
                                <i class="fa-solid fa-angle-down ps-1"></i>
                            </a>
                            <ul class="dropdown-menu-all rounded-2 border-0 position-absolute list-unstyled ps-2">
                                <li class="dropdown-hvr pt-3">
                                    <a href="{{route('media.news')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'news' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02' || isset($route_name[1]) && $route_name[1] == 'ViewDetail02'  ? 'active' : '' }}">News</a>
                                </li>
                                <li class="dropdown-hvr">
                                    <a href="{{route('media.video')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'video'  ? 'active' : '' }}">Video</a>
                                </li>
                                <li class="dropdown-hvr pb-3">
                                    <a href="{{route('media.gallary')}}" class="dd-color text-decoration-none text-dark {{ isset($route_name[1]) && $route_name[1] == 'gallary'  ? 'active' : '' }}">Gallary</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium fs-6 text-white {{ isset($route_name[1]) && $route_name[1] == 'contact-us'  ? 'active' : '' }}" href="{{route('contact-us.contact-us')}}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <!-- search  -->
                    <div class="search-bar search-bar-responsive" id="search-bar">
                        <a href="#"><i class="search-icon  fas fa-search position-absolute z-2 mt-1" id="search2" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample"></i></a>
                        <div style="min-height: 120px;">
                            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                <div class="card card-body rounded-pill" style="width: 180px;">
                                    <input class="clear rounded-pill border-0 " type="search" placeholder="Search...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end search  -->
                </div>
            </nav>
        </div>
    </div>
</header>