<style>
    /* small popup */

    .popup {
        position: absolute;
        margin-top: -60px;
        height: 80%;
        background-color: #fff;
        z-index: 999;
        width: 22%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        /* scroll */
        overflow-y: scroll;
        overflow-x: hidden;
        /* scroll */

    }

    .location-from-search,
    .location-to-search {
        border-radius: 0;
        border: 0;
        border-bottom: 1px solid #e0e0e0;
        border-top: 1px solid #e0e0e0;
    }

    /* focus */

    .location-from-search:focus,
    .location-to-search:focus{
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
                            <label for="select-from" class="form-label">From</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-from" name="select-from"  class="form-control form-control-lg input-field location-from select-from"
                                    placeholder="From">
                            </div>
                            {{-- a small popup --}}
                            <div class="popup d-none popup-from">
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-1 exchangeIcon" style="">
                            <div class="text-center">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-5 select_to_div">
                            <label for="select-to" class="form-label">To</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-to" name="select-to"
                                    class="form-control form-control-lg input-field location-to select-to" placeholder="To">
                            </div>
                            {{-- a small popup --}}
                            <div class="popup d-none popup-to">
                                <div class="popup-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-icons">
                                                        <i class="fa-solid fa-search icon"></i>
                                                        <input type="text" for="select-to"
                                                            class="form-control form-control-lg input-field location-to-search"
                                                            placeholder="Where are you going to?">
                                                    </div>
                                                    <div class="text-center mt-5 content_after_search_to">
                                                        <div class="my-5">
                                                            <div>
                                                                <i class="fa-solid fa-search icon fs-3"></i>
                                                            </div>
                                                            <h5>
                                                                Search by city or airport
                                                            </h5>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                <div class="col-md-7 mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="select-from" class="form-label">From</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-from" name="select-from"
                                    class="form-control form-control-lg input-field location-from select-from" placeholder="From">
                            </div>
                            {{-- a small popup --}}
                            <div class="popup d-none popup-from">
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-1 exchangeIcon" style="">
                            <div class="text-center">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-5 select_to_div">
                            <label for="select-to" class="form-label">To</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-to" name="select-to"
                                    class="form-control form-control-lg input-field location-to select-to" placeholder="To">
                            </div>
                            {{-- a small popup --}}
                            <div class="popup d-none popup-to">
                                <div class="popup-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-icons">
                                                        <i class="fa-solid fa-search icon"></i>
                                                        <input type="text" for="select-to"
                                                            class="form-control form-control-lg input-field location-to-search"
                                                            placeholder="Where are you going to?">
                                                    </div>
                                                    <div class="text-center mt-5 content_after_search_to">
                                                        <div class="my-5">
                                                            <div>
                                                                <i class="fa-solid fa-search icon fs-3"></i>
                                                            </div>
                                                            <h5>
                                                                Search by city or airport
                                                            </h5>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <div class="row">
                        <div class="col-md-6 m-auto text-left">
                            <label for="dates" class="form-label">Departing</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-calendar-alt icon"></i>
                                <input type="text" name="dates_departing" class="form-control form-control-lg input-field" />
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
                                <input type="text" name="name" class="form-control form-control-lg input-field"
                                    placeholder="Enter your name" />
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
                                <input type="email" name="email" class="form-control form-control-lg input-field"
                                    placeholder="Enter your email" />
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
                                <input type="number" name="phone" class="form-control form-control-lg input-field"
                                    placeholder="Enter your phone" />
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
        <div class="tab-pane fade" id="pills-multi-city" role="tabpanel" aria-labelledby="pills-multi-city-tab">
            <div class="row">
                <div class="col-md-7 mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="select-from" class="form-label">From</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-from" name="select-from"
                                    class="form-control form-control-lg input-field location-from select-from" placeholder="From">
                            </div>
                            {{-- a small popup --}}
                            <div class="popup d-none popup-from">
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-1 exchangeIcon" style="">
                            <div class="text-center">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-5 select_to_div">
                            <label for="select-to" class="form-label">To</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <input type="text" for="select-to" name="select-to"
                                    class="form-control form-control-lg input-field location-to select-to" placeholder="To">
                            </div>
                            {{-- a small popup --}}
                            <div class="popup d-none popup-to">
                                <div class="popup-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-icons">
                                                        <i class="fa-solid fa-search icon"></i>
                                                        <input type="text" for="select-to"
                                                            class="form-control form-control-lg input-field location-to-search"
                                                            placeholder="Where are you going to?">
                                                    </div>
                                                    <div class="text-center mt-5 content_after_search_to">
                                                        <div class="my-5">
                                                            <div>
                                                                <i class="fa-solid fa-search icon fs-3"></i>
                                                            </div>
                                                            <h5>
                                                                Search by city or airport
                                                            </h5>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <input type="text" name="name" class="form-control form-control-lg input-field"
                                    placeholder="Enter your name" />
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
                                <input type="email" name="email" class="form-control form-control-lg input-field"
                                    placeholder="Enter your email" />
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
                                <input type="number" name="phone" class="form-control form-control-lg input-field"
                                    placeholder="Enter your phone" />
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
    </div>
</div>



