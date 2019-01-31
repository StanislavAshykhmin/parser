document.addEventListener("DOMContentLoaded", function(event) {
    $('#datatables-dashboard').DataTable({
        pageLength: 6,
        lengthChange: false,
        bFilter: false,
        autoWidth: false,
        order: [[2, 'desc'], [1, 'desc']],
    });
});
