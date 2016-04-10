<?php

/* base.html.twig */
class __TwigTemplate_1a5554f092b592c6a4520ded000a00f842faae3b1c3f75052c45d14a5f3c865c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <link rel=\"canonical\" href=\"";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <!-- Place favicon.ico in the root directory -->

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    
  </head>
  <body>

";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "
  </body>
</html>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Cabin:400,700,400italic,700italic|Playfair+Display:900,900italic"), "method");
        // line 17
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css"), "method");
        // line 18
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/main.css"), "method");
        // line 19
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/styles.css"), "method");
        // line 20
        echo "    ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/modernizr-2.8.3.min.js"), "method");
        // line 25
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://code.jquery.com/jquery-1.12.0.min.js"), "method");
        // line 26
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.js"), "method");
        // line 27
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.abide.js"), "method");
        // line 28
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.alert.js"), "method");
        // line 29
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.clearing.js"), "method");
        // line 30
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.dropdown.js"), "method");
        // line 31
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.equalizer.js"), "method");
        // line 32
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.magellan.js"), "method");
        // line 33
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.offcanvas.js"), "method");
        // line 34
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.reveal.js"), "method");
        // line 35
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation/foundation.tab.js"), "method");
        // line 36
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/plugins.js"), "method");
        // line 37
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 38
        echo "    ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 44,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  128 => 33,  125 => 32,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 45,  70 => 44,  61 => 39,  59 => 23,  53 => 21,  51 => 15,  45 => 12,  40 => 10,  29 => 6,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     */
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/*     <link rel="apple-touch-icon" href="apple-touch-icon.png">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <!-- Place favicon.ico in the root directory -->*/
/* */
/*     {% block stylesheets %}*/
/*       {% do assets.addCss('https://fonts.googleapis.com/css?family=Cabin:400,700,400italic,700italic|Playfair+Display:900,900italic') %}*/
/*       {% do assets.addCss('theme://css/normalize.css') %}*/
/*       {% do assets.addCss('theme://css/main.css') %}*/
/*       {% do assets.addCss('theme://css-compiled/styles.css') %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*       {% do assets.addJs('theme://js/vendor/modernizr-2.8.3.min.js') %}*/
/*       {% do assets.addJs('https://code.jquery.com/jquery-1.12.0.min.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.abide.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.alert.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.clearing.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.dropdown.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.equalizer.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.magellan.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.offcanvas.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.reveal.js') %}*/
/*       {% do assets.addJs('theme://js/vendor/foundation/foundation.tab.js') %}*/
/*       {% do assets.addJs('theme://js/plugins.js') %}*/
/*       {% do assets.addJs('theme://js/main.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/*     */
/*   </head>*/
/*   <body>*/
/* */
/* {% block content %}{% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
