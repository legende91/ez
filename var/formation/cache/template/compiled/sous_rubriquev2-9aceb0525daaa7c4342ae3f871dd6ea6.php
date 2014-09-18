<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/formation/design/formation/override/templates/full/sous_rubriquev2.tpl
// Timestamp: 1410869817 (Tue Sep 16 14:16:57 CEST 2014)
$oldSetArray_efd911668d36d883d8c1251226dfc155 = isset( $setArray ) ? $setArray : array();
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
// def $sous_rubrics
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
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
    'class_filter_array' => array( "articlev2" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sous_rubrics', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sous_rubrics' is already defined.", array (
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
    2 => 222,
  ),
  2 => 'extension/formation/design/formation/override/templates/full/sous_rubriquev2.tpl',
) );
    $tpl->setVariable( 'sous_rubrics', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sous_rubrics', $var, $rootNamespace );
}

$text .= '

        <div>
            <ul>
                ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_673afec87b68f92ebf8cca7848f125b7_1 ) ) $fe_variable_stack_673afec87b68f92ebf8cca7848f125b7_1 = array();
$fe_variable_stack_673afec87b68f92ebf8cca7848f125b7_1[] = compact( 'fe_array_673afec87b68f92ebf8cca7848f125b7_1', 'fe_array_keys_673afec87b68f92ebf8cca7848f125b7_1', 'fe_n_items_673afec87b68f92ebf8cca7848f125b7_1', 'fe_n_items_processed_673afec87b68f92ebf8cca7848f125b7_1', 'fe_i_673afec87b68f92ebf8cca7848f125b7_1', 'fe_key_673afec87b68f92ebf8cca7848f125b7_1', 'fe_val_673afec87b68f92ebf8cca7848f125b7_1', 'fe_offset_673afec87b68f92ebf8cca7848f125b7_1', 'fe_max_673afec87b68f92ebf8cca7848f125b7_1', 'fe_reverse_673afec87b68f92ebf8cca7848f125b7_1', 'fe_first_val_673afec87b68f92ebf8cca7848f125b7_1', 'fe_last_val_673afec87b68f92ebf8cca7848f125b7_1' );
unset( $fe_array_673afec87b68f92ebf8cca7848f125b7_1 );
unset( $fe_array_673afec87b68f92ebf8cca7848f125b7_1 );
$fe_array_673afec87b68f92ebf8cca7848f125b7_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sous_rubrics', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sous_rubrics'] : null;
if (! isset( $fe_array_673afec87b68f92ebf8cca7848f125b7_1 ) ) $fe_array_673afec87b68f92ebf8cca7848f125b7_1 = NULL;
while ( is_object( $fe_array_673afec87b68f92ebf8cca7848f125b7_1 ) and method_exists( $fe_array_673afec87b68f92ebf8cca7848f125b7_1, 'templateValue' ) )
    $fe_array_673afec87b68f92ebf8cca7848f125b7_1 = $fe_array_673afec87b68f92ebf8cca7848f125b7_1->templateValue();

