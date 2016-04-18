</div></div>

<div id="footer">
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-8">
                <p class="text-muted credit">
                    &copy; <a href="https://github.com/dybaoqee">{{ Config::get('cms.author') }}</a> 2016. All rights reserved.
                </p>
            </div>
        </div>
    </div>
    <div class="container visible-xs">
        <p class="text-muted credit">
            &copy; <a href="https://github.com/dybaoqee">{{ Config::get('cms.author') }}</a> 2016. All rights reserved.
        </p>
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/scripts/jquery.timeago.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/scripts/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/scripts/cms-main.js') }}"></script>
@section('js')
@show
@if (Config::get('analytics.google'))
    @include('partials.analytics')
@endif
