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
        // line 55
        echo "</head>
<body id=\"top\" class=\"";
        // line 56
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
  <div id=\"sb-site\">
    ";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 93
        echo "
    ";
        // line 94
        $this->displayBlock('showcase', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->displayBlock('footer', $context, $blocks);
        // line 105
        echo "  </div>
    ";
        // line 106
        $this->displayBlock('bottom', $context, $blocks);
        // line 109
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
\t
  <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"";
        // line 17
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-57x57.png");
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 18
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-114x114.png");
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 19
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-72x72.png");
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 20
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-144x144.png");
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"60x60\" href=\"";
        // line 21
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-60x60.png");
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"120x120\" href=\"";
        // line 22
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-120x120.png");
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"76x76\" href=\"";
        // line 23
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-76x76.png");
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"152x152\" href=\"";
        // line 24
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/apple-touch-icon-152x152.png");
        echo "\" />
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 25
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-196x196.png");
        echo "\" sizes=\"196x196\" />
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 26
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-96x96.png");
        echo "\" sizes=\"96x96\" />
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 27
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-32x32.png");
        echo "\" sizes=\"32x32\" />
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 28
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-16x16.png");
        echo "\" sizes=\"16x16\" />
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 29
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon-128.png");
        echo "\" sizes=\"128x128\" />
  <meta name=\"application-name\" content=\"&nbsp;\"/>
  <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\" />
  <meta name=\"msapplication-TileImage\" content=\"";
        // line 32
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/mstile-144x144.png");
        echo "\" />
  <meta name=\"msapplication-square70x70logo\" content=\"";
        // line 33
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/mstile-70x70.png");
        echo "\" />
  <meta name=\"msapplication-square150x150logo\" content=\"";
        // line 34
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/mstile-150x150.png");
        echo "\" />
  <meta name=\"msapplication-wide310x150logo\" content=\"";
        // line 35
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/mstile-310x150.png");
        echo "\" />
  <meta name=\"msapplication-square310x310logo\" content=\"";
        // line 36
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/mstile-310x310.png");
        echo "\" />

  ";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

  ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 38
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 39
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/toolkit.css", 1 => 100), "method");
        // line 40
        echo "
      ";
        // line 41
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 42
            echo "          ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 43
            echo "      ";
        }
        // line 44
        echo "  ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 49
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 50
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/function.js"), "method");
        // line 51
        echo "  ";
    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "    <header class=\"header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"main-logo\">
              <a href=\"";
        // line 64
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
                <img src=\"";
        // line 65
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/ClinTrialConnect.svg");
        echo "\" alt=\"ClinTrialConnect Logo\" />
              </a>
              </div>
          </div>
          <div class=\"col-md-9\">
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
        // line 81
        $this->displayBlock('header_extra', $context, $blocks);
        // line 83
        echo "              ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 86
        echo "            </div>
          </div>
        
        </div>
      </div>
    </header>
    ";
    }

    // line 81
    public function block_header_extra($context, array $blocks = array())
    {
        // line 82
        echo "              ";
    }

    // line 83
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 84
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 84)->display($context);
        // line 85
        echo "              ";
    }

    // line 94
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        // line 97
        echo "    <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "    </section>
    ";
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        // line 103
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 103)->display($context);
        // line 104
        echo "    ";
    }

    // line 106
    public function block_bottom($context, array $blocks = array())
    {
        // line 107
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
        return array (  346 => 107,  343 => 106,  339 => 104,  336 => 103,  333 => 102,  328 => 98,  323 => 99,  321 => 98,  316 => 97,  313 => 96,  308 => 94,  304 => 85,  301 => 84,  298 => 83,  294 => 82,  291 => 81,  281 => 86,  278 => 83,  276 => 81,  257 => 65,  253 => 64,  246 => 59,  243 => 58,  239 => 51,  236 => 50,  233 => 49,  230 => 48,  227 => 47,  223 => 44,  220 => 43,  217 => 42,  215 => 41,  212 => 40,  209 => 39,  206 => 38,  198 => 52,  196 => 47,  190 => 45,  188 => 38,  183 => 36,  179 => 35,  175 => 34,  171 => 33,  167 => 32,  161 => 29,  157 => 28,  153 => 27,  149 => 26,  145 => 25,  141 => 24,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  101 => 11,  97 => 10,  94 => 9,  92 => 8,  84 => 7,  81 => 6,  78 => 5,  72 => 109,  70 => 106,  67 => 105,  65 => 102,  62 => 101,  60 => 96,  57 => 95,  55 => 94,  52 => 93,  50 => 58,  45 => 56,  42 => 55,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
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
/* 	*/
/*   <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/*   <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ url('theme://images/apple-touch-icon-57x57.png') }}" />*/
/*   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('theme://images/apple-touch-icon-114x114.png') }}" />*/
/*   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('theme://images/apple-touch-icon-72x72.png') }}" />*/
/*   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('theme://images/apple-touch-icon-144x144.png') }}" />*/
/*   <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ url('theme://images/apple-touch-icon-60x60.png') }}" />*/
/*   <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ url('theme://images/apple-touch-icon-120x120.png') }}" />*/
/*   <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ url('theme://images/apple-touch-icon-76x76.png') }}" />*/
/*   <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('theme://images/apple-touch-icon-152x152.png') }}" />*/
/*   <link rel="icon" type="image/png" href="{{ url('theme://images/favicon-196x196.png') }}" sizes="196x196" />*/
/*   <link rel="icon" type="image/png" href="{{ url('theme://images/favicon-96x96.png') }}" sizes="96x96" />*/
/*   <link rel="icon" type="image/png" href="{{ url('theme://images/favicon-32x32.png') }}" sizes="32x32" />*/
/*   <link rel="icon" type="image/png" href="{{ url('theme://images/favicon-16x16.png') }}" sizes="16x16" />*/
/*   <link rel="icon" type="image/png" href="{{ url('theme://images/favicon-128.png') }}" sizes="128x128" />*/
/*   <meta name="application-name" content="&nbsp;"/>*/
/*   <meta name="msapplication-TileColor" content="#FFFFFF" />*/
/*   <meta name="msapplication-TileImage" content="{{ url('theme://images/mstile-144x144.png') }}" />*/
/*   <meta name="msapplication-square70x70logo" content="{{ url('theme://images/mstile-70x70.png') }}" />*/
/*   <meta name="msapplication-square150x150logo" content="{{ url('theme://images/mstile-150x150.png') }}" />*/
/*   <meta name="msapplication-wide310x150logo" content="{{ url('theme://images/mstile-310x150.png') }}" />*/
/*   <meta name="msapplication-square310x310logo" content="{{ url('theme://images/mstile-310x310.png') }}" />*/
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
/*         <div class="row">*/
/*           <div class="col-md-3">*/
/*             <div class="main-logo">*/
/*               <a href="{{ base_url == '' ? '/' : base_url }}">*/
/*                 <img src="{{ url('theme://images/ClinTrialConnect.svg') }}" alt="ClinTrialConnect Logo" />*/
/*               </a>*/
/*               </div>*/
/*           </div>*/
/*           <div class="col-md-9">*/
/*             <div class="mobile-menu clearfix js-menu-activate">*/
/*               <div class="pull-right">*/
/*                 <span class="menu-text">Menu</span>*/
/*                 <div class="menu-icon js-menu">*/
/*                   <span></span>*/
/*                   <span></span>*/
/*                   <span></span>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="navbar pull-right js-menu-main">*/
/*               {% block header_extra %}*/
/*               {% endblock %}*/
/*               {% block header_navigation %}*/
/*                 {% include 'partials/navigation.html.twig' %}*/
/*               {% endblock %}*/
/*             </div>*/
/*           </div>*/
/*         */
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
