<?php
// URI:       design:settings/view.tpl
// Filename:  design/admin2/templates/settings/view.tpl
// Timestamp: 1342179294 (Fri Jul 13 13:34:54 CEST 2012)
$oldSetArray_e3ba877b5b01e2bdb43b66124c326ddb = isset( $setArray ) ? $setArray : array();
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
<form method="post" action="/index.php/settings/view">

<div class="box-header">
<h1 class="context-title">Voir les paramètres</h1>

<div class="header-mainline"></div>

</div>

<div class="box-content">
<div class="context-attributes">

<div class="object">';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['settings'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<p>Utilisation du siteaccess: <strong>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_siteaccess'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</strong></p>
<p>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_file'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block_count'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'setting_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['setting_count'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var2 = array( '%ini_file' => $var3, '%blocks' => $var4, '%setting_count' => $var5 );unset( $var3, $var4, $var5 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( '%ini_file comporte %blocks section(s) et %setting_count paramètre(s) différent(s)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>';
}
else
{

unset( $show );

$text .= '<p>Veuillez sélectionné un fichier INI dans la liste déroulante ci-dessous</p>';
}

$text .= '<br />
<div class="block">
    <label>Sélectionnez le fichier ini à visualiser:&nbsp;
    <select name="selectedINIFile">
        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_files', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_files'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Files'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Files', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Files'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'item' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_file'] : null;
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
$text .= '                <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Files', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Files'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" selected="selected">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Files', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Files'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
            ';
}
else
{
$text .= '                <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Files', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Files'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Files', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Files'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '    </select></label>
    <label>Sélectionner le siteaccess:&nbsp;
    <select name="CurrentSiteAccess">
        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteaccess_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteaccess_list'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'SiteAccess';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_siteaccess'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
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
$text .= '                <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" selected="selected">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
            ';
}
else
{
$text .= '                <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '    </select></label>
</div>
</div>

</div>
</div>

<div class="controlbar">

<div class="block">
    <input class="button" type="submit" name="ChangeINIFile" value="Sélectionner" />
</div>

</div>

</form>


<br />
';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['settings'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '
<form method="post" action=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_siteaccess'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_file'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var1 = ( 'settings/view/' . $var3 . '/' . $var5 );
unset( $var3, $var5 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>



<div class="box-header"><div class="box-ml">
<h1 class="context-title">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_file'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_siteaccess'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = array( '%inifile' => $var3, '%siteaccess' => $var4 );unset( $var3, $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Paramètres pour %inifile dans le siteaccess %siteaccess', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h1>

<div class="header-subline"></div>

</div></div>

<div class="box-ml"><div class="box-mr"><div class="box-content">
<div class="context-attributes">

    <table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['settings'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Blocks'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        <tr>
        <th class="tight">&nbsp;</th>
            <th width="50%">
            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Blocks'] : null;
$var1 = compiledFetchAttribute( $var, 'key' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' (';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Blocks'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ')&nbsp;&nbsp;&nbsp;
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Blocks'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'editable' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                 <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_siteaccess'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_file'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Blocks'] : null;
$var8 = compiledFetchAttribute( $var7, 'key' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var1 = ( '/settings/edit/' . $var3 . '/' . $var5 . '/' . $var7 );
unset( $var3, $var5, $var7 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>[ajouter paramètre]</a>
            ';
}
unset( $if_cond );
// if ends

$text .= '            </th>
        <th class="tight">
            Emplacement
        </th>
            <th width="50%">
                Valeur
            </th>
            <th class="tight">&nbsp;</th>
    </tr>
    ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Blocks'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'item' );
unset( $loopItem );
$loopItem = $loopItem1;
$loopItem1 = compiledFetchAttribute( $loopItem, 'content' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bgdark',
  1 => 'bglight',
);
if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Settings'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Settings'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '        <tr valign="top" class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
            <td width="1">
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'removeable' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <input type="checkbox" name="RemoveSettingsArray[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Blocks'] : null;
$var1 = compiledFetchAttribute( $var, 'key' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ':';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$var2 = compiledFetchAttribute( $var1, 'key' );
unset( $var1 );
$var1 = $var2;
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

$text .= '"/>
            ';
}
else
{
$text .= '                <input type="checkbox" disabled="disabled" />
            ';
}
unset( $if_cond );
// if ends

$text .= '            </td>
            <td width="50%">
                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$var2 = compiledFetchAttribute( $var1, 'key' );
unset( $var1 );
$var1 = $var2;
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

$text .= '
            </td>
            <td width="1">
            ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$show2 = compiledFetchAttribute( $show1, 'item' );
unset( $show1 );
$show1 = $show2;
$show2 = compiledFetchAttribute( $show1, 'placement' );
unset( $show1 );
$show1 = $show2;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = ( ( $show1 ) == ( '' ) );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'item' );
unset( $loopItem );
$loopItem = $loopItem1;
$loopItem1 = compiledFetchAttribute( $loopItem, 'content' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Placements'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Placements', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Placements'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'placement' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '<br/>
                ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '            ';
}
else
{

unset( $show );

$text .= '                ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'placement' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
            ';
}

$text .= '            </td>
            <td width="50%">
                ';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '                ',
    3 => 
    array (
      0 => 
      array (
        0 => 118,
        1 => 48,
        2 => 4426,
      ),
      1 => 
      array (
        0 => 119,
        1 => 16,
        2 => 4443,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  1 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '                    ',
        3 => 
        array (
          0 => 
          array (
            0 => 119,
            1 => 34,
            2 => 4463,
          ),
          1 => 
          array (
            0 => 120,
            1 => 20,
            2 => 4484,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      1 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 2,
            1 => false,
            2 => '                    ',
            3 => 
            array (
              0 => 
              array (
                0 => 120,
                1 => 73,
                2 => 4539,
              ),
              1 => 
              array (
                0 => 121,
                1 => 20,
                2 => 4560,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
          1 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => 
              array (
                0 => 2,
                1 => false,
                2 => '                        <div class="array">[',
                3 => 
                array (
                  0 => 
                  array (
                    0 => 121,
                    1 => 70,
                    2 => 4612,
                  ),
                  1 => 
                  array (
                    0 => 122,
                    1 => 44,
                    2 => 4657,
                  ),
                  2 => 'design/admin2/templates/settings/view.tpl',
                ),
              ),
              1 => 
              array (
                0 => 3,
                1 => false,
                2 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'Placements',
                    ),
                    2 => false,
                  ),
                  1 => 
                  array (
                    0 => 5,
                    1 => 
                    array (
                      0 => 
                      array (
                        0 => 3,
                        1 => 'key',
                        2 => false,
                      ),
                    ),
                    2 => false,
                  ),
                ),
                3 => 
                array (
                  0 => 
                  array (
                    0 => 122,
                    1 => 44,
                    2 => 4658,
                  ),
                  1 => 
                  array (
                    0 => 122,
                    1 => 59,
                    2 => 4673,
                  ),
                  2 => 'design/admin2/templates/settings/view.tpl',
                ),
              ),
              2 => 
              array (
                0 => 2,
                1 => false,
                2 => '] ',
                3 => 
                array (
                  0 => 
                  array (
                    0 => 122,
                    1 => 59,
                    2 => 4674,
                  ),
                  1 => 
                  array (
                    0 => 122,
                    1 => 61,
                    2 => 4676,
                  ),
                  2 => 'design/admin2/templates/settings/view.tpl',
                ),
              ),
              3 => 
              array (
                0 => 3,
                1 => false,
                2 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'Placements',
                    ),
                    2 => false,
                  ),
                  1 => 
                  array (
                    0 => 5,
                    1 => 
                    array (
                      0 => 
                      array (
                        0 => 3,
                        1 => 'item',
                        2 => false,
                      ),
                    ),
                    2 => false,
                  ),
                  2 => 
                  array (
                    0 => 5,
                    1 => 
                    array (
                      0 => 
                      array (
                        0 => 3,
                        1 => 'content',
                        2 => false,
                      ),
                    ),
                    2 => false,
                  ),
                  3 => 
                  array (
                    0 => 6,
                    1 => 
                    array (
                      0 => 'wash',
                    ),
                    2 => false,
                  ),
                ),
                3 => 
                array (
                  0 => 
                  array (
                    0 => 122,
                    1 => 61,
                    2 => 4677,
                  ),
                  1 => 
                  array (
                    0 => 122,
                    1 => 90,
                    2 => 4706,
                  ),
                  2 => 'design/admin2/templates/settings/view.tpl',
                ),
              ),
              4 => 
              array (
                0 => 2,
                1 => false,
                2 => '</div>
                    ',
                3 => 
                array (
                  0 => 
                  array (
                    0 => 122,
                    1 => 90,
                    2 => 4707,
                  ),
                  1 => 
                  array (
                    0 => 123,
                    1 => 20,
                    2 => 4734,
                  ),
                  2 => 'design/admin2/templates/settings/view.tpl',
                ),
              ),
            ),
            2 => 'section',
            3 => 
            array (
              'var' => 
              array (
                0 => 
                array (
                  0 => 3,
                  1 => 'Placements',
                  2 => false,
                ),
              ),
              'loop' => 
              array (
                0 => 
                array (
                  0 => 4,
                  1 => 
                  array (
                    0 => '',
                    1 => 2,
                    2 => 'Settings',
                  ),
                  2 => false,
                ),
                1 => 
                array (
                  0 => 5,
                  1 => 
                  array (
                    0 => 
                    array (
                      0 => 3,
                      1 => 'item',
                      2 => false,
                    ),
                  ),
                  2 => false,
                ),
                2 => 
                array (
                  0 => 5,
                  1 => 
                  array (
                    0 => 
                    array (
                      0 => 3,
                      1 => 'content',
                      2 => false,
                    ),
                  ),
                  2 => false,
                ),
              ),
            ),
            4 => 
            array (
              0 => 
              array (
                0 => 121,
                1 => 20,
                2 => 4561,
              ),
              1 => 
              array (
                0 => 121,
                1 => 70,
                2 => 4611,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
          2 => 
          array (
            0 => 2,
            1 => false,
            2 => '                    ',
            3 => 
            array (
              0 => 
              array (
                0 => 123,
                1 => 27,
                2 => 4744,
              ),
              1 => 
              array (
                0 => 124,
                1 => 20,
                2 => 4765,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
        ),
        2 => 'section',
        3 => 
        array (
          'show' => 
          array (
            0 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'ne',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'Settings',
                    ),
                    2 => false,
                  ),
                  1 => 
                  array (
                    0 => 5,
                    1 => 
                    array (
                      0 => 
                      array (
                        0 => 3,
                        1 => 'item',
                        2 => false,
                      ),
                    ),
                    2 => false,
                  ),
                  2 => 
                  array (
                    0 => 5,
                    1 => 
                    array (
                      0 => 
                      array (
                        0 => 3,
                        1 => 'placement',
                        2 => false,
                      ),
                    ),
                    2 => false,
                  ),
                ),
                2 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'undefined',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 120,
            1 => 20,
            2 => 4485,
          ),
          1 => 
          array (
            0 => 120,
            1 => 73,
            2 => 4538,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '                ',
        3 => 
        array (
          0 => 
          array (
            0 => 124,
            1 => 27,
            2 => 4775,
          ),
          1 => 
          array (
            0 => 125,
            1 => 16,
            2 => 4792,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'array',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 119,
        1 => 16,
        2 => 4444,
      ),
      1 => 
      array (
        0 => 119,
        1 => 34,
        2 => 4462,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  2 => 
  array (
    0 => 2,
    1 => false,
    2 => '
                ',
    3 => 
    array (
      0 => 
      array (
        0 => 125,
        1 => 20,
        2 => 4799,
      ),
      1 => 
      array (
        0 => 127,
        1 => 16,
        2 => 4817,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  3 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '                    ',
        3 => 
        array (
          0 => 
          array (
            0 => 127,
            1 => 63,
            2 => 4866,
          ),
          1 => 
          array (
            0 => 128,
            1 => 20,
            2 => 4887,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      1 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 2,
            1 => false,
            2 => '                        <div class="enabled">',
            3 => 
            array (
              0 => 
              array (
                0 => 128,
                1 => 106,
                2 => 4975,
              ),
              1 => 
              array (
                0 => 129,
                1 => 45,
                2 => 5021,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
          1 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => '',
                  1 => 2,
                  2 => 'Settings',
                ),
                2 => false,
              ),
              1 => 
              array (
                0 => 5,
                1 => 
                array (
                  0 => 
                  array (
                    0 => 3,
                    1 => 'item',
                    2 => false,
                  ),
                ),
                2 => false,
              ),
              2 => 
              array (
                0 => 5,
                1 => 
                array (
                  0 => 
                  array (
                    0 => 3,
                    1 => 'content',
                    2 => false,
                  ),
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 129,
                1 => 45,
                2 => 5022,
              ),
              1 => 
              array (
                0 => 129,
                1 => 67,
                2 => 5044,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
          2 => 
          array (
            0 => 2,
            1 => false,
            2 => '</div>
                    ',
            3 => 
            array (
              0 => 
              array (
                0 => 129,
                1 => 67,
                2 => 5045,
              ),
              1 => 
              array (
                0 => 130,
                1 => 20,
                2 => 5072,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
          3 => 
          array (
            0 => 4,
            1 => false,
            2 => 'else',
            3 => 
            array (
            ),
            4 => 
            array (
              0 => 
              array (
                0 => 130,
                1 => 20,
                2 => 5073,
              ),
              1 => 
              array (
                0 => 130,
                1 => 24,
                2 => 5077,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
          4 => 
          array (
            0 => 2,
            1 => false,
            2 => '                        <div class="disabled">',
            3 => 
            array (
              0 => 
              array (
                0 => 130,
                1 => 24,
                2 => 5078,
              ),
              1 => 
              array (
                0 => 131,
                1 => 46,
                2 => 5125,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
          5 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => '',
                  1 => 2,
                  2 => 'Settings',
                ),
                2 => false,
              ),
              1 => 
              array (
                0 => 5,
                1 => 
                array (
                  0 => 
                  array (
                    0 => 3,
                    1 => 'item',
                    2 => false,
                  ),
                ),
                2 => false,
              ),
              2 => 
              array (
                0 => 5,
                1 => 
                array (
                  0 => 
                  array (
                    0 => 3,
                    1 => 'content',
                    2 => false,
                  ),
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 131,
                1 => 46,
                2 => 5126,
              ),
              1 => 
              array (
                0 => 131,
                1 => 68,
                2 => 5148,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
          6 => 
          array (
            0 => 2,
            1 => false,
            2 => '</div>
                    ',
            3 => 
            array (
              0 => 
              array (
                0 => 131,
                1 => 68,
                2 => 5149,
              ),
              1 => 
              array (
                0 => 132,
                1 => 20,
                2 => 5176,
              ),
              2 => 'design/admin2/templates/settings/view.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'or',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 6,
                    1 => 
                    array (
                      0 => 'eq',
                      1 => 
                      array (
                        0 => 
                        array (
                          0 => 4,
                          1 => 
                          array (
                            0 => '',
                            1 => 2,
                            2 => 'Settings',
                          ),
                          2 => false,
                        ),
                        1 => 
                        array (
                          0 => 5,
                          1 => 
                          array (
                            0 => 
                            array (
                              0 => 3,
                              1 => 'item',
                              2 => false,
                            ),
                          ),
                          2 => false,
                        ),
                        2 => 
                        array (
                          0 => 5,
                          1 => 
                          array (
                            0 => 
                            array (
                              0 => 3,
                              1 => 'content',
                              2 => false,
                            ),
                          ),
                          2 => false,
                        ),
                      ),
                      2 => 
                      array (
                        0 => 
                        array (
                          0 => 1,
                          1 => 'true',
                          2 => false,
                        ),
                      ),
                    ),
                    2 => false,
                  ),
                ),
                2 => 
                array (
                  0 => 
                  array (
                    0 => 6,
                    1 => 
                    array (
                      0 => 'eq',
                      1 => 
                      array (
                        0 => 
                        array (
                          0 => 4,
                          1 => 
                          array (
                            0 => '',
                            1 => 2,
                            2 => 'Settings',
                          ),
                          2 => false,
                        ),
                        1 => 
                        array (
                          0 => 5,
                          1 => 
                          array (
                            0 => 
                            array (
                              0 => 3,
                              1 => 'item',
                              2 => false,
                            ),
                          ),
                          2 => false,
                        ),
                        2 => 
                        array (
                          0 => 5,
                          1 => 
                          array (
                            0 => 
                            array (
                              0 => 3,
                              1 => 'content',
                              2 => false,
                            ),
                          ),
                          2 => false,
                        ),
                      ),
                      2 => 
                      array (
                        0 => 
                        array (
                          0 => 1,
                          1 => 'enabled',
                          2 => false,
                        ),
                      ),
                    ),
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 128,
            1 => 20,
            2 => 4888,
          ),
          1 => 
          array (
            0 => 128,
            1 => 106,
            2 => 4974,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '                ',
        3 => 
        array (
          0 => 
          array (
            0 => 132,
            1 => 22,
            2 => 5181,
          ),
          1 => 
          array (
            0 => 133,
            1 => 16,
            2 => 5198,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'in' => 
      array (
        0 => 
        array (
          0 => 6,
          1 => 
          array (
            0 => 'array',
            1 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => 'enable/disable',
                2 => false,
              ),
            ),
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => 'true/false',
                2 => false,
              ),
            ),
          ),
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 127,
        1 => 16,
        2 => 4818,
      ),
      1 => 
      array (
        0 => 127,
        1 => 63,
        2 => 4865,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '                ',
    3 => 
    array (
      0 => 
      array (
        0 => 133,
        1 => 20,
        2 => 5205,
      ),
      1 => 
      array (
        0 => 134,
        1 => 16,
        2 => 5222,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  5 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '                    <div class="string">"',
        3 => 
        array (
          0 => 
          array (
            0 => 134,
            1 => 35,
            2 => 5243,
          ),
          1 => 
          array (
            0 => 135,
            1 => 41,
            2 => 5285,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'Settings',
            ),
            2 => false,
          ),
          1 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'item',
                2 => false,
              ),
            ),
            2 => false,
          ),
          2 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'content',
                2 => false,
              ),
            ),
            2 => false,
          ),
          3 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'wash',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 135,
            1 => 41,
            2 => 5286,
          ),
          1 => 
          array (
            0 => 135,
            1 => 68,
            2 => 5313,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '"</div>
                ',
        3 => 
        array (
          0 => 
          array (
            0 => 135,
            1 => 68,
            2 => 5314,
          ),
          1 => 
          array (
            0 => 136,
            1 => 16,
            2 => 5338,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'string',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 134,
        1 => 16,
        2 => 5223,
      ),
      1 => 
      array (
        0 => 134,
        1 => 35,
        2 => 5242,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  6 => 
  array (
    0 => 2,
    1 => false,
    2 => '                ',
    3 => 
    array (
      0 => 
      array (
        0 => 136,
        1 => 20,
        2 => 5345,
      ),
      1 => 
      array (
        0 => 137,
        1 => 16,
        2 => 5362,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  7 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '                    <div class="numeric">',
        3 => 
        array (
          0 => 
          array (
            0 => 137,
            1 => 36,
            2 => 5384,
          ),
          1 => 
          array (
            0 => 138,
            1 => 41,
            2 => 5426,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'Settings',
            ),
            2 => false,
          ),
          1 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'item',
                2 => false,
              ),
            ),
            2 => false,
          ),
          2 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'content',
                2 => false,
              ),
            ),
            2 => false,
          ),
          3 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'wash',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 138,
            1 => 41,
            2 => 5427,
          ),
          1 => 
          array (
            0 => 138,
            1 => 68,
            2 => 5454,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '</div>
                ',
        3 => 
        array (
          0 => 
          array (
            0 => 138,
            1 => 68,
            2 => 5455,
          ),
          1 => 
          array (
            0 => 139,
            1 => 16,
            2 => 5478,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'numeric',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 137,
        1 => 16,
        2 => 5363,
      ),
      1 => 
      array (
        0 => 137,
        1 => 36,
        2 => 5383,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  8 => 
  array (
    0 => 2,
    1 => false,
    2 => '                ',
    3 => 
    array (
      0 => 
      array (
        0 => 139,
        1 => 20,
        2 => 5485,
      ),
      1 => 
      array (
        0 => 140,
        1 => 16,
        2 => 5502,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  9 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '                    <div class="',
        3 => 
        array (
          0 => 
          array (
            0 => 140,
            1 => 20,
            2 => 5508,
          ),
          1 => 
          array (
            0 => 141,
            1 => 32,
            2 => 5541,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'Settings',
            ),
            2 => false,
          ),
          1 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'item',
                2 => false,
              ),
            ),
            2 => false,
          ),
          2 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'type',
                2 => false,
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 141,
            1 => 32,
            2 => 5542,
          ),
          1 => 
          array (
            0 => 141,
            1 => 51,
            2 => 5561,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 141,
            1 => 51,
            2 => 5562,
          ),
          1 => 
          array (
            0 => 141,
            1 => 53,
            2 => 5564,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'Settings',
            ),
            2 => false,
          ),
          1 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'item',
                2 => false,
              ),
            ),
            2 => false,
          ),
          2 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'content',
                2 => false,
              ),
            ),
            2 => false,
          ),
          3 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'wash',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 141,
            1 => 53,
            2 => 5565,
          ),
          1 => 
          array (
            0 => 141,
            1 => 80,
            2 => 5592,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '</div>
                ',
        3 => 
        array (
          0 => 
          array (
            0 => 141,
            1 => 80,
            2 => 5593,
          ),
          1 => 
          array (
            0 => 142,
            1 => 16,
            2 => 5616,
          ),
          2 => 'design/admin2/templates/settings/view.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 140,
        1 => 16,
        2 => 5503,
      ),
      1 => 
      array (
        0 => 140,
        1 => 20,
        2 => 5507,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
  10 => 
  array (
    0 => 2,
    1 => false,
    2 => '                ',
    3 => 
    array (
      0 => 
      array (
        0 => 142,
        1 => 20,
        2 => 5623,
      ),
      1 => 
      array (
        0 => 143,
        1 => 16,
        2 => 5640,
      ),
      2 => 'design/admin2/templates/settings/view.tpl',
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'Settings',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'item',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 118,
    1 => 16,
    2 => 4393,
  ),
  1 => 
  array (
    0 => 118,
    1 => 48,
    2 => 4425,
  ),
  2 => 'design/admin2/templates/settings/view.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            </td>
            <td align="right" width="1">
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'editable' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'type' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$match1 = compiledFetchAttribute( $match, 'item' );
unset( $match );
$match = $match1;
$match1 = compiledFetchAttribute( $match, 'type' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "array":
    {
$text .= '                        <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_siteaccess'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_file'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Blocks'] : null;
$var8 = compiledFetchAttribute( $var7, 'key' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$var10 = compiledFetchAttribute( $var9, 'key' );
unset( $var9 );
$var9 = $var10;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var1 = ( 'settings/edit/' . $var3 . '/' . $var5 . '/' . $var7 . '/' . $var9 . '/' . 'siteaccess' );
unset( $var3, $var5, $var7, $var9 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>
                        <img src="/design/standard/images/edit.gif" alt="Modifier" /></a>
                    ';
    } break;
    default:
    {
$text .= '                        <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_siteaccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_siteaccess'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_file'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Blocks'] : null;
$var8 = compiledFetchAttribute( $var7, 'key' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$var10 = compiledFetchAttribute( $var9, 'key' );
unset( $var9 );
$var9 = $var10;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
unset( $var11 );
unset( $var11 );
$var11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Settings'] : null;
$var12 = compiledFetchAttribute( $var11, 'item' );
unset( $var11 );
$var11 = $var12;
$var12 = compiledFetchAttribute( $var11, 'placement' );
unset( $var11 );
$var11 = $var12;
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
$var1 = ( 'settings/edit/' . $var3 . '/' . $var5 . '/' . $var7 . '/' . $var9 . '/' . $var11 );
unset( $var3, $var5, $var7, $var9, $var11 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>
                        <img src="/design/standard/images/edit.gif" alt="Modifier" /></a>
                    ';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            </td>
        </tr>
    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</table>

</div>
</div></div></div>

<div class="controlbar">
<div class="box-bc"><div class="box-ml">
<div class="block">
    <input class="button" type="submit" name="RemoveButton" value="Supprimer la sélection" />
</div>
</div></div>
</div>

</form>';
}


$setArray = $oldSetArray_e3ba877b5b01e2bdb43b66124c326ddb;
$tpl->Level--;
?>
