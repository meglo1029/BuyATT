<?php 
    global $SEM_DATA;
    global $advertiser;
    $istest = 'false';

    if (isset($_GET['istest']))
    {
       empty($_GET['istest']) ?
            $istest = 'false' :
            $istest = $_GET['istest']; 
    }
 ?>

<script>
    $(document).ready(function(){
        $('form').append('<input type="hidden" name="is_test" value="<?php echo $istest; ?>">');
    });
</script>

<script type="text/javascript">
        var valid = 0;
        function submitform()
        {
            var FirstName = $('input#first_name').val();
            var LastName = $('input#last_name').val();
            var ContactPhone = $('input#contact_phone').val();
            var EmailAddress = $('input#email_address').val();
            var CompanyName = $('input#company_name').val();
            var Address = $('input#address').val();
            var ZipCode = $('input#zip_code').val();
            var Checkbox = $('input#choice_checkbox').prop('checked');

            if (FirstName == "" || LastName == "" || ContactPhone == "" || EmailAddress == "" || CompanyName == "" || Address == "" || ZipCode == "" || Checkbox == false)
            {
                $('form .validation_error').show();

                var reqitems = 0;

                (FirstName == "") ?
                       $('input#first_name').parent().addClass("gfield_error") : $('input#first_name').parent().removeClass("gfield_error");
                (LastName == "") ? 
                    $('input#last_name').parent().addClass("gfield_error") : $('input#last_name').parent().removeClass("gfield_error");
                (ContactPhone == "") ?
                    $('input#contact_phone').parent().addClass("gfield_error") : $('input#contact_phone').parent().removeClass("gfield_error");
                (EmailAddress == "") ?
                    $('input#email_address').parent().addClass("gfield_error") : $('input#email_address').parent().removeClass("gfield_error");
                (CompanyName == "") ?
                    $('input#company_name').parent().addClass("gfield_error") : $('input#field_company_name').parent().removeClass("gfield_error");
                (Address == "") ?
                    $('input#address').parent().addClass("gfield_error") : $('input#address').parent().removeClass("gfield_error");
                (ZipCode == "") ?
                    $('input#zip_code').parent().addClass("gfield_error") : $('input#zip_code').parent().removeClass("gfield_error");
                (Checkbox == false) ?
                    $('label.choice_checkbox').addClass("gfield_error") : $('label.choice_checkbox').removeClass("gfield_error");
                return false;
            }
            else if(valid == 0) {
                var digits = ContactPhone.replace(/[^0-9]/g, "");
                if(digits.length != 10 && !(digits.length == 11 && digits[0] == 1)) {
                    return false;
                } else {
                    if(digits.length == 10){
                        $('input#contact_phone').val(ContactPhone.replace(/[^0-9]/g, ""));
                    } else {
                        $('input#contact_phone').val(ContactPhone.replace(/[^0-9]/g, "").substring(1));
                    }
                    // record_submission(0);
                    return true;
                }
            }
            else if(valid == 1) {
                return false;
            }

        }

        function $_GET(param){
            var vars = {};
            window.location.href.replace(
                /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
                function( m, key, value ) { // callback
                    vars[key] = value !== undefined ? value : '';
                    if(vars['t']) {
                        time = parseInt(vars['t']);
                    }
                }
            );
        }

    </script>


      <div class="section-hero-business">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="block-title-hero-business"><span class="block-title-hero-business--strong">Built for Business:</span> <span class="nobreak">Get Fast,</span> Reliable Internet and Business Phone Service <span class="nobreak">from AT&T.</span></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 block-subtitle-hero-business">ENJOY</div>
                            <div class="col-xs-12 col-sm-9 col-md-9">
                                <img class="hidden-xs" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/arrow-items.png" style="float: left;">
                                <ul class="block-list-plus">
                                    <li>Up to <strong>75 Mbps</strong></li>
                                    <li class="long-item">Email, web video & conference,
                                        <br> upload & loading files and more!</li>
                                    <li>Security protection</li>
                                </ul>
                            </div>
                        </div>
