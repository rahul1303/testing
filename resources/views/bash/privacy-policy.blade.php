@extends('app')

@section('content')
    <style>
        /* Icon when the collapsible content is shown */
        .tes:after {
            font-family: "Glyphicons Halflings";
            content: "\e114";
            float: right;
            margin-left: 15px;
        }
        /* Icon when the collapsible content is hidden */
        .tes.collapsed:after {
            content: "\e080";
        }
        a:hover{
            text-decoration: none;
        }
        a:link {
            text-decoration: none;
        }

        /* visited link */
        a:visited {
            text-decoration: none;
        }

        /* selected link */
        a:active {
            text-decoration: none;
        }
    </style>
    @include('bash.nav-top-index')
    <div class="container" style="margin-top: 70px;margin-bottom: 30px;">
    <div id='ppHeader'>
        <strong>Privacy Policy</strong>
    </div>
    <div class='innerText'>This privacy policy has been compiled
            to better serve those who are concerned with how their 'Personally identifiable
            information' (PII) is being used online. PII, as used in US privacy law and information security,
            is information that can be used on its own or with other information to identify, contact, or locate
            a single person, or to identify an individual in context. Please read our privacy policy carefully to
            get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable
            Information in accordance with our website.<br></div><span id='infoCo'></span><br><div class='grayText'>
            <strong>What personal information do we collect from the people that visit our blog, website or app?</strong>
        </div><br /><div class='innerText'>When ordering or registering on our site, as appropriate, you may be asked to
            enter your name, email address, phone number, credit card information, social security number  or other details
            to help you with your experience.</div><br><div class='grayText'><strong>When do we collect information?</strong>
        </div><br /><div class='innerText'>We collect information from you when you place an order, subscribe to a newsletter
            , respond to a survey, fill out a form  or enter information on our site.</div><br><span id='infoUs'></span><br>
        <div class='grayText'><strong>How do we use your information? </strong></div><br /><div class='innerText'> We may use
            the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a
            survey or marketing communication, surf the website, or use certain other site features in the following ways:
            <br><br></div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To personalize user's
            experience and to allow us to deliver the type of content and product offerings in which you are most interested.
        </div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To improve our website in order to
            better serve you.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To administer
            a contest, promotion, survey or other site feature.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>&bull;</strong> To quickly process your transactions.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>&bull;</strong> To send periodic emails regarding your order or other products and services.</div><span id='infoPro'>
        </span><br><div class='grayText'><strong>How do we protect visitor information?</strong></div><br /><div class='innerText'>We
            do not use vulnerability scanning and/or scanning to PCI standards.
        </div><div class='innerText'>We use regular Malware Scanning.<br><br></div><div class='innerText'>We
            do not use an SSL certificate</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>
                &bull;</strong> We do not need an SSL because:</div><div class='innerText'>we provide third
            party payment gateway</div><span id='coUs'></span><br><div class='grayText'><strong>Do we use
                'cookies'?</strong></div><br /><div class='innerText'>We do not use cookies for tracking
            purposes </div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong>
            Understand and save user's preferences for future visits.</div><div class='innerText'>&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Keep track of advertisements.</div>
        <div class='innerText'><br>You can choose to have your computer warn you each time a cookie is
            being sent, or you can choose to turn off all cookies. You do this through your browser
            (like Internet Explorer) settings. Each browser is a little different, so look at your browser's
            Help menu to learn the correct way to modify your cookies.<br></div><br><div class='innerText'>If
            you disable cookies off, some features will be disabled that make your site experience more efficient
            and some of our services will not function properly.</div><br><div class='innerText'>However, you can
            still place orders .</div><br><span id='trDi'></span><br><div class='grayText'><strong>Third-party
                disclosure</strong></div><br /><div class='innerText'>We do not sell, trade, or otherwise transfer
            to outside parties your personally identifiable information unless we provide users with advance notice.
            This does not include website hosting partners and other parties who assist us in operating our website,
            conducting our business, or serving our users, so long as those parties agree to keep this information
            confidential. We may also release information when it's release is appropriate to comply with the law,
            enforce our site policies, or protect ours or others' rights, property, or safety. <br><br> However,
            non-personally identifiable visitor information may be provided to other parties for marketing, advertising,
            or other uses. </div><span id='trLi'></span><br><div class='grayText'><strong>Third-party links</strong>
        </div><br /><div class='innerText'>Occasionally, at our discretion, we may include or offer third-party products
            or services on our website. These third-party sites have separate and independent privacy policies. We therefore
            have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the
            integrity of our site and welcome any feedback about these sites.</div><span id='gooAd'></span><br><div class='blueText'><strong>
                Google</strong></div><br /><div class='innerText'>Google's advertising requirements can be summed up by Google's Advertising
            Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1
            316548?hl=en <br><br></div><div class='innerText'>We have not enabled Google AdSense on our site but we may do so in the future
            .</div><span id='coppAct'></span><br><div class='blueText'><strong>COPPA (Children Online Privacy Protection Act)</strong></div>
        <br /><div class='innerText'>When it comes to the collection of personal information from children under 13, the Children's Online
            Privacy Protection Act (COPPA) puts parents in control.  The Federal Trade Commission, the nation's consumer protection agency,
            enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children's privacy
            and safety online.<br><br></div><div class='innerText'>We do not specifically market to children under 13.</div><span id='ftcFip'>
        </span><br><div class='blueText'><strong>Fair Information Practices</strong></div><br /><div class='innerText'>The Fair Information Practices Principles form the backbone of privacy law in the United States
            and the concepts they include have played a significant role in the development of data protection laws around the globe.
            Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the
            various privacy laws that protect personal information.<br><br></div><div class='innerText'><strong>In order to be in line with
                Fair Information Practices we will take the following responsive action, should a data breach occur:</strong></div>
        <div class='innerText'>We will notify the users via in-site notification</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>&bull;</strong> Within 7 business days</div><div class='innerText'><br>We also agree to the Individual Redress Principle,
            which requires that individuals have a right to pursue legally enforceable rights against data collectors and processors who fail
            to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that
            individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.</div>
        <span id='canSpam'></span><br><div class='blueText'><strong>CAN SPAM Act</strong></div><br /><div class='innerText'>The CAN-SPAM Act is
            a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have
            emails stopped from being sent to them, and spells out tough penalties for violations.<br><br></div><div class='innerText'><strong>
                We collect your email address in order to:</strong></div><div class='innerText'><br><strong>To be in accordance with CANSPAM we
                agree to the following:</strong></div><div class='innerText'><strong><br>If at any time you would like to unsubscribe from
                receiving future emails, you can email us at</strong></div> and we will promptly remove you from <strong>ALL</strong> correspondence.
    <br><span id='ourCon'></span><br><div class='blueText'><strong>Contacting Us</strong></div><br /><div class='innerText'>If there are any
        questions regarding this privacy policy you may contact us using the information below.<br><br></div><div class='innerText'>bashindia.com
    </div><div class='innerText'>75/49 U-block DLF Phase-3</div>Gurgaon, Haryana 122001 <div class='innerText'>India</div>
    <div class='innerText'>hello@bashindia.com</div>
    </div>
    @include('footer')
@endsection