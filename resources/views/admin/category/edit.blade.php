<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            Edit Category <b> </b>
            

        </h2>
    </x-slot>

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}

                <div class="container">
                    <div class="row">

                    

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Edit Category</div>
                            <div class="card-body">

                                <form action="{{ url('category/update/'.$categories->id) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Update Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $categories->category_name }}">
                                    
                                    @error('category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                    <a href="/category/all" class="btn btn-success">Back</a>
                                    
                                </form>
                            
                            </div>
                        
                        </div>
                    </div>

                    </div>
                </div>
                
            {{-- </div>
        </div> --}}
    </div>
</x-app-layout>
