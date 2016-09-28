<?php

/* /Users/pooh/Github/foodcapitals/themes/foodcapitals/pages/contact-us.htm */
class __TwigTemplate_13749c15bf424ca61981f7a0a83e746ebc84d260956147fb80504e2975fc1bfa extends Twig_Template
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
        // line 1
        echo "<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\" role=\"main\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"homepage.php\">Home</a></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t<section class=\"row address_info\">
\t\t\t\t\t\t\t<h2><em class=\"red\">Contact</em> Us</h2>
\t\t\t\t\t\t\t<address class=\"col-md-6\">
\t\t\t\t\t\t\t\t<h5>Head Office</h5>
\t\t\t\t\t\t\t\t<span>Food Capitals Public Company Limited<br>
\t\t\t\t\t\t\t\t725 Metropolis Building, 14th Fl.,<br>
\t\t\t\t\t\t\t\tSukhumvit Rd., Klongton Nua,<br>
\t\t\t\t\t\t\t\tWattana, Bangkok 10110</span>
\t\t\t\t\t\t\t\t<label>Tel:</label> <a href=\"tel:022599522\">+66.2259.9522</a><br>
\t\t\t\t\t\t\t\t<label>Fax:</label> <a href=\"tel:022599590\">+66.2259.9522</a>
\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t<address class=\"col-md-6\">
\t\t\t\t\t\t\t\t<h5>Investor Relations</h5>
\t\t\t\t\t\t\t\t<label>Tel:</label> <a href=\"tel:022599522\">+66.2259.9522</a><br>
\t\t\t\t\t\t\t\t<label>Fax:</label> <a href=\"tel:022599590\">+66.2259.9590</a><br>
\t\t\t\t\t\t\t\t<label>E-mail:</label> <a href=\"mailto:ir@foodcapitals.com\">ir@foodcapitals.com</a>
\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<section class=\"row\">
\t\t\t\t\t\t\t<form id=\"contact_forminfo\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<div class=\"form-group question-container\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"marginbottom20\">Leave Us a Questions</h4>
\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker\" name=\"colors\" class=\"form-control\" title=\"Choose Question\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">General Information/Comment</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Investor Relations</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t    <label for=\"\">Name &amp; Surname*</label>
\t\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" name=\"Name\" autocomplete=\"off\" id=\"Name\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t    <label for=\"\">Email*</label>
\t\t\t\t\t\t\t\t     <input type=\"email\" class=\"form-control\" name=\"email\" autocomplete=\"off\" id=\"email\" placeholder=\"\">
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t    <label for=\"\">Phone</label>
\t\t\t\t\t\t\t\t     <input type=\"text\" class=\"form-control\" name=\"phonenumber\" autocomplete=\"off\" id=\"phonenumber\" placeholder=\"\">
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t    <label for=\"\">Subject*</label>
\t\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"\">
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t    <label for=\"\">Message*</label>
\t\t\t\t\t\t\t\t    <textarea class=\"form-control\" rows=\"3\" name=\"Message\" autocomplete=\"off\" id=\"Message\"></textarea>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12\">
\t\t\t\t\t\t\t  \t\t<input type=\"submit\" class=\"btn pull-right\" value=\"Send\" >
\t\t\t\t\t\t\t  \t\t<a href=\"#modal\" class=\"btn\">Test Light message</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"remodal\" data-remodal-id=\"modal\" role=\"dialog\" aria-labelledby=\"modal1Title\" aria-describedby=\"modal1Desc\">
\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t    <h2 id=\"modal1Title\">Thank you for your message.</h2>
\t\t\t\t\t\t\t    <p id=\"modal1Desc\">
\t\t\t\t\t\t\t      Your message has been sent successfully and we appreciate you contacting us.  We will respond to you as soon as possible.
\t\t\t\t\t\t\t    </p>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <br>
\t\t\t\t\t\t\t  <button data-remodal-action=\"confirm\" class=\"btn\">Return to Website</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js\"></script>
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t  window.REMODAL_GLOBALS = {
\t\t\t\t\t\t\t     NAMESPACE: 'remodal',
\t\t\t\t\t\t\t     DEFAULTS: {
\t\t\t\t\t\t\t       hashTracking: true,
\t\t\t\t\t\t\t       closeOnConfirm: true,
\t\t\t\t\t\t\t       closeOnCancel: true,
\t\t\t\t\t\t\t       closeOnEscape: true,
\t\t\t\t\t\t\t       closeOnOutsideClick: true,
\t\t\t\t\t\t\t       modifier: ''
\t\t\t\t\t\t\t     }
\t\t\t\t\t\t\t   };
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\$('#contact_forminfo').bootstrapValidator({
\t\t\t\t\t\t        framework: 'bootstrap',
\t\t\t\t\t\t        fields: {
\t\t\t\t\t\t            Name: {
\t\t\t\t\t\t                validators: {
\t\t\t\t\t\t                    notEmpty: {
\t\t\t\t\t\t                        message: 'The Name is required and cannot be empty'
\t\t\t\t\t\t                    }
\t\t\t\t\t\t                }
\t\t\t\t\t\t            },
\t\t\t\t\t\t            email: {
\t\t\t\t\t\t                validators: {
\t\t\t\t\t\t                    notEmpty: {
\t\t\t\t\t\t                        message: 'Your email is required'
\t\t\t\t\t\t                    },
\t\t\t\t\t\t                    emailAddress: {
\t\t\t\t\t\t                        message: 'The email address is not valid'
\t\t\t\t\t\t                    }
\t\t\t\t\t\t                }
\t\t\t\t\t\t            },
\t\t\t\t\t\t            phonenumber: {
\t\t\t\t\t\t                validators: {
\t\t\t\t\t\t                    notEmpty: {
\t\t\t\t\t\t                        message: 'The value is not valid phone number'
\t\t\t\t\t\t                    }
\t\t\t\t\t\t                }
\t\t\t\t\t\t            },
\t\t\t\t\t\t            subject: {
\t\t\t\t\t\t                validators: {
\t\t\t\t\t\t                    notEmpty: {
\t\t\t\t\t\t                        message: 'Subject is required'
\t\t\t\t\t\t                    }
\t\t\t\t\t\t                }
\t\t\t\t\t\t            },
\t\t\t\t\t\t            Message: {
\t\t\t\t\t\t                validators: {
\t\t\t\t\t\t                    notEmpty: {
\t\t\t\t\t\t                        message: 'Your message is required'
\t\t\t\t\t\t                    }
\t\t\t\t\t\t                }
\t\t\t\t\t\t            }
\t\t\t\t\t\t        }
\t\t\t\t\t\t    });
\t\t\t\t\t\t</script>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<section class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 googlemap-contact\">
\t\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\"></iframe>
\t\t\t\t\t\t\t\t<h5 style=\"margin:0 0 10px 0;font-family: 'kanitlight';font-size:18px; \">View Map in:</h5>
\t\t\t\t\t\t\t\t<p><a href=\"#\" style=\"margin-right:10px;\">LINE</a> <a href=\"#\" style=\"\">Google Map</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/Users/pooh/Github/foodcapitals/themes/foodcapitals/pages/contact-us.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="row">*/
/* 					<div class="col-xs-12" role="main">*/
/* 						<ol class="breadcrumb">*/
/* 							<li><a href="homepage.php">Home</a></li>*/
/* 						</ol>*/
/* 						<section class="row address_info">*/
/* 							<h2><em class="red">Contact</em> Us</h2>*/
/* 							<address class="col-md-6">*/
/* 								<h5>Head Office</h5>*/
/* 								<span>Food Capitals Public Company Limited<br>*/
/* 								725 Metropolis Building, 14th Fl.,<br>*/
/* 								Sukhumvit Rd., Klongton Nua,<br>*/
/* 								Wattana, Bangkok 10110</span>*/
/* 								<label>Tel:</label> <a href="tel:022599522">+66.2259.9522</a><br>*/
/* 								<label>Fax:</label> <a href="tel:022599590">+66.2259.9522</a>*/
/* 							</address>*/
/* 							<address class="col-md-6">*/
/* 								<h5>Investor Relations</h5>*/
/* 								<label>Tel:</label> <a href="tel:022599522">+66.2259.9522</a><br>*/
/* 								<label>Fax:</label> <a href="tel:022599590">+66.2259.9590</a><br>*/
/* 								<label>E-mail:</label> <a href="mailto:ir@foodcapitals.com">ir@foodcapitals.com</a>*/
/* 							</address>*/
/* 						</section>*/
/* 						<hr>*/
/* 						<section class="row">*/
/* 							<form id="contact_forminfo" action="" method="post" enctype="multipart/form-data">*/
/* 								<div class="form-group question-container">*/
/* 									<div class="col-xs-12">*/
/* 										<h4 class="marginbottom20">Leave Us a Questions</h4>*/
/* 										<select class="selectpicker" name="colors" class="form-control" title="Choose Question">*/
/* 											<option value="">General Information/Comment</option>*/
/* 											<option value="">Investor Relations</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<div class="col-xs-12">*/
/* 								    <label for="">Name &amp; Surname*</label>*/
/* 								    <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="">*/
/* 									</div>*/
/* 							  </div>*/
/* 							  <div class="form-group">*/
/* 								  <div class="col-xs-12 col-sm-6">*/
/* 								    <label for="">Email*</label>*/
/* 								     <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="">*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  <div class="form-group">*/
/* 								  <div class="col-xs-12 col-sm-6">*/
/* 								    <label for="">Phone</label>*/
/* 								     <input type="text" class="form-control" name="phonenumber" autocomplete="off" id="phonenumber" placeholder="">*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  <div class="form-group">*/
/* 								  <div class="col-xs-12">*/
/* 								    <label for="">Subject*</label>*/
/* 								    <input type="text" class="form-control" name="subject" id="subject" placeholder="">*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  <div class="form-group">*/
/* 								  <div class="col-xs-12">*/
/* 								    <label for="">Message*</label>*/
/* 								    <textarea class="form-control" rows="3" name="Message" autocomplete="off" id="Message"></textarea>*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  <div class="form-group">*/
/* 								  <div class="col-xs-12">*/
/* 							  		<input type="submit" class="btn pull-right" value="Send" >*/
/* 							  		<a href="#modal" class="btn">Test Light message</a>*/
/* 								  </div>*/
/* 							  </div>*/
/* 							</form>*/
/* 							<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">*/
/* 							  <div>*/
/* 							    <h2 id="modal1Title">Thank you for your message.</h2>*/
/* 							    <p id="modal1Desc">*/
/* 							      Your message has been sent successfully and we appreciate you contacting us.  We will respond to you as soon as possible.*/
/* 							    </p>*/
/* 							  </div>*/
/* 							  <br>*/
/* 							  <button data-remodal-action="confirm" class="btn">Return to Website</button>*/
/* 							</div>*/
/* 							<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>*/
/* 							<script type="text/javascript">*/
/* 							  window.REMODAL_GLOBALS = {*/
/* 							     NAMESPACE: 'remodal',*/
/* 							     DEFAULTS: {*/
/* 							       hashTracking: true,*/
/* 							       closeOnConfirm: true,*/
/* 							       closeOnCancel: true,*/
/* 							       closeOnEscape: true,*/
/* 							       closeOnOutsideClick: true,*/
/* 							       modifier: ''*/
/* 							     }*/
/* 							   };*/
/* 							</script>*/
/* 							<script type="text/javascript">*/
/* 							$('#contact_forminfo').bootstrapValidator({*/
/* 						        framework: 'bootstrap',*/
/* 						        fields: {*/
/* 						            Name: {*/
/* 						                validators: {*/
/* 						                    notEmpty: {*/
/* 						                        message: 'The Name is required and cannot be empty'*/
/* 						                    }*/
/* 						                }*/
/* 						            },*/
/* 						            email: {*/
/* 						                validators: {*/
/* 						                    notEmpty: {*/
/* 						                        message: 'Your email is required'*/
/* 						                    },*/
/* 						                    emailAddress: {*/
/* 						                        message: 'The email address is not valid'*/
/* 						                    }*/
/* 						                }*/
/* 						            },*/
/* 						            phonenumber: {*/
/* 						                validators: {*/
/* 						                    notEmpty: {*/
/* 						                        message: 'The value is not valid phone number'*/
/* 						                    }*/
/* 						                }*/
/* 						            },*/
/* 						            subject: {*/
/* 						                validators: {*/
/* 						                    notEmpty: {*/
/* 						                        message: 'Subject is required'*/
/* 						                    }*/
/* 						                }*/
/* 						            },*/
/* 						            Message: {*/
/* 						                validators: {*/
/* 						                    notEmpty: {*/
/* 						                        message: 'Your message is required'*/
/* 						                    }*/
/* 						                }*/
/* 						            }*/
/* 						        }*/
/* 						    });*/
/* 						</script>*/
/* 						</section>*/
/* 						<hr>*/
/* 						<section class="row">*/
/* 							<div class="col-xs-12 googlemap-contact">*/
/* 								<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="100%" frameborder="0" style="border:0"></iframe>*/
/* 								<h5 style="margin:0 0 10px 0;font-family: 'kanitlight';font-size:18px; ">View Map in:</h5>*/
/* 								<p><a href="#" style="margin-right:10px;">LINE</a> <a href="#" style="">Google Map</a></p>*/
/* 							</div>*/
/* 						</section>*/
/* 					</div>*/
/* 				</div>*/
