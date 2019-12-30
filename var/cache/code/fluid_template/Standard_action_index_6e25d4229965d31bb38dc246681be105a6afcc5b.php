<?php

class Standard_action_index_6e25d4229965d31bb38dc246681be105a6afcc5b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'ImageManipulation';
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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array163 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array163)]);

$output162 .= '"
									name="';
$array164 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array164)]);

$output162 .= '"
									value="';
$array165 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array165)]);

$output162 .= '"
									data-formengine-validation-rules="';
$array166 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array166)]);

$output162 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array167 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array167)]);

$output162 .= '"
									data-payload="';
$array168 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array168)]);

$output162 .= '"
									data-preview-url="';
$array169 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array169)]);

$output162 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['section'] = NULL;
$arguments170['partial'] = NULL;
$arguments170['delegate'] = NULL;
$arguments170['renderable'] = NULL;
$arguments170['arguments'] = array (
);
$arguments170['optional'] = false;
$arguments170['default'] = NULL;
$arguments170['contentAs'] = NULL;
$arguments170['debug'] = true;
$arguments170['partial'] = 'ModalTitle';
$arguments170['section'] = 'Main';
$arguments170['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output162 .= '"
									data-image-uid="';
$array173 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array173)]);

$output162 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array176 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array176);
};
$arguments174 = array();
$arguments174['value'] = NULL;
$arguments174['forceObject'] = false;
$renderChildrenClosure175 = ($arguments174['value'] !== null) ? function() use ($arguments174) { return $arguments174['value']; } : $renderChildrenClosure175;
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output162 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['languageKey'] = NULL;
$arguments177['alternativeLanguageKeys'] = NULL;
$arguments177['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output162 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['key'] = NULL;
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['languageKey'] = NULL;
$arguments179['alternativeLanguageKeys'] = NULL;
$arguments179['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output162 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['key'] = NULL;
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['languageKey'] = NULL;
$arguments181['alternativeLanguageKeys'] = NULL;
$arguments181['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);

$output162 .= '"
									data-file-field="';
$array183 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array183)]);

$output162 .= '"
									data-field="';
$array184 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array184)]);

$output162 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['key'] = NULL;
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['languageKey'] = NULL;
$arguments185['alternativeLanguageKeys'] = NULL;
$arguments185['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext)]);

$output162 .= '
							</button>
						</div>
					';
return $output162;
};
$arguments160 = array();
$arguments160['if'] = NULL;

$output159 .= '';

$output159 .= '
				';
return $output159;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array157);

$expression158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);
$arguments129['__elseClosures'][] = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array132 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array132)]);

$output131 .= '"
									name="';
$array133 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array133)]);

$output131 .= '"
									value="';
$array134 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array134)]);

$output131 .= '"
									data-formengine-validation-rules="';
$array135 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array135)]);

$output131 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array136 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array136)]);

$output131 .= '"
									data-payload="';
$array137 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array137)]);

$output131 .= '"
									data-preview-url="';
$array138 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array138)]);

$output131 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['section'] = NULL;
$arguments139['partial'] = NULL;
$arguments139['delegate'] = NULL;
$arguments139['renderable'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['optional'] = false;
$arguments139['default'] = NULL;
$arguments139['contentAs'] = NULL;
$arguments139['debug'] = true;
$arguments139['partial'] = 'ModalTitle';
$arguments139['section'] = 'Main';
$arguments139['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output131 .= '"
									data-image-uid="';
$array142 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array142)]);

$output131 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$array145 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array145);
};
$arguments143 = array();
$arguments143['value'] = NULL;
$arguments143['forceObject'] = false;
$renderChildrenClosure144 = ($arguments143['value'] !== null) ? function() use ($arguments143) { return $arguments143['value']; } : $renderChildrenClosure144;
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output131 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['languageKey'] = NULL;
$arguments146['alternativeLanguageKeys'] = NULL;
$arguments146['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output131 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['key'] = NULL;
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$arguments148['languageKey'] = NULL;
$arguments148['alternativeLanguageKeys'] = NULL;
$arguments148['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output131 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['key'] = NULL;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['languageKey'] = NULL;
$arguments150['alternativeLanguageKeys'] = NULL;
$arguments150['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output131 .= '"
									data-file-field="';
$array152 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array152)]);

$output131 .= '"
									data-field="';
$array153 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array153)]);

$output131 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['key'] = NULL;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['languageKey'] = NULL;
$arguments154['alternativeLanguageKeys'] = NULL;
$arguments154['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext)]);

$output131 .= '
							</button>
						</div>
					';
return $output131;
};

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
				<div class="row media-gallery__list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
						<div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
							<p>
								<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['languageKey'] = NULL;
$arguments191['alternativeLanguageKeys'] = NULL;
$array193 = array (
);$arguments191['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array193);
$array194 = array (
);$arguments191['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array194);

$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output190 .= '</b><br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['languageKey'] = NULL;
$arguments195['alternativeLanguageKeys'] = NULL;
$arguments195['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);

$output190 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array197 = array (
);
$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array197)]);

$output190 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['languageKey'] = NULL;
$arguments198['alternativeLanguageKeys'] = NULL;
$array200 = array (
);$arguments198['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array200);
$array201 = array (
);$arguments198['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array201);

$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output190 .= '</span>
							</p>
							<div class="t3js-image-manipulation-preview media-object"
								data-preview-height="150"
								data-crop-variant-id="';
$array202 = array (
);
$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array202)]);

