<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2021-04-09 06:10:16 --> Config Class Initialized
INFO - 2021-04-09 06:10:16 --> Hooks Class Initialized
DEBUG - 2021-04-09 06:10:16 --> UTF-8 Support Enabled
INFO - 2021-04-09 06:10:16 --> Utf8 Class Initialized
INFO - 2021-04-09 06:10:16 --> URI Class Initialized
INFO - 2021-04-09 06:10:16 --> Router Class Initialized
INFO - 2021-04-09 06:10:16 --> Output Class Initialized
INFO - 2021-04-09 06:10:16 --> Security Class Initialized
DEBUG - 2021-04-09 06:10:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 06:10:16 --> Input Class Initialized
INFO - 2021-04-09 06:10:16 --> Language Class Initialized
INFO - 2021-04-09 06:10:16 --> Loader Class Initialized
DEBUG - 2021-04-09 06:10:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 06:10:16 --> Helper loaded: security_helper
INFO - 2021-04-09 06:10:16 --> Helper loaded: form_helper
INFO - 2021-04-09 06:10:16 --> Helper loaded: url_helper
INFO - 2021-04-09 06:10:16 --> Helper loaded: common_helper
INFO - 2021-04-09 06:10:16 --> Database Driver Class Initialized
INFO - 2021-04-09 06:10:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 06:10:16 --> Pagination Class Initialized
DEBUG - 2021-04-09 06:10:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 06:10:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 06:10:16 --> Model Class Initialized
INFO - 2021-04-09 06:10:16 --> Controller Class Initialized
INFO - 2021-04-09 06:10:16 --> Model Class Initialized
INFO - 2021-04-09 06:10:16 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 06:10:16 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p,users u 
where
    p.user_id = u.id 
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 06:10:16 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '98',
    'user_id' => '32',
    'post_image' => 'images/60700510c2596.jpg',
    'post_description' => 'test #tesch',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 13:11:04',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '94',
    'user_id' => '32',
    'post_image' => 'images/606ffb344e04b.jpg',
    'post_description' => 'dsfdsf',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:29:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '93',
    'user_id' => '32',
    'post_image' => '606ffb0321d5a.jpg',
    'post_description' => 'teerer',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:28:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '92',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:42',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '91',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '90',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '89',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '88',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:30:21',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '87',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:17:18',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 06:10:16 --> Final output sent to browser
DEBUG - 2021-04-09 06:10:16 --> Total execution time: 0.0355
INFO - 2021-04-09 07:33:07 --> Config Class Initialized
INFO - 2021-04-09 07:33:07 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:07 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:07 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:07 --> URI Class Initialized
INFO - 2021-04-09 07:33:07 --> Router Class Initialized
INFO - 2021-04-09 07:33:07 --> Output Class Initialized
INFO - 2021-04-09 07:33:07 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:07 --> Input Class Initialized
INFO - 2021-04-09 07:33:07 --> Language Class Initialized
INFO - 2021-04-09 07:33:07 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:07 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:07 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:07 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:07 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:07 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:07 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:07 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:07 --> Model Class Initialized
INFO - 2021-04-09 07:33:07 --> Controller Class Initialized
INFO - 2021-04-09 07:33:07 --> Model Class Initialized
INFO - 2021-04-09 07:33:07 --> PostList-Request--> array (
)
INFO - 2021-04-09 07:33:07 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:33:07 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-09 07:33:07 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:07 --> Total execution time: 0.5747
INFO - 2021-04-09 07:33:10 --> Config Class Initialized
INFO - 2021-04-09 07:33:10 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:10 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:10 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:10 --> URI Class Initialized
INFO - 2021-04-09 07:33:10 --> Router Class Initialized
INFO - 2021-04-09 07:33:10 --> Output Class Initialized
INFO - 2021-04-09 07:33:10 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:10 --> Input Class Initialized
INFO - 2021-04-09 07:33:10 --> Language Class Initialized
INFO - 2021-04-09 07:33:10 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:10 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:10 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:10 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:10 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:10 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:10 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:10 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:10 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:10 --> Model Class Initialized
INFO - 2021-04-09 07:33:10 --> Controller Class Initialized
INFO - 2021-04-09 07:33:10 --> Model Class Initialized
INFO - 2021-04-09 07:33:10 --> PostList-Request--> array (
)
INFO - 2021-04-09 07:33:10 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:33:10 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-09 07:33:10 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:10 --> Total execution time: 0.0330
INFO - 2021-04-09 07:33:13 --> Config Class Initialized
INFO - 2021-04-09 07:33:13 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:13 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:13 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:13 --> URI Class Initialized
INFO - 2021-04-09 07:33:13 --> Router Class Initialized
INFO - 2021-04-09 07:33:13 --> Output Class Initialized
INFO - 2021-04-09 07:33:13 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:13 --> Input Class Initialized
INFO - 2021-04-09 07:33:13 --> Language Class Initialized
INFO - 2021-04-09 07:33:13 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:13 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:13 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:13 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:13 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:13 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:13 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:13 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:13 --> Model Class Initialized
INFO - 2021-04-09 07:33:13 --> Controller Class Initialized
INFO - 2021-04-09 07:33:13 --> Model Class Initialized
INFO - 2021-04-09 07:33:13 --> PostList-Request--> array (
)
INFO - 2021-04-09 07:33:13 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:33:13 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-09 07:33:13 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:13 --> Total execution time: 0.0301
INFO - 2021-04-09 07:33:26 --> Config Class Initialized
INFO - 2021-04-09 07:33:26 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:26 --> Config Class Initialized
INFO - 2021-04-09 07:33:26 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:26 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:26 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:26 --> Config Class Initialized
INFO - 2021-04-09 07:33:26 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:26 --> URI Class Initialized
DEBUG - 2021-04-09 07:33:26 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:26 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:26 --> Router Class Initialized
INFO - 2021-04-09 07:33:26 --> URI Class Initialized
DEBUG - 2021-04-09 07:33:26 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:26 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:26 --> Output Class Initialized
INFO - 2021-04-09 07:33:26 --> Router Class Initialized
INFO - 2021-04-09 07:33:26 --> URI Class Initialized
INFO - 2021-04-09 07:33:26 --> Security Class Initialized
INFO - 2021-04-09 07:33:26 --> Output Class Initialized
INFO - 2021-04-09 07:33:26 --> Router Class Initialized
DEBUG - 2021-04-09 07:33:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:26 --> Input Class Initialized
INFO - 2021-04-09 07:33:26 --> Security Class Initialized
INFO - 2021-04-09 07:33:26 --> Language Class Initialized
DEBUG - 2021-04-09 07:33:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:26 --> Input Class Initialized
INFO - 2021-04-09 07:33:26 --> Output Class Initialized
INFO - 2021-04-09 07:33:26 --> Language Class Initialized
INFO - 2021-04-09 07:33:26 --> Security Class Initialized
INFO - 2021-04-09 07:33:26 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:26 --> Loader Class Initialized
INFO - 2021-04-09 07:33:26 --> Helper loaded: security_helper
DEBUG - 2021-04-09 07:33:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:26 --> Input Class Initialized
DEBUG - 2021-04-09 07:33:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:26 --> Language Class Initialized
INFO - 2021-04-09 07:33:26 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:26 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:26 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:26 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:26 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:26 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:26 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:26 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:26 --> Model Class Initialized
INFO - 2021-04-09 07:33:26 --> Controller Class Initialized
INFO - 2021-04-09 07:33:26 --> Model Class Initialized
INFO - 2021-04-09 07:33:26 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:33:26 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
DEBUG - 2021-04-09 07:33:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:26 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:26 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:26 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '98',
    'user_id' => '32',
    'post_image' => 'images/60700510c2596.jpg',
    'post_description' => 'test #tesch',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 13:11:04',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '94',
    'user_id' => '32',
    'post_image' => 'images/606ffb344e04b.jpg',
    'post_description' => 'dsfdsf',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:29:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '93',
    'user_id' => '32',
    'post_image' => '606ffb0321d5a.jpg',
    'post_description' => 'teerer',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:28:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '92',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:42',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '91',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '90',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '89',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '88',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:30:21',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '87',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:17:18',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:33:26 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:26 --> Total execution time: 0.1141
INFO - 2021-04-09 07:33:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:26 --> Model Class Initialized
INFO - 2021-04-09 07:33:26 --> Controller Class Initialized
INFO - 2021-04-09 07:33:26 --> Model Class Initialized
INFO - 2021-04-09 07:33:26 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:26 --> Total execution time: 0.1188
INFO - 2021-04-09 07:33:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:26 --> Model Class Initialized
INFO - 2021-04-09 07:33:26 --> Controller Class Initialized
INFO - 2021-04-09 07:33:26 --> Model Class Initialized
INFO - 2021-04-09 07:33:26 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
INFO - 2021-04-09 07:33:26 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:33:27 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-09 07:33:27 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:27 --> Total execution time: 0.1214
INFO - 2021-04-09 07:33:27 --> Config Class Initialized
INFO - 2021-04-09 07:33:27 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:27 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Config Class Initialized
INFO - 2021-04-09 07:33:28 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
INFO - 2021-04-09 07:33:28 --> Config Class Initialized
INFO - 2021-04-09 07:33:28 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.1985
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
INFO - 2021-04-09 07:33:28 --> Config Class Initialized
INFO - 2021-04-09 07:33:28 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
DEBUG - 2021-04-09 07:33:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:28 --> Config Class Initialized
INFO - 2021-04-09 07:33:28 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
DEBUG - 2021-04-09 07:33:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.1905
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.1096
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.1934
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.1888
INFO - 2021-04-09 07:33:28 --> Config Class Initialized
INFO - 2021-04-09 07:33:28 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
INFO - 2021-04-09 07:33:28 --> Config Class Initialized
INFO - 2021-04-09 07:33:28 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:28 --> Config Class Initialized
INFO - 2021-04-09 07:33:28 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-09 07:33:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.0987
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.0977
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.0991
INFO - 2021-04-09 07:33:28 --> Config Class Initialized
INFO - 2021-04-09 07:33:28 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:28 --> URI Class Initialized
INFO - 2021-04-09 07:33:28 --> Router Class Initialized
INFO - 2021-04-09 07:33:28 --> Output Class Initialized
INFO - 2021-04-09 07:33:28 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:28 --> Input Class Initialized
INFO - 2021-04-09 07:33:28 --> Language Class Initialized
INFO - 2021-04-09 07:33:28 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:28 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Controller Class Initialized
INFO - 2021-04-09 07:33:28 --> Model Class Initialized
INFO - 2021-04-09 07:33:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:28 --> Total execution time: 0.0280
INFO - 2021-04-09 07:33:29 --> Config Class Initialized
INFO - 2021-04-09 07:33:29 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:29 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:29 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:29 --> URI Class Initialized
INFO - 2021-04-09 07:33:29 --> Router Class Initialized
INFO - 2021-04-09 07:33:29 --> Output Class Initialized
INFO - 2021-04-09 07:33:29 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:29 --> Input Class Initialized
INFO - 2021-04-09 07:33:29 --> Language Class Initialized
ERROR - 2021-04-09 07:33:29 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-09 07:33:32 --> Config Class Initialized
INFO - 2021-04-09 07:33:32 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:32 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:32 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:32 --> URI Class Initialized
INFO - 2021-04-09 07:33:32 --> Router Class Initialized
INFO - 2021-04-09 07:33:32 --> Output Class Initialized
INFO - 2021-04-09 07:33:32 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:32 --> Input Class Initialized
INFO - 2021-04-09 07:33:32 --> Language Class Initialized
INFO - 2021-04-09 07:33:32 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:32 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:32 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:32 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:32 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:32 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:32 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:32 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:32 --> Model Class Initialized
INFO - 2021-04-09 07:33:32 --> Controller Class Initialized
INFO - 2021-04-09 07:33:32 --> Model Class Initialized
INFO - 2021-04-09 07:33:32 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:33:32 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:33:32 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '98',
    'user_id' => '32',
    'post_image' => 'images/60700510c2596.jpg',
    'post_description' => 'test #tesch',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 13:11:04',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '94',
    'user_id' => '32',
    'post_image' => 'images/606ffb344e04b.jpg',
    'post_description' => 'dsfdsf',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:29:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '93',
    'user_id' => '32',
    'post_image' => '606ffb0321d5a.jpg',
    'post_description' => 'teerer',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:28:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '92',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:42',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '91',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '90',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '89',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '88',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:30:21',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '87',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:17:18',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:33:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:32 --> Total execution time: 0.0312
