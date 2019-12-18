<?php

class partial_TCA_ZeroToManyRelation_phpt_67b6307d145fc92f181368be8476731e8f79aac6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return 'For files or images';
};
$arguments67 = array();

$output66 .= NULL;

$output66 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['section'] = NULL;
$arguments69['partial'] = NULL;
$arguments69['delegate'] = NULL;
$arguments69['renderable'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['optional'] = false;
$arguments69['default'] = NULL;
$arguments69['contentAs'] = NULL;
$arguments69['debug'] = true;
$output71 = '';

$output71 .= 'TCA/';
$array72 = array (
);
$output71 .= $renderingContext->getVariableProvider()->getByPath('property.type', $array72);

$output71 .= 'Property.phpt';
$arguments69['partial'] = $output71;
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['property'] = $renderingContext->getVariableProvider()->getByPath('property', $array74);
$array75 = array (
);$array73['extension'] = $renderingContext->getVariableProvider()->getByPath('domainObject.extension', $array75);
$array76 = array (
);$array73['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array76);
$arguments69['arguments'] = $array73;

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output66 .= '
    ';
return $output66;
};
$arguments64 = array();

$output63 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output104 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';
$array108 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType', $array108)]);

$output107 .= '\',
    \'foreign_table\' => \'';
$array109 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array109)]);

$output107 .= '\',
    \'default\' => 0,
    \'size\' => 10,
    \'autoSizeMax\' => 30,
    \'maxitems\' => 9999,
    \'multiple\' => 0,
    \'fieldControl\' => [
        \'editPopup\' => [
            \'disabled\' => false,
        ],
        \'addRecord\' => [
            \'disabled\' => false,
        ],
        \'listModule\' => [
            \'disabled\' => true,
        ],
    ],
],';
return $output107;
};
$arguments105 = array();
$arguments105['value'] = NULL;
$arguments105['value'] = 'selectMultipleSideBySide';

$output104 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '[
    \'type\' => \'inline\',
    \'foreign_table\' => \'';
$array113 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array113)]);

$output112 .= '\',
    \'foreign_field\' => \'';
$array114 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignKeyName', $array114)]);

$output112 .= '\',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return '
    \'foreign_sortby\' => \'sorting\',';
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments115['__thenClosure'] = $renderChildrenClosure116;

$output112 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output112 .= '
    \'maxitems\' => 9999,
    \'appearance\' => [
        \'collapseAll\' => 0,
        \'levelLinksPosition\' => \'top\',
        \'showSynchronizationLink\' => 1,
        \'showPossibleLocalizationRecords\' => 1,';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return '
        \'useSortable\' => 1,';
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = $renderChildrenClosure121;

$output112 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output112 .= '
        \'showAllLocalizationLink\' => 1
    ],
],';
return $output112;
};
$arguments110 = array();

$output104 .= '';
return $output104;
};
$arguments80 = array();
$arguments80['expression'] = NULL;
$array103 = array (
);$arguments80['expression'] = $renderingContext->getVariableProvider()->getByPath('property.renderType', $array103);

$output79 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'selectMultipleSideBySide';
}): return call_user_func(function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType', $array83)]);

$output82 .= '\',
    \'foreign_table\' => \'';
$array84 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array84)]);

$output82 .= '\',
    \'default\' => 0,
    \'size\' => 10,
    \'autoSizeMax\' => 30,
    \'maxitems\' => 9999,
    \'multiple\' => 0,
    \'fieldControl\' => [
        \'editPopup\' => [
            \'disabled\' => false,
        ],
        \'addRecord\' => [
            \'disabled\' => false,
        ],
        \'listModule\' => [
            \'disabled\' => true,
        ],
    ],
],';
return $output82;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '[
    \'type\' => \'inline\',
    \'foreign_table\' => \'';
$array91 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array91)]);

$output90 .= '\',
    \'foreign_field\' => \'';
$array92 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignKeyName', $array92)]);

$output90 .= '\',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return '
    \'foreign_sortby\' => \'sorting\',';
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output90 .= '
    \'maxitems\' => 9999,
    \'appearance\' => [
        \'collapseAll\' => 0,
        \'levelLinksPosition\' => \'top\',
        \'showSynchronizationLink\' => 1,
        \'showPossibleLocalizationRecords\' => 1,';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return '
        \'useSortable\' => 1,';
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = $renderChildrenClosure99;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output90 .= '
        \'showAllLocalizationLink\' => 1
    ],
],';
return $output90;
});
}
}, array($arguments80));

