
$(function e() {
    $('.class-update').on('click', function (e) {
        e.preventDefault()
        var options = $('#system_id option');
        var value = $.map(options, function (option) {
            $(option).removeAttr("selected");
        });
        var url = $(this).attr("data-url")
        $.ajax({
            url: url,
            success: function (result) {
                let popup = $('#update-message');
                console.log(result.message.id)
                popup.find('input[name="id"]').val(result.message.id);
                popup.find('input[name="label"]').val(result.message.label);
                popup.find('input[name="title"]').val(result.message.title);
                popup.find('textarea[name="text"]').val(result.message.text);
                var value = $.map(options, function (option) {
                    var res = $.map(result.message.systems, function (system) {
                        if (option.value == system.id) {
                            $(option).attr("selected", "selected");
                            $('#system_id').select2(system.label, {id: system.id, a_key: system.label});
                        }
                    })
                });

            }, err: function (err) {
                console.log(err)
            }

        });


    })
});
