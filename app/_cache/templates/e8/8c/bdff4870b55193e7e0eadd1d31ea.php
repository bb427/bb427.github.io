<?php

/* project.html */
class __TwigTemplate_e88cbdff4870b55193e7e0eadd1d31ea extends Twig_Template
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
        echo "</title>
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
        echo "</a>
\t\t\t</h1>
\t\t\t<hr>
\t\t\t";
        // line 16
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 17
        echo "\t\t\t<div id=\"content\" class=\"col eight\">
\t\t\t\t<p class=\"date col one\">";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date");
        echo "</p>
\t\t\t\t<div class=\"description col six\">
\t\t\t\t\t<h2><a href=\".\">";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</a></h2>
\t\t\t\t\t<h2>";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<p id=\"gallery-count\" class=\"col one\">
\t\t\t\t  <span>1/1</span>
\t\t\t\t</p>
\t\t\t\t<div id=\"gallery-navigation\" class=\"col three\">
\t\t\t\t  <p><a href=\"#\" id=\"previous-image\">Previous image</a> &larr; | &rarr; <a href=\"#\" id=\"next-image\">Next image</a> </p>
\t\t\t\t</div>
\t\t\t\t";
        // line 30
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 31
        echo "\t\t\t</div>
\t\t\t<hr>
\t\t\t<p id=\"footer\" class=\"col six\"></p>
\t\t</div>
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\tdocument.getElementsByTagName('body')[0].className += ' js-enabled';
\t\t</script>
\t\t<script src=\"";
        // line 38
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/js/navigation.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t\t<script src=\"";
        // line 39
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/js/jquery-1.3.2.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t\t<script src=\"";
        // line 40
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/js/gallery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t\t<script src=\"";
        // line 41
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/js/init-gallery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "project.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
