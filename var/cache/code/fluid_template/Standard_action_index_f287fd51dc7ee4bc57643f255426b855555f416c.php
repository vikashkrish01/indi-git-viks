<?php

class Standard_action_index_f287fd51dc7ee4bc57643f255426b855555f416c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'adm' => 
  array (
    0 => 'TYPO3\\CMS\\Adminpanel\\ViewHelpers',
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
$output373 = '';

$output373 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output559 = '';

$output559 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$output566 = '';

$output566 .= '
                    <h2 class="typo3-adminPanel-headline">';
$array567 = array (
);
$output566 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('component', $array567)]);

$output566 .= '</h2>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output571 = '';

$output571 .= '
                        <h3 class="typo3-adminPanel-headline">';
$array572 = array (
);
$output571 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logLevel', $array572)]);

$output571 .= '</h3>
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                    <tr>
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments573 = array();
$arguments573['key'] = NULL;
$arguments573['id'] = NULL;
$arguments573['default'] = NULL;
$arguments573['arguments'] = NULL;
$arguments573['extensionName'] = NULL;
$arguments573['languageKey'] = NULL;
$arguments573['alternativeLanguageKeys'] = NULL;
$arguments573['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output571 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext)]);

$output571 .= '
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$output578 = '';

$output578 .= '
                                        <tr>
                                            <td>
                                                ';
$array579 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array579)]);

$output578 .= '
                                            </td>
                                        </tr>
                                    ';
return $output578;
};
$arguments575 = array();
$arguments575['each'] = NULL;
$arguments575['as'] = NULL;
$arguments575['key'] = NULL;
$arguments575['reverse'] = false;
$arguments575['iteration'] = NULL;
$array577 = array (
);$arguments575['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array577);
$arguments575['as'] = 'entry';

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext);

$output571 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output571;
};
$arguments568 = array();
$arguments568['each'] = NULL;
$arguments568['as'] = NULL;
$arguments568['key'] = NULL;
$arguments568['reverse'] = false;
$arguments568['iteration'] = NULL;
$array570 = array (
);$arguments568['each'] = $renderingContext->getVariableProvider()->getByPath('entriesByLogLevel', $array570);
$arguments568['as'] = 'entries';
$arguments568['key'] = 'logLevel';

$output566 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output566 .= '
                ';
return $output566;
};
$arguments563 = array();
$arguments563['each'] = NULL;
$arguments563['as'] = NULL;
$arguments563['key'] = NULL;
$arguments563['reverse'] = false;
$arguments563['iteration'] = NULL;
$array565 = array (
);$arguments563['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array565);
$arguments563['as'] = 'entriesByLogLevel';
$arguments563['key'] = 'component';

$output562 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);

$output562 .= '
            ';
return $output562;
};
$arguments560 = array();

$output559 .= '';

$output559 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$output582 = '';

$output582 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
$output662 = '';

$output662 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
$output665 = '';

$output665 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
$output669 = '';

$output669 .= '
                            <h2 class="typo3-adminPanel-headline">';
$array670 = array (
);
$output669 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array670)]);

$output669 .= '</h2>
                            <div class="typo3-adminPanel-table-overflow">
                                <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                    <thead>
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
$output682 = '';

$output682 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
$output685 = '';

$output685 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments686 = array();
$arguments686['key'] = NULL;
$arguments686['id'] = NULL;
$arguments686['default'] = NULL;
$arguments686['arguments'] = NULL;
$arguments686['extensionName'] = NULL;
$arguments686['languageKey'] = NULL;
$arguments686['alternativeLanguageKeys'] = NULL;
$arguments686['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output685 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext)]);

$output685 .= '
                                                </th>
                                            ';
return $output685;
};
$arguments683 = array();

$output682 .= '';

$output682 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
$output690 = '';

$output690 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments691 = array();
$arguments691['key'] = NULL;
$arguments691['id'] = NULL;
$arguments691['default'] = NULL;
$arguments691['arguments'] = NULL;
$arguments691['extensionName'] = NULL;
$arguments691['languageKey'] = NULL;
$arguments691['alternativeLanguageKeys'] = NULL;
$arguments691['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output690 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext)]);

$output690 .= '
                                                </th>
                                            ';
return $output690;
};
$arguments688 = array();
$arguments688['if'] = NULL;

$output682 .= '';

$output682 .= '
                                        ';
return $output682;
};
$arguments671 = array();
$arguments671['then'] = NULL;
$arguments671['else'] = NULL;
$arguments671['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array679 = array();
$array680 = array (
);$array679['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array680);

$expression681 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments671['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression681(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array679)
					),
					$renderingContext
				);
$arguments671['__thenClosure'] = function() use ($renderingContext, $self) {
$output673 = '';

$output673 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments674 = array();
$arguments674['key'] = NULL;
$arguments674['id'] = NULL;
$arguments674['default'] = NULL;
$arguments674['arguments'] = NULL;
$arguments674['extensionName'] = NULL;
$arguments674['languageKey'] = NULL;
$arguments674['alternativeLanguageKeys'] = NULL;
$arguments674['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output673 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext)]);

$output673 .= '
                                                </th>
                                            ';
return $output673;
};
$arguments671['__elseClosures'][] = function() use ($renderingContext, $self) {
$output676 = '';

$output676 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments677 = array();
$arguments677['key'] = NULL;
$arguments677['id'] = NULL;
$arguments677['default'] = NULL;
$arguments677['arguments'] = NULL;
$arguments677['extensionName'] = NULL;
$arguments677['languageKey'] = NULL;
$arguments677['alternativeLanguageKeys'] = NULL;
$arguments677['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output676 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext)]);

$output676 .= '
                                                </th>
                                            ';
return $output676;
};

$output669 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);

$output669 .= '
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments693 = array();
$arguments693['key'] = NULL;
$arguments693['id'] = NULL;
$arguments693['default'] = NULL;
$arguments693['arguments'] = NULL;
$arguments693['extensionName'] = NULL;
$arguments693['languageKey'] = NULL;
$arguments693['alternativeLanguageKeys'] = NULL;
$arguments693['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output669 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext)]);

$output669 .= '
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
$output698 = '';

$output698 .= '
                                        <tr>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure700 = function() use ($renderingContext, $self) {
$output710 = '';

$output710 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
$output713 = '';

$output713 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure715 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments714 = array();
$arguments714['level'] = NULL;
$array716 = array (
);$arguments714['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array716);

$output713 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments714, $renderChildrenClosure715, $renderingContext)]);

$output713 .= '
                                                    </td>
                                                ';
return $output713;
};
$arguments711 = array();

$output710 .= '';

$output710 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
$output719 = '';

$output719 .= '
                                                    <td>
                                                        ';
$array720 = array (
);
$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array720)]);

$output719 .= '
                                                    </td>
                                                ';
return $output719;
};
$arguments717 = array();
$arguments717['if'] = NULL;

$output710 .= '';

$output710 .= '
                                            ';
return $output710;
};
$arguments699 = array();
$arguments699['then'] = NULL;
$arguments699['else'] = NULL;
$arguments699['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array707 = array();
$array708 = array (
);$array707['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array708);

$expression709 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments699['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression709(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array707)
					),
					$renderingContext
				);
$arguments699['__thenClosure'] = function() use ($renderingContext, $self) {
$output701 = '';

$output701 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments702 = array();
$arguments702['level'] = NULL;
$array704 = array (
);$arguments702['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array704);

$output701 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext)]);

$output701 .= '
                                                    </td>
                                                ';
return $output701;
};
$arguments699['__elseClosures'][] = function() use ($renderingContext, $self) {
$output705 = '';

$output705 .= '
                                                    <td>
                                                        ';
$array706 = array (
);
$output705 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array706)]);

