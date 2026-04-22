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

/* SelectUpdateFile.html.twig */
class __TwigTemplate_d44d6c7a48f18da2946fc4e0f2243aa2 extends Template
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
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "
";
            // line 5
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo-update-core"]];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc11a66667060558 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc11a66667060558, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc11a66667060558, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc11a66667060558);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc11a66667060558);
            ob_start();
            // line 6
            yield "
    ";
            // line 7
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sTitle" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:PageTitle")];
            if (!isset($aParams['sTitle'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sTitle for UIPanel at line 7');
            }
            $sTitle = $aParams['sTitle'];
            $sSubTitle = $aParams['sSubTitle'] ?? NULL;
            $oPanel_69d941fc11c06460144644 = Combodo\iTop\Application\UI\Base\Component\Panel\PanelUIBlockFactory::MakeNeutral(            $sTitle            ,             $sSubTitle            );
            $aSetters = ['TitleBlock','Title','SubTitleBlock','SubTitle','CSSColorClass','ColorFromColorSemantic','ColorFromOrmStyle','ColorFromClass','IsCollapsible','IsHeaderVisibleOnScroll','MainBlocks','ToolBlocks','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oPanel_69d941fc11c06460144644, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddTitleBlock','AddTitleBlocks','AddSubTitleBlock','AddSubTitleBlocks','AddMainBlock','AddMainBlocks','AddToolbarBlock','AddToolbarBlocks','AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oPanel_69d941fc11c06460144644, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oPanel_69d941fc11c06460144644);
            array_push($context['UIBlockParent'], $oPanel_69d941fc11c06460144644);
            ob_start();
            // line 8
            yield "
    ";
            // line 9
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["display_block", "display-files"]];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc11e6a524287940 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc11e6a524287940, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc11e6a524287940, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc11e6a524287940);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc11e6a524287940);
            ob_start();
            // line 10
            yield "        ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLegend" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:Status")];
            if (!isset($aParams['sLegend'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 10');
            }
            $sLegend = $aParams['sLegend'];
            $sId = $aParams['sId'] ?? NULL;
            $oFieldSet_69d941fc11e8f817182644 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(            $sLegend            ,             $sId            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oFieldSet_69d941fc11e8f817182644, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oFieldSet_69d941fc11e8f817182644, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oFieldSet_69d941fc11e8f817182644);
            array_push($context['UIBlockParent'], $oFieldSet_69d941fc11e8f817182644);
            ob_start();
            // line 11
            yield "            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sId" => "header-requirements", "IsCollapsible" => false, "IsClosable" => false];
            $sTitle = $aParams['sTitle'] ?? '';
            $sContent = $aParams['sContent'] ?? '';
            $sId = $aParams['sId'] ?? NULL;
            $oAlert_69d941fc11ec3854277748 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(            $sTitle            ,             $sContent            ,             $sId            );
            $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oAlert_69d941fc11ec3854277748, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oAlert_69d941fc11ec3854277748, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oAlert_69d941fc11ec3854277748);
            array_push($context['UIBlockParent'], $oAlert_69d941fc11ec3854277748);
            ob_start();
            // line 12
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo-update-core-header-requirements"], "sId" => "can-core-update"];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc11ee8027829226 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc11ee8027829226, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc11ee8027829226, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc11ee8027829226);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc11ee8027829226);
            ob_start();
            // line 13
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:CanCoreUpdate:Loading"), "html", null, true);
            yield "
                    ";
            // line 14
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = [];
            $sId = $aParams['sId'] ?? NULL;
            $oSpinner_69d941fc11f2f199617538 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(            $sId            );
            $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oSpinner_69d941fc11f2f199617538, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oSpinner_69d941fc11f2f199617538, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oSpinner_69d941fc11f2f199617538);
            ob_start();
            // line 15
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 16
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sId" => "header-requirements-details", "sTitle" => $this->env->getFilter('dict_s')->getCallable()("UI:Details+"), "IsCollapsible" => true, "IsClosable" => false, "AddCSSClass" => "ibo-is-hidden"];
            if (!isset($aParams['sTitle'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sTitle for UICollapsibleSection at line 16');
            }
            $sTitle = $aParams['sTitle'];
            $sId = $aParams['sId'] ?? NULL;
            $oCollapsibleSection_69d941fc11f58964641105 = Combodo\iTop\Application\UI\Base\Component\CollapsibleSection\CollapsibleSectionUIBlockFactory::MakeStandard(            $sTitle            ,             $sId            );
            $aSetters = ['OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oCollapsibleSection_69d941fc11f58964641105, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oCollapsibleSection_69d941fc11f58964641105, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oCollapsibleSection_69d941fc11f58964641105);
            array_push($context['UIBlockParent'], $oCollapsibleSection_69d941fc11f58964641105);
            ob_start();
            // line 17
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo-update-core-header-requirements"], "sId" => "can-core-update-details"];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc11f8f461378161 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc11f8f461378161, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc11f8f461378161, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc11f8f461378161);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc11f8f461378161);
            ob_start();
            // line 18
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 19
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 20
            yield "            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 21
            yield "
            ";
            // line 22
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:CurrentVersion")];
            $sLabel = $aParams['sLabel'] ?? '';
            $sLayout = $aParams['sLayout'] ?? 'small';
            $sId = $aParams['sId'] ?? NULL;
            $sDescription = $aParams['sDescription'] ?? '';
            $oField_69d941fc11fb8971179026 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(            $sLabel            ,             $sLayout            ,             $sId            ,             $sDescription            );
            $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oField_69d941fc11fb8971179026, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oField_69d941fc11fb8971179026, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oField_69d941fc11fb8971179026);
            array_push($context['UIBlockParent'], $oField_69d941fc11fb8971179026);
            ob_start();
            // line 23
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("UI:iTopVersion:Long", Twig\Extension\CoreExtension::constant("ITOP_APPLICATION"), Twig\Extension\CoreExtension::constant("ITOP_VERSION"), Twig\Extension\CoreExtension::constant("ITOP_REVISION"), Twig\Extension\CoreExtension::constant("ITOP_BUILD_DATE")), "html", null, true);
            yield "
            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 25
            yield "
            ";
            // line 26
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DiskFreeSpace")];
            $sLabel = $aParams['sLabel'] ?? '';
            $sLayout = $aParams['sLayout'] ?? 'small';
            $sId = $aParams['sId'] ?? NULL;
            $sDescription = $aParams['sDescription'] ?? '';
            $oField_69d941fc1202f725566417 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(            $sLabel            ,             $sLayout            ,             $sId            ,             $sDescription            );
            $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oField_69d941fc1202f725566417, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oField_69d941fc1202f725566417, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oField_69d941fc1202f725566417);
            array_push($context['UIBlockParent'], $oField_69d941fc1202f725566417);
            ob_start();
            // line 27
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sDiskFreeSpace"] ?? null), "html", null, true);
            yield "
            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 29
            yield "
            ";
            // line 30
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:ItopDiskSpace"), "ValueId" => "itop-disk-space"];
            $sLabel = $aParams['sLabel'] ?? '';
            $sLayout = $aParams['sLayout'] ?? 'small';
            $sId = $aParams['sId'] ?? NULL;
            $sDescription = $aParams['sDescription'] ?? '';
            $oField_69d941fc12074311563933 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(            $sLabel            ,             $sLayout            ,             $sId            ,             $sDescription            );
            $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oField_69d941fc12074311563933, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oField_69d941fc12074311563933, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oField_69d941fc12074311563933);
            array_push($context['UIBlockParent'], $oField_69d941fc12074311563933);
            ob_start();
            // line 31
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = [];
            $sId = $aParams['sId'] ?? NULL;
            $oSpinner_69d941fc120a1363268282 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(            $sId            );
            $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oSpinner_69d941fc120a1363268282, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oSpinner_69d941fc120a1363268282, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oSpinner_69d941fc120a1363268282);
            ob_start();
            // line 32
            yield "            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 33
            yield "
            ";
            // line 34
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DBDiskSpace"), "ValueId" => "db-disk-space"];
            $sLabel = $aParams['sLabel'] ?? '';
            $sLayout = $aParams['sLayout'] ?? 'small';
            $sId = $aParams['sId'] ?? NULL;
            $sDescription = $aParams['sDescription'] ?? '';
            $oField_69d941fc120c2143482036 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(            $sLabel            ,             $sLayout            ,             $sId            ,             $sDescription            );
            $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oField_69d941fc120c2143482036, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oField_69d941fc120c2143482036, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oField_69d941fc120c2143482036);
            array_push($context['UIBlockParent'], $oField_69d941fc120c2143482036);
            ob_start();
            // line 35
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = [];
            $sId = $aParams['sId'] ?? NULL;
            $oSpinner_69d941fc120ec050460940 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(            $sId            );
            $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oSpinner_69d941fc120ec050460940, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oSpinner_69d941fc120ec050460940, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oSpinner_69d941fc120ec050460940);
            ob_start();
            // line 36
            yield "            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 37
            yield "
            ";
            // line 38
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:FileUploadMaxSize")];
            $sLabel = $aParams['sLabel'] ?? '';
            $sLayout = $aParams['sLayout'] ?? 'small';
            $sId = $aParams['sId'] ?? NULL;
            $sDescription = $aParams['sDescription'] ?? '';
            $oField_69d941fc12107099076211 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(            $sLabel            ,             $sLayout            ,             $sId            ,             $sDescription            );
            $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oField_69d941fc12107099076211, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oField_69d941fc12107099076211, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oField_69d941fc12107099076211);
            array_push($context['UIBlockParent'], $oField_69d941fc12107099076211);
            ob_start();
            // line 39
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sFileUploadMaxSize"] ?? null), "html", null, true);
            yield "
            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 41
            yield "
        ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 43
            yield "
        ";
            // line 44
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLegend" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SelectUpdateFile"), "sId" => "form-update-outer"];
            if (!isset($aParams['sLegend'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 44');
            }
            $sLegend = $aParams['sLegend'];
            $sId = $aParams['sId'] ?? NULL;
            $oFieldSet_69d941fc1214a452336739 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(            $sLegend            ,             $sId            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oFieldSet_69d941fc1214a452336739, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oFieldSet_69d941fc1214a452336739, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oFieldSet_69d941fc1214a452336739);
            array_push($context['UIBlockParent'], $oFieldSet_69d941fc1214a452336739);
            ob_start();
            // line 45
            yield "            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = [];
            $sId = $aParams['sId'] ?? NULL;
            $oForm_69d941fc12172743088299 = Combodo\iTop\Application\UI\Base\Component\Form\FormUIBlockFactory::MakeStandard(            $sId            );
            $aSetters = ['OnSubmitJsCode','Action','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oForm_69d941fc12172743088299, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oForm_69d941fc12172743088299, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oForm_69d941fc12172743088299);
            array_push($context['UIBlockParent'], $oForm_69d941fc12172743088299);
            ob_start();
            // line 46
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sName" => "route", "sValue" => "core_update.confirm_update"];
            if (!isset($aParams['sName'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 46');
            }
            $sName = $aParams['sName'];
            if (!isset($aParams['sValue'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 46');
            }
            $sValue = $aParams['sValue'];
            $sId = $aParams['sId'] ?? NULL;
            $oInput_69d941fc12187854827060 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeForHidden(            $sName            ,             $sValue            ,             $sId            );
            $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oInput_69d941fc12187854827060, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oInput_69d941fc12187854827060, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oInput_69d941fc12187854827060);
            ob_start();
            // line 47
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sName" => "transaction_id", "sValue" => ($context["sTransactionId"] ?? null)];
            if (!isset($aParams['sName'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 47');
            }
            $sName = $aParams['sName'];
            if (!isset($aParams['sValue'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 47');
            }
            $sValue = $aParams['sValue'];
            $sId = $aParams['sId'] ?? NULL;
            $oInput_69d941fc121a9083772973 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeForHidden(            $sName            ,             $sValue            ,             $sId            );
            $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oInput_69d941fc121a9083772973, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oInput_69d941fc121a9083772973, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oInput_69d941fc121a9083772973);
            ob_start();
            // line 48
            yield "
                ";
            // line 49
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sId" => "header-file-size", "IsHidden" => true];
            $sTitle = $aParams['sTitle'] ?? '';
            $sContent = $aParams['sContent'] ?? '';
            $sId = $aParams['sId'] ?? NULL;
            $oAlert_69d941fc121ca421412713 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForFailure(            $sTitle            ,             $sContent            ,             $sId            );
            $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oAlert_69d941fc121ca421412713, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oAlert_69d941fc121ca421412713, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oAlert_69d941fc121ca421412713);
            array_push($context['UIBlockParent'], $oAlert_69d941fc121ca421412713);
            ob_start();
            // line 50
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo-file-size-error"]];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc121e6324631711 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc121e6324631711, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc121e6324631711, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc121e6324631711);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc121e6324631711);
            ob_start();
            // line 51
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("iTopUpdate:Error:FileUploadMaxSizeTooSmall"), "html", null, true);
            yield "
                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 53
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo-file-size-error"]];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc1221e380391626 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc1221e380391626, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc1221e380391626, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc1221e380391626);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc1221e380391626);
            ob_start();
            // line 54
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("iTopUpdate:UI:PostMaxSize", ($context["sPostMaxSize"] ?? null)), "html", null, true);
            yield "
                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 56
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo-file-size-error"]];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc12255555020098 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc12255555020098, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc12255555020098, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc12255555020098);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc12255555020098);
            ob_start();
            // line 57
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("iTopUpdate:UI:UploadMaxFileSize", ($context["sUploadMaxSize"] ?? null)), "html", null, true);
            yield "
                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 59
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 60
            yield "
            ";
            // line 61
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sId" => "check-in-progress", "IsHidden" => false];
            $sTitle = $aParams['sTitle'] ?? '';
            $sContent = $aParams['sContent'] ?? '';
            $sId = $aParams['sId'] ?? NULL;
            $oAlert_69d941fc12290578251443 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(            $sTitle            ,             $sContent            ,             $sId            );
            $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oAlert_69d941fc12290578251443, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oAlert_69d941fc12290578251443, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oAlert_69d941fc12290578251443);
            array_push($context['UIBlockParent'], $oAlert_69d941fc12290578251443);
            ob_start();
            // line 62
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:CheckInProgress"), "html", null, true);
            yield "
            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 64
            yield "
                ";
            // line 65
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sName" => "file", "sId" => "file", "AddCSSClass" => "ibo-is-hidden"];
            if (!isset($aParams['sName'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIFileSelect at line 65');
            }
            $sName = $aParams['sName'];
            $sId = $aParams['sId'] ?? NULL;
            $oFileSelect_69d941fc122ca846690077 = Combodo\iTop\Application\UI\Base\Component\Input\FileSelect\FileSelectUIBlockFactory::MakeStandard(            $sName            ,             $sId            );
            $aSetters = ['FileName','ButtonText','ShowFilename','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oFileSelect_69d941fc122ca846690077, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oFileSelect_69d941fc122ca846690077, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oFileSelect_69d941fc122ca846690077);
            ob_start();
            // line 66
            yield "
                ";
            // line 67
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sId" => "dobackup-warning", "IsHidden" => true];
            $sTitle = $aParams['sTitle'] ?? '';
            $sContent = $aParams['sContent'] ?? '';
            $sId = $aParams['sId'] ?? NULL;
            $oAlert_69d941fc122eb564127235 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForWarning(            $sTitle            ,             $sContent            ,             $sId            );
            $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oAlert_69d941fc122eb564127235, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oAlert_69d941fc122eb564127235, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oAlert_69d941fc122eb564127235);
            array_push($context['UIBlockParent'], $oAlert_69d941fc122eb564127235);
            ob_start();
            // line 68
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DoBackup:Warning"), "html", null, true);
            yield "
                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 70
            yield "
                ";
            // line 71
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo-font-ral-nor-150"]];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc12323431976148 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc12323431976148, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc12323431976148, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc12323431976148);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc12323431976148);
            ob_start();
            // line 72
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sType" => "checkbox", "sId" => "doBackup", "sName" => "doBackup", "sValue" => "1", "IsChecked" => true, "CSSClasses" => ["ibo-input-checkbox", "ibo-input--label-left"], "Label" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DoBackup:Label")];
            if (!isset($aParams['sType'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sType for UIInput at line 72');
            }
            $sType = $aParams['sType'];
            if (!isset($aParams['sName'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 72');
            }
            $sName = $aParams['sName'];
            if (!isset($aParams['sValue'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 72');
            }
            $sValue = $aParams['sValue'];
            $sId = $aParams['sId'] ?? NULL;
            $oInput_69d941fc1233d989520498 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeStandard(            $sType            ,             $sName            ,             $sValue            ,             $sId            );
            $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oInput_69d941fc1233d989520498, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oInput_69d941fc1233d989520498, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oInput_69d941fc1233d989520498);
            ob_start();
            // line 73
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 74
            yield "
                ";
            // line 75
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo-font-ral-nor-150"]];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc12377164883752 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc12377164883752, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc12377164883752, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc12377164883752);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc12377164883752);
            ob_start();
            // line 76
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sType" => "checkbox", "sId" => "doFilesArchive", "sName" => "doFilesArchive", "sValue" => "1", "IsChecked" => true, "CSSClasses" => ["ibo-input-checkbox", "ibo-input--label-left"], "Label" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DoFilesArchive")];
            if (!isset($aParams['sType'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sType for UIInput at line 76');
            }
            $sType = $aParams['sType'];
            if (!isset($aParams['sName'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 76');
            }
            $sName = $aParams['sName'];
            if (!isset($aParams['sValue'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 76');
            }
            $sValue = $aParams['sValue'];
            $sId = $aParams['sId'] ?? NULL;
            $oInput_69d941fc12390028010052 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeStandard(            $sType            ,             $sName            ,             $sValue            ,             $sId            );
            $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oInput_69d941fc12390028010052, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oInput_69d941fc12390028010052, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oInput_69d941fc12390028010052);
            ob_start();
            // line 77
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 78
            yield "
                ";
            // line 79
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["aContainerClasses" => ["ibo_check_update_submit"]];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oUIContentBlock_69d941fc123cb171374570 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oUIContentBlock_69d941fc123cb171374570, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oUIContentBlock_69d941fc123cb171374570, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc123cb171374570);
            array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc123cb171374570);
            ob_start();
            // line 80
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:CheckUpdate"), "sId" => "check-update", "bIsSubmit" => true, "IsDisabled" => true];
            if (!isset($aParams['sLabel'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLabel for UIButton at line 80');
            }
            $sLabel = $aParams['sLabel'];
            $sName = $aParams['sName'] ?? NULL;
            $sValue = $aParams['sValue'] ?? NULL;
            $bIsSubmit = $aParams['bIsSubmit'] ?? false;
            $sId = $aParams['sId'] ?? NULL;
            $oButton_69d941fc123e4117754365 = Combodo\iTop\Application\UI\Base\Component\Button\ButtonUIBlockFactory::MakeForPrimaryAction(            $sLabel            ,             $sName            ,             $sValue            ,             $bIsSubmit            ,             $sId            );
            $aSetters = ['Label','Tooltip','IconClass','ActionType','Color','OnClickJsCode','JsCode','IsDisabled','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oButton_69d941fc123e4117754365, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oButton_69d941fc123e4117754365, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oButton_69d941fc123e4117754365);
            ob_start();
            // line 81
            yield "                    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sId" => "submit-wait", "IsHidden" => true];
            $sId = $aParams['sId'] ?? NULL;
            $oSpinner_69d941fc12421227573830 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(            $sId            );
            $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oSpinner_69d941fc12421227573830, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oSpinner_69d941fc12421227573830, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oSpinner_69d941fc12421227573830);
            ob_start();
            // line 82
            yield "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 83
            yield "
            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 85
            yield "
        ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 87
            yield "
    ";
            // line 88
            if (($context["bIsSetupLaunchButtonEnabled"] ?? null)) {
                // line 89
                yield "        ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                $aParams = ["sLegend" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:Setup")];
                if (!isset($aParams['sLegend'])) {
                    throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 89');
                }
                $sLegend = $aParams['sLegend'];
                $sId = $aParams['sId'] ?? NULL;
                $oFieldSet_69d941fc12453360237037 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(                $sLegend                ,                 $sId                );
                $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
                foreach ($aSetters as $sSetter) {
                    if (isset($aParams["{$sSetter}"])) {
                        $sCmd = "Set{$sSetter}";
                        call_user_func([$oFieldSet_69d941fc12453360237037, $sCmd], $aParams["{$sSetter}"]);
                    }
                }
                $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
                foreach ($aAdders as $sAdder) {
                    if (isset($aParams["{$sAdder}"])) {
                        call_user_func([$oFieldSet_69d941fc12453360237037, $sAdder], $aParams["{$sAdder}"]);
                    }
                }
                end($context['UIBlockParent'])->AddSubBlock($oFieldSet_69d941fc12453360237037);
                array_push($context['UIBlockParent'], $oFieldSet_69d941fc12453360237037);
                ob_start();
                // line 90
                yield "            ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                $aParams = ["sId" => "launch-setup-form", "Action" => ($context["sLaunchSetupUrl"] ?? null)];
                $sId = $aParams['sId'] ?? NULL;
                $oForm_69d941fc12475975244845 = Combodo\iTop\Application\UI\Base\Component\Form\FormUIBlockFactory::MakeStandard(                $sId                );
                $aSetters = ['OnSubmitJsCode','Action','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
                foreach ($aSetters as $sSetter) {
                    if (isset($aParams["{$sSetter}"])) {
                        $sCmd = "Set{$sSetter}";
                        call_user_func([$oForm_69d941fc12475975244845, $sCmd], $aParams["{$sSetter}"]);
                    }
                }
                $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
                foreach ($aAdders as $sAdder) {
                    if (isset($aParams["{$sAdder}"])) {
                        call_user_func([$oForm_69d941fc12475975244845, $sAdder], $aParams["{$sAdder}"]);
                    }
                }
                end($context['UIBlockParent'])->AddSubBlock($oForm_69d941fc12475975244845);
                array_push($context['UIBlockParent'], $oForm_69d941fc12475975244845);
                ob_start();
                // line 91
                yield "                ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SetupLaunch"), "sName" => "launch-setup", "sValue" => "launch-setup", "bIsSubmit" => true, "sId" => "launch-setup"];
                if (!isset($aParams['sLabel'])) {
                    throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLabel for UIButton at line 91');
                }
                $sLabel = $aParams['sLabel'];
                $sName = $aParams['sName'] ?? NULL;
                $sValue = $aParams['sValue'] ?? NULL;
                $bIsSubmit = $aParams['bIsSubmit'] ?? false;
                $sId = $aParams['sId'] ?? NULL;
                $oButton_69d941fc1248f069876855 = Combodo\iTop\Application\UI\Base\Component\Button\ButtonUIBlockFactory::MakeForDestructiveAction(                $sLabel                ,                 $sName                ,                 $sValue                ,                 $bIsSubmit                ,                 $sId                );
                $aSetters = ['Label','Tooltip','IconClass','ActionType','Color','OnClickJsCode','JsCode','IsDisabled','CSSClasses','DataAttributes','IsHidden'];
                foreach ($aSetters as $sSetter) {
                    if (isset($aParams["{$sSetter}"])) {
                        $sCmd = "Set{$sSetter}";
                        call_user_func([$oButton_69d941fc1248f069876855, $sCmd], $aParams["{$sSetter}"]);
                    }
                }
                $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
                foreach ($aAdders as $sAdder) {
                    if (isset($aParams["{$sAdder}"])) {
                        call_user_func([$oButton_69d941fc1248f069876855, $sAdder], $aParams["{$sAdder}"]);
                    }
                }
                end($context['UIBlockParent'])->AddSubBlock($oButton_69d941fc1248f069876855);
                ob_start();
                // line 92
                yield "            ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                array_pop($context['UIBlockParent']);
                ob_start();
                // line 93
                yield "            ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                $aParams = ["sId" => "fast-setup-alert", "AddCSSClass" => "ibo-is-hidden"];
                $sTitle = $aParams['sTitle'] ?? '';
                $sContent = $aParams['sContent'] ?? '';
                $sId = $aParams['sId'] ?? NULL;
                $oAlert_69d941fc124c3121732306 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(                $sTitle                ,                 $sContent                ,                 $sId                );
                $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
                foreach ($aSetters as $sSetter) {
                    if (isset($aParams["{$sSetter}"])) {
                        $sCmd = "Set{$sSetter}";
                        call_user_func([$oAlert_69d941fc124c3121732306, $sCmd], $aParams["{$sSetter}"]);
                    }
                }
                $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
                foreach ($aAdders as $sAdder) {
                    if (isset($aParams["{$sAdder}"])) {
                        call_user_func([$oAlert_69d941fc124c3121732306, $sAdder], $aParams["{$sAdder}"]);
                    }
                }
                end($context['UIBlockParent'])->AddSubBlock($oAlert_69d941fc124c3121732306);
                array_push($context['UIBlockParent'], $oAlert_69d941fc124c3121732306);
                ob_start();
                // line 94
                yield "                ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                $aParams = ["sId" => "fast-setup-content", "aContainerClasses" => ["ibo-fast-setup-content"]];
                $sId = $aParams['sId'] ?? NULL;
                $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
                $oUIContentBlock_69d941fc124de985091080 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(                $sId                ,                 $aContainerClasses                );
                $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
                foreach ($aSetters as $sSetter) {
                    if (isset($aParams["{$sSetter}"])) {
                        $sCmd = "Set{$sSetter}";
                        call_user_func([$oUIContentBlock_69d941fc124de985091080, $sCmd], $aParams["{$sSetter}"]);
                    }
                }
                $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
                foreach ($aAdders as $sAdder) {
                    if (isset($aParams["{$sAdder}"])) {
                        call_user_func([$oUIContentBlock_69d941fc124de985091080, $sAdder], $aParams["{$sAdder}"]);
                    }
                }
                end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_69d941fc124de985091080);
                array_push($context['UIBlockParent'], $oUIContentBlock_69d941fc124de985091080);
                ob_start();
                // line 95
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SetupMessage:Compile"), "html", null, true);
                yield "
                ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                array_pop($context['UIBlockParent']);
                ob_start();
                // line 97
                yield "            ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                array_pop($context['UIBlockParent']);
                ob_start();
                // line 98
                yield "            ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:FastSetupLaunch"), "sName" => "launch-fast-setup", "sValue" => "launch-fast-setup", "sId" => "launch-fast-setup"];
                if (!isset($aParams['sLabel'])) {
                    throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLabel for UIButton at line 98');
                }
                $sLabel = $aParams['sLabel'];
                $sName = $aParams['sName'] ?? NULL;
                $sValue = $aParams['sValue'] ?? NULL;
                $bIsSubmit = $aParams['bIsSubmit'] ?? false;
                $sId = $aParams['sId'] ?? NULL;
                $oButton_69d941fc12517296535205 = Combodo\iTop\Application\UI\Base\Component\Button\ButtonUIBlockFactory::MakeForDestructiveAction(                $sLabel                ,                 $sName                ,                 $sValue                ,                 $bIsSubmit                ,                 $sId                );
                $aSetters = ['Label','Tooltip','IconClass','ActionType','Color','OnClickJsCode','JsCode','IsDisabled','CSSClasses','DataAttributes','IsHidden'];
                foreach ($aSetters as $sSetter) {
                    if (isset($aParams["{$sSetter}"])) {
                        $sCmd = "Set{$sSetter}";
                        call_user_func([$oButton_69d941fc12517296535205, $sCmd], $aParams["{$sSetter}"]);
                    }
                }
                $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
                foreach ($aAdders as $sAdder) {
                    if (isset($aParams["{$sAdder}"])) {
                        call_user_func([$oButton_69d941fc12517296535205, $sAdder], $aParams["{$sAdder}"]);
                    }
                }
                end($context['UIBlockParent'])->AddSubBlock($oButton_69d941fc12517296535205);
                ob_start();
                // line 99
                yield "            ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                $aParams = ["sId" => "fast-setup-wait", "IsHidden" => true];
                $sId = $aParams['sId'] ?? NULL;
                $oSpinner_69d941fc12544398841684 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(                $sId                );
                $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
                foreach ($aSetters as $sSetter) {
                    if (isset($aParams["{$sSetter}"])) {
                        $sCmd = "Set{$sSetter}";
                        call_user_func([$oSpinner_69d941fc12544398841684, $sCmd], $aParams["{$sSetter}"]);
                    }
                }
                $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
                foreach ($aAdders as $sAdder) {
                    if (isset($aParams["{$sAdder}"])) {
                        call_user_func([$oSpinner_69d941fc12544398841684, $sAdder], $aParams["{$sAdder}"]);
                    }
                }
                end($context['UIBlockParent'])->AddSubBlock($oSpinner_69d941fc12544398841684);
                ob_start();
                // line 100
                yield "        ";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                array_pop($context['UIBlockParent']);
                ob_start();
                // line 101
                yield "    ";
            }
            // line 102
            yield "
        ";
            // line 103
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLegend" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:History")];
            if (!isset($aParams['sLegend'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 103');
            }
            $sLegend = $aParams['sLegend'];
            $sId = $aParams['sId'] ?? NULL;
            $oFieldSet_69d941fc12566087317162 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(            $sLegend            ,             $sId            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oFieldSet_69d941fc12566087317162, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oFieldSet_69d941fc12566087317162, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oFieldSet_69d941fc12566087317162);
            array_push($context['UIBlockParent'], $oFieldSet_69d941fc12566087317162);
            ob_start();
            // line 104
            yield "            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sListId" => "iboupdatehistory", "oSet" => ($context["oSet"] ?? null)];
            if (!isset($aParams['sListId'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sListId for UIDataTable at line 104');
            }
            $sListId = $aParams['sListId'];
            if (!isset($aParams['oSet'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter oSet for UIDataTable at line 104');
            }
            $oSet = $aParams['oSet'];
            $aExtraParams = $aParams['aExtraParams'] ?? array (
);
            $oDataTable_69d941fc1258a519467940 = Combodo\iTop\Application\UI\Base\Component\DataTable\DataTableUIBlockFactory::MakeForRendering(            $sListId            ,             $oSet            ,             $aExtraParams            );
            $aSetters = ['AjaxUrl','AjaxData','DisplayColumns','ResultColumns','Options','InitDisplayData','ModalCreationHandler','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden','JSRefresh','RowActions'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oDataTable_69d941fc1258a519467940, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oDataTable_69d941fc1258a519467940, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oDataTable_69d941fc1258a519467940);
            array_push($context['UIBlockParent'], $oDataTable_69d941fc1258a519467940);
            ob_start();
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 105
            yield "        ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 106
            yield "
    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 108
            yield "
    ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 110
            yield "
";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "SelectUpdateFile.html.twig";
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
        return array (  1643 => 3,  1631 => 110,  1621 => 108,  1611 => 106,  1602 => 105,  1560 => 104,  1531 => 103,  1528 => 102,  1525 => 101,  1516 => 100,  1491 => 99,  1459 => 98,  1450 => 97,  1438 => 95,  1410 => 94,  1382 => 93,  1373 => 92,  1341 => 91,  1315 => 90,  1285 => 89,  1283 => 88,  1280 => 87,  1270 => 85,  1260 => 83,  1251 => 82,  1226 => 81,  1194 => 80,  1167 => 79,  1164 => 78,  1155 => 77,  1118 => 76,  1091 => 75,  1088 => 74,  1079 => 73,  1042 => 72,  1015 => 71,  1012 => 70,  1000 => 68,  973 => 67,  970 => 66,  942 => 65,  939 => 64,  927 => 62,  900 => 61,  897 => 60,  888 => 59,  876 => 57,  848 => 56,  836 => 54,  808 => 53,  796 => 51,  768 => 50,  741 => 49,  738 => 48,  705 => 47,  672 => 46,  646 => 45,  617 => 44,  614 => 43,  604 => 41,  592 => 39,  564 => 38,  561 => 37,  552 => 36,  527 => 35,  499 => 34,  496 => 33,  487 => 32,  462 => 31,  434 => 30,  431 => 29,  419 => 27,  391 => 26,  388 => 25,  376 => 23,  348 => 22,  345 => 21,  336 => 20,  327 => 19,  318 => 18,  290 => 17,  260 => 16,  251 => 15,  227 => 14,  222 => 13,  194 => 12,  166 => 11,  136 => 10,  109 => 9,  106 => 8,  77 => 7,  74 => 6,  47 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "SelectUpdateFile.html.twig", "C:\\xampp\\htdocs\\itop\\web\\env-production\\itop-core-update\\templates\\SelectUpdateFile.html.twig");
    }
}
