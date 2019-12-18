<?php

class Standard_action_index_9bfd6139a375c585fb15896df44ace2d0d070529 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
#
# Table structure for table \'';
$array8 = array (
);
$output7 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array8);

$output7 .= '\'
#
CREATE TABLE ';
$array9 = array (
);
$output7 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array9);

$output7 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
	';
$array16 = array (
);
$output15 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array16);

$output15 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,';
return $output15;
};
$arguments10 = array();
$arguments10['each'] = NULL;
$arguments10['as'] = NULL;
$arguments10['key'] = NULL;
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['domainObject'] = NULL;
$array14 = array (
);$arguments12['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array14);
$arguments10['each'] = EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
$arguments10['as'] = 'relation';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output7 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
	';
$array21 = array (
);
$output20 .= $renderingContext->getVariableProvider()->getByPath('property.sqlDefinition', $array21);
return $output20;
};
$arguments17 = array();
$arguments17['each'] = NULL;
$arguments17['as'] = NULL;
$arguments17['key'] = NULL;
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$array19 = array (
);$arguments17['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array19);
$arguments17['as'] = 'property';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output7 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MappingViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return '
	tx_extbase_type varchar(255) DEFAULT \'\' NOT NULL,
';
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['domainObject'] = NULL;
$arguments22['renderCondition'] = NULL;
$arguments22['renderCondition'] = 'needsTypeField';
$array24 = array (
);$arguments22['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array24);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output7 .= EBT\ExtensionBuilder\ViewHelpers\MappingViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output7 .= '

);
';
return $output7;
};
$arguments4 = array();
$arguments4['each'] = NULL;
$arguments4['as'] = NULL;
$arguments4['key'] = NULL;
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$array6 = array (
);$arguments4['each'] = $renderingContext->getVariableProvider()->getByPath('extension.domainObjects', $array6);
$arguments4['as'] = 'domainObject';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();

$output0 .= EBT\ExtensionBuilder\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\GroupedForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
#
# Table structure for table \'';
$array60 = array (
);
$output59 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array60);

$output59 .= '\'
#
CREATE TABLE ';
$array61 = array (
);
$output59 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array61);

$output59 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
	';
$array66 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array66);

$output65 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,
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
);$arguments62['each'] = $renderingContext->getVariableProvider()->getByPath('relationsWithSameForeignTable', $array64);
$arguments62['as'] = 'relation';

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output59 .= '
);
        ';
return $output59;
};
$arguments57 = array();
$arguments57['if'] = NULL;
return '';
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('tableName', $array55);
$array54['1'] = ' == \'sys_file_reference\'';

$expression56 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_file_reference');};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments44['__elseClosures'][] = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
#
# Table structure for table \'';
$array47 = array (
);
$output46 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array47);

$output46 .= '\'
#
CREATE TABLE ';
$array48 = array (
);
$output46 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array48);

$output46 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
	';
$array53 = array (
);
$output52 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array53);

$output52 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,
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
);$arguments49['each'] = $renderingContext->getVariableProvider()->getByPath('relationsWithSameForeignTable', $array51);
$arguments49['as'] = 'relation';

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output46 .= '
);
        ';
return $output46;
};
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('relation.renderType', $array42);
$array41['1'] = ' == \'inline\'';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'inline');};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = $renderChildrenClosure40;

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
      ';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('tableName', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
   ';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['groupBy'] = NULL;
$arguments29['groupKey'] = 'groupKey';
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.zeroToManyRelationProperties', $array31);
$arguments29['as'] = 'relationsWithSameForeignTable';
$arguments29['groupBy'] = 'foreignDatabaseTableName';
$arguments29['groupKey'] = 'tableName';

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\GroupedForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
#
# Table structure for table \'';
$array73 = array (
);
$output72 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array73);

$output72 .= '\'
#
CREATE TABLE ';
$array74 = array (
);
$output72 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array74);

$output72 .= ' (
	categories int(11) unsigned DEFAULT \'0\' NOT NULL,
);
   ';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.categorizable', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output28 .= '

   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
#
# Table structure for table \'';
$array85 = array (
);
$output84 .= $renderingContext->getVariableProvider()->getByPath('relation.relationTableName', $array85);

$output84 .= '\'
#
CREATE TABLE ';
$array86 = array (
);
$output84 .= $renderingContext->getVariableProvider()->getByPath('relation.relationTableName', $array86);

$output84 .= ' (
	uid_local int(11) unsigned DEFAULT \'0\' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT \'0\' NOT NULL,
	sorting int(11) unsigned DEFAULT \'0\' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT \'0\' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       ';
return $output84;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('relation.useMMTable', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
    ';
return $output78;
};
$arguments75 = array();
$arguments75['each'] = NULL;
$arguments75['as'] = NULL;
$arguments75['key'] = NULL;
$arguments75['reverse'] = false;
$arguments75['iteration'] = NULL;
$array77 = array (
);$arguments75['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.anyToManyRelationProperties', $array77);
$arguments75['as'] = 'relation';

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output28 .= '
';
return $output28;
};
$arguments25 = array();
$arguments25['each'] = NULL;
$arguments25['as'] = NULL;
$arguments25['key'] = NULL;
$arguments25['reverse'] = false;
$arguments25['iteration'] = NULL;
$array27 = array (
);$arguments25['each'] = $renderingContext->getVariableProvider()->getByPath('extension.domainObjects', $array27);
$arguments25['as'] = 'domainObject';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#