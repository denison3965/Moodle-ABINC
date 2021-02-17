<?php

class __Mustache_b753cce27192b3ef5481b7195ceaedd1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="site-footer">
';
        // 'footermain' section
        $value = $context->find('footermain');
        $buffer .= $this->section71fdcbe8068c5db683701b8652f51205($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'copyright' section
        $value = $context->find('copyright');
        $buffer .= $this->section7074125d59191b9b1b9896fe0fcca252($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '<!--E.O.Footer-->
';
        $buffer .= $indent . ' ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . ' ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section118dc35aa27e33b5ed6706019f637f46($context, $indent, $value);

        return $buffer;
    }

    private function section6f745356e84e0cf2e71fb363c9abdbd7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{ colClass }}">
                    <h6>{{{ fb1title }}}</h6>
                    <div class="footer-links">

                        {{{ footerblink1 }}}

                    </div>
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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colClass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <h6>';
                $value = $this->resolveValue($context->find('fb1title'), $context);
                $buffer .= $value;
                $buffer .= '</h6>
';
                $buffer .= $indent . '                    <div class="footer-links">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('footerblink1'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1f8638b8fe27daabce07a9d0a8be840(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{ colClass }}">
                    <h6> {{{ fb2title }}} </h6>
                    <div class="footer-links">
                        <ul>
                        {{{ footerblink2 }}}
                        </ul>
                    </div>
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
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colClass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <h6> ';
                $value = $this->resolveValue($context->find('fb2title'), $context);
                $buffer .= $value;
                $buffer .= ' </h6>
';
                $buffer .= $indent . '                    <div class="footer-links">
';
                $buffer .= $indent . '                        <ul>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('footerblink2'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF698c5afd53ec0f8cc38bcb1e61f8fd5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="{{ colClass }}">
                        <h6>{{{ fb3title }}}</h6>
                        <div class="footer-links">
                            <ul>
                                {{{ footerblink3 }}}
                            </ul>
                        </div>
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
                
                $buffer .= $indent . '                    <div class="';
                $value = $this->resolveValue($context->find('colClass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <h6>';
                $value = $this->resolveValue($context->find('fb3title'), $context);
                $buffer .= $value;
                $buffer .= '</h6>
';
                $buffer .= $indent . '                        <div class="footer-links">
';
                $buffer .= $indent . '                            <ul>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('footerblink3'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96148024d8d2c6dcd836245059d500bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="{{ colClass }}">
                        <h6> {{{ fb4title }}} </h6>
                        {{{footerAddress}}}
                        <div class="social-media {{footericonclass}}">
                            <ul>
                                {{{ social_links }}}
                            </ul>
                            <div class="clearfix"></div>
                        </div>
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
                
                $buffer .= $indent . '                    <div class="';
                $value = $this->resolveValue($context->find('colClass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <h6> ';
                $value = $this->resolveValue($context->find('fb4title'), $context);
                $buffer .= $value;
                $buffer .= ' </h6>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('footerAddress'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        <div class="social-media ';
                $value = $this->resolveValue($context->find('footericonclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <ul>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('social_links'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                            <div class="clearfix"></div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71fdcbe8068c5db683701b8652f51205(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="footer-main">
        <div class="bgtrans-overlay"></div><!--Overlay transparent bg layer-->
        <div class="container footer-main-wrap">
            <div class="row {{{footerb1 }}}">
                {{# footerb1}}
                <div class="{{ colClass }}">
                    <h6>{{{ fb1title }}}</h6>
                    <div class="footer-links">

                        {{{ footerblink1 }}}

                    </div>
                </div>
                {{/ footerb1}}

                {{# footerb2}}
                <div class="{{ colClass }}">
                    <h6> {{{ fb2title }}} </h6>
                    <div class="footer-links">
                        <ul>
                        {{{ footerblink2 }}}
                        </ul>
                    </div>
                </div>
                {{/ footerb2}}

                {{# footerb3}}
                    <div class="{{ colClass }}">
                        <h6>{{{ fb3title }}}</h6>
                        <div class="footer-links">
                            <ul>
                                {{{ footerblink3 }}}
                            </ul>
                        </div>
                    </div>
                {{/ footerb3}}

                {{# footerb4}}
                    <div class="{{ colClass }}">
                        <h6> {{{ fb4title }}} </h6>
                        {{{footerAddress}}}
                        <div class="social-media {{footericonclass}}">
                            <ul>
                                {{{ social_links }}}
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                {{/ footerb4}}
            </div>
        </div>
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
                
                $buffer .= $indent . '    <div class="footer-main">
';
                $buffer .= $indent . '        <div class="bgtrans-overlay"></div><!--Overlay transparent bg layer-->
';
                $buffer .= $indent . '        <div class="container footer-main-wrap">
';
                $buffer .= $indent . '            <div class="row ';
                $value = $this->resolveValue($context->find('footerb1'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                // 'footerb1' section
                $value = $context->find('footerb1');
                $buffer .= $this->section6f745356e84e0cf2e71fb363c9abdbd7($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'footerb2' section
                $value = $context->find('footerb2');
                $buffer .= $this->sectionB1f8638b8fe27daabce07a9d0a8be840($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'footerb3' section
                $value = $context->find('footerb3');
                $buffer .= $this->sectionF698c5afd53ec0f8cc38bcb1e61f8fd5($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'footerb4' section
                $value = $context->find('footerb4');
                $buffer .= $this->section96148024d8d2c6dcd836245059d500bd($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7074125d59191b9b1b9896fe0fcca252(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="footer-bottom">
        <div class="container">
        <p>{{{copyright}}}</p>
      </div>
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
                
                $buffer .= $indent . '    <div class="footer-bottom">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('copyright'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118dc35aa27e33b5ed6706019f637f46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);
require([\'theme_boost/drawer\'], function(mod) {
    mod.init();
});
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
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $buffer .= $indent . 'require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '    mod.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
