@if ($errors->any())
    <div class="alert alert-danger background-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>* {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
