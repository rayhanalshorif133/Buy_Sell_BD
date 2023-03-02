<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="title">
                <h3>What We Do?</h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-6 course-padding-area sal-animate" data-sal="slide-right"
            data-sal-duration="800" data-sal-easing="ease">
            <div class="course_single_item what_we_do">
                <div class="card_image">
                    <img class="img-fluid w-100 what_we_do_image"
                        src="{{asset('web/assets/images/what_we_do/membership.jpg')}}" alt="membership"
                        loading="lazy">
                </div>
                <div class="subtitle p-3">
                    <h4>
                       Club Membership
                    </h4>
                    <p class="less">
                    We offer club memberships, including both online and offline services. Some popular online providers include ClassPass,
                    which offers memberships to classes and
                    </p>
                    <p class="d-none more">
                        We offer club memberships, including both online and offline services. Some popular online providers include ClassPass,
                        which offers memberships to classes and activities at local gyms, studios, and other venues, and Meetup, which helps
                        people find and join local groups with similar interests. Offline providers may include local organizations such as
                        country clubs, sports teams, and community groups.
                    </p>
                    <div class="text-left read_more_what_we_do">
                        <span class="btn btn-md btn-buy-sell">Read More</span>
                    </div>
                    <div class="read_less_what_we_do d-none text-left">
                        <span class="btn btn-md btn-buy-sell-danger">Read Less</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-6 course-padding-area sal-animate" data-sal="slide-right"
            data-sal-duration="800" data-sal-easing="ease">
            <div class="course_single_item what_we_do">
                <div class="card_image">
                    <img class="img-fluid w-100 what_we_do_image"
                        src="{{asset('web/assets/images/what_we_do/license.jpeg')}}" alt="membership"
                        loading="lazy">
                </div>
                <div class="subtitle p-3">
                    <h4>
                       License and Renewal
                    </h4>
                    <p class="less">
                        We offer a range of license and renewal services to help you keep your state-issued identification current and valid.
                        These services include help with driver’s ...

                    </p>
                    <p class="d-none more">
                        We offer a range of license and renewal services to help you keep your state-issued identification current and valid.
                        These services include help with driver’s license renewals, vehicle registration, and more. Depending on the state you
                        live in, we may be able to help you with renewing your license online, by mail, or in person. In certain states, you may
                        also be able to register for a new driver’s license or vehicle online. We can help you fill out the necessary forms,
                        submit the appropriate fees, and ensure that all the necessary paperwork is completed correctly. If you have any
                        questions about the renewal process, we are available to answer them.
                    </p>
                    <div class="text-left read_more_what_we_do">
                        <span class="btn btn-md btn-buy-sell">Read More</span>
                    </div>
                    <div class="read_less_what_we_do d-none text-left">
                        <span class="btn btn-md btn-buy-sell-danger">Read Less</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-6 course-padding-area sal-animate" data-sal="slide-right"
            data-sal-duration="800" data-sal-easing="ease">
            <div class="course_single_item what_we_do">
                <div class="card_image">
                    <img class="img-fluid w-100 what_we_do_image"
                        src="{{asset('web/assets/images/what_we_do/membership.jpg')}}" alt="membership"
                        loading="lazy">
                </div>
                <div class="subtitle p-3">
                    <h4>
                       Club Membership
                    </h4>
                    <p class="less">
                    We offer club memberships, including both online and offline services. Some popular online providers include ClassPass,
                    which offers memberships to classes and
                    </p>
                    <p class="d-none more">
                        We offer club memberships, including both online and offline services. Some popular online providers include ClassPass,
                        which offers memberships to classes and activities at local gyms, studios, and other venues, and Meetup, which helps
                        people find and join local groups with similar interests. Offline providers may include local organizations such as
                        country clubs, sports teams, and community groups.
                    </p>
                    <div class="text-left read_more_what_we_do">
                        <span class="btn btn-md btn-buy-sell">Read More</span>
                    </div>
                    <div class="read_less_what_we_do d-none text-left">
                        <span class="btn btn-md btn-buy-sell-danger">Read Less</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-6 course-padding-area sal-animate" data-sal="slide-right"
            data-sal-duration="800" data-sal-easing="ease">
            <div class="course_single_item what_we_do">
                <div class="card_image">
                    <img class="img-fluid w-100 what_we_do_image"
                        src="{{asset('web/assets/images/what_we_do/membership.jpg')}}" alt="membership"
                        loading="lazy">
                </div>
                <div class="subtitle p-3">
                    <h4>
                       Club Membership
                    </h4>
                    <p class="less">
                    We offer club memberships, including both online and offline services. Some popular online providers include ClassPass,
                    which offers memberships to classes and
                    </p>
                    <p class="d-none more">
                        We offer club memberships, including both online and offline services. Some popular online providers include ClassPass,
                        which offers memberships to classes and activities at local gyms, studios, and other venues, and Meetup, which helps
                        people find and join local groups with similar interests. Offline providers may include local organizations such as
                        country clubs, sports teams, and community groups.
                    </p>
                    <div class="text-left read_more_what_we_do">
                        <span class="btn btn-md btn-buy-sell">Read More</span>
                    </div>
                    <div class="read_less_what_we_do d-none text-left">
                        <span class="btn btn-md btn-buy-sell-danger">Read Less</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <span id="riz_event" class="mb-4"></span>
</div>
<script>
    $(function(){
        $(".read_more_what_we_do").on("click", function(){
            $(this).toggleClass("d-none");
            $(this).parent().find(".more").toggleClass("d-none");
            $(this).parent().find(".less").toggleClass("d-none");
            $(this).parent().parent().find(".read_less_what_we_do").toggleClass("d-none");
        });
        $(".read_less_what_we_do").on("click", function(){
            $(this).toggleClass("d-none");
            $(this).parent().find(".more").toggleClass("d-none");
            $(this).parent().find(".less").toggleClass("d-none");
            $(this).parent().parent().find(".read_more_what_we_do").toggleClass("d-none");
        });
    });
</script>
