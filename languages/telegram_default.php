<?php
/**
* Default language file for Telegram module
*
*/
$dictionary=array(
/* general */
'ABOUT' => 'About',
'TLG_HELP' => 'Help',
'TLG_TOKEN'=>'Token bot',
'TLG_STORAGE_PATH'=>'Path download storage',
'TLG_ADMIN'=>'Administrator',
'TLG_HISTORY'=>'History',
'TLG_HISTORY_LEVEL'=>'History level',
'TLG_COMMANDS'=>'Commands',
'TLG_DOWNLOAD'=>'Download',
'TLG_PLAY_VOICE'=>'Play',
'TLG_DISABLE'=>'Disable',
'TLG_ONLY_ADMIN'=>'Only administrators',
'TLG_ALL'=>'All',
/* about */

/* help */
'HELP_TOKEN'=>'Token bot from @BotFather -> \'123456780:AAHeВ7UcDWvEovvcFaMfUrUVPupNORHWD_k\'',
'HELP_STORAGE'=>'Path storage to save files from user',
'HELP_USERID'=>'Telegram User ID',
'HELP_NAME'=>'Name user',
'HELP_MEMBER'=>'Link to system user',
'HELP_ADMIN'=>'Administrator',
'HELP_HISTORY'=>'Send history to user',
'HELP_HISTORY_LEVEL'=>'Level history to send(0 - send all history message)',
'HELP_COMMANDS'=>'Process command from user',
'HELP_DOWNLOAD'=>'Download files to storage from user',
'HELP_PLAY_VOICE'=>'Play voice from user',
'HELP_TITLE'=>'Title command (view in keyboard telegram client)',
'HELP_DESCRIPTION'=>'Description command',
'HELP_ACCESS_CONTROL'=>'Access control command'

/* end module names */
);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}

?>