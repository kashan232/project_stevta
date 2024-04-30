<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CampusBillingController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CampusDepartmentController;
use App\Http\Controllers\CampusEmployeeAttendanceController;
use App\Http\Controllers\CampusEmployeeController;
use App\Http\Controllers\CampusEmployeeLeaveController;
use App\Http\Controllers\CampusInventoryManagementController;
use App\Http\Controllers\CampusPublicHolidayController;
use App\Http\Controllers\CampusSubjectController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\InstitutesController;
use App\Http\Controllers\MainSuperAdminController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CampusSyllabusController;
use App\Http\Controllers\PromoteStudentController; 
use App\Http\Controllers\CampusTimeTableController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\BatchCreationController;
use App\Http\Controllers\CampusStudentController;
use App\Http\Controllers\CampusStudentDiaryAssignmentController;
use App\Http\Controllers\CampusTeacherController;
use App\Http\Controllers\CampusTeacherCourseMaterialController;
use App\Http\Controllers\CampusTeacherDiaryAssignmentController;
use App\Http\Controllers\CampusTeacherRecordedLecturesController;
use App\Http\Controllers\CampusTeacherStudentAttendance;
use App\Http\Controllers\CampusTeacherStudentChatController;
use App\Http\Controllers\CampusTeacherStudentLeaveApprovalController;
use App\Http\Controllers\InstituteViewAttendance;
use App\Http\Controllers\NoticeboardController;
use App\Http\Controllers\CurrentSessionController;
use App\Http\Controllers\SingleCampusController;
use App\Http\Controllers\CampusAddmissionController;
use App\Http\Controllers\CampusViewAttendanceController;
use App\Http\Controllers\CampusSingleSyllabusController;
use App\Http\Controllers\CampusSingleSubjectController;
use App\Http\Controllers\CampusClassController;
use App\Http\Controllers\CampusBatchController;
use App\Http\Controllers\CampusEmployeeBonusController;
use App\Http\Controllers\CampusEmployeeDeductionController;
use App\Models\campus;
use App\Http\Controllers\ManageTeacherController;
use App\Http\Controllers\CampusFormerController;
use App\Http\Controllers\CampusTeacherSalaryController;
use App\Http\Controllers\DegreeCreationController;
use App\Http\Controllers\LibraryBookController;
use App\Http\Controllers\NewProjectController;
use App\Http\Controllers\ProgramManagementController;
use App\Http\Controllers\ScreenReadyController;
use App\Http\Controllers\SemesterConfigController;
use App\Http\Controllers\SubjectManagementController;
use App\Models\Institute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Route 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/  
// Push by kashan
// Route::get('/', function () {
//     return view('welcome'); 
// });

// Route::get('/', function () {
//     return view('institute_admin_panel.dashboard.index'); 
// });
  
Route::get('/Super-admin-login', [MainSuperAdminController::class, 'Super_admin_login'])->name('Super-admin-login');
Route::post('/super-admin-logged', [MainSuperAdminController::class, 'super_admin_logged'])->name('super-admin-logged');
Route::get('/logout', [MainSuperAdminController::class, 'logout'])->name('logout');
Route::get('/admin-my-profile', [MainSuperAdminController::class, 'admin_my_profile'])->name('admin-my-profile');
Route::get('/admin-account-settings', [MainSuperAdminController::class, 'admin_account_settings'])->name('admin-account-settings');
Route::post('/update-main-super-admin-settings/{id}', [MainSuperAdminController::class, 'update_main_super_admin_settings'])->name('update-main-super-admin-settings');
Route::get('/main-dashboard', [InstitutesController::class, 'main_dashboard'])->name('main-dashboard');
Route::get('/add-institute', [InstitutesController::class, 'add_institute'])->name('add-institute');
Route::post('/store-institute', [InstitutesController::class, 'store_institute'])->name('store-institute');
Route::get('/edit-institute/{edit}', [InstitutesController::class, 'edit_institute'])->name('edit-institute');
Route::post('/update-institute/{id}', [InstitutesController::class, 'update_institute'])->name('update-institute');
Route::get('/all-institute', [InstitutesController::class, 'all_institute'])->name('all-institute');
Route::post('/send-email-institute', [InstitutesController::class, 'send_email_institute'])->name('send-email-institute');
Route::get('/lock-institute', [InstitutesController::class, 'lock_institute'])->name('lock-institute');
Route::get('/view-institute/{view}', [InstitutesController::class, 'view_institute'])->name('view-institute');
Route::get('/delete-institute/{delete}', [InstitutesController::class, 'delete_institute'])->name('delete-institute');
Route::post('/update-active-status/{id}', [InstitutesController::class, 'updateActiveStatus'])->name('update-active-status');
Route::get('/add-city', [CityController::class, 'add_city'])->name('add-city');
Route::post('/store-add-city', [CityController::class, 'store_add_city'])->name('store-add-city');
Route::get('/all-cities', [CityController::class, 'all_cities'])->name('all-cities');
Route::get('/edit-cities/{id}', [CityController::class, 'edit_cities'])->name('edit-cities');
Route::post('/update-city/{id}', [CityController::class, 'update_city'])->name('update-city');
// Route For Super Admin Start-End  
// Route For Insitute Start 
Route::get('/Insitute-login', [InstitutesController::class, 'Insitute_login'])->name('Insitute-login');
Route::post('/institute-logged', [InstitutesController::class, 'institute_logged'])->name('institute-logged');
Route::get('/institute_Dashboard', [InstitutesController::class, 'institute_Dashboard'])->name('institute_Dashboard');
Route::get('/logout-insitute', [InstitutesController::class, 'logout_insitute'])->name('logout-insitute');
Route::get('/Institute-profile-view', [InstitutesController::class, 'Institute_profile_view'])->name('Institute-profile-view');
Route::get('/Institute-account-settings', [InstitutesController::class, 'Institute_account_settings'])->name('Institute-account-settings');
Route::post('/update-institute-settings/{id}', [InstitutesController::class, 'update_institute_settings'])->name('update-institute-settings');
Route::get('/my-profile', [InstitutesController::class, 'my_profile'])->name('my-profile');
Route::get('/acc-setting', [InstitutesController::class, 'acc_setting'])->name('acc-setting');

