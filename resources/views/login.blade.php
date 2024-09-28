<x-header>
    <div class="col-md-6 mx-auto p-3 border border-success rounded mt-5">
        <h3>Sign In</h3>
        <form  action="{{ url('/login') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any() || session('status'))
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="alert alert-success">
                    {{ session('status') }} 
                    <script>
                        setTimeout(() => {
                            window.location.assign('{{ url('home') }}');
                        }, 3000);
                    </script>
                </div>
            @endif
        @endif
        
        <label for="" class="mt-3">Email</label>
        <input type="email" class="form-control" placeholder="..@xmail.com" name="email"  value="{{ old('email') }}">

        <label for="" class="mt-3">Password</label>
        <input type="password" class="form-control" placeholder="********" name="password"  value="{{ old('password') }}">
 
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
    </div>
</x-header>