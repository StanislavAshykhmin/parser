<div class="modal fade" id="update-message" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" name="update">
                <div class="success-popup-update" style="display:none; color: green; font-size: 20px; text-align: center; height: 0px;"></div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="id" type="hidden" id="id" name="id" value="{{old('id')}}">
                <div class="modal-body m-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Topic</label>
                            <input name="label" type="text" id="label_message123" class="form-control" autofocus placeholder="Topic" value="">
                            <div class="danger-popup danger-popup-label" style="display:none; color: red;"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" id="title_message123" placeholder="Title" value="">
                            <div class="danger-popup danger-popup-title" style="display:none; color: red;"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Text</label>
                            <textarea id="text_message" name="text" class="form-control" placeholder="Text"></textarea>
                            <div class="danger-popup danger-popup-text" style="display:none; color: red;"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label systems"></label>
                            <select multiple data-live-search="true" class="form-control selectpicker" style="width: 100%; display: inline;" name="system_id[]" id="system_id">
                                @foreach($systems as $system)
                                    <option value="{{$system->id}}">{{$system->name}}</option>
                                @endforeach
                            </select>
                            <div class="danger-popup danger-popup-system" style="display:none; color: red;"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
                    <button type="submit" id="update-submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<script type="text/javascript">

    $(document).ready(function(){
        $('#update-submit').on('click', function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                }
            });
            $.ajax({
                url: "{{route('update')}}",
                method: 'post',
                data: {
                    id: $('#id').val(),
                    label: $('#label_message123').val(),
                    title: $('#title_message123').val(),
                    text: $('#text_message').val(),
                    system_id: $('#system_id').val(),
                },
                beforeSend: function() {
                    $('.splash').addClass('active');
                    $('#update-message').hide();
                },
                complete: function() {
                    // $('.splash').removeClass('active');
                    $('#update-message').show();
                },
                success: function(data){
                    $(data.success, function () {
                        $('.danger-popup').html('');
                        $('.danger-popup').hide();
                        $('.success-popup-update').show();
                        $('.success-popup-update').append('<p>'+data.success+'</p>');
                        setTimeout(function(){
                            $('#close').click();
                            $('.success-popup-update').html('');
                            $('.success-popup-update').hide();
                            {{--$(".table-content").load("{{route('message')}} .table");--}}
                            location.reload();
                        }, 3000);

                    })
                    $('.danger-popup').hide();
                    $('.danger-popup').html('');
                    $.each(data.errors, function(key, value){
                        if ( value.includes('label')) {
                            $('.danger-popup-label').show();
                            $('.danger-popup-label').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('title')) {
                            $('.danger-popup-title').show();
                            $('.danger-popup-title').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('text')) {
                            $('.danger-popup-text').show();
                            $('.danger-popup-text').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('system_id')) {
                            $('.danger-popup-system').show();
                            $('.danger-popup-system').append('<p>' + value + '</p>');
                        }
                    });
                }

            });
        });
    });
</script>
