<?php

class partial_Carousel_General_BackgroundImage_6089881e184a425c12a45e329355fb7b7c9b23a6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return 'carousel-backgroundimage';
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['name'] = NULL;
$arguments7['name'] = 'backgroundImageClasses';
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';
$array17 = array (
);
$output16 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses', $array17);

$output16 .= ' carousel-backgroundimage-parallax';
return $output16;
};
$arguments14 = array();
$arguments14['value'] = NULL;
$arguments14['name'] = NULL;
$arguments14['name'] = 'backgroundImageClasses';
$renderChildrenClosure15 = ($arguments14['value'] !== null) ? function() use ($arguments14) { return $arguments14['value']; } : $renderChildrenClosure15;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.parallax', $array12);

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';
$array26 = array (
);
$output25 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses', $array26);

$output25 .= ' carousel-backgroundimage-fade';
return $output25;
};
$arguments23 = array();
$arguments23['value'] = NULL;
$arguments23['name'] = NULL;
$arguments23['name'] = 'backgroundImageClasses';
$renderChildrenClosure24 = ($arguments23['value'] !== null) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.fade', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = $renderChildrenClosure19;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';
$array35 = array (
);
$output34 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses', $array35);

$output34 .= ' carousel-backgroundimage-';
$array36 = array (
);
$output34 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.filter', $array36);
return $output34;
};
$arguments32 = array();
$arguments32['value'] = NULL;
$arguments32['name'] = NULL;
$arguments32['name'] = 'backgroundImageClasses';
$renderChildrenClosure33 = ($arguments32['value'] !== null) ? function() use ($arguments32) { return $arguments32['value']; } : $renderChildrenClosure33;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.filter', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = $renderChildrenClosure28;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output6 .= '
    <div class="carousel-backgroundimage-container">
        <div id="carousel-backgroundimage-';
$array37 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array37)]);

$output6 .= '-';
$array38 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array38)]);

$output6 .= '" class="';
$array39 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClasses', $array39)]);

$output6 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['value'] = NULL;
$arguments40['name'] = NULL;
$arguments40['name'] = 'styles';
$arguments40['value'] = '';
$renderChildrenClosure41 = ($arguments40['value'] !== null) ? function() use ($arguments40) { return $arguments40['value']; } : $renderChildrenClosure41;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string51 = '{variant.breakpoint as integer}';
$array52 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string51, $array52);
};
$arguments49 = array();
$arguments49['value'] = NULL;
$arguments49['name'] = NULL;
$arguments49['name'] = 'breakpoint';
$renderChildrenClosure50 = ($arguments49['value'] !== null) ? function() use ($arguments49) { return $arguments49['value']; } : $renderChildrenClosure50;
$output48 .= TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string55 = '{variant.width as integer}';
$array56 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string55, $array56);
};
$arguments53 = array();
$arguments53['value'] = NULL;
$arguments53['name'] = NULL;
$arguments53['name'] = 'width';
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$output48 .= TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                                @media (min-width: ';
$array89 = array (
);
$output88 .= $renderingContext->getVariableProvider()->getByPath('breakpoint', $array89);

$output88 .= 'px) { #carousel-backgroundimage-';
$array90 = array (
);
$output88 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array90);

$output88 .= '-';
$array91 = array (
);
$output88 .= $renderingContext->getVariableProvider()->getByPath('item.data.uid', $array91);

$output88 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['src'] = NULL;
$arguments92['treatIdAsReference'] = false;
$arguments92['image'] = NULL;
$arguments92['crop'] = NULL;
$arguments92['cropVariant'] = 'default';
$arguments92['width'] = NULL;
$arguments92['height'] = NULL;
$arguments92['minWidth'] = NULL;
$arguments92['minHeight'] = NULL;
$arguments92['maxWidth'] = NULL;
$arguments92['maxHeight'] = NULL;
$arguments92['absolute'] = false;
$array94 = array (
);$arguments92['image'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array94);
$array95 = array (
);$arguments92['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array95);
$array96 = array (
);$arguments92['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('width', $array96);

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output88 .= '\'); }}
                            ';
return $output88;
};
$arguments86 = array();

$output85 .= '';

$output85 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                                #carousel-backgroundimage-';
$array100 = array (
);
$output99 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array100);

$output99 .= '-';
$array101 = array (
);
$output99 .= $renderingContext->getVariableProvider()->getByPath('item.data.uid', $array101);

