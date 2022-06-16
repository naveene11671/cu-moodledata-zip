<?php

class __Mustache_8e958fa66265f03a0f415ba27ec62654 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->section9800bff869f1b8915627e7a5f3f1c304($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <html lang="en">
';
        $buffer .= $indent . '    <head>
';
        $buffer .= $indent . '        <meta charset="UTF-8">
';
        $buffer .= $indent . '        <meta http-equiv="X-UA-Compatible" content="IE=edge">
';
        $buffer .= $indent . '        <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '        <title></title>
';
        $buffer .= $indent . '        <link rel="stylesheet" href="css/bootstrap.min.css">
';
        $buffer .= $indent . '        <link rel="stylesheet" href="css/font-awesome.min.css">
';
        $buffer .= $indent . '        <link rel="stylesheet" href="css/style.css">
';
        $buffer .= $indent . '    </head>
';
        $buffer .= $indent . '    <body>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <main class="loginWrapper h-100 position-relative" style=" height: 100% !important;">
';
        $buffer .= $indent . '           
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <header class="py-3">
';
        $buffer .= $indent . '                <div class="container-xxl">
';
        $buffer .= $indent . '                    <div class="row align-items-center">
';
        $buffer .= $indent . '                        <div class="col-lg-6">
';
        $buffer .= $indent . '                            <div class="headerLogos">
';
        $buffer .= $indent . '                                <a href="https://cucet.cuchd.in/" target="_blank" class="me-4"><img src="img/cu-logo.png" alt="Chandigarh University" width="250" class="cuLogo"></a>
';
        $buffer .= $indent . '                                <a href="https://www.cuidol.in/" target="_blank"><img src="img/idol-logo.png" alt="CUIDOL logo" width="140" class="cuidolLogo"></a>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-lg-6">
';
        $buffer .= $indent . '                            <div class="headerRight d-flex align-items-center justify-content-lg-end justify-content-sm-center">
';
        $buffer .= $indent . '                                <div class="phone">
';
        $buffer .= $indent . '                                    Call Us: <a href="tel:180041222595">1800 4122 2595</a>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="socialLinks">
';
        $buffer .= $indent . '                                    <a href="https://www.facebook.com/CUDistanceEducation/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
';
        $buffer .= $indent . '                                    <a href="https://www.instagram.com/accounts/login/?next=/cudistanceeducation/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
';
        $buffer .= $indent . '                                    <a href="https://wa.me/917527030513?text=Hi" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
';
        $buffer .= $indent . '                                    <a href="https://twitter.com/CU_Distance" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
';
        $buffer .= $indent . '                                    <a href="https://www.youtube.com/channel/UCgwtRYnobN99LJ_U1mVh25w" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="ctaButton">
';
        $buffer .= $indent . '                                    <a href="https://www.cuidol.in/" class="btn btn-lg cta-btn">Enroll Now</a>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </header>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div id="myCarousel" class="carousel slide carousel-fade " data-bs-ride="carousel">
';
        $buffer .= $indent . '                <div class="carousel-inner " style="    position: fixed !important;">
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                  <div class="carousel-item active h-100" style=" position: fixed !important;background-image: url(\'img/slide-1.jpg\'); background-repeat: no-repeat; background-size: cover; background-position: center;">
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                  <div class="carousel-item h-100" style="position: fixed !important ;background-image: url(\'img/slide-2.jpg\'); background-repeat: no-repeat; background-size: cover; background-position: center;">
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                  <div class="clear-fix"></div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="cuidolLmsLogin" >
';
        $buffer .= $indent . '                <div class="container">
';
        $buffer .= $indent . '                    <div class="row">
';
        $buffer .= $indent . '                        <div class="col-lg-6 ms-auto">
';
        $buffer .= $indent . '                            <div class="cuidolLmsLogin__inner loginRegisterForm">
';
        $buffer .= $indent . '                                <h2 class="text-center">
';
        $buffer .= $indent . '                                    Kindly fill your<br> <span>Username & Password</span> below <br>to access your account.
';
        $buffer .= $indent . '                                </h2>
';
        $buffer .= $indent . '                                <div class="cuidolLmsLogin__form">
';
        $buffer .= $indent . '                                    <div class="cuidolLmsLogin__form--tabs">
';
        $buffer .= $indent . '                                        <a href="/" class="active" id="loginForm">Login</a>
';
        $buffer .= $indent . '                                        <a href="/" id="registerForm">Register</a>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    <div class="cuidolLmsLogin__form--fields loginForm">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <form class="row g-3 needs-validation" action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="post" id="login">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <div class="col-md-12">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                
';
        $buffer .= $indent . '                                                <input type="text" name="username" id="username" class="form-control"  ';
        $buffer .= 'class="form-control form-control-lg" ';
        $buffer .= 'value="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'placeholder="';
        // 'canloginbyemail' inverted section
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            // 'cleanstr' section
            $value = $context->find('cleanstr');
            $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
        }
        // 'canloginbyemail' section
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section118ece6c412804f669c845b43ecc9a01($context, $indent, $value);
        $buffer .= '" ';
        $buffer .= 'autocomplete="username">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                              <div class="invalid-feedback">
