<?php

class __Mustache_7eb7d5916d5d493828cb37bfde4079b6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="progress bg-white border">
';
        $buffer .= $indent . '    <div class="progress-bar bar" role="progressbar" aria-valuenow="';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" style="width: ';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '%" aria-valuemin="0" aria-valuemax="100"></div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="small">
';
        $buffer .= $indent . '    <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0c1d1233fd16a75b64c15f9be2ce4a71($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    <strong>';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '%</strong> ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section97c4f4c58356bb5f532f21270a0da408($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0c1d1233fd16a75b64c15f9be2ce4a71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseprogress, block_mycourses';
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
                
                $buffer .= 'aria:courseprogress, block_mycourses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97c4f4c58356bb5f532f21270a0da408(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'complete, block_mycourses';
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
                
                $buffer .= 'complete, block_mycourses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
