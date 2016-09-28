<?php

/* /Users/pooh/Github/foodcapitals/themes/foodcapitals/layouts/default.htm */
class __TwigTemplate_da92439484b4a3019be33f3eb524447d73eccbf4297636ff21ecde5120d1e978 extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">

\t\t";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("head_global"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "\t
\t<body>
\t\t<div id=\"wrapper\">
\t\t<header role=\"rowheader\">
\t\t\t<h1 id=\"logo\" title=\"Foodcapitals.com\"><a href=\"homepage.php\"><span>Foodcapitals.com</span></a></h1>
\t\t\t<div class=\"header-mobile\">
\t\t\t\t<div class=\"header-mobile-toggle\">
\t\t\t\t\t<a class=\"header-mobile-toggle_link\">
\t\t\t\t\t\t<i class=\"header-mobile-toggle_icon hamburger-icon\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</i>
\t\t\t\t\t\t<span class=\"visually-hidden\">header.menu</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation_irpage"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "\t\t</header>
\t\t<main id=\"content\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 30
        echo "\t\t\t\t</div>
\t\t</main>
\t\t<footer>
\t\t\t";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "\t\t</footer>
\t\t</div>
\t\t<script src=\"";
        // line 36
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/pooh/Github/foodcapitals/themes/foodcapitals/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  70 => 34,  66 => 33,  61 => 30,  59 => 29,  54 => 26,  50 => 25,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="en">*/
/* */
/* 		{% partial 'head_global' %}*/
/* 	*/
/* 	<body>*/
/* 		<div id="wrapper">*/
/* 		<header role="rowheader">*/
/* 			<h1 id="logo" title="Foodcapitals.com"><a href="homepage.php"><span>Foodcapitals.com</span></a></h1>*/
/* 			<div class="header-mobile">*/
/* 				<div class="header-mobile-toggle">*/
/* 					<a class="header-mobile-toggle_link">*/
/* 						<i class="header-mobile-toggle_icon hamburger-icon">*/
/* 							<span></span>*/
/* 							<span></span>*/
/* 							<span></span>*/
/* 							<span></span>*/
/* 							<span></span>*/
/* 							<span></span>*/
/* 						</i>*/
/* 						<span class="visually-hidden">header.menu</span>*/
/* 					</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% partial 'navigation_irpage' %}*/
/* 		</header>*/
/* 		<main id="content">*/
/* 			<div class="container">*/
/* 				{% page %}*/
/* 				</div>*/
/* 		</main>*/
/* 		<footer>*/
/* 			{% partial 'footer' %}*/
/* 		</footer>*/
/* 		</div>*/
/* 		<script src="{{ 'assets/js/main.js'|theme}}"></script>*/
/* 	</body>*/
/* </html>*/
