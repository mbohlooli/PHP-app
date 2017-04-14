<?php

session_start();

define('DB_FILENAME', 'myapp.data');

define('SITE_URL', 'http://localhost/php/phps22/');

define('SITE_PATH', __DIR__ . DIRECTORY_SEPARATOR);

define('APP_TITLE', 'برنامه اول من');

foreach(glob('lib/*.php') as $lib_file) {
    include_once($lib_file);
}

create_db_tables();
initialize_users();
