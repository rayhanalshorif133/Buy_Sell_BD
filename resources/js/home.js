$(function(){

    axios.post("/get-cookie", {
        name: "dark"
    }).then((response) => {
        let mode = response.data;
        if (mode == "dark-mode") {
            $(this).find('.fa-moon').removeClass('d-none');
            $(this).find('.fa-sun').addClass('d-none');
            $("body").addClass('dark-mode');
            // logo
            $(".light-mode-logo").addClass("d-none");
            $(".dark-mode-logo").removeClass("d-none");
        } else {
            $(this).find('.fa-moon').addClass('d-none');
            $(this).find('.fa-sun').removeClass('d-none');
            $("body").removeClass('dark-mode');
            $(".light-mode-logo").removeClass("d-none");
            $(".dark-mode-logo").addClass("d-none");
        }
    });

    $(".dark-mode").click(function(){
        $(this).find('.fa-moon').toggleClass('d-none');
        $(this).find('.fa-sun').toggleClass('d-none');
        $("body").toggleClass('dark-mode');
        handleScroll();
        let data = "";
        if($("body").hasClass('dark-mode')){
            data = {
                name: "dark",
                color: "dark-mode"
                };
            }else{
            data = {
                name: "dark",
                color: "light-mode"
                };
            }
            axios.post("/set-cookie", data);
        });
    $(window).scroll(function () {
        handleScroll();
    });

    managementHandler();
    $(window).resize(function () {
        managementHandler();
    });

});
function handleScroll(){
    if($(".navbar-light").hasClass("nav_sticky")){
        $(".light-mode-logo").removeClass("d-none");
        $(".dark-mode-logo").addClass("d-none");
    }else{
        if($("body").hasClass('dark-mode')){
            $(".light-mode-logo").addClass("d-none");
            $(".dark-mode-logo").removeClass("d-none");
        }else{
            $(".light-mode-logo").removeClass("d-none");
            $(".dark-mode-logo").addClass("d-none");
        }
    }
}

function managementHandler() {
    // width of the window
    let width = $(window).width();
    if (width < 767) {
        $(".management_pc").addClass("d-none");
        $(".management_phone").removeClass("d-none");
    } else {
        $(".management_pc").removeClass("d-none");
        $(".management_phone").addClass("d-none");
    }

}
