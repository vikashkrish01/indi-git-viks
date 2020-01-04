<?php

class partial_Navigation_Main_c70cba9552275adc832b2cce9bfdd457ccdcfcbe extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments258 = array();

$output257 .= '';

$output257 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$arguments263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array266);

$expression267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments263['then'] = ' active';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$arguments268['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array271);

$expression272 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments268['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression272(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);
$arguments268['then'] = ' dropdown dropdown-hover';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output262 .= '">
                            <a href="';
$array273 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array273)]);

$output262 .= '" id="nav-item-';
$array274 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array274)]);

$output262 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array278)]);
$array277['1'] = ' == ';
$array279 = array (
);$array277['2'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.page.logout', $array279)]);

$expression280 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['then'] = ' btn btn-warning';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['then'] = NULL;
$arguments281['else'] = NULL;
$arguments281['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array284);

$expression285 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments281['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression285(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array283)
					),
					$renderingContext
				);
$arguments281['then'] = ' dropdown-toggle';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output262 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['then'] = NULL;
$arguments286['else'] = NULL;
$arguments286['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array289);

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments286['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$output291 = '';

$output291 .= ' target="';
$array292 = array (
);
$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array292)]);

$output291 .= '"';
$arguments286['then'] = $output291;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output262 .= ' title="';
$array293 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array293)]);

$output262 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['then'] = NULL;
$arguments294['else'] = NULL;
$arguments294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array297);

$expression298 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression298(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array296)
					),
					$renderingContext
				);