$output190 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['additionalAttributes'] = NULL;
$arguments203['data'] = NULL;
$arguments203['class'] = NULL;
$arguments203['dir'] = NULL;
$arguments203['id'] = NULL;
$arguments203['lang'] = NULL;
$arguments203['style'] = NULL;
$arguments203['title'] = NULL;
$arguments203['accesskey'] = NULL;
$arguments203['tabindex'] = NULL;
$arguments203['onclick'] = NULL;
$arguments203['alt'] = NULL;
$arguments203['ismap'] = NULL;
$arguments203['longdesc'] = NULL;
$arguments203['usemap'] = NULL;
$arguments203['src'] = NULL;
$arguments203['treatIdAsReference'] = NULL;
$arguments203['image'] = NULL;
$arguments203['crop'] = NULL;
$arguments203['cropVariant'] = 'default';
$arguments203['width'] = NULL;
$arguments203['height'] = NULL;
$arguments203['minWidth'] = NULL;
$arguments203['minHeight'] = NULL;
$arguments203['maxWidth'] = NULL;
$arguments203['maxHeight'] = NULL;
$arguments203['absolute'] = false;
$array205 = array (
);$arguments203['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array205);
$array206 = array (
);$arguments203['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array206);
$array207 = array (
);$arguments203['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array207);
$arguments203['maxHeight'] = 150;
$arguments203['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array208 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$array211 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array211);
};
$arguments209 = array();
$arguments209['value'] = NULL;
$arguments209['forceObject'] = false;
$renderChildrenClosure210 = ($arguments209['value'] !== null) ? function() use ($arguments209) { return $arguments209['value']; } : $renderChildrenClosure210;$array208['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);
$array212 = array (
);$array208['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array212);
$arguments203['additionalAttributes'] = $array208;

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output190 .= '
							</div>
						</div>
					';
return $output190;
};
$arguments187 = array();
$arguments187['each'] = NULL;
$arguments187['as'] = NULL;
$arguments187['key'] = NULL;
$arguments187['reverse'] = false;
$arguments187['iteration'] = NULL;
$array189 = array (
);$arguments187['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array189);
$arguments187['as'] = 'cropVariant';

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output128 .= '
				</div>
			';
return $output128;
};
$arguments126 = array();

$output125 .= '';

$output125 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
				<div class="media-body">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['key'] = NULL;
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['languageKey'] = NULL;
$arguments236['alternativeLanguageKeys'] = NULL;
$arguments236['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext)]);

$output235 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$array240 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array240);
};
$arguments238 = array();
$arguments238['value'] = NULL;
$arguments238['mode'] = 'upper';
$arguments238['mode'] = 'upper';

$output235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext)]);

$output235 .= '
							</em>
						</p>
					';
return $output235;
};
$arguments233 = array();

$output232 .= '';

$output232 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
						<div class="alert alert-info">
							<h4>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['key'] = NULL;
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['languageKey'] = NULL;
$arguments244['alternativeLanguageKeys'] = NULL;
$arguments244['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext)]);

$output243 .= '
							</h4>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['key'] = NULL;
$arguments246['id'] = NULL;
$arguments246['default'] = NULL;
$arguments246['arguments'] = NULL;
$arguments246['extensionName'] = NULL;
$arguments246['languageKey'] = NULL;
$arguments246['alternativeLanguageKeys'] = NULL;
$arguments246['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext)]);

$output243 .= '
							</p>
						</div>
					';
return $output243;
};
$arguments241 = array();
$arguments241['if'] = NULL;

$output232 .= '';

$output232 .= '
				';
return $output232;
};
$arguments216 = array();
$arguments216['then'] = NULL;
$arguments216['else'] = NULL;
$arguments216['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array230);

$expression231 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments216['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments216['__thenClosure'] = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['key'] = NULL;
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['languageKey'] = NULL;
$arguments219['alternativeLanguageKeys'] = NULL;
$arguments219['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output218 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$array223 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array223);
};
$arguments221 = array();
$arguments221['value'] = NULL;
$arguments221['mode'] = 'upper';
$arguments221['mode'] = 'upper';

$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output218 .= '
							</em>
						</p>
					';
return $output218;
};
$arguments216['__elseClosures'][] = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
						<div class="alert alert-info">
							<h4>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['key'] = NULL;
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$arguments225['languageKey'] = NULL;
$arguments225['alternativeLanguageKeys'] = NULL;
$arguments225['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);

$output224 .= '
							</h4>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output224 .= '
							</p>
						</div>
					';
return $output224;
};

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '
				</div>
			';
return $output215;
};
$arguments213 = array();
$arguments213['if'] = NULL;

$output125 .= '';

$output125 .= '
		';
return $output125;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('isAllowedFileExtension', $array122);
$array121['1'] = ' && ';
$array123 = array (
);$array121['2'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array123);

$expression124 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array38)]);

$output37 .= '"
									name="';
$array39 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array39)]);

$output37 .= '"
									value="';
$array40 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array40)]);

$output37 .= '"
									data-formengine-validation-rules="';
$array41 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array41)]);

$output37 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array42 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array42)]);

$output37 .= '"
									data-payload="';
$array43 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array43)]);

$output37 .= '"
									data-preview-url="';
$array44 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array44)]);

$output37 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['section'] = NULL;
$arguments45['partial'] = NULL;
$arguments45['delegate'] = NULL;
$arguments45['renderable'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$arguments45['default'] = NULL;
$arguments45['contentAs'] = NULL;
$arguments45['debug'] = true;
$arguments45['partial'] = 'ModalTitle';
$arguments45['section'] = 'Main';
$arguments45['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output37 .= '"
									data-image-uid="';
$array48 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array48)]);

