<?php
// URI:       design:content/datatype/view/ezxmltext.tpl
// Filename:  design/standard/templates/content/datatype/view/ezxmltext.tpl
// Timestamp: 1342179294 (Fri Jul 13 13:34:54 CEST 2012)
$oldSetArray_cdf79c45a50fe9d94fe0f80052f4917e = isset( $setArray ) ? $setArray : array();
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
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'output' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'output_text' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );


$setArray = $oldSetArray_cdf79c45a50fe9d94fe0f80052f4917e;
$tpl->Level--;
?>
