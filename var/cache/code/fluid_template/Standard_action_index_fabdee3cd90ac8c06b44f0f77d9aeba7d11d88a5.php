<?php

class Standard_action_index_fabdee3cd90ac8c06b44f0f77d9aeba7d11d88a5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '﻿.. ---------------------------------------------------------------
   This is the start file. It gets displayed as first page
   https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/GeneralConventions/DirectoryFilenames.html#supported-filenames-and-formats
   ---------------------------------------------------------------

.. ---------------------------------------------------------------
   More information about creating an extension manual:
   https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/WritingDocForExtension/CreateWithExtensionBuilder.html
   ---------------------------------------------------------------

.. ---------------------------------------------------------------
   comments start with 2 dots and a blank
   they can continue on the next line
   ---------------------------------------------------------------

.. ---------------------------------------------------------------
   every .rst file should include Includes.txt
   use correct path!
   ---------------------------------------------------------------

.. include:: Includes.txt

.. ---------------------------------------------------------------
   Every manual should have a start label for cross-referencing to
   start page. Do not remove this!
   ---------------------------------------------------------------

.. _start:

.. ---------------------------------------------------------------
   This is the doctitle
   ---------------------------------------------------------------

=============================================================
';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.name', $array1)]);

$output0 .= '
=============================================================

:Extension Key:
    ';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array2)]);

$output0 .= '

:Version:
    |release|

:Language:
    en

:Copyright:
    ';
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

$output0 .= '

:Author:
    ';
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

:Email:
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('counter.index', $array22);
$array21['1'] = ' > 0';

$expression23 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = $renderChildrenClosure20;

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
$array24 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('person.email', $array24)]);
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('extension.persons', $array17);
$arguments15['as'] = 'person';
$arguments15['iteration'] = 'counter';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '

:License:
   This extension documentation is published under the `CC BY-NC-SA 4.0 <https://creativecommons.org/licenses/by-nc-sa/4.0/>`__ (Creative Commons) license



';
$array25 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array25)]);

$output0 .= '



**TYPO3**

   The content of this document is related to TYPO3 CMS,
   a GNU/GPL CMS/Framework available from `typo3.org
   <https://typo3.org/>`_ .

**Community Documentation:**

    This documentation is community documentation for the TYPO3 extension ';
$array26 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.name', $array26)]);

$output0 .= '

    It is maintained as part of this third party extension.

    If you find an error or something is missing, please:
    `Report a Problem <https://github.com/TYPO3-Documentation/TYPO3CMS-Example-ExtensionManual/issues/new>`__

**Sitemap:**

   :ref:`sitemap`

.. ---------------------------------------------------------------
   This generates the menu
   https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/WritingReST/MenuHierarchy.html
   ---------------------------------------------------------------

.. toctree::
   :maxdepth: 3
   :hidden:

   Introduction/Index
   User/Index
   Installation/Index
   Configuration/Index
   Developer/Index
   KnownProblems/Index
   ToDoList/Index
   ChangeLog/Index
   Sitemap
';

return $output0;
}


}
#