$output37 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;
$arguments49['forceObject'] = false;
$renderChildrenClosure50 = ($arguments49['value'] !== null) ? function() use ($arguments49) { return $arguments49['value']; } : $renderChildrenClosure50;
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output37 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$arguments52['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output37 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output37 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output37 .= '"
									data-file-field="';
$array58 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array58)]);

$output37 .= '"
									data-field="';
$array59 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array59)]);

$output37 .= '">
								<span class="t3-icon fa fa-crop"></span>
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
$arguments60['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output37 .= '
							</button>
						</div>
					';
return $output37;
};
$arguments35 = array();
$arguments35['if'] = NULL;

$output34 .= '';

$output34 .= '
				';
return $output34;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array7)]);

$output6 .= '"
									name="';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array8)]);

$output6 .= '"
									value="';
$array9 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array9)]);

$output6 .= '"
									data-formengine-validation-rules="';
$array10 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array10)]);

$output6 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array11 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array11)]);

$output6 .= '"
									data-payload="';
$array12 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array12)]);

$output6 .= '"
									data-preview-url="';
$array13 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array13)]);

$output6 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['renderable'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['debug'] = true;
$arguments14['partial'] = 'ModalTitle';
$arguments14['section'] = 'Main';
$arguments14['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output6 .= '"
									data-image-uid="';
$array17 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array17)]);

$output6 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$array20 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array20);
};
$arguments18 = array();
$arguments18['value'] = NULL;
$arguments18['forceObject'] = false;
$renderChildrenClosure19 = ($arguments18['value'] !== null) ? function() use ($arguments18) { return $arguments18['value']; } : $renderChildrenClosure19;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output6 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output6 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output6 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output6 .= '"
									data-file-field="';
$array27 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array27)]);

$output6 .= '"
									data-field="';
$array28 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array28)]);

$output6 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output6 .= '
							</button>
						</div>
					';
return $output6;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
				<div class="row media-gallery__list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
						<div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
							<p>
								<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['languageKey'] = NULL;
$arguments66['alternativeLanguageKeys'] = NULL;
$array68 = array (
);$arguments66['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array68);
$array69 = array (
);$arguments66['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array69);

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '</b><br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$arguments70['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output65 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array72 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array72)]);

$output65 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['key'] = NULL;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['languageKey'] = NULL;
$arguments73['alternativeLanguageKeys'] = NULL;
$array75 = array (
);$arguments73['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array75);
$array76 = array (
);$arguments73['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array76);

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output65 .= '</span>
							</p>
							<div class="t3js-image-manipulation-preview media-object"
								data-preview-height="150"
								data-crop-variant-id="';
$array77 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array77)]);

$output65 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['alt'] = NULL;
$arguments78['ismap'] = NULL;
$arguments78['longdesc'] = NULL;
$arguments78['usemap'] = NULL;
$arguments78['src'] = NULL;
$arguments78['treatIdAsReference'] = NULL;
$arguments78['image'] = NULL;
$arguments78['crop'] = NULL;
$arguments78['cropVariant'] = 'default';
$arguments78['width'] = NULL;
$arguments78['height'] = NULL;
$arguments78['minWidth'] = NULL;
$arguments78['minHeight'] = NULL;
$arguments78['maxWidth'] = NULL;
$arguments78['maxHeight'] = NULL;
$arguments78['absolute'] = false;
$array80 = array (
);$arguments78['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array80);
$array81 = array (
);$arguments78['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array81);
$array82 = array (
);$arguments78['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array82);
$arguments78['maxHeight'] = 150;
$arguments78['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array83 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array86 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array86);
};
$arguments84 = array();
$arguments84['value'] = NULL;
$arguments84['forceObject'] = false;
$renderChildrenClosure85 = ($arguments84['value'] !== null) ? function() use ($arguments84) { return $arguments84['value']; } : $renderChildrenClosure85;$array83['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);
$array87 = array (
);$array83['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array87);
$arguments78['additionalAttributes'] = $array83;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output65 .= '
							</div>
						</div>
					';
return $output65;
};
$arguments62 = array();
$arguments62['each'] = NULL;
$arguments62['as'] = NULL;
$arguments62['key'] = NULL;
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$array64 = array (
);$arguments62['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array64);
$arguments62['as'] = 'cropVariant';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output3 .= '
				</div>
			';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
				<div class="media-body">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['languageKey'] = NULL;
$arguments109['alternativeLanguageKeys'] = NULL;
$arguments109['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output108 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$array113 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array113);
};
$arguments111 = array();
$arguments111['value'] = NULL;
$arguments111['mode'] = 'upper';
$arguments111['mode'] = 'upper';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output108 .= '
							</em>
						</p>
					';
return $output108;
};
$arguments106 = array();

$output105 .= '';

$output105 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
						<div class="alert alert-info">
							<h4>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['key'] = NULL;
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['languageKey'] = NULL;
$arguments117['alternativeLanguageKeys'] = NULL;
$arguments117['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '
							</h4>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['key'] = NULL;
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$arguments119['languageKey'] = NULL;
$arguments119['alternativeLanguageKeys'] = NULL;
$arguments119['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output116 .= '
							</p>
						</div>
					';
return $output116;
};
$arguments114 = array();
$arguments114['if'] = NULL;

$output105 .= '';

$output105 .= '
				';
return $output105;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array103);

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments89['__thenClosure'] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['languageKey'] = NULL;
$arguments92['alternativeLanguageKeys'] = NULL;
$arguments92['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output91 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;
$arguments94['mode'] = 'upper';
$arguments94['mode'] = 'upper';

$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output91 .= '
							</em>
						</p>
					';
return $output91;
};
$arguments89['__elseClosures'][] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
						<div class="alert alert-info">
							<h4>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['key'] = NULL;
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['languageKey'] = NULL;
$arguments98['alternativeLanguageKeys'] = NULL;
$arguments98['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output97 .= '
							</h4>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['languageKey'] = NULL;
$arguments100['alternativeLanguageKeys'] = NULL;
$arguments100['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output97 .= '
							</p>
						</div>
					';
return $output97;
};

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
				</div>
			';
return $output88;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output248 = '';

$output248 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
	xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['name'] = NULL;
$arguments249['name'] = 'ImageManipulation';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output248 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array416 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array416)]);

$output415 .= '"
									name="';
$array417 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array417)]);

