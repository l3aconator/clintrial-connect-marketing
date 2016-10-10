<?php

/* partials/base.html.twig */
class __TwigTemplate_72ae577e9f3bd012d20c7a80b192b5495abf99ed93e3a64cee4a3f4edb5b8540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>
<body id=\"top\" class=\"";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
  <div id=\"sb-site\">
    ";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('showcase', $context, $blocks);
        // line 66
        echo "
    ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "
    ";
        // line 73
        $this->displayBlock('footer', $context, $blocks);
        // line 76
        echo "  </div>
    ";
        // line 77
        $this->displayBlock('bottom', $context, $blocks);
        // line 80
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
  ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
  <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

  <script src=\"https://use.typekit.net/zod6cpr.js\"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

  ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/toolkit.css", 1 => 100), "method");
        // line 18
        echo "
      ";
        // line 19
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 20
            echo "          ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 21
            echo "      ";
        }
        // line 22
        echo "  ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 27
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 28
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/function.js"), "method");
        // line 29
        echo "  ";
    }

    // line 36
    public function block_header($context, array $blocks = array())
    {
        // line 37
        echo "    <header class=\"header\">
      <div class=\"container\">
        <div class=\"main-logo clearfix\">
          <a href=\"";
        // line 40
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
            <img src=\"";
        // line 41
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/ClinTrialConnect.svg");
        echo "\" alt=\"ClinTrialConnect Logo\" />
          </a>
        </div>
        <div class=\"mobile-menu clearfix js-menu-activate\">
          <div class=\"pull-right\">
            <span class=\"menu-text\">Menu</span>
            <div class=\"menu-icon js-menu\">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div class=\"navbar pull-right js-menu-main\">
          ";
        // line 55
        $this->displayBlock('header_extra', $context, $blocks);
        // line 57
        echo "          ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 60
        echo "        </div>
      </div>
    </header>
    ";
    }

    // line 55
    public function block_header_extra($context, array $blocks = array())
    {
        // line 56
        echo "          ";
    }

    // line 57
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 58
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "          ";
    }

    // line 65
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        // line 68
        echo "    <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "    </section>
    ";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
    }

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        // line 74
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 74)->display($context);
        // line 75
        echo "    ";
    }

    // line 77
    public function block_bottom($context, array $blocks = array())
    {
        // line 78
        echo "      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 78,  257 => 77,  253 => 75,  250 => 74,  247 => 73,  242 => 69,  237 => 70,  235 => 69,  230 => 68,  227 => 67,  222 => 65,  218 => 59,  215 => 58,  212 => 57,  208 => 56,  205 => 55,  198 => 60,  195 => 57,  193 => 55,  176 => 41,  172 => 40,  167 => 37,  164 => 36,  160 => 29,  157 => 28,  154 => 27,  151 => 26,  148 => 25,  144 => 22,  141 => 21,  138 => 20,  136 => 19,  133 => 18,  130 => 17,  127 => 16,  119 => 30,  117 => 25,  111 => 23,  109 => 16,  101 => 11,  97 => 10,  94 => 9,  92 => 8,  84 => 7,  81 => 6,  78 => 5,  72 => 80,  70 => 77,  67 => 76,  65 => 73,  62 => 72,  60 => 67,  57 => 66,  55 => 65,  52 => 64,  50 => 36,  45 => 34,  42 => 33,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: 'en' }}">*/
/* <head>*/
/* {% block head %}*/
/*   <meta charset="utf-8" />*/
/*   <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*   {% include 'partials/metadata.html.twig' %}*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*   <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png') }}" />*/
/*   <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*   <script src="https://use.typekit.net/zod6cpr.js"></script>*/
/*   <script>try{Typekit.load({ async: true });}catch(e){}</script>*/
/* */
/*   {% block stylesheets %}*/
/*       {% do assets.addCss('theme://css-compiled/toolkit.css', 100) %}*/
/* */
/*       {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*           {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*       {% endif %}*/
/*   {% endblock %}*/
/*   {{ assets.css() }}*/
/* */
/*   {% block javascripts %}*/
/*       {% do assets.addJs('jquery', 101) %}*/
/*       {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}*/
/*       {% do assets.addJs('theme://js/function.js') %}*/
/*   {% endblock %}*/
/*   {{ assets.js() }}*/
/* */
/* {% endblock head %}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*   <div id="sb-site">*/
/*     {% block header %}*/
/*     <header class="header">*/
/*       <div class="container">*/
/*         <div class="main-logo clearfix">*/
/*           <a href="{{ base_url == '' ? '/' : base_url }}">*/
/*             <img src="{{ url('theme://images/ClinTrialConnect.svg') }}" alt="ClinTrialConnect Logo" />*/
/*           </a>*/
/*         </div>*/
/*         <div class="mobile-menu clearfix js-menu-activate">*/
/*           <div class="pull-right">*/
/*             <span class="menu-text">Menu</span>*/
/*             <div class="menu-icon js-menu">*/
/*               <span></span>*/
/*               <span></span>*/
/*               <span></span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="navbar pull-right js-menu-main">*/
/*           {% block header_extra %}*/
/*           {% endblock %}*/
/*           {% block header_navigation %}*/
/*             {% include 'partials/navigation.html.twig' %}*/
/*           {% endblock %}*/
/*         </div>*/
/*       </div>*/
/*     </header>*/
/*     {% endblock %}*/
/* */
/*     {% block showcase %}{% endblock %}*/
/* */
/*     {% block body %}*/
/*     <section id="body" class="{{ class }}">*/
/*       {% block content %}{% endblock %}*/
/*     </section>*/
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*       {% include 'partials/footer.html.twig' %}*/
/*     {% endblock %}*/
/*   </div>*/
/*     {% block bottom %}*/
/*       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