$output705 .= '
                                                    </td>
                                                ';
return $output705;
};

$output698 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments699, $renderChildrenClosure700, $renderingContext);

$output698 .= '
                                            <td>
                                                ';
$array721 = array (
);
$output698 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array721)]);

$output698 .= '
                                            </td>
                                        </tr>
                                    ';
return $output698;
};
$arguments695 = array();
$arguments695['each'] = NULL;
$arguments695['as'] = NULL;
$arguments695['key'] = NULL;
$arguments695['reverse'] = false;
$arguments695['iteration'] = NULL;
$array697 = array (
);$arguments695['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array697);
$arguments695['as'] = 'entry';

$output669 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output669 .= '
                                    </tbody>
                                </table>
                            </div>
                        ';
return $output669;
};
$arguments666 = array();
$arguments666['each'] = NULL;
$arguments666['as'] = NULL;
$arguments666['key'] = NULL;
$arguments666['reverse'] = false;
$arguments666['iteration'] = NULL;
$array668 = array (
);$arguments666['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array668);
$arguments666['as'] = 'entries';
$arguments666['key'] = 'headline';

$output665 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments666, $renderChildrenClosure667, $renderingContext);

$output665 .= '
                    ';
return $output665;
};
$arguments663 = array();

$output662 .= '';

$output662 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
$output724 = '';

$output724 .= '
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                <tr>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure726 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments725 = array();
$arguments725['key'] = NULL;
$arguments725['id'] = NULL;
$arguments725['default'] = NULL;
$arguments725['arguments'] = NULL;
$arguments725['extensionName'] = NULL;
$arguments725['languageKey'] = NULL;
$arguments725['alternativeLanguageKeys'] = NULL;
$arguments725['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output724 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments725, $renderChildrenClosure726, $renderingContext)]);

$output724 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments727 = array();
$arguments727['key'] = NULL;
$arguments727['id'] = NULL;
$arguments727['default'] = NULL;
$arguments727['arguments'] = NULL;
$arguments727['extensionName'] = NULL;
$arguments727['languageKey'] = NULL;
$arguments727['alternativeLanguageKeys'] = NULL;
$arguments727['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output724 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext)]);

$output724 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure730 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments729 = array();
$arguments729['key'] = NULL;
$arguments729['id'] = NULL;
$arguments729['default'] = NULL;
$arguments729['arguments'] = NULL;
$arguments729['extensionName'] = NULL;
$arguments729['languageKey'] = NULL;
$arguments729['alternativeLanguageKeys'] = NULL;
$arguments729['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output724 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments729, $renderChildrenClosure730, $renderingContext)]);

$output724 .= '
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
$output734 = '';

$output734 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments735 = array();
$arguments735['level'] = NULL;
$array737 = array (
);$arguments735['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array737);

$output734 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext)]);

$output734 .= '
                                        </td>
                                        <td>
                                            ';
$array738 = array (
);
$output734 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array738)]);

$output734 .= '
                                        </td>
                                        <td>
                                            ';
$array739 = array (
);
$output734 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array739)]);

$output734 .= '
                                        </td>
                                    </tr>
                                ';
return $output734;
};
$arguments731 = array();
$arguments731['each'] = NULL;
$arguments731['as'] = NULL;
$arguments731['key'] = NULL;
$arguments731['reverse'] = false;
$arguments731['iteration'] = NULL;
$array733 = array (
);$arguments731['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array733);
$arguments731['as'] = 'entry';

$output724 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments731, $renderChildrenClosure732, $renderingContext);

$output724 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output724;
};
$arguments722 = array();
$arguments722['if'] = NULL;

$output662 .= '';

$output662 .= '
                ';
return $output662;
};
$arguments583 = array();
$arguments583['then'] = NULL;
$arguments583['else'] = NULL;
$arguments583['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array658 = array();
$array659 = array (
);$array658['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array659);
$array658['1'] = ' || ';
$array660 = array (
);$array658['2'] = $renderingContext->getVariableProvider()->getByPath('groupByLevel', $array660);

$expression661 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments583['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression661(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array658)
					),
					$renderingContext
				);
$arguments583['__thenClosure'] = function() use ($renderingContext, $self) {
$output585 = '';

$output585 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
                            <h2 class="typo3-adminPanel-headline">';
$array590 = array (
);
$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array590)]);

$output589 .= '</h2>
                            <div class="typo3-adminPanel-table-overflow">
                                <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                    <thead>
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
$output602 = '';

$output602 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments606 = array();
$arguments606['key'] = NULL;
$arguments606['id'] = NULL;
$arguments606['default'] = NULL;
$arguments606['arguments'] = NULL;
$arguments606['extensionName'] = NULL;
$arguments606['languageKey'] = NULL;
$arguments606['alternativeLanguageKeys'] = NULL;
$arguments606['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext)]);

$output605 .= '
                                                </th>
                                            ';
return $output605;
};
$arguments603 = array();

$output602 .= '';

$output602 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$output610 = '';

$output610 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments611 = array();
$arguments611['key'] = NULL;
$arguments611['id'] = NULL;
$arguments611['default'] = NULL;
$arguments611['arguments'] = NULL;
$arguments611['extensionName'] = NULL;
$arguments611['languageKey'] = NULL;
$arguments611['alternativeLanguageKeys'] = NULL;
$arguments611['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext)]);

$output610 .= '
                                                </th>
                                            ';
return $output610;
};
$arguments608 = array();
$arguments608['if'] = NULL;

$output602 .= '';

$output602 .= '
                                        ';
return $output602;
};
$arguments591 = array();
$arguments591['then'] = NULL;
$arguments591['else'] = NULL;
$arguments591['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array599 = array();
$array600 = array (
);$array599['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array600);

$expression601 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments591['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression601(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array599)
					),
					$renderingContext
				);
$arguments591['__thenClosure'] = function() use ($renderingContext, $self) {
$output593 = '';

$output593 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments594 = array();
$arguments594['key'] = NULL;
$arguments594['id'] = NULL;
$arguments594['default'] = NULL;
$arguments594['arguments'] = NULL;
$arguments594['extensionName'] = NULL;
$arguments594['languageKey'] = NULL;
$arguments594['alternativeLanguageKeys'] = NULL;
$arguments594['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext)]);

$output593 .= '
                                                </th>
                                            ';
return $output593;
};
$arguments591['__elseClosures'][] = function() use ($renderingContext, $self) {
$output596 = '';

$output596 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments597 = array();
$arguments597['key'] = NULL;
$arguments597['id'] = NULL;
$arguments597['default'] = NULL;
$arguments597['arguments'] = NULL;
$arguments597['extensionName'] = NULL;
$arguments597['languageKey'] = NULL;
$arguments597['alternativeLanguageKeys'] = NULL;
$arguments597['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output596 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext)]);

$output596 .= '
                                                </th>
                                            ';
return $output596;
};

$output589 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments591, $renderChildrenClosure592, $renderingContext);

$output589 .= '
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments613 = array();
$arguments613['key'] = NULL;
$arguments613['id'] = NULL;
$arguments613['default'] = NULL;
$arguments613['arguments'] = NULL;
$arguments613['extensionName'] = NULL;
$arguments613['languageKey'] = NULL;
$arguments613['alternativeLanguageKeys'] = NULL;
$arguments613['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments613, $renderChildrenClosure614, $renderingContext)]);

$output589 .= '
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
$output618 = '';

$output618 .= '
                                        <tr>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure620 = function() use ($renderingContext, $self) {
$output630 = '';

$output630 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
$output633 = '';

$output633 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments634 = array();
$arguments634['level'] = NULL;
$array636 = array (
);$arguments634['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array636);

$output633 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext)]);

$output633 .= '
                                                    </td>
                                                ';
return $output633;
};
$arguments631 = array();

$output630 .= '';

$output630 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
$output639 = '';

$output639 .= '
                                                    <td>
                                                        ';
$array640 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array640)]);