Route::get('/add-campus', [CampusController::class, 'add_campus'])->name('add-campus');
Route::post('/store-campus', [CampusController::class, 'store_campus'])->name('store-campus');
Route::get('/all-Campuses', [CampusController::class, 'all_Campuses'])->name('all-Campuses');
Route::get('/edit-campus/{edit}', [CampusController::class, 'edit_campus'])->name('edit-campus');
Route::post('/save-edit-campus/{id}', [CampusController::class, 'save_edit_campus'])->name('save-edit-campus');
Route::get('/view-campus/{view}', [CampusController::class, 'view_campus'])->name('view-campus');
Route::get('/delete-campus/{delete}', [CampusController::class, 'delete_campus'])->name('delete-campus');
// Route For Insitute Start-End 

// Route For All Institute Screens Start
Route::get('/campus-general-operation/{id}', [InstitutesController::class, 'campus_general_operation'])->name('campus-general-operation');
Route::get('/campus-accounts-screen/{id}', [InstitutesController::class, 'campus_accounts_screen'])->name('campus-accounts-screen');
Route::get('/campus-hr/{id}', [InstitutesController::class, 'campus_hr'])->name('campus-hr');
Route::get('/campus-exams', [InstitutesController::class, 'campus_exams'])->name('campus-exams');
Route::get('/digital-library', [InstitutesController::class, 'digital_library'])->name('digital-library');
Route::get('/Institute-admissions', [InstitutesController::class, 'Institute_admissions'])->name('Institute-admissions');
Route::get('/institute-view-student/{id}', [InstitutesController::class, 'institute_view_student',])->name('institute-view-student');
Route::get('/institute-former', [InstitutesController::class, 'institute_former'])->name('institute-former');
Route::get('/institute-classes', [InstitutesController::class, 'institute_classes'])->name('institute-classes');
Route::get('/institute-sections-view/{class_id}', [InstitutesController::class, 'institute_sections_view'])->name('institute-sections-view');
Route::get('/institute-all-subjects', [InstitutesController::class, 'institute_all_subjects'])->name('institute-all-subjects');
Route::get('/institute-all-inventory', [InstitutesController::class, 'institute_all_inventory'])->name('institute-all-inventory');
Route::get('/institute-billing', [InstitutesController::class, 'institute_billing'])->name('institute-billing');
Route::get('/institute-all-employees', [InstitutesController::class, 'institute_all_employees'])->name('institute-all-employees');
Route::get('/institute-all-syllabus', [InstitutesController::class, 'institute_all_syllabus'])->name('institute-all-syllabus');
Route::get('/institute-all-employee-leave', [InstitutesController::class, 'institute_all_employee_leave'])->name('institute-all-employee-leave');
Route::get('/institute-all-holiday', [InstitutesController::class, 'institute_all_holiday'])->name('institute-all-holiday');
Route::get('/institute-all-department', [InstitutesController::class, 'institute_all_department'])->name('institute-all-department');
Route::get('/institute-choose-month', [InstitutesController::class, 'institute_choose_month'])->name('institute-choose-month');
Route::post('/institute-store-choose-month', [InstitutesController::class, 'institute_store_choose_month'])->name('institute-store-choose-month');
Route::get('/institute-all-attendance', [InstitutesController::class, 'institute_all_attendance'])->name('institute-all-attendance');

// Route For All Institute Screens Start-End

// Campus General Operation Student Admmision Routes
Route::get('/admissions', [AdmissionController::class, 'admissions'])->name('admissions');
Route::get('/Back', [AdmissionController::class, 'Back'])->name('Back');
Route::get('/add-Student', [AdmissionController::class, 'add_Student'])->name('add-Student');
Route::post('/store-student-admissions', [AdmissionController::class, 'store_student_admissions'])->name('store-student-admissions');
Route::get('/view-student/{id}', [AdmissionController::class, 'view_student',])->name('view-student');
Route::get('/delete-student/{id}', [AdmissionController::class, 'delete_student',])->name('delete-student');
Route::get('/edit-student/{id}', [AdmissionController::class, 'edit_student'])->name('edit-student');
Route::post('/update-edit-student/{id}', [AdmissionController::class, 'update_edit_student'])->name('update-edit-student');
Route::get('/change-class/{id}', [AdmissionController::class, 'change_class'])->name('change-class');
Route::post('/update-class/{id}', [AdmissionController::class, 'update_class'])->name('update-class');
Route::get('/class-wise-section', [AdmissionController::class, 'class_wise_section'])->name('class-wise-section');
Route::post('/save-student', [AdmissionController::class, 'save_student'])->name('save-student');
Route::get('/admission-slip/{id}', [AdmissionController::class, 'admission_slip',])->name('admission-slip');
Route::get('/online-addmission-form', [AdmissionController::class, 'online_addmission_form'])->name('online-addmission-form');
Route::post('/store-online-addmission-form', [AdmissionController::class, 'store_online_addmission_form'])->name('store-online-addmission-form');


// General Operation Student Admmision Routes-End
// General Operation View Attendance Routes
Route::get('/view-attendance-institute', [InstituteViewAttendance::class, 'view_attendance_institute'])->name('view-attendance-institute');
Route::get('/fetch-attendance-institute/{class}', [InstituteViewAttendance::class, 'fetch_attendance_institute'])->name('fetch-attendance-institute');

Route::get('/studentattendanceview/{id}', [InstituteViewAttendance::class, 'studentattendanceview'])->name('studentattendanceview');
Route::get('/export-pdf', [InstituteViewAttendance::class, 'exportPDF'])->name('export.pdf');

// General Operation View Attendance Routes-End

