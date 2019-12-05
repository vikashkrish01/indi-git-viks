<?php

class Standard_action_show_52831983c7604672b47f7e72a86b877323dfea57 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'DocHeader';
}
public function hasLayout() {
return TRUE;
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
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
		<div class="viewpage-item">
			<div class="viewpage-topbar t3js-viewpage-topbar">
				<div class="viewpage-topbar-orientation t3js-viewpage-topbar-orientation">
					<a href="#" class="t3js-change-orientation">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.orientation', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output8 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output8 .= '
					</a>
				</div>
				<div class="viewpage-topbar-preset">
				<span class="dropdown">
					<button class="dropdown-toggle" type="button" id="viewpage-topbar-preset-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<span class="t3js-viewpage-current-label">
							';
$array12 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.label', $array12)]);

$output8 .= '
						</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="viewpage-topbar-preset-button">
						<li role="separator" class="divider"></li>
						<li>
							<a href="#" class="t3js-preset-maximized t3js-change-preset" data-key="maximized" data-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'maximized';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output8 .= '" data-width data-height>
								<span class="viewpage-preset-item">
									<span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.fullscreen', $array17);
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output8 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output8 .= '</span>
									<span class="viewpage-preset-item-label">
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
$arguments18['key'] = 'maximized';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output8 .= '
									</span>
									<span class="viewpage-preset-item-size">
										100%/100%
									</span>
								</span>
							</a>
						</li>
						<li>
							<a href="#" class="t3js-preset-custom t3js-change-preset" data-key="custom" data-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['languageKey'] = NULL;
$arguments20['alternativeLanguageKeys'] = NULL;
$arguments20['key'] = 'custom';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output8 .= '" data-width="';
$array22 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.width', $array22)]);

$output8 .= '" data-height="';
$array23 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.height', $array23)]);

$output8 .= '">
								<span class="viewpage-preset-item">
									<span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.expand', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;

$output8 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output8 .= '</span>
									<span class="viewpage-preset-item-label t3js-preset-custom-label">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'custom';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output8 .= '
									</span>
									<span class="viewpage-preset-item-size">
										<span class="t3js-preset-custom-width">';
$array29 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.width', $array29)]);

$output8 .= '</span>px/<span class="t3js-preset-custom-height">';
$array30 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.height', $array30)]);

$output8 .= '</span>px
									</span>
								</span>
							</a>
						</li>

						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
								<li role="separator" class="divider"></li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
									<li>
										<a href="#" class="t3js-change-preset" data-key="';
$array45 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.key', $array45)]);

$output44 .= '" data-label="';
$array46 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.label', $array46)]);

$output44 .= '" data-width="';
$array47 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.width', $array47)]);

$output44 .= '" data-height="';
$array48 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.height', $array48)]);

$output44 .= '">
											<span class="viewpage-preset-item">
												<span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.{preset.type}', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output44 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output44 .= '</span>
												<span class="viewpage-preset-item-label">';
$array52 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.label', $array52)]);

$output44 .= '</span>
												<span class="viewpage-preset-item-size">
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('preset.width', $array56);

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$output58 = '';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.width', $array59)]);

$output58 .= 'px';
$arguments53['then'] = $output58;
$arguments53['else'] = '100%';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output44 .= '/';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('preset.height', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$output65 = '';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.height', $array66)]);

$output65 .= 'px';
$arguments60['then'] = $output65;
$arguments60['else'] = '100%';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output44 .= '
												</span>
											</span>
										</a>
									</li>
								';
return $output44;
};
$arguments41 = array();
$arguments41['each'] = NULL;
$arguments41['as'] = NULL;
$arguments41['key'] = NULL;
$arguments41['reverse'] = false;
$arguments41['iteration'] = NULL;
$array43 = array (
);$arguments41['each'] = $renderingContext->getVariableProvider()->getByPath('presetGroup', $array43);
$arguments41['as'] = 'preset';

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
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
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('presetGroup', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
						';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('presetGroups', $array33);
$arguments31['as'] = 'presetGroup';
$arguments31['iteration'] = 'presetGroupIteration';

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output8 .= '
					</ul>
				</span>
				</div>
				<div class="viewpage-topbar-size">
					<input class="t3js-viewpage-input-width" type="number" name="width" min="300" max="9999" value="';
$array67 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.width', $array67)]);

$output8 .= '">
					x
					<input class="t3js-viewpage-input-height" type="number" name="height" min="300" max="9999" value="';
$array68 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.height', $array68)]);

$output8 .= '">
				</div>
			</div>
			<div class="viewpage-resizeable t3js-viewpage-resizeable" style="width:';
$array69 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.width', $array69)]);

$output8 .= 'px;height:';
$array70 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.height', $array70)]);

$output8 .= 'px;">
				<iframe src="';
$array71 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array71)]);

