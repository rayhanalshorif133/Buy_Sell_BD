<section id="contact_us" class="pb-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="title">
                    <h3>Contact Us</h3>
                </div>
                <form action="#" method="POST" style="padding: 16px;">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-icons">
                                <i class="fa-solid fa-user icon"></i>
                                <input type="text" name="name" class="form-control form-control-lg input-field" placeholder="Your Name"/>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="name" class="form-label">Email</label>
                                <div class="input-icons">
                                    <i class="fa-solid fa-envelope icon"></i>
                                    <input type="email" name="email" class="form-control form-control-lg input-field" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="col">
                               <label for="name" class="form-label">Phone Number</label>
                               <div class="input-icons">
                                   <i class="fa-solid fa-phone icon"></i>
                                   <input type="email" name="email" class="form-control form-control-lg input-field" placeholder="Your Phone" />
                               </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Select a Service</label>
                                <select class="form-select form-select-lg py-2" name="service">
                                    <option value="1" disabled selected>Choice a Service</option>
                                    <option value="1">Membarship</option>
                                    <option value="2">Licence</option>
                                    <option value="2">Property</option>
                                    <option value="2">Ticket</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Select a Service</label>
                            <textarea name="text_area" placeholder="Enter the details" style="height:100px" class="form-control form-control-lg"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-md btn-buy-sell">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>
