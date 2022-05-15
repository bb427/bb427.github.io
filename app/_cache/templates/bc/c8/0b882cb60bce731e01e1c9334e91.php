<?php

/* page.html */
class __TwigTemplate_bcc80b882cb60bce731e01e1c9334e91 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
  \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
    <title>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo ", ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</title>
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "?/feed/\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/css/screen.css\" type=\"text/css\" media=\"screen\">
  </head>
  <body>
    <div id=\"container\" class=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id");
        echo "\">
      <h1 class=\"col three\">
        <a href=\"";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</a>
        <strong>";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "profession");
        echo "</strong>
      </h1>
      <em class=\"col three\">";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "email");
        echo "</em>
      <hr>
      ";
        // line 18
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 19
        echo "      <div id=\"content\" class=\"col eight\">
        <p class=\"date col one\">---</p>
        <div class=\"description col six\">
          <h2 class=\"col six\"><a href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</a></h2>
          ";
        // line 23
        $this->env->loadTemplate("partials/assets/images.html")->display($context);
        // line 24
        echo "          ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
          ";
        // line 25
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 26
        echo "        </div>
      </div>
      <hr>
      
    </div>
    <script src=\"";
        // line 31
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/js/jquery-1.3.2.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
