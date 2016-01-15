@if ( count($errors) > 0)
    <div class="container">
        <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>Whoops! Something went wrong!</strong>
            <br/>
            <ul>
                @foreach ($errors->any() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
