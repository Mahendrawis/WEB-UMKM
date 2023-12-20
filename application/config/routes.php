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
|	https://codeigniter.com/userguide3/general/routing.html
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

//route home
$route['default_controller'] = 'HomeDURCOK/homeDurianKocok';
$route['home'] = 'HomeDURCOK/homeDurianKocok';
$route['product'] = 'HomeDURCOK/productDurianKocok';
$route['about'] = 'HomeDURCOK/aboutDurianKocok';
$route['contact'] = 'HomeDURCOK/contactDurianKocok';
$route['login'] = 'LoginDURCOK';
$route['pemesanan'] = 'HomeDURCOK/pemesananDurianKocok';
$route['addPesananAction'] = 'HomeDURCOK/addPesananAction';
$route['viewProduct/(:any)'] = 'HomeDURCOK/viewProductDurianKocok/$1';

//route admin
$route['dashboard'] = 'LoginDURCOK/dashboardDurianKocok';
$route['logout'] = 'LoginDURCOK/logout';

//route admin product
$route['productAdmin'] = 'productDURCOK/productDurianKocok';
$route['aboutAdmin'] = 'aboutDURCOK/aboutDurianKocok';
$route['contactAdmin'] = 'contactDURCOK/contactDurianKocok';

//on add product
$route['addProduct'] = 'ProductDURCOK/addProductDurianKocok';
//progress add with form validation and name function addProductDurianKocokAction
$route['addProductAction'] = 'ProductDURCOK/addProductDurianKocokAction';

//on edit product
$route['editProduct/(:any)'] = 'ProductDURCOK/editProductDurianKocok/$1';
//progress edit with form validation and name function editProductDurianKocokAction
$route['editProductAction'] = 'ProductDURCOK/editProductDurianKocokAction';

//on delete product
$route['deleteProduct/(:any)'] = 'ProductDURCOK/deleteProductDurianKocok/$1';

//contact
$route['contactAdmin'] = 'ContactDURCOK/contactDurianKocok';
$route['editContactAction'] = 'ContactDURCOK/editContactAction';

//pesanan
$route['pesanan'] = 'PesananDURCOK/pesananDurianKocok';
$route['selesaikanPesanan/(:any)'] = 'PesananDURCOK/selesaikanPesananDurianKocok/$1';

//view admin
$route['Admin'] = 'adminDURCOK/adminDurianKocok';
$route['addAdmin'] = 'adminDURCOK/addAdminDurianKocok';
$route['addAdminAction'] = 'adminDURCOK/addAdminDurianKocokAction';

//update admin
$route['updateAdmin/(:any)'] = 'adminDURCOK/updateAdminDurianKocok/$1';
$route['updateAdminAction'] = 'adminDURCOK/updateAdminDurianKocokAction';

//delete admin
$route['deleteAdmin/(:any)'] = 'adminDURCOK/deleteAdminDurianKocok/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;