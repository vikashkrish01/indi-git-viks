<?php

class Restaurant_action_list_fa74749423243f88c9bfd2cdee431be1c2670939 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

      <div class="row">
          <div class="col-6">
              <h2>Lists Of Restaurants</h2>
          </div>
          <div class="col-6">
              <form>
                  <input type="text" class="form-control" placeholder="search">
              </form>
          </div>
      </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
      <div class="row">
          <div class="col-3">
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
                  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['alt'] = NULL;
$arguments18['ismap'] = NULL;
$arguments18['longdesc'] = NULL;
$arguments18['usemap'] = NULL;
$arguments18['src'] = NULL;
$arguments18['treatIdAsReference'] = NULL;
$arguments18['image'] = NULL;
$arguments18['crop'] = NULL;
$arguments18['cropVariant'] = 'default';
$arguments18['width'] = NULL;
$arguments18['height'] = NULL;
$arguments18['minWidth'] = NULL;
$arguments18['minHeight'] = NULL;
$arguments18['maxWidth'] = NULL;
$arguments18['maxHeight'] = NULL;
$arguments18['absolute'] = false;
$array20 = array (
);$arguments18['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array20);
$arguments18['maxWidth'] = 200;
$arguments18['maxHeight'] = 200;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                  ';
return $output17;
};
$arguments15 = array();

$output14 .= '';

$output14 .= '
                  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return '
                      No photo given...
                  ';
};
$arguments21 = array();
$arguments21['if'] = NULL;

$output14 .= '';

$output14 .= '
              ';
return $output14;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo', $array12);

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['alt'] = NULL;
$arguments8['ismap'] = NULL;
$arguments8['longdesc'] = NULL;
$arguments8['usemap'] = NULL;
$arguments8['src'] = NULL;
$arguments8['treatIdAsReference'] = NULL;
$arguments8['image'] = NULL;
$arguments8['crop'] = NULL;
$arguments8['cropVariant'] = 'default';
$arguments8['width'] = NULL;
$arguments8['height'] = NULL;
$arguments8['minWidth'] = NULL;
$arguments8['minHeight'] = NULL;
$arguments8['maxWidth'] = NULL;
$arguments8['maxHeight'] = NULL;
$arguments8['absolute'] = false;
$array10 = array (
);$arguments8['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array10);
$arguments8['maxWidth'] = 200;
$arguments8['maxHeight'] = 200;

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
                  ';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                      No photo given...
                  ';
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
          </div>
          <div class="col-6">
              <strong>
                  ';
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
$arguments23['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output4 .= '

                  :
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array29 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.name', $array29)]);
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
$arguments25['action'] = 'show';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array28);
$arguments25['arguments'] = $array27;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output4 .= '
              </strong>
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

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output4 .= '

                  :    ';
$array32 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.restaurantType', $array32)]);

$output4 .= '
              </strong>
          </div>
      </div>
        <hr>
    ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('restaurants', $array3);
$arguments1['as'] = 'restaurant';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
    <table  class="tx_hofexpressapp" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$arguments36['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$arguments38['key'] = 'tx_hofexpressapp_domain_model_restaurant.restaurant_type';

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output35 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return '
            <tr>
                <td></td>
                <td></td>
            </tr>
        ';
};
$arguments40 = array();
$arguments40['each'] = NULL;
$arguments40['as'] = NULL;
$arguments40['key'] = NULL;
$arguments40['reverse'] = false;
$arguments40['iteration'] = NULL;
$array42 = array (
);$arguments40['each'] = $renderingContext->getVariableProvider()->getByPath('restaurants', $array42);
$arguments40['as'] = 'restaurant';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output35 .= '
    </table>
    ';
return $output35;
};
$arguments33 = array();

$output0 .= NULL;

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output43 = '';

