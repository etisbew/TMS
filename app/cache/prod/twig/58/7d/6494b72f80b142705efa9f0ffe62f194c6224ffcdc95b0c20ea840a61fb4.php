<?php

/* TMSAuthorsBundle:Authors:new.html.twig */
class __TwigTemplate_587d6494b72f80b142705efa9f0ffe62f194c6224ffcdc95b0c20ea840a61fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        echo twig_include($this->env, $context, "TMSAuthorsBundle:Authors:header.html.twig");
        echo "

";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/css/theme.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 content_area\">
        <br><br><br><br><br>
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <h3 class=\"hidden-xs dark_grey\">Author</h3>
                <h4 class=\"visible-xs dark_grey\">Welcome to TheMusicSite.com</h4>
                <hr class=\"hr_subline hidden-xs\" style=\"width: 20%; border-width: 3px; margin-top: 12px;\">
            </div>
        </div>
        <br>
\t  <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tms_authors_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-sm-9\">
                        <div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Name:</div>
                            <div class=\"col-sm-6 no_col_left_padding\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Anonymous: </div>
                            <div class=\"col-sm-6 no_col_left_padding\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "anonymous", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Pseudonym:</div>
                            <div class=\"col-sm-6 no_col_left_padding\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pseudonym", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
\t\t\t\t\t\t<div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Contribution :</div>
                            <div class=\"col-sm-6 no_col_left_padding\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contribution", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
\t\t\t\t\t\t<div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Completed_Year:</div>
                            <div class=\"col-sm-6 no_col_left_padding\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "completed_year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
\t\t\t\t\t\t<div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Nationality:</div>
                            <div class=\"col-sm-6 no_col_left_padding\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nationality", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
\t\t\t\t\t\t<div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Citizen:</div>
                            <div class=\"col-sm-6 no_col_left_padding\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "citizen", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
                    </div>
                    
                </div>
            </div>
\t\t\t <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "join", array()), 'widget');
        echo "
            </div>

        <br>
       
        <br><br>
\t";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "TMSAuthorsBundle:Authors:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 66,  140 => 60,  129 => 52,  122 => 48,  115 => 44,  108 => 40,  101 => 36,  94 => 32,  87 => 28,  75 => 21,  63 => 11,  60 => 10,  54 => 5,  50 => 4,  46 => 3,  41 => 2,  38 => 1,  33 => 69,  31 => 10,  26 => 8,  23 => 7,  21 => 1,);
    }
}
