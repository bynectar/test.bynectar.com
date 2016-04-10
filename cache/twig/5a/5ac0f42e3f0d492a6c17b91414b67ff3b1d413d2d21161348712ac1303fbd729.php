<?php

/* partials/header.html.twig */
class __TwigTemplate_4d781efd7bca0fbfd471a89d48a57965d244f340b91fe5976afa01c0ef0d7c75 extends Twig_Template
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
        echo "<!-- Global Header -->
<header id=\"header\">

  <!-- Site Logo -->
  <a href=\"#\" id=\"header-sitelogo\">
    <img src=\"";
        // line 6
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/nectar-logo.png", true);
        echo "\" id=\"header-sitelogo-img\" alt=\"Nectar Floral Design\">
  </a>
  
  <!-- Global Nav Menu -->
  <nav id=\"header-nav\">
    <ul>
      <li>
        <a href=\"#\">
          <h1 id=\"header-nav-brand\">nectar</h1>
        </a>
      </li>
      <li id=\"header-nav-pipe\">|</li>
      <li>
        <a href=\"#\">The Studio</a>
      </li>
      <li>
        <a href=\"#\">Our Work</a>
      </li>
      <li>
        <a href=\"#\">Flowers 101</a>
      </li>
      <li>
        <a href=\"#\">Get in Touch</a>
      </li>
    </ul>
  </nav>
  
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* <!-- Global Header -->*/
/* <header id="header">*/
/* */
/*   <!-- Site Logo -->*/
/*   <a href="#" id="header-sitelogo">*/
/*     <img src="{{ url('theme://images/nectar-logo.png', true) }}" id="header-sitelogo-img" alt="Nectar Floral Design">*/
/*   </a>*/
/*   */
/*   <!-- Global Nav Menu -->*/
/*   <nav id="header-nav">*/
/*     <ul>*/
/*       <li>*/
/*         <a href="#">*/
/*           <h1 id="header-nav-brand">nectar</h1>*/
/*         </a>*/
/*       </li>*/
/*       <li id="header-nav-pipe">|</li>*/
/*       <li>*/
/*         <a href="#">The Studio</a>*/
/*       </li>*/
/*       <li>*/
/*         <a href="#">Our Work</a>*/
/*       </li>*/
/*       <li>*/
/*         <a href="#">Flowers 101</a>*/
/*       </li>*/
/*       <li>*/
/*         <a href="#">Get in Touch</a>*/
/*       </li>*/
/*     </ul>*/
/*   </nav>*/
/*   */
/* </header>*/
