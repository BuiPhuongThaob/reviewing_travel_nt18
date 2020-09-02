@extends('admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ trans('admin.posts_list') }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>{{ trans('admin.id') }}</th>
                        <th>{{ trans('admin.user_id') }}</th>
                        <th>{{ trans('admin.title') }}</th>
                        <th>{{ trans('admin.intro') }}</th>
                        <th>{{ trans('admin.content') }}</th>
                        <th>{{ trans('admin.place_id') }}</th>
                        <th>{{ trans('admin.status') }}</th>
                        <th>{{ trans('admin.action') }}</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->user_id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->intro }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->place_id }}</td>
                                <td>{{ $post->status }}</td>
                                <td><a href="{{ route('hidden_post', $post->id) }}" id="post_action" class="btn-hide">{{ trans('admin.action') }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