// General Operation Class & Section Routes Start  
Route::get('/add-section', [ClassController::class, 'add_section'])->name('add-section');
Route::get('/back-list', [ClassController::class, 'back_list'])->name('back-list');
Route::get('/all-courses', [ClassController::class, 'all_courses'])->name('all-courses');
Route::get('/all-sections', [ClassController::class, 'all_sections'])->name('all-sections');
Route::get('/add-class', [ClassController::class, 'add_course'])->name('add-class');
Route::get('/sections-view/{class_id}', [ClassController::class, 'sections_view'])->name('sections-view');
Route::get('/add-course', [ClassController::class, 'add_course'])->name('add-course');
Route::post('/store-course', [ClassController::class, 'store_course'])->name('store-course');
Route::post('/store-section', [ClassController::class, 'store_section'])->name('store-section');
Route::get('/back-section', [ClassController::class, 'back_section'])->name('back-section');
// General Operation Class & Section Routes Start-End

// General Operation Student Promote Routes-start
Route::get('/viewall-formers', [PromoteStudentController::class, 'viewall_formers'])->name('viewall-formers');
Route::get('/viewdeleted-student/{id}', [PromoteStudentController::class, 'viewdeleted_student',])->name('viewdeleted-student');
Route::get('/restore-student/{id}', [PromoteStudentController::class, 'restore_student',])->name('restore-student');


// formers all routes now are not involve cause ill change the card of former replace with the student admission card to show deleted studnets in formaers 
Route::get('/undo-former/{id}', [PromoteStudentController::class, 'undo_former'])->name('undo-former');
Route::get('/pro-student', [PromoteStudentController::class, 'pro_student'])->name('pro-student');
Route::get('/promotestudentClassData', [PromoteStudentController::class, 'promotestudentClassData'])->name('promotestudentClassData');
Route::post('/updatePromotedStudents', [PromoteStudentController::class, 'updatePromotedStudents'])->name('updatePromotedStudents');
// General Operation Student Promote Routes-End

// General Operation Subject Routes-start
Route::get('/all-subjects', [CampusSubjectController::class, 'all_subjects'])->name('all-subjects');
Route::get('/add-subject', [CampusSubjectController::class, 'add_subject'])->name('add-subject');
Route::post('/store-campus-subject', [CampusSubjectController::class, 'store_campus_subject'])->name('store-campus-subject');
Route::get('/back-subjectlist', [CampusSubjectController::class, 'back_subjectlist'])->name('back-subjectlist');
Route::get('/edit-subject/{id}',[CampusSubjectController::class, 'edit_subject'])->name('edit-subject');
Route::post('/save-edit-subject/{id}', [CampusSubjectController::class, 'save_edit_subject'])->name('save-edit-subject');
// General Operation Subject Routes-start-End 

// General Operation TimeTable Routes-start
Route::get('/view-timetable', [CampusTimeTableController::class, 'view_timetable'])->name('view-timetable');
Route::get('/add-timetable', [CampusTimeTableController::class, 'add_timetable'])->name('add-timetable');
Route::get('/section-subjects', [CampusTimeTableController::class, 'section_subjects'])->name('section-subjects');
Route::get('/new-timetable', [CampusTimeTableController::class, 'new_timetable'])->name('new-timetable');
Route::post('/save-timetable', [CampusTimeTableController::class, 'save_timetable'])->name('save-timetable');
Route::post('/view-classtimetable', [CampusTimeTableController::class, 'view_classtimetable'])->name('view-classtimetable');
Route::get('/delete-timetable/{subject}', [CampusTimeTableController::class, 'delete_timetable'])->name('delete-timetable');
Route::get('/list-avilableTeachers', [CampusTimeTableController::class, 'list_avilableTeachers'])->name('list-avilableTeachers');

// General Operation TimeTable Routes-End

// General Operation Syllabus Routes-start
Route::get('/all-syllabus', [CampusSyllabusController::class, 'all_syllabus'])->name('all-syllabus');
Route::get('/add-syllabus', [CampusSyllabusController::class, 'add_syllabus'])->name('add-syllabus');
Route::post('/store-syllabus', [CampusSyllabusController::class, 'store_syllabus'])->name('store-syllabus');
Route::get('/delete-syllabus/{id}', [CampusSyllabusController::class, 'delete_syllabus'])->name('delete-syllabus');
Route::get('/edit-syllabus/{id}', [CampusSyllabusController::class, 'edit_syllabus'])->name('edit-syllabus');
Route::post('/save-edit-syllabus/{id}', [CampusSyllabusController::class, 'save_edit_syllabus'])->name('save-edit-syllabus');
Route::get('/class-subjects',[CampusSyllabusController::class, 'class_subjects'])->name('class-subjects');

// General Operation Syllabus Routes-start-End 

//Inventory & Billing Management Routes
Route::get('/add-inventory', [CampusInventoryManagementController::class, 'add_inventory'])->name('add-inventory');
Route::post('/store-add-inventory', [CampusInventoryManagementController::class, 'store_add_inventory'])->name('store-add-inventory');
Route::get('/all-inventory', [CampusInventoryManagementController::class, 'all_inventory'])->name('all-inventory');
Route::post('/store-add-stock', [CampusInventoryManagementController::class, 'store_add_stock'])->name('store-add-stock');
Route::post('/store-add-usage', [CampusInventoryManagementController::class, 'store_add_usage'])->name('store-add-usage');
Route::get('/delete-inventory/{delete}', [CampusInventoryManagementController::class, 'delete_inventory'])->name('delete-inventory');
//Inventory & Billing Management Routes End Here

//billing     
Route::match(['post'], '/billing', [CampusBillingController::class, 'store_add_bill'])->name('billing.post');
Route::match(['get'], '/billing', [CampusBillingController::class, 'billing'])->name('billing.get');
Route::get('/delete-bill/{delete}', [CampusBillingController::class, 'delete_bill'])->name('delete-bill');

//HR Routes  
//Hr Campus DEpartment Routes
Route::get('/add-department', [CampusDepartmentController::class, 'add_department'])->name('add-department');
Route::post('/store-add-department', [CampusDepartmentController::class, 'store_add_department'])->name('store-add-department');
Route::get('/all-department', [CampusDepartmentController::class, 'all_department'])->name('all-department');
Route::get('/edit-department/{id}', [CampusDepartmentController::class, 'edit_department'])->name('edit-department');
Route::post('/update-department/{id}', [CampusDepartmentController::class, 'update_department'])->name('update-department');
//Hr Campus DEpartment Routes end here

