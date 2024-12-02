@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 text-center">{{ __('messages.conference_list') }}</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <tr>
                    <th>{{ __('messages.title') }}</th>
                    <th>{{ __('messages.description') }}</th>
                    <th>{{ __('messages.date_time') }}</th>
                    <th>{{ __('messages.location') }}</th>
                    <th>{{ __('messages.actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($conferences as $conference)
                    <tr>
                        <td>{{ $conference->title }}</td>
                        <td>{{ $conference->description }}</td>
                        <td>{{ $conference->date_time }}</td>
                        <td>{{ $conference->location }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-warning">{{ __('messages.edit') }}</a>
                                <a href="{{ route('conferences.show', $conference->id) }}" class="btn btn-info">{{ __('messages.view') }}</a>
                                <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('messages.delete') }}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('conferences.create') }}" class="btn btn-success my-3">{{ __('messages.create_new_conference') }}</a>
    </div>
@endsection
