<?php

/* category.html */
class __TwigTemplate_21826395047705c016f16bd695f944ba extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
\t\"http://www.w3.org/TR/html4/strict.dtd\">
<html>
\t<head>
\t\t<meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
\t\t<title>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "'s Portfolio</title>
\t\t<link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "?/feed/\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/css/screen.css\" type=\"text/css\" media=\"screen\"> 
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t<h1 class=\"col four\">
\t\t\t\t<a href=\"";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</a> / ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "profession");
        echo "
\t\t\t</h1>
\t\t\t<em class=\"col three\">";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "email");
        echo "</em>
\t\t\t<hr>
\t\t\t";
        // line 17
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 18
        echo "\t\t\t<div id=\"content\" class=\"home col eight\">
\t\t\t\t";
        // line 19
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 20
        echo "\t\t\t</div>
\t\t\t<hr>
\t\t\t<p id=\"footer\" class=\"col six\">&copy; Copyright ";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " <a class=\"atom-rss\" href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "?/feed/\">RSS</a><br>
\t\t\t\t<em>content managed by <a href=\"http://www.staceyapp.com\">Stacey</a></em></p>
\t\t</div>
\t\t<script src=\"";
        // line 25
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/js/navigation.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "category.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