$output43 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'Default';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output43 .= '

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
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '

      <div class="row">
          <div class="col-6">
              <h2>Lists Of Restaurants</h2>
          </div>
          <div class="col-6">
              <form>
                  <input type="text" class="form-control" placeholder="search">
              </form>
          </div>
      </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
      <div class="row">
          <div class="col-3">
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['alt'] = NULL;
$arguments66['ismap'] = NULL;
$arguments66['longdesc'] = NULL;
$arguments66['usemap'] = NULL;
$arguments66['src'] = NULL;
$arguments66['treatIdAsReference'] = NULL;
$arguments66['image'] = NULL;
$arguments66['crop'] = NULL;
$arguments66['cropVariant'] = 'default';
$arguments66['width'] = NULL;
$arguments66['height'] = NULL;
$arguments66['minWidth'] = NULL;
$arguments66['minHeight'] = NULL;
$arguments66['maxWidth'] = NULL;
$arguments66['maxHeight'] = NULL;
$arguments66['absolute'] = false;
$array68 = array (
);$arguments66['src'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo.originalResource.publicUrl', $array68);
$arguments66['maxWidth'] = 200;
$arguments66['maxHeight'] = 200;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                  ';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
                  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return '
                      No photo given...
                  ';
};
$arguments69 = array();
$arguments69['if'] = NULL;

$output62 .= '';

$output62 .= '
              ';
return $output62;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('restaurant.logo', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = function() use ($renderingContext, $self) {
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
$arguments56['maxWidth'] = 200;
$arguments56['maxHeight'] = 200;

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                  ';
return $output55;
};
$arguments53['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                      No photo given...
                  ';
};

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
          </div>
          <div class="col-6">
              <strong>
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
$arguments71['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output52 .= '

                  :
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array77 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.name', $array77)]);
};
$arguments73 = array();
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['name'] = NULL;
$arguments73['rel'] = NULL;
$arguments73['rev'] = NULL;
$arguments73['target'] = NULL;
$arguments73['action'] = NULL;
$arguments73['controller'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['pluginName'] = NULL;
$arguments73['pageUid'] = NULL;
$arguments73['pageType'] = NULL;
$arguments73['noCache'] = NULL;
$arguments73['noCacheHash'] = NULL;
$arguments73['section'] = NULL;
$arguments73['format'] = NULL;
$arguments73['linkAccessRestrictedPages'] = NULL;
$arguments73['additionalParams'] = NULL;
$arguments73['absolute'] = NULL;
$arguments73['addQueryString'] = NULL;
$arguments73['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments73['addQueryStringMethod'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['action'] = 'show';
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['restaurant'] = $renderingContext->getVariableProvider()->getByPath('restaurant', $array76);
$arguments73['arguments'] = $array75;

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output52 .= '
              </strong>
          </div>
          <div class="col-3">
              <strong>
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['key'] = NULL;
$arguments78['id'] = NULL;
$arguments78['default'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['languageKey'] = NULL;
$arguments78['alternativeLanguageKeys'] = NULL;
$arguments78['key'] = 'tx_hofexpressapp_domain_model_restaurant.restaurant_type';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output52 .= '

                  :    ';
$array80 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('restaurant.restaurantType', $array80)]);

$output52 .= '
              </strong>
          </div>
      </div>
        <hr>
    ';
return $output52;
};
$arguments49 = array();
$arguments49['each'] = NULL;
$arguments49['as'] = NULL;
$arguments49['key'] = NULL;
$arguments49['reverse'] = false;
$arguments49['iteration'] = NULL;
$array51 = array (
);$arguments49['each'] = $renderingContext->getVariableProvider()->getByPath('restaurants', $array51);
$arguments49['as'] = 'restaurant';

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
    <table  class="tx_hofexpressapp" >
        <tr>
            <th>';
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
$arguments84['key'] = 'tx_hofexpressapp_domain_model_restaurant.name';

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$arguments86['key'] = 'tx_hofexpressapp_domain_model_restaurant.restaurant_type';

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output83 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return '
            <tr>
                <td></td>
                <td></td>
            </tr>
        ';
};
$arguments88 = array();
$arguments88['each'] = NULL;
$arguments88['as'] = NULL;
$arguments88['key'] = NULL;
$arguments88['reverse'] = false;
$arguments88['iteration'] = NULL;
$array90 = array (
);$arguments88['each'] = $renderingContext->getVariableProvider()->getByPath('restaurants', $array90);
$arguments88['as'] = 'restaurant';

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output83 .= '
    </table>
    ';
return $output83;
};
$arguments81 = array();

$output48 .= NULL;

$output48 .= '
';
return $output48;
};
$arguments46 = array();
$arguments46['name'] = NULL;
$arguments46['name'] = 'content';

$output43 .= NULL;

$output43 .= '

';

return $output43;
}


}
#