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
    <div class="container" style="margin-top: 80px;margin-bottom: 30px;">
        <p>By purchasing any Merchant Offering, Product or participating in other available programs via the Site, you agree to the Terms of Use, including, without limitation, the Terms of Sale specified below. These Terms of Sale form part of the overall Terms of Use of the Site and are to be read in consonance with them.</p>

        <p><strong>These rules apply unless otherwise stated in the fine print pertaining to the deal:</strong></p>

        <ul>
            <li>
                <p>Voucher will expire on the date specified on the voucher&nbsp;</p>
            </li>
            <li>
                <p>Cannot be combined with other offers</p>
            </li>
            <li>
                <p>Providing voucher code is mandatory to avail offer&nbsp;</p>
            </li>
            <li>
                <p>Booking, reservations and&nbsp;amendments are subject to availability</p>
            </li>
            <li>
                <p>Must be redeemed in a single visit (unless specified otherwise)</p>
            </li>
            <li>
                <p>Vouchers can be redeemed only after due verification of the customer (including photo ID proof, if required)</p>
            </li>
            <li>
                <p>All local/national laws and rules, consumption of intoxicants etc - that apply to regular customers, apply to BashIndia voucher holders too</p>
            </li>
            <li>
                <p>The merchant is solely responsible for the taxes levied/to be levied on the services/products for providing the Sales Invoice to the Customer against the services rendered or product sold.</p>
            </li>
            <li>
                <p>In case of cancellation or transactional failure, Promo Codes shall not be valid for cash back.</p>
            </li>
        </ul>

        <p><br />
            <strong>F&amp;B Deals with Drinks:</strong></p>

        <ul>
            <li>
                <p>Drinks will be served on all valid offer days, except dry days. Please check local dry day listings before availing the offer.</p>
            </li>
            <li>
                <p>Drinks brands are subject to availability.&nbsp; If a particular brand is unavailable at a given point in time another brand of equal or better grade will be served as per the Restaurant policy.</p>
            </li>
            <li>
                <p>Drinks can only be redeemed only after due verification of the customer (including age proof &ndash; 25 years or above, photo ID proof etc., if required)</p>
            </li>
        </ul>

        <p><br />
            <strong>Product Deals:</strong>&nbsp;</p>

        <ul>
            <li>
                <p>The merchant is the seller of all products on the website and will be solely responsible for the products sold.</p>
            </li>
        </ul>

        <p><br />
            <strong>Health/Medical/Surgical Services Deals:&nbsp;</strong></p>

        <ul>
            <li>
                <p>Given the nature of these deals, BashIndia does not take responsibility for any medical complications that arise during or post the treatment. We strongly advise our users to take all necessary precautions / consultations before availing this deal.</p>
            </li>
        </ul>

        <p>&nbsp;</p>

        <p><strong>Purchase and Redemption of BashIndia Vouchers</strong></p>

        <ul>
            <li>
                <p>Descriptions of the Merchant Offerings and Products advertised on the Site are provided by the Merchant or other referenced third parties. BashIndia is not responsible for any claims associated with the description of the Merchant Offerings or Products. Pricing relating to certain Merchant Offerings, Products, and other available programs on the Site may change at any time in BashIndia&rsquo;s sole discretion without notice. So, it is advisable to go through the policies before making any purchase on our Site.</p>
            </li>
            <li>
                <p>A Merchant may advertise goods, services or experiences on the Site, or with respect to Products, supply products to BashIndia, that require Merchant to have an up-to-date regulatory authorization, license, or certification. BashIndia does not verify, validate, or collect evidence of any regulatory authorization, license or certification from any Merchant (including, without limitation, but not limited to, Health &amp; Fitness and Beauty &amp; Spa Merchants).</p>
            </li>
            <li>
                <p>BashIndia is not a health or wellness provider and does not, will not and cannot refer, recommend or endorse any specific professional, services, products or procedures that are advertised on the Site. The Site is not a substitute for professional advice, including, without limitation, medical advice, diagnosis or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a health condition. Never neglect to seek out or delay or disregard professional advice relating to your health because of something you have read on the Site.</p>
            </li>
            <li>
                <p>BashIndia may, in its sole discretion, verify a user&rsquo;s identity prior to processing a purchase. BashIndia may also refuse to process a purchase, may cancel a purchase, or may limit quantities or shipment to particular addresses, as reasonably deemed necessary, to comply with applicable law or to respond to a case of misrepresentation, fraud or known or potential violations of the law or these Terms of Sale. Refunds for cancelled orders may be issued where appropriate.</p>
            </li>
            <li>
                <p>If an offer becomes unavailable between ordering and processing, BashIndia will either cancel or not process the order and will notify you by email. Refund will be processed by the same mode of payment as was used while ordering by the Customer.</p>
            </li>
            <li>
                <p>BashIndia does not guarantee that it offers best available rates or prices and does not guarantee against pricing errors. BashIndia reserves the right, in its sole discretion, to not process or to cancel any orders placed, including, without limitation, if the price was incorrectly posted on the Site. If this occurs, BashIndia will attempt to notify you by email. In addition, BashIndia reserves the right, in its sole discretion, to correct any error in the stated retail price of the Merchant Offering or Product.</p>
            </li>
            <li>
                <p>Some services for which BashIndia Voucher(s) can be redeemed are activities that involve potential bodily harm (such as different forms of adventure sports and activities.), and for those activities BashIndia takes no responsibility for the service or activity being offered, and the User takes responsibility for his or her own actions in utilizing the services for which the BashIndia Voucher can be redeemed.</p>
            </li>
        </ul>

        <p>The BashIndia website is a platform which facilitates promotion of various deals offered by merchants, on their respective services and products by way of offering vouchers.</p>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <p><strong>Standard Terms and Conditions (for Restaurant Services BashIndia Vouchers).</strong></p>

        <p>For the purpose of this section, &lsquo;Restaurant&rsquo; shall be defined as an Institution that offers food and beverages for sale in its regular business operations, and is making such food and beverages available to purchasers of BashIndia Vouchers. In this respect, the following shall constitute as &lsquo;Standard Terms and Conditions&rsquo; for redeeming BashIndia Vouchers:&nbsp;</p>

        <ul>
            <li>
                <p>BashIndia shall not be responsible for the quality of services provided by the Restaurant, and the same shall be the sole responsibility of the Restaurant.&nbsp;</p>
            </li>
            <li>
                <p>BashIndia Vouchers are redeemable in their entirety only and may not be redeemed partially or incrementally.&nbsp;</p>
            </li>
            <li>
                <p>BashIndia Vouchers can be redeemed only after due verification of the customer including, without limitation, matching the unique identification number provided to the customer at the time of purchase of BashIndia Vouchers.&nbsp;</p>
            </li>
            <li>
                <p>&ldquo;Voucher expiry date&rdquo; shall be mentioned on BashIndia Vouchers for your reference.&nbsp;</p>
            </li>
            <li>
                <p>Use of BashIndia Vouchers for drinks shall be at the sole discretion of the Restaurant and is further subject to all applicable laws.&nbsp;</p>
            </li>
            <li>
                <p>It is at the discretion of the Restaurant to determine whether BashIndia Vouchers can be combined with any other Restaurant vouchers, third party vouchers, coupons, or promotions and the like.&nbsp;</p>
            </li>
            <li>
                <p>BashIndia&nbsp;Vouchers cannot be used for taxes, tips or prior balances, unless permitted by the Restaurant.&nbsp;</p>
            </li>
            <li>
                <p>BashIndia Vouchers are valid for dine-in only unless otherwise stated.&nbsp;</p>
            </li>
            <li>
                <p>The issuing of venue credit is at the sole discretion of the Restaurant.&nbsp;</p>
            </li>
            <li>
                <p>Neither&nbsp;BashIndia nor the venue is responsible for lost or stolen Vouchers or the reference numbers mentioned on it.&nbsp;</p>
            </li>
            <li>
                <p>Reproduction, sale or trade of BashIndia Vouchers is strictly prohibited.&nbsp;</p>
            </li>
            <li>
                <p>Any attempted redemption not consistent with these Terms of Use, Standard Terms &amp; Conditions and Specific Terms &amp; Conditions mentioned on the Voucher will render the BashIndia Voucher void and invalid.&nbsp;</p>
            </li>
            <li>
                <p>The BashIndia Voucher (including, but not limited to, any discounts provided therein) will expire on the date specified on it, and you will not be able to avail the service from the merchant after this date&nbsp;</p>
            </li>
        </ul>

        <p>Restaurants for which the deals are availed by you will have their own applicable terms and conditions, in relation to their own supply of their goods and services, and you agree to (and shall) abide by those terms and conditions.&nbsp; The responsibility to do so is yours alone.</p>

        <p><strong>&nbsp;Standard Terms and Conditions (for Products &amp; Non- Restaurant Services BashIndia Vouchers).</strong></p>

        <p>&nbsp;The following shall constitute as &lsquo;Standard Terms and Conditions&rsquo; for redeeming BashIndia Vouchers for purchasing Merchant&rsquo;s goods and/or services from Institutions other than Restaurants:&nbsp;</p>

        <ul>
            <li>
                <p>BashIndia shall not be responsible for the quality of products and/or services provided by the Institution, and the same shall be the sole responsibility of the Institution.&nbsp;</p>
            </li>
            <li>
                <p>BashIndia Vouchers are redeemable in their entirety only and may not be redeemed incrementally.&nbsp;</p>
            </li>
            <li>
                <p>BashIndia Vouchers can be redeemed only after due verification of the customer including, without limitation, matching the unique identification number provided to the customer at the time of purchase of BashIndia Vouchers.&nbsp;</p>
            </li>
            <li>
                <p>BashIndia&nbsp;Vouchers may be applied only to purchase the merchandise sold by the Merchant, and may not be applied to shipping or handling charges.&nbsp;</p>
            </li>
            <li>
                <p>Limit one Voucher per redemption. Only one Voucher can be used per visit unless otherwise provided in the Specific Terms &amp; Conditions of the Voucher or as specified by the Institution.&nbsp;</p>
            </li>
        </ul>

        <ul>
            <li>
                <p>The issuing of credit is at the sole discretion of the Institution.</p>
            </li>
        </ul>

        <ul>
            <li>
                <p>Neither&nbsp;BashIndia nor the Institution is responsible for lost or stolen Vouchers or the reference number mentioned on it. BashIndia Vouchers cannot be combined with any other gift vouchers, third party vouchers, coupons, or promotions, unless otherwise specified by the Institution.</p>
            </li>
        </ul>

        <ul>
            <li>
                <p>Reproduction, sale or trade of BashIndia Vouchers is strictly prohibited.</p>
            </li>
        </ul>

        <ul>
            <li>
                <p>Any attempted redemption not consistent with these terms and conditions will render the BashIndia Voucher void and invalid.</p>
            </li>
        </ul>

        <p>Institutions will have their own applicable terms and conditions, in relation to their own supply of their goods and services, and you agree to (and shall) abide by those terms and conditions.&nbsp; The responsibility to do so is yours alone.&nbsp;</p>

        <p>&nbsp;</p>



    </div>
    @include('footer')
@endsection