<!--                         <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 block-subtitle-hero-business">BUSINESS BONUS</div>
                            <div class="col-xs-12 col-sm-9 col-md-9">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/arrow-items.png">
                                <img class="img-visa-business" src="<?php bloginfo('stylesheet_directory') ?>/templates/images/visacard.png" alt="AT&T Cash Back Offer" />
                                <a href="#modalDetails" data-toggle="modal" class="visa-disclaimer-business">Offer Details</a>
                                <div class="block-content-visabonus"><span class="block-gettext-visabonus">Get up to</span>
                                    <br>
                                    <span class="block-price-visabonus">$400 </span><span class="block-smallprice-visabonus">in Visa<sup>®</sup> Reward Cards</span>
                                    <br>
                                    <span class="block-smalltext-visabonus">when you order new <span class="nobreak">U-Verse® High Speed Internet</span></span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5">
                        <div class="form-business">
                          <!--   <div class="row">
                                <div class="col-xs-12 block-title-form-business">
                                    Get a free quote in minutes
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-xs-12 ">
                                    <!-- <a class="block-button-form-business" href="#">Get your free quote</a> -->
                                    
                <div class='gf_browser_chrome gform_wrapper form-business-styles_wrapper' id='gform_wrapper_2' ><a id='gf_2' class='gform_anchor' ></a>
                <form method='POST' class='form-business-styles' id='gform_2' action='//tracking.centerfield.com/post' onsubmit="return submitform();">
                <div class="validation_error">There was a problem with your submission. Errors have been highlighted below.</div>
                        <div class='gform_body'>
                            <ul id='gform_fields_2' class='gform_fields top_label form_sublabel_below description_below'>
                                <li id='field_2_14' class='gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below' >
                                    <div class="block-title-form-business">
                                        Get a free quote in minutes
                                    </div>
                                </li>

                                <li id='field_2_1' class='gfield input-business gfield_contains_required field_sublabel_below field_description_below' >
                                    <label class='gfield_label' for='input_2_1' >
                                        First name<span class='gfield_required'>*</span>
                                    </label>
                                    <div class='ginput_container ginput_container_text'>
                                        <input name='first_name' id='first_name' type='text' value='' class='medium'  tabindex='1'  placeholder='First name' aria-required="true" aria-invalid="false" />
                                    </div>
                                </li>

                                <li id='field_2_2' class='gfield input-business field_sublabel_below field_description_below' >
                                    <label class='gfield_label' for='input_2_2' >
                                        Last name
                                    </label>
                                    <div class='ginput_container ginput_container_text'>
                                        <input name='last_name' id='last_name' type='text' value='' class='medium'  tabindex='2'  placeholder='Last name'  aria-invalid="false" />
                                    </div>
                                </li>

                                <li id='field_2_3' class='gfield input-long-business gfield_contains_required field_sublabel_below field_description_below' >
                                    <label class='gfield_label' for='input_2_3' >
                                        Email<span class='gfield_required'>*</span>
                                    </label>
                                    <div class='ginput_container ginput_container_text'>
                                        <input name='email_address' id='email_address' type='text' value='' class='large'  tabindex='3'  placeholder='Email' aria-required="true" aria-invalid="false" />
                                    </div>
                                </li>

                                <li id='field_2_11' class='gfield input-business gfield_contains_required field_sublabel_below field_description_below' >
                                    <label class='gfield_label' for='input_2_11' >
                                        Phone #<span class='gfield_required'>*</span>
                                    </label>
                                    <div class='ginput_container ginput_container_text'>
                                        <input name='contact_phone' id='contact_phone' type='text' value='' class='medium'  tabindex='4'  placeholder='Phone #' aria-required="true" aria-invalid="false" />
                                    </div>
                                </li>

                                <li id='field_2_5' class='gfield input-business field_sublabel_below field_description_below' >
                                    <label class='gfield_label' for='input_2_5' >
                                         Business name
                                    </label>
                                    <div class='ginput_container ginput_container_text'>
                                        <input name='company_name' id='company_name' type='text' value='' class='medium'  tabindex='5'  placeholder='Business name'  aria-invalid="false" />
                                     </div>
                                </li>

                                <li id='field_2_6' class='gfield input-business field_sublabel_below field_description_below' ><label class='gfield_label' for='input_2_6' >
                                  Address
                                </label>
                                <div class='ginput_container ginput_container_text'>
                                     <input name='address' id='address' type='text' value='' class='medium'  tabindex='6'  placeholder='Address'  aria-invalid="false" />
                                     </div>
                                </li>

                                <li id='field_2_12' class='gfield input-business field_sublabel_below field_description_below' >
                                <label class='gfield_label' for='input_2_12' >
                                    Zip Code
                                </label>
                                <div class='ginput_container ginput_container_text'>
                                    <input name='zip_code' id='zip_code' type='text' value='' class='medium'  tabindex='7'  placeholder='Zip Code'  aria-invalid="false" />
                                    </div>
                                </li>

                                <li id='field_2_10' class='gfield checkbox-business gfield_contains_required field_sublabel_below field_description_below' >
                                    <label class='gfield_label'  >
                                        <span class='gfield_required'>*</span>
                                    </label>
                                    <div class='ginput_container ginput_container_checkbox'>
                                        <ul class='gfield_checkbox' id='input_2_10'>
                                            <li class='gchoice_2_10_1'>
                                                <input name='checkbox' type='checkbox'  value='By completing this form I authorize product specialist to use this information to check service availability and call me at the above business contact phone number.'  id='choice_checkbox' tabindex='8'  />
                                                <label for='choice_2_10_1' id='label_2_10_1' class="choice_checkbox">
                                                    By completing this form I authorize product specialist to use this information to check service availability and call me at the above business contact phone number.
                                                </label>
                                             </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class='gform_footer top_label'> 
                            <input type='submit' id='gform_submit_button_2' class='gform_button button' value='GET YOUR FREE QUOTE' tabindex='9' /> 
                        </div>
                        <input type='hidden' name='cpid' value='<?php echo $advertiser['cpid'] ?>' />
                        <input type='hidden' name='offer_id' value='<?php echo $advertiser['ckmid'] ?>' />
                        <input type='hidden' name='dnis' id='dnis' value='' />
                    </form>
                        </div>
                        <script type='text/javascript'> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 2) {if(!/(android)/i.test(navigator.userAgent)){jQuery('#input_2_11').mask('(999) 999-9999? x99999').bind('keypress', function(e){if(e.which == 13){jQuery(this).blur();} } );jQuery('#input_2_12').mask('99999').bind('keypress', function(e){if(e.which == 13){jQuery(this).blur();} } );}if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script>
                    <script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [2, 1]) } ); </script>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="section-ctabanner-business">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 nogutter"><a href="tel:8558035750">CALL NOW &nbsp;&nbsp;<span class="nobreak"><span class="af-tel qd-tel"><?php echo $advertiser['phone']; ?></span></span></a></div>
                </div>
            </div>
        </div>
        <div class="section-maincontent-business">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-7">
                        <div class="block-title-maincontent-business">Stay Connected with Customers Around <span class="nobreak">The Clock</span></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 ">
                                <img class="ico-master-business" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/ico-wifi-business.png" alt="AT&T Business" />
                                <div class="block-group-maincontent">
                                    <div class="block-subtitle-maincontent-business">AT&T Business Edition</div>
                                    <ul class="block-items-maincontent-business">
                                        <li>Wireless Networking</li>
                                        <li class="block-subitems-maincontent-business">Share Internet access, files, servers, printers and other devices</li>
                                        <li>Security</li>
                                        <li class="block-subitems-maincontent-business">Enjoy powerful <span class="nobreak">Anti-Spyware</span>, <span class="nobreak">Anti-Virus,</span> <span class="nobreak">Anti-spam</span> and <span class="nobreak">Firewall Services</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <img class="ico-master-business" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/ico-phone-business.png" alt="AT&T Business" />
                                <div class="block-group-maincontent">
                                    <div class="block-subtitle-maincontent-business">AT&T Phone <span class="nobreak">(Business BVoiP)</span></div>
                                    <ul class="block-items-maincontent-business">
                                        <li>Caller ID Name and Number</li>
                                        <li>Three Way Calling</li>
                                        <li>Call Waiting</li>
                                        <li>Call Forwarding</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-5">
                        <img class="img-responsive img-maincontent-business" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/around-business.png" alt="AT&T Business" />
                    </div>
                </div>
            </div>
        </div>
<!--         <div class="section-subcta-business">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-img-visa-business-subcta">
                            <img class="img-visa-business-subcta" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/visacard-circle.png" alt="AT&T Cash Back Offer" /></div>
                        <div class="block-content-subcta">Get up to <span class="block-price-subcta">$400</span> in Visa<sup>®</sup> Reward Cards when you order new <span class="nobreak">U-Verse<sup>®</sup></span> High Speed Internet</div>
                    </div>
                </div>
            </div>
        </div> -->