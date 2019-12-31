<?php

class Restaurant_action_show_2fabad8c0f2c46593e28fae255d278e9966c2192 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>Restaurant Details</h1>
    <div class="row mb-3">
        <div claas="col-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['alt'] = NULL;
$arguments14['ismap'] = NULL;
$arguments14['longdesc'] = NULL;
$arguments14['usemap'] = NULL;
$arguments14['src'] = NULL;
$arguments14['treatIdAsReference'] = NULL;
$arguments14['image'] = NULL;
$arguments14['crop'] = NULL;
$arguments14['cropVariant'] = 'default';
$arguments14['width'] = NULL;
$arguments14['height'] = NULL;
$arguments14['minWidth'] = NULL;
$arguments14['minHeight'] = NULL;
$arguments14['maxWidth'] = NULL;
$arguments14['maxHeight'] = NULL;
$arguments14['absolute'] = false;
$array16 = array (
);$arguments14['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array16);
$arguments14['width'] = 200;

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
                ';
return $output13;
};
$arguments11 = array();

$output10 .= '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return '
                    No photo given...
                ';
};
$arguments17 = array();
$arguments17['if'] = NULL;

$output10 .= '';

$output10 .= '
            ';
return $output10;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['alt'] = NULL;
$arguments4['ismap'] = NULL;
$arguments4['longdesc'] = NULL;
$arguments4['usemap'] = NULL;
$arguments4['src'] = NULL;
$arguments4['treatIdAsReference'] = NULL;
$arguments4['image'] = NULL;
$arguments4['crop'] = NULL;
$arguments4['cropVariant'] = 'default';
$arguments4['width'] = NULL;
$arguments4['height'] = NULL;
$arguments4['minWidth'] = NULL;
$arguments4['minHeight'] = NULL;
$arguments4['maxWidth'] = NULL;
$arguments4['maxHeight'] = NULL;
$arguments4['absolute'] = false;
$array6 = array (
);$arguments4['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array6);
$arguments4['width'] = 200;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
                ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    No photo given...
                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </div>
        <div class="col-6">

                <p>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '

                    : ';
$array21 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.name', $array21)]);

$output0 .= '
                </p>
            <p>

                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['languageKey'] = NULL;
$arguments22['alternativeLanguageKeys'] = NULL;
$arguments22['key'] = 'tx_hofexpressapp_domain_model_restaurant.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output0 .= '

               : ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('restaurant.description', $array26);
};
$arguments24 = array();
$arguments24['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
            </p>
            <p>
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
$arguments27['key'] = 'tx_hofexpressapp_domain_model_restaurant.address';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output0 .= '

                :    ';
$array29 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.address', $array29)]);

$output0 .= '
            </p>
        </div>
        <div class="col-3">
            <strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['key'] = 'tx_hofexpressapp_domain_model_restaurant.restaurant_type';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output0 .= '

                :    ';
$array32 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.restaurantType', $array32)]);

$output0 .= '
            </strong>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return 'Back to list';
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['name'] = NULL;
$arguments33['rel'] = NULL;
$arguments33['rev'] = NULL;
$arguments33['target'] = NULL;
$arguments33['action'] = NULL;
$arguments33['controller'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['pluginName'] = NULL;
$arguments33['pageUid'] = NULL;
$arguments33['pageType'] = NULL;
$arguments33['noCache'] = NULL;
$arguments33['noCacheHash'] = NULL;
$arguments33['section'] = NULL;
$arguments33['format'] = NULL;
$arguments33['linkAccessRestrictedPages'] = NULL;
$arguments33['additionalParams'] = NULL;
$arguments33['absolute'] = NULL;
$arguments33['addQueryString'] = NULL;
$arguments33['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments33['addQueryStringMethod'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['action'] = 'list';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
    <br/>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return 'New Restaurant';
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['name'] = NULL;
$arguments35['rel'] = NULL;
$arguments35['rev'] = NULL;
$arguments35['target'] = NULL;
$arguments35['action'] = NULL;
$arguments35['controller'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['pluginName'] = NULL;
$arguments35['pageUid'] = NULL;
$arguments35['pageType'] = NULL;
$arguments35['noCache'] = NULL;
$arguments35['noCacheHash'] = NULL;
$arguments35['section'] = NULL;
$arguments35['format'] = NULL;
$arguments35['linkAccessRestrictedPages'] = NULL;
$arguments35['additionalParams'] = NULL;
$arguments35['absolute'] = NULL;
$arguments35['addQueryString'] = NULL;
$arguments35['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments35['addQueryStringMethod'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output37 = '';

$output37 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['name'] = NULL;
$arguments38['name'] = 'Default';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output37 .= '

This Template is responsible for displaying a single view for a domain object

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
Resources:
Private:
Templates:
Show.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
    <h1>Restaurant Details</h1>
    <div class="row mb-3">
        <div claas="col-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['alt'] = NULL;
$arguments56['ismap'] = NULL;
$arguments56['longdesc'] = NULL;
$arguments56['usemap'] = NULL;
$arguments56['src'] = NULL;
$arguments56['treatIdAsReference'] = NULL;
$arguments56['image'] = NULL;
$arguments56['crop'] = NULL;
$arguments56['cropVariant'] = 'default';
$arguments56['width'] = NULL;
$arguments56['height'] = NULL;
$arguments56['minWidth'] = NULL;
$arguments56['minHeight'] = NULL;
$arguments56['maxWidth'] = NULL;
$arguments56['maxHeight'] = NULL;
$arguments56['absolute'] = false;
$array58 = array (
);$arguments56['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array58);
$arguments56['width'] = 200;

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                ';
return $output55;
};
$arguments53 = array();

$output52 .= '';

$output52 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return '
                    No photo given...
                ';
};
$arguments59 = array();
$arguments59['if'] = NULL;

$output52 .= '';

$output52 .= '
            ';
return $output52;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo', $array50);

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['alt'] = NULL;
$arguments46['ismap'] = NULL;
$arguments46['longdesc'] = NULL;
$arguments46['usemap'] = NULL;
$arguments46['src'] = NULL;
$arguments46['treatIdAsReference'] = NULL;
$arguments46['image'] = NULL;
$arguments46['crop'] = NULL;
$arguments46['cropVariant'] = 'default';
$arguments46['width'] = NULL;
$arguments46['height'] = NULL;
$arguments46['minWidth'] = NULL;
$arguments46['minHeight'] = NULL;
$arguments46['maxWidth'] = NULL;
$arguments46['maxHeight'] = NULL;
$arguments46['absolute'] = false;
$array48 = array (
);$arguments46['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array48);
$arguments46['width'] = 200;

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                ';
return $output45;
};
$arguments43['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    No photo given...
                ';
};

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
        </div>
        <div class="col-6">

                <p>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['languageKey'] = NULL;
$arguments61['alternativeLanguageKeys'] = NULL;
$arguments61['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output42 .= '

                    : ';
$array63 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.name', $array63)]);

$output42 .= '
                </p>
            <p>

                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'tx_hofexpressapp_domain_model_restaurant.description';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output42 .= '

               : ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$array68 = array (
);return $renderingContext->getVariableProvider()->getByPath('restaurant.description', $array68);
};
$arguments66 = array();
$arguments66['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output42 .= '
            </p>
            <p>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'tx_hofexpressapp_domain_model_restaurant.address';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output42 .= '

                :    ';
$array71 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.address', $array71)]);

$output42 .= '
            </p>
        </div>
        <div class="col-3">
            <strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$arguments72['key'] = 'tx_hofexpressapp_domain_model_restaurant.restaurant_type';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output42 .= '

                :    ';
$array74 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.restaurantType', $array74)]);

$output42 .= '
            </strong>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return 'Back to list';
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['name'] = NULL;
$arguments75['rel'] = NULL;
$arguments75['rev'] = NULL;
$arguments75['target'] = NULL;
$arguments75['action'] = NULL;
$arguments75['controller'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['pluginName'] = NULL;
$arguments75['pageUid'] = NULL;
$arguments75['pageType'] = NULL;
$arguments75['noCache'] = NULL;
$arguments75['noCacheHash'] = NULL;
$arguments75['section'] = NULL;
$arguments75['format'] = NULL;
$arguments75['linkAccessRestrictedPages'] = NULL;
$arguments75['additionalParams'] = NULL;
$arguments75['absolute'] = NULL;
$arguments75['addQueryString'] = NULL;
$arguments75['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments75['addQueryStringMethod'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['action'] = 'list';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output42 .= '
    <br/>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return 'New Restaurant';
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['name'] = NULL;
$arguments77['rel'] = NULL;
$arguments77['rev'] = NULL;
$arguments77['target'] = NULL;
$arguments77['action'] = NULL;
$arguments77['controller'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['pluginName'] = NULL;
$arguments77['pageUid'] = NULL;
$arguments77['pageType'] = NULL;
$arguments77['noCache'] = NULL;
$arguments77['noCacheHash'] = NULL;
$arguments77['section'] = NULL;
$arguments77['format'] = NULL;
$arguments77['linkAccessRestrictedPages'] = NULL;
$arguments77['additionalParams'] = NULL;
$arguments77['absolute'] = NULL;
$arguments77['addQueryString'] = NULL;
$arguments77['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments77['addQueryStringMethod'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['action'] = 'new';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output42 .= '
';
return $output42;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'content';

$output37 .= NULL;

$output37 .= '

';

return $output37;
}


}
#