$output415 .= '"
									value="';
$array418 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array418)]);

$output415 .= '"
									data-formengine-validation-rules="';
$array419 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array419)]);

$output415 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array420 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array420)]);

$output415 .= '"
									data-payload="';
$array421 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array421)]);

$output415 .= '"
									data-preview-url="';
$array422 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array422)]);

$output415 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['section'] = NULL;
$arguments423['partial'] = NULL;
$arguments423['delegate'] = NULL;
$arguments423['renderable'] = NULL;
$arguments423['arguments'] = array (
);
$arguments423['optional'] = false;
$arguments423['default'] = NULL;
$arguments423['contentAs'] = NULL;
$arguments423['debug'] = true;
$arguments423['partial'] = 'ModalTitle';
$arguments423['section'] = 'Main';
$arguments423['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output415 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output415 .= '"
									data-image-uid="';
$array426 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array426)]);

$output415 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$array429 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array429);
};
$arguments427 = array();
$arguments427['value'] = NULL;
$arguments427['forceObject'] = false;
$renderChildrenClosure428 = ($arguments427['value'] !== null) ? function() use ($arguments427) { return $arguments427['value']; } : $renderChildrenClosure428;
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext)]);

$output415 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['key'] = NULL;
$arguments430['id'] = NULL;
$arguments430['default'] = NULL;
$arguments430['arguments'] = NULL;
$arguments430['extensionName'] = NULL;
$arguments430['languageKey'] = NULL;
$arguments430['alternativeLanguageKeys'] = NULL;
$arguments430['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext)]);

$output415 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['key'] = NULL;
$arguments432['id'] = NULL;
$arguments432['default'] = NULL;
$arguments432['arguments'] = NULL;
$arguments432['extensionName'] = NULL;
$arguments432['languageKey'] = NULL;
$arguments432['alternativeLanguageKeys'] = NULL;
$arguments432['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext)]);

$output415 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['key'] = NULL;
$arguments434['id'] = NULL;
$arguments434['default'] = NULL;
$arguments434['arguments'] = NULL;
$arguments434['extensionName'] = NULL;
$arguments434['languageKey'] = NULL;
$arguments434['alternativeLanguageKeys'] = NULL;
$arguments434['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext)]);

$output415 .= '"
									data-file-field="';
$array436 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array436)]);

$output415 .= '"
									data-field="';
$array437 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array437)]);

$output415 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['key'] = NULL;
$arguments438['id'] = NULL;
$arguments438['default'] = NULL;
$arguments438['arguments'] = NULL;
$arguments438['extensionName'] = NULL;
$arguments438['languageKey'] = NULL;
$arguments438['alternativeLanguageKeys'] = NULL;
$arguments438['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext)]);

$output415 .= '
							</button>
						</div>
					';
return $output415;
};
$arguments413 = array();
$arguments413['if'] = NULL;

$output412 .= '';

$output412 .= '
				';
return $output412;
};
$arguments382 = array();
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array409 = array();
$array410 = array (
);$array409['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array410);

$expression411 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression411(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array409)
					),
					$renderingContext
				);
$arguments382['__elseClosures'][] = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array385 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array385)]);

$output384 .= '"
									name="';
$array386 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array386)]);

$output384 .= '"
									value="';
$array387 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array387)]);

$output384 .= '"
									data-formengine-validation-rules="';
$array388 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array388)]);

$output384 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array389 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array389)]);

$output384 .= '"
									data-payload="';
$array390 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array390)]);

$output384 .= '"
									data-preview-url="';
$array391 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array391)]);

$output384 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments392 = array();
$arguments392['section'] = NULL;
$arguments392['partial'] = NULL;
$arguments392['delegate'] = NULL;
$arguments392['renderable'] = NULL;
$arguments392['arguments'] = array (
);
$arguments392['optional'] = false;
$arguments392['default'] = NULL;
$arguments392['contentAs'] = NULL;
$arguments392['debug'] = true;
$arguments392['partial'] = 'ModalTitle';
$arguments392['section'] = 'Main';
$arguments392['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output384 .= '"
									data-image-uid="';
$array395 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array395)]);

$output384 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$array398 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array398);
};
$arguments396 = array();
$arguments396['value'] = NULL;
$arguments396['forceObject'] = false;
$renderChildrenClosure397 = ($arguments396['value'] !== null) ? function() use ($arguments396) { return $arguments396['value']; } : $renderChildrenClosure397;
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext)]);

