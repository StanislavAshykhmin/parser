<div class="modal fade" id="create-message" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('message_create')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body m-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Topic</label>
                            <input name="label" id="label_message" type="text" class="form-control" autofocus placeholder="Topic" value="{{old('label')}}">
                            @if ($errors->create->has('label'))
                                <span class="help-block">
                         <strong>{{ $errors->create->first('label') }}</strong>
                     </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" id="title_message" class="form-control" placeholder="Title" value="{{old('title')}}">
                            @if ($errors->create->has('title'))
                                <span class="help-block">
                         <strong>{{ $errors->create->first('title') }}</strong>
                     </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Text</label>
                            <textarea name="text" class="form-control" placeholder="Text">{{old('text')}}</textarea>
                            @if ($errors->create->has('text'))
                                <span class="help-block">
                         <strong>{{ $errors->create->first('text') }}</strong>
                     </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <select multiple data-live-search="true" class="form-control selectpicker" style="width: 100%; display: inline;" name="system_id[]" id="">
                                @foreach($systems as $system)
                                <option value="{{$system->id}}">{{$system->name}}</option>
                                    @endforeach
                            </select>
                            @if ($errors->create->has('system_id'))
                                <span class="help-block">
                         <strong>{{ $errors->create->first('system_id') }}</strong>
                     </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-message-popup" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save message</button>
                </div>
            </form>
        </div>
    </div>
</div>

