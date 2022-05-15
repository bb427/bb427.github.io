<?php

/* search.html */
class __TwigTemplate_9d6aaba621743e6383029678f35a528a extends Twig_Template
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
        echo "'s Portfolio </title>
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
        <p class=\"date col one\">&para;</p>
        <div class=\"description col six\">
          <h2 class=\"col six\"><a href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</a></h2>
          <form class=\"logo-bottom three\" action=\"/search\">
            <input type=\"text\" value=\"";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "query"), "q");
        echo "\" name=\"q\" id=\"search-field\" autocomplete=\"off\" spellcheck=\"false\" />
          </form>
          ";
        // line 26
        $context["results"] = $this->env->getExtension('Stacey')->search($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "query"), "q"));
        // line 27
        echo "          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 28
            echo "            <a href=\"";
            echo $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "url");
            echo "\">
              <h2>";
            // line 29
            echo $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "title");
            echo "</h2>
              <p>";
            // line 30
            echo $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "search_match");
            echo "</p>
            </a>
            <hr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "        </div>
      </div>
      <hr>
      <p id=\"footer\" class=\"col six\">&copy; Copyright ";
        // line 37
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " <a class=\"atom-rss\" href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "?/feed/\">RSS</a><br>
        <em>Content managed by <a href=\"http://www.staceyapp.com\">stacey</a></em></p>
    </div>
    <script src=\"";
        // line 40
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "public/docs/js/jquery-1.3.2.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "search.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
