@extends('layouts.web')


@section('head')
<link rel="stylesheet" href="{{asset('web/assets/lightbox/dist/css/lightbox.min.css')}}">
<style>
    .title, .subtitle,.child-subtitle{
        font-family: 'Hind Siliguri', sans-serif;
        color: #000;
        margin-bottom: 10px;
    }
    .title{
        font-size: 24px;
        font-weight:700;
    }
    .subtitle{
        font-size: 20px;
        font-weight:700;
        margin-bottom: 5px;
    }
    .child-subtitle{
        font-size: 18px;
        font-weight:700;
        margin-bottom: 5px;
    }

    .description{
        font-family: 'Noto Sans Bengali', sans-serif;
        font-size: 15px;
        line-height: 28px;
        font-weight:400;
        color: #605f62;
        text-align: justify;
    }

    ul{
        padding-left: 3rem;
        list-style: disc;
        font-family: 'Noto Sans Bengali', sans-serif;
        font-size: 15px;
        line-height: 28px;
        font-weight:400;
        color: #605f62;
        text-align: justify;
    }

</style>
@endsection

@section('content')
<section id="extend_content">
<div class="container pb-5">
    <div class="title">
        <h3 class="text-capitalize">
            Privacy Policy
        </h3>
    </div>
    <div class="title">
       General
    </div>
    <p class="description">
                Buysellbd values your privacy. This Privacy Policy describes how we (Buysellbd or “the product” or its developer “B2M
                Technologies Ltd” Join venture company with “Zing mobile” or “B2M”) handle user data (e.g., information provided by a
                user, collected about a user, and collected about a user’s use of the games or Site), including by disclosing the
                collection, use, and sharing of the data, as it occurs since/during your use of the app.
    </p>
    <span class="subtitle">
        How Buysellbd Handles User Data <br><span class="child-subtitle">Information you provide:</span> <br>
        <span class="description">
            We may collect and store any information you provide through our web or other related services.
        </span>
    </span> <br>
    <div class="child-subtitle">
        Information collected automatically:
        <span class="description">
            We receive and store certain types of information whenever you interact with us.For example, we obtain certain types of
            information as Internet protocol (IP) address used to connect your computer
            to
            the Internet; login; e-mail address; password; computer and connection information such as browser type, version,
            and
            time zone setting, browser plug-in types and versions, operating system, and platform; purchase history, full
            Uniform
            Resource Locator (URL) clickstream, including date and time; cookie number; products you viewed/searched; and the
            phone
            number you used, session information, including page response times, download errors, length of visits to certain
            pages,
            page interaction information (such as scrolling, clicks, and mouse-overs), and methods used to browse away from the
            page.
            We may also collect technical information to help us identify your device for diagnostic purposes. When you install
            or
            use our app in any mobile device we may receive information about your location and your mobile device, including
            time
            of use and unique identifier for your device. We may use this information to provide you with location-based
            services,
            such as pricing, advertising, search results, and other personalized content.
        </span>
    </div>
    <div class="child-subtitle">
        Tracking Technology: <br>
        <span class="description">
            BuySellBD analyzes information that is tracked each time you use our Services.We may use Google
            Analytics, including the Google Analytics Demographics and Interest Reporting feature, and other software to track
            usage
            of its Services.
        </span>
    </div>

    <p class="subtitle">Use of “Cookies” To Collect Information</p>
    <p class="description">
        Cookies are small data files that a website you visit may save on your computer or handheld device that usually includes
        an anonymous unique identifier. Our Websites and those of our Products may use cookies for user authentication, keeping
        track of your preferences, promotional campaigns, tracking our audience size and traffic patterns, and in certain other
        cases. We may include small graphic images in our email messages and newsletters to determine whether the messages were
        opened and the links were viewed. <br>
        Third-party advertisers may also create and access cookies, which will be subject to their privacy policies – we accept
        no responsibility or liability for the use of such third parties’ cookies. If you do not wish cookies to be placed on
        your PC or handheld device, then they can be disabled in your web browser. The option to do so is normally found in your
        browser’s “security settings” section. Please note that permanently disabling cookies in your browser may hinder your
        use of our Websites as well as other websites and interactive services.
    </p>
    <p class="subtitle">Security</p>
    <p class="description">
        All security on our Websites is treated seriously. Where applicable, we undertake security steps, including use of SSL
        technology, on our back-end systems that store customer account information and to protect data transmissions. However,
        this is not a guarantee that such data transmissions cannot be accessed, altered or deleted due to firewall or other
        security software failures.
        If you have any further concerns about security, please email our Customer Support Team at cservice@b2m-tech.com or
        write to the following address: <br>
        B2M Technologies Ltd., <br>
        75A Dhanmondi 5/A , <br>
        Dhaka 1209,
    </p>
    <p class="subtitle">Disclosure of User Data</p>
    <p class="description">
        BUYSELLBD collects Personal Information and other information from you in order to but are not limited to:
    </p>
    <ul>
        <li>Support user authentication/security and content recommendation.</li>
        <li>Determine your current geographic location/language for localized content/services.</li>
        <li>Comply with the requirements of our games developer, partners, and Distributors.</li>
        <li>Notify you of changes to this Privacy Policy and other policies.</li>
        <li>Integrate with additional service providers for use of the Services.</li>
        <li>Personalize our Services to better reflect particular interests and preferences.</li>
        <li>Generally improve your experience.</li>
    </ul>
    <p class="description">
        Additionally, we may use anonymous Personal Information and share it in an aggregated form with third parties,
        advertisers and/or business partners in order to analyze Service usage, improve the Services and your experience, or for
        other similar purposes. Such (anonymous) use of information is not subject to any restrictions under this Privacy
        Policy.
        Furthermore, Should you breach our terms and conditions or terms of use or if we are under a duty to disclose or share
        your personal data in order to comply with any legal obligation, we may disclose your information to a relevant
        authority. This may include exchanging information with other companies and organizations for the purposes of fraud
        protection and credit risk reduction. Any disclosure of personal information will be strictly controlled and made fully
        in accordance with current international law or the law of the area of the concerned case of business.
    </p>
    <p class="subtitle">POLICY CHANGES</p>
    <p class="description">
        Changes in this policy will occur from time to time in response to changing legal, regulatory or operational
        requirements. We will provide notice of any such changes (including when they will take effect) in accordance with law.
        Your continued use of the services or products after any such updates take effect will constitute acceptance of those
        changes. If you do not accept any updates to this Privacy Statement, you may cancel your use of our services or
        products. To see when this Privacy Statement was last updated, please see the "Last Updated" section below.
    </p>
