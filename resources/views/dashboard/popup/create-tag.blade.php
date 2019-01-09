<div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('create')}}">
                <div class="modal-body m-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Please enter the full name of the tag for the correct work of the
                                parser. Example: javascript, not js.</label>
                            <input name="name" type="text" class="form-control" autofocus placeholder="Tag name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save tag</button>
                </div>
            </form>
        </div>
    </div>
</div>