$output639 .= '
                                                    </td>
                                                ';
return $output639;
};
$arguments637 = array();
$arguments637['if'] = NULL;

$output630 .= '';

$output630 .= '
                                            ';
return $output630;
};
$arguments619 = array();
$arguments619['then'] = NULL;
$arguments619['else'] = NULL;
$arguments619['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array627 = array();
$array628 = array (
);$array627['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array628);

$expression629 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments619['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression629(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array627)
					),
					$renderingContext
				);
$arguments619['__thenClosure'] = function() use ($renderingContext, $self) {
$output621 = '';

$output621 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments622 = array();
$arguments622['level'] = NULL;
$array624 = array (
);$arguments622['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array624);

$output621 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext)]);

$output621 .= '
                                                    </td>
                                                ';
return $output621;
};
$arguments619['__elseClosures'][] = function() use ($renderingContext, $self) {
$output625 = '';

$output625 .= '
                                                    <td>
                                                        ';
$array626 = array (
);
$output625 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array626)]);

$output625 .= '
                                                    </td>
                                                ';
return $output625;
};

$output618 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments619, $renderChildrenClosure620, $renderingContext);

$output618 .= '
                                            <td>
                                                ';
$array641 = array (
);
$output618 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array641)]);

$output618 .= '
                                            </td>
                                        </tr>
                                    ';
return $output618;
};
$arguments615 = array();
$arguments615['each'] = NULL;
$arguments615['as'] = NULL;
$arguments615['key'] = NULL;
$arguments615['reverse'] = false;
$arguments615['iteration'] = NULL;
$array617 = array (
);$arguments615['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array617);
$arguments615['as'] = 'entry';

$output589 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);

$output589 .= '
                                    </tbody>
                                </table>
                            </div>
                        ';
return $output589;
};
$arguments586 = array();
$arguments586['each'] = NULL;
$arguments586['as'] = NULL;
$arguments586['key'] = NULL;
$arguments586['reverse'] = false;
$arguments586['iteration'] = NULL;
$array588 = array (
);$arguments586['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array588);
$arguments586['as'] = 'entries';
$arguments586['key'] = 'headline';

$output585 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output585 .= '
                    ';
return $output585;
};
$arguments583['__elseClosures'][] = function() use ($renderingContext, $self) {
$output642 = '';

$output642 .= '
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                <tr>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['key'] = NULL;
$arguments643['id'] = NULL;
$arguments643['default'] = NULL;
$arguments643['arguments'] = NULL;
$arguments643['extensionName'] = NULL;
$arguments643['languageKey'] = NULL;
$arguments643['alternativeLanguageKeys'] = NULL;
$arguments643['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext)]);

$output642 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments645 = array();
$arguments645['key'] = NULL;
$arguments645['id'] = NULL;
$arguments645['default'] = NULL;
$arguments645['arguments'] = NULL;
$arguments645['extensionName'] = NULL;
$arguments645['languageKey'] = NULL;
$arguments645['alternativeLanguageKeys'] = NULL;
$arguments645['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext)]);

$output642 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments647 = array();
$arguments647['key'] = NULL;
$arguments647['id'] = NULL;
$arguments647['default'] = NULL;
$arguments647['arguments'] = NULL;
$arguments647['extensionName'] = NULL;
$arguments647['languageKey'] = NULL;
$arguments647['alternativeLanguageKeys'] = NULL;
$arguments647['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext)]);

$output642 .= '
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
$output652 = '';

$output652 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments653 = array();
$arguments653['level'] = NULL;
$array655 = array (
);$arguments653['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array655);

$output652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext)]);

$output652 .= '
                                        </td>
                                        <td>
                                            ';
$array656 = array (
);
$output652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array656)]);

$output652 .= '
                                        </td>
                                        <td>
                                            ';
$array657 = array (
);
$output652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array657)]);

$output652 .= '
                                        </td>
                                    </tr>
                                ';
return $output652;
};
$arguments649 = array();
$arguments649['each'] = NULL;
$arguments649['as'] = NULL;
$arguments649['key'] = NULL;
$arguments649['reverse'] = false;
$arguments649['iteration'] = NULL;
$array651 = array (
);$arguments649['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array651);
$arguments649['as'] = 'entry';

$output642 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);

$output642 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output642;
};

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext);

$output582 .= '
            ';
return $output582;
};
$arguments580 = array();
$arguments580['if'] = NULL;

$output559 .= '';

$output559 .= '
        ';
return $output559;
};
$arguments377 = array();
$arguments377['then'] = NULL;
$arguments377['else'] = NULL;
$arguments377['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array555 = array();
$array556 = array (
);$array555['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array556);
$array555['1'] = ' && ';
$array557 = array (
);$array555['2'] = $renderingContext->getVariableProvider()->getByPath('groupByLevel', $array557);

$expression558 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments377['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression558(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array555)
					),
					$renderingContext
				);
$arguments377['__thenClosure'] = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
                    <h2 class="typo3-adminPanel-headline">';
$array384 = array (
);
$output383 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('component', $array384)]);

$output383 .= '</h2>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
                        <h3 class="typo3-adminPanel-headline">';
$array389 = array (
);
$output388 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logLevel', $array389)]);

$output388 .= '</h3>
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                    <tr>
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['key'] = NULL;
$arguments390['id'] = NULL;
$arguments390['default'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['languageKey'] = NULL;
$arguments390['alternativeLanguageKeys'] = NULL;
$arguments390['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output388 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext)]);

$output388 .= '
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                        <tr>
                                            <td>
                                                ';
$array396 = array (
);
$output395 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array396)]);

$output395 .= '
                                            </td>
                                        </tr>
                                    ';
return $output395;
};
$arguments392 = array();
$arguments392['each'] = NULL;
$arguments392['as'] = NULL;
$arguments392['key'] = NULL;
$arguments392['reverse'] = false;
$arguments392['iteration'] = NULL;
$array394 = array (
);$arguments392['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array394);
$arguments392['as'] = 'entry';

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output388 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output388;
};
$arguments385 = array();
$arguments385['each'] = NULL;
$arguments385['as'] = NULL;
$arguments385['key'] = NULL;
$arguments385['reverse'] = false;
$arguments385['iteration'] = NULL;
$array387 = array (
);$arguments385['each'] = $renderingContext->getVariableProvider()->getByPath('entriesByLogLevel', $array387);
$arguments385['as'] = 'entries';
$arguments385['key'] = 'logLevel';

$output383 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output383 .= '
                ';
return $output383;
};
$arguments380 = array();
$arguments380['each'] = NULL;
$arguments380['as'] = NULL;
$arguments380['key'] = NULL;
$arguments380['reverse'] = false;
$arguments380['iteration'] = NULL;
$array382 = array (
);$arguments380['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array382);
$arguments380['as'] = 'entriesByLogLevel';
$arguments380['key'] = 'component';

$output379 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output379 .= '
            ';
return $output379;
};
$arguments377['__elseClosures'][] = function() use ($renderingContext, $self) {
$output397 = '';

$output397 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
                            <h2 class="typo3-adminPanel-headline">';
$array485 = array (
);
$output484 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array485)]);

$output484 .= '</h2>
                            <div class="typo3-adminPanel-table-overflow">
                                <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                    <thead>
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$output497 = '';

