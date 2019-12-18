<?php

class Standard_action_index_f5994309df1214ecdfa44f43fc058661bad46aed extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'k' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
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
config.tx_extbase {
  persistence {
    classes {
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
      ';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parentClass', $array11)]);

$output10 .= ' {
        subclasses {
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output15 = '';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.recordType', $array16)]);

$output15 .= ' = ';
$array17 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.qualifiedClassName', $array17)]);

$output15 .= '
          ';
return $output15;
};
$arguments12 = array();
$arguments12['each'] = NULL;
$arguments12['as'] = NULL;
$arguments12['key'] = NULL;
$arguments12['reverse'] = false;
$arguments12['iteration'] = NULL;
$array14 = array (
);$arguments12['each'] = $renderingContext->getVariableProvider()->getByPath('subClasses', $array14);
$arguments12['as'] = 'domainObject';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output10 .= '
        }
      }';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('extension.classHierarchy', $array9);
$arguments7['as'] = 'subClasses';
$arguments7['key'] = 'parentClass';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
      ';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.qualifiedClassName', $array22)]);

$output21 .= ' {
        mapping {
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= 'tableName = ';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array29)]);

$output28 .= '
          recordType = ';
$array30 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.recordType', $array30)]);
return $output28;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.mapToTable', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments23['__thenClosure'] = $renderChildrenClosure24;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= 'columns ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
            ';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.mappingStatement', $array41)]);
return $output40;
};
$arguments37 = array();
$arguments37['each'] = NULL;
$arguments37['as'] = NULL;
$arguments37['key'] = NULL;
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$array39 = array (
);$arguments37['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.propertiesWithMappingStatements', $array39);
$arguments37['as'] = 'property';

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
          }';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.propertiesWithMappingStatements', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output21 .= '
        }
      }
';
return $output21;
};
$arguments18 = array();
$arguments18['each'] = NULL;
$arguments18['as'] = NULL;
$arguments18['key'] = NULL;
$arguments18['reverse'] = false;
$arguments18['iteration'] = NULL;
$array20 = array (
);$arguments18['each'] = $renderingContext->getVariableProvider()->getByPath('extension.domainObjectsThatNeedMappingStatements', $array20);
$arguments18['as'] = 'domainObject';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output6 .= '
    }
  }
}';
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('extension.domainObjectsThatNeedMappingStatements', $array4);

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