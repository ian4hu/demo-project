<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_f1812ec07d53e92b6636c6067132cc1039b419b26942d22d5f88b292c82a7c9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 38
        $context["classes"] = array(0 => "block", 1 => ("block-" . drupal_html_class($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))));
        // line 43
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 44
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 45
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 46
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 48
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "</div>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 50,  53 => 49,  48 => 52,  46 => 49,  41 => 48,  33 => 46,  31 => 45,  27 => 44,  22 => 43,  20 => 38,);
    }
}
