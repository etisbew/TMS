<?php

/* TMSAuthorsBundle:Authors:index.html.twig */
class __TwigTemplate_82f25ef95239f61c1251d8b8768e8d189bba2910ac845c9e357a6108d30d3647 extends Twig_Template
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
        echo twig_include($this->env, $context, "TMSAuthorsBundle:Authors:header.html.twig");
        echo "
";
        // line 8
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

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div id=\"displayed\"><div class=\"container theme-showcase\" id=\"mainDiv\"><style type=\"text/css\">
    body{
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-bottom: 0px;
        padding-top: 65px;

    }
    .footerMine{display: none;}
    .homepage_content{background-color: rgba(255,255,255); background-color: rgba(255,255,255,.7); min-height: 800px;}
    .home_top_margin{padding-top: 60px;}
    .welcome_title{color: #fff; text-align: right;}
    .home_login_row{padding-bottom: 10px; color: #4e4e4e; text-align: right;}
    .home_login_row a,.homepage_content_footer a{color: #4e4e4e !important;}
    .homepage_content_footer{color:#8c7f8a}

    #displayed{margin-top: -13px;}
    .tms_list{list-style: none; padding: 0px;}
    .tms_list li{margin-left: 15px; float: left;}

    .create_profile_btn{width: 202px;}

    @media (max-width: 767px) {
        .welcome_title{text-align: center;}
        .home_login_row{text-align: left;}
    }

    @media (max-width: 991px) {
        .tms_list{display: inline-block;}
    }

</style>

    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t<br><br><br><br>
<a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("tms_authors_new");
        echo "\" style=\"margin-top:1000px;\">Create author</a>
</div>

";
        // line 52
        echo twig_include($this->env, $context, "TMSAuthorsBundle:Authors:footer.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "TMSAuthorsBundle:Authors:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 52,  98 => 49,  56 => 9,  53 => 8,  47 => 5,  43 => 4,  39 => 3,  34 => 2,  31 => 1,  27 => 8,  23 => 7,  21 => 1,);
    }
}