$output497 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['key'] = NULL;
$arguments501['id'] = NULL;
$arguments501['default'] = NULL;
$arguments501['arguments'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['languageKey'] = NULL;
$arguments501['alternativeLanguageKeys'] = NULL;
$arguments501['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output500 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext)]);

$output500 .= '
                                                </th>
                                            ';
return $output500;
};
$arguments498 = array();

$output497 .= '';

$output497 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
$output505 = '';

$output505 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['key'] = NULL;
$arguments506['id'] = NULL;
$arguments506['default'] = NULL;
$arguments506['arguments'] = NULL;
$arguments506['extensionName'] = NULL;
$arguments506['languageKey'] = NULL;
$arguments506['alternativeLanguageKeys'] = NULL;
$arguments506['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext)]);

$output505 .= '
                                                </th>
                                            ';
return $output505;
};
$arguments503 = array();
$arguments503['if'] = NULL;

$output497 .= '';

$output497 .= '
                                        ';
return $output497;
};
$arguments486 = array();
$arguments486['then'] = NULL;
$arguments486['else'] = NULL;
$arguments486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array494 = array();
$array495 = array (
);$array494['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array495);

$expression496 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression496(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array494)
					),
					$renderingContext
				);
$arguments486['__thenClosure'] = function() use ($renderingContext, $self) {
$output488 = '';

$output488 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['key'] = NULL;
$arguments489['id'] = NULL;
$arguments489['default'] = NULL;
$arguments489['arguments'] = NULL;
$arguments489['extensionName'] = NULL;
$arguments489['languageKey'] = NULL;
$arguments489['alternativeLanguageKeys'] = NULL;
$arguments489['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output488 .= '
                                                </th>
                                            ';
return $output488;
};
$arguments486['__elseClosures'][] = function() use ($renderingContext, $self) {
$output491 = '';

$output491 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['key'] = NULL;
$arguments492['id'] = NULL;
$arguments492['default'] = NULL;
$arguments492['arguments'] = NULL;
$arguments492['extensionName'] = NULL;
$arguments492['languageKey'] = NULL;
$arguments492['alternativeLanguageKeys'] = NULL;
$arguments492['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext)]);

$output491 .= '
                                                </th>
                                            ';
return $output491;
};

$output484 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output484 .= '
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['key'] = NULL;
$arguments508['id'] = NULL;
$arguments508['default'] = NULL;
$arguments508['arguments'] = NULL;
$arguments508['extensionName'] = NULL;
$arguments508['languageKey'] = NULL;
$arguments508['alternativeLanguageKeys'] = NULL;
$arguments508['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output484 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext)]);

$output484 .= '
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
                                        <tr>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$output525 = '';

$output525 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['level'] = NULL;
$array531 = array (
);$arguments529['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array531);

$output528 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext)]);

$output528 .= '
                                                    </td>
                                                ';
return $output528;
};
$arguments526 = array();

$output525 .= '';

$output525 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$output534 = '';

$output534 .= '
                                                    <td>
                                                        ';
$array535 = array (
);
$output534 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array535)]);

$output534 .= '
                                                    </td>
                                                ';
return $output534;
};
$arguments532 = array();
$arguments532['if'] = NULL;

$output525 .= '';

$output525 .= '
                                            ';
return $output525;
};
$arguments514 = array();
$arguments514['then'] = NULL;
$arguments514['else'] = NULL;
$arguments514['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array522 = array();
$array523 = array (
);$array522['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array523);

$expression524 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments514['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression524(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array522)
					),
					$renderingContext
				);
$arguments514['__thenClosure'] = function() use ($renderingContext, $self) {
$output516 = '';

$output516 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments517 = array();
$arguments517['level'] = NULL;
$array519 = array (
);$arguments517['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array519);

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext)]);

$output516 .= '
                                                    </td>
                                                ';
return $output516;
};
$arguments514['__elseClosures'][] = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
                                                    <td>
                                                        ';
$array521 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array521)]);

$output520 .= '
                                                    </td>
                                                ';
return $output520;
};

$output513 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output513 .= '
                                            <td>
                                                ';
$array536 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array536)]);

$output513 .= '
                                            </td>
                                        </tr>
                                    ';
return $output513;
};
$arguments510 = array();
$arguments510['each'] = NULL;
$arguments510['as'] = NULL;
$arguments510['key'] = NULL;
$arguments510['reverse'] = false;
$arguments510['iteration'] = NULL;
$array512 = array (
);$arguments510['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array512);
$arguments510['as'] = 'entry';

$output484 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output484 .= '
                                    </tbody>
                                </table>
                            </div>
                        ';
return $output484;
};
$arguments481 = array();
$arguments481['each'] = NULL;
$arguments481['as'] = NULL;
$arguments481['key'] = NULL;
$arguments481['reverse'] = false;
$arguments481['iteration'] = NULL;
$array483 = array (
);$arguments481['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array483);
$arguments481['as'] = 'entries';
$arguments481['key'] = 'headline';

$output480 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output480 .= '
                    ';
return $output480;
};
$arguments478 = array();

$output477 .= '';

$output477 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
$output539 = '';

$output539 .= '
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                <tr>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['key'] = NULL;
$arguments540['id'] = NULL;
$arguments540['default'] = NULL;
$arguments540['arguments'] = NULL;
$arguments540['extensionName'] = NULL;
$arguments540['languageKey'] = NULL;
$arguments540['alternativeLanguageKeys'] = NULL;
$arguments540['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext)]);

$output539 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['key'] = NULL;
$arguments542['id'] = NULL;
$arguments542['default'] = NULL;
$arguments542['arguments'] = NULL;
$arguments542['extensionName'] = NULL;
$arguments542['languageKey'] = NULL;
$arguments542['alternativeLanguageKeys'] = NULL;
$arguments542['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext)]);

$output539 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['key'] = NULL;
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$arguments544['languageKey'] = NULL;
$arguments544['alternativeLanguageKeys'] = NULL;
$arguments544['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output539 .= '
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output549 = '';

$output549 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['level'] = NULL;
$array552 = array (
);$arguments550['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array552);

$output549 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext)]);

$output549 .= '
                                        </td>
                                        <td>
                                            ';
$array553 = array (
);
$output549 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array553)]);

$output549 .= '
                                        </td>
                                        <td>
                                            ';
$array554 = array (
);
$output549 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array554)]);

$output549 .= '
                                        </td>
                                    </tr>
                                ';
return $output549;
};
$arguments546 = array();
$arguments546['each'] = NULL;
$arguments546['as'] = NULL;
$arguments546['key'] = NULL;
$arguments546['reverse'] = false;
$arguments546['iteration'] = NULL;
$array548 = array (
);$arguments546['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array548);
$arguments546['as'] = 'entry';

$output539 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext);

$output539 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output539;
};
$arguments537 = array();
$arguments537['if'] = NULL;

$output477 .= '';

$output477 .= '
                ';
return $output477;
};
$arguments398 = array();
$arguments398['then'] = NULL;
$arguments398['else'] = NULL;
$arguments398['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array473 = array();
$array474 = array (
);$array473['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array474);
$array473['1'] = ' || ';
$array475 = array (
);$array473['2'] = $renderingContext->getVariableProvider()->getByPath('groupByLevel', $array475);

$expression476 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments398['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array473)
					),
					$renderingContext
				);
$arguments398['__thenClosure'] = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
                            <h2 class="typo3-adminPanel-headline">';
$array405 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array405)]);

$output404 .= '</h2>
                            <div class="typo3-adminPanel-table-overflow">
                                <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                    <thead>
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['key'] = NULL;
$arguments421['id'] = NULL;
$arguments421['default'] = NULL;
$arguments421['arguments'] = NULL;
$arguments421['extensionName'] = NULL;
$arguments421['languageKey'] = NULL;
$arguments421['alternativeLanguageKeys'] = NULL;
$arguments421['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext)]);

$output420 .= '
                                                </th>
                                            ';
return $output420;
};
$arguments418 = array();

