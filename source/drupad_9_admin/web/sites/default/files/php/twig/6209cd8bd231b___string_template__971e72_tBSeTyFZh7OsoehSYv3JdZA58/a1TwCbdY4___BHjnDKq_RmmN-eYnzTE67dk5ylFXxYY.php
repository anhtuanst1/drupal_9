<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__971e7206650990ee6f82154a4521615c */
class __TwigTemplate_86c59149ec01a3cdcae029edcf236353 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
";
        // line 8
        $context["page_example_simple"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("page_example.simple");
        // line 9
        $context["page_example_arguments"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("page_example.arguments", ["first" => 23, "second" => 56]);
        // line 10
        echo "
";
        // line 11
        echo t("<p>The Page example module provides two pages, \"simple\" and \"arguments\".</p>
<p>The <a href=@page_example_simple>simple page</a> just returns a renderable array for display.</p>
<p>The <a href=@page_example_arguments>arguments page</a> takes two arguments and displays them, as in @page_example_arguments</p>", array("@page_example_simple" =>         // line 13
($context["page_example_simple"] ?? null), "@page_example_arguments" =>         // line 14
($context["page_example_arguments"] ?? null), "@page_example_arguments" => ($context["page_example_arguments"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "__string_template__971e7206650990ee6f82154a4521615c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  52 => 13,  49 => 11,  46 => 10,  44 => 9,  42 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__971e7206650990ee6f82154a4521615c", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 11);
        static $filters = array("escape" => 13);
        static $functions = array("path" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
