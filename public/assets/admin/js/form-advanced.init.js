jQuery(document).ready(function () {
    // Select2
    $(".select2").select2();
    $(".select2").on('change', function() {
        console.log($(this).val());
    });
});