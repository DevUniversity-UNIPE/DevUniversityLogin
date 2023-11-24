$('.formInput').on('change', ()=>{
    if ($('#nome').val() != "" && $('#Password').val() != "") {
        $(".warning").prop('hidden', true)
        $('.SubmitButton').prop('disabled', false)
    } else {
        $(".warning").prop('hidden', false)
        $('.SubmitButton').prop('disabled', true)
    }
})

