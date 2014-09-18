<?php
// URI:       design/admin/override/templates/window_controls_user.tpl
// Filename:  design/admin/override/templates/window_controls_user.tpl
// Timestamp: 1342179298 (Fri Jul 13 13:34:58 CEST 2012)
$oldSetArray_593f5a5dffe5a265fc8a39ee54ec9bda = isset( $setArray ) ? $setArray : array();
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
<div class="context-user">
<div class="menu-block">
<ul>
    
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_content" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_content/0" title="Cacher la prévisualisation du contenu.">Prévisualisation</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_content/1" title="Afficher la prévisualisation du contenu.">Prévisualisation</a>
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
$if_cond = eZPreferences::value( "admin_navigation_details" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_details/0" title="Cacher les détails.">Détails</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_details/1" title="Afficher les détails.">Détails</a>
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
$if_cond = eZPreferences::value( "admin_navigation_translations" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_translations/0" title="Cacher les traductions disponibles.">Traductions</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_translations/1" title="Afficher les traductions disponibles.">Traductions</a>
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
$if_cond = eZPreferences::value( "admin_navigation_locations" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_locations/0" title="Cacher la supervision des emplacements.">Emplacements</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_locations/1" title="Afficher les emplacements.">Emplacements</a>
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
$if_cond = eZPreferences::value( "admin_navigation_relations" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_relations/0" title="Cacher la supervision des relations.">Relations</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_relations/1" title="Afficher les relations.">Relations</a>
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
$if_cond = eZPreferences::value( "admin_navigation_roles" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_roles/0" title="Cacher la supervision des rôles.">Rôles</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_roles/1" title="Afficher les rôles.">Rôles</a>
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
$if_cond = eZPreferences::value( "admin_navigation_policies" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li class="enabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_policies/0" title="Cacher la supervision des politiques de sécurité.">Politiques de sécurité</a>
    </div></div></div></div>
    </li>
    ';
}
else
{
$text .= '    <li class="disabled">
    <div class="button-bc"><div class="button-tl"><div class="button-tr"><div class="button-br">
        <a href="/index.php/user/preferences/set/admin_navigation_policies/1" title="Afficher la présentation des politiques de sécurité.">Politiques de sécurité</a>
    </div></div></div></div>
    </li>
    ';
}
unset( $if_cond );
// if ends

$text .= '</ul>

<div class="break"></div>

</div>
</div>
';

$setArray = $oldSetArray_593f5a5dffe5a265fc8a39ee54ec9bda;
$tpl->Level--;
?>
