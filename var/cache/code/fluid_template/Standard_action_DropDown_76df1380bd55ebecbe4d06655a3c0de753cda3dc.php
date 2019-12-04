<?php

class Standard_action_DropDown_76df1380bd55ebecbe4d06655a3c0de753cda3dc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['pageTitle'] = '';
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['addInlineSettings'] = NULL;
// Rendering Array
$array3 = array();
$array3['0'] = 'TYPO3/CMS/Opendocs/Toolbar/OpendocsMenu';
$arguments1['includeRequireJsModules'] = $array3;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

<h3 class="dropdown-headline">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['key'] = 'toolbaritem';
$arguments4['extensionName'] = 'opendocs';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '
</h3>
<hr>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'no_docs';
$arguments60['extensionName'] = 'opendocs';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '
		</p>
	';
return $output59;
};
$arguments57 = array();

$output56 .= '';

$output56 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
			<h3 class="dropdown-headline">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'open_docs';
$arguments71['extensionName'] = 'opendocs';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '
			</h3>
			<div class="dropdown-table">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
					<div class="dropdown-table-row t3js-topbar-opendocs-item">
						<div class="dropdown-table-column dropdown-table-icon">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['table'] = NULL;
$arguments77['row'] = NULL;
$arguments77['size'] = 'small';
$arguments77['alternativeMarkupIdentifier'] = NULL;
$array79 = array (
);$arguments77['table'] = $renderingContext->getVariableProvider()->getByPath('openDocument.table', $array79);
$array80 = array (
);$arguments77['row'] = $renderingContext->getVariableProvider()->getByPath('openDocument.record', $array80);

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
						</div>
						<div class="dropdown-table-column dropdown-table-title">
							<a class="dropdown-table-title-ellipsis" href="#" onclick="';
$array81 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.onClickCode', $array81)]);

$output76 .= '"
								 target="contentIframe">
								';
$array82 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.label', $array82)]);

$output76 .= '
							</a>
						</div>
						<div class="dropdown-table-column dropdown-table-actions">
							<a href="#" class="dropdown-table-actions-btn dropdown-table-actions-btn-close t3js-topbar-opendocs-close"
								 data-opendocsidentifier="';
$array83 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.md5sum', $array83)]);

$output76 .= '"
								 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$arguments84['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:rm.closeDoc';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output76 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['identifier'] = NULL;
$arguments86['size'] = 'small';
$arguments86['overlay'] = NULL;
$arguments86['state'] = 'default';
$arguments86['alternativeMarkupIdentifier'] = NULL;
$arguments86['identifier'] = 'actions-close';
$arguments86['alternativeMarkupIdentifier'] = 'inline';

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output76 .= '
							</a>
						</div>
					</div>
				';
return $output76;
};
$arguments73 = array();
$arguments73['each'] = NULL;
$arguments73['as'] = NULL;
$arguments73['key'] = NULL;
$arguments73['reverse'] = false;
$arguments73['iteration'] = NULL;
$array75 = array (
);$arguments73['each'] = $renderingContext->getVariableProvider()->getByPath('openDocuments', $array75);
$arguments73['as'] = 'openDocument';

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output70 .= '
			</div>
			<hr>
		';
return $output70;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('openDocuments', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = $renderChildrenClosure66;

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
			<h3 class="dropdown-headline">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['key'] = NULL;
$arguments94['id'] = NULL;
$arguments94['default'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['languageKey'] = NULL;
$arguments94['alternativeLanguageKeys'] = NULL;
$arguments94['key'] = 'recent_docs';
$arguments94['extensionName'] = 'opendocs';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output93 .= '
			</h3>
			<div class="dropdown-table">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
					<div class="dropdown-table-row t3js-topbar-recentdoc">
						<div class="dropdown-table-column dropdown-table-icon">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['table'] = NULL;
$arguments100['row'] = NULL;
$arguments100['size'] = 'small';
$arguments100['alternativeMarkupIdentifier'] = NULL;
$array102 = array (
);$arguments100['table'] = $renderingContext->getVariableProvider()->getByPath('recentDocument.table', $array102);
$array103 = array (
);$arguments100['row'] = $renderingContext->getVariableProvider()->getByPath('recentDocument.record', $array103);

$output99 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
						</div>
						<div class="dropdown-table-column dropdown-table-title">
							<a class="dropdown-table-title-ellipsis" href="#" onclick="';
$array104 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.onClickCode', $array104)]);

$output99 .= '"
								 target="contentIframe">
								';
$array105 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.label', $array105)]);

$output99 .= '
							</a>
						</div>
					</div>
				';
return $output99;
};
$arguments96 = array();
$arguments96['each'] = NULL;
$arguments96['as'] = NULL;
$arguments96['key'] = NULL;
$arguments96['reverse'] = false;
$arguments96['iteration'] = NULL;
$array98 = array (
);$arguments96['each'] = $renderingContext->getVariableProvider()->getByPath('recentDocuments', $array98);
$arguments96['as'] = 'recentDocument';

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output93 .= '
			</div>
		';
return $output93;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('recentDocuments', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = $renderChildrenClosure89;

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output64 .= '
	';
return $output64;
};
$arguments62 = array();
$arguments62['if'] = NULL;

$output56 .= '';

$output56 .= '
';
return $output56;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('noDocs', $array54);

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'no_docs';
$arguments9['extensionName'] = 'opendocs';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '
		</p>
	';
return $output8;
};
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
			<h3 class="dropdown-headline">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'open_docs';
