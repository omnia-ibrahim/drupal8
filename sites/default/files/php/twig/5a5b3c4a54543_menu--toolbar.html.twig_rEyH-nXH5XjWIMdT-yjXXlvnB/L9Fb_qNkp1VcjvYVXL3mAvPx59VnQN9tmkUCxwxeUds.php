<?php

/* core/themes/stable/templates/navigation/menu--toolbar.html.twig */
class __TwigTemplate_141c9992e95049b83c321703ebb80b76fd76e9689163b934f585c3528030a359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dcb8be9e406e002e89f8af72f7fe4a5cffa30c3e3ab25d118bc8f322ff4032b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcb8be9e406e002e89f8af72f7fe4a5cffa30c3e3ab25d118bc8f322ff4032b->enter($__internal_0dcb8be9e406e002e89f8af72f7fe4a5cffa30c3e3ab25d118bc8f322ff4032b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/navigation/menu--toolbar.html.twig"));

        $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 39);
        $filters = array();
        $functions = array("link" => 47);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
        
        $__internal_0dcb8be9e406e002e89f8af72f7fe4a5cffa30c3e3ab25d118bc8f322ff4032b->leave($__internal_0dcb8be9e406e002e89f8af72f7fe4a5cffa30c3e3ab25d118bc8f322ff4032b_prof);

    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f50ec1f77b6c64d9713768934a044efca6631986bc3f176c15b2177f7712767f = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
            $__internal_f50ec1f77b6c64d9713768934a044efca6631986bc3f176c15b2177f7712767f->enter($__internal_f50ec1f77b6c64d9713768934a044efca6631986bc3f176c15b2177f7712767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "toolbar-menu"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 35
                    echo "      <ul class=\"toolbar-menu\">
    ";
                }
                // line 37
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "      ";
                    // line 39
                    $context["classes"] = array(0 => "menu-item", 1 => (($this->getAttribute(                    // line 41
$context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 42
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 43
$context["item"], "in_active_trail", array())) ? ("menu-item--active-trail") : ("")));
                    // line 46
                    echo "      <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                    echo ">
        ";
                    // line 47
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
        ";
                    // line 48
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 49
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                        echo "
        ";
                    }
                    // line 51
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "    </ul>
  ";
            }
            
            $__internal_f50ec1f77b6c64d9713768934a044efca6631986bc3f176c15b2177f7712767f->leave($__internal_f50ec1f77b6c64d9713768934a044efca6631986bc3f176c15b2177f7712767f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/navigation/menu--toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 53,  126 => 51,  120 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 43,  106 => 42,  105 => 41,  104 => 39,  102 => 38,  97 => 37,  93 => 35,  87 => 33,  84 => 32,  81 => 31,  78 => 30,  61 => 29,  51 => 27,  48 => 22,  46 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/navigation/menu--toolbar.html.twig", "/var/www/html/drupal_8/core/themes/stable/templates/navigation/menu--toolbar.html.twig");
    }
}
