<x-admin-layout>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">View Consumer</h4>
              <p class="text-muted mb-1" style="cursor: pointer;" onclick="window.history.back()">Go back</p>
            </div>
            @if(session('success'))
                <script>alert('{{ session('success') }}')</script>
            @endif
            @if(isset($msg))
                <h4 class="text-center text-danger">{{ $msg; }}</h4>
            @else
                
            <div class="row border-top pt-3">
                <div class="col-md-6 mt-2">
                    <b>Name:</b>
                    <div class="border rounded p-3">{{ $key->name; }}</div>
                </div>
                <div class="col-md-6 mt-2">
                    <b>Email:</b>
                    <div class="border rounded p-3">{{ $key->email; }}</div>
                </div>
                <div class="col-md-6 mt-2">
                    <b>Registration Date:</b>
                    <div class="border rounded p-3">{{ $key->created_at; }}</div>
                </div>
                <div class="col-md-6 mt-2">
                    <b>Status:</b>
                    <form method="POST">
                        @csrf
                        @method('patch')
                        <select name="status" class="form-control text-white">
                            <option>{{ $key->status; }}</option>
                            <option>Unverified</option>
                            <option>Verified</option>
                            <option>Blocked</option>
                        </select>
                        <button type="submit" class="btn btn-success mt-2 float-right">Update</button>
                </form>
                    {{-- <div class="border rounded p-3">{{ $key->created_at; }}</div> --}}
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>
            <div class="mt-5">
                <form method="post">
                    @csrf
                    @method('delete')
                    <center>
                        <button type="submit" class="btn btn-danger btn-lg col-md-3">Delete</button>
                    </center>
                </form>
            </div>
            @endif
          </div>
        </div>
    </div>

</x-admin-layout>