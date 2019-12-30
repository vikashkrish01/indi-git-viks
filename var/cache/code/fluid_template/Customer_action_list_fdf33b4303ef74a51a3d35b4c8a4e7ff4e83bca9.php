<?php

class Customer_action_list_fdf33b4303ef74a51a3d35b4c8a4e7ff4e83bca9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <h1>Listing for Customer</h1>

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
$arguments3['key'] = 'tx_hofexpressapp_domain_model_customer.user_id';

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
$arguments5['key'] = 'tx_hofexpressapp_domain_model_customer.phone_number';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array15 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('customer.userId', $array15)]);
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['name'] = NULL;
$arguments11['rel'] = NULL;
$arguments11['rev'] = NULL;
$arguments11['target'] = NULL;
$arguments11['action'] = NULL;
$arguments11['controller'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['pluginName'] = NULL;
$arguments11['pageUid'] = NULL;
$arguments11['pageType'] = NULL;
$arguments11['noCache'] = NULL;
$arguments11['noCacheHash'] = NULL;
$arguments11['section'] = NULL;
$arguments11['format'] = NULL;
$arguments11['linkAccessRestrictedPages'] = NULL;
$arguments11['additionalParams'] = NULL;
$arguments11['absolute'] = NULL;
$arguments11['addQueryString'] = NULL;
$arguments11['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments11['addQueryStringMethod'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['action'] = 'show';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['customer'] = $renderingContext->getVariableProvider()->getByPath('customer', $array14);
$arguments11['arguments'] = $array13;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array20 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('customer.phoneNumber', $array20)]);
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['name'] = NULL;
$arguments16['rel'] = NULL;
$arguments16['rev'] = NULL;
$arguments16['target'] = NULL;
$arguments16['action'] = NULL;
$arguments16['controller'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['pluginName'] = NULL;
$arguments16['pageUid'] = NULL;
$arguments16['pageType'] = NULL;
$arguments16['noCache'] = NULL;
$arguments16['noCacheHash'] = NULL;
$arguments16['section'] = NULL;
$arguments16['format'] = NULL;
$arguments16['linkAccessRestrictedPages'] = NULL;
$arguments16['additionalParams'] = NULL;
$arguments16['absolute'] = NULL;
$arguments16['addQueryString'] = NULL;
$arguments16['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments16['addQueryStringMethod'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['action'] = 'show';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['customer'] = $renderingContext->getVariableProvider()->getByPath('customer', $array19);
$arguments16['arguments'] = $array18;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output10 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$arguments21['action'] = NULL;
$arguments21['controller'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['pluginName'] = NULL;
$arguments21['pageUid'] = NULL;
$arguments21['pageType'] = NULL;
$arguments21['noCache'] = NULL;
$arguments21['noCacheHash'] = NULL;
$arguments21['section'] = NULL;
$arguments21['format'] = NULL;
$arguments21['linkAccessRestrictedPages'] = NULL;
$arguments21['additionalParams'] = NULL;
$arguments21['absolute'] = NULL;
$arguments21['addQueryString'] = NULL;
$arguments21['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['action'] = 'edit';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['customer'] = $renderingContext->getVariableProvider()->getByPath('customer', $array24);
$arguments21['arguments'] = $array23;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output10 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments25 = array();
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['rev'] = NULL;
$arguments25['target'] = NULL;
$arguments25['action'] = NULL;
$arguments25['controller'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['pluginName'] = NULL;
$arguments25['pageUid'] = NULL;
$arguments25['pageType'] = NULL;
$arguments25['noCache'] = NULL;
$arguments25['noCacheHash'] = NULL;
$arguments25['section'] = NULL;
$arguments25['format'] = NULL;
$arguments25['linkAccessRestrictedPages'] = NULL;
$arguments25['additionalParams'] = NULL;
$arguments25['absolute'] = NULL;
$arguments25['addQueryString'] = NULL;
$arguments25['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments25['addQueryStringMethod'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['action'] = 'delete';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['customer'] = $renderingContext->getVariableProvider()->getByPath('customer', $array28);
$arguments25['arguments'] = $array27;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output10 .= '</td>
            </tr>
        ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('customers', $array9);
$arguments7['as'] = 'customer';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return 'New Customer';
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
$arguments29['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output31 = '';

$output31 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['name'] = NULL;
$arguments32['name'] = 'Default';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output31 .= '

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
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
    <h1>Listing for Customer</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['queueIdentifier'] = NULL;
$arguments37['as'] = NULL;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '

    <table  class="tx_hofexpressapp" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['languageKey'] = NULL;
$arguments39['alternativeLanguageKeys'] = NULL;
$arguments39['key'] = 'tx_hofexpressapp_domain_model_customer.user_id';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output36 .= '</th>
            <th>';
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
$arguments41['key'] = 'tx_hofexpressapp_domain_model_customer.phone_number';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output36 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array51 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('customer.userId', $array51)]);
};
$arguments47 = array();
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['name'] = NULL;
$arguments47['rel'] = NULL;
$arguments47['rev'] = NULL;
$arguments47['target'] = NULL;
$arguments47['action'] = NULL;
$arguments47['controller'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['pluginName'] = NULL;
$arguments47['pageUid'] = NULL;
$arguments47['pageType'] = NULL;
$arguments47['noCache'] = NULL;
$arguments47['noCacheHash'] = NULL;
$arguments47['section'] = NULL;
$arguments47['format'] = NULL;
$arguments47['linkAccessRestrictedPages'] = NULL;
$arguments47['additionalParams'] = NULL;
$arguments47['absolute'] = NULL;
$arguments47['addQueryString'] = NULL;
$arguments47['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments47['addQueryStringMethod'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['action'] = 'show';
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['customer'] = $renderingContext->getVariableProvider()->getByPath('customer', $array50);
$arguments47['arguments'] = $array49;

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array56 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('customer.phoneNumber', $array56)]);
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['name'] = NULL;
$arguments52['rel'] = NULL;
$arguments52['rev'] = NULL;
$arguments52['target'] = NULL;
$arguments52['action'] = NULL;
$arguments52['controller'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['pluginName'] = NULL;
$arguments52['pageUid'] = NULL;
$arguments52['pageType'] = NULL;
$arguments52['noCache'] = NULL;
$arguments52['noCacheHash'] = NULL;
$arguments52['section'] = NULL;
$arguments52['format'] = NULL;
$arguments52['linkAccessRestrictedPages'] = NULL;
$arguments52['additionalParams'] = NULL;
$arguments52['absolute'] = NULL;
$arguments52['addQueryString'] = NULL;
$arguments52['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments52['addQueryStringMethod'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['action'] = 'show';
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['customer'] = $renderingContext->getVariableProvider()->getByPath('customer', $array55);
$arguments52['arguments'] = $array54;

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output46 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return 'Edit';
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
$arguments57['action'] = 'edit';
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['customer'] = $renderingContext->getVariableProvider()->getByPath('customer', $array60);
$arguments57['arguments'] = $array59;

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output46 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['name'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['rev'] = NULL;
$arguments61['target'] = NULL;
$arguments61['action'] = NULL;
$arguments61['controller'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['pluginName'] = NULL;
$arguments61['pageUid'] = NULL;
$arguments61['pageType'] = NULL;
$arguments61['noCache'] = NULL;
$arguments61['noCacheHash'] = NULL;
$arguments61['section'] = NULL;
$arguments61['format'] = NULL;
$arguments61['linkAccessRestrictedPages'] = NULL;
$arguments61['additionalParams'] = NULL;
$arguments61['absolute'] = NULL;
$arguments61['addQueryString'] = NULL;
$arguments61['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments61['addQueryStringMethod'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['action'] = 'delete';
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['customer'] = $renderingContext->getVariableProvider()->getByPath('customer', $array64);
$arguments61['arguments'] = $array63;

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output46 .= '</td>
            </tr>
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
);$arguments43['each'] = $renderingContext->getVariableProvider()->getByPath('customers', $array45);
$arguments43['as'] = 'customer';

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output36 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return 'New Customer';
};
$arguments65 = array();
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['name'] = NULL;
$arguments65['rel'] = NULL;
$arguments65['rev'] = NULL;
$arguments65['target'] = NULL;
$arguments65['action'] = NULL;
$arguments65['controller'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['pluginName'] = NULL;
$arguments65['pageUid'] = NULL;
$arguments65['pageType'] = NULL;
$arguments65['noCache'] = NULL;
$arguments65['noCacheHash'] = NULL;
$arguments65['section'] = NULL;
$arguments65['format'] = NULL;
$arguments65['linkAccessRestrictedPages'] = NULL;
$arguments65['additionalParams'] = NULL;
$arguments65['absolute'] = NULL;
$arguments65['addQueryString'] = NULL;
$arguments65['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments65['addQueryStringMethod'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['action'] = 'new';

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output36 .= '
';
return $output36;
};
$arguments34 = array();
$arguments34['name'] = NULL;
$arguments34['name'] = 'content';

$output31 .= NULL;

$output31 .= '

';

return $output31;
}


}
#