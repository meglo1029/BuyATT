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
                                    <a id="gf_2" class="gform_anchor"></a><div id="gform_confirmation_wrapper_2" class="gform_confirmation_wrapper form-business-styles"><div id="gform_confirmation_message_2" class="gform_confirmation_message_2 gform_confirmation_message">Thank you for contacting us! <br>
We will get in touch with you shortly.</div></div>                                </div>
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
