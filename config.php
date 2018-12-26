<?php
/*
Copyright 2014 Daniel Esteban

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

// define your absolute url
define('SERVER_URL', 'https://canvas.localhost.com:81/digiid/');

// define database credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'digiid');
define('DB_PASS', '12345678');
define('DB_NAME', 'digiid');

if (DB_USER=='') {
	echo "<h1>Please setup config.php</h1>";
	die;
}
