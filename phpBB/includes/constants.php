<?php
/***************************************************************************
 *                               includes.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id$
 *
 *
 ***************************************************************************/


/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

//
// Constants
//

// Debug Level
define(DEBUG, 1); // Debugging on
//define(DEBUG, 0); // Debugging off

// User Levels <- Do not change the values of USER or ADMIN
define(DELETED, -1);
define(ANONYMOUS, -1);
define(USER, 0);
define(ADMIN, 1);

// Topic state
define(UNLOCKED, 0);
define(LOCKED, 1);

// Ban time types
define(SECONDS, 1);
define(MINUTES, 2);
define(HOURS, 3);
define(DAYS, 4);
define(YEARS, 5);

// Error codes
define(SQL_CONNECT, 1);
define(BANNED, 2);
define(QUERY_ERROR, 3);
define(SESSION_CREATE, 4);
define(NO_TOPICS, 5);
define(GENERAL_ERROR, 6);
define(LOGIN_FAILED, 7);

// URL PARAMETERS
define(POST_TOPIC_URL, 't');
define(POST_FORUM_URL, 'f');
define(POST_USERS_URL, 'u');
define(POST_POST_URL, 'p');
define(POST_GROUPS_URL, 'g');

// Session parameters
define(SESSION_METHOD_COOKIE, 100);
define(SESSION_METHOD_GET, 101);

// Page numbers for session handling
define(PAGE_INDEX, 0);
define(PAGE_LOGIN, -1);
define(PAGE_SEARCH, -2);
define(PAGE_REGISTER, -3);
define(PAGE_PROFILE, -4);
define(PAGE_VIEWONLINE, -6);
define(PAGE_VIEWMEMBERS, -7);
define(PAGE_FAQ, -8);
define(PAGE_POSTING, -9);

// Auth settings
define(AUTH_ALL, 0);

define(AUTH_REG, 1);
define(AUTH_ACL, 2);
define(AUTH_MOD, 3);
define(AUTH_ADMIN, 5);

define(AUTH_VIEW, 1);
define(AUTH_READ, 2);
define(AUTH_POST, 3);
define(AUTH_REPLY, 4);
define(AUTH_EDIT, 5);
define(AUTH_DELETE, 6);
define(AUTH_VOTECREATE, 7);
define(AUTH_VOTE, 8);
define(AUTH_ATTACH, 9);
define(AUTH_LIST_ALL, 10);

// Table names
define('BANLIST_TABLE', $table_prefix.'banlist');
define('CATEGORIES_TABLE', $table_prefix.'categories');
define('CONFIG_TABLE', $table_prefix.'config');
define('DISALLOW_TABLE', $table_prefix.'disallow');
define('FORUM_ACCESS_TABLE', $table_prefix.'forum_access');
define('FORUM_MODS_TABLE', $table_prefix.'forum_mods');
define('FORUMS_TABLE', $table_prefix.'forums');
define('POSTS_TABLE', $table_prefix.'posts');
define('POSTS_TEXT_TABLE', $table_prefix.'posts_text');
define('PRIV_MSGS_TABLE', $table_prefix.'priv_msgs');
define('RANKS_TABLE', $table_prefix.'ranks');
define('SESSIONS_TABLE', $table_prefix.'session');
define('SESSIONS_KEY_TABLE', $table_prefix.'session_keys');
define('THEMES_TABLE', $table_prefix.'themes');
define('TOPICS_TABLE', $table_prefix.'topics');
define('USERS_TABLE', $table_prefix.'users');
define('GROUPS_TABLE', $table_prefix.'groups');
define('USER_GROUP_TABLE', $table_prefix.'user_group');
define('WORDS_TABLE', $table_prefix.'words');
define('AUTH_ACCESS_TABLE', $table_prefix.'auth_access');
define('AUTH_FORUMS_TABLE', $table_prefix.'auth_forums');

?>