<?php

/* TMSUserJoinPageBundle:User:new.html.twig */
class __TwigTemplate_5774c4b6d75256f1195b0a6059c1ccf360ca0404ddff373863827f00b779c1b2 extends Twig_Template
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
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:header.html.twig");
        echo "

";
        // line 10
        $this->displayBlock('body', $context, $blocks);
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
                <h3 class=\"hidden-xs dark_grey\">Welcome to TheMusicSite.com</h3>
                <h4 class=\"visible-xs dark_grey\">Welcome to TheMusicSite.com</h4>
                <hr class=\"hr_subline hidden-xs\" style=\"width: 20%; border-width: 3px; margin-top: 12px;\">
            </div>
        </div>
        <br>
\t  <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("user_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t  <input type=\"hidden\" name=\"media_type\" name=\"media_type\" value=\"PHOTO\">
\t  <input type=\"hidden\" name=\"media_title\" name=\"media_title\" value=\"title\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-sm-9\">
                        <div class=\"row form-group\">
                            <div class=\"
                            col-sm-4 text-right text-left-xs field_label\">Profile Name:</div>
                            <div class=\"col-sm-8 no_col_left_padding\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nick_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">@Username:</div>
                            <div class=\"col-sm-8 no_col_left_padding\">
                                <div>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                                <div class=\"grey\" style=\"padding-top: 5px;\">e.g. https://themusicsite.com/<strong>username</strong></div>
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Email Address:</div>
                            <div class=\"col-sm-8 no_col_left_padding\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        </div>
                        <br>
\t\t\t\t\t\t
                        <div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\"></div>
                            <div class=\"col-sm-6 no_col_left_padding\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget');
        echo "</div>
                        </div>
                        <!--<div class=\"row form-group\">
                            <div class=\"col-sm-4 text-right text-left-xs field_label\">Confirm Password:</div>
                            <div class=\"col-sm-6 no_col_left_padding\"><input type=\"password\" class=\"form-control\" name=\"confirmpwd\" ></div>
                        </div>-->
                    </div>
                    <div class=\"col-sm-5\">
                        <div class=\"google_ad_300x250 pull-right pull-left hidden-sm hidden-xs\">
                          <span class=\"grey\" style=\"display: inline-block; line-height: 25px;\">
                              Google Ad<br>Medium Rectangle<br>(300 x 250)
                          </span>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t<div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row form-group\">
                    <div class=\"col-sm-3 col-md-2 text-right text-left-xs account_type_field_margin\">User Types:</div>
                    <div class=\"col-sm-8 col-md-9 no_col_left_padding grey\"> 
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_type", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "join", array()), 'widget');
        echo "
            </div>
        </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"google_ad_250x250 visible-sm visible-xs\" style=\"margin: 0 auto;\">
                      <span class=\"grey\" style=\"display: inline-block; line-height: 25px;\">
                          Google Ad<br>Square<br>(250 x 250)
                      </span>
                </div>
            </div>
        </div>
        <br><br>
\t";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 91,  147 => 76,  137 => 69,  113 => 48,  104 => 42,  95 => 36,  87 => 31,  72 => 21,  60 => 11,  57 => 10,  51 => 5,  47 => 4,  43 => 3,  38 => 2,  35 => 1,  31 => 10,  26 => 8,  23 => 7,  21 => 1,);
    }
}
