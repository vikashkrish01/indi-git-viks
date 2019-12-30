<?php

class Standard_action_index_fd8dd643940d26bd472fb381ab01bc7b2eb4e6fb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$array3['label'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_preview.xlf:showHiddenPages';
$array3['name'] = 'preview_showHiddenPages';
$array4 = array (
);$array3['value'] = $renderingContext->getVariableProvider()->getByPath('show.hiddenPages', $array4);
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
$array9['label'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_preview.xlf:showHiddenRecords';
$array9['name'] = 'preview_showHiddenRecords';
$array10 = array (
);$array9['value'] = $renderingContext->getVariableProvider()->getByPath('show.hiddenRecords', $array10);
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
$arguments13['partial'] = 'Form/Checkbox';
// Rendering Array
$array15 = array();
$array15['label'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_preview.xlf:showFluidDebug';
$array15['name'] = 'preview_showFluidDebug';
$array16 = array (
);$array15['value'] = $renderingContext->getVariableProvider()->getByPath('show.fluidDebug', $array16);
$arguments13['arguments'] = $array15;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array17['0'] = 'false';

$expression18 = function($context) {return FALSE;};
$arguments13['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$arguments19['partial'] = 'Form/Hidden';
// Rendering Array
$array21 = array();
$array21['name'] = 'preview_clearCacheId';
$array22 = array (
);$array21['value'] = $renderingContext->getVariableProvider()->getByPath('show.pageId', $array22);
$arguments19['arguments'] = $array21;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array23['0'] = 'false';

$expression24 = function($context) {return FALSE;};
$arguments19['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
';
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
$arguments25['partial'] = 'Form/DateTime';
// Rendering Array
$array27 = array();
$array27['label'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_preview.xlf:simulateDate';
$array27['name'] = 'preview_simulateDate';
$array28 = array (
);$array27['value'] = $renderingContext->getVariableProvider()->getByPath('simulateDate', $array28);
$arguments25['arguments'] = $array27;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array29['0'] = 'false';

$expression30 = function($context) {return FALSE;};
$arguments25['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['debug'] = true;
$arguments31['partial'] = 'Form/Select';
// Rendering Array
$array33 = array();
$array33['label'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_preview.xlf:simulateUserGroup';
$array33['name'] = 'preview_simulateUserGroup';
$array34 = array (
);$array33['options'] = $renderingContext->getVariableProvider()->getByPath('frontendUserGroups.availableGroups', $array34);
$array33['optionValue'] = 'uid';
$array33['optionLabel'] = 'title';
$array35 = array (
);$array33['value'] = $renderingContext->getVariableProvider()->getByPath('frontendUserGroups.selected', $array35);
$arguments31['arguments'] = $array33;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array36['0'] = 'false';

$expression37 = function($context) {return FALSE;};
$arguments31['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#