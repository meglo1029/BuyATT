 <div class="section-footer-business">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">Geographic and service restrictions apply to <span class="nobreak">AT&T U-verse </span>services. Prices, programming, and offers subject to change without notice. New Residential customers only. Call to see if you qualify. </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade details_modal" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <p>AT&T Internet $200/$400 Reward Card Promotion: Offer available 01/01/2017 through 04/30/2017.
                        </p>
                        <p>Offer available to new AT&T Internet for Business and AT&T Business Fiber subscribers or customers migrating from FastAccess® Business DSL or AT&T High Speed Internet Business Edition to AT&T Internet for Business or AT&T Business Fiber. Offer is not available to local, state or federal government entities, e-rate eligible entities, or Rural Health Care (RHC) entities. Not eligible for renewals or speed upgrades. Geographic and service restrictions apply to AT&T Internet services. Go to https://www.att.com/internet/index.html to check qualification. Acceptance of Terms of Service required; see att.com/internet-terms. Internet speed claim(s) represent maximum downstream and/or upstream speed capabilities. Speeds may vary and are not guaranteed. Many factors can affect actual speeds. Customer must have active service for minimum 60 calendar days and must have active service at time of redemption to qualify for $200/$400 AT&T Visa® Reward Card (“AT&T Reward Card”). Customers who purchase up to and including 25MB AT&T Internet for Business or AT&T Business Fiber qualify for the $200 Reward Card and customers who purchase 45MB – 1GB AT&T Internet for Business or AT&T Business Fiber qualify for the $400 Reward Card. Qualified subscribers must complete the online rebate redemption process at the AT&T Business Reward Center https://rewardcenter.att.com/Smallbusiness/default.aspx by the date provided in the redemption letter to obtain AT&T Reward Card. AT&T Reward Card will be issued to the qualified subscribers within approximately 8 weeks of AT&T receiving the completed redemption information and Customer meeting the 60 calendar day minimum service and active service at the time or redemption requirements. A maximum of one AT&T Reward Card may be issued per account (i.e. phone number to which AT&T Internet line(s) is/are billed) and expires 6 months after issuance. Visa U.S.A. Inc. is not affiliated with AT&T or this offer. AT&T is not responsible for lost, late, mutilated, misdirected or postage-due mail. Void where prohibited, taxed or restricted. The Reward Card cannot be applied to the AT&T bill, not redeemable for cash and not usable at automated gasoline pumps or for cash withdrawal at any cash dispensing locations. See cardholder agreement and card carrier for other terms and conditions. Offers may be modified or discontinued at any time without notice. Other conditions apply. Visa prepaid cards are issued by U.S. Bank National Association, pursuant to a license from Visa U.S.A. Inc.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Responsive -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $(".menu-responsive-button").click(function() {
                $(".navbar-master li").toggle(700);
                $(".section-header-master").toggle(700);
            });
        });


        $(document).ready(function() {
            $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function() {
                $(this).toggleClass('open');
            });
        });
        </script>
        <!-- Google Analytics -->
        <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-18306850-1', 'buyatt.com');
        ga('send', 'pageview');
        </script>
        <!-- End Google Analytics -->
        <!-- Start Facebook Code -->
        <script type="text/javascript">
        adroll_adv_id = "TMKHIGHR2VEX7HIEFVYKMK";
        adroll_pix_id = "XKTAR6BAFVHZTCMW44GIGN";
        (function() {
            var oldonload = window.onload;
            window.onload = function() {
                __adroll_loaded = true;
                var scr = document.createElement("script");
                var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                scr.setAttribute('async', 'true');
                scr.type = "text/javascript";
                scr.src = host + "/j/roundtrip.js";
                ((document.getElementsByTagName('head') || [null])[0] ||
                    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                if (oldonload) {
                    oldonload()
                }
            };
        }());
        </script>
        <!-- End Facebook Code  -->
        <!-- Google Code for Remarketing Tag -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1039728477;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <!-- cloudfront script -->
        <script type="text/javascript">
        var _stk = "b7cf044c5fc73ee77a48253f5224d24113c100e9";
        (function() {
            var a = document,
                b = a.createElement("script");
            b.type = "text/javascript";
            b.async = !0;
            b.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'd31y97ze264gaa.cloudfront.net/assets/st/js/st.js';
            a = a.getElementsByTagName("script")[0];
            a.parentNode.insertBefore(b, a);
        })();
        </script>
        <!-- End cloudfront script -->

    <!--     Form anchor code -->

<!-- <script>
    function formposition(parameter1, parameter2, parameter3) {
    // code to be executed
}
</script> -->
<script>
    $(function () {
         var initial_phone_number = $('.af-tel').first().text().trim();  
         $('input#dnis').val(initial_phone_number);

         $($('.af-tel')[0]).on('DOMSubtreeModified',function(){
            var new_num = $('.af-tel').first().text().trim();
            if (new_num != initial_phone_number) {
                $('input#dnis').val(new_num);
            }
        });
    });
</script>


        <link rel='stylesheet' id='gforms_reset_css-css'  href='<?php bloginfo('template_url'); ?>/assets/css/formreset.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css'  href='<?php bloginfo('template_url'); ?>/assets/css/formsmain.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css'  href='<?php bloginfo('template_url'); ?>/assets/css/readyclass.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css'  href='<?php bloginfo('template_url'); ?>/assets/css/browsers.min.css' type='text/css' media='all' />
<script type='text/javascript' src='http://www.googleadservices.com/pagead/conversion.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://www.buyatt.com/themes/att/assets/js/scripts.min.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://www.buyatt.com/addons/qd_toolkit/assets/js/vendors.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var QD_Settings = {"nonce":"f3b39af82c","ajaxURL":"http:\/\/www.buyatt.com\/wp\/wp-admin\/admin-ajax.php","viewsURL":"http:\/\/www.buyatt.com\/addons\/qd_toolkit\/assets\/admin\/views\/","qaDomain":"www.buyatt.qat","prodDomain":"www.buyatt.com","devDomain":"www.buyatt.dev","env":"prod","cpid":"","kbid":"","phone":"8558035750"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.buyatt.com/addons/qd_toolkit/assets/js/qdt-client.min.js'></script>
<script type='text/javascript' src='http://www.buyatt.com/wp/wp-includes/js/wp-embed.min.js?ver=4.7.2'></script>
<script type='text/javascript' src='http://www.buyatt.com/addons/gravityforms/js/jquery.maskedinput.min.js?ver=2.0.7.6'></script>
<script type='text/javascript' src='http://www.buyatt.com/addons/gravityforms/js/placeholders.jquery.min.js?ver=2.0.7.6'></script>
    </body>

    </html>