$output79 .= '
    ';
return $output79;
};
$arguments77 = array();
$arguments77['if'] = NULL;

$output63 .= '';

$output63 .= '
';
return $output63;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('property.type', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return 'For files or images';
};
$arguments4 = array();

$output3 .= NULL;

$output3 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['section'] = NULL;
$arguments6['partial'] = NULL;
$arguments6['delegate'] = NULL;
$arguments6['renderable'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['optional'] = false;
$arguments6['default'] = NULL;
$arguments6['contentAs'] = NULL;
$arguments6['debug'] = true;
$output8 = '';

$output8 .= 'TCA/';
$array9 = array (
);
$output8 .= $renderingContext->getVariableProvider()->getByPath('property.type', $array9);

$output8 .= 'Property.phpt';
$arguments6['partial'] = $output8;
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['property'] = $renderingContext->getVariableProvider()->getByPath('property', $array11);
$array12 = array (
);$array10['extension'] = $renderingContext->getVariableProvider()->getByPath('domainObject.extension', $array12);
$array13 = array (
);$array10['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array13);
$arguments6['arguments'] = $array10;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output14 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output39 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType', $array43)]);

$output42 .= '\',
    \'foreign_table\' => \'';
$array44 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array44)]);

$output42 .= '\',
    \'default\' => 0,
    \'size\' => 10,
    \'autoSizeMax\' => 30,
    \'maxitems\' => 9999,
    \'multiple\' => 0,
    \'fieldControl\' => [
        \'editPopup\' => [
            \'disabled\' => false,
        ],
        \'addRecord\' => [
            \'disabled\' => false,
        ],
        \'listModule\' => [
            \'disabled\' => true,
        ],
    ],
],';
return $output42;
};
$arguments40 = array();
$arguments40['value'] = NULL;
$arguments40['value'] = 'selectMultipleSideBySide';

$output39 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '[
    \'type\' => \'inline\',
    \'foreign_table\' => \'';
$array48 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array48)]);

$output47 .= '\',
    \'foreign_field\' => \'';
$array49 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignKeyName', $array49)]);

$output47 .= '\',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return '
    \'foreign_sortby\' => \'sorting\',';
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output47 .= '
    \'maxitems\' => 9999,
    \'appearance\' => [
        \'collapseAll\' => 0,
        \'levelLinksPosition\' => \'top\',
        \'showSynchronizationLink\' => 1,
        \'showPossibleLocalizationRecords\' => 1,';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return '
        \'useSortable\' => 1,';
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting', $array58);

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = $renderChildrenClosure56;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output47 .= '
        \'showAllLocalizationLink\' => 1
    ],
],';
return $output47;
};
$arguments45 = array();

$output39 .= '';
return $output39;
};
$arguments15 = array();
$arguments15['expression'] = NULL;
$array38 = array (
);$arguments15['expression'] = $renderingContext->getVariableProvider()->getByPath('property.renderType', $array38);

$output14 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'selectMultipleSideBySide';
}): return call_user_func(function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType', $array18)]);

$output17 .= '\',
    \'foreign_table\' => \'';
$array19 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array19)]);

$output17 .= '\',
    \'default\' => 0,
    \'size\' => 10,
    \'autoSizeMax\' => 30,
    \'maxitems\' => 9999,
    \'multiple\' => 0,
    \'fieldControl\' => [
        \'editPopup\' => [
            \'disabled\' => false,
        ],
        \'addRecord\' => [
            \'disabled\' => false,
        ],
        \'listModule\' => [
            \'disabled\' => true,
        ],
    ],
],';
return $output17;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '[
    \'type\' => \'inline\',
    \'foreign_table\' => \'';
$array26 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array26)]);

$output25 .= '\',
    \'foreign_field\' => \'';
$array27 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignKeyName', $array27)]);

$output25 .= '\',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return '
    \'foreign_sortby\' => \'sorting\',';
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
    \'maxitems\' => 9999,
    \'appearance\' => [
        \'collapseAll\' => 0,
        \'levelLinksPosition\' => \'top\',
        \'showSynchronizationLink\' => 1,
        \'showPossibleLocalizationRecords\' => 1,';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return '
        \'useSortable\' => 1,';
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output25 .= '
        \'showAllLocalizationLink\' => 1
    ],
],';
return $output25;
});
}
}, array($arguments15));

$output14 .= '
    ';
return $output14;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#