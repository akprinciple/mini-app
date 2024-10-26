<x-layout>
    <x-slot:title>Signup Page</x-slot:title>
    <div class="pt-5 bg-primary">
        <h3 class="text-center mt-5 text-white">Get Started with Leofoods !</h3>
    <div class="col-md-6 mx-auto p-3 border border-warning shadow rounded mb-5 bg-white">
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
                    <script>
                        setTimeout(() => {
                            window.location.assign('{{ url('/login') }}');
                        }, 3000);
                        </script>
                </div>
            @endif
        @endif
        
            <label for="" class="mt-3">Name</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
            
        <label for="" class="mt-3">Email</label>
        <input type="email" class="form-control" placeholder="..@xmail.com" name="email"  value="{{ old('email') }}">
            <div class="justify-content-center mt-2">
                <div class="d-inline-block">
                    <label for="consumer" class=" me-2">Consumer</label>
                    <input type="radio" name="level" id="consumer" value="consumer">
                </div>
                <div class="d-inline-block ml-3">
                    <label for="farmer" class=" me-2">Farmer</label>
                    <input type="radio" name="level" id="farmer" value="farmer">
                </div>
            </div>
            <label for="" class="mt-3">Password</label>
            <input type="password" class="form-control" placeholder="********" name="password"  value="{{ old('password') }}">

        <label for="" class="mt-3">Confirm Password</label>
        <input type="password" class="form-control" placeholder="Confirm your password" name="c_password">
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    </div>
    {{-- </div> --}}
</x-layout>