<?php

class partial_TCA_ImageProperty_phpt_a5e3cf7a7b87a18d2930ae172cdc689ebd6eb26c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility::getFileFieldTCAConfig(
    \'';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.fieldName', $array1)]);

$output0 .= '\',
    [
        \'appearance\' => [
            \'createNewRelationLinkTitle\' => \'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference\'
        ],
        \'foreign_types\' => [
            \'0\' => [
                \'showitem\' => \'
                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette\'
            ],
            \\TYPO3\\CMS\\Core\\Resource\\File::FILETYPE_TEXT => [
                \'showitem\' => \'
                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette\'
            ],
            \\TYPO3\\CMS\\Core\\Resource\\File::FILETYPE_IMAGE => [
                \'showitem\' => \'
                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette\'
            ],
            \\TYPO3\\CMS\\Core\\Resource\\File::FILETYPE_AUDIO => [
                \'showitem\' => \'
                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette\'
            ],
            \\TYPO3\\CMS\\Core\\Resource\\File::FILETYPE_VIDEO => [
                \'showitem\' => \'
                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette\'
            ],
            \\TYPO3\\CMS\\Core\\Resource\\File::FILETYPE_APPLICATION => [
                \'showitem\' => \'
                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                --palette--;;filePalette\'
            ]
        ],
        \'foreign_match_fields\' => [
            \'fieldname\' => \'';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.fieldName', $array2)]);

$output0 .= '\',
            \'tablenames\' => \'';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.domainObject.databaseTableName', $array3)]);

$output0 .= '\',
            \'table_local\' => \'sys_file\',
        ]';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= ',
        \'maxitems\' => ';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.maxItems', $array10)]);
return $output9;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('property.maxItems', $array7);

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
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return ',
        \'minitems\' => 1';
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('property.required', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
    ],
    $GLOBALS[\'TYPO3_CONF_VARS\'][\'GFX\'][\'imagefile_ext\']
),
';

return $output0;
}


}
#