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

/* core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig */
class __TwigTemplate_d55b3098a72bf993d4703bcb55e04a96 extends \Twig\Template
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
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig"));

        // line 21
        echo "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        echo "
";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 31, $context, $this->getSourceContext()));
        echo " ";
        // line 32
        echo "
";
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    // line 33
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            echo " ";
            // line 34
            echo "  ";
            $macros["menus"] = $this;
            // line 35
            echo "  ";
            // line 36
            echo "  ";
            // line 37
            $context["menu_classes"] = [0 => ("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 38
($context["menu_name"] ?? null), 38, $this->source)))];
            // line 41
            echo "  ";
            // line 42
            echo "  ";
            // line 43
            $context["submenu_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 44
($context["menu_name"] ?? null), 44, $this->source))) . "__submenu")];
            // line 47
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 48
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 49
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 49), "setAttribute", [0 => "data-drupal-selector", 1 => "menu-main"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "> ";
                    // line 50
                    echo "    ";
                } else {
                    // line 51
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 51), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo "> ";
                    // line 52
                    echo "    ";
                }
                // line 53
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    echo "      ";
                    // line 55
                    echo "      ";
                    // line 56
                    $context["item_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 57
($context["menu_name"] ?? null), 57, $this->source))) . "__item"), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 58
$context["item"], "is_expanded", [], "any", false, false, true, 58)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 58, $this->source))) . "__item--expanded")) : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 59
$context["item"], "is_collapsed", [], "any", false, false, true, 59)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 59, $this->source))) . "__item--collapsed")) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 60
$context["item"], "in_active_trail", [], "any", false, false, true, 60)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 60, $this->source))) . "__item--active-trail")) : (""))];
                    // line 63
                    echo "      ";
                    // line 64
                    echo "      ";
                    // line 65
                    $context["link_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 66
($context["menu_name"] ?? null), 66, $this->source))) . "__link")];
                    // line 69
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 69), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo ">";
                    // line 70
                    echo "        ";
                    // line 71
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 73
$context["item"], "title", [], "any", false, false, true, 73), 73, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 74
$context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 75
$context["item"], "attributes", [], "any", false, false, true, 75), "removeClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 75), "addClass", [0 => ($context["link_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source)), "html", null, true);
                    // line 77
                    echo "
        ";
                    // line 78
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78)) {
                        // line 79
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 79), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 79, $context, $this->getSourceContext()));
                        echo " ";
                        // line 80
                        echo "        ";
                    }
                    // line 81
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "    </ul>
  ";
            }
            
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 83,  164 => 81,  161 => 80,  157 => 79,  155 => 78,  152 => 77,  150 => 75,  149 => 74,  148 => 73,  146 => 71,  144 => 70,  140 => 69,  138 => 66,  137 => 65,  135 => 64,  133 => 63,  131 => 60,  130 => 59,  129 => 58,  128 => 57,  127 => 56,  125 => 55,  123 => 54,  118 => 53,  115 => 52,  111 => 51,  108 => 50,  104 => 49,  101 => 48,  98 => 47,  96 => 44,  95 => 43,  93 => 42,  91 => 41,  89 => 38,  88 => 37,  86 => 36,  84 => 35,  81 => 34,  61 => 33,  53 => 32,  50 => 31,  47 => 23,  45 => 22,  42 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig", "/var/www/html/drupal_9_admin/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 33, "set" => 37, "if" => 47, "for" => 53);
        static $filters = array("clean_class" => 38, "escape" => 49);
        static $functions = array("link" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape'],
                ['link']
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
