<?php

/* partials/footer.html.twig */
class __TwigTemplate_5b9772a71880f49171fd2036114439cb3dce09c6845638fa3c21772b14c15844 extends Twig_Template
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
        echo "<footer class=\"footer\">
  <div class=\"container section-pad\">
    <div class=\"footer-logo\">
      <img class=\"center-block\" src=\"";
        // line 4
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/ClinTrialConnect.svg");
        echo "\" alt=\"ClinTrialConnect Logo\" />
    </div>
    <div class=\"center-block text-center\">
      <div class=\"btn-group login-btn-group\" role=\"group\" aria-label=\"Button Login Group\">
        <a href=\"#\" class=\"btn btn-sm btn-primary\">Patient Login</a>
        <a href=\"#\" class=\"btn btn-sm btn-default\">Admin Login</a>
      </div>
    </div>
    <nav class=\"footer-nav\">
      <ul class=\"footer-nav-list\">
        <li class=\"footer-nav-list-item\"><a href=\"#about\">About</a></li>
        <li class=\"footer-nav-list-item\"><a href=\"#features\">Features</a></li>
        <li class=\"footer-nav-list-item\"><a href=\"#contact\">Contact</a></li>
      </ul>
    </nav>
  </div>
  <div class=\"copyright\">
    <div class=\"container\">
      <p class=\"text-center\">&copy;2016—ClinTrial, LLC  •  <a href=\"/privacy-policy\">Privacy Policy</a></p>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <footer class="footer">*/
/*   <div class="container section-pad">*/
/*     <div class="footer-logo">*/
/*       <img class="center-block" src="{{ url('theme://images/ClinTrialConnect.svg') }}" alt="ClinTrialConnect Logo" />*/
/*     </div>*/
/*     <div class="center-block text-center">*/
/*       <div class="btn-group login-btn-group" role="group" aria-label="Button Login Group">*/
/*         <a href="#" class="btn btn-sm btn-primary">Patient Login</a>*/
/*         <a href="#" class="btn btn-sm btn-default">Admin Login</a>*/
/*       </div>*/
/*     </div>*/
/*     <nav class="footer-nav">*/
/*       <ul class="footer-nav-list">*/
/*         <li class="footer-nav-list-item"><a href="#about">About</a></li>*/
/*         <li class="footer-nav-list-item"><a href="#features">Features</a></li>*/
/*         <li class="footer-nav-list-item"><a href="#contact">Contact</a></li>*/
/*       </ul>*/
/*     </nav>*/
/*   </div>*/
/*   <div class="copyright">*/
/*     <div class="container">*/
/*       <p class="text-center">&copy;2016—ClinTrial, LLC  •  <a href="/privacy-policy">Privacy Policy</a></p>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
