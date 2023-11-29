<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('pages.homepage');
    }
    public function aboutMeeting(){
        return view('pages.about.meeting');
    }
    public function aboutIntroduction(){
        return view('pages.about.introduction');
    }
    public function aboutMandate(){
        return view('pages.about.mandate');
    }
    public function aboutGovernance(){
        return view('pages.about.governance');
    }
    public function aboutRoleResponsibility(){
        return view('pages.about.role-and-responsibility');
    }
    public function aboutCorePrinciple(){
        return view('pages.about.core-principle');
    }
    public function aboutStructure(){
        return view('pages.about.structure');
    }
    public function aboutOfficeBearers(){
        return view('pages.about.office-bearers');
    }
    public function aboutSecretariat(){
        return view('pages.about.secretariat');
    }
    public function aboutMemberList(){
        return view('pages.about.secretariat');
    }
    public function aboutMembership(){
        return view('pages.about.membership');
    }
    public function aboutRightMember(){
        return view('pages.about.right-member');
    }
    public function aboutResponsibilityOfMember(){
        return view('pages.about.responsibility-of-member');
    }
    public function committessMemberList (){
        return view('pages.committess.oversight.member-list');
    }
    public function committessTermOfReference (){
        return view('pages.committess.oversight.term-of-reference');
    }
    public function documentOversight (){
        return view('pages.document.ccc-document.ccc-oversight-plan');
    }
    public function documentGovernance (){
        return view('pages.document.ccc-governance');
    }
    public function documentOther (){
        return view('pages.document.ccc-document.other');
    }
    public function documentCccOc (){
        return view('pages.document.meeting-minute.ccc-oc');
    }
    public function documentCcc (){
        return view('pages.document.meeting-minute.ccc');
    }
    public function documentCccOcOversight (){
        return view('pages.document.reports.ccc-oc-oversight');
    }
    public function documentCccRetreatReport (){
        return view('pages.document.reports.ccc-oc-oversight');
    }
}
