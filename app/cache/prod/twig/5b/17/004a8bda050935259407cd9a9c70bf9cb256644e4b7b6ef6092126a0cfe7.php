<?php

/* TMSUserJoinPageBundle:Security:dumpString.html.twig */
class __TwigTemplate_5b17004a8bda050935259407cd9a9c70bf9cb256644e4b7b6ef6092126a0cfe7 extends Twig_Template
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
        echo "This is a secured area
<div>
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:Security:dumpString.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
