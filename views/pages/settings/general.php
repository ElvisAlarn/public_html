<?php
defined('EXEC') or die;

if(!$main->session->group_super_users){
	if(!$main->session->group_settings_general){
		die ('Access Denied');
	}
}

?>
<p>Информация о вашей компании</p>
