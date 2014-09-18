<?php
// URI:       design:class/edit.tpl
// Filename:  design/admin2/templates/class/edit.tpl
// Timestamp: 1342179294 (Fri Jul 13 13:34:54 CEST 2012)
$oldSetArray_f4c2aa943f6628da1c83d284e2686525 = isset( $setArray ) ? $setArray : array();
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


<form action=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module'] : null;
$var3 = compiledFetchAttribute( $var2, 'functions' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'edit' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'uri' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var5 = compiledFetchAttribute( $var4, 'id' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var1 = ( $var2 . '/' . $var4 . '/(language)/' . $var6 );
unset( $var2, $var4, $var6 );
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

$text .= ' method="post" id="ClassEdit" name="ClassEdit">
<input type="hidden" name="ContentClassHasInput" value="1" />

<div id="controlbar-top" class="controlbar controlbar-fixed">
<div class="box-bc"><div class="box-ml">
<div class="block">
<div class="element">
    <input class="defaultbutton" type="submit" name="StoreButton"   value="OK" title="';
unset( $var );
$var = 'Enregistrer les changements et quitter le mode de modification.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />

    ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="ApplyButton"   value="Appliquer" title="';
unset( $var );
$var = 'Enregistrer les changements et rester en mode de modification.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    ';
}
unset( $if_cond );
// if ends

$text .= '
    <input class="button" type="submit" name="DiscardButton" value="Annuler" title="';
unset( $var );
$var = 'Annuler tous les changements et quitter le mode de modification.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
</div>
<div class="element">
    ';
$oldRestoreIncludeArray_26b7c10278882f3661c809ac753d3475 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['id_name'] ) )
    $restoreIncludeArray[] = array( $namespace, 'id_name', $vars[$namespace]['id_name'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['id_name'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'id_name', 'unset' );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "DataTypes";
else
    $namespace .= ':DataTypes';
$vars[$namespace]['id_name'] = 'DataTypeStringTop';
if ( isset( $namespace ) and isset( $vars[$namespace]['selection_name'] ) )
    $restoreIncludeArray[] = array( $namespace, 'selection_name', $vars[$namespace]['selection_name'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['selection_name'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'selection_name', 'unset' );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "DataTypes";
else
    $namespace .= ':DataTypes';
$vars[$namespace]['selection_name'] = 'DataTypeString';
if ( isset( $namespace ) and isset( $vars[$namespace]['datatypes'] ) )
    $restoreIncludeArray[] = array( $namespace, 'datatypes', $vars[$namespace]['datatypes'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['datatypes'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'datatypes', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'datatypes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['datatypes'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "DataTypes";
else
    $namespace .= ':DataTypes';
$vars[$namespace]['datatypes'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['current'] ) )
    $restoreIncludeArray[] = array( $namespace, 'current', $vars[$namespace]['current'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['current'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'current', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'datatype', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['datatype'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "DataTypes";
else
    $namespace .= ':DataTypes';
$vars[$namespace]['current'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/datatypes-1fd00a09c5536698633b221660784aed.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'DataTypes' : ( $currentNamespace . ':' . 'DataTypes' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/class/datatypes.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/datatypes-1fd00a09c5536698633b221660784aed.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'DataTypes' : ( $currentNamespace . ':' . 'DataTypes' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/class/datatypes.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_26b7c10278882f3661c809ac753d3475;

$text .= '    <input class="button" type="submit" name="NewButton" id="NewButtonTop" value="Ajouter l\'attribut" title="';
unset( $var );
$var = 'Ajouter un nouvel attribut à la classe. Utilisez le menu sur le gauche pour choisir le type d\'attribut.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
</div>
<div class="float-break"></div>
</div>
</div></div>
</div>


';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$show1 = compiledFetchAttribute( $show, 'processed' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$show1 = compiledFetchAttribute( $show, 'attributes' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<div class="message-error">
<h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span> La définition de la classe n\'a pas pu être enregistrée.</h2>
<p>L\'information suivante est soit manquante soit invalide:</p>
<ul>
    ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'attributes' );
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
$vars[$currentNamespace]['UnvalidatedAttributes'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '    ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'UnvalidatedAttributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['UnvalidatedAttributes'] : null;
$show2 = compiledFetchAttribute( $show1, 'item' );
unset( $show1 );
$show1 = $show2;
$show2 = compiledFetchAttribute( $show1, 'reason' );
unset( $show1 );
$show1 = $show2;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = isset( $show1 );unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <li>attribute \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'UnvalidatedAttributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['UnvalidatedAttributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\': (';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'UnvalidatedAttributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['UnvalidatedAttributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ')
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'UnvalidatedAttributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['UnvalidatedAttributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'reason' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'text' );
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
        <ul>
        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'UnvalidatedAttributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['UnvalidatedAttributes'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'item' );
unset( $loopItem );
$loopItem = $loopItem1;
$loopItem1 = compiledFetchAttribute( $loopItem, 'reason' );
unset( $loopItem );
$loopItem = $loopItem1;
$loopItem1 = compiledFetchAttribute( $loopItem, 'list' );
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
$vars[$currentNamespace]['subitem'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '            <li>';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'identifier' );
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

$text .= ': ';
}
unset( $if_cond );
// if ends

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
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

$text .= '</li>
        ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '        </ul>
        </li>
    ';
}
else
{

unset( $show );

$text .= '        <li>attribute \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'UnvalidatedAttributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['UnvalidatedAttributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\': ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'UnvalidatedAttributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['UnvalidatedAttributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= ' (';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'UnvalidatedAttributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['UnvalidatedAttributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ')</li>
    ';
}

$text .= '    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</ul>
</div>';
}
else
{

unset( $show );

$text .= '
<div class="message-feedback">
    <h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span> Le brouillon de la définition de la classe a été enregistré avec succès.</h2>
</div>';
}

}
else
{

unset( $show );

$text .= ' 

    ';
unset( $show );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();
$showData = array( 'value' => $show );
$tpl->processOperator( 'or',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'validation',
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
          1 => 'class_errors',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $showData, false, false );
$show = $showData['value'];
unset( $showData );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    <div class="message-error">
    <h2>La définition de la classe contient les erreurs suivantes:</h2>
    <ul>
    ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'class_errors' );
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
$vars[$currentNamespace]['ClassErrors'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        <li>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ClassErrors', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ClassErrors'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'text' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</li>
    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '    </ul>
    </div>
    ';
}

}

$text .= '

<div class="context-block">
<div class="box-header">

<h1 class="context-title" title="Nom de la classe et nombre d\'objets">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'normal',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'class',
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
          1 => 'name',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'wash',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var5 = compiledFetchAttribute( $var4, 'nameList' );
unset( $var4 );
$var4 = $var5;
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var5 = compiledFetchAttribute( $var4, $var6 );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var6 = compiledFetchAttribute( $var5, 'object_count' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( '%class_name' => $var4, '%object_count' => $var5 );unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'Modifier <%class_name> (%object_count objets)', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h1>

<div class="header-mainline"></div>

</div>


<div class="box-content">

<div class="context-information">
<p class="left modified">Dernière modification:&nbsp;';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'modified' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ',&nbsp;';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'modifier' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'contentobject' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '</p>';
// def $locale
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchLocale' ),
  array(     'locale_code' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locale', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locale' is already defined.", array (
  0 => 
  array (
    0 => 89,
    1 => 0,
    2 => 4463,
  ),
  1 => 
  array (
    0 => 89,
    1 => 81,
    2 => 4544,
  ),
  2 => 'design/admin2/templates/class/edit.tpl',
) );
    $tpl->setVariable( 'locale', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locale', $var, $rootNamespace );
}

$text .= '<p class="right translation">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'intl_language_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;<img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" width="18" height="12" alt="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" style="vertical-align: middle;" /></p>';
// undef $locale
$tpl->unsetLocalVariable( 'locale', $rootNamespace );

$text .= '<div class="break"></div>
</div>

<div class="context-attributes">

    
    <div class="block">
    <label for="className">Nom:</label>
    <input class="box" type="text" id="className" name="ContentClass_name" size="30" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'nameList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '" title="';
unset( $var );
$var = 'Utilisez ce champ pour fixer le nom informel de la classe. Le nom de champ peut contenir d\'espaces ni de caractères spéciaux.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>

    
    <div class="block">
    <label for="ContentClass_identifier">Identifiant:</label>
    <input class="box" type="text" id="ContentClass_identifier" name="ContentClass_identifier" size="30" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'identifier' );
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

$text .= '" title="';
unset( $var );
$var = 'Utilisez ce champ pour définir le nom interne de cette classe. Cet identifiant sera utilisé dans les templates et le code PHP. Seuls les lettres, les chiffres et le caractère souligné sont autorisés.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>

    
    <div class="block">
    <label for="classDescription">Description:</label>
    <input class="box" type="text" id="classDescription" name="ContentClass_description" size="30" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'descriptionList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '" title="';
unset( $var );
$var = 'Utilisez ce champ pour définir une description de la classe. La description peut contenir des espaces et des caractères spéciaux.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>

    
    <div class="block">
    <label for="ContentClass_contentobject_name">Modèle de nom d\'objet:</label>
    <input class="box" type="text" id="ContentClass_contentobject_name" name="ContentClass_contentobject_name" size="30" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_name' );
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

$text .= '" title="';
unset( $var );
$var = 'Utilisez ce champ pour définir la manière dont le nom des objets sont générés. Entrez l\'identifiant des attributs qui doivent être utilisés. Les identifiants doivent être encadrés par les symboles inférieur (&lt;) et supérieur (&gt;). Les textes à l\'extérieur de ces caractères seront utilisés tels quels.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>

    
    <div class="block">
    <label for="ContentClass_url_alias_name">Modèle de génération de l\'URL:</label>
    <input class="box" type="text" id="ContentClass_url_alias_name" name="ContentClass_url_alias_name" size="30" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias_name' );
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

$text .= '" title="';
unset( $var );
$var = 'Utilisez ce champ pour définir la manière dont les URL des objets sont générées par le système de réécriture d\'URL. Entrez l\'identifiant des attributs qui doivent être utilisés. Les identifiants doivent être encadrés par les symboles inférieur (&lt;) et supérieur (&gt;). Les textes à l\'extérieur de ces caractères seront utilisés tels quels.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>

    
    <div class="block">
    <label for="ContentClass_is_container_checked">Conteneur:</label>
    <input type="hidden" name="ContentClass_is_container_exists" value="1" />
    <input type="checkbox" id="ContentClass_is_container_checked" name="ContentClass_is_container_checked" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'is_container' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'is_container' );
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
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
$var = 'Utilisez cette case à cocher pour autoriser les instances de cette classe à avoir des sous-éléments. Si cochée, il sera possible de créer des sous-éléments. Si non cochée, les sous-éléments ne seront pas affichés.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>

    
    <div class="block">
    <label for="ContentClass_default_sorting_field">Tri par défaut des enfants:</label>
    ';
// def $sort_fields
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchAvailableSortFieldList' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sort_fields', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sort_fields' is already defined.", array (
  0 => 
  array (
    0 => 137,
    1 => 4,
    2 => 8420,
  ),
  1 => 
  array (
    0 => 138,
    1 => 163,
    2 => 8640,
  ),
  2 => 'design/admin2/templates/class/edit.tpl',
) );
    $tpl->setVariable( 'sort_fields', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sort_fields', $var, $rootNamespace );
}

// def $title
unset( $var );
$var = 'Utilisez ces contrôles pour paramétrer la méthode de tri par défaut pour les sous-éléments de la classe de contenu par exemple.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'title', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'title' is already defined.", array (
  0 => 
  array (
    0 => 137,
    1 => 4,
    2 => 8420,
  ),
  1 => 
  array (
    0 => 138,
    1 => 163,
    2 => 8640,
  ),
  2 => 'design/admin2/templates/class/edit.tpl',
) );
    $tpl->setVariable( 'title', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'title', $var, $rootNamespace );
}

$text .= '    <input type="hidden" name="ContentClass_default_sorting_exists" value="1" />
    <select id="ContentClass_default_sorting_field" name="ContentClass_default_sorting_field" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_1 ) ) $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_1 = array();
$fe_variable_stack_250f9e26cf7f846a506df1065f6da008_1[] = compact( 'fe_array_250f9e26cf7f846a506df1065f6da008_1', 'fe_array_keys_250f9e26cf7f846a506df1065f6da008_1', 'fe_n_items_250f9e26cf7f846a506df1065f6da008_1', 'fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_1', 'fe_i_250f9e26cf7f846a506df1065f6da008_1', 'fe_key_250f9e26cf7f846a506df1065f6da008_1', 'fe_val_250f9e26cf7f846a506df1065f6da008_1', 'fe_offset_250f9e26cf7f846a506df1065f6da008_1', 'fe_max_250f9e26cf7f846a506df1065f6da008_1', 'fe_reverse_250f9e26cf7f846a506df1065f6da008_1', 'fe_first_val_250f9e26cf7f846a506df1065f6da008_1', 'fe_last_val_250f9e26cf7f846a506df1065f6da008_1' );
unset( $fe_array_250f9e26cf7f846a506df1065f6da008_1 );
unset( $fe_array_250f9e26cf7f846a506df1065f6da008_1 );
$fe_array_250f9e26cf7f846a506df1065f6da008_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_fields', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_fields'] : null;
if (! isset( $fe_array_250f9e26cf7f846a506df1065f6da008_1 ) ) $fe_array_250f9e26cf7f846a506df1065f6da008_1 = NULL;
while ( is_object( $fe_array_250f9e26cf7f846a506df1065f6da008_1 ) and method_exists( $fe_array_250f9e26cf7f846a506df1065f6da008_1, 'templateValue' ) )
    $fe_array_250f9e26cf7f846a506df1065f6da008_1 = $fe_array_250f9e26cf7f846a506df1065f6da008_1->templateValue();

