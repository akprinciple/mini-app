<x-admin-layout> 
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">All Registered Consumers</h4>
              <p class="text-muted mb-1">users</p>
            </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Reg Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consumers as $row)
                            <tr class="text-white">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->created_at }}</td>
                                
                                <td><a href="{{ url('admin/consumers').'/'.$row->id }}" class="btn btn-success">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
          </div>
        </div>
      </div>
        

</x-admin-layout>