<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_94db5cc4711034ab7bf755ad2e294d10 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  102 => 19,  78 => 15,  61 => 13,  56 => 12,  44 => 7,  38 => 7,  55 => 9,  48 => 7,  36 => 5,  123 => 24,  108 => 20,  95 => 18,  90 => 17,  87 => 16,  83 => 14,  45 => 6,  26 => 4,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  174 => 60,  171 => 59,  164 => 55,  160 => 54,  155 => 51,  153 => 50,  149 => 48,  146 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 22,  112 => 20,  107 => 31,  85 => 28,  82 => 27,  67 => 9,  63 => 14,  32 => 5,  30 => 4,  25 => 3,  23 => 5,  20 => 2,  17 => 1,  92 => 39,  86 => 6,  77 => 26,  46 => 14,  37 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 29,  103 => 19,  100 => 27,  97 => 26,  93 => 24,  89 => 16,  79 => 12,  68 => 15,  64 => 13,  60 => 22,  57 => 8,  54 => 10,  50 => 11,  47 => 8,  43 => 6,  39 => 8,  35 => 4,  31 => 9,  28 => 4,);
    }
}
