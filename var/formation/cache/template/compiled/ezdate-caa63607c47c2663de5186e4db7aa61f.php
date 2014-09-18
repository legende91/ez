<?php
// URI:       design:class/datatype/view/ezdate.tpl
// Filename:  design/standard/templates/class/datatype/view/ezdate.tpl
// Timestamp: 1342179298 (Fri Jul 13 13:34:58 CEST 2012)
$oldSetArray_8df352ac4fa15c38e75fdb3e458fe326 = isset( $setArray ) ? $setArray : array();
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
    <label>Valeur par défaut:</label>
    <p>
    ';
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
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        Date actuelle
    ';
}
else
{
$text .= '        <i>Vide</i>
    ';
}
unset( $if_cond );
// if ends

$text .= '    </p>
</div>
';

$setArray = $oldSetArray_8df352ac4fa15c38e75fdb3e458fe326;
$tpl->Level--;
?>