INFO - 2021-04-09 07:33:46 --> Config Class Initialized
INFO - 2021-04-09 07:33:46 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:46 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:46 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:46 --> URI Class Initialized
INFO - 2021-04-09 07:33:46 --> Router Class Initialized
INFO - 2021-04-09 07:33:46 --> Output Class Initialized
INFO - 2021-04-09 07:33:46 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:46 --> Input Class Initialized
INFO - 2021-04-09 07:33:46 --> Language Class Initialized
INFO - 2021-04-09 07:33:46 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:46 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:46 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:46 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:46 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:46 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:46 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:46 --> Model Class Initialized
INFO - 2021-04-09 07:33:46 --> Controller Class Initialized
INFO - 2021-04-09 07:33:46 --> Model Class Initialized
INFO - 2021-04-09 07:33:46 --> PostList-Request--> array (
  'from' => '10',
  'to' => '19',
  'user_id' => '31',
)
INFO - 2021-04-09 07:33:46 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 10, 19 '
INFO - 2021-04-09 07:33:46 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '85',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:15:38',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '84',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:15:14',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '83',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:13:46',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
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
  4 => 
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
  5 => 
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
  6 => 
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
    'down_vote_user_id' => '0',
  ),
  7 => 
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
    'up_vote_user_id' => '31',
    'down_vote_user_id' => '0',
  ),
  8 => 
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
    'down_vote_user_id' => '31',
  ),
  9 => 
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
    'down_vote_user_id' => '0',
  ),
  10 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '31',
  ),
  11 => 
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
    'down_vote_user_id' => '31',
  ),
  12 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '31',
  ),
  13 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  14 => 
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
    'down_vote_user_id' => '0',
  ),
  15 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  16 => 
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
    'down_vote_user_id' => '0',
  ),
  17 => 
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
  18 => 
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
)
INFO - 2021-04-09 07:33:46 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:46 --> Total execution time: 0.0388
INFO - 2021-04-09 07:33:48 --> Config Class Initialized
INFO - 2021-04-09 07:33:48 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:48 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:48 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:48 --> URI Class Initialized
INFO - 2021-04-09 07:33:48 --> Router Class Initialized
INFO - 2021-04-09 07:33:48 --> Output Class Initialized
INFO - 2021-04-09 07:33:48 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:48 --> Input Class Initialized
INFO - 2021-04-09 07:33:48 --> Language Class Initialized
INFO - 2021-04-09 07:33:48 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:48 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:48 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:48 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:48 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:48 --> Config Class Initialized
INFO - 2021-04-09 07:33:48 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:48 --> Config Class Initialized
INFO - 2021-04-09 07:33:48 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:48 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:48 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:48 --> URI Class Initialized
INFO - 2021-04-09 07:33:48 --> Router Class Initialized
INFO - 2021-04-09 07:33:48 --> Output Class Initialized
INFO - 2021-04-09 07:33:48 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:33:48 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:48 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:48 --> Security Class Initialized
INFO - 2021-04-09 07:33:48 --> URI Class Initialized
DEBUG - 2021-04-09 07:33:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:48 --> Input Class Initialized
INFO - 2021-04-09 07:33:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:48 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:48 --> Language Class Initialized
INFO - 2021-04-09 07:33:48 --> Router Class Initialized
DEBUG - 2021-04-09 07:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:48 --> Config Class Initialized
INFO - 2021-04-09 07:33:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:48 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:48 --> Model Class Initialized
INFO - 2021-04-09 07:33:48 --> Controller Class Initialized
INFO - 2021-04-09 07:33:48 --> Model Class Initialized
INFO - 2021-04-09 07:33:48 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:48 --> Total execution time: 0.2006
INFO - 2021-04-09 07:33:48 --> Loader Class Initialized
INFO - 2021-04-09 07:33:48 --> Output Class Initialized
DEBUG - 2021-04-09 07:33:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-09 07:33:48 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:48 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:48 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:48 --> Security Class Initialized
INFO - 2021-04-09 07:33:48 --> URI Class Initialized
INFO - 2021-04-09 07:33:48 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:33:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:48 --> Input Class Initialized
INFO - 2021-04-09 07:33:48 --> Router Class Initialized
INFO - 2021-04-09 07:33:48 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:48 --> Language Class Initialized
INFO - 2021-04-09 07:33:48 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:48 --> Output Class Initialized
INFO - 2021-04-09 07:33:48 --> Security Class Initialized
INFO - 2021-04-09 07:33:48 --> Loader Class Initialized
INFO - 2021-04-09 07:33:48 --> Config Class Initialized
INFO - 2021-04-09 07:33:48 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:48 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:48 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:33:48 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:48 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:49 --> URI Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:49 --> Input Class Initialized
INFO - 2021-04-09 07:33:49 --> Language Class Initialized
INFO - 2021-04-09 07:33:49 --> Router Class Initialized
INFO - 2021-04-09 07:33:49 --> Output Class Initialized
INFO - 2021-04-09 07:33:49 --> Security Class Initialized
INFO - 2021-04-09 07:33:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:49 --> Helper loaded: security_helper
DEBUG - 2021-04-09 07:33:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:49 --> Input Class Initialized
INFO - 2021-04-09 07:33:49 --> Language Class Initialized
INFO - 2021-04-09 07:33:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:49 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:49 --> Loader Class Initialized
INFO - 2021-04-09 07:33:49 --> Helper loaded: url_helper
DEBUG - 2021-04-09 07:33:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:49 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Controller Class Initialized
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:49 --> Total execution time: 0.2021
DEBUG - 2021-04-09 07:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Controller Class Initialized
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:49 --> Total execution time: 0.2067
INFO - 2021-04-09 07:33:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:49 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Controller Class Initialized
INFO - 2021-04-09 07:33:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:49 --> Total execution time: 0.1130
DEBUG - 2021-04-09 07:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Controller Class Initialized
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:49 --> Total execution time: 0.2007
INFO - 2021-04-09 07:33:49 --> Config Class Initialized
INFO - 2021-04-09 07:33:49 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:49 --> URI Class Initialized
INFO - 2021-04-09 07:33:49 --> Router Class Initialized
INFO - 2021-04-09 07:33:49 --> Output Class Initialized
INFO - 2021-04-09 07:33:49 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:49 --> Input Class Initialized
INFO - 2021-04-09 07:33:49 --> Language Class Initialized
INFO - 2021-04-09 07:33:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:49 --> Config Class Initialized
INFO - 2021-04-09 07:33:49 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:49 --> URI Class Initialized
INFO - 2021-04-09 07:33:49 --> Router Class Initialized
INFO - 2021-04-09 07:33:49 --> Config Class Initialized
INFO - 2021-04-09 07:33:49 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:49 --> Output Class Initialized
DEBUG - 2021-04-09 07:33:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:49 --> Config Class Initialized
INFO - 2021-04-09 07:33:49 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:49 --> Security Class Initialized
INFO - 2021-04-09 07:33:49 --> URI Class Initialized
INFO - 2021-04-09 07:33:49 --> Router Class Initialized
DEBUG - 2021-04-09 07:33:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:49 --> URI Class Initialized
INFO - 2021-04-09 07:33:49 --> Output Class Initialized
INFO - 2021-04-09 07:33:49 --> Router Class Initialized
INFO - 2021-04-09 07:33:49 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:49 --> Input Class Initialized
INFO - 2021-04-09 07:33:49 --> Language Class Initialized
INFO - 2021-04-09 07:33:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:49 --> Output Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:49 --> Loader Class Initialized
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Controller Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:49 --> Total execution time: 0.1911
INFO - 2021-04-09 07:33:49 --> Helper loaded: security_helper
DEBUG - 2021-04-09 07:33:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:49 --> Input Class Initialized
INFO - 2021-04-09 07:33:49 --> Language Class Initialized
INFO - 2021-04-09 07:33:49 --> Security Class Initialized
INFO - 2021-04-09 07:33:49 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:33:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:49 --> Input Class Initialized
INFO - 2021-04-09 07:33:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:49 --> Language Class Initialized
INFO - 2021-04-09 07:33:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:49 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Controller Class Initialized
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:49 --> Total execution time: 0.1076
INFO - 2021-04-09 07:33:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:49 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Controller Class Initialized
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:49 --> Total execution time: 0.1997
INFO - 2021-04-09 07:33:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:49 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Controller Class Initialized
INFO - 2021-04-09 07:33:49 --> Model Class Initialized
INFO - 2021-04-09 07:33:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:49 --> Total execution time: 0.1938
INFO - 2021-04-09 07:33:49 --> Config Class Initialized
INFO - 2021-04-09 07:33:49 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:49 --> URI Class Initialized
INFO - 2021-04-09 07:33:49 --> Router Class Initialized
INFO - 2021-04-09 07:33:49 --> Output Class Initialized
INFO - 2021-04-09 07:33:49 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:49 --> Input Class Initialized
INFO - 2021-04-09 07:33:49 --> Language Class Initialized
INFO - 2021-04-09 07:33:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:49 --> Config Class Initialized
INFO - 2021-04-09 07:33:49 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:49 --> Helper loaded: security_helper
DEBUG - 2021-04-09 07:33:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:49 --> URI Class Initialized
INFO - 2021-04-09 07:33:50 --> Router Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:50 --> Output Class Initialized
INFO - 2021-04-09 07:33:50 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:50 --> Input Class Initialized
INFO - 2021-04-09 07:33:50 --> Language Class Initialized
INFO - 2021-04-09 07:33:50 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.1954
INFO - 2021-04-09 07:33:50 --> Config Class Initialized
INFO - 2021-04-09 07:33:50 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:33:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> URI Class Initialized
INFO - 2021-04-09 07:33:50 --> Router Class Initialized
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:50 --> Output Class Initialized
INFO - 2021-04-09 07:33:50 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Config Class Initialized
INFO - 2021-04-09 07:33:50 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.1900
INFO - 2021-04-09 07:33:50 --> Input Class Initialized
INFO - 2021-04-09 07:33:50 --> Language Class Initialized
DEBUG - 2021-04-09 07:33:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:50 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:50 --> URI Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:50 --> Router Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:50 --> Config Class Initialized
INFO - 2021-04-09 07:33:50 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:50 --> Output Class Initialized
DEBUG - 2021-04-09 07:33:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:50 --> Security Class Initialized
INFO - 2021-04-09 07:33:50 --> URI Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:50 --> Input Class Initialized
INFO - 2021-04-09 07:33:50 --> Language Class Initialized
INFO - 2021-04-09 07:33:50 --> Router Class Initialized
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:50 --> Output Class Initialized
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:50 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:50 --> Security Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: security_helper
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.1087
DEBUG - 2021-04-09 07:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:50 --> Input Class Initialized
INFO - 2021-04-09 07:33:50 --> Language Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:50 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.1952
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.2005
INFO - 2021-04-09 07:33:50 --> Config Class Initialized
INFO - 2021-04-09 07:33:50 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:50 --> URI Class Initialized
INFO - 2021-04-09 07:33:50 --> Router Class Initialized
INFO - 2021-04-09 07:33:50 --> Output Class Initialized
INFO - 2021-04-09 07:33:50 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:50 --> Input Class Initialized
INFO - 2021-04-09 07:33:50 --> Language Class Initialized
INFO - 2021-04-09 07:33:50 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:50 --> Config Class Initialized
INFO - 2021-04-09 07:33:50 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:33:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:50 --> Config Class Initialized
INFO - 2021-04-09 07:33:50 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:50 --> URI Class Initialized
DEBUG - 2021-04-09 07:33:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:50 --> Router Class Initialized
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:50 --> URI Class Initialized
INFO - 2021-04-09 07:33:50 --> Output Class Initialized
INFO - 2021-04-09 07:33:50 --> Router Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.1037
INFO - 2021-04-09 07:33:50 --> Security Class Initialized
INFO - 2021-04-09 07:33:50 --> Output Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:50 --> Input Class Initialized
INFO - 2021-04-09 07:33:50 --> Language Class Initialized
INFO - 2021-04-09 07:33:50 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:50 --> Input Class Initialized
INFO - 2021-04-09 07:33:50 --> Config Class Initialized
INFO - 2021-04-09 07:33:50 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:50 --> Language Class Initialized
INFO - 2021-04-09 07:33:50 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:50 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:50 --> URI Class Initialized
INFO - 2021-04-09 07:33:50 --> Router Class Initialized
INFO - 2021-04-09 07:33:50 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:50 --> Output Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:50 --> Security Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:50 --> Input Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Language Class Initialized
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:50 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:50 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
INFO - 2021-04-09 07:33:50 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.1904
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
DEBUG - 2021-04-09 07:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.1038
INFO - 2021-04-09 07:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Controller Class Initialized
INFO - 2021-04-09 07:33:50 --> Model Class Initialized
INFO - 2021-04-09 07:33:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:50 --> Total execution time: 0.1981
INFO - 2021-04-09 07:33:51 --> Config Class Initialized
INFO - 2021-04-09 07:33:51 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:51 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:51 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:51 --> URI Class Initialized
INFO - 2021-04-09 07:33:51 --> Router Class Initialized
INFO - 2021-04-09 07:33:51 --> Output Class Initialized
INFO - 2021-04-09 07:33:51 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:51 --> Input Class Initialized
INFO - 2021-04-09 07:33:51 --> Language Class Initialized
INFO - 2021-04-09 07:33:51 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:51 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:51 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:51 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:51 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:51 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:51 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:51 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:51 --> Model Class Initialized
INFO - 2021-04-09 07:33:51 --> Controller Class Initialized
INFO - 2021-04-09 07:33:51 --> Model Class Initialized
INFO - 2021-04-09 07:33:51 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:51 --> Total execution time: 0.0273
INFO - 2021-04-09 07:33:53 --> Config Class Initialized
INFO - 2021-04-09 07:33:53 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:53 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:53 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:53 --> URI Class Initialized
INFO - 2021-04-09 07:33:53 --> Router Class Initialized
INFO - 2021-04-09 07:33:53 --> Output Class Initialized
INFO - 2021-04-09 07:33:53 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:53 --> Input Class Initialized
INFO - 2021-04-09 07:33:53 --> Language Class Initialized
INFO - 2021-04-09 07:33:53 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:53 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:53 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:53 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:53 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:53 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:53 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:53 --> Model Class Initialized
INFO - 2021-04-09 07:33:53 --> Controller Class Initialized
INFO - 2021-04-09 07:33:53 --> Model Class Initialized
INFO - 2021-04-09 07:33:53 --> PostList-Request--> array (
  'from' => '20',
  'to' => '29',
  'user_id' => '31',
)
INFO - 2021-04-09 07:33:53 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 20, 29 '
INFO - 2021-04-09 07:33:53 --> PostList-Respos--> array (
  0 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '31',
  ),
  1 => 
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
    'down_vote_user_id' => '31',
  ),
  2 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '31',
  ),
  3 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
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
    'down_vote_user_id' => '0',
  ),
  5 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
    'down_vote_user_id' => '0',
  ),
  7 => 
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
  8 => 
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
)
INFO - 2021-04-09 07:33:53 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:53 --> Total execution time: 0.0522
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Controller Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:56 --> Total execution time: 0.1904
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Controller Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:56 --> Total execution time: 0.1985
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Controller Class Initialized
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:56 --> Total execution time: 0.1194
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Controller Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:56 --> Total execution time: 0.1192
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Controller Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:56 --> Total execution time: 0.1077
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Config Class Initialized
INFO - 2021-04-09 07:33:56 --> Hooks Class Initialized
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:33:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:33:56 --> Utf8 Class Initialized
INFO - 2021-04-09 07:33:56 --> URI Class Initialized
INFO - 2021-04-09 07:33:56 --> Router Class Initialized
INFO - 2021-04-09 07:33:56 --> Output Class Initialized
INFO - 2021-04-09 07:33:56 --> Security Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:56 --> Input Class Initialized
INFO - 2021-04-09 07:33:56 --> Language Class Initialized
INFO - 2021-04-09 07:33:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:33:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:33:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:33:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
INFO - 2021-04-09 07:33:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:33:56 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-09 07:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Controller Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:56 --> Total execution time: 0.4016
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Controller Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:56 --> Total execution time: 0.2204
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Controller Class Initialized
INFO - 2021-04-09 07:33:56 --> Model Class Initialized
INFO - 2021-04-09 07:33:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:56 --> Total execution time: 0.4029
INFO - 2021-04-09 07:33:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:33:57 --> Model Class Initialized
INFO - 2021-04-09 07:33:57 --> Controller Class Initialized
INFO - 2021-04-09 07:33:57 --> Model Class Initialized
INFO - 2021-04-09 07:33:57 --> Final output sent to browser
DEBUG - 2021-04-09 07:33:57 --> Total execution time: 0.2064
INFO - 2021-04-09 07:35:32 --> Config Class Initialized
INFO - 2021-04-09 07:35:32 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:35:32 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:35:32 --> Utf8 Class Initialized
INFO - 2021-04-09 07:35:32 --> URI Class Initialized
INFO - 2021-04-09 07:35:32 --> Router Class Initialized
INFO - 2021-04-09 07:35:32 --> Output Class Initialized
INFO - 2021-04-09 07:35:32 --> Security Class Initialized
DEBUG - 2021-04-09 07:35:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:35:32 --> Input Class Initialized
INFO - 2021-04-09 07:35:32 --> Language Class Initialized
INFO - 2021-04-09 07:35:32 --> Loader Class Initialized
DEBUG - 2021-04-09 07:35:32 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:35:32 --> Helper loaded: security_helper
INFO - 2021-04-09 07:35:32 --> Helper loaded: form_helper
INFO - 2021-04-09 07:35:32 --> Helper loaded: url_helper
INFO - 2021-04-09 07:35:32 --> Helper loaded: common_helper
INFO - 2021-04-09 07:35:32 --> Database Driver Class Initialized
INFO - 2021-04-09 07:35:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:35:32 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:35:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:35:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:35:32 --> Model Class Initialized
INFO - 2021-04-09 07:35:32 --> Controller Class Initialized
INFO - 2021-04-09 07:35:32 --> Model Class Initialized
INFO - 2021-04-09 07:35:32 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:35:32 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:35:32 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '98',
    'user_id' => '32',
    'post_image' => 'images/60700510c2596.jpg',
    'post_description' => 'test #tesch',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 13:11:04',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '94',
    'user_id' => '32',
    'post_image' => 'images/606ffb344e04b.jpg',
    'post_description' => 'dsfdsf',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:29:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '93',
    'user_id' => '32',
    'post_image' => '606ffb0321d5a.jpg',
    'post_description' => 'teerer',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:28:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '92',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:42',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '91',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '90',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '89',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '88',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:30:21',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '87',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:17:18',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:35:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:35:32 --> Total execution time: 0.0328
