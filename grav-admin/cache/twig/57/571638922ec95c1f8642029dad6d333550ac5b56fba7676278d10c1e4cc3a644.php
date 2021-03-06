<?php

/* modular.html.twig */
class __TwigTemplate_934b5a34b3e089f7abbecaee52621fdbbe7d93ce0607a18a04b2f7e71cbe0ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'bottom' => array($this, 'block_bottom'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((isset($context["show_onpage_menu"]) ? $context["show_onpage_menu"] : null)) {
            // line 8
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/singlePageNav.min.js"), "method");
            // line 9
            echo "    ";
        }
        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_bottom($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    ";
        // line 16
        if ((isset($context["show_onpage_menu"]) ? $context["show_onpage_menu"] : null)) {
            // line 17
            echo "        <script>
        // singlePageNav initialization & configuration
        \$('#navbar').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    ";
        }
    }

    // line 29
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if ((isset($context["show_onpage_menu"]) ? $context["show_onpage_menu"] : null)) {
            // line 31
            echo "        <ul class=\"nav-list\">
            <li>
              <a class=\"nav-list-item\" href=\"#about\">About</a>
            </li>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 36
                echo "            ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 37
                echo "            <li class=\"";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\"><a class=\"nav-list-item\" href=\"#";
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 40
                echo "            <li>
                <a class=\"nav-list-item\" href=\"";
                // line 41
                echo $this->getAttribute($context["mitem"], "url", array());
                echo "\">
                    ";
                // line 42
                echo $this->getAttribute($context["mitem"], "text", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            <li>
              <div class=\"btn-group login-btn-group\" role=\"group\" aria-label=\"Button Login Group\">
                  <a href=\"#\" class=\"btn btn-sm btn-primary\">Patient Login</a>
                  <a href=\"#\" class=\"btn btn-sm btn-default\">Research Site Login</a>
              </div>
            </li>
        </ul>
    ";
        } else {
            // line 54
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 61
            echo "        <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
            echo "\"></div>
        ";
            // line 62
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
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
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 4,  166 => 62,  161 => 61,  157 => 60,  152 => 59,  149 => 58,  141 => 54,  131 => 46,  121 => 42,  117 => 41,  114 => 40,  109 => 39,  96 => 37,  93 => 36,  89 => 35,  83 => 31,  80 => 30,  77 => 29,  63 => 17,  61 => 16,  56 => 15,  53 => 14,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  30 => 1,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}*/
/* {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}*/
/* */
/* {% block javascripts %}*/
/*     {% if show_onpage_menu %}*/
/*         {% do assets.add('theme://js/singlePageNav.min.js') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block bottom %}*/
/*     {{ parent() }}*/
/*     {% if show_onpage_menu %}*/
/*         <script>*/
/*         // singlePageNav initialization & configuration*/
/*         $('#navbar').singlePageNav({*/
/*             offset: $('#header').outerHeight(),*/
/*             filter: ':not(.external)',*/
/*             updateHash: true,*/
/*             currentClass: 'active'*/
/*         });*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block header_navigation %}*/
/*     {% if show_onpage_menu %}*/
/*         <ul class="nav-list">*/
/*             <li>*/
/*               <a class="nav-list-item" href="#about">About</a>*/
/*             </li>*/
/*         {% for module in page.collection() %}*/
/*             {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}*/
/*             <li class="{{ current_module }}"><a class="nav-list-item" href="#{{ _self.pageLinkName(module.menu) }}">{{ module.menu }}</a></li>*/
/*         {% endfor %}*/
/*         {% for mitem in site.menu %}*/
/*             <li>*/
/*                 <a class="nav-list-item" href="{{ mitem.url }}">*/
/*                     {{ mitem.text }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*             <li>*/
/*               <div class="btn-group login-btn-group" role="group" aria-label="Button Login Group">*/
/*                   <a href="#" class="btn btn-sm btn-primary">Patient Login</a>*/
/*                   <a href="#" class="btn btn-sm btn-default">Research Site Login</a>*/
/*               </div>*/
/*             </li>*/
/*         </ul>*/
/*     {% else %}*/
/*         {{  parent() }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {{ page.content }}*/
/*     {% for module in page.collection() %}*/
/*         <div id="{{ _self.pageLinkName(module.menu) }}"></div>*/
/*         {{ module.content }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
