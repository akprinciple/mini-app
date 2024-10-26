<x-layout>
    <x-slot:title>Sign In</x-slot:title>
    <div class="pt-5 bg-primary">
        <h3 class="text-center mt-5 text-white">Welcome to Leofoods !</h3>
    <div class="col-md-6 mx-auto p-3 border border-warning shadow rounded mb-5 bg-white">
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
                <div class="alert alert-danger">
                    {{ session('status') }} 
                    {{-- <script>
                        setTimeout(() => {
                            window.location.assign('{{ url('dashboard') }}');
                        }, 3000);
                    </script> --}}
                </div>
            @endif
        @endif
        
        <label for="" class="mt-3">Email</label>
        <input type="email" required class="form-control" placeholder="..@xmail.com" name="email"  value="{{ old('email') }}">

        <label for="" class="mt-3">Password</label>
        <input type="password" requid class="form-control" placeholder="********" name="password"  value="{{ old('password') }}">
 
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    </div>
</x-layout>