$output8 .= '" width="100%" height="100%" id="tx_viewpage_iframe" frameborder="0" border="0"></iframe>
			</div>
		</div>
	';
return $output8;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output72 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['name'] = NULL;
$arguments73['name'] = 'DocHeader';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output72 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['queueIdentifier'] = NULL;
$arguments78['as'] = NULL;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
		<div class="viewpage-item">
			<div class="viewpage-topbar t3js-viewpage-topbar">
				<div class="viewpage-topbar-orientation t3js-viewpage-topbar-orientation">
					<a href="#" class="t3js-change-orientation">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$array88 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.orientation', $array88);
};
$arguments86 = array();
$arguments86['value'] = NULL;

$output85 .= isset($arguments86['value']) ? $arguments86['value'] : $renderChildrenClosure87();

$output85 .= '
					</a>
				</div>
				<div class="viewpage-topbar-preset">
				<span class="dropdown">
					<button class="dropdown-toggle" type="button" id="viewpage-topbar-preset-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<span class="t3js-viewpage-current-label">
							';
$array89 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.label', $array89)]);

$output85 .= '
						</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="viewpage-topbar-preset-button">
						<li role="separator" class="divider"></li>
						<li>
							<a href="#" class="t3js-preset-maximized t3js-change-preset" data-key="maximized" data-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['languageKey'] = NULL;
$arguments90['alternativeLanguageKeys'] = NULL;
$arguments90['key'] = 'maximized';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output85 .= '" data-width data-height>
								<span class="viewpage-preset-item">
									<span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array94 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.fullscreen', $array94);
};
$arguments92 = array();
$arguments92['value'] = NULL;

$output85 .= isset($arguments92['value']) ? $arguments92['value'] : $renderChildrenClosure93();

$output85 .= '</span>
									<span class="viewpage-preset-item-label">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['languageKey'] = NULL;
$arguments95['alternativeLanguageKeys'] = NULL;
$arguments95['key'] = 'maximized';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output85 .= '
									</span>
									<span class="viewpage-preset-item-size">
										100%/100%
									</span>
								</span>
							</a>
						</li>
						<li>
							<a href="#" class="t3js-preset-custom t3js-change-preset" data-key="custom" data-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['key'] = NULL;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['languageKey'] = NULL;
$arguments97['alternativeLanguageKeys'] = NULL;
$arguments97['key'] = 'custom';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output85 .= '" data-width="';
$array99 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.width', $array99)]);

$output85 .= '" data-height="';
$array100 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.height', $array100)]);

$output85 .= '">
								<span class="viewpage-preset-item">
									<span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.expand', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output85 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output85 .= '</span>
									<span class="viewpage-preset-item-label t3js-preset-custom-label">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['key'] = NULL;
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['languageKey'] = NULL;
$arguments104['alternativeLanguageKeys'] = NULL;
$arguments104['key'] = 'custom';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output85 .= '
									</span>
									<span class="viewpage-preset-item-size">
										<span class="t3js-preset-custom-width">';
