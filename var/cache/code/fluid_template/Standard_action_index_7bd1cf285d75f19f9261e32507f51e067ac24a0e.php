<?php

class Standard_action_index_7bd1cf285d75f19f9261e32507f51e067ac24a0e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '# coding: utf-8

# #####
#
# Settings.cfg - A TYPO3 Documentation Project\'s Configuration File
# Information about Settings.cfg:
#   https://docs.typo3.org/typo3cms/HowToDocument/GeneralConventions/DirectoryFilenames.html#settings-cfg
#
# About Syntax:
#   See https://docs.python.org/2/library/configparser.html
#
# Attention:
#   Only " ;" can start an inline comment.
#   This is: blank PLUS semicolon!
#
# #####

[general]

# .................................................................................
# ...   (required) title (displayed in left sidebar (desktop) or top panel (mobile)
# .................................................................................

project     = ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.name', $array1)]);

$output0 .= '

# .................................................................................
# ...   (recommended) version, displayed next to title (desktop) and in <meta name="book-version"
# .................................................................................

release     = ';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array2)]);

$output0 .= '

# .................................................................................
# ...  (recommended) displayed in footer
# .................................................................................

copyright   = Copyright since ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return 'NOW';
};
$arguments3 = array();
$arguments3['date'] = NULL;
$arguments3['format'] = '';
$arguments3['base'] = NULL;
$arguments3['format'] = 'Y';
$renderChildrenClosure4 = ($arguments3['date'] !== null) ? function() use ($arguments3) { return $arguments3['date']; } : $renderChildrenClosure4;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= ' by ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('counter.index', $array12);
$array11['1'] = ' > 0';

$expression13 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);
$array14 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('person.name', $array14)]);
return $output8;
};
$arguments5 = array();
$arguments5['each'] = NULL;
$arguments5['as'] = NULL;
$arguments5['key'] = NULL;
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$array7 = array (
);$arguments5['each'] = $renderingContext->getVariableProvider()->getByPath('extension.persons', $array7);
$arguments5['as'] = 'person';
$arguments5['iteration'] = 'counter';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

[html_theme_options]

# .................................................................................
# ...  (recommended) to get the "Edit me on Github Button"
# .................................................................................

#github_branch        = master
#github_repository    = TYPO3-Documentation/TYPO3CMS-Example-ExtensionManual


# .................................................................................
# ...  (recommended) Fill in values to get links in the "Related Links" section
# .................................................................................

# usually an email address
project_contact      =

# URL of online discussions, you can leave this blank
project_discussions  =

# URL of webpage of your extension (if it has one)
project_home         =

# URL to Issues
project_issues       =

# URL of repository
project_repository   =


[intersphinx_mapping]

# .................................................................................
# for cross-referencing across manuals (intersphinx) with :ref:
#
# You must uncomment all manuals you use in your cross-references
#
# Example usage:
#   :ref:`t3contribute:start` will link to start page of Contribution Guide
# .................................................................................

h2document    = https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/
# t3coreapi     = https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/
# t3editors     = https://docs.typo3.org/m/typo3/tutorial-editors/master/en-us/
# t3extbasebook = https://docs.typo3.org/m/typo3/book-extbasefluid/master/en-us/Index.html
# t3install     = https://docs.typo3.org/m/typo3/guide-installation/master/en-us/
# t3l10n        = https://docs.typo3.org/m/typo3/guide-frontendlocalization/master/en-us/
# t3start       = https://docs.typo3.org/m/typo3/tutorial-getting-started/master/en-us/
# t3sitepackage = https://docs.typo3.org/m/typo3/tutorial-sitepackage/master/en-us/
# t3tca         = https://docs.typo3.org/m/typo3/reference-tca/master/en-us/
# t3templating  = https://docs.typo3.org/m/typo3/tutorial-templating-with-fluid/master/en-us/
# t3ts45        = https://docs.typo3.org/m/typo3/tutorial-typoscript-in-45-minutes/master/en-us/
# t3tsconfig    = https://docs.typo3.org/m/typo3/reference-tsconfig/master/en-us/
t3tsref       = https://docs.typo3.org/m/typo3/reference-typoscript/master/en-us/

[extensions]

# This is required for embedding YouTube videos

any_name_youtube = sphinxcontrib.youtube
';

return $output0;
}


}
#