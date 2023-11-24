$('.formInput').on('change', ()=>{
    if ($('#nome').val() != "" && $('#Password').val() != "") {
        console.log("nome ou senha != vazio")
        $(".warning").prop('hidden', true)
        $('.SubmitButton').prop('disabled', false)
    } else {
        console.log("nome ou senha == vazio");
        $(".warning").prop('hidden', false)
        $('.SubmitButton').prop('disabled', true)
    }
})