$fe_array_keys_673afec87b68f92ebf8cca7848f125b7_1 = is_array( $fe_array_673afec87b68f92ebf8cca7848f125b7_1 ) ? array_keys( $fe_array_673afec87b68f92ebf8cca7848f125b7_1 ) : array();
$fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 = count( $fe_array_keys_673afec87b68f92ebf8cca7848f125b7_1 );
$fe_n_items_processed_673afec87b68f92ebf8cca7848f125b7_1 = 0;
$fe_offset_673afec87b68f92ebf8cca7848f125b7_1 = 0;
$fe_max_673afec87b68f92ebf8cca7848f125b7_1 = $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 - $fe_offset_673afec87b68f92ebf8cca7848f125b7_1;
$fe_reverse_673afec87b68f92ebf8cca7848f125b7_1 = false;
if ( $fe_offset_673afec87b68f92ebf8cca7848f125b7_1 < 0 || $fe_offset_673afec87b68f92ebf8cca7848f125b7_1 >= $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 )
{
    $fe_offset_673afec87b68f92ebf8cca7848f125b7_1 = ( $fe_offset_673afec87b68f92ebf8cca7848f125b7_1 < 0 ) ? 0 : $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1;
    if ( $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 || $fe_offset_673afec87b68f92ebf8cca7848f125b7_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_673afec87b68f92ebf8cca7848f125b7_1'. Array count: $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1");   
}
}
if ( $fe_max_673afec87b68f92ebf8cca7848f125b7_1 < 0 || $fe_offset_673afec87b68f92ebf8cca7848f125b7_1 + $fe_max_673afec87b68f92ebf8cca7848f125b7_1 > $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 )
{
    if ( $fe_max_673afec87b68f92ebf8cca7848f125b7_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_673afec87b68f92ebf8cca7848f125b7_1");
    $fe_max_673afec87b68f92ebf8cca7848f125b7_1 = $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 - $fe_offset_673afec87b68f92ebf8cca7848f125b7_1;
}
if ( $fe_reverse_673afec87b68f92ebf8cca7848f125b7_1 )
{
    $fe_first_val_673afec87b68f92ebf8cca7848f125b7_1 = $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 - 1 - $fe_offset_673afec87b68f92ebf8cca7848f125b7_1;
    $fe_last_val_673afec87b68f92ebf8cca7848f125b7_1  = 0;
}
else
{
    $fe_first_val_673afec87b68f92ebf8cca7848f125b7_1 = $fe_offset_673afec87b68f92ebf8cca7848f125b7_1;
    $fe_last_val_673afec87b68f92ebf8cca7848f125b7_1  = $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 - 1;
}
// foreach
for ( $fe_i_673afec87b68f92ebf8cca7848f125b7_1 = $fe_first_val_673afec87b68f92ebf8cca7848f125b7_1; $fe_n_items_processed_673afec87b68f92ebf8cca7848f125b7_1 < $fe_max_673afec87b68f92ebf8cca7848f125b7_1 && ( $fe_reverse_673afec87b68f92ebf8cca7848f125b7_1 ? $fe_i_673afec87b68f92ebf8cca7848f125b7_1 >= $fe_last_val_673afec87b68f92ebf8cca7848f125b7_1 : $fe_i_673afec87b68f92ebf8cca7848f125b7_1 <= $fe_last_val_673afec87b68f92ebf8cca7848f125b7_1 ); $fe_reverse_673afec87b68f92ebf8cca7848f125b7_1 ? $fe_i_673afec87b68f92ebf8cca7848f125b7_1-- : $fe_i_673afec87b68f92ebf8cca7848f125b7_1++ )
{
$fe_key_673afec87b68f92ebf8cca7848f125b7_1 = $fe_array_keys_673afec87b68f92ebf8cca7848f125b7_1[$fe_i_673afec87b68f92ebf8cca7848f125b7_1];
$fe_val_673afec87b68f92ebf8cca7848f125b7_1 = $fe_array_673afec87b68f92ebf8cca7848f125b7_1[$fe_key_673afec87b68f92ebf8cca7848f125b7_1];
$vars[$rootNamespace]['rubric'] = $fe_val_673afec87b68f92ebf8cca7848f125b7_1;
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
$fe_n_items_processed_673afec87b68f92ebf8cca7848f125b7_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_673afec87b68f92ebf8cca7848f125b7_1 ) ) extract( array_pop( $fe_variable_stack_673afec87b68f92ebf8cca7848f125b7_1 ) );

else
{

unset( $fe_array_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_array_keys_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_n_items_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_n_items_processed_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_i_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_key_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_val_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_offset_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_max_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_reverse_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_first_val_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_last_val_673afec87b68f92ebf8cca7848f125b7_1 );

unset( $fe_variable_stack_673afec87b68f92ebf8cca7848f125b7_1 );

}

// foreach ends
$text .= '            </ul>
        </div>
';

$setArray = $oldSetArray_efd911668d36d883d8c1251226dfc155;
$tpl->Level--;
?>