$array106 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.width', $array106)]);

$output85 .= '</span>px/<span class="t3js-preset-custom-height">';
$array107 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.height', $array107)]);

$output85 .= '</span>px
									</span>
								</span>
							</a>
						</li>

						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
								<li role="separator" class="divider"></li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
									<li>
										<a href="#" class="t3js-change-preset" data-key="';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.key', $array122)]);

$output121 .= '" data-label="';
$array123 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.label', $array123)]);

$output121 .= '" data-width="';
$array124 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.width', $array124)]);

$output121 .= '" data-height="';
$array125 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.height', $array125)]);

$output121 .= '">
											<span class="viewpage-preset-item">
												<span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$array128 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.{preset.type}', $array128);
};
$arguments126 = array();
$arguments126['value'] = NULL;

$output121 .= isset($arguments126['value']) ? $arguments126['value'] : $renderChildrenClosure127();

$output121 .= '</span>
												<span class="viewpage-preset-item-label">';
$array129 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.label', $array129)]);

$output121 .= '</span>
												<span class="viewpage-preset-item-size">
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('preset.width', $array133);

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$output135 = '';
$array136 = array (
);
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.width', $array136)]);

$output135 .= 'px';
$arguments130['then'] = $output135;
$arguments130['else'] = '100%';

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output121 .= '/';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('preset.height', $array140);

$expression141 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$output142 = '';
$array143 = array (
);
$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.height', $array143)]);

$output142 .= 'px';
$arguments137['then'] = $output142;
$arguments137['else'] = '100%';

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output121 .= '
												</span>
											</span>
										</a>
									</li>
								';
return $output121;
};
$arguments118 = array();
$arguments118['each'] = NULL;
$arguments118['as'] = NULL;
$arguments118['key'] = NULL;
$arguments118['reverse'] = false;
$arguments118['iteration'] = NULL;
$array120 = array (
);$arguments118['each'] = $renderingContext->getVariableProvider()->getByPath('presetGroup', $array120);
$arguments118['as'] = 'preset';

$output117 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
							';
return $output117;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('presetGroup', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['__thenClosure'] = $renderChildrenClosure113;

$output111 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
						';
return $output111;
};
$arguments108 = array();
$arguments108['each'] = NULL;
$arguments108['as'] = NULL;
$arguments108['key'] = NULL;
$arguments108['reverse'] = false;
$arguments108['iteration'] = NULL;
$array110 = array (
);$arguments108['each'] = $renderingContext->getVariableProvider()->getByPath('presetGroups', $array110);
$arguments108['as'] = 'presetGroup';
$arguments108['iteration'] = 'presetGroupIteration';

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output85 .= '
					</ul>
				</span>
				</div>
				<div class="viewpage-topbar-size">
					<input class="t3js-viewpage-input-width" type="number" name="width" min="300" max="9999" value="';
$array144 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.width', $array144)]);

$output85 .= '">
					x
					<input class="t3js-viewpage-input-height" type="number" name="height" min="300" max="9999" value="';
$array145 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.height', $array145)]);

$output85 .= '">
				</div>
			</div>
			<div class="viewpage-resizeable t3js-viewpage-resizeable" style="width:';
$array146 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.width', $array146)]);

$output85 .= 'px;height:';
$array147 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.height', $array147)]);

$output85 .= 'px;">
				<iframe src="';
$array148 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array148)]);

$output85 .= '" width="100%" height="100%" id="tx_viewpage_iframe" frameborder="0" border="0"></iframe>
			</div>
		</div>
	';
return $output85;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array83);

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = $renderChildrenClosure81;

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output77 .= '
';
return $output77;
};
$arguments75 = array();
$arguments75['name'] = NULL;
$arguments75['name'] = 'Content';

$output72 .= NULL;

$output72 .= '
';

return $output72;
}


}
#