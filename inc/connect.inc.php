<?php
  
$i_dns = sprintf($g_db_connectionsettings[$srv_settings['db_driver']]['dns'], $srv_settings['db_driver'], $srv_settings['db_host'], $srv_settings['db_user'], $srv_settings['db_password'], $srv_settings['db_db']);
$i_server = sprintf($g_db_connectionsettings[$srv_settings['db_driver']]['server'], $srv_settings['db_driver'], $srv_settings['db_host'], $srv_settings['db_user'], $srv_settings['db_password'], $srv_settings['db_db']);
$g_db = ADONewConnection($i_dns);
$g_db->debug = IGT_DB_DEBUG_MODE;
$g_db->Connect($i_server, $srv_settings['db_user'], $srv_settings['db_password'], $srv_settings['db_db']); 
$g_db->SetFetchMode(ADODB_FETCH_BOTH);
if($srv_settings['db_driver']==DB_DRIVER_MYSQL) {
	@$g_db->Execute("SET character_set_client = ".$lngstr['sql_charset'].";");
@$g_db->Execute("SET character_set_results = ".$lngstr['sql_charset'].";");
@$g_db->Execute("SET character_set_connection = ".$lngstr['sql_charset'].";");
}
?>