// HR Campus PUblic Holidays
Route::get('/add-new-holiday', [CampusPublicHolidayController::class, 'add_new_holiday'])->name('add-new-holiday');
Route::post('/store-add-holiday', [CampusPublicHolidayController::class, 'store_add_holiday'])->name('store-add-holiday');
Route::get('/all-holiday', [CampusPublicHolidayController::class, 'all_holiday'])->name('all-holiday');
Route::get('/delete-holiday/{delete}', [CampusPublicHolidayController::class, 'delete_holiday'])->name('delete-holiday');

//HR Campus PUblic Holidays Routes End Here
//HR Campus Employee Routes
Route::get('/add-employees', [CampusEmployeeController::class, 'add_employees'])->name('add-employees');
Route::post('/store-add-employees', [CampusEmployeeController::class, 'store_add_employees'])->name('store-add-employees');
Route::get('/edit-employee/{id}', [CampusEmployeeController::class, 'edit_employee'])->name('edit-employee');
Route::post('/update-employees/{id}', [CampusEmployeeController::class, 'update_employees'])->name('update-employees');
Route::get('/all-employees', [CampusEmployeeController::class, 'all_employees'])->name('all-employees');
Route::get('/delete-employee/{delete}', [CampusEmployeeController::class, 'delete_employee'])->name('delete-employee');

//HR Campus Employee Routes End Here

//HR Campus Employee Leave Routes 
Route::get('/add-employee-leave', [CampusEmployeeLeaveController::class, 'add_employee_leave'])->name('add-employee-leave');
Route::get('/id-wise-name', [CampusEmployeeLeaveController::class, 'id_wise_name'])->name('id-wise-name');
Route::post('/store-employee-leave', [CampusEmployeeLeaveController::class, 'store_employee_leave'])->name('store-employee-leave');
Route::get('/all-employee-leave', [CampusEmployeeLeaveController::class, 'all_employee_leave'])->name('all-employee-leave');
Route::get('/delete-employee-leave/{delete}', [CampusEmployeeLeaveController::class, 'delete_employee_leave'])->name('delete-employee-leave');

//HR Campus Employee Leave Routes End Her 

Route::get('/add-new-category', [InstitutesController::class, 'add_new_category'])->name('add-new-category');
Route::get('/all-books', [InstitutesController::class, 'all_books'])->name('all-books');
Route::get('/add-new-book', [InstitutesController::class, 'add_new_book'])->name('add-new-book');

Route::get('/book-reservation', [InstitutesController::class, 'book_reservation'])->name('book-reservation');
Route::get('/new-reservation', [InstitutesController::class, 'new_reservation'])->name('new-reservation');
Route::get('/return-book', [InstitutesController::class, 'returned_book'])->name('return-book');
Route::get('/book-renewal', [InstitutesController::class, 'book_renewal'])->name('book-renewal');
Route::get('/all-fine', [InstitutesController::class, 'all_fine'])->name('all-fine');
Route::get('/add-new-fine', [InstitutesController::class, 'add_new_fine'])->name('add-new-fine');
Route::get('/supplier-profile', [InstitutesController::class, 'supplier_profile'])->name('supplier-profile');
Route::get('/add-new-supplier', [InstitutesController::class, 'add_new_supplier'])->name('add-new-supplier');

// Routes for fee 
Route::get('/student-fee', [AccountsController::class, 'student_fee'])->name('student-fee');
Route::post('/update-fee', [AccountsController::class, 'update_fee'])->name('update-fee');
Route::post('/store-fee', [AccountsController::class, 'store_fee'])->name('store-fee');
Route::get('/fetch-fee', [AccountsController::class, 'fetch_fee'])->name('fetch-fee');
Route::post('/delete-fee', [Accountscontroller::class, 'delete_fee'])->name('delete-fee');
Route::get('/fetch-fee-details', [AccountsController::class, 'fetch_fee_details'])->name('fetch-fee-details');
Route::post('/store-extra-fee', [AccountsController::class, 'store_extra_fee'])->name('store-extra-fee');
Route::get('/fetch-extra-fees', [AccountsController::class, 'fetchExtraFees'])->name('fetch-extra-fees');
Route::post('/deleteextra-fee', [Accountscontroller::class, 'deleteextra_fee'])->name('deleteextra-fee');


// Route For the Teacher Panel Starts here 
Route::get('/teacher-login', [CampusTeacherController::class, 'teacher_login'])->name('teacher-login');
Route::post('/teacher-logged', [CampusTeacherController::class, 'teacher_logged'])->name('teacher-logged');
Route::get('/teacher-logout', [CampusTeacherController::class, 'teacher_logout'])->name('teacher-logout');
Route::get('/teacher-institue-cmpus', [CampusTeacherController::class, 'teacher_institue_cmpus'])->name('teacher-institue-cmpus');
Route::get('/teacher-screen', [CampusTeacherController::class, 'teacher_screen'])->name('teacher-screen');
Route::get('/all-student-attendance-mark', [CampusTeacherController::class, 'all_student_attendance_mark'])->name('all-student-attendance-mark');
Route::get('/teacher-result', [CampusTeacherController::class, 'teacher_result'])->name('teacher-result');
Route::get('/give-marks', [CampusTeacherController::class, 'give_marks'])->name('give-marks');
Route::get('/diary', [CampusTeacherController::class, 'diary'])->name('diary');
Route::get('/timetable', [CampusTeacherController::class, 'timetable'])->name('timetable');
Route::get('/manage-avilableTime', [CampusTeacherController::class, 'manage_avilableTime'])->name('manage-avilableTime');
Route::post('/store-availableTime',[CampusTeacherController::class, 'store_availableTime'])->name('store-availableTime');


Route::post('/show-timetable', [CampusTeacherController::class, 'show_timetable'])->name('show-timetable');
Route::get('/events', [CampusTeacherController::class, 'events'])->name('events');
// Route For the Teacher Panel End Here  


// Route For the Teacher Panel Recorded Lectures Start Here

