<?php
// URI:       design:popupmenu/popup_tag_menu.tpl
// Filename:  extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl
// Timestamp: 1339513470 (Tue Jun 12 17:04:30 CEST 2012)
$oldSetArray_552008459d23e37ebe6970cbf8bb4be6 = isset( $setArray ) ? $setArray : array();
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

// def $tags_add_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "tags",
    'function' => "add",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_add_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_add_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 6,
    1 => 106,
    2 => 583,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_add_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_add_access', $var, $rootNamespace );
}

// def $tags_edit_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "tags",
    'function' => "edit",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_edit_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_edit_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 6,
    1 => 106,
    2 => 583,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_edit_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_edit_access', $var, $rootNamespace );
}

// def $tags_delete_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "tags",
    'function' => "delete",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_delete_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_delete_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 6,
    1 => 106,
    2 => 583,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_delete_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_delete_access', $var, $rootNamespace );
}

// def $tags_merge_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "tags",
    'function' => "merge",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_merge_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_merge_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 6,
    1 => 106,
    2 => 583,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_merge_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_merge_access', $var, $rootNamespace );
}

// def $tags_add_synonym_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "tags",
    'function' => "addsynonym",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_add_synonym_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_add_synonym_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 6,
    1 => 106,
    2 => 583,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_add_synonym_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_add_synonym_access', $var, $rootNamespace );
}

// def $tags_make_synonym_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "tags",
    'function' => "makesynonym",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_make_synonym_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_make_synonym_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 6,
    1 => 106,
    2 => 583,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_make_synonym_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_make_synonym_access', $var, $rootNamespace );
}

$text .= '
<script type="text/javascript">
menuArray[\'TagMenu\'] = { \'depth\': 0, \'headerID\': \'tag-header\' };
menuArray[\'TagMenu\'][\'elements\'] = {};';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    menuArray[\'TagMenu\'][\'elements\'][\'add-child-tag\'] = { \'url\': "/index.php/tags/add/%tagID%" };';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_edit_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_edit_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    menuArray[\'TagMenu\'][\'elements\'][\'edit-tag\'] = { \'url\': "/index.php/tags/edit/%tagID%" };';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_delete_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_delete_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    menuArray[\'TagMenu\'][\'elements\'][\'delete-tag\'] = { \'url\': "/index.php/tags/delete/%tagID%" };';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_merge_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_merge_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    menuArray[\'TagMenu\'][\'elements\'][\'merge-tag\'] = { \'url\': "/index.php/tags/merge/%tagID%" };';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_synonym_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    menuArray[\'TagMenu\'][\'elements\'][\'add-synonym-tag\'] = { \'url\': "/index.php/tags/addsynonym/%tagID%" };';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_make_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_make_synonym_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    menuArray[\'TagMenu\'][\'elements\'][\'make-synonym-tag\'] = { \'url\': "/index.php/tags/makesynonym/%tagID%" };';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    menuArray[\'TagMenuSimple\'] = { \'depth\': 0, \'headerID\': \'tag-simple-header\' };
    menuArray[\'TagMenuSimple\'][\'elements\'] = {};
    menuArray[\'TagMenuSimple\'][\'elements\'][\'add-child-tag-simple\'] = { \'url\': "/index.php/tags/add/%tagID%" };';
}
unset( $if_cond );
// if ends

$text .= '</script>
<div class="popupmenu" id="TagMenu">
    <div class="popupmenuheader"><h3 id="tag-header">XXX</h3>
        <div class="break"></div>
    </div>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <a id="add-child-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Créer un mot clé enfant</a>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_edit_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_edit_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <a id="edit-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Modifier le mot clé</a>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_delete_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_delete_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <a id="delete-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Supprimer le mot clé</a>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_merge_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_merge_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <a id="merge-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Fusionner le mot clé</a>
    ';
}
unset( $if_cond );
// if ends

$text .= '    <hr />
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_synonym_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <a id="add-synonym-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Ajouter un synonyme</a>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_make_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_make_synonym_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <a id="make-synonym-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Convertir en synonyme</a>
    ';
}
unset( $if_cond );
// if ends

$text .= '</div>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="popupmenu" id="TagMenuSimple">
        <div class="popupmenuheader"><h3 id="tag-simple-header">XXX</h3>
            <div class="break"></div>
        </div>
        <a id="add-child-tag-simple" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenuSimple\' )">Créer un mot clé enfant</a>
    </div>';
}
unset( $if_cond );
// if ends

// undef all
$tpl->unsetLocalVariables();

$setArray = $oldSetArray_552008459d23e37ebe6970cbf8bb4be6;
$tpl->Level--;
?>