INFO - 2021-04-09 07:36:17 --> Config Class Initialized
INFO - 2021-04-09 07:36:17 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:17 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:17 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:17 --> URI Class Initialized
INFO - 2021-04-09 07:36:17 --> Router Class Initialized
INFO - 2021-04-09 07:36:17 --> Output Class Initialized
INFO - 2021-04-09 07:36:17 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:17 --> Input Class Initialized
INFO - 2021-04-09 07:36:17 --> Language Class Initialized
INFO - 2021-04-09 07:36:17 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:17 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:17 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:17 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:17 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:17 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:17 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:36:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:17 --> Model Class Initialized
INFO - 2021-04-09 07:36:17 --> Controller Class Initialized
INFO - 2021-04-09 07:36:17 --> Model Class Initialized
INFO - 2021-04-09 07:36:17 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:36:17 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:36:17 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '98',
    'user_id' => '32',
    'post_image' => 'images/60700510c2596.jpg',
    'post_description' => 'test #tesch',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 13:11:04',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '94',
    'user_id' => '32',
    'post_image' => 'images/606ffb344e04b.jpg',
    'post_description' => 'dsfdsf',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:29:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '93',
    'user_id' => '32',
    'post_image' => '606ffb0321d5a.jpg',
    'post_description' => 'teerer',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:28:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '92',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:42',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '91',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '90',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '89',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '88',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:30:21',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '87',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:17:18',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:36:17 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:17 --> Total execution time: 0.0338
