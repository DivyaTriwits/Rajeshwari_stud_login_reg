<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
| my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'New_controller';
$route['404_override'] = 'PageNotFound';
$route['translate_uri_dashes'] = FALSE;

$route['about-us'] = $route['default_controller'].'/about';
$route['Scholarships2023'] = $route['default_controller'].'/expired';
$route['winners'] = $route['default_controller'].'/winners';
$route['sitemap'] = $route['default_controller'].'/sitemapview';
$route['collaboration'] = $route['default_controller'].'/collaboration';   //On 12-7-2023 by varun
/*  $route['books'] = $route['default_controller'].'/books';   Update on 14 APR 2023*/
$route['privacy'] = $route['default_controller'].'/privacy';
$route['disclaimer'] = $route['default_controller'].'/discaimer';
$route['scholarships/(:any)'] = $route['default_controller'].'/scholarships/$1';
$route['scholarships/(:any)/(:any)'] = $route['default_controller'].'/scholarships/$1/$2';
$route['page/(:any)/(:any)'] = $route['default_controller'].'/pageInformation/$1/$2';
$route['more-scholarships-details/(:any)'] = $route['default_controller'].'/moreInformation/$1';
$route['packages'] = $route['default_controller'].'/packages';
$route['faq'] = $route['default_controller'].'/faq';
$route['contact-us'] = $route['default_controller'].'/contactUs';
$route['youtube'] = $route['default_controller'].'/youtube';
$route['telegram'] = $route['default_controller'].'/telegram';
$route['confirm-signup-contributor/(:any)'] = $route['default_controller']. '/confirm_signup_contributor/$1'; //Anamika 18 APR 23
$route['forgot-password'] = $route['default_controller']. '/forgotPassword';
$route['send-reset-password-link'] = $route['default_controller']. '/forgotPasswordRecovery'; // 12th May update
$route['send-reset-password-link/confirm_password/(:any)/(:any)'] = $route['default_controller']. '/confirmforgotPassword/$1/$2';
$route['forgot-password-for-contributor'] = $route['default_controller']. '/forgotPasswordForContributor'; //Anamika 15 APR 23
$route['forgot-password-for-contributor/confirm_password_for_contributor/(:any)/(:any)'] = $route['default_controller']. '/confirmforgotPasswordforContributor/$1/$2'; //Anamika 15 APR 23
$route['reset'] = $route['default_controller']. '/reset'; // updated reset to reset'/resetforContributor' by anamika 18 Apr
/*LOGIN=======================================================================================*/
$route['website_controller'] = 'Website_controller';
$route['search'] = $route['website_controller'].'/search';
$route['student-register'] = $route['website_controller'].'/studentRegister';
$route['cancell-registration'] = $route['website_controller'].'/cancellRegistration';
$route['confirm-signup/(:any)'] = $route['website_controller']. '/confirm_signup/$1';
$route['student-login'] = $route['website_controller'].'/studentLogin';
$route['verified-login'] = $route['website_controller'].'/verifyLogin';
$route['student-verified-login/(:any)'] = $route['website_controller'].'/studentLoginVerify/$1';
$route['newsletter-subscription'] = $route['website_controller'].'/newsLetter';
$route['list-of-scholarships'] = $route['website_controller'].'/scholarshipsList';


