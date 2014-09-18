<?php
// URI:       design:class/datatype/view/ezxmltext.tpl
// Filename:  design/standard/templates/class/datatype/view/ezxmltext.tpl
// Timestamp: 1342179298 (Fri Jul 13 13:34:58 CEST 2012)
$oldSetArray_3c66388b5c84f15f959104f879709a6d = isset( $setArray ) ? $setArray : array();
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
<div class="block">
    <label>Nombre optimal de lignes:</label>
    <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_int1' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
</div>

<div class="block">
    <label>Ensemble de balise:</label>
    ';
// def $tag_preset_list
if ( $tpl->hasVariable( 'tag_preset_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tag_preset_list' is already defined.", array (
  0 => 
  array (
    0 => 9,
    1 => 4,
    2 => 322,
  ),
  1 => 
  array (
    0 => 9,
    1 => 76,
    2 => 394,
  ),
  2 => 'design/standard/templates/class/datatype/view/ezxmltext.tpl',
) );
    $tpl->setVariable( 'tag_preset_list', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tag_preset_list', array (
), $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_text2' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag_preset_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag_preset_list'] : null;
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'data_text2' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = compiledFetchAttribute( $if_cond3, $if_cond5 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = isset( $if_cond3 );unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag_preset_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag_preset_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_attribute'] : null;
$var3 = compiledFetchAttribute( $var2, 'data_text2' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
    ';
}
else
{
$text .= '        <p>Par défaut</p>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $tag_preset_list
$tpl->unsetLocalVariable( 'tag_preset_list', $rootNamespace );

$text .= '</div>

';

$setArray = $oldSetArray_3c66388b5c84f15f959104f879709a6d;
$tpl->Level--;
?>
