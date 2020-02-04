<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* item.twig */
class __TwigTemplate_8f881768e463e47279dac3e9b7fb96defed6a83798b8ed95840a8f0a0852249d extends yii\twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["good"]) {
            // line 2
            echo "    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3><span name=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["good"], "anchor", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["good"], "name", []), "html", null, true);
            echo "</span></h3>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["good"], "img", []), "html", null, true);
            echo "\"
             alt=\"\">
    </div>

    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
        <button type=\"button\" class=\"btn btn-primary amazonGoodsButton\">View Product on Amazon
        </button>
    </div>

    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        ";
            // line 16
            echo $this->getAttribute($context["good"], "description", []);
            echo "
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
        <h3 class=\"goodsFeatures\">Features</h3>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <ul>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["good"], "features", []));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 24
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["feature"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </ul>

        <table class=\"table-props\" border=\"0\" width=\"100%\">
            <tbody>
            <tr>
                <th style=\"vertical-align: middle; text-align: left;\" bgcolor=\"#00bf08\" width=\"50%\"
                    height=\"50\"><span style=\"color: #ffffff;\"><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pros</em></strong></span>
                </th>
                <th style=\"vertical-align: middle; text-align: left;\" bgcolor=\"#bf000a\" width=\"50%\"
                    height=\"50\"><span style=\"color: #ffffff;\"><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cons</em></strong></span>
                </th>
            </tr>
            <tr>
                <td class=\"table-pros\">
                    <div class=\"su-list\" style=\"margin-left:0px\">
                        <ul>
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["good"], "pros", []));
            foreach ($context['_seq'] as $context["_key"] => $context["pros"]) {
                // line 43
                echo "                                <li><i class=\"sui sui-check\" style=\"color:#38f24a\"></i>";
                echo twig_escape_filter($this->env, $context["pros"], "html", null, true);
                echo "
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pros'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        </ul>
                    </div>
                </td>
                <td>
                    <div class=\"su-list\" style=\"margin-left:0px\">
                        <ul>
                            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["good"], "cons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cons"]) {
                // line 53
                echo "                                <li><i class=\"sui sui-close\" style=\"color:#38f24a\"></i>";
                echo twig_escape_filter($this->env, $context["cons"], "html", null, true);
                echo "
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cons'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        </ul>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['good'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 56,  125 => 53,  121 => 52,  113 => 46,  103 => 43,  99 => 42,  81 => 26,  72 => 24,  68 => 23,  58 => 16,  45 => 6,  37 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "item.twig", "D:\\OSUltimate\\SecondOSPanel\\domains\\enmassageyii\\frontend\\modules\\item\\views\\default\\item.twig");
    }
}
