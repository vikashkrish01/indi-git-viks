<?php

class Standard_action_index_120888b91be9a084fe1dc2234fe1549e79cf395c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['debug'] = true;
$arguments1['partial'] = 'Form/Checkbox';
// Rendering Array
$array3 = array();
$array3['label'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.groupByComponent';
$array3['name'] = 'debug_log_groupByComponent';
$array4 = array (
);$array3['value'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array4);
$arguments1['arguments'] = $array3;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array5['0'] = 'false';

$expression6 = function($context) {return FALSE;};
$arguments1['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['section'] = NULL;
$arguments7['partial'] = NULL;
$arguments7['delegate'] = NULL;
$arguments7['renderable'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$arguments7['default'] = NULL;
$arguments7['contentAs'] = NULL;
$arguments7['debug'] = true;
$arguments7['partial'] = 'Form/Checkbox';
// Rendering Array
$array9 = array();
$array9['label'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.groupByLevel';
$array9['name'] = 'debug_log_groupByLevel';
$array10 = array (
);$array9['value'] = $renderingContext->getVariableProvider()->getByPath('groupByLevel', $array10);
$arguments7['arguments'] = $array9;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array11['0'] = 'false';

$expression12 = function($context) {return FALSE;};
$arguments7['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['debug'] = true;
$arguments13['partial'] = 'Form/Select';
// Rendering Array
$array15 = array();
$array15['label'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.startLevel';
$array15['name'] = 'debug_log_startLevel';
$array16 = array (
);$array15['options'] = $renderingContext->getVariableProvider()->getByPath('levels', $array16);
$array15['optionValue'] = 'level';
$array15['optionLabel'] = 'levelName';
$array17 = array (
);$array15['value'] = $renderingContext->getVariableProvider()->getByPath('startLevel', $array17);
$arguments13['arguments'] = $array15;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array18['0'] = 'false';

$expression19 = function($context) {return FALSE;};
$arguments13['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#