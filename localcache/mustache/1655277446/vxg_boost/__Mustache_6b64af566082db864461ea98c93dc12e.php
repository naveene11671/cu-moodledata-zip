<?php

class __Mustache_6b64af566082db864461ea98c93dc12e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section019523990af87fba9ee54f7b557cacd7($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        // 'templatesaved' section
        $value = $context->find('templatesaved');
        $buffer .= $this->sectionDac91802e3700c430ca76a301671b1a8($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'roles' section
        $value = $context->find('roles');
        $buffer .= $this->section092c2e921bd2ed22aec5f7c323e64e64($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="mt-5">
';
        $buffer .= $indent . '    <a class="btn btn-success" href="';
        $value = $this->resolveValue($context->find('saveurl'), $context);
        $buffer .= $value;
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5fbd84535be81c248317c823d7c9fbc4($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    <a class="btn btn-secondary" href="';
        $value = $this->resolveValue($context->find('manageurl'), $context);
        $buffer .= $value;
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section21979dc9ca850158dd877901544848ce($context, $indent, $value);
        $buffer .= '</a>
';
        // 'backurl' section
        $value = $context->find('backurl');
        $buffer .= $this->section7ee7deede0bf385c1f15f66c54a121ae($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section019523990af87fba9ee54f7b557cacd7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restrictcapabilitiesfor, block_iomad_company_admin, {{ title }}';
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
                
                $buffer .= 'restrictcapabilitiesfor, block_iomad_company_admin, ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7684345a6b72fe147a46ff8e53843c04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'roletemplatesaved, block_iomad_company_admin';
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
                
                $buffer .= 'roletemplatesaved, block_iomad_company_admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDac91802e3700c430ca76a301671b1a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="alert alert-success">
        {{# str }}roletemplatesaved, block_iomad_company_admin{{/ str }}
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
                
                $buffer .= $indent . '    <div class="alert alert-success">
';
                $buffer .= $indent . '        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7684345a6b72fe147a46ff8e53843c04($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
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
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section092c2e921bd2ed22aec5f7c323e64e64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row m-t-1 border-bottom">
        <div class="col-3"><b>{{ name }}</b></div>
        <div class="col-7">{{ description }}</div>
        <div class="col-2"><a href="{{{ link }}}" class="btn btn-primary">{{# str }}edit{{/ str }}</a></div>
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
                
                $buffer .= $indent . '    <div class="row m-t-1 border-bottom">
';
                $buffer .= $indent . '        <div class="col-3"><b>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</b></div>
';
                $buffer .= $indent . '        <div class="col-7">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="col-2"><a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '" class="btn btn-primary">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '</a></div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fbd84535be81c248317c823d7c9fbc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'saveroletemplate, block_iomad_company_admin';
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
                
                $buffer .= 'saveroletemplate, block_iomad_company_admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21979dc9ca850158dd877901544848ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managetemplates, block_iomad_company_admin';
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
                
                $buffer .= 'managetemplates, block_iomad_company_admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ce85ffe717c95567f9e6a4e5b28a9c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'backtocompanytemplate, block_iomad_company_admin';
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
                
                $buffer .= 'backtocompanytemplate, block_iomad_company_admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ee7deede0bf385c1f15f66c54a121ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a class="btn btn-warning" href="{{{ backurl }}}">{{# str }}backtocompanytemplate, block_iomad_company_admin{{/ str }}</a>
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
                
                $buffer .= $indent . '        <a class="btn btn-warning" href="';
                $value = $this->resolveValue($context->find('backurl'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6ce85ffe717c95567f9e6a4e5b28a9c5($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
