<?php

/* modular/hero.html.twig */
class __TwigTemplate_97d71f845fa6bb1f1df304cb1f22b80bf8def0203278fafc4fc7345a1c16d9db extends Twig_Template
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
        // line 1
        echo "<div class=\"modular-row hero ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\" style=\"background-image: url( ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "backgroundImage", array()), array(), "array"), "url", array());
        echo " )\">
  <div class=\"container section-pad\">
    <div class=\"row\">
      <div class=\"col-md-6 col-sm-6\">
        <h1 class=\"text-white main-heading\">";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
      </div>
      <div class=\"col-md-3 offset-col-md-3\">
      </div>
      <div class=\"col-md-3 col-sm-6\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ctaBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cta"]) {
            // line 11
            echo "          <div class=\"info-box text-center\">
            ";
            // line 12
            if ($this->getAttribute($context["cta"], "header", array())) {
                // line 13
                echo "              <h3 class=\"text-white\">";
                echo $this->getAttribute($context["cta"], "header", array());
                echo "</h3>
            ";
            }
            // line 15
            echo "            <a class=\"btn btn-";
            echo $this->getAttribute($context["cta"], "class", array());
            echo "\" href=\"";
            echo $this->getAttribute($context["cta"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["cta"], "button", array());
            echo "</a>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </div>
    </div>
  </div>
  
  <div class=\"sub-hero\" id=\"about\">
      <div class=\"container\">
        <div class=\"light-gray-box\">
          <div class=\"content\">
            ";
        // line 26
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
          </div>
        </div>
      </div>
    </div>
  
</div>";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  66 => 18,  52 => 15,  46 => 13,  44 => 12,  41 => 11,  37 => 10,  29 => 5,  19 => 1,);
    }
}
/* <div class="modular-row hero {{ page.header.class}}" style="background-image: url( {{ page.media[page.header.backgroundImage].url }} )">*/
/*   <div class="container section-pad">*/
/*     <div class="row">*/
/*       <div class="col-md-6 col-sm-6">*/
/*         <h1 class="text-white main-heading">{{ page.title }}</h1>*/
/*       </div>*/
/*       <div class="col-md-3 offset-col-md-3">*/
/*       </div>*/
/*       <div class="col-md-3 col-sm-6">*/
/*         {% for cta in page.header.ctaBlock %}*/
/*           <div class="info-box text-center">*/
/*             {% if cta.header %}*/
/*               <h3 class="text-white">{{cta.header}}</h3>*/
/*             {% endif %}*/
/*             <a class="btn btn-{{cta.class}}" href="{{cta.link}}">{{cta.button}}</a>*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="sub-hero" id="about">*/
/*       <div class="container">*/
/*         <div class="light-gray-box">*/
/*           <div class="content">*/
/*             {{ page.content }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   */
/* </div>*/
