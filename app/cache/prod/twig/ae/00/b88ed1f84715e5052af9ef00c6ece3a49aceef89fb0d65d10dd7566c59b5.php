<?php

/* TMSUserJoinPageBundle:User:edit.html.twig */
class __TwigTemplate_ae00b88ed1f84715e5052af9ef00c6ece3a49aceef89fb0d65d10dd7566c59b5 extends Twig_Template
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
        // line 26
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:header.html.twig");
        echo "

";
        // line 28
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/css/theme.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t
\t <script src=\"js/jquery.js\"></script>
        <script src=\"js/bootstrap.min.js\"></script>
        <script src=\"js/holder.js\"></script>
        <script src=\"js/ajax.js\" type=\"text/javascript\"></script>
        <script src=\"js/responseHTML.js\" type=\"text/javascript\"></script>
        <script src=\"js/callback_functions.js\" type=\"text/javascript\"></script>
        <script src=\"js/main.js\" type=\"text/javascript\"></script>
        <script src=\"js/tinymce/tinymce.min.js\"></script>
        <script src=\"js/mansory.js\" type=\"text/javascript\"></script>
        <script src=\"js/respond.min.js\" type=\"text/javascript\"></script>
        <script src=\"js/jquery.hoverIntent.minified.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.easing.1.3.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.mobile.just-touch.js\"></script>
        <script type=\"text/javascript\" src=\"js/mightyslider/src/js/mightyslider.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
        <script src=\"js/zozotabs/js/zozo.tabs.min.js\" type=\"text/javascript\"></script>
        <script src=\"js/colorbox/jquery.colorbox-min.js\" type=\"text/javascript\"></script>
        <script src=\"js/bootstrap-datepicker.js\" type=\"text/javascript\"></script>
\t\t
";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "<h1>User edit ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</h1>

      <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo " name=\"tms_userjoinpagebundle_user\">
\t  
<input type=\"hidden\" name=\"_method\" value=\"PUT\">

    <div id=\"profile_infodiv\">
    <div class=\"row sub_row\">
            <br>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"row form-group\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 text-right text-left-xs\">
                    <span class=\"required\">*</span> <strong>Profile Name:</strong></div>
                <div class=\"col-lg-8 col-md-9 col-sm-9 col-xs-12 no_col_left_padding\">
                   ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nick_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"row form-group\">
                <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 text-right text-left-xs\">
                    <span class=\"required\">*</span> <strong>Username:</strong>
                </div>
                <div class=\"col-lg-5 col-md-5 col-sm-6 col-xs-12 no_col_left_padding\">
                    <div>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "first_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                    <div class=\"grey\">e.g. https://pitchmystuff.com/<strong>Username</strong></div>
                </div>
            </div>
\t\t\t<div class=\"row form-group\">
                                <div class=\"col-sm-2 text-right text-left-xs field_label\"><strong>Email</strong></div>
                                <div class=\"col-sm-7 no_col_left_padding\">
                                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--\t<div class=\"row form-group\">
                                <div class=\"col-sm-2 text-right text-left-xs field_label\"><strong>Image</strong></div>
                                <div class=\"col-sm-7 no_col_left_padding\">
                                   <input type=\"file\" name=\"media_url\"  id=\"media_url\" value=\"\" >
                                </div>
                            </div>-->
\t\t\t\t\t\t\t
        </div>
  ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 80,  140 => 76,  134 => 73,  118 => 60,  108 => 53,  96 => 44,  79 => 32,  73 => 30,  70 => 28,  44 => 4,  40 => 3,  35 => 2,  32 => 1,  28 => 28,  23 => 26,  21 => 1,);
    }
}
