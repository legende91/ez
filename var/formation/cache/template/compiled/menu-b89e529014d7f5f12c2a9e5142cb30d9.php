<?php
// URI:       design:parts/user/menu.tpl
// Filename:  design/admin2/templates/parts/user/menu.tpl
// Timestamp: 1342179296 (Fri Jul 13 13:34:56 CEST 2012)
$oldSetArray_d74c7474c47c876d4561cd19dd055681 = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'edit' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="box-header"><div class="box-ml">

<h4>Informations sur le rôle</h4>

</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">

<p>
<label>Nom:</label>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
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

$text .= '
</p>

<p>
<label>ID:</label>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
$var2 = compiledFetchAttribute( $var1, 'id' );
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
</p>

</div></div></div>
';
}
else
{
$text .= '
<div id="content-tree">

<div class="box-header"><div class="box-ml">
<h4>Comptes utilisateurs</h4>
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">


<div id="contentstructure">
    ';
$oldRestoreIncludeArray_7278396399c7acbece437b857627c0bd = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['custom_root_node_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'custom_root_node_id', $vars[$currentNamespace]['custom_root_node_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['custom_root_node_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'custom_root_node_id', 'unset' );

$vars[$currentNamespace]['custom_root_node_id'] = '5';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/formation/cache/template/compiled/content_structure_menu_dynamic-d43ccb42b8e47e37aa70c512fac1b34e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl' );
include( '' . 'var/formation/cache/template/compiled/content_structure_menu_dynamic-d43ccb42b8e47e37aa70c512fac1b34e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7278396399c7acbece437b857627c0bd;

$text .= '</div>

';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="trash">
<a class="image-text" href=';
unset( $var );
unset( $var1 );
$var1 = ( '/content/trash/' . '2' );
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

$text .= ' title="Voir et gérer le contenu de la corbeille."><img src="/design/admin2/images/trash-icon-16x16.gif" width="16" height="16" alt="Trash" />&nbsp;<span>Corbeille</span></a>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div></div></div>
</div>

';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
    
    ';
$oldRestoreIncludeArray_e939cc7fd13cfc53c23875e0ad20f3f6 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_user';
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['i18n_hash'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'i18n_hash', $vars[$currentNamespace]['i18n_hash'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['i18n_hash'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'i18n_hash', 'unset' );

$vars[$currentNamespace]['i18n_hash'] = array (
  'access_controll' => 'Contrôle d\'accès',
  'roles_and_policies' => 'Rôles et droits',
  'unactivated' => 'Utilisateurs désactivés',
);
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/formation/cache/template/compiled/ini_menu-e73f88ec6116f1d3cacb2f0cfaeb4f77.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/parts/ini_menu.tpl' );
include( '' . 'var/formation/cache/template/compiled/ini_menu-e73f88ec6116f1d3cacb2f0cfaeb4f77.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/parts/ini_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_e939cc7fd13cfc53c23875e0ad20f3f6;

}
unset( $if_cond );
// if ends

$text .= '

<div id="widthcontrol-links" class="widthcontrol">
<p>';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '    ',
    3 => 
    array (
      0 => 
      array (
        0 => 62,
        1 => 51,
        2 => 2205,
      ),
      1 => 
      array (
        0 => 63,
        1 => 4,
        2 => 2210,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
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
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 63,
            1 => 23,
            2 => 2231,
          ),
          1 => 
          array (
            0 => 64,
            1 => 12,
            2 => 2244,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 64,
            1 => 12,
            2 => 2245,
          ),
          1 => 
          array (
            0 => 64,
            1 => 68,
            2 => 2301,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 64,
            1 => 68,
            2 => 2302,
          ),
          1 => 
          array (
            0 => 64,
            1 => 76,
            2 => 2310,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 64,
            1 => 76,
            2 => 2311,
          ),
          1 => 
          array (
            0 => 64,
            1 => 158,
            2 => 2393,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 64,
            1 => 158,
            2 => 2394,
          ),
          1 => 
          array (
            0 => 64,
            1 => 160,
            2 => 2396,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 64,
            1 => 160,
            2 => 2397,
          ),
          1 => 
          array (
            0 => 64,
            1 => 206,
            2 => 2443,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 64,
            1 => 206,
            2 => 2444,
          ),
          1 => 
          array (
            0 => 65,
            1 => 26,
            2 => 2475,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 65,
            1 => 26,
            2 => 2476,
          ),
          1 => 
          array (
            0 => 65,
            1 => 73,
            2 => 2523,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 65,
            1 => 73,
            2 => 2524,
          ),
          1 => 
          array (
            0 => 66,
            1 => 12,
            2 => 2544,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 12,
            2 => 2545,
          ),
          1 => 
          array (
            0 => 66,
            1 => 68,
            2 => 2601,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 68,
            2 => 2602,
          ),
          1 => 
          array (
            0 => 66,
            1 => 76,
            2 => 2610,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 76,
            2 => 2611,
          ),
          1 => 
          array (
            0 => 66,
            1 => 158,
            2 => 2693,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 158,
            2 => 2694,
          ),
          1 => 
          array (
            0 => 66,
            1 => 160,
            2 => 2696,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 160,
            2 => 2697,
          ),
          1 => 
          array (
            0 => 66,
            1 => 206,
            2 => 2743,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 206,
            2 => 2744,
          ),
          1 => 
          array (
            0 => 67,
            1 => 4,
            2 => 2753,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
          1 => 'medium',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 63,
        1 => 4,
        2 => 2211,
      ),
      1 => 
      array (
        0 => 63,
        1 => 23,
        2 => 2230,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
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
        0 => 67,
        1 => 8,
        2 => 2760,
      ),
      1 => 
      array (
        0 => 69,
        1 => 4,
        2 => 2766,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
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
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 69,
            1 => 22,
            2 => 2786,
          ),
          1 => 
          array (
            0 => 70,
            1 => 12,
            2 => 2799,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 70,
            1 => 12,
            2 => 2800,
          ),
          1 => 
          array (
            0 => 70,
            1 => 68,
            2 => 2856,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 70,
            1 => 68,
            2 => 2857,
          ),
          1 => 
          array (
            0 => 70,
            1 => 76,
            2 => 2865,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 70,
            1 => 76,
            2 => 2866,
          ),
          1 => 
          array (
            0 => 70,
            1 => 158,
            2 => 2948,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 70,
            1 => 158,
            2 => 2949,
          ),
          1 => 
          array (
            0 => 70,
            1 => 160,
            2 => 2951,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 70,
            1 => 160,
            2 => 2952,
          ),
          1 => 
          array (
            0 => 70,
            1 => 206,
            2 => 2998,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 70,
            1 => 206,
            2 => 2999,
          ),
          1 => 
          array (
            0 => 71,
            1 => 12,
            2 => 3016,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 71,
            1 => 12,
            2 => 3017,
          ),
          1 => 
          array (
            0 => 71,
            1 => 69,
            2 => 3074,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 71,
            1 => 69,
            2 => 3075,
          ),
          1 => 
          array (
            0 => 71,
            1 => 77,
            2 => 3083,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 71,
            1 => 77,
            2 => 3084,
          ),
          1 => 
          array (
            0 => 71,
            1 => 160,
            2 => 3167,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 71,
            1 => 160,
            2 => 3168,
          ),
          1 => 
          array (
            0 => 71,
            1 => 162,
            2 => 3170,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 71,
            1 => 162,
            2 => 3171,
          ),
          1 => 
          array (
            0 => 71,
            1 => 209,
            2 => 3218,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 71,
            1 => 209,
            2 => 3219,
          ),
          1 => 
          array (
            0 => 72,
            1 => 26,
            2 => 3250,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 72,
            1 => 26,
            2 => 3251,
          ),
          1 => 
          array (
            0 => 72,
            1 => 72,
            2 => 3297,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 72,
            1 => 72,
            2 => 3298,
          ),
          1 => 
          array (
            0 => 73,
            1 => 4,
            2 => 3310,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
          1 => 'large',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 69,
        1 => 4,
        2 => 2767,
      ),
      1 => 
      array (
        0 => 69,
        1 => 22,
        2 => 2785,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 73,
        1 => 8,
        2 => 3317,
      ),
      1 => 
      array (
        0 => 75,
        1 => 4,
        2 => 3323,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
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
        2 => '    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 75,
            1 => 32,
            2 => 3353,
          ),
          1 => 
          array (
            0 => 76,
            1 => 26,
            2 => 3380,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 76,
            1 => 26,
            2 => 3381,
          ),
          1 => 
          array (
            0 => 76,
            1 => 72,
            2 => 3427,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 76,
            1 => 72,
            2 => 3428,
          ),
          1 => 
          array (
            0 => 77,
            1 => 12,
            2 => 3448,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 77,
            1 => 12,
            2 => 3449,
          ),
          1 => 
          array (
            0 => 77,
            1 => 69,
            2 => 3506,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 77,
            1 => 69,
            2 => 3507,
          ),
          1 => 
          array (
            0 => 77,
            1 => 77,
            2 => 3515,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 77,
            1 => 77,
            2 => 3516,
          ),
          1 => 
          array (
            0 => 77,
            1 => 160,
            2 => 3599,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 77,
            1 => 160,
            2 => 3600,
          ),
          1 => 
          array (
            0 => 77,
            1 => 162,
            2 => 3602,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 77,
            1 => 162,
            2 => 3603,
          ),
          1 => 
          array (
            0 => 77,
            1 => 209,
            2 => 3650,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 77,
            1 => 209,
            2 => 3651,
          ),
          1 => 
          array (
            0 => 78,
            1 => 12,
            2 => 3668,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 12,
            2 => 3669,
          ),
          1 => 
          array (
            0 => 78,
            1 => 68,
            2 => 3725,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 68,
            2 => 3726,
          ),
          1 => 
          array (
            0 => 78,
            1 => 76,
            2 => 3734,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 76,
            2 => 3735,
          ),
          1 => 
          array (
            0 => 78,
            1 => 158,
            2 => 3817,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 158,
            2 => 3818,
          ),
          1 => 
          array (
            0 => 78,
            1 => 160,
            2 => 3820,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 160,
            2 => 3821,
          ),
          1 => 
          array (
            0 => 78,
            1 => 206,
            2 => 3867,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 206,
            2 => 3868,
          ),
          1 => 
          array (
            0 => 79,
            1 => 4,
            2 => 3877,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
                1 => 'small',
                2 => false,
              ),
            ),
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => '',
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
        0 => 75,
        1 => 4,
        2 => 3324,
      ),
      1 => 
      array (
        0 => 75,
        1 => 32,
        2 => 3352,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
    ),
  ),
  6 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 79,
        1 => 8,
        2 => 3884,
      ),
      1 => 
      array (
        0 => 81,
        1 => 4,
        2 => 3890,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
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
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 81,
            1 => 8,
            2 => 3896,
          ),
          1 => 
          array (
            0 => 82,
            1 => 12,
            2 => 3909,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 82,
            1 => 12,
            2 => 3910,
          ),
          1 => 
          array (
            0 => 82,
            1 => 68,
            2 => 3966,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 82,
            1 => 68,
            2 => 3967,
          ),
          1 => 
          array (
            0 => 82,
            1 => 76,
            2 => 3975,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 82,
            1 => 76,
            2 => 3976,
          ),
          1 => 
          array (
            0 => 82,
            1 => 158,
            2 => 4058,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 82,
            1 => 158,
            2 => 4059,
          ),
          1 => 
          array (
            0 => 82,
            1 => 160,
            2 => 4061,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 82,
            1 => 160,
            2 => 4062,
          ),
          1 => 
          array (
            0 => 82,
            1 => 206,
            2 => 4108,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 82,
            1 => 206,
            2 => 4109,
          ),
          1 => 
          array (
            0 => 83,
            1 => 12,
            2 => 4126,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 83,
            1 => 12,
            2 => 4127,
          ),
          1 => 
          array (
            0 => 83,
            1 => 69,
            2 => 4184,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 83,
            1 => 69,
            2 => 4185,
          ),
          1 => 
          array (
            0 => 83,
            1 => 77,
            2 => 4193,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 83,
            1 => 77,
            2 => 4194,
          ),
          1 => 
          array (
            0 => 83,
            1 => 160,
            2 => 4277,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 83,
            1 => 160,
            2 => 4278,
          ),
          1 => 
          array (
            0 => 83,
            1 => 162,
            2 => 4280,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 83,
            1 => 162,
            2 => 4281,
          ),
          1 => 
          array (
            0 => 83,
            1 => 209,
            2 => 4328,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 83,
            1 => 209,
            2 => 4329,
          ),
          1 => 
          array (
            0 => 84,
            1 => 12,
            2 => 4346,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 84,
            1 => 12,
            2 => 4347,
          ),
          1 => 
          array (
            0 => 84,
            1 => 68,
            2 => 4403,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 84,
            1 => 68,
            2 => 4404,
          ),
          1 => 
          array (
            0 => 84,
            1 => 76,
            2 => 4412,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      15 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 84,
            1 => 76,
            2 => 4413,
          ),
          1 => 
          array (
            0 => 84,
            1 => 158,
            2 => 4495,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      16 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 84,
            1 => 158,
            2 => 4496,
          ),
          1 => 
          array (
            0 => 84,
            1 => 160,
            2 => 4498,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      17 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 84,
            1 => 160,
            2 => 4499,
          ),
          1 => 
          array (
            0 => 84,
            1 => 206,
            2 => 4545,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
        ),
      ),
      18 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 84,
            1 => 206,
            2 => 4546,
          ),
          1 => 
          array (
            0 => 85,
            1 => 4,
            2 => 4555,
          ),
          2 => 'design/admin2/templates/parts/user/menu.tpl',
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
        0 => 81,
        1 => 4,
        2 => 3891,
      ),
      1 => 
      array (
        0 => 81,
        1 => 8,
        2 => 3895,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
    ),
  ),
  8 => 
  array (
    0 => 2,
    1 => false,
    2 => false,
    3 => 
    array (
      0 => 
      array (
        0 => 85,
        1 => 8,
        2 => 4562,
      ),
      1 => 
      array (
        0 => 86,
        1 => 0,
        2 => 4563,
      ),
      2 => 'design/admin2/templates/parts/user/menu.tpl',
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezpreference',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'admin_left_menu_size',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 62,
    1 => 0,
    2 => 2153,
  ),
  1 => 
  array (
    0 => 62,
    1 => 51,
    2 => 2204,
  ),
  2 => 'design/admin2/templates/parts/user/menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
</div>


<div id="widthcontrol-handler" class="hide">
<div class="widthcontrol-grippy"></div>
</div>
';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_d74c7474c47c876d4561cd19dd055681;
$tpl->Level--;
?>
