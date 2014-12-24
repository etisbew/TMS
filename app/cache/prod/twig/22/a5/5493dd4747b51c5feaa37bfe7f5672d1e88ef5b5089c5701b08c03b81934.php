<?php

/* TMSUserJoinPageBundle:User:forgotpwd.html.twig */
class __TwigTemplate_22a55493dd4747b51c5feaa37bfe7f5672d1e88ef5b5089c5701b08c03b81934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:header.html.twig");
        echo "

<div id=\"displayed\"><style>
    .headerDiv {
        position: relative;
        top: -17px;
        width: 100%;
    }
\tbody
\t{
\t\tbackground-image:none !important;
\t}
</style>
<link href=\"css/edit.css\" rel=\"stylesheet\">
<!-- Start Header Image -->
<div class=\"headerDiv\" style=\"background-repeat: repeat-x; background-image: url('images/header_bg.png')\">

</div><!-- End Header Image -->

<div class=\"container theme-showcase\" id=\"mainDiv\"><style type=\"text/css\">
    .line_through_label{background-color: #fff; left: 50%; margin-left: -25px; position: absolute; text-align: center; top: 10px; width:
        50px; font-size: 15px;}
</style>
<br><br><br><br>
<div class=\"row\">
    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12\"></div>
    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
        <div>
            <h3>Forgotten your password?</h3>
        </div>
        <div>
            No problem you'll be back online in no time!
        </div>
        <br><br>
        <div>
            Simply enter your email address or username<br class=\"hidden-xs\">
            registered with your account and we'll send you an<br class=\"hidden-xs\">
            email with instructions for resetting your password
        </div>
   </div>
</div>
<br><br>

<div class=\"row\">
    <div class=\"col-sm-2 col-xs-12 text-right text-left-xs no_col_right_padding\">
        @Username:
    </div>
    <div class=\"col-md-4 col-sm-6 col-xs-12\">
       <input type=\"text\" value=\"\" class=\"form-control\" name=\"username\">
    </div>
</div>
<div class=\"row\" style=\"margin-bottom: 15px; margin-top: 30px;\">
    <div class=\"col-sm-8 col-xs-12 text-center\">
        <hr class=\"hr_subline\">
        <div class=\"line_through_label\">OR</div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-2 col-xs-12 text-right text-left-xs no_col_right_padding\">
        Email Address:
    </div>
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <div class=\"col-sm-5 col-md-3 col-xs-12 form-group\">
                <input type=\"text\" value=\"\" class=\"form-control\" name=\"email\">
            </div>
            <div class=\"col-sm-3 col-xs-12\">
                <a href=\"../../prototype-general-flat/prototypes/index.html#Forgot_PasswordUsername__SuccessPage\">
\t\t\t\t<input type=\"submit\" name=\"sendins\" value=\"Send Instructions\" class=\"btn btn-success\">
            </a> </div>
        </div>
    </div>
</div>

<br><br>
<div class=\"row\">
    <div class=\"col-sm-2 col-xs-12\"></div>
    <div class=\"col-sm-10 col-xs-12\">
        Still can't log in? <a href=\"mailto:support@themusicsite.com&amp;subject=Forgotten Password\" class=\"green\">Contact The Support Team</a>
    </div>
</div>
<br><br><br></div>
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
                        <li><a href=\"https://twitter.com/themusicsitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/tweet_icon.png\"></a></li>
                        <li><a href=\"https://www.facebook.com/TheMusicSitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/fb_icon.png\"></a></li>
                        <li><a href=\"http://www.youtube.com/subscription_center?add_user=PitchMyStuff\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/play_icon.png\"></a></li>
                        <li><a href=\"https://plus.google.com/118156278029274131168/about\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/gplus_icon.png\"></a></li>
                        <li class=\"social_instagram_icon\"><a href=\"http://instagram.com/themusicsitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/instagram_icon.png\"></a></li>
                        <li class=\"social_p_icon\"><a href=\"http://www.pinterest.com/themusicsite\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/p_icon.png\"></a></li>
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
                        <li><a href=\"https://twitter.com/themusicsitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/tweet_icon.png\"></a></li>
                        <li><a href=\"https://www.facebook.com/TheMusicSitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/fb_icon.png\"></a></li>
                        <li><a href=\"http://www.youtube.com/subscription_center?add_user=PitchMyStuff\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/play_icon.png\"></a></li>
                        <li><a href=\"https://plus.google.com/118156278029274131168/about\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/gplus_icon.png\"></a></li>
                        <li class=\"social_instagram_icon\"><a href=\"http://instagram.com/themusicsitecom\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/instagram_icon.png\"></a></li>
                        <li class=\"social_p_icon\"><a href=\"http://www.pinterest.com/themusicsite\" target=\"_blank\"><img class=\"img-responsive\" src=\"/Music_Site/web/bundles/tmsuserjoinpage/images/p_icon.png\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"hidden-xs\" style=\"margin-top: 10px;\"></div>
    </div>
</div></div>

";
        // line 150
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:footer.html.twig");
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tmsuserjoinpage/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
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

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User:forgotpwd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 5,  184 => 4,  180 => 3,  175 => 2,  172 => 1,  168 => 150,  22 => 7,  20 => 1,);
    }
}
