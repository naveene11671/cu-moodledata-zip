<?php

class __Mustache_4ebd6827245520fa46b72bacb942bb10 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('form'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'companycount' section
        $value = $context->find('companycount');
        $buffer .= $this->section35753617d7968a7a0aa171edaf7cd032($context, $indent, $value);
        // 'companycount' inverted section
        $value = $context->find('companycount');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="alert alert-warning">
';
            $buffer .= $indent . '        ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section20ed96b26a9675ffd21fada4c3a85a45($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '
';
        // 'table' section
        $value = $context->find('table');
        $buffer .= $this->section1ede05936f00b5990263bf17e52874b8($context, $indent, $value);

        return $buffer;
    }

    private function sectionC33da1ce38a18848ff075258336d4561(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'companycountplural, block_iomad_company_admin, {{ companycount }}';
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
                
                $buffer .= 'companycountplural, block_iomad_company_admin, ';
                $value = $this->resolveValue($context->find('companycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd695cc5caa98ae5a70de2641c816fe3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="alert alert-primary">
            {{# str }}companycountplural, block_iomad_company_admin, {{ companycount }}{{/ str }}
        </div>
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
                
                $buffer .= $indent . '        <div class="alert alert-primary">
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC33da1ce38a18848ff075258336d4561($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20ec61cdc07062cf9c86c77743bf822b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'companycount, block_iomad_company_admin, {{ companycount }}';
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
                
                $buffer .= 'companycount, block_iomad_company_admin, ';
                $value = $this->resolveValue($context->find('companycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35753617d7968a7a0aa171edaf7cd032(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{# companycountplural }}
        <div class="alert alert-primary">
            {{# str }}companycountplural, block_iomad_company_admin, {{ companycount }}{{/ str }}
        </div>
    {{/ companycountplural }}
    {{^ companycountplural }}
        <div class="alert alert-primary">
            {{# str }}companycount, block_iomad_company_admin, {{ companycount }}{{/ str }}
        </div>
    {{/ companycountplural }}
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
                
                // 'companycountplural' section
                $value = $context->find('companycountplural');
                $buffer .= $this->sectionBd695cc5caa98ae5a70de2641c816fe3($context, $indent, $value);
                // 'companycountplural' inverted section
                $value = $context->find('companycountplural');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="alert alert-primary">
';
                    $buffer .= $indent . '            ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section20ec61cdc07062cf9c86c77743bf822b($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20ed96b26a9675ffd21fada4c3a85a45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompaniesfilter, block_iomad_company_admin';
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
                
                $buffer .= 'nocompaniesfilter, block_iomad_company_admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ede05936f00b5990263bf17e52874b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{ table }}}
    {{{ pagingbar }}}
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
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('table'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('pagingbar'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
