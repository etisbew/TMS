<?php

/* TMSUserJoinPageBundle:User:advertise.html.twig */
class __TwigTemplate_da7e5b111114e2c62d20f58079b914980983fbc9cc1c29b4362d7a288720b1f4 extends Twig_Template
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
        // line 6
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:header.html.twig");
        echo "    
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tmsuserjoinpage/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tmsuserjoinpage/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tmsuserjoinpage/css/theme.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
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
        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 welcome_title home_top_margin\">
                    <div class=\"row\">
                    <br>
                    <br>
                        <h2>Welcome to TheMusicSite.com</h2>

                        <h4>Advertise</h4>
                    </div>

                </div>
            </div>
        </div>
\t\t";
        // line 60
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:footer_static.html.twig");
        echo "  
</div></div></div>
    ";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User:advertise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  52 => 9,  49 => 7,  43 => 4,  39 => 3,  34 => 2,  31 => 1,  27 => 7,  23 => 6,  21 => 1,);
    }
}
