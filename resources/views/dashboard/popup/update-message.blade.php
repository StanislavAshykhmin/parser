<div class="modal fade" id="update-message" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" name="update" method="post" action="{{route('update')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="id" type="hidden" name="id" value="{{old('id')}}">
                <div class="modal-body m-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Label</label>
                            <input name="label" type="text" id="label_message" class="form-control" autofocus placeholder="Label" value="{{old('label')}}">
                            @if ($errors->update->has('label'))
                                <span class="help-block">
                         <strong>{{ $errors->update->first('label') }}</strong>
                     </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" id="title_message" placeholder="Title" value="{{old('title')}}">
                            @if ($errors->update->has('title'))
                                <span class="help-block">
                         <strong>{{ $errors->update->first('title') }}</strong>
                     </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Text</label>
                            <textarea name="text" class="form-control" placeholder="Text">{{old('text')}}</textarea>
                            @if ($errors->update->has('text'))
                                <span class="help-block">
                         <strong>{{ $errors->update->first('text') }}</strong>
                     </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label systems"></label>
                            <select multiple data-live-search="true" class="form-control selectpicker" style="width: 100%; display: inline;" name="system_id[]" id="system_id">
                                @foreach($systems as $system)
                                    <option value="{{$system->id}}">{{$system->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('system_id'))
                                <span class="help-block">
                         <strong>{{ $errors->first('system_id') }}</strong>
                     </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

