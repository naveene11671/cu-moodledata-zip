<?php

class __Mustache_4f0a7ecd1bc8721ddfbec622b9356ade extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'children' section
        $value = $context->find('children');
        $buffer .= $this->section0ae66830195fbfe0111292a676f467cf($context, $indent, $value);

        return $buffer;
    }

    private function sectionDc159bce537d2ac3a05478bc10b9d3f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li><a href="{{{url}}}" title="{{{title}}}">{{{text}}}</a></li>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section300abd40883d41da1f234158c6591a80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>
                <ul class="list-unstyled ml-3">
                    {{> theme_iomadboost/custom_menu_footer }}
                </ul>
            </li>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li>
';
                $buffer .= $indent . '                <ul class="list-unstyled ml-3">
';
                if ($partial = $this->mustache->loadPartial('theme_iomadboost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ae66830195fbfe0111292a676f467cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^divider}}
            {{#url}}
                <li><a href="{{{url}}}" title="{{{title}}}">{{{text}}}</a></li>
            {{/url}}
            {{^url}}
                <li>{{{text}}}</li>
            {{/url}}
        {{/divider}}
        {{#haschildren}}
            <li>
                <ul class="list-unstyled ml-3">
                    {{> theme_iomadboost/custom_menu_footer }}
                </ul>
            </li>
        {{/haschildren}}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'divider' inverted section
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    // 'url' section
                    $value = $context->find('url');
                    $buffer .= $this->sectionDc159bce537d2ac3a05478bc10b9d3f9($context, $indent, $value);
                    // 'url' inverted section
                    $value = $context->find('url');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                <li>';
                        $value = $this->resolveValue($context->find('text'), $context);
                        $buffer .= $value;
                        $buffer .= '</li>
';
                    }
                }
                // 'haschildren' section
                $value = $context->find('haschildren');
                $buffer .= $this->section300abd40883d41da1f234158c6591a80($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
