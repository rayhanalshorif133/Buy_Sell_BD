<style>
    /* small popup */

    .popup {
        position: absolute;
        margin-top: -60px;
        height: 40%;
        background-color: #fff;
        z-index: 999;
        width: 22%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        /* scroll */
        overflow-y: scroll;
        overflow-x: hidden;
        /* scroll */

    }

    .location-from-search{
        border-radius: 0;
        border: 0;
        border-bottom: 1px solid #e0e0e0;
        border-top: 1px solid #e0e0e0;
    }

    /* focus */
    .location-from-search:focus{
        border-radius: 0;
        border: 0;
        border-bottom: 1px solid #e0e0e0;
        border-top: none;
        box-shadow: none;
    }




</style>

<div class="row p-3">
    <ul class="nav nav-pills mb-3 ticket-nav" id="pills-tab" role="tablist" style="margin: 0 0 0 7px;">
        <li class="nav-item" role="presentation">
            <span class="btn btn-md btn-buy-sell-tab active" id="pills-roundtrip-tab" data-bs-toggle="pill" data-bs-target="#pills-roundtrip"
            type="button" role="tab" aria-controls="pills-roundtrip" aria-selected="true">Roundtrip</span>
        </li>
        <li class="nav-item" role="presentation">
            <span class="btn btn-md btn-buy-sell-tab" id="pills-one-way-tab" data-bs-toggle="pill" data-bs-target="#pills-one-way"
            type="button" role="tab" aria-controls="pills-one-way" aria-selected="false">One-way</span>
        </li>
        <li class="nav-item" role="presentation">
            <span class="btn btn-md btn-buy-sell-tab" id="pills-multi-city-tab" data-bs-toggle="pill" data-bs-target="#pills-multi-city"
            type="button" role="tab" aria-controls="pills-multi-city" aria-selected="false">Multi-city</span>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-roundtrip" role="tabpanel" aria-labelledby="pills-roundtrip-tab">
            <div class="row">
                <div class="col-md-7 mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="select-to" class="form-label">From</label>
                            {{-- <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-from" class="form-control form-control-lg input-field location-from" placeholder="From">
                                <span class="form-select d-none select-from">
                                    <div class="text-center m-auto">
                                        <div class="spinner-border text-ticket" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </span>
                            </div> --}}
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-from" name="select-from" id="select-from" class="form-control form-control-lg input-field location-from"
                                    placeholder="From">
                            </div>
                            {{-- a small popup --}}
                            <div class="popup d-nonesd">
                                <div class="popup-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-icons">
                                                        <i class="fa-solid fa-search icon"></i>
                                                        <input type="text" for="select-from"
                                                        class="form-control form-control-lg input-field location-from-search"
                                                            placeholder="Where are you leaving from?">
                                                    </div>
                                                    <div class="text-center mt-5 content_after_search">
                                                        <div class="my-5">
                                                            <div>
                                                                <i class="fa-solid fa-search icon fs-3"></i>
                                                            </div>
                                                            <h5>
                                                                Search by city or airport
                                                            </h5>
                                                        </div>

                                                        {{-- make a loading row --}}


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-1" style="margin-top: 3rem!important;">
                            <div class="text-center">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="select-to" class="form-label">To</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-to" class="form-control form-control-lg input-field location-to" placeholder="To">
                                <span class="form-select d-none select-to">
                                    <option value="0">
                                        <div class="text-center m-auto">
                                            <div class="spinner-border text-ticket" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </option>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="dates" class="form-label">Departing</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-calendar-alt icon"></i>
                                <input type="text" name="dates_departing" class="form-control form-control-lg input-field" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="dates" class="form-label">Returning</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-calendar-alt icon"></i>
                                <input type="text" name="dates_returning" class="form-control form-control-lg input-field" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-user icon"></i>
                                <input type="text" name="name" class="form-control form-control-lg input-field" placeholder="Enter your name"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-envelope icon"></i>
                                <input type="email" name="email" class="form-control form-control-lg input-field" placeholder="Enter your email" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-phone icon"></i>
                                <input type="number" name="phone" class="form-control form-control-lg input-field" placeholder="Enter your phone"/>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- submit btn --}}
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-md btn-buy-sell">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-one-way" role="tabpanel" aria-labelledby="pills-one-way-tab">
           <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="select-to" class="form-label">From</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-from" class="form-control form-control-lg input-field location-from"
                                    placeholder="From">
                                <span class="form-select d-none select-from">
                                    <div class="text-center m-auto">
                                        <div class="spinner-border text-ticket" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-1" style="margin-top: 3rem!important;">
                            <div class="text-center">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="select-to" class="form-label">To</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-to" class="form-control form-control-lg input-field location-to" placeholder="To">
                                <span class="form-select d-none select-to">
                                    <option value="0">
                                        <div class="text-center m-auto">
                                            <div class="spinner-border text-ticket" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </option>
                                </span>
                            </div>
                        </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <label for="dates" class="form-label">Departing</label>
                        <div class="input-icons">
                            <i class="fa-solid fa-calendar-alt icon"></i>
                            <input type="text" name="departing-dates" class="form-control form-control-lg input-field" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <label for="name" class="form-label">Name</label>
                        <div class="input-icons">
                            <i class="fa-solid fa-user icon"></i>
                            <input type="text" name="name" class="form-control form-control-lg input-field" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-icons">
                            <i class="fa-solid fa-envelope icon"></i>
                            <input type="email" name="email" class="form-control form-control-lg input-field" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <label for="phone" class="form-label">Phone</label>
                        <div class="input-icons">
                            <i class="fa-solid fa-phone icon"></i>
                            <input type="number" name="phone" class="form-control form-control-lg input-field" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- submit btn --}}
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-md btn-buy-sell">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="tab-pane fade" id="pills-multi-city" role="tabpanel" aria-labelledby="pills-multi-city-tab">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-user icon"></i>
                                <input type="text" name="name" placeholder="Enter your name" class="form-control form-control-lg input-field" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-envelope icon"></i>
                                <input type="email" name="email" placeholder="Enter your email" class="form-control form-control-lg input-field" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-phone icon"></i>
                                <input type="number" name="phone" placeholder="Enter Phone Number" class="form-control form-control-lg input-field" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="select-to" class="form-label">From</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-from" class="form-control form-control-lg input-field location-from"
                                    placeholder="From">
                                <span class="form-select d-none select-from">
                                    <div class="text-center m-auto">
                                        <div class="spinner-border text-ticket" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-1" style="margin-top: 3rem!important;">
                            <div class="text-center">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="select-to" class="form-label">To</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-to" class="form-control form-control-lg input-field location-to" placeholder="To">
                                <span class="form-select d-none select-to">
                                    <option value="0">
                                        <div class="text-center m-auto">
                                            <div class="spinner-border text-ticket" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </option>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="dates" class="form-label">Departing</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-calendar-alt icon"></i>
                                <input type="text" name="departing-dates" class="form-control form-control-lg input-field" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    {{-- add anothr btn --}}
                    <div class="row">
                        <div class="col-md-12 float-end m-auto">
                            <button type="button" class="btn btn-md btn-buy-sell">Add Another</button>
                        </div>
                    </div>
                </div>
                {{-- submit btn --}}
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-md btn-buy-sell">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    var bar_loading = `
    <div class="row px-3">
        <i class="fa-solid fa-bars fs-9 loadingEffect"></i>
    </div>
    `;




    $(function() {
        $("#select-from").on("focus", function() {
            $(".popup").removeClass("d-none");
            $(".location-from-search").focus();
        });
        $(".location-from-search").on("focusout", function() {
            $(".popup").addClass("d-none");
        });

        $(".location-from-search").keyup(function() {
            var value = $(this).val().toLowerCase();
            $(".content_after_search").removeClass("text-center").addClass("text-start").removeClass("mt-5");
            $(".content_after_search").html(bar_loading);

            clearTimeout(time);
            time = setTimeout(() => {
                axios.get(`/airport/${value}/get`)
                .then(function (response) {
                    let data = response.data.data;
                    let html = "";
                    if(data.length == 0){
                        html = `
                        <li class="location-from-search-list-item">
                            <i class="fa-solid fa-plane"></i>
                            No Result Found
                        </li>
                        `;
                    }else{
                        data.forEach(element => {
                            console.log(element);
                        html += `<li class="location-from-search-list-item" id="ariport-${element.id}">
                           <i class="fa-solid fa-plane"></i>
                            <span>${element.name}</span>
                            <p>${element.countryName}</p>
                            </li>`;
                        });
                        }
                    $(".content_after_search").html(`
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="location-from-search-list">${html}
                            </ul>
                        </div>
                    </div>
                    `);
                });
            }, 2000);
            // $(".content_after_search").html(`
            //     <div class="row">
            //         <div class="col-md-12">
            //             <ul class="location-from-search-list">
            //                 <li class="location-from-search-list-item">
            //                     <i class="fa-solid fa-plane"></i>
            //                     Dhaka</li>
            //             </ul>
            //         </div>
            //     </div>
            // `);
            // $(".location-from-search-list li").filter(function() {
            //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            // });
        });

    });

        var loading = `
                <div class="text-center m-auto">
                    <div class="spinner-border text-ticket" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `;

        var time = 0;

        $(function() {


            let today = moment().format('DD-MMM');

            $('input[name="dates_departing"]').daterangepicker({
            opens: 'left',
            locale: {
                format: 'DD-MMM'
            },
            }, function(start, end, label) {
                $('input[name="dates_returning"]').val(end.format('DD-MMM'));
            });

            $('input[name="dates_returning"]').daterangepicker({
            opens: 'left',
            locale: {
                format: 'DD-MMM'
            },
            }, function(start, end, label) {
                $('input[name="dates_departing"]').val(start.format('DD-MMM'));
            });

            $('input[name="dates_departing"]').change(function() {
                let date = $(this).val().split(" - ")[0];
                $('input[name="dates_departing"]').val(date);
            });
            $('input[name="dates_returning"]').change(function() {
                let date = $(this).val().split(" - ")[1];
                $('input[name="dates_returning"]').val(date);
            });

            $('input[name="dates_departing"]').val(today);
            $('input[name="dates_returning"]').val(today);


            $('input[name="departing-dates"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                }, function(start, end, label) {
                $('input[name="departing-dates"]').val(start.format('YYYY-MM-DD'));
            });
        });

        // $('input[name="dates"]').daterangepicker();


        $(document).on("click",".select-from option", function(event) {
            let value = $(this).text();
            $(".location-from").val(value);
            $(".select-from").addClass("d-none");
        });

        $(document).on("click",".select-to option", function(event) {
            let value = $(this).text();
            $(".location-to").val(value);
            $(".select-to").addClass("d-none");
        });

    $(document).ready(function() {
        $(".location-from").on("focus", function() {
            $(".select-from").removeClass("d-none");
            $(".location-from").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                handleAirportSearch(value, ".select-from");
                $(".select-from option").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        // location to
        $(".location-to").on("focus", function() {
            $(".select-to").removeClass("d-none");
            $(".location-to").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                handleAirportSearch(value, ".select-to");
                $(".select-to option").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });


        setInterval(() => {
            $(".location-from").val() == "" ? $(".select-from").html("") : "";
            $(".location-to").val() == "" ? $(".select-to").html("") : "";
        }, 3000);

        handleReset();
    });




    function handleReset(){

        $("#pills-roundtrip-tab").on("click", function() {
            handleReset();
        });
        $("#pills-one-way-tab").on("click", function() {
            handleReset();
        });

        $("#pills-multi-city-tab").on("click", function() {
            handleReset();
        });



        $(".location-from").val("");
        $(".location-to").val("");
        $(".select-from").html("");
        $(".select-to").html("");
    }



    function handleAirportSearch(value, id){
        if(value == ""){
            return false;
        }
        $(id).html(loading);
        clearTimeout(time);
        time = setTimeout(() => {
            axios.get(`/airport/${value}/get`)
            .then(function (response) {
                let data = response.data.data;
                let html = "";
                if(data.length == 0){
                    html = `<option value="0" disabled>No data</option>`;
                }else{
                    data.forEach(element => {
                        html += `<option value="${element.id}">${element.name}</option>`;
                    });
                }
                $(id).html(html);
            });
        }, 2000);
    }



</script>