$arguments294['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output262 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['image'] = NULL;
$arguments329['src'] = NULL;
$arguments329['width'] = NULL;
$arguments329['height'] = NULL;
$array331 = array (
);$arguments329['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array331);
$array332 = array (
);$arguments329['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array332);
$array333 = array (
);$arguments329['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array333);

$output328 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output328 .= '
                                            ';
return $output328;
};
$arguments326 = array();

$output325 .= '';

$output325 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['additionalAttributes'] = NULL;
$arguments337['data'] = NULL;
$arguments337['class'] = NULL;
$arguments337['dir'] = NULL;
$arguments337['id'] = NULL;
$arguments337['lang'] = NULL;
$arguments337['style'] = NULL;
$arguments337['title'] = NULL;
$arguments337['accesskey'] = NULL;
$arguments337['tabindex'] = NULL;
$arguments337['onclick'] = NULL;
$arguments337['alt'] = NULL;
$arguments337['ismap'] = NULL;
$arguments337['longdesc'] = NULL;
$arguments337['usemap'] = NULL;
$arguments337['src'] = NULL;
$arguments337['treatIdAsReference'] = NULL;
$arguments337['image'] = NULL;
$arguments337['crop'] = NULL;
$arguments337['cropVariant'] = 'default';
$arguments337['width'] = NULL;
$arguments337['height'] = NULL;
$arguments337['minWidth'] = NULL;
$arguments337['minHeight'] = NULL;
$arguments337['maxWidth'] = NULL;
$arguments337['maxHeight'] = NULL;
$arguments337['absolute'] = false;
$array339 = array (
);$arguments337['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array339);
$array340 = array (
);$arguments337['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array340);
$array341 = array (
);$arguments337['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array341);
$array342 = array (
);$arguments337['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array342);
$array343 = array (
);$arguments337['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array343);

$output336 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output336 .= '
                                            ';
return $output336;
};
$arguments334 = array();
$arguments334['if'] = NULL;

$output325 .= '';

$output325 .= '
                                        ';
return $output325;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array322 = array();
$array323 = array (
);$array322['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array323);
$array322['1'] = ' === svg';

$expression324 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression324(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array322)
					),
					$renderingContext
				);
$arguments306['__thenClosure'] = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['image'] = NULL;
$arguments309['src'] = NULL;
$arguments309['width'] = NULL;
$arguments309['height'] = NULL;
$array311 = array (
);$arguments309['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array311);
$array312 = array (
);$arguments309['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array312);
$array313 = array (
);$arguments309['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array313);

$output308 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
                                            ';
return $output308;
};
$arguments306['__elseClosures'][] = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['additionalAttributes'] = NULL;
$arguments315['data'] = NULL;
$arguments315['class'] = NULL;
$arguments315['dir'] = NULL;
$arguments315['id'] = NULL;
$arguments315['lang'] = NULL;
$arguments315['style'] = NULL;
$arguments315['title'] = NULL;
$arguments315['accesskey'] = NULL;
$arguments315['tabindex'] = NULL;
$arguments315['onclick'] = NULL;
$arguments315['alt'] = NULL;
$arguments315['ismap'] = NULL;
$arguments315['longdesc'] = NULL;
$arguments315['usemap'] = NULL;
$arguments315['src'] = NULL;
$arguments315['treatIdAsReference'] = NULL;
$arguments315['image'] = NULL;
$arguments315['crop'] = NULL;
$arguments315['cropVariant'] = 'default';
$arguments315['width'] = NULL;
$arguments315['height'] = NULL;
$arguments315['minWidth'] = NULL;
$arguments315['minHeight'] = NULL;
$arguments315['maxWidth'] = NULL;
$arguments315['maxHeight'] = NULL;
$arguments315['absolute'] = false;
$array317 = array (
);$arguments315['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array317);
$array318 = array (
);$arguments315['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array318);
$array319 = array (
);$arguments315['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array319);
$array320 = array (
);$arguments315['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array320);
$array321 = array (
);$arguments315['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array321);

$output314 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
                                            ';
return $output314;
};

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
                                    </span>
                                ';
return $output305;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array302);
$array301['1'] = ' && ';
$array303 = array (
);$array301['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array303);

$expression304 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['__thenClosure'] = $renderChildrenClosure300;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output262 .= '
                                <span class="nav-link-text">';
$array344 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array344)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments345 = array();
$arguments345['then'] = NULL;
$arguments345['else'] = NULL;
$arguments345['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array347 = array();
$array348 = array (
);$array347['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array348);

$expression349 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments345['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array347)
					),
					$renderingContext
				);
$arguments345['__thenClosure'] = $renderChildrenClosure346;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output262 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array356 = array (
);
$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array356)]);

$output355 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments433 = array();

$output432 .= '';

$output432 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output437 = '';

$output437 .= '
                                                <li>
                                                    <a href="';
$array438 = array (
);
$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array438)]);

$output437 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['then'] = NULL;
$arguments439['else'] = NULL;
$arguments439['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array441 = array();
$array442 = array (
);$array441['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array442);

$expression443 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments439['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression443(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array441)
					),
					$renderingContext
				);
$arguments439['then'] = ' active';

$output437 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output437 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments444 = array();
$arguments444['then'] = NULL;
$arguments444['else'] = NULL;
$arguments444['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array446 = array();
$array447 = array (
);$array446['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array447);

$expression448 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments444['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression448(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array446)
					),
					$renderingContext
				);
$output449 = '';

$output449 .= ' target="';
$array450 = array (
);
$output449 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array450)]);

$output449 .= '"';
$arguments444['then'] = $output449;

$output437 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output437 .= ' title="';
$array451 = array (
);
$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array451)]);

$output437 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output458 = '';

$output458 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments482 = array();
$arguments482['image'] = NULL;
$arguments482['src'] = NULL;
$arguments482['width'] = NULL;
$arguments482['height'] = NULL;
$array484 = array (
);$arguments482['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array484);
$array485 = array (
);$arguments482['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array485);
$array486 = array (
);$arguments482['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array486);

$output481 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output481 .= '
                                                                    ';
return $output481;
};
$arguments479 = array();

$output478 .= '';

$output478 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['additionalAttributes'] = NULL;
$arguments490['data'] = NULL;
$arguments490['class'] = NULL;
$arguments490['dir'] = NULL;
$arguments490['id'] = NULL;
$arguments490['lang'] = NULL;
$arguments490['style'] = NULL;
$arguments490['title'] = NULL;
$arguments490['accesskey'] = NULL;
$arguments490['tabindex'] = NULL;
$arguments490['onclick'] = NULL;
$arguments490['alt'] = NULL;
$arguments490['ismap'] = NULL;
$arguments490['longdesc'] = NULL;
$arguments490['usemap'] = NULL;
$arguments490['src'] = NULL;
$arguments490['treatIdAsReference'] = NULL;
$arguments490['image'] = NULL;
$arguments490['crop'] = NULL;
$arguments490['cropVariant'] = 'default';
$arguments490['width'] = NULL;
$arguments490['height'] = NULL;
$arguments490['minWidth'] = NULL;
$arguments490['minHeight'] = NULL;
$arguments490['maxWidth'] = NULL;
$arguments490['maxHeight'] = NULL;
$arguments490['absolute'] = false;
$array492 = array (
);$arguments490['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array492);
$array493 = array (
);$arguments490['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array493);
$array494 = array (
);$arguments490['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array494);
$array495 = array (
);$arguments490['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array495);
$array496 = array (
);$arguments490['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array496);

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
                                                                    ';
return $output489;
};
$arguments487 = array();
$arguments487['if'] = NULL;

$output478 .= '';

$output478 .= '
                                                                ';
return $output478;
};
$arguments459 = array();
$arguments459['then'] = NULL;
$arguments459['else'] = NULL;
$arguments459['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array475 = array();
$array476 = array (
);$array475['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array476);
$array475['1'] = ' === svg';

$expression477 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments459['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression477(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array475)
					),
					$renderingContext
				);
$arguments459['__thenClosure'] = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['image'] = NULL;
$arguments462['src'] = NULL;
$arguments462['width'] = NULL;
$arguments462['height'] = NULL;
$array464 = array (
);$arguments462['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array464);
$array465 = array (
);$arguments462['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array465);
$array466 = array (
);$arguments462['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array466);

$output461 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output461 .= '
                                                                    ';
return $output461;
};
$arguments459['__elseClosures'][] = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['additionalAttributes'] = NULL;
$arguments468['data'] = NULL;
$arguments468['class'] = NULL;
$arguments468['dir'] = NULL;
$arguments468['id'] = NULL;
$arguments468['lang'] = NULL;
$arguments468['style'] = NULL;
$arguments468['title'] = NULL;
$arguments468['accesskey'] = NULL;
$arguments468['tabindex'] = NULL;
$arguments468['onclick'] = NULL;
$arguments468['alt'] = NULL;
$arguments468['ismap'] = NULL;
$arguments468['longdesc'] = NULL;
$arguments468['usemap'] = NULL;
$arguments468['src'] = NULL;
$arguments468['treatIdAsReference'] = NULL;
$arguments468['image'] = NULL;
$arguments468['crop'] = NULL;
$arguments468['cropVariant'] = 'default';
$arguments468['width'] = NULL;
$arguments468['height'] = NULL;
$arguments468['minWidth'] = NULL;
$arguments468['minHeight'] = NULL;
$arguments468['maxWidth'] = NULL;
$arguments468['maxHeight'] = NULL;
$arguments468['absolute'] = false;
$array470 = array (
);$arguments468['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array470);
$array471 = array (
);$arguments468['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array471);
$array472 = array (
);$arguments468['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array472);
$array473 = array (
);$arguments468['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array473);
$array474 = array (
);$arguments468['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array474);

$output467 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output467 .= '
                                                                    ';
return $output467;
};

$output458 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output458 .= '
                                                            </span>
                                                        ';
return $output458;
};
$arguments452 = array();
$arguments452['then'] = NULL;
$arguments452['else'] = NULL;
$arguments452['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array454 = array();
$array455 = array (
);$array454['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array455);
$array454['1'] = ' && ';
$array456 = array (
);$array454['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array456);

$expression457 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments452['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression457(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array454)
					),
					$renderingContext
				);
$arguments452['__thenClosure'] = $renderChildrenClosure453;

$output437 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output437 .= '
                                                        <span class="dropdown-text">';
$array497 = array (
);
$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array497)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments498 = array();
$arguments498['then'] = NULL;
$arguments498['else'] = NULL;
$arguments498['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array500 = array();
$array501 = array (
);$array500['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array501);

$expression502 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments498['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression502(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array500)
					),
					$renderingContext
				);
$arguments498['__thenClosure'] = $renderChildrenClosure499;

$output437 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output437 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output437;
};
$arguments435 = array();
$arguments435['if'] = NULL;

$output432 .= '';

$output432 .= '
                                        ';
return $output432;
};
$arguments361 = array();
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$arguments361['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
$array430 = array (
);$array429['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array430);

$expression431 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments361['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression431(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments361['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments361['__elseClosures'][] = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
                                                <li>
                                                    <a href="';
$array364 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array364)]);

$output363 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['then'] = NULL;
$arguments365['else'] = NULL;
$arguments365['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array367 = array();
$array368 = array (
);$array367['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array368);

$expression369 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments365['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression369(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array367)
					),
					$renderingContext
				);
$arguments365['then'] = ' active';

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output363 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$arguments370['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array372 = array();
$array373 = array (
);$array372['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array373);

$expression374 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments370['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);
$output375 = '';

$output375 .= ' target="';
$array376 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array376)]);

$output375 .= '"';
$arguments370['then'] = $output375;

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output363 .= ' title="';
$array377 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array377)]);

$output363 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['image'] = NULL;
$arguments408['src'] = NULL;
$arguments408['width'] = NULL;
$arguments408['height'] = NULL;
$array410 = array (
);$arguments408['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array410);
$array411 = array (
);$arguments408['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array411);
$array412 = array (
);$arguments408['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array412);

$output407 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output407 .= '
                                                                    ';
return $output407;
};
$arguments405 = array();

$output404 .= '';

$output404 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments416 = array();
$arguments416['additionalAttributes'] = NULL;
$arguments416['data'] = NULL;
$arguments416['class'] = NULL;
$arguments416['dir'] = NULL;
$arguments416['id'] = NULL;
$arguments416['lang'] = NULL;
$arguments416['style'] = NULL;
$arguments416['title'] = NULL;
$arguments416['accesskey'] = NULL;
$arguments416['tabindex'] = NULL;
$arguments416['onclick'] = NULL;
$arguments416['alt'] = NULL;
$arguments416['ismap'] = NULL;
$arguments416['longdesc'] = NULL;
$arguments416['usemap'] = NULL;
$arguments416['src'] = NULL;
$arguments416['treatIdAsReference'] = NULL;
$arguments416['image'] = NULL;
$arguments416['crop'] = NULL;
$arguments416['cropVariant'] = 'default';
$arguments416['width'] = NULL;
$arguments416['height'] = NULL;
$arguments416['minWidth'] = NULL;
$arguments416['minHeight'] = NULL;
$arguments416['maxWidth'] = NULL;
$arguments416['maxHeight'] = NULL;
$arguments416['absolute'] = false;
$array418 = array (
);$arguments416['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array418);
$array419 = array (
);$arguments416['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array419);
$array420 = array (
);$arguments416['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array420);
$array421 = array (
);$arguments416['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array421);
$array422 = array (
);$arguments416['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array422);

$output415 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output415 .= '
                                                                    ';
return $output415;
};
$arguments413 = array();
$arguments413['if'] = NULL;

$output404 .= '';

$output404 .= '
                                                                ';
return $output404;
};
$arguments385 = array();
$arguments385['then'] = NULL;
$arguments385['else'] = NULL;
$arguments385['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array401 = array();
$array402 = array (
);$array401['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array402);
$array401['1'] = ' === svg';

$expression403 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments385['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression403(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array401)
					),
					$renderingContext
				);
$arguments385['__thenClosure'] = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['image'] = NULL;
$arguments388['src'] = NULL;
$arguments388['width'] = NULL;
$arguments388['height'] = NULL;
$array390 = array (
);$arguments388['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array390);
$array391 = array (
);$arguments388['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array391);
$array392 = array (
);$arguments388['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array392);

$output387 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output387 .= '
                                                                    ';
return $output387;
};
$arguments385['__elseClosures'][] = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['additionalAttributes'] = NULL;
$arguments394['data'] = NULL;
$arguments394['class'] = NULL;
$arguments394['dir'] = NULL;
$arguments394['id'] = NULL;
$arguments394['lang'] = NULL;
$arguments394['style'] = NULL;
$arguments394['title'] = NULL;
$arguments394['accesskey'] = NULL;
$arguments394['tabindex'] = NULL;
$arguments394['onclick'] = NULL;
$arguments394['alt'] = NULL;
$arguments394['ismap'] = NULL;
$arguments394['longdesc'] = NULL;
$arguments394['usemap'] = NULL;
$arguments394['src'] = NULL;
$arguments394['treatIdAsReference'] = NULL;
$arguments394['image'] = NULL;
$arguments394['crop'] = NULL;
$arguments394['cropVariant'] = 'default';
$arguments394['width'] = NULL;
$arguments394['height'] = NULL;
$arguments394['minWidth'] = NULL;
$arguments394['minHeight'] = NULL;
$arguments394['maxWidth'] = NULL;
$arguments394['maxHeight'] = NULL;
$arguments394['absolute'] = false;
$array396 = array (
);$arguments394['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array396);
$array397 = array (
);$arguments394['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array397);
$array398 = array (
);$arguments394['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array398);
$array399 = array (
);$arguments394['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array399);
$array400 = array (
);$arguments394['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array400);

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output393 .= '
                                                                    ';
return $output393;
};

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output384 .= '
                                                            </span>
                                                        ';
return $output384;
};
$arguments378 = array();
$arguments378['then'] = NULL;
$arguments378['else'] = NULL;
$arguments378['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array380 = array();
$array381 = array (
);$array380['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array381);
$array380['1'] = ' && ';
$array382 = array (
);$array380['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array382);

$expression383 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments378['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression383(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array380)
					),
					$renderingContext
				);
$arguments378['__thenClosure'] = $renderChildrenClosure379;

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output363 .= '
                                                        <span class="dropdown-text">';
$array423 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array423)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments424 = array();
$arguments424['then'] = NULL;
$arguments424['else'] = NULL;
$arguments424['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array426 = array();
$array427 = array (
);$array426['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array427);

$expression428 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments424['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression428(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array426)
					),
					$renderingContext
				);
$arguments424['__thenClosure'] = $renderChildrenClosure425;

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output363 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output363;
};

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output360 .= '
                                    ';
return $output360;
};
$arguments357 = array();
$arguments357['each'] = NULL;
$arguments357['as'] = NULL;
$arguments357['key'] = NULL;
$arguments357['reverse'] = false;
$arguments357['iteration'] = NULL;
$array359 = array (
);$arguments357['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array359);
$arguments357['as'] = 'child';

$output355 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output355 .= '
                                </ul>
                            ';
return $output355;
};
$arguments350 = array();
$arguments350['then'] = NULL;
$arguments350['else'] = NULL;
$arguments350['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array352 = array();
$array353 = array (
);$array352['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array353);

$expression354 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments350['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression354(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array352)
					),
					$renderingContext
				);
$arguments350['__thenClosure'] = $renderChildrenClosure351;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output262 .= '
                        </li>
                    ';
return $output262;
};
$arguments260 = array();
$arguments260['if'] = NULL;

$output257 .= '';

$output257 .= '
                ';
return $output257;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array255);

$expression256 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array254)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array29)]);
$array28['1'] = ' == ';
$array30 = array (
);$array28['2'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.page.logout', $array30)]);

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' btn btn-warning';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array40);

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$output42 = '';

$output42 .= ' target="';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array43)]);

$output42 .= '"';
$arguments37['then'] = $output42;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output13 .= ' title="';
$array44 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array44)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array48);

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['image'] = NULL;
$arguments80['src'] = NULL;
$arguments80['width'] = NULL;
$arguments80['height'] = NULL;
$array82 = array (
);$arguments80['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array82);
$array83 = array (
);$arguments80['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array83);
$array84 = array (
);$arguments80['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array84);

$output79 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                                            ';
return $output79;
};
$arguments77 = array();

$output76 .= '';

$output76 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments88['alt'] = NULL;
$arguments88['ismap'] = NULL;
$arguments88['longdesc'] = NULL;
$arguments88['usemap'] = NULL;
$arguments88['src'] = NULL;
$arguments88['treatIdAsReference'] = NULL;
$arguments88['image'] = NULL;
$arguments88['crop'] = NULL;
$arguments88['cropVariant'] = 'default';
$arguments88['width'] = NULL;
$arguments88['height'] = NULL;
$arguments88['minWidth'] = NULL;
$arguments88['minHeight'] = NULL;
$arguments88['maxWidth'] = NULL;
$arguments88['maxHeight'] = NULL;
$arguments88['absolute'] = false;
$array90 = array (
);$arguments88['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array90);
$array91 = array (
);$arguments88['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array91);
$array92 = array (
);$arguments88['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array92);
$array93 = array (
);$arguments88['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array93);
$array94 = array (
);$arguments88['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array94);

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                                            ';
return $output87;
};
$arguments85 = array();
$arguments85['if'] = NULL;

$output76 .= '';

$output76 .= '
                                        ';
return $output76;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array74);
$array73['1'] = ' === svg';

$expression75 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['image'] = NULL;
$arguments60['src'] = NULL;
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$array62 = array (
);$arguments60['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array62);
$array63 = array (
);$arguments60['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array63);
$array64 = array (
);$arguments60['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array64);

$output59 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                                            ';
return $output59;
};
$arguments57['__elseClosures'][] = function() use ($renderingContext, $self) {
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
);$arguments66['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array68);
$array69 = array (
);$arguments66['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array69);
$array70 = array (
);$arguments66['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array70);
$array71 = array (
);$arguments66['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array71);
$array72 = array (
);$arguments66['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array72);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                                            ';
return $output65;
};

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                                    </span>
                                ';
return $output56;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array53);
$array52['1'] = ' && ';
$array54 = array (
);$array52['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array54);

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array95 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array95)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments96['__thenClosure'] = $renderChildrenClosure97;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array107 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array107)]);

$output106 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments184 = array();

$output183 .= '';

$output183 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                                                <li>
                                                    <a href="';
$array189 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array189)]);

$output188 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array193);

$expression194 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$arguments190['then'] = ' active';

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output188 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array198 = array (
);$array197['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array198);

$expression199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
$output200 = '';

$output200 .= ' target="';
$array201 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array201)]);

$output200 .= '"';
$arguments195['then'] = $output200;

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output188 .= ' title="';
$array202 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array202)]);

$output188 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['image'] = NULL;
$arguments233['src'] = NULL;
$arguments233['width'] = NULL;
$arguments233['height'] = NULL;
$array235 = array (
);$arguments233['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array235);
$array236 = array (
);$arguments233['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array236);
$array237 = array (
);$arguments233['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array237);

$output232 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
                                                                    ';
return $output232;
};
$arguments230 = array();

$output229 .= '';

$output229 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['class'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['title'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['alt'] = NULL;
$arguments241['ismap'] = NULL;
$arguments241['longdesc'] = NULL;
$arguments241['usemap'] = NULL;
$arguments241['src'] = NULL;
$arguments241['treatIdAsReference'] = NULL;
$arguments241['image'] = NULL;
$arguments241['crop'] = NULL;
$arguments241['cropVariant'] = 'default';
$arguments241['width'] = NULL;
$arguments241['height'] = NULL;
$arguments241['minWidth'] = NULL;
$arguments241['minHeight'] = NULL;
$arguments241['maxWidth'] = NULL;
$arguments241['maxHeight'] = NULL;
$arguments241['absolute'] = false;
$array243 = array (
);$arguments241['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array243);
$array244 = array (
);$arguments241['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array244);
$array245 = array (
);$arguments241['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array245);
$array246 = array (
);$arguments241['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array246);
$array247 = array (
);$arguments241['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array247);

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                                                                    ';
return $output240;
};
$arguments238 = array();
$arguments238['if'] = NULL;

$output229 .= '';

$output229 .= '
                                                                ';
return $output229;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array227);
$array226['1'] = ' === svg';

$expression228 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['image'] = NULL;
$arguments213['src'] = NULL;
$arguments213['width'] = NULL;
$arguments213['height'] = NULL;
$array215 = array (
);$arguments213['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array215);
$array216 = array (
);$arguments213['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array216);
$array217 = array (
);$arguments213['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array217);

$output212 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
                                                                    ';
return $output212;
};
$arguments210['__elseClosures'][] = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['additionalAttributes'] = NULL;
$arguments219['data'] = NULL;
$arguments219['class'] = NULL;
$arguments219['dir'] = NULL;
$arguments219['id'] = NULL;
$arguments219['lang'] = NULL;
$arguments219['style'] = NULL;
$arguments219['title'] = NULL;
$arguments219['accesskey'] = NULL;
$arguments219['tabindex'] = NULL;
$arguments219['onclick'] = NULL;
$arguments219['alt'] = NULL;
$arguments219['ismap'] = NULL;
$arguments219['longdesc'] = NULL;
$arguments219['usemap'] = NULL;
$arguments219['src'] = NULL;
$arguments219['treatIdAsReference'] = NULL;
$arguments219['image'] = NULL;
$arguments219['crop'] = NULL;
$arguments219['cropVariant'] = 'default';
$arguments219['width'] = NULL;
$arguments219['height'] = NULL;
$arguments219['minWidth'] = NULL;
$arguments219['minHeight'] = NULL;
$arguments219['maxWidth'] = NULL;
$arguments219['maxHeight'] = NULL;
$arguments219['absolute'] = false;
$array221 = array (
);$arguments219['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array221);
$array222 = array (
);$arguments219['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array222);
$array223 = array (
);$arguments219['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array223);
$array224 = array (
);$arguments219['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array224);
$array225 = array (
);$arguments219['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array225);

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '
                                                                    ';
return $output218;
};

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
                                                            </span>
                                                        ';
return $output209;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array205 = array();
$array206 = array (
);$array205['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array206);
$array205['1'] = ' && ';
$array207 = array (
);$array205['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array207);

$expression208 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)
					),
					$renderingContext
				);
$arguments203['__thenClosure'] = $renderChildrenClosure204;

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output188 .= '
                                                        <span class="dropdown-text">';
$array248 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array248)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array252);

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = $renderChildrenClosure250;

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output188 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output188;
};
$arguments186 = array();
$arguments186['if'] = NULL;

$output183 .= '';

$output183 .= '
                                        ';
return $output183;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array181 = array (
);$array180['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array181);

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$arguments112['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments112['__elseClosures'][] = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                                                <li>
                                                    <a href="';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array115)]);

$output114 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['then'] = ' active';

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output114 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array124);

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$output126 = '';

$output126 .= ' target="';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array127)]);

$output126 .= '"';
$arguments121['then'] = $output126;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output114 .= ' title="';
$array128 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array128)]);

$output114 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['image'] = NULL;
$arguments159['src'] = NULL;
$arguments159['width'] = NULL;
$arguments159['height'] = NULL;
$array161 = array (
);$arguments159['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array161);
$array162 = array (
);$arguments159['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array162);
$array163 = array (
);$arguments159['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array163);

$output158 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                                                                    ';
return $output158;
};
$arguments156 = array();

$output155 .= '';

$output155 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['additionalAttributes'] = NULL;
$arguments167['data'] = NULL;
$arguments167['class'] = NULL;
$arguments167['dir'] = NULL;
$arguments167['id'] = NULL;
$arguments167['lang'] = NULL;
$arguments167['style'] = NULL;
$arguments167['title'] = NULL;
$arguments167['accesskey'] = NULL;
$arguments167['tabindex'] = NULL;
$arguments167['onclick'] = NULL;
$arguments167['alt'] = NULL;
$arguments167['ismap'] = NULL;
$arguments167['longdesc'] = NULL;
$arguments167['usemap'] = NULL;
$arguments167['src'] = NULL;
$arguments167['treatIdAsReference'] = NULL;
$arguments167['image'] = NULL;
$arguments167['crop'] = NULL;
$arguments167['cropVariant'] = 'default';
$arguments167['width'] = NULL;
$arguments167['height'] = NULL;
$arguments167['minWidth'] = NULL;
$arguments167['minHeight'] = NULL;
$arguments167['maxWidth'] = NULL;
$arguments167['maxHeight'] = NULL;
$arguments167['absolute'] = false;
$array169 = array (
);$arguments167['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array169);
$array170 = array (
);$arguments167['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array170);
$array171 = array (
);$arguments167['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array171);
$array172 = array (
);$arguments167['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array172);
$array173 = array (
);$arguments167['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array173);

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
                                                                    ';
return $output166;
};
$arguments164 = array();
$arguments164['if'] = NULL;

$output155 .= '';

$output155 .= '
                                                                ';
return $output155;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array153);
$array152['1'] = ' === svg';

$expression154 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments136['__thenClosure'] = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['image'] = NULL;
$arguments139['src'] = NULL;
$arguments139['width'] = NULL;
$arguments139['height'] = NULL;
$array141 = array (
);$arguments139['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array141);
$array142 = array (
);$arguments139['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array142);
$array143 = array (
);$arguments139['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array143);

$output138 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                                                                    ';
return $output138;
};
$arguments136['__elseClosures'][] = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['class'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['alt'] = NULL;
$arguments145['ismap'] = NULL;
$arguments145['longdesc'] = NULL;
$arguments145['usemap'] = NULL;
$arguments145['src'] = NULL;
$arguments145['treatIdAsReference'] = NULL;
$arguments145['image'] = NULL;
$arguments145['crop'] = NULL;
$arguments145['cropVariant'] = 'default';
$arguments145['width'] = NULL;
$arguments145['height'] = NULL;
$arguments145['minWidth'] = NULL;
$arguments145['minHeight'] = NULL;
$arguments145['maxWidth'] = NULL;
$arguments145['maxHeight'] = NULL;
$arguments145['absolute'] = false;
$array147 = array (
);$arguments145['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array147);
$array148 = array (
);$arguments145['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array148);
$array149 = array (
);$arguments145['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array149);
$array150 = array (
);$arguments145['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array150);
$array151 = array (
);$arguments145['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array151);

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
                                                                    ';
return $output144;
};

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
                                                            </span>
                                                        ';
return $output135;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array132);
$array131['1'] = ' && ';
$array133 = array (
);$array131['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array133);

$expression134 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['__thenClosure'] = $renderChildrenClosure130;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output114 .= '
                                                        <span class="dropdown-text">';
$array174 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array174)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments175 = array();
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$arguments175['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array178);

$expression179 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments175['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$arguments175['__thenClosure'] = $renderChildrenClosure176;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output114 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output114;
};

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
);$arguments108['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array110);
$arguments108['as'] = 'child';

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output106 .= '
                                </ul>
                            ';
return $output106;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = $renderChildrenClosure102;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
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
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

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
$output503 = '';

$output503 .= '

<header id="page-header" class="bp-page-header navbar navbar-mainnavigation navbar-';
$array504 = array (
);
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array504)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['then'] = NULL;
$arguments505['else'] = NULL;
$arguments505['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array507 = array();
$array508 = array (
);$array507['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array508);

$expression509 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments505['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression509(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array507)
					),
					$renderingContext
				);
$arguments505['then'] = ' navbar-has-image';

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['then'] = NULL;
$arguments510['else'] = NULL;
$arguments510['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array512 = array();
$array513 = array (
);$array512['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array513);

$expression514 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments510['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression514(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array512)
					),
					$renderingContext
				);
$arguments510['else'] = ' navbar-top';
$output515 = '';

$output515 .= ' navbar-';
$array516 = array (
);
$output515 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array516)]);

$output515 .= ' navbar-fixed-';
$array517 = array (
);
$output515 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array517)]);
$arguments510['then'] = $output515;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output503 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
$output547 = '';

$output547 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
$output550 = '';

$output550 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
$output555 = '';

$output555 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments556 = array();
$arguments556['src'] = NULL;
$arguments556['treatIdAsReference'] = false;
$arguments556['image'] = NULL;
$arguments556['crop'] = NULL;
$arguments556['cropVariant'] = 'default';
$arguments556['width'] = NULL;
$arguments556['height'] = NULL;
$arguments556['minWidth'] = NULL;
$arguments556['minHeight'] = NULL;
$arguments556['maxWidth'] = NULL;
$arguments556['maxHeight'] = NULL;
$arguments556['absolute'] = false;
$array558 = array (
);$arguments556['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array558);

$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext)]);

$output555 .= '" alt="';
$array559 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array559)]);

$output555 .= '" height="';
$array560 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array560)]);

$output555 .= '" width="';
$array561 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array561)]);

$output555 .= '">
                    <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['src'] = NULL;
$arguments562['treatIdAsReference'] = false;
$arguments562['image'] = NULL;
$arguments562['crop'] = NULL;
$arguments562['cropVariant'] = 'default';
$arguments562['width'] = NULL;
$arguments562['height'] = NULL;
$arguments562['minWidth'] = NULL;
$arguments562['minHeight'] = NULL;
$arguments562['maxWidth'] = NULL;
$arguments562['maxHeight'] = NULL;
$arguments562['absolute'] = false;
$array564 = array (
);$arguments562['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array564);

$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext)]);

$output555 .= '" alt="';
$array565 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array565)]);

$output555 .= '" height="';
$array566 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array566)]);

$output555 .= '" width="';
$array567 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array567)]);