$fe_array_keys_250f9e26cf7f846a506df1065f6da008_1 = is_array( $fe_array_250f9e26cf7f846a506df1065f6da008_1 ) ? array_keys( $fe_array_250f9e26cf7f846a506df1065f6da008_1 ) : array();
$fe_n_items_250f9e26cf7f846a506df1065f6da008_1 = count( $fe_array_keys_250f9e26cf7f846a506df1065f6da008_1 );
$fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_1 = 0;
$fe_offset_250f9e26cf7f846a506df1065f6da008_1 = 0;
$fe_max_250f9e26cf7f846a506df1065f6da008_1 = $fe_n_items_250f9e26cf7f846a506df1065f6da008_1 - $fe_offset_250f9e26cf7f846a506df1065f6da008_1;
$fe_reverse_250f9e26cf7f846a506df1065f6da008_1 = false;
if ( $fe_offset_250f9e26cf7f846a506df1065f6da008_1 < 0 || $fe_offset_250f9e26cf7f846a506df1065f6da008_1 >= $fe_n_items_250f9e26cf7f846a506df1065f6da008_1 )
{
    $fe_offset_250f9e26cf7f846a506df1065f6da008_1 = ( $fe_offset_250f9e26cf7f846a506df1065f6da008_1 < 0 ) ? 0 : $fe_n_items_250f9e26cf7f846a506df1065f6da008_1;
    if ( $fe_n_items_250f9e26cf7f846a506df1065f6da008_1 || $fe_offset_250f9e26cf7f846a506df1065f6da008_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_250f9e26cf7f846a506df1065f6da008_1'. Array count: $fe_n_items_250f9e26cf7f846a506df1065f6da008_1");   
}
}
if ( $fe_max_250f9e26cf7f846a506df1065f6da008_1 < 0 || $fe_offset_250f9e26cf7f846a506df1065f6da008_1 + $fe_max_250f9e26cf7f846a506df1065f6da008_1 > $fe_n_items_250f9e26cf7f846a506df1065f6da008_1 )
{
    if ( $fe_max_250f9e26cf7f846a506df1065f6da008_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_250f9e26cf7f846a506df1065f6da008_1");
    $fe_max_250f9e26cf7f846a506df1065f6da008_1 = $fe_n_items_250f9e26cf7f846a506df1065f6da008_1 - $fe_offset_250f9e26cf7f846a506df1065f6da008_1;
}
if ( $fe_reverse_250f9e26cf7f846a506df1065f6da008_1 )
{
    $fe_first_val_250f9e26cf7f846a506df1065f6da008_1 = $fe_n_items_250f9e26cf7f846a506df1065f6da008_1 - 1 - $fe_offset_250f9e26cf7f846a506df1065f6da008_1;
    $fe_last_val_250f9e26cf7f846a506df1065f6da008_1  = 0;
}
else
{
    $fe_first_val_250f9e26cf7f846a506df1065f6da008_1 = $fe_offset_250f9e26cf7f846a506df1065f6da008_1;
    $fe_last_val_250f9e26cf7f846a506df1065f6da008_1  = $fe_n_items_250f9e26cf7f846a506df1065f6da008_1 - 1;
}
// foreach
for ( $fe_i_250f9e26cf7f846a506df1065f6da008_1 = $fe_first_val_250f9e26cf7f846a506df1065f6da008_1; $fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_1 < $fe_max_250f9e26cf7f846a506df1065f6da008_1 && ( $fe_reverse_250f9e26cf7f846a506df1065f6da008_1 ? $fe_i_250f9e26cf7f846a506df1065f6da008_1 >= $fe_last_val_250f9e26cf7f846a506df1065f6da008_1 : $fe_i_250f9e26cf7f846a506df1065f6da008_1 <= $fe_last_val_250f9e26cf7f846a506df1065f6da008_1 ); $fe_reverse_250f9e26cf7f846a506df1065f6da008_1 ? $fe_i_250f9e26cf7f846a506df1065f6da008_1-- : $fe_i_250f9e26cf7f846a506df1065f6da008_1++ )
{
$fe_key_250f9e26cf7f846a506df1065f6da008_1 = $fe_array_keys_250f9e26cf7f846a506df1065f6da008_1[$fe_i_250f9e26cf7f846a506df1065f6da008_1];
$fe_val_250f9e26cf7f846a506df1065f6da008_1 = $fe_array_250f9e26cf7f846a506df1065f6da008_1[$fe_key_250f9e26cf7f846a506df1065f6da008_1];
$vars[$rootNamespace]['sf_item'] = $fe_val_250f9e26cf7f846a506df1065f6da008_1;
$vars[$rootNamespace]['sf_key'] = $fe_key_250f9e26cf7f846a506df1065f6da008_1;
$text .= '        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sf_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sf_key'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sf_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sf_key'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'sort_field' );
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
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sf_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sf_item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
    ';
$fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_1 ) ) extract( array_pop( $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_1 ) );

