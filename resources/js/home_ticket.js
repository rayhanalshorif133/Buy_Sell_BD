
var bar_loading = `
<div class="row px-3">
    <i class="fa-solid fa-bars fs-9 loadingEffect"></i>
</div>
`;

$(function() {
    $("#select-from").on("focus", function () {
        $(".popup-from").removeClass("d-none");
        $(".location-from-search").focus();
    });



    $(document).on("click", ".location-from-search-list-item", function () {
        let value = $(this).text();
        value = value.trim();
        if (value.length > 20) {
            value = value.substring(0, 20) + "...";
        }
        $("#select-from").val(value);
        $("#select-from").css("font-size", "14px");
        $(".popup-from").addClass("d-none");
    });


    $(".location-from-search").on("focusout", function() {
        // $(".popup-from").addClass("d-none");
    });
    $(".location-from-search").keyup(function(event) {
        var value = $(this).val().toLowerCase();
// arrow key
        $(".content_after_search").removeClass("text-center").addClass("text-start").removeClass("mt-5");
        if (event.keyCode == 40) {
            $(".location-from-search-list-item.active").removeClass("active").next().addClass("active");
            $(".popup-from").scrollTop($(".location-from-search-list-item.active").offset().top - $(".popup-from").offset().top + $(".popup-from").scrollTop() - $(".location-from-search-list-item.active").height() * 4);
            return false;
        }
        else if (event.keyCode == 38){
            $(".location-from-search-list-item.active").removeClass("active").prev().addClass("active");
            return false;
        }
        else if (event.keyCode == 13) {
            $(".location-from-search-list-item.active").click();
            let value = $(".location-from-search-list-item.active").text();
            value = value.trim();
            // 10 characters
            if(value.length > 20){
                value = value.substring(0, 20) + "...";
            }
            $("#select-from").val(value);
            $("#select-from").css("font-size", "14px");
            $(".popup-from").addClass("d-none");
            return false;
        }
        else{
            $(".content_after_search").html(bar_loading);
        }
        clearTimeout(time);
        time = setTimeout(() => {
        axios.get(`/airport/${value}/get`)
        .then(function (response) {
            let data = response.data.data;
            let html = "";
            if (data.length == 0) {
                html = `
                    <li class="location-from-search-list-item">
                        <i class="fa-solid fa-plane"></i>
                        No Result Found
                    </li>
                    `;
            } else {
                data.forEach((element, index) => {
                    let classActive = index == 0 ? "active" : "";
                    html += `<li class="location-from-search-list-item ${classActive}" id="ariport-${element.id}">
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
        $(".location-from-search-list-item").click(function() {
            console.log("clicked");
        });
        }, 2000);
    });
});
// Select To

$(function() {




    $("#select-to").on("focus", function () {
        $(".popup-to").removeClass("d-none");
        $(".location-to-search").focus();
    });
    $(".location-to-search").on("focusout", function() {
        // $(".popup-to").addClass("d-none");
    });

    $(document).on("click", ".location-to-search-list-item", function(){
        let value = $(this).text();
        value = value.trim();
        if(value.length > 20){
            value = value.substring(0, 20) + "...";
        }
        $("#select-to").val(value);
        $("#select-to").css("font-size", "14px");
        $(".popup-to").addClass("d-none");
    });

    $(".location-to-search").keyup(function(event) {





        var value = $(this).val().toLowerCase();
        $(".content_after_search_to").removeClass("text-center").addClass("text-start").removeClass("mt-5");
        console.log(event.keyCode);
        if (event.keyCode == 40) {
            $(".location-to-search-list-item.active").removeClass("active").next().addClass("active");
            $(".popup-to").scrollTop($(".location-to-search-list-item.active").offset().top - $(".popup-to").offset().top +
            $(".popup-to").scrollTop() - $(".location-to-search-list-item.active").height() * 4);
            return false;
        }
        else if (event.keyCode == 38){
            $(".location-to-search-list-item.active").removeClass("active").prev().addClass("active");
            return false;
        }
        else if (event.keyCode == 13) {
            let value = $(".location-to-search-list-item.active").text();
            value = value.trim();
            if(value.length > 20){
                value = value.substring(0, 20) + "...";
            }
            $("#select-to").val(value);
            $("#select-to").css("font-size", "14px");
            $(".popup-to").addClass("d-none");
            return false;
        }
        else{
            $(".content_after_search_to").html(bar_loading);
        }
        clearTimeout(time);
                time = setTimeout(() => {
            axios.get(`/airport/${value}/get`)
                .then(function (response) {
                    let data = response.data.data;
                    let html = "";
                    if (data.length == 0) {
                    html = `
                        <li class="location-to-search-list-item">
                            <i class="fa-solid fa-plane"></i>
                            No Result Found
                        </li>
                    `;
            } else {
                data.forEach((element, index) => {
                    let classActive = index == 0 ? "active" : "";
                    html += `<li class="location-to-search-list-item ${classActive}" id="ariport-${element.id}">
                        <i class="fa-solid fa-plane"></i>
                        <span>${element.name}</span>
                        <p>${element.countryName}</p>
                    </li>`;
                });
            }
            $(".content_after_search_to").html(`
                <div class="row">
                    <div class="col-md-12">
                        <ul class="location-to-search-list">${html}
                        </ul>
                    </div>
                </div>
        `);
        });
        }, 2000);
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
    var dates_returning = "";
    var dates_departing = "";
        //must have

        var toastMsg = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            showCloseButton: true,
        });


        $(function() {
        let today = moment().format('DD-MMM');
            dates_returning =  $('input[name="dates_returning"]').daterangepicker({
                opens: 'left',
                singleDatePicker: true,
                locale: {
                    format: 'DD-MMM'
                }
                }, function (start, end, label) {
                dates_departing = $('input[name="dates_departing"]').val();
                if (dates_departing > start.format('DD-MMM')) {
                    toastMsg.fire({
                        icon: 'error', // error, info, warning
                        title: 'Departing date must be less than returning date'
                    });
                }
            });
        $('input[name="dates_departing"]').daterangepicker({
        opens: 'left',
        singleDatePicker: true,
        locale: {
            format: 'DD-MMM'
        },
        },
        function(start, end, label) {
            let selectDate = start.format('DD-MMM');
            $('input[name="dates_returning"]').val(selectDate);
            dates_returning.data('daterangepicker').setStartDate(selectDate);
        });
});
function handleReset(){
    $("#pills-roundtrip-tab").on("click", function () {
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





