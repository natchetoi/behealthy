<?php

/* sites/all/modules/contrib/tagclouds_views/templates/tagclouds-views-view-tagcloud.html.twig */
class __TwigTemplate_1110adbd9525dd66633a559aba2b931f6d60177345a0c2a448a3d2f5843a2feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 16, "set" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_html_item"]) ? $context["wrapper_html_item"] : null), "html", null, true));
        echo " id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "\" class=";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true));
        echo " style=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_inline_styles"]) ? $context["wrapper_inline_styles"] : null), "html", null, true));
        echo "\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 17
            echo "        ";
            $context["row_classes"] = array(0 => ((            // line 18
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 20
            echo "
        <";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["row_html_item"]) ? $context["row_html_item"] : null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null)), "method"), "html", null, true));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["weight_param"]) ? $context["weight_param"] : null), "html", null, true));
            echo "=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "data_weight", array()), "html", null, true));
            echo "\"  style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item_inline_styles"]) ? $context["item_inline_styles"] : null), "html", null, true));
            echo "\">
            <a href=\"";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "link", array()), "html", null, true));
            echo "\" style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_inline_styles"]) ? $context["link_inline_styles"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true));
            echo "</a>
        </";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["row_html_item"]) ? $context["row_html_item"] : null), "html", null, true));
            echo ">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_html_item"]) ? $context["wrapper_html_item"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "sites/all/modules/contrib/tagclouds_views/templates/tagclouds-views-view-tagcloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  85 => 23,  77 => 22,  65 => 21,  62 => 20,  60 => 18,  58 => 17,  54 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Styles for TagClouds Views.*/
/*  **/
/*  * Available variables:*/
/*  * - rows: Views rows.*/
/* */
/*  **/
/*  * @see template_preprocess_tagclouds_views_view_tagcloud()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <{{ wrapper_html_item }} id="{{ id }}" class={{ class }} style="{{ wrapper_inline_styles }}">*/
/*     {% for row in rows %}*/
/*         {% set row_classes = [*/
/*         default_row_class ? 'views-row',*/
/*         ] %}*/
/* */
/*         <{{ row_html_item }} {{ row.attributes.addClass(row_classes) }} {{ weight_param }}="{{ row.data_weight }}"  style="{{ item_inline_styles }}">*/
/*             <a href="{{ row.link }}" style="{{ link_inline_styles }}">{{ row.title }}</a>*/
/*         </{{ row_html_item }}>*/
/*     {% endfor %}*/
/* </{{ wrapper_html_item }}>*/
/* */
