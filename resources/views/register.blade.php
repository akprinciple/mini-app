<x-header>
    <div class="col-md-6 mx-auto p-3 border border-success rounded mt-5">
        <h3>Sign Up</h3>
        <form  action="{{ url('/signup') }}" method="POST" enctype="multipart/form-data">
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
                </div>
            @endif
        @endif
        
            <label for="" class="mt-3">Name</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
            
        <label for="" class="mt-3">Email</label>
        <input type="email" class="form-control" placeholder="..@xmail.com" name="email"  value="{{ old('email') }}">

        <label for="" class="mt-3">Password</label>
        <input type="password" class="form-control" placeholder="********" name="password"  value="{{ old('password') }}">

        <label for="" class="mt-3">Confirm Password</label>
        <input type="password" class="form-control" placeholder="Confirm your password" name="c_password">
        
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
    </div>
</x-header>