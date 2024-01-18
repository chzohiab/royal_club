@extends('admin.layouts.app')

@section('admincontent')
    <div>
        <div class="page-title">
            <h2>Clubs</h2>

            <a href="{{ route('clubs-create') }}" class="btn btn-primary">Create Club</a>
        </div>

        @if ($message = session('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Club listing</h3>
            </div>
            <div class="table-responsive">
                <table class="rc-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Bio</th>
                            <th>City</th>
                            <th>Establshed Year</th>
                            {{-- <th>Image</th> --}}
                            <th>Craeted At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clubs as $index => $val)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->bio }}</td>
                                <td>{{ $val->city }}</td>
                                <td>{{ $val->established_year }}</td>
                                {{-- <td><img src="/img/{{ $val->image }}" width="100px" height="100px" alt="img"> --}}
                                </td>
                                <td>{{ $val->created_at }}</td>
                                <td>
                                    <form action="{{ route('clubs-delete', $val->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <div class="action-btn">
                                            {{-- <a title="View" href="{{ route('clubs-show', $val->id) }}" class=""><i
                                                    class="ri-eye-line"></i></a> --}}
                                            <a title="Edit" href="{{ route('clubs-edit', $val->id) }}" class=""><i
                                                    class="ri-edit-box-line"></i></a>
                                            <button title="Delete" type="submit" class=""><i
                                                    class="ri-delete-bin-6-line"></i></button>
                                        </div>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
