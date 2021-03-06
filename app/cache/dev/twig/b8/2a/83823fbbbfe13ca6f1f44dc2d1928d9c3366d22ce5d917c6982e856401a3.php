<?php

/* TMSUserJoinPageBundle:User:privacy_policy.html.twig */
class __TwigTemplate_b82a83823fbbbfe13ca6f1f44dc2d1928d9c3366d22ce5d917c6982e856401a3 extends Twig_Template
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
\t\t
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
    #headerDiv{margin-top: -18px; background-color:#555962; width: 100%;}
</style>
<div id=\"headerDiv\" class=\"text-center text-left-xs\">
<br><br><br>
    <div class=\"container\">
        <div class=\"hidden-xs\">
            <h3 style=\"margin: 0px; line-height: 100px; display: none;\" class=\"white privacy_page\">PRIVACY POLICY</h3>
            <div style=\"display: none;\" class=\"terms_condition_page1\">
                <h3 style=\"margin: 0px; line-height: 100px;\" class=\"white\">
                    TERMS &amp; CONDITIONS
                </h3>
                <i class=\"white\" style=\"position: relative; top: -35px;\">(Digital Distribution)</i>
            </div>
            <div style=\"display: none;\" class=\"terms_condition_page2\">
                <h3 style=\"margin: 0px; line-height: 100px;\" class=\"white\">
                    TERMS &amp; CONDITIONS
                </h3>
                <i class=\"white\" style=\"position: relative; top: -35px;\">(The Small Print)</i>
            </div>
            <div style=\"display: none;\" class=\"faq_page\">
                <h3 style=\"margin: 0px; line-height: 100px;\" class=\"white\">
                    FAQ'S
                </h3>
                <i class=\"white\" style=\"position: relative; top: -35px;\">(Frequently Asked Questions)</i>
            </div>

        </div>

        <div class=\"visible-xs\">
            <h4 style=\"margin: 0px; line-height: 50px; display: none;\" class=\"white privacy_page\">PRIVACY POLICY</h4>
            <div style=\"display: none;\" class=\"terms_condition_page1\">
                <h4 style=\"margin: 0px; line-height: 50px;\" class=\"white\">
                    TERMS &amp; CONDITIONS
                </h4>
                <i class=\"white\" style=\"position: relative; top: -10px;\">(Digital Distribution)</i>
            </div>
            <div style=\"display: none;\" class=\"terms_condition_page2\">
                <h4 style=\"margin: 0px; line-height: 50px;\" class=\"white\">
                    TERMS &amp; CONDITIONS
                </h4>
                <i class=\"white\" style=\"position: relative; top: -10px;\">(The Small Print)</i>
            </div>
            <div style=\"display: none;\" class=\"faq_page\">
                <h4 style=\"margin: 0px; line-height: 50px;\" class=\"white\">
                    FAQ'S
                </h4>
                <i class=\"white\" style=\"position: relative; top: -10px;\">(Frequently Asked Questions)</i>
            </div>
        </div>
    </div>
</div>
<br>
<div class=\"container theme-showcase\" id=\"mainDiv\"><style type=\"text/css\">
    .privacy_page{display: inline-block !important;}
