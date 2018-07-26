<?php

/* test.twig */
class __TwigTemplate_38059e6e31469d962a29e8e2b5c5a1ace654a689f006d38668db1e1e83051be4 extends Twig_Template
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
        return "test.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "test.twig", "/home/vagrant/Code/newSttSite/resources/views/test.twig");
    }
}
