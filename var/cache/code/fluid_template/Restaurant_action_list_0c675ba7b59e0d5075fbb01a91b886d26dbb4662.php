<?php

class Restaurant_action_list_0c675ba7b59e0d5075fbb01a91b886d26dbb4662 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <h1>Listing for Restaurant</h1>

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

    <table  class="tx_hofexpressapp" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['languageKey'] = NULL;
$arguments5['alternativeLanguageKeys'] = NULL;
$arguments5['key'] = 'tx_hofexpressapp_domain_model_restaurant.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'tx_hofexpressapp_domain_model_restaurant.logo';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</th>
            <th>';
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
$arguments9['key'] = 'tx_hofexpressapp_domain_model_restaurant.address';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'tx_hofexpressapp_domain_model_restaurant.restaurant_type';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</th>
            <th>';
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
$arguments13['key'] = 'tx_hofexpressapp_domain_model_restaurant.cover_image';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output0 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$array23 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.name', $array23)]);
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$arguments19['action'] = NULL;
$arguments19['controller'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['pluginName'] = NULL;
$arguments19['pageUid'] = NULL;
$arguments19['pageType'] = NULL;
$arguments19['noCache'] = NULL;
$arguments19['noCacheHash'] = NULL;
$arguments19['section'] = NULL;
$arguments19['format'] = NULL;
$arguments19['linkAccessRestrictedPages'] = NULL;
$arguments19['additionalParams'] = NULL;
$arguments19['absolute'] = NULL;
$arguments19['addQueryString'] = NULL;
$arguments19['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments19['addQueryStringMethod'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['action'] = 'show';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array22);
$arguments19['arguments'] = $array21;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array28 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.description', $array28)]);
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['name'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['rev'] = NULL;
$arguments24['target'] = NULL;
$arguments24['action'] = NULL;
$arguments24['controller'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['pluginName'] = NULL;
$arguments24['pageUid'] = NULL;
$arguments24['pageType'] = NULL;
$arguments24['noCache'] = NULL;
$arguments24['noCacheHash'] = NULL;
$arguments24['section'] = NULL;
$arguments24['format'] = NULL;
$arguments24['linkAccessRestrictedPages'] = NULL;
$arguments24['additionalParams'] = NULL;
$arguments24['absolute'] = NULL;
$arguments24['addQueryString'] = NULL;
$arguments24['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments24['addQueryStringMethod'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['action'] = 'show';
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array27);
$arguments24['arguments'] = $array26;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array33 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.name', $array33)]);
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = NULL;
$arguments29['rel'] = NULL;
$arguments29['rev'] = NULL;
$arguments29['target'] = NULL;
$arguments29['action'] = NULL;
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = NULL;
$arguments29['noCache'] = NULL;
$arguments29['noCacheHash'] = NULL;
$arguments29['section'] = NULL;
$arguments29['format'] = NULL;
$arguments29['linkAccessRestrictedPages'] = NULL;
$arguments29['additionalParams'] = NULL;
$arguments29['absolute'] = NULL;
$arguments29['addQueryString'] = NULL;
$arguments29['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments29['addQueryStringMethod'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['action'] = 'show';
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array32);
$arguments29['arguments'] = $array31;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array38 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.address', $array38)]);
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = NULL;
$arguments34['rel'] = NULL;
$arguments34['rev'] = NULL;
$arguments34['target'] = NULL;
$arguments34['action'] = NULL;
$arguments34['controller'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['pluginName'] = NULL;
$arguments34['pageUid'] = NULL;
$arguments34['pageType'] = NULL;
$arguments34['noCache'] = NULL;
$arguments34['noCacheHash'] = NULL;
$arguments34['section'] = NULL;
$arguments34['format'] = NULL;
$arguments34['linkAccessRestrictedPages'] = NULL;
$arguments34['additionalParams'] = NULL;
$arguments34['absolute'] = NULL;
$arguments34['addQueryString'] = NULL;
$arguments34['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments34['addQueryStringMethod'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['action'] = 'show';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array37);
$arguments34['arguments'] = $array36;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array43 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.restaurantType', $array43)]);
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
$arguments39['action'] = 'show';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array42);
$arguments39['arguments'] = $array41;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array48 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.coverImage.originalResource.name', $array48)]);
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['name'] = NULL;
$arguments44['rel'] = NULL;
$arguments44['rev'] = NULL;
$arguments44['target'] = NULL;
$arguments44['action'] = NULL;
$arguments44['controller'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['pluginName'] = NULL;
$arguments44['pageUid'] = NULL;
$arguments44['pageType'] = NULL;
$arguments44['noCache'] = NULL;
$arguments44['noCacheHash'] = NULL;
$arguments44['section'] = NULL;
$arguments44['format'] = NULL;
$arguments44['linkAccessRestrictedPages'] = NULL;
$arguments44['additionalParams'] = NULL;
$arguments44['absolute'] = NULL;
$arguments44['addQueryString'] = NULL;
$arguments44['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments44['addQueryStringMethod'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['action'] = 'show';
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array47);
$arguments44['arguments'] = $array46;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$arguments49['action'] = NULL;
$arguments49['controller'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['pluginName'] = NULL;
$arguments49['pageUid'] = NULL;
$arguments49['pageType'] = NULL;
$arguments49['noCache'] = NULL;
$arguments49['noCacheHash'] = NULL;
$arguments49['section'] = NULL;
$arguments49['format'] = NULL;
$arguments49['linkAccessRestrictedPages'] = NULL;
$arguments49['additionalParams'] = NULL;
$arguments49['absolute'] = NULL;
$arguments49['addQueryString'] = NULL;
$arguments49['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments49['addQueryStringMethod'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['action'] = 'edit';
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array52);
$arguments49['arguments'] = $array51;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output18 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['name'] = NULL;
$arguments53['rel'] = NULL;
$arguments53['rev'] = NULL;
$arguments53['target'] = NULL;
$arguments53['action'] = NULL;
$arguments53['controller'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['pluginName'] = NULL;
$arguments53['pageUid'] = NULL;
$arguments53['pageType'] = NULL;
$arguments53['noCache'] = NULL;
$arguments53['noCacheHash'] = NULL;
$arguments53['section'] = NULL;
$arguments53['format'] = NULL;
$arguments53['linkAccessRestrictedPages'] = NULL;
$arguments53['additionalParams'] = NULL;
$arguments53['absolute'] = NULL;
$arguments53['addQueryString'] = NULL;
$arguments53['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments53['addQueryStringMethod'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['action'] = 'delete';
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array56);
$arguments53['arguments'] = $array55;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output18 .= '</td>
            </tr>
        ';
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('restaurants', $array17);
$arguments15['as'] = 'restaurant';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return 'New Restaurant';
};
$arguments57 = array();
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['class'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['name'] = NULL;
$arguments57['rel'] = NULL;
$arguments57['rev'] = NULL;
$arguments57['target'] = NULL;
$arguments57['action'] = NULL;
$arguments57['controller'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['pluginName'] = NULL;
$arguments57['pageUid'] = NULL;
$arguments57['pageType'] = NULL;
$arguments57['noCache'] = NULL;
$arguments57['noCacheHash'] = NULL;
$arguments57['section'] = NULL;
$arguments57['format'] = NULL;
$arguments57['linkAccessRestrictedPages'] = NULL;
$arguments57['additionalParams'] = NULL;
$arguments57['absolute'] = NULL;
$arguments57['addQueryString'] = NULL;
$arguments57['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments57['addQueryStringMethod'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output59 = '';

$output59 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['name'] = NULL;
$arguments60['name'] = 'Default';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output59 .= '

This Template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        List.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
    <h1>Listing for Restaurant</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['queueIdentifier'] = NULL;
$arguments65['as'] = NULL;

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '

    <table  class="tx_hofexpressapp" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output64 .= '</th>
            <th>';
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
$arguments69['key'] = 'tx_hofexpressapp_domain_model_restaurant.description';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output64 .= '</th>
            <th>';
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
$arguments71['key'] = 'tx_hofexpressapp_domain_model_restaurant.logo';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output64 .= '</th>
            <th>';
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

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output64 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['languageKey'] = NULL;
$arguments75['alternativeLanguageKeys'] = NULL;
$arguments75['key'] = 'tx_hofexpressapp_domain_model_restaurant.restaurant_type';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output64 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$arguments77['key'] = 'tx_hofexpressapp_domain_model_restaurant.cover_image';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output64 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$array87 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.name', $array87)]);
};
$arguments83 = array();
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['name'] = NULL;
$arguments83['rel'] = NULL;
$arguments83['rev'] = NULL;
$arguments83['target'] = NULL;
$arguments83['action'] = NULL;
$arguments83['controller'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['pluginName'] = NULL;
$arguments83['pageUid'] = NULL;
$arguments83['pageType'] = NULL;
$arguments83['noCache'] = NULL;
$arguments83['noCacheHash'] = NULL;
$arguments83['section'] = NULL;
$arguments83['format'] = NULL;
$arguments83['linkAccessRestrictedPages'] = NULL;
$arguments83['additionalParams'] = NULL;
$arguments83['absolute'] = NULL;
$arguments83['addQueryString'] = NULL;
$arguments83['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments83['addQueryStringMethod'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['action'] = 'show';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array86);
$arguments83['arguments'] = $array85;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array92 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.description', $array92)]);
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['name'] = NULL;
$arguments88['rel'] = NULL;
$arguments88['rev'] = NULL;
$arguments88['target'] = NULL;
$arguments88['action'] = NULL;
$arguments88['controller'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['pluginName'] = NULL;
$arguments88['pageUid'] = NULL;
$arguments88['pageType'] = NULL;
$arguments88['noCache'] = NULL;
$arguments88['noCacheHash'] = NULL;
$arguments88['section'] = NULL;
$arguments88['format'] = NULL;
$arguments88['linkAccessRestrictedPages'] = NULL;
$arguments88['additionalParams'] = NULL;
$arguments88['absolute'] = NULL;
$arguments88['addQueryString'] = NULL;
$arguments88['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments88['addQueryStringMethod'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['action'] = 'show';
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array91);
$arguments88['arguments'] = $array90;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output82 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array97 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.name', $array97)]);
};
$arguments93 = array();
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['name'] = NULL;
$arguments93['rel'] = NULL;
$arguments93['rev'] = NULL;
$arguments93['target'] = NULL;
$arguments93['action'] = NULL;
$arguments93['controller'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['pluginName'] = NULL;
$arguments93['pageUid'] = NULL;
$arguments93['pageType'] = NULL;
$arguments93['noCache'] = NULL;
$arguments93['noCacheHash'] = NULL;
$arguments93['section'] = NULL;
$arguments93['format'] = NULL;
$arguments93['linkAccessRestrictedPages'] = NULL;
$arguments93['additionalParams'] = NULL;
$arguments93['absolute'] = NULL;
$arguments93['addQueryString'] = NULL;
$arguments93['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments93['addQueryStringMethod'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['action'] = 'show';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array96);
$arguments93['arguments'] = $array95;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output82 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array102 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.address', $array102)]);
};
$arguments98 = array();
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['name'] = NULL;
$arguments98['rel'] = NULL;
$arguments98['rev'] = NULL;
$arguments98['target'] = NULL;
$arguments98['action'] = NULL;
$arguments98['controller'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['pluginName'] = NULL;
$arguments98['pageUid'] = NULL;
$arguments98['pageType'] = NULL;
$arguments98['noCache'] = NULL;
$arguments98['noCacheHash'] = NULL;
$arguments98['section'] = NULL;
$arguments98['format'] = NULL;
$arguments98['linkAccessRestrictedPages'] = NULL;
$arguments98['additionalParams'] = NULL;
$arguments98['absolute'] = NULL;
$arguments98['addQueryString'] = NULL;
$arguments98['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments98['addQueryStringMethod'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['action'] = 'show';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array101);
$arguments98['arguments'] = $array100;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output82 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array107 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.restaurantType', $array107)]);
};
$arguments103 = array();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['name'] = NULL;
$arguments103['rel'] = NULL;
$arguments103['rev'] = NULL;
$arguments103['target'] = NULL;
$arguments103['action'] = NULL;
$arguments103['controller'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['pluginName'] = NULL;
$arguments103['pageUid'] = NULL;
$arguments103['pageType'] = NULL;
$arguments103['noCache'] = NULL;
$arguments103['noCacheHash'] = NULL;
$arguments103['section'] = NULL;
$arguments103['format'] = NULL;
$arguments103['linkAccessRestrictedPages'] = NULL;
$arguments103['additionalParams'] = NULL;
$arguments103['absolute'] = NULL;
$arguments103['addQueryString'] = NULL;
$arguments103['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments103['addQueryStringMethod'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['action'] = 'show';
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array106);
$arguments103['arguments'] = $array105;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output82 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array112 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.coverImage.originalResource.name', $array112)]);
};
$arguments108 = array();
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['name'] = NULL;
$arguments108['rel'] = NULL;
$arguments108['rev'] = NULL;
$arguments108['target'] = NULL;
$arguments108['action'] = NULL;
$arguments108['controller'] = NULL;
$arguments108['extensionName'] = NULL;
$arguments108['pluginName'] = NULL;
$arguments108['pageUid'] = NULL;
$arguments108['pageType'] = NULL;
$arguments108['noCache'] = NULL;
$arguments108['noCacheHash'] = NULL;
$arguments108['section'] = NULL;
$arguments108['format'] = NULL;
$arguments108['linkAccessRestrictedPages'] = NULL;
$arguments108['additionalParams'] = NULL;
$arguments108['absolute'] = NULL;
$arguments108['addQueryString'] = NULL;
$arguments108['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments108['addQueryStringMethod'] = NULL;
$arguments108['arguments'] = NULL;
$arguments108['action'] = 'show';
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array111);
$arguments108['arguments'] = $array110;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output82 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments113 = array();
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['name'] = NULL;
$arguments113['rel'] = NULL;
$arguments113['rev'] = NULL;
$arguments113['target'] = NULL;
$arguments113['action'] = NULL;
$arguments113['controller'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['pluginName'] = NULL;
$arguments113['pageUid'] = NULL;
$arguments113['pageType'] = NULL;
$arguments113['noCache'] = NULL;
$arguments113['noCacheHash'] = NULL;
$arguments113['section'] = NULL;
$arguments113['format'] = NULL;
$arguments113['linkAccessRestrictedPages'] = NULL;
$arguments113['additionalParams'] = NULL;
$arguments113['absolute'] = NULL;
$arguments113['addQueryString'] = NULL;
$arguments113['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments113['addQueryStringMethod'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['action'] = 'edit';
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array116);
$arguments113['arguments'] = $array115;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output82 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments117 = array();
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$arguments117['name'] = NULL;
$arguments117['rel'] = NULL;
$arguments117['rev'] = NULL;
$arguments117['target'] = NULL;
$arguments117['action'] = NULL;
$arguments117['controller'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['pluginName'] = NULL;
$arguments117['pageUid'] = NULL;
$arguments117['pageType'] = NULL;
$arguments117['noCache'] = NULL;
$arguments117['noCacheHash'] = NULL;
$arguments117['section'] = NULL;
$arguments117['format'] = NULL;
$arguments117['linkAccessRestrictedPages'] = NULL;
$arguments117['additionalParams'] = NULL;
$arguments117['absolute'] = NULL;
$arguments117['addQueryString'] = NULL;
$arguments117['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments117['addQueryStringMethod'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['action'] = 'delete';
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array120);
$arguments117['arguments'] = $array119;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output82 .= '</td>
            </tr>
        ';
return $output82;
};
$arguments79 = array();
$arguments79['each'] = NULL;
$arguments79['as'] = NULL;
$arguments79['key'] = NULL;
$arguments79['reverse'] = false;
$arguments79['iteration'] = NULL;
$array81 = array (
);$arguments79['each'] = $renderingContext->getVariableProvider()->getByPath('restaurants', $array81);
$arguments79['as'] = 'restaurant';

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output64 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return 'New Restaurant';
};
$arguments121 = array();
$arguments121['additionalAttributes'] = NULL;
$arguments121['data'] = NULL;
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['id'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$arguments121['name'] = NULL;
$arguments121['rel'] = NULL;
$arguments121['rev'] = NULL;
$arguments121['target'] = NULL;
$arguments121['action'] = NULL;
$arguments121['controller'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['pluginName'] = NULL;
$arguments121['pageUid'] = NULL;
$arguments121['pageType'] = NULL;
$arguments121['noCache'] = NULL;
$arguments121['noCacheHash'] = NULL;
$arguments121['section'] = NULL;
$arguments121['format'] = NULL;
$arguments121['linkAccessRestrictedPages'] = NULL;
$arguments121['additionalParams'] = NULL;
$arguments121['absolute'] = NULL;
$arguments121['addQueryString'] = NULL;
$arguments121['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments121['addQueryStringMethod'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['action'] = 'new';

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output64 .= '
';
return $output64;
};
$arguments62 = array();
$arguments62['name'] = NULL;
$arguments62['name'] = 'content';

$output59 .= NULL;

$output59 .= '

';

return $output59;
}


}
#