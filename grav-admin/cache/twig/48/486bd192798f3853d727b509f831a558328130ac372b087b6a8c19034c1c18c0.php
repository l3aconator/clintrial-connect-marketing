<?php

/* modular/contact-form.html.twig */
class __TwigTemplate_7286a63354da19d1857e7684fa908de71bd62c00f10329e2492ef282acaf855a extends Twig_Template
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
        echo "<section class=\"modular-row contact section-pad ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
  <div class=\"container\">
    
    <h2 class=\"text-center\">";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
    
    <form class=\"contact-form\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"form-group\">
            <label for=\"name\">Email address</label>
            <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Enter your name…\">
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"form-group\">
            <label for=\"Email\">Email address</label>
            <input type=\"email\" class=\"form-control input-lg\" placeholder=\"Enter your email…\">
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label for=\"name\">Message</label>
        <textarea class=\"form-control input-lg\" placeholder=\"Enter your message…\"></textarea>
      </div>
      <input class=\"btn btn-success\" type=\"submit\" />
    </form>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/contact-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  19 => 1,);
    }
}
/* <section class="modular-row contact section-pad {{ page.header.class}}">*/
/*   <div class="container">*/
/*     */
/*     <h2 class="text-center">{{ page.title }}</h2>*/
/*     */
/*     <form class="contact-form">*/
/*       <div class="row">*/
/*         <div class="col-md-6">*/
/*           <div class="form-group">*/
/*             <label for="name">Email address</label>*/
/*             <input type="text" class="form-control input-lg" placeholder="Enter your name…">*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*           <div class="form-group">*/
/*             <label for="Email">Email address</label>*/
/*             <input type="email" class="form-control input-lg" placeholder="Enter your email…">*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label for="name">Message</label>*/
/*         <textarea class="form-control input-lg" placeholder="Enter your message…"></textarea>*/
/*       </div>*/
/*       <input class="btn btn-success" type="submit" />*/
/*     </form>*/
/*   </div>*/
/* </section>*/
