$(document).ready(function () {
    handleAddBtn();
    handleEditBtn();
    handleDeleteBtn();
    handleCheckBtn();
    handleMultiActionsBtn();
});
function handleAddBtn(){
    $('.addBtn').on('click', function () {
        $('#for_update').html('');
        $('.slider-title').text('Add New Slider');
        $('#title').val('');
        $('#description').val('');
    });
}
function handleEditBtn(){
    $('.editBtn').on('click', function () {
        tr = $(this).closest('tr');
        var id = tr.attr('id');
        $('#for_update').html(`<input type="hidden" name="slider_id" value="${id}">`);
        $('.slider-title').text('Update Slider');
        $('#title').val(tr.find('td:eq(2)').text().trim());
        $('#description').val(tr.find('td:eq(3)').text().trim());
    });
}

function handleDeleteBtn(){
     $('.deleteBtn').on('click',function(){
        tr = $(this).closest('tr');
        var id = tr.attr('id');
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            axios.delete(`/user/slider/${id}/delete/`)
            .then(function (response) {
                tr.remove();
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            })
        }else{
        Swal.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
        )
        }
        })
    })
}

function handleCheckBtn(){

    $("#checkbox-all").on("change", function(){
        $(this).toggleClass("checked");
        if ($(this).hasClass("checked")) {
            $(".sliderTableBody tr td .check").each(function(){
                $(this).find("input").addClass('checked');
            });
        }else{
            $(".sliderTableBody tr td").find(".check").each(function () {
                $(this).find("input").removeClass('checked');
            });
        }
        isCheckedActionBtn();
    });

    $(".checkbox").on('change', function(){
        $(this).toggleClass("checked");
        $(".sliderTableBody tr td .check").each(function () {
            let isChecked = $(this).find("input").hasClass('checked');
            if (!isChecked){
                $("#checkbox-all").removeClass("checked");
                return false;
            }else{
                $("#checkbox-all").addClass("checked");
            }
        });
        isCheckedActionBtn();
    });
}

function isCheckedActionBtn(){
    let isChecked = $(".checkbox").hasClass("checked");
    if(!isChecked){
        $(".actionBtn").addClass("d-none");
    }else{
        $(".actionBtn").removeClass("d-none");
    }
}

function handleMultiActionsBtn(){
    $(".activeBtn").on("click", function(){
        var sliderIds = [];
        $(".sliderTableBody tr td .check").each(function () {
            let isChecked = $(this).find("input").hasClass('checked');
            if (isChecked){
                let trId = $(this).closest('tr').attr('id');
                sliderIds.push(trId);
            }
        });
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to active those slides!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1aa111',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, active it!'
        }).then((result) => {
            if (result.isConfirmed) {
                sendActions(sliderIds,'active');
            } else {
                Swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    });
    $(".inActiveBtn").on("click", function(){
        var sliderIds = [];
        $(".sliderTableBody tr td .check").each(function () {
            let isChecked = $(this).find("input").hasClass('checked');
            if (isChecked){
                let trId = $(this).closest('tr').attr('id');
                sliderIds.push(trId);
            }
        });

        Swal.fire({
            title: 'Are you sure?',
            text: "You want to inactive those slides!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#0938e0',
            cancelButtonColor: '#c90835',
            confirmButtonText: 'Yes, active it!'
        }).then((result) => {
            if (result.isConfirmed) {
                sendActions(sliderIds,'inactive');
            } else {
                Swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    });
    $(".multiDeleteBtn").on("click", function(){
        var sliderIds = [];
        $(".sliderTableBody tr td .check").each(function () {
            let isChecked = $(this).find("input").hasClass('checked');
            if (isChecked){
                let trId = $(this).closest('tr').attr('id');
                sliderIds.push(trId);
            }
        });
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                sendActions(sliderIds,'delete');
            } else {
                Swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    });
}



function sendActions(ids,actionName){
    axios.post('/user/slider/multiple-actions',{
        ids: ids,
        action: actionName
    }).then(function(response){
        console.log(response.data.data);
    });
}

