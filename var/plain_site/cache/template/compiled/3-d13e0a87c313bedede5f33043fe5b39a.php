<?php
// URI:       design:error/kernel/3.tpl
// Filename:  design/admin2/templates/error/kernel/3.tpl
// Timestamp: 1342179298 (Fri Jul 13 13:34:58 CEST 2012)
$oldSetArray_9ee5f232d5a14317efe8041181ce0329 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="message-error">
<h2>La page demandée n\'a pu être affichée. (3)</h2>
<p>L\'objet demandé n\'est pas disponible.</p>
<p>Raisons possibles:</p>
<ul>
    <li>L\'identifiant de l\'objet est incorrect. Vérifiez que vous n\'ayez pas fait d\'erreur dans l\'URL.</li>
    <li>L\'objet demandé n\'est plus disponible.</li>
</ul>
</div>

';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'embed_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['embed_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'embed_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['embed_content'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_9ee5f232d5a14317efe8041181ce0329;
$tpl->Level--;
?>
