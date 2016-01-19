@if (count($errors) > 0)
        <!-- Form Error List -->

    <p class="alert alert-warning">Whoops! Something went wrong!</p>


        @foreach ($errors->all() as $error)
            <p class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> {{ $error }}</p>
        @endforeach


@endif
