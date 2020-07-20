jQuery(document).ready(function () {
    jQuery('#addNumber').on('click', function () {
        var tmpNumber = jQuery('#contacts-number');
        var  newNumber = tmpNumber.clone();
        var rndID = Math.random((Math.random() * 1000) + 1);
        jQuery(newNumber).removeClass('hidden').attr('id');
        var inpNumber = newNumber.find('input');
        inpNumber.attr('name', 'Contacts[numbers][]').mask("+38(999) 999-9999");
        jQuery('#newnumbers').append(newNumber);

    });

    jQuery('[name="Contacts[numbers][]"]').each(function (i,item) {
        jQuery(item).mask("+38(999) 999-9999");
    })
})