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
        return view('pages.document.ccc-document.ccc-governance');
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
    public function GfatmGrantTbHiv (){
        return view('pages.gfatm-grant.tb-hiv');
    }
    public function GfatmGrantTb (){
        return view('pages.gfatm-grant.tb');
    }
    public function GfatmGrantHiv (){
        return view('pages.gfatm-grant.hiv');
    }
    public function GfatmGrantMalaria (){
        return view('pages.gfatm-grant.malaria');
    }
    public function GfatmGrantRssh (){
        return view('pages.gfatm-grant.rssh');
    }
    public function GfatmGrantMultiCountries (){
        return view('pages.gfatm-grant.multi-countries-tb-migrant');
    }
    public function PrinciplePudr (){
        return view('pages.principle-recipients.Principal-Recipient-MEF-MoH-LIT.pudr');
    }
    public function PrincipleManagementLetter (){
        return view('pages.principle-recipients.Principal-Recipient-MEF-MoH-LIT.management-letter');
    }
    public function PrincipleAuditReport (){
        return view('pages.principle-recipients.Principal-Recipient-MEF-MoH-LIT.audit-report');
    }
    public function PrincipleUnopsPudr (){
        return view('pages.principle-recipients.Principle-Recipient-Unops.unops-pudr');
    }
    public function PrincipleUnopsManagementLetter (){
        return view('pages.principle-recipients.Principle-Recipient-Unops.unops-management-letter');
    }
    public function PrincipleUnopsAuditReport (){
        return view('pages.principle-recipients.Principle-Recipient-Unops.unops-audit-report');
    }
    public function Activity (){
        return view('pages.activity.activity');
    }
    public function Career (){
        return view('pages.career.career');
    }
    public function MediaNews (){
        return view('pages.media.news');
    }
    public function MediaVideo (){
        return view('pages.media.video');
    }
    public function MediaGallary (){
        return view('pages.media.gallary');
    }
    public function ContactUs (){
        return view('pages.contact-us.contact-us');
    }
    public function ViewDetail01 (){
        return view('pages.view-detail.view-detail01');
    }
    public function ViewDetail02 (){
        return view('pages.view-detail.view-detail02');
    }
}
