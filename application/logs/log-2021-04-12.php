<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2021-04-12 00:02:36 --> Config Class Initialized
INFO - 2021-04-12 00:02:36 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:02:36 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:36 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:36 --> URI Class Initialized
INFO - 2021-04-12 00:02:36 --> Router Class Initialized
INFO - 2021-04-12 00:02:36 --> Output Class Initialized
INFO - 2021-04-12 00:02:36 --> Security Class Initialized
DEBUG - 2021-04-12 00:02:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:36 --> Input Class Initialized
INFO - 2021-04-12 00:02:36 --> Language Class Initialized
INFO - 2021-04-12 00:02:36 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:36 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:36 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:36 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:36 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:36 --> Helper loaded: common_helper
INFO - 2021-04-12 00:02:36 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:36 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:02:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:36 --> Model Class Initialized
INFO - 2021-04-12 00:02:36 --> Controller Class Initialized
INFO - 2021-04-12 00:02:36 --> Model Class Initialized
INFO - 2021-04-12 00:02:36 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 00:02:36 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
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
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 00:02:36 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:02:36 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:36 --> Total execution time: 0.0330
INFO - 2021-04-12 00:02:37 --> Config Class Initialized
INFO - 2021-04-12 00:02:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:02:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:37 --> URI Class Initialized
INFO - 2021-04-12 00:02:37 --> Router Class Initialized
INFO - 2021-04-12 00:02:37 --> Output Class Initialized
INFO - 2021-04-12 00:02:37 --> Security Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:37 --> Input Class Initialized
INFO - 2021-04-12 00:02:37 --> Language Class Initialized
INFO - 2021-04-12 00:02:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:02:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Controller Class Initialized
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:37 --> Total execution time: 0.0299
INFO - 2021-04-12 00:02:37 --> Config Class Initialized
INFO - 2021-04-12 00:02:37 --> Hooks Class Initialized
INFO - 2021-04-12 00:02:37 --> Config Class Initialized
INFO - 2021-04-12 00:02:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:02:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:37 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:02:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:37 --> URI Class Initialized
INFO - 2021-04-12 00:02:37 --> URI Class Initialized
INFO - 2021-04-12 00:02:37 --> Router Class Initialized
INFO - 2021-04-12 00:02:37 --> Router Class Initialized
INFO - 2021-04-12 00:02:37 --> Output Class Initialized
INFO - 2021-04-12 00:02:37 --> Config Class Initialized
INFO - 2021-04-12 00:02:37 --> Hooks Class Initialized
INFO - 2021-04-12 00:02:37 --> Security Class Initialized
DEBUG - 2021-04-12 00:02:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:37 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:37 --> Input Class Initialized
INFO - 2021-04-12 00:02:37 --> Output Class Initialized
INFO - 2021-04-12 00:02:37 --> Language Class Initialized
INFO - 2021-04-12 00:02:37 --> URI Class Initialized
INFO - 2021-04-12 00:02:37 --> Router Class Initialized
INFO - 2021-04-12 00:02:37 --> Security Class Initialized
INFO - 2021-04-12 00:02:37 --> Output Class Initialized
INFO - 2021-04-12 00:02:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 00:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:37 --> Input Class Initialized
INFO - 2021-04-12 00:02:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:37 --> Security Class Initialized
INFO - 2021-04-12 00:02:37 --> Language Class Initialized
INFO - 2021-04-12 00:02:37 --> Config Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:37 --> Hooks Class Initialized
INFO - 2021-04-12 00:02:37 --> Input Class Initialized
INFO - 2021-04-12 00:02:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:37 --> Language Class Initialized
INFO - 2021-04-12 00:02:37 --> Loader Class Initialized
INFO - 2021-04-12 00:02:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:02:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:37 --> Helper loaded: security_helper
DEBUG - 2021-04-12 00:02:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:37 --> URI Class Initialized
INFO - 2021-04-12 00:02:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:37 --> Config Class Initialized
INFO - 2021-04-12 00:02:37 --> Hooks Class Initialized
INFO - 2021-04-12 00:02:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:37 --> Router Class Initialized
INFO - 2021-04-12 00:02:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:02:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:37 --> Output Class Initialized
INFO - 2021-04-12 00:02:37 --> URI Class Initialized
INFO - 2021-04-12 00:02:37 --> Security Class Initialized
INFO - 2021-04-12 00:02:37 --> Router Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:37 --> Input Class Initialized
INFO - 2021-04-12 00:02:37 --> Language Class Initialized
INFO - 2021-04-12 00:02:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:37 --> Output Class Initialized
INFO - 2021-04-12 00:02:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:37 --> Security Class Initialized
INFO - 2021-04-12 00:02:37 --> Loader Class Initialized
INFO - 2021-04-12 00:02:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:37 --> Pagination Class Initialized
INFO - 2021-04-12 00:02:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:37 --> Input Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:37 --> Language Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Controller Class Initialized
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:37 --> Total execution time: 0.1123
INFO - 2021-04-12 00:02:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: form_helper
DEBUG - 2021-04-12 00:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Controller Class Initialized
INFO - 2021-04-12 00:02:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Pagination Class Initialized
INFO - 2021-04-12 00:02:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:37 --> Total execution time: 0.2002
INFO - 2021-04-12 00:02:37 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Controller Class Initialized
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:37 --> Total execution time: 0.2876
INFO - 2021-04-12 00:02:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:37 --> Pagination Class Initialized
INFO - 2021-04-12 00:02:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Controller Class Initialized
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:37 --> Total execution time: 0.2005
DEBUG - 2021-04-12 00:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Controller Class Initialized
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:37 --> Total execution time: 0.1211
INFO - 2021-04-12 00:02:37 --> Config Class Initialized
INFO - 2021-04-12 00:02:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:02:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:37 --> URI Class Initialized
INFO - 2021-04-12 00:02:37 --> Router Class Initialized
INFO - 2021-04-12 00:02:37 --> Output Class Initialized
INFO - 2021-04-12 00:02:37 --> Security Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:37 --> Input Class Initialized
INFO - 2021-04-12 00:02:37 --> Language Class Initialized
INFO - 2021-04-12 00:02:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:02:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Controller Class Initialized
INFO - 2021-04-12 00:02:37 --> Model Class Initialized
INFO - 2021-04-12 00:02:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:37 --> Total execution time: 0.0920
INFO - 2021-04-12 00:02:37 --> Config Class Initialized
INFO - 2021-04-12 00:02:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:02:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:38 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:38 --> URI Class Initialized
INFO - 2021-04-12 00:02:38 --> Router Class Initialized
INFO - 2021-04-12 00:02:38 --> Output Class Initialized
INFO - 2021-04-12 00:02:38 --> Security Class Initialized
DEBUG - 2021-04-12 00:02:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:38 --> Input Class Initialized
INFO - 2021-04-12 00:02:38 --> Language Class Initialized
INFO - 2021-04-12 00:02:38 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:38 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:38 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:38 --> Config Class Initialized
INFO - 2021-04-12 00:02:38 --> Hooks Class Initialized
INFO - 2021-04-12 00:02:38 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:38 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:38 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:02:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:38 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:38 --> URI Class Initialized
INFO - 2021-04-12 00:02:38 --> Router Class Initialized
INFO - 2021-04-12 00:02:38 --> Output Class Initialized
INFO - 2021-04-12 00:02:38 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:38 --> Security Class Initialized
INFO - 2021-04-12 00:02:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:38 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:02:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:38 --> Input Class Initialized
INFO - 2021-04-12 00:02:38 --> Language Class Initialized
DEBUG - 2021-04-12 00:02:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:38 --> Model Class Initialized
INFO - 2021-04-12 00:02:38 --> Controller Class Initialized
INFO - 2021-04-12 00:02:38 --> Model Class Initialized
INFO - 2021-04-12 00:02:38 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:38 --> Total execution time: 0.1000
INFO - 2021-04-12 00:02:38 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:38 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:38 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:38 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:38 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:38 --> Helper loaded: common_helper
INFO - 2021-04-12 00:02:38 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:38 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:02:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:38 --> Model Class Initialized
INFO - 2021-04-12 00:02:38 --> Controller Class Initialized
INFO - 2021-04-12 00:02:38 --> Model Class Initialized
INFO - 2021-04-12 00:02:38 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:38 --> Total execution time: 0.0964
INFO - 2021-04-12 00:02:38 --> Config Class Initialized
INFO - 2021-04-12 00:02:38 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:02:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:38 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:38 --> URI Class Initialized
INFO - 2021-04-12 00:02:38 --> Router Class Initialized
INFO - 2021-04-12 00:02:38 --> Output Class Initialized
INFO - 2021-04-12 00:02:38 --> Security Class Initialized
DEBUG - 2021-04-12 00:02:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:38 --> Input Class Initialized
INFO - 2021-04-12 00:02:38 --> Language Class Initialized
ERROR - 2021-04-12 00:02:38 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 00:02:38 --> Config Class Initialized
INFO - 2021-04-12 00:02:38 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:02:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:38 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:38 --> URI Class Initialized
INFO - 2021-04-12 00:02:38 --> Router Class Initialized
INFO - 2021-04-12 00:02:38 --> Output Class Initialized
INFO - 2021-04-12 00:02:38 --> Security Class Initialized
DEBUG - 2021-04-12 00:02:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:38 --> Input Class Initialized
INFO - 2021-04-12 00:02:38 --> Language Class Initialized
ERROR - 2021-04-12 00:02:38 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 00:02:41 --> Config Class Initialized
INFO - 2021-04-12 00:02:41 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:02:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:02:41 --> Utf8 Class Initialized
INFO - 2021-04-12 00:02:41 --> URI Class Initialized
INFO - 2021-04-12 00:02:41 --> Router Class Initialized
INFO - 2021-04-12 00:02:41 --> Output Class Initialized
INFO - 2021-04-12 00:02:41 --> Security Class Initialized
DEBUG - 2021-04-12 00:02:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:02:41 --> Input Class Initialized
INFO - 2021-04-12 00:02:41 --> Language Class Initialized
INFO - 2021-04-12 00:02:41 --> Loader Class Initialized
DEBUG - 2021-04-12 00:02:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:02:41 --> Helper loaded: security_helper
INFO - 2021-04-12 00:02:41 --> Helper loaded: form_helper
INFO - 2021-04-12 00:02:41 --> Helper loaded: url_helper
INFO - 2021-04-12 00:02:41 --> Helper loaded: common_helper
INFO - 2021-04-12 00:02:41 --> Database Driver Class Initialized
INFO - 2021-04-12 00:02:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:02:41 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:02:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:02:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:02:41 --> Model Class Initialized
INFO - 2021-04-12 00:02:41 --> Controller Class Initialized
INFO - 2021-04-12 00:02:41 --> Model Class Initialized
ERROR - 2021-04-12 00:02:41 --> Severity: Notice --> Undefined index: LOGFILE /home/memefeed/public_html/meme_feed/system/core/Log.php 180
INFO - 2021-04-12 00:02:41 --> Final output sent to browser
DEBUG - 2021-04-12 00:02:41 --> Total execution time: 0.0305
INFO - 2021-04-12 00:03:31 --> Config Class Initialized
INFO - 2021-04-12 00:03:31 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:31 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:31 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:31 --> URI Class Initialized
INFO - 2021-04-12 00:03:31 --> Router Class Initialized
INFO - 2021-04-12 00:03:31 --> Output Class Initialized
INFO - 2021-04-12 00:03:31 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:31 --> Input Class Initialized
INFO - 2021-04-12 00:03:31 --> Language Class Initialized
INFO - 2021-04-12 00:03:31 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:31 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:31 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:31 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:31 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:31 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:31 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:31 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:31 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:31 --> Model Class Initialized
INFO - 2021-04-12 00:03:31 --> Controller Class Initialized
INFO - 2021-04-12 00:03:31 --> Model Class Initialized
INFO - 2021-04-12 00:03:31 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 00:03:31 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
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
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 00:03:31 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:03:31 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:31 --> Total execution time: 0.0317
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:33 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:33 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Controller Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:33 --> Total execution time: 0.1943
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
INFO - 2021-04-12 00:03:33 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:33 --> Pagination Class Initialized
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Controller Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:33 --> Total execution time: 0.1179
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:33 --> Pagination Class Initialized
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Controller Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:33 --> Total execution time: 0.1968
INFO - 2021-04-12 00:03:33 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:33 --> Pagination Class Initialized
INFO - 2021-04-12 00:03:33 --> Database Driver Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:33 --> Pagination Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Controller Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:33 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:33 --> Total execution time: 0.2860
INFO - 2021-04-12 00:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Controller Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:33 --> Total execution time: 0.2012
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:33 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:33 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Controller Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:33 --> Total execution time: 0.1084
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:33 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:33 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Controller Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:33 --> Total execution time: 0.1717
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:33 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:33 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Controller Class Initialized
INFO - 2021-04-12 00:03:33 --> Model Class Initialized
INFO - 2021-04-12 00:03:33 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:33 --> Total execution time: 0.0369
INFO - 2021-04-12 00:03:33 --> Config Class Initialized
INFO - 2021-04-12 00:03:33 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:33 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:33 --> URI Class Initialized
INFO - 2021-04-12 00:03:33 --> Router Class Initialized
INFO - 2021-04-12 00:03:33 --> Output Class Initialized
INFO - 2021-04-12 00:03:33 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:33 --> Input Class Initialized
INFO - 2021-04-12 00:03:33 --> Language Class Initialized
INFO - 2021-04-12 00:03:33 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:33 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:33 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:34 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:34 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:34 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:34 --> Model Class Initialized
INFO - 2021-04-12 00:03:34 --> Controller Class Initialized
INFO - 2021-04-12 00:03:34 --> Model Class Initialized
INFO - 2021-04-12 00:03:34 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:34 --> Total execution time: 0.0414
INFO - 2021-04-12 00:03:34 --> Config Class Initialized
INFO - 2021-04-12 00:03:34 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:34 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:34 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:34 --> URI Class Initialized
INFO - 2021-04-12 00:03:34 --> Router Class Initialized
INFO - 2021-04-12 00:03:34 --> Output Class Initialized
INFO - 2021-04-12 00:03:34 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:34 --> Input Class Initialized
INFO - 2021-04-12 00:03:34 --> Language Class Initialized
ERROR - 2021-04-12 00:03:34 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 00:03:34 --> Config Class Initialized
INFO - 2021-04-12 00:03:34 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:34 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:34 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:34 --> URI Class Initialized
INFO - 2021-04-12 00:03:34 --> Router Class Initialized
INFO - 2021-04-12 00:03:34 --> Output Class Initialized
INFO - 2021-04-12 00:03:34 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:34 --> Input Class Initialized
INFO - 2021-04-12 00:03:34 --> Language Class Initialized
ERROR - 2021-04-12 00:03:34 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 00:03:37 --> Config Class Initialized
INFO - 2021-04-12 00:03:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:03:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:03:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:03:37 --> URI Class Initialized
INFO - 2021-04-12 00:03:37 --> Router Class Initialized
INFO - 2021-04-12 00:03:37 --> Output Class Initialized
INFO - 2021-04-12 00:03:37 --> Security Class Initialized
DEBUG - 2021-04-12 00:03:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:03:37 --> Input Class Initialized
INFO - 2021-04-12 00:03:37 --> Language Class Initialized
INFO - 2021-04-12 00:03:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:03:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:03:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:03:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:03:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:03:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:03:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:03:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:03:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:03:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:03:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:03:37 --> Model Class Initialized
INFO - 2021-04-12 00:03:37 --> Controller Class Initialized
INFO - 2021-04-12 00:03:37 --> Model Class Initialized
ERROR - 2021-04-12 00:03:37 --> Severity: Notice --> Undefined index: LOGFILE /home/memefeed/public_html/meme_feed/system/core/Log.php 180
INFO - 2021-04-12 00:03:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:03:37 --> Total execution time: 0.0338
INFO - 2021-04-12 00:04:44 --> Config Class Initialized
INFO - 2021-04-12 00:04:44 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:04:44 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:04:44 --> Utf8 Class Initialized
INFO - 2021-04-12 00:04:44 --> URI Class Initialized
INFO - 2021-04-12 00:04:44 --> Router Class Initialized
INFO - 2021-04-12 00:04:44 --> Output Class Initialized
INFO - 2021-04-12 00:04:44 --> Security Class Initialized
DEBUG - 2021-04-12 00:04:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:04:44 --> Input Class Initialized
INFO - 2021-04-12 00:04:44 --> Language Class Initialized
INFO - 2021-04-12 00:04:44 --> Loader Class Initialized
DEBUG - 2021-04-12 00:04:44 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:04:44 --> Helper loaded: security_helper
INFO - 2021-04-12 00:04:44 --> Helper loaded: form_helper
INFO - 2021-04-12 00:04:44 --> Helper loaded: url_helper
INFO - 2021-04-12 00:04:44 --> Helper loaded: common_helper
INFO - 2021-04-12 00:04:44 --> Database Driver Class Initialized
INFO - 2021-04-12 00:04:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:04:44 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:04:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:04:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:04:44 --> Model Class Initialized
INFO - 2021-04-12 00:04:44 --> Controller Class Initialized
INFO - 2021-04-12 00:04:44 --> Model Class Initialized
ERROR - 2021-04-12 00:04:44 --> Severity: Notice --> Undefined index: LOGFILE /home/memefeed/public_html/meme_feed/system/core/Log.php 180
INFO - 2021-04-12 00:04:44 --> Final output sent to browser
DEBUG - 2021-04-12 00:04:44 --> Total execution time: 0.0321
INFO - 2021-04-12 00:04:47 --> Config Class Initialized
INFO - 2021-04-12 00:04:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:04:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:04:47 --> Utf8 Class Initialized
INFO - 2021-04-12 00:04:47 --> URI Class Initialized
INFO - 2021-04-12 00:04:47 --> Router Class Initialized
INFO - 2021-04-12 00:04:47 --> Output Class Initialized
INFO - 2021-04-12 00:04:47 --> Security Class Initialized
DEBUG - 2021-04-12 00:04:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:04:47 --> Input Class Initialized
INFO - 2021-04-12 00:04:47 --> Language Class Initialized
INFO - 2021-04-12 00:04:47 --> Loader Class Initialized
DEBUG - 2021-04-12 00:04:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:04:47 --> Helper loaded: security_helper
INFO - 2021-04-12 00:04:47 --> Helper loaded: form_helper
INFO - 2021-04-12 00:04:47 --> Helper loaded: url_helper
INFO - 2021-04-12 00:04:47 --> Helper loaded: common_helper
INFO - 2021-04-12 00:04:48 --> Database Driver Class Initialized
INFO - 2021-04-12 00:04:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:04:48 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:04:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:04:48 --> Model Class Initialized
INFO - 2021-04-12 00:04:48 --> Controller Class Initialized
INFO - 2021-04-12 00:04:48 --> Model Class Initialized
ERROR - 2021-04-12 00:04:48 --> Severity: Notice --> Undefined index: LOGFILE /home/memefeed/public_html/meme_feed/system/core/Log.php 180
INFO - 2021-04-12 00:04:48 --> Final output sent to browser
DEBUG - 2021-04-12 00:04:48 --> Total execution time: 0.0312
INFO - 2021-04-12 00:05:03 --> Config Class Initialized
INFO - 2021-04-12 00:05:03 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:05:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:05:03 --> Utf8 Class Initialized
INFO - 2021-04-12 00:05:03 --> URI Class Initialized
INFO - 2021-04-12 00:05:03 --> Router Class Initialized
INFO - 2021-04-12 00:05:03 --> Output Class Initialized
INFO - 2021-04-12 00:05:03 --> Security Class Initialized
DEBUG - 2021-04-12 00:05:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:05:03 --> Input Class Initialized
INFO - 2021-04-12 00:05:03 --> Language Class Initialized
INFO - 2021-04-12 00:05:03 --> Loader Class Initialized
DEBUG - 2021-04-12 00:05:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:05:03 --> Helper loaded: security_helper
INFO - 2021-04-12 00:05:03 --> Helper loaded: form_helper
INFO - 2021-04-12 00:05:03 --> Helper loaded: url_helper
INFO - 2021-04-12 00:05:03 --> Helper loaded: common_helper
INFO - 2021-04-12 00:05:03 --> Database Driver Class Initialized
INFO - 2021-04-12 00:05:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:05:03 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:05:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:05:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:05:03 --> Model Class Initialized
INFO - 2021-04-12 00:05:03 --> Controller Class Initialized
INFO - 2021-04-12 00:05:03 --> Model Class Initialized
ERROR - 2021-04-12 00:05:03 --> Severity: Notice --> Undefined index: LOGFILE /home/memefeed/public_html/meme_feed/system/core/Log.php 180
INFO - 2021-04-12 00:05:03 --> Final output sent to browser
DEBUG - 2021-04-12 00:05:03 --> Total execution time: 0.0317
INFO - 2021-04-12 00:23:35 --> Config Class Initialized
INFO - 2021-04-12 00:23:35 --> Hooks Class Initialized
INFO - 2021-04-12 00:23:35 --> Config Class Initialized
INFO - 2021-04-12 00:23:35 --> Hooks Class Initialized
INFO - 2021-04-12 00:23:35 --> Config Class Initialized
INFO - 2021-04-12 00:23:35 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:35 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:35 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:23:35 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:35 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:23:35 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:35 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:35 --> URI Class Initialized
INFO - 2021-04-12 00:23:35 --> URI Class Initialized
INFO - 2021-04-12 00:23:35 --> URI Class Initialized
INFO - 2021-04-12 00:23:35 --> Router Class Initialized
INFO - 2021-04-12 00:23:35 --> Router Class Initialized
INFO - 2021-04-12 00:23:35 --> Router Class Initialized
INFO - 2021-04-12 00:23:35 --> Output Class Initialized
INFO - 2021-04-12 00:23:35 --> Output Class Initialized
INFO - 2021-04-12 00:23:35 --> Output Class Initialized
INFO - 2021-04-12 00:23:35 --> Security Class Initialized
INFO - 2021-04-12 00:23:35 --> Security Class Initialized
INFO - 2021-04-12 00:23:35 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-12 00:23:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:35 --> Input Class Initialized
INFO - 2021-04-12 00:23:35 --> Input Class Initialized
DEBUG - 2021-04-12 00:23:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:35 --> Input Class Initialized
INFO - 2021-04-12 00:23:35 --> Language Class Initialized
INFO - 2021-04-12 00:23:35 --> Language Class Initialized
INFO - 2021-04-12 00:23:35 --> Language Class Initialized
INFO - 2021-04-12 00:23:35 --> Loader Class Initialized
INFO - 2021-04-12 00:23:35 --> Loader Class Initialized
INFO - 2021-04-12 00:23:35 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 00:23:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 00:23:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:35 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:35 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:35 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:35 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:35 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:35 --> Pagination Class Initialized
INFO - 2021-04-12 00:23:35 --> Pagination Class Initialized
INFO - 2021-04-12 00:23:35 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:23:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 00:23:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 00:23:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:35 --> Model Class Initialized
INFO - 2021-04-12 00:23:35 --> Controller Class Initialized
INFO - 2021-04-12 00:23:35 --> Model Class Initialized
INFO - 2021-04-12 00:23:35 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
ERROR - 2021-04-12 00:23:35 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 00:23:35 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 00:23:35 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:23:35 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:35 --> Total execution time: 0.6259
INFO - 2021-04-12 00:23:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:35 --> Model Class Initialized
INFO - 2021-04-12 00:23:35 --> Controller Class Initialized
INFO - 2021-04-12 00:23:35 --> Model Class Initialized
INFO - 2021-04-12 00:23:35 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 00:23:35 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
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
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 00:23:35 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:23:35 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:35 --> Total execution time: 0.6480
INFO - 2021-04-12 00:23:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:35 --> Model Class Initialized
INFO - 2021-04-12 00:23:35 --> Controller Class Initialized
INFO - 2021-04-12 00:23:35 --> Model Class Initialized
INFO - 2021-04-12 00:23:35 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:35 --> Total execution time: 0.6547
INFO - 2021-04-12 00:23:36 --> Config Class Initialized
INFO - 2021-04-12 00:23:36 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:36 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:36 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:36 --> URI Class Initialized
INFO - 2021-04-12 00:23:36 --> Router Class Initialized
INFO - 2021-04-12 00:23:36 --> Output Class Initialized
INFO - 2021-04-12 00:23:36 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:36 --> Input Class Initialized
INFO - 2021-04-12 00:23:36 --> Language Class Initialized
INFO - 2021-04-12 00:23:36 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:36 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:36 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:36 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:36 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:36 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:36 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:36 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.2880
INFO - 2021-04-12 00:23:37 --> Config Class Initialized
INFO - 2021-04-12 00:23:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:37 --> URI Class Initialized
INFO - 2021-04-12 00:23:37 --> Router Class Initialized
INFO - 2021-04-12 00:23:37 --> Output Class Initialized
INFO - 2021-04-12 00:23:37 --> Security Class Initialized
INFO - 2021-04-12 00:23:37 --> Config Class Initialized
INFO - 2021-04-12 00:23:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:37 --> Input Class Initialized
DEBUG - 2021-04-12 00:23:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:37 --> Config Class Initialized
INFO - 2021-04-12 00:23:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:37 --> Config Class Initialized
INFO - 2021-04-12 00:23:37 --> Hooks Class Initialized
INFO - 2021-04-12 00:23:37 --> Hooks Class Initialized
INFO - 2021-04-12 00:23:37 --> Language Class Initialized
INFO - 2021-04-12 00:23:37 --> URI Class Initialized
DEBUG - 2021-04-12 00:23:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:37 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:23:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:37 --> Router Class Initialized
INFO - 2021-04-12 00:23:37 --> URI Class Initialized
INFO - 2021-04-12 00:23:37 --> URI Class Initialized
INFO - 2021-04-12 00:23:37 --> Router Class Initialized
INFO - 2021-04-12 00:23:37 --> Loader Class Initialized
INFO - 2021-04-12 00:23:37 --> Router Class Initialized
INFO - 2021-04-12 00:23:37 --> Output Class Initialized
INFO - 2021-04-12 00:23:37 --> Output Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:37 --> Security Class Initialized
INFO - 2021-04-12 00:23:37 --> Security Class Initialized
INFO - 2021-04-12 00:23:37 --> Output Class Initialized
INFO - 2021-04-12 00:23:37 --> Helper loaded: form_helper
DEBUG - 2021-04-12 00:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:37 --> Input Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:37 --> Input Class Initialized
INFO - 2021-04-12 00:23:37 --> Language Class Initialized
INFO - 2021-04-12 00:23:37 --> Security Class Initialized
INFO - 2021-04-12 00:23:37 --> Language Class Initialized
INFO - 2021-04-12 00:23:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:37 --> Input Class Initialized
INFO - 2021-04-12 00:23:37 --> Language Class Initialized
INFO - 2021-04-12 00:23:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:37 --> Loader Class Initialized
INFO - 2021-04-12 00:23:37 --> Helper loaded: security_helper
DEBUG - 2021-04-12 00:23:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:37 --> Pagination Class Initialized
INFO - 2021-04-12 00:23:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:37 --> Database Driver Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.2020
INFO - 2021-04-12 00:23:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:37 --> Pagination Class Initialized
INFO - 2021-04-12 00:23:37 --> Pagination Class Initialized
INFO - 2021-04-12 00:23:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.1963
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.2019
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.1971
INFO - 2021-04-12 00:23:37 --> Config Class Initialized
INFO - 2021-04-12 00:23:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:37 --> URI Class Initialized
INFO - 2021-04-12 00:23:37 --> Router Class Initialized
INFO - 2021-04-12 00:23:37 --> Output Class Initialized
INFO - 2021-04-12 00:23:37 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:37 --> Input Class Initialized
INFO - 2021-04-12 00:23:37 --> Language Class Initialized
INFO - 2021-04-12 00:23:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:37 --> Config Class Initialized
INFO - 2021-04-12 00:23:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:37 --> URI Class Initialized
INFO - 2021-04-12 00:23:37 --> Router Class Initialized
INFO - 2021-04-12 00:23:37 --> Output Class Initialized
INFO - 2021-04-12 00:23:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:37 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:37 --> Input Class Initialized
INFO - 2021-04-12 00:23:37 --> Language Class Initialized
INFO - 2021-04-12 00:23:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:37 --> Pagination Class Initialized
INFO - 2021-04-12 00:23:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:37 --> Helper loaded: security_helper
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.1702
INFO - 2021-04-12 00:23:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.1034
INFO - 2021-04-12 00:23:37 --> Config Class Initialized
INFO - 2021-04-12 00:23:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:37 --> URI Class Initialized
INFO - 2021-04-12 00:23:37 --> Router Class Initialized
INFO - 2021-04-12 00:23:37 --> Output Class Initialized
INFO - 2021-04-12 00:23:37 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:37 --> Input Class Initialized
INFO - 2021-04-12 00:23:37 --> Language Class Initialized
INFO - 2021-04-12 00:23:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.0902
INFO - 2021-04-12 00:23:37 --> Config Class Initialized
INFO - 2021-04-12 00:23:37 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:37 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:37 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:37 --> URI Class Initialized
INFO - 2021-04-12 00:23:37 --> Router Class Initialized
INFO - 2021-04-12 00:23:37 --> Output Class Initialized
INFO - 2021-04-12 00:23:37 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:37 --> Input Class Initialized
INFO - 2021-04-12 00:23:37 --> Language Class Initialized
INFO - 2021-04-12 00:23:37 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:37 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:37 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:37 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:37 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Controller Class Initialized
INFO - 2021-04-12 00:23:37 --> Model Class Initialized
INFO - 2021-04-12 00:23:37 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:37 --> Total execution time: 0.0360
INFO - 2021-04-12 00:23:38 --> Config Class Initialized
INFO - 2021-04-12 00:23:38 --> Hooks Class Initialized
INFO - 2021-04-12 00:23:38 --> Config Class Initialized
INFO - 2021-04-12 00:23:38 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:38 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:23:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:38 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:38 --> URI Class Initialized
INFO - 2021-04-12 00:23:38 --> URI Class Initialized
INFO - 2021-04-12 00:23:38 --> Router Class Initialized
INFO - 2021-04-12 00:23:38 --> Router Class Initialized
INFO - 2021-04-12 00:23:38 --> Output Class Initialized
INFO - 2021-04-12 00:23:38 --> Output Class Initialized
INFO - 2021-04-12 00:23:38 --> Security Class Initialized
INFO - 2021-04-12 00:23:38 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:38 --> Input Class Initialized
INFO - 2021-04-12 00:23:38 --> Language Class Initialized
ERROR - 2021-04-12 00:23:38 --> 404 Page Not Found: 606ffb0321d5ajpg/index
DEBUG - 2021-04-12 00:23:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:38 --> Input Class Initialized
INFO - 2021-04-12 00:23:38 --> Language Class Initialized
ERROR - 2021-04-12 00:23:38 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 00:23:44 --> Config Class Initialized
INFO - 2021-04-12 00:23:44 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:44 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:44 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:44 --> URI Class Initialized
INFO - 2021-04-12 00:23:44 --> Router Class Initialized
INFO - 2021-04-12 00:23:44 --> Output Class Initialized
INFO - 2021-04-12 00:23:44 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:44 --> Input Class Initialized
INFO - 2021-04-12 00:23:44 --> Language Class Initialized
ERROR - 2021-04-12 00:23:44 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 00:23:44 --> Config Class Initialized
INFO - 2021-04-12 00:23:44 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:44 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:44 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:44 --> URI Class Initialized
INFO - 2021-04-12 00:23:44 --> Router Class Initialized
INFO - 2021-04-12 00:23:44 --> Output Class Initialized
INFO - 2021-04-12 00:23:44 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:44 --> Input Class Initialized
INFO - 2021-04-12 00:23:44 --> Language Class Initialized
ERROR - 2021-04-12 00:23:44 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 00:23:47 --> Config Class Initialized
INFO - 2021-04-12 00:23:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:23:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:23:47 --> Utf8 Class Initialized
INFO - 2021-04-12 00:23:47 --> URI Class Initialized
INFO - 2021-04-12 00:23:47 --> Router Class Initialized
INFO - 2021-04-12 00:23:47 --> Output Class Initialized
INFO - 2021-04-12 00:23:47 --> Security Class Initialized
DEBUG - 2021-04-12 00:23:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:23:47 --> Input Class Initialized
INFO - 2021-04-12 00:23:47 --> Language Class Initialized
INFO - 2021-04-12 00:23:47 --> Loader Class Initialized
DEBUG - 2021-04-12 00:23:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:23:47 --> Helper loaded: security_helper
INFO - 2021-04-12 00:23:47 --> Helper loaded: form_helper
INFO - 2021-04-12 00:23:47 --> Helper loaded: url_helper
INFO - 2021-04-12 00:23:47 --> Helper loaded: common_helper
INFO - 2021-04-12 00:23:47 --> Database Driver Class Initialized
INFO - 2021-04-12 00:23:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:23:47 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:23:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:23:47 --> Model Class Initialized
INFO - 2021-04-12 00:23:47 --> Controller Class Initialized
INFO - 2021-04-12 00:23:47 --> Model Class Initialized
INFO - 2021-04-12 00:23:47 --> Final output sent to browser
DEBUG - 2021-04-12 00:23:47 --> Total execution time: 0.0537
INFO - 2021-04-12 00:24:26 --> Config Class Initialized
INFO - 2021-04-12 00:24:26 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:26 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:26 --> URI Class Initialized
INFO - 2021-04-12 00:24:26 --> Router Class Initialized
INFO - 2021-04-12 00:24:26 --> Output Class Initialized
INFO - 2021-04-12 00:24:26 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:26 --> Input Class Initialized
INFO - 2021-04-12 00:24:26 --> Language Class Initialized
INFO - 2021-04-12 00:24:26 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:26 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:26 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:26 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:26 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:26 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:26 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:26 --> Model Class Initialized
INFO - 2021-04-12 00:24:26 --> Controller Class Initialized
INFO - 2021-04-12 00:24:26 --> Model Class Initialized
INFO - 2021-04-12 00:24:26 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 00:24:26 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
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
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 00:24:26 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:24:26 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:26 --> Total execution time: 0.0325
INFO - 2021-04-12 00:24:27 --> Config Class Initialized
INFO - 2021-04-12 00:24:27 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:27 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:27 --> URI Class Initialized
INFO - 2021-04-12 00:24:27 --> Router Class Initialized
INFO - 2021-04-12 00:24:27 --> Output Class Initialized
INFO - 2021-04-12 00:24:27 --> Security Class Initialized
INFO - 2021-04-12 00:24:27 --> Config Class Initialized
INFO - 2021-04-12 00:24:27 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:27 --> Input Class Initialized
INFO - 2021-04-12 00:24:27 --> Language Class Initialized
DEBUG - 2021-04-12 00:24:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:27 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:27 --> URI Class Initialized
INFO - 2021-04-12 00:24:27 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:27 --> Router Class Initialized
INFO - 2021-04-12 00:24:27 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:27 --> Output Class Initialized
INFO - 2021-04-12 00:24:27 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:27 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:27 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:27 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:27 --> Input Class Initialized
INFO - 2021-04-12 00:24:27 --> Language Class Initialized
INFO - 2021-04-12 00:24:27 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:27 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:27 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:27 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:27 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:27 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:27 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:27 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:27 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Controller Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:27 --> Total execution time: 0.1987
INFO - 2021-04-12 00:24:27 --> Config Class Initialized
INFO - 2021-04-12 00:24:27 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:27 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:27 --> URI Class Initialized
INFO - 2021-04-12 00:24:27 --> Router Class Initialized
INFO - 2021-04-12 00:24:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:27 --> Output Class Initialized
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Controller Class Initialized
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Security Class Initialized
INFO - 2021-04-12 00:24:27 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-12 00:24:27 --> Total execution time: 0.2119
INFO - 2021-04-12 00:24:27 --> Input Class Initialized
INFO - 2021-04-12 00:24:27 --> Language Class Initialized
INFO - 2021-04-12 00:24:27 --> Config Class Initialized
INFO - 2021-04-12 00:24:27 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:27 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:27 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:27 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:27 --> URI Class Initialized
INFO - 2021-04-12 00:24:27 --> Config Class Initialized
INFO - 2021-04-12 00:24:27 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:27 --> Router Class Initialized
INFO - 2021-04-12 00:24:27 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:27 --> Output Class Initialized
INFO - 2021-04-12 00:24:27 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:27 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:24:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:27 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:27 --> Security Class Initialized
INFO - 2021-04-12 00:24:27 --> URI Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:27 --> Input Class Initialized
INFO - 2021-04-12 00:24:27 --> Router Class Initialized
INFO - 2021-04-12 00:24:27 --> Language Class Initialized
INFO - 2021-04-12 00:24:27 --> Output Class Initialized
INFO - 2021-04-12 00:24:27 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:27 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:27 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:27 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:27 --> Input Class Initialized
INFO - 2021-04-12 00:24:27 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:27 --> Language Class Initialized
INFO - 2021-04-12 00:24:27 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:27 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:27 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:27 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:27 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:27 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:27 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:27 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:24:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Controller Class Initialized
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Final output sent to browser
INFO - 2021-04-12 00:24:27 --> Database Driver Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Total execution time: 0.1962
INFO - 2021-04-12 00:24:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:27 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Controller Class Initialized
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:27 --> Total execution time: 0.1932
INFO - 2021-04-12 00:24:27 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:27 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Controller Class Initialized
INFO - 2021-04-12 00:24:27 --> Model Class Initialized
INFO - 2021-04-12 00:24:27 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:27 --> Total execution time: 0.2852
INFO - 2021-04-12 00:24:28 --> Config Class Initialized
INFO - 2021-04-12 00:24:28 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:28 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:28 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:28 --> URI Class Initialized
INFO - 2021-04-12 00:24:28 --> Router Class Initialized
INFO - 2021-04-12 00:24:28 --> Output Class Initialized
INFO - 2021-04-12 00:24:28 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:28 --> Input Class Initialized
INFO - 2021-04-12 00:24:28 --> Language Class Initialized
INFO - 2021-04-12 00:24:28 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:28 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:28 --> Config Class Initialized
INFO - 2021-04-12 00:24:28 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:28 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:28 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:28 --> URI Class Initialized
INFO - 2021-04-12 00:24:28 --> Router Class Initialized
INFO - 2021-04-12 00:24:28 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:28 --> Output Class Initialized
INFO - 2021-04-12 00:24:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:28 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:28 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:28 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 00:24:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:28 --> Model Class Initialized
INFO - 2021-04-12 00:24:28 --> Input Class Initialized
INFO - 2021-04-12 00:24:28 --> Controller Class Initialized
INFO - 2021-04-12 00:24:28 --> Model Class Initialized
INFO - 2021-04-12 00:24:28 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:28 --> Total execution time: 0.1920
INFO - 2021-04-12 00:24:28 --> Language Class Initialized
INFO - 2021-04-12 00:24:28 --> Config Class Initialized
INFO - 2021-04-12 00:24:28 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:28 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 00:24:28 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:28 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:28 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:28 --> URI Class Initialized
INFO - 2021-04-12 00:24:28 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:28 --> Router Class Initialized
INFO - 2021-04-12 00:24:28 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:28 --> Output Class Initialized
INFO - 2021-04-12 00:24:28 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:28 --> Input Class Initialized
INFO - 2021-04-12 00:24:28 --> Language Class Initialized
INFO - 2021-04-12 00:24:28 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:28 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:28 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:28 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:28 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:28 --> Model Class Initialized
INFO - 2021-04-12 00:24:28 --> Controller Class Initialized
INFO - 2021-04-12 00:24:28 --> Model Class Initialized
INFO - 2021-04-12 00:24:28 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:28 --> Total execution time: 0.1879
INFO - 2021-04-12 00:24:28 --> Config Class Initialized
INFO - 2021-04-12 00:24:28 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:28 --> Database Driver Class Initialized
DEBUG - 2021-04-12 00:24:28 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:28 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:28 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:28 --> URI Class Initialized
INFO - 2021-04-12 00:24:28 --> Router Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:28 --> Model Class Initialized
INFO - 2021-04-12 00:24:28 --> Controller Class Initialized
INFO - 2021-04-12 00:24:28 --> Model Class Initialized
INFO - 2021-04-12 00:24:28 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:28 --> Total execution time: 0.1105
INFO - 2021-04-12 00:24:28 --> Output Class Initialized
INFO - 2021-04-12 00:24:28 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:28 --> Input Class Initialized
INFO - 2021-04-12 00:24:28 --> Language Class Initialized
INFO - 2021-04-12 00:24:28 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:28 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:28 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:28 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:28 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:28 --> Model Class Initialized
INFO - 2021-04-12 00:24:28 --> Controller Class Initialized
INFO - 2021-04-12 00:24:28 --> Model Class Initialized
INFO - 2021-04-12 00:24:28 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:28 --> Total execution time: 0.0416
INFO - 2021-04-12 00:24:28 --> Config Class Initialized
INFO - 2021-04-12 00:24:28 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:28 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:28 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:28 --> URI Class Initialized
INFO - 2021-04-12 00:24:28 --> Router Class Initialized
INFO - 2021-04-12 00:24:28 --> Output Class Initialized
INFO - 2021-04-12 00:24:28 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:28 --> Input Class Initialized
INFO - 2021-04-12 00:24:28 --> Language Class Initialized
ERROR - 2021-04-12 00:24:28 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 00:24:28 --> Config Class Initialized
INFO - 2021-04-12 00:24:28 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:28 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:28 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:28 --> URI Class Initialized
INFO - 2021-04-12 00:24:28 --> Router Class Initialized
INFO - 2021-04-12 00:24:28 --> Output Class Initialized
INFO - 2021-04-12 00:24:28 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:28 --> Input Class Initialized
INFO - 2021-04-12 00:24:28 --> Language Class Initialized
ERROR - 2021-04-12 00:24:28 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 00:24:29 --> Config Class Initialized
INFO - 2021-04-12 00:24:29 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:29 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:29 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:29 --> URI Class Initialized
INFO - 2021-04-12 00:24:29 --> Router Class Initialized
INFO - 2021-04-12 00:24:29 --> Output Class Initialized
INFO - 2021-04-12 00:24:29 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:29 --> Input Class Initialized
INFO - 2021-04-12 00:24:29 --> Language Class Initialized
INFO - 2021-04-12 00:24:29 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:29 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:29 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:29 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:29 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:29 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:29 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:29 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:29 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:29 --> Model Class Initialized
INFO - 2021-04-12 00:24:29 --> Controller Class Initialized
INFO - 2021-04-12 00:24:29 --> Model Class Initialized
INFO - 2021-04-12 00:24:29 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:29 --> Total execution time: 0.0362
INFO - 2021-04-12 00:24:44 --> Config Class Initialized
INFO - 2021-04-12 00:24:44 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:44 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:44 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:44 --> URI Class Initialized
INFO - 2021-04-12 00:24:44 --> Router Class Initialized
INFO - 2021-04-12 00:24:44 --> Output Class Initialized
INFO - 2021-04-12 00:24:44 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:44 --> Input Class Initialized
INFO - 2021-04-12 00:24:44 --> Language Class Initialized
INFO - 2021-04-12 00:24:44 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:44 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:44 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:44 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:44 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:44 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:44 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:44 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:44 --> Model Class Initialized
INFO - 2021-04-12 00:24:44 --> Controller Class Initialized
INFO - 2021-04-12 00:24:44 --> Model Class Initialized
INFO - 2021-04-12 00:24:44 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 00:24:44 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
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
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 00:24:44 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:24:44 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:44 --> Total execution time: 0.0322
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.2805
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.1162
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.1158
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.2081
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.2054
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.1065
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:45 --> Config Class Initialized
INFO - 2021-04-12 00:24:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.1054
DEBUG - 2021-04-12 00:24:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:45 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:45 --> URI Class Initialized
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:45 --> Router Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
INFO - 2021-04-12 00:24:45 --> Output Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.1028
INFO - 2021-04-12 00:24:45 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:45 --> Input Class Initialized
INFO - 2021-04-12 00:24:45 --> Language Class Initialized
INFO - 2021-04-12 00:24:45 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:45 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:45 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:45 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:45 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Controller Class Initialized
INFO - 2021-04-12 00:24:45 --> Model Class Initialized
INFO - 2021-04-12 00:24:45 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:45 --> Total execution time: 0.0967
INFO - 2021-04-12 00:24:46 --> Config Class Initialized
INFO - 2021-04-12 00:24:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:46 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:46 --> URI Class Initialized
INFO - 2021-04-12 00:24:46 --> Router Class Initialized
INFO - 2021-04-12 00:24:46 --> Output Class Initialized
INFO - 2021-04-12 00:24:46 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:46 --> Input Class Initialized
INFO - 2021-04-12 00:24:46 --> Language Class Initialized
ERROR - 2021-04-12 00:24:46 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 00:24:46 --> Config Class Initialized
INFO - 2021-04-12 00:24:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:46 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:46 --> URI Class Initialized
INFO - 2021-04-12 00:24:46 --> Router Class Initialized
INFO - 2021-04-12 00:24:46 --> Output Class Initialized
INFO - 2021-04-12 00:24:46 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:46 --> Input Class Initialized
INFO - 2021-04-12 00:24:46 --> Language Class Initialized
ERROR - 2021-04-12 00:24:46 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 00:24:48 --> Config Class Initialized
INFO - 2021-04-12 00:24:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:48 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:48 --> URI Class Initialized
INFO - 2021-04-12 00:24:48 --> Router Class Initialized
INFO - 2021-04-12 00:24:48 --> Output Class Initialized
INFO - 2021-04-12 00:24:48 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:48 --> Input Class Initialized
INFO - 2021-04-12 00:24:48 --> Language Class Initialized
INFO - 2021-04-12 00:24:48 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:48 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:48 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:48 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:48 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:48 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:48 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:48 --> Model Class Initialized
INFO - 2021-04-12 00:24:48 --> Controller Class Initialized
INFO - 2021-04-12 00:24:48 --> Model Class Initialized
INFO - 2021-04-12 00:24:48 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:48 --> Total execution time: 0.0299
INFO - 2021-04-12 00:24:55 --> Config Class Initialized
INFO - 2021-04-12 00:24:55 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:55 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:55 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:55 --> URI Class Initialized
INFO - 2021-04-12 00:24:55 --> Router Class Initialized
INFO - 2021-04-12 00:24:55 --> Output Class Initialized
INFO - 2021-04-12 00:24:55 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:55 --> Input Class Initialized
INFO - 2021-04-12 00:24:55 --> Language Class Initialized
INFO - 2021-04-12 00:24:55 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:55 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:55 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:55 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:55 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:55 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:55 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:55 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:55 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:55 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:55 --> Model Class Initialized
INFO - 2021-04-12 00:24:55 --> Controller Class Initialized
INFO - 2021-04-12 00:24:55 --> Model Class Initialized
INFO - 2021-04-12 00:24:55 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 00:24:55 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
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
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 00:24:55 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:24:55 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:55 --> Total execution time: 0.0303
INFO - 2021-04-12 00:24:56 --> Config Class Initialized
INFO - 2021-04-12 00:24:56 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:56 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:56 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:56 --> URI Class Initialized
INFO - 2021-04-12 00:24:56 --> Router Class Initialized
INFO - 2021-04-12 00:24:56 --> Output Class Initialized
INFO - 2021-04-12 00:24:56 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:56 --> Input Class Initialized
INFO - 2021-04-12 00:24:56 --> Language Class Initialized
INFO - 2021-04-12 00:24:56 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:56 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:56 --> Config Class Initialized
INFO - 2021-04-12 00:24:56 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:56 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:56 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:56 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:56 --> URI Class Initialized
INFO - 2021-04-12 00:24:56 --> Router Class Initialized
INFO - 2021-04-12 00:24:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:56 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:56 --> Output Class Initialized
INFO - 2021-04-12 00:24:56 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Controller Class Initialized
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:56 --> Total execution time: 0.2026
DEBUG - 2021-04-12 00:24:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:56 --> Input Class Initialized
INFO - 2021-04-12 00:24:56 --> Language Class Initialized
INFO - 2021-04-12 00:24:56 --> Config Class Initialized
INFO - 2021-04-12 00:24:56 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:56 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:56 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:56 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:56 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:56 --> URI Class Initialized
INFO - 2021-04-12 00:24:56 --> Config Class Initialized
INFO - 2021-04-12 00:24:56 --> Router Class Initialized
INFO - 2021-04-12 00:24:56 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:56 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:56 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:56 --> Output Class Initialized
DEBUG - 2021-04-12 00:24:56 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:56 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:56 --> URI Class Initialized
INFO - 2021-04-12 00:24:56 --> Security Class Initialized
INFO - 2021-04-12 00:24:56 --> Router Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:56 --> Input Class Initialized
INFO - 2021-04-12 00:24:56 --> Language Class Initialized
INFO - 2021-04-12 00:24:56 --> Output Class Initialized
INFO - 2021-04-12 00:24:56 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:56 --> Input Class Initialized
INFO - 2021-04-12 00:24:56 --> Language Class Initialized
INFO - 2021-04-12 00:24:56 --> Config Class Initialized
INFO - 2021-04-12 00:24:56 --> Hooks Class Initialized
INFO - 2021-04-12 00:24:56 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:56 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:56 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:56 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:56 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:56 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:56 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:56 --> URI Class Initialized
INFO - 2021-04-12 00:24:56 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:56 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:56 --> Router Class Initialized
INFO - 2021-04-12 00:24:56 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:56 --> Output Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Controller Class Initialized
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Security Class Initialized
INFO - 2021-04-12 00:24:56 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:56 --> Total execution time: 0.2031
DEBUG - 2021-04-12 00:24:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:56 --> Input Class Initialized
INFO - 2021-04-12 00:24:56 --> Language Class Initialized
INFO - 2021-04-12 00:24:56 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:56 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:56 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:56 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:56 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 00:24:56 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:56 --> Controller Class Initialized
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:56 --> Total execution time: 0.1886
INFO - 2021-04-12 00:24:56 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:56 --> Pagination Class Initialized
INFO - 2021-04-12 00:24:56 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:56 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:24:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Controller Class Initialized
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:56 --> Total execution time: 0.2025
INFO - 2021-04-12 00:24:56 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:56 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Controller Class Initialized
INFO - 2021-04-12 00:24:56 --> Model Class Initialized
INFO - 2021-04-12 00:24:56 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:56 --> Total execution time: 0.1190
INFO - 2021-04-12 00:24:57 --> Config Class Initialized
INFO - 2021-04-12 00:24:57 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:57 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:57 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:57 --> URI Class Initialized
INFO - 2021-04-12 00:24:57 --> Router Class Initialized
INFO - 2021-04-12 00:24:57 --> Output Class Initialized
INFO - 2021-04-12 00:24:57 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:57 --> Input Class Initialized
INFO - 2021-04-12 00:24:57 --> Language Class Initialized
INFO - 2021-04-12 00:24:57 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:57 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:57 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:57 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:57 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:57 --> Model Class Initialized
INFO - 2021-04-12 00:24:57 --> Controller Class Initialized
INFO - 2021-04-12 00:24:57 --> Model Class Initialized
INFO - 2021-04-12 00:24:57 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:57 --> Total execution time: 0.0977
INFO - 2021-04-12 00:24:57 --> Config Class Initialized
INFO - 2021-04-12 00:24:57 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:57 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:57 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:57 --> URI Class Initialized
INFO - 2021-04-12 00:24:57 --> Router Class Initialized
INFO - 2021-04-12 00:24:57 --> Output Class Initialized
INFO - 2021-04-12 00:24:57 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:57 --> Input Class Initialized
INFO - 2021-04-12 00:24:57 --> Language Class Initialized
INFO - 2021-04-12 00:24:57 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:57 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:57 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:57 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:57 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:57 --> Model Class Initialized
INFO - 2021-04-12 00:24:57 --> Controller Class Initialized
INFO - 2021-04-12 00:24:57 --> Model Class Initialized
INFO - 2021-04-12 00:24:57 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:57 --> Total execution time: 0.0883
INFO - 2021-04-12 00:24:57 --> Config Class Initialized
INFO - 2021-04-12 00:24:57 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:57 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:57 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:57 --> URI Class Initialized
INFO - 2021-04-12 00:24:57 --> Router Class Initialized
INFO - 2021-04-12 00:24:57 --> Output Class Initialized
INFO - 2021-04-12 00:24:57 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:57 --> Input Class Initialized
INFO - 2021-04-12 00:24:57 --> Language Class Initialized
INFO - 2021-04-12 00:24:57 --> Config Class Initialized
INFO - 2021-04-12 00:24:57 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:57 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:57 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:57 --> URI Class Initialized
INFO - 2021-04-12 00:24:57 --> Router Class Initialized
INFO - 2021-04-12 00:24:57 --> Loader Class Initialized
INFO - 2021-04-12 00:24:57 --> Output Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:57 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:57 --> Security Class Initialized
INFO - 2021-04-12 00:24:57 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: url_helper
DEBUG - 2021-04-12 00:24:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:57 --> Input Class Initialized
INFO - 2021-04-12 00:24:57 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:57 --> Language Class Initialized
INFO - 2021-04-12 00:24:57 --> Loader Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:24:57 --> Helper loaded: security_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: form_helper
INFO - 2021-04-12 00:24:57 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:57 --> Helper loaded: url_helper
INFO - 2021-04-12 00:24:57 --> Helper loaded: common_helper
INFO - 2021-04-12 00:24:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:57 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:57 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:57 --> Model Class Initialized
INFO - 2021-04-12 00:24:57 --> Controller Class Initialized
INFO - 2021-04-12 00:24:57 --> Model Class Initialized
INFO - 2021-04-12 00:24:57 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:57 --> Total execution time: 0.0844
INFO - 2021-04-12 00:24:57 --> Database Driver Class Initialized
INFO - 2021-04-12 00:24:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:24:57 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:24:57 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:24:57 --> Model Class Initialized
INFO - 2021-04-12 00:24:57 --> Controller Class Initialized
INFO - 2021-04-12 00:24:57 --> Model Class Initialized
INFO - 2021-04-12 00:24:57 --> Final output sent to browser
DEBUG - 2021-04-12 00:24:57 --> Total execution time: 0.0901
INFO - 2021-04-12 00:24:57 --> Config Class Initialized
INFO - 2021-04-12 00:24:57 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:57 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:57 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:57 --> URI Class Initialized
INFO - 2021-04-12 00:24:57 --> Router Class Initialized
INFO - 2021-04-12 00:24:57 --> Output Class Initialized
INFO - 2021-04-12 00:24:57 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:57 --> Input Class Initialized
INFO - 2021-04-12 00:24:57 --> Language Class Initialized
ERROR - 2021-04-12 00:24:57 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 00:24:57 --> Config Class Initialized
INFO - 2021-04-12 00:24:57 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:24:57 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:24:57 --> Utf8 Class Initialized
INFO - 2021-04-12 00:24:57 --> URI Class Initialized
INFO - 2021-04-12 00:24:57 --> Router Class Initialized
INFO - 2021-04-12 00:24:57 --> Output Class Initialized
INFO - 2021-04-12 00:24:57 --> Security Class Initialized
DEBUG - 2021-04-12 00:24:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:24:57 --> Input Class Initialized
INFO - 2021-04-12 00:24:57 --> Language Class Initialized
ERROR - 2021-04-12 00:24:57 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 00:44:22 --> Config Class Initialized
INFO - 2021-04-12 00:44:22 --> Config Class Initialized
INFO - 2021-04-12 00:44:22 --> Hooks Class Initialized
INFO - 2021-04-12 00:44:22 --> Hooks Class Initialized
INFO - 2021-04-12 00:44:22 --> Config Class Initialized
INFO - 2021-04-12 00:44:22 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:44:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:22 --> Utf8 Class Initialized
DEBUG - 2021-04-12 00:44:22 --> UTF-8 Support Enabled
DEBUG - 2021-04-12 00:44:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:22 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:22 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:22 --> URI Class Initialized
INFO - 2021-04-12 00:44:22 --> URI Class Initialized
INFO - 2021-04-12 00:44:22 --> URI Class Initialized
INFO - 2021-04-12 00:44:22 --> Router Class Initialized
INFO - 2021-04-12 00:44:22 --> Router Class Initialized
INFO - 2021-04-12 00:44:22 --> Router Class Initialized
INFO - 2021-04-12 00:44:22 --> Output Class Initialized
INFO - 2021-04-12 00:44:22 --> Output Class Initialized
INFO - 2021-04-12 00:44:22 --> Output Class Initialized
INFO - 2021-04-12 00:44:22 --> Security Class Initialized
INFO - 2021-04-12 00:44:22 --> Security Class Initialized
INFO - 2021-04-12 00:44:22 --> Security Class Initialized
DEBUG - 2021-04-12 00:44:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:22 --> Input Class Initialized
DEBUG - 2021-04-12 00:44:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-12 00:44:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:22 --> Input Class Initialized
INFO - 2021-04-12 00:44:22 --> Input Class Initialized
INFO - 2021-04-12 00:44:22 --> Language Class Initialized
INFO - 2021-04-12 00:44:22 --> Language Class Initialized
INFO - 2021-04-12 00:44:22 --> Language Class Initialized
INFO - 2021-04-12 00:44:22 --> Loader Class Initialized
INFO - 2021-04-12 00:44:22 --> Loader Class Initialized
INFO - 2021-04-12 00:44:22 --> Loader Class Initialized
DEBUG - 2021-04-12 00:44:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 00:44:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 00:44:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:44:22 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:22 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:23 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:23 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:23 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:23 --> Pagination Class Initialized
INFO - 2021-04-12 00:44:23 --> Pagination Class Initialized
INFO - 2021-04-12 00:44:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 00:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 00:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Controller Class Initialized
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Controller Class Initialized
INFO - 2021-04-12 00:44:23 --> Controller Class Initialized
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '41',
)
INFO - 2021-04-12 00:44:23 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
INFO - 2021-04-12 00:44:23 --> Final output sent to browser
INFO - 2021-04-12 00:44:23 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'41\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'41\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'41\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
DEBUG - 2021-04-12 00:44:23 --> Total execution time: 0.6073
ERROR - 2021-04-12 00:44:23 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 00:44:23 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:44:23 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:23 --> Total execution time: 0.6458
INFO - 2021-04-12 00:44:23 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 00:44:23 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 00:44:23 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:23 --> Total execution time: 0.6503
INFO - 2021-04-12 00:44:23 --> Config Class Initialized
INFO - 2021-04-12 00:44:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:44:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:23 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:23 --> URI Class Initialized
INFO - 2021-04-12 00:44:23 --> Router Class Initialized
INFO - 2021-04-12 00:44:23 --> Output Class Initialized
INFO - 2021-04-12 00:44:23 --> Security Class Initialized
DEBUG - 2021-04-12 00:44:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:23 --> Input Class Initialized
INFO - 2021-04-12 00:44:23 --> Language Class Initialized
INFO - 2021-04-12 00:44:23 --> Loader Class Initialized
DEBUG - 2021-04-12 00:44:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:44:23 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:23 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:23 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:23 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:23 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Controller Class Initialized
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:23 --> Total execution time: 0.0328
INFO - 2021-04-12 00:44:23 --> Config Class Initialized
INFO - 2021-04-12 00:44:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:44:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:23 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:23 --> URI Class Initialized
INFO - 2021-04-12 00:44:23 --> Router Class Initialized
INFO - 2021-04-12 00:44:23 --> Output Class Initialized
INFO - 2021-04-12 00:44:23 --> Security Class Initialized
DEBUG - 2021-04-12 00:44:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:23 --> Input Class Initialized
INFO - 2021-04-12 00:44:23 --> Language Class Initialized
INFO - 2021-04-12 00:44:23 --> Loader Class Initialized
DEBUG - 2021-04-12 00:44:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:44:23 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:23 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:23 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:23 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:23 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Controller Class Initialized
INFO - 2021-04-12 00:44:23 --> Model Class Initialized
INFO - 2021-04-12 00:44:23 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:23 --> Total execution time: 0.0335
INFO - 2021-04-12 00:44:23 --> Config Class Initialized
INFO - 2021-04-12 00:44:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:44:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:24 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:24 --> URI Class Initialized
INFO - 2021-04-12 00:44:24 --> Router Class Initialized
INFO - 2021-04-12 00:44:24 --> Output Class Initialized
INFO - 2021-04-12 00:44:24 --> Security Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:24 --> Input Class Initialized
INFO - 2021-04-12 00:44:24 --> Language Class Initialized
INFO - 2021-04-12 00:44:24 --> Config Class Initialized
INFO - 2021-04-12 00:44:24 --> Hooks Class Initialized
INFO - 2021-04-12 00:44:24 --> Loader Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:44:24 --> Helper loaded: security_helper
DEBUG - 2021-04-12 00:44:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:24 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:24 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:24 --> URI Class Initialized
INFO - 2021-04-12 00:44:24 --> Config Class Initialized
INFO - 2021-04-12 00:44:24 --> Hooks Class Initialized
INFO - 2021-04-12 00:44:24 --> Router Class Initialized
DEBUG - 2021-04-12 00:44:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:24 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:24 --> URI Class Initialized
INFO - 2021-04-12 00:44:24 --> Router Class Initialized
INFO - 2021-04-12 00:44:24 --> Output Class Initialized
INFO - 2021-04-12 00:44:24 --> Output Class Initialized
INFO - 2021-04-12 00:44:24 --> Security Class Initialized
INFO - 2021-04-12 00:44:24 --> Security Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:24 --> Input Class Initialized
INFO - 2021-04-12 00:44:24 --> Language Class Initialized
INFO - 2021-04-12 00:44:24 --> Loader Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 00:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:24 --> Input Class Initialized
INFO - 2021-04-12 00:44:24 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:24 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:24 --> Language Class Initialized
INFO - 2021-04-12 00:44:24 --> Config Class Initialized
INFO - 2021-04-12 00:44:24 --> Hooks Class Initialized
INFO - 2021-04-12 00:44:24 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:24 --> Pagination Class Initialized
INFO - 2021-04-12 00:44:24 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:44:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:24 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:24 --> URI Class Initialized
INFO - 2021-04-12 00:44:24 --> Loader Class Initialized
INFO - 2021-04-12 00:44:24 --> Router Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 00:44:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:24 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Controller Class Initialized
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:24 --> Total execution time: 0.2028
INFO - 2021-04-12 00:44:24 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:24 --> Output Class Initialized
INFO - 2021-04-12 00:44:24 --> Security Class Initialized
INFO - 2021-04-12 00:44:24 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: common_helper
DEBUG - 2021-04-12 00:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:24 --> Input Class Initialized
INFO - 2021-04-12 00:44:24 --> Language Class Initialized
INFO - 2021-04-12 00:44:24 --> Loader Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:44:24 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:24 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:24 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:24 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:24 --> Pagination Class Initialized
INFO - 2021-04-12 00:44:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:24 --> Pagination Class Initialized
INFO - 2021-04-12 00:44:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:24 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 00:44:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Controller Class Initialized
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:24 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:24 --> Total execution time: 0.1972
INFO - 2021-04-12 00:44:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Controller Class Initialized
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:24 --> Total execution time: 0.3012
INFO - 2021-04-12 00:44:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Controller Class Initialized
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:24 --> Total execution time: 0.2897
INFO - 2021-04-12 00:44:24 --> Config Class Initialized
INFO - 2021-04-12 00:44:24 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:44:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:24 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:24 --> URI Class Initialized
INFO - 2021-04-12 00:44:24 --> Router Class Initialized
INFO - 2021-04-12 00:44:24 --> Output Class Initialized
INFO - 2021-04-12 00:44:24 --> Security Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:24 --> Input Class Initialized
INFO - 2021-04-12 00:44:24 --> Language Class Initialized
INFO - 2021-04-12 00:44:24 --> Loader Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:44:24 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:24 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:24 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Controller Class Initialized
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:24 --> Total execution time: 0.1150
INFO - 2021-04-12 00:44:24 --> Config Class Initialized
INFO - 2021-04-12 00:44:24 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:44:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:24 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:24 --> URI Class Initialized
INFO - 2021-04-12 00:44:24 --> Router Class Initialized
INFO - 2021-04-12 00:44:24 --> Output Class Initialized
INFO - 2021-04-12 00:44:24 --> Security Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:24 --> Input Class Initialized
INFO - 2021-04-12 00:44:24 --> Language Class Initialized
ERROR - 2021-04-12 00:44:24 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 00:44:24 --> Config Class Initialized
INFO - 2021-04-12 00:44:24 --> Hooks Class Initialized
DEBUG - 2021-04-12 00:44:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 00:44:24 --> Utf8 Class Initialized
INFO - 2021-04-12 00:44:24 --> URI Class Initialized
INFO - 2021-04-12 00:44:24 --> Router Class Initialized
INFO - 2021-04-12 00:44:24 --> Output Class Initialized
INFO - 2021-04-12 00:44:24 --> Security Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 00:44:24 --> Input Class Initialized
INFO - 2021-04-12 00:44:24 --> Language Class Initialized
INFO - 2021-04-12 00:44:24 --> Loader Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 00:44:24 --> Helper loaded: security_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: form_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: url_helper
INFO - 2021-04-12 00:44:24 --> Helper loaded: common_helper
INFO - 2021-04-12 00:44:24 --> Database Driver Class Initialized
INFO - 2021-04-12 00:44:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 00:44:24 --> Pagination Class Initialized
DEBUG - 2021-04-12 00:44:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 00:44:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Controller Class Initialized
INFO - 2021-04-12 00:44:24 --> Model Class Initialized
INFO - 2021-04-12 00:44:24 --> Final output sent to browser
DEBUG - 2021-04-12 00:44:24 --> Total execution time: 0.0357
INFO - 2021-04-12 03:02:20 --> Config Class Initialized
INFO - 2021-04-12 03:02:20 --> Hooks Class Initialized
INFO - 2021-04-12 03:02:20 --> Config Class Initialized
INFO - 2021-04-12 03:02:20 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:20 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:20 --> Utf8 Class Initialized
DEBUG - 2021-04-12 03:02:20 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:20 --> Config Class Initialized
INFO - 2021-04-12 03:02:20 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:20 --> Hooks Class Initialized
INFO - 2021-04-12 03:02:20 --> URI Class Initialized
INFO - 2021-04-12 03:02:20 --> URI Class Initialized
DEBUG - 2021-04-12 03:02:20 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:20 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:20 --> Router Class Initialized
INFO - 2021-04-12 03:02:20 --> Router Class Initialized
INFO - 2021-04-12 03:02:20 --> URI Class Initialized
INFO - 2021-04-12 03:02:20 --> Router Class Initialized
INFO - 2021-04-12 03:02:20 --> Output Class Initialized
INFO - 2021-04-12 03:02:20 --> Output Class Initialized
INFO - 2021-04-12 03:02:20 --> Output Class Initialized
INFO - 2021-04-12 03:02:20 --> Security Class Initialized
INFO - 2021-04-12 03:02:20 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:20 --> Input Class Initialized
DEBUG - 2021-04-12 03:02:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:20 --> Input Class Initialized
INFO - 2021-04-12 03:02:20 --> Language Class Initialized
INFO - 2021-04-12 03:02:20 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:20 --> Input Class Initialized
INFO - 2021-04-12 03:02:20 --> Language Class Initialized
INFO - 2021-04-12 03:02:20 --> Language Class Initialized
INFO - 2021-04-12 03:02:20 --> Loader Class Initialized
INFO - 2021-04-12 03:02:20 --> Loader Class Initialized
INFO - 2021-04-12 03:02:20 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:20 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 03:02:20 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 03:02:20 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:20 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:20 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:20 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:20 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:20 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:20 --> Pagination Class Initialized
INFO - 2021-04-12 03:02:20 --> Pagination Class Initialized
INFO - 2021-04-12 03:02:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:20 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:20 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 03:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 03:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:20 --> Model Class Initialized
INFO - 2021-04-12 03:02:20 --> Model Class Initialized
INFO - 2021-04-12 03:02:20 --> Controller Class Initialized
INFO - 2021-04-12 03:02:20 --> Controller Class Initialized
INFO - 2021-04-12 03:02:20 --> Model Class Initialized
INFO - 2021-04-12 03:02:20 --> Controller Class Initialized
INFO - 2021-04-12 03:02:20 --> Model Class Initialized
INFO - 2021-04-12 03:02:20 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
INFO - 2021-04-12 03:02:20 --> Model Class Initialized
INFO - 2021-04-12 03:02:20 --> Model Class Initialized
INFO - 2021-04-12 03:02:20 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 03:02:20 --> Final output sent to browser
INFO - 2021-04-12 03:02:20 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
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
    ORDER BY p.id DESC LIMIT 0, 9'
DEBUG - 2021-04-12 03:02:20 --> Total execution time: 0.5673
ERROR - 2021-04-12 03:02:20 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 03:02:20 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 03:02:20 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 03:02:20 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:20 --> Total execution time: 0.5936
INFO - 2021-04-12 03:02:21 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 03:02:21 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:21 --> Total execution time: 0.6339
INFO - 2021-04-12 03:02:22 --> Config Class Initialized
INFO - 2021-04-12 03:02:22 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:22 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:22 --> URI Class Initialized
INFO - 2021-04-12 03:02:22 --> Router Class Initialized
INFO - 2021-04-12 03:02:22 --> Output Class Initialized
INFO - 2021-04-12 03:02:22 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:22 --> Input Class Initialized
INFO - 2021-04-12 03:02:22 --> Language Class Initialized
INFO - 2021-04-12 03:02:22 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:22 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:22 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:22 --> Config Class Initialized
INFO - 2021-04-12 03:02:22 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:22 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:22 --> Pagination Class Initialized
INFO - 2021-04-12 03:02:22 --> URI Class Initialized
INFO - 2021-04-12 03:02:22 --> Router Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Controller Class Initialized
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:22 --> Total execution time: 0.2064
INFO - 2021-04-12 03:02:22 --> Output Class Initialized
INFO - 2021-04-12 03:02:22 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:22 --> Input Class Initialized
INFO - 2021-04-12 03:02:22 --> Language Class Initialized
INFO - 2021-04-12 03:02:22 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:22 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:22 --> Config Class Initialized
INFO - 2021-04-12 03:02:22 --> Hooks Class Initialized
INFO - 2021-04-12 03:02:22 --> Config Class Initialized
INFO - 2021-04-12 03:02:22 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:22 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:22 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:22 --> URI Class Initialized
INFO - 2021-04-12 03:02:22 --> Router Class Initialized
DEBUG - 2021-04-12 03:02:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:22 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:22 --> URI Class Initialized
INFO - 2021-04-12 03:02:22 --> Pagination Class Initialized
INFO - 2021-04-12 03:02:22 --> Output Class Initialized
INFO - 2021-04-12 03:02:22 --> Router Class Initialized
INFO - 2021-04-12 03:02:22 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:22 --> Output Class Initialized
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Controller Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:22 --> Input Class Initialized
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:22 --> Total execution time: 0.1984
INFO - 2021-04-12 03:02:22 --> Language Class Initialized
INFO - 2021-04-12 03:02:22 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:22 --> Input Class Initialized
INFO - 2021-04-12 03:02:22 --> Language Class Initialized
INFO - 2021-04-12 03:02:22 --> Config Class Initialized
INFO - 2021-04-12 03:02:22 --> Hooks Class Initialized
INFO - 2021-04-12 03:02:22 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:22 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:22 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:22 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:22 --> Helper loaded: form_helper
DEBUG - 2021-04-12 03:02:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:22 --> URI Class Initialized
INFO - 2021-04-12 03:02:22 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:22 --> Router Class Initialized
INFO - 2021-04-12 03:02:22 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:22 --> Output Class Initialized
INFO - 2021-04-12 03:02:22 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:22 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:22 --> Input Class Initialized
INFO - 2021-04-12 03:02:22 --> Language Class Initialized
INFO - 2021-04-12 03:02:22 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:22 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:22 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:22 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:22 --> Pagination Class Initialized
INFO - 2021-04-12 03:02:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:22 --> Pagination Class Initialized
INFO - 2021-04-12 03:02:22 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: common_helper
DEBUG - 2021-04-12 03:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Controller Class Initialized
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:22 --> Total execution time: 0.1224
DEBUG - 2021-04-12 03:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Controller Class Initialized
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:22 --> Total execution time: 0.1935
INFO - 2021-04-12 03:02:22 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:22 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Controller Class Initialized
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:22 --> Total execution time: 0.1924
INFO - 2021-04-12 03:02:22 --> Config Class Initialized
INFO - 2021-04-12 03:02:22 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:22 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:22 --> URI Class Initialized
INFO - 2021-04-12 03:02:22 --> Router Class Initialized
INFO - 2021-04-12 03:02:22 --> Output Class Initialized
INFO - 2021-04-12 03:02:22 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:22 --> Input Class Initialized
INFO - 2021-04-12 03:02:22 --> Language Class Initialized
INFO - 2021-04-12 03:02:22 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:22 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:22 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:22 --> Config Class Initialized
INFO - 2021-04-12 03:02:22 --> Hooks Class Initialized
INFO - 2021-04-12 03:02:22 --> Database Driver Class Initialized
DEBUG - 2021-04-12 03:02:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:22 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:22 --> URI Class Initialized
INFO - 2021-04-12 03:02:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:22 --> Pagination Class Initialized
INFO - 2021-04-12 03:02:22 --> Router Class Initialized
INFO - 2021-04-12 03:02:22 --> Output Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Controller Class Initialized
INFO - 2021-04-12 03:02:22 --> Security Class Initialized
INFO - 2021-04-12 03:02:22 --> Model Class Initialized
INFO - 2021-04-12 03:02:22 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:22 --> Total execution time: 0.0951
DEBUG - 2021-04-12 03:02:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:22 --> Input Class Initialized
INFO - 2021-04-12 03:02:22 --> Language Class Initialized
INFO - 2021-04-12 03:02:22 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:22 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:23 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:23 --> Model Class Initialized
INFO - 2021-04-12 03:02:23 --> Controller Class Initialized
INFO - 2021-04-12 03:02:23 --> Model Class Initialized
INFO - 2021-04-12 03:02:23 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:23 --> Total execution time: 0.0440
INFO - 2021-04-12 03:02:23 --> Config Class Initialized
INFO - 2021-04-12 03:02:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:23 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:23 --> URI Class Initialized
INFO - 2021-04-12 03:02:23 --> Router Class Initialized
INFO - 2021-04-12 03:02:23 --> Output Class Initialized
INFO - 2021-04-12 03:02:23 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:23 --> Input Class Initialized
INFO - 2021-04-12 03:02:23 --> Language Class Initialized
INFO - 2021-04-12 03:02:23 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:23 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:23 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:23 --> Model Class Initialized
INFO - 2021-04-12 03:02:23 --> Controller Class Initialized
INFO - 2021-04-12 03:02:23 --> Model Class Initialized
INFO - 2021-04-12 03:02:23 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:23 --> Total execution time: 0.0763
INFO - 2021-04-12 03:02:23 --> Config Class Initialized
INFO - 2021-04-12 03:02:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:23 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:23 --> URI Class Initialized
INFO - 2021-04-12 03:02:23 --> Router Class Initialized
INFO - 2021-04-12 03:02:23 --> Output Class Initialized
INFO - 2021-04-12 03:02:23 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:23 --> Input Class Initialized
INFO - 2021-04-12 03:02:23 --> Language Class Initialized
INFO - 2021-04-12 03:02:23 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:23 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:23 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:23 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:23 --> Model Class Initialized
INFO - 2021-04-12 03:02:23 --> Controller Class Initialized
INFO - 2021-04-12 03:02:23 --> Model Class Initialized
INFO - 2021-04-12 03:02:23 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:23 --> Total execution time: 0.0732
INFO - 2021-04-12 03:02:23 --> Config Class Initialized
INFO - 2021-04-12 03:02:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:23 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:23 --> URI Class Initialized
INFO - 2021-04-12 03:02:23 --> Router Class Initialized
INFO - 2021-04-12 03:02:23 --> Output Class Initialized
INFO - 2021-04-12 03:02:23 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:23 --> Input Class Initialized
INFO - 2021-04-12 03:02:23 --> Language Class Initialized
ERROR - 2021-04-12 03:02:23 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 03:02:24 --> Config Class Initialized
INFO - 2021-04-12 03:02:24 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:24 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:24 --> URI Class Initialized
INFO - 2021-04-12 03:02:24 --> Router Class Initialized
INFO - 2021-04-12 03:02:24 --> Output Class Initialized
INFO - 2021-04-12 03:02:24 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:24 --> Input Class Initialized
INFO - 2021-04-12 03:02:24 --> Language Class Initialized
ERROR - 2021-04-12 03:02:24 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 03:02:30 --> Config Class Initialized
INFO - 2021-04-12 03:02:30 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:30 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:30 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:30 --> URI Class Initialized
INFO - 2021-04-12 03:02:30 --> Router Class Initialized
INFO - 2021-04-12 03:02:30 --> Output Class Initialized
INFO - 2021-04-12 03:02:30 --> Security Class Initialized
DEBUG - 2021-04-12 03:02:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:30 --> Input Class Initialized
INFO - 2021-04-12 03:02:30 --> Language Class Initialized
INFO - 2021-04-12 03:02:30 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:30 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:30 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:30 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:30 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:30 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:30 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:02:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:30 --> Model Class Initialized
INFO - 2021-04-12 03:02:30 --> Controller Class Initialized
INFO - 2021-04-12 03:02:30 --> Model Class Initialized
INFO - 2021-04-12 03:02:30 --> Config Class Initialized
INFO - 2021-04-12 03:02:30 --> Hooks Class Initialized
INFO - 2021-04-12 03:02:30 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:30 --> Total execution time: 0.1096
DEBUG - 2021-04-12 03:02:30 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:30 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:30 --> URI Class Initialized
INFO - 2021-04-12 03:02:30 --> Router Class Initialized
INFO - 2021-04-12 03:02:30 --> Output Class Initialized
INFO - 2021-04-12 03:02:30 --> Security Class Initialized
INFO - 2021-04-12 03:02:30 --> Config Class Initialized
INFO - 2021-04-12 03:02:30 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:02:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:30 --> Input Class Initialized
DEBUG - 2021-04-12 03:02:30 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:02:30 --> Utf8 Class Initialized
INFO - 2021-04-12 03:02:30 --> Language Class Initialized
INFO - 2021-04-12 03:02:30 --> URI Class Initialized
INFO - 2021-04-12 03:02:30 --> Router Class Initialized
INFO - 2021-04-12 03:02:30 --> Output Class Initialized
INFO - 2021-04-12 03:02:30 --> Security Class Initialized
INFO - 2021-04-12 03:02:30 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:30 --> Helper loaded: security_helper
DEBUG - 2021-04-12 03:02:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:02:30 --> Input Class Initialized
INFO - 2021-04-12 03:02:30 --> Language Class Initialized
INFO - 2021-04-12 03:02:30 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:30 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:30 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:30 --> Loader Class Initialized
DEBUG - 2021-04-12 03:02:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:02:30 --> Helper loaded: security_helper
INFO - 2021-04-12 03:02:30 --> Helper loaded: form_helper
INFO - 2021-04-12 03:02:30 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:30 --> Helper loaded: url_helper
INFO - 2021-04-12 03:02:30 --> Helper loaded: common_helper
INFO - 2021-04-12 03:02:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:30 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:02:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:30 --> Model Class Initialized
INFO - 2021-04-12 03:02:30 --> Controller Class Initialized
INFO - 2021-04-12 03:02:30 --> Model Class Initialized
INFO - 2021-04-12 03:02:30 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:30 --> Total execution time: 0.0991
INFO - 2021-04-12 03:02:30 --> Database Driver Class Initialized
INFO - 2021-04-12 03:02:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:02:30 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:02:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:02:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:02:30 --> Model Class Initialized
INFO - 2021-04-12 03:02:30 --> Controller Class Initialized
INFO - 2021-04-12 03:02:30 --> Model Class Initialized
INFO - 2021-04-12 03:02:30 --> album-Request--> array (
  'user_id' => '31',
)
INFO - 2021-04-12 03:02:30 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 03:02:30 --> Final output sent to browser
DEBUG - 2021-04-12 03:02:30 --> Total execution time: 0.0966
INFO - 2021-04-12 03:07:51 --> Config Class Initialized
INFO - 2021-04-12 03:07:51 --> Hooks Class Initialized
INFO - 2021-04-12 03:07:51 --> Config Class Initialized
INFO - 2021-04-12 03:07:51 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:07:51 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:51 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:51 --> URI Class Initialized
DEBUG - 2021-04-12 03:07:51 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:51 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:51 --> Router Class Initialized
INFO - 2021-04-12 03:07:51 --> URI Class Initialized
INFO - 2021-04-12 03:07:51 --> Output Class Initialized
INFO - 2021-04-12 03:07:51 --> Router Class Initialized
INFO - 2021-04-12 03:07:51 --> Security Class Initialized
INFO - 2021-04-12 03:07:51 --> Output Class Initialized
DEBUG - 2021-04-12 03:07:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:51 --> Input Class Initialized
INFO - 2021-04-12 03:07:51 --> Language Class Initialized
INFO - 2021-04-12 03:07:51 --> Security Class Initialized
INFO - 2021-04-12 03:07:51 --> Loader Class Initialized
DEBUG - 2021-04-12 03:07:51 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 03:07:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:51 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:51 --> Input Class Initialized
INFO - 2021-04-12 03:07:51 --> Language Class Initialized
INFO - 2021-04-12 03:07:51 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:51 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:51 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:51 --> Config Class Initialized
INFO - 2021-04-12 03:07:51 --> Hooks Class Initialized
INFO - 2021-04-12 03:07:51 --> Loader Class Initialized
DEBUG - 2021-04-12 03:07:51 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:51 --> Utf8 Class Initialized
DEBUG - 2021-04-12 03:07:51 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:51 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:51 --> URI Class Initialized
INFO - 2021-04-12 03:07:51 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:51 --> Router Class Initialized
INFO - 2021-04-12 03:07:51 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:51 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:51 --> Database Driver Class Initialized
INFO - 2021-04-12 03:07:51 --> Output Class Initialized
INFO - 2021-04-12 03:07:51 --> Security Class Initialized
DEBUG - 2021-04-12 03:07:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:51 --> Input Class Initialized
INFO - 2021-04-12 03:07:51 --> Language Class Initialized
INFO - 2021-04-12 03:07:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:51 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:07:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:51 --> Loader Class Initialized
INFO - 2021-04-12 03:07:51 --> Model Class Initialized
INFO - 2021-04-12 03:07:51 --> Controller Class Initialized
DEBUG - 2021-04-12 03:07:51 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:51 --> Model Class Initialized
INFO - 2021-04-12 03:07:51 --> Database Driver Class Initialized
INFO - 2021-04-12 03:07:51 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:51 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:51 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:51 --> Total execution time: 0.1767
INFO - 2021-04-12 03:07:51 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:51 --> Pagination Class Initialized
INFO - 2021-04-12 03:07:51 --> Helper loaded: common_helper
DEBUG - 2021-04-12 03:07:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:51 --> Model Class Initialized
INFO - 2021-04-12 03:07:51 --> Controller Class Initialized
INFO - 2021-04-12 03:07:51 --> Model Class Initialized
INFO - 2021-04-12 03:07:51 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 03:07:51 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
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
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 03:07:51 --> Database Driver Class Initialized
INFO - 2021-04-12 03:07:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:51 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:07:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:51 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 03:07:51 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:51 --> Total execution time: 0.1964
INFO - 2021-04-12 03:07:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:51 --> Model Class Initialized
INFO - 2021-04-12 03:07:51 --> Controller Class Initialized
INFO - 2021-04-12 03:07:51 --> Model Class Initialized
INFO - 2021-04-12 03:07:51 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
ERROR - 2021-04-12 03:07:51 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 03:07:51 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 03:07:51 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 03:07:51 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:51 --> Total execution time: 0.1195
INFO - 2021-04-12 03:07:52 --> Config Class Initialized
INFO - 2021-04-12 03:07:52 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:07:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:52 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:52 --> URI Class Initialized
INFO - 2021-04-12 03:07:52 --> Router Class Initialized
INFO - 2021-04-12 03:07:52 --> Output Class Initialized
INFO - 2021-04-12 03:07:52 --> Security Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:52 --> Input Class Initialized
INFO - 2021-04-12 03:07:52 --> Language Class Initialized
INFO - 2021-04-12 03:07:52 --> Loader Class Initialized
INFO - 2021-04-12 03:07:52 --> Config Class Initialized
INFO - 2021-04-12 03:07:52 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:52 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: common_helper
DEBUG - 2021-04-12 03:07:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:52 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:52 --> URI Class Initialized
INFO - 2021-04-12 03:07:52 --> Router Class Initialized
INFO - 2021-04-12 03:07:52 --> Output Class Initialized
INFO - 2021-04-12 03:07:52 --> Security Class Initialized
INFO - 2021-04-12 03:07:52 --> Database Driver Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:52 --> Input Class Initialized
INFO - 2021-04-12 03:07:52 --> Language Class Initialized
INFO - 2021-04-12 03:07:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:52 --> Pagination Class Initialized
INFO - 2021-04-12 03:07:52 --> Loader Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 03:07:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:52 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:52 --> Model Class Initialized
INFO - 2021-04-12 03:07:52 --> Controller Class Initialized
INFO - 2021-04-12 03:07:52 --> Model Class Initialized
INFO - 2021-04-12 03:07:52 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:52 --> Total execution time: 0.1088
INFO - 2021-04-12 03:07:52 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:52 --> Config Class Initialized
INFO - 2021-04-12 03:07:52 --> Hooks Class Initialized
INFO - 2021-04-12 03:07:52 --> Config Class Initialized
INFO - 2021-04-12 03:07:52 --> Hooks Class Initialized
INFO - 2021-04-12 03:07:52 --> Database Driver Class Initialized
DEBUG - 2021-04-12 03:07:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:52 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:52 --> URI Class Initialized
INFO - 2021-04-12 03:07:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:52 --> Pagination Class Initialized
INFO - 2021-04-12 03:07:52 --> Router Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:52 --> Model Class Initialized
INFO - 2021-04-12 03:07:52 --> Controller Class Initialized
INFO - 2021-04-12 03:07:52 --> Model Class Initialized
INFO - 2021-04-12 03:07:52 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:52 --> Total execution time: 0.1883
DEBUG - 2021-04-12 03:07:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:52 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:52 --> Output Class Initialized
INFO - 2021-04-12 03:07:52 --> URI Class Initialized
INFO - 2021-04-12 03:07:52 --> Config Class Initialized
INFO - 2021-04-12 03:07:52 --> Hooks Class Initialized
INFO - 2021-04-12 03:07:52 --> Security Class Initialized
INFO - 2021-04-12 03:07:52 --> Router Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:52 --> Input Class Initialized
INFO - 2021-04-12 03:07:52 --> Language Class Initialized
DEBUG - 2021-04-12 03:07:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:52 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:52 --> Output Class Initialized
INFO - 2021-04-12 03:07:52 --> URI Class Initialized
INFO - 2021-04-12 03:07:52 --> Security Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:52 --> Input Class Initialized
INFO - 2021-04-12 03:07:52 --> Loader Class Initialized
INFO - 2021-04-12 03:07:52 --> Router Class Initialized
INFO - 2021-04-12 03:07:52 --> Language Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:52 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:52 --> Output Class Initialized
INFO - 2021-04-12 03:07:52 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:52 --> Security Class Initialized
INFO - 2021-04-12 03:07:52 --> Loader Class Initialized
INFO - 2021-04-12 03:07:52 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: common_helper
DEBUG - 2021-04-12 03:07:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:52 --> Helper loaded: security_helper
DEBUG - 2021-04-12 03:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:52 --> Input Class Initialized
INFO - 2021-04-12 03:07:52 --> Language Class Initialized
INFO - 2021-04-12 03:07:52 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:52 --> Loader Class Initialized
DEBUG - 2021-04-12 03:07:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:52 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:52 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:52 --> Database Driver Class Initialized
INFO - 2021-04-12 03:07:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:52 --> Pagination Class Initialized
INFO - 2021-04-12 03:07:53 --> Database Driver Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Controller Class Initialized
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:53 --> Final output sent to browser
INFO - 2021-04-12 03:07:53 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Total execution time: 0.1934
INFO - 2021-04-12 03:07:53 --> Database Driver Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Controller Class Initialized
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:53 --> Total execution time: 0.1984
INFO - 2021-04-12 03:07:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:53 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Controller Class Initialized
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:53 --> Total execution time: 0.1991
INFO - 2021-04-12 03:07:53 --> Config Class Initialized
INFO - 2021-04-12 03:07:53 --> Hooks Class Initialized
INFO - 2021-04-12 03:07:53 --> Config Class Initialized
INFO - 2021-04-12 03:07:53 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:07:53 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:53 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:53 --> URI Class Initialized
DEBUG - 2021-04-12 03:07:53 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:53 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:53 --> URI Class Initialized
INFO - 2021-04-12 03:07:53 --> Router Class Initialized
INFO - 2021-04-12 03:07:53 --> Router Class Initialized
INFO - 2021-04-12 03:07:53 --> Output Class Initialized
INFO - 2021-04-12 03:07:53 --> Output Class Initialized
INFO - 2021-04-12 03:07:53 --> Security Class Initialized
INFO - 2021-04-12 03:07:53 --> Security Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:53 --> Input Class Initialized
INFO - 2021-04-12 03:07:53 --> Language Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:53 --> Input Class Initialized
INFO - 2021-04-12 03:07:53 --> Language Class Initialized
INFO - 2021-04-12 03:07:53 --> Loader Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:53 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:53 --> Loader Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:53 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:53 --> Database Driver Class Initialized
INFO - 2021-04-12 03:07:53 --> Database Driver Class Initialized
INFO - 2021-04-12 03:07:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:53 --> Pagination Class Initialized
INFO - 2021-04-12 03:07:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:53 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 03:07:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Controller Class Initialized
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:53 --> Total execution time: 0.1035
INFO - 2021-04-12 03:07:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Controller Class Initialized
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:53 --> Total execution time: 0.1937
INFO - 2021-04-12 03:07:53 --> Config Class Initialized
INFO - 2021-04-12 03:07:53 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:07:53 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:53 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:53 --> URI Class Initialized
INFO - 2021-04-12 03:07:53 --> Config Class Initialized
INFO - 2021-04-12 03:07:53 --> Hooks Class Initialized
INFO - 2021-04-12 03:07:53 --> Router Class Initialized
DEBUG - 2021-04-12 03:07:53 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:53 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:53 --> Output Class Initialized
INFO - 2021-04-12 03:07:53 --> URI Class Initialized
INFO - 2021-04-12 03:07:53 --> Router Class Initialized
INFO - 2021-04-12 03:07:53 --> Security Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:53 --> Input Class Initialized
INFO - 2021-04-12 03:07:53 --> Output Class Initialized
INFO - 2021-04-12 03:07:53 --> Language Class Initialized
INFO - 2021-04-12 03:07:53 --> Security Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:53 --> Input Class Initialized
INFO - 2021-04-12 03:07:53 --> Loader Class Initialized
INFO - 2021-04-12 03:07:53 --> Language Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:53 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:53 --> Loader Class Initialized
INFO - 2021-04-12 03:07:53 --> Helper loaded: form_helper
DEBUG - 2021-04-12 03:07:53 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:07:53 --> Helper loaded: security_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: form_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: url_helper
INFO - 2021-04-12 03:07:53 --> Helper loaded: common_helper
INFO - 2021-04-12 03:07:53 --> Database Driver Class Initialized
INFO - 2021-04-12 03:07:53 --> Database Driver Class Initialized
INFO - 2021-04-12 03:07:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:53 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:07:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Controller Class Initialized
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:07:53 --> Pagination Class Initialized
INFO - 2021-04-12 03:07:53 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:53 --> Total execution time: 0.0322
DEBUG - 2021-04-12 03:07:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:07:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Controller Class Initialized
INFO - 2021-04-12 03:07:53 --> Model Class Initialized
INFO - 2021-04-12 03:07:53 --> Final output sent to browser
DEBUG - 2021-04-12 03:07:53 --> Total execution time: 0.0453
INFO - 2021-04-12 03:07:54 --> Config Class Initialized
INFO - 2021-04-12 03:07:54 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:07:54 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:54 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:54 --> URI Class Initialized
INFO - 2021-04-12 03:07:54 --> Config Class Initialized
INFO - 2021-04-12 03:07:54 --> Hooks Class Initialized
INFO - 2021-04-12 03:07:54 --> Router Class Initialized
INFO - 2021-04-12 03:07:54 --> Output Class Initialized
DEBUG - 2021-04-12 03:07:54 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:07:54 --> Utf8 Class Initialized
INFO - 2021-04-12 03:07:54 --> URI Class Initialized
INFO - 2021-04-12 03:07:54 --> Security Class Initialized
INFO - 2021-04-12 03:07:54 --> Router Class Initialized
DEBUG - 2021-04-12 03:07:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:54 --> Input Class Initialized
INFO - 2021-04-12 03:07:54 --> Language Class Initialized
ERROR - 2021-04-12 03:07:54 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 03:07:54 --> Output Class Initialized
INFO - 2021-04-12 03:07:54 --> Security Class Initialized
DEBUG - 2021-04-12 03:07:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:07:54 --> Input Class Initialized
INFO - 2021-04-12 03:07:54 --> Language Class Initialized
ERROR - 2021-04-12 03:07:54 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 03:08:09 --> Config Class Initialized
INFO - 2021-04-12 03:08:09 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:08:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:08:09 --> Utf8 Class Initialized
INFO - 2021-04-12 03:08:09 --> URI Class Initialized
INFO - 2021-04-12 03:08:09 --> Router Class Initialized
INFO - 2021-04-12 03:08:09 --> Output Class Initialized
INFO - 2021-04-12 03:08:09 --> Security Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:08:09 --> Input Class Initialized
INFO - 2021-04-12 03:08:09 --> Language Class Initialized
INFO - 2021-04-12 03:08:09 --> Loader Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:08:09 --> Helper loaded: security_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: form_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: url_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: common_helper
INFO - 2021-04-12 03:08:09 --> Database Driver Class Initialized
INFO - 2021-04-12 03:08:09 --> Config Class Initialized
INFO - 2021-04-12 03:08:09 --> Hooks Class Initialized
INFO - 2021-04-12 03:08:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:08:09 --> Pagination Class Initialized
INFO - 2021-04-12 03:08:09 --> Config Class Initialized
INFO - 2021-04-12 03:08:09 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:08:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:08:09 --> Utf8 Class Initialized
DEBUG - 2021-04-12 03:08:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:08:09 --> Utf8 Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:08:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:08:09 --> URI Class Initialized
INFO - 2021-04-12 03:08:09 --> Model Class Initialized
INFO - 2021-04-12 03:08:09 --> Controller Class Initialized
INFO - 2021-04-12 03:08:09 --> URI Class Initialized
INFO - 2021-04-12 03:08:09 --> Model Class Initialized
INFO - 2021-04-12 03:08:09 --> Router Class Initialized
INFO - 2021-04-12 03:08:09 --> Router Class Initialized
INFO - 2021-04-12 03:08:09 --> Final output sent to browser
DEBUG - 2021-04-12 03:08:09 --> Total execution time: 0.1133
INFO - 2021-04-12 03:08:09 --> Output Class Initialized
INFO - 2021-04-12 03:08:09 --> Security Class Initialized
INFO - 2021-04-12 03:08:09 --> Output Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:08:09 --> Input Class Initialized
INFO - 2021-04-12 03:08:09 --> Language Class Initialized
INFO - 2021-04-12 03:08:09 --> Security Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:08:09 --> Input Class Initialized
INFO - 2021-04-12 03:08:09 --> Language Class Initialized
INFO - 2021-04-12 03:08:09 --> Loader Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:08:09 --> Helper loaded: security_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: form_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: url_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: common_helper
INFO - 2021-04-12 03:08:09 --> Loader Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:08:09 --> Helper loaded: security_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: form_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: url_helper
INFO - 2021-04-12 03:08:09 --> Helper loaded: common_helper
INFO - 2021-04-12 03:08:09 --> Database Driver Class Initialized
INFO - 2021-04-12 03:08:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:08:09 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:08:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:08:09 --> Model Class Initialized
INFO - 2021-04-12 03:08:09 --> Controller Class Initialized
INFO - 2021-04-12 03:08:09 --> Model Class Initialized
INFO - 2021-04-12 03:08:09 --> Final output sent to browser
DEBUG - 2021-04-12 03:08:09 --> Total execution time: 0.0998
INFO - 2021-04-12 03:08:09 --> Database Driver Class Initialized
INFO - 2021-04-12 03:08:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:08:09 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:08:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:08:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:08:09 --> Model Class Initialized
INFO - 2021-04-12 03:08:09 --> Controller Class Initialized
INFO - 2021-04-12 03:08:09 --> Model Class Initialized
INFO - 2021-04-12 03:08:09 --> album-Request--> array (
  'user_id' => '31',
)
INFO - 2021-04-12 03:08:09 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 03:08:09 --> Final output sent to browser
DEBUG - 2021-04-12 03:08:09 --> Total execution time: 0.1131
INFO - 2021-04-12 03:30:38 --> Config Class Initialized
INFO - 2021-04-12 03:30:38 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:30:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:30:38 --> Utf8 Class Initialized
INFO - 2021-04-12 03:30:38 --> URI Class Initialized
INFO - 2021-04-12 03:30:38 --> Router Class Initialized
INFO - 2021-04-12 03:30:38 --> Output Class Initialized
INFO - 2021-04-12 03:30:38 --> Security Class Initialized
DEBUG - 2021-04-12 03:30:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:30:38 --> Input Class Initialized
INFO - 2021-04-12 03:30:38 --> Language Class Initialized
INFO - 2021-04-12 03:30:38 --> Loader Class Initialized
DEBUG - 2021-04-12 03:30:38 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:30:38 --> Helper loaded: security_helper
INFO - 2021-04-12 03:30:38 --> Helper loaded: form_helper
INFO - 2021-04-12 03:30:38 --> Helper loaded: url_helper
INFO - 2021-04-12 03:30:38 --> Helper loaded: common_helper
INFO - 2021-04-12 03:30:39 --> Database Driver Class Initialized
INFO - 2021-04-12 03:30:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:30:39 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:30:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:30:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:30:39 --> Model Class Initialized
INFO - 2021-04-12 03:30:39 --> Controller Class Initialized
INFO - 2021-04-12 03:30:39 --> Model Class Initialized
INFO - 2021-04-12 03:30:39 --> Final output sent to browser
DEBUG - 2021-04-12 03:30:39 --> Total execution time: 0.5463
INFO - 2021-04-12 03:30:55 --> Config Class Initialized
INFO - 2021-04-12 03:30:55 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:30:55 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:30:55 --> Utf8 Class Initialized
INFO - 2021-04-12 03:30:55 --> URI Class Initialized
INFO - 2021-04-12 03:30:55 --> Router Class Initialized
INFO - 2021-04-12 03:30:55 --> Output Class Initialized
INFO - 2021-04-12 03:30:55 --> Security Class Initialized
DEBUG - 2021-04-12 03:30:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:30:55 --> Input Class Initialized
INFO - 2021-04-12 03:30:55 --> Language Class Initialized
ERROR - 2021-04-12 03:30:55 --> 404 Page Not Found: Users/get_users_info
INFO - 2021-04-12 03:30:59 --> Config Class Initialized
INFO - 2021-04-12 03:30:59 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:30:59 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:30:59 --> Utf8 Class Initialized
INFO - 2021-04-12 03:30:59 --> URI Class Initialized
INFO - 2021-04-12 03:30:59 --> Router Class Initialized
INFO - 2021-04-12 03:30:59 --> Output Class Initialized
INFO - 2021-04-12 03:30:59 --> Security Class Initialized
DEBUG - 2021-04-12 03:30:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:30:59 --> Input Class Initialized
INFO - 2021-04-12 03:30:59 --> Language Class Initialized
ERROR - 2021-04-12 03:30:59 --> 404 Page Not Found: Users/get_users_info
INFO - 2021-04-12 03:31:04 --> Config Class Initialized
INFO - 2021-04-12 03:31:04 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:31:04 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:31:04 --> Utf8 Class Initialized
INFO - 2021-04-12 03:31:04 --> URI Class Initialized
INFO - 2021-04-12 03:31:04 --> Router Class Initialized
INFO - 2021-04-12 03:31:04 --> Output Class Initialized
INFO - 2021-04-12 03:31:04 --> Security Class Initialized
DEBUG - 2021-04-12 03:31:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:31:04 --> Input Class Initialized
INFO - 2021-04-12 03:31:04 --> Language Class Initialized
INFO - 2021-04-12 03:31:04 --> Loader Class Initialized
DEBUG - 2021-04-12 03:31:04 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:31:04 --> Helper loaded: security_helper
INFO - 2021-04-12 03:31:04 --> Helper loaded: form_helper
INFO - 2021-04-12 03:31:04 --> Helper loaded: url_helper
INFO - 2021-04-12 03:31:04 --> Helper loaded: common_helper
INFO - 2021-04-12 03:31:04 --> Database Driver Class Initialized
INFO - 2021-04-12 03:31:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:31:04 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:31:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:31:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:31:04 --> Model Class Initialized
INFO - 2021-04-12 03:31:04 --> Controller Class Initialized
INFO - 2021-04-12 03:31:04 --> Model Class Initialized
INFO - 2021-04-12 03:31:04 --> Final output sent to browser
DEBUG - 2021-04-12 03:31:04 --> Total execution time: 0.0569
INFO - 2021-04-12 03:33:46 --> Config Class Initialized
INFO - 2021-04-12 03:33:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:33:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:33:46 --> Utf8 Class Initialized
INFO - 2021-04-12 03:33:46 --> URI Class Initialized
INFO - 2021-04-12 03:33:46 --> Router Class Initialized
INFO - 2021-04-12 03:33:46 --> Output Class Initialized
INFO - 2021-04-12 03:33:46 --> Security Class Initialized
DEBUG - 2021-04-12 03:33:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:33:46 --> Input Class Initialized
INFO - 2021-04-12 03:33:46 --> Language Class Initialized
INFO - 2021-04-12 03:33:46 --> Loader Class Initialized
DEBUG - 2021-04-12 03:33:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:33:46 --> Helper loaded: security_helper
INFO - 2021-04-12 03:33:46 --> Helper loaded: form_helper
INFO - 2021-04-12 03:33:46 --> Helper loaded: url_helper
INFO - 2021-04-12 03:33:46 --> Helper loaded: common_helper
INFO - 2021-04-12 03:33:46 --> Database Driver Class Initialized
INFO - 2021-04-12 03:33:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:33:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:33:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:33:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:33:46 --> Model Class Initialized
INFO - 2021-04-12 03:33:46 --> Controller Class Initialized
INFO - 2021-04-12 03:33:46 --> Model Class Initialized
INFO - 2021-04-12 03:33:46 --> Final output sent to browser
DEBUG - 2021-04-12 03:33:46 --> Total execution time: 0.0353
INFO - 2021-04-12 03:36:02 --> Config Class Initialized
INFO - 2021-04-12 03:36:02 --> Hooks Class Initialized
DEBUG - 2021-04-12 03:36:02 --> UTF-8 Support Enabled
INFO - 2021-04-12 03:36:02 --> Utf8 Class Initialized
INFO - 2021-04-12 03:36:02 --> URI Class Initialized
DEBUG - 2021-04-12 03:36:02 --> No URI present. Default controller set.
INFO - 2021-04-12 03:36:02 --> Router Class Initialized
INFO - 2021-04-12 03:36:02 --> Output Class Initialized
INFO - 2021-04-12 03:36:02 --> Security Class Initialized
DEBUG - 2021-04-12 03:36:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 03:36:02 --> Input Class Initialized
INFO - 2021-04-12 03:36:02 --> Language Class Initialized
INFO - 2021-04-12 03:36:02 --> Loader Class Initialized
DEBUG - 2021-04-12 03:36:02 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 03:36:02 --> Helper loaded: security_helper
INFO - 2021-04-12 03:36:02 --> Helper loaded: form_helper
INFO - 2021-04-12 03:36:02 --> Helper loaded: url_helper
INFO - 2021-04-12 03:36:02 --> Helper loaded: common_helper
INFO - 2021-04-12 03:36:02 --> Database Driver Class Initialized
INFO - 2021-04-12 03:36:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 03:36:02 --> Pagination Class Initialized
DEBUG - 2021-04-12 03:36:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 03:36:02 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 03:36:02 --> Model Class Initialized
INFO - 2021-04-12 03:36:02 --> Controller Class Initialized
INFO - 2021-04-12 03:36:02 --> Model Class Initialized
INFO - 2021-04-12 03:36:02 --> File loaded: /home/memefeed/public_html/meme_feed/application/views/user/login.php
INFO - 2021-04-12 03:36:02 --> File loaded: /home/memefeed/public_html/meme_feed/application/views/layouts/main.php
INFO - 2021-04-12 03:36:02 --> Final output sent to browser
DEBUG - 2021-04-12 03:36:02 --> Total execution time: 0.0395
INFO - 2021-04-12 06:31:38 --> Config Class Initialized
INFO - 2021-04-12 06:31:38 --> Config Class Initialized
INFO - 2021-04-12 06:31:38 --> Hooks Class Initialized
INFO - 2021-04-12 06:31:38 --> Hooks Class Initialized
INFO - 2021-04-12 06:31:38 --> Config Class Initialized
INFO - 2021-04-12 06:31:38 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:31:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:38 --> Utf8 Class Initialized
DEBUG - 2021-04-12 06:31:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:38 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:38 --> URI Class Initialized
INFO - 2021-04-12 06:31:38 --> URI Class Initialized
DEBUG - 2021-04-12 06:31:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:38 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:38 --> URI Class Initialized
INFO - 2021-04-12 06:31:38 --> Router Class Initialized
INFO - 2021-04-12 06:31:38 --> Router Class Initialized
INFO - 2021-04-12 06:31:38 --> Router Class Initialized
INFO - 2021-04-12 06:31:38 --> Output Class Initialized
INFO - 2021-04-12 06:31:38 --> Output Class Initialized
INFO - 2021-04-12 06:31:38 --> Output Class Initialized
INFO - 2021-04-12 06:31:38 --> Security Class Initialized
INFO - 2021-04-12 06:31:38 --> Security Class Initialized
DEBUG - 2021-04-12 06:31:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:38 --> Input Class Initialized
INFO - 2021-04-12 06:31:38 --> Security Class Initialized
DEBUG - 2021-04-12 06:31:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:38 --> Input Class Initialized
INFO - 2021-04-12 06:31:38 --> Language Class Initialized
INFO - 2021-04-12 06:31:38 --> Language Class Initialized
DEBUG - 2021-04-12 06:31:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:38 --> Input Class Initialized
INFO - 2021-04-12 06:31:38 --> Language Class Initialized
INFO - 2021-04-12 06:31:38 --> Loader Class Initialized
INFO - 2021-04-12 06:31:38 --> Loader Class Initialized
INFO - 2021-04-12 06:31:38 --> Loader Class Initialized
DEBUG - 2021-04-12 06:31:38 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 06:31:38 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 06:31:38 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:38 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:38 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:39 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:39 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:39 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:39 --> Pagination Class Initialized
INFO - 2021-04-12 06:31:39 --> Pagination Class Initialized
INFO - 2021-04-12 06:31:39 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:31:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 06:31:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 06:31:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:39 --> Model Class Initialized
INFO - 2021-04-12 06:31:39 --> Controller Class Initialized
INFO - 2021-04-12 06:31:39 --> Model Class Initialized
INFO - 2021-04-12 06:31:39 --> Model Class Initialized
INFO - 2021-04-12 06:31:39 --> Controller Class Initialized
INFO - 2021-04-12 06:31:39 --> Controller Class Initialized
INFO - 2021-04-12 06:31:39 --> Model Class Initialized
INFO - 2021-04-12 06:31:39 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 06:31:39 --> Model Class Initialized
INFO - 2021-04-12 06:31:39 --> Model Class Initialized
INFO - 2021-04-12 06:31:39 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
INFO - 2021-04-12 06:31:39 --> Final output sent to browser
INFO - 2021-04-12 06:31:39 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|test|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
DEBUG - 2021-04-12 06:31:39 --> Total execution time: 0.6453
ERROR - 2021-04-12 06:31:39 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 06:31:39 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-12 06:31:39 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:39 --> Total execution time: 0.6444
INFO - 2021-04-12 06:31:39 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 06:31:39 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 06:31:39 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:39 --> Total execution time: 0.6722
INFO - 2021-04-12 06:31:40 --> Config Class Initialized
INFO - 2021-04-12 06:31:40 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:31:40 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:40 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:40 --> URI Class Initialized
INFO - 2021-04-12 06:31:40 --> Router Class Initialized
INFO - 2021-04-12 06:31:40 --> Output Class Initialized
INFO - 2021-04-12 06:31:40 --> Security Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:40 --> Input Class Initialized
INFO - 2021-04-12 06:31:40 --> Language Class Initialized
INFO - 2021-04-12 06:31:40 --> Loader Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:40 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:40 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:40 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:40 --> Config Class Initialized
INFO - 2021-04-12 06:31:40 --> Hooks Class Initialized
INFO - 2021-04-12 06:31:40 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:31:40 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:40 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:40 --> URI Class Initialized
INFO - 2021-04-12 06:31:40 --> Router Class Initialized
INFO - 2021-04-12 06:31:40 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:40 --> Output Class Initialized
INFO - 2021-04-12 06:31:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:40 --> Pagination Class Initialized
INFO - 2021-04-12 06:31:40 --> Security Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:40 --> Input Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:40 --> Language Class Initialized
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Controller Class Initialized
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:40 --> Total execution time: 0.1953
INFO - 2021-04-12 06:31:40 --> Loader Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:40 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:40 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:40 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:40 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:40 --> Config Class Initialized
INFO - 2021-04-12 06:31:40 --> Hooks Class Initialized
INFO - 2021-04-12 06:31:40 --> Config Class Initialized
INFO - 2021-04-12 06:31:40 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:31:40 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:40 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:40 --> URI Class Initialized
INFO - 2021-04-12 06:31:40 --> Router Class Initialized
INFO - 2021-04-12 06:31:40 --> Output Class Initialized
INFO - 2021-04-12 06:31:40 --> Security Class Initialized
INFO - 2021-04-12 06:31:40 --> Config Class Initialized
INFO - 2021-04-12 06:31:40 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:31:40 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:40 --> Utf8 Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:40 --> Input Class Initialized
INFO - 2021-04-12 06:31:40 --> URI Class Initialized
INFO - 2021-04-12 06:31:40 --> Language Class Initialized
INFO - 2021-04-12 06:31:40 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:40 --> Router Class Initialized
DEBUG - 2021-04-12 06:31:40 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:40 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:40 --> Output Class Initialized
INFO - 2021-04-12 06:31:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:40 --> Loader Class Initialized
INFO - 2021-04-12 06:31:40 --> Pagination Class Initialized
INFO - 2021-04-12 06:31:40 --> URI Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:40 --> Security Class Initialized
INFO - 2021-04-12 06:31:40 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:40 --> Router Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:40 --> Input Class Initialized
INFO - 2021-04-12 06:31:40 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:40 --> Language Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:40 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Controller Class Initialized
INFO - 2021-04-12 06:31:40 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:40 --> Total execution time: 0.1996
INFO - 2021-04-12 06:31:40 --> Loader Class Initialized
INFO - 2021-04-12 06:31:40 --> Output Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:40 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:40 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:40 --> Security Class Initialized
INFO - 2021-04-12 06:31:40 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:40 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:31:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:40 --> Input Class Initialized
INFO - 2021-04-12 06:31:40 --> Language Class Initialized
INFO - 2021-04-12 06:31:40 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:40 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:40 --> Loader Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:40 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:40 --> Pagination Class Initialized
INFO - 2021-04-12 06:31:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:40 --> Pagination Class Initialized
INFO - 2021-04-12 06:31:40 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:40 --> Helper loaded: url_helper
DEBUG - 2021-04-12 06:31:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:40 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 06:31:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:40 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Controller Class Initialized
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:40 --> Total execution time: 0.1142
INFO - 2021-04-12 06:31:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Controller Class Initialized
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:40 --> Total execution time: 0.1861
INFO - 2021-04-12 06:31:40 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:40 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:31:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Controller Class Initialized
INFO - 2021-04-12 06:31:40 --> Model Class Initialized
INFO - 2021-04-12 06:31:40 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:40 --> Total execution time: 0.2031
INFO - 2021-04-12 06:31:41 --> Config Class Initialized
INFO - 2021-04-12 06:31:41 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:31:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:41 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:41 --> URI Class Initialized
INFO - 2021-04-12 06:31:41 --> Router Class Initialized
INFO - 2021-04-12 06:31:41 --> Config Class Initialized
INFO - 2021-04-12 06:31:41 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:31:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:41 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:41 --> Output Class Initialized
INFO - 2021-04-12 06:31:41 --> URI Class Initialized
INFO - 2021-04-12 06:31:41 --> Security Class Initialized
INFO - 2021-04-12 06:31:41 --> Router Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:41 --> Input Class Initialized
INFO - 2021-04-12 06:31:41 --> Language Class Initialized
INFO - 2021-04-12 06:31:41 --> Output Class Initialized
INFO - 2021-04-12 06:31:41 --> Security Class Initialized
INFO - 2021-04-12 06:31:41 --> Loader Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:41 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:31:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:41 --> Input Class Initialized
INFO - 2021-04-12 06:31:41 --> Language Class Initialized
INFO - 2021-04-12 06:31:41 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:41 --> Loader Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:41 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:41 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:41 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:41 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:41 --> Model Class Initialized
INFO - 2021-04-12 06:31:41 --> Controller Class Initialized
INFO - 2021-04-12 06:31:41 --> Model Class Initialized
INFO - 2021-04-12 06:31:41 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:41 --> Total execution time: 0.0886
INFO - 2021-04-12 06:31:41 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:41 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:41 --> Model Class Initialized
INFO - 2021-04-12 06:31:41 --> Controller Class Initialized
INFO - 2021-04-12 06:31:41 --> Model Class Initialized
INFO - 2021-04-12 06:31:41 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:41 --> Total execution time: 0.1648
INFO - 2021-04-12 06:31:41 --> Config Class Initialized
INFO - 2021-04-12 06:31:41 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:31:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:41 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:41 --> URI Class Initialized
INFO - 2021-04-12 06:31:41 --> Router Class Initialized
INFO - 2021-04-12 06:31:41 --> Output Class Initialized
INFO - 2021-04-12 06:31:41 --> Security Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:41 --> Input Class Initialized
INFO - 2021-04-12 06:31:41 --> Language Class Initialized
INFO - 2021-04-12 06:31:41 --> Loader Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:41 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:41 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:41 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:41 --> Model Class Initialized
INFO - 2021-04-12 06:31:41 --> Controller Class Initialized
INFO - 2021-04-12 06:31:41 --> Model Class Initialized
INFO - 2021-04-12 06:31:41 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:41 --> Total execution time: 0.0321
INFO - 2021-04-12 06:31:41 --> Config Class Initialized
INFO - 2021-04-12 06:31:41 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:31:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:31:41 --> Utf8 Class Initialized
INFO - 2021-04-12 06:31:41 --> URI Class Initialized
INFO - 2021-04-12 06:31:41 --> Router Class Initialized
INFO - 2021-04-12 06:31:41 --> Output Class Initialized
INFO - 2021-04-12 06:31:41 --> Security Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:31:41 --> Input Class Initialized
INFO - 2021-04-12 06:31:41 --> Language Class Initialized
INFO - 2021-04-12 06:31:41 --> Loader Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:31:41 --> Helper loaded: security_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: form_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: url_helper
INFO - 2021-04-12 06:31:41 --> Helper loaded: common_helper
INFO - 2021-04-12 06:31:41 --> Database Driver Class Initialized
INFO - 2021-04-12 06:31:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:31:41 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:31:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:31:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:31:41 --> Model Class Initialized
INFO - 2021-04-12 06:31:41 --> Controller Class Initialized
INFO - 2021-04-12 06:31:41 --> Model Class Initialized
INFO - 2021-04-12 06:31:41 --> Final output sent to browser
DEBUG - 2021-04-12 06:31:41 --> Total execution time: 0.0752
INFO - 2021-04-12 06:33:58 --> Config Class Initialized
INFO - 2021-04-12 06:33:58 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:33:58 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:33:58 --> Utf8 Class Initialized
INFO - 2021-04-12 06:33:58 --> URI Class Initialized
INFO - 2021-04-12 06:33:58 --> Router Class Initialized
INFO - 2021-04-12 06:33:58 --> Output Class Initialized
INFO - 2021-04-12 06:33:58 --> Security Class Initialized
DEBUG - 2021-04-12 06:33:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:33:58 --> Input Class Initialized
INFO - 2021-04-12 06:33:58 --> Language Class Initialized
INFO - 2021-04-12 06:33:58 --> Loader Class Initialized
DEBUG - 2021-04-12 06:33:58 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:33:58 --> Helper loaded: security_helper
INFO - 2021-04-12 06:33:58 --> Helper loaded: form_helper
INFO - 2021-04-12 06:33:58 --> Helper loaded: url_helper
INFO - 2021-04-12 06:33:58 --> Helper loaded: common_helper
INFO - 2021-04-12 06:33:58 --> Database Driver Class Initialized
INFO - 2021-04-12 06:33:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:33:58 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:33:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:33:58 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:33:58 --> Model Class Initialized
INFO - 2021-04-12 06:33:58 --> Controller Class Initialized
INFO - 2021-04-12 06:33:58 --> Model Class Initialized
INFO - 2021-04-12 06:33:58 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 06:33:58 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|test|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 06:33:58 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-12 06:33:58 --> Final output sent to browser
DEBUG - 2021-04-12 06:33:58 --> Total execution time: 0.0311
INFO - 2021-04-12 06:34:13 --> Config Class Initialized
INFO - 2021-04-12 06:34:13 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:13 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:13 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:13 --> URI Class Initialized
INFO - 2021-04-12 06:34:13 --> Router Class Initialized
INFO - 2021-04-12 06:34:13 --> Output Class Initialized
INFO - 2021-04-12 06:34:13 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:13 --> Input Class Initialized
INFO - 2021-04-12 06:34:13 --> Language Class Initialized
INFO - 2021-04-12 06:34:13 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:13 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:13 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:13 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:13 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:13 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:13 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:13 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:13 --> Model Class Initialized
INFO - 2021-04-12 06:34:13 --> Controller Class Initialized
INFO - 2021-04-12 06:34:13 --> Model Class Initialized
INFO - 2021-04-12 06:34:13 --> PostList-Request--> array (
  'from' => '10',
  'to' => '19',
  'user_id' => '31',
)
INFO - 2021-04-12 06:34:13 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|test|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 10, 19'
INFO - 2021-04-12 06:34:13 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
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
  6 => 
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
  7 => 
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
  8 => 
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
  9 => 
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
  10 => 
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
  11 => 
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
  12 => 
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
  13 => 
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
  14 => 
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
  15 => 
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
  16 => 
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
  17 => 
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
  18 => 
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
)
INFO - 2021-04-12 06:34:13 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:13 --> Total execution time: 0.0461
INFO - 2021-04-12 06:34:15 --> Config Class Initialized
INFO - 2021-04-12 06:34:15 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:15 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:15 --> URI Class Initialized
INFO - 2021-04-12 06:34:15 --> Router Class Initialized
INFO - 2021-04-12 06:34:15 --> Output Class Initialized
INFO - 2021-04-12 06:34:15 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:15 --> Input Class Initialized
INFO - 2021-04-12 06:34:15 --> Language Class Initialized
INFO - 2021-04-12 06:34:15 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:15 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:15 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:15 --> Config Class Initialized
INFO - 2021-04-12 06:34:15 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:15 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:34:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:15 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:15 --> URI Class Initialized
INFO - 2021-04-12 06:34:15 --> Router Class Initialized
INFO - 2021-04-12 06:34:15 --> Output Class Initialized
INFO - 2021-04-12 06:34:15 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:15 --> Input Class Initialized
INFO - 2021-04-12 06:34:15 --> Language Class Initialized
INFO - 2021-04-12 06:34:15 --> Config Class Initialized
INFO - 2021-04-12 06:34:15 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:15 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:15 --> Loader Class Initialized
INFO - 2021-04-12 06:34:15 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:15 --> URI Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:15 --> Router Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:15 --> Config Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:15 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:15 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:15 --> Output Class Initialized
DEBUG - 2021-04-12 06:34:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:15 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:15 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:15 --> URI Class Initialized
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Controller Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Input Class Initialized
INFO - 2021-04-12 06:34:15 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:15 --> Total execution time: 0.2106
INFO - 2021-04-12 06:34:15 --> Language Class Initialized
INFO - 2021-04-12 06:34:15 --> Router Class Initialized
INFO - 2021-04-12 06:34:15 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:15 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:15 --> Loader Class Initialized
INFO - 2021-04-12 06:34:15 --> Output Class Initialized
INFO - 2021-04-12 06:34:15 --> Config Class Initialized
INFO - 2021-04-12 06:34:15 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:15 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:15 --> Security Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: form_helper
DEBUG - 2021-04-12 06:34:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 06:34:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:15 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Controller Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:15 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:15 --> Input Class Initialized
INFO - 2021-04-12 06:34:15 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:15 --> Total execution time: 0.1943
INFO - 2021-04-12 06:34:15 --> Language Class Initialized
INFO - 2021-04-12 06:34:15 --> URI Class Initialized
INFO - 2021-04-12 06:34:15 --> Router Class Initialized
INFO - 2021-04-12 06:34:15 --> Output Class Initialized
INFO - 2021-04-12 06:34:15 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:15 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:15 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:15 --> Security Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: form_helper
DEBUG - 2021-04-12 06:34:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:15 --> Input Class Initialized
INFO - 2021-04-12 06:34:15 --> Language Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:15 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:15 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:34:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:15 --> Loader Class Initialized
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Controller Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Final output sent to browser
INFO - 2021-04-12 06:34:15 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:34:15 --> Total execution time: 0.1155
INFO - 2021-04-12 06:34:15 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:15 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:15 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:15 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:15 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Controller Class Initialized
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:15 --> Total execution time: 0.1956
INFO - 2021-04-12 06:34:15 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:15 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Controller Class Initialized
INFO - 2021-04-12 06:34:15 --> Model Class Initialized
INFO - 2021-04-12 06:34:15 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:15 --> Total execution time: 0.1940
INFO - 2021-04-12 06:34:15 --> Config Class Initialized
INFO - 2021-04-12 06:34:15 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:15 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:15 --> URI Class Initialized
INFO - 2021-04-12 06:34:15 --> Router Class Initialized
INFO - 2021-04-12 06:34:15 --> Output Class Initialized
INFO - 2021-04-12 06:34:15 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:15 --> Input Class Initialized
INFO - 2021-04-12 06:34:15 --> Language Class Initialized
INFO - 2021-04-12 06:34:15 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:15 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:15 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:15 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:15 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.2086
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.1102
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.1909
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.2039
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.1175
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Config Class Initialized
INFO - 2021-04-12 06:34:16 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.2922
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
DEBUG - 2021-04-12 06:34:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:16 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
INFO - 2021-04-12 06:34:16 --> URI Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:16 --> Router Class Initialized
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:16 --> Output Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:16 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:16 --> Input Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.1234
INFO - 2021-04-12 06:34:16 --> Language Class Initialized
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:16 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:16 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:16 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:16 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.2046
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:16 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.2130
INFO - 2021-04-12 06:34:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:16 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Controller Class Initialized
INFO - 2021-04-12 06:34:16 --> Model Class Initialized
INFO - 2021-04-12 06:34:16 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:16 --> Total execution time: 0.1237
INFO - 2021-04-12 06:34:17 --> Config Class Initialized
INFO - 2021-04-12 06:34:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:17 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:17 --> URI Class Initialized
INFO - 2021-04-12 06:34:17 --> Router Class Initialized
INFO - 2021-04-12 06:34:17 --> Output Class Initialized
INFO - 2021-04-12 06:34:17 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:17 --> Input Class Initialized
INFO - 2021-04-12 06:34:17 --> Language Class Initialized
INFO - 2021-04-12 06:34:17 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:17 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:17 --> Config Class Initialized
INFO - 2021-04-12 06:34:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:17 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:17 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:17 --> URI Class Initialized
INFO - 2021-04-12 06:34:17 --> Config Class Initialized
INFO - 2021-04-12 06:34:17 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:17 --> Router Class Initialized
INFO - 2021-04-12 06:34:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:17 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:17 --> Output Class Initialized
DEBUG - 2021-04-12 06:34:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:17 --> Utf8 Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:17 --> Security Class Initialized
INFO - 2021-04-12 06:34:17 --> URI Class Initialized
INFO - 2021-04-12 06:34:17 --> Model Class Initialized
INFO - 2021-04-12 06:34:17 --> Controller Class Initialized
INFO - 2021-04-12 06:34:17 --> Model Class Initialized
INFO - 2021-04-12 06:34:17 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:17 --> Total execution time: 0.1079
DEBUG - 2021-04-12 06:34:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:17 --> Input Class Initialized
INFO - 2021-04-12 06:34:17 --> Router Class Initialized
INFO - 2021-04-12 06:34:17 --> Language Class Initialized
INFO - 2021-04-12 06:34:17 --> Output Class Initialized
INFO - 2021-04-12 06:34:17 --> Loader Class Initialized
INFO - 2021-04-12 06:34:17 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:17 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:34:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:17 --> Input Class Initialized
INFO - 2021-04-12 06:34:17 --> Language Class Initialized
INFO - 2021-04-12 06:34:17 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:17 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:17 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:17 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:17 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:17 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:17 --> Model Class Initialized
INFO - 2021-04-12 06:34:17 --> Controller Class Initialized
INFO - 2021-04-12 06:34:17 --> Model Class Initialized
INFO - 2021-04-12 06:34:17 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:17 --> Total execution time: 0.1075
INFO - 2021-04-12 06:34:17 --> Config Class Initialized
INFO - 2021-04-12 06:34:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:17 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:17 --> URI Class Initialized
INFO - 2021-04-12 06:34:17 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:17 --> Router Class Initialized
INFO - 2021-04-12 06:34:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:17 --> Pagination Class Initialized
INFO - 2021-04-12 06:34:17 --> Output Class Initialized
INFO - 2021-04-12 06:34:17 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:17 --> Input Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:17 --> Language Class Initialized
INFO - 2021-04-12 06:34:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:17 --> Model Class Initialized
INFO - 2021-04-12 06:34:17 --> Controller Class Initialized
INFO - 2021-04-12 06:34:17 --> Model Class Initialized
INFO - 2021-04-12 06:34:17 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:17 --> Total execution time: 0.1217
INFO - 2021-04-12 06:34:17 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:17 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:17 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:17 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:17 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:17 --> Model Class Initialized
INFO - 2021-04-12 06:34:17 --> Controller Class Initialized
INFO - 2021-04-12 06:34:17 --> Model Class Initialized
INFO - 2021-04-12 06:34:17 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:17 --> Total execution time: 0.1095
INFO - 2021-04-12 06:34:17 --> Config Class Initialized
INFO - 2021-04-12 06:34:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:17 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:17 --> URI Class Initialized
INFO - 2021-04-12 06:34:17 --> Router Class Initialized
INFO - 2021-04-12 06:34:17 --> Output Class Initialized
INFO - 2021-04-12 06:34:17 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:17 --> Input Class Initialized
INFO - 2021-04-12 06:34:17 --> Language Class Initialized
ERROR - 2021-04-12 06:34:17 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 06:34:17 --> Config Class Initialized
INFO - 2021-04-12 06:34:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:17 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:17 --> URI Class Initialized
INFO - 2021-04-12 06:34:17 --> Router Class Initialized
INFO - 2021-04-12 06:34:17 --> Output Class Initialized
INFO - 2021-04-12 06:34:17 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:17 --> Input Class Initialized
INFO - 2021-04-12 06:34:17 --> Language Class Initialized
ERROR - 2021-04-12 06:34:17 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 06:34:25 --> Config Class Initialized
INFO - 2021-04-12 06:34:25 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:25 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:25 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:25 --> URI Class Initialized
INFO - 2021-04-12 06:34:25 --> Router Class Initialized
INFO - 2021-04-12 06:34:25 --> Output Class Initialized
INFO - 2021-04-12 06:34:25 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:25 --> Input Class Initialized
INFO - 2021-04-12 06:34:25 --> Language Class Initialized
INFO - 2021-04-12 06:34:25 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:25 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:25 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:25 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:25 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:25 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:25 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:25 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:25 --> Model Class Initialized
INFO - 2021-04-12 06:34:25 --> Controller Class Initialized
INFO - 2021-04-12 06:34:25 --> Model Class Initialized
INFO - 2021-04-12 06:34:25 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:25 --> Total execution time: 0.0852
INFO - 2021-04-12 06:34:47 --> Config Class Initialized
INFO - 2021-04-12 06:34:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:47 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:47 --> URI Class Initialized
INFO - 2021-04-12 06:34:47 --> Router Class Initialized
INFO - 2021-04-12 06:34:47 --> Output Class Initialized
INFO - 2021-04-12 06:34:47 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:47 --> Input Class Initialized
INFO - 2021-04-12 06:34:47 --> Language Class Initialized
INFO - 2021-04-12 06:34:47 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:47 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:47 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:47 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:47 --> Model Class Initialized
INFO - 2021-04-12 06:34:47 --> Controller Class Initialized
INFO - 2021-04-12 06:34:47 --> Model Class Initialized
INFO - 2021-04-12 06:34:47 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:47 --> Total execution time: 0.0990
INFO - 2021-04-12 06:34:47 --> Config Class Initialized
INFO - 2021-04-12 06:34:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:47 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:47 --> URI Class Initialized
INFO - 2021-04-12 06:34:47 --> Config Class Initialized
INFO - 2021-04-12 06:34:47 --> Hooks Class Initialized
INFO - 2021-04-12 06:34:47 --> Router Class Initialized
DEBUG - 2021-04-12 06:34:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:47 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:47 --> Output Class Initialized
INFO - 2021-04-12 06:34:47 --> URI Class Initialized
INFO - 2021-04-12 06:34:47 --> Security Class Initialized
INFO - 2021-04-12 06:34:47 --> Router Class Initialized
INFO - 2021-04-12 06:34:47 --> Output Class Initialized
INFO - 2021-04-12 06:34:47 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-12 06:34:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:47 --> Input Class Initialized
INFO - 2021-04-12 06:34:47 --> Input Class Initialized
INFO - 2021-04-12 06:34:47 --> Language Class Initialized
INFO - 2021-04-12 06:34:47 --> Language Class Initialized
INFO - 2021-04-12 06:34:47 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:47 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:47 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:47 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:47 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:47 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:47 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:47 --> Model Class Initialized
INFO - 2021-04-12 06:34:47 --> Controller Class Initialized
INFO - 2021-04-12 06:34:47 --> Model Class Initialized
INFO - 2021-04-12 06:34:47 --> album-Request--> array (
  'user_id' => '31',
)
INFO - 2021-04-12 06:34:47 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:47 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 06:34:47 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:47 --> Total execution time: 0.0950
INFO - 2021-04-12 06:34:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:47 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:47 --> Model Class Initialized
INFO - 2021-04-12 06:34:47 --> Controller Class Initialized
INFO - 2021-04-12 06:34:47 --> Model Class Initialized
INFO - 2021-04-12 06:34:47 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:47 --> Total execution time: 0.1095
INFO - 2021-04-12 06:34:52 --> Config Class Initialized
INFO - 2021-04-12 06:34:52 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:34:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:34:52 --> Utf8 Class Initialized
INFO - 2021-04-12 06:34:52 --> URI Class Initialized
INFO - 2021-04-12 06:34:52 --> Router Class Initialized
INFO - 2021-04-12 06:34:52 --> Output Class Initialized
INFO - 2021-04-12 06:34:52 --> Security Class Initialized
DEBUG - 2021-04-12 06:34:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:34:52 --> Input Class Initialized
INFO - 2021-04-12 06:34:52 --> Language Class Initialized
INFO - 2021-04-12 06:34:52 --> Loader Class Initialized
DEBUG - 2021-04-12 06:34:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:34:52 --> Helper loaded: security_helper
INFO - 2021-04-12 06:34:52 --> Helper loaded: form_helper
INFO - 2021-04-12 06:34:52 --> Helper loaded: url_helper
INFO - 2021-04-12 06:34:52 --> Helper loaded: common_helper
INFO - 2021-04-12 06:34:52 --> Database Driver Class Initialized
INFO - 2021-04-12 06:34:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:34:52 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:34:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:34:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:34:52 --> Model Class Initialized
INFO - 2021-04-12 06:34:52 --> Controller Class Initialized
INFO - 2021-04-12 06:34:52 --> Model Class Initialized
INFO - 2021-04-12 06:34:52 --> Final output sent to browser
DEBUG - 2021-04-12 06:34:52 --> Total execution time: 0.0306
INFO - 2021-04-12 06:35:03 --> Config Class Initialized
INFO - 2021-04-12 06:35:03 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:35:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:03 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:03 --> URI Class Initialized
INFO - 2021-04-12 06:35:03 --> Router Class Initialized
INFO - 2021-04-12 06:35:03 --> Output Class Initialized
INFO - 2021-04-12 06:35:03 --> Security Class Initialized
DEBUG - 2021-04-12 06:35:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:03 --> Input Class Initialized
INFO - 2021-04-12 06:35:03 --> Language Class Initialized
INFO - 2021-04-12 06:35:03 --> Loader Class Initialized
DEBUG - 2021-04-12 06:35:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:03 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:03 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:03 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:03 --> Helper loaded: common_helper
INFO - 2021-04-12 06:35:03 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:03 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:35:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:35:03 --> Model Class Initialized
INFO - 2021-04-12 06:35:03 --> Controller Class Initialized
INFO - 2021-04-12 06:35:03 --> Model Class Initialized
INFO - 2021-04-12 06:35:03 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:03 --> Total execution time: 0.0494
INFO - 2021-04-12 06:35:09 --> Config Class Initialized
INFO - 2021-04-12 06:35:09 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:35:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:09 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:09 --> URI Class Initialized
INFO - 2021-04-12 06:35:09 --> Router Class Initialized
INFO - 2021-04-12 06:35:09 --> Output Class Initialized
INFO - 2021-04-12 06:35:09 --> Security Class Initialized
DEBUG - 2021-04-12 06:35:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:09 --> Input Class Initialized
INFO - 2021-04-12 06:35:09 --> Language Class Initialized
INFO - 2021-04-12 06:35:09 --> Loader Class Initialized
DEBUG - 2021-04-12 06:35:09 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:09 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:09 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:09 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:09 --> Helper loaded: common_helper
INFO - 2021-04-12 06:35:09 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:09 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:35:09 --> Model Class Initialized
INFO - 2021-04-12 06:35:09 --> Controller Class Initialized
INFO - 2021-04-12 06:35:09 --> Model Class Initialized
INFO - 2021-04-12 06:35:09 --> album-Request--> array (
  'user_id' => '31',
)
INFO - 2021-04-12 06:35:09 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 06:35:09 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:09 --> Total execution time: 0.0903
INFO - 2021-04-12 06:35:09 --> Config Class Initialized
INFO - 2021-04-12 06:35:09 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:35:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:09 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:09 --> URI Class Initialized
INFO - 2021-04-12 06:35:09 --> Config Class Initialized
INFO - 2021-04-12 06:35:09 --> Hooks Class Initialized
INFO - 2021-04-12 06:35:09 --> Router Class Initialized
DEBUG - 2021-04-12 06:35:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:09 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:09 --> Output Class Initialized
INFO - 2021-04-12 06:35:09 --> URI Class Initialized
INFO - 2021-04-12 06:35:09 --> Security Class Initialized
INFO - 2021-04-12 06:35:09 --> Router Class Initialized
DEBUG - 2021-04-12 06:35:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:09 --> Input Class Initialized
INFO - 2021-04-12 06:35:09 --> Language Class Initialized
INFO - 2021-04-12 06:35:09 --> Output Class Initialized
INFO - 2021-04-12 06:35:09 --> Security Class Initialized
DEBUG - 2021-04-12 06:35:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:09 --> Input Class Initialized
INFO - 2021-04-12 06:35:09 --> Loader Class Initialized
INFO - 2021-04-12 06:35:09 --> Language Class Initialized
DEBUG - 2021-04-12 06:35:09 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:09 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:09 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:09 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:09 --> Loader Class Initialized
INFO - 2021-04-12 06:35:09 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:35:09 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:09 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:09 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:09 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:09 --> Helper loaded: common_helper
INFO - 2021-04-12 06:35:09 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:09 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:09 --> Pagination Class Initialized
INFO - 2021-04-12 06:35:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:09 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 06:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:09 --> Model Class Initialized
INFO - 2021-04-12 06:35:09 --> Controller Class Initialized
INFO - 2021-04-12 06:35:09 --> Model Class Initialized
INFO - 2021-04-12 06:35:09 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:09 --> Total execution time: 0.0956
INFO - 2021-04-12 06:35:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:35:09 --> Model Class Initialized
INFO - 2021-04-12 06:35:09 --> Controller Class Initialized
INFO - 2021-04-12 06:35:09 --> Model Class Initialized
INFO - 2021-04-12 06:35:09 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:09 --> Total execution time: 0.0930
INFO - 2021-04-12 06:35:21 --> Config Class Initialized
INFO - 2021-04-12 06:35:21 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:35:21 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:21 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:21 --> URI Class Initialized
INFO - 2021-04-12 06:35:21 --> Router Class Initialized
INFO - 2021-04-12 06:35:21 --> Output Class Initialized
INFO - 2021-04-12 06:35:21 --> Security Class Initialized
DEBUG - 2021-04-12 06:35:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:21 --> Input Class Initialized
INFO - 2021-04-12 06:35:21 --> Language Class Initialized
INFO - 2021-04-12 06:35:21 --> Loader Class Initialized
DEBUG - 2021-04-12 06:35:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:21 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:21 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:21 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:21 --> Helper loaded: common_helper
INFO - 2021-04-12 06:35:21 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:21 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:35:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:35:21 --> Model Class Initialized
INFO - 2021-04-12 06:35:21 --> Controller Class Initialized
INFO - 2021-04-12 06:35:21 --> Model Class Initialized
INFO - 2021-04-12 06:35:21 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:21 --> Total execution time: 0.0323
INFO - 2021-04-12 06:35:30 --> Config Class Initialized
INFO - 2021-04-12 06:35:30 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:35:30 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:30 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:30 --> URI Class Initialized
INFO - 2021-04-12 06:35:30 --> Router Class Initialized
INFO - 2021-04-12 06:35:30 --> Output Class Initialized
INFO - 2021-04-12 06:35:30 --> Security Class Initialized
DEBUG - 2021-04-12 06:35:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:30 --> Input Class Initialized
INFO - 2021-04-12 06:35:30 --> Language Class Initialized
INFO - 2021-04-12 06:35:30 --> Loader Class Initialized
DEBUG - 2021-04-12 06:35:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:30 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:30 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:30 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:30 --> Helper loaded: common_helper
INFO - 2021-04-12 06:35:30 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:30 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:35:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:35:30 --> Model Class Initialized
INFO - 2021-04-12 06:35:30 --> Controller Class Initialized
INFO - 2021-04-12 06:35:30 --> Model Class Initialized
INFO - 2021-04-12 06:35:30 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:30 --> Total execution time: 0.0319
INFO - 2021-04-12 06:35:35 --> Config Class Initialized
INFO - 2021-04-12 06:35:35 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:35:35 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:35 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:35 --> URI Class Initialized
INFO - 2021-04-12 06:35:35 --> Router Class Initialized
INFO - 2021-04-12 06:35:35 --> Output Class Initialized
INFO - 2021-04-12 06:35:35 --> Security Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:35 --> Input Class Initialized
INFO - 2021-04-12 06:35:35 --> Language Class Initialized
INFO - 2021-04-12 06:35:35 --> Loader Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:35 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: common_helper
INFO - 2021-04-12 06:35:35 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:35 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:35:35 --> Model Class Initialized
INFO - 2021-04-12 06:35:35 --> Controller Class Initialized
INFO - 2021-04-12 06:35:35 --> Model Class Initialized
INFO - 2021-04-12 06:35:35 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:35 --> Total execution time: 0.0322
INFO - 2021-04-12 06:35:35 --> Config Class Initialized
INFO - 2021-04-12 06:35:35 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:35:35 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:35 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:35 --> URI Class Initialized
INFO - 2021-04-12 06:35:35 --> Router Class Initialized
INFO - 2021-04-12 06:35:35 --> Output Class Initialized
INFO - 2021-04-12 06:35:35 --> Security Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:35 --> Input Class Initialized
INFO - 2021-04-12 06:35:35 --> Language Class Initialized
INFO - 2021-04-12 06:35:35 --> Loader Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:35 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: common_helper
INFO - 2021-04-12 06:35:35 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:35 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:35:35 --> Model Class Initialized
INFO - 2021-04-12 06:35:35 --> Controller Class Initialized
INFO - 2021-04-12 06:35:35 --> Model Class Initialized
INFO - 2021-04-12 06:35:35 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:35 --> Total execution time: 0.0990
INFO - 2021-04-12 06:35:35 --> Config Class Initialized
INFO - 2021-04-12 06:35:35 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:35:35 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:35:35 --> Utf8 Class Initialized
INFO - 2021-04-12 06:35:35 --> URI Class Initialized
INFO - 2021-04-12 06:35:35 --> Router Class Initialized
INFO - 2021-04-12 06:35:35 --> Output Class Initialized
INFO - 2021-04-12 06:35:35 --> Security Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:35:35 --> Input Class Initialized
INFO - 2021-04-12 06:35:35 --> Language Class Initialized
INFO - 2021-04-12 06:35:35 --> Loader Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:35:35 --> Helper loaded: security_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: form_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: url_helper
INFO - 2021-04-12 06:35:35 --> Helper loaded: common_helper
INFO - 2021-04-12 06:35:35 --> Database Driver Class Initialized
INFO - 2021-04-12 06:35:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:35:35 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:35:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:35:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:35:35 --> Model Class Initialized
INFO - 2021-04-12 06:35:35 --> Controller Class Initialized
INFO - 2021-04-12 06:35:35 --> Model Class Initialized
INFO - 2021-04-12 06:35:35 --> Final output sent to browser
DEBUG - 2021-04-12 06:35:35 --> Total execution time: 0.0493
INFO - 2021-04-12 06:36:01 --> Config Class Initialized
INFO - 2021-04-12 06:36:01 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:01 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:01 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:01 --> URI Class Initialized
INFO - 2021-04-12 06:36:01 --> Router Class Initialized
INFO - 2021-04-12 06:36:01 --> Output Class Initialized
INFO - 2021-04-12 06:36:01 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:01 --> Input Class Initialized
INFO - 2021-04-12 06:36:01 --> Language Class Initialized
INFO - 2021-04-12 06:36:01 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:01 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:01 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:01 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:01 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:01 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:01 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:01 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:01 --> Model Class Initialized
INFO - 2021-04-12 06:36:01 --> Controller Class Initialized
INFO - 2021-04-12 06:36:01 --> Model Class Initialized
INFO - 2021-04-12 06:36:01 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:01 --> Total execution time: 0.0433
INFO - 2021-04-12 06:36:01 --> Config Class Initialized
INFO - 2021-04-12 06:36:01 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:01 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:01 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:01 --> URI Class Initialized
INFO - 2021-04-12 06:36:01 --> Router Class Initialized
INFO - 2021-04-12 06:36:01 --> Output Class Initialized
INFO - 2021-04-12 06:36:01 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:01 --> Input Class Initialized
INFO - 2021-04-12 06:36:01 --> Language Class Initialized
INFO - 2021-04-12 06:36:01 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:01 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:01 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:01 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:01 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:01 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:01 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:01 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:01 --> Model Class Initialized
INFO - 2021-04-12 06:36:01 --> Controller Class Initialized
INFO - 2021-04-12 06:36:01 --> Model Class Initialized
INFO - 2021-04-12 06:36:01 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 06:36:01 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|test|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 06:36:01 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  7 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  8 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-12 06:36:01 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:01 --> Total execution time: 0.0554
INFO - 2021-04-12 06:36:02 --> Config Class Initialized
INFO - 2021-04-12 06:36:02 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:02 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:02 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:02 --> URI Class Initialized
INFO - 2021-04-12 06:36:02 --> Router Class Initialized
INFO - 2021-04-12 06:36:02 --> Output Class Initialized
INFO - 2021-04-12 06:36:02 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:02 --> Input Class Initialized
INFO - 2021-04-12 06:36:02 --> Language Class Initialized
INFO - 2021-04-12 06:36:02 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:02 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:02 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:02 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:02 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:02 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:02 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:02 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:02 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:02 --> Model Class Initialized
INFO - 2021-04-12 06:36:02 --> Controller Class Initialized
INFO - 2021-04-12 06:36:02 --> Model Class Initialized
INFO - 2021-04-12 06:36:02 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:02 --> Total execution time: 0.0899
INFO - 2021-04-12 06:36:03 --> Config Class Initialized
INFO - 2021-04-12 06:36:03 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:03 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:03 --> URI Class Initialized
INFO - 2021-04-12 06:36:03 --> Router Class Initialized
INFO - 2021-04-12 06:36:03 --> Output Class Initialized
INFO - 2021-04-12 06:36:03 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:03 --> Input Class Initialized
INFO - 2021-04-12 06:36:03 --> Config Class Initialized
INFO - 2021-04-12 06:36:03 --> Hooks Class Initialized
INFO - 2021-04-12 06:36:03 --> Language Class Initialized
DEBUG - 2021-04-12 06:36:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:03 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:03 --> URI Class Initialized
INFO - 2021-04-12 06:36:03 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:03 --> Router Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:03 --> Output Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:03 --> Security Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:03 --> Config Class Initialized
INFO - 2021-04-12 06:36:03 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:03 --> Input Class Initialized
INFO - 2021-04-12 06:36:03 --> Language Class Initialized
DEBUG - 2021-04-12 06:36:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:03 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:03 --> URI Class Initialized
INFO - 2021-04-12 06:36:03 --> Router Class Initialized
INFO - 2021-04-12 06:36:03 --> Output Class Initialized
INFO - 2021-04-12 06:36:03 --> Security Class Initialized
INFO - 2021-04-12 06:36:03 --> Config Class Initialized
INFO - 2021-04-12 06:36:03 --> Hooks Class Initialized
INFO - 2021-04-12 06:36:03 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:03 --> Input Class Initialized
DEBUG - 2021-04-12 06:36:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:03 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:03 --> Language Class Initialized
INFO - 2021-04-12 06:36:03 --> URI Class Initialized
INFO - 2021-04-12 06:36:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:03 --> Pagination Class Initialized
INFO - 2021-04-12 06:36:03 --> Router Class Initialized
INFO - 2021-04-12 06:36:03 --> Loader Class Initialized
INFO - 2021-04-12 06:36:03 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:03 --> Output Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:03 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Controller Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Config Class Initialized
INFO - 2021-04-12 06:36:03 --> Hooks Class Initialized
INFO - 2021-04-12 06:36:03 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:03 --> Total execution time: 0.2042
INFO - 2021-04-12 06:36:03 --> Security Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:03 --> Input Class Initialized
INFO - 2021-04-12 06:36:03 --> Language Class Initialized
DEBUG - 2021-04-12 06:36:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:03 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:03 --> URI Class Initialized
INFO - 2021-04-12 06:36:03 --> Router Class Initialized
INFO - 2021-04-12 06:36:03 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:03 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:03 --> Output Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:03 --> Security Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:03 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:03 --> Input Class Initialized
INFO - 2021-04-12 06:36:03 --> Language Class Initialized
INFO - 2021-04-12 06:36:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:03 --> Pagination Class Initialized
INFO - 2021-04-12 06:36:03 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:03 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:03 --> Pagination Class Initialized
INFO - 2021-04-12 06:36:03 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:03 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:03 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Controller Class Initialized
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:03 --> Total execution time: 0.1160
DEBUG - 2021-04-12 06:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Controller Class Initialized
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:03 --> Total execution time: 0.2954
INFO - 2021-04-12 06:36:03 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Controller Class Initialized
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:03 --> Total execution time: 0.2149
INFO - 2021-04-12 06:36:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:03 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Controller Class Initialized
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:03 --> Total execution time: 0.1903
INFO - 2021-04-12 06:36:03 --> Config Class Initialized
INFO - 2021-04-12 06:36:03 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:03 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:03 --> URI Class Initialized
INFO - 2021-04-12 06:36:03 --> Router Class Initialized
INFO - 2021-04-12 06:36:03 --> Output Class Initialized
INFO - 2021-04-12 06:36:03 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:03 --> Input Class Initialized
INFO - 2021-04-12 06:36:03 --> Language Class Initialized
INFO - 2021-04-12 06:36:03 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:03 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:03 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:03 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Controller Class Initialized
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:03 --> Total execution time: 0.0519
INFO - 2021-04-12 06:36:03 --> Config Class Initialized
INFO - 2021-04-12 06:36:03 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:03 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:03 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:03 --> URI Class Initialized
INFO - 2021-04-12 06:36:03 --> Router Class Initialized
INFO - 2021-04-12 06:36:03 --> Output Class Initialized
INFO - 2021-04-12 06:36:03 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:03 --> Input Class Initialized
INFO - 2021-04-12 06:36:03 --> Language Class Initialized
INFO - 2021-04-12 06:36:03 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:03 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:03 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:03 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:03 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Controller Class Initialized
INFO - 2021-04-12 06:36:03 --> Model Class Initialized
INFO - 2021-04-12 06:36:03 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:03 --> Total execution time: 0.0312
INFO - 2021-04-12 06:36:04 --> Config Class Initialized
INFO - 2021-04-12 06:36:04 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:04 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:04 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:04 --> URI Class Initialized
INFO - 2021-04-12 06:36:04 --> Router Class Initialized
INFO - 2021-04-12 06:36:04 --> Output Class Initialized
INFO - 2021-04-12 06:36:04 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:04 --> Input Class Initialized
INFO - 2021-04-12 06:36:04 --> Language Class Initialized
INFO - 2021-04-12 06:36:04 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:04 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:04 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:04 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:04 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:04 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:04 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:04 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:04 --> Model Class Initialized
INFO - 2021-04-12 06:36:04 --> Controller Class Initialized
INFO - 2021-04-12 06:36:04 --> Model Class Initialized
INFO - 2021-04-12 06:36:04 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:04 --> Total execution time: 0.0294
INFO - 2021-04-12 06:36:36 --> Config Class Initialized
INFO - 2021-04-12 06:36:36 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:36 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:36 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:36 --> URI Class Initialized
INFO - 2021-04-12 06:36:36 --> Router Class Initialized
INFO - 2021-04-12 06:36:36 --> Output Class Initialized
INFO - 2021-04-12 06:36:36 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:36 --> Input Class Initialized
INFO - 2021-04-12 06:36:36 --> Language Class Initialized
INFO - 2021-04-12 06:36:36 --> Loader Class Initialized
DEBUG - 2021-04-12 06:36:36 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:36:36 --> Helper loaded: security_helper
INFO - 2021-04-12 06:36:36 --> Helper loaded: form_helper
INFO - 2021-04-12 06:36:36 --> Helper loaded: url_helper
INFO - 2021-04-12 06:36:36 --> Helper loaded: common_helper
INFO - 2021-04-12 06:36:36 --> Database Driver Class Initialized
INFO - 2021-04-12 06:36:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:36:36 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:36:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:36:36 --> Model Class Initialized
INFO - 2021-04-12 06:36:36 --> Controller Class Initialized
INFO - 2021-04-12 06:36:36 --> Model Class Initialized
INFO - 2021-04-12 06:36:36 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 06:36:36 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 06:36:36 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 06:36:36 --> Final output sent to browser
DEBUG - 2021-04-12 06:36:36 --> Total execution time: 0.0415
INFO - 2021-04-12 06:36:45 --> Config Class Initialized
INFO - 2021-04-12 06:36:45 --> Config Class Initialized
INFO - 2021-04-12 06:36:45 --> Hooks Class Initialized
INFO - 2021-04-12 06:36:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:36:45 --> UTF-8 Support Enabled
DEBUG - 2021-04-12 06:36:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:36:45 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:45 --> Utf8 Class Initialized
INFO - 2021-04-12 06:36:45 --> URI Class Initialized
INFO - 2021-04-12 06:36:45 --> URI Class Initialized
INFO - 2021-04-12 06:36:45 --> Router Class Initialized
INFO - 2021-04-12 06:36:45 --> Router Class Initialized
INFO - 2021-04-12 06:36:45 --> Output Class Initialized
INFO - 2021-04-12 06:36:45 --> Output Class Initialized
INFO - 2021-04-12 06:36:45 --> Security Class Initialized
INFO - 2021-04-12 06:36:45 --> Security Class Initialized
DEBUG - 2021-04-12 06:36:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-12 06:36:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:36:45 --> Input Class Initialized
INFO - 2021-04-12 06:36:45 --> Input Class Initialized
INFO - 2021-04-12 06:36:45 --> Language Class Initialized
INFO - 2021-04-12 06:36:45 --> Language Class Initialized
ERROR - 2021-04-12 06:36:45 --> 404 Page Not Found: 606ffb0321d5ajpg/index
ERROR - 2021-04-12 06:36:45 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 06:37:23 --> Config Class Initialized
INFO - 2021-04-12 06:37:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:23 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:23 --> URI Class Initialized
INFO - 2021-04-12 06:37:23 --> Router Class Initialized
INFO - 2021-04-12 06:37:23 --> Output Class Initialized
INFO - 2021-04-12 06:37:23 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:23 --> Input Class Initialized
INFO - 2021-04-12 06:37:23 --> Language Class Initialized
INFO - 2021-04-12 06:37:23 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:23 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:23 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:23 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:23 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:23 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:23 --> Model Class Initialized
INFO - 2021-04-12 06:37:23 --> Controller Class Initialized
INFO - 2021-04-12 06:37:23 --> Model Class Initialized
INFO - 2021-04-12 06:37:23 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:23 --> Total execution time: 0.0331
INFO - 2021-04-12 06:37:35 --> Config Class Initialized
INFO - 2021-04-12 06:37:35 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:35 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:35 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:35 --> URI Class Initialized
INFO - 2021-04-12 06:37:35 --> Router Class Initialized
INFO - 2021-04-12 06:37:35 --> Output Class Initialized
INFO - 2021-04-12 06:37:35 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:35 --> Input Class Initialized
INFO - 2021-04-12 06:37:35 --> Language Class Initialized
INFO - 2021-04-12 06:37:35 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:35 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:35 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:35 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:35 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:35 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:35 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:35 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:37:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:35 --> Model Class Initialized
INFO - 2021-04-12 06:37:35 --> Controller Class Initialized
INFO - 2021-04-12 06:37:35 --> Model Class Initialized
INFO - 2021-04-12 06:37:35 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:35 --> Total execution time: 0.0302
INFO - 2021-04-12 06:37:46 --> Config Class Initialized
INFO - 2021-04-12 06:37:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:46 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:46 --> URI Class Initialized
INFO - 2021-04-12 06:37:46 --> Router Class Initialized
INFO - 2021-04-12 06:37:46 --> Output Class Initialized
INFO - 2021-04-12 06:37:46 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:46 --> Input Class Initialized
INFO - 2021-04-12 06:37:46 --> Language Class Initialized
INFO - 2021-04-12 06:37:46 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:46 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:46 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:46 --> Model Class Initialized
INFO - 2021-04-12 06:37:46 --> Controller Class Initialized
INFO - 2021-04-12 06:37:46 --> Model Class Initialized
INFO - 2021-04-12 06:37:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:46 --> Total execution time: 0.0915
INFO - 2021-04-12 06:37:46 --> Config Class Initialized
INFO - 2021-04-12 06:37:46 --> Hooks Class Initialized
INFO - 2021-04-12 06:37:46 --> Config Class Initialized
INFO - 2021-04-12 06:37:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:46 --> Utf8 Class Initialized
DEBUG - 2021-04-12 06:37:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:46 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:46 --> URI Class Initialized
INFO - 2021-04-12 06:37:46 --> URI Class Initialized
INFO - 2021-04-12 06:37:46 --> Router Class Initialized
INFO - 2021-04-12 06:37:46 --> Router Class Initialized
INFO - 2021-04-12 06:37:46 --> Output Class Initialized
INFO - 2021-04-12 06:37:46 --> Output Class Initialized
INFO - 2021-04-12 06:37:46 --> Security Class Initialized
INFO - 2021-04-12 06:37:46 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:46 --> Input Class Initialized
INFO - 2021-04-12 06:37:46 --> Language Class Initialized
DEBUG - 2021-04-12 06:37:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:46 --> Input Class Initialized
INFO - 2021-04-12 06:37:46 --> Language Class Initialized
INFO - 2021-04-12 06:37:46 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:46 --> Loader Class Initialized
INFO - 2021-04-12 06:37:46 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:37:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:46 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:46 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:46 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:46 --> Pagination Class Initialized
INFO - 2021-04-12 06:37:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:46 --> Model Class Initialized
INFO - 2021-04-12 06:37:46 --> Controller Class Initialized
INFO - 2021-04-12 06:37:46 --> Model Class Initialized
INFO - 2021-04-12 06:37:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:46 --> Total execution time: 0.0883
DEBUG - 2021-04-12 06:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:46 --> Model Class Initialized
INFO - 2021-04-12 06:37:46 --> Controller Class Initialized
INFO - 2021-04-12 06:37:46 --> Model Class Initialized
INFO - 2021-04-12 06:37:46 --> PostList-Request--> array (
  'user_id' => '31',
  'hash_tag_id' => '1',
)
INFO - 2021-04-12 06:37:46 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    AND p.description like \'%test%\'
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 06:37:46 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
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
  4 => 
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
  5 => 
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
  6 => 
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
  7 => 
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
  8 => 
  array (
    'id' => '86',
    'user_id' => '32',
    'post_image' => 'images/606808af3a028.png',
    'post_description' => 'test',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-09 11:16:46',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
)
INFO - 2021-04-12 06:37:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:46 --> Total execution time: 0.0987
INFO - 2021-04-12 06:37:47 --> Config Class Initialized
INFO - 2021-04-12 06:37:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:47 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:47 --> URI Class Initialized
INFO - 2021-04-12 06:37:47 --> Router Class Initialized
INFO - 2021-04-12 06:37:47 --> Output Class Initialized
INFO - 2021-04-12 06:37:47 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:47 --> Input Class Initialized
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.0801
INFO - 2021-04-12 06:37:48 --> Config Class Initialized
INFO - 2021-04-12 06:37:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:48 --> Config Class Initialized
INFO - 2021-04-12 06:37:48 --> Hooks Class Initialized
INFO - 2021-04-12 06:37:48 --> URI Class Initialized
INFO - 2021-04-12 06:37:48 --> Router Class Initialized
DEBUG - 2021-04-12 06:37:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:48 --> Output Class Initialized
INFO - 2021-04-12 06:37:48 --> URI Class Initialized
INFO - 2021-04-12 06:37:48 --> Security Class Initialized
INFO - 2021-04-12 06:37:48 --> Router Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:48 --> Input Class Initialized
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
INFO - 2021-04-12 06:37:48 --> Config Class Initialized
INFO - 2021-04-12 06:37:48 --> Hooks Class Initialized
INFO - 2021-04-12 06:37:48 --> Config Class Initialized
INFO - 2021-04-12 06:37:48 --> Output Class Initialized
INFO - 2021-04-12 06:37:48 --> Hooks Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:37:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:48 --> Security Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:48 --> URI Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:48 --> Input Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
DEBUG - 2021-04-12 06:37:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:48 --> Router Class Initialized
INFO - 2021-04-12 06:37:48 --> URI Class Initialized
INFO - 2021-04-12 06:37:48 --> Router Class Initialized
INFO - 2021-04-12 06:37:48 --> Output Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
INFO - 2021-04-12 06:37:48 --> Output Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:48 --> Config Class Initialized
INFO - 2021-04-12 06:37:48 --> Hooks Class Initialized
INFO - 2021-04-12 06:37:48 --> Security Class Initialized
INFO - 2021-04-12 06:37:48 --> Security Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
DEBUG - 2021-04-12 06:37:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:48 --> Input Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:48 --> Input Class Initialized
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
DEBUG - 2021-04-12 06:37:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:48 --> URI Class Initialized
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:48 --> Router Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:48 --> Output Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.1127
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:48 --> Security Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:37:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:48 --> Input Class Initialized
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.2007
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.1959
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.1977
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.1237
INFO - 2021-04-12 06:37:48 --> Config Class Initialized
INFO - 2021-04-12 06:37:48 --> Hooks Class Initialized
INFO - 2021-04-12 06:37:48 --> Config Class Initialized
INFO - 2021-04-12 06:37:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:48 --> URI Class Initialized
INFO - 2021-04-12 06:37:48 --> Router Class Initialized
DEBUG - 2021-04-12 06:37:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:48 --> Output Class Initialized
INFO - 2021-04-12 06:37:48 --> URI Class Initialized
INFO - 2021-04-12 06:37:48 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:48 --> Input Class Initialized
INFO - 2021-04-12 06:37:48 --> Router Class Initialized
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
INFO - 2021-04-12 06:37:48 --> Output Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:48 --> Security Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
DEBUG - 2021-04-12 06:37:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:48 --> Input Class Initialized
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
INFO - 2021-04-12 06:37:48 --> Config Class Initialized
INFO - 2021-04-12 06:37:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
INFO - 2021-04-12 06:37:48 --> URI Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Router Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
INFO - 2021-04-12 06:37:48 --> Output Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
INFO - 2021-04-12 06:37:48 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.0958
DEBUG - 2021-04-12 06:37:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:48 --> Input Class Initialized
INFO - 2021-04-12 06:37:48 --> Language Class Initialized
INFO - 2021-04-12 06:37:48 --> Loader Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:37:48 --> Helper loaded: security_helper
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
INFO - 2021-04-12 06:37:48 --> Helper loaded: form_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: url_helper
INFO - 2021-04-12 06:37:48 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.1727
INFO - 2021-04-12 06:37:48 --> Database Driver Class Initialized
INFO - 2021-04-12 06:37:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:37:48 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:37:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:37:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Controller Class Initialized
INFO - 2021-04-12 06:37:48 --> Model Class Initialized
INFO - 2021-04-12 06:37:48 --> Final output sent to browser
DEBUG - 2021-04-12 06:37:48 --> Total execution time: 0.1077
INFO - 2021-04-12 06:37:51 --> Config Class Initialized
INFO - 2021-04-12 06:37:51 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:51 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:51 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:51 --> URI Class Initialized
INFO - 2021-04-12 06:37:51 --> Router Class Initialized
INFO - 2021-04-12 06:37:51 --> Output Class Initialized
INFO - 2021-04-12 06:37:51 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:51 --> Input Class Initialized
INFO - 2021-04-12 06:37:51 --> Language Class Initialized
ERROR - 2021-04-12 06:37:51 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 06:37:53 --> Config Class Initialized
INFO - 2021-04-12 06:37:53 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:37:53 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:37:53 --> Utf8 Class Initialized
INFO - 2021-04-12 06:37:53 --> URI Class Initialized
INFO - 2021-04-12 06:37:53 --> Router Class Initialized
INFO - 2021-04-12 06:37:53 --> Output Class Initialized
INFO - 2021-04-12 06:37:53 --> Security Class Initialized
DEBUG - 2021-04-12 06:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:37:53 --> Input Class Initialized
INFO - 2021-04-12 06:37:53 --> Language Class Initialized
ERROR - 2021-04-12 06:37:53 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 06:42:45 --> Config Class Initialized
INFO - 2021-04-12 06:42:45 --> Hooks Class Initialized
INFO - 2021-04-12 06:42:45 --> Config Class Initialized
INFO - 2021-04-12 06:42:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:45 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:45 --> URI Class Initialized
DEBUG - 2021-04-12 06:42:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:45 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:45 --> Router Class Initialized
INFO - 2021-04-12 06:42:45 --> URI Class Initialized
INFO - 2021-04-12 06:42:45 --> Router Class Initialized
INFO - 2021-04-12 06:42:45 --> Output Class Initialized
INFO - 2021-04-12 06:42:45 --> Config Class Initialized
INFO - 2021-04-12 06:42:45 --> Hooks Class Initialized
INFO - 2021-04-12 06:42:45 --> Output Class Initialized
INFO - 2021-04-12 06:42:45 --> Security Class Initialized
INFO - 2021-04-12 06:42:45 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:45 --> Input Class Initialized
DEBUG - 2021-04-12 06:42:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:45 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:45 --> Language Class Initialized
INFO - 2021-04-12 06:42:45 --> URI Class Initialized
DEBUG - 2021-04-12 06:42:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:45 --> Input Class Initialized
INFO - 2021-04-12 06:42:45 --> Language Class Initialized
INFO - 2021-04-12 06:42:45 --> Router Class Initialized
INFO - 2021-04-12 06:42:45 --> Loader Class Initialized
INFO - 2021-04-12 06:42:45 --> Output Class Initialized
INFO - 2021-04-12 06:42:45 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:45 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:42:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:45 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:45 --> Security Class Initialized
INFO - 2021-04-12 06:42:45 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:45 --> Helper loaded: form_helper
DEBUG - 2021-04-12 06:42:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:45 --> Input Class Initialized
INFO - 2021-04-12 06:42:45 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:45 --> Language Class Initialized
INFO - 2021-04-12 06:42:45 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:45 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:45 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:45 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:45 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:45 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:45 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:45 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:45 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:45 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:45 --> Pagination Class Initialized
INFO - 2021-04-12 06:42:45 --> Pagination Class Initialized
INFO - 2021-04-12 06:42:45 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:42:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 06:42:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:45 --> Model Class Initialized
INFO - 2021-04-12 06:42:45 --> Controller Class Initialized
INFO - 2021-04-12 06:42:45 --> Model Class Initialized
INFO - 2021-04-12 06:42:45 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 06:42:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:45 --> Pagination Class Initialized
INFO - 2021-04-12 06:42:45 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
DEBUG - 2021-04-12 06:42:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:45 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 06:42:45 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:45 --> Total execution time: 0.1149
INFO - 2021-04-12 06:42:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:45 --> Model Class Initialized
INFO - 2021-04-12 06:42:45 --> Controller Class Initialized
INFO - 2021-04-12 06:42:45 --> Model Class Initialized
INFO - 2021-04-12 06:42:45 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
ERROR - 2021-04-12 06:42:45 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 06:42:45 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 06:42:45 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 06:42:45 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:45 --> Total execution time: 0.1025
INFO - 2021-04-12 06:42:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:45 --> Model Class Initialized
INFO - 2021-04-12 06:42:45 --> Controller Class Initialized
INFO - 2021-04-12 06:42:45 --> Model Class Initialized
INFO - 2021-04-12 06:42:45 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:45 --> Total execution time: 0.1749
INFO - 2021-04-12 06:42:46 --> Config Class Initialized
INFO - 2021-04-12 06:42:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:46 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:46 --> URI Class Initialized
INFO - 2021-04-12 06:42:46 --> Router Class Initialized
INFO - 2021-04-12 06:42:46 --> Output Class Initialized
INFO - 2021-04-12 06:42:46 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:46 --> Input Class Initialized
INFO - 2021-04-12 06:42:46 --> Language Class Initialized
INFO - 2021-04-12 06:42:46 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:46 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:46 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Controller Class Initialized
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:46 --> Total execution time: 0.2006
INFO - 2021-04-12 06:42:46 --> Config Class Initialized
INFO - 2021-04-12 06:42:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:46 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:46 --> URI Class Initialized
INFO - 2021-04-12 06:42:46 --> Router Class Initialized
INFO - 2021-04-12 06:42:46 --> Output Class Initialized
INFO - 2021-04-12 06:42:46 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:46 --> Input Class Initialized
INFO - 2021-04-12 06:42:46 --> Language Class Initialized
INFO - 2021-04-12 06:42:46 --> Config Class Initialized
INFO - 2021-04-12 06:42:46 --> Hooks Class Initialized
INFO - 2021-04-12 06:42:46 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:46 --> Config Class Initialized
INFO - 2021-04-12 06:42:46 --> Hooks Class Initialized
INFO - 2021-04-12 06:42:46 --> Helper loaded: security_helper
DEBUG - 2021-04-12 06:42:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:46 --> Utf8 Class Initialized
DEBUG - 2021-04-12 06:42:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:46 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:46 --> URI Class Initialized
INFO - 2021-04-12 06:42:46 --> URI Class Initialized
INFO - 2021-04-12 06:42:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:46 --> Router Class Initialized
INFO - 2021-04-12 06:42:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:46 --> Router Class Initialized
INFO - 2021-04-12 06:42:46 --> Output Class Initialized
INFO - 2021-04-12 06:42:46 --> Security Class Initialized
INFO - 2021-04-12 06:42:46 --> Output Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:46 --> Input Class Initialized
INFO - 2021-04-12 06:42:46 --> Language Class Initialized
INFO - 2021-04-12 06:42:46 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:46 --> Input Class Initialized
INFO - 2021-04-12 06:42:46 --> Loader Class Initialized
INFO - 2021-04-12 06:42:46 --> Language Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:46 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:46 --> Loader Class Initialized
INFO - 2021-04-12 06:42:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:46 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:46 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Controller Class Initialized
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:46 --> Total execution time: 0.2004
INFO - 2021-04-12 06:42:46 --> Config Class Initialized
INFO - 2021-04-12 06:42:46 --> Hooks Class Initialized
INFO - 2021-04-12 06:42:46 --> Database Driver Class Initialized
DEBUG - 2021-04-12 06:42:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:46 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:46 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:46 --> URI Class Initialized
INFO - 2021-04-12 06:42:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:46 --> Pagination Class Initialized
INFO - 2021-04-12 06:42:46 --> Router Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:46 --> Pagination Class Initialized
INFO - 2021-04-12 06:42:46 --> Output Class Initialized
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Controller Class Initialized
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:46 --> Total execution time: 0.1986
INFO - 2021-04-12 06:42:46 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:46 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 06:42:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:46 --> Input Class Initialized
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Controller Class Initialized
INFO - 2021-04-12 06:42:46 --> Language Class Initialized
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:46 --> Total execution time: 0.1190
INFO - 2021-04-12 06:42:46 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:46 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:46 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Controller Class Initialized
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:46 --> Total execution time: 0.1165
INFO - 2021-04-12 06:42:46 --> Config Class Initialized
INFO - 2021-04-12 06:42:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:46 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:46 --> URI Class Initialized
INFO - 2021-04-12 06:42:46 --> Router Class Initialized
INFO - 2021-04-12 06:42:46 --> Output Class Initialized
INFO - 2021-04-12 06:42:46 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:46 --> Input Class Initialized
INFO - 2021-04-12 06:42:46 --> Language Class Initialized
INFO - 2021-04-12 06:42:46 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:46 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:46 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:46 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:42:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Controller Class Initialized
INFO - 2021-04-12 06:42:46 --> Model Class Initialized
INFO - 2021-04-12 06:42:46 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:46 --> Total execution time: 0.0848
INFO - 2021-04-12 06:42:47 --> Config Class Initialized
INFO - 2021-04-12 06:42:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:47 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:47 --> URI Class Initialized
INFO - 2021-04-12 06:42:47 --> Router Class Initialized
INFO - 2021-04-12 06:42:47 --> Output Class Initialized
INFO - 2021-04-12 06:42:47 --> Config Class Initialized
INFO - 2021-04-12 06:42:47 --> Security Class Initialized
INFO - 2021-04-12 06:42:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:47 --> Input Class Initialized
DEBUG - 2021-04-12 06:42:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:47 --> Language Class Initialized
INFO - 2021-04-12 06:42:47 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:47 --> URI Class Initialized
INFO - 2021-04-12 06:42:47 --> Router Class Initialized
INFO - 2021-04-12 06:42:47 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:47 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:47 --> Output Class Initialized
INFO - 2021-04-12 06:42:47 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:47 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:47 --> Security Class Initialized
INFO - 2021-04-12 06:42:47 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:42:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:47 --> Input Class Initialized
INFO - 2021-04-12 06:42:47 --> Language Class Initialized
INFO - 2021-04-12 06:42:47 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:47 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:47 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:47 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:47 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:47 --> Pagination Class Initialized
INFO - 2021-04-12 06:42:47 --> Helper loaded: common_helper
DEBUG - 2021-04-12 06:42:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:47 --> Model Class Initialized
INFO - 2021-04-12 06:42:47 --> Controller Class Initialized
INFO - 2021-04-12 06:42:47 --> Model Class Initialized
INFO - 2021-04-12 06:42:47 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:47 --> Total execution time: 0.0379
INFO - 2021-04-12 06:42:47 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:47 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:42:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:47 --> Model Class Initialized
INFO - 2021-04-12 06:42:47 --> Controller Class Initialized
INFO - 2021-04-12 06:42:47 --> Model Class Initialized
INFO - 2021-04-12 06:42:47 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:47 --> Total execution time: 0.1020
INFO - 2021-04-12 06:42:47 --> Config Class Initialized
INFO - 2021-04-12 06:42:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:47 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:47 --> URI Class Initialized
INFO - 2021-04-12 06:42:47 --> Router Class Initialized
INFO - 2021-04-12 06:42:47 --> Output Class Initialized
INFO - 2021-04-12 06:42:47 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:47 --> Input Class Initialized
INFO - 2021-04-12 06:42:47 --> Language Class Initialized
INFO - 2021-04-12 06:42:47 --> Loader Class Initialized
DEBUG - 2021-04-12 06:42:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 06:42:47 --> Helper loaded: security_helper
INFO - 2021-04-12 06:42:47 --> Helper loaded: form_helper
INFO - 2021-04-12 06:42:47 --> Helper loaded: url_helper
INFO - 2021-04-12 06:42:47 --> Helper loaded: common_helper
INFO - 2021-04-12 06:42:47 --> Database Driver Class Initialized
INFO - 2021-04-12 06:42:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 06:42:47 --> Pagination Class Initialized
DEBUG - 2021-04-12 06:42:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 06:42:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 06:42:47 --> Model Class Initialized
INFO - 2021-04-12 06:42:47 --> Controller Class Initialized
INFO - 2021-04-12 06:42:47 --> Model Class Initialized
INFO - 2021-04-12 06:42:47 --> Final output sent to browser
DEBUG - 2021-04-12 06:42:47 --> Total execution time: 0.0308
INFO - 2021-04-12 06:42:48 --> Config Class Initialized
INFO - 2021-04-12 06:42:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:48 --> URI Class Initialized
INFO - 2021-04-12 06:42:48 --> Router Class Initialized
INFO - 2021-04-12 06:42:48 --> Output Class Initialized
INFO - 2021-04-12 06:42:48 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:48 --> Input Class Initialized
INFO - 2021-04-12 06:42:48 --> Language Class Initialized
ERROR - 2021-04-12 06:42:48 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 06:42:48 --> Config Class Initialized
INFO - 2021-04-12 06:42:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 06:42:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 06:42:48 --> Utf8 Class Initialized
INFO - 2021-04-12 06:42:48 --> URI Class Initialized
INFO - 2021-04-12 06:42:48 --> Router Class Initialized
INFO - 2021-04-12 06:42:48 --> Output Class Initialized
INFO - 2021-04-12 06:42:48 --> Security Class Initialized
DEBUG - 2021-04-12 06:42:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 06:42:48 --> Input Class Initialized
INFO - 2021-04-12 06:42:48 --> Language Class Initialized
ERROR - 2021-04-12 06:42:48 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 07:11:41 --> Config Class Initialized
INFO - 2021-04-12 07:11:41 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:11:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:11:41 --> Utf8 Class Initialized
INFO - 2021-04-12 07:11:41 --> URI Class Initialized
INFO - 2021-04-12 07:11:41 --> Router Class Initialized
INFO - 2021-04-12 07:11:41 --> Output Class Initialized
INFO - 2021-04-12 07:11:41 --> Security Class Initialized
DEBUG - 2021-04-12 07:11:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:11:41 --> Input Class Initialized
INFO - 2021-04-12 07:11:41 --> Language Class Initialized
INFO - 2021-04-12 07:11:41 --> Loader Class Initialized
DEBUG - 2021-04-12 07:11:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:11:41 --> Helper loaded: security_helper
INFO - 2021-04-12 07:11:41 --> Helper loaded: form_helper
INFO - 2021-04-12 07:11:41 --> Helper loaded: url_helper
INFO - 2021-04-12 07:11:41 --> Helper loaded: common_helper
INFO - 2021-04-12 07:11:41 --> Database Driver Class Initialized
INFO - 2021-04-12 07:11:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:11:41 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:11:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:11:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:11:41 --> Model Class Initialized
INFO - 2021-04-12 07:11:41 --> Controller Class Initialized
INFO - 2021-04-12 07:11:41 --> Model Class Initialized
INFO - 2021-04-12 07:11:41 --> Final output sent to browser
DEBUG - 2021-04-12 07:11:41 --> Total execution time: 0.5953
INFO - 2021-04-12 07:11:45 --> Config Class Initialized
INFO - 2021-04-12 07:11:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:11:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:11:45 --> Utf8 Class Initialized
INFO - 2021-04-12 07:11:45 --> URI Class Initialized
INFO - 2021-04-12 07:11:45 --> Router Class Initialized
INFO - 2021-04-12 07:11:45 --> Output Class Initialized
INFO - 2021-04-12 07:11:45 --> Security Class Initialized
DEBUG - 2021-04-12 07:11:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:11:45 --> Input Class Initialized
INFO - 2021-04-12 07:11:45 --> Language Class Initialized
INFO - 2021-04-12 07:11:45 --> Loader Class Initialized
DEBUG - 2021-04-12 07:11:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:11:45 --> Helper loaded: security_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: form_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: url_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: common_helper
INFO - 2021-04-12 07:11:45 --> Database Driver Class Initialized
INFO - 2021-04-12 07:11:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:11:45 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:11:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:11:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:11:45 --> Model Class Initialized
INFO - 2021-04-12 07:11:45 --> Controller Class Initialized
INFO - 2021-04-12 07:11:45 --> Model Class Initialized
INFO - 2021-04-12 07:11:45 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '52',
)
INFO - 2021-04-12 07:11:45 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'52\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'52\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'52\' and f.type = \'creator\' and f.to_id IN (p.user_id) 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'52\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 07:11:45 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-12 07:11:45 --> Final output sent to browser
DEBUG - 2021-04-12 07:11:45 --> Total execution time: 0.0635
INFO - 2021-04-12 07:11:45 --> Config Class Initialized
INFO - 2021-04-12 07:11:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:11:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:11:45 --> Utf8 Class Initialized
INFO - 2021-04-12 07:11:45 --> URI Class Initialized
INFO - 2021-04-12 07:11:45 --> Router Class Initialized
INFO - 2021-04-12 07:11:45 --> Output Class Initialized
INFO - 2021-04-12 07:11:45 --> Security Class Initialized
DEBUG - 2021-04-12 07:11:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:11:45 --> Input Class Initialized
INFO - 2021-04-12 07:11:45 --> Language Class Initialized
INFO - 2021-04-12 07:11:45 --> Loader Class Initialized
DEBUG - 2021-04-12 07:11:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:11:45 --> Helper loaded: security_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: form_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: url_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: common_helper
INFO - 2021-04-12 07:11:45 --> Database Driver Class Initialized
INFO - 2021-04-12 07:11:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:11:45 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:11:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:11:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:11:45 --> Model Class Initialized
INFO - 2021-04-12 07:11:45 --> Controller Class Initialized
INFO - 2021-04-12 07:11:45 --> Model Class Initialized
INFO - 2021-04-12 07:11:45 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
ERROR - 2021-04-12 07:11:45 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 07:11:45 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 07:11:45 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 07:11:45 --> Final output sent to browser
DEBUG - 2021-04-12 07:11:45 --> Total execution time: 0.0738
INFO - 2021-04-12 07:11:45 --> Config Class Initialized
INFO - 2021-04-12 07:11:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:11:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:11:45 --> Utf8 Class Initialized
INFO - 2021-04-12 07:11:45 --> URI Class Initialized
INFO - 2021-04-12 07:11:45 --> Router Class Initialized
INFO - 2021-04-12 07:11:45 --> Output Class Initialized
INFO - 2021-04-12 07:11:45 --> Security Class Initialized
DEBUG - 2021-04-12 07:11:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:11:45 --> Input Class Initialized
INFO - 2021-04-12 07:11:45 --> Language Class Initialized
INFO - 2021-04-12 07:11:45 --> Loader Class Initialized
DEBUG - 2021-04-12 07:11:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:11:45 --> Helper loaded: security_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: form_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: url_helper
INFO - 2021-04-12 07:11:45 --> Helper loaded: common_helper
INFO - 2021-04-12 07:11:46 --> Database Driver Class Initialized
INFO - 2021-04-12 07:11:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:11:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:11:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:11:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:11:46 --> Model Class Initialized
INFO - 2021-04-12 07:11:46 --> Controller Class Initialized
INFO - 2021-04-12 07:11:46 --> Model Class Initialized
INFO - 2021-04-12 07:11:46 --> Final output sent to browser
DEBUG - 2021-04-12 07:11:46 --> Total execution time: 0.0472
INFO - 2021-04-12 07:12:20 --> Config Class Initialized
INFO - 2021-04-12 07:12:20 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:12:20 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:12:20 --> Utf8 Class Initialized
INFO - 2021-04-12 07:12:20 --> URI Class Initialized
INFO - 2021-04-12 07:12:20 --> Router Class Initialized
INFO - 2021-04-12 07:12:20 --> Output Class Initialized
INFO - 2021-04-12 07:12:20 --> Security Class Initialized
DEBUG - 2021-04-12 07:12:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:12:20 --> Input Class Initialized
INFO - 2021-04-12 07:12:20 --> Language Class Initialized
INFO - 2021-04-12 07:12:20 --> Loader Class Initialized
DEBUG - 2021-04-12 07:12:20 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:12:20 --> Helper loaded: security_helper
INFO - 2021-04-12 07:12:20 --> Helper loaded: form_helper
INFO - 2021-04-12 07:12:20 --> Helper loaded: url_helper
INFO - 2021-04-12 07:12:20 --> Helper loaded: common_helper
INFO - 2021-04-12 07:12:20 --> Database Driver Class Initialized
INFO - 2021-04-12 07:12:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:12:20 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:12:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:12:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:12:20 --> Model Class Initialized
INFO - 2021-04-12 07:12:20 --> Controller Class Initialized
INFO - 2021-04-12 07:12:20 --> Model Class Initialized
INFO - 2021-04-12 07:12:20 --> Config Class Initialized
INFO - 2021-04-12 07:12:20 --> Hooks Class Initialized
INFO - 2021-04-12 07:12:20 --> Final output sent to browser
DEBUG - 2021-04-12 07:12:20 --> Total execution time: 0.1031
DEBUG - 2021-04-12 07:12:20 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:12:20 --> Utf8 Class Initialized
INFO - 2021-04-12 07:12:20 --> URI Class Initialized
INFO - 2021-04-12 07:12:20 --> Router Class Initialized
INFO - 2021-04-12 07:12:20 --> Output Class Initialized
INFO - 2021-04-12 07:12:20 --> Config Class Initialized
INFO - 2021-04-12 07:12:20 --> Hooks Class Initialized
INFO - 2021-04-12 07:12:20 --> Security Class Initialized
DEBUG - 2021-04-12 07:12:20 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:12:20 --> Utf8 Class Initialized
DEBUG - 2021-04-12 07:12:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:12:20 --> Input Class Initialized
INFO - 2021-04-12 07:12:20 --> Language Class Initialized
INFO - 2021-04-12 07:12:20 --> URI Class Initialized
INFO - 2021-04-12 07:12:20 --> Router Class Initialized
INFO - 2021-04-12 07:12:20 --> Loader Class Initialized
DEBUG - 2021-04-12 07:12:20 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:12:20 --> Output Class Initialized
INFO - 2021-04-12 07:12:20 --> Helper loaded: security_helper
INFO - 2021-04-12 07:12:20 --> Security Class Initialized
INFO - 2021-04-12 07:12:20 --> Helper loaded: form_helper
DEBUG - 2021-04-12 07:12:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:12:20 --> Helper loaded: url_helper
INFO - 2021-04-12 07:12:20 --> Input Class Initialized
INFO - 2021-04-12 07:12:20 --> Helper loaded: common_helper
INFO - 2021-04-12 07:12:20 --> Language Class Initialized
INFO - 2021-04-12 07:12:20 --> Loader Class Initialized
DEBUG - 2021-04-12 07:12:20 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:12:20 --> Helper loaded: security_helper
INFO - 2021-04-12 07:12:20 --> Helper loaded: form_helper
INFO - 2021-04-12 07:12:20 --> Helper loaded: url_helper
INFO - 2021-04-12 07:12:20 --> Helper loaded: common_helper
INFO - 2021-04-12 07:12:20 --> Database Driver Class Initialized
INFO - 2021-04-12 07:12:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:12:20 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:12:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:12:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:12:20 --> Model Class Initialized
INFO - 2021-04-12 07:12:20 --> Controller Class Initialized
INFO - 2021-04-12 07:12:20 --> Model Class Initialized
INFO - 2021-04-12 07:12:20 --> Database Driver Class Initialized
INFO - 2021-04-12 07:12:20 --> Final output sent to browser
DEBUG - 2021-04-12 07:12:20 --> Total execution time: 0.0322
INFO - 2021-04-12 07:12:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:12:20 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:12:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:12:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:12:20 --> Model Class Initialized
INFO - 2021-04-12 07:12:20 --> Controller Class Initialized
INFO - 2021-04-12 07:12:20 --> Model Class Initialized
INFO - 2021-04-12 07:12:20 --> album-Request--> array (
  'user_id' => '52',
)
INFO - 2021-04-12 07:12:20 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 07:12:20 --> Final output sent to browser
DEBUG - 2021-04-12 07:12:20 --> Total execution time: 0.0938
INFO - 2021-04-12 07:12:30 --> Config Class Initialized
INFO - 2021-04-12 07:12:30 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:12:30 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:12:30 --> Utf8 Class Initialized
INFO - 2021-04-12 07:12:30 --> URI Class Initialized
INFO - 2021-04-12 07:12:30 --> Router Class Initialized
INFO - 2021-04-12 07:12:30 --> Output Class Initialized
INFO - 2021-04-12 07:12:30 --> Security Class Initialized
DEBUG - 2021-04-12 07:12:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:12:30 --> Input Class Initialized
INFO - 2021-04-12 07:12:30 --> Language Class Initialized
INFO - 2021-04-12 07:12:30 --> Loader Class Initialized
DEBUG - 2021-04-12 07:12:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:12:30 --> Helper loaded: security_helper
INFO - 2021-04-12 07:12:30 --> Helper loaded: form_helper
INFO - 2021-04-12 07:12:30 --> Helper loaded: url_helper
INFO - 2021-04-12 07:12:30 --> Helper loaded: common_helper
INFO - 2021-04-12 07:12:30 --> Database Driver Class Initialized
INFO - 2021-04-12 07:12:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:12:30 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:12:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:12:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:12:30 --> Model Class Initialized
INFO - 2021-04-12 07:12:30 --> Controller Class Initialized
INFO - 2021-04-12 07:12:30 --> Model Class Initialized
INFO - 2021-04-12 07:12:30 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '52',
)
INFO - 2021-04-12 07:12:30 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'52\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'52\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'52\' and f.type = \'creator\' and f.to_id IN (p.user_id) 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'52\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 07:12:30 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-12 07:12:30 --> Final output sent to browser
DEBUG - 2021-04-12 07:12:30 --> Total execution time: 0.0489
INFO - 2021-04-12 07:12:36 --> Config Class Initialized
INFO - 2021-04-12 07:12:36 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:12:36 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:12:36 --> Utf8 Class Initialized
INFO - 2021-04-12 07:12:36 --> URI Class Initialized
INFO - 2021-04-12 07:12:36 --> Router Class Initialized
INFO - 2021-04-12 07:12:36 --> Output Class Initialized
INFO - 2021-04-12 07:12:36 --> Security Class Initialized
DEBUG - 2021-04-12 07:12:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:12:36 --> Input Class Initialized
INFO - 2021-04-12 07:12:36 --> Language Class Initialized
INFO - 2021-04-12 07:12:36 --> Loader Class Initialized
DEBUG - 2021-04-12 07:12:36 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:12:36 --> Helper loaded: security_helper
INFO - 2021-04-12 07:12:36 --> Helper loaded: form_helper
INFO - 2021-04-12 07:12:36 --> Helper loaded: url_helper
INFO - 2021-04-12 07:12:36 --> Helper loaded: common_helper
INFO - 2021-04-12 07:12:36 --> Database Driver Class Initialized
INFO - 2021-04-12 07:12:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:12:36 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:12:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:12:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:12:36 --> Model Class Initialized
INFO - 2021-04-12 07:12:36 --> Controller Class Initialized
INFO - 2021-04-12 07:12:36 --> Model Class Initialized
INFO - 2021-04-12 07:12:36 --> Final output sent to browser
DEBUG - 2021-04-12 07:12:36 --> Total execution time: 0.1561
INFO - 2021-04-12 07:12:54 --> Config Class Initialized
INFO - 2021-04-12 07:12:54 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:12:54 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:12:54 --> Utf8 Class Initialized
INFO - 2021-04-12 07:12:54 --> URI Class Initialized
INFO - 2021-04-12 07:12:54 --> Router Class Initialized
INFO - 2021-04-12 07:12:54 --> Output Class Initialized
INFO - 2021-04-12 07:12:54 --> Security Class Initialized
DEBUG - 2021-04-12 07:12:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:12:54 --> Input Class Initialized
INFO - 2021-04-12 07:12:54 --> Language Class Initialized
INFO - 2021-04-12 07:12:54 --> Loader Class Initialized
DEBUG - 2021-04-12 07:12:54 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:12:54 --> Helper loaded: security_helper
INFO - 2021-04-12 07:12:54 --> Helper loaded: form_helper
INFO - 2021-04-12 07:12:54 --> Helper loaded: url_helper
INFO - 2021-04-12 07:12:54 --> Helper loaded: common_helper
INFO - 2021-04-12 07:12:54 --> Database Driver Class Initialized
INFO - 2021-04-12 07:12:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:12:54 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:12:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:12:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:12:54 --> Model Class Initialized
INFO - 2021-04-12 07:12:54 --> Controller Class Initialized
INFO - 2021-04-12 07:12:54 --> Model Class Initialized
INFO - 2021-04-12 07:12:54 --> Final output sent to browser
DEBUG - 2021-04-12 07:12:54 --> Total execution time: 0.0359
INFO - 2021-04-12 07:13:21 --> Config Class Initialized
INFO - 2021-04-12 07:13:21 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:13:21 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:13:21 --> Utf8 Class Initialized
INFO - 2021-04-12 07:13:21 --> URI Class Initialized
INFO - 2021-04-12 07:13:21 --> Router Class Initialized
INFO - 2021-04-12 07:13:21 --> Output Class Initialized
INFO - 2021-04-12 07:13:21 --> Security Class Initialized
DEBUG - 2021-04-12 07:13:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:13:21 --> Input Class Initialized
INFO - 2021-04-12 07:13:21 --> Language Class Initialized
INFO - 2021-04-12 07:13:21 --> Loader Class Initialized
DEBUG - 2021-04-12 07:13:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:13:21 --> Helper loaded: security_helper
INFO - 2021-04-12 07:13:21 --> Helper loaded: form_helper
INFO - 2021-04-12 07:13:21 --> Helper loaded: url_helper
INFO - 2021-04-12 07:13:21 --> Helper loaded: common_helper
INFO - 2021-04-12 07:13:21 --> Database Driver Class Initialized
INFO - 2021-04-12 07:13:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:13:21 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:13:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:13:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:13:21 --> Model Class Initialized
INFO - 2021-04-12 07:13:21 --> Controller Class Initialized
INFO - 2021-04-12 07:13:21 --> Model Class Initialized
INFO - 2021-04-12 07:13:21 --> Final output sent to browser
DEBUG - 2021-04-12 07:13:21 --> Total execution time: 0.0761
INFO - 2021-04-12 07:13:21 --> Config Class Initialized
INFO - 2021-04-12 07:13:21 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:13:21 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:13:21 --> Utf8 Class Initialized
INFO - 2021-04-12 07:13:21 --> URI Class Initialized
INFO - 2021-04-12 07:13:21 --> Router Class Initialized
INFO - 2021-04-12 07:13:21 --> Output Class Initialized
INFO - 2021-04-12 07:13:21 --> Security Class Initialized
DEBUG - 2021-04-12 07:13:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:13:21 --> Input Class Initialized
INFO - 2021-04-12 07:13:21 --> Language Class Initialized
INFO - 2021-04-12 07:13:21 --> Loader Class Initialized
DEBUG - 2021-04-12 07:13:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:13:21 --> Helper loaded: security_helper
INFO - 2021-04-12 07:13:21 --> Config Class Initialized
INFO - 2021-04-12 07:13:21 --> Hooks Class Initialized
INFO - 2021-04-12 07:13:21 --> Helper loaded: form_helper
INFO - 2021-04-12 07:13:21 --> Helper loaded: url_helper
INFO - 2021-04-12 07:13:21 --> Helper loaded: common_helper
DEBUG - 2021-04-12 07:13:21 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:13:21 --> Utf8 Class Initialized
INFO - 2021-04-12 07:13:21 --> URI Class Initialized
INFO - 2021-04-12 07:13:21 --> Router Class Initialized
INFO - 2021-04-12 07:13:21 --> Output Class Initialized
INFO - 2021-04-12 07:13:21 --> Security Class Initialized
DEBUG - 2021-04-12 07:13:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:13:21 --> Input Class Initialized
INFO - 2021-04-12 07:13:21 --> Database Driver Class Initialized
INFO - 2021-04-12 07:13:21 --> Language Class Initialized
INFO - 2021-04-12 07:13:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:13:21 --> Pagination Class Initialized
INFO - 2021-04-12 07:13:21 --> Loader Class Initialized
DEBUG - 2021-04-12 07:13:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:13:21 --> Helper loaded: security_helper
DEBUG - 2021-04-12 07:13:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:13:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:13:21 --> Helper loaded: form_helper
INFO - 2021-04-12 07:13:21 --> Model Class Initialized
INFO - 2021-04-12 07:13:21 --> Controller Class Initialized
INFO - 2021-04-12 07:13:21 --> Model Class Initialized
INFO - 2021-04-12 07:13:21 --> album-Request--> array (
  'user_id' => '52',
)
INFO - 2021-04-12 07:13:21 --> Helper loaded: url_helper
INFO - 2021-04-12 07:13:21 --> Helper loaded: common_helper
INFO - 2021-04-12 07:13:21 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 07:13:21 --> Final output sent to browser
DEBUG - 2021-04-12 07:13:21 --> Total execution time: 0.0310
INFO - 2021-04-12 07:13:21 --> Database Driver Class Initialized
INFO - 2021-04-12 07:13:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:13:21 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:13:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:13:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:13:21 --> Model Class Initialized
INFO - 2021-04-12 07:13:21 --> Controller Class Initialized
INFO - 2021-04-12 07:13:21 --> Model Class Initialized
INFO - 2021-04-12 07:13:21 --> Final output sent to browser
DEBUG - 2021-04-12 07:13:21 --> Total execution time: 0.0844
INFO - 2021-04-12 07:13:34 --> Config Class Initialized
INFO - 2021-04-12 07:13:34 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:13:34 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:13:34 --> Utf8 Class Initialized
INFO - 2021-04-12 07:13:34 --> URI Class Initialized
INFO - 2021-04-12 07:13:34 --> Router Class Initialized
INFO - 2021-04-12 07:13:34 --> Output Class Initialized
INFO - 2021-04-12 07:13:34 --> Security Class Initialized
DEBUG - 2021-04-12 07:13:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:13:34 --> Input Class Initialized
INFO - 2021-04-12 07:13:34 --> Language Class Initialized
INFO - 2021-04-12 07:13:34 --> Loader Class Initialized
DEBUG - 2021-04-12 07:13:34 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:13:34 --> Helper loaded: security_helper
INFO - 2021-04-12 07:13:34 --> Helper loaded: form_helper
INFO - 2021-04-12 07:13:34 --> Helper loaded: url_helper
INFO - 2021-04-12 07:13:34 --> Helper loaded: common_helper
INFO - 2021-04-12 07:13:34 --> Database Driver Class Initialized
INFO - 2021-04-12 07:13:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:13:34 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:13:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:13:34 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:13:34 --> Model Class Initialized
INFO - 2021-04-12 07:13:34 --> Controller Class Initialized
INFO - 2021-04-12 07:13:34 --> Model Class Initialized
INFO - 2021-04-12 07:13:34 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '52',
)
INFO - 2021-04-12 07:13:34 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'52\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'52\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'52\' and f.type = \'creator\' and f.to_id IN (p.user_id) 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'52\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 07:13:34 --> PostList-Respos--> array (
  'status' => 0,
  'msg' => 'success',
)
INFO - 2021-04-12 07:13:34 --> Final output sent to browser
DEBUG - 2021-04-12 07:13:34 --> Total execution time: 0.0340
INFO - 2021-04-12 07:13:40 --> Config Class Initialized
INFO - 2021-04-12 07:13:40 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:13:40 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:13:40 --> Utf8 Class Initialized
INFO - 2021-04-12 07:13:40 --> URI Class Initialized
INFO - 2021-04-12 07:13:40 --> Router Class Initialized
INFO - 2021-04-12 07:13:40 --> Output Class Initialized
INFO - 2021-04-12 07:13:40 --> Security Class Initialized
DEBUG - 2021-04-12 07:13:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:13:40 --> Input Class Initialized
INFO - 2021-04-12 07:13:40 --> Language Class Initialized
INFO - 2021-04-12 07:13:40 --> Loader Class Initialized
DEBUG - 2021-04-12 07:13:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:13:40 --> Helper loaded: security_helper
INFO - 2021-04-12 07:13:40 --> Helper loaded: form_helper
INFO - 2021-04-12 07:13:40 --> Helper loaded: url_helper
INFO - 2021-04-12 07:13:40 --> Helper loaded: common_helper
INFO - 2021-04-12 07:13:40 --> Database Driver Class Initialized
INFO - 2021-04-12 07:13:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:13:40 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:13:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:13:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:13:40 --> Model Class Initialized
INFO - 2021-04-12 07:13:40 --> Controller Class Initialized
INFO - 2021-04-12 07:13:40 --> Model Class Initialized
INFO - 2021-04-12 07:13:40 --> Final output sent to browser
DEBUG - 2021-04-12 07:13:40 --> Total execution time: 0.0415
INFO - 2021-04-12 07:13:46 --> Config Class Initialized
INFO - 2021-04-12 07:13:46 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:13:46 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:13:46 --> Utf8 Class Initialized
INFO - 2021-04-12 07:13:46 --> URI Class Initialized
INFO - 2021-04-12 07:13:46 --> Router Class Initialized
INFO - 2021-04-12 07:13:46 --> Output Class Initialized
INFO - 2021-04-12 07:13:46 --> Security Class Initialized
DEBUG - 2021-04-12 07:13:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:13:46 --> Input Class Initialized
INFO - 2021-04-12 07:13:46 --> Language Class Initialized
INFO - 2021-04-12 07:13:46 --> Loader Class Initialized
DEBUG - 2021-04-12 07:13:46 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:13:46 --> Helper loaded: security_helper
INFO - 2021-04-12 07:13:46 --> Helper loaded: form_helper
INFO - 2021-04-12 07:13:46 --> Helper loaded: url_helper
INFO - 2021-04-12 07:13:46 --> Helper loaded: common_helper
INFO - 2021-04-12 07:13:46 --> Database Driver Class Initialized
INFO - 2021-04-12 07:13:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:13:46 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:13:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:13:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:13:46 --> Model Class Initialized
INFO - 2021-04-12 07:13:46 --> Controller Class Initialized
INFO - 2021-04-12 07:13:46 --> Model Class Initialized
INFO - 2021-04-12 07:13:46 --> Final output sent to browser
DEBUG - 2021-04-12 07:13:46 --> Total execution time: 0.0309
INFO - 2021-04-12 07:14:10 --> Config Class Initialized
INFO - 2021-04-12 07:14:10 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:14:10 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:14:10 --> Utf8 Class Initialized
INFO - 2021-04-12 07:14:10 --> URI Class Initialized
INFO - 2021-04-12 07:14:10 --> Router Class Initialized
INFO - 2021-04-12 07:14:10 --> Output Class Initialized
INFO - 2021-04-12 07:14:10 --> Security Class Initialized
DEBUG - 2021-04-12 07:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:14:10 --> Input Class Initialized
INFO - 2021-04-12 07:14:10 --> Language Class Initialized
INFO - 2021-04-12 07:14:10 --> Loader Class Initialized
DEBUG - 2021-04-12 07:14:10 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:14:10 --> Helper loaded: security_helper
INFO - 2021-04-12 07:14:10 --> Helper loaded: form_helper
INFO - 2021-04-12 07:14:10 --> Helper loaded: url_helper
INFO - 2021-04-12 07:14:10 --> Helper loaded: common_helper
INFO - 2021-04-12 07:14:10 --> Database Driver Class Initialized
INFO - 2021-04-12 07:14:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:14:10 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:14:10 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:14:10 --> Model Class Initialized
INFO - 2021-04-12 07:14:10 --> Controller Class Initialized
INFO - 2021-04-12 07:14:10 --> Model Class Initialized
INFO - 2021-04-12 07:14:10 --> Final output sent to browser
DEBUG - 2021-04-12 07:14:10 --> Total execution time: 0.0362
INFO - 2021-04-12 07:14:48 --> Config Class Initialized
INFO - 2021-04-12 07:14:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:14:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:14:48 --> Utf8 Class Initialized
INFO - 2021-04-12 07:14:48 --> URI Class Initialized
INFO - 2021-04-12 07:14:48 --> Router Class Initialized
INFO - 2021-04-12 07:14:48 --> Output Class Initialized
INFO - 2021-04-12 07:14:48 --> Security Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:14:48 --> Input Class Initialized
INFO - 2021-04-12 07:14:48 --> Language Class Initialized
INFO - 2021-04-12 07:14:48 --> Loader Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:14:48 --> Helper loaded: security_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: form_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: url_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: common_helper
INFO - 2021-04-12 07:14:48 --> Database Driver Class Initialized
INFO - 2021-04-12 07:14:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:14:48 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:14:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:14:48 --> Model Class Initialized
INFO - 2021-04-12 07:14:48 --> Controller Class Initialized
INFO - 2021-04-12 07:14:48 --> Model Class Initialized
INFO - 2021-04-12 07:14:48 --> Final output sent to browser
DEBUG - 2021-04-12 07:14:48 --> Total execution time: 0.0416
INFO - 2021-04-12 07:14:48 --> Config Class Initialized
INFO - 2021-04-12 07:14:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:14:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:14:48 --> Utf8 Class Initialized
INFO - 2021-04-12 07:14:48 --> URI Class Initialized
INFO - 2021-04-12 07:14:48 --> Router Class Initialized
INFO - 2021-04-12 07:14:48 --> Output Class Initialized
INFO - 2021-04-12 07:14:48 --> Security Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:14:48 --> Input Class Initialized
INFO - 2021-04-12 07:14:48 --> Language Class Initialized
INFO - 2021-04-12 07:14:48 --> Loader Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:14:48 --> Helper loaded: security_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: form_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: url_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: common_helper
INFO - 2021-04-12 07:14:48 --> Database Driver Class Initialized
INFO - 2021-04-12 07:14:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:14:48 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:14:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:14:48 --> Model Class Initialized
INFO - 2021-04-12 07:14:48 --> Controller Class Initialized
INFO - 2021-04-12 07:14:48 --> Model Class Initialized
INFO - 2021-04-12 07:14:48 --> Final output sent to browser
DEBUG - 2021-04-12 07:14:48 --> Total execution time: 0.0418
INFO - 2021-04-12 07:14:48 --> Config Class Initialized
INFO - 2021-04-12 07:14:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:14:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:14:48 --> Utf8 Class Initialized
INFO - 2021-04-12 07:14:48 --> URI Class Initialized
INFO - 2021-04-12 07:14:48 --> Router Class Initialized
INFO - 2021-04-12 07:14:48 --> Output Class Initialized
INFO - 2021-04-12 07:14:48 --> Security Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:14:48 --> Input Class Initialized
INFO - 2021-04-12 07:14:48 --> Language Class Initialized
INFO - 2021-04-12 07:14:48 --> Loader Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:14:48 --> Helper loaded: security_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: form_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: url_helper
INFO - 2021-04-12 07:14:48 --> Helper loaded: common_helper
INFO - 2021-04-12 07:14:48 --> Database Driver Class Initialized
INFO - 2021-04-12 07:14:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:14:48 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:14:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:14:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:14:48 --> Model Class Initialized
INFO - 2021-04-12 07:14:48 --> Controller Class Initialized
INFO - 2021-04-12 07:14:48 --> Model Class Initialized
INFO - 2021-04-12 07:14:48 --> Final output sent to browser
DEBUG - 2021-04-12 07:14:48 --> Total execution time: 0.0305
INFO - 2021-04-12 07:14:50 --> Config Class Initialized
INFO - 2021-04-12 07:14:50 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:14:50 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:14:50 --> Utf8 Class Initialized
INFO - 2021-04-12 07:14:50 --> URI Class Initialized
INFO - 2021-04-12 07:14:50 --> Router Class Initialized
INFO - 2021-04-12 07:14:50 --> Output Class Initialized
INFO - 2021-04-12 07:14:50 --> Security Class Initialized
DEBUG - 2021-04-12 07:14:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:14:50 --> Input Class Initialized
INFO - 2021-04-12 07:14:50 --> Language Class Initialized
INFO - 2021-04-12 07:14:50 --> Loader Class Initialized
DEBUG - 2021-04-12 07:14:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:14:50 --> Helper loaded: security_helper
INFO - 2021-04-12 07:14:50 --> Helper loaded: form_helper
INFO - 2021-04-12 07:14:50 --> Helper loaded: url_helper
INFO - 2021-04-12 07:14:50 --> Helper loaded: common_helper
INFO - 2021-04-12 07:14:50 --> Database Driver Class Initialized
INFO - 2021-04-12 07:14:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:14:50 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:14:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:14:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:14:50 --> Model Class Initialized
INFO - 2021-04-12 07:14:50 --> Controller Class Initialized
INFO - 2021-04-12 07:14:50 --> Model Class Initialized
INFO - 2021-04-12 07:14:50 --> Final output sent to browser
DEBUG - 2021-04-12 07:14:50 --> Total execution time: 0.0341
INFO - 2021-04-12 07:14:50 --> Config Class Initialized
INFO - 2021-04-12 07:14:50 --> Hooks Class Initialized
DEBUG - 2021-04-12 07:14:50 --> UTF-8 Support Enabled
INFO - 2021-04-12 07:14:50 --> Utf8 Class Initialized
INFO - 2021-04-12 07:14:50 --> URI Class Initialized
INFO - 2021-04-12 07:14:50 --> Router Class Initialized
INFO - 2021-04-12 07:14:50 --> Output Class Initialized
INFO - 2021-04-12 07:14:50 --> Security Class Initialized
DEBUG - 2021-04-12 07:14:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 07:14:50 --> Input Class Initialized
INFO - 2021-04-12 07:14:50 --> Language Class Initialized
INFO - 2021-04-12 07:14:50 --> Loader Class Initialized
DEBUG - 2021-04-12 07:14:50 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 07:14:50 --> Helper loaded: security_helper
INFO - 2021-04-12 07:14:50 --> Helper loaded: form_helper
INFO - 2021-04-12 07:14:50 --> Helper loaded: url_helper
INFO - 2021-04-12 07:14:50 --> Helper loaded: common_helper
INFO - 2021-04-12 07:14:50 --> Database Driver Class Initialized
INFO - 2021-04-12 07:14:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 07:14:50 --> Pagination Class Initialized
DEBUG - 2021-04-12 07:14:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 07:14:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 07:14:50 --> Model Class Initialized
INFO - 2021-04-12 07:14:50 --> Controller Class Initialized
INFO - 2021-04-12 07:14:50 --> Model Class Initialized
INFO - 2021-04-12 07:14:50 --> Final output sent to browser
DEBUG - 2021-04-12 07:14:50 --> Total execution time: 0.0308
INFO - 2021-04-12 12:11:05 --> Config Class Initialized
INFO - 2021-04-12 12:11:05 --> Hooks Class Initialized
INFO - 2021-04-12 12:11:05 --> Config Class Initialized
INFO - 2021-04-12 12:11:05 --> Config Class Initialized
INFO - 2021-04-12 12:11:05 --> Hooks Class Initialized
INFO - 2021-04-12 12:11:05 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:05 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:05 --> Utf8 Class Initialized
DEBUG - 2021-04-12 12:11:05 --> UTF-8 Support Enabled
DEBUG - 2021-04-12 12:11:05 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:05 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:05 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:05 --> URI Class Initialized
INFO - 2021-04-12 12:11:05 --> URI Class Initialized
INFO - 2021-04-12 12:11:05 --> URI Class Initialized
INFO - 2021-04-12 12:11:05 --> Router Class Initialized
INFO - 2021-04-12 12:11:05 --> Router Class Initialized
INFO - 2021-04-12 12:11:05 --> Router Class Initialized
INFO - 2021-04-12 12:11:05 --> Output Class Initialized
INFO - 2021-04-12 12:11:05 --> Output Class Initialized
INFO - 2021-04-12 12:11:05 --> Output Class Initialized
INFO - 2021-04-12 12:11:06 --> Security Class Initialized
INFO - 2021-04-12 12:11:06 --> Security Class Initialized
INFO - 2021-04-12 12:11:06 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:06 --> Input Class Initialized
DEBUG - 2021-04-12 12:11:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-12 12:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:06 --> Input Class Initialized
INFO - 2021-04-12 12:11:06 --> Input Class Initialized
INFO - 2021-04-12 12:11:06 --> Language Class Initialized
INFO - 2021-04-12 12:11:06 --> Language Class Initialized
INFO - 2021-04-12 12:11:06 --> Language Class Initialized
INFO - 2021-04-12 12:11:06 --> Loader Class Initialized
INFO - 2021-04-12 12:11:06 --> Loader Class Initialized
INFO - 2021-04-12 12:11:06 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:06 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 12:11:06 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 12:11:06 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:06 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:06 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:06 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:06 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:06 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:06 --> Pagination Class Initialized
INFO - 2021-04-12 12:11:06 --> Pagination Class Initialized
INFO - 2021-04-12 12:11:06 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 12:11:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 12:11:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:06 --> Model Class Initialized
INFO - 2021-04-12 12:11:06 --> Model Class Initialized
INFO - 2021-04-12 12:11:06 --> Controller Class Initialized
INFO - 2021-04-12 12:11:06 --> Controller Class Initialized
INFO - 2021-04-12 12:11:06 --> Model Class Initialized
INFO - 2021-04-12 12:11:06 --> Controller Class Initialized
INFO - 2021-04-12 12:11:06 --> Model Class Initialized
INFO - 2021-04-12 12:11:06 --> Model Class Initialized
INFO - 2021-04-12 12:11:06 --> Model Class Initialized
INFO - 2021-04-12 12:11:06 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 12:11:06 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
INFO - 2021-04-12 12:11:06 --> Final output sent to browser
INFO - 2021-04-12 12:11:06 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
DEBUG - 2021-04-12 12:11:06 --> Total execution time: 0.5793
ERROR - 2021-04-12 12:11:06 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 12:11:06 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 12:11:06 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 12:11:06 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:06 --> Total execution time: 0.5994
INFO - 2021-04-12 12:11:06 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 12:11:06 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:06 --> Total execution time: 0.6020
INFO - 2021-04-12 12:11:07 --> Config Class Initialized
INFO - 2021-04-12 12:11:07 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:07 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:07 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:07 --> URI Class Initialized
INFO - 2021-04-12 12:11:07 --> Router Class Initialized
INFO - 2021-04-12 12:11:07 --> Output Class Initialized
INFO - 2021-04-12 12:11:07 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:07 --> Input Class Initialized
INFO - 2021-04-12 12:11:07 --> Language Class Initialized
INFO - 2021-04-12 12:11:07 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:07 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:07 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:07 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:07 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:07 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:07 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:07 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:07 --> Model Class Initialized
INFO - 2021-04-12 12:11:07 --> Controller Class Initialized
INFO - 2021-04-12 12:11:07 --> Model Class Initialized
INFO - 2021-04-12 12:11:07 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:07 --> Total execution time: 0.0288
INFO - 2021-04-12 12:11:07 --> Config Class Initialized
INFO - 2021-04-12 12:11:07 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:07 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:07 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:07 --> URI Class Initialized
INFO - 2021-04-12 12:11:07 --> Router Class Initialized
INFO - 2021-04-12 12:11:07 --> Output Class Initialized
INFO - 2021-04-12 12:11:07 --> Config Class Initialized
INFO - 2021-04-12 12:11:07 --> Hooks Class Initialized
INFO - 2021-04-12 12:11:07 --> Config Class Initialized
INFO - 2021-04-12 12:11:07 --> Security Class Initialized
INFO - 2021-04-12 12:11:07 --> Hooks Class Initialized
INFO - 2021-04-12 12:11:07 --> Config Class Initialized
INFO - 2021-04-12 12:11:07 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:07 --> Input Class Initialized
DEBUG - 2021-04-12 12:11:07 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:07 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:07 --> Language Class Initialized
DEBUG - 2021-04-12 12:11:07 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:07 --> Utf8 Class Initialized
DEBUG - 2021-04-12 12:11:07 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:07 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:07 --> URI Class Initialized
INFO - 2021-04-12 12:11:07 --> URI Class Initialized
INFO - 2021-04-12 12:11:07 --> URI Class Initialized
INFO - 2021-04-12 12:11:07 --> Router Class Initialized
INFO - 2021-04-12 12:11:07 --> Router Class Initialized
INFO - 2021-04-12 12:11:07 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:07 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:07 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:07 --> Router Class Initialized
INFO - 2021-04-12 12:11:07 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:07 --> Output Class Initialized
INFO - 2021-04-12 12:11:07 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:07 --> Output Class Initialized
INFO - 2021-04-12 12:11:07 --> Security Class Initialized
INFO - 2021-04-12 12:11:07 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:07 --> Input Class Initialized
INFO - 2021-04-12 12:11:07 --> Language Class Initialized
INFO - 2021-04-12 12:11:08 --> Output Class Initialized
INFO - 2021-04-12 12:11:08 --> Helper loaded: common_helper
DEBUG - 2021-04-12 12:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:08 --> Input Class Initialized
INFO - 2021-04-12 12:11:08 --> Security Class Initialized
INFO - 2021-04-12 12:11:08 --> Language Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:08 --> Input Class Initialized
INFO - 2021-04-12 12:11:08 --> Loader Class Initialized
INFO - 2021-04-12 12:11:08 --> Language Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:08 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:08 --> Loader Class Initialized
INFO - 2021-04-12 12:11:08 --> Loader Class Initialized
INFO - 2021-04-12 12:11:08 --> Helper loaded: form_helper
DEBUG - 2021-04-12 12:11:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 12:11:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:08 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:08 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:08 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:08 --> Pagination Class Initialized
INFO - 2021-04-12 12:11:08 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: common_helper
DEBUG - 2021-04-12 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Controller Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:08 --> Total execution time: 0.1108
INFO - 2021-04-12 12:11:08 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:08 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:08 --> Pagination Class Initialized
INFO - 2021-04-12 12:11:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:08 --> Pagination Class Initialized
INFO - 2021-04-12 12:11:08 --> Database Driver Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Controller Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:08 --> Total execution time: 0.1973
DEBUG - 2021-04-12 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Controller Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:08 --> Total execution time: 0.1952
INFO - 2021-04-12 12:11:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:08 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Controller Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:08 --> Total execution time: 0.2011
INFO - 2021-04-12 12:11:08 --> Config Class Initialized
INFO - 2021-04-12 12:11:08 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:08 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:08 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:08 --> URI Class Initialized
INFO - 2021-04-12 12:11:08 --> Router Class Initialized
INFO - 2021-04-12 12:11:08 --> Output Class Initialized
INFO - 2021-04-12 12:11:08 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:08 --> Input Class Initialized
INFO - 2021-04-12 12:11:08 --> Language Class Initialized
INFO - 2021-04-12 12:11:08 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:08 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:08 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:08 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Controller Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:08 --> Total execution time: 0.0326
INFO - 2021-04-12 12:11:08 --> Config Class Initialized
INFO - 2021-04-12 12:11:08 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:08 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:08 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:08 --> URI Class Initialized
INFO - 2021-04-12 12:11:08 --> Router Class Initialized
INFO - 2021-04-12 12:11:08 --> Output Class Initialized
INFO - 2021-04-12 12:11:08 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:08 --> Input Class Initialized
INFO - 2021-04-12 12:11:08 --> Language Class Initialized
INFO - 2021-04-12 12:11:08 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:08 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:08 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:08 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Controller Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:08 --> Total execution time: 0.0747
INFO - 2021-04-12 12:11:08 --> Config Class Initialized
INFO - 2021-04-12 12:11:08 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:08 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:08 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:08 --> URI Class Initialized
INFO - 2021-04-12 12:11:08 --> Config Class Initialized
INFO - 2021-04-12 12:11:08 --> Hooks Class Initialized
INFO - 2021-04-12 12:11:08 --> Router Class Initialized
DEBUG - 2021-04-12 12:11:08 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:08 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:08 --> Output Class Initialized
INFO - 2021-04-12 12:11:08 --> URI Class Initialized
INFO - 2021-04-12 12:11:08 --> Router Class Initialized
INFO - 2021-04-12 12:11:08 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:08 --> Input Class Initialized
INFO - 2021-04-12 12:11:08 --> Language Class Initialized
INFO - 2021-04-12 12:11:08 --> Output Class Initialized
INFO - 2021-04-12 12:11:08 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:08 --> Input Class Initialized
INFO - 2021-04-12 12:11:08 --> Loader Class Initialized
INFO - 2021-04-12 12:11:08 --> Language Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:08 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:08 --> Loader Class Initialized
INFO - 2021-04-12 12:11:08 --> Helper loaded: common_helper
DEBUG - 2021-04-12 12:11:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:08 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:08 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:08 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:08 --> Pagination Class Initialized
INFO - 2021-04-12 12:11:08 --> Database Driver Class Initialized
DEBUG - 2021-04-12 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:08 --> Pagination Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Controller Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:08 --> Total execution time: 0.0295
DEBUG - 2021-04-12 12:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Controller Class Initialized
INFO - 2021-04-12 12:11:08 --> Model Class Initialized
INFO - 2021-04-12 12:11:08 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:08 --> Total execution time: 0.0293
INFO - 2021-04-12 12:11:09 --> Config Class Initialized
INFO - 2021-04-12 12:11:09 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:09 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:09 --> URI Class Initialized
INFO - 2021-04-12 12:11:09 --> Router Class Initialized
INFO - 2021-04-12 12:11:09 --> Output Class Initialized
INFO - 2021-04-12 12:11:09 --> Security Class Initialized
INFO - 2021-04-12 12:11:09 --> Config Class Initialized
INFO - 2021-04-12 12:11:09 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:09 --> Input Class Initialized
INFO - 2021-04-12 12:11:09 --> Language Class Initialized
DEBUG - 2021-04-12 12:11:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:09 --> Utf8 Class Initialized
ERROR - 2021-04-12 12:11:09 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 12:11:09 --> URI Class Initialized
INFO - 2021-04-12 12:11:09 --> Router Class Initialized
INFO - 2021-04-12 12:11:09 --> Output Class Initialized
INFO - 2021-04-12 12:11:09 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:09 --> Input Class Initialized
INFO - 2021-04-12 12:11:09 --> Language Class Initialized
ERROR - 2021-04-12 12:11:09 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 12:11:12 --> Config Class Initialized
INFO - 2021-04-12 12:11:12 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:12 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:12 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:12 --> URI Class Initialized
INFO - 2021-04-12 12:11:12 --> Router Class Initialized
INFO - 2021-04-12 12:11:12 --> Output Class Initialized
INFO - 2021-04-12 12:11:12 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:12 --> Input Class Initialized
INFO - 2021-04-12 12:11:12 --> Language Class Initialized
INFO - 2021-04-12 12:11:12 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:12 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:12 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:12 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:12 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:12 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:12 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:12 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:12 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:12 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:12 --> Model Class Initialized
INFO - 2021-04-12 12:11:12 --> Controller Class Initialized
INFO - 2021-04-12 12:11:12 --> Model Class Initialized
INFO - 2021-04-12 12:11:12 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:12 --> Total execution time: 0.0594
INFO - 2021-04-12 12:11:31 --> Config Class Initialized
INFO - 2021-04-12 12:11:31 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:31 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:31 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:31 --> URI Class Initialized
INFO - 2021-04-12 12:11:31 --> Router Class Initialized
INFO - 2021-04-12 12:11:31 --> Output Class Initialized
INFO - 2021-04-12 12:11:31 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:31 --> Input Class Initialized
INFO - 2021-04-12 12:11:31 --> Language Class Initialized
INFO - 2021-04-12 12:11:31 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:31 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:31 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:31 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:31 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:31 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:31 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:31 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:31 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:31 --> Model Class Initialized
INFO - 2021-04-12 12:11:31 --> Controller Class Initialized
INFO - 2021-04-12 12:11:31 --> Model Class Initialized
INFO - 2021-04-12 12:11:31 --> File loaded: /home/memefeed/public_html/meme_feed/application/views/hashtag/index.php
INFO - 2021-04-12 12:11:31 --> File loaded: /home/memefeed/public_html/meme_feed/application/views/layouts/main.php
INFO - 2021-04-12 12:11:31 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:31 --> Total execution time: 0.0492
INFO - 2021-04-12 12:11:36 --> Config Class Initialized
INFO - 2021-04-12 12:11:36 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:36 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:36 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:36 --> URI Class Initialized
INFO - 2021-04-12 12:11:36 --> Router Class Initialized
INFO - 2021-04-12 12:11:36 --> Output Class Initialized
INFO - 2021-04-12 12:11:36 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:36 --> Input Class Initialized
INFO - 2021-04-12 12:11:36 --> Language Class Initialized
INFO - 2021-04-12 12:11:36 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:36 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:36 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:36 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:36 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:36 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:36 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:36 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:36 --> Model Class Initialized
INFO - 2021-04-12 12:11:36 --> Controller Class Initialized
INFO - 2021-04-12 12:11:36 --> Model Class Initialized
INFO - 2021-04-12 12:11:36 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:36 --> Total execution time: 0.0293
INFO - 2021-04-12 12:11:40 --> Config Class Initialized
INFO - 2021-04-12 12:11:40 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:11:40 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:11:40 --> Utf8 Class Initialized
INFO - 2021-04-12 12:11:40 --> URI Class Initialized
INFO - 2021-04-12 12:11:40 --> Router Class Initialized
INFO - 2021-04-12 12:11:40 --> Output Class Initialized
INFO - 2021-04-12 12:11:40 --> Security Class Initialized
DEBUG - 2021-04-12 12:11:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:11:40 --> Input Class Initialized
INFO - 2021-04-12 12:11:40 --> Language Class Initialized
INFO - 2021-04-12 12:11:40 --> Loader Class Initialized
DEBUG - 2021-04-12 12:11:40 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:11:40 --> Helper loaded: security_helper
INFO - 2021-04-12 12:11:40 --> Helper loaded: form_helper
INFO - 2021-04-12 12:11:40 --> Helper loaded: url_helper
INFO - 2021-04-12 12:11:40 --> Helper loaded: common_helper
INFO - 2021-04-12 12:11:40 --> Database Driver Class Initialized
INFO - 2021-04-12 12:11:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:11:40 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:11:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:11:40 --> Model Class Initialized
INFO - 2021-04-12 12:11:40 --> Controller Class Initialized
INFO - 2021-04-12 12:11:40 --> Model Class Initialized
INFO - 2021-04-12 12:11:40 --> Final output sent to browser
DEBUG - 2021-04-12 12:11:40 --> Total execution time: 0.0285
INFO - 2021-04-12 12:14:05 --> Config Class Initialized
INFO - 2021-04-12 12:14:05 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:14:05 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:14:05 --> Utf8 Class Initialized
INFO - 2021-04-12 12:14:05 --> URI Class Initialized
INFO - 2021-04-12 12:14:05 --> Router Class Initialized
INFO - 2021-04-12 12:14:05 --> Output Class Initialized
INFO - 2021-04-12 12:14:05 --> Security Class Initialized
DEBUG - 2021-04-12 12:14:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:14:05 --> Input Class Initialized
INFO - 2021-04-12 12:14:05 --> Language Class Initialized
INFO - 2021-04-12 12:14:05 --> Loader Class Initialized
DEBUG - 2021-04-12 12:14:05 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:14:05 --> Helper loaded: security_helper
INFO - 2021-04-12 12:14:05 --> Helper loaded: form_helper
INFO - 2021-04-12 12:14:05 --> Helper loaded: url_helper
INFO - 2021-04-12 12:14:05 --> Helper loaded: common_helper
INFO - 2021-04-12 12:14:05 --> Database Driver Class Initialized
INFO - 2021-04-12 12:14:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:14:05 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:14:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:14:05 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:14:05 --> Model Class Initialized
INFO - 2021-04-12 12:14:05 --> Controller Class Initialized
INFO - 2021-04-12 12:14:05 --> Model Class Initialized
INFO - 2021-04-12 12:14:05 --> Final output sent to browser
DEBUG - 2021-04-12 12:14:05 --> Total execution time: 0.0297
INFO - 2021-04-12 12:15:15 --> Config Class Initialized
INFO - 2021-04-12 12:15:15 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:15 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:15 --> URI Class Initialized
INFO - 2021-04-12 12:15:15 --> Router Class Initialized
INFO - 2021-04-12 12:15:15 --> Output Class Initialized
INFO - 2021-04-12 12:15:15 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:15 --> Input Class Initialized
INFO - 2021-04-12 12:15:15 --> Language Class Initialized
INFO - 2021-04-12 12:15:15 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:15 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:15 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:15 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:15 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:15 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:15 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:15:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:15 --> Model Class Initialized
INFO - 2021-04-12 12:15:15 --> Controller Class Initialized
INFO - 2021-04-12 12:15:15 --> Model Class Initialized
INFO - 2021-04-12 12:15:15 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 12:15:15 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 12:15:15 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 12:15:15 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:15 --> Total execution time: 0.0416
INFO - 2021-04-12 12:15:16 --> Config Class Initialized
INFO - 2021-04-12 12:15:16 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:16 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:16 --> URI Class Initialized
INFO - 2021-04-12 12:15:16 --> Router Class Initialized
INFO - 2021-04-12 12:15:16 --> Output Class Initialized
INFO - 2021-04-12 12:15:16 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:16 --> Input Class Initialized
INFO - 2021-04-12 12:15:16 --> Language Class Initialized
INFO - 2021-04-12 12:15:16 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:16 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:16 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:16 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:16 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:16 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:16 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:16 --> Model Class Initialized
INFO - 2021-04-12 12:15:16 --> Controller Class Initialized
INFO - 2021-04-12 12:15:16 --> Model Class Initialized
INFO - 2021-04-12 12:15:16 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:16 --> Total execution time: 0.0322
INFO - 2021-04-12 12:15:17 --> Config Class Initialized
INFO - 2021-04-12 12:15:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:17 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:17 --> Config Class Initialized
INFO - 2021-04-12 12:15:17 --> URI Class Initialized
INFO - 2021-04-12 12:15:17 --> Hooks Class Initialized
INFO - 2021-04-12 12:15:17 --> Router Class Initialized
DEBUG - 2021-04-12 12:15:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:17 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:17 --> Output Class Initialized
INFO - 2021-04-12 12:15:17 --> URI Class Initialized
INFO - 2021-04-12 12:15:17 --> Router Class Initialized
INFO - 2021-04-12 12:15:17 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:17 --> Input Class Initialized
INFO - 2021-04-12 12:15:17 --> Output Class Initialized
INFO - 2021-04-12 12:15:17 --> Language Class Initialized
INFO - 2021-04-12 12:15:17 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:17 --> Input Class Initialized
INFO - 2021-04-12 12:15:17 --> Loader Class Initialized
INFO - 2021-04-12 12:15:17 --> Language Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:17 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:17 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:17 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:17 --> Config Class Initialized
INFO - 2021-04-12 12:15:17 --> Hooks Class Initialized
INFO - 2021-04-12 12:15:17 --> Database Driver Class Initialized
DEBUG - 2021-04-12 12:15:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:17 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:17 --> Pagination Class Initialized
INFO - 2021-04-12 12:15:17 --> Config Class Initialized
INFO - 2021-04-12 12:15:17 --> Hooks Class Initialized
INFO - 2021-04-12 12:15:17 --> URI Class Initialized
INFO - 2021-04-12 12:15:17 --> Config Class Initialized
INFO - 2021-04-12 12:15:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Controller Class Initialized
INFO - 2021-04-12 12:15:17 --> Router Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:17 --> Total execution time: 0.1070
DEBUG - 2021-04-12 12:15:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:17 --> Utf8 Class Initialized
DEBUG - 2021-04-12 12:15:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:17 --> URI Class Initialized
INFO - 2021-04-12 12:15:17 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:17 --> Output Class Initialized
INFO - 2021-04-12 12:15:17 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:17 --> URI Class Initialized
INFO - 2021-04-12 12:15:17 --> Router Class Initialized
INFO - 2021-04-12 12:15:17 --> Security Class Initialized
INFO - 2021-04-12 12:15:17 --> Router Class Initialized
INFO - 2021-04-12 12:15:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:17 --> Pagination Class Initialized
INFO - 2021-04-12 12:15:17 --> Output Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:17 --> Output Class Initialized
INFO - 2021-04-12 12:15:17 --> Input Class Initialized
INFO - 2021-04-12 12:15:17 --> Language Class Initialized
INFO - 2021-04-12 12:15:17 --> Security Class Initialized
INFO - 2021-04-12 12:15:17 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 12:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:17 --> Input Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Controller Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:17 --> Input Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Language Class Initialized
INFO - 2021-04-12 12:15:17 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:17 --> Total execution time: 0.2017
INFO - 2021-04-12 12:15:17 --> Language Class Initialized
INFO - 2021-04-12 12:15:17 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:17 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:17 --> Loader Class Initialized
INFO - 2021-04-12 12:15:17 --> Helper loaded: form_helper
DEBUG - 2021-04-12 12:15:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:17 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:17 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:17 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:17 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:17 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:17 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:17 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:17 --> Pagination Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Controller Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:17 --> Total execution time: 0.1160
INFO - 2021-04-12 12:15:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:17 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Controller Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:17 --> Total execution time: 0.1209
DEBUG - 2021-04-12 12:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Controller Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:17 --> Total execution time: 0.2071
INFO - 2021-04-12 12:15:17 --> Config Class Initialized
INFO - 2021-04-12 12:15:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:17 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:17 --> URI Class Initialized
INFO - 2021-04-12 12:15:17 --> Router Class Initialized
INFO - 2021-04-12 12:15:17 --> Output Class Initialized
INFO - 2021-04-12 12:15:17 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:17 --> Input Class Initialized
INFO - 2021-04-12 12:15:17 --> Language Class Initialized
INFO - 2021-04-12 12:15:17 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:17 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:17 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:17 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Controller Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:17 --> Total execution time: 0.0272
INFO - 2021-04-12 12:15:17 --> Config Class Initialized
INFO - 2021-04-12 12:15:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:17 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:17 --> URI Class Initialized
INFO - 2021-04-12 12:15:17 --> Router Class Initialized
INFO - 2021-04-12 12:15:17 --> Output Class Initialized
INFO - 2021-04-12 12:15:17 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:17 --> Input Class Initialized
INFO - 2021-04-12 12:15:17 --> Language Class Initialized
INFO - 2021-04-12 12:15:17 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:17 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:17 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:17 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Controller Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:17 --> Total execution time: 0.0607
INFO - 2021-04-12 12:15:17 --> Config Class Initialized
INFO - 2021-04-12 12:15:17 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:17 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:17 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:17 --> URI Class Initialized
INFO - 2021-04-12 12:15:17 --> Router Class Initialized
INFO - 2021-04-12 12:15:17 --> Output Class Initialized
INFO - 2021-04-12 12:15:17 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:17 --> Input Class Initialized
INFO - 2021-04-12 12:15:17 --> Language Class Initialized
INFO - 2021-04-12 12:15:17 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:17 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:17 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:17 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:17 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Controller Class Initialized
INFO - 2021-04-12 12:15:17 --> Model Class Initialized
INFO - 2021-04-12 12:15:17 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:17 --> Total execution time: 0.0279
INFO - 2021-04-12 12:15:18 --> Config Class Initialized
INFO - 2021-04-12 12:15:18 --> Hooks Class Initialized
INFO - 2021-04-12 12:15:18 --> Config Class Initialized
INFO - 2021-04-12 12:15:18 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:18 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:18 --> Utf8 Class Initialized
DEBUG - 2021-04-12 12:15:18 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:18 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:18 --> URI Class Initialized
INFO - 2021-04-12 12:15:18 --> URI Class Initialized
INFO - 2021-04-12 12:15:18 --> Router Class Initialized
INFO - 2021-04-12 12:15:18 --> Router Class Initialized
INFO - 2021-04-12 12:15:18 --> Output Class Initialized
INFO - 2021-04-12 12:15:18 --> Output Class Initialized
INFO - 2021-04-12 12:15:18 --> Security Class Initialized
INFO - 2021-04-12 12:15:18 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:18 --> Input Class Initialized
INFO - 2021-04-12 12:15:18 --> Language Class Initialized
DEBUG - 2021-04-12 12:15:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:18 --> Input Class Initialized
ERROR - 2021-04-12 12:15:18 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 12:15:18 --> Language Class Initialized
ERROR - 2021-04-12 12:15:18 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 12:15:18 --> Config Class Initialized
INFO - 2021-04-12 12:15:18 --> Hooks Class Initialized
DEBUG - 2021-04-12 12:15:18 --> UTF-8 Support Enabled
INFO - 2021-04-12 12:15:18 --> Utf8 Class Initialized
INFO - 2021-04-12 12:15:18 --> URI Class Initialized
INFO - 2021-04-12 12:15:18 --> Router Class Initialized
INFO - 2021-04-12 12:15:18 --> Output Class Initialized
INFO - 2021-04-12 12:15:18 --> Security Class Initialized
DEBUG - 2021-04-12 12:15:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 12:15:18 --> Input Class Initialized
INFO - 2021-04-12 12:15:18 --> Language Class Initialized
INFO - 2021-04-12 12:15:18 --> Loader Class Initialized
DEBUG - 2021-04-12 12:15:18 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 12:15:18 --> Helper loaded: security_helper
INFO - 2021-04-12 12:15:18 --> Helper loaded: form_helper
INFO - 2021-04-12 12:15:18 --> Helper loaded: url_helper
INFO - 2021-04-12 12:15:18 --> Helper loaded: common_helper
INFO - 2021-04-12 12:15:18 --> Database Driver Class Initialized
INFO - 2021-04-12 12:15:18 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 12:15:18 --> Pagination Class Initialized
DEBUG - 2021-04-12 12:15:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 12:15:18 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 12:15:18 --> Model Class Initialized
INFO - 2021-04-12 12:15:18 --> Controller Class Initialized
INFO - 2021-04-12 12:15:18 --> Model Class Initialized
INFO - 2021-04-12 12:15:18 --> Final output sent to browser
DEBUG - 2021-04-12 12:15:18 --> Total execution time: 0.0285
INFO - 2021-04-12 22:49:21 --> Config Class Initialized
INFO - 2021-04-12 22:49:21 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:21 --> Config Class Initialized
INFO - 2021-04-12 22:49:21 --> Config Class Initialized
INFO - 2021-04-12 22:49:21 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:21 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:21 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:21 --> Utf8 Class Initialized
DEBUG - 2021-04-12 22:49:21 --> UTF-8 Support Enabled
DEBUG - 2021-04-12 22:49:21 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:21 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:21 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:21 --> URI Class Initialized
INFO - 2021-04-12 22:49:21 --> URI Class Initialized
INFO - 2021-04-12 22:49:21 --> URI Class Initialized
INFO - 2021-04-12 22:49:21 --> Router Class Initialized
INFO - 2021-04-12 22:49:21 --> Router Class Initialized
INFO - 2021-04-12 22:49:21 --> Router Class Initialized
INFO - 2021-04-12 22:49:21 --> Output Class Initialized
INFO - 2021-04-12 22:49:21 --> Output Class Initialized
INFO - 2021-04-12 22:49:21 --> Output Class Initialized
INFO - 2021-04-12 22:49:21 --> Security Class Initialized
INFO - 2021-04-12 22:49:21 --> Security Class Initialized
INFO - 2021-04-12 22:49:21 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-12 22:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-04-12 22:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:21 --> Input Class Initialized
INFO - 2021-04-12 22:49:21 --> Input Class Initialized
INFO - 2021-04-12 22:49:21 --> Input Class Initialized
INFO - 2021-04-12 22:49:21 --> Language Class Initialized
INFO - 2021-04-12 22:49:21 --> Language Class Initialized
INFO - 2021-04-12 22:49:21 --> Language Class Initialized
INFO - 2021-04-12 22:49:21 --> Loader Class Initialized
INFO - 2021-04-12 22:49:21 --> Loader Class Initialized
INFO - 2021-04-12 22:49:21 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 22:49:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 22:49:21 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:21 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:21 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:21 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:21 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:21 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:21 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:21 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:21 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 22:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:21 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 22:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:21 --> Model Class Initialized
INFO - 2021-04-12 22:49:21 --> Model Class Initialized
INFO - 2021-04-12 22:49:21 --> Controller Class Initialized
INFO - 2021-04-12 22:49:21 --> Controller Class Initialized
INFO - 2021-04-12 22:49:21 --> Model Class Initialized
INFO - 2021-04-12 22:49:21 --> Model Class Initialized
INFO - 2021-04-12 22:49:21 --> Controller Class Initialized
INFO - 2021-04-12 22:49:21 --> Model Class Initialized
INFO - 2021-04-12 22:49:21 --> Model Class Initialized
INFO - 2021-04-12 22:49:21 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 22:49:21 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
)
INFO - 2021-04-12 22:49:21 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:21 --> Total execution time: 0.5741
INFO - 2021-04-12 22:49:21 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
ERROR - 2021-04-12 22:49:21 --> Severity: Notice --> Undefined offset: 0 /home/memefeed/public_html/meme_feed/application/controllers/Post.php 195
INFO - 2021-04-12 22:49:21 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
     
	
where
    p.user_id = u.id
	
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 22:49:21 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 22:49:21 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:21 --> Total execution time: 0.5887
INFO - 2021-04-12 22:49:21 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 22:49:21 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:21 --> Total execution time: 0.6035
INFO - 2021-04-12 22:49:22 --> Config Class Initialized
INFO - 2021-04-12 22:49:22 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:22 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:22 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:22 --> URI Class Initialized
INFO - 2021-04-12 22:49:22 --> Router Class Initialized
INFO - 2021-04-12 22:49:22 --> Output Class Initialized
INFO - 2021-04-12 22:49:22 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:22 --> Input Class Initialized
INFO - 2021-04-12 22:49:22 --> Language Class Initialized
INFO - 2021-04-12 22:49:22 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:22 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:22 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:22 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:22 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:22 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.1991
INFO - 2021-04-12 22:49:23 --> Config Class Initialized
INFO - 2021-04-12 22:49:23 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:23 --> Config Class Initialized
INFO - 2021-04-12 22:49:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:23 --> Utf8 Class Initialized
DEBUG - 2021-04-12 22:49:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:23 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:23 --> URI Class Initialized
INFO - 2021-04-12 22:49:23 --> URI Class Initialized
INFO - 2021-04-12 22:49:23 --> Router Class Initialized
INFO - 2021-04-12 22:49:23 --> Router Class Initialized
INFO - 2021-04-12 22:49:23 --> Output Class Initialized
INFO - 2021-04-12 22:49:23 --> Security Class Initialized
INFO - 2021-04-12 22:49:23 --> Config Class Initialized
INFO - 2021-04-12 22:49:23 --> Output Class Initialized
INFO - 2021-04-12 22:49:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:23 --> Input Class Initialized
INFO - 2021-04-12 22:49:23 --> Language Class Initialized
INFO - 2021-04-12 22:49:23 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:23 --> Utf8 Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:23 --> Input Class Initialized
INFO - 2021-04-12 22:49:23 --> URI Class Initialized
INFO - 2021-04-12 22:49:23 --> Language Class Initialized
INFO - 2021-04-12 22:49:23 --> Loader Class Initialized
INFO - 2021-04-12 22:49:23 --> Router Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:23 --> Config Class Initialized
INFO - 2021-04-12 22:49:23 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:23 --> Output Class Initialized
INFO - 2021-04-12 22:49:23 --> Loader Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:49:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:23 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: url_helper
DEBUG - 2021-04-12 22:49:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:23 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:23 --> Security Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:23 --> Input Class Initialized
INFO - 2021-04-12 22:49:23 --> URI Class Initialized
INFO - 2021-04-12 22:49:23 --> Language Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:23 --> Router Class Initialized
INFO - 2021-04-12 22:49:23 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:23 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:23 --> Output Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:23 --> Security Class Initialized
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: common_helper
DEBUG - 2021-04-12 22:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:23 --> Input Class Initialized
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:23 --> Language Class Initialized
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.1097
INFO - 2021-04-12 22:49:23 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:23 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.1926
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.1067
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.1120
INFO - 2021-04-12 22:49:23 --> Config Class Initialized
INFO - 2021-04-12 22:49:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:23 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:23 --> URI Class Initialized
INFO - 2021-04-12 22:49:23 --> Router Class Initialized
INFO - 2021-04-12 22:49:23 --> Output Class Initialized
INFO - 2021-04-12 22:49:23 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:23 --> Input Class Initialized
INFO - 2021-04-12 22:49:23 --> Language Class Initialized
INFO - 2021-04-12 22:49:23 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:23 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.0273
INFO - 2021-04-12 22:49:23 --> Config Class Initialized
INFO - 2021-04-12 22:49:23 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:23 --> Config Class Initialized
INFO - 2021-04-12 22:49:23 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:23 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:23 --> Config Class Initialized
INFO - 2021-04-12 22:49:23 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:23 --> URI Class Initialized
DEBUG - 2021-04-12 22:49:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:23 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:23 --> Router Class Initialized
INFO - 2021-04-12 22:49:23 --> URI Class Initialized
DEBUG - 2021-04-12 22:49:23 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:23 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:23 --> Router Class Initialized
INFO - 2021-04-12 22:49:23 --> URI Class Initialized
INFO - 2021-04-12 22:49:23 --> Output Class Initialized
INFO - 2021-04-12 22:49:23 --> Router Class Initialized
INFO - 2021-04-12 22:49:23 --> Output Class Initialized
INFO - 2021-04-12 22:49:23 --> Security Class Initialized
INFO - 2021-04-12 22:49:23 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:23 --> Input Class Initialized
INFO - 2021-04-12 22:49:23 --> Output Class Initialized
INFO - 2021-04-12 22:49:23 --> Language Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:23 --> Input Class Initialized
INFO - 2021-04-12 22:49:23 --> Security Class Initialized
INFO - 2021-04-12 22:49:23 --> Language Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:23 --> Input Class Initialized
INFO - 2021-04-12 22:49:23 --> Language Class Initialized
INFO - 2021-04-12 22:49:23 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:23 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:23 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:23 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:23 --> Loader Class Initialized
INFO - 2021-04-12 22:49:23 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:49:23 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:23 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:23 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:23 --> Database Driver Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.0960
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:23 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.0992
DEBUG - 2021-04-12 22:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Controller Class Initialized
INFO - 2021-04-12 22:49:23 --> Model Class Initialized
INFO - 2021-04-12 22:49:23 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:23 --> Total execution time: 0.0996
INFO - 2021-04-12 22:49:24 --> Config Class Initialized
INFO - 2021-04-12 22:49:24 --> Config Class Initialized
INFO - 2021-04-12 22:49:24 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:24 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:24 --> UTF-8 Support Enabled
DEBUG - 2021-04-12 22:49:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:24 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:24 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:24 --> URI Class Initialized
INFO - 2021-04-12 22:49:24 --> URI Class Initialized
INFO - 2021-04-12 22:49:24 --> Router Class Initialized
INFO - 2021-04-12 22:49:24 --> Router Class Initialized
INFO - 2021-04-12 22:49:24 --> Output Class Initialized
INFO - 2021-04-12 22:49:24 --> Output Class Initialized
INFO - 2021-04-12 22:49:24 --> Security Class Initialized
INFO - 2021-04-12 22:49:24 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:24 --> Input Class Initialized
DEBUG - 2021-04-12 22:49:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:24 --> Input Class Initialized
INFO - 2021-04-12 22:49:24 --> Language Class Initialized
INFO - 2021-04-12 22:49:24 --> Language Class Initialized
ERROR - 2021-04-12 22:49:24 --> 404 Page Not Found: Images/60715ae0c841e.jpg
ERROR - 2021-04-12 22:49:24 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 22:49:33 --> Config Class Initialized
INFO - 2021-04-12 22:49:33 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:33 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:33 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:33 --> URI Class Initialized
INFO - 2021-04-12 22:49:33 --> Router Class Initialized
INFO - 2021-04-12 22:49:33 --> Output Class Initialized
INFO - 2021-04-12 22:49:33 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:33 --> Input Class Initialized
INFO - 2021-04-12 22:49:33 --> Language Class Initialized
INFO - 2021-04-12 22:49:33 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:33 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:33 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:33 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:33 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:33 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:33 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:33 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:33 --> Model Class Initialized
INFO - 2021-04-12 22:49:33 --> Controller Class Initialized
INFO - 2021-04-12 22:49:33 --> Model Class Initialized
INFO - 2021-04-12 22:49:33 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:33 --> Total execution time: 0.0344
INFO - 2021-04-12 22:49:43 --> Config Class Initialized
INFO - 2021-04-12 22:49:43 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:43 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:43 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:43 --> URI Class Initialized
INFO - 2021-04-12 22:49:43 --> Router Class Initialized
INFO - 2021-04-12 22:49:43 --> Output Class Initialized
INFO - 2021-04-12 22:49:43 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:43 --> Input Class Initialized
INFO - 2021-04-12 22:49:43 --> Language Class Initialized
INFO - 2021-04-12 22:49:43 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:43 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:43 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:43 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:43 --> Config Class Initialized
INFO - 2021-04-12 22:49:43 --> Config Class Initialized
INFO - 2021-04-12 22:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:43 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:43 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:43 --> Model Class Initialized
INFO - 2021-04-12 22:49:43 --> Controller Class Initialized
INFO - 2021-04-12 22:49:43 --> Model Class Initialized
DEBUG - 2021-04-12 22:49:43 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:43 --> Utf8 Class Initialized
DEBUG - 2021-04-12 22:49:43 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:43 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:43 --> URI Class Initialized
INFO - 2021-04-12 22:49:43 --> URI Class Initialized
INFO - 2021-04-12 22:49:43 --> Router Class Initialized
INFO - 2021-04-12 22:49:43 --> Router Class Initialized
INFO - 2021-04-12 22:49:43 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:43 --> Total execution time: 0.1012
INFO - 2021-04-12 22:49:43 --> Output Class Initialized
INFO - 2021-04-12 22:49:43 --> Output Class Initialized
INFO - 2021-04-12 22:49:43 --> Security Class Initialized
INFO - 2021-04-12 22:49:43 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:43 --> Input Class Initialized
INFO - 2021-04-12 22:49:43 --> Language Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:43 --> Input Class Initialized
INFO - 2021-04-12 22:49:43 --> Language Class Initialized
INFO - 2021-04-12 22:49:43 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:43 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:43 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:43 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:43 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:43 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:43 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:43 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:43 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:43 --> Model Class Initialized
INFO - 2021-04-12 22:49:43 --> Controller Class Initialized
INFO - 2021-04-12 22:49:43 --> Model Class Initialized
DEBUG - 2021-04-12 22:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:43 --> album-Request--> array (
  'user_id' => '31',
)
INFO - 2021-04-12 22:49:43 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 22:49:43 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:43 --> Total execution time: 0.1011
INFO - 2021-04-12 22:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:43 --> Model Class Initialized
INFO - 2021-04-12 22:49:43 --> Controller Class Initialized
INFO - 2021-04-12 22:49:43 --> Model Class Initialized
INFO - 2021-04-12 22:49:43 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:43 --> Total execution time: 0.1034
INFO - 2021-04-12 22:49:47 --> Config Class Initialized
INFO - 2021-04-12 22:49:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:47 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:47 --> URI Class Initialized
INFO - 2021-04-12 22:49:47 --> Router Class Initialized
INFO - 2021-04-12 22:49:47 --> Output Class Initialized
INFO - 2021-04-12 22:49:47 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:47 --> Input Class Initialized
INFO - 2021-04-12 22:49:47 --> Language Class Initialized
INFO - 2021-04-12 22:49:47 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:47 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:47 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:47 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:47 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:47 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:47 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:47 --> Model Class Initialized
INFO - 2021-04-12 22:49:47 --> Controller Class Initialized
INFO - 2021-04-12 22:49:47 --> Model Class Initialized
INFO - 2021-04-12 22:49:47 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 22:49:47 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 22:49:47 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 22:49:47 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:47 --> Total execution time: 0.0319
INFO - 2021-04-12 22:49:48 --> Config Class Initialized
INFO - 2021-04-12 22:49:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:48 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:48 --> URI Class Initialized
INFO - 2021-04-12 22:49:48 --> Router Class Initialized
INFO - 2021-04-12 22:49:48 --> Output Class Initialized
INFO - 2021-04-12 22:49:48 --> Security Class Initialized
INFO - 2021-04-12 22:49:48 --> Config Class Initialized
INFO - 2021-04-12 22:49:48 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:48 --> Input Class Initialized
INFO - 2021-04-12 22:49:48 --> Language Class Initialized
DEBUG - 2021-04-12 22:49:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:48 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:48 --> URI Class Initialized
INFO - 2021-04-12 22:49:48 --> Router Class Initialized
INFO - 2021-04-12 22:49:48 --> Loader Class Initialized
INFO - 2021-04-12 22:49:48 --> Output Class Initialized
DEBUG - 2021-04-12 22:49:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:48 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:48 --> Security Class Initialized
INFO - 2021-04-12 22:49:48 --> Config Class Initialized
INFO - 2021-04-12 22:49:48 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:48 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:49:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:48 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:48 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:48 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:48 --> URI Class Initialized
INFO - 2021-04-12 22:49:48 --> Router Class Initialized
DEBUG - 2021-04-12 22:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:48 --> Input Class Initialized
INFO - 2021-04-12 22:49:48 --> Language Class Initialized
INFO - 2021-04-12 22:49:48 --> Config Class Initialized
INFO - 2021-04-12 22:49:48 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:48 --> Output Class Initialized
DEBUG - 2021-04-12 22:49:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:48 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:48 --> Config Class Initialized
INFO - 2021-04-12 22:49:48 --> Security Class Initialized
INFO - 2021-04-12 22:49:48 --> Hooks Class Initialized
INFO - 2021-04-12 22:49:48 --> Loader Class Initialized
INFO - 2021-04-12 22:49:48 --> URI Class Initialized
DEBUG - 2021-04-12 22:49:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:48 --> Helper loaded: security_helper
DEBUG - 2021-04-12 22:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:48 --> Input Class Initialized
INFO - 2021-04-12 22:49:48 --> Router Class Initialized
INFO - 2021-04-12 22:49:48 --> Language Class Initialized
DEBUG - 2021-04-12 22:49:48 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:48 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:48 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:48 --> URI Class Initialized
INFO - 2021-04-12 22:49:48 --> Output Class Initialized
INFO - 2021-04-12 22:49:48 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:48 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:48 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:48 --> Router Class Initialized
INFO - 2021-04-12 22:49:48 --> Loader Class Initialized
INFO - 2021-04-12 22:49:48 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:48 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:48 --> Output Class Initialized
DEBUG - 2021-04-12 22:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:48 --> Input Class Initialized
INFO - 2021-04-12 22:49:48 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:48 --> Language Class Initialized
INFO - 2021-04-12 22:49:48 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:48 --> Security Class Initialized
INFO - 2021-04-12 22:49:48 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:48 --> Helper loaded: common_helper
DEBUG - 2021-04-12 22:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:48 --> Input Class Initialized
INFO - 2021-04-12 22:49:48 --> Language Class Initialized
DEBUG - 2021-04-12 22:49:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:48 --> Loader Class Initialized
INFO - 2021-04-12 22:49:48 --> Model Class Initialized
INFO - 2021-04-12 22:49:48 --> Controller Class Initialized
DEBUG - 2021-04-12 22:49:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:48 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:48 --> Loader Class Initialized
INFO - 2021-04-12 22:49:48 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:49:48 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:48 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:48 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:48 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.2877
INFO - 2021-04-12 22:49:49 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:49 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:49 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:49 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:49 --> Database Driver Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:49 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Controller Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.2023
INFO - 2021-04-12 22:49:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:49 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:49 --> Database Driver Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Controller Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.1986
DEBUG - 2021-04-12 22:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:49 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Controller Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.2020
DEBUG - 2021-04-12 22:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Controller Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.1999
INFO - 2021-04-12 22:49:49 --> Config Class Initialized
INFO - 2021-04-12 22:49:49 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:49 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:49 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:49 --> URI Class Initialized
INFO - 2021-04-12 22:49:49 --> Router Class Initialized
INFO - 2021-04-12 22:49:49 --> Output Class Initialized
INFO - 2021-04-12 22:49:49 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:49 --> Input Class Initialized
INFO - 2021-04-12 22:49:49 --> Language Class Initialized
INFO - 2021-04-12 22:49:49 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:49 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:49 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:49 --> Config Class Initialized
INFO - 2021-04-12 22:49:49 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:49 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:49 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:49 --> URI Class Initialized
INFO - 2021-04-12 22:49:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:49 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:49 --> Router Class Initialized
INFO - 2021-04-12 22:49:49 --> Config Class Initialized
INFO - 2021-04-12 22:49:49 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:49 --> Output Class Initialized
INFO - 2021-04-12 22:49:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 22:49:49 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:49 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Controller Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.1081
INFO - 2021-04-12 22:49:49 --> URI Class Initialized
INFO - 2021-04-12 22:49:49 --> Security Class Initialized
INFO - 2021-04-12 22:49:49 --> Router Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:49 --> Input Class Initialized
INFO - 2021-04-12 22:49:49 --> Language Class Initialized
INFO - 2021-04-12 22:49:49 --> Output Class Initialized
INFO - 2021-04-12 22:49:49 --> Security Class Initialized
INFO - 2021-04-12 22:49:49 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 22:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:49 --> Input Class Initialized
INFO - 2021-04-12 22:49:49 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:49 --> Language Class Initialized
INFO - 2021-04-12 22:49:49 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:49 --> Loader Class Initialized
INFO - 2021-04-12 22:49:49 --> Helper loaded: url_helper
DEBUG - 2021-04-12 22:49:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:49 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:49 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:49 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:49 --> Pagination Class Initialized
INFO - 2021-04-12 22:49:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:49 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Controller Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.1150
DEBUG - 2021-04-12 22:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Controller Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.1096
INFO - 2021-04-12 22:49:49 --> Config Class Initialized
INFO - 2021-04-12 22:49:49 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:49 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:49 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:49 --> URI Class Initialized
INFO - 2021-04-12 22:49:49 --> Router Class Initialized
INFO - 2021-04-12 22:49:49 --> Output Class Initialized
INFO - 2021-04-12 22:49:49 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:49 --> Input Class Initialized
INFO - 2021-04-12 22:49:49 --> Language Class Initialized
INFO - 2021-04-12 22:49:49 --> Loader Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:49:49 --> Helper loaded: security_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: form_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: url_helper
INFO - 2021-04-12 22:49:49 --> Helper loaded: common_helper
INFO - 2021-04-12 22:49:49 --> Database Driver Class Initialized
INFO - 2021-04-12 22:49:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:49:49 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:49:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Controller Class Initialized
INFO - 2021-04-12 22:49:49 --> Model Class Initialized
INFO - 2021-04-12 22:49:49 --> Final output sent to browser
DEBUG - 2021-04-12 22:49:49 --> Total execution time: 0.0285
INFO - 2021-04-12 22:49:49 --> Config Class Initialized
INFO - 2021-04-12 22:49:49 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:49 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:49 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:49 --> URI Class Initialized
INFO - 2021-04-12 22:49:49 --> Router Class Initialized
INFO - 2021-04-12 22:49:49 --> Output Class Initialized
INFO - 2021-04-12 22:49:49 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:49 --> Input Class Initialized
INFO - 2021-04-12 22:49:49 --> Language Class Initialized
ERROR - 2021-04-12 22:49:49 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 22:49:49 --> Config Class Initialized
INFO - 2021-04-12 22:49:49 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:49:49 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:49:49 --> Utf8 Class Initialized
INFO - 2021-04-12 22:49:49 --> URI Class Initialized
INFO - 2021-04-12 22:49:49 --> Router Class Initialized
INFO - 2021-04-12 22:49:49 --> Output Class Initialized
INFO - 2021-04-12 22:49:49 --> Security Class Initialized
DEBUG - 2021-04-12 22:49:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:49:49 --> Input Class Initialized
INFO - 2021-04-12 22:49:49 --> Language Class Initialized
ERROR - 2021-04-12 22:49:49 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 22:50:01 --> Config Class Initialized
INFO - 2021-04-12 22:50:01 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:01 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:01 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:01 --> URI Class Initialized
INFO - 2021-04-12 22:50:01 --> Router Class Initialized
INFO - 2021-04-12 22:50:01 --> Output Class Initialized
INFO - 2021-04-12 22:50:01 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:01 --> Input Class Initialized
INFO - 2021-04-12 22:50:01 --> Language Class Initialized
INFO - 2021-04-12 22:50:01 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:01 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:01 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:01 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:01 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:01 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:01 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:01 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:01 --> Model Class Initialized
INFO - 2021-04-12 22:50:01 --> Controller Class Initialized
INFO - 2021-04-12 22:50:01 --> Model Class Initialized
INFO - 2021-04-12 22:50:01 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:01 --> Total execution time: 0.0860
INFO - 2021-04-12 22:50:06 --> Config Class Initialized
INFO - 2021-04-12 22:50:06 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:06 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:06 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:06 --> URI Class Initialized
INFO - 2021-04-12 22:50:06 --> Router Class Initialized
INFO - 2021-04-12 22:50:06 --> Output Class Initialized
INFO - 2021-04-12 22:50:06 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:06 --> Input Class Initialized
INFO - 2021-04-12 22:50:06 --> Language Class Initialized
INFO - 2021-04-12 22:50:06 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:06 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:06 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:06 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:06 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:06 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:06 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:06 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:06 --> Model Class Initialized
INFO - 2021-04-12 22:50:06 --> Controller Class Initialized
INFO - 2021-04-12 22:50:06 --> Model Class Initialized
INFO - 2021-04-12 22:50:06 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:06 --> Total execution time: 0.1130
INFO - 2021-04-12 22:50:09 --> Config Class Initialized
INFO - 2021-04-12 22:50:09 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:09 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:09 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:09 --> URI Class Initialized
INFO - 2021-04-12 22:50:09 --> Router Class Initialized
INFO - 2021-04-12 22:50:09 --> Output Class Initialized
INFO - 2021-04-12 22:50:09 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:09 --> Input Class Initialized
INFO - 2021-04-12 22:50:09 --> Language Class Initialized
INFO - 2021-04-12 22:50:09 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:09 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:09 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:09 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:09 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:09 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:09 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:09 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:09 --> Model Class Initialized
INFO - 2021-04-12 22:50:09 --> Controller Class Initialized
INFO - 2021-04-12 22:50:09 --> Model Class Initialized
INFO - 2021-04-12 22:50:09 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 22:50:09 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 22:50:09 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 22:50:09 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:09 --> Total execution time: 0.0291
INFO - 2021-04-12 22:50:10 --> Config Class Initialized
INFO - 2021-04-12 22:50:10 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:10 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:10 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:10 --> URI Class Initialized
INFO - 2021-04-12 22:50:10 --> Router Class Initialized
INFO - 2021-04-12 22:50:10 --> Output Class Initialized
INFO - 2021-04-12 22:50:10 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:10 --> Input Class Initialized
INFO - 2021-04-12 22:50:10 --> Language Class Initialized
INFO - 2021-04-12 22:50:10 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:10 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:10 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:10 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:10 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:10 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:10 --> Config Class Initialized
INFO - 2021-04-12 22:50:10 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:10 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:10 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:10 --> Utf8 Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:10 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:10 --> URI Class Initialized
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Controller Class Initialized
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:10 --> Total execution time: 0.1911
INFO - 2021-04-12 22:50:10 --> Router Class Initialized
INFO - 2021-04-12 22:50:10 --> Output Class Initialized
INFO - 2021-04-12 22:50:10 --> Config Class Initialized
INFO - 2021-04-12 22:50:10 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:10 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:10 --> Input Class Initialized
INFO - 2021-04-12 22:50:10 --> Language Class Initialized
DEBUG - 2021-04-12 22:50:10 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:10 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:10 --> Config Class Initialized
INFO - 2021-04-12 22:50:10 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:10 --> URI Class Initialized
INFO - 2021-04-12 22:50:10 --> Router Class Initialized
INFO - 2021-04-12 22:50:10 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:10 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:10 --> Utf8 Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:10 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:10 --> Output Class Initialized
INFO - 2021-04-12 22:50:10 --> URI Class Initialized
INFO - 2021-04-12 22:50:10 --> Router Class Initialized
INFO - 2021-04-12 22:50:10 --> Security Class Initialized
INFO - 2021-04-12 22:50:10 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:50:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:10 --> Input Class Initialized
INFO - 2021-04-12 22:50:10 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:10 --> Language Class Initialized
INFO - 2021-04-12 22:50:10 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:10 --> Output Class Initialized
INFO - 2021-04-12 22:50:10 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:10 --> Input Class Initialized
INFO - 2021-04-12 22:50:10 --> Language Class Initialized
INFO - 2021-04-12 22:50:10 --> Config Class Initialized
INFO - 2021-04-12 22:50:10 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:10 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:10 --> Helper loaded: security_helper
DEBUG - 2021-04-12 22:50:10 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:10 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:10 --> URI Class Initialized
INFO - 2021-04-12 22:50:10 --> Loader Class Initialized
INFO - 2021-04-12 22:50:10 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:10 --> Database Driver Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:10 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:10 --> Router Class Initialized
INFO - 2021-04-12 22:50:10 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:10 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:10 --> Pagination Class Initialized
INFO - 2021-04-12 22:50:10 --> Output Class Initialized
INFO - 2021-04-12 22:50:10 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:10 --> Security Class Initialized
INFO - 2021-04-12 22:50:10 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:10 --> Helper loaded: common_helper
DEBUG - 2021-04-12 22:50:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:10 --> Session: Class initialized using 'files' driver.
DEBUG - 2021-04-12 22:50:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:10 --> Input Class Initialized
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Controller Class Initialized
INFO - 2021-04-12 22:50:10 --> Language Class Initialized
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:10 --> Total execution time: 0.1890
INFO - 2021-04-12 22:50:10 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:10 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:10 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:10 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:10 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:10 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:10 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:10 --> Pagination Class Initialized
INFO - 2021-04-12 22:50:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:10 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:10 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Controller Class Initialized
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:10 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:10 --> Total execution time: 0.1993
INFO - 2021-04-12 22:50:10 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:10 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Controller Class Initialized
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:10 --> Total execution time: 0.2031
INFO - 2021-04-12 22:50:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:10 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:10 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Controller Class Initialized
INFO - 2021-04-12 22:50:10 --> Model Class Initialized
INFO - 2021-04-12 22:50:10 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:10 --> Total execution time: 0.1934
INFO - 2021-04-12 22:50:11 --> Config Class Initialized
INFO - 2021-04-12 22:50:11 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:11 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:11 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:11 --> URI Class Initialized
INFO - 2021-04-12 22:50:11 --> Router Class Initialized
INFO - 2021-04-12 22:50:11 --> Output Class Initialized
INFO - 2021-04-12 22:50:11 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:11 --> Input Class Initialized
INFO - 2021-04-12 22:50:11 --> Language Class Initialized
INFO - 2021-04-12 22:50:11 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:11 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:11 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:11 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:11 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:11 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:11 --> Pagination Class Initialized
INFO - 2021-04-12 22:50:11 --> Config Class Initialized
INFO - 2021-04-12 22:50:11 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:11 --> Model Class Initialized
INFO - 2021-04-12 22:50:11 --> Controller Class Initialized
DEBUG - 2021-04-12 22:50:11 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:11 --> Model Class Initialized
INFO - 2021-04-12 22:50:11 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:11 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:11 --> Total execution time: 0.1024
INFO - 2021-04-12 22:50:11 --> URI Class Initialized
INFO - 2021-04-12 22:50:11 --> Router Class Initialized
INFO - 2021-04-12 22:50:11 --> Output Class Initialized
INFO - 2021-04-12 22:50:11 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:11 --> Input Class Initialized
INFO - 2021-04-12 22:50:11 --> Language Class Initialized
INFO - 2021-04-12 22:50:11 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:11 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:11 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:11 --> Config Class Initialized
INFO - 2021-04-12 22:50:11 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:11 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:11 --> Helper loaded: common_helper
DEBUG - 2021-04-12 22:50:11 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:11 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:11 --> URI Class Initialized
INFO - 2021-04-12 22:50:11 --> Router Class Initialized
INFO - 2021-04-12 22:50:11 --> Config Class Initialized
INFO - 2021-04-12 22:50:11 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:11 --> Output Class Initialized
DEBUG - 2021-04-12 22:50:11 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:11 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:11 --> Security Class Initialized
INFO - 2021-04-12 22:50:11 --> URI Class Initialized
INFO - 2021-04-12 22:50:11 --> Database Driver Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:11 --> Input Class Initialized
INFO - 2021-04-12 22:50:11 --> Language Class Initialized
INFO - 2021-04-12 22:50:11 --> Router Class Initialized
INFO - 2021-04-12 22:50:11 --> Output Class Initialized
INFO - 2021-04-12 22:50:11 --> Loader Class Initialized
INFO - 2021-04-12 22:50:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:11 --> Pagination Class Initialized
INFO - 2021-04-12 22:50:11 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:11 --> Helper loaded: security_helper
DEBUG - 2021-04-12 22:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:11 --> Input Class Initialized
INFO - 2021-04-12 22:50:11 --> Language Class Initialized
INFO - 2021-04-12 22:50:11 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:11 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:11 --> Model Class Initialized
INFO - 2021-04-12 22:50:11 --> Controller Class Initialized
INFO - 2021-04-12 22:50:11 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:11 --> Model Class Initialized
INFO - 2021-04-12 22:50:11 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:11 --> Total execution time: 0.1032
INFO - 2021-04-12 22:50:11 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:11 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:11 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:11 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:11 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:11 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:11 --> Pagination Class Initialized
INFO - 2021-04-12 22:50:11 --> Database Driver Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:11 --> Model Class Initialized
INFO - 2021-04-12 22:50:11 --> Controller Class Initialized
INFO - 2021-04-12 22:50:11 --> Model Class Initialized
INFO - 2021-04-12 22:50:11 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:11 --> Total execution time: 0.1019
INFO - 2021-04-12 22:50:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:11 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:11 --> Model Class Initialized
INFO - 2021-04-12 22:50:11 --> Controller Class Initialized
INFO - 2021-04-12 22:50:11 --> Model Class Initialized
INFO - 2021-04-12 22:50:11 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:11 --> Total execution time: 0.1019
INFO - 2021-04-12 22:50:11 --> Config Class Initialized
INFO - 2021-04-12 22:50:11 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:11 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:11 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:11 --> URI Class Initialized
INFO - 2021-04-12 22:50:11 --> Router Class Initialized
INFO - 2021-04-12 22:50:11 --> Output Class Initialized
INFO - 2021-04-12 22:50:11 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:11 --> Input Class Initialized
INFO - 2021-04-12 22:50:11 --> Language Class Initialized
ERROR - 2021-04-12 22:50:11 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 22:50:11 --> Config Class Initialized
INFO - 2021-04-12 22:50:11 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:11 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:11 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:11 --> URI Class Initialized
INFO - 2021-04-12 22:50:11 --> Router Class Initialized
INFO - 2021-04-12 22:50:11 --> Output Class Initialized
INFO - 2021-04-12 22:50:11 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:11 --> Input Class Initialized
INFO - 2021-04-12 22:50:11 --> Language Class Initialized
ERROR - 2021-04-12 22:50:11 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 22:50:16 --> Config Class Initialized
INFO - 2021-04-12 22:50:16 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:16 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:16 --> URI Class Initialized
INFO - 2021-04-12 22:50:16 --> Router Class Initialized
INFO - 2021-04-12 22:50:16 --> Output Class Initialized
INFO - 2021-04-12 22:50:16 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:16 --> Input Class Initialized
INFO - 2021-04-12 22:50:16 --> Language Class Initialized
INFO - 2021-04-12 22:50:16 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:16 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:16 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:16 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:16 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:16 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:16 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:16 --> Model Class Initialized
INFO - 2021-04-12 22:50:16 --> Controller Class Initialized
INFO - 2021-04-12 22:50:16 --> Model Class Initialized
INFO - 2021-04-12 22:50:16 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:16 --> Total execution time: 0.0971
INFO - 2021-04-12 22:50:16 --> Config Class Initialized
INFO - 2021-04-12 22:50:16 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:16 --> Config Class Initialized
INFO - 2021-04-12 22:50:16 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:16 --> Utf8 Class Initialized
DEBUG - 2021-04-12 22:50:16 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:16 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:16 --> URI Class Initialized
INFO - 2021-04-12 22:50:16 --> Router Class Initialized
INFO - 2021-04-12 22:50:16 --> URI Class Initialized
INFO - 2021-04-12 22:50:16 --> Output Class Initialized
INFO - 2021-04-12 22:50:16 --> Router Class Initialized
INFO - 2021-04-12 22:50:16 --> Security Class Initialized
INFO - 2021-04-12 22:50:16 --> Output Class Initialized
DEBUG - 2021-04-12 22:50:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:16 --> Input Class Initialized
INFO - 2021-04-12 22:50:16 --> Language Class Initialized
INFO - 2021-04-12 22:50:16 --> Security Class Initialized
INFO - 2021-04-12 22:50:16 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
DEBUG - 2021-04-12 22:50:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:16 --> Input Class Initialized
INFO - 2021-04-12 22:50:16 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:16 --> Language Class Initialized
INFO - 2021-04-12 22:50:16 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:16 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:16 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:16 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:16 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:16 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:16 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:16 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:16 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:16 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:16 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:16 --> Model Class Initialized
INFO - 2021-04-12 22:50:16 --> Controller Class Initialized
INFO - 2021-04-12 22:50:16 --> Model Class Initialized
INFO - 2021-04-12 22:50:16 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:16 --> Total execution time: 0.0334
INFO - 2021-04-12 22:50:16 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:16 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:16 --> Model Class Initialized
INFO - 2021-04-12 22:50:16 --> Controller Class Initialized
INFO - 2021-04-12 22:50:16 --> Model Class Initialized
INFO - 2021-04-12 22:50:16 --> album-Request--> array (
  'user_id' => '31',
)
INFO - 2021-04-12 22:50:16 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 22:50:16 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:16 --> Total execution time: 0.1018
INFO - 2021-04-12 22:50:24 --> Config Class Initialized
INFO - 2021-04-12 22:50:24 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:24 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:24 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:24 --> URI Class Initialized
INFO - 2021-04-12 22:50:24 --> Router Class Initialized
INFO - 2021-04-12 22:50:24 --> Output Class Initialized
INFO - 2021-04-12 22:50:24 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:24 --> Input Class Initialized
INFO - 2021-04-12 22:50:24 --> Language Class Initialized
INFO - 2021-04-12 22:50:24 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:24 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:24 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:24 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:24 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:24 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:24 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:24 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:24 --> Model Class Initialized
INFO - 2021-04-12 22:50:24 --> Controller Class Initialized
INFO - 2021-04-12 22:50:24 --> Model Class Initialized
INFO - 2021-04-12 22:50:24 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 22:50:24 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 22:50:24 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 22:50:24 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:24 --> Total execution time: 0.0299
INFO - 2021-04-12 22:50:26 --> Config Class Initialized
INFO - 2021-04-12 22:50:26 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:26 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:26 --> URI Class Initialized
INFO - 2021-04-12 22:50:26 --> Router Class Initialized
INFO - 2021-04-12 22:50:26 --> Output Class Initialized
INFO - 2021-04-12 22:50:26 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:26 --> Input Class Initialized
INFO - 2021-04-12 22:50:26 --> Language Class Initialized
INFO - 2021-04-12 22:50:26 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:26 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:26 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:26 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Controller Class Initialized
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:26 --> Total execution time: 0.1150
INFO - 2021-04-12 22:50:26 --> Config Class Initialized
INFO - 2021-04-12 22:50:26 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:26 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:26 --> URI Class Initialized
INFO - 2021-04-12 22:50:26 --> Router Class Initialized
INFO - 2021-04-12 22:50:26 --> Output Class Initialized
INFO - 2021-04-12 22:50:26 --> Config Class Initialized
INFO - 2021-04-12 22:50:26 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:26 --> Security Class Initialized
INFO - 2021-04-12 22:50:26 --> Config Class Initialized
INFO - 2021-04-12 22:50:26 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:26 --> Utf8 Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:26 --> Input Class Initialized
DEBUG - 2021-04-12 22:50:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:26 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:26 --> Language Class Initialized
INFO - 2021-04-12 22:50:26 --> URI Class Initialized
INFO - 2021-04-12 22:50:26 --> URI Class Initialized
INFO - 2021-04-12 22:50:26 --> Router Class Initialized
INFO - 2021-04-12 22:50:26 --> Router Class Initialized
INFO - 2021-04-12 22:50:26 --> Output Class Initialized
INFO - 2021-04-12 22:50:26 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:26 --> Output Class Initialized
INFO - 2021-04-12 22:50:26 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:26 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:26 --> Input Class Initialized
INFO - 2021-04-12 22:50:26 --> Security Class Initialized
INFO - 2021-04-12 22:50:26 --> Language Class Initialized
INFO - 2021-04-12 22:50:26 --> Helper loaded: form_helper
DEBUG - 2021-04-12 22:50:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:26 --> Input Class Initialized
INFO - 2021-04-12 22:50:26 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:26 --> Language Class Initialized
INFO - 2021-04-12 22:50:26 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:26 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:26 --> Config Class Initialized
INFO - 2021-04-12 22:50:26 --> Hooks Class Initialized
INFO - 2021-04-12 22:50:26 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:26 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:26 --> Helper loaded: security_helper
DEBUG - 2021-04-12 22:50:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:26 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:26 --> URI Class Initialized
INFO - 2021-04-12 22:50:26 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:26 --> Router Class Initialized
INFO - 2021-04-12 22:50:26 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:26 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:26 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:26 --> Output Class Initialized
INFO - 2021-04-12 22:50:26 --> Security Class Initialized
INFO - 2021-04-12 22:50:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:26 --> Pagination Class Initialized
INFO - 2021-04-12 22:50:26 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:26 --> Input Class Initialized
INFO - 2021-04-12 22:50:26 --> Language Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Controller Class Initialized
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:26 --> Total execution time: 0.2754
DEBUG - 2021-04-12 22:50:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Controller Class Initialized
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Loader Class Initialized
INFO - 2021-04-12 22:50:26 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:26 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:26 --> Total execution time: 0.1948
DEBUG - 2021-04-12 22:50:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:26 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:26 --> Pagination Class Initialized
INFO - 2021-04-12 22:50:26 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: common_helper
DEBUG - 2021-04-12 22:50:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Controller Class Initialized
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:26 --> Total execution time: 0.2069
INFO - 2021-04-12 22:50:26 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:26 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Controller Class Initialized
INFO - 2021-04-12 22:50:26 --> Model Class Initialized
INFO - 2021-04-12 22:50:26 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:26 --> Total execution time: 0.2009
INFO - 2021-04-12 22:50:26 --> Config Class Initialized
INFO - 2021-04-12 22:50:26 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:26 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:26 --> URI Class Initialized
INFO - 2021-04-12 22:50:26 --> Router Class Initialized
INFO - 2021-04-12 22:50:26 --> Output Class Initialized
INFO - 2021-04-12 22:50:26 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:26 --> Input Class Initialized
INFO - 2021-04-12 22:50:26 --> Language Class Initialized
INFO - 2021-04-12 22:50:26 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:26 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:26 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:27 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:27 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:27 --> Model Class Initialized
INFO - 2021-04-12 22:50:27 --> Controller Class Initialized
INFO - 2021-04-12 22:50:27 --> Model Class Initialized
INFO - 2021-04-12 22:50:27 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:27 --> Total execution time: 0.0903
INFO - 2021-04-12 22:50:27 --> Config Class Initialized
INFO - 2021-04-12 22:50:27 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:27 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:27 --> URI Class Initialized
INFO - 2021-04-12 22:50:27 --> Router Class Initialized
INFO - 2021-04-12 22:50:27 --> Output Class Initialized
INFO - 2021-04-12 22:50:27 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:27 --> Input Class Initialized
INFO - 2021-04-12 22:50:27 --> Language Class Initialized
INFO - 2021-04-12 22:50:27 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:27 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:27 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:27 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:27 --> Model Class Initialized
INFO - 2021-04-12 22:50:27 --> Controller Class Initialized
INFO - 2021-04-12 22:50:27 --> Model Class Initialized
INFO - 2021-04-12 22:50:27 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:27 --> Total execution time: 0.0989
INFO - 2021-04-12 22:50:27 --> Config Class Initialized
INFO - 2021-04-12 22:50:27 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:27 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:27 --> URI Class Initialized
INFO - 2021-04-12 22:50:27 --> Router Class Initialized
INFO - 2021-04-12 22:50:27 --> Output Class Initialized
INFO - 2021-04-12 22:50:27 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:27 --> Input Class Initialized
INFO - 2021-04-12 22:50:27 --> Language Class Initialized
INFO - 2021-04-12 22:50:27 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:27 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:27 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:27 --> Config Class Initialized
INFO - 2021-04-12 22:50:27 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:27 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:27 --> Pagination Class Initialized
INFO - 2021-04-12 22:50:27 --> URI Class Initialized
INFO - 2021-04-12 22:50:27 --> Router Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:27 --> Model Class Initialized
INFO - 2021-04-12 22:50:27 --> Controller Class Initialized
INFO - 2021-04-12 22:50:27 --> Model Class Initialized
INFO - 2021-04-12 22:50:27 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:27 --> Total execution time: 0.0303
INFO - 2021-04-12 22:50:27 --> Output Class Initialized
INFO - 2021-04-12 22:50:27 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:27 --> Input Class Initialized
INFO - 2021-04-12 22:50:27 --> Language Class Initialized
INFO - 2021-04-12 22:50:27 --> Loader Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:50:27 --> Helper loaded: security_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: form_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: url_helper
INFO - 2021-04-12 22:50:27 --> Helper loaded: common_helper
INFO - 2021-04-12 22:50:27 --> Database Driver Class Initialized
INFO - 2021-04-12 22:50:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:50:27 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:50:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:50:27 --> Model Class Initialized
INFO - 2021-04-12 22:50:27 --> Controller Class Initialized
INFO - 2021-04-12 22:50:27 --> Model Class Initialized
INFO - 2021-04-12 22:50:27 --> Final output sent to browser
DEBUG - 2021-04-12 22:50:27 --> Total execution time: 0.0292
INFO - 2021-04-12 22:50:27 --> Config Class Initialized
INFO - 2021-04-12 22:50:27 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:27 --> Utf8 Class Initialized
INFO - 2021-04-12 22:50:27 --> URI Class Initialized
INFO - 2021-04-12 22:50:27 --> Router Class Initialized
INFO - 2021-04-12 22:50:27 --> Output Class Initialized
INFO - 2021-04-12 22:50:27 --> Config Class Initialized
INFO - 2021-04-12 22:50:27 --> Security Class Initialized
INFO - 2021-04-12 22:50:27 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:27 --> Input Class Initialized
INFO - 2021-04-12 22:50:27 --> Language Class Initialized
DEBUG - 2021-04-12 22:50:27 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:50:27 --> Utf8 Class Initialized
ERROR - 2021-04-12 22:50:27 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 22:50:27 --> URI Class Initialized
INFO - 2021-04-12 22:50:27 --> Router Class Initialized
INFO - 2021-04-12 22:50:27 --> Output Class Initialized
INFO - 2021-04-12 22:50:27 --> Security Class Initialized
DEBUG - 2021-04-12 22:50:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:50:27 --> Input Class Initialized
INFO - 2021-04-12 22:50:27 --> Language Class Initialized
ERROR - 2021-04-12 22:50:27 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 22:51:42 --> Config Class Initialized
INFO - 2021-04-12 22:51:42 --> Hooks Class Initialized
DEBUG - 2021-04-12 22:51:42 --> UTF-8 Support Enabled
INFO - 2021-04-12 22:51:42 --> Utf8 Class Initialized
INFO - 2021-04-12 22:51:42 --> URI Class Initialized
INFO - 2021-04-12 22:51:42 --> Router Class Initialized
INFO - 2021-04-12 22:51:42 --> Output Class Initialized
INFO - 2021-04-12 22:51:42 --> Security Class Initialized
DEBUG - 2021-04-12 22:51:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 22:51:42 --> Input Class Initialized
INFO - 2021-04-12 22:51:42 --> Language Class Initialized
INFO - 2021-04-12 22:51:42 --> Loader Class Initialized
DEBUG - 2021-04-12 22:51:42 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 22:51:42 --> Helper loaded: security_helper
INFO - 2021-04-12 22:51:42 --> Helper loaded: form_helper
INFO - 2021-04-12 22:51:42 --> Helper loaded: url_helper
INFO - 2021-04-12 22:51:42 --> Helper loaded: common_helper
INFO - 2021-04-12 22:51:42 --> Database Driver Class Initialized
INFO - 2021-04-12 22:51:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 22:51:42 --> Pagination Class Initialized
DEBUG - 2021-04-12 22:51:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 22:51:42 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 22:51:42 --> Model Class Initialized
INFO - 2021-04-12 22:51:42 --> Controller Class Initialized
INFO - 2021-04-12 22:51:42 --> Model Class Initialized
INFO - 2021-04-12 22:51:42 --> Final output sent to browser
DEBUG - 2021-04-12 22:51:42 --> Total execution time: 0.0285
INFO - 2021-04-12 23:11:26 --> Config Class Initialized
INFO - 2021-04-12 23:11:26 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:11:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:11:26 --> Utf8 Class Initialized
INFO - 2021-04-12 23:11:26 --> URI Class Initialized
INFO - 2021-04-12 23:11:26 --> Router Class Initialized
INFO - 2021-04-12 23:11:26 --> Output Class Initialized
INFO - 2021-04-12 23:11:26 --> Security Class Initialized
DEBUG - 2021-04-12 23:11:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:11:26 --> Input Class Initialized
INFO - 2021-04-12 23:11:26 --> Language Class Initialized
INFO - 2021-04-12 23:11:26 --> Loader Class Initialized
DEBUG - 2021-04-12 23:11:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:11:26 --> Helper loaded: security_helper
INFO - 2021-04-12 23:11:26 --> Helper loaded: form_helper
INFO - 2021-04-12 23:11:26 --> Helper loaded: url_helper
INFO - 2021-04-12 23:11:26 --> Helper loaded: common_helper
INFO - 2021-04-12 23:11:26 --> Database Driver Class Initialized
INFO - 2021-04-12 23:11:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:11:26 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:11:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:11:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:11:26 --> Model Class Initialized
INFO - 2021-04-12 23:11:26 --> Controller Class Initialized
INFO - 2021-04-12 23:11:26 --> Final output sent to browser
DEBUG - 2021-04-12 23:11:26 --> Total execution time: 0.0291
INFO - 2021-04-12 23:11:29 --> Config Class Initialized
INFO - 2021-04-12 23:11:29 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:11:29 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:11:29 --> Utf8 Class Initialized
INFO - 2021-04-12 23:11:29 --> URI Class Initialized
INFO - 2021-04-12 23:11:29 --> Router Class Initialized
INFO - 2021-04-12 23:11:29 --> Output Class Initialized
INFO - 2021-04-12 23:11:29 --> Security Class Initialized
DEBUG - 2021-04-12 23:11:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:11:29 --> Input Class Initialized
INFO - 2021-04-12 23:11:29 --> Language Class Initialized
INFO - 2021-04-12 23:11:29 --> Loader Class Initialized
DEBUG - 2021-04-12 23:11:29 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:11:29 --> Helper loaded: security_helper
INFO - 2021-04-12 23:11:29 --> Helper loaded: form_helper
INFO - 2021-04-12 23:11:29 --> Helper loaded: url_helper
INFO - 2021-04-12 23:11:29 --> Helper loaded: common_helper
INFO - 2021-04-12 23:11:29 --> Database Driver Class Initialized
INFO - 2021-04-12 23:11:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:11:29 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:11:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:11:29 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:11:29 --> Model Class Initialized
INFO - 2021-04-12 23:11:29 --> Controller Class Initialized
INFO - 2021-04-12 23:11:29 --> Final output sent to browser
DEBUG - 2021-04-12 23:11:29 --> Total execution time: 0.0280
INFO - 2021-04-12 23:12:30 --> Config Class Initialized
INFO - 2021-04-12 23:12:30 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:12:30 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:12:30 --> Utf8 Class Initialized
INFO - 2021-04-12 23:12:30 --> URI Class Initialized
INFO - 2021-04-12 23:12:30 --> Router Class Initialized
INFO - 2021-04-12 23:12:30 --> Output Class Initialized
INFO - 2021-04-12 23:12:30 --> Security Class Initialized
DEBUG - 2021-04-12 23:12:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:12:30 --> Input Class Initialized
INFO - 2021-04-12 23:12:30 --> Language Class Initialized
INFO - 2021-04-12 23:12:30 --> Loader Class Initialized
DEBUG - 2021-04-12 23:12:30 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:12:30 --> Helper loaded: security_helper
INFO - 2021-04-12 23:12:30 --> Helper loaded: form_helper
INFO - 2021-04-12 23:12:30 --> Helper loaded: url_helper
INFO - 2021-04-12 23:12:30 --> Helper loaded: common_helper
INFO - 2021-04-12 23:12:30 --> Database Driver Class Initialized
INFO - 2021-04-12 23:12:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:12:30 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:12:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:12:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:12:30 --> Model Class Initialized
INFO - 2021-04-12 23:12:30 --> Controller Class Initialized
INFO - 2021-04-12 23:12:30 --> Final output sent to browser
DEBUG - 2021-04-12 23:12:30 --> Total execution time: 0.0293
INFO - 2021-04-12 23:23:34 --> Config Class Initialized
INFO - 2021-04-12 23:23:34 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:34 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:34 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:34 --> URI Class Initialized
INFO - 2021-04-12 23:23:34 --> Router Class Initialized
INFO - 2021-04-12 23:23:34 --> Output Class Initialized
INFO - 2021-04-12 23:23:34 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:34 --> Input Class Initialized
INFO - 2021-04-12 23:23:34 --> Language Class Initialized
INFO - 2021-04-12 23:23:34 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:34 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:34 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:34 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:34 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:34 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:34 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:34 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:34 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:34 --> Model Class Initialized
INFO - 2021-04-12 23:23:34 --> Controller Class Initialized
INFO - 2021-04-12 23:23:34 --> Model Class Initialized
INFO - 2021-04-12 23:23:34 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 23:23:34 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 23:23:34 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 23:23:34 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:34 --> Total execution time: 0.0475
INFO - 2021-04-12 23:23:45 --> Config Class Initialized
INFO - 2021-04-12 23:23:45 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:45 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:45 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:45 --> URI Class Initialized
INFO - 2021-04-12 23:23:45 --> Router Class Initialized
INFO - 2021-04-12 23:23:45 --> Output Class Initialized
INFO - 2021-04-12 23:23:45 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:45 --> Input Class Initialized
INFO - 2021-04-12 23:23:45 --> Language Class Initialized
INFO - 2021-04-12 23:23:45 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:45 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:45 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:45 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:45 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:45 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:45 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:45 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:45 --> Model Class Initialized
INFO - 2021-04-12 23:23:45 --> Controller Class Initialized
INFO - 2021-04-12 23:23:45 --> Model Class Initialized
INFO - 2021-04-12 23:23:45 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 23:23:45 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 23:23:45 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 23:23:45 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:45 --> Total execution time: 0.0311
INFO - 2021-04-12 23:23:47 --> Config Class Initialized
INFO - 2021-04-12 23:23:47 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:47 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:47 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:47 --> URI Class Initialized
INFO - 2021-04-12 23:23:47 --> Router Class Initialized
INFO - 2021-04-12 23:23:47 --> Output Class Initialized
INFO - 2021-04-12 23:23:47 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:47 --> Input Class Initialized
INFO - 2021-04-12 23:23:47 --> Language Class Initialized
INFO - 2021-04-12 23:23:47 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:47 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:47 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:47 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:47 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:47 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:47 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:47 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:47 --> Model Class Initialized
INFO - 2021-04-12 23:23:47 --> Controller Class Initialized
INFO - 2021-04-12 23:23:47 --> Model Class Initialized
INFO - 2021-04-12 23:23:47 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 23:23:47 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 23:23:47 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 23:23:47 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:47 --> Total execution time: 0.0325
INFO - 2021-04-12 23:23:49 --> Config Class Initialized
INFO - 2021-04-12 23:23:49 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:49 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:49 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:49 --> URI Class Initialized
INFO - 2021-04-12 23:23:49 --> Router Class Initialized
INFO - 2021-04-12 23:23:49 --> Output Class Initialized
INFO - 2021-04-12 23:23:49 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:49 --> Input Class Initialized
INFO - 2021-04-12 23:23:49 --> Language Class Initialized
INFO - 2021-04-12 23:23:49 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:49 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:49 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:49 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:49 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:49 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:49 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:49 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:49 --> Model Class Initialized
INFO - 2021-04-12 23:23:49 --> Controller Class Initialized
INFO - 2021-04-12 23:23:49 --> Model Class Initialized
INFO - 2021-04-12 23:23:49 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:49 --> Total execution time: 0.0303
INFO - 2021-04-12 23:23:51 --> Config Class Initialized
INFO - 2021-04-12 23:23:51 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:51 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:51 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:51 --> URI Class Initialized
INFO - 2021-04-12 23:23:51 --> Router Class Initialized
INFO - 2021-04-12 23:23:51 --> Output Class Initialized
INFO - 2021-04-12 23:23:51 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:51 --> Input Class Initialized
INFO - 2021-04-12 23:23:51 --> Language Class Initialized
INFO - 2021-04-12 23:23:51 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:51 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:51 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:51 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:51 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:51 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:51 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:51 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:51 --> Model Class Initialized
INFO - 2021-04-12 23:23:51 --> Controller Class Initialized
INFO - 2021-04-12 23:23:51 --> Model Class Initialized
INFO - 2021-04-12 23:23:51 --> PostList-Request--> array (
  'from' => '0',
  'to' => '9',
  'user_id' => '31',
)
INFO - 2021-04-12 23:23:51 --> PostList-sql_query--> 'SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT(\'@\',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.down_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = \'31\' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = \'31\' order by vs1.id limit 1),0) as down_vote_user_id 
FROM 
	posts p
    INNER JOIN users u on u.id = p.user_id
    LEFT JOIN followers f ON f.from_id = \'31\' and f.type = \'creator\' and f.to_id IN (p.user_id) OR p.description REGEXP \'brahmi|venky|brahmi|joke\' 
	
where
    p.user_id = u.id
	AND f.to_id IN(p.user_id)
    AND p.del_status = 1
    
    
	
	
    AND NOT FIND_IN_SET(\'31\',p.hide) <> 0
    ORDER BY p.id DESC LIMIT 0, 9'
INFO - 2021-04-12 23:23:51 --> PostList-Respos--> array (
  0 => 
  array (
    'id' => '108',
    'user_id' => '32',
    'post_image' => 'images/60729c87ea9eb.png',
    'post_description' => 'water mark test #test here',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-11 12:21:06',
    'comment_count' => '0',
    'post_type_id' => '2',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  1 => 
  array (
    'id' => '106',
    'user_id' => '32',
    'post_image' => 'images/607165b77cc4c.png',
    'post_description' => 'Test here #test hrtr',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:15:43',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  2 => 
  array (
    'id' => '105',
    'user_id' => '32',
    'post_image' => 'images/607163cf7dc14.png',
    'post_description' => 'Tttttt',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:07:35',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  3 => 
  array (
    'id' => '104',
    'user_id' => '32',
    'post_image' => 'images/607162fabb5b0.png',
    'post_description' => 'Tttfcv# %^^^&',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:04:02',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  4 => 
  array (
    'id' => '103',
    'user_id' => '32',
    'post_image' => 'images/607162d2c6338.png',
    'post_description' => 'Tedr pnh',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 14:03:22',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  5 => 
  array (
    'id' => '102',
    'user_id' => '32',
    'post_image' => 'images/60715ae0c841e.jpg',
    'post_description' => 'test hwew ',
    'commentids' => '1',
    'name' => 'Sravan',
    'handle_name' => '@creator',
    'profile_image' => 'images/60240942406d8.png',
    'up_vote_count' => '0',
    'down_vote_count' => '0',
    'cdate' => '2021-04-10 13:29:28',
    'comment_count' => '0',
    'post_type_id' => '1',
    'up_vote_user_id' => '0',
    'down_vote_user_id' => '0',
  ),
  6 => 
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
  7 => 
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
  8 => 
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
)
INFO - 2021-04-12 23:23:51 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:51 --> Total execution time: 0.0306
INFO - 2021-04-12 23:23:51 --> Config Class Initialized
INFO - 2021-04-12 23:23:51 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:51 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:51 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:51 --> URI Class Initialized
INFO - 2021-04-12 23:23:51 --> Router Class Initialized
INFO - 2021-04-12 23:23:51 --> Output Class Initialized
INFO - 2021-04-12 23:23:51 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:51 --> Input Class Initialized
INFO - 2021-04-12 23:23:51 --> Language Class Initialized
INFO - 2021-04-12 23:23:51 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:51 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:51 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:51 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:51 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:51 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:51 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:51 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:51 --> Model Class Initialized
INFO - 2021-04-12 23:23:51 --> Controller Class Initialized
INFO - 2021-04-12 23:23:51 --> Model Class Initialized
INFO - 2021-04-12 23:23:51 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:51 --> Total execution time: 0.0275
INFO - 2021-04-12 23:23:52 --> Config Class Initialized
INFO - 2021-04-12 23:23:52 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:52 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:52 --> URI Class Initialized
INFO - 2021-04-12 23:23:52 --> Config Class Initialized
INFO - 2021-04-12 23:23:52 --> Hooks Class Initialized
INFO - 2021-04-12 23:23:52 --> Router Class Initialized
DEBUG - 2021-04-12 23:23:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:52 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:52 --> Output Class Initialized
INFO - 2021-04-12 23:23:52 --> URI Class Initialized
INFO - 2021-04-12 23:23:52 --> Security Class Initialized
INFO - 2021-04-12 23:23:52 --> Router Class Initialized
INFO - 2021-04-12 23:23:52 --> Config Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:52 --> Hooks Class Initialized
INFO - 2021-04-12 23:23:52 --> Input Class Initialized
INFO - 2021-04-12 23:23:52 --> Language Class Initialized
INFO - 2021-04-12 23:23:52 --> Output Class Initialized
DEBUG - 2021-04-12 23:23:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:52 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:52 --> Security Class Initialized
INFO - 2021-04-12 23:23:52 --> URI Class Initialized
INFO - 2021-04-12 23:23:52 --> Router Class Initialized
INFO - 2021-04-12 23:23:52 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:52 --> Input Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:52 --> Language Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:52 --> Config Class Initialized
INFO - 2021-04-12 23:23:52 --> Hooks Class Initialized
INFO - 2021-04-12 23:23:52 --> Output Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:52 --> Security Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: url_helper
DEBUG - 2021-04-12 23:23:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:52 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:52 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:52 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:52 --> Input Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:52 --> Language Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:52 --> URI Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:52 --> Router Class Initialized
INFO - 2021-04-12 23:23:52 --> Loader Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: url_helper
DEBUG - 2021-04-12 23:23:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:52 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:52 --> Output Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:52 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:52 --> Input Class Initialized
INFO - 2021-04-12 23:23:52 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:52 --> Language Class Initialized
INFO - 2021-04-12 23:23:52 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:52 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:52 --> Pagination Class Initialized
INFO - 2021-04-12 23:23:52 --> Pagination Class Initialized
INFO - 2021-04-12 23:23:52 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:52 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:52 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 23:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:52 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Controller Class Initialized
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-04-12 23:23:52 --> Total execution time: 0.1970
INFO - 2021-04-12 23:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:52 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Controller Class Initialized
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:52 --> Total execution time: 0.1099
INFO - 2021-04-12 23:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Controller Class Initialized
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:52 --> Total execution time: 0.2061
INFO - 2021-04-12 23:23:52 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:52 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Controller Class Initialized
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:52 --> Total execution time: 0.2054
INFO - 2021-04-12 23:23:52 --> Config Class Initialized
INFO - 2021-04-12 23:23:52 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:52 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:52 --> URI Class Initialized
INFO - 2021-04-12 23:23:52 --> Router Class Initialized
INFO - 2021-04-12 23:23:52 --> Output Class Initialized
INFO - 2021-04-12 23:23:52 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:52 --> Input Class Initialized
INFO - 2021-04-12 23:23:52 --> Language Class Initialized
INFO - 2021-04-12 23:23:52 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:52 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:52 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:52 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Controller Class Initialized
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:52 --> Total execution time: 0.0316
INFO - 2021-04-12 23:23:52 --> Config Class Initialized
INFO - 2021-04-12 23:23:52 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:52 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:52 --> URI Class Initialized
INFO - 2021-04-12 23:23:52 --> Router Class Initialized
INFO - 2021-04-12 23:23:52 --> Output Class Initialized
INFO - 2021-04-12 23:23:52 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:52 --> Input Class Initialized
INFO - 2021-04-12 23:23:52 --> Language Class Initialized
INFO - 2021-04-12 23:23:52 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:52 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:52 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:52 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Controller Class Initialized
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:52 --> Total execution time: 0.0363
INFO - 2021-04-12 23:23:52 --> Config Class Initialized
INFO - 2021-04-12 23:23:52 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:52 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:52 --> URI Class Initialized
INFO - 2021-04-12 23:23:52 --> Router Class Initialized
INFO - 2021-04-12 23:23:52 --> Config Class Initialized
INFO - 2021-04-12 23:23:52 --> Output Class Initialized
INFO - 2021-04-12 23:23:52 --> Hooks Class Initialized
INFO - 2021-04-12 23:23:52 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:52 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:52 --> Utf8 Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:52 --> Input Class Initialized
INFO - 2021-04-12 23:23:52 --> Language Class Initialized
INFO - 2021-04-12 23:23:52 --> URI Class Initialized
INFO - 2021-04-12 23:23:52 --> Router Class Initialized
INFO - 2021-04-12 23:23:52 --> Loader Class Initialized
INFO - 2021-04-12 23:23:52 --> Output Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:52 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:52 --> Security Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: form_helper
DEBUG - 2021-04-12 23:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:52 --> Input Class Initialized
INFO - 2021-04-12 23:23:52 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:52 --> Language Class Initialized
INFO - 2021-04-12 23:23:52 --> Loader Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:23:52 --> Helper loaded: security_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: form_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: url_helper
INFO - 2021-04-12 23:23:52 --> Helper loaded: common_helper
INFO - 2021-04-12 23:23:52 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:52 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Controller Class Initialized
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:52 --> Total execution time: 0.0309
INFO - 2021-04-12 23:23:52 --> Database Driver Class Initialized
INFO - 2021-04-12 23:23:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:23:52 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Controller Class Initialized
INFO - 2021-04-12 23:23:52 --> Model Class Initialized
INFO - 2021-04-12 23:23:52 --> Final output sent to browser
DEBUG - 2021-04-12 23:23:52 --> Total execution time: 0.0321
INFO - 2021-04-12 23:23:53 --> Config Class Initialized
INFO - 2021-04-12 23:23:53 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:53 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:53 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:53 --> URI Class Initialized
INFO - 2021-04-12 23:23:53 --> Router Class Initialized
INFO - 2021-04-12 23:23:53 --> Output Class Initialized
INFO - 2021-04-12 23:23:53 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:53 --> Input Class Initialized
INFO - 2021-04-12 23:23:53 --> Language Class Initialized
ERROR - 2021-04-12 23:23:53 --> 404 Page Not Found: Images/60715ae0c841e.jpg
INFO - 2021-04-12 23:23:53 --> Config Class Initialized
INFO - 2021-04-12 23:23:53 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:23:53 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:23:53 --> Utf8 Class Initialized
INFO - 2021-04-12 23:23:53 --> URI Class Initialized
INFO - 2021-04-12 23:23:53 --> Router Class Initialized
INFO - 2021-04-12 23:23:53 --> Output Class Initialized
INFO - 2021-04-12 23:23:53 --> Security Class Initialized
DEBUG - 2021-04-12 23:23:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:23:53 --> Input Class Initialized
INFO - 2021-04-12 23:23:53 --> Language Class Initialized
ERROR - 2021-04-12 23:23:53 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 23:28:38 --> Config Class Initialized
INFO - 2021-04-12 23:28:38 --> Hooks Class Initialized
INFO - 2021-04-12 23:28:38 --> Config Class Initialized
INFO - 2021-04-12 23:28:38 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:28:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:28:38 --> Utf8 Class Initialized
DEBUG - 2021-04-12 23:28:38 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:28:38 --> Utf8 Class Initialized
INFO - 2021-04-12 23:28:38 --> URI Class Initialized
INFO - 2021-04-12 23:28:38 --> URI Class Initialized
INFO - 2021-04-12 23:28:38 --> Router Class Initialized
INFO - 2021-04-12 23:28:38 --> Router Class Initialized
INFO - 2021-04-12 23:28:38 --> Output Class Initialized
INFO - 2021-04-12 23:28:38 --> Security Class Initialized
INFO - 2021-04-12 23:28:38 --> Output Class Initialized
DEBUG - 2021-04-12 23:28:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:28:38 --> Input Class Initialized
INFO - 2021-04-12 23:28:38 --> Language Class Initialized
INFO - 2021-04-12 23:28:38 --> Security Class Initialized
ERROR - 2021-04-12 23:28:38 --> 404 Page Not Found: Images/60715ae0c841e.jpg
DEBUG - 2021-04-12 23:28:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:28:38 --> Input Class Initialized
INFO - 2021-04-12 23:28:38 --> Language Class Initialized
ERROR - 2021-04-12 23:28:38 --> 404 Page Not Found: 606ffb0321d5ajpg/index
INFO - 2021-04-12 23:28:41 --> Config Class Initialized
INFO - 2021-04-12 23:28:41 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:28:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:28:41 --> Utf8 Class Initialized
INFO - 2021-04-12 23:28:41 --> Config Class Initialized
INFO - 2021-04-12 23:28:41 --> Hooks Class Initialized
INFO - 2021-04-12 23:28:41 --> URI Class Initialized
INFO - 2021-04-12 23:28:41 --> Router Class Initialized
DEBUG - 2021-04-12 23:28:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:28:41 --> Utf8 Class Initialized
INFO - 2021-04-12 23:28:41 --> URI Class Initialized
INFO - 2021-04-12 23:28:41 --> Output Class Initialized
INFO - 2021-04-12 23:28:41 --> Router Class Initialized
INFO - 2021-04-12 23:28:41 --> Security Class Initialized
INFO - 2021-04-12 23:28:41 --> Output Class Initialized
DEBUG - 2021-04-12 23:28:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:28:41 --> Input Class Initialized
INFO - 2021-04-12 23:28:41 --> Language Class Initialized
INFO - 2021-04-12 23:28:41 --> Security Class Initialized
DEBUG - 2021-04-12 23:28:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:28:41 --> Input Class Initialized
INFO - 2021-04-12 23:28:41 --> Language Class Initialized
INFO - 2021-04-12 23:28:41 --> Loader Class Initialized
DEBUG - 2021-04-12 23:28:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:28:41 --> Helper loaded: security_helper
INFO - 2021-04-12 23:28:41 --> Helper loaded: form_helper
INFO - 2021-04-12 23:28:41 --> Loader Class Initialized
DEBUG - 2021-04-12 23:28:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:28:41 --> Helper loaded: url_helper
INFO - 2021-04-12 23:28:41 --> Helper loaded: security_helper
INFO - 2021-04-12 23:28:41 --> Helper loaded: common_helper
INFO - 2021-04-12 23:28:41 --> Config Class Initialized
INFO - 2021-04-12 23:28:41 --> Helper loaded: form_helper
INFO - 2021-04-12 23:28:41 --> Hooks Class Initialized
INFO - 2021-04-12 23:28:41 --> Helper loaded: url_helper
INFO - 2021-04-12 23:28:41 --> Helper loaded: common_helper
DEBUG - 2021-04-12 23:28:41 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:28:41 --> Utf8 Class Initialized
INFO - 2021-04-12 23:28:41 --> URI Class Initialized
INFO - 2021-04-12 23:28:41 --> Router Class Initialized
INFO - 2021-04-12 23:28:41 --> Output Class Initialized
INFO - 2021-04-12 23:28:41 --> Database Driver Class Initialized
INFO - 2021-04-12 23:28:41 --> Security Class Initialized
INFO - 2021-04-12 23:28:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:28:41 --> Pagination Class Initialized
INFO - 2021-04-12 23:28:41 --> Database Driver Class Initialized
DEBUG - 2021-04-12 23:28:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:28:41 --> Input Class Initialized
INFO - 2021-04-12 23:28:41 --> Language Class Initialized
DEBUG - 2021-04-12 23:28:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:28:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:28:41 --> Pagination Class Initialized
INFO - 2021-04-12 23:28:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:28:41 --> Model Class Initialized
INFO - 2021-04-12 23:28:41 --> Controller Class Initialized
INFO - 2021-04-12 23:28:41 --> Model Class Initialized
INFO - 2021-04-12 23:28:41 --> album-Request--> array (
  'user_id' => '31',
)
INFO - 2021-04-12 23:28:41 --> Loader Class Initialized
DEBUG - 2021-04-12 23:28:41 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:28:41 --> Helper loaded: security_helper
DEBUG - 2021-04-12 23:28:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:28:41 --> Helper loaded: form_helper
INFO - 2021-04-12 23:28:41 --> Helper loaded: url_helper
INFO - 2021-04-12 23:28:41 --> Helper loaded: common_helper
INFO - 2021-04-12 23:28:41 --> album-Response--> array (
  'status' => 1,
  'msg' => 'success',
  'data' => 
  array (
  ),
)
INFO - 2021-04-12 23:28:41 --> Final output sent to browser
DEBUG - 2021-04-12 23:28:41 --> Total execution time: 0.1025
INFO - 2021-04-12 23:28:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:28:41 --> Model Class Initialized
INFO - 2021-04-12 23:28:41 --> Controller Class Initialized
INFO - 2021-04-12 23:28:41 --> Model Class Initialized
INFO - 2021-04-12 23:28:41 --> Database Driver Class Initialized
INFO - 2021-04-12 23:28:41 --> Final output sent to browser
DEBUG - 2021-04-12 23:28:41 --> Total execution time: 0.1666
INFO - 2021-04-12 23:28:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:28:41 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:28:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:28:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:28:41 --> Model Class Initialized
INFO - 2021-04-12 23:28:41 --> Controller Class Initialized
INFO - 2021-04-12 23:28:41 --> Model Class Initialized
INFO - 2021-04-12 23:28:41 --> Final output sent to browser
DEBUG - 2021-04-12 23:28:41 --> Total execution time: 0.0942
INFO - 2021-04-12 23:32:26 --> Config Class Initialized
INFO - 2021-04-12 23:32:26 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:32:26 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:32:26 --> Utf8 Class Initialized
INFO - 2021-04-12 23:32:26 --> URI Class Initialized
INFO - 2021-04-12 23:32:26 --> Router Class Initialized
INFO - 2021-04-12 23:32:26 --> Output Class Initialized
INFO - 2021-04-12 23:32:26 --> Security Class Initialized
DEBUG - 2021-04-12 23:32:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:32:26 --> Input Class Initialized
INFO - 2021-04-12 23:32:26 --> Language Class Initialized
INFO - 2021-04-12 23:32:26 --> Loader Class Initialized
DEBUG - 2021-04-12 23:32:26 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:32:26 --> Helper loaded: security_helper
INFO - 2021-04-12 23:32:26 --> Helper loaded: form_helper
INFO - 2021-04-12 23:32:26 --> Helper loaded: url_helper
INFO - 2021-04-12 23:32:26 --> Helper loaded: common_helper
INFO - 2021-04-12 23:32:26 --> Database Driver Class Initialized
INFO - 2021-04-12 23:32:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:32:26 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:32:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:32:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:32:26 --> Model Class Initialized
INFO - 2021-04-12 23:32:26 --> Controller Class Initialized
INFO - 2021-04-12 23:32:26 --> Model Class Initialized
INFO - 2021-04-12 23:32:26 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
  'privacy_status' => '0',
)
INFO - 2021-04-12 23:32:26 --> user_privacy_settings-Response--> 'UPDATE users SET public_private = \'0\' WHERE id = 32'
INFO - 2021-04-12 23:32:26 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'Privacy setttings changed success',
  'data' => '0',
)
INFO - 2021-04-12 23:32:26 --> Final output sent to browser
DEBUG - 2021-04-12 23:32:26 --> Total execution time: 0.0308
INFO - 2021-04-12 23:33:02 --> Config Class Initialized
INFO - 2021-04-12 23:33:02 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:33:02 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:33:02 --> Utf8 Class Initialized
INFO - 2021-04-12 23:33:02 --> URI Class Initialized
INFO - 2021-04-12 23:33:02 --> Router Class Initialized
INFO - 2021-04-12 23:33:02 --> Output Class Initialized
INFO - 2021-04-12 23:33:02 --> Security Class Initialized
DEBUG - 2021-04-12 23:33:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:33:02 --> Input Class Initialized
INFO - 2021-04-12 23:33:02 --> Language Class Initialized
INFO - 2021-04-12 23:33:02 --> Loader Class Initialized
DEBUG - 2021-04-12 23:33:02 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:33:02 --> Helper loaded: security_helper
INFO - 2021-04-12 23:33:02 --> Helper loaded: form_helper
INFO - 2021-04-12 23:33:02 --> Helper loaded: url_helper
INFO - 2021-04-12 23:33:02 --> Helper loaded: common_helper
INFO - 2021-04-12 23:33:02 --> Database Driver Class Initialized
INFO - 2021-04-12 23:33:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:33:02 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:33:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:33:02 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:33:02 --> Model Class Initialized
INFO - 2021-04-12 23:33:02 --> Controller Class Initialized
INFO - 2021-04-12 23:33:02 --> Model Class Initialized
INFO - 2021-04-12 23:33:02 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
  'privacy_status' => '0',
)
INFO - 2021-04-12 23:33:02 --> user_privacy_settings-Response--> 'UPDATE users SET public_private = \'0\' WHERE id = 32'
INFO - 2021-04-12 23:33:02 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'Privacy setttings changed success',
  'data' => '0',
)
INFO - 2021-04-12 23:33:02 --> Final output sent to browser
DEBUG - 2021-04-12 23:33:02 --> Total execution time: 0.0305
INFO - 2021-04-12 23:37:43 --> Config Class Initialized
INFO - 2021-04-12 23:37:43 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:37:43 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:37:43 --> Utf8 Class Initialized
INFO - 2021-04-12 23:37:43 --> URI Class Initialized
INFO - 2021-04-12 23:37:43 --> Router Class Initialized
INFO - 2021-04-12 23:37:43 --> Output Class Initialized
INFO - 2021-04-12 23:37:43 --> Security Class Initialized
DEBUG - 2021-04-12 23:37:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:37:43 --> Input Class Initialized
INFO - 2021-04-12 23:37:43 --> Language Class Initialized
INFO - 2021-04-12 23:37:43 --> Loader Class Initialized
DEBUG - 2021-04-12 23:37:43 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:37:43 --> Helper loaded: security_helper
INFO - 2021-04-12 23:37:43 --> Helper loaded: form_helper
INFO - 2021-04-12 23:37:43 --> Helper loaded: url_helper
INFO - 2021-04-12 23:37:43 --> Helper loaded: common_helper
INFO - 2021-04-12 23:37:43 --> Database Driver Class Initialized
INFO - 2021-04-12 23:37:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:37:43 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:37:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:37:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:37:43 --> Model Class Initialized
INFO - 2021-04-12 23:37:43 --> Controller Class Initialized
INFO - 2021-04-12 23:37:43 --> Model Class Initialized
INFO - 2021-04-12 23:37:43 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
)
INFO - 2021-04-12 23:37:43 --> user_privacy_settings-Response--> 'UPDATE users SET public_private = \'\' WHERE id = 32'
INFO - 2021-04-12 23:37:43 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'Privacy setttings changed success',
  'data' => '0',
)
INFO - 2021-04-12 23:37:43 --> Final output sent to browser
DEBUG - 2021-04-12 23:37:43 --> Total execution time: 0.0327
INFO - 2021-04-12 23:38:02 --> Config Class Initialized
INFO - 2021-04-12 23:38:02 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:38:02 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:38:02 --> Utf8 Class Initialized
INFO - 2021-04-12 23:38:02 --> URI Class Initialized
INFO - 2021-04-12 23:38:02 --> Router Class Initialized
INFO - 2021-04-12 23:38:02 --> Output Class Initialized
INFO - 2021-04-12 23:38:02 --> Security Class Initialized
DEBUG - 2021-04-12 23:38:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:38:02 --> Input Class Initialized
INFO - 2021-04-12 23:38:02 --> Language Class Initialized
ERROR - 2021-04-12 23:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/memefeed/public_html/meme_feed/application/controllers/User.php:417) /home/memefeed/public_html/meme_feed/system/core/Common.php 573
ERROR - 2021-04-12 23:38:02 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting ',' or ';' /home/memefeed/public_html/meme_feed/application/controllers/User.php 417
INFO - 2021-04-12 23:39:02 --> Config Class Initialized
INFO - 2021-04-12 23:39:02 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:39:02 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:39:02 --> Utf8 Class Initialized
INFO - 2021-04-12 23:39:02 --> URI Class Initialized
INFO - 2021-04-12 23:39:02 --> Router Class Initialized
INFO - 2021-04-12 23:39:02 --> Output Class Initialized
INFO - 2021-04-12 23:39:02 --> Security Class Initialized
DEBUG - 2021-04-12 23:39:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:39:02 --> Input Class Initialized
INFO - 2021-04-12 23:39:02 --> Language Class Initialized
INFO - 2021-04-12 23:39:02 --> Loader Class Initialized
DEBUG - 2021-04-12 23:39:02 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:39:02 --> Helper loaded: security_helper
INFO - 2021-04-12 23:39:02 --> Helper loaded: form_helper
INFO - 2021-04-12 23:39:02 --> Helper loaded: url_helper
INFO - 2021-04-12 23:39:02 --> Helper loaded: common_helper
INFO - 2021-04-12 23:39:02 --> Database Driver Class Initialized
INFO - 2021-04-12 23:39:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:39:02 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:39:02 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:39:02 --> Model Class Initialized
INFO - 2021-04-12 23:39:02 --> Controller Class Initialized
INFO - 2021-04-12 23:39:02 --> Model Class Initialized
INFO - 2021-04-12 23:39:02 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
)
INFO - 2021-04-12 23:39:02 --> user_privacy_settings-Response--> 'UPDATE users SET public_private = \'\' WHERE id = 32'
INFO - 2021-04-12 23:39:02 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'Privacy setttings changed success',
  'data' => '0',
)
INFO - 2021-04-12 23:39:02 --> Final output sent to browser
DEBUG - 2021-04-12 23:39:02 --> Total execution time: 0.0490
INFO - 2021-04-12 23:39:08 --> Config Class Initialized
INFO - 2021-04-12 23:39:08 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:39:08 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:39:08 --> Utf8 Class Initialized
INFO - 2021-04-12 23:39:08 --> URI Class Initialized
INFO - 2021-04-12 23:39:08 --> Router Class Initialized
INFO - 2021-04-12 23:39:08 --> Output Class Initialized
INFO - 2021-04-12 23:39:08 --> Security Class Initialized
DEBUG - 2021-04-12 23:39:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:39:08 --> Input Class Initialized
INFO - 2021-04-12 23:39:08 --> Language Class Initialized
INFO - 2021-04-12 23:39:08 --> Loader Class Initialized
DEBUG - 2021-04-12 23:39:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:39:08 --> Helper loaded: security_helper
INFO - 2021-04-12 23:39:08 --> Helper loaded: form_helper
INFO - 2021-04-12 23:39:08 --> Helper loaded: url_helper
INFO - 2021-04-12 23:39:08 --> Helper loaded: common_helper
INFO - 2021-04-12 23:39:08 --> Database Driver Class Initialized
INFO - 2021-04-12 23:39:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:39:08 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:39:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:39:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:39:08 --> Model Class Initialized
INFO - 2021-04-12 23:39:08 --> Controller Class Initialized
INFO - 2021-04-12 23:39:08 --> Model Class Initialized
INFO - 2021-04-12 23:39:08 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
  'privacy_status' => '0',
)
INFO - 2021-04-12 23:39:08 --> user_privacy_settings-Response--> 'UPDATE users SET public_private = \'0\' WHERE id = 32'
INFO - 2021-04-12 23:39:08 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'Privacy setttings changed success',
  'data' => '0',
)
INFO - 2021-04-12 23:39:08 --> Final output sent to browser
DEBUG - 2021-04-12 23:39:08 --> Total execution time: 0.0304
INFO - 2021-04-12 23:43:05 --> Config Class Initialized
INFO - 2021-04-12 23:43:05 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:43:05 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:43:05 --> Utf8 Class Initialized
INFO - 2021-04-12 23:43:05 --> URI Class Initialized
INFO - 2021-04-12 23:43:05 --> Router Class Initialized
INFO - 2021-04-12 23:43:05 --> Output Class Initialized
INFO - 2021-04-12 23:43:05 --> Security Class Initialized
DEBUG - 2021-04-12 23:43:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:43:05 --> Input Class Initialized
INFO - 2021-04-12 23:43:05 --> Language Class Initialized
INFO - 2021-04-12 23:43:05 --> Loader Class Initialized
DEBUG - 2021-04-12 23:43:05 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:43:05 --> Helper loaded: security_helper
INFO - 2021-04-12 23:43:05 --> Helper loaded: form_helper
INFO - 2021-04-12 23:43:05 --> Helper loaded: url_helper
INFO - 2021-04-12 23:43:05 --> Helper loaded: common_helper
INFO - 2021-04-12 23:43:05 --> Database Driver Class Initialized
INFO - 2021-04-12 23:43:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:43:05 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:43:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:43:05 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:43:05 --> Model Class Initialized
INFO - 2021-04-12 23:43:05 --> Controller Class Initialized
INFO - 2021-04-12 23:43:05 --> Model Class Initialized
INFO - 2021-04-12 23:43:05 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
  'privacy_status' => '0',
)
INFO - 2021-04-12 23:43:05 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'Privacy setttings changed success',
  'data' => '0',
)
INFO - 2021-04-12 23:43:05 --> Final output sent to browser
DEBUG - 2021-04-12 23:43:05 --> Total execution time: 0.0322
INFO - 2021-04-12 23:43:15 --> Config Class Initialized
INFO - 2021-04-12 23:43:15 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:43:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:43:15 --> Utf8 Class Initialized
INFO - 2021-04-12 23:43:15 --> URI Class Initialized
INFO - 2021-04-12 23:43:15 --> Router Class Initialized
INFO - 2021-04-12 23:43:15 --> Output Class Initialized
INFO - 2021-04-12 23:43:15 --> Security Class Initialized
DEBUG - 2021-04-12 23:43:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:43:15 --> Input Class Initialized
INFO - 2021-04-12 23:43:15 --> Language Class Initialized
INFO - 2021-04-12 23:43:15 --> Loader Class Initialized
DEBUG - 2021-04-12 23:43:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:43:15 --> Helper loaded: security_helper
INFO - 2021-04-12 23:43:15 --> Helper loaded: form_helper
INFO - 2021-04-12 23:43:15 --> Helper loaded: url_helper
INFO - 2021-04-12 23:43:15 --> Helper loaded: common_helper
INFO - 2021-04-12 23:43:15 --> Database Driver Class Initialized
INFO - 2021-04-12 23:43:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:43:15 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:43:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:43:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:43:15 --> Model Class Initialized
INFO - 2021-04-12 23:43:15 --> Controller Class Initialized
INFO - 2021-04-12 23:43:15 --> Model Class Initialized
INFO - 2021-04-12 23:43:15 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
)
INFO - 2021-04-12 23:43:15 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'Privacy setttings changed success',
  'data' => '0',
)
INFO - 2021-04-12 23:43:15 --> Final output sent to browser
DEBUG - 2021-04-12 23:43:15 --> Total execution time: 0.0316
INFO - 2021-04-12 23:43:59 --> Config Class Initialized
INFO - 2021-04-12 23:43:59 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:43:59 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:43:59 --> Utf8 Class Initialized
INFO - 2021-04-12 23:43:59 --> URI Class Initialized
INFO - 2021-04-12 23:43:59 --> Router Class Initialized
INFO - 2021-04-12 23:43:59 --> Output Class Initialized
INFO - 2021-04-12 23:43:59 --> Security Class Initialized
DEBUG - 2021-04-12 23:43:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:43:59 --> Input Class Initialized
INFO - 2021-04-12 23:43:59 --> Language Class Initialized
INFO - 2021-04-12 23:43:59 --> Loader Class Initialized
DEBUG - 2021-04-12 23:43:59 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:43:59 --> Helper loaded: security_helper
INFO - 2021-04-12 23:43:59 --> Helper loaded: form_helper
INFO - 2021-04-12 23:43:59 --> Helper loaded: url_helper
INFO - 2021-04-12 23:43:59 --> Helper loaded: common_helper
INFO - 2021-04-12 23:43:59 --> Database Driver Class Initialized
INFO - 2021-04-12 23:43:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:43:59 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:43:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:43:59 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:43:59 --> Model Class Initialized
INFO - 2021-04-12 23:43:59 --> Controller Class Initialized
INFO - 2021-04-12 23:43:59 --> Model Class Initialized
INFO - 2021-04-12 23:43:59 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
)
INFO - 2021-04-12 23:43:59 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'user data',
  'data' => '0',
)
INFO - 2021-04-12 23:43:59 --> Final output sent to browser
DEBUG - 2021-04-12 23:43:59 --> Total execution time: 0.0339
INFO - 2021-04-12 23:44:08 --> Config Class Initialized
INFO - 2021-04-12 23:44:08 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:44:08 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:44:08 --> Utf8 Class Initialized
INFO - 2021-04-12 23:44:08 --> URI Class Initialized
INFO - 2021-04-12 23:44:08 --> Router Class Initialized
INFO - 2021-04-12 23:44:08 --> Output Class Initialized
INFO - 2021-04-12 23:44:08 --> Security Class Initialized
DEBUG - 2021-04-12 23:44:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:44:08 --> Input Class Initialized
INFO - 2021-04-12 23:44:08 --> Language Class Initialized
INFO - 2021-04-12 23:44:08 --> Loader Class Initialized
DEBUG - 2021-04-12 23:44:08 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:44:08 --> Helper loaded: security_helper
INFO - 2021-04-12 23:44:08 --> Helper loaded: form_helper
INFO - 2021-04-12 23:44:08 --> Helper loaded: url_helper
INFO - 2021-04-12 23:44:08 --> Helper loaded: common_helper
INFO - 2021-04-12 23:44:08 --> Database Driver Class Initialized
INFO - 2021-04-12 23:44:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:44:08 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:44:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:44:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:44:08 --> Model Class Initialized
INFO - 2021-04-12 23:44:08 --> Controller Class Initialized
INFO - 2021-04-12 23:44:08 --> Model Class Initialized
INFO - 2021-04-12 23:44:08 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
  'privacy_status' => '1',
)
INFO - 2021-04-12 23:44:08 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'Privacy setttings changed success',
  'data' => '0',
)
INFO - 2021-04-12 23:44:08 --> Final output sent to browser
DEBUG - 2021-04-12 23:44:08 --> Total execution time: 0.0304
INFO - 2021-04-12 23:44:15 --> Config Class Initialized
INFO - 2021-04-12 23:44:15 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:44:15 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:44:15 --> Utf8 Class Initialized
INFO - 2021-04-12 23:44:15 --> URI Class Initialized
INFO - 2021-04-12 23:44:15 --> Router Class Initialized
INFO - 2021-04-12 23:44:15 --> Output Class Initialized
INFO - 2021-04-12 23:44:15 --> Security Class Initialized
DEBUG - 2021-04-12 23:44:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:44:15 --> Input Class Initialized
INFO - 2021-04-12 23:44:15 --> Language Class Initialized
INFO - 2021-04-12 23:44:15 --> Loader Class Initialized
DEBUG - 2021-04-12 23:44:15 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:44:15 --> Helper loaded: security_helper
INFO - 2021-04-12 23:44:15 --> Helper loaded: form_helper
INFO - 2021-04-12 23:44:15 --> Helper loaded: url_helper
INFO - 2021-04-12 23:44:15 --> Helper loaded: common_helper
INFO - 2021-04-12 23:44:15 --> Database Driver Class Initialized
INFO - 2021-04-12 23:44:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:44:15 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:44:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:44:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:44:15 --> Model Class Initialized
INFO - 2021-04-12 23:44:15 --> Controller Class Initialized
INFO - 2021-04-12 23:44:15 --> Model Class Initialized
INFO - 2021-04-12 23:44:15 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
)
INFO - 2021-04-12 23:44:15 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'user data',
  'data' => '1',
)
INFO - 2021-04-12 23:44:15 --> Final output sent to browser
DEBUG - 2021-04-12 23:44:15 --> Total execution time: 0.0305
INFO - 2021-04-12 23:45:28 --> Config Class Initialized
INFO - 2021-04-12 23:45:28 --> Hooks Class Initialized
DEBUG - 2021-04-12 23:45:28 --> UTF-8 Support Enabled
INFO - 2021-04-12 23:45:28 --> Utf8 Class Initialized
INFO - 2021-04-12 23:45:28 --> URI Class Initialized
INFO - 2021-04-12 23:45:28 --> Router Class Initialized
INFO - 2021-04-12 23:45:28 --> Output Class Initialized
INFO - 2021-04-12 23:45:28 --> Security Class Initialized
DEBUG - 2021-04-12 23:45:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-04-12 23:45:28 --> Input Class Initialized
INFO - 2021-04-12 23:45:28 --> Language Class Initialized
INFO - 2021-04-12 23:45:28 --> Loader Class Initialized
DEBUG - 2021-04-12 23:45:28 --> Config file loaded: /home/memefeed/public_html/meme_feed/application/config/pagination.php
INFO - 2021-04-12 23:45:28 --> Helper loaded: security_helper
INFO - 2021-04-12 23:45:28 --> Helper loaded: form_helper
INFO - 2021-04-12 23:45:28 --> Helper loaded: url_helper
INFO - 2021-04-12 23:45:28 --> Helper loaded: common_helper
INFO - 2021-04-12 23:45:28 --> Database Driver Class Initialized
INFO - 2021-04-12 23:45:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-04-12 23:45:28 --> Pagination Class Initialized
DEBUG - 2021-04-12 23:45:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-04-12 23:45:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-04-12 23:45:28 --> Model Class Initialized
INFO - 2021-04-12 23:45:28 --> Controller Class Initialized
INFO - 2021-04-12 23:45:28 --> Model Class Initialized
INFO - 2021-04-12 23:45:28 --> user_privacy_settings-Request--> array (
  'user_id' => '32',
)
INFO - 2021-04-12 23:45:28 --> user_privacy_settings-Response--> array (
  'status' => 1,
  'msg' => 'user data if data value is 0 = private, 1 = public ',
  'data' => '1',
)
INFO - 2021-04-12 23:45:28 --> Final output sent to browser
DEBUG - 2021-04-12 23:45:28 --> Total execution time: 0.0295
