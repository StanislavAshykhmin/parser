@extends('layouts.landing')
@section('title', 'Landing')
@push('styles')
    @include('landing.styles.styles')
@endpush
</head>
@section('content')
    <div class="section light-bg" >

        <div class="container">

            <div class="section-title" id="features">
                <small>HIGHLIGHTS</small>
                <h3>Features you love</h3>
            </div>

            <div class="row indent">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simple</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Customize</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Secure</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="section light-background">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Create an Account</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Share with friends</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem eveniet</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Enjoy your life</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 background-block">
                    <img src="images/drupal_export.png" alt="iphone" class="img-fluid">
                    <p class="text-foto">Go To Up</p>
                </div>

            </div>

        </div>

    </div>
    <!-- // end .section -->

    <div class="section light-bg" id="aboutus">

        <div class="container">
            <div class="section-title">
                <small>WHO ARE WE</small>
                <h3>About US</h3>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <p class="command">МЫ КОМАНДА ПРОФЕССИОНАЛОВ В РАЗЛИЧНЫХ СФЕРАХ: МЕНЕДЖМЕНТЕ, МАРКЕТИНГЕ, РАЗРАБОТКЕ ПРОГРАММНОГО ОБЕСПЕЧЕНИЯ, ДИЗАЙНЕ, БЕЗОПАСНОСТИ И РАБОТЕ С СИСТЕМАМИ ВЫСОКОЙ НАГРУЗКИ.</p>
                    <p class="text-center-lg"></p>
                    <p class="our_work">МЫ РАБОТАЕМ ВМЕСТЕ, ВДОХНОВЛЯЯСЬ ОДНОЙ ИДЕЕЙ, — ИЗМЕНИТЬ МИР И СДЕЛАТЬ ЕГО ЛУЧШЕ!</p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="images/agileteam.jpg" alt="our team">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="images/ssss.png.jpeg" alt="our team">
                </div>
                <div class="col-12 col-lg-6 text-about-us">
                    <p>Наша главная ценность — свобода! Свобода личного развития, свобода выбора, право на приватность в переписке и личной жизни. Мы решили основать компанию DEFCOM для того, чтобы обеспечить право каждого человека на свободу. Мы создаем нашу продукцию, чтобы люди со всего мира могли свободно общаться друг с другом, где бы они ни находились!</p>
                    <p class="text-center-lg"></p>
                    <p class="mission">НАША МИССИЯ — ПРЕДОСТАВИТЬ ЛЮДЯМ СВОБОДУ! ИЗМЕНЕНИЕ МИРА К ЛУЧШЕМУ — ЭТО НАШ ПУТЬ!</p>
                    <p class="text-center-lg"></p>
                    <p>Наша команда включает в себя более 100 членов и управляется признанными авторитетами в соответствующих областях. В активе каждого из них есть множество успешных проектов.</p>
                </div>

            </div>
        </div>

    </div>
    <div class="section" id="pricing">
        <div class="container">
            <div class="section-title">
                <small>PRICING</small>
                <h3>Upgrade to Pro</h3>
            </div>

            <div class="card-deck">
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">PERSONAL</small>
                        <span class="price">$14<sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">10 Projects</div>
                        <div class="list-group-item">5 GB Storage</div>
                        <div class="list-group-item">Basic Support</div>
                        <div class="list-group-item"><del>Collaboration</del></div>
                        <div class="list-group-item"><del>Reports and analytics</del></div>
                    </ul>
                    <div class="card-body">
                        <a class="btn btn-primary btn-lg btn-block open_popup">Choose this Plan</a>
                    </div>
                </div>
                <div class="card pricing popular">
                    <div class="card-head">
                        <small class="text-primary">FOR TEAMS</small>
                        <span class="price">$29<sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Unlimited Projects</div>
                        <div class="list-group-item">100 GB Storage</div>
                        <div class="list-group-item">Priority Support</div>
                        <div class="list-group-item">Collaboration</div>
                        <div class="list-group-item">Reports and analytics</div>
                    </ul>
                    <div class="card-body">
                        <a class="btn btn-primary btn-lg btn-block open_popup">Choose this Plan</a>
                    </div>
                </div>
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">ENTERPRISE</small>
                        <span class="price">$249<sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Unlimited Projects</div>
                        <div class="list-group-item">Unlimited Storage</div>
                        <div class="list-group-item">Collaboration</div>
                        <div class="list-group-item">Reports and analytics</div>
                        <div class="list-group-item">Web hooks</div>
                    </ul>
                    <div class="card-body open_popup">
                        <a class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
            </div>
            <!-- // end .pricing -->

        </div>

    </div>
    <!-- // end .section -->

    <div class="section light-bg pt-0 light-background">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">Can I try before I buy?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">What payment methods do you accept?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Can I change my plan later?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">Do you have a contract?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <!-- // start .form -->
    <div class="section">
        <div class="container">
            <div class="section-title">
                <small>FORM</small>
                <h3>Fill The Form</h3>
                <div class="success-contact" style="display:none"></div>
            </div>
            <div class="row">
                <form class="col s12 form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="name" id="name" type="text" class="validate" value="{{old('name')}}">
                            <label for="first_name">First Name</label>
                            <div class="danger-contact danger-contact-name" style="display:none"></div>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" name="last_name" type="text" class="validate" value="{{old('last_name')}}">
                            <label for="last_name">Last Name</label>
                            <div class="danger-contact danger-contact-last" style="display:none"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate" value="{{old('email')}}">
                            <label for="email">Email</label>
                            <div class="danger-contact danger-contact-email" style="display:none"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="url" type="url" name="url" class="validate" value="{{old('url')}}">
                            <label for="email">Link</label>
                            <div class="danger-contact danger-contact-url" style="display:none"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <textarea id="text" name="text" class="materialize-textarea">{{old('text')}}</textarea>
                            <label for="icon_prefix2">Enter Your Message</label>
                            <div class="danger-contact danger-contact-text" style="display:none"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-send col-lg-12">
                            <button type="submit" id="submit-contact" class="button-send">SEND</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
@push('scripts')
    @include('landing.scripts.scripts')
@endpush