</div>
</section>
@endsection
@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('web/assets/lightbox/dist/js/lightbox-plus-jquery.min.js')}}"></script>
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/home_ticket.js') }}"></script>

<script>
    $(function() {
        windowResize();
        $(window).resize(function(){
        windowResize();
        });
    });


    function windowResize(){
    // wondow resize
    let width = $(window).width();
    if(width < 2500)
    { $(".about_details").each(function(){ let text=$(this).text(); if(text.length> 300){
        $(this).text(text.substring(0,300) + " ...");
        }
        });
        $(".read_more_about_btn").removeClass('d-none');
        $(".read_less_about_btn").removeClass('d-none');
        }else{
        $(".about_details").each(function(){
        let copy_details = $(this).parent().find(".copy_details").text();
        $(this).html(copy_details);
        });
        $(".read_more_about_btn").addClass('d-none');
        $(".read_less_about_btn").addClass('d-none');
        }
        }


        $(document).on("click",".read_more_about_btn",function(){
        let text = $(this).parent().find(".copy_details").text();
        $(this).parent().find(".about_details").html(text);
        $(this).find("span").removeClass('btn-buy-sell').addClass('btn-buy-sell-danger').text("Read Less");
        $(this).removeClass('read_more_about_btn').addClass('read_less_about_btn');
        });
        $(document).on("click",".read_less_about_btn",function(){
        let text = $(this).parent().find(".copy_details").text();
        $(this).parent().find(".about_details").text(text.substring(0,300) + " ...");
        $(this).find("span").removeClass('btn-buy-sell-danger').addClass('btn-buy-sell').text("Read More");
        $(this).removeClass('read_less_about_btn').addClass('read_more_about_btn');
        });
</script>

@endpush