INFO - 2021-04-09 07:36:21 --> Config Class Initialized
INFO - 2021-04-09 07:36:21 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:21 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:21 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:21 --> URI Class Initialized
INFO - 2021-04-09 07:36:21 --> Router Class Initialized
INFO - 2021-04-09 07:36:21 --> Output Class Initialized
INFO - 2021-04-09 07:36:21 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:21 --> Input Class Initialized
INFO - 2021-04-09 07:36:21 --> Language Class Initialized
INFO - 2021-04-09 07:36:21 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:21 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:21 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:21 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:21 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:21 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:21 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:21 --> Model Class Initialized
INFO - 2021-04-09 07:36:21 --> Controller Class Initialized
INFO - 2021-04-09 07:36:21 --> Model Class Initialized
INFO - 2021-04-09 07:36:21 --> PostList-Request--> array (
  'from' => '10',
  'to' => '19',
  'user_id' => '31',
)
INFO - 2021-04-09 07:36:21 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 10, 19 '
INFO - 2021-04-09 07:36:21 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '85',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:15:38',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '84',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:15:14',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '83',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:13:46',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
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
  4 => 
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
  5 => 
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
  6 => 
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
    'down_vote_user_id' => '0',
  ),
  7 => 
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
    'up_vote_user_id' => '31',
    'down_vote_user_id' => '0',
  ),
  8 => 
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
    'down_vote_user_id' => '31',
  ),
  9 => 
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
    'down_vote_user_id' => '0',
  ),
  10 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '31',
  ),
  11 => 
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
    'down_vote_user_id' => '31',
  ),
  12 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '31',
  ),
  13 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  14 => 
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
    'down_vote_user_id' => '0',
  ),
  15 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  16 => 
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
    'down_vote_user_id' => '0',
  ),
  17 => 
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
  18 => 
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
)
INFO - 2021-04-09 07:36:21 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:21 --> Total execution time: 0.0378
INFO - 2021-04-09 07:36:23 --> Config Class Initialized
INFO - 2021-04-09 07:36:23 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:23 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:23 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:23 --> URI Class Initialized
INFO - 2021-04-09 07:36:23 --> Router Class Initialized
INFO - 2021-04-09 07:36:23 --> Output Class Initialized
INFO - 2021-04-09 07:36:23 --> Config Class Initialized
INFO - 2021-04-09 07:36:23 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:23 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:23 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:23 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:23 --> Input Class Initialized
INFO - 2021-04-09 07:36:23 --> URI Class Initialized
INFO - 2021-04-09 07:36:23 --> Language Class Initialized
INFO - 2021-04-09 07:36:23 --> Router Class Initialized
INFO - 2021-04-09 07:36:23 --> Output Class Initialized
INFO - 2021-04-09 07:36:23 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:23 --> Input Class Initialized
INFO - 2021-04-09 07:36:23 --> Language Class Initialized
INFO - 2021-04-09 07:36:23 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:23 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:23 --> Config Class Initialized
INFO - 2021-04-09 07:36:23 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:23 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:23 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:36:23 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:23 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:23 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:23 --> URI Class Initialized
INFO - 2021-04-09 07:36:23 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:23 --> Router Class Initialized
INFO - 2021-04-09 07:36:23 --> Output Class Initialized
INFO - 2021-04-09 07:36:23 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:23 --> Input Class Initialized
INFO - 2021-04-09 07:36:23 --> Language Class Initialized
INFO - 2021-04-09 07:36:23 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:23 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:23 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:23 --> Config Class Initialized
INFO - 2021-04-09 07:36:23 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:23 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:23 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:23 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:23 --> Helper loaded: url_helper
DEBUG - 2021-04-09 07:36:23 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:23 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:23 --> URI Class Initialized
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Controller Class Initialized
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:23 --> Total execution time: 0.1106
INFO - 2021-04-09 07:36:23 --> Router Class Initialized
INFO - 2021-04-09 07:36:23 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:23 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:23 --> Config Class Initialized
INFO - 2021-04-09 07:36:23 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:23 --> Output Class Initialized
INFO - 2021-04-09 07:36:23 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:23 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:23 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Controller Class Initialized
INFO - 2021-04-09 07:36:23 --> URI Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:23 --> Input Class Initialized
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:23 --> Total execution time: 0.2913
INFO - 2021-04-09 07:36:23 --> Language Class Initialized
INFO - 2021-04-09 07:36:23 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:23 --> Router Class Initialized
INFO - 2021-04-09 07:36:23 --> Output Class Initialized
INFO - 2021-04-09 07:36:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:23 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:23 --> Security Class Initialized
INFO - 2021-04-09 07:36:23 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:23 --> Input Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-09 07:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:23 --> Language Class Initialized
INFO - 2021-04-09 07:36:23 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Controller Class Initialized
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:23 --> Total execution time: 0.1911
INFO - 2021-04-09 07:36:23 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:23 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:23 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:23 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:23 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:23 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:23 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:23 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Controller Class Initialized
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:23 --> Total execution time: 0.1831
DEBUG - 2021-04-09 07:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Controller Class Initialized
INFO - 2021-04-09 07:36:23 --> Model Class Initialized
INFO - 2021-04-09 07:36:23 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:23 --> Total execution time: 0.1922
INFO - 2021-04-09 07:36:24 --> Config Class Initialized
INFO - 2021-04-09 07:36:24 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:24 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:24 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:24 --> URI Class Initialized
INFO - 2021-04-09 07:36:24 --> Router Class Initialized
INFO - 2021-04-09 07:36:24 --> Output Class Initialized
INFO - 2021-04-09 07:36:24 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:24 --> Input Class Initialized
INFO - 2021-04-09 07:36:24 --> Language Class Initialized
INFO - 2021-04-09 07:36:24 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:24 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:24 --> Config Class Initialized
INFO - 2021-04-09 07:36:24 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:24 --> Config Class Initialized
INFO - 2021-04-09 07:36:24 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:24 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:24 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:36:24 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:24 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:24 --> URI Class Initialized
INFO - 2021-04-09 07:36:24 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:24 --> URI Class Initialized
INFO - 2021-04-09 07:36:24 --> Router Class Initialized
INFO - 2021-04-09 07:36:24 --> Router Class Initialized
INFO - 2021-04-09 07:36:24 --> Output Class Initialized
INFO - 2021-04-09 07:36:24 --> Output Class Initialized
INFO - 2021-04-09 07:36:24 --> Security Class Initialized
INFO - 2021-04-09 07:36:24 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:24 --> Input Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:24 --> Language Class Initialized
INFO - 2021-04-09 07:36:24 --> Input Class Initialized
INFO - 2021-04-09 07:36:24 --> Language Class Initialized
INFO - 2021-04-09 07:36:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:24 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:24 --> Loader Class Initialized
INFO - 2021-04-09 07:36:24 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-09 07:36:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:24 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:36:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:24 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:24 --> Config Class Initialized
INFO - 2021-04-09 07:36:24 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:24 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:24 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Controller Class Initialized
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:24 --> Total execution time: 0.2922
INFO - 2021-04-09 07:36:24 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:36:24 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:24 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:24 --> URI Class Initialized
INFO - 2021-04-09 07:36:24 --> Config Class Initialized
INFO - 2021-04-09 07:36:24 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:24 --> Router Class Initialized
INFO - 2021-04-09 07:36:24 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:24 --> Output Class Initialized
DEBUG - 2021-04-09 07:36:24 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:24 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:24 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:24 --> URI Class Initialized
INFO - 2021-04-09 07:36:24 --> Security Class Initialized
INFO - 2021-04-09 07:36:24 --> Router Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-09 07:36:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:24 --> Input Class Initialized
INFO - 2021-04-09 07:36:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Controller Class Initialized
INFO - 2021-04-09 07:36:24 --> Language Class Initialized
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:24 --> Total execution time: 0.1079
INFO - 2021-04-09 07:36:24 --> Output Class Initialized
INFO - 2021-04-09 07:36:24 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:24 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:24 --> Input Class Initialized
INFO - 2021-04-09 07:36:24 --> Loader Class Initialized
INFO - 2021-04-09 07:36:24 --> Language Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:24 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:24 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:24 --> Loader Class Initialized
INFO - 2021-04-09 07:36:24 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:36:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:24 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:36:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Controller Class Initialized
INFO - 2021-04-09 07:36:24 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:24 --> Total execution time: 0.1977
INFO - 2021-04-09 07:36:24 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:24 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:24 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:24 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:24 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Controller Class Initialized
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:24 --> Total execution time: 0.1997
DEBUG - 2021-04-09 07:36:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Controller Class Initialized
INFO - 2021-04-09 07:36:24 --> Model Class Initialized
INFO - 2021-04-09 07:36:24 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:24 --> Total execution time: 0.1133
INFO - 2021-04-09 07:36:24 --> Config Class Initialized
INFO - 2021-04-09 07:36:24 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:24 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:24 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:24 --> URI Class Initialized
INFO - 2021-04-09 07:36:24 --> Router Class Initialized
INFO - 2021-04-09 07:36:24 --> Output Class Initialized
INFO - 2021-04-09 07:36:24 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:24 --> Input Class Initialized
INFO - 2021-04-09 07:36:24 --> Language Class Initialized
INFO - 2021-04-09 07:36:24 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:24 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:24 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:24 --> Config Class Initialized
INFO - 2021-04-09 07:36:24 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:24 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:24 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:24 --> URI Class Initialized
INFO - 2021-04-09 07:36:24 --> Router Class Initialized
INFO - 2021-04-09 07:36:24 --> Output Class Initialized
INFO - 2021-04-09 07:36:24 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:25 --> Input Class Initialized
INFO - 2021-04-09 07:36:25 --> Language Class Initialized
INFO - 2021-04-09 07:36:25 --> Config Class Initialized
INFO - 2021-04-09 07:36:25 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:25 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:25 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:25 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:25 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:25 --> Config Class Initialized
INFO - 2021-04-09 07:36:25 --> Config Class Initialized
INFO - 2021-04-09 07:36:25 --> URI Class Initialized
INFO - 2021-04-09 07:36:25 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:25 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:25 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:25 --> Router Class Initialized
INFO - 2021-04-09 07:36:25 --> Helper loaded: url_helper
DEBUG - 2021-04-09 07:36:25 --> UTF-8 Support Enabled
DEBUG - 2021-04-09 07:36:25 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:25 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:25 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:25 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:25 --> URI Class Initialized
INFO - 2021-04-09 07:36:25 --> URI Class Initialized
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:25 --> Output Class Initialized
INFO - 2021-04-09 07:36:25 --> Router Class Initialized
INFO - 2021-04-09 07:36:25 --> Router Class Initialized
INFO - 2021-04-09 07:36:25 --> Security Class Initialized
INFO - 2021-04-09 07:36:25 --> Output Class Initialized
INFO - 2021-04-09 07:36:25 --> Output Class Initialized
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:25 --> Security Class Initialized
INFO - 2021-04-09 07:36:25 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:25 --> Input Class Initialized
INFO - 2021-04-09 07:36:25 --> Language Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:25 --> Input Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:25 --> Input Class Initialized
INFO - 2021-04-09 07:36:25 --> Language Class Initialized
INFO - 2021-04-09 07:36:25 --> Language Class Initialized
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.2114
INFO - 2021-04-09 07:36:25 --> Loader Class Initialized
INFO - 2021-04-09 07:36:25 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:25 --> Helper loaded: security_helper
DEBUG - 2021-04-09 07:36:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:25 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: url_helper
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:25 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.1072
INFO - 2021-04-09 07:36:25 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:25 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.1104
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.1149
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.1972
INFO - 2021-04-09 07:36:25 --> Config Class Initialized
INFO - 2021-04-09 07:36:25 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:25 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:25 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:25 --> URI Class Initialized
INFO - 2021-04-09 07:36:25 --> Router Class Initialized
INFO - 2021-04-09 07:36:25 --> Output Class Initialized
INFO - 2021-04-09 07:36:25 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:25 --> Input Class Initialized
INFO - 2021-04-09 07:36:25 --> Language Class Initialized
INFO - 2021-04-09 07:36:25 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:25 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:25 --> Config Class Initialized
INFO - 2021-04-09 07:36:25 --> Hooks Class Initialized
INFO - 2021-04-09 07:36:25 --> Config Class Initialized
INFO - 2021-04-09 07:36:25 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:25 --> UTF-8 Support Enabled
DEBUG - 2021-04-09 07:36:25 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:25 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:25 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:25 --> URI Class Initialized
INFO - 2021-04-09 07:36:25 --> URI Class Initialized
INFO - 2021-04-09 07:36:25 --> Router Class Initialized
INFO - 2021-04-09 07:36:25 --> Router Class Initialized
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:25 --> Output Class Initialized
INFO - 2021-04-09 07:36:25 --> Output Class Initialized
INFO - 2021-04-09 07:36:25 --> Security Class Initialized
INFO - 2021-04-09 07:36:25 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Input Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:25 --> Input Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.1836
INFO - 2021-04-09 07:36:25 --> Language Class Initialized
INFO - 2021-04-09 07:36:25 --> Language Class Initialized
INFO - 2021-04-09 07:36:25 --> Config Class Initialized
INFO - 2021-04-09 07:36:25 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:36:25 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:36:25 --> Utf8 Class Initialized
INFO - 2021-04-09 07:36:25 --> Loader Class Initialized
INFO - 2021-04-09 07:36:25 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-09 07:36:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:25 --> URI Class Initialized
INFO - 2021-04-09 07:36:25 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:25 --> Router Class Initialized
INFO - 2021-04-09 07:36:25 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:25 --> Output Class Initialized
INFO - 2021-04-09 07:36:25 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:25 --> Security Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:36:25 --> Input Class Initialized
INFO - 2021-04-09 07:36:25 --> Language Class Initialized
INFO - 2021-04-09 07:36:25 --> Loader Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:36:25 --> Helper loaded: security_helper
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
INFO - 2021-04-09 07:36:25 --> Helper loaded: form_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: url_helper
INFO - 2021-04-09 07:36:25 --> Helper loaded: common_helper
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.1076
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
INFO - 2021-04-09 07:36:25 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.1087
INFO - 2021-04-09 07:36:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:36:25 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:36:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Controller Class Initialized
INFO - 2021-04-09 07:36:25 --> Model Class Initialized
INFO - 2021-04-09 07:36:25 --> Final output sent to browser
DEBUG - 2021-04-09 07:36:25 --> Total execution time: 0.0996
INFO - 2021-04-09 07:37:19 --> Config Class Initialized
INFO - 2021-04-09 07:37:19 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:19 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:19 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:19 --> URI Class Initialized
INFO - 2021-04-09 07:37:19 --> Router Class Initialized
INFO - 2021-04-09 07:37:19 --> Output Class Initialized
INFO - 2021-04-09 07:37:19 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:19 --> Input Class Initialized
INFO - 2021-04-09 07:37:19 --> Language Class Initialized
INFO - 2021-04-09 07:37:19 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:19 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:19 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:19 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:19 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:19 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:19 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:19 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:37:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:19 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:19 --> Model Class Initialized
INFO - 2021-04-09 07:37:19 --> Controller Class Initialized
INFO - 2021-04-09 07:37:19 --> Model Class Initialized
INFO - 2021-04-09 07:37:19 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:19 --> Total execution time: 0.0554
INFO - 2021-04-09 07:37:21 --> Config Class Initialized
INFO - 2021-04-09 07:37:21 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:21 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:21 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:21 --> URI Class Initialized
INFO - 2021-04-09 07:37:21 --> Router Class Initialized
INFO - 2021-04-09 07:37:21 --> Output Class Initialized
INFO - 2021-04-09 07:37:21 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:21 --> Input Class Initialized
INFO - 2021-04-09 07:37:21 --> Language Class Initialized
INFO - 2021-04-09 07:37:21 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:21 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:21 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:21 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:21 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:21 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:21 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:37:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:21 --> Model Class Initialized
INFO - 2021-04-09 07:37:21 --> Controller Class Initialized
INFO - 2021-04-09 07:37:21 --> Model Class Initialized
INFO - 2021-04-09 07:37:21 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:37:21 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:37:21 --> PostList-Respos--> array (
  0 => 
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
  1 => 
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
  2 => 
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
  3 => 
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
    'down_vote_user_id' => '0',
  ),
  4 => 
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
    'up_vote_user_id' => '31',
    'down_vote_user_id' => '0',
  ),
  5 => 
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
    'down_vote_user_id' => '31',
  ),
  6 => 
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
    'down_vote_user_id' => '0',
  ),
  7 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
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
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:37:21 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:21 --> Total execution time: 0.0358
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.2072
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.1090
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.1100
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.2769
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.1981
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.1115
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.1908
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:22 --> Config Class Initialized
INFO - 2021-04-09 07:37:22 --> Hooks Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:37:22 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:22 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:22 --> URI Class Initialized
INFO - 2021-04-09 07:37:22 --> Router Class Initialized
INFO - 2021-04-09 07:37:22 --> Output Class Initialized
INFO - 2021-04-09 07:37:22 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:22 --> Input Class Initialized
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:22 --> Language Class Initialized
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
INFO - 2021-04-09 07:37:22 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:22 --> Helper loaded: security_helper
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.1193
INFO - 2021-04-09 07:37:22 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:22 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:22 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:22 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Controller Class Initialized
INFO - 2021-04-09 07:37:22 --> Model Class Initialized
INFO - 2021-04-09 07:37:22 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:22 --> Total execution time: 0.0998
INFO - 2021-04-09 07:37:30 --> Config Class Initialized
INFO - 2021-04-09 07:37:30 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:30 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:30 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:30 --> URI Class Initialized
INFO - 2021-04-09 07:37:30 --> Router Class Initialized
INFO - 2021-04-09 07:37:30 --> Output Class Initialized
INFO - 2021-04-09 07:37:30 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:30 --> Input Class Initialized
INFO - 2021-04-09 07:37:30 --> Language Class Initialized
INFO - 2021-04-09 07:37:30 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:30 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:30 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:30 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:30 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:30 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:30 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:30 --> Model Class Initialized
INFO - 2021-04-09 07:37:30 --> Controller Class Initialized
INFO - 2021-04-09 07:37:30 --> Model Class Initialized
INFO - 2021-04-09 07:37:30 --> PostList-Request--> array (
  'from' => '10',
  'to' => '19',
  'user_id' => '31',
)
INFO - 2021-04-09 07:37:30 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 10, 19 '
INFO - 2021-04-09 07:37:30 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-09 07:37:30 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:30 --> Total execution time: 0.0377
INFO - 2021-04-09 07:37:32 --> Config Class Initialized
INFO - 2021-04-09 07:37:32 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:32 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:32 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:32 --> URI Class Initialized
INFO - 2021-04-09 07:37:32 --> Router Class Initialized
INFO - 2021-04-09 07:37:32 --> Output Class Initialized
INFO - 2021-04-09 07:37:32 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:32 --> Input Class Initialized
INFO - 2021-04-09 07:37:32 --> Language Class Initialized
INFO - 2021-04-09 07:37:32 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:32 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:32 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:32 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:32 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:32 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:32 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:32 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:37:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:32 --> Model Class Initialized
INFO - 2021-04-09 07:37:32 --> Controller Class Initialized
INFO - 2021-04-09 07:37:32 --> Model Class Initialized
INFO - 2021-04-09 07:37:32 --> PostList-Request--> array (
  'from' => '10',
  'to' => '19',
  'user_id' => '31',
)
INFO - 2021-04-09 07:37:32 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 10, 19 '
INFO - 2021-04-09 07:37:32 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-09 07:37:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:32 --> Total execution time: 0.0344
INFO - 2021-04-09 07:37:52 --> Config Class Initialized
INFO - 2021-04-09 07:37:52 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:52 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:52 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:52 --> URI Class Initialized
INFO - 2021-04-09 07:37:52 --> Router Class Initialized
INFO - 2021-04-09 07:37:52 --> Output Class Initialized
INFO - 2021-04-09 07:37:52 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:52 --> Input Class Initialized
INFO - 2021-04-09 07:37:52 --> Language Class Initialized
INFO - 2021-04-09 07:37:52 --> Loader Class Initialized
DEBUG - 2021-04-09 07:37:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:37:52 --> Helper loaded: security_helper
INFO - 2021-04-09 07:37:52 --> Helper loaded: form_helper
INFO - 2021-04-09 07:37:52 --> Helper loaded: url_helper
INFO - 2021-04-09 07:37:52 --> Helper loaded: common_helper
INFO - 2021-04-09 07:37:52 --> Database Driver Class Initialized
INFO - 2021-04-09 07:37:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:37:52 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:37:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:37:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:37:52 --> Model Class Initialized
INFO - 2021-04-09 07:37:52 --> Controller Class Initialized
INFO - 2021-04-09 07:37:52 --> Model Class Initialized
INFO - 2021-04-09 07:37:52 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:37:52 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:37:52 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '98',
    'user_id' => '32',
    'post_image' => 'images/60700510c2596.jpg',
    'post_description' => 'test #tesch',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 13:11:04',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '94',
    'user_id' => '32',
    'post_image' => 'images/606ffb344e04b.jpg',
    'post_description' => 'dsfdsf',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:29:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '93',
    'user_id' => '32',
    'post_image' => '606ffb0321d5a.jpg',
    'post_description' => 'teerer',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:28:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '92',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:42',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '91',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '90',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '89',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '88',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:30:21',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '87',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:17:18',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:37:52 --> Final output sent to browser
