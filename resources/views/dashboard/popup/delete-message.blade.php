<div class="modal fade" id="delete-message-{{$message->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-sm">
            <div class="modal-header">
                <h5 class="modal-title">Delete message {{$message->label}}?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if(isset($message->id))
                <form action="{{ route('message_delete', ['id' => $message->id]) }}" method="POST">
                    @endif
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="modal-body m-1">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger float-right">Delete message</button>
                    </div>
                </form>
        </div>
    </div>
</div>
