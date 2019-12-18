<?php

class partial_TCA_ManyToManyRelation_phpt_e4645cc5a4e74ea8fa4f72246b236c69fc385569 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType', $array1)]);

$output0 .= '\',
    \'foreign_table\' => \'';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array2)]);

$output0 .= '\',
    \'MM\' => \'';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.relationTableName', $array3)]);

$output0 .= '\',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '
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
    ],';
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('property.renderType', $array7);
$array6['1'] = ' == \'selectMultipleSideBySide\'';

$expression8 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'selectMultipleSideBySide');};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = $renderChildrenClosure5;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
],
';

return $output0;
}


}
#