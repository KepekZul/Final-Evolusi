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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['loginform'] = 'Login/form';
$route['login'] = 'Login/login_post';
$route['logout'] = 'Login/logout';
$route['register'] = 'Login/register';

//-------Route Home------------------------

$route['home'] = 'Home/index';
$route['about'] = 'Home/about';
$route['anggota'] = 'Home/anggota';
$route['sop'] = 'Home/sop';
$route['registrasi'] = 'Home/register';

//-------Route Artikel--------------------------
$route['artikel/list'] = 'Artikel/list_artikel/$1';
$route['artikel/detail/(:any)'] = 'Artikel/detail_artikel/$1';
$route['artikel/tambah'] = 'Artikel/tambah_artikel';
$route['artikel/post'] = 'Artikel/post_artikel';
$route['artikel/update'] = 'Artikel/update_artikel';
$route['artikel/hapus/(:any)'] = 'Artikel/hapus_artikel/$1';
$route['artikel/index/(:any)/(:any)/(:any)'] = 'Artikel/index/$1/$2/$3';

//-------Route Berita--------------------------
$route['berita/list'] = 'Berita/list_berita/$1';
$route['berita/detail/(:any)'] = 'Berita/detail_berita/$1';
$route['berita/tambah'] = 'Berita/tambah_berita';
$route['berita/post'] = 'Berita/post_berita';
$route['berita/update'] = 'Berita/update_berita';
$route['berita/hapus/(:any)'] = 'Berita/hapus_berita/$1';
$route['berita/index/(:any)/(:any)/(:any)'] = 'Berita/index/$1/$2/$3';

//-------Route Lomba--------------------------
$route['lomba/list'] = 'Lomba/list_lomba/$1';
$route['lomba/detail/(:any)'] = 'Lomba/detail_lomba/$1';
$route['lomba/tambah'] = 'Lomba/tambah_lomba';
$route['lomba/post'] = 'Lomba/post_lomba';
$route['lomba/update'] = 'Lomba/update_lomba';
$route['lomba/hapus/(:any)'] = 'Lomba/hapus_lomba/$1';
$route['lomba/index/(:any)/(:any)/(:any)'] = 'Lomba/index/$1/$2/$3';

//-------Route Trainer--------------------------
$route['trainer/list'] = 'Trainer/list_trainer';
$route['trainer/tambah'] = 'Trainer/tambah_trainer';
$route['trainer/post'] = 'Trainer/post_trainer';
$route['trainer/update'] = 'Trainer/update_trainer';
$route['trainer/hapus/(:any)'] = 'Trainer/hapus_trainer/$1';
$route['trainer/data'] = 'Trainer/data_diri';

//------- Route User --------------------------
$route['user/list'] = 'User/list_user';
$route['user/update'] = 'User/update_user';
$route['user/hapus/(:any)'] = 'User/hapus_user/$1';
$route['user/data'] = 'User/data_diri';
$route['user/request_training'] = 'User/request_training';
$route['user/request'] = 'User/request_process';
$route['user/request_list'] = 'User/request_list';
$route['user/request_detail/(:any)'] = 'User/request_detail/$1';
$route['user/request_terima/(:any)'] = 'User/request_terima/$1';
$route['user/request_tolak/(:any)'] = 'User/request_tolak/$1';
