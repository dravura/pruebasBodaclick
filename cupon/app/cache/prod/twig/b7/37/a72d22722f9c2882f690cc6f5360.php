<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_b737a72d22722f9c2882f690cc6f5360 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo "\" message=\"";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "\">
";
        // line 4
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "toarray"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "class"), "html", null, true);
            echo "\" message=\"";
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "message"), "html", null, true);
            echo "\">
";
            // line 6
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:traces.xml.twig")->display(array("exception" => $_e_));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</error>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  48 => 7,  36 => 5,  123 => 24,  108 => 20,  95 => 18,  90 => 17,  87 => 16,  83 => 14,  45 => 6,  26 => 4,  248 => 96,  238 => 90,  234 => 88,  227 => 84,  223 => 83,  218 => 80,  216 => 79,  213 => 78,  210 => 77,  207 => 76,  198 => 71,  192 => 67,  177 => 61,  174 => 60,  171 => 59,  164 => 55,  160 => 54,  155 => 51,  153 => 50,  149 => 48,  146 => 47,  143 => 46,  137 => 45,  126 => 43,  116 => 22,  112 => 34,  107 => 31,  85 => 28,  82 => 27,  67 => 9,  63 => 23,  32 => 11,  30 => 3,  25 => 2,  23 => 3,  20 => 2,  17 => 1,  92 => 39,  86 => 6,  77 => 26,  46 => 14,  37 => 8,  33 => 7,  29 => 6,  24 => 6,  19 => 1,  201 => 72,  195 => 66,  187 => 62,  181 => 63,  178 => 57,  172 => 56,  168 => 54,  165 => 53,  156 => 48,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  134 => 37,  131 => 44,  128 => 35,  122 => 32,  119 => 31,  111 => 21,  106 => 29,  103 => 19,  100 => 27,  97 => 26,  93 => 24,  89 => 22,  79 => 12,  68 => 15,  64 => 13,  60 => 22,  57 => 8,  54 => 10,  50 => 6,  47 => 19,  43 => 6,  39 => 15,  35 => 5,  31 => 4,  28 => 3,);
    }
}
