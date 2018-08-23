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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'home_controller';
$route['login'] = 'home_controller/login';
$route['register'] = 'home_controller/register';
$route['register_user'] = 'home_controller/create_user';
$route['dashboard'] = 'Dashboard_controller/viewDashboard';

$route['dashboard/ngo'] = 'Dashboard_controller/viewNgo';
$route['dashboard/opportunities']='Dashboard_controller/viewOpportunity';
$route['dashboard/complaints'] = 'Dashboard_controller/viewComplaint';
$route['dashboard/add_complaint'] = 'Dashboard_controller/insert_complaint';
$route['authenticate'] = 'home_controller/authenticateUser';
$route['logout'] = 'Dashboard_controller/logOut';




$route['admin_dashboard'] = 'Admin_controller/viewAdminDashboard';
$route['admin_dashboard/opportunities'] = 'Admin_controller/viewAdminOpportunities';
$route['admin_dashboard/ngos'] = 'Admin_controller/viewAdminNgos';
$route['admin_dashboard/complaints'] = 'Admin_controller/viewAdminComplaints';
$route['add_scheme'] = 'Admin_controller/insert_scheme';
$route['admin_dashboard/schemes/delete'] = 'Admin_controller/remove_scheme';
$route['admin_dashboard/add_ngo'] = 'Admin_controller/insert_ngo';
$route['admin_dashboard/ngo/delete'] = 'Admin_controller/remove_ngo';
$route['admin_dashboard/notificationConsole'] = 'Admin_controller/openNotificationConsole';

$route['app/authenticate/register_user'] = 'home_controller/app_create_user';

//For android -->>
$route['app/schemes'] = 'App_controller/getAllSchemes';
$route['app/offices'] = 'App_controller/getAllOffices';