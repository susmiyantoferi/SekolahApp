<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            All Category <b> </b>
            

        </h2>
    </x-slot>

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}

                <div class="container">
                    <div class="row">

                    <div class="col-md-8">
                        <div class="card">
                            
                            @if (session('succsess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('succsess') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif

                         <div class="card-header">All Category</div>
                    

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">User</th>
                                <th scope="col">Create At</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            {{-- @php($x = 1) --}}
                            @foreach ($categories as $category)
                              <tr>
                                <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->user->name }}</td>
                                <td>
                                    @if ($category->created_at == NULL)
                                        <span class="text-danger">No Date Set</span>
                                    @else
                                    {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('category/edit/'.$category->id) }}" class="btn btn-info" >Edit</a>
                                    <a href="{{ url('softdelete/category/'.$category->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                              </tr>
                            @endforeach 
                              
                            </tbody>
                          </table>

                          {{-- pagination --}}
                          {{ $categories->links() }}

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">All Category</div>
                            <div class="card-body">

                                <form action="{{ route('store.category') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    
                                    @error('category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </form>
                            
                            </div>
                        
                        </div>
                    </div>

                    </div>
                </div><br>


                {{-- Soft Delete --}}
                <div class="container">
                    <div class="row">

                    <div class="col-md-8">
                        <div class="card">
                            

                         <div class="card-header">Trash List</div>
                    

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">User</th>
                                <th scope="col">Create At</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            {{-- @php($x = 1) --}}
                            @foreach ($trachCat as $category)
                              <tr>
                                <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->user->name }}</td>
                                <td>
                                    @if ($category->created_at == NULL)
                                        <span class="text-danger">No Date Set</span>
                                    @else
                                    {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('category/restore/'.$category->id) }}" class="btn btn-info" >Restore</a>
                                    <a href="{{ url('pdelete/category/'.$category->id) }}" class="btn btn-danger">Permanent Delete</a>
                                </td>

                              </tr>
                            @endforeach 
                              
                            </tbody>
                          </table>

                          {{-- pagination --}}
                          {{ $trachCat->links() }}

                        </div>
                    </div>

                    <div class="col-md-4">
                
                    </div>

                    </div>
                </div>
                {{-- End Trash --}}
                
            {{-- </div>
        </div> --}}
    </div>
</x-app-layout>
