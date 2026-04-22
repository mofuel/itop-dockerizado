<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* templates/datamodel/ActionEmail/email-notification-preview.html.twig */
class __TwigTemplate_522e1f3af815404c018e09a656a547c2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sTitle" => "", "sContent" => "", "sId" => null];
            $sTitle = $aParams['sTitle'] ?? '';
            $sContent = $aParams['sContent'] ?? '';
            $sId = $aParams['sId'] ?? NULL;
            $oAlert_69e526ad9b737292978574 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForWarning(            $sTitle            ,             $sContent            ,             $sId            );
            $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oAlert_69e526ad9b737292978574, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oAlert_69e526ad9b737292978574, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oAlert_69e526ad9b737292978574);
            array_push($context['UIBlockParent'], $oAlert_69e526ad9b737292978574);
            ob_start();
            // line 3
            yield "<div id=\"branding-error-alert-content\">
<div style=\"display:flex;flex-align: stretch;\">
<div style=\"margin-right:1em\"><span class=\"fas fa-2x fa-exclamation-triangle\"></span></div>
<div>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("ActionEmail:preview_warning"), "html", null, true);
            yield "<br/>";
            yield $this->env->getFilter('dict_format')->getCallable()("ActionEmail:preview_more_info", "<a href=\"https://www.caniemail.com\" target=\"_blank\">www.canimeail.com</a>");
            yield "</div>
</div>
</div>
";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 10
            yield "<div style=\"display:flex;align-items:stretch;height:50rem;margin-top:0.5rem;\">
<iframe width=\"100%\" sandbox srcdoc=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iframe_content"] ?? null), "html", null, true);
            yield "\"></iframe>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "templates/datamodel/ActionEmail/email-notification-preview.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  101 => 1,  94 => 11,  91 => 10,  76 => 6,  71 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "templates/datamodel/ActionEmail/email-notification-preview.html.twig", "C:\\xampp\\htdocs\\itop\\web\\templates\\datamodel\\ActionEmail\\email-notification-preview.html.twig");
    }
}
