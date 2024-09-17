<x-header>
    <div class="col-md-6 mx-auto p-3 border border-success rounded mt-5">
        <h3>Sign Up</h3>
        <form action="">
            @csrf
            <label for="" class="mt-3">Name</label>
            <input type="text" class="form-control" placeholder="Enter Your Name">
            
        <label for="" class="mt-3">Email</label>
        <input type="email" class="form-control" placeholder="..@xmail.com">

        <label for="" class="mt-3">Password</label>
        <input type="password" class="form-control" placeholder="********">

        <label for="" class="mt-3">Confirm Password</label>
        <input type="password" class="form-control" placeholder="Confirm your password">
        
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
    </div>
</x-header>