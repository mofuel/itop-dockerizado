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

/* base/components/datatable/static/layout.ready.js.twig */
class __TwigTemplate_f3cc2ce917ea4cfb439fbb6155d8750b extends Template
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
        $context["sListId"] = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3);
        // line 4
        $context["sListIDForVarSuffix"] = $this->env->getFilter('sanitize')->getCallable()(("" . ($context["sListId"] ?? null)), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME"));
        // line 5
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["iPageSize"], "method", false, false, false, 5))) {
            // line 6
            $context["iPageSize"] = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["iPageSize"], "method", false, false, false, 6);
        } else {
            // line 8
            $context["iPageSize"] = 10;
        }
        // line 10
        yield "
var oTable";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield " = \$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 11), "html", null, true);
        yield "').DataTable({
    language: {
        processing: \"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Processing"), "html", null, true);
        yield "\",
        search: \"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Search"), "html", null, true);
        yield "\",
        lengthMenu: \"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:LengthMenu"), "html", null, true);
        yield "\",
        zeroRecords: \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:ZeroRecords"), "html", null, true);
        yield "\",
        info: \"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Info"), "html", null, true);
        yield "\",
        infoEmpty: \"\",
        infoFiltered: \"(";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:InfoFiltered"), "html", null, true);
        yield ")\",
        emptyTable: \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:EmptyTable"), "html", null, true);
        yield "\",
        paginate: {
            first: \"<i class=\\\"fas fa-angle-double-left\\\"></i>\",
            previous: \"<i class=\\\"fas fa-angle-left\\\"></i>\",
            next: \"<i class=\\\"fas fa-angle-right\\\"></i>\",
            last: \"<i class=\\\"fas fa-angle-double-right\\\"></i>\"
        },
        aria: {
            sortAscending: \": ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Sort:Ascending"), "html", null, true);
        yield "\",
            sortDescending: \": ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Sort:Descending"), "html", null, true);
        yield "\"
        }
    },
    scrollX: true,
    ";
        // line 33
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sMaxHeight"], "method", false, false, false, 33))) {
            // line 34
            yield "        scrollY: \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sMaxHeight"], "method", false, false, false, 34), "html", null, true);
            yield "\",
    ";
        }
        // line 36
        yield "    scrollCollapse: true,
    order: [],
    rowId: \"id\",
    filter: false,
    ";
        // line 40
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["pageLength"], "method", false, false, false, 40))) {
            // line 41
            yield "        pageLength: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["pageLength"], "method", false, false, false, 41), "html", null, true);
            yield ",
    ";
        }
        // line 43
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["dom"], "method", false, false, false, 43))) {
            // line 44
            yield "    dom: \"<'ibo-datatable--toolbar'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["dom"], "method", false, false, false, 44), "html", null, true);
            yield ">t\",
    ";
        } else {
            // line 46
            yield "    dom: \"<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>t<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>\",
    ";
        }
        // line 48
        yield "    lengthMenu: [[ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iPageSize"] ?? null), "html", null, true);
        yield ",  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 2), "html", null, true);
        yield ",  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 3), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 4), "html", null, true);
        yield ", -1], [ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iPageSize"] ?? null), "html", null, true);
        yield ",  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 2), "html", null, true);
        yield ",  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 3), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 4), "html", null, true);
        yield ", \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:DisplayLength:All"), "html", null, true);
        yield "\"]],
    columns: [
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumns", [], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 51
            yield "        {
            data: \"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\",
            width: \"auto\",
            sortable: true
        },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 57)) {
            // line 58
            yield "            getRowActionsColumnDefinition('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 58), "html", null, true);
            yield "'),
        ";
        }
        // line 60
        yield "    ],
    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            \$(this).closest('.dataTables_wrapper').find('.checkAll')[0].checked = true;
        }
        
        // Disable hyperlinks if necessary
        ";
        // line 81
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["disable_hyperlinks"], "method", false, false, false, 81) === true) || ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 81)) &&  !(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["disable_hyperlinks"], "method", false, false, false, 81) === false)))) {
            // line 82
            yield "        \$(\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 82), "html", null, true);
            yield " a\").on('click', function (e) {
            e.preventDefault();
        });
        ";
        }
        // line 86
        yield "    },
    initComplete: function () {
        if (this.api().page.info().pages < 2)
        {
            this.closest('.dataTables_wrapper').find('.dataTables_length').hide();
        }
        
        // Set header and body datatables status as loaded
        this.attr('data-status', 'loaded');
        this.closest('.dataTables_scroll').find('.dataTables_scrollHead .ibo-datatable').attr('data-status', 'loaded');
    }
});

if (window.ResizeObserver)
{
    let oStaticTable";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout = null;
    const oStaticTable";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "Resize = new ResizeObserver(function(){
        clearTimeout(oStaticTable";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout);
        oStaticTable";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout = setTimeout(function(){
            \$('#";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 105), "html", null, true);
        yield "').DataTable().columns.adjust();
        }, 120);
    });
    oStaticTable";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "Resize.observe(\$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 108), "html", null, true);
        yield "')[0]);
}

";
        // line 111
        yield from $this->loadTemplate("base/components/datatable/row-actions/handler.js.twig", "base/components/datatable/static/layout.ready.js.twig", 111)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/static/layout.ready.js.twig";
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
        return array (  275 => 111,  267 => 108,  261 => 105,  257 => 104,  253 => 103,  249 => 102,  245 => 101,  228 => 86,  220 => 82,  218 => 81,  195 => 60,  189 => 58,  186 => 57,  175 => 52,  172 => 51,  168 => 50,  146 => 48,  142 => 46,  136 => 44,  133 => 43,  127 => 41,  125 => 40,  119 => 36,  113 => 34,  111 => 33,  104 => 29,  100 => 28,  89 => 20,  85 => 19,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  57 => 11,  54 => 10,  51 => 8,  48 => 6,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/static/layout.ready.js.twig", "/var/www/html/templates/base/components/datatable/static/layout.ready.js.twig");
    }
}
