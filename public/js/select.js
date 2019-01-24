document.addEventListener("DOMContentLoaded", function(event) {
    $('select[name="system_id[]"]').select2({
        placeholder: 'Systems',
    }).change(function () {
        $(this).valid();
    });
});