';
        $buffer .= $indent . '                                                This field is required!
';
        $buffer .= $indent . '                                              </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                            <div class="col-md-12">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                <input type="password" name="password" id="password" class="form-control"  value="" ';
        $buffer .= 'class="form-control form-control-lg" ';
        $buffer .= 'placeholder="';
        // 'cleanstr' section
        $value = $context->find('cleanstr');
        $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
        $buffer .= '" ';
        $buffer .= 'autocomplete="current-password">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                <div class="invalid-feedback">
';
        $buffer .= $indent . '                                                    This field is required!
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                            <div class="col-md-12 text-end">
';
        $buffer .= $indent . '                                                <p class="m-0"><a href="/" id="forgotPasswordLink">Forgot Password?</a></p>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                            <div class="col-12">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                <button class="btn cta-btn w-100" type="submit" id="loginbtn">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                          </form>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    <div class="cuidolLmsLogin__form--fields registerForm d-none">
';
        $buffer .= $indent . '                                        <form class="row g-3 needs-validation" novalidate>
';
        $buffer .= $indent . '                                            <div class="col-md-12">
';
        $buffer .= $indent . '                                                <input type="text" class="form-control" id="validationCustom00" placeholder="Full Name" required>
';
        $buffer .= $indent . '                                                <div class="invalid-feedback">
';
        $buffer .= $indent . '                                                  This field is required!
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                              </div>
';
        $buffer .= $indent . '                                              <div class="col-md-12">
';
        $buffer .= $indent . '                                                <input type="text" class="form-control" id="validationCustom01" placeholder="User Name" required>
';
        $buffer .= $indent . '                                                <div class="invalid-feedback">
';
        $buffer .= $indent . '                                                  This field is required!
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                              </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <div class="col-md-12">
';
        $buffer .= $indent . '                                              <input type="text" class="form-control" id="validationCustom02" placeholder="Email address" required>
';
        $buffer .= $indent . '                                              <div class="invalid-feedback">
';
        $buffer .= $indent . '                                                This field is required!
';
        $buffer .= $indent . '                                              </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                            <div class="col-md-12">
';
        $buffer .= $indent . '                                                <input type="text" class="form-control" id="validationCustom03" placeholder="Enter Password" required>
';
        $buffer .= $indent . '                                                <div class="invalid-feedback">
';
        $buffer .= $indent . '                                                    This field is required!
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                            <div class="col-md-12">
';
        $buffer .= $indent . '                                                <input type="text" class="form-control" id="validationCustom04" placeholder="Confirm Password" required>
';
        $buffer .= $indent . '                                                <div class="invalid-feedback">
';
        $buffer .= $indent . '                                                    This field is required!
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                            <div class="col-12">
';
        $buffer .= $indent . '                                              <button class="btn cta-btn w-100" type="submit">Sign In</button>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                          </form>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <div class="cuidolLmsLogin__inner forgotForm d-none">
';
        $buffer .= $indent . '                                <h2 class="text-center">
';
        $buffer .= $indent . '                                    Please enter your <br><span>log-in or recovery email address</span> below and we will send you an email with instructions.
';
        $buffer .= $indent . '                                </h2>
