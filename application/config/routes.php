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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['user/user-list'] = 'BlogController/showUserList';
$route['user/dashboard'] = 'BlogController/dashboardUser';
$route['user/get-json'] = 'BillingController/sendJson';
$route['user/details-bill'] = 'BillingController/uploadBill';
$route['user/template'] = 'BillingController/uploadTemplate';
$route['user/login'] = 'BlogController/login';
$route['user/create'] = 'BlogController/CreateUser';
$route['user/delete/(:any)'] = 'BlogController/deleteUser';
$route['user/category/delete/(:any)'] = 'BlogController/deleteCategory';
$route['user/logout'] = 'BlogController/doLogout';
$route['Billing'] = 'bill/showBill';
$route['Home'] = 'BlogController/home';
$route['Faculty'] = 'BlogController/faculty';
$route['Contact'] = 'BlogController/contact';
$route['user/change-role'] = 'BlogController/changeRole';
$route['user/create-post'] = 'BlogController/createPost';
$route['user/category-list'] = 'BlogController/categoryList';
$route['user/category-add'] = 'BlogController/categoryCreate';
$route['sent-email'] = 'BlogController/sentEmailAction';
$route['user/create-faculty'] = 'BlogController/facultyCreate';
$route['user/faculty-add'] = 'BlogController/facultyAdd';
$route['user/confirm/(:any)/(:any)'] = 'BlogController/confirmAccount';
$route['post/(:any)'] = 'BlogController/displayPost';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;