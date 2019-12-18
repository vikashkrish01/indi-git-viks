<?php

class Standard_action_index_a286821d252f9a6db29adf1751c62da2346bf7fe extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'k' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<?php
return [
    \'ctrl\' => [
        \'title\' => \'LLL:EXT:';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array1)]);

$output0 .= '/Resources/Private/Language/locallang_db.xlf:';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array2)]);

$output0 .= '\',
        \'label\' => \'';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.listModuleValueLabel', $array3)]);

$output0 .= '\',
        \'tstamp\' => \'tstamp\',
        \'crdate\' => \'crdate\',
        \'cruser_id\' => \'cruser_id\',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '
        \'sortby\' => \'sorting\',';
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.sorting', $array7);

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = $renderChildrenClosure5;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return '
        \'versioningWS\' => true,';
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportVersioning', $array12);

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return '
        \'languageField\' => \'sys_language_uid\',
        \'transOrigPointerField\' => \'l10n_parent\',
        \'transOrigDiffSourceField\' => \'l10n_diffsource\',';
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportLocalization', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = $renderChildrenClosure15;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return '
        \'delete\' => \'deleted\',';
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addDeletedField', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = $renderChildrenClosure20;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
        \'enablecolumns\' => [';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return '
            \'disabled\' => \'hidden\',';
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addHiddenField', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return '
            \'starttime\' => \'starttime\',
            \'endtime\' => \'endtime\',';
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addStarttimeEndtimeFields', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = $renderChildrenClosure30;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
        ],
        \'searchFields\' => \'';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output37 = '';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.fieldName', $array38)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('it.isLast', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['else'] = ',';
$arguments39['__thenClosure'] = $renderChildrenClosure40;

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
return $output37;
};
$arguments34 = array();
$arguments34['each'] = NULL;
$arguments34['as'] = NULL;
$arguments34['key'] = NULL;
$arguments34['reverse'] = false;
$arguments34['iteration'] = NULL;
$array36 = array (
);$arguments34['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.searchableProperties', $array36);
$arguments34['as'] = 'property';
$arguments34['iteration'] = 'it';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '\',
        \'iconfile\' => \'EXT:';
$array44 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.extension.extensionKey', $array44)]);

$output0 .= '/Resources/Public/Icons/';
$array45 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array45)]);

$output0 .= '.gif\'
    ],
    \'interface\' => [
        \'showRecordFieldList\' => \'';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return 'sys_language_uid, l10n_parent, l10n_diffsource, ';
};
$arguments46 = array();
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportLocalization', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments46['__thenClosure'] = $renderChildrenClosure47;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return 'hidden, ';
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addHiddenField', $array54);

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output59 = '';
$array60 = array (
);
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.fieldName', $array60)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments66 = array();
$arguments66['if'] = NULL;
return '';
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array64);

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);
return $output59;
};
$arguments56 = array();
$arguments56['each'] = NULL;
$arguments56['as'] = NULL;
$arguments56['key'] = NULL;
$arguments56['reverse'] = false;
$arguments56['iteration'] = NULL;
$array58 = array (
);$arguments56['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array58);
$arguments56['as'] = 'property';
$arguments56['iteration'] = 'i';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output0 .= '\',
    ],
    \'types\' => [
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output75 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '\'';
$array79 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.recordType', $array79)]);

$output78 .= '\'';
return $output78;
};
$arguments76 = array();

$output75 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return '\'1\'';
};
$arguments80 = array();
$arguments80['if'] = NULL;

$output75 .= '';
return $output75;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.hasChildren', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '\'';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.recordType', $array71)]);

$output70 .= '\'';
return $output70;
};
$arguments68['__elseClosures'][] = function() use ($renderingContext, $self) {
return '\'1\'';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= ' => [\'showitem\' => \'';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return 'sys_language_uid, l10n_parent, l10n_diffsource, ';
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportLocalization', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return 'hidden, ';
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addHiddenField', $array90);

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = $renderChildrenClosure88;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output95 = '';
$array96 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.fieldName', $array96)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('i.isLast', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['else'] = ', ';
$arguments97['__thenClosure'] = $renderChildrenClosure98;

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);
return $output95;
};
$arguments92 = array();
$arguments92['each'] = NULL;
$arguments92['as'] = NULL;
$arguments92['key'] = NULL;
$arguments92['reverse'] = false;
$arguments92['iteration'] = NULL;
$array94 = array (
);$arguments92['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array94);
$arguments92['as'] = 'property';
$arguments92['iteration'] = 'i';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return ', --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime';
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addStarttimeEndtimeFields', $array105);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output0 .= '\'],
    ],
    \'columns\' => [';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
        \'sys_language_uid\' => [
            \'exclude\' => true,
            \'label\' => \'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language\',
            \'config\' => [
                \'type\' => \'select\',
                \'renderType\' => \'selectSingle\',
                \'special\' => \'languages\',
                \'items\' => [
                    [
                        \'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages\',
                        -1,
                        \'flags-multiple\'
                    ]
                ],
                \'default\' => 0,
            ],
        ],
        \'l10n_parent\' => [
            \'displayCond\' => \'FIELD:sys_language_uid:>:0\',
            \'exclude\' => true,
            \'label\' => \'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent\',
            \'config\' => [
                \'type\' => \'select\',
                \'renderType\' => \'selectSingle\',
                \'default\' => 0,
                \'items\' => [
                    [\'\', 0],
                ],
                \'foreign_table\' => \'';
