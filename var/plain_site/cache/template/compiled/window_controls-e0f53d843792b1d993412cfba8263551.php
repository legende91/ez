<?php
// URI:       design/admin2/templates/class/window_controls.tpl
// Filename:  design/admin2/templates/class/window_controls.tpl
// Timestamp: 1342179294 (Fri Jul 13 13:34:54 CEST 2012)
$oldSetArray_f84e0a7be85b96720e162fc9a888c7fc = isset( $setArray ) ? $setArray : array();
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
<div class="menu-block">
<ul>

    
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_class_groups" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_class_groups/0" title="Masquer les classes de groupes.">Groupes de classes</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_class_groups/1" title="Afficher les groupes de classes.">Groupes de classes</a>
    </div></div></div></div>
    </li>
    ';
}
unset( $if_cond );
// if ends

$text .= '
    
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_class_temlates" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_class_temlates/0" title="Masquer les surcharges de templates.">Surcharger les templates</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_class_temlates/1" title="Afficher les surcharges de templates.">Surcharger les templates</a>
    </div></div></div></div>
    </li>
    ';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$if_cond1 = isset( $if_cond1['result'] ) ? $if_cond1['result'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_class_translations" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_class_translations/0" title="Masquer les traductions disponibles.">Traductions</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_class_translations/1" title="Afficher les traductions disponibles.">Traductions</a>
    </div></div></div></div>
    </li>
    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '
</ul>

<div class="break"></div>

</div>
';

$setArray = $oldSetArray_f84e0a7be85b96720e162fc9a888c7fc;
$tpl->Level--;
?>