</style>
<div class=\"row\">
    <div class=\"col-sm-8 col-sm-offset-2\">
        <p>          At TheMusicSite.com  we're committed to ensuring and protecting your privacy at any time you are on  our website or communicate electronically with our personnel&nbsp;<br>
          <br>
          Our Privacy Policy is detailed below and contains explanations as to how we may  use your personal information provided to us or any we collect through legal  means.&nbsp;<br>
  <br>
          Updates of our Privacy Policy are completed frequently, thus you should peruse  this Policy habitually via these Privacy Policy pages on our website.<br>
  <br>
  <br>
  <strong>1.&nbsp;Information We  Collect from You</strong><br>
  <br>
          Data can be collected and processed when our website is in operation by you.  The following are approved methods of collection:&nbsp;<br>
  <br>
  <strong>1.1</strong>&nbsp;&nbsp;If you register as a member or  artist or complete a purchase, by filling out a form we can collect the  information provided.&nbsp;<br>
  <br>
  <strong>1.2</strong>&nbsp;&nbsp;Web traffic data, weblogs,  location data, and any other communication can be collected.&nbsp; These  details come from your visit to our site and any resource tools you use while  on the site.&nbsp;<br>
  <br>
  <strong>1.3</strong>&nbsp;&nbsp;Any communication on our website  or to personnel allows us to collect information.&nbsp;<br>
  <br>
  <br>
  <strong>2.&nbsp;Use of Cookies</strong><br>
  <br>
          Circumstances may arise when we may need to gather information about your  computer to help provide appropriate services or products to you such as to  customize any newsletter or advertising content we may send you.&nbsp; The data  gathered is solely statistical data, which may be shared with  advertisers.&nbsp;&nbsp;<br>
  <br>
          The facts collected about you are statistical only. No identifying information  will be shared about our visitors and how they made use of our site.&nbsp; No  personal details will ever be shared.&nbsp;<br>
  <br>
          Cookies are used to collect general online usage by using a cookie file.&nbsp;  If used this cookie file is downloaded without prompting.&nbsp; It will be  placed on your hard drive with information transferred to the hard drive  allowing the cookies to be used for data collection.&nbsp; A cookie is used to  improve any services/ products, or overall website characteristic we offer you.&nbsp;<br>
  <br>
          Any computer has the option to decline cookies.&nbsp; Your web browser options  include an \"enable\" button to decline cookies.&nbsp; It is imperative that you  understand by declining cookies you may be limiting your access to sections of  our website.&nbsp;<br>
  <br>
          If our advertisers use cookies it will result only from a click on their advertisement, and we do  not have control over their cookies if used. &nbsp;<br>
  <br>
  <br>
  <strong>3.&nbsp;Use of Your  Information</strong><br>
  <br>
          Information stored and collected about you allows us to improve our services or  products for you.&nbsp; Added to this parameter, we may use your information  for the following purposes:&nbsp;<br>
  <br>
  <strong>3.1</strong>&nbsp;&nbsp;Any commitment we make on a  contracted basis.&nbsp;<br>
  <br>
  <strong>3.2</strong>&nbsp;&nbsp;If information is requested from  our website concerning services or products offered, we may use your  data.&nbsp; Products or services which may be of interest to you can also deem  a communication from us, if permission has been granted.&nbsp;<br>
  <br>
  <strong>3.3</strong>&nbsp;&nbsp;Notification re- changes or  improvements may be sent to you in regards to product or service changes that  could affect our service to you.&nbsp;<br>
  <br>
  <strong>3.4</strong>&nbsp;&nbsp;Existing users can be contacted  on the topic of facilities or services related to a previous activity if we  feel you might be interested in these additional topics.&nbsp;&nbsp;<br>
  <br>
  <strong>3.5</strong>&nbsp;&nbsp;Added use of your data may  include permission for third parties to use your data.&nbsp; This permission  would be granted by you in regards to unrelated products or services that may  be in your interests.&nbsp; We or third parties can only contact you in regards  to this information if consent has been provided for information  collection.&nbsp; &nbsp;&nbsp;<br>
  <br>
  <strong>3.6</strong>&nbsp;&nbsp;Third party contact or  communications from our website, as a new customer, is only made if you have  granted us permission.&nbsp; These communications are only offered for  information you consented to and no other unrelated information.&nbsp;&nbsp;&nbsp;<br>
  <br>
  <strong>3.7</strong>&nbsp;&nbsp;Data that you do not want us or  third parties to use can be withheld, once consent has been given regarding our  collection of your data.&nbsp; We will always provide you with an opportunity  to decline communications and our or third party data usage.&nbsp;<br>
  <br>
  <strong>3.8</strong>&nbsp;&nbsp;Identifiable data, which could  be used to disclose who you are, is never shared.&nbsp; We only provide  statistical related data about our visitors to third parties like advertisers  to ensure your privacy.&nbsp; &nbsp;<br>
  <br>
  <br>
  <strong>4.</strong>&nbsp;&nbsp;<strong>Storing Your Personal Data</strong><br>
  <br>
  <strong>4.1</strong>&nbsp;&nbsp;Outside of the European Economic  Area are places for storing and processing data we collect from you.&nbsp; We  may take advantage of these outside areas, allowing staff to process data  collected from you.&nbsp; These processors may work for our suppliers.&nbsp;  The transfer of this data may include processing and completing your order on  our site, such as utilising your payment information or offering support  services.&nbsp; We take all reasonable processes to ensure your data is secure  and in agreement with our Privacy Policy as outlined here.&nbsp;<br>
  <br>
  <strong>4.2</strong>&nbsp;&nbsp;Secured servers are used by our  company to ensure proper data storage.&nbsp; Information on transactions is  kept encrypted for safety measures.&nbsp;&nbsp;<br>
  <br>
  <strong>4.3</strong>&nbsp;&nbsp;Transmission of data on the  internet can never be guaranteed to be ultimately secure.&nbsp; We do not and  cannot guarantee security of information collected electronically or  transmitted, however we take all necessary steps to provide the best security  available.&nbsp; As a result of our inability to guarantee safety, you are  submitting information to us at your own risk.&nbsp; Where needed a password  may be necessary to access areas of our site. You are responsible for the  safety and confidentiality of the password you generate.&nbsp; &nbsp;<br>
  <br>
  <br>
  <strong>5.&nbsp;Disclosing Your  Information</strong><br>
  <br>
          Personal information to third parties may be disclosed:&nbsp;<br>
  <br>
  <strong>5.1</strong>&nbsp;This disclosure occurs if we were to sell all  or a section of our business or assets to a third party.&nbsp;<br>
  <br>
  <strong>5.2</strong>&nbsp;Personal information can be offered to  any member of our company, such as subsidiaries, holding companies and their  subsidiaries only if deemed appropriate.&nbsp;<br>
  <br>
  <strong>5.3</strong>&nbsp;Legal requirements may mean a sharing  of your information.&nbsp;<br>
  <br>
  <strong>5.4</strong>&nbsp;Lowering credit risk and fraud  protection may result in information disclosure.<br>
  <br>
  <br>
  <strong>6. Profiles, Chat Rooms,  Message Boards, Walls and Public Forums</strong><br>
  <br>
          Please be aware that whenever you voluntarily post public information to Chat  Rooms, Profiles, Message Boards or any other Public Forum that information can  be accessed by the public and can in turn be used by those people to send you  unsolicited communications TheMusicSite.com is not responsible for the personally  identifiable information you choose to submit. Please consider your actions  therefore before you post any personal information online.<br>
  <br>
  <br>
  <strong>7. Minors</strong>&nbsp;<br>
  <br>
          TheMusicSite.com operates in consideration and support of the<a href=\"http://www.ftc.gov/ogc/coppa1.htm\">&nbsp;Children's  Online Privacy Protection Act of 1998</a>&nbsp;<br>
          Persons aged thirteen  or younger are not allowed to become registered users of our site.<br>
  <br>
  <br>
  <strong>8.&nbsp;Third Party  Links</strong>&nbsp;<br>
  <br>
          Links might be discovered on our site that belongs to a third party.&nbsp; Any  third party website linked to our website has to have and observe a privacy  policy. You should check their terms.&nbsp; We do not accept liability or  responsibility for their privacy policies, based on our lack of control over  these third party links.&nbsp;&nbsp;&nbsp;<br>
  <br>
  <br>
  <strong>9. Editing or deleting  your account information</strong>&nbsp;<br>
  <br>
          Our site provides you with the ability to edit the information in your user  account that you provided to during the registration process. You may request  deletion of your user account by sending an email to <a href=\"mailto:admin@themusicsite.com\">admin@themusicsite.com</a>&nbsp;Content  or other information that you may have provided, and that is not contained  within your user account, such as posts that may appear within site forums, may  continue to remain on the site at TheMusicSite.com's discretion, even though  your user account is deleted. Please see the site's&nbsp;<a href=\"http://pitchmystuff.co.uk/terms_of_use.php\">Terms &amp; Conditions</a>&nbsp;for more information.<br>
  <br>
  <br>
  <strong>10.&nbsp;Access to Information</strong>&nbsp;<br>
  <br>
          The Data Protection Act 1998 was established to govern online electronic  communications.&nbsp; The act gives you access to any data we have about  you.&nbsp; To gain access to this information a small fee of £10 is  needed.&nbsp; This fee allows us to process your request by covering our  costs.&nbsp; Contact information is given below, which should be used to gain details about  information we hold on you.<br>
  <br>
  <br>
  <strong>11. Changes to this  privacy policy</strong>&nbsp;<br>
  <br>
          Changes may be made to this policy from time to time. You will be notified of  substantial changes to our policy by the posting of a prominent announcement on  the site, and/or by a message being sent to the e-mail address you have  provided, which is contained in your user settings.<br>
  <br>
  <br>
  <strong>12.&nbsp;Contacting Us</strong>&nbsp;<br>
  <br>
          We welcome and hope you do not hesitate to make any queries, comments or  requests you may have regarding this Privacy Policy. &nbsp;&nbsp;<br>
  <br>
        Please contact us at&nbsp;<a href=\"mailto:admin@themusicsite.com\">admin@themusicsite.com</a><br>
        <br>
        <br>
        <br>
      </p>
</div>
</div>
<br><br></div>
";
        // line 222
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:footer_static.html.twig");
        echo "  
</div>
\t\t
</div></div></div>
    ";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User:privacy_policy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 222,  54 => 10,  51 => 8,  45 => 5,  41 => 4,  37 => 3,  34 => 2,  31 => 1,  27 => 8,  23 => 7,  21 => 1,);
    }
}
