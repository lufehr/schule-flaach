<?php
if(file_exists('/var/www/html/site/assets/cache/AdminActions/AdminActionsBackup.sql')) {
	$db = new PDO('mysql:host=db.ddev-schule-flaach-web.orb.local;dbname=db', 'db', 'db');
	$sql = file_get_contents('/var/www/html/site/assets/cache/AdminActions/AdminActionsBackup.sql');
	$qr = $db->query($sql);
}
if(isset($qr) && $qr) {
	echo 'The database was successfully restored.';
}
else {
	echo 'Sorry, there was a problem and the database could not be restored.';
}