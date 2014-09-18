<?php
// URI:       design/admin2/templates/page_topmenu.tpl
// Filename:  design/admin2/templates/page_topmenu.tpl
// Timestamp: 1342179294 (Fri Jul 13 13:34:54 CEST 2012)
$oldSetArray_f9bbcc10c1b7e2fc2ccf01220a61dda5 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="header-topmenu">
<ul>';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) ) $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_5 = array();
$fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_5[] = compact( 'fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_key_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_val_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_5', 'fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_5' );
unset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 );
if (! isset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) ) $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 = NULL;
while ( is_object( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) and method_exists( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5, 'templateValue' ) )
    $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5->templateValue();
$fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5Data = array( 'value' => $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 );
$tpl->processOperator( 'topmenu',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'ui_context',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 7,
      1 => true,
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5Data, false, false );
$fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5Data['value'];
unset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5Data );
if (! isset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) ) $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 = NULL;
while ( is_object( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) and method_exists( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5, 'templateValue' ) )
    $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5->templateValue();

$fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_5 = is_array( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) ? array_keys( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) : array();
$fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 = count( $fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_5 );
$fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_5 = 0;
$fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5 = 0;
$fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 - $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5;
$fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_5 = false;
if ( $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5 < 0 || $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5 >= $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 )
{
    $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5 = ( $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5 < 0 ) ? 0 : $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5;
    if ( $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 || $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5'. Array count: $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5");   
}
}
if ( $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5 < 0 || $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5 + $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5 > $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 )
{
    if ( $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5");
    $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 - $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5;
}
if ( $fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_5 )
{
    $fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 - 1 - $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5;
    $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_5  = 0;
}
else
{
    $fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5;
    $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_5  = $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 - 1;
}
// foreach
for ( $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_5; $fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_5 < $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5 && ( $fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_5 ? $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_5 >= $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_5 : $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_5 <= $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_5 ); $fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_5 ? $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_5-- : $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_5++ )
{
$fe_key_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_5[$fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_5];
$fe_val_53e2e0e94e1dcbc3e69ce31b1865d157_5 = $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5[$fe_key_53e2e0e94e1dcbc3e69ce31b1865d157_5];
$vars[$rootNamespace]['menu'] = $fe_val_53e2e0e94e1dcbc3e69ce31b1865d157_5;
$text .= '    ';
$oldRestoreIncludeArray_a328259af5391a32a1496a3e38dce879 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['menu_item'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'menu_item', $vars[$currentNamespace]['menu_item'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['menu_item'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'menu_item', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['menu_item'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['navigationpart_identifier'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'navigationpart_identifier', $vars[$currentNamespace]['navigationpart_identifier'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['navigationpart_identifier'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'navigationpart_identifier', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['navigationpart_identifier'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/formation/cache/template/compiled/page_topmenuitem-884512c18daba97bfc8ed59a018008ff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_topmenuitem.tpl' );
include( '' . 'var/formation/cache/template/compiled/page_topmenuitem-884512c18daba97bfc8ed59a018008ff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/page_topmenuitem.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_a328259af5391a32a1496a3e38dce879;

$fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) ) extract( array_pop( $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_5 ) );

else
{

unset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_key_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_val_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

unset( $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_5 );

}

// foreach ends
$text .= '</ul>
</div>

<script type="text/javascript">

jQuery( \'#header-topmenu ul li\' ).click(function(){ jQuery(this).addClass(\'active\'); });

</script>
';

$setArray = $oldSetArray_f9bbcc10c1b7e2fc2ccf01220a61dda5;
$tpl->Level--;
?>
