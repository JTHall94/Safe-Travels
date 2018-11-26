    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-{{ session('status_class') ? session('status_class') : 'success' }}" role="alert">
            {{ session('status') }}
        </div>
    @endif
