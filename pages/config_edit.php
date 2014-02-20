<?php
form_security_validate( 'plugin_Slack_config_edit' );

auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

$f_instance = gpc_get_string( 'instance' );
$f_token = gpc_get_string( 'token' );
$f_bot_name = gpc_get_string( 'bot_name' );
$f_bot_icon = gpc_get_string( 'bot_icon' );
$f_default_channel = gpc_get_string( 'default_channel' );
$f_attachment_style = gpc_get_string( 'attachment_style' );

if( plugin_config_get( 'instance' ) != $f_instance ) {
  plugin_config_set( 'instance', $f_instance );
}

if( plugin_config_get( 'token' ) != $f_token ) {
  plugin_config_set( 'token', $f_token );
}

if( plugin_config_get( 'bot_name' ) != $f_bot_name ) {
  plugin_config_set( 'bot_name', $f_bot_name );
}

if( plugin_config_get( 'bot_icon' ) != $f_bot_icon ) {
  plugin_config_set( 'bot_icon', $f_bot_icon );
}

if( plugin_config_get( 'default_channel' ) != $f_default_channel ) {
  plugin_config_set( 'default_channel', $f_default_channel );
}

if( plugin_config_get( 'attachment_style' ) != $f_attachment_style ) {
  plugin_config_set( 'attachment_style', $f_attachment_style );
}

form_security_purge( 'plugin_Slack_config_edit' );

print_successful_redirect( plugin_page( 'config', true ) );
