<?php

//admin mastering home page
Route::get('/Home','frontendcontroller@index');
Route::get('/Service','frontendcontroller@service');
Route::get('/Doctor','frontendcontroller@Doctor');
Route::get('/','frontendcontroller@facilities');
Route::get('/pricing','frontendcontroller@pricing');
Route::get('/appointment','appointmentController@index');
Route::post('/appointment/new-appointment','appointmentController@saveAppointment');

Route::get('/taketoken/{id}','appointmentController@takeNewToken');

//login auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//doctor
Route::get('/Doctor/Doctorlist','doctorController@doctorList');
Route::get('/Doctor/Doctorlist','doctorController@doctorList');
Route::get('/Doctor/appointment','appointmentController@Doctorappointment');
Route::get('/Doctors/Edit/{id}','doctorController@EditDoctor');

Route::post('/doctor/new-doctor-add','doctorController@addDoctor');
Route::post('/doctor/updated','doctorController@updateDoctor');

Route::post('/doctor/add-consulting','doctorController@addConsulting');

Route::get('/doctor/remove/{id}','doctorController@removeDoctor');

Route::post('/doctors/mail','mailController@mailConfigure');

Route::get('/Doctor/unpublished/{id}','doctorController@unpublishedTextNotice');
Route::get('/Doctor/published/{id}','doctorController@publishedTextNotice');

//patient
Route::get('/patient/patient-list','patientController@patientlist');
Route::get('/patient/feedback','patientController@feedbacklist');
Route::get('/patient/edit','patientController@editpatient');

//package
Route::get('/package/add-package','packageController@addpackage');
Route::get('/package/edit-package/{id}','packageController@editPackage');
Route::get('/package/unpublished/{id}','packageController@unpublishedPackage');
Route::get('/package/published/{id}','packageController@publishedPackage');
Route::post('/package/save-newpackage','packageController@addNewPackage');
Route::post('/package/update-newpackage','packageController@updatedPackage');

//Doctor
Route::get('/doctor/consulting-hour','doctorController@consultingHour');
Route::post('/docttor/consulting','doctorController@TestConsulting');


//frontend notice
Route::get('/frontEnd/notice','frontEndNoticeController@noticeControll');
Route::get('/frontEnd/notice/managenotice','frontEndNoticeController@manageNotice');

//frontend facilities
Route::get('/frontend/facilities','frontEndNoticeController@facilities');
Route::post('/facilities/add-newfacilities','frontEndNoticeController@addNewFacilities');
Route::get('/frontend/facilities/manage','frontEndNoticeController@mangefacilities');
Route::get('/facilities/unpublished/{id}','frontEndNoticeController@unpublishedfacilities');
Route::get('/facilities/published/{id}','frontEndNoticeController@publishedfacilities');
Route::get('/facilities/remove/{id}','frontEndNoticeController@removeFacilities');

//userprofile
Route::get('/userprofile','adminController@showProfile');
Route::post('/users','adminController@changeProfile');





