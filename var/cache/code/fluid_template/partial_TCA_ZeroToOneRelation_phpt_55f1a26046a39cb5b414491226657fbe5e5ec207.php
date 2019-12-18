<?php

class partial_TCA_ZeroToOneRelation_phpt_55f1a26046a39cb5b414491226657fbe5e5ec207 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output20 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'selectSingle\',
    \'foreign_table\' => \'';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array24)]);

$output23 .= '\',
    \'default\' => 0,
    \'minitems\' => 0,
    \'maxitems\' => 1,
],';
return $output23;
};
$arguments21 = array();
$arguments21['value'] = NULL;
$arguments21['value'] = 'selectSingle';

$output20 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType', $array28)]);

$output27 .= '\',
    \'foreign_table\' => \'';
$array29 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array29)]);

$output27 .= '\',
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
return $output27;
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['value'] = 'selectMultipleSideBySide';

$output20 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '[
    \'type\' => \'inline\',
    \'foreign_table\' => \'';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array33)]);

$output32 .= '\',
    \'minitems\' => 0,
    \'maxitems\' => 1,
    \'appearance\' => [
        \'collapseAll\' => 0,
        \'levelLinksPosition\' => \'top\',
        \'showSynchronizationLink\' => 1,
        \'showPossibleLocalizationRecords\' => 1,
        \'showAllLocalizationLink\' => 1
    ],
],';
return $output32;
};
$arguments30 = array();

$output20 .= '';
return $output20;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array19 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('property.renderType', $array19);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'selectSingle';
}): return call_user_func(function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'selectSingle\',
    \'foreign_table\' => \'';
$array4 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array4)]);

$output3 .= '\',
    \'default\' => 0,
    \'minitems\' => 0,
    \'maxitems\' => 1,
],';
return $output3;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'selectMultipleSideBySide';
}): return call_user_func(function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType', $array10)]);

$output9 .= '\',
    \'foreign_table\' => \'';
$array11 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array11)]);

$output9 .= '\',
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
return $output9;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '[
    \'type\' => \'inline\',
    \'foreign_table\' => \'';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName', $array18)]);

$output17 .= '\',
    \'minitems\' => 0,
    \'maxitems\' => 1,
    \'appearance\' => [
        \'collapseAll\' => 0,
        \'levelLinksPosition\' => \'top\',
        \'showSynchronizationLink\' => 1,
        \'showPossibleLocalizationRecords\' => 1,
        \'showAllLocalizationLink\' => 1
    ],
],';
return $output17;
});
}
}, array($arguments1));

$output0 .= '





';

return $output0;
}


}
#