<?php

/* default.html.twig */
class __TwigTemplate_707595a2bcfcfa1bc35b4cd702ee934082b98ccdf621a1c337b8174a65e318fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->loadTemplate("partials/header.html.twig", "default.html.twig", 4)->display($context);
        // line 5
        echo "  <div class=\"row\" id=\"page\">
    <div class=\"small-10 columns small-offset-1\">
    \t";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    \t<div class=\"row\">
    \t  <div class=\"small-2 columns\">
    \t    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>
    \t  </div>
    \t  <div class=\"small-2 columns\">
    \t    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>
    \t  </div>
    \t  <div class=\"small-2 columns\">
    \t    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>
    \t  </div>
    \t  <div class=\"small-2 columns\">
    \t    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>
    \t  </div>
    \t  <div class=\"small-2 columns\">
    \t    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>
    \t  </div>
    \t  <div class=\"small-2 columns\">
    \t    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>
    \t  </div>
    \t</div>
    </div>
  </div>
  ";
        // line 30
        $this->loadTemplate("partials/footer.html.twig", "default.html.twig", 30)->display($context);
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*   {% include 'partials/header.html.twig' %}*/
/*   <div class="row" id="page">*/
/*     <div class="small-10 columns small-offset-1">*/
/*     	{{ page.content }}*/
/*     	<div class="row">*/
/*     	  <div class="small-2 columns">*/
/*     	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>*/
/*     	  </div>*/
/*     	  <div class="small-2 columns">*/
/*     	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>*/
/*     	  </div>*/
/*     	  <div class="small-2 columns">*/
/*     	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>*/
/*     	  </div>*/
/*     	  <div class="small-2 columns">*/
/*     	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>*/
/*     	  </div>*/
/*     	  <div class="small-2 columns">*/
/*     	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>*/
/*     	  </div>*/
/*     	  <div class="small-2 columns">*/
/*     	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus sem sem, eu feugiat eros interdum sed. Fusce eget libero fringilla, fermentum tellus ut, volutpat ipsum. Aenean porta nunc nec finibus maximus. In hac habitasse platea dictumst. Sed nec massa vel magna ullamcorper ultrices vitae at risus. Sed venenatis, turpis cursus tincidunt tristique, nisl augue pulvinar purus, ut bibendum purus elit ac velit.</p>*/
/*     	  </div>*/
/*     	</div>*/
/*     </div>*/
/*   </div>*/
/*   {% include 'partials/footer.html.twig' %}*/
/* {% endblock %}*/
