<?php
// URI:       design:node/oocontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oocontextmenu.tpl
// Timestamp: 1339160640 (Fri Jun 8 15:04:00 CEST 2012)
$oldSetArray_7850e4ab63ad252b7ff21c10d27a300a = isset( $setArray ) ? $setArray : array();
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

$text .= '<script type="text/javascript">
menuArray[\'OpenOffice\'] = [];
menuArray[\'OpenOffice\'][\'depth\'] = 1;
menuArray[\'OpenOffice\'][\'elements\'] = [];
</script>

<hr />
<a id="menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'menu-openoffice\' ); return false;">OpenOffice.org</a>


<form id="menu-form-export-ooo" method="post" action="/index.php/ezodf/export">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-export-pdf" method="post" action="/index.php/ezodf/export">
  <input type="hidden" name="ExportType" value="PDF" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-export-word" method="post" action="/index.php/ezodf/export">
  <input type="hidden" name="ExportType" value="Word" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-import-ooo" method="post" action="/index.php/ezodf/import">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>



<form id="menu-form-replace-ooo" method="post" action="/index.php/ezodf/import">
  <input type="hidden" name="ImportType" value="replace" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>
';

$setArray = $oldSetArray_7850e4ab63ad252b7ff21c10d27a300a;
$tpl->Level--;
?>