DEBUG - 2021-04-09 07:37:52 --> Total execution time: 0.0386
INFO - 2021-04-09 07:37:55 --> Config Class Initialized
INFO - 2021-04-09 07:37:55 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:37:55 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:37:55 --> Utf8 Class Initialized
INFO - 2021-04-09 07:37:55 --> URI Class Initialized
INFO - 2021-04-09 07:37:55 --> Router Class Initialized
INFO - 2021-04-09 07:37:55 --> Output Class Initialized
INFO - 2021-04-09 07:37:55 --> Security Class Initialized
DEBUG - 2021-04-09 07:37:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:37:55 --> Input Class Initialized
INFO - 2021-04-09 07:37:55 --> Language Class Initialized
ERROR - 2021-04-09 07:37:55 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-09 07:39:26 --> Config Class Initialized
INFO - 2021-04-09 07:39:26 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:26 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:26 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:26 --> URI Class Initialized
INFO - 2021-04-09 07:39:26 --> Router Class Initialized
INFO - 2021-04-09 07:39:26 --> Output Class Initialized
INFO - 2021-04-09 07:39:26 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:26 --> Input Class Initialized
INFO - 2021-04-09 07:39:26 --> Language Class Initialized
ERROR - 2021-04-09 07:39:26 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-09 07:39:28 --> Config Class Initialized
INFO - 2021-04-09 07:39:28 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:28 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:28 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:28 --> URI Class Initialized
INFO - 2021-04-09 07:39:28 --> Router Class Initialized
INFO - 2021-04-09 07:39:28 --> Output Class Initialized
INFO - 2021-04-09 07:39:28 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:28 --> Input Class Initialized
INFO - 2021-04-09 07:39:28 --> Language Class Initialized
INFO - 2021-04-09 07:39:28 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:28 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:28 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:28 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:28 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:28 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:28 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:28 --> Model Class Initialized
INFO - 2021-04-09 07:39:28 --> Controller Class Initialized
INFO - 2021-04-09 07:39:28 --> Model Class Initialized
INFO - 2021-04-09 07:39:28 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:28 --> Total execution time: 0.0304
INFO - 2021-04-09 07:39:30 --> Config Class Initialized
INFO - 2021-04-09 07:39:30 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:30 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:30 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:30 --> URI Class Initialized
INFO - 2021-04-09 07:39:30 --> Router Class Initialized
INFO - 2021-04-09 07:39:30 --> Output Class Initialized
INFO - 2021-04-09 07:39:30 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:30 --> Input Class Initialized
INFO - 2021-04-09 07:39:30 --> Language Class Initialized
INFO - 2021-04-09 07:39:30 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:30 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:30 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:30 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:30 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:30 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:30 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:30 --> Model Class Initialized
INFO - 2021-04-09 07:39:30 --> Controller Class Initialized
INFO - 2021-04-09 07:39:30 --> Model Class Initialized
INFO - 2021-04-09 07:39:30 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:39:30 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:39:30 --> PostList-Respos--> array (
  0 => 
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
  1 => 
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
  2 => 
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
  3 => 
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
    'down_vote_user_id' => '0',
  ),
  4 => 
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
    'up_vote_user_id' => '31',
    'down_vote_user_id' => '0',
  ),
  5 => 
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
    'down_vote_user_id' => '31',
  ),
  6 => 
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
    'down_vote_user_id' => '0',
  ),
  7 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
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
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:39:30 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:30 --> Total execution time: 0.0357
INFO - 2021-04-09 07:39:31 --> Config Class Initialized
INFO - 2021-04-09 07:39:31 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:31 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:31 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:31 --> URI Class Initialized
INFO - 2021-04-09 07:39:31 --> Router Class Initialized
INFO - 2021-04-09 07:39:31 --> Output Class Initialized
INFO - 2021-04-09 07:39:31 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:31 --> Input Class Initialized
INFO - 2021-04-09 07:39:31 --> Language Class Initialized
INFO - 2021-04-09 07:39:31 --> Loader Class Initialized
INFO - 2021-04-09 07:39:31 --> Config Class Initialized
INFO - 2021-04-09 07:39:31 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:31 --> Helper loaded: security_helper
DEBUG - 2021-04-09 07:39:31 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:31 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:31 --> URI Class Initialized
INFO - 2021-04-09 07:39:31 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:31 --> Router Class Initialized
INFO - 2021-04-09 07:39:31 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:31 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:31 --> Output Class Initialized
INFO - 2021-04-09 07:39:31 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:31 --> Input Class Initialized
INFO - 2021-04-09 07:39:31 --> Language Class Initialized
INFO - 2021-04-09 07:39:31 --> Config Class Initialized
INFO - 2021-04-09 07:39:31 --> Hooks Class Initialized
INFO - 2021-04-09 07:39:31 --> Loader Class Initialized
INFO - 2021-04-09 07:39:31 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:39:31 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:31 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:31 --> URI Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:31 --> Router Class Initialized
INFO - 2021-04-09 07:39:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:31 --> Pagination Class Initialized
INFO - 2021-04-09 07:39:31 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:31 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:31 --> Output Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:31 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:31 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:31 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:31 --> Model Class Initialized
INFO - 2021-04-09 07:39:31 --> Controller Class Initialized
INFO - 2021-04-09 07:39:31 --> Security Class Initialized
INFO - 2021-04-09 07:39:31 --> Model Class Initialized
INFO - 2021-04-09 07:39:31 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:31 --> Total execution time: 0.2024
DEBUG - 2021-04-09 07:39:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:31 --> Input Class Initialized
INFO - 2021-04-09 07:39:31 --> Language Class Initialized
INFO - 2021-04-09 07:39:31 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:31 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:31 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:31 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:31 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:31 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:31 --> Config Class Initialized
INFO - 2021-04-09 07:39:31 --> Hooks Class Initialized
INFO - 2021-04-09 07:39:31 --> Config Class Initialized
INFO - 2021-04-09 07:39:31 --> Hooks Class Initialized
INFO - 2021-04-09 07:39:31 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2021-04-09 07:39:31 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:31 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:31 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:31 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:31 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:31 --> URI Class Initialized
INFO - 2021-04-09 07:39:31 --> URI Class Initialized
INFO - 2021-04-09 07:39:31 --> Router Class Initialized
INFO - 2021-04-09 07:39:31 --> Router Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:31 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:31 --> Model Class Initialized
INFO - 2021-04-09 07:39:31 --> Output Class Initialized
INFO - 2021-04-09 07:39:31 --> Controller Class Initialized
INFO - 2021-04-09 07:39:31 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:31 --> Model Class Initialized
INFO - 2021-04-09 07:39:31 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:31 --> Total execution time: 0.2023
INFO - 2021-04-09 07:39:31 --> Output Class Initialized
INFO - 2021-04-09 07:39:31 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:31 --> Input Class Initialized
INFO - 2021-04-09 07:39:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:31 --> Pagination Class Initialized
INFO - 2021-04-09 07:39:31 --> Security Class Initialized
INFO - 2021-04-09 07:39:31 --> Language Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:31 --> Input Class Initialized
INFO - 2021-04-09 07:39:31 --> Language Class Initialized
INFO - 2021-04-09 07:39:31 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-09 07:39:31 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:31 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:31 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:31 --> Model Class Initialized
INFO - 2021-04-09 07:39:31 --> Controller Class Initialized
INFO - 2021-04-09 07:39:31 --> Model Class Initialized
INFO - 2021-04-09 07:39:31 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:31 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:31 --> Total execution time: 0.1210
INFO - 2021-04-09 07:39:31 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:31 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:32 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:32 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:32 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:32 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:32 --> Pagination Class Initialized
INFO - 2021-04-09 07:39:32 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Controller Class Initialized
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:32 --> Total execution time: 0.1081
INFO - 2021-04-09 07:39:32 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:32 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Controller Class Initialized
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:32 --> Total execution time: 0.2029
INFO - 2021-04-09 07:39:32 --> Config Class Initialized
INFO - 2021-04-09 07:39:32 --> Hooks Class Initialized
INFO - 2021-04-09 07:39:32 --> Config Class Initialized
INFO - 2021-04-09 07:39:32 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:32 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:32 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:39:32 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:32 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:32 --> URI Class Initialized
INFO - 2021-04-09 07:39:32 --> URI Class Initialized
INFO - 2021-04-09 07:39:32 --> Router Class Initialized
INFO - 2021-04-09 07:39:32 --> Router Class Initialized
INFO - 2021-04-09 07:39:32 --> Output Class Initialized
INFO - 2021-04-09 07:39:32 --> Security Class Initialized
INFO - 2021-04-09 07:39:32 --> Output Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:32 --> Input Class Initialized
INFO - 2021-04-09 07:39:32 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:32 --> Input Class Initialized
INFO - 2021-04-09 07:39:32 --> Language Class Initialized
INFO - 2021-04-09 07:39:32 --> Language Class Initialized
INFO - 2021-04-09 07:39:32 --> Loader Class Initialized
INFO - 2021-04-09 07:39:32 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-09 07:39:32 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:32 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:32 --> Config Class Initialized
INFO - 2021-04-09 07:39:32 --> Hooks Class Initialized
INFO - 2021-04-09 07:39:32 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:39:32 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:32 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:32 --> URI Class Initialized
INFO - 2021-04-09 07:39:32 --> Router Class Initialized
INFO - 2021-04-09 07:39:32 --> Output Class Initialized
INFO - 2021-04-09 07:39:32 --> Security Class Initialized
INFO - 2021-04-09 07:39:32 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:32 --> Input Class Initialized
INFO - 2021-04-09 07:39:32 --> Language Class Initialized
INFO - 2021-04-09 07:39:32 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:32 --> Pagination Class Initialized
INFO - 2021-04-09 07:39:32 --> Loader Class Initialized
INFO - 2021-04-09 07:39:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:32 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-09 07:39:32 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:32 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Controller Class Initialized
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:32 --> Total execution time: 0.1143
DEBUG - 2021-04-09 07:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Controller Class Initialized
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:32 --> Total execution time: 0.1884
INFO - 2021-04-09 07:39:32 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:32 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:32 --> Pagination Class Initialized
INFO - 2021-04-09 07:39:32 --> Config Class Initialized
INFO - 2021-04-09 07:39:32 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:32 --> UTF-8 Support Enabled
DEBUG - 2021-04-09 07:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:32 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Controller Class Initialized
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:32 --> Total execution time: 0.1220
INFO - 2021-04-09 07:39:32 --> URI Class Initialized
INFO - 2021-04-09 07:39:32 --> Router Class Initialized
INFO - 2021-04-09 07:39:32 --> Output Class Initialized
INFO - 2021-04-09 07:39:32 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:32 --> Input Class Initialized
INFO - 2021-04-09 07:39:32 --> Language Class Initialized
INFO - 2021-04-09 07:39:32 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:32 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:32 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:32 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:32 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Controller Class Initialized
INFO - 2021-04-09 07:39:32 --> Model Class Initialized
INFO - 2021-04-09 07:39:32 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:32 --> Total execution time: 0.0928
INFO - 2021-04-09 07:39:35 --> Config Class Initialized
INFO - 2021-04-09 07:39:35 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:35 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:35 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:35 --> URI Class Initialized
INFO - 2021-04-09 07:39:35 --> Router Class Initialized
INFO - 2021-04-09 07:39:35 --> Output Class Initialized
INFO - 2021-04-09 07:39:35 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:35 --> Input Class Initialized
INFO - 2021-04-09 07:39:35 --> Language Class Initialized
INFO - 2021-04-09 07:39:35 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:35 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:35 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:35 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:35 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:35 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:35 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:35 --> Model Class Initialized
INFO - 2021-04-09 07:39:35 --> Controller Class Initialized
INFO - 2021-04-09 07:39:35 --> Model Class Initialized
INFO - 2021-04-09 07:39:35 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:39:35 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:39:35 --> PostList-Respos--> array (
  0 => 
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
  1 => 
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
  2 => 
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
  3 => 
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
    'down_vote_user_id' => '0',
  ),
  4 => 
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
    'up_vote_user_id' => '31',
    'down_vote_user_id' => '0',
  ),
  5 => 
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
    'down_vote_user_id' => '31',
  ),
  6 => 
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
    'down_vote_user_id' => '0',
  ),
  7 => 
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
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
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
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:39:35 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:35 --> Total execution time: 0.0306
INFO - 2021-04-09 07:39:44 --> Config Class Initialized
INFO - 2021-04-09 07:39:44 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:44 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:44 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:44 --> URI Class Initialized
INFO - 2021-04-09 07:39:44 --> Router Class Initialized
INFO - 2021-04-09 07:39:44 --> Output Class Initialized
INFO - 2021-04-09 07:39:44 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:44 --> Input Class Initialized
INFO - 2021-04-09 07:39:44 --> Language Class Initialized
INFO - 2021-04-09 07:39:44 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:44 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:44 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:44 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:44 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:44 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:44 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:44 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:44 --> Model Class Initialized
INFO - 2021-04-09 07:39:44 --> Controller Class Initialized
INFO - 2021-04-09 07:39:44 --> Model Class Initialized
INFO - 2021-04-09 07:39:44 --> Config Class Initialized
INFO - 2021-04-09 07:39:44 --> Hooks Class Initialized
INFO - 2021-04-09 07:39:44 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:44 --> Total execution time: 0.0983
DEBUG - 2021-04-09 07:39:44 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:44 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:44 --> URI Class Initialized
INFO - 2021-04-09 07:39:44 --> Router Class Initialized
INFO - 2021-04-09 07:39:44 --> Output Class Initialized
INFO - 2021-04-09 07:39:44 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:44 --> Input Class Initialized
INFO - 2021-04-09 07:39:44 --> Language Class Initialized
INFO - 2021-04-09 07:39:44 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:44 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:44 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:44 --> Config Class Initialized
INFO - 2021-04-09 07:39:44 --> Hooks Class Initialized
INFO - 2021-04-09 07:39:44 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:44 --> Helper loaded: url_helper
DEBUG - 2021-04-09 07:39:44 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:44 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:44 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:44 --> URI Class Initialized
INFO - 2021-04-09 07:39:44 --> Router Class Initialized
INFO - 2021-04-09 07:39:44 --> Output Class Initialized
INFO - 2021-04-09 07:39:44 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:44 --> Input Class Initialized
INFO - 2021-04-09 07:39:44 --> Language Class Initialized
INFO - 2021-04-09 07:39:44 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:44 --> Loader Class Initialized
INFO - 2021-04-09 07:39:44 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:44 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:44 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:44 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:44 --> Model Class Initialized
INFO - 2021-04-09 07:39:44 --> Controller Class Initialized
INFO - 2021-04-09 07:39:44 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:44 --> Model Class Initialized
INFO - 2021-04-09 07:39:44 --> album-Request--> array (
  'user_id' => '31',
)
INFO - 2021-04-09 07:39:44 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:44 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-09 07:39:44 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:44 --> Total execution time: 0.0970
INFO - 2021-04-09 07:39:44 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:44 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:44 --> Model Class Initialized
INFO - 2021-04-09 07:39:44 --> Controller Class Initialized
INFO - 2021-04-09 07:39:44 --> Model Class Initialized
INFO - 2021-04-09 07:39:44 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:44 --> Total execution time: 0.0311
INFO - 2021-04-09 07:39:51 --> Config Class Initialized
INFO - 2021-04-09 07:39:51 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:51 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:51 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:51 --> URI Class Initialized
INFO - 2021-04-09 07:39:51 --> Router Class Initialized
INFO - 2021-04-09 07:39:51 --> Output Class Initialized
INFO - 2021-04-09 07:39:51 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:51 --> Input Class Initialized
INFO - 2021-04-09 07:39:51 --> Language Class Initialized
INFO - 2021-04-09 07:39:51 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:51 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:51 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:51 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:51 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:51 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:51 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:51 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:51 --> Model Class Initialized
INFO - 2021-04-09 07:39:51 --> Controller Class Initialized
INFO - 2021-04-09 07:39:51 --> Model Class Initialized
INFO - 2021-04-09 07:39:51 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:51 --> Total execution time: 0.0291
INFO - 2021-04-09 07:39:53 --> Config Class Initialized
INFO - 2021-04-09 07:39:53 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:39:53 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:39:53 --> Utf8 Class Initialized
INFO - 2021-04-09 07:39:53 --> URI Class Initialized
INFO - 2021-04-09 07:39:53 --> Router Class Initialized
INFO - 2021-04-09 07:39:53 --> Output Class Initialized
INFO - 2021-04-09 07:39:53 --> Security Class Initialized
DEBUG - 2021-04-09 07:39:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:39:53 --> Input Class Initialized
INFO - 2021-04-09 07:39:53 --> Language Class Initialized
INFO - 2021-04-09 07:39:53 --> Loader Class Initialized
DEBUG - 2021-04-09 07:39:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:39:53 --> Helper loaded: security_helper
INFO - 2021-04-09 07:39:53 --> Helper loaded: form_helper
INFO - 2021-04-09 07:39:53 --> Helper loaded: url_helper
INFO - 2021-04-09 07:39:53 --> Helper loaded: common_helper
INFO - 2021-04-09 07:39:53 --> Database Driver Class Initialized
INFO - 2021-04-09 07:39:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:39:53 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:39:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:39:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:39:53 --> Model Class Initialized
INFO - 2021-04-09 07:39:53 --> Controller Class Initialized
INFO - 2021-04-09 07:39:53 --> Model Class Initialized
INFO - 2021-04-09 07:39:53 --> Final output sent to browser
DEBUG - 2021-04-09 07:39:53 --> Total execution time: 0.0501
INFO - 2021-04-09 07:40:04 --> Config Class Initialized
INFO - 2021-04-09 07:40:04 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:04 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:04 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:04 --> URI Class Initialized
INFO - 2021-04-09 07:40:04 --> Router Class Initialized
INFO - 2021-04-09 07:40:04 --> Output Class Initialized
INFO - 2021-04-09 07:40:04 --> Security Class Initialized
DEBUG - 2021-04-09 07:40:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:04 --> Input Class Initialized
INFO - 2021-04-09 07:40:04 --> Language Class Initialized
INFO - 2021-04-09 07:40:04 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:04 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:04 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:04 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:04 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:04 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:04 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:04 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:40:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:04 --> Model Class Initialized
INFO - 2021-04-09 07:40:04 --> Controller Class Initialized
INFO - 2021-04-09 07:40:04 --> Model Class Initialized
INFO - 2021-04-09 07:40:04 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:04 --> Total execution time: 0.0302
INFO - 2021-04-09 07:40:40 --> Config Class Initialized
INFO - 2021-04-09 07:40:40 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:40 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:40 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:40 --> URI Class Initialized
INFO - 2021-04-09 07:40:40 --> Router Class Initialized
INFO - 2021-04-09 07:40:40 --> Output Class Initialized
INFO - 2021-04-09 07:40:40 --> Security Class Initialized
DEBUG - 2021-04-09 07:40:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:40 --> Input Class Initialized
INFO - 2021-04-09 07:40:40 --> Language Class Initialized
INFO - 2021-04-09 07:40:40 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:40 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:40 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:40 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:40 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:40 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:40 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:40:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:40 --> Model Class Initialized
INFO - 2021-04-09 07:40:40 --> Controller Class Initialized
INFO - 2021-04-09 07:40:40 --> Model Class Initialized
INFO - 2021-04-09 07:40:40 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:40 --> Total execution time: 0.0298
INFO - 2021-04-09 07:40:42 --> Config Class Initialized
INFO - 2021-04-09 07:40:42 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:42 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:42 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:42 --> URI Class Initialized
INFO - 2021-04-09 07:40:42 --> Router Class Initialized
INFO - 2021-04-09 07:40:42 --> Output Class Initialized
INFO - 2021-04-09 07:40:42 --> Security Class Initialized
DEBUG - 2021-04-09 07:40:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:42 --> Input Class Initialized
INFO - 2021-04-09 07:40:42 --> Language Class Initialized
INFO - 2021-04-09 07:40:42 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:42 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:42 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:42 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:42 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:42 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:42 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:42 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:40:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:42 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:42 --> Model Class Initialized
INFO - 2021-04-09 07:40:42 --> Controller Class Initialized
INFO - 2021-04-09 07:40:42 --> Model Class Initialized
INFO - 2021-04-09 07:40:42 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:42 --> Total execution time: 0.0309
INFO - 2021-04-09 07:40:48 --> Config Class Initialized
INFO - 2021-04-09 07:40:48 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:48 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:48 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:48 --> URI Class Initialized
INFO - 2021-04-09 07:40:48 --> Router Class Initialized
INFO - 2021-04-09 07:40:48 --> Output Class Initialized
INFO - 2021-04-09 07:40:48 --> Security Class Initialized
DEBUG - 2021-04-09 07:40:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:48 --> Input Class Initialized
INFO - 2021-04-09 07:40:48 --> Language Class Initialized
INFO - 2021-04-09 07:40:48 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:48 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:48 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:48 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:48 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:48 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:48 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:40:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:48 --> Model Class Initialized
INFO - 2021-04-09 07:40:48 --> Controller Class Initialized
INFO - 2021-04-09 07:40:48 --> Model Class Initialized
INFO - 2021-04-09 07:40:48 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:40:48 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:40:48 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '98',
    'user_id' => '32',
    'post_image' => 'images/60700510c2596.jpg',
    'post_description' => 'test #tesch',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 13:11:04',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '94',
    'user_id' => '32',
    'post_image' => 'images/606ffb344e04b.jpg',
    'post_description' => 'dsfdsf',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:29:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '93',
    'user_id' => '32',
    'post_image' => '606ffb0321d5a.jpg',
    'post_description' => 'teerer',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:28:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '92',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:42',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '91',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '90',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '89',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '88',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:30:21',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '87',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:17:18',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:40:48 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:48 --> Total execution time: 0.0380