Route::get('/recorded-lectures', [CampusTeacherRecordedLecturesController::class, 'recorded_lectures'])->name('recorded-lectures');
Route::get('/add-recorded-lectures', [CampusTeacherRecordedLecturesController::class, 'add_recorded_lectures'])->name('add-recorded-lectures');
Route::post('/store-recorded-lectures', [CampusTeacherRecordedLecturesController::class, 'store_recorded_lectures'])->name('store-recorded-lectures');
Route::get('/teacher-cls-wise-sectn', [CampusTeacherRecordedLecturesController::class, 'teacher_cls_wise_sectn'])->name('teacher-cls-wise-sectn');
Route::get('/teacher-sectn-wise-subjct', [CampusTeacherRecordedLecturesController::class, 'teacher_sectn_wise_subjct'])->name('teacher-sectn-wise-subjct');
Route::get('/teacher-sectn-wise-student', [CampusTeacherRecordedLecturesController::class, 'teacher_sectn_wise_student'])->name('teacher-sectn-wise-student');

Route::get('/edit-recorded-lectures/{id}', [CampusTeacherRecordedLecturesController::class, 'edit_recorded_lectures'])->name('edit-recorded-lectures');
Route::post('/update-recorded-lectures/{id}', [CampusTeacherRecordedLecturesController::class, 'update_recorded_lectures'])->name('update-recorded-lectures');
Route::get('/delete-recorded-lectures/{id}', [CampusTeacherRecordedLecturesController::class, 'delete_recorded_lectures'])->name('delete-recorded-lectures');
Route::post('/fetch-subjects',[CampusTeacherRecordedLecturesController::class,'fetch_subjects'])->name('fetch-subjects');


// Route For the Teacher Diary/Assignment Starts here
Route::get('/add-diary', [CampusTeacherDiaryAssignmentController::class, 'add_diary'])->name('add-diary');
Route::post('/store-add-diary', [CampusTeacherDiaryAssignmentController::class, 'store_add_diary'])->name('store-add-diary');
Route::get('/all-diary', [CampusTeacherDiaryAssignmentController::class, 'all_diary'])->name('all-diary');
Route::get('/edit-diary/{id}', [CampusTeacherDiaryAssignmentController::class, 'edit_diary'])->name('edit-diary');
Route::post('/update-diary', [CampusTeacherDiaryAssignmentController::class, 'update_diary'])->name('update-diary');
Route::get('/delete-diary/{delete}', [CampusTeacherDiaryAssignmentController::class, 'delete_diary'])->name('delete-diary');
// Route For the Teacher Diary/Assignment End Here  

// Route For the Teacher Course Material  
Route::get('/add-course-material', [CampusTeacherCourseMaterialController::class, 'add_course_material'])->name('add-course-material');
Route::post('/store-course-material', [CampusTeacherCourseMaterialController::class, 'store_course_material'])->name('store-course-material');
Route::get('/all-course-material', [CampusTeacherCourseMaterialController::class, 'all_course_material'])->name('all-course-material');
Route::get('/edit-course/{id}', [CampusTeacherCourseMaterialController::class, 'edit_course'])->name('edit-course');
Route::post('/update-course', [CampusTeacherCourseMaterialController::class, 'update_course'])->name('update-course');
Route::get('/delete-course/{id}', [CampusTeacherCourseMaterialController::class, 'delete_course'])->name('delete-course');
// Route for notice Board start here  

Route::get('/Notice-board', [NoticeboardController::class, 'Notice_board'])->name('Notice-board');
Route::get('/add-Notice', [NoticeboardController::class, 'add_Notice'])->name('add-Notice');
Route::post('/save-notice', [NoticeboardController::class, 'save_notice'])->name('save-notice');
Route::get('/delete-notice/{id}', [NoticeboardController::class, 'delete_notice'])->name('delete-notice');
Route::get('/edit-notice/{id}', [NoticeboardController::class, 'edit_notice'])->name('edit-notice');
Route::post('/update-notice/{id}', [NoticeboardController::class, 'update_notice'])->name('update-notice');
// Route for notice Board start here   

Route::get('/add-leave', [CampusTeacherStudentLeaveApprovalController::class, 'add_leave'])->name('add-leave');
Route::post('/store-add-leave', [CampusTeacherStudentLeaveApprovalController::class, 'store_add_leave'])->name('store-add-leave');
Route::get('/all-leave', [CampusTeacherStudentLeaveApprovalController::class, 'all_leave'])->name('all-leave');
Route::get('/edit-leave/{id}', [CampusTeacherStudentLeaveApprovalController::class, 'edit_leave'])->name('edit-leave');
Route::post('/update-leave/{id}', [CampusTeacherStudentLeaveApprovalController::class, 'update_leave'])->name('update-leave');
Route::get('/delete-leave/{id}', [CampusTeacherStudentLeaveApprovalController::class, 'delete_leave'])->name('delete-leave');

// Route For the Teacher student Chat Starts here
Route::get('/chat-screen', [CampusTeacherStudentChatController::class, 'chat_screen'])->name('chat-screen');
Route::get('/send-meessage-chat-screen', [CampusTeacherStudentChatController::class, 'send_meessage_chat_screen'])->name('send-meessage-chat-screen');
Route::get('/recieved-messages-chat-screen',[CampusTeacherStudentChatController::class,'recieved_messages_chat_screen'])->name('recieved-messages-chat-screen');
// Route For the Student Panel Starts here 
Route::get('/student-login', [CampusStudentController::class, 'student_login'])->name('student-login');
Route::post('/student-logged', [CampusStudentController::class, 'student_logged'])->name('student-logged');
Route::get('/student-logout', [CampusStudentController::class, 'student_logout'])->name('student-logout');

