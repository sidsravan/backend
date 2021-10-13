<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2021-04-06 09:37:26 --> Config Class Initialized
INFO - 2021-04-06 09:37:26 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:26 --> Config Class Initialized
INFO - 2021-04-06 09:37:26 --> Config Class Initialized
INFO - 2021-04-06 09:37:26 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:26 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:26 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:26 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:37:26 --> UTF-8 Support Enabled
DEBUG - 2021-04-06 09:37:26 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:26 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:26 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:26 --> URI Class Initialized
INFO - 2021-04-06 09:37:26 --> URI Class Initialized
INFO - 2021-04-06 09:37:26 --> URI Class Initialized
INFO - 2021-04-06 09:37:26 --> Router Class Initialized
INFO - 2021-04-06 09:37:26 --> Router Class Initialized
INFO - 2021-04-06 09:37:26 --> Router Class Initialized
INFO - 2021-04-06 09:37:26 --> Output Class Initialized
INFO - 2021-04-06 09:37:26 --> Output Class Initialized
INFO - 2021-04-06 09:37:26 --> Output Class Initialized
INFO - 2021-04-06 09:37:26 --> Security Class Initialized
INFO - 2021-04-06 09:37:26 --> Security Class Initialized
INFO - 2021-04-06 09:37:26 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-06 09:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-06 09:37:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:26 --> Input Class Initialized
INFO - 2021-04-06 09:37:26 --> Input Class Initialized
INFO - 2021-04-06 09:37:26 --> Input Class Initialized
INFO - 2021-04-06 09:37:26 --> Language Class Initialized
INFO - 2021-04-06 09:37:26 --> Language Class Initialized
INFO - 2021-04-06 09:37:26 --> Language Class Initialized
INFO - 2021-04-06 09:37:26 --> Loader Class Initialized
INFO - 2021-04-06 09:37:26 --> Loader Class Initialized
INFO - 2021-04-06 09:37:26 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-06 09:37:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-06 09:37:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:26 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:26 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:26 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:26 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:26 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:26 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:26 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:26 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-06 09:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:26 --> Model Class Initialized
INFO - 2021-04-06 09:37:26 --> Model Class Initialized
INFO - 2021-04-06 09:37:26 --> Controller Class Initialized
INFO - 2021-04-06 09:37:26 --> Controller Class Initialized
INFO - 2021-04-06 09:37:26 --> Model Class Initialized
INFO - 2021-04-06 09:37:26 --> Controller Class Initialized
INFO - 2021-04-06 09:37:26 --> Model Class Initialized
INFO - 2021-04-06 09:37:26 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
INFO - 2021-04-06 09:37:26 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-06 09:37:26 --> Model Class Initialized
INFO - 2021-04-06 09:37:26 --> Model Class Initialized
INFO - 2021-04-06 09:37:26 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '48',
)
INFO - 2021-04-06 09:37:26 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'48\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'48\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'48\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-06 09:37:26 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '78',
    'user_id' => '48',
    'post_image' => 'images/6069ef449d5e6.png',
    'post_description' => '#bandla #funny joke pavan kalyan',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 22:24:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '77',
    'user_id' => '51',
    'post_image' => 'images/6069cd5382a8a.png',
    'post_description' => '#corona funny @abhi #joke #men',
    'commentids' => '1',
    'name' => 'Adithya P',
    'handle_name' => '@adithyap',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 19:59:39',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '73',
    'user_id' => '46',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'Test #test @sanjith',
    'commentids' => '1',
    'name' => 'Sanjith',
    'handle_name' => '@sanjith',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-03 11:48:23',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '72',
    'user_id' => '48',
    'post_image' => 'images/60675fe4c1547.png',
    'post_description' => '#Modi #bangladesh funny',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '0',
    'cdate' => '2021-04-02 23:48:12',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '71',
    'user_id' => '41',
    'post_image' => 'images/6055ff05ca01e.png',
    'post_description' => '#brahmi #joke funny @abinash12',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-20 19:26:21',
    'comment_count' => '2',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  5 => 
  array (
    'id' => '70',
    'user_id' => '41',
    'post_image' => 'images/604e272559350.png',
    'post_description' => '#funny #joke test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '4',
    'down_vote_count' => '0',
    'cdate' => '2021-03-14 20:39:25',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '69',
    'user_id' => '41',
    'post_image' => 'images/604e26d69f5f4.png',
    'post_description' => '#funny #joke #test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '3',
    'cdate' => '2021-03-14 20:38:06',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  7 => 
  array (
    'id' => '68',
    'user_id' => '44',
    'post_image' => 'images/6046281c9be91.png',
    'post_description' => '#exams funny #brahmi @sai ',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '2',
    'cdate' => '2021-03-08 19:05:24',
    'comment_count' => '2',
    'post_type_id' => '0',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '67',
    'user_id' => '44',
    'post_image' => 'images/603ef9f56b329.png',
    'post_description' => '#vantalakka maa tv @abinash12',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-03 08:22:37',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
)
INFO - 2021-04-06 09:37:26 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:26 --> Total execution time: 0.6521
INFO - 2021-04-06 09:37:26 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:26 --> Total execution time: 0.6444
INFO - 2021-04-06 09:37:26 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '78',
    'user_id' => '48',
    'post_image' => 'images/6069ef449d5e6.png',
    'post_description' => '#bandla #funny joke pavan kalyan',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 22:24:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '77',
    'user_id' => '51',
    'post_image' => 'images/6069cd5382a8a.png',
    'post_description' => '#corona funny @abhi #joke #men',
    'commentids' => '1',
    'name' => 'Adithya P',
    'handle_name' => '@adithyap',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 19:59:39',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '73',
    'user_id' => '46',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'Test #test @sanjith',
    'commentids' => '1',
    'name' => 'Sanjith',
    'handle_name' => '@sanjith',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-03 11:48:23',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '72',
    'user_id' => '48',
    'post_image' => 'images/60675fe4c1547.png',
    'post_description' => '#Modi #bangladesh funny',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '0',
    'cdate' => '2021-04-02 23:48:12',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '71',
    'user_id' => '41',
    'post_image' => 'images/6055ff05ca01e.png',
    'post_description' => '#brahmi #joke funny @abinash12',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-20 19:26:21',
    'comment_count' => '2',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '70',
    'user_id' => '41',
    'post_image' => 'images/604e272559350.png',
    'post_description' => '#funny #joke test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '4',
    'down_vote_count' => '0',
    'cdate' => '2021-03-14 20:39:25',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '69',
    'user_id' => '41',
    'post_image' => 'images/604e26d69f5f4.png',
    'post_description' => '#funny #joke #test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '3',
    'cdate' => '2021-03-14 20:38:06',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '68',
    'user_id' => '44',
    'post_image' => 'images/6046281c9be91.png',
    'post_description' => '#exams funny #brahmi @sai ',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '2',
    'cdate' => '2021-03-08 19:05:24',
    'comment_count' => '2',
    'post_type_id' => '0',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '67',
    'user_id' => '44',
    'post_image' => 'images/603ef9f56b329.png',
    'post_description' => '#vantalakka maa tv @abinash12',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-03 08:22:37',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-06 09:37:26 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:26 --> Total execution time: 0.6453
INFO - 2021-04-06 09:37:27 --> Config Class Initialized
INFO - 2021-04-06 09:37:27 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
INFO - 2021-04-06 09:37:28 --> Config Class Initialized
INFO - 2021-04-06 09:37:28 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
INFO - 2021-04-06 09:37:28 --> Config Class Initialized
INFO - 2021-04-06 09:37:28 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.2113
INFO - 2021-04-06 09:37:28 --> Config Class Initialized
INFO - 2021-04-06 09:37:28 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:28 --> Config Class Initialized
INFO - 2021-04-06 09:37:28 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> Config Class Initialized
INFO - 2021-04-06 09:37:28 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
INFO - 2021-04-06 09:37:28 --> Config Class Initialized
INFO - 2021-04-06 09:37:28 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
INFO - 2021-04-06 09:37:28 --> Config Class Initialized
INFO - 2021-04-06 09:37:28 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.3900
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.4931
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Config Class Initialized
INFO - 2021-04-06 09:37:28 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.2068
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.2999
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
DEBUG - 2021-04-06 09:37:28 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:28 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.3040
INFO - 2021-04-06 09:37:28 --> URI Class Initialized
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:28 --> Router Class Initialized
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:28 --> Output Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.3874
INFO - 2021-04-06 09:37:28 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:28 --> Input Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.4915
INFO - 2021-04-06 09:37:28 --> Language Class Initialized
INFO - 2021-04-06 09:37:28 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:28 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:28 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:28 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:28 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Controller Class Initialized
INFO - 2021-04-06 09:37:28 --> Model Class Initialized
INFO - 2021-04-06 09:37:28 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:28 --> Total execution time: 0.2187
INFO - 2021-04-06 09:37:30 --> Config Class Initialized
INFO - 2021-04-06 09:37:30 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:30 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:30 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:30 --> URI Class Initialized
INFO - 2021-04-06 09:37:30 --> Router Class Initialized
INFO - 2021-04-06 09:37:30 --> Output Class Initialized
INFO - 2021-04-06 09:37:30 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:30 --> Input Class Initialized
INFO - 2021-04-06 09:37:30 --> Language Class Initialized
INFO - 2021-04-06 09:37:30 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:30 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:30 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:30 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:30 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:30 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:30 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:30 --> Model Class Initialized
INFO - 2021-04-06 09:37:30 --> Controller Class Initialized
INFO - 2021-04-06 09:37:30 --> Model Class Initialized
INFO - 2021-04-06 09:37:30 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:30 --> Total execution time: 0.0357
INFO - 2021-04-06 09:37:30 --> Config Class Initialized
INFO - 2021-04-06 09:37:30 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:30 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:30 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:30 --> URI Class Initialized
INFO - 2021-04-06 09:37:30 --> Router Class Initialized
INFO - 2021-04-06 09:37:30 --> Output Class Initialized
INFO - 2021-04-06 09:37:30 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:30 --> Input Class Initialized
INFO - 2021-04-06 09:37:30 --> Language Class Initialized
INFO - 2021-04-06 09:37:30 --> Config Class Initialized
INFO - 2021-04-06 09:37:30 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:30 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:30 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:30 --> URI Class Initialized
INFO - 2021-04-06 09:37:30 --> Loader Class Initialized
INFO - 2021-04-06 09:37:30 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:30 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:30 --> Output Class Initialized
INFO - 2021-04-06 09:37:30 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:30 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:30 --> Security Class Initialized
INFO - 2021-04-06 09:37:30 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:30 --> Input Class Initialized
INFO - 2021-04-06 09:37:30 --> Language Class Initialized
INFO - 2021-04-06 09:37:30 --> Config Class Initialized
INFO - 2021-04-06 09:37:30 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:30 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-06 09:37:30 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:30 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:30 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:30 --> URI Class Initialized
INFO - 2021-04-06 09:37:30 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:30 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:30 --> Router Class Initialized
INFO - 2021-04-06 09:37:30 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:30 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:30 --> Output Class Initialized
INFO - 2021-04-06 09:37:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:30 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:30 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:30 --> Input Class Initialized
INFO - 2021-04-06 09:37:30 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:30 --> Model Class Initialized
INFO - 2021-04-06 09:37:30 --> Controller Class Initialized
INFO - 2021-04-06 09:37:30 --> Loader Class Initialized
INFO - 2021-04-06 09:37:30 --> Model Class Initialized
INFO - 2021-04-06 09:37:30 --> PostList-Request--> array (
  'user_id' => '48',
  'hash_tag_id' => '41',
)
INFO - 2021-04-06 09:37:30 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:30 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:30 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'48\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'48\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    AND p.description like \'%bandla%\'
	
	
    AND NOT FIND_IN_SET(\'48\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-06 09:37:30 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:30 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:30 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:30 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:30 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '78',
    'user_id' => '48',
    'post_image' => 'images/6069ef449d5e6.png',
    'post_description' => '#bandla #funny joke pavan kalyan',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 22:24:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-06 09:37:30 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:30 --> Total execution time: 0.1812
DEBUG - 2021-04-06 09:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:30 --> Model Class Initialized
INFO - 2021-04-06 09:37:30 --> Controller Class Initialized
INFO - 2021-04-06 09:37:30 --> Model Class Initialized
INFO - 2021-04-06 09:37:30 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:30 --> Total execution time: 0.1067
INFO - 2021-04-06 09:37:30 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:30 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:30 --> Model Class Initialized
INFO - 2021-04-06 09:37:30 --> Controller Class Initialized
INFO - 2021-04-06 09:37:30 --> Model Class Initialized
INFO - 2021-04-06 09:37:30 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:30 --> Total execution time: 0.1077
INFO - 2021-04-06 09:37:31 --> Config Class Initialized
INFO - 2021-04-06 09:37:31 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:31 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:31 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:31 --> URI Class Initialized
INFO - 2021-04-06 09:37:31 --> Router Class Initialized
INFO - 2021-04-06 09:37:31 --> Output Class Initialized
INFO - 2021-04-06 09:37:31 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:31 --> Input Class Initialized
INFO - 2021-04-06 09:37:31 --> Language Class Initialized
INFO - 2021-04-06 09:37:31 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:31 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:31 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:31 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:31 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:31 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:31 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:31 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:31 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:31 --> Model Class Initialized
INFO - 2021-04-06 09:37:31 --> Controller Class Initialized
INFO - 2021-04-06 09:37:31 --> Model Class Initialized
INFO - 2021-04-06 09:37:31 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:31 --> Total execution time: 0.0274
INFO - 2021-04-06 09:37:33 --> Config Class Initialized
INFO - 2021-04-06 09:37:33 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:33 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:33 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:33 --> URI Class Initialized
INFO - 2021-04-06 09:37:33 --> Router Class Initialized
INFO - 2021-04-06 09:37:33 --> Output Class Initialized
INFO - 2021-04-06 09:37:33 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:33 --> Input Class Initialized
INFO - 2021-04-06 09:37:33 --> Language Class Initialized
INFO - 2021-04-06 09:37:33 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:33 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:33 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:33 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:33 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:33 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:33 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:33 --> Model Class Initialized
INFO - 2021-04-06 09:37:33 --> Controller Class Initialized
INFO - 2021-04-06 09:37:33 --> Model Class Initialized
INFO - 2021-04-06 09:37:33 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:33 --> Total execution time: 0.0310
INFO - 2021-04-06 09:37:35 --> Config Class Initialized
INFO - 2021-04-06 09:37:35 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:35 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:35 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:35 --> URI Class Initialized
INFO - 2021-04-06 09:37:35 --> Router Class Initialized
INFO - 2021-04-06 09:37:35 --> Output Class Initialized
INFO - 2021-04-06 09:37:35 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:35 --> Input Class Initialized
INFO - 2021-04-06 09:37:35 --> Language Class Initialized
INFO - 2021-04-06 09:37:35 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:35 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:35 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:35 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:35 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:35 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:35 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:35 --> Model Class Initialized
INFO - 2021-04-06 09:37:35 --> Controller Class Initialized
INFO - 2021-04-06 09:37:35 --> Model Class Initialized
INFO - 2021-04-06 09:37:35 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:35 --> Total execution time: 0.0298
INFO - 2021-04-06 09:37:39 --> Config Class Initialized
INFO - 2021-04-06 09:37:39 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:39 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:39 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:39 --> URI Class Initialized
INFO - 2021-04-06 09:37:39 --> Router Class Initialized
INFO - 2021-04-06 09:37:39 --> Output Class Initialized
INFO - 2021-04-06 09:37:39 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:39 --> Input Class Initialized
INFO - 2021-04-06 09:37:39 --> Language Class Initialized
INFO - 2021-04-06 09:37:39 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:39 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:39 --> Config Class Initialized
INFO - 2021-04-06 09:37:39 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:39 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:39 --> Config Class Initialized
INFO - 2021-04-06 09:37:39 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:39 --> Config Class Initialized
INFO - 2021-04-06 09:37:39 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:39 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:39 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:39 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:39 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:37:39 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:39 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:37:39 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:39 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:39 --> URI Class Initialized
INFO - 2021-04-06 09:37:39 --> URI Class Initialized
INFO - 2021-04-06 09:37:39 --> URI Class Initialized
INFO - 2021-04-06 09:37:39 --> Router Class Initialized
INFO - 2021-04-06 09:37:39 --> Router Class Initialized
INFO - 2021-04-06 09:37:39 --> Router Class Initialized
INFO - 2021-04-06 09:37:39 --> Output Class Initialized
INFO - 2021-04-06 09:37:39 --> Output Class Initialized
INFO - 2021-04-06 09:37:39 --> Security Class Initialized
INFO - 2021-04-06 09:37:39 --> Output Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:39 --> Input Class Initialized
INFO - 2021-04-06 09:37:39 --> Language Class Initialized
INFO - 2021-04-06 09:37:39 --> Security Class Initialized
INFO - 2021-04-06 09:37:39 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:39 --> Input Class Initialized
INFO - 2021-04-06 09:37:39 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:39 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:39 --> Language Class Initialized
INFO - 2021-04-06 09:37:39 --> Input Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:39 --> Language Class Initialized
INFO - 2021-04-06 09:37:39 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:39 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:39 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:39 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:39 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:39 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:39 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:39 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:39 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:39 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:39 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:39 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:39 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:39 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:39 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:39 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:39 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:39 --> Model Class Initialized
INFO - 2021-04-06 09:37:39 --> Controller Class Initialized
INFO - 2021-04-06 09:37:39 --> Model Class Initialized
INFO - 2021-04-06 09:37:39 --> PostList-Request--> array (
  'creator_user_id' => '48',
)
INFO - 2021-04-06 09:37:39 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'48\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'48\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    AND p.user_id = \'48\'
    
	
	
    AND NOT FIND_IN_SET(\'48\',p.hide) <> 0
    ORDER BY p.id DESC  '
INFO - 2021-04-06 09:37:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:39 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:39 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:39 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '78',
    'user_id' => '48',
    'post_image' => 'images/6069ef449d5e6.png',
    'post_description' => '#bandla #funny joke pavan kalyan',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 22:24:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '72',
    'user_id' => '48',
    'post_image' => 'images/60675fe4c1547.png',
    'post_description' => '#Modi #bangladesh funny',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '0',
    'cdate' => '2021-04-02 23:48:12',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-06 09:37:39 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:39 --> Total execution time: 0.2062
DEBUG - 2021-04-06 09:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:39 --> Model Class Initialized
INFO - 2021-04-06 09:37:39 --> Controller Class Initialized
INFO - 2021-04-06 09:37:39 --> Model Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:39 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:39 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:39 --> Total execution time: 0.1117
INFO - 2021-04-06 09:37:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:39 --> Model Class Initialized
INFO - 2021-04-06 09:37:39 --> Controller Class Initialized
INFO - 2021-04-06 09:37:39 --> Model Class Initialized
INFO - 2021-04-06 09:37:39 --> album-Request--> array (
  'user_id' => '48',
)
INFO - 2021-04-06 09:37:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:39 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:39 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-06 09:37:39 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:39 --> Total execution time: 0.1207
INFO - 2021-04-06 09:37:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:39 --> Model Class Initialized
INFO - 2021-04-06 09:37:39 --> Controller Class Initialized
INFO - 2021-04-06 09:37:39 --> Model Class Initialized
INFO - 2021-04-06 09:37:39 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:39 --> Total execution time: 0.1228
INFO - 2021-04-06 09:37:40 --> Config Class Initialized
INFO - 2021-04-06 09:37:40 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:40 --> Config Class Initialized
INFO - 2021-04-06 09:37:40 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:40 --> UTF-8 Support Enabled
DEBUG - 2021-04-06 09:37:40 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:40 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:40 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:40 --> URI Class Initialized
INFO - 2021-04-06 09:37:40 --> URI Class Initialized
INFO - 2021-04-06 09:37:40 --> Router Class Initialized
INFO - 2021-04-06 09:37:40 --> Router Class Initialized
INFO - 2021-04-06 09:37:40 --> Output Class Initialized
INFO - 2021-04-06 09:37:40 --> Output Class Initialized
INFO - 2021-04-06 09:37:40 --> Security Class Initialized
INFO - 2021-04-06 09:37:40 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-06 09:37:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:40 --> Input Class Initialized
INFO - 2021-04-06 09:37:40 --> Input Class Initialized
INFO - 2021-04-06 09:37:40 --> Language Class Initialized
INFO - 2021-04-06 09:37:40 --> Language Class Initialized
INFO - 2021-04-06 09:37:40 --> Loader Class Initialized
INFO - 2021-04-06 09:37:40 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-06 09:37:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:40 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:40 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:40 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:40 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:40 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:40 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:40 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:40 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:40 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:40 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:40 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:40 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:40 --> Model Class Initialized
INFO - 2021-04-06 09:37:40 --> Controller Class Initialized
DEBUG - 2021-04-06 09:37:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:40 --> Model Class Initialized
INFO - 2021-04-06 09:37:40 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:40 --> Total execution time: 0.0761
INFO - 2021-04-06 09:37:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:40 --> Model Class Initialized
INFO - 2021-04-06 09:37:40 --> Controller Class Initialized
INFO - 2021-04-06 09:37:40 --> Model Class Initialized
INFO - 2021-04-06 09:37:40 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:40 --> Total execution time: 0.0779
INFO - 2021-04-06 09:37:43 --> Config Class Initialized
INFO - 2021-04-06 09:37:43 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:43 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:43 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:43 --> URI Class Initialized
INFO - 2021-04-06 09:37:43 --> Router Class Initialized
INFO - 2021-04-06 09:37:43 --> Output Class Initialized
INFO - 2021-04-06 09:37:43 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:43 --> Input Class Initialized
INFO - 2021-04-06 09:37:43 --> Language Class Initialized
INFO - 2021-04-06 09:37:43 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:43 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:43 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:43 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:43 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:43 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:43 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:43 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:43 --> Model Class Initialized
INFO - 2021-04-06 09:37:43 --> Controller Class Initialized
INFO - 2021-04-06 09:37:43 --> Model Class Initialized
INFO - 2021-04-06 09:37:43 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '48',
)
INFO - 2021-04-06 09:37:43 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'48\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'48\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'48\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-06 09:37:43 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '78',
    'user_id' => '48',
    'post_image' => 'images/6069ef449d5e6.png',
    'post_description' => '#bandla #funny joke pavan kalyan',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 22:24:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '77',
    'user_id' => '51',
    'post_image' => 'images/6069cd5382a8a.png',
    'post_description' => '#corona funny @abhi #joke #men',
    'commentids' => '1',
    'name' => 'Adithya P',
    'handle_name' => '@adithyap',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 19:59:39',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '73',
    'user_id' => '46',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'Test #test @sanjith',
    'commentids' => '1',
    'name' => 'Sanjith',
    'handle_name' => '@sanjith',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-03 11:48:23',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '72',
    'user_id' => '48',
    'post_image' => 'images/60675fe4c1547.png',
    'post_description' => '#Modi #bangladesh funny',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '0',
    'cdate' => '2021-04-02 23:48:12',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '71',
    'user_id' => '41',
    'post_image' => 'images/6055ff05ca01e.png',
    'post_description' => '#brahmi #joke funny @abinash12',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-20 19:26:21',
    'comment_count' => '2',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  5 => 
  array (
    'id' => '70',
    'user_id' => '41',
    'post_image' => 'images/604e272559350.png',
    'post_description' => '#funny #joke test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '4',
    'down_vote_count' => '0',
    'cdate' => '2021-03-14 20:39:25',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '69',
    'user_id' => '41',
    'post_image' => 'images/604e26d69f5f4.png',
    'post_description' => '#funny #joke #test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '3',
    'cdate' => '2021-03-14 20:38:06',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  7 => 
  array (
    'id' => '68',
    'user_id' => '44',
    'post_image' => 'images/6046281c9be91.png',
    'post_description' => '#exams funny #brahmi @sai ',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '2',
    'cdate' => '2021-03-08 19:05:24',
    'comment_count' => '2',
    'post_type_id' => '0',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '67',
    'user_id' => '44',
    'post_image' => 'images/603ef9f56b329.png',
    'post_description' => '#vantalakka maa tv @abinash12',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-03 08:22:37',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
)
INFO - 2021-04-06 09:37:43 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:43 --> Total execution time: 0.0334
INFO - 2021-04-06 09:37:44 --> Config Class Initialized
INFO - 2021-04-06 09:37:44 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:44 --> Config Class Initialized
INFO - 2021-04-06 09:37:44 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:44 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:44 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:37:44 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:44 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:44 --> Config Class Initialized
INFO - 2021-04-06 09:37:44 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:44 --> URI Class Initialized
INFO - 2021-04-06 09:37:44 --> URI Class Initialized
INFO - 2021-04-06 09:37:44 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:44 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:44 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:44 --> URI Class Initialized
INFO - 2021-04-06 09:37:44 --> Router Class Initialized
INFO - 2021-04-06 09:37:44 --> Router Class Initialized
INFO - 2021-04-06 09:37:44 --> Config Class Initialized
INFO - 2021-04-06 09:37:44 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:44 --> Output Class Initialized
INFO - 2021-04-06 09:37:44 --> Output Class Initialized
INFO - 2021-04-06 09:37:44 --> Output Class Initialized
INFO - 2021-04-06 09:37:44 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:44 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:44 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:44 --> Security Class Initialized
INFO - 2021-04-06 09:37:44 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:44 --> Input Class Initialized
INFO - 2021-04-06 09:37:44 --> URI Class Initialized
INFO - 2021-04-06 09:37:44 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:44 --> Input Class Initialized
INFO - 2021-04-06 09:37:44 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:44 --> Language Class Initialized
INFO - 2021-04-06 09:37:44 --> Output Class Initialized
INFO - 2021-04-06 09:37:44 --> Loader Class Initialized
INFO - 2021-04-06 09:37:45 --> Input Class Initialized
INFO - 2021-04-06 09:37:45 --> Loader Class Initialized
INFO - 2021-04-06 09:37:45 --> Config Class Initialized
INFO - 2021-04-06 09:37:45 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:45 --> Security Class Initialized
INFO - 2021-04-06 09:37:45 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Config Class Initialized
INFO - 2021-04-06 09:37:45 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:45 --> Config Class Initialized
INFO - 2021-04-06 09:37:45 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:45 --> Input Class Initialized
INFO - 2021-04-06 09:37:45 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:45 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:45 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
DEBUG - 2021-04-06 09:37:45 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:45 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:45 --> URI Class Initialized
DEBUG - 2021-04-06 09:37:45 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:45 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Loader Class Initialized
INFO - 2021-04-06 09:37:45 --> URI Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:45 --> Router Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:45 --> Loader Class Initialized
INFO - 2021-04-06 09:37:45 --> Config Class Initialized
INFO - 2021-04-06 09:37:45 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:45 --> Output Class Initialized
INFO - 2021-04-06 09:37:45 --> Output Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:45 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:45 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:45 --> Security Class Initialized
INFO - 2021-04-06 09:37:45 --> Security Class Initialized
INFO - 2021-04-06 09:37:45 --> URI Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:45 --> URI Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:45 --> Input Class Initialized
INFO - 2021-04-06 09:37:45 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:45 --> Input Class Initialized
INFO - 2021-04-06 09:37:45 --> Router Class Initialized
INFO - 2021-04-06 09:37:45 --> Router Class Initialized
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:45 --> Output Class Initialized
INFO - 2021-04-06 09:37:45 --> Output Class Initialized
INFO - 2021-04-06 09:37:45 --> Language Class Initialized
INFO - 2021-04-06 09:37:45 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Security Class Initialized
INFO - 2021-04-06 09:37:45 --> Security Class Initialized
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:45 --> Input Class Initialized
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:45 --> Input Class Initialized
INFO - 2021-04-06 09:37:45 --> Language Class Initialized
INFO - 2021-04-06 09:37:45 --> Config Class Initialized
INFO - 2021-04-06 09:37:45 --> Language Class Initialized
INFO - 2021-04-06 09:37:45 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:45 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-06 09:37:45 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:45 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Loader Class Initialized
INFO - 2021-04-06 09:37:45 --> URI Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:45 --> Router Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Loader Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:45 --> Output Class Initialized
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:45 --> Security Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.4048
DEBUG - 2021-04-06 09:37:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:45 --> Input Class Initialized
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Language Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.4070
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.4009
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:45 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:45 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.4972
INFO - 2021-04-06 09:37:45 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.3992
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.4001
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:45 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.4098
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:45 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.2197
DEBUG - 2021-04-06 09:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Controller Class Initialized
INFO - 2021-04-06 09:37:45 --> Model Class Initialized
INFO - 2021-04-06 09:37:45 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:45 --> Total execution time: 0.3231
INFO - 2021-04-06 09:37:51 --> Config Class Initialized
INFO - 2021-04-06 09:37:51 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:51 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:51 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:51 --> URI Class Initialized
INFO - 2021-04-06 09:37:51 --> Router Class Initialized
INFO - 2021-04-06 09:37:51 --> Output Class Initialized
INFO - 2021-04-06 09:37:51 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:51 --> Input Class Initialized
INFO - 2021-04-06 09:37:51 --> Language Class Initialized
INFO - 2021-04-06 09:37:51 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:51 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:51 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:51 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:51 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:51 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:51 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:51 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:51 --> Model Class Initialized
INFO - 2021-04-06 09:37:51 --> Controller Class Initialized
INFO - 2021-04-06 09:37:51 --> Model Class Initialized
INFO - 2021-04-06 09:37:51 --> PostList-Request--> array (
  'from' => '10',
  'to' => '19',
  'user_id' => '48',
)
INFO - 2021-04-06 09:37:51 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'48\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'48\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'48\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 10, 19 '
INFO - 2021-04-06 09:37:51 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '65',
    'user_id' => '41',
    'post_image' => 'images/603bc6ac72cb3.png',
    'post_description' => 'Brahmi #funny @brahmi',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '4',
    'cdate' => '2021-02-28 22:07:00',
    'comment_count' => '3',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  1 => 
  array (
    'id' => '63',
    'user_id' => '41',
    'post_image' => 'images/60329602f2495.png',
    'post_description' => 'njsjdjjndnmsnsnnxjd dndjjshebxbbsmsjjdhdbbsbsnjz sbsbsbhnsnxbbxbbsbebshshxhbdbsbsbz ssnnsbdbb@+$+#(#)# @dhsjsjnsn #hdbbsbwh @hshegsvdn @abinash12 #hsbsbwhsbdbvdb @ndbebbdbxbbnsnsbbsbzbb
 @ndbsbbdbxvsvvs @nsbhsbbbsbsbsbsbbsbsbsbsbbsbssbbsbsbsbsbsbsbsbsbsbwbbdbcncnnffnbdjrkidhegwgwggehdkkfkfkrkroorjrjrjrjrjrjrjjrjrjrjdjrjjrr+ndndjjdjdndndnd',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '3',
    'down_vote_count' => '2',
    'cdate' => '2021-02-21 22:48:58',
    'comment_count' => '2',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '62',
    'user_id' => '41',
    'post_image' => 'images/603292e1a082d.png',
    'post_description' => 'Brami ',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '3',
    'cdate' => '2021-02-21 22:35:37',
    'comment_count' => '7',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '61',
    'user_id' => '41',
    'post_image' => 'images/60328cce70587.png',
    'post_description' => 'Post test @abinash12 #meme',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-21 22:09:42',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  4 => 
  array (
    'id' => '60',
    'user_id' => '32',
    'post_image' => 'images/60447bf129d39.png',
    'post_description' => 'Mahindra  Thor 2',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '1',
    'down_vote_count' => '3',
    'cdate' => '2021-02-21 19:17:10',
    'comment_count' => '10',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '59',
    'user_id' => '32',
    'post_image' => 'images/603255878891c.png',
    'post_description' => 'Some text',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '3',
    'cdate' => '2021-02-21 18:13:51',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  6 => 
  array (
    'id' => '58',
    'user_id' => '32',
    'post_image' => 'images/602d0a73005ae.png',
    'post_description' => 'What is #Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry #Lorem Ipsum has been the industry\'s standard dummy text ever @since the 1500s when an #unknown printer took a galley of type and scrambled it to make a type specimen book it has?',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '2',
    'down_vote_count' => '3',
    'cdate' => '2021-02-17 17:52:11',
    'comment_count' => '20',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '57',
    'user_id' => '33',
    'post_image' => 'images/602d040c8e6bc.png',
    'post_description' => '#funny moment',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-17 17:24:52',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  8 => 
  array (
    'id' => '53',
    'user_id' => '33',
    'post_image' => 'images/602d040b674e5.png',
    'post_description' => '#funny moment',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '2',
    'down_vote_count' => '1',
    'cdate' => '2021-02-17 17:24:51',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  9 => 
  array (
    'id' => '52',
    'user_id' => '33',
    'post_image' => 'images/602cd1e4c48c9.png',
    'post_description' => 'The #INDIAN flag @pardu #India',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '3',
    'cdate' => '2021-02-17 13:17:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  10 => 
  array (
    'id' => '51',
    'user_id' => '41',
    'post_image' => 'images/602cc7d90705f.png',
    'post_description' => 'Modi meme',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-17 13:08:01',
    'comment_count' => '2',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  11 => 
  array (
    'id' => '47',
    'user_id' => '41',
    'post_image' => 'images/602bd576eaa5e.png',
    'post_description' => 'undefined',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-16 19:53:50',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  12 => 
  array (
    'id' => '46',
    'user_id' => '41',
    'post_image' => 'images/602bc35d5b2b0.png',
    'post_description' => 'Brahmi testing',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '2',
    'cdate' => '2021-02-16 18:36:37',
    'comment_count' => '6',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  13 => 
  array (
    'id' => '45',
    'user_id' => '32',
    'post_image' => 'images/6029637d9da64.png',
    'post_description' => 'Nice bike',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '2',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 23:23:01',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  14 => 
  array (
    'id' => '44',
    'user_id' => '33',
    'post_image' => 'images/602950daa424e.png',
    'post_description' => 'Lion',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '2',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 22:03:30',
    'comment_count' => '7',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  15 => 
  array (
    'id' => '43',
    'user_id' => '33',
    'post_image' => 'images/60294e9c17843.png',
    'post_description' => 'Asdfg',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 21:53:56',
    'comment_count' => '8',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  16 => 
  array (
    'id' => '42',
    'user_id' => '33',
    'post_image' => 'images/60294d99936a2.png',
    'post_description' => 'Qwertyx',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '2',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 21:49:37',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  17 => 
  array (
    'id' => '41',
    'user_id' => '33',
    'post_image' => 'images/60294b1fd020d.png',
    'post_description' => 'Qwerty',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '1',
    'cdate' => '2021-02-14 21:39:03',
    'comment_count' => '3',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  18 => 
  array (
    'id' => '40',
    'user_id' => '33',
    'post_image' => 'images/60294a2ab6335.png',
    'post_description' => 'Qwer',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 21:34:58',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-06 09:37:51 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:51 --> Total execution time: 0.0382
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:53 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:53 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:53 --> URI Class Initialized
INFO - 2021-04-06 09:37:53 --> Router Class Initialized
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:53 --> Output Class Initialized
INFO - 2021-04-06 09:37:53 --> Security Class Initialized
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:53 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:53 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:37:53 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:53 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:53 --> URI Class Initialized
INFO - 2021-04-06 09:37:53 --> URI Class Initialized
DEBUG - 2021-04-06 09:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:53 --> Input Class Initialized
INFO - 2021-04-06 09:37:53 --> Language Class Initialized
INFO - 2021-04-06 09:37:53 --> Router Class Initialized
INFO - 2021-04-06 09:37:53 --> Router Class Initialized
INFO - 2021-04-06 09:37:53 --> Loader Class Initialized
INFO - 2021-04-06 09:37:53 --> Output Class Initialized
DEBUG - 2021-04-06 09:37:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:53 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:53 --> Security Class Initialized
INFO - 2021-04-06 09:37:53 --> Helper loaded: form_helper
DEBUG - 2021-04-06 09:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:53 --> Input Class Initialized
INFO - 2021-04-06 09:37:53 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:53 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:53 --> Language Class Initialized
INFO - 2021-04-06 09:37:53 --> Output Class Initialized
INFO - 2021-04-06 09:37:53 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:53 --> Input Class Initialized
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:53 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:53 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:53 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:53 --> URI Class Initialized
INFO - 2021-04-06 09:37:53 --> Router Class Initialized
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:53 --> Output Class Initialized
DEBUG - 2021-04-06 09:37:53 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:53 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:53 --> Security Class Initialized
INFO - 2021-04-06 09:37:53 --> URI Class Initialized
DEBUG - 2021-04-06 09:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:53 --> Input Class Initialized
INFO - 2021-04-06 09:37:53 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:53 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:53 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:53 --> Language Class Initialized
INFO - 2021-04-06 09:37:53 --> URI Class Initialized
INFO - 2021-04-06 09:37:53 --> Output Class Initialized
INFO - 2021-04-06 09:37:53 --> Router Class Initialized
INFO - 2021-04-06 09:37:53 --> Security Class Initialized
INFO - 2021-04-06 09:37:53 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:53 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:53 --> Input Class Initialized
INFO - 2021-04-06 09:37:53 --> Output Class Initialized
INFO - 2021-04-06 09:37:53 --> Loader Class Initialized
INFO - 2021-04-06 09:37:53 --> Helper loaded: form_helper
DEBUG - 2021-04-06 09:37:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:53 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Security Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:53 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:53 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:53 --> Input Class Initialized
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:53 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:53 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:53 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:53 --> URI Class Initialized
INFO - 2021-04-06 09:37:53 --> Router Class Initialized
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:53 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:53 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:53 --> Loader Class Initialized
INFO - 2021-04-06 09:37:53 --> Output Class Initialized
DEBUG - 2021-04-06 09:37:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:53 --> Config Class Initialized
INFO - 2021-04-06 09:37:53 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:53 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:53 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.4008
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 1.0909
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.9035
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.5965
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.6050
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 1.1803
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.7053
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.5901
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.4948
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.7965
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.5003
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.7985
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Config Class Initialized
INFO - 2021-04-06 09:37:54 --> Hooks Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.5026
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
DEBUG - 2021-04-06 09:37:54 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:37:54 --> Utf8 Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.6084
INFO - 2021-04-06 09:37:54 --> URI Class Initialized
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
INFO - 2021-04-06 09:37:54 --> Router Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.9910
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Output Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.8995
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Security Class Initialized
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.9961
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:37:54 --> Input Class Initialized
INFO - 2021-04-06 09:37:54 --> Language Class Initialized
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Loader Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:37:54 --> Helper loaded: security_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: form_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: url_helper
INFO - 2021-04-06 09:37:54 --> Helper loaded: common_helper
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.4033
INFO - 2021-04-06 09:37:54 --> Database Driver Class Initialized
INFO - 2021-04-06 09:37:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:37:54 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Controller Class Initialized
INFO - 2021-04-06 09:37:54 --> Model Class Initialized
INFO - 2021-04-06 09:37:54 --> Final output sent to browser
DEBUG - 2021-04-06 09:37:54 --> Total execution time: 0.2106
INFO - 2021-04-06 09:38:00 --> Config Class Initialized
INFO - 2021-04-06 09:38:00 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:38:00 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:00 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:00 --> URI Class Initialized
INFO - 2021-04-06 09:38:00 --> Router Class Initialized
INFO - 2021-04-06 09:38:00 --> Output Class Initialized
INFO - 2021-04-06 09:38:00 --> Security Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:00 --> Input Class Initialized
INFO - 2021-04-06 09:38:00 --> Language Class Initialized
INFO - 2021-04-06 09:38:00 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:00 --> Config Class Initialized
INFO - 2021-04-06 09:38:00 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:00 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:00 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:00 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:00 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:38:00 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:00 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:00 --> URI Class Initialized
INFO - 2021-04-06 09:38:00 --> Router Class Initialized
INFO - 2021-04-06 09:38:00 --> Output Class Initialized
INFO - 2021-04-06 09:38:00 --> Security Class Initialized
INFO - 2021-04-06 09:38:00 --> Config Class Initialized
INFO - 2021-04-06 09:38:00 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:00 --> Input Class Initialized
INFO - 2021-04-06 09:38:00 --> Language Class Initialized
DEBUG - 2021-04-06 09:38:00 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:00 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:00 --> URI Class Initialized
INFO - 2021-04-06 09:38:00 --> Router Class Initialized
INFO - 2021-04-06 09:38:00 --> Loader Class Initialized
INFO - 2021-04-06 09:38:00 --> Config Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:00 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:00 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:00 --> Output Class Initialized
INFO - 2021-04-06 09:38:00 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:00 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:00 --> Security Class Initialized
INFO - 2021-04-06 09:38:00 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:00 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-06 09:38:00 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:00 --> Input Class Initialized
INFO - 2021-04-06 09:38:00 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:00 --> Language Class Initialized
INFO - 2021-04-06 09:38:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:00 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:00 --> URI Class Initialized
INFO - 2021-04-06 09:38:00 --> Router Class Initialized
INFO - 2021-04-06 09:38:00 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:00 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:00 --> Config Class Initialized
INFO - 2021-04-06 09:38:00 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> Controller Class Initialized
INFO - 2021-04-06 09:38:00 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> Output Class Initialized
INFO - 2021-04-06 09:38:00 --> PostList-Request--> array (
  'from' => '20',
  'to' => '29',
  'user_id' => '48',
)
INFO - 2021-04-06 09:38:00 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'48\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'48\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'48\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 20, 29 '
INFO - 2021-04-06 09:38:00 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:00 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:38:00 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:00 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:00 --> Security Class Initialized
INFO - 2021-04-06 09:38:00 --> URI Class Initialized
INFO - 2021-04-06 09:38:00 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '51',
    'user_id' => '41',
    'post_image' => 'images/602cc7d90705f.png',
    'post_description' => 'Modi meme',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-17 13:08:01',
    'comment_count' => '2',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '47',
    'user_id' => '41',
    'post_image' => 'images/602bd576eaa5e.png',
    'post_description' => 'undefined',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-16 19:53:50',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  2 => 
  array (
    'id' => '46',
    'user_id' => '41',
    'post_image' => 'images/602bc35d5b2b0.png',
    'post_description' => 'Brahmi testing',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '2',
    'cdate' => '2021-02-16 18:36:37',
    'comment_count' => '6',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '45',
    'user_id' => '32',
    'post_image' => 'images/6029637d9da64.png',
    'post_description' => 'Nice bike',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '2',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 23:23:01',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  4 => 
  array (
    'id' => '44',
    'user_id' => '33',
    'post_image' => 'images/602950daa424e.png',
    'post_description' => 'Lion',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '2',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 22:03:30',
    'comment_count' => '7',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '43',
    'user_id' => '33',
    'post_image' => 'images/60294e9c17843.png',
    'post_description' => 'Asdfg',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 21:53:56',
    'comment_count' => '8',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  6 => 
  array (
    'id' => '42',
    'user_id' => '33',
    'post_image' => 'images/60294d99936a2.png',
    'post_description' => 'Qwertyx',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '2',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 21:49:37',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '41',
    'user_id' => '33',
    'post_image' => 'images/60294b1fd020d.png',
    'post_description' => 'Qwerty',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '1',
    'cdate' => '2021-02-14 21:39:03',
    'comment_count' => '3',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  8 => 
  array (
    'id' => '40',
    'user_id' => '33',
    'post_image' => 'images/60294a2ab6335.png',
    'post_description' => 'Qwer',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '2',
    'cdate' => '2021-02-14 21:34:58',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  9 => 
  array (
    'id' => '39',
    'user_id' => '33',
    'post_image' => 'images/602948b0da5df.png',
    'post_description' => 'Detyu',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '2',
    'down_vote_count' => '1',
    'cdate' => '2021-02-14 21:28:40',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  10 => 
  array (
    'id' => '38',
    'user_id' => '33',
    'post_image' => 'images/602947906af65.png',
    'post_description' => 'Qwe',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '1',
    'cdate' => '2021-02-14 21:23:52',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  11 => 
  array (
    'id' => '37',
    'user_id' => '33',
    'post_image' => 'images/6029459c5b198.png',
    'post_description' => 'Imagecrop2 p ',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '1',
    'cdate' => '2021-02-14 21:15:32',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  12 => 
  array (
    'id' => '36',
    'user_id' => '33',
    'post_image' => 'images/602944d413277.png',
    'post_description' => 'Image cropping2',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '1',
    'cdate' => '2021-02-14 21:12:12',
    'comment_count' => '2',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  13 => 
  array (
    'id' => '35',
    'user_id' => '33',
    'post_image' => 'images/60294237cc19b.png',
    'post_description' => 'Imagecropp',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '1',
    'cdate' => '2021-02-14 21:01:03',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  14 => 
  array (
    'id' => '34',
    'user_id' => '33',
    'post_image' => 'images/60294015a784c.png',
    'post_description' => 'Image cropping',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-02-14 20:51:57',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  15 => 
  array (
    'id' => '33',
    'user_id' => '32',
    'post_image' => 'images/60287f6651c32.png',
    'post_description' => 'This is test by #sravan ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-02-14 07:09:50',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  16 => 
  array (
    'id' => '32',
    'user_id' => '32',
    'post_image' => 'images/60287c4c7689a.png',
    'post_description' => 'Under Armour new #armour collection edited',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-02-13 22:06:46',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  17 => 
  array (
    'id' => '31',
    'user_id' => '33',
    'post_image' => 'images/602423b3c1b9d.png',
    'post_description' => 'Thar',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-02-10 23:49:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  18 => 
  array (
    'id' => '30',
    'user_id' => '33',
    'post_image' => 'images/60241d5b1931a.png',
    'post_description' => 'Dhanush',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '4',
    'down_vote_count' => '1',
    'cdate' => '2021-02-10 23:22:27',
    'comment_count' => '20',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  19 => 
  array (
    'id' => '29',
    'user_id' => '33',
    'post_image' => 'images/60240403c3e7c.png',
    'post_description' => 'Pardu',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '4',
    'cdate' => '2021-02-10 21:04:46',
    'comment_count' => '6',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  20 => 
  array (
    'id' => '27',
    'user_id' => '33',
    'post_image' => 'images/6023fc3a93cc5.png',
    'post_description' => 'Pardu 2',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '1',
    'cdate' => '2021-02-10 18:14:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  21 => 
  array (
    'id' => '26',
    'user_id' => '31',
    'post_image' => 'images/6023b668342f5.png',
    'post_description' => 'sravan inserted by',
    'commentids' => '1',
    'name' => 'Test User',
    'handle_name' => '@user',
    'profile_image' => 'images/600da34bc49bf.png',
    'up_vote_count' => '0',
    'down_vote_count' => '2',
    'cdate' => '2021-02-10 16:03:12',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  22 => 
  array (
    'id' => '25',
    'user_id' => '31',
    'post_image' => 'images/6023b658bc94f.png',
    'post_description' => 'sravan edited by',
    'commentids' => '1',
    'name' => 'Test User',
    'handle_name' => '@user',
    'profile_image' => 'images/600da34bc49bf.png',
    'up_vote_count' => '1',
    'down_vote_count' => '1',
    'cdate' => '2021-02-10 15:59:57',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  23 => 
  array (
    'id' => '24',
    'user_id' => '31',
    'post_image' => 'images/6023b5908e9f0.png',
    'post_description' => 'post_description',
    'commentids' => '1',
    'name' => 'Test User',
    'handle_name' => '@user',
    'profile_image' => 'images/600da34bc49bf.png',
    'up_vote_count' => '0',
    'down_vote_count' => '1',
    'cdate' => '2021-02-10 15:59:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  24 => 
  array (
    'id' => '18',
    'user_id' => '33',
    'post_image' => 'images/600da0d2b49ad.png',
    'post_description' => 'Diploma #bramhanandam
',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-01-24 22:01:14',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  25 => 
  array (
    'id' => '17',
    'user_id' => '33',
    'post_image' => 'images/600d9d66b8cf6.png',
    'post_description' => '#sinde tollywood ',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '1',
    'down_vote_count' => '1',
    'cdate' => '2021-01-24 21:46:38',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  26 => 
  array (
    'id' => '16',
    'user_id' => '33',
    'post_image' => 'images/600d9d1f465d8.png',
    'post_description' => 'Tollywood #venkatesh',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '2',
    'cdate' => '2021-01-24 21:45:27',
    'comment_count' => '5',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  27 => 
  array (
    'id' => '15',
    'user_id' => '33',
    'post_image' => 'images/6023d42d72aae.png',
    'post_description' => 'Related #jokes #tollywood',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-01-24 21:44:26',
    'comment_count' => '9',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  28 => 
  array (
    'id' => '14',
    'user_id' => '33',
    'post_image' => 'images/600d9c8f2ad97.png',
    'post_description' => 'Sai #saikiran fight seen #tollywood',
    'commentids' => '1',
    'name' => 'ctest',
    'handle_name' => '@ctest',
    'profile_image' => 'images/600da3f91d4ba.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-01-24 21:43:03',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-06 09:38:00 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:00 --> Total execution time: 0.2819
INFO - 2021-04-06 09:38:00 --> Router Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:00 --> Input Class Initialized
INFO - 2021-04-06 09:38:00 --> Language Class Initialized
INFO - 2021-04-06 09:38:00 --> Output Class Initialized
INFO - 2021-04-06 09:38:00 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:00 --> Security Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:00 --> Input Class Initialized
INFO - 2021-04-06 09:38:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:00 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:00 --> Language Class Initialized
INFO - 2021-04-06 09:38:00 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:00 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:00 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:00 --> Loader Class Initialized
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> Controller Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:00 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> PostList-Request--> array (
  'creator_user_id' => '48',
)
INFO - 2021-04-06 09:38:00 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'48\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'48\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    AND p.user_id = \'48\'
    
	
	
    AND NOT FIND_IN_SET(\'48\',p.hide) <> 0
    ORDER BY p.id DESC  '
INFO - 2021-04-06 09:38:00 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:00 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:00 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '78',
    'user_id' => '48',
    'post_image' => 'images/6069ef449d5e6.png',
    'post_description' => '#bandla #funny joke pavan kalyan',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 22:24:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '72',
    'user_id' => '48',
    'post_image' => 'images/60675fe4c1547.png',
    'post_description' => '#Modi #bangladesh funny',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '0',
    'cdate' => '2021-04-02 23:48:12',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-06 09:38:00 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:00 --> Total execution time: 0.1961
INFO - 2021-04-06 09:38:00 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:00 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:00 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:00 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:00 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> Controller Class Initialized
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> album-Request--> array (
  'user_id' => '48',
)
INFO - 2021-04-06 09:38:00 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-06 09:38:00 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:00 --> Total execution time: 0.1151
INFO - 2021-04-06 09:38:00 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:00 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:00 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:00 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:00 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> Controller Class Initialized
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:00 --> Total execution time: 0.1987
INFO - 2021-04-06 09:38:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> Controller Class Initialized
INFO - 2021-04-06 09:38:00 --> Model Class Initialized
INFO - 2021-04-06 09:38:00 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:00 --> Total execution time: 0.1931
INFO - 2021-04-06 09:38:01 --> Config Class Initialized
INFO - 2021-04-06 09:38:01 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:38:01 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:01 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:01 --> URI Class Initialized
INFO - 2021-04-06 09:38:01 --> Router Class Initialized
INFO - 2021-04-06 09:38:01 --> Output Class Initialized
INFO - 2021-04-06 09:38:01 --> Security Class Initialized
DEBUG - 2021-04-06 09:38:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:01 --> Input Class Initialized
INFO - 2021-04-06 09:38:01 --> Language Class Initialized
INFO - 2021-04-06 09:38:01 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:01 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:01 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:01 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:01 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:01 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:01 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:01 --> Config Class Initialized
INFO - 2021-04-06 09:38:01 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:01 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:38:01 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:01 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:01 --> URI Class Initialized
DEBUG - 2021-04-06 09:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:01 --> Router Class Initialized
INFO - 2021-04-06 09:38:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:01 --> Model Class Initialized
INFO - 2021-04-06 09:38:01 --> Controller Class Initialized
INFO - 2021-04-06 09:38:01 --> Model Class Initialized
INFO - 2021-04-06 09:38:01 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:01 --> Total execution time: 0.0282
INFO - 2021-04-06 09:38:01 --> Output Class Initialized
INFO - 2021-04-06 09:38:01 --> Security Class Initialized
DEBUG - 2021-04-06 09:38:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:01 --> Input Class Initialized
INFO - 2021-04-06 09:38:01 --> Language Class Initialized
INFO - 2021-04-06 09:38:01 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:01 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:01 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:01 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:01 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:01 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:01 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:01 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:01 --> Model Class Initialized
INFO - 2021-04-06 09:38:01 --> Controller Class Initialized
INFO - 2021-04-06 09:38:01 --> Model Class Initialized
INFO - 2021-04-06 09:38:01 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:01 --> Total execution time: 0.0291
INFO - 2021-04-06 09:38:48 --> Config Class Initialized
INFO - 2021-04-06 09:38:48 --> Config Class Initialized
INFO - 2021-04-06 09:38:48 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:48 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:38:48 --> UTF-8 Support Enabled
DEBUG - 2021-04-06 09:38:48 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:48 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:48 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:48 --> URI Class Initialized
INFO - 2021-04-06 09:38:48 --> URI Class Initialized
INFO - 2021-04-06 09:38:48 --> Router Class Initialized
INFO - 2021-04-06 09:38:48 --> Router Class Initialized
INFO - 2021-04-06 09:38:48 --> Output Class Initialized
INFO - 2021-04-06 09:38:48 --> Output Class Initialized
INFO - 2021-04-06 09:38:48 --> Security Class Initialized
INFO - 2021-04-06 09:38:48 --> Security Class Initialized
DEBUG - 2021-04-06 09:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-06 09:38:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:48 --> Input Class Initialized
INFO - 2021-04-06 09:38:48 --> Input Class Initialized
INFO - 2021-04-06 09:38:48 --> Language Class Initialized
INFO - 2021-04-06 09:38:48 --> Language Class Initialized
INFO - 2021-04-06 09:38:48 --> Config Class Initialized
INFO - 2021-04-06 09:38:48 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:38:48 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:48 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:48 --> URI Class Initialized
INFO - 2021-04-06 09:38:48 --> Loader Class Initialized
INFO - 2021-04-06 09:38:48 --> Router Class Initialized
DEBUG - 2021-04-06 09:38:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:48 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:48 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:48 --> Output Class Initialized
INFO - 2021-04-06 09:38:48 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:48 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:48 --> Security Class Initialized
INFO - 2021-04-06 09:38:48 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:48 --> Helper loaded: form_helper
DEBUG - 2021-04-06 09:38:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:48 --> Input Class Initialized
INFO - 2021-04-06 09:38:48 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:48 --> Language Class Initialized
INFO - 2021-04-06 09:38:48 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:48 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:48 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:48 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:48 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:48 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:48 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:48 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:48 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:48 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:48 --> Model Class Initialized
INFO - 2021-04-06 09:38:48 --> Controller Class Initialized
INFO - 2021-04-06 09:38:48 --> Model Class Initialized
INFO - 2021-04-06 09:38:48 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:48 --> Total execution time: 0.1092
INFO - 2021-04-06 09:38:49 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:49 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:49 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:38:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:49 --> Model Class Initialized
INFO - 2021-04-06 09:38:49 --> Controller Class Initialized
INFO - 2021-04-06 09:38:49 --> Model Class Initialized
INFO - 2021-04-06 09:38:49 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
INFO - 2021-04-06 09:38:49 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
DEBUG - 2021-04-06 09:38:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:49 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '78',
    'user_id' => '48',
    'post_image' => 'images/6069ef449d5e6.png',
    'post_description' => '#bandla #funny joke pavan kalyan',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 22:24:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '77',
    'user_id' => '51',
    'post_image' => 'images/6069cd5382a8a.png',
    'post_description' => '#corona funny @abhi #joke #men',
    'commentids' => '1',
    'name' => 'Adithya P',
    'handle_name' => '@adithyap',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 19:59:39',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '73',
    'user_id' => '46',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'Test #test @sanjith',
    'commentids' => '1',
    'name' => 'Sanjith',
    'handle_name' => '@sanjith',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-03 11:48:23',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '72',
    'user_id' => '48',
    'post_image' => 'images/60675fe4c1547.png',
    'post_description' => '#Modi #bangladesh funny',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '0',
    'cdate' => '2021-04-02 23:48:12',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '71',
    'user_id' => '41',
    'post_image' => 'images/6055ff05ca01e.png',
    'post_description' => '#brahmi #joke funny @abinash12',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-20 19:26:21',
    'comment_count' => '2',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '70',
    'user_id' => '41',
    'post_image' => 'images/604e272559350.png',
    'post_description' => '#funny #joke test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '4',
    'down_vote_count' => '0',
    'cdate' => '2021-03-14 20:39:25',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '69',
    'user_id' => '41',
    'post_image' => 'images/604e26d69f5f4.png',
    'post_description' => '#funny #joke #test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '3',
    'cdate' => '2021-03-14 20:38:06',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '68',
    'user_id' => '44',
    'post_image' => 'images/6046281c9be91.png',
    'post_description' => '#exams funny #brahmi @sai ',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '2',
    'cdate' => '2021-03-08 19:05:24',
    'comment_count' => '2',
    'post_type_id' => '0',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '67',
    'user_id' => '44',
    'post_image' => 'images/603ef9f56b329.png',
    'post_description' => '#vantalakka maa tv @abinash12',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-03 08:22:37',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-06 09:38:49 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:49 --> Total execution time: 0.1029
INFO - 2021-04-06 09:38:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:49 --> Model Class Initialized
INFO - 2021-04-06 09:38:49 --> Controller Class Initialized
INFO - 2021-04-06 09:38:49 --> Model Class Initialized
INFO - 2021-04-06 09:38:49 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '48',
)
INFO - 2021-04-06 09:38:49 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'48\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'48\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'48\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-06 09:38:49 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '78',
    'user_id' => '48',
    'post_image' => 'images/6069ef449d5e6.png',
    'post_description' => '#bandla #funny joke pavan kalyan',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 22:24:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '77',
    'user_id' => '51',
    'post_image' => 'images/6069cd5382a8a.png',
    'post_description' => '#corona funny @abhi #joke #men',
    'commentids' => '1',
    'name' => 'Adithya P',
    'handle_name' => '@adithyap',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-04 19:59:39',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '73',
    'user_id' => '46',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'Test #test @sanjith',
    'commentids' => '1',
    'name' => 'Sanjith',
    'handle_name' => '@sanjith',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '0',
    'cdate' => '2021-04-03 11:48:23',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '72',
    'user_id' => '48',
    'post_image' => 'images/60675fe4c1547.png',
    'post_description' => '#Modi #bangladesh funny',
    'commentids' => '1',
    'name' => 'Abhi',
    'handle_name' => '@abhi',
    'profile_image' => '',
    'up_vote_count' => '2',
    'down_vote_count' => '0',
    'cdate' => '2021-04-02 23:48:12',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '71',
    'user_id' => '41',
    'post_image' => 'images/6055ff05ca01e.png',
    'post_description' => '#brahmi #joke funny @abinash12',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-20 19:26:21',
    'comment_count' => '2',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  5 => 
  array (
    'id' => '70',
    'user_id' => '41',
    'post_image' => 'images/604e272559350.png',
    'post_description' => '#funny #joke test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '4',
    'down_vote_count' => '0',
    'cdate' => '2021-03-14 20:39:25',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '69',
    'user_id' => '41',
    'post_image' => 'images/604e26d69f5f4.png',
    'post_description' => '#funny #joke #test',
    'commentids' => '1',
    'name' => 'Abinash12',
    'handle_name' => '@Abinash',
    'profile_image' => '',
    'up_vote_count' => '1',
    'down_vote_count' => '3',
    'cdate' => '2021-03-14 20:38:06',
    'comment_count' => '1',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
  7 => 
  array (
    'id' => '68',
    'user_id' => '44',
    'post_image' => 'images/6046281c9be91.png',
    'post_description' => '#exams funny #brahmi @sai ',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '2',
    'cdate' => '2021-03-08 19:05:24',
    'comment_count' => '2',
    'post_type_id' => '0',
    'up_vote_user_id' => '48',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '67',
    'user_id' => '44',
    'post_image' => 'images/603ef9f56b329.png',
    'post_description' => '#vantalakka maa tv @abinash12',
    'commentids' => '1',
    'name' => 'Sai',
    'handle_name' => '@sai',
    'profile_image' => 'images/603ef8f53648e.png',
    'up_vote_count' => '3',
    'down_vote_count' => '1',
    'cdate' => '2021-03-03 08:22:37',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '48',
  ),
)
INFO - 2021-04-06 09:38:49 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:49 --> Total execution time: 0.1851
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.3097
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:50 --> Config Class Initialized
INFO - 2021-04-06 09:38:50 --> Hooks Class Initialized
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:38:50 --> UTF-8 Support Enabled
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
INFO - 2021-04-06 09:38:50 --> Utf8 Class Initialized
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
INFO - 2021-04-06 09:38:50 --> URI Class Initialized
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
INFO - 2021-04-06 09:38:50 --> Router Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
INFO - 2021-04-06 09:38:50 --> Output Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.3119
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Security Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.3936
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-06 09:38:50 --> Input Class Initialized
INFO - 2021-04-06 09:38:50 --> Language Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.3979
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
INFO - 2021-04-06 09:38:50 --> Loader Class Initialized
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-06 09:38:50 --> Helper loaded: security_helper
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:50 --> Helper loaded: form_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: url_helper
INFO - 2021-04-06 09:38:50 --> Helper loaded: common_helper
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.2915
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.2993
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.3976
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:50 --> Database Driver Class Initialized
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
INFO - 2021-04-06 09:38:50 --> Pagination Class Initialized
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-06 09:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.4115
INFO - 2021-04-06 09:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Controller Class Initialized
INFO - 2021-04-06 09:38:50 --> Model Class Initialized
INFO - 2021-04-06 09:38:50 --> Final output sent to browser
DEBUG - 2021-04-06 09:38:50 --> Total execution time: 0.3091
