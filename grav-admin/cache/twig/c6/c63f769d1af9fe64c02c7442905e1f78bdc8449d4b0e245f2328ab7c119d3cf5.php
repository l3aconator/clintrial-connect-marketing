<?php

/* modular/features.html.twig */
class __TwigTemplate_aa81d9c4eea22a1ea28a60220b9d3edfe4e7f63a73bbd8a9e46b246940333824 extends Twig_Template
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
        echo "<section class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
  
  <img class=\"web-app-image\" src=\"";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "webAppImage", array()), array(), "array"), "url", array());
        echo "\" alt=\"A screenshot of the dashboard for ClinTrialConnect\" />
  
  <div class=\"container section-pad\">
    <h2 class=\"feature-main-heading text-center text-white\">";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
    <div class=\"features-list\">
      <div class=\"row\">
        <div class=\"col-md-4 offset-col-md-4\">
          
        </div>
      
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 14
            echo "       <div class=\"feature-list-item col-md-4\">
         
        ";
            // line 16
            if ($this->getAttribute($context["feature"], "icon", array())) {
                // line 17
                echo "         <div class=\"feature-icon-box\">
          <i class=\"feature-icon typcn typcn-";
                // line 18
                echo $this->getAttribute($context["feature"], "icon", array());
                echo "\"></i>
         </div>
          <div class=\"feature-content icon\">
        ";
            } else {
                // line 22
                echo "            
          <div class=\"feature-content text-center\">
          ";
            }
            // line 25
            echo "
            ";
            // line 26
            if ($this->getAttribute($context["feature"], "header", array())) {
                // line 27
                echo "              <h4 class=\"feature-heading text-center\">";
                echo $this->getAttribute($context["feature"], "header", array());
                echo "</h4>
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 31
                echo "              <p class=\"feature-text text-center\">";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
            ";
            }
            // line 33
            echo "
          </div>
         </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "         
        </div>
      </div>
    </div>
    
    <div class=\"cta-block\">
      <div class=\"container\">
        <div class=\"info-box\">
          <div class=\"row\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ctaBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cta"]) {
            // line 47
            echo "              <div class=\"col-md-6 text-center\">
                ";
            // line 48
            if ($this->getAttribute($context["cta"], "header", array())) {
                // line 49
                echo "                  <h3 class=\"text-white\">";
                echo $this->getAttribute($context["cta"], "header", array());
                echo "</h3>
                ";
            }
            // line 51
            echo "                <a class=\"btn btn-";
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
        // line 54
        echo "          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 54,  123 => 51,  117 => 49,  115 => 48,  112 => 47,  108 => 46,  97 => 37,  88 => 33,  82 => 31,  80 => 30,  77 => 29,  71 => 27,  69 => 26,  66 => 25,  61 => 22,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  41 => 13,  31 => 6,  25 => 3,  19 => 1,);
    }
}
/* <section class="modular-row features {{ page.header.class}}">*/
/*   */
/*   <img class="web-app-image" src="{{ page.media[page.header.webAppImage].url }}" alt="A screenshot of the dashboard for ClinTrialConnect" />*/
/*   */
/*   <div class="container section-pad">*/
/*     <h2 class="feature-main-heading text-center text-white">{{ page.title }}</h2>*/
/*     <div class="features-list">*/
/*       <div class="row">*/
/*         <div class="col-md-4 offset-col-md-4">*/
/*           */
/*         </div>*/
/*       */
/*       {% for feature in page.header.features %}*/
/*        <div class="feature-list-item col-md-4">*/
/*          */
/*         {% if feature.icon %}*/
/*          <div class="feature-icon-box">*/
/*           <i class="feature-icon typcn typcn-{{ feature.icon }}"></i>*/
/*          </div>*/
/*           <div class="feature-content icon">*/
/*         {% else %}*/
/*             */
/*           <div class="feature-content text-center">*/
/*           {% endif %}*/
/* */
/*             {% if feature.header %}*/
/*               <h4 class="feature-heading text-center">{{ feature.header }}</h4>*/
/*             {% endif %}*/
/* */
/*             {% if feature.text %}*/
/*               <p class="feature-text text-center">{{ feature.text }}</p>*/
/*             {% endif %}*/
/* */
/*           </div>*/
/*          </div>*/
/*          {% endfor %}*/
/*          */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     <div class="cta-block">*/
/*       <div class="container">*/
/*         <div class="info-box">*/
/*           <div class="row">*/
/*             {% for cta in page.header.ctaBlock %}*/
/*               <div class="col-md-6 text-center">*/
/*                 {% if cta.header %}*/
/*                   <h3 class="text-white">{{cta.header}}</h3>*/
/*                 {% endif %}*/
/*                 <a class="btn btn-{{cta.class}}" href="{{cta.link}}">{{cta.button}}</a>*/
/*               </div>*/
/*              {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     */
/*   </div>*/
/* </section>*/
/* */
