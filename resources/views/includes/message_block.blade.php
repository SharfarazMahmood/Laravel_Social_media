@if (count($errors) > 0)
    <div>
        <div class="col-md-6 offset-md-3 error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if (Session::has('message'))
    <div>
        <div class="col-md-6 offset-md-3 success">
            <ul>
                {{ Session::get('message') }}
            </ul>
        </div>
    </div>
@endif
