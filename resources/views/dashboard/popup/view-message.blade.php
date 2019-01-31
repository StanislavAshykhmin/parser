<div class="modal fade" id="view-message-{{$message->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body m-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Topic: {{$message->label}}</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Title: {{$message->title}}</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Text: {{$message->text}}</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label">System: @foreach($message->systems as $system)
                                    {{$system->name}}
                                @endforeach
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>

