<?php

/* default.html */
class __TwigTemplate_845d98a44e7798451ef18592d510a0a3 extends Twig_Template
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
\t\t\t<p id=\"footer\" class=\"col six\" position=\"fixed\" bottom=\"10px\" right=\"10px\"></p>
\t\t</div>
\t\t<script src=\"";
        // line 24
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/js/navigation.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98633295-1', 'auto');
  ga('send', 'pageview');

</script>";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
