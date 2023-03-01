<span class="setting-button open"><i class="fa-solid fa-gear"></i></span>

<div class="card-popup" id="popupCard">
    <div class="card-container">
        <h3>Customize</h3>
        <hr />
        <h6>Header Text Color</h6>
        <div class="mb-2" id="adjustRow">
            <div class="header-text-color d-flex-color">
                <span data-color="#000000" style="background-color: #000000">&nbsp;</span>
                <span data-color="#ffffff" style="background-color: #ffffff">&nbsp;</span>
            </div>
        </div>
        <h6>Theme Color</h6>
        <div class="mb-2" id="adjustRow">
            <div class="header-color d-flex-color">
                @forelse ($colors as $key => $color)
                @if($key % 4 == 0)
                <br>
                @endif
                <span data-color="{{ $color->code }}">&nbsp; <br></span>
                @empty
                <span data-color="#007BFF">&nbsp;</span>
                @endforelse
            </div>
        </div>
        <h6>Theme Font</h6>
        <div class="mb-2">
            <div class="header-font">
                <div class="d-flex">
                    <input type="radio" name="font" id="open-sans" value="openSans">
                    <label for="open-sans">Open Sans</label>
                </div>
                <div class="d-flex">
                    <input type="radio" name="font" value="poppins" id="poppins">
                    <label for="poppins">Poppins</label>
                </div>
                <div class="d-flex">
                    <input type="radio" name="font" value="roboto" id="roboto">
                    <label for="roboto">Roboto</label>
                </div>
                <div class="d-flex">
                    <input type="radio" name="font" value="montserrat" id="montserrat">
                    <label for="montserrat">Montserrat</label>
                </div>
                <div class="d-flex">
                    <input type="radio" name="font" value="oswald" id="oswald">
                    <label for="oswald">Oswald</label>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("click",'.open', function () {
        $("#popupCard").show();
        $(this).addClass('close').removeClass('open');
    });
    $(document).on("click",'.close', function () {
        $("#popupCard").hide();
        $(this).addClass('open').removeClass('close');
    });
    $(document).on('click','.site-section',function(){
    let isClose = $(".setting-button").hasClass('close');
        if(isClose){
            $("#popupCard").hide();
            $(".setting-button").addClass('open').removeClass('close');
        }
    });
</script>