<?php

/* TMSUserJoinPageBundle:User_org:show.html.twig */
class __TwigTemplate_66c4a6131aad19642e396c82b3945c6943d6553714ef776450230cad7464d45b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TMSUserJoinPageBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMSUserJoinPageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tmsuserjoinpage/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<h1>User</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>User_type</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "usertype", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nick_name</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nickname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>First_name</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Last_name</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salt</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_chat_status</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idchatstatus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sex", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptionme</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descriptionMe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_of_birth</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateofbirth", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_reg</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "datereg", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_last_login</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "datelastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Facebook_url</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "facebookurl", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Twitter_url</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "twitterurl", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Youtube_url</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "youtubeurl", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Myspace_url</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "myspaceurl", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_paypal</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idpaypal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_media</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idmedia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Record_label</th>
                <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "recordlabel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id_music_genre</th>
                <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idmusicgenre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("tms_user");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tms_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 131
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle:User_org:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 131,  247 => 127,  239 => 122,  229 => 115,  222 => 111,  215 => 107,  208 => 103,  201 => 99,  194 => 95,  187 => 91,  180 => 87,  173 => 83,  166 => 79,  159 => 75,  152 => 71,  145 => 67,  138 => 63,  131 => 59,  124 => 55,  117 => 51,  110 => 47,  103 => 43,  96 => 39,  89 => 35,  82 => 31,  75 => 27,  68 => 23,  61 => 19,  54 => 15,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