else
{

unset( $fe_array_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_array_keys_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_n_items_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_i_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_key_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_val_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_offset_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_max_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_reverse_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_first_val_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_last_val_250f9e26cf7f846a506df1065f6da008_1 );

unset( $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_1 );

}

// foreach ends
$text .= '    </select>
    <select id="ContentClass_default_sorting_order" name="ContentClass_default_sorting_order" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <option value="0"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>Décroissant</option>
        <option value="1"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
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
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>Croissant</option>
    </select>
    ';
// undef $sort_fields
$tpl->unsetLocalVariable( 'sort_fields', $rootNamespace );

// undef $title
$tpl->unsetLocalVariable( 'title', $rootNamespace );

$text .= '    </div>

    
    <div class="block">
    <label for="ContentClass_always_available">Disponibilité de l\'objet par défaut:</label>
    <input type="hidden" name="ContentClass_always_available_exists" value="1" />
    <input type="checkbox" id="ContentClass_always_available" name="ContentClass_always_available"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'always_available' );
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
$text .= ' checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
$var = 'Utilisez cette case à cocher pour définir la disponibilité par défaut des instances de cette classe. La disponibilité définit si un objet doit être affiché même si il n\'existe pas dans une des langues spécifiées dans le paramètre &quot;SiteLanguageList&quot;. Dans ce cas, le système utilisera la langue par défaut de l\'objet.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>

