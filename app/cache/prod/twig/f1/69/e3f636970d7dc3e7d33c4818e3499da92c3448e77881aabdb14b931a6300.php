<?php

/* TMSUserJoinPageBundle:User:terms_conditions.html.twig */
class __TwigTemplate_f169e3f636970d7dc3e7d33c4818e3499da92c3448e77881aabdb14b931a6300 extends Twig_Template
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
    <div id=\"displayed\"><style type=\"text/css\">
    #headerDiv{margin-top: -18px; background-color:#555962; width: 100%;}
</style>
<div id=\"headerDiv\" class=\"text-center text-left-xs\">
<br><br>
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
    .terms_condition_page2{display: inline-block !important;}
</style>
<div class=\"row\">
    <div class=\"col-sm-8 col-sm-offset-2\">
        <p>This  Agreement is between You and The Music Site Ltd a UK Registered Company (formerly  PitchMyStuff Ltd) By creating an account on TheMusicSite.com website you are  deemed to accept and agree and be bound by the terms and conditions  herein.&nbsp;</p>
        <p><strong><u>Definitions.</u></strong>&nbsp;<br>
          The terms \"You\" and \"Your\" shall mean the individual or entity that has  registered as a user of TheMusicSite.com website.&nbsp;</p>
        <p>The  terms \"We\" \"Us\" \"Our\" \"the Company\" and \"TheMusicSite.com\" shall mean  the company TheMusicSite Ltd as owner and provider of the website www.TheMusicSite.com</p>
        <p>The  term \"Agreement\" shall mean this document and all details contained within and  shall constitute the contract between You and The Music Site Ltd.</p>
        <p>The  term \"Website\" refers to the website www.TheMusicSite.com and includes all/any  such URL's that The Music Site Ltd may from time to time designate  TheMusicSite.com &nbsp;through the use of this  website along with any other works or data necessary for TheMusicSite.com to  publish, distribute, license or sell or copyright such Works which includes  though not limited to, musical works, written works, spoken word works and  artwork such as album covers and designs.</p>
        <p>&nbsp;The  term \"Retailer\" shall mean any entity to whom TheMusicSite.com provides copies  of the Works for the license or sale.</p>
        <p>&nbsp;</p>
        <p><strong><u>Term.</u></strong>&nbsp;<br>
          This Agreement shall commence on the date you first join as a registered member  on the TheMusicSite.com website and shall remain in effect until terminated by  one of the parties according to its terms.&nbsp;</p>
        <p>By  using any of the TheMusicSite.com Tools, Features and Services and/or adding  any content/contributing to the site, you are agreeing that you have read,  accept and willing to abide by the Terms &amp; Conditions of The Music Site  Ltd.</p>
        <p>&nbsp;</p>
        <p><strong><u>Ownership  of Works.</u></strong>&nbsp;<br>
          Subject to the Terms and Conditions within this and any other Agreement between  You and Us, TheMusicSite.com acknowledges that all rights, titles and interests  in and to the Works remain with You.</p>
        <p>TheMusicSite.com  protects and enforces copyright of its own creative material and respects the  copyright properties of others. Materials may be made available on or via the  website by users and third parties not within the control of the Company. The  company will not permit materials known by us to be infringing to remain on  this website. You should notify us promptly if you legitimately believe any  materials on the website infringes your copyright or that of a third party.  Upon receiving such notification of alleged infringement we will respond  expeditiously to remove content or disable access to the alleged infringing  material, or as a minimum make contact with the alleged infringing party, and  will work to support a resolution of the claim between the notifying party and  the alleged infringer.</p>
        <p>&nbsp;</p>
        <p><strong><u>Copyright  Registration.</u></strong><br>
          In order to register Work onto the Copyright Registration facility you are  required to be a subscribed member of TheMusicSite.com. Work may be submitted  for registration at a charge per entry or by purchasing credits for multiple  entries/submissions, details of which are specified below and/or on the  relevant pages on the website.</p>
        <p>The  Copyright Registration service provides unbiased, independent and verifiable  evidence of the Work itself, the registered creator(s) and the date and time of  registration with the TheMusicSite.com Copyright registration. It does not  itself provide proof of creative copyright, but provides a means by which, in  the event of an alleged infringement, you as the registered creator are able to  serve independent evidence to substantiate your claim.</p>
        <p>TheMusicSite.com  Copyright registration service is a chargeable service for which We will charge  You a fee relevant to the package You choose as follows unless made free of  charge for promotional or other purposes for any period at the discretion of TheMusicSite.com:</p>
        <p>Payment  is required prior to submission of Copyright and to facilitate this you will be  asked to choose how many copyright submissions you require.&nbsp;Charges vary  according to the number of copyright submission credits purchased as outlined  below.</p>
        <p>If  choosing multiple copyright credits We will charge You a single fee for the  full amount on the date of purchase relevant to the number of credits You  purchased. Any credits not used immediately will be available for subsequent  submission at any time suit your own requirements.</p>
        <p>Charges  are subject to change from time to time&nbsp;details of which are specified in  the relevant section above and/or on the relevant pages on the site.</p>
        <p>Copyright submissions once  paid for and  accepted will be held on file for a period of seventy (70) years with no  further charge.</p>
        <p>Upon  accepted payment your copyright submission(s) will proceed to completion and an  email confirmation will be sent to your registered email address with secure  details of each individual Copyright registration. Subsequent submission(s)  will follow the same procedure without further payment until all credits are  used.</p>
        <p>You  agree not to register work which is the intellectual property of someone else  and so must represent that you are the legitimate claimant for the work for  which you are to register copyright. Work submitted for Copyright Registration  is accepted by Us in good faith to be the legitimate work of the registering  member.</p>
        <p>TheMusicSite.com  claims no ownership, intellectual property rights, or any other rights over  material submitted for Copyright Registration.</p>
        <p>By  submitting work for Copyright Registration with TheMusicSite.com, you are  agreeing that you have read, accept and willing to abide by the Terms &amp;  Conditions of The Music Site Ltd.<br>
          <br>
        </p>
        <p><strong><u>Digital  Distribution.</u></strong><br>
          In order to register Work for Digital Distribution you are required to be a  subscribed member of &nbsp;TheMusicSite.com.  You will be granting TheMusicSite.com non-exclusive rights in and to the  content to publish and promote your Work on the Website&nbsp;and for the  distribution, license and sale of your Works through means deemed reasonable  and appropriate by Us including making portions or the whole of your Works available  for performance on the Website.</p>
        <p>TheMusicSite.com  Digital Distribution is a chargeable subscribed service for which We will  charge You an annual fee relevant to the distribution package You choose as  follows unless made free of charge for promotional or other purposes for any  period at the discretion of TheMusicSite.com.</p>
        <p>Charges  are subject to change from time to time,&nbsp;details of which are on the  relevant pages on the site.&nbsp;Changes to the pricing of any chargeable  service will be advertised on the website and in some circumstances may be  emailed to relevant members.</p>
        <p>For  full details of our Digital Distribution Terms and Conditions <u><a href=\"../../prototype-general-flat/prototypes/index.html#Terms_and_Conditions_Page_Distribution\">click here</a></u>. </p>
        <p>By  submitting work for Digital Distribution through TheMusicSite.com, you are  agreeing that you have read, accept and willing to abide by the Terms &amp;  Conditions of The Music Site Ltd.</p>
        <p>&nbsp;</p>
        <p><strong><u>Events  Billboard.</u></strong><u> </u><br>
          TheMusicSite.com  Events Billboard is currently free of charge to use.</p>
        <p>In  the event that TheMusicSite.com decides to incur charges for use of the Events  Billboard, suitable notification of a minimum 30 days, will be made apparent  across the website. Users then wishing to continue may elect to do so at a  charge.</p>
        <p><strong><u>&nbsp;</u></strong></p>
        <p><strong><u>Fees  and Payments.</u></strong> <br>
          You  may use the Website without charge or monetary obligation to interact and  access all public facilities, upload Your Works and other social network  content as applicable to Your membership onto the main TheMusicSite.com website  via the profile Pages and make use of all non-subscribed/non-chargeable  services and facilities.</p>
        <p>Use  of Artist Tools  and facilities on TheMusicSite.com.com and/or any partner  sites including, but not limited to Collaboration Suite, Copyright Service ,  Digital Distribution, Events and Contracts, may require subscribed membership.  Use of charged Artist Tools  will be valid only for the period paid for. If  You cancel your premium membership payment or subscription, or if You fail to  renew any Premium Membership payment or subscription where necessary, the  relevant Premium Service(s) to which Your payment or subscription remains  outstanding will be suspended at Our discretion.</p>
        <p>Payments  made, where applicable monthly, annually or any other subscription period  should be completed on time and in full. If You cancel or fail to pay the  recurring payments before the end of the period You have agreed, the service to  which the payment relates may be suspended at Our discretion.</p>
        <p>If  after a period of one month any payment or subscription remains unpaid, Your  files may, at Our discretion, be deleted and We shall not be obliged to provide  any proof that You were the owner of any content lodged with the company,  including but not limited to music, text, data, links, photographs, pictures,  graphics, video, and any other materials, not withstanding any obligation we  maintain to retain information for any period beyond this such as Copyright  registrations.</p>
        <p>We  will not undertake to provide any Artist Tools  until you provide Us with  the appropriate billing information and make suitable commitment to pay to Us  the fees outlined in these Terms &amp; Conditions or on the relevant pages on  the site, as amended from time to time, which may be viewed in the relevant  sections below.</p>
        <p>You  can cancel your premium subscriptions at any time by giving the specified  period of notice where applicable via the designated methods specific to the  subscription service or facility, details of which can be viewed in the  relevant sections below and/or via the relevant pages on the site.</p>
        <p>Please  note that the deletion or deactivation of your TheMusicSite.com member account  does not, and will not, terminate any ongoing subscriptions to any Artist Tools  you are subscribed to with TheMusicSite.com and/or any partner sites.  Details for terminating these subscriptions are found in the relevant sections  within these Terms &amp; Conditions or on the relevant pages on the site.</p>
        <p>You  agree to keep your email address, personal details, contact information and  bank information (where relevant) up-to-date, so We can always contact You when  necessary and make and/or take payments when applicable.&nbsp;</p>
        <p>TheMusicSite.com  may change its fee schedules upon 30 days notice of such intention, declaration  of which may be given by e-mail notification to the address You provide within  your account details or by posting any proposed changes on the website. If You  do not terminate this Agreement before the new fees take effect You will be  deemed to have agreed to the new changes. You should refer to these Terms &amp;  Conditions regularly.</p>
        <p>&nbsp;</p>
        <p><strong><u>Representations,  Warranties &amp; Restrictions of Use.</u></strong></p>
        <p><strong>You  hereby represent and warrant that You:</strong></p>
        <p>are  at least 14 years of age and have full authority to enter into and fully  perform Your obligations detailed within this Agreement</p>
        <p>in  the process of registration and usage of the website, services and facilities  all information provided by You is true, accurate, complete and current and  that you will promptly update your registration information as necessary such  that it remains true, accurate, complete and current</p>
        <p>own  or have the worldwide rights necessary to enter into this Agreement in  connection with the Works including that You have the necessary and full  authority to act on behalf of any and all owners of any right, title or  interest in and to the Works licenses and authorizations that You are granting  pursuant to this Agreement do not infringe or violate any third party's  intellectual property or other rights</p>
        <p>will  obtain and pay for any and all clearances and licenses that may be required for  the authorizations or licenses You grant in this Agreement, including without  limitation royalties or other amounts due to third parties such as other  performers, authors or co-authors, owners or co-owners, artists or producers,  license fees, wages and consulting fees</p>
        <p>acknowledge  and agree that you are solely responsible for all materials that you post or  publish on the Website including without limitation information, code, data,  text, software, music, sound, links, photographs, pictures, graphics, video,  chat, messages, files and any other materials</p>
        <p>have  obtained all necessary third-party consents licenses and permissions necessary  to enter into and fully perform Your obligations detailed within this Agreement</p>
        <p>will  not harvest or collect email addresses or other contact information by  electronic or other means for the purposes of sending unsolicited emails or  other unsolicited communications or to use automated scripts to collect  information from the Website</p>
        <p>will  not use the Website in any unlawful manner or in any other manner that could  damage, disable, overburden or impair the Website</p>
        <p>will  not falsely identify yourself as any other person or entity to or on TheMusicSite.com  or otherwise misrepresent your affiliation with a person or entity, impersonate  another user, forge headers or otherwise manipulate identifiers, including  URLs, or disguise the source or origin of any information. If requested by TheMusicSite.com  You will provide proof such as a copy of a driver's license passport  identification card or other document deemed acceptable to TheMusicSite.com to  verify Your identity</p>
        <p>will  not use the Website to upload, post, email, transmit or otherwise make  available any Work that we deem to be harmful, threatening, abusive, harassing,  vulgar, obscene, hateful, or racially, ethnically or otherwise objectionable</p>
        <p>will  not use the Website to upload, post, email, transmit or otherwise make  available any unacceptable, unsolicited or unauthorized advertising,  promotional materials, \"junk mail,\" \"spam,\" \"chain  letters,\" \"pyramid schemes,\" or any other form of solicitation</p>
        <p>will  not use the Website to upload, post, email, transmit or otherwise make  available any material that contains software viruses or any other computer  code, files or programs designed to interrupt, destroy or limit the  functionality of any computer software or hardware or telecommunications  equipment</p>
        <p>will  not use the Website to use or attempt to use another user's account without  authorization from the TheMusicSite.com or create a false identity using the  Services or the Website</p>


        <p><strong>&nbsp;</strong></p>
        <p><strong>Furthermore  You hereby represent and warrant that You:</strong></p>
        <p>will  use any music files that you download and copy in compliance with the following  Usage Rules...</p>
        <p>shall  be authorised to use the music files only for personal, non-commercial use</p>
        <p>may  not combine a music file with any video or image file to create a multimedia  work</p>
        <p>may  not use a music file as a musical ring tone, alert or alarm in connection with  a phone or phone calls</p>
        <p>do understand  and accept that the download and copy of a music file does not transfer to you  any commercial or promotional use rights in the music file</p>
        <p>do  agree that your download and copy of music files constitutes your acceptance of  and agreement to these Terms and Conditions and that any use of the music files  other than in accordance with these Usage Rules may constitute a copyright  infringement</p>
        <p>do  agree that TheMusicSite.com may use any material uploaded at any time to the  site including music, lyrics, photographs and videos past or current for use at  our discretion for the purposes of promoting TheMusicSite.com. </p>
        <p>Exposure Remuneration (host free of charge) appearance, do agree, as  an artist / creative talent,&nbsp; if so  requested in writing (email included) by Us, to provide TheMusicSite.com with no  less than one exclusive interview (of a period minimum one hour) and /or photo-shoot  (of a period minimum two hours) at our expense, at a suitable and mutually  agreed location.</p>
        <p>agree  that the content of&nbsp; said exclusive  interview and/or photo-shoot, once released by Us may be used by You for your  own purposes provided that any distribution or presentation in any form shall  always include attribution to TheMusicSite.com</p>
        <p>will  comply with all applicable laws, rules and regulations detailed within this Agreement</p>
        <p>TheMusicSite.com  provides this website together with its services and facilities on an 'As Is'  basis and cannot make representation or warranty that:</p>
        <p>the  website services and facilities are appropriate or continuously available for  use in all locations</p>
        <p>access  to or use of the website services and facilities will be at all times  uninterrupted timely secure or error free</p>
        <p>the  website services and facilities will at all times be free of viruses worms  Trojan horses or other items of a damaging or destructive nature</p>
        <p>the  website services and facilities will at all times be free of errors technical  problems or inaccuracies or that these will or can be repaired or corrected</p>
        <p>the  website services and facilities will at all times remain merchantable and fit  for purpose</p>
        <p>the  website services and facilities will remain unchanged not least but not limited  to the context of content functionality or facility</p>
        <p>TheMusicSite.com  makes no representations whatsoever about any other Internet site that you may  access through our website service or facilities. By accessing a non-TheMusicSite.com  Web site you acknowledge that it is independent from TheMusicSite.com and that  we have no control over the content on that site</p>
        <p>Any  link to a non-TheMusicSite.com site does not mean that We endorse or accept any  responsibility for the content or the us, of that site. You must take  appropriate precautions to ensure that whatever you select for your use is free  of items such as viruses worms Trojan horses and other items of a destructive  nature</p>
        <p>You  assume all risk for any damage to Your computer system or loss of data that  results from access to TheMusicSite.com or any other website including but not  restricted to damage resulting from worms Trojan horses and other items of a  damaging or destructive nature</p>
        <p>&nbsp;</p>
        <p><strong><u>Content</u></strong> <br>
          You  hereby acknowledge and agree that you are solely responsible for all materials  that you post or publish on the Web Site including but not limited to music,  text, data, links, photographs, pictures, graphics, video, and any other  materials.</p>
        <p>You  hereby acknowledge and agree that any Content submitted by you or through your  account will not violate or infringe upon the rights of any third party  including but not limited to copyright, trademark, privacy, publicity or other  personal or proprietary rights or contain libellous, defamatory, racist or  otherwise unlawful material</p>
        <p>You  represent and warrant that you have all legal rights necessary to publish any  Content on the Web Site, or that you own such Content</p>
        <p>You  hereby acknowledge and agree that the Company shall at all times, at its sole  discretion, possess the right to refuse to include and/or to remove or disable  access to any or all of your Content.</p>
        <p>Upon  receiving such notification of alleged infringement we will respond  expeditiously to remove content or disable access to the alleged infringing  material and will work to support a resolution of the claim between the  notifying party and the alleged infringer. TheMusicSite.com reserves the right  to suspend publication and/or distribution of the Work and forwarding of any  sales data or payments received from Retailers pending resolution of the claim.</p>
        <p>You  agree to cooperate fully in the defence of any such claim and We will work to  support a resolution of the claim between the parties. In the event of Us  becoming involved in any claim and/or litigation we reserve the right to charge  costs and fees.</p>
        <p>You  hereby acknowledge and agree that The Music Site Ltd may at its sole discretion  disclose any Content in order to:<br>
          <br>
          a)&nbsp;&nbsp; comply with law enforcement legal process and / or court  orders&nbsp;<br>
  <br>
          b)&nbsp;&nbsp; settle intellectual property disputes<br>
  <br>
          c)&nbsp;&nbsp; protect the rights and safety of individuals.&nbsp;</p>
        <p>&nbsp;</p>
        <p><strong><u>Limitation  of Liability.</u></strong> <br>
          TheMusicSite.com  shall not be liable for any direct, indirect, punitive, special, incidental,  consequential, or exemplary damages including without limitation, loss of  business, revenue, profits, goodwill, use, data, electronically transmitted  records or documents, or other economic advantage, arising out of or in  connection with the website, even if TheMusicSite.com has previously been  advised of or reasonably could have foreseen the possibility of such damages  however they arise, whether in breach of contract or in tort (including  negligence) including without limitation damages due to:</p>
        <p>1.&nbsp;  &nbsp;the use or misuse of or the inability to use this website</p>
        <p>1.&nbsp;  statements or conduct of any third party on the website including without  limitation unauthorized access to or alteration of transmissions or data,  malicious or criminal behaviour or false or fraudulent transactions</p>
        <p>1.&nbsp;  content or information entered by any user or member or that you may download,  use, modify or distribute and any other matter relating to the services offered  through this site</p>
        <p>&nbsp;</p>
        <p><strong><u>Indemnity</u></strong> <br>
          You  agree to defend, indemnify and hold TheMusicSite.com and its subsidiaries,  affiliates, officers, directors, agents, employees, contractors and  representatives harmless from any claim or demand including reasonable legal  costs and fees made by any third party due to or arising out of your access to  or use of the website, services and facilities including but not limited to any  claim or allegation that Your Works infringed the intellectual property or  other rights of a third party and similarly any claim made by You against a  third party for allegedly infringing Your copyright</p>
        <p>&nbsp;</p>
        <p><strong><u>Age  Restrictions</u></strong> <br>
          Due  to the possible explicit nature of some of the content of the Website and in  accordance with the&nbsp;<u>'<a href=\"http://en.wikipedia.org/wiki/Children's_Online_Privacy_Protection_Act\" target=\"_blank\">Childrens Online Privacy Protection  Act 1998</a>'</u>&nbsp;individuals of the age 13 and younger are  prohibited from accessing the Website, services and facilities without  verifiable parental consent which must be provided in hardcopy to TheMusicSite.com  before any such access can be authorized.</p>
        <p>&nbsp;</p>
        <p><strong><u>Dispute  Resolution</u></strong> <br>
          In  the event of any controversy complaint or dispute by any party arising in  connection with this agreement notification must be sent promptly by email to  the registered email address for all parties involved detailing the full nature  of such controversy complaint or dispute. Any dispute which cannot be resolved  by negotiation shall be passed for mediation in accordance with&nbsp;<a href=\"http://www.cedr.com/solve/\" target=\"_blank\">Model Mediation Procedure</a>&nbsp;of the&nbsp;<a href=\"http://www.cedr.com/solve/\" target=\"_blank\">Centre for Effective Dispute Resolution</a>. Any such controversy or  claim shall be arbitrated on an individual basis and shall not be consolidated  in any arbitration with any claim or controversy of any other party, shall be  private, and shall not have preclusive effect in any proceeding involving other  parties. All parties consent to venue and jurisdiction in the English courts  for purposes of such action.&nbsp;</p>
        <p>&nbsp;</p>
        <p><strong><u>Notices</u></strong> <br>
          Any  notice required or permitted by this Agreement shall be given to TheMusicSite.com  at&nbsp;TheMusicSite.com <a href=\"mailto:admin@TheMusicSite.com\">admin@TheMusicSite.com</a>.&nbsp;Upon registration You  will provide TheMusicSite.com with a valid e-mail address at which We can  provide you with any such notice(s) required or permitted by this  Agreement.&nbsp;In addition You agree that TheMusicSite.com can communicate all  matters related to Your business relationship with Us by email to the email  address provided at registration.&nbsp;You may change Your e-mail address for  notices by updating your online user account.&nbsp;We may change our e-mail  address for notices by sending you an e-mail or posting the new e-mail address  on the Website<br>
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <strong><u>Amendments</u></strong><br>
          TheMusicSite.com  reserves the right to revise or modify the website services and facilities  offered through Agreement at any time without notice.&nbsp;TheMusicSite.com may  attempt to notify you when major changes are made to this Agreement however you  should periodically review these Terms &amp; Conditions.&nbsp;Your continued  use of this Website following any modification or revisions to this Website or  this Agreement will be deemed your acceptance of and agreement to the  modifications or revisions</p>
        <p>&nbsp;</p>
        <p><strong><u>Third  Party Rights.</u></strong> <br>
          Nothing  in this Agreement shall be deemed to confer any third-party rights or benefits</p>
        <p>&nbsp;</p>
        <p><strong><u>Non-Transfer</u></strong><u>.</u> <br>
          This  agreement remains exclusively between the parties detailed and is not  transferrable in full or part without the prior written agreement of both  parties</p>
        <p>&nbsp;</p>
        <p><strong><u>Relationship.</u></strong> <br>
          Nothing  in this Agreement shall create or be deemed to create a partnership or joint  venture or relationship of employer and employee or principal and agent between  the Parties. You and TheMusicSite.com are independent parties and no  partnership, joint venture, employee-employer or franchiser-franchisee  relationship is intended or created by this Agreement.</p>
        <p>&nbsp;</p>
        <p><strong><u>Non-Solicitation.</u></strong> <br>
          During  the term of this agreement and for a period of 24 months after termination  neither party shall solicit any employee engaged in connection with the  provision of the service(s) under this agreement without the other party's  prior written consent.</p>
        <p>&nbsp;</p>
        <p><strong><u>Force  Majeure.</u></strong> <br>
          TheMusicSite.com  shall not be held in breach of this agreement for failure to performance the  duties and obligations under this agreement when occasioned by an event of  force majeure including but not exclusively an act of God, fire, act of  government or state, war, terrorism, civil commotion, insurrection, embargo,  prevention from or hindrance in obtaining raw materials energy or other  supplies, labour disputes of third parties of whatever nature and any other  reason beyond its control.</p>
        <p>&nbsp;</p>
        <p><strong><u>Applicable  Law.</u></strong> <br>
          This  agreement shall be governed and construed according to English Law</p>
        <p>&nbsp;</p>
        <p><strong><u>Miscellaneous.</u></strong> <br>
          If  any provision of this Agreement is held to be invalid or unenforceable it shall  be struck and the remaining provisions shall be enforced. TheMusicSite.com's failure  to act with respect to a breach by You or others does not waive Our right to  act with respect to subsequent or similar breaches.</p>
        <p>This  Agreement sets forth the entire understanding and agreement between the parties  with respect to its subject matter.</p>
        <p>Our  website TheMusicSite.com.com is wholly owned by The Music Site Ltd a private  limited company registered in England. </p>
    </div>
</div>
<br><br></div>
";
        // line 257
        echo twig_include($this->env, $context, "TMSUserJoinPageBundle:User:footer_static.html.twig");
        echo "  
</div>
</div></div></div>
    ";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User:terms_conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 257,  52 => 9,  49 => 7,  43 => 4,  39 => 3,  34 => 2,  31 => 1,  27 => 7,  23 => 6,  21 => 1,);
    }
}