';
        $buffer .= $indent . '                                <div class="cuidolLmsLogin__form">
';
        $buffer .= $indent . '                                    <div class="cuidolLmsLogin__form--fields">
';
        $buffer .= $indent . '                                        <form class="row g-3 needs-validation" novalidate>
';
        $buffer .= $indent . '                                            <div class="col-md-12">
';
        $buffer .= $indent . '                                              <input type="text" class="form-control" id="validationCustom12" placeholder="Email address" required>
';
        $buffer .= $indent . '                                              <div class="invalid-feedback">
';
        $buffer .= $indent . '                                                This field is required!
';
        $buffer .= $indent . '                                              </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                            <div class="col-12">
';
        $buffer .= $indent . '                                              <button class="btn cta-btn w-100" type="submit">Sign In</button>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                          </form>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </main>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <script src="js/jquery.min.js"></script>
';
        $buffer .= $indent . '        <script src="js/bootstrap.min.js"></script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <script>
';
        $buffer .= $indent . '            $(document).ready(function(){
';
        $buffer .= $indent . '                $("#registerForm").click(function(){
';
        $buffer .= $indent . '                    $(".registerForm").removeClass("d-none")
';
        $buffer .= $indent . '                    $(".loginForm").addClass("d-none")
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    $(this).addClass("active")
';
        $buffer .= $indent . '                    $("#loginForm").removeClass("active")
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    return(false);
';
        $buffer .= $indent . '                });
';
        $buffer .= $indent . '                $("#loginForm").click(function(){
';
        $buffer .= $indent . '                    $(".registerForm").addClass("d-none")
';
        $buffer .= $indent . '                    $(".loginForm").removeClass("d-none")
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    $(this).addClass("active")
';
        $buffer .= $indent . '                    $("#registerForm").removeClass("active")
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    return(false);
';
        $buffer .= $indent . '                });
';
        $buffer .= $indent . '                $("#forgotPasswordLink").click(function(){
';
        $buffer .= $indent . '                    $(".forgotForm").removeClass("d-none")
';
        $buffer .= $indent . '                    $(".loginRegisterForm").addClass("d-none")
';
        $buffer .= $indent . '                    return(false);
';
        $buffer .= $indent . '                });
';
        $buffer .= $indent . '            });
';
        $buffer .= $indent . '        </script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <script>
';
        $buffer .= $indent . '            // Example starter JavaScript for disabling form submissions if there are invalid fields
';
        $buffer .= $indent . '            (function () {
';
        $buffer .= $indent . '            \'use strict\'
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            // Fetch all the forms we want to apply custom Bootstrap validation styles to
';
        $buffer .= $indent . '            var forms = document.querySelectorAll(\'.needs-validation\')
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            // Loop over them and prevent submission
';
        $buffer .= $indent . '            Array.prototype.slice.call(forms)
';
        $buffer .= $indent . '                .forEach(function (form) {
';
        $buffer .= $indent . '                form.addEventListener(\'submit\', function (event) {
';
        $buffer .= $indent . '                    if (!form.checkValidity()) {
';
        $buffer .= $indent . '                    event.preventDefault()
