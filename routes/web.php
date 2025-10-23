<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SiblingController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\AppUserController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\HouseBlockController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\UserController;




// ------------------------
// Public Routes (No Login Required)
// ------------------------

Route::get('/', [MainController::class, 'index']);
// Route::post('/register', [MainController::class,'register']);
Route::get('/register', [MainController::class, 'register']);
Route::post('/registerUser', [MainController::class, 'registerUser']);
Route::get('/login', [MainController::class, 'showLogin']); // shows login form
Route::post('/loginUser', [MainController::class, 'loginUser']); // handles login submission
Route::get('/logout', [MainController::class, 'logout']);


// ------------------------
// Protected Dashboard & Admin Routes (Only after Login)
// ------------------------






//Admin routes

// Route::get('/admin', [AdminController::class, 'index']);
// Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::middleware(['isLogin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
});



// Lead/Inquiry
Route::resource('enquiries', EnquiryController::class);

Route::get('/add-leads', [EnquiryController::class, 'create'])->name('enquiries.create');
Route::post('/add-leads', [EnquiryController::class, 'store'])->name('enquiries.store');



// Route::get('/leadAssign', [EnquiryController::class, 'leadAssign']);
// Route::get('/leadSources', [EnquiryController::class, 'leadSources']);
// Route::get('/leadStatus', [EnquiryController::class, 'leadStatus']);

// Student

Route::get('/allStudents', [StudentController::class, 'index'])->name('students.index');
Route::get('/passedStudents', [StudentController::class, 'passed'])->name('students.passed');
Route::get('/droppedStudents', [StudentController::class, 'dropped'])->name('students.dropped');
Route::get('/migrationStudents', [StudentController::class, 'migration'])->name('students.migration');

// Resource routes for create, store, edit, update, destroy
Route::resource('students', StudentController::class)->except(['index']);

// Route::get('/allStudents', [StudentController::class, 'allStudents']);
// Route::get('/passedStudents', [StudentController::class, 'passedStudents']);
// Route::get('/droppedStudents', [StudentController::class, 'droppedStudents']);
// Route::get('/migrationStudents', [StudentController::class, 'migrationStudents']);

// Teacher


Route::resource('teachers', TeacherController::class);

// Custom routes 
Route::get('/allTeachers', [TeacherController::class, 'index'])->name('teachers.all');
Route::get('/passedTeachers', [TeacherController::class, 'passed'])->name('teachers.passed');
Route::get('/droppedTeachers', [TeacherController::class, 'dropped'])->name('teachers.dropped');
Route::get('/migrationTeachers', [TeacherController::class, 'migration'])->name('teachers.migration');
Route::get('/teachers/filter/{status}', [TeacherController::class, 'filter'])->name('teachers.filter');
// // Employees
// Route::get('/employeeRoles', [EmployeeController::class, 'employeeRoles']);
// Route::get('/allEmployees', [EmployeeController::class, 'allEmployees']);
// Route::get('/parent', [EmployeeController::class, 'parent']);

// // Sibling
// Route::get('/allSiblings', [SiblingController::class, 'allSiblings']);

// // Fees
// Route::get('/collectFees', [FeesController::class, 'collectFees']);
// Route::get('/feesDefaulters', [FeesController::class, 'feesDefaulters']);
// Route::get('/collectFeesLags', [FeesController::class, 'collectFeesLags']);
// Route::get('/feesCollectionReport', [FeesController::class, 'feesCollectionReport']);
// Route::get('/feesStructureSetup', [FeesController::class, 'feesStructureSetup']);
// Route::get('/feesStructureReport', [FeesController::class, 'feesStructureReport']);
// Route::get('/feesCollectionMonthly', [FeesController::class, 'feesCollectionMonthly']);
// Route::get('/onlineFeesStructure', [FeesController::class, 'onlineFeesStructure']);

// // Mobile App Users
// Route::get('/mobileAppUsers', [AppUserController::class, 'allUsers']);

// // Homework
// Route::get('/homework', [HomeworkController::class, 'allHomework']);

// // House Block
// Route::get('/houseBlocks', [HouseBlockController::class, 'allHouseBlocks']);

// // Attendance
// Route::get('/studentAttendance', [AttendanceController::class, 'studentAttendance']);
// Route::get('/staffAttendance', [AttendanceController::class, 'staffAttendance']);
// Route::get('/qrCodeLags', [AttendanceController::class, 'qrCodeLags']);

// // Leaves
// Route::get('/leaveRequest', [LeaveController::class, 'leaveRequest']);
// Route::get('/myLeave', [LeaveController::class, 'myLeave']);
// Route::get('/leaveType', [LeaveController::class, 'leaveType']);
// Route::get('/leaveSetting', [LeaveController::class, 'leaveSetting']);

// // User Management
// Route::get('/addUser', [UserController::class, 'addUser']);
// Route::get('/viewUsers', [UserController::class, 'viewUsers']);
// Route::get('/editUser', [UserController::class, 'editUser']);
// Route::get('/deleteUser', [UserController::class, 'deleteUser']);

// // School Management
// Route::get('/addSchool', [SchoolController::class, 'addSchool']);
// Route::get('/viewSchools', [SchoolController::class, 'viewSchools']);
// Route::get('/editSchool', [SchoolController::class, 'editSchool']);
// Route::get('/deleteSchool', [SchoolController::class, 'deleteSchool']);

// // Online Exams
// Route::get('/createExam', [ExamController::class, 'createExam']);
// Route::get('/viewResults', [ExamController::class, 'viewResults']);
// Route::get('/gradingSetup', [ExamController::class, 'gradingSetup']);

// // Transport Management
// Route::get('/addVehicle', [TransportController::class, 'addVehicle']);
// Route::get('/routeManagement', [TransportController::class, 'routeManagement']);
// Route::get('/driverDetails', [TransportController::class, 'driverDetails']);

// // Document Management
// Route::get('/uploadDocuments', [DocumentController::class, 'uploadDocuments']);
// Route::get('/viewFiles', [DocumentController::class, 'viewFiles']);
// Route::get('/assignClasses', [DocumentController::class, 'assignClasses']);

// // Curriculum
// Route::get('/subjectList', [CurriculumController::class, 'subjectList']);
// Route::get('/addExamCurriculum', [CurriculumController::class, 'addExam']);
// Route::get('/viewExamResults', [CurriculumController::class, 'viewExamResults']);

// // Help Desk
// Route::get('/raiseTicket', [HelpDeskController::class, 'raiseTicket']);
// Route::get('/viewOpenTickets', [HelpDeskController::class, 'viewOpenTickets']);
// Route::get('/ticketHistory', [HelpDeskController::class, 'ticketHistory']);

// // Events
// Route::get('/addEvent', [EventController::class, 'addEvent']);
// Route::get('/viewCalendar', [EventController::class, 'viewCalendar']);

// // Academic Setup
// Route::get('/defineGrades', [AcademicController::class, 'defineGrades']);
// Route::get('/houseListings', [AcademicController::class, 'houseListings']);

// // Media / Gallery
// Route::get('/uploadImages', [GalleryController::class, 'uploadImages']);
// Route::get('/eventPhotos', [GalleryController::class, 'eventPhotos']);

// // Reports
// Route::get('/studentPerformance', [ReportController::class, 'studentPerformance']);
// Route::get('/financialReports', [ReportController::class, 'financialReports']);
// Route::get('/attendanceSummary', [ReportController::class, 'attendanceSummary']);

// // User Profile
// Route::get('/adminProfile', [ProfileController::class, 'profile']);
