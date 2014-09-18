<?php
// URI:       design:node/oocontextsubmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oocontextsubmenu.tpl
// Timestamp: 1339160640 (Fri Jun 8 15:04:00 CEST 2012)
$oldSetArray_76e1e4a8cf881ac21747900175a44343 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/plain_site/cache/template/compiled/common.php' );

$text .= '<div class="popupmenu" id="OpenOffice">
    <a id="menu-export-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-ooo\' ); return false;">Export OpenOffice</a>
    <a id="menu-export-pdf" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-pdf\' ); return false;">Export PDF</a>
    <a id="menu-export-word" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-word\' ); return false;">Export Word</a>
    <a id="menu-import-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-import-ooo\' ); return false;">Import OpenOffice</a>
    <a id="menu-replace-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-replace-ooo\' ); return false;">Remplacer OpenOffice</a>
</div>
';

$setArray = $oldSetArray_76e1e4a8cf881ac21747900175a44343;
$tpl->Level--;
?>
