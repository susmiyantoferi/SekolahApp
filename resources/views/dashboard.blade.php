<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            Hello.. <b> {{ Auth::user()->name }}</b>
            <b style="float: right;">Total Users :
            <span class="text-danger">{{ count($users) }}</span>
            </b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="container">
                    <div class="row">

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Create At</th>
                              </tr>
                            </thead>
                            <tbody>

                            @php ($x=1)
                            @foreach ($users as $use )
                              <tr>
                                <th scope="row">{{ $x++ }}</th>
                                <td>{{ $use->name }}</td>
                                <td>{{ $use->email }}</td>
                                <td>{{ $use->created_at->diffForHumans() }}</td>
                              </tr>
                            @endforeach
                              
                            </tbody>
                          </table>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