$arguments18['extensionName'] = 'opendocs';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '
			</h3>
			<div class="dropdown-table">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
					<div class="dropdown-table-row t3js-topbar-opendocs-item">
						<div class="dropdown-table-column dropdown-table-icon">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['table'] = NULL;
$arguments24['row'] = NULL;
$arguments24['size'] = 'small';
$arguments24['alternativeMarkupIdentifier'] = NULL;
$array26 = array (
);$arguments24['table'] = $renderingContext->getVariableProvider()->getByPath('openDocument.table', $array26);
$array27 = array (
);$arguments24['row'] = $renderingContext->getVariableProvider()->getByPath('openDocument.record', $array27);

$output23 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
						</div>
						<div class="dropdown-table-column dropdown-table-title">
							<a class="dropdown-table-title-ellipsis" href="#" onclick="';
$array28 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.onClickCode', $array28)]);

$output23 .= '"
								 target="contentIframe">
								';
$array29 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.label', $array29)]);

$output23 .= '
							</a>
						</div>
						<div class="dropdown-table-column dropdown-table-actions">
							<a href="#" class="dropdown-table-actions-btn dropdown-table-actions-btn-close t3js-topbar-opendocs-close"
								 data-opendocsidentifier="';
$array30 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.md5sum', $array30)]);

$output23 .= '"
								 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$arguments31['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:rm.closeDoc';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output23 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['identifier'] = NULL;
$arguments33['size'] = 'small';
$arguments33['overlay'] = NULL;
$arguments33['state'] = 'default';
$arguments33['alternativeMarkupIdentifier'] = NULL;
$arguments33['identifier'] = 'actions-close';
$arguments33['alternativeMarkupIdentifier'] = 'inline';

$output23 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output23 .= '
							</a>
						</div>
					</div>
				';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$array22 = array (
);$arguments20['each'] = $renderingContext->getVariableProvider()->getByPath('openDocuments', $array22);
$arguments20['as'] = 'openDocument';

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
			</div>
			<hr>
		';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('openDocuments', $array15);

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
			<h3 class="dropdown-headline">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = 'recent_docs';
$arguments41['extensionName'] = 'opendocs';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '
			</h3>
			<div class="dropdown-table">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
					<div class="dropdown-table-row t3js-topbar-recentdoc">
						<div class="dropdown-table-column dropdown-table-icon">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['table'] = NULL;
$arguments47['row'] = NULL;
$arguments47['size'] = 'small';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$array49 = array (
);$arguments47['table'] = $renderingContext->getVariableProvider()->getByPath('recentDocument.table', $array49);
$array50 = array (
);$arguments47['row'] = $renderingContext->getVariableProvider()->getByPath('recentDocument.record', $array50);

$output46 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
						</div>
						<div class="dropdown-table-column dropdown-table-title">
							<a class="dropdown-table-title-ellipsis" href="#" onclick="';
$array51 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.onClickCode', $array51)]);

$output46 .= '"
								 target="contentIframe">
								';
$array52 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.label', $array52)]);

$output46 .= '
							</a>
						</div>
					</div>
				';
return $output46;
};
$arguments43 = array();
$arguments43['each'] = NULL;
$arguments43['as'] = NULL;
$arguments43['key'] = NULL;
$arguments43['reverse'] = false;
$arguments43['iteration'] = NULL;
$array45 = array (
);$arguments43['each'] = $renderingContext->getVariableProvider()->getByPath('recentDocuments', $array45);
$arguments43['as'] = 'recentDocument';

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output40 .= '
			</div>
		';
return $output40;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('recentDocuments', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output11 .= '
	';
return $output11;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#