<?php

/* core/themes/bartik/templates/block--system-menu-block.html.twig */
class __TwigTemplate_c09377006a19f1626a55f43a6019f2e26ff8859c96706cbac36770cde5499837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--system-menu-block.html.twig", "core/themes/bartik/templates/block--system-menu-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0977933f35eb2a423b3511f61b3f3a75e9fef3e90cb3bdc67e401c61c48b6544 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_0977933f35eb2a423b3511f61b3f3a75e9fef3e90cb3bdc67e401c61c48b6544->enter($__internal_0977933f35eb2a423b3511f61b3f3a75e9fef3e90cb3bdc67e401c61c48b6544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/block--system-menu-block.html.twig"));

        $tags = array("set" => 10, "trans" => 17);
        $filters = array("clean_id" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'trans'),
                array('clean_id'),
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

        // line 10
        $context["show_anchor"] = ("show-" . \Drupal\Component\Utility\Html::getId($this->getAttribute(($context["attributes"] ?? null), "id", array())));
        // line 11
        $context["hide_anchor"] = ("hide-" . \Drupal\Component\Utility\Html::getId($this->getAttribute(($context["attributes"] ?? null), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0977933f35eb2a423b3511f61b3f3a75e9fef3e90cb3bdc67e401c61c48b6544->leave($__internal_0977933f35eb2a423b3511f61b3f3a75e9fef3e90cb3bdc67e401c61c48b6544_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_b6d202de5a8327259bc65ec3bfa059e2c8efbb5581ff538fd2b8361878cd9086 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d202de5a8327259bc65ec3bfa059e2c8efbb5581ff538fd2b8361878cd9086->enter($__internal_b6d202de5a8327259bc65ec3bfa059e2c8efbb5581ff538fd2b8361878cd9086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
    ";
        // line 15
        echo "    <div class=\"menu-toggle-target menu-toggle-target-show\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["show_anchor"] ?? null), "html", null, true));
        echo "\"></div>
    <div class=\"menu-toggle-target\" id=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["hide_anchor"] ?? null), "html", null, true));
        echo "\"></div>
    <a class=\"menu-toggle\" href=\"#";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["show_anchor"] ?? null), "html", null, true));
        echo "\">";
        echo t("Show &mdash; @configuration.label", array("@configuration.label" => $this->getAttribute(($context["configuration"] ?? null), "label", array()), ));
        echo "</a>
    <a class=\"menu-toggle menu-toggle--hide\" href=\"#";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["hide_anchor"] ?? null), "html", null, true));
        echo "\">";
        echo t("Hide &mdash; @configuration.label", array("@configuration.label" => $this->getAttribute(($context["configuration"] ?? null), "label", array()), ));
        echo "</a>
    ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  </div>
";
        
        $__internal_b6d202de5a8327259bc65ec3bfa059e2c8efbb5581ff538fd2b8361878cd9086->leave($__internal_b6d202de5a8327259bc65ec3bfa059e2c8efbb5581ff538fd2b8361878cd9086_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  89 => 18,  83 => 17,  79 => 16,  74 => 15,  69 => 13,  63 => 12,  56 => 1,  54 => 11,  52 => 10,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/block--system-menu-block.html.twig", "/var/www/html/drupal_8/core/themes/bartik/templates/block--system-menu-block.html.twig");
    }
}