INFO - 2021-04-09 07:40:49 --> Config Class Initialized
INFO - 2021-04-09 07:40:49 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:49 --> URI Class Initialized
INFO - 2021-04-09 07:40:49 --> Router Class Initialized
INFO - 2021-04-09 07:40:49 --> Output Class Initialized
INFO - 2021-04-09 07:40:49 --> Security Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:49 --> Input Class Initialized
INFO - 2021-04-09 07:40:49 --> Language Class Initialized
INFO - 2021-04-09 07:40:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:49 --> Config Class Initialized
INFO - 2021-04-09 07:40:49 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:49 --> Config Class Initialized
INFO - 2021-04-09 07:40:49 --> Hooks Class Initialized
INFO - 2021-04-09 07:40:49 --> URI Class Initialized
INFO - 2021-04-09 07:40:49 --> Config Class Initialized
INFO - 2021-04-09 07:40:49 --> Hooks Class Initialized
INFO - 2021-04-09 07:40:49 --> Router Class Initialized
DEBUG - 2021-04-09 07:40:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:40:49 --> URI Class Initialized
DEBUG - 2021-04-09 07:40:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:49 --> Output Class Initialized
INFO - 2021-04-09 07:40:49 --> Router Class Initialized
INFO - 2021-04-09 07:40:49 --> URI Class Initialized
INFO - 2021-04-09 07:40:49 --> Security Class Initialized
INFO - 2021-04-09 07:40:49 --> Output Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:49 --> Router Class Initialized
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
INFO - 2021-04-09 07:40:49 --> Controller Class Initialized
INFO - 2021-04-09 07:40:49 --> Security Class Initialized
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:49 --> Input Class Initialized
INFO - 2021-04-09 07:40:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:49 --> Total execution time: 0.2041
INFO - 2021-04-09 07:40:49 --> Language Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:49 --> Input Class Initialized
INFO - 2021-04-09 07:40:49 --> Language Class Initialized
INFO - 2021-04-09 07:40:49 --> Output Class Initialized
INFO - 2021-04-09 07:40:49 --> Security Class Initialized
INFO - 2021-04-09 07:40:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:49 --> Input Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:49 --> Config Class Initialized
INFO - 2021-04-09 07:40:49 --> Hooks Class Initialized
INFO - 2021-04-09 07:40:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:49 --> Language Class Initialized
DEBUG - 2021-04-09 07:40:49 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:49 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:49 --> URI Class Initialized
INFO - 2021-04-09 07:40:49 --> Loader Class Initialized
INFO - 2021-04-09 07:40:49 --> Router Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:40:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:49 --> Output Class Initialized
INFO - 2021-04-09 07:40:49 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:40:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
INFO - 2021-04-09 07:40:49 --> Controller Class Initialized
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
INFO - 2021-04-09 07:40:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:49 --> Total execution time: 0.1077
INFO - 2021-04-09 07:40:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:49 --> Security Class Initialized
INFO - 2021-04-09 07:40:49 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:40:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:49 --> Input Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:49 --> Language Class Initialized
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
INFO - 2021-04-09 07:40:49 --> Controller Class Initialized
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
INFO - 2021-04-09 07:40:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:49 --> Total execution time: 0.1960
INFO - 2021-04-09 07:40:49 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:49 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:49 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:49 --> Pagination Class Initialized
INFO - 2021-04-09 07:40:49 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:49 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
DEBUG - 2021-04-09 07:40:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:49 --> Controller Class Initialized
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
INFO - 2021-04-09 07:40:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:49 --> Total execution time: 0.2832
INFO - 2021-04-09 07:40:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
INFO - 2021-04-09 07:40:49 --> Controller Class Initialized
INFO - 2021-04-09 07:40:49 --> Model Class Initialized
INFO - 2021-04-09 07:40:49 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:49 --> Total execution time: 0.1882
INFO - 2021-04-09 07:40:50 --> Config Class Initialized
INFO - 2021-04-09 07:40:50 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:50 --> Config Class Initialized
INFO - 2021-04-09 07:40:50 --> Hooks Class Initialized
INFO - 2021-04-09 07:40:50 --> URI Class Initialized
INFO - 2021-04-09 07:40:50 --> Router Class Initialized
DEBUG - 2021-04-09 07:40:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:50 --> URI Class Initialized
INFO - 2021-04-09 07:40:50 --> Output Class Initialized
INFO - 2021-04-09 07:40:50 --> Router Class Initialized
INFO - 2021-04-09 07:40:50 --> Config Class Initialized
INFO - 2021-04-09 07:40:50 --> Hooks Class Initialized
INFO - 2021-04-09 07:40:50 --> Security Class Initialized
INFO - 2021-04-09 07:40:50 --> Output Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:50 --> Input Class Initialized
INFO - 2021-04-09 07:40:50 --> Language Class Initialized
INFO - 2021-04-09 07:40:50 --> Security Class Initialized
DEBUG - 2021-04-09 07:40:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:50 --> Utf8 Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:50 --> Input Class Initialized
INFO - 2021-04-09 07:40:50 --> URI Class Initialized
INFO - 2021-04-09 07:40:50 --> Language Class Initialized
INFO - 2021-04-09 07:40:50 --> Loader Class Initialized
INFO - 2021-04-09 07:40:50 --> Router Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:50 --> Loader Class Initialized
INFO - 2021-04-09 07:40:50 --> Helper loaded: form_helper
DEBUG - 2021-04-09 07:40:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:50 --> Output Class Initialized
INFO - 2021-04-09 07:40:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:50 --> Security Class Initialized
INFO - 2021-04-09 07:40:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:50 --> Config Class Initialized
INFO - 2021-04-09 07:40:50 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:50 --> Input Class Initialized
INFO - 2021-04-09 07:40:50 --> Language Class Initialized
DEBUG - 2021-04-09 07:40:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:50 --> URI Class Initialized
INFO - 2021-04-09 07:40:50 --> Loader Class Initialized
INFO - 2021-04-09 07:40:50 --> Router Class Initialized
INFO - 2021-04-09 07:40:50 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:50 --> Output Class Initialized
INFO - 2021-04-09 07:40:50 --> Security Class Initialized
INFO - 2021-04-09 07:40:50 --> Database Driver Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:50 --> Input Class Initialized
INFO - 2021-04-09 07:40:50 --> Language Class Initialized
INFO - 2021-04-09 07:40:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:50 --> Pagination Class Initialized
INFO - 2021-04-09 07:40:50 --> Pagination Class Initialized
INFO - 2021-04-09 07:40:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:50 --> Helper loaded: common_helper
DEBUG - 2021-04-09 07:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:50 --> Loader Class Initialized
INFO - 2021-04-09 07:40:50 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-09 07:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-09 07:40:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:50 --> Model Class Initialized
INFO - 2021-04-09 07:40:50 --> Controller Class Initialized
INFO - 2021-04-09 07:40:50 --> Model Class Initialized
INFO - 2021-04-09 07:40:50 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:50 --> Total execution time: 0.1789
INFO - 2021-04-09 07:40:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:50 --> Model Class Initialized
INFO - 2021-04-09 07:40:50 --> Controller Class Initialized
INFO - 2021-04-09 07:40:50 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:50 --> Model Class Initialized
INFO - 2021-04-09 07:40:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:50 --> Total execution time: 0.1856
INFO - 2021-04-09 07:40:50 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:50 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:50 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:50 --> Model Class Initialized
INFO - 2021-04-09 07:40:50 --> Controller Class Initialized
INFO - 2021-04-09 07:40:50 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:50 --> Model Class Initialized
INFO - 2021-04-09 07:40:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:50 --> Total execution time: 0.1167
INFO - 2021-04-09 07:40:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:50 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:50 --> Model Class Initialized
INFO - 2021-04-09 07:40:50 --> Controller Class Initialized
INFO - 2021-04-09 07:40:50 --> Model Class Initialized
INFO - 2021-04-09 07:40:50 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:50 --> Total execution time: 0.1111
INFO - 2021-04-09 07:40:50 --> Config Class Initialized
INFO - 2021-04-09 07:40:50 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:50 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:50 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:50 --> URI Class Initialized
INFO - 2021-04-09 07:40:50 --> Router Class Initialized
INFO - 2021-04-09 07:40:50 --> Output Class Initialized
INFO - 2021-04-09 07:40:50 --> Security Class Initialized
DEBUG - 2021-04-09 07:40:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:50 --> Input Class Initialized
INFO - 2021-04-09 07:40:50 --> Language Class Initialized
ERROR - 2021-04-09 07:40:50 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-09 07:40:56 --> Config Class Initialized
INFO - 2021-04-09 07:40:56 --> Hooks Class Initialized
DEBUG - 2021-04-09 07:40:56 --> UTF-8 Support Enabled
INFO - 2021-04-09 07:40:56 --> Utf8 Class Initialized
INFO - 2021-04-09 07:40:56 --> URI Class Initialized
INFO - 2021-04-09 07:40:56 --> Router Class Initialized
INFO - 2021-04-09 07:40:56 --> Output Class Initialized
INFO - 2021-04-09 07:40:56 --> Security Class Initialized
DEBUG - 2021-04-09 07:40:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-09 07:40:56 --> Input Class Initialized
INFO - 2021-04-09 07:40:56 --> Language Class Initialized
INFO - 2021-04-09 07:40:56 --> Loader Class Initialized
DEBUG - 2021-04-09 07:40:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-09 07:40:56 --> Helper loaded: security_helper
INFO - 2021-04-09 07:40:56 --> Helper loaded: form_helper
INFO - 2021-04-09 07:40:56 --> Helper loaded: url_helper
INFO - 2021-04-09 07:40:56 --> Helper loaded: common_helper
INFO - 2021-04-09 07:40:56 --> Database Driver Class Initialized
INFO - 2021-04-09 07:40:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-09 07:40:56 --> Pagination Class Initialized
DEBUG - 2021-04-09 07:40:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-09 07:40:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-09 07:40:56 --> Model Class Initialized
INFO - 2021-04-09 07:40:56 --> Controller Class Initialized
INFO - 2021-04-09 07:40:56 --> Model Class Initialized
INFO - 2021-04-09 07:40:56 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-09 07:40:56 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id)
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9 '
INFO - 2021-04-09 07:40:56 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '98',
    'user_id' => '32',
    'post_image' => 'images/60700510c2596.jpg',
    'post_description' => 'test #tesch',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 13:11:04',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '94',
    'user_id' => '32',
    'post_image' => 'images/606ffb344e04b.jpg',
    'post_description' => 'dsfdsf',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:29:00',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '93',
    'user_id' => '32',
    'post_image' => '606ffb0321d5a.jpg',
    'post_description' => 'teerer',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 12:28:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '92',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:42',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '91',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'tstsr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:51:36',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '90',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:30',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '89',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:35:11',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '88',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test by admin',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:30:21',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '87',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:17:18',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-09 07:40:56 --> Final output sent to browser
DEBUG - 2021-04-09 07:40:56 --> Total execution time: 0.0295