';
        $buffer .= $indent . '                    event.stopPropagation()
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    form.classList.add(\'was-validated\')
';
        $buffer .= $indent . '                }, false)
';
        $buffer .= $indent . '                })
';
        $buffer .= $indent . '            })()
';
        $buffer .= $indent . '        </script>
';
        $buffer .= $indent . '    </body>
';
        $buffer .= $indent . '    </html>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '
';
        // 'hasidentityproviders' section
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->sectionC92c1d7a9e8b6770d20e816ef996cca7($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionA4f2b1bc49f102a8397589c2999827d7($context, $indent, $value);

        return $buffer;
    }

    private function section9800bff869f1b8915627e7a5f3f1c304(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="loginerrors">
        <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
        <div class="alert alert-danger" role="alert">{{error}}</div>
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
                
                $buffer .= $indent . '    <div class="loginerrors">
';
                $buffer .= $indent . '        <a href="#" id="loginerrormessage" class="accesshide">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
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
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
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
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118ece6c412804f669c845b43ecc9a01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#cleanstr}}usernameemail{{/cleanstr}}';
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
                
                // 'cleanstr' section
                $value = $context->find('cleanstr');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
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
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
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
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB681534bda1faeeb31506c30e72ff16e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firsttime';
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
                
                $buffer .= 'firsttime';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
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
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56fec40915a03ffd076cdcef23bee726(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <form class="m-t-1" action="{{signupurl}}" method="get" id="signup">
                    <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
                </form>
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
                
                $buffer .= $indent . '                <form class="m-t-1" action="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="get" id="signup">
';
                $buffer .= $indent . '                    <button type="submit" class="btn btn-secondary">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80b0583bb03225617e7b1f0182824282(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row justify-content-center">
    <div class="col-xl-8 push-xl-2 m-2-md col-sm-8 push-sm-2">
    <div class="card instructionspanel">
        <div class="card-block">
            <div class="card-title">
                <h2>{{#str}}firsttime{{/str}}</h2>
            </div>
            <div>
            {{{instructions}}}
            {{#cansignup}}
                <form class="m-t-1" action="{{signupurl}}" method="get" id="signup">
                    <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
                </form>
            {{/cansignup}}
            </div>
        </div>
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
                
                $buffer .= $indent . '    <div class="row justify-content-center">
';
                $buffer .= $indent . '    <div class="col-xl-8 push-xl-2 m-2-md col-sm-8 push-sm-2">
';
                $buffer .= $indent . '    <div class="card instructionspanel">
';
                $buffer .= $indent . '        <div class="card-block">
';
                $buffer .= $indent . '            <div class="card-title">
';
                $buffer .= $indent . '                <h2>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB681534bda1faeeb31506c30e72ff16e($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'cansignup' section
                $value = $context->find('cansignup');
                $buffer .= $this->section56fec40915a03ffd076cdcef23bee726($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC92c1d7a9e8b6770d20e816ef996cca7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#hasinstructions}}
    <div class="row justify-content-center">
    <div class="col-xl-8 push-xl-2 m-2-md col-sm-8 push-sm-2">
    <div class="card instructionspanel">
        <div class="card-block">
            <div class="card-title">
                <h2>{{#str}}firsttime{{/str}}</h2>
            </div>
            <div>
            {{{instructions}}}
            {{#cansignup}}
                <form class="m-t-1" action="{{signupurl}}" method="get" id="signup">
                    <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
                </form>
            {{/cansignup}}
            </div>
        </div>
    </div>
    </div>
    </div>
    {{/hasinstructions}}
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
                
                // 'hasinstructions' section
                $value = $context->find('hasinstructions');
                $buffer .= $this->section80b0583bb03225617e7b1f0182824282($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c05631471aa808569dc409f6b90d52b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
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
                
                $buffer .= $indent . '        require([\'jquery\'], function($) {
';
                $buffer .= $indent . '            $(\'#loginerrormessage\').focus();
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section910c82971845ca8b1f4a35920af1957d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            require([\'jquery\'], function($) {
                if ($(\'#username\').val()) {
                    $(\'#password\').focus();
                } else {
                    $(\'#username\').focus();
                }
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
                
                $buffer .= $indent . '            require([\'jquery\'], function($) {
';
                $buffer .= $indent . '                if ($(\'#username\').val()) {
';
                $buffer .= $indent . '                    $(\'#password\').focus();
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    $(\'#username\').focus();
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4f2b1bc49f102a8397589c2999827d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#error}}
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
        });
    {{/error}}
    {{^error}}
        {{#autofocusform}}
            require([\'jquery\'], function($) {
                if ($(\'#username\').val()) {
                    $(\'#password\').focus();
                } else {
                    $(\'#username\').focus();
                }
            });
        {{/autofocusform}}
    {{/error}}
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
                
                // 'error' section
                $value = $context->find('error');
                $buffer .= $this->section1c05631471aa808569dc409f6b90d52b($context, $indent, $value);
                // 'error' inverted section
                $value = $context->find('error');
                if (empty($value)) {
                    
                    // 'autofocusform' section
                    $value = $context->find('autofocusform');
                    $buffer .= $this->section910c82971845ca8b1f4a35920af1957d($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
