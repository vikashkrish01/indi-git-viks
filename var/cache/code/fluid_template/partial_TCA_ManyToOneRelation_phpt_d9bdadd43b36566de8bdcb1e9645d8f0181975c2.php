<?php

class partial_TCA_ManyToOneRelation_phpt_d9bdadd43b36566de8bdcb1e9645d8f0181975c2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output14 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
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
    \'maxitems\' => 1,
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
};
$arguments15 = array();
$arguments15['value'] = NULL;
$arguments15['value'] = 'selectMultipleSideBySide';

$output14 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'selectSingle\',
    \'foreign_table\' => \'';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array23)]);

$output22 .= '\',
    \'default\' => 0,
    \'minitems\' => 0,
    \'maxitems\' => 1,
],';
return $output22;
};
$arguments20 = array();

$output14 .= '';
return $output14;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array13 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('property.renderType', $array13);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'selectMultipleSideBySide';
}): return call_user_func(function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';
$array4 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType', $array4)]);

$output3 .= '\',
    \'foreign_table\' => \'';
$array5 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array5)]);

$output3 .= '\',
    \'default\' => 0,
    \'size\' => 10,
    \'autoSizeMax\' => 30,
    \'maxitems\' => 1,
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
return $output3;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'selectSingle\',
    \'foreign_table\' => \'';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array12)]);

$output11 .= '\',
    \'default\' => 0,
    \'minitems\' => 0,
    \'maxitems\' => 1,
],';
return $output11;
});
}
}, array($arguments1));

$output0 .= '
';

return $output0;
}


}
#