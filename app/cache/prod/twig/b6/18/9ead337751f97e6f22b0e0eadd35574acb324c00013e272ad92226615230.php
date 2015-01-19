<?php

/* TMSUserJoinPageBundle:User:email.txt.twig */
class __TwigTemplate_b6189ead337751f97e6f22b0e0eadd35574acb324c00013e272ad92226615230 extends Twig_Template
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
        echo "Hi,
Your Musicsite password is ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo ".

Thanks
musicsite.com
";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