$output417 .= '';

$output417 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['key'] = NULL;
$arguments426['id'] = NULL;
$arguments426['default'] = NULL;
$arguments426['arguments'] = NULL;
$arguments426['extensionName'] = NULL;
$arguments426['languageKey'] = NULL;
$arguments426['alternativeLanguageKeys'] = NULL;
$arguments426['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext)]);

$output425 .= '
                                                </th>
                                            ';
return $output425;
};
$arguments423 = array();
$arguments423['if'] = NULL;

$output417 .= '';

$output417 .= '
                                        ';
return $output417;
};
$arguments406 = array();
$arguments406['then'] = NULL;
$arguments406['else'] = NULL;
$arguments406['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array415);

$expression416 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments406['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression416(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)
					),
					$renderingContext
				);
$arguments406['__thenClosure'] = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['key'] = NULL;
$arguments409['id'] = NULL;
$arguments409['default'] = NULL;
$arguments409['arguments'] = NULL;
$arguments409['extensionName'] = NULL;
$arguments409['languageKey'] = NULL;
$arguments409['alternativeLanguageKeys'] = NULL;
$arguments409['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext)]);

$output408 .= '
                                                </th>
                                            ';
return $output408;
};
$arguments406['__elseClosures'][] = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['key'] = NULL;
$arguments412['id'] = NULL;
$arguments412['default'] = NULL;
$arguments412['arguments'] = NULL;
$arguments412['extensionName'] = NULL;
$arguments412['languageKey'] = NULL;
$arguments412['alternativeLanguageKeys'] = NULL;
$arguments412['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext)]);

$output411 .= '
                                                </th>
                                            ';
return $output411;
};

$output404 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output404 .= '
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['key'] = NULL;
$arguments428['id'] = NULL;
$arguments428['default'] = NULL;
$arguments428['arguments'] = NULL;
$arguments428['extensionName'] = NULL;
$arguments428['languageKey'] = NULL;
$arguments428['alternativeLanguageKeys'] = NULL;
$arguments428['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext)]);

$output404 .= '
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
$output433 = '';

$output433 .= '
                                        <tr>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
$output445 = '';

$output445 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
$output448 = '';

$output448 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments449 = array();
$arguments449['level'] = NULL;
$array451 = array (
);$arguments449['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array451);

$output448 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext)]);

$output448 .= '
                                                    </td>
                                                ';
return $output448;
};
$arguments446 = array();

$output445 .= '';

$output445 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
                                                    <td>
                                                        ';
$array455 = array (
);
$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array455)]);

$output454 .= '
                                                    </td>
                                                ';
return $output454;
};
$arguments452 = array();
$arguments452['if'] = NULL;

$output445 .= '';

$output445 .= '
                                            ';
return $output445;
};
$arguments434 = array();
$arguments434['then'] = NULL;
$arguments434['else'] = NULL;
$arguments434['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array442 = array();
$array443 = array (
);$array442['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array443);

$expression444 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments434['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression444(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array442)
					),
					$renderingContext
				);
$arguments434['__thenClosure'] = function() use ($renderingContext, $self) {
$output436 = '';

$output436 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments437 = array();
$arguments437['level'] = NULL;
$array439 = array (
);$arguments437['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array439);

$output436 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext)]);

$output436 .= '
                                                    </td>
                                                ';
return $output436;
};
$arguments434['__elseClosures'][] = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
                                                    <td>
                                                        ';
$array441 = array (
);
$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array441)]);

$output440 .= '
                                                    </td>
                                                ';
return $output440;
};

$output433 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output433 .= '
                                            <td>
                                                ';
$array456 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array456)]);

$output433 .= '
                                            </td>
                                        </tr>
                                    ';
return $output433;
};
$arguments430 = array();
$arguments430['each'] = NULL;
$arguments430['as'] = NULL;
$arguments430['key'] = NULL;
$arguments430['reverse'] = false;
$arguments430['iteration'] = NULL;
$array432 = array (
);$arguments430['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array432);
$arguments430['as'] = 'entry';

$output404 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output404 .= '
                                    </tbody>
                                </table>
                            </div>
                        ';
return $output404;
};
$arguments401 = array();
$arguments401['each'] = NULL;
$arguments401['as'] = NULL;
$arguments401['key'] = NULL;
$arguments401['reverse'] = false;
$arguments401['iteration'] = NULL;
$array403 = array (
);$arguments401['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array403);
$arguments401['as'] = 'entries';
$arguments401['key'] = 'headline';

$output400 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output400 .= '
                    ';
return $output400;
};
$arguments398['__elseClosures'][] = function() use ($renderingContext, $self) {
$output457 = '';

$output457 .= '
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                <tr>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['key'] = NULL;
$arguments458['id'] = NULL;
$arguments458['default'] = NULL;
$arguments458['arguments'] = NULL;
$arguments458['extensionName'] = NULL;
$arguments458['languageKey'] = NULL;
$arguments458['alternativeLanguageKeys'] = NULL;
$arguments458['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output457 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext)]);

$output457 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['key'] = NULL;
$arguments460['id'] = NULL;
$arguments460['default'] = NULL;
$arguments460['arguments'] = NULL;
$arguments460['extensionName'] = NULL;
$arguments460['languageKey'] = NULL;
$arguments460['alternativeLanguageKeys'] = NULL;
$arguments460['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output457 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext)]);

$output457 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['key'] = NULL;
$arguments462['id'] = NULL;
$arguments462['default'] = NULL;
$arguments462['arguments'] = NULL;
$arguments462['extensionName'] = NULL;
$arguments462['languageKey'] = NULL;
$arguments462['alternativeLanguageKeys'] = NULL;
$arguments462['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output457 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext)]);

$output457 .= '
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['level'] = NULL;
$array470 = array (
);$arguments468['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array470);

$output467 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext)]);

$output467 .= '
                                        </td>
                                        <td>
                                            ';
$array471 = array (
);
$output467 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array471)]);

$output467 .= '
                                        </td>
                                        <td>
                                            ';
$array472 = array (
);
$output467 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array472)]);

$output467 .= '
                                        </td>
                                    </tr>
                                ';
return $output467;
};
$arguments464 = array();
$arguments464['each'] = NULL;
$arguments464['as'] = NULL;
$arguments464['key'] = NULL;
$arguments464['reverse'] = false;
$arguments464['iteration'] = NULL;
$array466 = array (
);$arguments464['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array466);
$arguments464['as'] = 'entry';

$output457 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output457 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output457;
};

$output397 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output397 .= '
            ';
return $output397;
};

$output376 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output376 .= '
    ';
return $output376;
};
$arguments374 = array();

$output373 .= '';

$output373 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
        <div class="typo3-adminPanel-message typo3-adminPanel-message-info">
            <div class="typo3-adminPanel-message-text">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments743 = array();
$arguments743['key'] = NULL;
$arguments743['id'] = NULL;
$arguments743['default'] = NULL;
$arguments743['arguments'] = NULL;
$arguments743['extensionName'] = NULL;
$arguments743['languageKey'] = NULL;
$arguments743['alternativeLanguageKeys'] = NULL;
$arguments743['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.noEntries';

$output742 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext)]);

$output742 .= '
            </div>
        </div>
    ';
return $output742;
};
$arguments740 = array();
$arguments740['if'] = NULL;

$output373 .= '';

$output373 .= '
';
return $output373;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['0'] = $renderingContext->getVariableProvider()->getByPath('log', $array371);

$expression372 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array370)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
                    <h2 class="typo3-adminPanel-headline">';
