<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_86315dfc4911a6c0b5427e6bfce548a7854dde902e4ab0025c4c33be21aa2790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54f84491b4d345d124cc39a2230edd9b62be94d40a79aa8245a2540c4111a95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f84491b4d345d124cc39a2230edd9b62be94d40a79aa8245a2540c4111a95d->enter($__internal_54f84491b4d345d124cc39a2230edd9b62be94d40a79aa8245a2540c4111a95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d5ca0e943271a7f837bd630a480fb00be37e73f5f8fe29e6386e6ce93434abcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ca0e943271a7f837bd630a480fb00be37e73f5f8fe29e6386e6ce93434abcb->enter($__internal_d5ca0e943271a7f837bd630a480fb00be37e73f5f8fe29e6386e6ce93434abcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f84491b4d345d124cc39a2230edd9b62be94d40a79aa8245a2540c4111a95d->leave($__internal_54f84491b4d345d124cc39a2230edd9b62be94d40a79aa8245a2540c4111a95d_prof);

        
        $__internal_d5ca0e943271a7f837bd630a480fb00be37e73f5f8fe29e6386e6ce93434abcb->leave($__internal_d5ca0e943271a7f837bd630a480fb00be37e73f5f8fe29e6386e6ce93434abcb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46e744a692b6a5f2f46c28bb2ed461207efc05fe590a332875086c78c6c02ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e744a692b6a5f2f46c28bb2ed461207efc05fe590a332875086c78c6c02ea0->enter($__internal_46e744a692b6a5f2f46c28bb2ed461207efc05fe590a332875086c78c6c02ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6a5337a28f18470a878132bee5b35595149b4326be5bbdcf3232fd6b2eadc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a5337a28f18470a878132bee5b35595149b4326be5bbdcf3232fd6b2eadc55->enter($__internal_c6a5337a28f18470a878132bee5b35595149b4326be5bbdcf3232fd6b2eadc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c6a5337a28f18470a878132bee5b35595149b4326be5bbdcf3232fd6b2eadc55->leave($__internal_c6a5337a28f18470a878132bee5b35595149b4326be5bbdcf3232fd6b2eadc55_prof);

        
        $__internal_46e744a692b6a5f2f46c28bb2ed461207efc05fe590a332875086c78c6c02ea0->leave($__internal_46e744a692b6a5f2f46c28bb2ed461207efc05fe590a332875086c78c6c02ea0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d42bbf7861a3be5988f2c36aaaa22e9da42b08d63ffbe4a3de9a1ffd6a5df094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42bbf7861a3be5988f2c36aaaa22e9da42b08d63ffbe4a3de9a1ffd6a5df094->enter($__internal_d42bbf7861a3be5988f2c36aaaa22e9da42b08d63ffbe4a3de9a1ffd6a5df094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_922a80ad6526e9dc471ea4f1238ad6739e1b7b7e4d79e66ba7078900edf81c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922a80ad6526e9dc471ea4f1238ad6739e1b7b7e4d79e66ba7078900edf81c04->enter($__internal_922a80ad6526e9dc471ea4f1238ad6739e1b7b7e4d79e66ba7078900edf81c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_922a80ad6526e9dc471ea4f1238ad6739e1b7b7e4d79e66ba7078900edf81c04->leave($__internal_922a80ad6526e9dc471ea4f1238ad6739e1b7b7e4d79e66ba7078900edf81c04_prof);

        
        $__internal_d42bbf7861a3be5988f2c36aaaa22e9da42b08d63ffbe4a3de9a1ffd6a5df094->leave($__internal_d42bbf7861a3be5988f2c36aaaa22e9da42b08d63ffbe4a3de9a1ffd6a5df094_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_015699d3da4a82a5045508e4af37ae2e2cb95fad9a3268723c7775ebb7f5d993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015699d3da4a82a5045508e4af37ae2e2cb95fad9a3268723c7775ebb7f5d993->enter($__internal_015699d3da4a82a5045508e4af37ae2e2cb95fad9a3268723c7775ebb7f5d993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69e3d299d060f5080cade2fbc1f05d653caca010ed278b7999eab4b4c86f6c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e3d299d060f5080cade2fbc1f05d653caca010ed278b7999eab4b4c86f6c33->enter($__internal_69e3d299d060f5080cade2fbc1f05d653caca010ed278b7999eab4b4c86f6c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_69e3d299d060f5080cade2fbc1f05d653caca010ed278b7999eab4b4c86f6c33->leave($__internal_69e3d299d060f5080cade2fbc1f05d653caca010ed278b7999eab4b4c86f6c33_prof);

        
        $__internal_015699d3da4a82a5045508e4af37ae2e2cb95fad9a3268723c7775ebb7f5d993->leave($__internal_015699d3da4a82a5045508e4af37ae2e2cb95fad9a3268723c7775ebb7f5d993_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/ebougerolle/Sites/mooc-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