$array113 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array113)]);

$output112 .= '\',
                \'foreign_table_where\' => \'AND ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '#';
$array117 = array (
);
$output116 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array117);
return $output116;
};
$arguments114 = array();

$output112 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output112 .= '.';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return '#pid';
};
$arguments118 = array();

$output112 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output112 .= '=###CURRENT_PID### AND ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '#';
$array123 = array (
);
$output122 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array123);
return $output122;
};
$arguments120 = array();

$output112 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output112 .= '.';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return '#sys_language_uid';
};
$arguments124 = array();

$output112 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output112 .= ' IN (-1,0)\',
            ],
        ],
        \'l10n_diffsource\' => [
            \'config\' => [
                \'type\' => \'passthrough\',
            ],
        ],';
return $output112;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportLocalization', $array110);

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['__thenClosure'] = $renderChildrenClosure108;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return '
        \'t3ver_label\' => [
            \'label\' => \'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel\',
            \'config\' => [
                \'type\' => \'input\',
                \'size\' => 30,
                \'max\' => 255,
            ],
        ],';
};
$arguments126 = array();
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$arguments126['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('extension.supportVersioning', $array129);

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments126['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments126['__thenClosure'] = $renderChildrenClosure127;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return '
        \'hidden\' => [
            \'exclude\' => true,
            \'label\' => \'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible\',
            \'config\' => [
                \'type\' => \'check\',
                \'renderType\' => \'checkboxToggle\',
                \'items\' => [
                    [
                        0 => \'\',
                        1 => \'\',
                        \'invertStateDisplay\' => true
                    ]
                ],
            ],
        ],';
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addHiddenField', $array134);

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = $renderChildrenClosure132;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return '
        \'starttime\' => [
            \'exclude\' => true,
            \'label\' => \'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime\',
            \'config\' => [
                \'type\' => \'input\',
                \'renderType\' => \'inputDateTime\',
                \'eval\' => \'datetime,int\',
                \'default\' => 0,
                \'behaviour\' => [
                    \'allowLanguageSynchronization\' => true
                ]
            ],
        ],
        \'endtime\' => [
            \'exclude\' => true,
            \'label\' => \'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime\',
            \'config\' => [
                \'type\' => \'input\',
                \'renderType\' => \'inputDateTime\',
                \'eval\' => \'datetime,int\',
                \'default\' => 0,
                \'range\' => [
                    \'upper\' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                \'behaviour\' => [
                    \'allowLanguageSynchronization\' => true
                ]
            ],
        ],';
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.addStarttimeEndtimeFields', $array139);

$expression140 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['__thenClosure'] = $renderChildrenClosure137;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\IndentViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['section'] = NULL;
$arguments143['partial'] = NULL;
$arguments143['delegate'] = NULL;
$arguments143['renderable'] = NULL;
$arguments143['arguments'] = array (
);
$arguments143['optional'] = false;
$arguments143['default'] = NULL;
$arguments143['contentAs'] = NULL;
$arguments143['debug'] = true;
$arguments143['partial'] = 'TCA/PropertiesDefinition.phpt';
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array146);
$array147 = array (
);$array145['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array147);
$arguments143['arguments'] = $array145;
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);
};
$arguments141 = array();
$arguments141['indentation'] = NULL;
$arguments141['indentation'] = 1;

$output0 .= EBT\ExtensionBuilder\ViewHelpers\Format\IndentViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
        \'';
$array154 = array (
);
$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array154)]);

$output153 .= '\' => [
            \'config\' => [
                \'type\' => \'passthrough\',
            ],
        ],';
return $output153;
};
$arguments148 = array();
$arguments148['each'] = NULL;
$arguments148['as'] = NULL;
$arguments148['key'] = NULL;
$arguments148['reverse'] = false;
$arguments148['iteration'] = NULL;
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['domainObject'] = NULL;
$array152 = array (
);$arguments150['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array152);
$arguments148['each'] = EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);
$arguments148['as'] = 'relation';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output0 .= '
    ],
];
';

return $output0;
}


}
#