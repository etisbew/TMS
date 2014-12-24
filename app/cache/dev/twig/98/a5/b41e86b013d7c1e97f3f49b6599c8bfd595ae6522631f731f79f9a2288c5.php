<?php

/* TMSUserJoinPageBundle:User:jobopportunities.html.twig */
class __TwigTemplate_98a5b41e86b013d7c1e97f3f49b6599c8bfd595ae6522631f731f79f9a2288c5 extends Twig_Template
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
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:header.html.twig");
        echo "    
";
        // line 8
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tmsuserjoinpage/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tmsuserjoinpage/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tmsuserjoinpage/css/theme.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 10
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
    <div id=\"displayed\"><style type=\"text/css\">
    #headerDiv{margin-top: -18px;}
    #headerDiv .navbar{background-image: none; background-color:#555962; border: none; border-radius:0;}
    #headerDiv .navbar-header{width: 100%;}
    #headerDiv .navbar-nav{margin: 0 -15px}

</style>
<div id=\"headerDiv\">
<br><br>
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border: none; background:none; \">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\" style=\"background-color: #fff;\"></span>
                    <span class=\"icon-bar\" style=\"background-color: #fff;\"></span>
                    <span class=\"icon-bar\" style=\"background-color: #fff;\"></span>
                </button>
                <div class=\"container theme-showcase text-center text-left-xs\">
                    <h3 style=\"margin: 0px; line-height: 100px;\" class=\"hidden-xs white\">JOB OPPORTUNITIES</h3>
                    <div class=\"visible-xs\">
                        <h4 style=\"margin: 0px; line-height: 50px; display: none;\" class=\"white overview_page_header\">OVERVIEW</h4>
                        <h4 style=\"margin: 0px; line-height: 50px; display: none;\" class=\"white contributors_page_header\">CONTRIBUTORS</h4>
                        <h4 style=\"margin: 0px; line-height: 50px; display: none;\" class=\"white reviewers_page_header\">REVIEWERS</h4>
                        <h4 style=\"margin: 0px; line-height: 50px; display: none;\" class=\"white photographers_page_header\">
                            PHOTOGRAPHERS
                        </h4>
                        <h4 style=\"margin: 0px; line-height: 50px; display: none;\" class=\"white marketing_page_header\">
                            MARKETING &amp; PROMOTION
                        </h4>
                        <h4 style=\"margin: 0px; line-height: 50px; display: none;\" class=\"white administration_page_header\">
                            ADMINISTRATION
                        </h4>
                    </div>
                </div>
            </div>

            <div class=\"hidden-lg hidden-md hidden-sm\">
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown active\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Overview</a></li>
                        <li class=\"dropdown active\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Contributors</a></li>
                        <li class=\"dropdown active\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reviewers</a></li>
                        <li class=\"dropdown active\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Photographers</a></li>
                        <li class=\"dropdown active\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Marketing &amp; promotion</a>
                        </li>
                        <li class=\"dropdown active\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Administration</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class=\"container theme-showcase\" id=\"mainDiv\"><style type=\"text/css\">
    .list-group .list-group-item{padding: 0px}
    .list-group .list-group-item > a{display: block; width: 100%; padding: 10px 15px; text-decoration: none; color: #333 !important;}
    .list-group .list-group-item > a.active,
    .list-group .list-group-item > a:hover{
        background: #ffffff; /* Old browsers */
        background: -moz-linear-gradient(top, #ffffff 0%, #e1e1e1 50%, #e1e1e1 51%, #cccccc 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#e1e1e1), color-stop(51%,#e1e1e1), color-stop(100%,#cccccc)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #ffffff 0%,#e1e1e1 50%,#e1e1e1 51%,#cccccc 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #ffffff 0%,#e1e1e1 50%,#e1e1e1 51%,#cccccc 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #ffffff 0%,#e1e1e1 50%,#e1e1e1 51%,#cccccc 100%); /* IE10+ */
        background: linear-gradient(to bottom, #ffffff 0%,#e1e1e1 50%,#e1e1e1 51%,#cccccc 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */
    }
    .overview_page_header{display: inline-block !important;}
    .share_list{margin: 0; padding: 0;}
    .share_list li{ float: left; padding-right: 5px; list-style: none;}
    .share_list li:last-child{padding-right: 0px;}
</style>
<div class=\"row\">
    <div class=\"col-sm-4 col-md-3 hidden-xs\">
        <div class=\"panel panel-default\">
            <ul class=\"list-group text-right text-left-xs\">
                <li class=\"list-group-item\"><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_Overview\" class=\"active\">Overview</a></li>
                <li class=\"list-group-item\"><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_Contributors\">Contributors</a></li>
                <li class=\"list-group-item\"><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_Reviewers\">Reviewers</a></li>
                <li class=\"list-group-item\"><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_Photographers\">Photographers</a></li>
                <li class=\"list-group-item\"><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_Marketing_And_Promotion\">Marketing &amp; promotion</a></li>
                <li class=\"list-group-item\"><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_Administration\">Administration</a></li>
                <li class=\"list-group-item\"><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_ApplyPage\">Apply</a></li>
            </ul>
        </div>
    </div>
    <div class=\"col-sm-8 col-md-9\">
        <div class=\"row hidden-xs\">
            <div class=\"col-xs-12 page_sub_title\">
                <span class=\"main_title\">| OVERVIEW</span>
            </div>
        </div>
        <div class=\"hidden-xs\"><br></div>
        <div class=\"row form-group\">
            <div class=\"col-sm-12 col-md-10\">
                <p>Lorem ipsum dolor sit amet, cum modo sint saepe ex. Dolore nusquam epicurei ut vix. Eos ea liber nobis definitionem.
                Ei qui oratio decore reprimique. Ut dicunt graecis fierent his, ei labitur interesset eum. Usu wisi dicat at.</p>

                <p>Ferri nostro qui eu, nec eu errem delectus, est ei enim nusquam intellegam. Modus invenire et nec. Et harum viris regione
                usu,
                doctus adipiscing temporibus mea eu. Reque labitur perpetua et vis, ex usu illum luptatum ocurreret, no dolore adipiscing vim.
                Nec omittam lobortis in, eu nonumy facete equidem duo, in eruditi vivendo his.</p>

                <p>Vim et iriure menandri sapientem, est eu ignota audire accusata, sea an aeterno alterum torquatos. Ad movet eirmod sea, pro
                discere fierent scriptorem ea, eu quod paulo minimum cum. Eam everti dolores ut. Bonorum maiestatis ei nam. Ex nam postea ocurreret
                dignissim.</p>
                
                <p>Lorem ipsum dolor sit amet, cum modo sint saepe ex. Dolore nusquam epicurei ut vix. Eos ea liber nobis definitionem.
                Ei qui oratio decore reprimique. Ut dicunt graecis fierent his, ei labitur interesset eum. Usu wisi dicat at.</p>

                <p>Ferri nostro qui eu, nec eu errem delectus, est ei enim nusquam intellegam. Modus invenire et nec. Et harum viris regione
                usu,
                doctus adipiscing temporibus mea eu. Reque labitur perpetua et vis, ex usu illum luptatum ocurreret, no dolore adipiscing vim.
                Nec omittam lobortis in, eu nonumy facete equidem duo, in eruditi vivendo his.</p>

                <p>Vim et iriure menandri sapientem, est eu ignota audire accusata, sea an aeterno alterum torquatos. Ad movet eirmod sea, pro
                discere fierent scriptorem ea, eu quod paulo minimum cum. Eam everti dolores ut. Bonorum maiestatis ei nam. Ex nam postea ocurreret
                dignissim.</p>

                <p>No duo ignota prompta. Agam expetendis ei nam. Pro aeque euismod et, id mei decore quaestio. Ne omnes quaeque constituto vix. Id quo
                dico reque.</p>
            </div>
        </div>
        <br><br>
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-10 text-right\">
                <div class=\"form-group\">
                    Got question? <a href=\"mailto:jobs@themusicsite.com\" class=\"green\">Send us an email</a>
                    <span class=\"grey\" style=\"padding-left: 15px;padding-right: 15px;\">|</span>
                    <a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_ApplyPage\" class=\"btn btn-success\">Apply</a>
                </div>
                <div class=\"clearfix\"></div>
                <div>
                    <ul class=\"share_list pull-right\">
                        <li>Share:</li>
                        <li><a href=\"#\"><img src=\"images/in_icon.png\" height=\"25\"></a></li>
                        <li><a href=\"#\"><img src=\"images/fb_icon.png\" height=\"25\"></a></li>
                        <li><a href=\"#\"><img src=\"images/tweet_icon.png\" height=\"25\"></a></li>
                        <li><a href=\"#\"><img src=\"images/mail_icon.png\" height=\"25\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</div></div>

<div style=\"background-color: #e4e4e4;margin-bottom: -8px;\">
    <div class=\"container\">
        <div class=\"row\" style=\"padding-top: 10px\">
            <div class=\"col-xs-12\">
                <div class=\"col-lg-8 col-md-12 col-sm-12  col-xs-12 form-group\">
                    <ul class=\"footer_links\">
                        <li><a href=\"../../prototype-advertising-flat/prototypes/index.html#Advertise_Home\">Advertise</a></li>
                        <li><a href=\"../../prototype-general-flat/prototypes/index.html#Privacy_Policy_Page\">Privacy Policy</a></li>
                        <li><a href=\"../../prototype-general-flat/prototypes/index.html#Terms_and_Conditions_Page\">Terms &amp; Conditions</a></li>
                        <li><a href=\"../../prototype-general-flat/prototypes/index.html#Invite_a_Friend_Pop_Up\">Invite a Friend</a></li>
                        <li><a href=\"../../prototype-general-flat/prototypes/index.html#JobOpportunities_Overview\">Jobs Opps</a></li>
                        <li><a href=\"../../prototype-general-flat/prototypes/index.html#Contact_Us_Page\">Contact Us</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-8 col-xxs-12 pull-right\">
                    <div class=\"hidden-lg\" style=\"padding-top: 15px;\"></div>
                    <div>Subscribe to updates from themusicsite.com</div>
                    <div class=\"form-group\">
                        <form role=\"search\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter your email...\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-success\" type=\"button\">Subscribe!</button>
                                        </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <ul class=\"footer_social_icons visible-xs\">
                        <li><a href=\"https://twitter.com/themusicsitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/tweet_icon.png\"></a></li>
                        <li><a href=\"https://www.facebook.com/TheMusicSitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/fb_icon.png\"></a></li>
                        <li><a href=\"http://www.youtube.com/subscription_center?add_user=PitchMyStuff\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/play_icon.png\"></a></li>
                        <li><a href=\"https://plus.google.com/118156278029274131168/about\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/gplus_icon.png\"></a></li>
                        <li class=\"social_instagram_icon\"><a href=\"http://instagram.com/themusicsitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/instagram_icon.png\"></a></li>
                        <li class=\"social_p_icon\"><a href=\"http://www.pinterest.com/themusicsite\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/p_icon.png\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row form-group\">
            <div class=\"col-xs-12\">
                <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12 dark_grey\" style=\"padding-top:5px;\">
                    Copyright © 2014 TheMusicSite.com
                </div>
                <div class=\"col-lg-4 col-md-4 col-xs-12\">
                    <ul class=\"footer_social_icons hidden-xs\">
                        <li><a href=\"https://twitter.com/themusicsitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/tweet_icon.png\"></a></li>
                        <li><a href=\"https://www.facebook.com/TheMusicSitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/fb_icon.png\"></a></li>
                        <li><a href=\"http://www.youtube.com/subscription_center?add_user=PitchMyStuff\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/play_icon.png\"></a></li>
                        <li><a href=\"https://plus.google.com/118156278029274131168/about\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/gplus_icon.png\"></a></li>
                        <li class=\"social_instagram_icon\"><a href=\"http://instagram.com/themusicsitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/instagram_icon.png\"></a></li>
                        <li class=\"social_p_icon\"><a href=\"http://www.pinterest.com/themusicsite\" target=\"_blank\"><img class=\"img-responsive\" src=\"images/p_icon.png\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"hidden-xs\" style=\"margin-top: 10px;\"></div>
    </div>
</div></div>
</div></div></div>
    ";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User:jobopportunities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  51 => 8,  45 => 5,  41 => 4,  37 => 3,  34 => 2,  31 => 1,  27 => 8,  23 => 7,  21 => 1,);
    }
}