$output384 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments399 = array();
$arguments399['key'] = NULL;
$arguments399['id'] = NULL;
$arguments399['default'] = NULL;
$arguments399['arguments'] = NULL;
$arguments399['extensionName'] = NULL;
$arguments399['languageKey'] = NULL;
$arguments399['alternativeLanguageKeys'] = NULL;
$arguments399['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext)]);

$output384 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['key'] = NULL;
$arguments401['id'] = NULL;
$arguments401['default'] = NULL;
$arguments401['arguments'] = NULL;
$arguments401['extensionName'] = NULL;
$arguments401['languageKey'] = NULL;
$arguments401['alternativeLanguageKeys'] = NULL;
$arguments401['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext)]);

$output384 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['key'] = NULL;
$arguments403['id'] = NULL;
$arguments403['default'] = NULL;
$arguments403['arguments'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['languageKey'] = NULL;
$arguments403['alternativeLanguageKeys'] = NULL;
$arguments403['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext)]);

$output384 .= '"
									data-file-field="';
$array405 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array405)]);

$output384 .= '"
									data-field="';
$array406 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array406)]);

$output384 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments407 = array();
$arguments407['key'] = NULL;
$arguments407['id'] = NULL;
$arguments407['default'] = NULL;
$arguments407['arguments'] = NULL;
$arguments407['extensionName'] = NULL;
$arguments407['languageKey'] = NULL;
$arguments407['alternativeLanguageKeys'] = NULL;
$arguments407['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext)]);

$output384 .= '
							</button>
						</div>
					';
return $output384;
};

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
				<div class="row media-gallery__list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$output443 = '';

$output443 .= '
						<div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
							<p>
								<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments444 = array();
$arguments444['key'] = NULL;
$arguments444['id'] = NULL;
$arguments444['default'] = NULL;
$arguments444['arguments'] = NULL;
$arguments444['extensionName'] = NULL;
$arguments444['languageKey'] = NULL;
$arguments444['alternativeLanguageKeys'] = NULL;
$array446 = array (
);$arguments444['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array446);
$array447 = array (
);$arguments444['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array447);

$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext)]);

$output443 .= '</b><br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['languageKey'] = NULL;
$arguments448['alternativeLanguageKeys'] = NULL;
$arguments448['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output443 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array450 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array450)]);

$output443 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['key'] = NULL;
$arguments451['id'] = NULL;
$arguments451['default'] = NULL;
$arguments451['arguments'] = NULL;
$arguments451['extensionName'] = NULL;
$arguments451['languageKey'] = NULL;
$arguments451['alternativeLanguageKeys'] = NULL;
$array453 = array (
);$arguments451['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array453);
$array454 = array (
);$arguments451['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array454);

$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext)]);

$output443 .= '</span>
							</p>
							<div class="t3js-image-manipulation-preview media-object"
								data-preview-height="150"
								data-crop-variant-id="';
$array455 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array455)]);

$output443 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['additionalAttributes'] = NULL;
$arguments456['data'] = NULL;
$arguments456['class'] = NULL;
$arguments456['dir'] = NULL;
$arguments456['id'] = NULL;
$arguments456['lang'] = NULL;
$arguments456['style'] = NULL;
$arguments456['title'] = NULL;
$arguments456['accesskey'] = NULL;
$arguments456['tabindex'] = NULL;
$arguments456['onclick'] = NULL;
$arguments456['alt'] = NULL;
$arguments456['ismap'] = NULL;
$arguments456['longdesc'] = NULL;
$arguments456['usemap'] = NULL;
$arguments456['src'] = NULL;
$arguments456['treatIdAsReference'] = NULL;
$arguments456['image'] = NULL;
$arguments456['crop'] = NULL;
$arguments456['cropVariant'] = 'default';
$arguments456['width'] = NULL;
$arguments456['height'] = NULL;
$arguments456['minWidth'] = NULL;
$arguments456['minHeight'] = NULL;
$arguments456['maxWidth'] = NULL;
$arguments456['maxHeight'] = NULL;
$arguments456['absolute'] = false;
$array458 = array (
);$arguments456['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array458);
$array459 = array (
);$arguments456['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array459);
$array460 = array (
);$arguments456['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array460);
$arguments456['maxHeight'] = 150;
$arguments456['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array461 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
$array464 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array464);
};
$arguments462 = array();
$arguments462['value'] = NULL;
$arguments462['forceObject'] = false;
$renderChildrenClosure463 = ($arguments462['value'] !== null) ? function() use ($arguments462) { return $arguments462['value']; } : $renderChildrenClosure463;$array461['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);
$array465 = array (
);$array461['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array465);
$arguments456['additionalAttributes'] = $array461;

$output443 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output443 .= '
							</div>
						</div>
					';
return $output443;
};
$arguments440 = array();
$arguments440['each'] = NULL;
$arguments440['as'] = NULL;
$arguments440['key'] = NULL;
$arguments440['reverse'] = false;
$arguments440['iteration'] = NULL;
$array442 = array (
);$arguments440['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array442);
$arguments440['as'] = 'cropVariant';

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);

$output381 .= '
				</div>
			';
return $output381;
};
$arguments379 = array();

$output378 .= '';

$output378 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output468 = '';

$output468 .= '
				<div class="media-body">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$output488 = '';

$output488 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['key'] = NULL;
$arguments489['id'] = NULL;
$arguments489['default'] = NULL;
$arguments489['arguments'] = NULL;
$arguments489['extensionName'] = NULL;
$arguments489['languageKey'] = NULL;
$arguments489['alternativeLanguageKeys'] = NULL;
$arguments489['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output488 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
$array493 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array493);
};
$arguments491 = array();
$arguments491['value'] = NULL;
$arguments491['mode'] = 'upper';
$arguments491['mode'] = 'upper';

$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output488 .= '
							</em>
						</p>
					';
return $output488;
};
$arguments486 = array();

