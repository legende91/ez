<?php
// URI:       design:node/ezmusubitemscontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmusubitemscontextmenu.tpl
// Timestamp: 1336572256 (Wed May 9 16:04:16 CEST 2012)
$oldSetArray_f7021bf1c5de83cfdd95718b40a0c851 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/formation/cache/template/compiled/common.php' );

$text .= '
<hr/>
<script type="text/javascript">
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'][\'url\'] = "/index.php/ezmultiupload/upload/%nodeID%";
</script>

<a id="child-menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Envoyer plusieurs fichiers</a>
';

$setArray = $oldSetArray_f7021bf1c5de83cfdd95718b40a0c851;
$tpl->Level--;
?>
