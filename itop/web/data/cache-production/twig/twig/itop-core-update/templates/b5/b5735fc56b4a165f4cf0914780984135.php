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

/* SelectUpdateFile.ready.js.twig */
class __TwigTemplate_c4c680e5d991f405bee66fba56e1ec68 extends Template
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
var iDiskFreeSpace = ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iDiskFreeSpace"] ?? null), "html", null, true);
        yield ";

\$.ajax({
    method: \"POST\",
    url: \"";
        // line 8
        yield ($context["sAjaxURL"] ?? null);
        yield "\",
    data: {
        route: \"core_update_ajax.can_update_core\",
        maintenance: true
    },
    dataType: \"json\",
    success: function (data) {
        var oRequirements = \$(\"#header-requirements\");
        var oCanCoreUpdate = \$(\"#can-core-update\");
        oCanCoreUpdate.html(data.sMessage);
        if(data.sMessageDetails){
            \$(\"#header-requirements-details\").removeClass(\"ibo-is-hidden\");
            \$('#can-core-update-details').html(data.sMessageDetails);
            \$(\"#toggle-requirements-details\").click( function() { \$(\"#can-core-update-details\").toggle(); } );
        }
        oRequirements.removeClass(\"ibo-is-information\");
        if (data.bStatus) {
            oRequirements.addClass(\"ibo-is-success\");
            \$(\"#check-update\").prop(\"disabled\", false);
            \$(\"#file\").prop(\"disabled\", false);
            \$(\"#file-container\").removeClass(\"ibo-is-hidden\");
            \$(\"#check-in-progress\").addClass(\"ibo-is-hidden\");
        } else {
            oRequirements.addClass(\"ibo-is-failure\");
            ";
        // line 32
        if (($context["bDontUpgradeIfIntegrityFailed"] ?? null)) {
            // line 33
            yield "                \$(\"#check-update\").prop(\"disabled\", true);
                \$(\"#file\").prop(\"disabled\", true);
                \$('#form-update-outer').slideUp(600);
            ";
        } else {
            // line 37
            yield "                \$(\"#check-update\").prop(\"disabled\", false);
                \$(\"#file\").prop(\"disabled\", false);
                \$(\"#file-container\").removeClass(\"ibo-is-hidden\");
                \$(\"#check-in-progress\").addClass(\"ibo-is-hidden\");
            ";
        }
        // line 42
        yield "        }
    }
});

var oGetItopDiskSpace = \$.ajax({
    method: \"POST\",
    url: \"";
        // line 48
        yield ($context["sAjaxURL"] ?? null);
        yield "\",
    data: {
        route: \"core_update_ajax.get_itop_disk_space\",
        maintenance: true
    },
    dataType: \"json\",
    success: function(data)
    {
        var oRequirement = \$(\"#itop-disk-space\");
        oRequirement.html(data.sItopDiskSpace);
    }
});

var oGetDBDiskSpace = \$.ajax({
    method: \"POST\",
    url: \"";
        // line 63
        yield ($context["sAjaxURL"] ?? null);
        yield "\",
    data: {
        route: \"core_update_ajax.get_db_disk_space\",
        maintenance: true
    },
    dataType: \"json\",
    success: function(data)
    {
        var oRequirement = \$(\"#db-disk-space\");
        oRequirement.html(data.sDBDiskSpace);
    }
});

\$.when(oGetItopDiskSpace, oGetDBDiskSpace).then(
    function(data1, data2)
    {
        var iItopDiskSpace = data1[0].iItopDiskSpace;
        var iDBDiskSpace = data2[0].iDBDiskSpace;
        if ((2 * (iItopDiskSpace + iDBDiskSpace)) > iDiskFreeSpace)
        {
            \$(\"#dobackup-warning\").removeClass(\"ibo-is-hidden\");
        }
    }
);

\$(\"#file\").on(\"change\", function(e) {
    var selectedFile = \$('#file').get(0).files[0];
    var errorMsg = \$(\"#header-file-size\");
    var submitButton = \$(\"#check-update\");
    if (selectedFile)
    {
        if (selectedFile.size > ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iFileUploadMaxSize"] ?? null), "html", null, true);
        yield ")
        {
            errorMsg.removeClass(\"ibo-is-hidden\");
            submitButton.prop(\"disabled\", true);
            return;
        }
    }
    errorMsg.addClass(\"ibo-is-hidden\");
    submitButton.prop(\"disabled\", false);
});

\$(\"#check-update\").on(\"click\", function(e) {
    \$(\"#submit-wait\").removeClass(\"ibo-is-hidden\");
    \$(this).prop(\"disabled\", true);
    \$(\".ajax-spin\").removeClass(\"fa-sync-alt\").removeClass(\"fa-spin\").addClass(\"fa-times\");
    \$(this).parents('form').submit();
    e.preventDefault();
    e.stopPropagation();
    return false;
});

\$(\"#launch-setup-form\").on(\"submit\", function () {
    return window.confirm(\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SetupLaunchConfirm"), "html", null, true);
        yield "\");
});

\$(\"#launch-fast-setup\").on(\"click\", function(e) {
    var oMessage = \$(\"#fast-setup-alert\");
    var oContent = \$(\"#fast-setup-content\");
    oMessage.removeClass(\"ibo-is-hidden\");
    oMessage.removeClass(\"ibo-is-failure\");
    oMessage.removeClass(\"ibo-is-success\");
    oMessage.addClass(\"ibo-is-information\");
    oContent.html(\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SetupMessage:Compile"), "html", null, true);
        yield "\");

    let fast_setup_wait = \$(\"#fast-setup-wait\");
    fast_setup_wait.removeClass(\"ibo-is-hidden\");
    \$(this).prop(\"disabled\", true);

    \$.ajax({
        method: \"POST\",
        url: \"";
        // line 134
        yield ($context["sAjaxURL"] ?? null);
        yield "\",
        data: {
            route: \"core_update_ajax.rebuild_toolkit_environment\"
        },
        dataType: \"json\",
        complete: function(jqXHR, textStatus) {
            \$(\"#fast-setup-wait\").addClass(\"ibo-is-hidden\");
            \$(\"#launch-fast-setup\").prop(\"disabled\", false);
            fast_setup_wait.addClass(\"ibo-is-hidden\");
        },
        success: function (data) {
            oMessage.removeClass(\"ibo-is-information\");

            if (data.bStatus) {
                oMessage.removeClass(\"ibo-is-failure\");
                oMessage.addClass(\"ibo-is-success\");
                oContent.html(\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SetupMessage:UpdateDone"), "html", null, true);
        yield "\");
            } else {
                oMessage.removeClass(\"ibo-is-success\");
                oMessage.addClass(\"ibo-is-failure\");
                oContent.html(data.sError);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            oMessage.removeClass(\"ibo-is-information\");
            oMessage.removeClass(\"ibo-is-success\");
            oMessage.addClass(\"ibo-is-failure\");
            oContent.html(textStatus + ' ' + errorThrown);
        }
    });

});

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "SelectUpdateFile.ready.js.twig";
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
        return array (  222 => 150,  203 => 134,  192 => 126,  179 => 116,  154 => 94,  120 => 63,  102 => 48,  94 => 42,  87 => 37,  81 => 33,  79 => 32,  52 => 8,  45 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "SelectUpdateFile.ready.js.twig", "C:\\xampp\\htdocs\\itop\\web\\env-production\\itop-core-update\\templates\\SelectUpdateFile.ready.js.twig");
    }
}