// Student panel 
Route::get('/student-screens', [CampusStudentController::class, 'student_screens'])->name('student-screens');
Route::get('/student-profile', [CampusStudentController::class, 'student_profile'])->name('student-profile');
Route::get('/my-courses', [CampusStudentController::class, 'my_courses'])->name('my-courses');
Route::get('/classes-schedule', [CampusStudentController::class, 'classes_schedule'])->name('classes-schedule');
Route::get('/student-result', [CampusStudentController::class, 'student_result'])->name('student-result');
Route::get('/student-exams', [CampusStudentController::class, 'student_exams'])->name('student-exams');
Route::get('/singl-student-attendance', [CampusStudentController::class, 'singl_student_attendance'])->name('singl-student-attendance');
Route::get('/student-library', [CampusStudentController::class, 'student_library'])->name('student-library');
Route::get('/stu-fees', [CampusStudentController::class, 'stu_fees'])->name('stu-fees');
Route::get('/stu-room', [CampusStudentController::class, 'stu_room'])->name('stu-room');
Route::get('/notice-board', [CampusStudentController::class, 'notice_board'])->name('notice-board');
Route::get('/chat-box', [CampusStudentController::class, 'chat_box'])->name('chat-box');
Route::get('/send-messagePage', [CampusStudentController::class, 'send_messagePage'])->name('send-messagePage');
Route::get('/recieved-teachermessages', [CampusStudentController::class, 'recieved_teachermessages'])->name('recieved-teachermessages');

Route::get('/studentnotice-board', [CampusStudentController::class, 'studentnotice_board'])->name('studentnotice-board');
// Route For the Student Assignment Panel
Route::get('/subject-page', [CampusStudentDiaryAssignmentController::class, 'subject_page'])->name('subject-page');
Route::get('/assignments/{subject_name}', [CampusStudentDiaryAssignmentController::class, 'assignments'])->name('assignments');
Route::post('/submit-assignment', [CampusStudentDiaryAssignmentController::class, 'submit_assignment'])->name('submit-assignment');
// Route For the Student Assignment Panel Ends here 

// Route For the Student Panel Ends here
Route::get('/get_student_calendar_attendance', [CampusStudentController::class, 'get_student_calendar_attendance'])->name('get_student_calendar_attendance');
// Route For the Student Panel Ends here 
// Route::post('/send-chat', [CampusTeacherStudentChatController::class, 'send_chat'])->name('send-chat');
Route::post('/send-chat', [CampusTeacherStudentChatController::class, 'send_chat'])->name('send-chat');

Route::post('/StudentChat-send', [CampusStudentController::class, 'StudentChat_send'])->name('StudentChat-send');
Route::get('/viewCourseDeatils/{cardName}', [CampusStudentController::class, 'viewCourseDeatils'])->name('viewCourseDeatils');
Route::get('/teacher/course_material/download/{filename}/{title}', [CampusStudentController::class, 'download_course_material'])->name('download_course_material');

// add current session 
Route::get('/add-currentsession',[CurrentSessionController::class,'add_currentsession'])->name('add-currentsession');
Route::post('/save-session',[CurrentSessionController::class,'save_session'])->name('save-session');


Route::get('/manage-teachers',[ManageTeacherController::class,'manage_teachers'])->name('manage-teachers');
Route::get('/add-classTeacher',[ManageTeacherController::class,'add_classTeacher'])->name('add-classTeacher');
Route::post('/store-classTeacher',[ManageTeacherController::class,'store_classTeacher'])->name('store-classTeacher');
Route::get('/add-SubjectTeacher',[ManageTeacherController::class,'add_SubjectTeacher'])->name('add-SubjectTeacher');
Route::get('/class-subjects',[ManageTeacherController::class,'class_subjects'])->name('class-subjects');

Route::post('/store-subjectTeacher',[ManageTeacherController::class,'store_subjectTeacher'])->name('store-subjectTeacher');

// campus saperate operations controller 
Route::get('/campus-login',[SingleCampusController::class,'campus_login'])->name('campus-login');
Route::post('/campus-logged',[SingleCampusController::class,'campus_logged'])->name('campus-logged');
Route::get('/campus-single-operation',[SingleCampusController::class,'campus_log'])->name('campus-single-operation');
Route::get('/campus-logout',[SingleCampusController::class,'campus_logout'])->name('campus-logout');
Route::get('/CampusGeneral-Operations',[SingleCampusController::class,'CampusGeneral_Operations'])->name('CampusGeneral-Operations');
Route::get('/CampusAccountsOperations',[SingleCampusController::class,'CampusAccountsOperations'])->name('CampusAccountsOperations');
Route::get('/CampusHrOperations',[SingleCampusController::class,'CampusHrOperations'])->name('CampusHrOperations');
Route::get('/dummay-exam-model', [SingleCampusController::class, 'dummay_exam_model'])->name('dummay-exam-model');
Route::get('/Degree-Program-Managements',[SingleCampusController::class,'Degree_Program_Managements'])->name('Degree-Program-Managements');

Route::get('/campus-batches',[CampusBatchController::class,'campus_batches'])->name('campus-batches');  
Route::get('/add-batch',[CampusBatchController::class,'add_batch'])->name('add-batch');  
Route::post('/save-batch',[CampusBatchController::class,'save_batch'])->name('save-batch');
Route::get('/delete-batch/{id}', [CampusBatchController::class, 'delete_batch',])->name('delete-batch');

// Route::get('/manage-teachers',[ManageTeacherController::class,'manage_teachers'])->name('manage-teachers');
// Route::get('/add-classTeacher',[ManageTeacherController::class,'add_classTeacher'])->name('add-classTeacher');
// Route::get('/add-SubjectTeacher',[ManageTeacherController::class,'add_SubjectTeacher'])->name('add-SubjectTeacher');

//campus salary work start
Route::get('/add-salary', [CampusTeacherSalaryController::class, 'add_salary'])->name('add-salary');
Route::get('/list-salary', [CampusTeacherSalaryController::class, 'list_salary'])->name('list-salary');
Route::get('/store-list-salary', [CampusTeacherSalaryController::class, 'store_list_salary'])->name('store-list-salary');
//campus salary work end here

//campus Deduction work start
Route::get('/add-deduction', [CampusEmployeeDeductionController::class, 'add_deduction'])->name('add-deduction');
Route::get('/all-deduction', [CampusEmployeeDeductionController::class, 'all_deduction'])->name('all-deduction');
//campus Deduction work end here

//campus Bonus work Start
Route::get('/add-bonus', [CampusEmployeeBonusController::class, 'add_bonus'])->name('add-bonus');
Route::get('/all-bonus', [CampusEmployeeBonusController::class, 'all_bonus'])->name('all-bonus');
//campus Bonus work end here