$output99 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['src'] = NULL;
$arguments102['treatIdAsReference'] = false;
$arguments102['image'] = NULL;
$arguments102['crop'] = NULL;
$arguments102['cropVariant'] = 'default';
$arguments102['width'] = NULL;
$arguments102['height'] = NULL;
$arguments102['minWidth'] = NULL;
$arguments102['minHeight'] = NULL;
$arguments102['maxWidth'] = NULL;
$arguments102['maxHeight'] = NULL;
$arguments102['absolute'] = false;
$array104 = array (
);$arguments102['image'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array104);
$array105 = array (
);$arguments102['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array105);
$array106 = array (
);$arguments102['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('width', $array106);

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output99 .= '\'); }
                            ';
return $output99;
};
$arguments97 = array();
$arguments97['if'] = NULL;

$output85 .= '';

$output85 .= '
                        ';
return $output85;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('breakpoint', $array83);

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments63['__thenClosure'] = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                                @media (min-width: ';
$array66 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('breakpoint', $array66);

$output65 .= 'px) { #carousel-backgroundimage-';
$array67 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array67);

$output65 .= '-';
$array68 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('item.data.uid', $array68);

$output65 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['src'] = NULL;
$arguments69['treatIdAsReference'] = false;
$arguments69['image'] = NULL;
$arguments69['crop'] = NULL;
$arguments69['cropVariant'] = 'default';
$arguments69['width'] = NULL;
$arguments69['height'] = NULL;
$arguments69['minWidth'] = NULL;
$arguments69['minHeight'] = NULL;
$arguments69['maxWidth'] = NULL;
$arguments69['maxHeight'] = NULL;
$arguments69['absolute'] = false;
$array71 = array (
);$arguments69['image'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array71);
$array72 = array (
);$arguments69['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array72);
$array73 = array (
);$arguments69['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('width', $array73);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output65 .= '\'); }}
                            ';
return $output65;
};
$arguments63['__elseClosures'][] = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                                #carousel-backgroundimage-';
$array75 = array (
);
$output74 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array75);

$output74 .= '-';
$array76 = array (
);
$output74 .= $renderingContext->getVariableProvider()->getByPath('item.data.uid', $array76);

$output74 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['src'] = NULL;
$arguments77['treatIdAsReference'] = false;
$arguments77['image'] = NULL;
$arguments77['crop'] = NULL;
$arguments77['cropVariant'] = 'default';
$arguments77['width'] = NULL;
$arguments77['height'] = NULL;
$arguments77['minWidth'] = NULL;
$arguments77['minHeight'] = NULL;
$arguments77['maxWidth'] = NULL;
$arguments77['maxHeight'] = NULL;
$arguments77['absolute'] = false;
$array79 = array (
);$arguments77['image'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array79);
$array80 = array (
);$arguments77['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array80);
$array81 = array (
);$arguments77['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('width', $array81);

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output74 .= '\'); }
                            ';
return $output74;
};

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
                    ';
return $output62;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('width', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = $renderChildrenClosure58;

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output48 .= '
                ';
return $output48;
};
$arguments46 = array();
$arguments46['value'] = NULL;
$arguments46['name'] = NULL;
$arguments46['name'] = 'variantStyle';
$renderChildrenClosure47 = ($arguments46['value'] !== null) ? function() use ($arguments46) { return $arguments46['value']; } : $renderChildrenClosure47;
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output45 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['value'] = NULL;
$arguments107['name'] = NULL;
$arguments107['name'] = 'styles';
$output109 = '';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array112 = array (
);return $renderingContext->getVariableProvider()->getByPath('variantStyle', $array112);
};
$arguments110 = array();

$output109 .= BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= ' ';
$array113 = array (
);
$output109 .= $renderingContext->getVariableProvider()->getByPath('styles', $array113);
$arguments107['value'] = $output109;
$renderChildrenClosure108 = ($arguments107['value'] !== null) ? function() use ($arguments107) { return $arguments107['value']; } : $renderChildrenClosure108;
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output45 .= '
            ';
return $output45;
};
$arguments42 = array();
$arguments42['each'] = NULL;
$arguments42['as'] = NULL;
$arguments42['key'] = NULL;
$arguments42['reverse'] = false;
$arguments42['iteration'] = NULL;
$array44 = array (
);$arguments42['each'] = $renderingContext->getVariableProvider()->getByPath('variants', $array44);
$arguments42['key'] = 'name';
$arguments42['as'] = 'variant';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output6 .= '
            <style>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$array116 = array (
);return $renderingContext->getVariableProvider()->getByPath('styles', $array116);
};
$arguments114 = array();
$arguments114['value'] = NULL;

$output6 .= isset($arguments114['value']) ? $arguments114['value'] : $renderChildrenClosure115();

$output6 .= '</style>
        </div>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array4);

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


}
#