$output485 .= '';

$output485 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output496 = '';

$output496 .= '
						<div class="alert alert-info">
							<h4>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['key'] = NULL;
$arguments497['id'] = NULL;
$arguments497['default'] = NULL;
$arguments497['arguments'] = NULL;
$arguments497['extensionName'] = NULL;
$arguments497['languageKey'] = NULL;
$arguments497['alternativeLanguageKeys'] = NULL;
$arguments497['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext)]);

$output496 .= '
							</h4>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['key'] = NULL;
$arguments499['id'] = NULL;
$arguments499['default'] = NULL;
$arguments499['arguments'] = NULL;
$arguments499['extensionName'] = NULL;
$arguments499['languageKey'] = NULL;
$arguments499['alternativeLanguageKeys'] = NULL;
$arguments499['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext)]);

$output496 .= '
							</p>
						</div>
					';
return $output496;
};
$arguments494 = array();
$arguments494['if'] = NULL;

$output485 .= '';

$output485 .= '
				';
return $output485;
};
$arguments469 = array();
$arguments469['then'] = NULL;
$arguments469['else'] = NULL;
$arguments469['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array482 = array();
$array483 = array (
);$array482['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array483);

$expression484 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments469['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression484(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array482)
					),
					$renderingContext
				);
$arguments469['__thenClosure'] = function() use ($renderingContext, $self) {
$output471 = '';

$output471 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['key'] = NULL;
$arguments472['id'] = NULL;
$arguments472['default'] = NULL;
$arguments472['arguments'] = NULL;
$arguments472['extensionName'] = NULL;
$arguments472['languageKey'] = NULL;
$arguments472['alternativeLanguageKeys'] = NULL;
$arguments472['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output471 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext)]);

$output471 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
$array476 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array476);
};
$arguments474 = array();
$arguments474['value'] = NULL;
$arguments474['mode'] = 'upper';
$arguments474['mode'] = 'upper';

$output471 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext)]);

$output471 .= '
							</em>
						</p>
					';
return $output471;
};
$arguments469['__elseClosures'][] = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
						<div class="alert alert-info">
							<h4>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['key'] = NULL;
$arguments478['id'] = NULL;
$arguments478['default'] = NULL;
$arguments478['arguments'] = NULL;
$arguments478['extensionName'] = NULL;
$arguments478['languageKey'] = NULL;
$arguments478['alternativeLanguageKeys'] = NULL;
$arguments478['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output477 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext)]);

$output477 .= '
							</h4>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['key'] = NULL;
$arguments480['id'] = NULL;
$arguments480['default'] = NULL;
$arguments480['arguments'] = NULL;
$arguments480['extensionName'] = NULL;
$arguments480['languageKey'] = NULL;
$arguments480['alternativeLanguageKeys'] = NULL;
$arguments480['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output477 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext)]);

$output477 .= '
							</p>
						</div>
					';
return $output477;
};

$output468 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext);

$output468 .= '
				</div>
			';
return $output468;
};
$arguments466 = array();
$arguments466['if'] = NULL;

$output378 .= '';

$output378 .= '
		';
return $output378;
};
$arguments254 = array();
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$arguments254['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['0'] = $renderingContext->getVariableProvider()->getByPath('isAllowedFileExtension', $array375);
$array374['1'] = ' && ';
$array376 = array (
);$array374['2'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array376);

$expression377 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments254['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression377(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array374)
					),
					$renderingContext
				);
$arguments254['__thenClosure'] = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array291 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array291)]);

$output290 .= '"
									name="';
$array292 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array292)]);

$output290 .= '"
									value="';
$array293 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array293)]);

$output290 .= '"
									data-formengine-validation-rules="';
$array294 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array294)]);

$output290 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array295 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array295)]);

$output290 .= '"
									data-payload="';
$array296 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array296)]);

$output290 .= '"
									data-preview-url="';
$array297 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array297)]);

$output290 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['section'] = NULL;
$arguments298['partial'] = NULL;
$arguments298['delegate'] = NULL;
$arguments298['renderable'] = NULL;
$arguments298['arguments'] = array (
);
$arguments298['optional'] = false;
$arguments298['default'] = NULL;
$arguments298['contentAs'] = NULL;
$arguments298['debug'] = true;
$arguments298['partial'] = 'ModalTitle';
$arguments298['section'] = 'Main';
$arguments298['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output290 .= '"
									data-image-uid="';
$array301 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array301)]);

$output290 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$array304 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array304);
};
$arguments302 = array();
$arguments302['value'] = NULL;
$arguments302['forceObject'] = false;
$renderChildrenClosure303 = ($arguments302['value'] !== null) ? function() use ($arguments302) { return $arguments302['value']; } : $renderChildrenClosure303;
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext)]);

$output290 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['key'] = NULL;
$arguments305['id'] = NULL;
$arguments305['default'] = NULL;
$arguments305['arguments'] = NULL;
$arguments305['extensionName'] = NULL;
$arguments305['languageKey'] = NULL;
$arguments305['alternativeLanguageKeys'] = NULL;
$arguments305['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext)]);

$output290 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['key'] = NULL;
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['languageKey'] = NULL;
$arguments307['alternativeLanguageKeys'] = NULL;
$arguments307['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output290 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['key'] = NULL;
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['languageKey'] = NULL;
$arguments309['alternativeLanguageKeys'] = NULL;
$arguments309['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext)]);

$output290 .= '"
									data-file-field="';
$array311 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array311)]);