<div class="block">
<h3>Attributs de classe:</h3>
</div>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attributes'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// def $attribute_categorys
if ( $tpl->hasVariable( 'attribute_categorys', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attribute_categorys' is already defined.", array (
  0 => 
  array (
    0 => 164,
    1 => 0,
    2 => 10381,
  ),
  1 => 
  array (
    0 => 166,
    1 => 24,
    2 => 10607,
  ),
  2 => 'design/admin2/templates/class/edit.tpl',
) );
    $tpl->setVariable( 'attribute_categorys', array (
  'content' => 'Content',
  'meta' => 'Meta',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attribute_categorys', array (
  'content' => 'Content',
  'meta' => 'Meta',
), $rootNamespace );
}

// def $attribute_default_category
if ( $tpl->hasVariable( 'attribute_default_category', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attribute_default_category' is already defined.", array (
  0 => 
  array (
    0 => 164,
    1 => 0,
    2 => 10381,
  ),
  1 => 
  array (
    0 => 166,
    1 => 24,
    2 => 10607,
  ),
  2 => 'design/admin2/templates/class/edit.tpl',
) );
    $tpl->setVariable( 'attribute_default_category', 'content', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attribute_default_category', 'content', $rootNamespace );
}

// def $priority_value
if ( $tpl->hasVariable( 'priority_value', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'priority_value' is already defined.", array (
  0 => 
  array (
    0 => 164,
    1 => 0,
    2 => 10381,
  ),
  1 => 
  array (
    0 => 166,
    1 => 24,
    2 => 10607,
  ),
  2 => 'design/admin2/templates/class/edit.tpl',
) );
    $tpl->setVariable( 'priority_value', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'priority_value', 0, $rootNamespace );
}