$array194 = array (
);
$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('component', $array194)]);

$output193 .= '</h2>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                        <h3 class="typo3-adminPanel-headline">';
$array199 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logLevel', $array199)]);

$output198 .= '</h3>
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                    <tr>
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['key'] = NULL;
$arguments200['id'] = NULL;
$arguments200['default'] = NULL;
$arguments200['arguments'] = NULL;
$arguments200['extensionName'] = NULL;
$arguments200['languageKey'] = NULL;
$arguments200['alternativeLanguageKeys'] = NULL;
$arguments200['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext)]);

$output198 .= '
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                                        <tr>
                                            <td>
                                                ';
$array206 = array (
);
$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array206)]);

$output205 .= '
                                            </td>
                                        </tr>
                                    ';
return $output205;
};
$arguments202 = array();
$arguments202['each'] = NULL;
$arguments202['as'] = NULL;
$arguments202['key'] = NULL;
$arguments202['reverse'] = false;
$arguments202['iteration'] = NULL;
$array204 = array (
);$arguments202['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array204);
$arguments202['as'] = 'entry';

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output198 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output198;
};
$arguments195 = array();
$arguments195['each'] = NULL;
$arguments195['as'] = NULL;
$arguments195['key'] = NULL;
$arguments195['reverse'] = false;
$arguments195['iteration'] = NULL;
$array197 = array (
);$arguments195['each'] = $renderingContext->getVariableProvider()->getByPath('entriesByLogLevel', $array197);
$arguments195['as'] = 'entries';
$arguments195['key'] = 'logLevel';

$output193 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output193 .= '
                ';
return $output193;
};
$arguments190 = array();
$arguments190['each'] = NULL;
$arguments190['as'] = NULL;
$arguments190['key'] = NULL;
$arguments190['reverse'] = false;
$arguments190['iteration'] = NULL;
$array192 = array (
);$arguments190['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array192);
$arguments190['as'] = 'entriesByLogLevel';
$arguments190['key'] = 'component';

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
            ';
return $output189;
};
$arguments187 = array();

$output186 .= '';

$output186 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                            <h2 class="typo3-adminPanel-headline">';
$array297 = array (
);
$output296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array297)]);

$output296 .= '</h2>
                            <div class="typo3-adminPanel-table-overflow">
                                <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                    <thead>
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['key'] = NULL;
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$arguments313['languageKey'] = NULL;
$arguments313['alternativeLanguageKeys'] = NULL;
$arguments313['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext)]);

$output312 .= '
                                                </th>
                                            ';
return $output312;
};
$arguments310 = array();

$output309 .= '';

$output309 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output317 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output317 .= '
                                                </th>
                                            ';
return $output317;
};
$arguments315 = array();
$arguments315['if'] = NULL;

$output309 .= '';

$output309 .= '
                                        ';
return $output309;
};
$arguments298 = array();
$arguments298['then'] = NULL;
$arguments298['else'] = NULL;
$arguments298['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array306 = array();
$array307 = array (
);$array306['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array307);

$expression308 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments298['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array306)
					),
					$renderingContext
				);
$arguments298['__thenClosure'] = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['key'] = NULL;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['languageKey'] = NULL;
$arguments301['alternativeLanguageKeys'] = NULL;
$arguments301['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output300 .= '
                                                </th>
                                            ';
return $output300;
};
$arguments298['__elseClosures'][] = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['languageKey'] = NULL;
$arguments304['alternativeLanguageKeys'] = NULL;
$arguments304['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output303 .= '
                                                </th>
                                            ';
return $output303;
};

$output296 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output296 .= '
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$arguments320['languageKey'] = NULL;
$arguments320['alternativeLanguageKeys'] = NULL;
$arguments320['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output296 .= '
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
                                        <tr>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['level'] = NULL;
$array343 = array (
);$arguments341['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array343);

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext)]);

$output340 .= '
                                                    </td>
                                                ';
return $output340;
};
$arguments338 = array();

$output337 .= '';

$output337 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
                                                    <td>
                                                        ';
$array347 = array (
);
$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array347)]);

$output346 .= '
                                                    </td>
                                                ';
return $output346;
};
$arguments344 = array();
$arguments344['if'] = NULL;

$output337 .= '';

$output337 .= '
                                            ';
return $output337;
};
$arguments326 = array();
$arguments326['then'] = NULL;
$arguments326['else'] = NULL;
$arguments326['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array335);

$expression336 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments326['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments326['__thenClosure'] = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['level'] = NULL;
$array331 = array (
);$arguments329['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array331);

$output328 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext)]);

$output328 .= '
                                                    </td>
                                                ';
return $output328;
};
$arguments326['__elseClosures'][] = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
                                                    <td>
                                                        ';
$array333 = array (
);
$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array333)]);

$output332 .= '
                                                    </td>
                                                ';
return $output332;
};

$output325 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
                                            <td>
                                                ';
$array348 = array (
);
$output325 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array348)]);

$output325 .= '
                                            </td>
                                        </tr>
                                    ';
return $output325;
};
$arguments322 = array();
$arguments322['each'] = NULL;
$arguments322['as'] = NULL;
$arguments322['key'] = NULL;
$arguments322['reverse'] = false;
$arguments322['iteration'] = NULL;
$array324 = array (
);$arguments322['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array324);
$arguments322['as'] = 'entry';

$output296 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output296 .= '
                                    </tbody>
                                </table>
                            </div>
                        ';
return $output296;
};
$arguments293 = array();
$arguments293['each'] = NULL;
$arguments293['as'] = NULL;
$arguments293['key'] = NULL;
$arguments293['reverse'] = false;
$arguments293['iteration'] = NULL;
$array295 = array (
);$arguments293['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array295);
$arguments293['as'] = 'entries';
$arguments293['key'] = 'headline';

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output292 .= '
                    ';
return $output292;
};
$arguments290 = array();

$output289 .= '';

$output289 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                <tr>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments352 = array();
$arguments352['key'] = NULL;
$arguments352['id'] = NULL;
$arguments352['default'] = NULL;
$arguments352['arguments'] = NULL;
$arguments352['extensionName'] = NULL;
$arguments352['languageKey'] = NULL;
$arguments352['alternativeLanguageKeys'] = NULL;
$arguments352['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext)]);

$output351 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['key'] = NULL;
$arguments354['id'] = NULL;
$arguments354['default'] = NULL;
$arguments354['arguments'] = NULL;
$arguments354['extensionName'] = NULL;
$arguments354['languageKey'] = NULL;
$arguments354['alternativeLanguageKeys'] = NULL;
$arguments354['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext)]);

$output351 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['key'] = NULL;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['languageKey'] = NULL;
$arguments356['alternativeLanguageKeys'] = NULL;
$arguments356['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output351 .= '
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['level'] = NULL;
$array364 = array (
);$arguments362['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array364);

$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext)]);

$output361 .= '
                                        </td>
                                        <td>
                                            ';
$array365 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array365)]);

$output361 .= '
                                        </td>
                                        <td>
                                            ';
$array366 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array366)]);

$output361 .= '
                                        </td>
                                    </tr>
                                ';
return $output361;
};
$arguments358 = array();
$arguments358['each'] = NULL;
$arguments358['as'] = NULL;
$arguments358['key'] = NULL;
$arguments358['reverse'] = false;
$arguments358['iteration'] = NULL;
$array360 = array (
);$arguments358['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array360);
$arguments358['as'] = 'entry';

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output351 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output351;
};
$arguments349 = array();
$arguments349['if'] = NULL;

$output289 .= '';

$output289 .= '
                ';
return $output289;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array286);
$array285['1'] = ' || ';
$array287 = array (
);$array285['2'] = $renderingContext->getVariableProvider()->getByPath('groupByLevel', $array287);