$output290 .= '"
									data-field="';
$array312 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array312)]);

$output290 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['key'] = NULL;
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$arguments313['languageKey'] = NULL;
$arguments313['alternativeLanguageKeys'] = NULL;
$arguments313['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext)]);

$output290 .= '
							</button>
						</div>
					';
return $output290;
};
$arguments288 = array();
$arguments288['if'] = NULL;

$output287 .= '';

$output287 .= '
				';
return $output287;
};
$arguments257 = array();
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$arguments257['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array285);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments257['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments257['__elseClosures'][] = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
						<div class="form-control-wrap">
							<input type="hidden" id="';
$array260 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array260)]);

$output259 .= '"
									name="';
$array261 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array261)]);

$output259 .= '"
									value="';
$array262 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array262)]);

$output259 .= '"
									data-formengine-validation-rules="';
$array263 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array263)]);

$output259 .= '"/>
							<button class="btn btn-default t3js-image-manipulation-trigger"
									data-url="';
$array264 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array264)]);

$output259 .= '"
									data-payload="';
$array265 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array265)]);

$output259 .= '"
									data-preview-url="';
$array266 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array266)]);

$output259 .= '"
									data-severity="notice"
									data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['section'] = NULL;
$arguments267['partial'] = NULL;
$arguments267['delegate'] = NULL;
$arguments267['renderable'] = NULL;
$arguments267['arguments'] = array (
);
$arguments267['optional'] = false;
$arguments267['default'] = NULL;
$arguments267['contentAs'] = NULL;
$arguments267['debug'] = true;
$arguments267['partial'] = 'ModalTitle';
$arguments267['section'] = 'Main';
$arguments267['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output259 .= '"
									data-image-uid="';
$array270 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array270)]);

$output259 .= '"
									data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$array273 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array273);
};
$arguments271 = array();
$arguments271['value'] = NULL;
$arguments271['forceObject'] = false;
$renderChildrenClosure272 = ($arguments271['value'] !== null) ? function() use ($arguments271) { return $arguments271['value']; } : $renderChildrenClosure272;
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext)]);

$output259 .= '"
									data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['key'] = NULL;
$arguments274['id'] = NULL;
$arguments274['default'] = NULL;
$arguments274['arguments'] = NULL;
$arguments274['extensionName'] = NULL;
$arguments274['languageKey'] = NULL;
$arguments274['alternativeLanguageKeys'] = NULL;
$arguments274['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext)]);

$output259 .= '"
									data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['key'] = NULL;
$arguments276['id'] = NULL;
$arguments276['default'] = NULL;
$arguments276['arguments'] = NULL;
$arguments276['extensionName'] = NULL;
$arguments276['languageKey'] = NULL;
$arguments276['alternativeLanguageKeys'] = NULL;
$arguments276['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext)]);

$output259 .= '"
									data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['key'] = NULL;
$arguments278['id'] = NULL;
$arguments278['default'] = NULL;
$arguments278['arguments'] = NULL;
$arguments278['extensionName'] = NULL;
$arguments278['languageKey'] = NULL;
$arguments278['alternativeLanguageKeys'] = NULL;
$arguments278['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext)]);

$output259 .= '"
									data-file-field="';
$array280 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array280)]);

$output259 .= '"
									data-field="';
$array281 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array281)]);

$output259 .= '">
								<span class="t3-icon fa fa-crop"></span>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['key'] = NULL;
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$arguments282['languageKey'] = NULL;
$arguments282['alternativeLanguageKeys'] = NULL;
$arguments282['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output259 .= '
							</button>
						</div>
					';
return $output259;
};

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
				<div class="row media-gallery__list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
						<div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
							<p>
								<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['key'] = NULL;
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$arguments319['languageKey'] = NULL;
$arguments319['alternativeLanguageKeys'] = NULL;
$array321 = array (
);$arguments319['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array321);
$array322 = array (
);$arguments319['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array322);

$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext)]);

$output318 .= '</b><br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['key'] = NULL;
$arguments323['id'] = NULL;
$arguments323['default'] = NULL;
$arguments323['arguments'] = NULL;
$arguments323['extensionName'] = NULL;
$arguments323['languageKey'] = NULL;
$arguments323['alternativeLanguageKeys'] = NULL;
$arguments323['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext)]);

$output318 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array325 = array (
);
$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array325)]);

$output318 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['key'] = NULL;
$arguments326['id'] = NULL;
$arguments326['default'] = NULL;
$arguments326['arguments'] = NULL;
$arguments326['extensionName'] = NULL;
$arguments326['languageKey'] = NULL;
$arguments326['alternativeLanguageKeys'] = NULL;
$array328 = array (
);$arguments326['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array328);
$array329 = array (
);$arguments326['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array329);

$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext)]);

$output318 .= '</span>
							</p>
							<div class="t3js-image-manipulation-preview media-object"
								data-preview-height="150"
								data-crop-variant-id="';
$array330 = array (
);
$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array330)]);

