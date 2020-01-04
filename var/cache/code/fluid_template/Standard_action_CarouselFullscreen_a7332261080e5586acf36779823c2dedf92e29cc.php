<?php

class Standard_action_CarouselFullscreen_a7332261080e5586acf36779823c2dedf92e29cc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <div id="carousel-';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array7)]);

$output6 .= '" class="carousel carousel-fullscreen carousel-';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition', $array8)]);

$output6 .= ' slide" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array12);

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$output14 = '';

$output14 .= 'data-interval="';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array15)]);

$output14 .= '" ';
$arguments9['then'] = $output14;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= 'data-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['then'] = 'true';
$arguments16['else'] = 'false';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output6 .= '" data-ride="carousel">
            <div class="carousel-inner">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= 'background-color: ';
$array33 = array (
);
$output32 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array33);

$output32 .= ';';
return $output32;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = $renderChildrenClosure28;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['name'] = NULL;
$arguments25['name'] = 'itemStyleColor';
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '
                    <div class="item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['then'] = ' active';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output24 .= ' carousel-item carousel-item-type carousel-item-type-';
$array39 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array39)]);

$output24 .= '" data-itemno="';
$array40 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index', $array40)]);

$output24 .= '" style="';
$array41 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyleColor', $array41)]);

$output24 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'Carousel/General/BackgroundImage';
$arguments42['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output24 .= '
                        <div class="carousel-content">
                            ';
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
$output47 = '';

$output47 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array50);
};
$arguments48 = array();

$output47 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);
$arguments45['partial'] = $output47;
$arguments45['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output24 .= '
                        </div>
                    </div>
                ';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array23);
$arguments21['as'] = 'item';
$arguments21['iteration'] = 'iteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output6 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['partial'] = 'Carousel/Control/Indicator';
$arguments52['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['section'] = NULL;
$arguments55['partial'] = NULL;
$arguments55['delegate'] = NULL;
$arguments55['renderable'] = NULL;
$arguments55['arguments'] = array (
);
$arguments55['optional'] = false;
$arguments55['default'] = NULL;
$arguments55['contentAs'] = NULL;
$arguments55['debug'] = true;
$arguments55['partial'] = 'Carousel/Control/Control';
$arguments55['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output6 .= '
        </div>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array4);

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
$output58 = '';

$output58 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['name'] = 'Default';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output58 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
        <div id="carousel-';
$array70 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array70)]);

$output69 .= '" class="carousel carousel-fullscreen carousel-';
$array71 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition', $array71)]);

$output69 .= ' slide" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array75);

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$output77 = '';

$output77 .= 'data-interval="';
$array78 = array (
);
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array78)]);

$output77 .= '" ';
$arguments72['then'] = $output77;

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output69 .= 'data-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['then'] = 'true';
$arguments79['else'] = 'false';

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output69 .= '" data-ride="carousel">
            <div class="carousel-inner">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= 'background-color: ';
$array96 = array (
);
$output95 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array96);

$output95 .= ';';
return $output95;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);
};
$arguments88 = array();
$arguments88['value'] = NULL;
$arguments88['name'] = NULL;
$arguments88['name'] = 'itemStyleColor';
$renderChildrenClosure89 = ($arguments88['value'] !== null) ? function() use ($arguments88) { return $arguments88['value']; } : $renderChildrenClosure89;
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output87 .= '
                    <div class="item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['then'] = ' active';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output87 .= ' carousel-item carousel-item-type carousel-item-type-';
$array102 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array102)]);

$output87 .= '" data-itemno="';
$array103 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index', $array103)]);

$output87 .= '" style="';
$array104 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyleColor', $array104)]);

$output87 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['section'] = NULL;
$arguments105['partial'] = NULL;
$arguments105['delegate'] = NULL;
$arguments105['renderable'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['optional'] = false;
$arguments105['default'] = NULL;
$arguments105['contentAs'] = NULL;
$arguments105['debug'] = true;
$arguments105['partial'] = 'Carousel/General/BackgroundImage';
$arguments105['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output87 .= '
                        <div class="carousel-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['section'] = NULL;
$arguments108['partial'] = NULL;
$arguments108['delegate'] = NULL;
$arguments108['renderable'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['optional'] = false;
$arguments108['default'] = NULL;
$arguments108['contentAs'] = NULL;
$arguments108['debug'] = true;
$output110 = '';

$output110 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$array113 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array113);
};
$arguments111 = array();

$output110 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);
$arguments108['partial'] = $output110;
$arguments108['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output87 .= '
                        </div>
                    </div>
                ';
return $output87;
};
$arguments84 = array();
$arguments84['each'] = NULL;
$arguments84['as'] = NULL;
$arguments84['key'] = NULL;
$arguments84['reverse'] = false;
$arguments84['iteration'] = NULL;
$array86 = array (
);$arguments84['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array86);
$arguments84['as'] = 'item';
$arguments84['iteration'] = 'iteration';

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output69 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['section'] = NULL;
$arguments115['partial'] = NULL;
$arguments115['delegate'] = NULL;
$arguments115['renderable'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['optional'] = false;
$arguments115['default'] = NULL;
$arguments115['contentAs'] = NULL;
$arguments115['debug'] = true;
$arguments115['partial'] = 'Carousel/Control/Indicator';
$arguments115['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output69 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['section'] = NULL;
$arguments118['partial'] = NULL;
$arguments118['delegate'] = NULL;
$arguments118['renderable'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['optional'] = false;
$arguments118['default'] = NULL;
$arguments118['contentAs'] = NULL;
$arguments118['debug'] = true;
$arguments118['partial'] = 'Carousel/Control/Control';
$arguments118['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output69 .= '
        </div>
    ';
return $output69;
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array67);

$expression68 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['__thenClosure'] = $renderChildrenClosure65;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '

';
return $output63;
};
$arguments61 = array();
$arguments61['name'] = NULL;
$arguments61['name'] = 'Main';

$output58 .= NULL;

$output58 .= '

';

return $output58;
}


}
#