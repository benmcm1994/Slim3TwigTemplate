<?php

/* home.twig */
class __TwigTemplate_1b64388a7290da8ae9be87a10afdaa263f44b47e54a673d3882b460e1189c12d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>
    TEST HOME
    </title>
</head>

<body>
    <p>test</p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "/home/vagrant/Code/newSttSite/resources/views/home.twig");
    }
}
