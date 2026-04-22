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

/* application/display-block/block-chart-ajax-bars/layout.js.twig */
class __TwigTemplate_71f990848e20d2c8bd059ef3abe55330 extends Template
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
var iChartDefaultHeight = 200,
        iChartLegendHeight = 6 * ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "iMaxNbCharsInLabel", [], "any", false, false, false, 5), "html", null, true);
        yield ",
        iChartTotalHeight = iChartDefaultHeight+iChartLegendHeight;
\$('#my_chart_";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 7), "html", null, true);
        yield "').height(iChartTotalHeight+'px');

var chart = c3.generate({
    bindto: d3.select('#my_chart_";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 10), "html", null, true);
        yield "'),
    data: {
        json: ";
        // line 12
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJson", [], "any", false, false, false, 12);
        yield ",
        keys: {
            x: 'label',
            value: [\"value\"]
        },
        onclick: function (d) {
            var aURLs = ";
        // line 18
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSURLs", [], "any", false, false, false, 18);
        yield ";
            window.location.href = aURLs[d.index];
        },
        selection: {
            enabled: true
        },
        type: 'bar'
    },
    axis: {
        x: {
            tick: {
                culling: {max: 25}, // Maximum 24 labels on x axis (2 years).
                centered: true,
                rotate: 90,
                multiline: false
            },
            type: 'category'   // this needed to load string x value
        }
    },
    grid: {
        y: {
            show: true
        }
    },
    legend: {
        show: false
    },
    tooltip: {
        grouped: false,
        format: {
            title: function() { return '' },
            name: function (name, ratio, id, index) {
                var aNames = ";
        // line 50
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSNames", [], "any", false, false, false, 50);
        yield ";
                return aNames[index];
            }
        }
    }
});

if (typeof(charts) === \"undefined\")
{
    charts = [];
\trefreshChart = [];
}
var idxChart=charts.length;
charts.push(chart);
var refreshChart";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 64), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        yield " = '\$.post(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sURLForRefresh", [], "any", false, false, false, 64), "js"), "html", null, true);
        yield "&refresh='+idxChart+'\",\"\", function (data) {'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'charts['+idxChart+'].unload();'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'setTimeout(function () {eval(data.js);},50);'+
\t\t\t\t\t\t\t\t\t\t\t\t\t'})';
refreshChart.push(refreshChart";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 68), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        yield ");";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "application/display-block/block-chart-ajax-bars/layout.js.twig";
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
        return array (  132 => 68,  123 => 64,  106 => 50,  71 => 18,  62 => 12,  57 => 10,  51 => 7,  46 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/display-block/block-chart-ajax-bars/layout.js.twig", "/var/www/html/templates/application/display-block/block-chart-ajax-bars/layout.js.twig");
    }
}