// Route For the Teacher student Attendance Starts here
Route::get('/student-attendance-details', [CampusTeacherStudentAttendance::class, 'student_attendance_details'])->name('student-attendance-details');
Route::get('/student-attendance', [CampusTeacherStudentAttendance::class, 'student_attendance'])->name('student-attendance');
Route::get('/fetch-student-attendance', [CampusTeacherStudentAttendance::class, 'fetch_student_attendance'])->name('fetch-student-attendance');
Route::post('/store-student-attendance', [CampusTeacherStudentAttendance::class, 'store_student_attendance'])->name('store-student-attendance');
Route::get('/student-attendance-record', [CampusTeacherStudentAttendance::class, 'student_attendance_record'])->name('student-attendance-record');
Route::get('/fetch-student-attendance-record', [CampusTeacherStudentAttendance::class, 'fetch_student_attendance_record'])->name('fetch-student-attendance-record');

// Route For the Teacher student Leave Approval Starts here

//HR Campus Employee Attendance Routes 
Route::get('/choose-month', [CampusEmployeeAttendanceController::class, 'choose_month'])->name('choose-month');
Route::get('/fetch-employee-attendance', [CampusEmployeeAttendanceController::class, 'fetch_employee_attendance'])->name('fetch-employee-attendance');
Route::post('/store-employee-attendance', [CampusEmployeeAttendanceController::class, 'store_employee_attendance'])->name('store-employee-attendance');
Route::get('/add-attendance', [CampusEmployeeAttendanceController::class, 'add_attendance'])->name('add-attendance');
Route::post('/store-choose-month', [CampusEmployeeAttendanceController::class, 'store_choose_month'])->name('store-choose-month');
Route::get('/all-attendance', [CampusEmployeeAttendanceController::class, 'all_attendance'])->name('all-attendance');
Route::get('/attendance-daily-monthly', [CampusEmployeeAttendanceController::class, 'attendance_daily_monthly'])->name('attendance-daily-monthly');
Route::get('/choose-daily-att', [CampusEmployeeAttendanceController::class, 'choose_daily_att'])->name('choose-daily-att');
Route::get('/fetch-employee-attendance-record', [CampusEmployeeAttendanceController::class, 'fetch_employee_attendance_record'])->name('fetch-employee-attendance-record');
Route::get('/choose-month-employee', [CampusEmployeeAttendanceController::class, 'choose_month_employee'])->name('choose-month-employee');
Route::get('/employee-monthly-attendance-record', [CampusEmployeeAttendanceController::class, 'employee_monthly_attendance_record'])->name('employee-monthly-attendance-record');
Route::get('/individual-employee-attendance/{id}/{dep}/{at_date}/{total_month_days}', [CampusEmployeeAttendanceController::class, 'individual_employee_attendance'])->name('individual-employee-attendance');
Route::get('/generate-pdf', [CampusEmployeeAttendanceController::class, 'generate_pdf'])->name('generate-pdf');
//HR Campus Employee Attendance Records Routes End Here

//library routes
Route::get('/book-list', [LibraryBookController::class, 'book_list'])->name('book-list');
Route::get('/add-book', [LibraryBookController::class, 'add_book'])->name('add-book');
Route::post('/store-book', [LibraryBookController::class, 'store_book'])->name('store-book');

///////////////////////////////////////////////////////////////////////////////////////////////////////////

//ui work only
Route::get('/discipline-record', [InstitutesController::class, 'discipline_record'])->name('discipline-record');
Route::get('/mcqs-testing', [InstitutesController::class, 'mcqs_testing'])->name('mcqs-testing');
Route::get('/fee-challan', [InstitutesController::class, 'fee_challan'])->name('fee-challan');
Route::get('/fee-challan', [InstitutesController::class, 'fee_challan'])->name('fee-challan');
// Route::get('/all-classes', [ClassController::class, 'all_classes'])->name('all-classes');

///New Projects Routes
Route::get('/student-addmission', [NewProjectController::class, 'student_addmission'])->name('student-addmission');
Route::get('/addmission-list', [NewProjectController::class, 'addmission_list'])->name('addmission-list');
Route::get('/student-slip', [NewProjectController::class, 'student_slip'])->name('student-slip');
Route::get('/view-detail', [NewProjectController::class, 'view_detail'])->name('view-detail');
Route::get('/discipline', [NewProjectController::class, 'discipline'])->name('discipline');
Route::get('/add-dairy', [NewProjectController::class, 'add_dairy'])->name('add-dairy');
Route::get('/all-diary-new', [NewProjectController::class, 'all_diary_new'])->name('all-diary-new');
Route::get('/add-course', [NewProjectController::class, 'add_course'])->name('add-course');
Route::get('/all-course', [NewProjectController::class, 'all_course'])->name('all-course');
Route::get('/choose-attendance-detail', [NewProjectController::class, 'choose_attendance_detail'])->name('choose-attendance-detail');
Route::get('/generate-student-attendance', [NewProjectController::class, 'generate_student_attendance'])->name('generate-student-attendance');
Route::get('/choose-attendance-record', [NewProjectController::class, 'choose_attendance_record'])->name('choose-attendance-record');
Route::get('/list-student-attendance', [NewProjectController::class, 'list_student_attendance'])->name('list-student-attendance');
Route::get('/choose-timetable', [NewProjectController::class, 'choose_timetable'])->name('choose-timetable');
Route::get('/timetable-list', [NewProjectController::class, 'timetable_list'])->name('timetable-list');
Route::get('/exam', [NewProjectController::class, 'exam'])->name('exam');
Route::get('/s-profile', [NewProjectController::class, 's_profile'])->name('s-profile');
Route::get('/select-courses', [NewProjectController::class, 'select_courses'])->name('select-courses');
Route::get('/my-course', [NewProjectController::class, 'my_course'])->name('my-course');
Route::get('/student-class-schedule', [NewProjectController::class, 'student_class_schedule'])->name('student-class-schedule');
Route::get('/studentresult', [NewProjectController::class, 'student_result'])->name('studentresult');
Route::get('/account-receivable', [NewProjectController::class, 'account_receivable'])->name('account-receivable');
Route::get('/invoice', [NewProjectController::class, 'invoice'])->name('invoice');
Route::get('/payments', [NewProjectController::class, 'payments'])->name('payments');
Route::get('/receipt', [NewProjectController::class, 'receipt'])->name('receipt');