$output555 .= '">
                ';
return $output555;
};
$arguments551 = array();
$arguments551['additionalAttributes'] = NULL;
$arguments551['data'] = NULL;
$arguments551['class'] = NULL;
$arguments551['dir'] = NULL;
$arguments551['id'] = NULL;
$arguments551['lang'] = NULL;
$arguments551['style'] = NULL;
$arguments551['title'] = NULL;
$arguments551['accesskey'] = NULL;
$arguments551['tabindex'] = NULL;
$arguments551['onclick'] = NULL;
$arguments551['target'] = NULL;
$arguments551['rel'] = NULL;
$arguments551['pageUid'] = NULL;
$arguments551['pageType'] = NULL;
$arguments551['noCache'] = NULL;
$arguments551['noCacheHash'] = NULL;
$arguments551['section'] = NULL;
$arguments551['linkAccessRestrictedPages'] = NULL;
$arguments551['additionalParams'] = NULL;
$arguments551['absolute'] = NULL;
$arguments551['addQueryString'] = NULL;
$arguments551['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments551['addQueryStringMethod'] = NULL;
$array553 = array (
);$arguments551['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array553);
$arguments551['class'] = 'navbar-brand navbar-brand-image';
$array554 = array (
);$arguments551['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array554);

$output550 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext);

$output550 .= '
            ';
return $output550;
};
$arguments548 = array();

$output547 .= '';

$output547 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output570 = '';

$output570 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
$array575 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array575)]);
};
$arguments571 = array();
$arguments571['additionalAttributes'] = NULL;
$arguments571['data'] = NULL;
$arguments571['class'] = NULL;
$arguments571['dir'] = NULL;
$arguments571['id'] = NULL;
$arguments571['lang'] = NULL;
$arguments571['style'] = NULL;
$arguments571['title'] = NULL;
$arguments571['accesskey'] = NULL;
$arguments571['tabindex'] = NULL;
$arguments571['onclick'] = NULL;
$arguments571['target'] = NULL;
$arguments571['rel'] = NULL;
$arguments571['pageUid'] = NULL;
$arguments571['pageType'] = NULL;
$arguments571['noCache'] = NULL;
$arguments571['noCacheHash'] = NULL;
$arguments571['section'] = NULL;
$arguments571['linkAccessRestrictedPages'] = NULL;
$arguments571['additionalParams'] = NULL;
$arguments571['absolute'] = NULL;
$arguments571['addQueryString'] = NULL;
$arguments571['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments571['addQueryStringMethod'] = NULL;
$array573 = array (
);$arguments571['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array573);
$arguments571['class'] = 'navbar-brand navbar-brand-text';
$array574 = array (
);$arguments571['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array574);

$output570 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext);

$output570 .= '
            ';
return $output570;
};
$arguments568 = array();
$arguments568['if'] = NULL;

$output547 .= '';

$output547 .= '
        ';
return $output547;
};
$arguments518 = array();
$arguments518['then'] = NULL;
$arguments518['else'] = NULL;
$arguments518['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array544 = array();
$array545 = array (
);$array544['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array545);

$expression546 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments518['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression546(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array544)
					),
					$renderingContext
				);
$arguments518['__thenClosure'] = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
$output525 = '';

$output525 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments526 = array();
$arguments526['src'] = NULL;
$arguments526['treatIdAsReference'] = false;
$arguments526['image'] = NULL;
$arguments526['crop'] = NULL;
$arguments526['cropVariant'] = 'default';
$arguments526['width'] = NULL;
$arguments526['height'] = NULL;
$arguments526['minWidth'] = NULL;
$arguments526['minHeight'] = NULL;
$arguments526['maxWidth'] = NULL;
$arguments526['maxHeight'] = NULL;
$arguments526['absolute'] = false;
$array528 = array (
);$arguments526['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array528);

$output525 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext)]);

