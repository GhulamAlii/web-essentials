$('.popupBox').click(function () {
    var priceText = $(this).parents('.pck-box').find('.price').text();
    var titleText = $(this).parents('.pck-box').find('.title').text();

    $('#popupform input[name="price"]').val(priceText);
    $('#popupform input[name="title"]').val(titleText);

    $('#popupform').modal('show');
});

$('#popupform').on('hidden.bs.modal', function () {
    $(this).find('input[name="price"], input[name="title"]').val('');
});