<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'user/login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['users/handlelist'] ='user/handlelist';
$route['users/mobileOtp'] ='user/phone_email_sign_up';
$route['users/basicinfo'] ='user/basicinfo';
$route['users/profileimg'] ='user/profile_img';
$route['users/logincheck'] ='user/logincheck';
$route['users/upassword'] ='user/upassword';
$route['users/get_users'] ='user/get_users';
$route['users/upgrade_account'] ='user/upgrade_account';
$route['users/report_user'] ='user/report_user';
$route['users/block_user'] ='user/block_user';
$route['users/master_password'] ='user/master_password';
$route['users/monetise_account'] ='user/monetise_account';
$route['users/change_password'] ='user/change_password';
$route['users/delete_account'] ='user/delete_account';
$route['users/manage_block_list'] ='user/manage_block_list';
$route['users/user_privacy_settings'] ='user/user_privacy_settings';
$route['users/get_users_info'] ='user/get_users_info';
$route['dropdowns/countrieslist'] ='country/countrieslist';
$route['dropdowns/statelist'] ='state/statelist';
$route['dropdowns/citylist'] ='city/citylist';
$route['posts/postlist'] = 'post/postlist';
$route['posts/votes'] = 'post/votes';
$route['posts/likes'] = 'post/likes';
$route['comments/commentList'] = 'comment/commentList';
$route['comments/get_child_comment_list'] = 'comment/get_child_comment_list';
$route['comments/commentvotes'] = 'comment/commentvotes';
$route['posts/ptypelist'] = 'post_type/ptypelist';
