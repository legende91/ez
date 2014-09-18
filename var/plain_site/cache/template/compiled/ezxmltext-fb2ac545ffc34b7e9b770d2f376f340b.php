<?php
// URI:       design:class/datatype/edit/ezxmltext.tpl
// Filename:  design/standard/templates/class/datatype/edit/ezxmltext.tpl
// Timestamp: 1342179298 (Fri Jul 13 13:34:58 CEST 2012)
$oldSetArray_88981054b251f1a2ac7e704c67425720 = isset( $setArray ) ? $setArray : array();
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

$text .= '
<div class="block">
   <div class="element">
    <label>Nombre optimal de lignes:</label>
    <select name="ContentClass_ezxmltext_cols_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <option value="2"  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_int1' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 2 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>2</option>
        <option value="5"  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_int1' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 5 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>5</option>
        <option value="10" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_int1' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 10 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>10</option>
        <option value="15" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_int1' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 15 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>15</option>
        <option value="20" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_int1' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 20 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>20</option>
        <option value="25" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_int1' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 25 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>25</option>
    </select>
    </div>

    <div class="element">
    <label>Ensemble de balise:</label>
    <select name="ContentClass_ezxmltext_tagpreset_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
// def $tag_preset_list
if ( $tpl->hasVariable( 'tag_preset_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tag_preset_list' is already defined.", array (
  0 => 
  array (
    0 => 18,
    1 => 4,
    2 => 1104,
  ),
  1 => 
  array (
    0 => 18,
    1 => 76,
    2 => 1176,
  ),
  2 => 'design/standard/templates/class/datatype/edit/ezxmltext.tpl',
) );
    $tpl->setVariable( 'tag_preset_list', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tag_preset_list', array (
), $rootNamespace );
}

$text .= '        <option value="">Par défaut</option>
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_88ea00a73e793b83f839953e6eacb8a7_1 ) ) $fe_variable_stack_88ea00a73e793b83f839953e6eacb8a7_1 = array();
$fe_variable_stack_88ea00a73e793b83f839953e6eacb8a7_1[] = compact( 'fe_array_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_array_keys_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_n_items_processed_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_i_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_key_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_val_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_offset_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_max_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_reverse_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_first_val_88ea00a73e793b83f839953e6eacb8a7_1', 'fe_last_val_88ea00a73e793b83f839953e6eacb8a7_1' );
unset( $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 );
unset( $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 );
$fe_array_88ea00a73e793b83f839953e6eacb8a7_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag_preset_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag_preset_list'] : null;
if (! isset( $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 ) ) $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 = NULL;
while ( is_object( $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 ) and method_exists( $fe_array_88ea00a73e793b83f839953e6eacb8a7_1, 'templateValue' ) )
    $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 = $fe_array_88ea00a73e793b83f839953e6eacb8a7_1->templateValue();

$fe_array_keys_88ea00a73e793b83f839953e6eacb8a7_1 = is_array( $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 ) ? array_keys( $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 ) : array();
$fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 = count( $fe_array_keys_88ea00a73e793b83f839953e6eacb8a7_1 );
$fe_n_items_processed_88ea00a73e793b83f839953e6eacb8a7_1 = 0;
$fe_offset_88ea00a73e793b83f839953e6eacb8a7_1 = 0;
$fe_max_88ea00a73e793b83f839953e6eacb8a7_1 = $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 - $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1;
$fe_reverse_88ea00a73e793b83f839953e6eacb8a7_1 = false;
if ( $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1 < 0 || $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1 >= $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 )
{
    $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1 = ( $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1 < 0 ) ? 0 : $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1;
    if ( $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 || $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_88ea00a73e793b83f839953e6eacb8a7_1'. Array count: $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1");   
}
}
if ( $fe_max_88ea00a73e793b83f839953e6eacb8a7_1 < 0 || $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1 + $fe_max_88ea00a73e793b83f839953e6eacb8a7_1 > $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 )
{
    if ( $fe_max_88ea00a73e793b83f839953e6eacb8a7_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_88ea00a73e793b83f839953e6eacb8a7_1");
    $fe_max_88ea00a73e793b83f839953e6eacb8a7_1 = $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 - $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1;
}
if ( $fe_reverse_88ea00a73e793b83f839953e6eacb8a7_1 )
{
    $fe_first_val_88ea00a73e793b83f839953e6eacb8a7_1 = $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 - 1 - $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1;
    $fe_last_val_88ea00a73e793b83f839953e6eacb8a7_1  = 0;
}
else
{
    $fe_first_val_88ea00a73e793b83f839953e6eacb8a7_1 = $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1;
    $fe_last_val_88ea00a73e793b83f839953e6eacb8a7_1  = $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 - 1;
}
// foreach
for ( $fe_i_88ea00a73e793b83f839953e6eacb8a7_1 = $fe_first_val_88ea00a73e793b83f839953e6eacb8a7_1; $fe_n_items_processed_88ea00a73e793b83f839953e6eacb8a7_1 < $fe_max_88ea00a73e793b83f839953e6eacb8a7_1 && ( $fe_reverse_88ea00a73e793b83f839953e6eacb8a7_1 ? $fe_i_88ea00a73e793b83f839953e6eacb8a7_1 >= $fe_last_val_88ea00a73e793b83f839953e6eacb8a7_1 : $fe_i_88ea00a73e793b83f839953e6eacb8a7_1 <= $fe_last_val_88ea00a73e793b83f839953e6eacb8a7_1 ); $fe_reverse_88ea00a73e793b83f839953e6eacb8a7_1 ? $fe_i_88ea00a73e793b83f839953e6eacb8a7_1-- : $fe_i_88ea00a73e793b83f839953e6eacb8a7_1++ )
{
$fe_key_88ea00a73e793b83f839953e6eacb8a7_1 = $fe_array_keys_88ea00a73e793b83f839953e6eacb8a7_1[$fe_i_88ea00a73e793b83f839953e6eacb8a7_1];
$fe_val_88ea00a73e793b83f839953e6eacb8a7_1 = $fe_array_88ea00a73e793b83f839953e6eacb8a7_1[$fe_key_88ea00a73e793b83f839953e6eacb8a7_1];
$vars[$rootNamespace]['presetName'] = $fe_val_88ea00a73e793b83f839953e6eacb8a7_1;
$vars[$rootNamespace]['presetKey'] = $fe_key_88ea00a73e793b83f839953e6eacb8a7_1;
$text .= '            <option value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'presetKey', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['presetKey'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'presetKey', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['presetKey'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_text2' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'presetName', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['presetName'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
        ';
$fe_n_items_processed_88ea00a73e793b83f839953e6eacb8a7_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_88ea00a73e793b83f839953e6eacb8a7_1 ) ) extract( array_pop( $fe_variable_stack_88ea00a73e793b83f839953e6eacb8a7_1 ) );

else
{

unset( $fe_array_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_array_keys_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_n_items_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_n_items_processed_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_i_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_key_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_val_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_offset_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_max_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_reverse_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_first_val_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_last_val_88ea00a73e793b83f839953e6eacb8a7_1 );

unset( $fe_variable_stack_88ea00a73e793b83f839953e6eacb8a7_1 );

}

// foreach ends
$text .= '    ';
// undef $tag_preset_list
$tpl->unsetLocalVariable( 'tag_preset_list', $rootNamespace );

$text .= '    </select>
    </div>
</div>';

$setArray = $oldSetArray_88981054b251f1a2ac7e704c67425720;
$tpl->Level--;
?>
