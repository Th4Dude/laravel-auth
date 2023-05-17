@extends('layouts.app')

@section('content')

    <div>

        <table class="table">

            <thead>

              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Slug</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
              </tr>

            </thead>

            @foreach ($projects as $project)

            <tbody>

                <tr>

                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->start_date}}</td>
                    <td>{{$project->end_date}}</td>
                    <td>{{$project->slug}}</td>
                    <td>{{$project->created_at}}</td>
                    <td>{{$project->updated_at}}</td>
                    <td><a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary btn-sm">Details</a></td>
                    <td><a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary btn-sm">Make a change</a></td>
                    <td><a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#project-{{ $project->id }}">Delete</a></td>
                </tr>

                
            <div class="modal fade" id="project-{{ $project->id }}" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-body">
                          Are you sure you want to delete project Id <strong>{{ $project->id }}</strong>?
                      </div>
                      <div class="modal-footer">
                          <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                      </div>
                  </div>
              </div>

            </div>

            </tbody>

            @endforeach

          </table>

    </div>
    
@endsection