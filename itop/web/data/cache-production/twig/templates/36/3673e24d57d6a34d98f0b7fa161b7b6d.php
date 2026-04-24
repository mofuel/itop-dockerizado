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

/* base/layouts/object/object-summary/layout.html.twig */
class __TwigTemplate_3ead24e9db81aeae397582eee506d68b extends Template
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

        $this->blocks = [
            'iboPanelHeaderOuter' => [$this, 'block_iboPanelHeaderOuter'],
            'iboPanelBody' => [$this, 'block_iboPanelBody'],
            'iboPanelHeader' => [$this, 'block_iboPanelHeader'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base/layouts/object/object-details/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/object/object-details/layout.html.twig", "base/layouts/object/object-summary/layout.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelHeaderOuter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelBody(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <div class=\"ibo-object-summary--header\">
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('iboPanelHeader', $context, $blocks);
        // line 13
        yield "    </div>
    <div class=\"ibo-object-summary--body\">
        <div class=\"ibo-object-summary--content--attributes\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisplayValues", [], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["attcode"] => $context["attval"]) {
            // line 17
            yield "            <div class=\"ibo-object-summary--content--attribute ibo-field ibo-field-small\">
                <span class=\"ibo-object-summary--content--attributes--code ibo-field--label\">";
            // line 18
            yield $context["attcode"];
            yield "</span>
                <span class=\"ibo-object-summary--content--attributes--value ibo-field--value\">";
            // line 19
            yield $context["attval"];
            yield "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attcode'], $context['attval'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelHeader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "        ";
        yield from $this->yieldParentBlock("iboPanelHeader", $context, $blocks);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/object/object-summary/layout.html.twig";
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
        return array (  114 => 11,  107 => 10,  100 => 22,  91 => 19,  87 => 18,  84 => 17,  80 => 16,  75 => 13,  73 => 10,  70 => 9,  63 => 8,  53 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/object/object-summary/layout.html.twig", "/var/www/html/templates/base/layouts/object/object-summary/layout.html.twig");
    }
}