$expression288 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression288(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                            <h2 class="typo3-adminPanel-headline">';
$array217 = array (
);
$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array217)]);

$output216 .= '</h2>
                            <div class="typo3-adminPanel-table-overflow">
                                <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                    <thead>
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['languageKey'] = NULL;
$arguments233['alternativeLanguageKeys'] = NULL;
$arguments233['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output232 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output232 .= '
                                                </th>
                                            ';
return $output232;
};
$arguments230 = array();

$output229 .= '';

$output229 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['key'] = NULL;
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$arguments238['languageKey'] = NULL;
$arguments238['alternativeLanguageKeys'] = NULL;
$arguments238['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext)]);

$output237 .= '
                                                </th>
                                            ';
return $output237;
};
$arguments235 = array();
$arguments235['if'] = NULL;

$output229 .= '';

$output229 .= '
                                        ';
return $output229;
};
$arguments218 = array();
$arguments218['then'] = NULL;
$arguments218['else'] = NULL;
$arguments218['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array227);

$expression228 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments218['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments218['__thenClosure'] = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['languageKey'] = NULL;
$arguments221['alternativeLanguageKeys'] = NULL;
$arguments221['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output220 .= '
                                                </th>
                                            ';
return $output220;
};
$arguments218['__elseClosures'][] = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['key'] = NULL;
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$arguments224['languageKey'] = NULL;
$arguments224['alternativeLanguageKeys'] = NULL;
$arguments224['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext)]);

$output223 .= '
                                                </th>
                                            ';
return $output223;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output216 .= '
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['languageKey'] = NULL;
$arguments240['alternativeLanguageKeys'] = NULL;
$arguments240['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output216 .= '
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
                                        <tr>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['level'] = NULL;
$array263 = array (
);$arguments261['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array263);

$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext)]);

$output260 .= '
                                                    </td>
                                                ';
return $output260;
};
$arguments258 = array();

$output257 .= '';

$output257 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
                                                    <td>
                                                        ';
$array267 = array (
);
$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array267)]);

$output266 .= '
                                                    </td>
                                                ';
return $output266;
};
$arguments264 = array();
$arguments264['if'] = NULL;

$output257 .= '';

$output257 .= '
                                            ';
return $output257;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array255);

$expression256 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array254)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['level'] = NULL;
$array251 = array (
);$arguments249['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array251);

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext)]);

$output248 .= '
                                                    </td>
                                                ';
return $output248;
};
$arguments246['__elseClosures'][] = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
                                                    <td>
                                                        ';
$array253 = array (
);
$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array253)]);

$output252 .= '
                                                    </td>
                                                ';
return $output252;
};

$output245 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output245 .= '
                                            <td>
                                                ';
$array268 = array (
);
$output245 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array268)]);

$output245 .= '
                                            </td>
                                        </tr>
                                    ';
return $output245;
};
$arguments242 = array();
$arguments242['each'] = NULL;
$arguments242['as'] = NULL;
$arguments242['key'] = NULL;
$arguments242['reverse'] = false;
$arguments242['iteration'] = NULL;
$array244 = array (
);$arguments242['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array244);
$arguments242['as'] = 'entry';

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output216 .= '
                                    </tbody>
                                </table>
                            </div>
                        ';
return $output216;
};
$arguments213 = array();
$arguments213['each'] = NULL;
$arguments213['as'] = NULL;
$arguments213['key'] = NULL;
$arguments213['reverse'] = false;
$arguments213['iteration'] = NULL;
$array215 = array (
);$arguments213['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array215);
$arguments213['as'] = 'entries';
$arguments213['key'] = 'headline';

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
                    ';
return $output212;
};
$arguments210['__elseClosures'][] = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                <tr>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['languageKey'] = NULL;
$arguments270['alternativeLanguageKeys'] = NULL;
$arguments270['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output269 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['key'] = NULL;
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['languageKey'] = NULL;
$arguments272['alternativeLanguageKeys'] = NULL;
$arguments272['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext)]);

$output269 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['key'] = NULL;
$arguments274['id'] = NULL;
$arguments274['default'] = NULL;
$arguments274['arguments'] = NULL;
$arguments274['extensionName'] = NULL;
$arguments274['languageKey'] = NULL;
$arguments274['alternativeLanguageKeys'] = NULL;
$arguments274['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext)]);

$output269 .= '
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['level'] = NULL;
$array282 = array (
);$arguments280['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array282);

$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext)]);

$output279 .= '
                                        </td>
                                        <td>
                                            ';
$array283 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array283)]);

$output279 .= '
                                        </td>
                                        <td>
                                            ';
$array284 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array284)]);

$output279 .= '
                                        </td>
                                    </tr>
                                ';
return $output279;
};
$arguments276 = array();
$arguments276['each'] = NULL;
$arguments276['as'] = NULL;
$arguments276['key'] = NULL;
$arguments276['reverse'] = false;
$arguments276['iteration'] = NULL;
$array278 = array (
);$arguments276['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array278);
$arguments276['as'] = 'entry';

$output269 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output269 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output269;
};

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
            ';
return $output209;
};
$arguments207 = array();
$arguments207['if'] = NULL;

$output186 .= '';

$output186 .= '
        ';
return $output186;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array183);
$array182['1'] = ' && ';
$array184 = array (
);$array182['2'] = $renderingContext->getVariableProvider()->getByPath('groupByLevel', $array184);

$expression185 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    <h2 class="typo3-adminPanel-headline">';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('component', $array11)]);

$output10 .= '</h2>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                        <h3 class="typo3-adminPanel-headline">';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logLevel', $array16)]);

$output15 .= '</h3>
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                    <tr>
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output15 .= '
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                                        <tr>
                                            <td>
                                                ';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array23)]);

$output22 .= '
                                            </td>
                                        </tr>
                                    ';
return $output22;
};
$arguments19 = array();
$arguments19['each'] = NULL;
$arguments19['as'] = NULL;
$arguments19['key'] = NULL;
$arguments19['reverse'] = false;
$arguments19['iteration'] = NULL;
$array21 = array (
);$arguments19['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array21);
$arguments19['as'] = 'entry';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output15 .= '
                                </tbody>
                            </table>
                        </div>
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
);$arguments12['each'] = $renderingContext->getVariableProvider()->getByPath('entriesByLogLevel', $array14);
$arguments12['as'] = 'entries';
$arguments12['key'] = 'logLevel';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

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
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array9);
$arguments7['as'] = 'entriesByLogLevel';
$arguments7['key'] = 'component';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
            ';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                            <h2 class="typo3-adminPanel-headline">';
$array112 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array112)]);

$output111 .= '</h2>
                            <div class="typo3-adminPanel-table-overflow">
                                <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                    <thead>
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output127 .= '
                                                </th>
                                            ';
return $output127;
};
$arguments125 = array();

$output124 .= '';

$output124 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output132 .= '
                                                </th>
                                            ';
return $output132;
};
$arguments130 = array();
$arguments130['if'] = NULL;

$output124 .= '';

$output124 .= '
                                        ';
return $output124;
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array122);

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments113['__thenClosure'] = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output115 .= '
                                                </th>
                                            ';
return $output115;
};
$arguments113['__elseClosures'][] = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['key'] = NULL;
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$arguments119['languageKey'] = NULL;
$arguments119['alternativeLanguageKeys'] = NULL;
$arguments119['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output118 .= '
                                                </th>
                                            ';
return $output118;
};

