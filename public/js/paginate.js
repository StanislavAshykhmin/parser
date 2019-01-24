document.addEventListener("DOMContentLoaded", function(event) {
    $('#datatables-dashboard').DataTable({
        pageLength: 10,
        lengthChange: false,
        bFilter: false,
        autoWidth: false
    });
});
