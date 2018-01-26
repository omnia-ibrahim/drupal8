<?php

/* @classy/block/block--system-menu-block.html.twig */
class __TwigTemplate_bcf730392e18d13056f9a940f0627ea8e84e3406b2877b6391fdc398a09c6201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60ba19c346759990c990dabbe23c42d929b1789b48949cfd17c52e1a1225389c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ba19c346759990c990dabbe23c42d929b1789b48949cfd17c52e1a1225389c->enter($__internal_60ba19c346759990c990dabbe23c42d929b1789b48949cfd17c52e1a1225389c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@classy/block/block--system-menu-block.html.twig"));

        $tags = array("set" => 35, "if" => 45, "block" => 53);
        $filters = array("clean_class" => 39, "clean_id" => 42, "without" => 43);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'clean_id', 'without'),
                array()
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

        // line 35
        $context["classes"] = array(0 => "block", 1 => "block-menu", 2 => "navigation", 3 => ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 39
($context["derivative_plugin_id"] ?? null))));
        // line 42
        $context["heading_id"] = ($this->getAttribute(($context["attributes"] ?? null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 43
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  ";
        // line 45
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", array())) {
            // line 46
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "visually-hidden"), "method");
            // line 47
            echo "  ";
        }
        // line 48
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  <h2";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "setAttribute", array(0 => "id", 1 => ($context["heading_id"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", array()), "html", null, true));
        echo "</h2>
  ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 53
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "</nav>
";
        
        $__internal_60ba19c346759990c990dabbe23c42d929b1789b48949cfd17c52e1a1225389c->leave($__internal_60ba19c346759990c990dabbe23c42d929b1789b48949cfd17c52e1a1225389c_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_d991067990a81da136fb0871034e1c79da147990b8b0154dfbed782cdd7bc02e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d991067990a81da136fb0871034e1c79da147990b8b0154dfbed782cdd7bc02e->enter($__internal_d991067990a81da136fb0871034e1c79da147990b8b0154dfbed782cdd7bc02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 54
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        
        $__internal_d991067990a81da136fb0871034e1c79da147990b8b0154dfbed782cdd7bc02e->leave($__internal_d991067990a81da136fb0871034e1c79da147990b8b0154dfbed782cdd7bc02e_prof);

    }

    public function getTemplateName()
    {
        return "@classy/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 54,  95 => 53,  87 => 56,  84 => 53,  79 => 50,  73 => 49,  68 => 48,  65 => 47,  62 => 46,  59 => 45,  52 => 43,  50 => 42,  48 => 39,  47 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@classy/block/block--system-menu-block.html.twig", "/var/www/html/drupal_8/core/themes/classy/templates/block/block--system-menu-block.html.twig");
    }
}
