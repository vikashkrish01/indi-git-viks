<?php

class Restaurant_action_show_a0c91cb12cc48ca46cb2959fc13d819664af00f2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <h2>Restaurant Details</h2>
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
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                    ';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurantMenu.name', $array38)]);

$output37 .= '
                ';
return $output37;
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
$arguments33['action'] = 'show';
$arguments33['controller'] = 'RestaurantMenu';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['restaurantMenu'] = $renderingContext->getVariableProvider()->getByPath('restaurantMenu', $array36);
$arguments33['arguments'] = $array35;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
            </p>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return 'Back to list';
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['name'] = NULL;
$arguments39['rel'] = NULL;
$arguments39['rev'] = NULL;
$arguments39['target'] = NULL;
$arguments39['action'] = NULL;
$arguments39['controller'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['pluginName'] = NULL;
$arguments39['pageUid'] = NULL;
$arguments39['pageType'] = NULL;
$arguments39['noCache'] = NULL;
$arguments39['noCacheHash'] = NULL;
$arguments39['section'] = NULL;
$arguments39['format'] = NULL;
$arguments39['linkAccessRestrictedPages'] = NULL;
$arguments39['additionalParams'] = NULL;
$arguments39['absolute'] = NULL;
$arguments39['addQueryString'] = NULL;
$arguments39['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments39['addQueryStringMethod'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['action'] = 'list';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '
    <br/>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output41 = '';

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['name'] = NULL;
$arguments42['name'] = 'Default';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output41 .= '

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
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
    <h2>Restaurant Details</h2>
    <div class="row mb-3">
        <div claas="col-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['alt'] = NULL;
$arguments60['ismap'] = NULL;
$arguments60['longdesc'] = NULL;
$arguments60['usemap'] = NULL;
$arguments60['src'] = NULL;
$arguments60['treatIdAsReference'] = NULL;
$arguments60['image'] = NULL;
$arguments60['crop'] = NULL;
$arguments60['cropVariant'] = 'default';
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$arguments60['minWidth'] = NULL;
$arguments60['minHeight'] = NULL;
$arguments60['maxWidth'] = NULL;
$arguments60['maxHeight'] = NULL;
$arguments60['absolute'] = false;
$array62 = array (
);$arguments60['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array62);
$arguments60['width'] = 200;

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                ';
return $output59;
};
$arguments57 = array();

$output56 .= '';

$output56 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return '
                    No photo given...
                ';
};
$arguments63 = array();
$arguments63['if'] = NULL;

$output56 .= '';

$output56 .= '
            ';
return $output56;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo', $array54);

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['alt'] = NULL;
$arguments50['ismap'] = NULL;
$arguments50['longdesc'] = NULL;
$arguments50['usemap'] = NULL;
$arguments50['src'] = NULL;
$arguments50['treatIdAsReference'] = NULL;
$arguments50['image'] = NULL;
$arguments50['crop'] = NULL;
$arguments50['cropVariant'] = 'default';
$arguments50['width'] = NULL;
$arguments50['height'] = NULL;
$arguments50['minWidth'] = NULL;
$arguments50['minHeight'] = NULL;
$arguments50['maxWidth'] = NULL;
$arguments50['maxHeight'] = NULL;
$arguments50['absolute'] = false;
$array52 = array (
);$arguments50['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array52);
$arguments50['width'] = 200;

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                ';
return $output49;
};
$arguments47['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    No photo given...
                ';
};

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
        </div>
        <div class="col-6">

                <p>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$arguments65['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output46 .= '

                    : ';
$array67 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.name', $array67)]);

$output46 .= '
                </p>
            <p>

                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$arguments68['key'] = 'tx_hofexpressapp_domain_model_restaurant.description';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output46 .= '

               : ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$array72 = array (
);return $renderingContext->getVariableProvider()->getByPath('restaurant.description', $array72);
};
$arguments70 = array();
$arguments70['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output46 .= '
            </p>
            <p>
                    ';
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
$arguments73['key'] = 'tx_hofexpressapp_domain_model_restaurant.address';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output46 .= '

                :    ';
$array75 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.address', $array75)]);

$output46 .= '
            </p>
        </div>
        <div class="col-3">
            <strong>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$arguments76['key'] = 'tx_hofexpressapp_domain_model_restaurant.restaurant_type';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output46 .= '

                :    ';
$array78 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.restaurantType', $array78)]);

$output46 .= '
            </strong>
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                    ';
$array84 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurantMenu.name', $array84)]);

$output83 .= '
                ';
return $output83;
};
$arguments79 = array();
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['name'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['rev'] = NULL;
$arguments79['target'] = NULL;
$arguments79['action'] = NULL;
$arguments79['controller'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['pluginName'] = NULL;
$arguments79['pageUid'] = NULL;
$arguments79['pageType'] = NULL;
$arguments79['noCache'] = NULL;
$arguments79['noCacheHash'] = NULL;
$arguments79['section'] = NULL;
$arguments79['format'] = NULL;
$arguments79['linkAccessRestrictedPages'] = NULL;
$arguments79['additionalParams'] = NULL;
$arguments79['absolute'] = NULL;
$arguments79['addQueryString'] = NULL;
$arguments79['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments79['addQueryStringMethod'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['action'] = 'show';
$arguments79['controller'] = 'RestaurantMenu';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['restaurantMenu'] = $renderingContext->getVariableProvider()->getByPath('restaurantMenu', $array82);
$arguments79['arguments'] = $array81;

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output46 .= '
            </p>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return 'Back to list';
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$arguments85['action'] = NULL;
$arguments85['controller'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['pluginName'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = NULL;
$arguments85['noCache'] = NULL;
$arguments85['noCacheHash'] = NULL;
$arguments85['section'] = NULL;
$arguments85['format'] = NULL;
$arguments85['linkAccessRestrictedPages'] = NULL;
$arguments85['additionalParams'] = NULL;
$arguments85['absolute'] = NULL;
$arguments85['addQueryString'] = NULL;
$arguments85['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['action'] = 'list';

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output46 .= '
    <br/>
';
return $output46;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'content';

$output41 .= NULL;

$output41 .= '

';

return $output41;
}


}
#