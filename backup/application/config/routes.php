<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main";

$route['task/(:any)'] = "task/index/$1";
$route['send'] = "task/send";
$route['progress'] = "task/progress";
$route['register']="main/register";
$route['homepage']='main/homepage';
$route['auth']="auth";
$route['wel']="welcome";
$route['faq'] = "faq";
$route['edit_profile'] = "user";
$route['admin'] = "main/admin";
$route['edit_role'] = "main/edit_role";

$route['announcement'] = "announcement";
$route['edit_hp'] = "edit_hp";


$route['task/create'] = 'task/create';
$route['task/update'] = 'task/update';
$route['task/delete/(:any)']='task/delete/$1';
$route['task/stop_rel'] = 'task/stop_rel';
$route['task/comment'] = 'task/comment';
$route['faq/edit']='faq/edit';
$route['announcement/create'] = "announcement/create";
$route['announcement/delete/(:any)']='announcement/delete/$1';
$route['edit_hp/edit'] = "edit_hp/edit";



$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */