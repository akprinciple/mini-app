<x-admin-layout>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">View Consumer</h4>
              <p class="text-muted mb-1" style="cursor: pointer;" onclick="window.history.back()">Go back</p>
            </div>
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
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>
            @endif
          </div>
        </div>
    </div>

</x-admin-layout>