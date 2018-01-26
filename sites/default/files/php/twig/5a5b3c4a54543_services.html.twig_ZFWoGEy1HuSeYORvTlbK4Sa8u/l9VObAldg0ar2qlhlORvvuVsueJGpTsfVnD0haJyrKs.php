<?php

/* @webprofiler/Collector/services.html.twig */
class __TwigTemplate_3dbd4f0ade56a7c73f67ff327b7e6801e2f3c9934ef06c873a749e8442b3390d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d544ec2bf80d17d73391769f04dba5c9fe97b6adafce65baf885f7eb1198e1e0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d544ec2bf80d17d73391769f04dba5c9fe97b6adafce65baf885f7eb1198e1e0->enter($__internal_d544ec2bf80d17d73391769f04dba5c9fe97b6adafce65baf885f7eb1198e1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/services.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 22);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'default'),
                array('url')
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

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d544ec2bf80d17d73391769f04dba5c9fe97b6adafce65baf885f7eb1198e1e0->leave($__internal_d544ec2bf80d17d73391769f04dba5c9fe97b6adafce65baf885f7eb1198e1e0_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5b418a2be0c7bfb923d448a8c51c68d83708e9f13eebe29d9c6edffd235ee3b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b418a2be0c7bfb923d448a8c51c68d83708e9f13eebe29d9c6edffd235ee3b->enter($__internal_a5b418a2be0c7bfb923d448a8c51c68d83708e9f13eebe29d9c6edffd235ee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "services")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Services")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Services")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getInitializedServicesCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Initialized")));
        echo "</b>
        <span>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getInitializedServicesCount", array()), "html", null, true));
        echo " (";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getInitializedServicesWithoutWebprofilerCount", array()), "html", null, true));
        echo "
            )</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Available")));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getServicesCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_a5b418a2be0c7bfb923d448a8c51c68d83708e9f13eebe29d9c6edffd235ee3b->leave($__internal_a5b418a2be0c7bfb923d448a8c51c68d83708e9f13eebe29d9c6edffd235ee3b_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af299de1a03f952ba3727595b7e861e5469901581448ff74f88d9d0c955d7fb1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_af299de1a03f952ba3727595b7e861e5469901581448ff74f88d9d0c955d7fb1->enter($__internal_af299de1a03f952ba3727595b7e861e5469901581448ff74f88d9d0c955d7fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"services\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Services")));
        echo "</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"services\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"http_middleware\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"services\">services</label></li>
                <li><label class=\"tabs__label\" for=\"http_middleware\">middleware</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <form class=\"panel__toolbar\">
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-sid\" class=\"js--live-filter\" placeholder=\"";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID")));
        echo "\" type=\"text\"/>
                            <label for=\"edit-sid\" class=\"panel__filter-label\">";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID")));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-class\" class=\"js--live-filter\" placeholder=\"";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Class")));
        echo "\" type=\"text\"/>
                            <label for=\"edit-class\" class=\"panel__filter-label\">";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Class")));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-tags\" class=\"js--live-filter\" placeholder=\"";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tags")));
        echo "\" type=\"text\"/>
                            <label for=\"edit-tags\" class=\"panel__filter-label\">";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tags")));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--select\">
                            <select id=\"edit-initialized\" class=\"js--live-filter\">
                                <option value=\"\">";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Any")));
        echo "</option>
                                <option value=\"1\">";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Yes")));
        echo "</option>
                                <option value=\"0\">";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No")));
        echo "</option>
                            </select>
                            <label for=\"edit-initialized\" class=\"panel__filter-label\">";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Initialized")));
        echo "</label>
                        </div>
                    </form>

                    <% _.each( data.services, function( item, key ){ %>

                    <% clazz = Drupal.webprofiler.helpers.classLink({\"file\" : item.value.file, \"class\" :
                    item.value.class}) %>
                    <% depends = _.map(item.outEdges, function(el) { return el.id; }).join(', ') %>
                    <% tags = _.map(item.value.tags, function(el, key) { return key; }).join(', ') %>

                    <div class=\"panel__container\"
                         data-wp-sid=\"<%- key %>\"
                         data-wp-class=\"<%- item.value.class %>\"
                         data-wp-tags=\"<%- tags %>\"
                         data-wp-initialized=\"<%- (item.initialized) ? '1' : '0' %>\">

                        <div class=\"panel__expand-header\">
                            <ul class=\"list--inline\">
                                <li>
                                    <b>";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID")));
        echo "</b> <%- key %>
                                </li>
                                <% if (clazz) { %>
                                <li>
                                    <b>";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Class")));
        echo "</b> <%= clazz %>
                                </li>
                                <% } %>
                                <li>
                                    <b>";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Initialized")));
        echo "</b> <%- (item.initialized) ? '";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Yes")));
        echo "' : '";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No")));
        echo "' %>
                                </li>
                                <% if ( item.time ) { %>
                                    <li>
                                        <b>";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Count")));
        echo "</b> <%- item.time.count %>
                                    </li>
                                    <li>
                                        <b>";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Time")));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(item.time.time) %>
                                    </li>
                                <% } %>
                            </ul>
                            <% if ( tags.length > 0 || depends.length > 0 ) { %>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 99
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info")));
        echo "</div>
                            <% } %>
                        </div>

                        <% if ( tags.length > 0 || depends.length > 0 ) { %>
                        <div class=\"panel__expand-content\">
                            <div class=\"wp-query-arguments\">
                                <table class=\"table--duo\">
                                    <tr>
                                        <th>";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tags")));
        echo "</th>
                                        <td><%- (tags) ? tags : '-' %></td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Depends")));
        echo "</th>
                                        <td><%- (depends) ? depends : '-' %></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <% } %>
                    </div>
                    <% }); %>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table>
                            <thead>
                            <tr>
                                <th>";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("id")));
        echo "</th>
                                <th>";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("class")));
        echo "</th>
                                <th>";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("priority")));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.http_middleware, function( item, key ){ %>
                            <% clazz = Drupal.webprofiler.helpers.classLink(item.value.handle_method) %>
                            <tr>
                                <td><%- key %></td>
                                <td><%= clazz %></td>
                                <td><%- item.value.tags.http_middleware[0].priority %></td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </script>
";
        
        $__internal_af299de1a03f952ba3727595b7e861e5469901581448ff74f88d9d0c955d7fb1->leave($__internal_af299de1a03f952ba3727595b7e861e5469901581448ff74f88d9d0c955d7fb1_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/services.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  314 => 130,  310 => 129,  306 => 128,  287 => 112,  280 => 108,  268 => 99,  260 => 94,  254 => 91,  243 => 87,  236 => 83,  229 => 79,  206 => 59,  201 => 57,  197 => 56,  193 => 55,  186 => 51,  182 => 50,  176 => 47,  172 => 46,  166 => 43,  162 => 42,  146 => 29,  143 => 28,  137 => 27,  127 => 23,  123 => 22,  119 => 20,  113 => 17,  109 => 16,  100 => 12,  96 => 11,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 27,  50 => 26,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/services.html.twig", "/var/www/html/drupal_8/modules/contrib/devel/webprofiler/templates/Collector/services.html.twig");
    }
}