$text .= '
<table id="ezcca-edit-list" class="special" cellspacing="0" summary="Liste des attributs de la classe">
<tbody>';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attributes'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
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
$vars[$currentNamespace]['Attributes'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Attributes'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'priority_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['priority_value'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 10.000000;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'priority_value', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['priority_value'] = $var;
    unset( $var );
}
$text .= '
<tr class="ezcca-edit-list-item ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'last_changed_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['last_changed_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'id' );
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
$text .= ' id="LastChangedID"';
}
unset( $if_cond );
// if ends

$text .= '>
<td>
<table cellspacing="0" summary="Attribut de classe">
<tr>
    <th class="tight"><input type="checkbox" name="ContentAttribute_id_checked[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="';
unset( $var );
$var = 'Sélectionnez un attribut pour suppression. Cliquez sur le bouton &quot;Remove selected attributes&quot; pour supprimer les attributs sélectionnés.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" /></th>
    <th class="wide">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'number' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '. ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= ' [';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_type' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'information' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '] (id:';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ')</th>
    <th class="tight">
      <div class="listbutton">
          <input type="image" src="/design/admin2/images/button-move_down.gif" alt="Abaisser" name="MoveDown_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="';
unset( $var );
$var = 'Utilisez les boutons d\'ordonnancement des attributs de classe. La flèche vers le haut déplace l\'attribut d\'une position vers le haut. La flèche vers le bas déplace l\'attribut d\'une position vers le bas.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />&nbsp;
          <input type="image" src="/design/admin2/images/button-move_up.gif" alt="Monter" name="MoveUp_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="';
unset( $var );
$var = 'Utilisez les boutons d\'ordonnancement des attributs de classe. La flèche vers le haut déplace l\'attribut d\'une position vers le haut. La flèche vers le bas déplace l\'attribut d\'une position vers le bas.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
          <input size="2" maxlength="4" type="text" name="ContentAttribute_priority[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'priority_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['priority_value'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
      </div>
    </th>
</tr>
<tr>
<td>&nbsp;</td>
<!-- Attribute input Start -->
<td colspan="2">
<input type="hidden" name="ContentAttribute_id[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
<input type="hidden" name="ContentAttribute_position[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
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

$text .= '" />



<div class="block">
<label for="ContentAttribute_name_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">Nom:</label>
<input class="box" type="text" id="ContentAttribute_name_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_name[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'nameList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '" title="';
unset( $var );
$var = 'Utilisez ce champ pour fixer le nom informel de l\'attribut. Le nom de champ peut contenir des espaces et des caractères spéciaux.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
</div>


<div class="block">
<label for="ContentAttribute_identifier_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">Identifiant:</label>
<input class="box" type="text" id="ContentAttribute_identifier_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_identifier[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="';
unset( $var );
$var = 'Utilisez ce champs pour définir le nom interne de l\'attribut. L\'identifiant sera utilisé dans les template et le code PHP. Seuls les lettres, les chiffres et le caractère souligné sont autorisés.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
</div>


<div class="block">
<label for="ContentAttribute_description_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">Description:</label>
<input class="box" type="text" id="ContentAttribute_description_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_description[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'descriptionList' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= '" title="';
unset( $var );
$var = 'Utilisez ce champ pour définir la description de l\'attribut. La description peut contenir des espaces et des caractères spéciaux.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
</div>

<!-- Attribute input End -->

<!-- Attribute flags Start -->
<div class="block">


<div class="element">
<label for="ContentAttribute_is_required_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
<input type="checkbox" id="ContentAttribute_is_required_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_is_required_checked[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"  ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_required' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
$var = 'Utilisez cette case à cocher pour rendre la saisie de cet attribut obligatoire.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
Obligatoire
</label>
</div>


<div class="element">
<label for="ContentAttribute_is_searchable_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_type' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_indexable' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<input type="checkbox" id="ContentAttribute_is_searchable_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_is_searchable_checked[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"  ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_searchable' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
$var = 'Utilisez cette case à cocher pour que le contenu de cet attribut soit indexé par le moteur de recherche.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
else
{
$text .= '<input type="checkbox" id="ContentAttribute_is_searchable_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_is_searchable_checked[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="" disabled="disabled" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var5 = compiledFetchAttribute( $var4, 'item' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'data_type' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'information' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%datatype_name' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'Le type de données <%datatype_name> ne supporte pas la recherche indexée.', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
unset( $if_cond );
// if ends

$text .= 'Interrogeable
</label>
</div>


<div class="element">
<label for="ContentAttribute_is_information_collector_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_type' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<input type="checkbox" id="ContentAttribute_is_information_collector_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_is_information_collector_checked[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"  ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
$var = 'Utilisez cette case à cocher pour rendre cet attribut collecteur d\'information auprès des utilisateurs.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
else
{
$text .= '<input type="checkbox" id="ContentAttribute_is_information_collector_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_is_information_collector_checked[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="" disabled="disabled" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var5 = compiledFetchAttribute( $var4, 'item' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'data_type' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'information' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%datatype_name' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'Le type de donnée <%datatype_name> ne peut pas être configuré comme collecteur d\'information.', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
unset( $if_cond );
// if ends

$text .= 'Collecteur d\'information
</label>
<div class="break"></div>
</div>



<div class="element">
<label for="ContentAttribute_can_translate_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
<input type="checkbox" id="ContentAttribute_can_translate_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_can_translate_checked[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_translate' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'item' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'data_type' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'properties' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'translation_allowed' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'item' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_type' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'properties' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'translation_allowed' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
$var = 'Utilisez cette case à cocher pour les attributs qui contiennent du contenu non traduisible.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
Désactiver la traduction
</label>
</div>


<div class="element">
<label for="ContentAttribute_category_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
<select id="ContentAttribute_category_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="ContentAttribute_category_select[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']"  title="';
unset( $var );
$var = 'Utilisez cette catégorie pour grouper les attributs dans l\'interface de modification, certaines de ces catégories peuvent aussi être cachées dans la vue full par exemple si ce sont uniquement des meta-informations.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
    <option value="">Par défaut (';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_categorys', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_categorys'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_default_category', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_default_category'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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

$text .= ')</option>
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_2 ) ) $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_2 = array();
$fe_variable_stack_250f9e26cf7f846a506df1065f6da008_2[] = compact( 'fe_array_250f9e26cf7f846a506df1065f6da008_2', 'fe_array_keys_250f9e26cf7f846a506df1065f6da008_2', 'fe_n_items_250f9e26cf7f846a506df1065f6da008_2', 'fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_2', 'fe_i_250f9e26cf7f846a506df1065f6da008_2', 'fe_key_250f9e26cf7f846a506df1065f6da008_2', 'fe_val_250f9e26cf7f846a506df1065f6da008_2', 'fe_offset_250f9e26cf7f846a506df1065f6da008_2', 'fe_max_250f9e26cf7f846a506df1065f6da008_2', 'fe_reverse_250f9e26cf7f846a506df1065f6da008_2', 'fe_first_val_250f9e26cf7f846a506df1065f6da008_2', 'fe_last_val_250f9e26cf7f846a506df1065f6da008_2' );
unset( $fe_array_250f9e26cf7f846a506df1065f6da008_2 );
unset( $fe_array_250f9e26cf7f846a506df1065f6da008_2 );
$fe_array_250f9e26cf7f846a506df1065f6da008_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_categorys', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_categorys'] : null;
if (! isset( $fe_array_250f9e26cf7f846a506df1065f6da008_2 ) ) $fe_array_250f9e26cf7f846a506df1065f6da008_2 = NULL;
while ( is_object( $fe_array_250f9e26cf7f846a506df1065f6da008_2 ) and method_exists( $fe_array_250f9e26cf7f846a506df1065f6da008_2, 'templateValue' ) )
    $fe_array_250f9e26cf7f846a506df1065f6da008_2 = $fe_array_250f9e26cf7f846a506df1065f6da008_2->templateValue();

$fe_array_keys_250f9e26cf7f846a506df1065f6da008_2 = is_array( $fe_array_250f9e26cf7f846a506df1065f6da008_2 ) ? array_keys( $fe_array_250f9e26cf7f846a506df1065f6da008_2 ) : array();
$fe_n_items_250f9e26cf7f846a506df1065f6da008_2 = count( $fe_array_keys_250f9e26cf7f846a506df1065f6da008_2 );
$fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_2 = 0;
$fe_offset_250f9e26cf7f846a506df1065f6da008_2 = 0;
$fe_max_250f9e26cf7f846a506df1065f6da008_2 = $fe_n_items_250f9e26cf7f846a506df1065f6da008_2 - $fe_offset_250f9e26cf7f846a506df1065f6da008_2;
$fe_reverse_250f9e26cf7f846a506df1065f6da008_2 = false;
if ( $fe_offset_250f9e26cf7f846a506df1065f6da008_2 < 0 || $fe_offset_250f9e26cf7f846a506df1065f6da008_2 >= $fe_n_items_250f9e26cf7f846a506df1065f6da008_2 )
{
    $fe_offset_250f9e26cf7f846a506df1065f6da008_2 = ( $fe_offset_250f9e26cf7f846a506df1065f6da008_2 < 0 ) ? 0 : $fe_n_items_250f9e26cf7f846a506df1065f6da008_2;
    if ( $fe_n_items_250f9e26cf7f846a506df1065f6da008_2 || $fe_offset_250f9e26cf7f846a506df1065f6da008_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_250f9e26cf7f846a506df1065f6da008_2'. Array count: $fe_n_items_250f9e26cf7f846a506df1065f6da008_2");   
}
}
if ( $fe_max_250f9e26cf7f846a506df1065f6da008_2 < 0 || $fe_offset_250f9e26cf7f846a506df1065f6da008_2 + $fe_max_250f9e26cf7f846a506df1065f6da008_2 > $fe_n_items_250f9e26cf7f846a506df1065f6da008_2 )
{
    if ( $fe_max_250f9e26cf7f846a506df1065f6da008_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_250f9e26cf7f846a506df1065f6da008_2");
    $fe_max_250f9e26cf7f846a506df1065f6da008_2 = $fe_n_items_250f9e26cf7f846a506df1065f6da008_2 - $fe_offset_250f9e26cf7f846a506df1065f6da008_2;
}
if ( $fe_reverse_250f9e26cf7f846a506df1065f6da008_2 )
{
    $fe_first_val_250f9e26cf7f846a506df1065f6da008_2 = $fe_n_items_250f9e26cf7f846a506df1065f6da008_2 - 1 - $fe_offset_250f9e26cf7f846a506df1065f6da008_2;
    $fe_last_val_250f9e26cf7f846a506df1065f6da008_2  = 0;
}
else
{
    $fe_first_val_250f9e26cf7f846a506df1065f6da008_2 = $fe_offset_250f9e26cf7f846a506df1065f6da008_2;
    $fe_last_val_250f9e26cf7f846a506df1065f6da008_2  = $fe_n_items_250f9e26cf7f846a506df1065f6da008_2 - 1;
}
// foreach
for ( $fe_i_250f9e26cf7f846a506df1065f6da008_2 = $fe_first_val_250f9e26cf7f846a506df1065f6da008_2; $fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_2 < $fe_max_250f9e26cf7f846a506df1065f6da008_2 && ( $fe_reverse_250f9e26cf7f846a506df1065f6da008_2 ? $fe_i_250f9e26cf7f846a506df1065f6da008_2 >= $fe_last_val_250f9e26cf7f846a506df1065f6da008_2 : $fe_i_250f9e26cf7f846a506df1065f6da008_2 <= $fe_last_val_250f9e26cf7f846a506df1065f6da008_2 ); $fe_reverse_250f9e26cf7f846a506df1065f6da008_2 ? $fe_i_250f9e26cf7f846a506df1065f6da008_2-- : $fe_i_250f9e26cf7f846a506df1065f6da008_2++ )
{
$fe_key_250f9e26cf7f846a506df1065f6da008_2 = $fe_array_keys_250f9e26cf7f846a506df1065f6da008_2[$fe_i_250f9e26cf7f846a506df1065f6da008_2];
$fe_val_250f9e26cf7f846a506df1065f6da008_2 = $fe_array_250f9e26cf7f846a506df1065f6da008_2[$fe_key_250f9e26cf7f846a506df1065f6da008_2];
$vars[$rootNamespace]['categoryName'] = $fe_val_250f9e26cf7f846a506df1065f6da008_2;
$vars[$rootNamespace]['categoryIdentifier'] = $fe_key_250f9e26cf7f846a506df1065f6da008_2;
$text .= '        <option value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'categoryIdentifier', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['categoryIdentifier'] : null;
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'categoryIdentifier', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['categoryIdentifier'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Attributes'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'category' );
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'categoryName', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['categoryName'] : null;
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
$fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_2 ) ) extract( array_pop( $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_2 ) );

else
{

unset( $fe_array_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_array_keys_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_n_items_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_n_items_processed_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_i_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_key_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_val_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_offset_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_max_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_reverse_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_first_val_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_last_val_250f9e26cf7f846a506df1065f6da008_2 );

unset( $fe_variable_stack_250f9e26cf7f846a506df1065f6da008_2 );

}

// foreach ends
$text .= '</select>
Catégorie
</label>
</div>

</div>
';
$textElements = array();
$tpl->processFunction( 'class_attribute_edit_gui', $textElements,
                       false,
                       array (
  'class_attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'Attributes',
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
  ),
),
                       array (
  0 => 
  array (
    0 => 276,
    1 => 0,
    2 => 18883,
  ),
  1 => 
  array (
    0 => 276,
    1 => 57,
    2 => 18940,
  ),
  2 => 'design/admin2/templates/class/edit.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '
</td>
</tr>
<!-- Attribute flags End -->
</table>
</td>
</tr>
';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '</tbody>
</table>';
// undef $attribute_categorys
$tpl->unsetLocalVariable( 'attribute_categorys', $rootNamespace );

// undef $attribute_default_category
$tpl->unsetLocalVariable( 'attribute_default_category', $rootNamespace );

// undef $priority_value
$tpl->unsetLocalVariable( 'priority_value', $rootNamespace );

}
else
{
$text .= '
<div class="block">
<p>Cette classe n\'a aucun attribut.</p>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>

</div>

<div class="block">
<div class="controlbar">
<div class="box-bc">

<div class="block">
    
    <div class="button-left">
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attributes'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="RemoveButton" value="Supprimer les attributs sélectionnés" title="';
unset( $var );
$var = 'Supprimer les attributs sélectionnés.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    ';
}
else
{
$text .= '    <input class="button-disabled" type="submit" name="RemoveButton" value="Supprimer les attributs sélectionnés" title="';
unset( $var );
$var = 'Supprimer les attributs sélectionnés.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" disabled="disabled" />
    ';
}
unset( $if_cond );
// if ends

$text .= '    </div>

    <div class="button-right">
    ';
$oldRestoreIncludeArray_503cb8957bed98a9df1384209b47be32 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['id_name'] ) )
    $restoreIncludeArray[] = array( $namespace, 'id_name', $vars[$namespace]['id_name'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['id_name'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'id_name', 'unset' );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "DataTypes";
else
    $namespace .= ':DataTypes';
$vars[$namespace]['id_name'] = 'DataTypeString';
if ( isset( $namespace ) and isset( $vars[$namespace]['datatypes'] ) )
    $restoreIncludeArray[] = array( $namespace, 'datatypes', $vars[$namespace]['datatypes'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['datatypes'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'datatypes', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'datatypes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['datatypes'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "DataTypes";
else
    $namespace .= ':DataTypes';
$vars[$namespace]['datatypes'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['current'] ) )
    $restoreIncludeArray[] = array( $namespace, 'current', $vars[$namespace]['current'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['current'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'current', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'datatype', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['datatype'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "DataTypes";
else
    $namespace .= ':DataTypes';
$vars[$namespace]['current'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/datatypes-1fd00a09c5536698633b221660784aed.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'DataTypes' : ( $currentNamespace . ':' . 'DataTypes' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/class/datatypes.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/datatypes-1fd00a09c5536698633b221660784aed.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'DataTypes' : ( $currentNamespace . ':' . 'DataTypes' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/class/datatypes.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_503cb8957bed98a9df1384209b47be32;

$text .= '    <input class="button" type="submit" name="NewButton" value="Ajouter l\'attribut" title="';
unset( $var );
$var = 'Ajouter un nouvel attribut à la classe. Utilisez le menu sur le gauche pour choisir le type d\'attribut.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    </div>
    <div class="float-break"></div>
</div>

<div class="block">
    <input class="defaultbutton" type="submit" name="StoreButton"   value="OK" title="';
unset( $var );
$var = 'Enregistrer les changements et quitter le mode de modification.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />

    ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="ApplyButton"   value="Appliquer" title="';
unset( $var );
$var = 'Enregistrer les changements et rester en mode de modification.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    ';
}
unset( $if_cond );
// if ends

$text .= '
    <input class="button" type="submit" name="DiscardButton" value="Annuler" title="';
unset( $var );
$var = 'Annuler tous les changements et quitter le mode de modification.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
</div>
</div>
</div>
</div>

</div>

<a href="#path" class="scroll-to-top">&uarr;&nbsp;Retour en haut</a>
</form>



<script type="text/javascript">
jQuery(function( $ )//called on document.ready
{
    var el = $(\'#LastChangedID input[name^=ContentAttribute_name]\');
    if ( el.size() ) {
        window.scrollTo(0, Math.max( el.offset().top - 180, 0 ));
        el.focus();
    }

    // Axaify all move up/down buttons
    var moveButtons = $(\'#ezcca-edit-list div.listbutton input[name^=Move]\');
    moveButtons.click(function( e )
    {
        // Prevent form from being sent and make sure user is not able to duble click on button and causing issues
        e.preventDefault();
        $(\'#ezcca-edit-list div.listbutton input[name^=Move]\').attr( "disabled", true ).addClass(\'disabled\');
        var tr = $(this).closest(\'tr.ezcca-edit-list-item\'), param = this.name.split(\'_\'), up = param[0] === \'MoveUp\';

        // swap items in dom, or skip if number is to high / low
        if ( up )
        {
            var swap = tr.prev();
            if ( !swap.size() )
                return onDone();
            swap.before( tr );
        }
        else
        {
            var swap = tr.next();
            if ( !swap.size() )
                return onDone();
            swap.after( tr );
        }

        // swap priority number
        var inp = tr.find(\'input[name^=ContentAttribute_priority]\'), inp2 = swap.find(\'input[name^=ContentAttribute_priority]\'), inpv = inp.val();
        inp.val( inp2.val() );
        inp2.val( inpv );

        // store with ajax request
        var postVar = { \'ContentClassHasInput\': 0 }, _tokenNode = document.getElementById(\'ezxform_token_js\');
        postVar[ param[0] ] = param[1];
        if ( _tokenNode ) postVar[\'ezxform_token\'] = _tokenNode.getAttribute(\'title\');
        $.post( $(\'#ClassEdit\').attr(\'action\'), postVar, onDone );
        return false;
    });

    function onDone()
    {
        // Re-enable buttons now that ajax request has returned or it was skipped
        $(\'#ezcca-edit-list div.listbutton input[name^=Move]\').attr( "disabled", false ).removeClass(\'disabled\');
        return false;
    }

    // Disable bottom datatype dropp down when using new button in top
    jQuery(\'#NewButtonTop\').click(function()
    {
        jQuery(\'#DataTypeString\').attr(\'disabled\', true);
    });
});
</script>

';

$setArray = $oldSetArray_f4c2aa943f6628da1c83d284e2686525;
$tpl->Level--;
?>