$output111 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output111 .= '
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['key'] = NULL;
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['languageKey'] = NULL;
$arguments135['alternativeLanguageKeys'] = NULL;
$arguments135['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output111 .= '
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                                        <tr>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['level'] = NULL;
$array158 = array (
);$arguments156['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array158);

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output155 .= '
                                                    </td>
                                                ';
return $output155;
};
$arguments153 = array();

$output152 .= '';

$output152 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
                                                    <td>
                                                        ';
$array162 = array (
);
$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array162)]);

$output161 .= '
                                                    </td>
                                                ';
return $output161;
};
$arguments159 = array();
$arguments159['if'] = NULL;

$output152 .= '';

$output152 .= '
                                            ';
return $output152;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments141['__thenClosure'] = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['level'] = NULL;
$array146 = array (
);$arguments144['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array146);

$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output143 .= '
                                                    </td>
                                                ';
return $output143;
};
$arguments141['__elseClosures'][] = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
                                                    <td>
                                                        ';
$array148 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array148)]);

$output147 .= '
                                                    </td>
                                                ';
return $output147;
};

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                                            <td>
                                                ';
$array163 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array163)]);

$output140 .= '
                                            </td>
                                        </tr>
                                    ';
return $output140;
};
$arguments137 = array();
$arguments137['each'] = NULL;
$arguments137['as'] = NULL;
$arguments137['key'] = NULL;
$arguments137['reverse'] = false;
$arguments137['iteration'] = NULL;
$array139 = array (
);$arguments137['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array139);
$arguments137['as'] = 'entry';

$output111 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output111 .= '
                                    </tbody>
                                </table>
                            </div>
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
);$arguments108['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array110);
$arguments108['as'] = 'entries';
$arguments108['key'] = 'headline';

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
                    ';
return $output107;
};
$arguments105 = array();

$output104 .= '';

$output104 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                <tr>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['key'] = NULL;
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['languageKey'] = NULL;
$arguments167['alternativeLanguageKeys'] = NULL;
$arguments167['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output166 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['key'] = NULL;
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['languageKey'] = NULL;
$arguments169['alternativeLanguageKeys'] = NULL;
$arguments169['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext)]);

$output166 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['languageKey'] = NULL;
$arguments171['alternativeLanguageKeys'] = NULL;
$arguments171['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output166 .= '
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['level'] = NULL;
$array179 = array (
);$arguments177['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array179);

$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output176 .= '
                                        </td>
                                        <td>
                                            ';
$array180 = array (
);
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array180)]);

$output176 .= '
                                        </td>
                                        <td>
                                            ';
$array181 = array (
);
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array181)]);

$output176 .= '
                                        </td>
                                    </tr>
                                ';
return $output176;
};
$arguments173 = array();
$arguments173['each'] = NULL;
$arguments173['as'] = NULL;
$arguments173['key'] = NULL;
$arguments173['reverse'] = false;
$arguments173['iteration'] = NULL;
$array175 = array (
);$arguments173['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array175);
$arguments173['as'] = 'entry';

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output166 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output166;
};
$arguments164 = array();
$arguments164['if'] = NULL;

$output104 .= '';

$output104 .= '
                ';
return $output104;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array101);
$array100['1'] = ' || ';
$array102 = array (
);$array100['2'] = $renderingContext->getVariableProvider()->getByPath('groupByLevel', $array102);

$expression103 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                            <h2 class="typo3-adminPanel-headline">';
$array32 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array32)]);

$output31 .= '</h2>
                            <div class="typo3-adminPanel-table-overflow">
                                <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                    <thead>
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$arguments48['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '
                                                </th>
                                            ';
return $output47;
};
$arguments45 = array();

$output44 .= '';

$output44 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['key'] = NULL;
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['languageKey'] = NULL;
$arguments53['alternativeLanguageKeys'] = NULL;
$arguments53['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output52 .= '
                                                </th>
                                            ';
return $output52;
};
$arguments50 = array();
$arguments50['if'] = NULL;

$output44 .= '';

$output44 .= '
                                        ';
return $output44;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
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
$arguments36['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
                                                </th>
                                            ';
return $output35;
};
$arguments33['__elseClosures'][] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                                                <th scope="col" class="typo3-adminPanel-table-cell-key">
                                                    ';
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
$arguments39['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '
                                                </th>
                                            ';
return $output38;
};

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output31 .= '
                                        <th scope="col" class="typo3-adminPanel-table-cell-key">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['languageKey'] = NULL;
$arguments55['alternativeLanguageKeys'] = NULL;
$arguments55['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output31 .= '
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                                        <tr>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['level'] = NULL;
$array78 = array (
);$arguments76['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array78);

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= '
                                                    </td>
                                                ';
return $output75;
};
$arguments73 = array();

$output72 .= '';

$output72 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                                    <td>
                                                        ';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array82)]);

$output81 .= '
                                                    </td>
                                                ';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output72 .= '';

$output72 .= '
                                            ';
return $output72;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('groupByComponent', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                                                    <td>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['level'] = NULL;
$array66 = array (
);$arguments64['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array66);

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output63 .= '
                                                    </td>
                                                ';
return $output63;
};
$arguments61['__elseClosures'][] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                                                    <td>
                                                        ';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array68)]);

$output67 .= '
                                                    </td>
                                                ';
return $output67;
};

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                                            <td>
                                                ';
$array83 = array (
);
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array83)]);

$output60 .= '
                                            </td>
                                        </tr>
                                    ';
return $output60;
};
$arguments57 = array();
$arguments57['each'] = NULL;
$arguments57['as'] = NULL;
$arguments57['key'] = NULL;
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$array59 = array (
);$arguments57['each'] = $renderingContext->getVariableProvider()->getByPath('entries', $array59);
$arguments57['as'] = 'entry';

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output31 .= '
                                    </tbody>
                                </table>
                            </div>
                        ';
return $output31;
};
$arguments28 = array();
$arguments28['each'] = NULL;
$arguments28['as'] = NULL;
$arguments28['key'] = NULL;
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$array30 = array (
);$arguments28['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array30);
$arguments28['as'] = 'entries';
$arguments28['key'] = 'headline';

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
                    ';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                        <div class="typo3-adminPanel-table-overflow">
                            <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                                <thead>
                                <tr>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.level';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.component';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output84 .= '
                                    </th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-key">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$arguments89['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.message';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output84 .= '
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['level'] = NULL;
$array97 = array (
);$arguments95['level'] = $renderingContext->getVariableProvider()->getByPath('entry.level', $array97);

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Adminpanel\ViewHelpers\SpeakingLogLevelViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '
                                        </td>
                                        <td>
                                            ';
$array98 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.component', $array98)]);

$output94 .= '
                                        </td>
                                        <td>
                                            ';
$array99 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entry.message', $array99)]);

$output94 .= '
                                        </td>
                                    </tr>
                                ';
return $output94;
};
$arguments91 = array();
$arguments91['each'] = NULL;
$arguments91['as'] = NULL;
$arguments91['key'] = NULL;
$arguments91['reverse'] = false;
$arguments91['iteration'] = NULL;
$array93 = array (
);$arguments91['each'] = $renderingContext->getVariableProvider()->getByPath('log', $array93);
$arguments91['as'] = 'entry';

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output84 .= '
                                </tbody>
                            </table>
                        </div>
                    ';
return $output84;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
            ';
return $output24;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
        <div class="typo3-adminPanel-message typo3-adminPanel-message-info">
            <div class="typo3-adminPanel-message-text">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments368 = array();
$arguments368['key'] = NULL;
$arguments368['id'] = NULL;
$arguments368['default'] = NULL;
$arguments368['arguments'] = NULL;
$arguments368['extensionName'] = NULL;
$arguments368['languageKey'] = NULL;
$arguments368['alternativeLanguageKeys'] = NULL;
$arguments368['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.noEntries';

$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext)]);

$output367 .= '
            </div>
        </div>
    ';
return $output367;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#