// Screeen Ready for Uni work 
Route::get('/uni-addmission-form', [ScreenReadyController::class, 'uni_addmission_form'])->name('uni-addmission-form');
Route::get('/uni-merit-list', [ScreenReadyController::class, 'uni_merit_list'])->name('uni-merit-list');
Route::get('/uni-fee-bill-challan', [ScreenReadyController::class, 'uni_fee_bill_challan'])->name('uni-fee-bill-challan');
Route::get('/uni-quiz', [ScreenReadyController::class, 'uni_quiz'])->name('uni-quiz');
Route::get('/uni-ptm-screen', [ScreenReadyController::class, 'uni_ptm_screen'])->name('uni-ptm-screen');
Route::get('/uni-academic-calender', [ScreenReadyController::class, 'uni_academic_calender'])->name('uni-academic-calender');
Route::get('/uni-faculty-discipline', [ScreenReadyController::class, 'uni_faculty_discipline'])->name('uni-faculty-discipline');
Route::get('/uni-examination-scheduling', [ScreenReadyController::class, 'uni_examination_scheduling'])->name('uni-examination-scheduling');
Route::get('/uni-manage-exam-results', [ScreenReadyController::class, 'uni_manage_exam_results'])->name('uni-manage-exam-results');
Route::get('/uni-re-taken-exams', [ScreenReadyController::class, 'uni_re_taken_exams'])->name('uni-re-taken-exams');
Route::get('/uni-grace-marks', [ScreenReadyController::class, 'uni_grace_marks'])->name('uni-grace-marks');
Route::get('/uni-eligibility', [ScreenReadyController::class, 'uni_eligibility'])->name('uni-eligibility');
Route::get('/uni-examination-scheduling-list', [ScreenReadyController::class, 'uni_examination_scheduling_list'])->name('uni-examination-scheduling-list');
Route::get('/uni-manage-exam-results-list', [ScreenReadyController::class, 'uni_manage_exam_results_list'])->name('uni-manage-exam-results-list');
Route::get('/uni-re-taken-exams-list', [ScreenReadyController::class, 'uni_re_taken_exams_list'])->name('uni-re-taken-exams-list');
Route::get('/uni-grace-marks-list', [ScreenReadyController::class, 'uni_grace_marks_list'])->name('uni-grace-marks-list');
Route::get('/uni-eligibility-list', [ScreenReadyController::class, 'uni_eligibility_list'])->name('uni-eligibility-list');
Route::get('/uni-fee-bills', [ScreenReadyController::class, 'uni_fee_bills'])->name('uni-fee-bills');
Route::get('/uni-fee-bills-alteration', [ScreenReadyController::class, 'uni_fee_bills_alteration'])->name('uni-fee-bills-alteration');
Route::get('/uni-optional-charges', [ScreenReadyController::class, 'uni_optional_charges'])->name('uni-optional-charges');
Route::get('/uni-fee-receipt', [ScreenReadyController::class, 'uni_fee_receipt'])->name('uni-fee-receipt');

// Route for the financial management model
Route::get('/CampusfinancialOperations',[ScreenReadyController::class,'CampusfinancialOperations'])->name('CampusfinancialOperations');

Route::get('/financial-Fiscal',[ScreenReadyController::class,'financial_Fiscal'])->name('financial-Fiscal');
Route::get('/financial-ChartofAccount',[ScreenReadyController::class,'financial_ChartofAccount'])->name('financial-ChartofAccount');
Route::get('/financial-Budgeting',[ScreenReadyController::class,'financial_Budgeting'])->name('financial-Budgeting');
Route::get('/financial-AssetsManagement',[ScreenReadyController::class,'financial_AssetsManagement'])->name('financial-AssetsManagement');
Route::get('/financial-Bills',[ScreenReadyController::class,'financial_Bills'])->name('financial-Bills');
Route::get('/financial-Banking',[ScreenReadyController::class,'financial_Banking'])->name('financial-Banking');
Route::get('/financial-Remuneration',[ScreenReadyController::class,'financial_Remuneration'])->name('financial-Remuneration');
Route::get('/financial-Reports',[ScreenReadyController::class,'financial_Reports'])->name('financial-Reports');
Route::get('/financial-Statements',[ScreenReadyController::class,'financial_Statements'])->name('financial-Statements');

// Route for the Payroll management model

Route::get('/Campuspayrollmanagement',[ScreenReadyController::class,'Campuspayrollmanagement'])->name('Campuspayrollmanagement');
Route::get('/uni-advance-loan',[ScreenReadyController::class,'uni_advance_loan'])->name('uni-advance-loan');
Route::get('/uni-Annual-increments',[ScreenReadyController::class,'uni_Annual_increments'])->name('uni-Annual-increments');
Route::get('/uni-block-salary',[ScreenReadyController::class,'uni_block_salary'])->name('uni-block-salary');


// route for the degree and program management
Route::get('/add-degree-creation',[DegreeCreationController::class,'add_degree_creation'])->name('add-degree-creation');
Route::get('/list-degree-creation',[DegreeCreationController::class,'list_degree_creation'])->name('list-degree-creation');


Route::get('/add-program-manage',[ProgramManagementController::class,'add_program_manage'])->name('add-program-manage');
Route::get('/list-program-manage',[ProgramManagementController::class,'list_program_manage'])->name('list-program-manage');


Route::get('/add-batch-creation',[BatchCreationController::class,'add_batch_creation'])->name('add-batch-creation');
Route::get('/list-batch-creation',[BatchCreationController::class,'list_batch_creation'])->name('list-batch-creation');

Route::get('/add-sem-config',[SemesterConfigController::class,'add_sem_config'])->name('add-sem-config');
Route::get('/list-sem-config',[SemesterConfigController::class,'list_sem_config'])->name('list-sem-config');

Route::get('/add-sub-manage',[SubjectManagementController::class,'add_sub_manage'])->name('add-sub-manage');
Route::get('/list-sub-manage',[SubjectManagementController::class,'list_sub_manage'])->name('list-sub-manage');