$output525 .= '" alt="';
$array529 = array (
);
$output525 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array529)]);

$output525 .= '" height="';
$array530 = array (
);
$output525 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array530)]);

$output525 .= '" width="';
$array531 = array (
);
$output525 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array531)]);

$output525 .= '">
                    <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments532 = array();
$arguments532['src'] = NULL;
$arguments532['treatIdAsReference'] = false;
$arguments532['image'] = NULL;
$arguments532['crop'] = NULL;
$arguments532['cropVariant'] = 'default';
$arguments532['width'] = NULL;
$arguments532['height'] = NULL;
$arguments532['minWidth'] = NULL;
$arguments532['minHeight'] = NULL;
$arguments532['maxWidth'] = NULL;
$arguments532['maxHeight'] = NULL;
$arguments532['absolute'] = false;
$array534 = array (
);$arguments532['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array534);

$output525 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext)]);

$output525 .= '" alt="';
$array535 = array (
);
$output525 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array535)]);

$output525 .= '" height="';
$array536 = array (
);
$output525 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array536)]);

$output525 .= '" width="';
$array537 = array (
);
$output525 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array537)]);

$output525 .= '">
                ';
return $output525;
};
$arguments521 = array();
$arguments521['additionalAttributes'] = NULL;
$arguments521['data'] = NULL;
$arguments521['class'] = NULL;
$arguments521['dir'] = NULL;
$arguments521['id'] = NULL;
$arguments521['lang'] = NULL;
$arguments521['style'] = NULL;
$arguments521['title'] = NULL;
$arguments521['accesskey'] = NULL;
$arguments521['tabindex'] = NULL;
$arguments521['onclick'] = NULL;
$arguments521['target'] = NULL;
$arguments521['rel'] = NULL;
$arguments521['pageUid'] = NULL;
$arguments521['pageType'] = NULL;
$arguments521['noCache'] = NULL;
$arguments521['noCacheHash'] = NULL;
$arguments521['section'] = NULL;
$arguments521['linkAccessRestrictedPages'] = NULL;
$arguments521['additionalParams'] = NULL;
$arguments521['absolute'] = NULL;
$arguments521['addQueryString'] = NULL;
$arguments521['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments521['addQueryStringMethod'] = NULL;
$array523 = array (
);$arguments521['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array523);
$arguments521['class'] = 'navbar-brand navbar-brand-image';
$array524 = array (
);$arguments521['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array524);

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext);

$output520 .= '
            ';
return $output520;
};
$arguments518['__elseClosures'][] = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$array543 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array543)]);
};
$arguments539 = array();
$arguments539['additionalAttributes'] = NULL;
$arguments539['data'] = NULL;
$arguments539['class'] = NULL;
$arguments539['dir'] = NULL;
$arguments539['id'] = NULL;
$arguments539['lang'] = NULL;
$arguments539['style'] = NULL;
$arguments539['title'] = NULL;
$arguments539['accesskey'] = NULL;
$arguments539['tabindex'] = NULL;
$arguments539['onclick'] = NULL;
$arguments539['target'] = NULL;
$arguments539['rel'] = NULL;
$arguments539['pageUid'] = NULL;
$arguments539['pageType'] = NULL;
$arguments539['noCache'] = NULL;
$arguments539['noCacheHash'] = NULL;
$arguments539['section'] = NULL;
$arguments539['linkAccessRestrictedPages'] = NULL;
$arguments539['additionalParams'] = NULL;
$arguments539['absolute'] = NULL;
$arguments539['addQueryString'] = NULL;
$arguments539['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments539['addQueryStringMethod'] = NULL;
$array541 = array (
);$arguments539['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array541);
$arguments539['class'] = 'navbar-brand navbar-brand-text';
$array542 = array (
);$arguments539['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array542);

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output538 .= '
            ';
return $output538;
};

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext);

$output503 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
$output581 = '';

$output581 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments582 = array();
$arguments582['key'] = NULL;
$arguments582['id'] = NULL;
$arguments582['default'] = NULL;
$arguments582['arguments'] = NULL;
$arguments582['extensionName'] = NULL;
$arguments582['languageKey'] = NULL;
$arguments582['alternativeLanguageKeys'] = NULL;
$arguments582['key'] = 'togglenavigation';
$arguments582['extensionName'] = 'bootstrap_package';

$output581 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext)]);

$output581 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments584 = array();
$arguments584['section'] = NULL;
$arguments584['partial'] = NULL;
$arguments584['delegate'] = NULL;
$arguments584['renderable'] = NULL;
$arguments584['arguments'] = array (
);
$arguments584['optional'] = false;
$arguments584['default'] = NULL;
$arguments584['contentAs'] = NULL;
$arguments584['debug'] = true;
$arguments584['partial'] = 'DropIn/Navigation/MainBefore';
$arguments584['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output581 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output581 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments587 = array();
$arguments587['section'] = NULL;
$arguments587['partial'] = NULL;
$arguments587['delegate'] = NULL;
$arguments587['renderable'] = NULL;
$arguments587['arguments'] = array (
);
$arguments587['optional'] = false;
$arguments587['default'] = NULL;
$arguments587['contentAs'] = NULL;
$arguments587['debug'] = true;
$arguments587['section'] = 'MainNavigation';
// Rendering Array
$array589 = array();
$array590 = array (
);$array589['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array590);
$array591 = array (
);$array589['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array591);
$arguments587['arguments'] = $array589;

$output581 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output581 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['section'] = NULL;
$arguments592['partial'] = NULL;
$arguments592['delegate'] = NULL;
$arguments592['renderable'] = NULL;
$arguments592['arguments'] = array (
);
$arguments592['optional'] = false;
$arguments592['default'] = NULL;
$arguments592['contentAs'] = NULL;
$arguments592['debug'] = true;
$arguments592['partial'] = 'DropIn/Navigation/MainAfter';
$arguments592['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output581 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output581 .= '
            </nav>
        ';
return $output581;
};
$arguments576 = array();
$arguments576['then'] = NULL;
$arguments576['else'] = NULL;
$arguments576['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array578 = array();
$array579 = array (
);$array578['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array579);

$expression580 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments576['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression580(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array578)
					),
					$renderingContext
				);
$arguments576['__thenClosure'] = $renderChildrenClosure577;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext);

$output503 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
$output603 = '';

$output603 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
$output607 = '';

$output607 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$output854 = '';

$output854 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure856 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments855 = array();

$output854 .= '';

$output854 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure858 = function() use ($renderingContext, $self) {
$output859 = '';

$output859 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure861 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments860 = array();
$arguments860['then'] = NULL;
$arguments860['else'] = NULL;
$arguments860['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array862 = array();
$array863 = array (
);$array862['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array863);

$expression864 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments860['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression864(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array862)
					),
					$renderingContext
				);
$arguments860['then'] = ' active';

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments860, $renderChildrenClosure861, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure866 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments865 = array();
$arguments865['then'] = NULL;
$arguments865['else'] = NULL;
$arguments865['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array867 = array();
$array868 = array (
);$array867['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array868);

$expression869 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments865['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression869(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array867)
					),
					$renderingContext
				);
$arguments865['then'] = ' dropdown dropdown-hover';

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments865, $renderChildrenClosure866, $renderingContext);

$output859 .= '">
                            <a href="';
$array870 = array (
);
$output859 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array870)]);

$output859 .= '" id="nav-item-';
$array871 = array (
);
$output859 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array871)]);

$output859 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments872 = array();
$arguments872['then'] = NULL;
$arguments872['else'] = NULL;
$arguments872['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array874 = array();
$array875 = array (
);$array874['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array875)]);
$array874['1'] = ' == ';
$array876 = array (
);$array874['2'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.page.logout', $array876)]);

$expression877 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments872['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression877(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array874)
					),
					$renderingContext
				);
$arguments872['then'] = ' btn btn-warning';

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments872, $renderChildrenClosure873, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure879 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments878 = array();
$arguments878['then'] = NULL;
$arguments878['else'] = NULL;
$arguments878['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array880 = array();
$array881 = array (
);$array880['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array881);

$expression882 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments878['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression882(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array880)
					),
					$renderingContext
				);
$arguments878['then'] = ' dropdown-toggle';

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments878, $renderChildrenClosure879, $renderingContext);

$output859 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure884 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments883 = array();
$arguments883['then'] = NULL;
$arguments883['else'] = NULL;
$arguments883['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array885 = array();
$array886 = array (
);$array885['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array886);

$expression887 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments883['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression887(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array885)
					),
					$renderingContext
				);
$output888 = '';

$output888 .= ' target="';
$array889 = array (
);
$output888 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array889)]);

$output888 .= '"';
$arguments883['then'] = $output888;

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments883, $renderChildrenClosure884, $renderingContext);

$output859 .= ' title="';
$array890 = array (
);
$output859 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array890)]);

