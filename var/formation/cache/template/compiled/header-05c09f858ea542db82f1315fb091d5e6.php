<?php
// URI:       extension/formation/design/formation/templates/includes/header.tpl
// Filename:  extension/formation/design/formation/templates/includes/header.tpl
// Timestamp: 1410794709 (Mon Sep 15 17:25:09 CEST 2014)
$oldSetArray_8f38c7284264f79240737894a5975aeb = isset( $setArray ) ? $setArray : array();
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

$text .= '        ';
// def $rubrics
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => 2,
    'sort_by' => array( "priority",
       true ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "rubrique" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'rubrics', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'rubrics' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 8,
    2 => 9,
  ),
  1 => 
  array (
    0 => 9,
    1 => 8,
    2 => 204,
  ),
  2 => 'extension/formation/design/formation/templates/includes/header.tpl',
) );
    $tpl->setVariable( 'rubrics', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'rubrics', $var, $rootNamespace );
}

$text .= '
             <div>
            <ul>
                ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ) ) $fe_variable_stack_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = array();
$fe_variable_stack_d5c33ef7be2d422dc28d6b0f4d2232ad_3[] = compact( 'fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_array_keys_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_n_items_processed_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_i_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_key_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_reverse_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_first_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3', 'fe_last_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3' );
unset( $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );
unset( $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );
$fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rubrics', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rubrics'] : null;
if (! isset( $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ) ) $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = NULL;
while ( is_object( $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ) and method_exists( $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3, 'templateValue' ) )
    $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3->templateValue();

$fe_array_keys_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = is_array( $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ) ? array_keys( $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ) : array();
$fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = count( $fe_array_keys_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );
$fe_n_items_processed_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = 0;
$fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = 0;
$fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 - $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3;
$fe_reverse_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = false;
if ( $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3 < 0 || $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3 >= $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 )
{
    $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = ( $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3 < 0 ) ? 0 : $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3;
    if ( $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 || $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3'. Array count: $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3");   
}
}
if ( $fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3 < 0 || $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3 + $fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3 > $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 )
{
    if ( $fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3");
    $fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 - $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3;
}
if ( $fe_reverse_d5c33ef7be2d422dc28d6b0f4d2232ad_3 )
{
    $fe_first_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 - 1 - $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3;
    $fe_last_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3  = 0;
}
else
{
    $fe_first_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3;
    $fe_last_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3  = $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 - 1;
}
// foreach
for ( $fe_i_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = $fe_first_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3; $fe_n_items_processed_d5c33ef7be2d422dc28d6b0f4d2232ad_3 < $fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3 && ( $fe_reverse_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ? $fe_i_d5c33ef7be2d422dc28d6b0f4d2232ad_3 >= $fe_last_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3 : $fe_i_d5c33ef7be2d422dc28d6b0f4d2232ad_3 <= $fe_last_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ); $fe_reverse_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ? $fe_i_d5c33ef7be2d422dc28d6b0f4d2232ad_3-- : $fe_i_d5c33ef7be2d422dc28d6b0f4d2232ad_3++ )
{
$fe_key_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = $fe_array_keys_d5c33ef7be2d422dc28d6b0f4d2232ad_3[$fe_i_d5c33ef7be2d422dc28d6b0f4d2232ad_3];
$fe_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3 = $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3[$fe_key_d5c33ef7be2d422dc28d6b0f4d2232ad_3];
$vars[$rootNamespace]['rubric'] = $fe_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3;
$text .= '                    <li>
                        <a href="/index.php/';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rubric', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rubric'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
                            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rubric', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rubric'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
                        </a>
                        
                ';
$fe_n_items_processed_d5c33ef7be2d422dc28d6b0f4d2232ad_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ) ) extract( array_pop( $fe_variable_stack_d5c33ef7be2d422dc28d6b0f4d2232ad_3 ) );

else
{

unset( $fe_array_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_array_keys_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_n_items_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_n_items_processed_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_i_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_key_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_offset_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_max_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_reverse_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_first_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_last_val_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

unset( $fe_variable_stack_d5c33ef7be2d422dc28d6b0f4d2232ad_3 );

}

// foreach ends
$text .= '            </ul>
        </div>';

$setArray = $oldSetArray_8f38c7284264f79240737894a5975aeb;
$tpl->Level--;
?>