$output318 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['additionalAttributes'] = NULL;
$arguments331['data'] = NULL;
$arguments331['class'] = NULL;
$arguments331['dir'] = NULL;
$arguments331['id'] = NULL;
$arguments331['lang'] = NULL;
$arguments331['style'] = NULL;
$arguments331['title'] = NULL;
$arguments331['accesskey'] = NULL;
$arguments331['tabindex'] = NULL;
$arguments331['onclick'] = NULL;
$arguments331['alt'] = NULL;
$arguments331['ismap'] = NULL;
$arguments331['longdesc'] = NULL;
$arguments331['usemap'] = NULL;
$arguments331['src'] = NULL;
$arguments331['treatIdAsReference'] = NULL;
$arguments331['image'] = NULL;
$arguments331['crop'] = NULL;
$arguments331['cropVariant'] = 'default';
$arguments331['width'] = NULL;
$arguments331['height'] = NULL;
$arguments331['minWidth'] = NULL;
$arguments331['minHeight'] = NULL;
$arguments331['maxWidth'] = NULL;
$arguments331['maxHeight'] = NULL;
$arguments331['absolute'] = false;
$array333 = array (
);$arguments331['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array333);
$array334 = array (
);$arguments331['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array334);
$array335 = array (
);$arguments331['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array335);
$arguments331['maxHeight'] = 150;
$arguments331['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array336 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$array339 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array339);
};
$arguments337 = array();
$arguments337['value'] = NULL;
$arguments337['forceObject'] = false;
$renderChildrenClosure338 = ($arguments337['value'] !== null) ? function() use ($arguments337) { return $arguments337['value']; } : $renderChildrenClosure338;$array336['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);
$array340 = array (
);$array336['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array340);
$arguments331['additionalAttributes'] = $array336;

$output318 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output318 .= '
							</div>
						</div>
					';
return $output318;
};
$arguments315 = array();
$arguments315['each'] = NULL;
$arguments315['as'] = NULL;
$arguments315['key'] = NULL;
$arguments315['reverse'] = false;
$arguments315['iteration'] = NULL;
$array317 = array (
);$arguments315['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array317);
$arguments315['as'] = 'cropVariant';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output256 .= '
				</div>
			';
return $output256;
};
$arguments254['__elseClosures'][] = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
				<div class="media-body">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['key'] = NULL;
$arguments362['id'] = NULL;
$arguments362['default'] = NULL;
$arguments362['arguments'] = NULL;
$arguments362['extensionName'] = NULL;
$arguments362['languageKey'] = NULL;
$arguments362['alternativeLanguageKeys'] = NULL;
$arguments362['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext)]);

$output361 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$array366 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array366);
};
$arguments364 = array();
$arguments364['value'] = NULL;
$arguments364['mode'] = 'upper';
$arguments364['mode'] = 'upper';

$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output361 .= '
							</em>
						</p>
					';
return $output361;
};
$arguments359 = array();

$output358 .= '';

$output358 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
						<div class="alert alert-info">
							<h4>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['key'] = NULL;
$arguments370['id'] = NULL;
$arguments370['default'] = NULL;
$arguments370['arguments'] = NULL;
$arguments370['extensionName'] = NULL;
$arguments370['languageKey'] = NULL;
$arguments370['alternativeLanguageKeys'] = NULL;
$arguments370['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext)]);

$output369 .= '
							</h4>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments372 = array();
$arguments372['key'] = NULL;
$arguments372['id'] = NULL;
$arguments372['default'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['extensionName'] = NULL;
$arguments372['languageKey'] = NULL;
$arguments372['alternativeLanguageKeys'] = NULL;
$arguments372['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext)]);

$output369 .= '
							</p>
						</div>
					';
return $output369;
};
$arguments367 = array();
$arguments367['if'] = NULL;

$output358 .= '';

$output358 .= '
				';
return $output358;
};
$arguments342 = array();
$arguments342['then'] = NULL;
$arguments342['else'] = NULL;
$arguments342['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array356);

$expression357 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments342['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array355)
					),
					$renderingContext
				);
$arguments342['__thenClosure'] = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
						<p>
							<em>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['key'] = NULL;
$arguments345['id'] = NULL;
$arguments345['default'] = NULL;
$arguments345['arguments'] = NULL;
$arguments345['extensionName'] = NULL;
$arguments345['languageKey'] = NULL;
$arguments345['alternativeLanguageKeys'] = NULL;
$arguments345['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext)]);

$output344 .= '<br/>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$array349 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array349);
};
$arguments347 = array();
$arguments347['value'] = NULL;
$arguments347['mode'] = 'upper';
$arguments347['mode'] = 'upper';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext)]);

$output344 .= '
							</em>
						</p>
					';
return $output344;
};
$arguments342['__elseClosures'][] = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
						<div class="alert alert-info">
							<h4>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['key'] = NULL;
$arguments351['id'] = NULL;
$arguments351['default'] = NULL;
$arguments351['arguments'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['languageKey'] = NULL;
$arguments351['alternativeLanguageKeys'] = NULL;
$arguments351['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output350 .= '
							</h4>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['key'] = NULL;
$arguments353['id'] = NULL;
$arguments353['default'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['languageKey'] = NULL;
$arguments353['alternativeLanguageKeys'] = NULL;
$arguments353['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext)]);

$output350 .= '
							</p>
						</div>
					';
return $output350;
};

$output341 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output341 .= '
				</div>
			';
return $output341;
};

$output253 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '
	';
return $output253;
};
$arguments251 = array();
$arguments251['name'] = NULL;
$arguments251['name'] = 'Main';

$output248 .= NULL;

$output248 .= '
</html>
';

return $output248;
}


}
#