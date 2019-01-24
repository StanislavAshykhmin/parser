<!--Modal-Window-->
<div class="overlay js-overlay">
    <div class="container modal-window">
        <div class="row">
            <div class="section-title col s12">
                <h3>Ask your question !</h3>
                <div class="success-popup" style="display:none"></div>
            </div>
            <div class="close-popup js-close-campaign"></div>
        </div>
        <div class="row">
            <form class="col s12 popup-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-field col s6">
                    <input name="name" id="name-popup" type="text" class="validate" value="{{old('name')}}">
                    <label for="name">First Name</label>
                    <div class="danger-popup danger-popup-name" style="display:none"></div>
                </div>
                <div class="input-field col s6">
                    <input id="last_name-popup" name="last_name" type="text" class="validate" value="{{old('last_name')}}">
                    <label for="last_name">Last Name</label>
                    <div class="danger-popup danger-popup-last" style="display:none"></div>
                </div>
                <div class="input-field col s12">
                    <input id="email-popup" type="email" name="email" class="validate" value="{{old('email')}}">
                    <label for="email">Email</label>
                    <div class="danger-popup danger-popup-email" style="display:none"></div>
                </div>
                <div class="input-field col s12">
                    <input id="url-popup" type="url" name="url"  class="validate" value="{{old('url')}}">
                    <label for="url">Link</label>
                    <div class="danger-popup danger-popup-url" style="display:none"></div>
                </div>
                <div class="input-field col s12">
                    <textarea id="text-popup" size="3" value="100" name="text" id="icon_prefix2" class="materialize-textarea">{{old('text')}}</textarea>
                    <label for="icon_prefix2">Enter Your Message</label>
                    <div class="danger-popup danger-popup-text" style="display:none"></div>
                </div>
                </div>
            <div class="row">
                <div class="input-send col-lg-12">
                    <button id="submit-popup" type="submit" class="button-send">SEND</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>


