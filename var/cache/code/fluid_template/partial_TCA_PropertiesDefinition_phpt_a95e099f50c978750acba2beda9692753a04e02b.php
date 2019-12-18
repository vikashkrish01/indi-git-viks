<?php

class partial_TCA_PropertiesDefinition_phpt_a95e099f50c978750acba2beda9692753a04e02b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
    \'';
$array5 = array (
);
$output4 .= $renderingContext->getVariableProvider()->getByPath('property.fieldName', $array5);

$output4 .= '\' => [
        \'exclude\' => ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return 'true';
};
$arguments12 = array();

$output11 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return 'false';
};
$arguments14 = array();
$arguments14['if'] = NULL;

$output11 .= '';
return $output11;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('property.excludeField', $array9);

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
return 'true';
};
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
return 'false';
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output4 .= ',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return '
        \'l10n_mode\' => \'exclude\',';
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('property.l10nModeExclude', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = $renderChildrenClosure17;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output4 .= '
        \'label\' => \'LLL:EXT:';
$array21 = array (
);
$output4 .= $renderingContext->getVariableProvider()->getByPath('domainObject.extension.extensionKey', $array21);

$output4 .= '/Resources/Private/Language/locallang_db.xlf:';
$array22 = array (
);
$output4 .= $renderingContext->getVariableProvider()->getByPath('property.labelNamespace', $array22);

$output4 .= '\',
        \'config\' => ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\IndentViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['section'] = NULL;
$arguments25['partial'] = NULL;
$arguments25['delegate'] = NULL;
$arguments25['renderable'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$arguments25['default'] = NULL;
$arguments25['contentAs'] = NULL;
$arguments25['debug'] = true;
$output27 = '';

$output27 .= 'TCA/';
$array28 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('property.dataType', $array28);

$output27 .= '.phpt';
$arguments25['partial'] = $output27;
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['property'] = $renderingContext->getVariableProvider()->getByPath('property', $array30);
$array31 = array (
);$array29['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array31);
$array32 = array (
);$array29['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array32);
$arguments25['arguments'] = $array29;
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
};
$arguments23 = array();
$arguments23['indentation'] = NULL;
$arguments23['indentation'] = 2;

$output4 .= EBT\ExtensionBuilder\ViewHelpers\Format\IndentViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output4 .= '
    ],';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array3);
$arguments1['as'] = 'property';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#