$output859 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure892 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments891 = array();
$arguments891['then'] = NULL;
$arguments891['else'] = NULL;
$arguments891['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array893 = array();
$array894 = array (
);$array893['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array894);

$expression895 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments891['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression895(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array893)
					),
					$renderingContext
				);
$arguments891['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments891, $renderChildrenClosure892, $renderingContext);

$output859 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure897 = function() use ($renderingContext, $self) {
$output902 = '';

$output902 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure904 = function() use ($renderingContext, $self) {
$output922 = '';

$output922 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure924 = function() use ($renderingContext, $self) {
$output925 = '';

$output925 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments926 = array();
$arguments926['image'] = NULL;
$arguments926['src'] = NULL;
$arguments926['width'] = NULL;
$arguments926['height'] = NULL;
$array928 = array (
);$arguments926['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array928);
$array929 = array (
);$arguments926['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array929);
$array930 = array (
);$arguments926['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array930);

$output925 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments926, $renderChildrenClosure927, $renderingContext);

$output925 .= '
                                            ';
return $output925;
};
$arguments923 = array();

$output922 .= '';

$output922 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure932 = function() use ($renderingContext, $self) {
$output933 = '';

$output933 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments934 = array();
$arguments934['additionalAttributes'] = NULL;
$arguments934['data'] = NULL;
$arguments934['class'] = NULL;
$arguments934['dir'] = NULL;
$arguments934['id'] = NULL;
$arguments934['lang'] = NULL;
$arguments934['style'] = NULL;
$arguments934['title'] = NULL;
$arguments934['accesskey'] = NULL;
$arguments934['tabindex'] = NULL;
$arguments934['onclick'] = NULL;
$arguments934['alt'] = NULL;
$arguments934['ismap'] = NULL;
$arguments934['longdesc'] = NULL;
$arguments934['usemap'] = NULL;
$arguments934['src'] = NULL;
$arguments934['treatIdAsReference'] = NULL;
$arguments934['image'] = NULL;
$arguments934['crop'] = NULL;
$arguments934['cropVariant'] = 'default';
$arguments934['width'] = NULL;
$arguments934['height'] = NULL;
$arguments934['minWidth'] = NULL;
$arguments934['minHeight'] = NULL;
$arguments934['maxWidth'] = NULL;
$arguments934['maxHeight'] = NULL;
$arguments934['absolute'] = false;
$array936 = array (
);$arguments934['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array936);
$array937 = array (
);$arguments934['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array937);
$array938 = array (
);$arguments934['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array938);
$array939 = array (
);$arguments934['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array939);
$array940 = array (
);$arguments934['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array940);

$output933 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext);

$output933 .= '
                                            ';
return $output933;
};
$arguments931 = array();
$arguments931['if'] = NULL;

$output922 .= '';

$output922 .= '
                                        ';
return $output922;
};
$arguments903 = array();
$arguments903['then'] = NULL;
$arguments903['else'] = NULL;
$arguments903['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array919 = array();
$array920 = array (
);$array919['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array920);
$array919['1'] = ' === svg';

$expression921 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments903['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression921(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array919)
					),
					$renderingContext
				);
$arguments903['__thenClosure'] = function() use ($renderingContext, $self) {
$output905 = '';

$output905 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure907 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments906 = array();
$arguments906['image'] = NULL;
$arguments906['src'] = NULL;
$arguments906['width'] = NULL;
$arguments906['height'] = NULL;
$array908 = array (
);$arguments906['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array908);
$array909 = array (
);$arguments906['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array909);
$array910 = array (
);$arguments906['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array910);

$output905 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments906, $renderChildrenClosure907, $renderingContext);

$output905 .= '
                                            ';
return $output905;
};
$arguments903['__elseClosures'][] = function() use ($renderingContext, $self) {
$output911 = '';

$output911 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure913 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments912 = array();
$arguments912['additionalAttributes'] = NULL;
$arguments912['data'] = NULL;
$arguments912['class'] = NULL;
$arguments912['dir'] = NULL;
$arguments912['id'] = NULL;
$arguments912['lang'] = NULL;
$arguments912['style'] = NULL;
$arguments912['title'] = NULL;
$arguments912['accesskey'] = NULL;
$arguments912['tabindex'] = NULL;
$arguments912['onclick'] = NULL;
$arguments912['alt'] = NULL;
$arguments912['ismap'] = NULL;
$arguments912['longdesc'] = NULL;
$arguments912['usemap'] = NULL;
$arguments912['src'] = NULL;
$arguments912['treatIdAsReference'] = NULL;
$arguments912['image'] = NULL;
$arguments912['crop'] = NULL;
$arguments912['cropVariant'] = 'default';
$arguments912['width'] = NULL;
$arguments912['height'] = NULL;
$arguments912['minWidth'] = NULL;
$arguments912['minHeight'] = NULL;
$arguments912['maxWidth'] = NULL;
$arguments912['maxHeight'] = NULL;
$arguments912['absolute'] = false;
$array914 = array (
);$arguments912['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array914);
$array915 = array (
);$arguments912['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array915);
$array916 = array (
);$arguments912['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array916);
$array917 = array (
);$arguments912['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array917);
$array918 = array (
);$arguments912['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array918);

$output911 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments912, $renderChildrenClosure913, $renderingContext);

$output911 .= '
                                            ';
return $output911;
};

$output902 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments903, $renderChildrenClosure904, $renderingContext);

$output902 .= '
                                    </span>
                                ';
return $output902;
};
$arguments896 = array();
$arguments896['then'] = NULL;
$arguments896['else'] = NULL;
$arguments896['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array898 = array();
$array899 = array (
);$array898['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array899);
$array898['1'] = ' && ';
$array900 = array (
);$array898['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array900);

$expression901 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments896['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression901(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array898)
					),
					$renderingContext
				);
$arguments896['__thenClosure'] = $renderChildrenClosure897;

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments896, $renderChildrenClosure897, $renderingContext);

$output859 .= '
                                <span class="nav-link-text">';
$array941 = array (
);
$output859 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array941)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure943 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments942 = array();
$arguments942['then'] = NULL;
$arguments942['else'] = NULL;
$arguments942['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array944 = array();
$array945 = array (
);$array944['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array945);

$expression946 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments942['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression946(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array944)
					),
					$renderingContext
				);
$arguments942['__thenClosure'] = $renderChildrenClosure943;

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments942, $renderChildrenClosure943, $renderingContext);

$output859 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
$output952 = '';

$output952 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array953 = array (
);
$output952 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array953)]);

$output952 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure955 = function() use ($renderingContext, $self) {
$output957 = '';

$output957 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
$output1029 = '';

$output1029 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1031 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments1030 = array();

$output1029 .= '';

$output1029 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1033 = function() use ($renderingContext, $self) {
$output1034 = '';

$output1034 .= '
                                                <li>
                                                    <a href="';
$array1035 = array (
);
$output1034 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array1035)]);

$output1034 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1036 = array();
$arguments1036['then'] = NULL;
$arguments1036['else'] = NULL;
$arguments1036['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1038 = array();
$array1039 = array (
);$array1038['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array1039);

$expression1040 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1036['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1040(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1038)
					),
					$renderingContext
				);
$arguments1036['then'] = ' active';

$output1034 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output1034 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1042 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1041 = array();
$arguments1041['then'] = NULL;
$arguments1041['else'] = NULL;
$arguments1041['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1043 = array();
$array1044 = array (
);$array1043['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array1044);

$expression1045 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1041['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1045(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1043)
					),
					$renderingContext
				);
$output1046 = '';

$output1046 .= ' target="';
$array1047 = array (
);
$output1046 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array1047)]);

$output1046 .= '"';
$arguments1041['then'] = $output1046;

$output1034 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1041, $renderChildrenClosure1042, $renderingContext);

$output1034 .= ' title="';
$array1048 = array (
);
$output1034 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1048)]);

$output1034 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1050 = function() use ($renderingContext, $self) {
$output1055 = '';

$output1055 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1057 = function() use ($renderingContext, $self) {
$output1075 = '';

$output1075 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1077 = function() use ($renderingContext, $self) {
$output1078 = '';

$output1078 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1080 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1079 = array();
$arguments1079['image'] = NULL;
$arguments1079['src'] = NULL;
$arguments1079['width'] = NULL;
$arguments1079['height'] = NULL;
$array1081 = array (
);$arguments1079['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1081);
$array1082 = array (
);$arguments1079['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1082);
$array1083 = array (
);$arguments1079['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1083);

$output1078 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1079, $renderChildrenClosure1080, $renderingContext);

$output1078 .= '
                                                                    ';
return $output1078;
};
$arguments1076 = array();

$output1075 .= '';

$output1075 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1085 = function() use ($renderingContext, $self) {
$output1086 = '';

$output1086 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1088 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1087 = array();
$arguments1087['additionalAttributes'] = NULL;
$arguments1087['data'] = NULL;
$arguments1087['class'] = NULL;
$arguments1087['dir'] = NULL;
$arguments1087['id'] = NULL;
$arguments1087['lang'] = NULL;
$arguments1087['style'] = NULL;
$arguments1087['title'] = NULL;
$arguments1087['accesskey'] = NULL;
$arguments1087['tabindex'] = NULL;
$arguments1087['onclick'] = NULL;
$arguments1087['alt'] = NULL;
$arguments1087['ismap'] = NULL;
$arguments1087['longdesc'] = NULL;
$arguments1087['usemap'] = NULL;
$arguments1087['src'] = NULL;
$arguments1087['treatIdAsReference'] = NULL;
$arguments1087['image'] = NULL;
$arguments1087['crop'] = NULL;
$arguments1087['cropVariant'] = 'default';
$arguments1087['width'] = NULL;
$arguments1087['height'] = NULL;
$arguments1087['minWidth'] = NULL;
$arguments1087['minHeight'] = NULL;
$arguments1087['maxWidth'] = NULL;
$arguments1087['maxHeight'] = NULL;
$arguments1087['absolute'] = false;
$array1089 = array (
);$arguments1087['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1089);
$array1090 = array (
);$arguments1087['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1090);
$array1091 = array (
);$arguments1087['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1091);
$array1092 = array (
);$arguments1087['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1092);
$array1093 = array (
);$arguments1087['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1093);

$output1086 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1087, $renderChildrenClosure1088, $renderingContext);

$output1086 .= '
                                                                    ';
return $output1086;
};
$arguments1084 = array();
$arguments1084['if'] = NULL;

$output1075 .= '';

$output1075 .= '
                                                                ';
return $output1075;
};
$arguments1056 = array();
$arguments1056['then'] = NULL;
$arguments1056['else'] = NULL;
$arguments1056['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1072 = array();
$array1073 = array (
);$array1072['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array1073);
$array1072['1'] = ' === svg';

$expression1074 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments1056['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1074(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1072)
					),
					$renderingContext
				);
$arguments1056['__thenClosure'] = function() use ($renderingContext, $self) {
$output1058 = '';

$output1058 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1060 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1059 = array();
$arguments1059['image'] = NULL;
$arguments1059['src'] = NULL;
$arguments1059['width'] = NULL;
$arguments1059['height'] = NULL;
$array1061 = array (
);$arguments1059['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1061);
$array1062 = array (
);$arguments1059['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1062);
$array1063 = array (
);$arguments1059['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1063);

$output1058 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1059, $renderChildrenClosure1060, $renderingContext);

$output1058 .= '
                                                                    ';
return $output1058;
};
$arguments1056['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1064 = '';

$output1064 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1066 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1065 = array();
$arguments1065['additionalAttributes'] = NULL;
$arguments1065['data'] = NULL;
$arguments1065['class'] = NULL;
$arguments1065['dir'] = NULL;
$arguments1065['id'] = NULL;
$arguments1065['lang'] = NULL;
$arguments1065['style'] = NULL;
$arguments1065['title'] = NULL;
$arguments1065['accesskey'] = NULL;
$arguments1065['tabindex'] = NULL;
$arguments1065['onclick'] = NULL;
$arguments1065['alt'] = NULL;
$arguments1065['ismap'] = NULL;
$arguments1065['longdesc'] = NULL;
$arguments1065['usemap'] = NULL;
$arguments1065['src'] = NULL;
$arguments1065['treatIdAsReference'] = NULL;
$arguments1065['image'] = NULL;
$arguments1065['crop'] = NULL;
$arguments1065['cropVariant'] = 'default';
$arguments1065['width'] = NULL;
$arguments1065['height'] = NULL;
$arguments1065['minWidth'] = NULL;
$arguments1065['minHeight'] = NULL;
$arguments1065['maxWidth'] = NULL;
$arguments1065['maxHeight'] = NULL;
$arguments1065['absolute'] = false;
$array1067 = array (
);$arguments1065['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1067);
$array1068 = array (
);$arguments1065['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1068);
$array1069 = array (
);$arguments1065['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1069);
$array1070 = array (
);$arguments1065['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1070);
$array1071 = array (
);$arguments1065['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1071);

$output1064 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1065, $renderChildrenClosure1066, $renderingContext);

$output1064 .= '
                                                                    ';
return $output1064;
};

$output1055 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1056, $renderChildrenClosure1057, $renderingContext);

$output1055 .= '
                                                            </span>
                                                        ';
return $output1055;
};
$arguments1049 = array();
$arguments1049['then'] = NULL;
$arguments1049['else'] = NULL;
$arguments1049['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1051 = array();
$array1052 = array (
);$array1051['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array1052);
$array1051['1'] = ' && ';
$array1053 = array (
);$array1051['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array1053);

$expression1054 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1049['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1054(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1051)
					),
					$renderingContext
				);
$arguments1049['__thenClosure'] = $renderChildrenClosure1050;

$output1034 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1049, $renderChildrenClosure1050, $renderingContext);

$output1034 .= '
                                                        <span class="dropdown-text">';
$array1094 = array (
);
$output1034 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1094)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1096 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments1095 = array();
$arguments1095['then'] = NULL;
$arguments1095['else'] = NULL;
$arguments1095['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1097 = array();
$array1098 = array (
);$array1097['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array1098);

$expression1099 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1095['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1099(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1097)
					),
					$renderingContext
				);
$arguments1095['__thenClosure'] = $renderChildrenClosure1096;

$output1034 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1095, $renderChildrenClosure1096, $renderingContext);

$output1034 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output1034;
};
$arguments1032 = array();
$arguments1032['if'] = NULL;

$output1029 .= '';

$output1029 .= '
                                        ';
return $output1029;
};
$arguments958 = array();
$arguments958['then'] = NULL;
$arguments958['else'] = NULL;
$arguments958['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1026 = array();
$array1027 = array (
);$array1026['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array1027);

$expression1028 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments958['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1028(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1026)
					),
					$renderingContext
				);
$arguments958['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments958['__elseClosures'][] = function() use ($renderingContext, $self) {
$output960 = '';

$output960 .= '
                                                <li>
                                                    <a href="';
$array961 = array (
);
$output960 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array961)]);

$output960 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure963 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments962 = array();
$arguments962['then'] = NULL;
$arguments962['else'] = NULL;
$arguments962['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array964 = array();
$array965 = array (
);$array964['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array965);

$expression966 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments962['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression966(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array964)
					),
					$renderingContext
				);
$arguments962['then'] = ' active';

$output960 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments962, $renderChildrenClosure963, $renderingContext);

$output960 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure968 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments967 = array();
$arguments967['then'] = NULL;
$arguments967['else'] = NULL;
$arguments967['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array969 = array();
$array970 = array (
);$array969['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array970);

$expression971 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments967['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression971(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array969)
					),
					$renderingContext
				);
$output972 = '';

$output972 .= ' target="';
$array973 = array (
);
$output972 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array973)]);

$output972 .= '"';
$arguments967['then'] = $output972;

$output960 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments967, $renderChildrenClosure968, $renderingContext);

$output960 .= ' title="';
$array974 = array (
);
$output960 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array974)]);

$output960 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure976 = function() use ($renderingContext, $self) {
$output981 = '';

$output981 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure983 = function() use ($renderingContext, $self) {
$output1001 = '';

$output1001 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1003 = function() use ($renderingContext, $self) {
$output1004 = '';

$output1004 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1006 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1005 = array();
$arguments1005['image'] = NULL;
$arguments1005['src'] = NULL;
$arguments1005['width'] = NULL;
$arguments1005['height'] = NULL;
$array1007 = array (
);$arguments1005['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1007);
$array1008 = array (
);$arguments1005['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1008);
$array1009 = array (
);$arguments1005['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1009);

$output1004 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1005, $renderChildrenClosure1006, $renderingContext);

$output1004 .= '
                                                                    ';
return $output1004;
};
$arguments1002 = array();

$output1001 .= '';

$output1001 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
$output1012 = '';

$output1012 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1014 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1013 = array();
$arguments1013['additionalAttributes'] = NULL;
$arguments1013['data'] = NULL;
$arguments1013['class'] = NULL;
$arguments1013['dir'] = NULL;
$arguments1013['id'] = NULL;
$arguments1013['lang'] = NULL;
$arguments1013['style'] = NULL;
$arguments1013['title'] = NULL;
$arguments1013['accesskey'] = NULL;
$arguments1013['tabindex'] = NULL;
$arguments1013['onclick'] = NULL;
$arguments1013['alt'] = NULL;
$arguments1013['ismap'] = NULL;
$arguments1013['longdesc'] = NULL;
$arguments1013['usemap'] = NULL;
$arguments1013['src'] = NULL;
$arguments1013['treatIdAsReference'] = NULL;
$arguments1013['image'] = NULL;
$arguments1013['crop'] = NULL;
$arguments1013['cropVariant'] = 'default';
$arguments1013['width'] = NULL;
$arguments1013['height'] = NULL;
$arguments1013['minWidth'] = NULL;
$arguments1013['minHeight'] = NULL;
$arguments1013['maxWidth'] = NULL;
$arguments1013['maxHeight'] = NULL;
$arguments1013['absolute'] = false;
$array1015 = array (
);$arguments1013['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1015);
$array1016 = array (
);$arguments1013['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1016);
$array1017 = array (
);$arguments1013['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1017);
$array1018 = array (
);$arguments1013['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1018);
$array1019 = array (
);$arguments1013['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1019);

$output1012 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1013, $renderChildrenClosure1014, $renderingContext);

$output1012 .= '
                                                                    ';
return $output1012;
};
$arguments1010 = array();
$arguments1010['if'] = NULL;

$output1001 .= '';

$output1001 .= '
                                                                ';
return $output1001;
};
$arguments982 = array();
$arguments982['then'] = NULL;
$arguments982['else'] = NULL;
$arguments982['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array998 = array();
$array999 = array (
);$array998['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array999);
$array998['1'] = ' === svg';

$expression1000 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments982['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1000(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array998)
					),
					$renderingContext
				);
$arguments982['__thenClosure'] = function() use ($renderingContext, $self) {
$output984 = '';

$output984 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure986 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments985 = array();
$arguments985['image'] = NULL;
$arguments985['src'] = NULL;
$arguments985['width'] = NULL;
$arguments985['height'] = NULL;
$array987 = array (
);$arguments985['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array987);
$array988 = array (
);$arguments985['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array988);
$array989 = array (
);$arguments985['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array989);

$output984 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments985, $renderChildrenClosure986, $renderingContext);

$output984 .= '
                                                                    ';
return $output984;
};
$arguments982['__elseClosures'][] = function() use ($renderingContext, $self) {
$output990 = '';

$output990 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure992 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments991 = array();
$arguments991['additionalAttributes'] = NULL;
$arguments991['data'] = NULL;
$arguments991['class'] = NULL;
$arguments991['dir'] = NULL;
$arguments991['id'] = NULL;
$arguments991['lang'] = NULL;
$arguments991['style'] = NULL;
$arguments991['title'] = NULL;
$arguments991['accesskey'] = NULL;
$arguments991['tabindex'] = NULL;
$arguments991['onclick'] = NULL;
$arguments991['alt'] = NULL;
$arguments991['ismap'] = NULL;
$arguments991['longdesc'] = NULL;
$arguments991['usemap'] = NULL;
$arguments991['src'] = NULL;
$arguments991['treatIdAsReference'] = NULL;
$arguments991['image'] = NULL;
$arguments991['crop'] = NULL;
$arguments991['cropVariant'] = 'default';
$arguments991['width'] = NULL;
$arguments991['height'] = NULL;
$arguments991['minWidth'] = NULL;
$arguments991['minHeight'] = NULL;
$arguments991['maxWidth'] = NULL;
$arguments991['maxHeight'] = NULL;
$arguments991['absolute'] = false;
$array993 = array (
);$arguments991['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array993);
$array994 = array (
);$arguments991['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array994);
$array995 = array (
);$arguments991['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array995);
$array996 = array (
);$arguments991['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array996);
$array997 = array (
);$arguments991['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array997);

$output990 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments991, $renderChildrenClosure992, $renderingContext);

$output990 .= '
                                                                    ';
return $output990;
};

$output981 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments982, $renderChildrenClosure983, $renderingContext);

$output981 .= '
                                                            </span>
                                                        ';
return $output981;
};
$arguments975 = array();
$arguments975['then'] = NULL;
$arguments975['else'] = NULL;
$arguments975['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array977 = array();
$array978 = array (
);$array977['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array978);
$array977['1'] = ' && ';
$array979 = array (
);$array977['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array979);

$expression980 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments975['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression980(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array977)
					),
					$renderingContext
				);
$arguments975['__thenClosure'] = $renderChildrenClosure976;

$output960 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments975, $renderChildrenClosure976, $renderingContext);

$output960 .= '
                                                        <span class="dropdown-text">';
$array1020 = array (
);
$output960 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1020)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1022 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments1021 = array();
$arguments1021['then'] = NULL;
$arguments1021['else'] = NULL;
$arguments1021['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1023 = array();
$array1024 = array (
);$array1023['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array1024);

$expression1025 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1021['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1025(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1023)
					),
					$renderingContext
				);
$arguments1021['__thenClosure'] = $renderChildrenClosure1022;

$output960 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1021, $renderChildrenClosure1022, $renderingContext);

$output960 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output960;
};

$output957 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments958, $renderChildrenClosure959, $renderingContext);

$output957 .= '
                                    ';
return $output957;
};
$arguments954 = array();
$arguments954['each'] = NULL;
$arguments954['as'] = NULL;
$arguments954['key'] = NULL;
$arguments954['reverse'] = false;
$arguments954['iteration'] = NULL;
$array956 = array (
);$arguments954['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array956);
$arguments954['as'] = 'child';

$output952 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments954, $renderChildrenClosure955, $renderingContext);

$output952 .= '
                                </ul>
                            ';
return $output952;
};
$arguments947 = array();
$arguments947['then'] = NULL;
$arguments947['else'] = NULL;
$arguments947['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array949 = array();
$array950 = array (
);$array949['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array950);

$expression951 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments947['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression951(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array949)
					),
					$renderingContext
				);
$arguments947['__thenClosure'] = $renderChildrenClosure948;

$output859 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext);

$output859 .= '
                        </li>
                    ';
return $output859;
};
$arguments857 = array();
$arguments857['if'] = NULL;

$output854 .= '';

$output854 .= '
                ';
return $output854;
};
$arguments608 = array();
$arguments608['then'] = NULL;
$arguments608['else'] = NULL;
$arguments608['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array851 = array();
$array852 = array (
);$array851['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array852);

$expression853 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments608['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression853(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array851)
					),
					$renderingContext
				);
$arguments608['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments608['__elseClosures'][] = function() use ($renderingContext, $self) {
$output610 = '';

$output610 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments611 = array();
$arguments611['then'] = NULL;
$arguments611['else'] = NULL;
$arguments611['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array613 = array();
$array614 = array (
);$array613['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array614);

$expression615 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments611['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression615(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array613)
					),
					$renderingContext
				);
$arguments611['then'] = ' active';

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments616 = array();
$arguments616['then'] = NULL;
$arguments616['else'] = NULL;
$arguments616['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array618 = array();
$array619 = array (
);$array618['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array619);

$expression620 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments616['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression620(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array618)
					),
					$renderingContext
				);
$arguments616['then'] = ' dropdown dropdown-hover';

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments616, $renderChildrenClosure617, $renderingContext);

$output610 .= '">
                            <a href="';
$array621 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array621)]);

$output610 .= '" id="nav-item-';
$array622 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array622)]);

$output610 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments623 = array();
$arguments623['then'] = NULL;
$arguments623['else'] = NULL;
$arguments623['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array625 = array();
$array626 = array (
);$array625['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array626)]);
$array625['1'] = ' == ';
$array627 = array (
);$array625['2'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.page.logout', $array627)]);

$expression628 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments623['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression628(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array625)
					),
					$renderingContext
				);
$arguments623['then'] = ' btn btn-warning';

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments623, $renderChildrenClosure624, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments629 = array();
$arguments629['then'] = NULL;
$arguments629['else'] = NULL;
$arguments629['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array631 = array();
$array632 = array (
);$array631['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array632);

$expression633 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments629['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression633(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array631)
					),
					$renderingContext
				);
$arguments629['then'] = ' dropdown-toggle';

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);

$output610 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments634 = array();
$arguments634['then'] = NULL;
$arguments634['else'] = NULL;
$arguments634['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array636 = array();
$array637 = array (
);$array636['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array637);

$expression638 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments634['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression638(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array636)
					),
					$renderingContext
				);
$output639 = '';

$output639 .= ' target="';
$array640 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array640)]);

$output639 .= '"';
$arguments634['then'] = $output639;

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext);

$output610 .= ' title="';
$array641 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array641)]);

$output610 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments642 = array();
$arguments642['then'] = NULL;
$arguments642['else'] = NULL;
$arguments642['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array644 = array();
$array645 = array (
);$array644['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array645);

$expression646 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments642['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression646(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array644)
					),
					$renderingContext
				);
$arguments642['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);

$output610 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
$output653 = '';

$output653 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output673 = '';

$output673 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
$output676 = '';

$output676 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments677 = array();
$arguments677['image'] = NULL;
$arguments677['src'] = NULL;
$arguments677['width'] = NULL;
$arguments677['height'] = NULL;
$array679 = array (
);$arguments677['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array679);
$array680 = array (
);$arguments677['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array680);
$array681 = array (
);$arguments677['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array681);

$output676 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext);

$output676 .= '
                                            ';
return $output676;
};
$arguments674 = array();

$output673 .= '';

$output673 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$output684 = '';

$output684 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments685 = array();
$arguments685['additionalAttributes'] = NULL;
$arguments685['data'] = NULL;
$arguments685['class'] = NULL;
$arguments685['dir'] = NULL;
$arguments685['id'] = NULL;
$arguments685['lang'] = NULL;
$arguments685['style'] = NULL;
$arguments685['title'] = NULL;
$arguments685['accesskey'] = NULL;
$arguments685['tabindex'] = NULL;
$arguments685['onclick'] = NULL;
$arguments685['alt'] = NULL;
$arguments685['ismap'] = NULL;
$arguments685['longdesc'] = NULL;
$arguments685['usemap'] = NULL;
$arguments685['src'] = NULL;
$arguments685['treatIdAsReference'] = NULL;
$arguments685['image'] = NULL;
$arguments685['crop'] = NULL;
$arguments685['cropVariant'] = 'default';
$arguments685['width'] = NULL;
$arguments685['height'] = NULL;
$arguments685['minWidth'] = NULL;
$arguments685['minHeight'] = NULL;
$arguments685['maxWidth'] = NULL;
$arguments685['maxHeight'] = NULL;
$arguments685['absolute'] = false;
$array687 = array (
);$arguments685['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array687);
$array688 = array (
);$arguments685['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array688);
$array689 = array (
);$arguments685['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array689);
$array690 = array (
);$arguments685['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array690);
$array691 = array (
);$arguments685['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array691);

$output684 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);

$output684 .= '
                                            ';
return $output684;
};
$arguments682 = array();
$arguments682['if'] = NULL;

$output673 .= '';

$output673 .= '
                                        ';
return $output673;
};
$arguments654 = array();
$arguments654['then'] = NULL;
$arguments654['else'] = NULL;
$arguments654['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array670 = array();
$array671 = array (
);$array670['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array671);
$array670['1'] = ' === svg';

$expression672 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments654['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression672(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array670)
					),
					$renderingContext
				);
$arguments654['__thenClosure'] = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['image'] = NULL;
$arguments657['src'] = NULL;
$arguments657['width'] = NULL;
$arguments657['height'] = NULL;
$array659 = array (
);$arguments657['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array659);
$array660 = array (
);$arguments657['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array660);
$array661 = array (
);$arguments657['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array661);

$output656 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);

$output656 .= '
                                            ';
return $output656;
};
$arguments654['__elseClosures'][] = function() use ($renderingContext, $self) {
$output662 = '';

$output662 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments663 = array();
$arguments663['additionalAttributes'] = NULL;
$arguments663['data'] = NULL;
$arguments663['class'] = NULL;
$arguments663['dir'] = NULL;
$arguments663['id'] = NULL;
$arguments663['lang'] = NULL;
$arguments663['style'] = NULL;
$arguments663['title'] = NULL;
$arguments663['accesskey'] = NULL;
$arguments663['tabindex'] = NULL;
$arguments663['onclick'] = NULL;
$arguments663['alt'] = NULL;
$arguments663['ismap'] = NULL;
$arguments663['longdesc'] = NULL;
$arguments663['usemap'] = NULL;
$arguments663['src'] = NULL;
$arguments663['treatIdAsReference'] = NULL;
$arguments663['image'] = NULL;
$arguments663['crop'] = NULL;
$arguments663['cropVariant'] = 'default';
$arguments663['width'] = NULL;
$arguments663['height'] = NULL;
$arguments663['minWidth'] = NULL;
$arguments663['minHeight'] = NULL;
$arguments663['maxWidth'] = NULL;
$arguments663['maxHeight'] = NULL;
$arguments663['absolute'] = false;
$array665 = array (
);$arguments663['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array665);
$array666 = array (
);$arguments663['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array666);
$array667 = array (
);$arguments663['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array667);
$array668 = array (
);$arguments663['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array668);
$array669 = array (
);$arguments663['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array669);

$output662 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments663, $renderChildrenClosure664, $renderingContext);

$output662 .= '
                                            ';
return $output662;
};

$output653 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output653 .= '
                                    </span>
                                ';
return $output653;
};
$arguments647 = array();
$arguments647['then'] = NULL;
$arguments647['else'] = NULL;
$arguments647['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array649 = array();
$array650 = array (
);$array649['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array650);
$array649['1'] = ' && ';
$array651 = array (
);$array649['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array651);

$expression652 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments647['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression652(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array649)
					),
					$renderingContext
				);
$arguments647['__thenClosure'] = $renderChildrenClosure648;

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext);

$output610 .= '
                                <span class="nav-link-text">';
$array692 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array692)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments693 = array();
$arguments693['then'] = NULL;
$arguments693['else'] = NULL;
$arguments693['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array695 = array();
$array696 = array (
);$array695['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array696);

$expression697 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments693['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression697(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array695)
					),
					$renderingContext
				);
$arguments693['__thenClosure'] = $renderChildrenClosure694;

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext);

$output610 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
$output703 = '';

$output703 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array704 = array (
);
$output703 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array704)]);

$output703 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
$output708 = '';

$output708 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure710 = function() use ($renderingContext, $self) {
$output780 = '';

$output780 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure782 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments781 = array();

$output780 .= '';

$output780 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure784 = function() use ($renderingContext, $self) {
$output785 = '';

$output785 .= '
                                                <li>
                                                    <a href="';
$array786 = array (
);
$output785 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array786)]);

$output785 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments787 = array();
$arguments787['then'] = NULL;
$arguments787['else'] = NULL;
$arguments787['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array789 = array();
$array790 = array (
);$array789['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array790);

$expression791 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments787['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression791(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array789)
					),
					$renderingContext
				);
$arguments787['then'] = ' active';

$output785 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);

$output785 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments792 = array();
$arguments792['then'] = NULL;
$arguments792['else'] = NULL;
$arguments792['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array794 = array();
$array795 = array (
);$array794['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array795);

$expression796 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments792['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression796(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array794)
					),
					$renderingContext
				);
$output797 = '';

$output797 .= ' target="';
$array798 = array (
);
$output797 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array798)]);

$output797 .= '"';
$arguments792['then'] = $output797;

$output785 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);

$output785 .= ' title="';
$array799 = array (
);
$output785 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array799)]);

$output785 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure801 = function() use ($renderingContext, $self) {
$output806 = '';

$output806 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure808 = function() use ($renderingContext, $self) {
$output826 = '';

$output826 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure828 = function() use ($renderingContext, $self) {
$output829 = '';

$output829 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure831 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments830 = array();
$arguments830['image'] = NULL;
$arguments830['src'] = NULL;
$arguments830['width'] = NULL;
$arguments830['height'] = NULL;
$array832 = array (
);$arguments830['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array832);
$array833 = array (
);$arguments830['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array833);
$array834 = array (
);$arguments830['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array834);

$output829 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments830, $renderChildrenClosure831, $renderingContext);

$output829 .= '
                                                                    ';
return $output829;
};
$arguments827 = array();

$output826 .= '';

$output826 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
$output837 = '';

$output837 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure839 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments838 = array();
$arguments838['additionalAttributes'] = NULL;
$arguments838['data'] = NULL;
$arguments838['class'] = NULL;
$arguments838['dir'] = NULL;
$arguments838['id'] = NULL;
$arguments838['lang'] = NULL;
$arguments838['style'] = NULL;
$arguments838['title'] = NULL;
$arguments838['accesskey'] = NULL;
$arguments838['tabindex'] = NULL;
$arguments838['onclick'] = NULL;
$arguments838['alt'] = NULL;
$arguments838['ismap'] = NULL;
$arguments838['longdesc'] = NULL;
$arguments838['usemap'] = NULL;
$arguments838['src'] = NULL;
$arguments838['treatIdAsReference'] = NULL;
$arguments838['image'] = NULL;
$arguments838['crop'] = NULL;
$arguments838['cropVariant'] = 'default';
$arguments838['width'] = NULL;
$arguments838['height'] = NULL;
$arguments838['minWidth'] = NULL;
$arguments838['minHeight'] = NULL;
$arguments838['maxWidth'] = NULL;
$arguments838['maxHeight'] = NULL;
$arguments838['absolute'] = false;
$array840 = array (
);$arguments838['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array840);
$array841 = array (
);$arguments838['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array841);
$array842 = array (
);$arguments838['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array842);
$array843 = array (
);$arguments838['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array843);
$array844 = array (
);$arguments838['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array844);

$output837 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments838, $renderChildrenClosure839, $renderingContext);

$output837 .= '
                                                                    ';
return $output837;
};
$arguments835 = array();
$arguments835['if'] = NULL;

$output826 .= '';

$output826 .= '
                                                                ';
return $output826;
};
$arguments807 = array();
$arguments807['then'] = NULL;
$arguments807['else'] = NULL;
$arguments807['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array823 = array();
$array824 = array (
);$array823['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array824);
$array823['1'] = ' === svg';

$expression825 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments807['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression825(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array823)
					),
					$renderingContext
				);
$arguments807['__thenClosure'] = function() use ($renderingContext, $self) {
$output809 = '';

$output809 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments810 = array();
$arguments810['image'] = NULL;
$arguments810['src'] = NULL;
$arguments810['width'] = NULL;
$arguments810['height'] = NULL;
$array812 = array (
);$arguments810['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array812);
$array813 = array (
);$arguments810['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array813);
$array814 = array (
);$arguments810['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array814);

$output809 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments810, $renderChildrenClosure811, $renderingContext);

$output809 .= '
                                                                    ';
return $output809;
};
$arguments807['__elseClosures'][] = function() use ($renderingContext, $self) {
$output815 = '';

$output815 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure817 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments816 = array();
$arguments816['additionalAttributes'] = NULL;
$arguments816['data'] = NULL;
$arguments816['class'] = NULL;
$arguments816['dir'] = NULL;
$arguments816['id'] = NULL;
$arguments816['lang'] = NULL;
$arguments816['style'] = NULL;
$arguments816['title'] = NULL;
$arguments816['accesskey'] = NULL;
$arguments816['tabindex'] = NULL;
$arguments816['onclick'] = NULL;
$arguments816['alt'] = NULL;
$arguments816['ismap'] = NULL;
$arguments816['longdesc'] = NULL;
$arguments816['usemap'] = NULL;
$arguments816['src'] = NULL;
$arguments816['treatIdAsReference'] = NULL;
$arguments816['image'] = NULL;
$arguments816['crop'] = NULL;
$arguments816['cropVariant'] = 'default';
$arguments816['width'] = NULL;
$arguments816['height'] = NULL;
$arguments816['minWidth'] = NULL;
$arguments816['minHeight'] = NULL;
$arguments816['maxWidth'] = NULL;
$arguments816['maxHeight'] = NULL;
$arguments816['absolute'] = false;
$array818 = array (
);$arguments816['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array818);
$array819 = array (
);$arguments816['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array819);
$array820 = array (
);$arguments816['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array820);
$array821 = array (
);$arguments816['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array821);
$array822 = array (
);$arguments816['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array822);

$output815 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments816, $renderChildrenClosure817, $renderingContext);

$output815 .= '
                                                                    ';
return $output815;
};

$output806 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments807, $renderChildrenClosure808, $renderingContext);

$output806 .= '
                                                            </span>
                                                        ';
return $output806;
};
$arguments800 = array();
$arguments800['then'] = NULL;
$arguments800['else'] = NULL;
$arguments800['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array802 = array();
$array803 = array (
);$array802['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array803);
$array802['1'] = ' && ';
$array804 = array (
);$array802['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array804);

$expression805 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments800['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression805(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array802)
					),
					$renderingContext
				);
$arguments800['__thenClosure'] = $renderChildrenClosure801;

$output785 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments800, $renderChildrenClosure801, $renderingContext);

$output785 .= '
                                                        <span class="dropdown-text">';
$array845 = array (
);
$output785 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array845)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure847 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments846 = array();
$arguments846['then'] = NULL;
$arguments846['else'] = NULL;
$arguments846['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array848 = array();
$array849 = array (
);$array848['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array849);

$expression850 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments846['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression850(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array848)
					),
					$renderingContext
				);
$arguments846['__thenClosure'] = $renderChildrenClosure847;

$output785 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments846, $renderChildrenClosure847, $renderingContext);

$output785 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output785;
};
$arguments783 = array();
$arguments783['if'] = NULL;

$output780 .= '';

$output780 .= '
                                        ';
return $output780;
};
$arguments709 = array();
$arguments709['then'] = NULL;
$arguments709['else'] = NULL;
$arguments709['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array777 = array();
$array778 = array (
);$array777['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array778);

$expression779 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments709['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression779(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array777)
					),
					$renderingContext
				);
$arguments709['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments709['__elseClosures'][] = function() use ($renderingContext, $self) {
$output711 = '';

$output711 .= '
                                                <li>
                                                    <a href="';
$array712 = array (
);
$output711 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array712)]);

$output711 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments713 = array();
$arguments713['then'] = NULL;
$arguments713['else'] = NULL;
$arguments713['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array715 = array();
$array716 = array (
);$array715['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array716);

$expression717 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments713['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression717(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array715)
					),
					$renderingContext
				);
$arguments713['then'] = ' active';

$output711 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output711 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments718 = array();
$arguments718['then'] = NULL;
$arguments718['else'] = NULL;
$arguments718['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array720 = array();
$array721 = array (
);$array720['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array721);

$expression722 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments718['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression722(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array720)
					),
					$renderingContext
				);
$output723 = '';

$output723 .= ' target="';
$array724 = array (
);
$output723 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array724)]);

$output723 .= '"';
$arguments718['then'] = $output723;

$output711 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext);

$output711 .= ' title="';
$array725 = array (
);
$output711 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array725)]);

$output711 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
$output732 = '';

$output732 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
$output752 = '';

$output752 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
$output755 = '';

$output755 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure757 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments756 = array();
$arguments756['image'] = NULL;
$arguments756['src'] = NULL;
$arguments756['width'] = NULL;
$arguments756['height'] = NULL;
$array758 = array (
);$arguments756['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array758);
$array759 = array (
);$arguments756['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array759);
$array760 = array (
);$arguments756['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array760);

$output755 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments756, $renderChildrenClosure757, $renderingContext);

$output755 .= '
                                                                    ';
return $output755;
};
$arguments753 = array();

$output752 .= '';

$output752 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure762 = function() use ($renderingContext, $self) {
$output763 = '';

$output763 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure765 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments764 = array();
$arguments764['additionalAttributes'] = NULL;
$arguments764['data'] = NULL;
$arguments764['class'] = NULL;
$arguments764['dir'] = NULL;
$arguments764['id'] = NULL;
$arguments764['lang'] = NULL;
$arguments764['style'] = NULL;
$arguments764['title'] = NULL;
$arguments764['accesskey'] = NULL;
$arguments764['tabindex'] = NULL;
$arguments764['onclick'] = NULL;
$arguments764['alt'] = NULL;
$arguments764['ismap'] = NULL;
$arguments764['longdesc'] = NULL;
$arguments764['usemap'] = NULL;
$arguments764['src'] = NULL;
$arguments764['treatIdAsReference'] = NULL;
$arguments764['image'] = NULL;
$arguments764['crop'] = NULL;
$arguments764['cropVariant'] = 'default';
$arguments764['width'] = NULL;
$arguments764['height'] = NULL;
$arguments764['minWidth'] = NULL;
$arguments764['minHeight'] = NULL;
$arguments764['maxWidth'] = NULL;
$arguments764['maxHeight'] = NULL;
$arguments764['absolute'] = false;
$array766 = array (
);$arguments764['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array766);
$array767 = array (
);$arguments764['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array767);
$array768 = array (
);$arguments764['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array768);
$array769 = array (
);$arguments764['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array769);
$array770 = array (
);$arguments764['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array770);

$output763 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments764, $renderChildrenClosure765, $renderingContext);

$output763 .= '
                                                                    ';
return $output763;
};
$arguments761 = array();
$arguments761['if'] = NULL;

$output752 .= '';

$output752 .= '
                                                                ';
return $output752;
};
$arguments733 = array();
$arguments733['then'] = NULL;
$arguments733['else'] = NULL;
$arguments733['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array749 = array();
$array750 = array (
);$array749['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array750);
$array749['1'] = ' === svg';

$expression751 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments733['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression751(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array749)
					),
					$renderingContext
				);
$arguments733['__thenClosure'] = function() use ($renderingContext, $self) {
$output735 = '';

$output735 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure737 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments736 = array();
$arguments736['image'] = NULL;
$arguments736['src'] = NULL;
$arguments736['width'] = NULL;
$arguments736['height'] = NULL;
$array738 = array (
);$arguments736['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array738);
$array739 = array (
);$arguments736['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array739);
$array740 = array (
);$arguments736['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array740);

$output735 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments736, $renderChildrenClosure737, $renderingContext);

$output735 .= '
                                                                    ';
return $output735;
};
$arguments733['__elseClosures'][] = function() use ($renderingContext, $self) {
$output741 = '';

$output741 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure743 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments742 = array();
$arguments742['additionalAttributes'] = NULL;
$arguments742['data'] = NULL;
$arguments742['class'] = NULL;
$arguments742['dir'] = NULL;
$arguments742['id'] = NULL;
$arguments742['lang'] = NULL;
$arguments742['style'] = NULL;
$arguments742['title'] = NULL;
$arguments742['accesskey'] = NULL;
$arguments742['tabindex'] = NULL;
$arguments742['onclick'] = NULL;
$arguments742['alt'] = NULL;
$arguments742['ismap'] = NULL;
$arguments742['longdesc'] = NULL;
$arguments742['usemap'] = NULL;
$arguments742['src'] = NULL;
$arguments742['treatIdAsReference'] = NULL;
$arguments742['image'] = NULL;
$arguments742['crop'] = NULL;
$arguments742['cropVariant'] = 'default';
$arguments742['width'] = NULL;
$arguments742['height'] = NULL;
$arguments742['minWidth'] = NULL;
$arguments742['minHeight'] = NULL;
$arguments742['maxWidth'] = NULL;
$arguments742['maxHeight'] = NULL;
$arguments742['absolute'] = false;
$array744 = array (
);$arguments742['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array744);
$array745 = array (
);$arguments742['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array745);
$array746 = array (
);$arguments742['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array746);
$array747 = array (
);$arguments742['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array747);
$array748 = array (
);$arguments742['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array748);

$output741 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments742, $renderChildrenClosure743, $renderingContext);

$output741 .= '
                                                                    ';
return $output741;
};

$output732 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext);

$output732 .= '
                                                            </span>
                                                        ';
return $output732;
};
$arguments726 = array();
$arguments726['then'] = NULL;
$arguments726['else'] = NULL;
$arguments726['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array728 = array();
$array729 = array (
);$array728['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array729);
$array728['1'] = ' && ';
$array730 = array (
);$array728['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array730);

$expression731 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments726['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression731(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array728)
					),
					$renderingContext
				);
$arguments726['__thenClosure'] = $renderChildrenClosure727;

$output711 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);

$output711 .= '
                                                        <span class="dropdown-text">';
$array771 = array (
);
$output711 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array771)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure773 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments772 = array();
$arguments772['then'] = NULL;
$arguments772['else'] = NULL;
$arguments772['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array774 = array();
$array775 = array (
);$array774['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array775);

$expression776 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments772['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression776(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array774)
					),
					$renderingContext
				);
$arguments772['__thenClosure'] = $renderChildrenClosure773;

$output711 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments772, $renderChildrenClosure773, $renderingContext);

$output711 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output711;
};

$output708 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext);

$output708 .= '
                                    ';
return $output708;
};
$arguments705 = array();
$arguments705['each'] = NULL;
$arguments705['as'] = NULL;
$arguments705['key'] = NULL;
$arguments705['reverse'] = false;
$arguments705['iteration'] = NULL;
$array707 = array (
);$arguments705['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array707);
$arguments705['as'] = 'child';

$output703 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments705, $renderChildrenClosure706, $renderingContext);

$output703 .= '
                                </ul>
                            ';
return $output703;
};
$arguments698 = array();
$arguments698['then'] = NULL;
$arguments698['else'] = NULL;
$arguments698['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array700 = array();
$array701 = array (
);$array700['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array701);

$expression702 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments698['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression702(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array700)
					),
					$renderingContext
				);
$arguments698['__thenClosure'] = $renderChildrenClosure699;

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments698, $renderChildrenClosure699, $renderingContext);

$output610 .= '
                        </li>
                    ';
return $output610;
};

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext);

$output607 .= '
            ';
return $output607;
};
$arguments604 = array();
$arguments604['each'] = NULL;
$arguments604['as'] = NULL;
$arguments604['key'] = NULL;
$arguments604['reverse'] = false;
$arguments604['iteration'] = NULL;
$array606 = array (
);$arguments604['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array606);
$arguments604['as'] = 'item';

$output603 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext);

$output603 .= '
        </ul>
    ';
return $output603;
};
$arguments598 = array();
$arguments598['then'] = NULL;
$arguments598['else'] = NULL;
$arguments598['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array600 = array();
$array601 = array (
);$array600['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array601);

$expression602 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments598['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression602(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array600)
					),
					$renderingContext
				);
$arguments598['__thenClosure'] = $renderChildrenClosure599;

$output597 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext);

$output597 .= '
';
return $output597;
};
$arguments595 = array();
$arguments595['name'] = NULL;
$arguments595['name'] = 'MainNavigation';

$output503 .= NULL;

$output503 .= '

';

return $output503;
}


}
#