$route['redirect-to-payment'] = $route['website_controller']. '/redirectToPayment';
$route['recover-password-complete'] = $route['website_controller']. '/resetPasswordCompleted';
$route['tgs-get-alerts'] = $route['website_controller'].'/registrationLandingPage';
$route['register-subscriber'] = $route['website_controller'].'/registerSubscriber';
$route['logout'] = $route['website_controller']. '/logout';
/*=======================================================END OF STUDENT LOGIN========================================================================================*/
$route['students_controller']='Students_controller';
$route['student-logout']=$route['students_controller'].'/StudentsLogout';
$route['student-home'] = $route['students_controller'].'/studentHome';
$route['enroute-to-update-profile'] = $route['students_controller'].'/redirectToUpdateProfileFirstTime';
$route['my-profile'] = $route['students_controller'].'/redirectToUpdateProfile';
$route['notified-scholarship'] = $route['students_controller'].'/redirectToNotifiedScholarships';
$route['scholarships-lists'] = $route['students_controller'].'/scholarships';
$route['scholarships-lists/(:any)'] = $route['students_controller'].'/scholarships/$1';
$route['help'] = $route['students_controller'].'/helpdesk';
$route['redirect-me-to/(:any)'] = $route['students_controller'].'/resolveLinkAndUpdateLinkVisitStatus/$1';
$route['scholarship_details_page'] = $route['students_controller'].'/scholarshipPage';
$route['scholarship-details-page/(:any)'] = $route['students_controller'].'/scholarshipPage/$1';
$route['download-file/(:any)/(:any)'] = $route['students_controller'].'/downloadFile/$1/$2';
$route['student-promotion-register'] = $route['students_controller'].'/studentPromotionRegistration';
$route['student-promotion-account-details/(:any)'] = $route['students_controller'].'/studentAccountPromotionRegistration/$1';
$route['student_profile'] = $route['students_controller'].'/profilePage';
$route['my-invoice'] = $route['students_controller'].'/invoices';
$route['invoice/(:any)'] = $route['students_controller'].'/invoiceDetail/$1';
$route['student-login-by-email/(:any)'] = $route['students_controller'].'/getLoginVerification/$id';
$route['personal-details'] = $route['students_controller'].'/personalDetails';
$route['update-personal-details']=$route['students_controller'].'/updatePersonalDetails';
$route['academic-details'] = $route['students_controller'].'/academic';
$route['update-academic-details']=$route['students_controller'].'/updateAcademicsDetails';
$route['family-details'] = $route['students_controller'].'/familyDetails';
$route['update-family-details']=$route['students_controller'].'/updateFamilyDetails';
$route['bank-address-details'] = $route['students_controller'].'/bankDetails';
$route['update-bank-address-details']=$route['students_controller'].'/updateBankDetails';
$route['extracurricular_details'] = $route['students_controller'].'/activityDetails';
$route['add-extracurricular-activity']=$route['students_controller'].'/addExtracurricularActivity';
$route['update-extracurricular-activity']=$route['students_controller'].'/UpdateExtracurricularActivity';
$route['delete-activity']=$route['students_controller'].'/deleteActivity';
$route['document_uploads'] = $route['students_controller'].'/documentUplaod';
$route['add-document-files']=$route['students_controller'].'/addDocumentFiles';
$route['update-document-files']=$route['students_controller'].'/updateDocumentFiles';
$route['update-each-document']=$route['students_controller'].'/updateEachDocumentsDetails';
$route['delete-document']=$route['students_controller'].'/deleteDocument';
$route['scholarship-applied']=$route['students_controller'].'/scholarshipAppliedStatus';
$route['scholarship-received']=$route['students_controller'].'/scholarshipReceivedStatus';
$route['need-help']=$route['students_controller'].'/needHelp';
$route['add-contact-us']=$route['students_controller'].'/addContactUs';
$route['earn-money-refer-friend']=$route['students_controller'].'/earnMoneyByReferring';
$route['feed-back']=$route['students_controller'].'/feedBack';
$route['add-student-feedback']=$route['students_controller'].'/storeStudentFeedback';
$route['get-cities-list']=$route['students_controller'].'/getCitiesList';
$route['get-particular-course-list']=$route['students_controller'].'/getParticularCourse';
$route['free-trail-register']=$route['students_controller'].'/promotionRegistration';
$route['add-promotion-register']=$route['students_controller'].'/insertPromotionData';
$route['registered-seccessfully']=$route['students_controller'].'/successPage';
$route['student-register']=$route['students_controller'].'/studentPromotionRegistration';
$route['add-student-details']=$route['students_controller'].'/addStudentRegistrationDetails';
$route['student-account-details/(:any)']=$route['students_controller'].'/addStudentAccountDetails/$1';
$route['promotion-account-details/(:any)']=$route['students_controller'].'/insertPromotionAccount/$1';
$route['student-account/(:any)']=$route['students_controller'].'/studentAccountForm/$1';
$route['trail-student-account/(:any)']=$route['students_controller'].'/promotionAccountForm/$1';
$route['get-discount-offer']=$route['students_controller'].'/getDiscountOffer';
$route['verify-refferal']=$route['students_controller'].'/verifyRefferal';
$route['account-setting']=$route['students_controller'].'/accountSettings';
$route['reset-password']=$route['students_controller'].'/resetPassword';
$route['change-password']=$route['students_controller'].'/resetPasswordFromProfile';
$route['login-details']=$route['students_controller'].'/loginDetails';
$route['login-history']=$route['students_controller'].'/getLoginHistory';
$route['web/(:any)']=$route['students_controller'].'/supportWebinarRegistration/$1';
$route['support-webinar-registration']          =  $route['students_controller'].'/supportWebinarRegInsert';
$route['packages-renewal']=$route['students_controller'].'/renewalPackages';
$route['subscription-package']=$route['students_controller'].'/subscriptionPackage';
$route['email-invoice/(:any)']=$route['students_controller'].'/emailInvoice/$1';
$route['redeem-request']=$route['students_controller'].'/redeemRequest';
$route['view-response']=$route['students_controller'].'/viewResponseList';
$route['redeem-details']=$route['students_controller'].'/redeemDetails';
/*Institutionsl dashboard*/
$route['institutional_controller'] = 'Institutional_controller';
$route['institute/institute-dashboard'] = $route['institutional_controller'].'/instituteHome';
$route['institute-login'] = $route['institutional_controller'].'/loginPage';
$route['student-bulk-upload'] = $route['institutional_controller'].'/uploadStudentFile';
$route['verify-institue-login']=$route['institutional_controller'].'/verifyLogin';
$route['institute/student_details'] = $route['institutional_controller'].'/studentDetails';
$route['institute/student_profile_details/(:any)'] = $route['institutional_controller'].'/studentProfileDetails/$1';
$route['institute/statistics'] = $route['institutional_controller'].'/statistics';
$route['institute/uploads-bulk-data'] = $route['institutional_controller'].'/uploads';
$route['institute/agreement-paper'] = $route['institutional_controller'].'/agreementPaper';
$route['institute/institutional-scholarship'] = $route['institutional_controller'].'/instituteScholarship';
$route['institute/monthly-report'] = $route['institutional_controller'].'/monthlyReport';
$route['institute/updated-student-list'] = $route['institutional_controller'].'/updatedStudentList';
$route['institute/reports'] = $route['institutional_controller'].'/reports';
$route['institute/store-agreement-paper']=$route['institutional_controller'].'/storeInstitutionAggrementPaper';
$route['institute/view-scholarship-details/(:any)']=$route['institutional_controller'].'/viewScholarshipDetails/$1';
$route['institution-profile']=$route['institutional_controller'].'/institutionProfilePage';
$route['update-institution-profile']=$route['institutional_controller'].'/updateInstitutionProfile';
$route['institute/institute-logout'] = $route['institutional_controller'].'/instituteLogout';
/*Promotion Register*/ 
$route['promotion-controller'] = 'Promotion_controller';
$route['tgs-get-alerts'] = $route['promotion-controller'].'/promotionRegisterPage';
$route['promotion-register-subscriber'] = $route['promotion-controller'].'/promotionRegisterSubscriber';
$route['networking_controller']='Networking_controller';
$route['new-scholarship']=$route['networking_controller'].'/viewScholarshipPromotion';
$route['get-scholarship/(:any)']=$route['networking_controller'].'/getScholarship/$1';
$route['fill-details'] = $route['networking_controller'].'/resolveLinkAndUpdateLinkVisitStatus';
$route['promotional-student-registration']=$route['networking_controller'].'/addStudentRegistrationDetails';
$route['social-scholarship-promotion']=$route['networking_controller'].'/socialScholarshipPromotion';
$route['certificate_controller'] = 'Certificates';
$route['certificates'] = $route['certificate_controller'].'/downloadCertificate';
$route['download-certificate'] = $route['certificate_controller'].'/downloadBIBCertificate';
/*Influencer Controller*/
$route['influencer_controller']='Influencer_controller';
$route['influencer-home']=$route['influencer_controller'].'/influncerHome';
$route['influencer-registration']=$route['influencer_controller'].'/influencerRegistration';
$route['add-influencer']=$route['influencer_controller'].'/addInfluencerRegistration';
$route['influencer-login']=$route['influencer_controller'].'/influencerLogin';
$route['refer-and-earn'] = $route['influencer_controller'].'/referandEarn';
$route['verify-influencer-login'] = $route['influencer_controller'].'/verifyInfluencerLogin';
$route['influncer-redeem-request'] = $route['influencer_controller'].'/influncerRedeemRequest';
$route['influencer-requests'] = $route['influencer_controller'].'/influncerRequest';
$route['influencer-profile'] = $route['influencer_controller'].'/influncerProfile';
$route['influencer-profile-update'] = $route['influencer_controller'].'/updateInfluencerDetails';
$route['influencer-setting'] = $route['influencer_controller'].'/influencerSetting';
