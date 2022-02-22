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

/* __string_template__aea3e9b6b26562d0823da90fbb678254 */
class __TwigTemplate_b1a9d4e02d7ca0912bc4d31838901a14 extends \Twig\Template
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
        // line 12
        echo "
";
        // line 13
        echo t("<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div id=\"button-container\">
<div class=\"button\" id=\"tour-target-1\">First item.</div>
<div class=\"button\" id=\"tour-target-2\">Second item.</div>
<div class=\"button\" id=\"tour-target-3\">Third item.</div>
<div class=\"button\" id=\"tour-target-4\">Fourth item.</div>
</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href=\"https://drupal.org/project/tour_ui\">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Shepherd JavaScript library for its underlying
    functionality. You can find more information about Shepherd at
    <a href=\"https://shepherdjs.dev/\">https://shepherdjs.dev/</a></p>", array());
    }

    public function getTemplateName()
    {
        return "__string_template__aea3e9b6b26562d0823da90fbb678254";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__aea3e9b6b26562d0823da90fbb678254", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 13);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                []
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
