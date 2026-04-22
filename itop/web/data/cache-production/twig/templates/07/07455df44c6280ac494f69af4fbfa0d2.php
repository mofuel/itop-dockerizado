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

/* base/components/datatable/static/layout.html.twig */
class __TwigTemplate_97c8dc6ce61a39d0fff623af78526dc6 extends Template
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
        // line 3
        yield "
";
        // line 4
        $context["columns"] = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumns", [], "method", false, false, false, 4);
        // line 5
        yield "<table id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 5), "html", null, true);
        yield "\" width=\"100%\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 5), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 5), "html", null, true);
        yield " listResults";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 5)) {
            yield " ibo-is-hidden";
        }
        yield "\" data-role=\"ibo-datatable\" data-status=\"loading\">
    <thead>
    <tr>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 9
            yield "            <th class=\"ibo-datatable-header\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "description", [], "any", false, false, false, 9), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 9), "html", null, true);
            yield "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetData", [], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 15
            yield "       
        <tr ";
            // line 16
            if ( !Twig\Extension\CoreExtension::testEmpty((($_v0 = $context["data"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["@id"] ?? null) : null))) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["data"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["@id"] ?? null) : null), "html", null, true);
                yield "\" ";
            }
            // line 17
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty((($_v2 = $context["data"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["@class"] ?? null) : null))) {
                yield " class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["data"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["@class"] ?? null) : null), "html", null, true);
                yield "\"";
            }
            // line 18
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty((($_v4 = $context["data"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["@meta"] ?? null) : null))) {
                yield " ";
                yield (($_v5 = $context["data"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["@meta"] ?? null) : null);
            }
            yield ">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["column"]) {
                // line 20
                yield "            <td ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "class", [], "any", false, false, false, 20))) {
                    yield "class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "class", [], "any", false, false, false, 20), "html", null, true);
                    yield "\" ";
                }
                // line 21
                yield "                    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "metadata", [], "any", false, false, false, 21))) {
                    // line 22
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "metadata", [], "any", false, false, false, 22));
                    foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                        // line 23
                        yield "                            data-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["prop"], ["_" => "-"]), "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\"
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['prop'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    yield "                    ";
                }
                // line 26
                yield "                    ";
                $context["cellValueHtml"] = "";
                // line 27
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["data"]);
                foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
                    // line 28
                    yield "                        ";
                    if (($context["cellName"] == $context["name"])) {
                        // line 29
                        yield "                            ";
                        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["cellValue"], "value_raw", [], "any", false, false, false, 29))) {
                            // line 30
                            yield "                                ";
                            $context["cellValueHtml"] = $context["cellValue"];
                            // line 31
                            yield "                            ";
                        } else {
                            // line 32
                            yield "                                data-value-raw=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cellValue"], "value_raw", [], "any", false, false, false, 32), "html", null, true);
                            yield "\"
                                ";
                            // line 33
                            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["cellValue"], "value_html", [], "any", false, false, false, 33))) {
                                // line 34
                                yield "                                    ";
                                $context["cellValueHtml"] = CoreExtension::getAttribute($this->env, $this->source, $context["cellValue"], "value_html", [], "any", false, false, false, 34);
                                // line 35
                                yield "                                ";
                            }
                            // line 36
                            yield "                            ";
                        }
                        // line 37
                        yield "                        ";
                    }
                    // line 38
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['cellName'], $context['cellValue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "                    ";
                if (Twig\Extension\CoreExtension::testEmpty(($context["cellValueHtml"] ?? null))) {
                    // line 40
                    yield "                        ";
                    $context["cellValueHtml"] = "&nbsp;";
                    // line 41
                    yield "                    ";
                }
                // line 42
                yield "            >";
                yield ($context["cellValueHtml"] ?? null);
                yield "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "    </tbody>
</table>

";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 49)) {
            // line 50
            yield "    ";
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowActionsTemplate", [], "method", false, false, false, 50));
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/static/layout.html.twig";
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
        return array (  220 => 50,  218 => 49,  213 => 46,  206 => 44,  197 => 42,  194 => 41,  191 => 40,  188 => 39,  182 => 38,  179 => 37,  176 => 36,  173 => 35,  170 => 34,  168 => 33,  163 => 32,  160 => 31,  157 => 30,  154 => 29,  151 => 28,  146 => 27,  143 => 26,  140 => 25,  129 => 23,  124 => 22,  121 => 21,  114 => 20,  110 => 19,  102 => 18,  95 => 17,  89 => 16,  86 => 15,  82 => 14,  77 => 11,  66 => 9,  62 => 8,  47 => 5,  45 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/static/layout.html.twig", "C:\\xampp\\htdocs\\itop\\web\\templates\\base\\components\\datatable\\static\\layout.html.twig");
    }
}
