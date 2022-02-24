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

/* core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig */
class __TwigTemplate_6e8df8468956025895f1896735715474 extends \Twig\Template
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
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig"));

        // line 45
        echo "<div class=\"layout-container\">

  ";
        // line 47
        if (( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 47))))) ||  !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source,         // line 48
($context["page"] ?? null), "header", [], "any", false, false, true, 48))))))) {
            // line 49
            echo "    <header class=\"layout-header\" role=\"banner\">
      <div class=\"container\">
        ";
            // line 51
            if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 51)))))) {
                // line 52
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 54
            echo "        ";
            if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 54)))))) {
                // line 55
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 57
            echo "      </div>
    </header>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 61)) {
            // line 62
            echo "    <div class=\"layout-highlighted\">
      <div class=\"container\">
        ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 69)) {
            // line 70
            echo "  <div class=\"layout-tabs\">
    <div class=\"container\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 77)))))) {
            // line 78
            echo "    <div class=\"layout-banner-top\">
      ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 82
        echo "
  ";
        // line 83
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 83)))))) {
            // line 84
            echo "  <div class=\"layout-breadcrumbs\">
    <div class=\"container\">
      ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        if ( !($context["node"] ?? null)) {
            // line 92
            echo "    ";
            if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 92)))))) {
                // line 93
                echo "      <div class=\"layout-page-title\">
        ";
                // line 94
                if (($context["is_front"] ?? null)) {
                    // line 95
                    echo "          <div class=\"is-front container\">
            ";
                    // line 96
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                    echo "
          </div>
          ";
                } else {
                    // line 99
                    echo "          <div class=\"container\">
            ";
                    // line 100
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo "
          </div>
        ";
                }
                // line 103
                echo "      </div>
    ";
            }
            // line 105
            echo "  ";
        }
        // line 106
        echo "
  <main role=\"main\" class=\"main container\">

    <div class=\"layout-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 111
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
    </div>";
        // line 113
        echo "
    ";
        // line 114
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 114)))))) {
            // line 115
            echo "      <aside class=\"layout-sidebar\" role=\"complementary\">
        ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 119
        echo "
  </main>

  ";
        // line 122
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 122)))))) {
            // line 123
            echo "    <div class=\"layout-content-bottom\">
      ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 127
        echo "
  ";
        // line 128
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 128)))))) {
            // line 129
            echo "  <div class=\"layout-footer\">
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  </div>
  ";
        }
        // line 137
        echo "
  ";
        // line 138
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 138)))))) {
            // line 139
            echo "    <div class=\"layout-bottom\">
      <div class=\"container\">
        ";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 145
        echo "
</div>";
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 145,  243 => 141,  239 => 139,  237 => 138,  234 => 137,  226 => 132,  221 => 129,  219 => 128,  216 => 127,  210 => 124,  207 => 123,  205 => 122,  200 => 119,  194 => 116,  191 => 115,  189 => 114,  186 => 113,  181 => 111,  175 => 106,  172 => 105,  168 => 103,  162 => 100,  159 => 99,  153 => 96,  150 => 95,  148 => 94,  145 => 93,  142 => 92,  140 => 91,  137 => 90,  130 => 86,  126 => 84,  124 => 83,  121 => 82,  115 => 79,  112 => 78,  110 => 77,  107 => 76,  100 => 72,  96 => 70,  94 => 69,  91 => 68,  84 => 64,  80 => 62,  78 => 61,  75 => 60,  70 => 57,  64 => 55,  61 => 54,  55 => 52,  53 => 51,  49 => 49,  47 => 48,  46 => 47,  42 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig", "/var/www/html/drupal_9_admin/web/core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 47);
        static $filters = array("trim" => 47, "striptags" => 47, "render" => 47, "escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['trim', 'striptags', 'render', 'escape'],
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
