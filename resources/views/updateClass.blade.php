@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h3 class="card-header" style="display: flex;justify-content: space-between;">
                        <div style="display: flex; justify-content:flex-start;">
                            Update Class
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                                <path
                                    d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                            </svg>
                    </h3>
                    <div class="card-body">
                        <form action="{{ route('updateClass') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ $link[0]->id }}">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Class Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $link[0]->title }}">
                            </div>
                            <span>
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <div class="mb-3">
                                <label for="teacher" class="form-label">Teacher</label>
                                <input type="text" class="form-control" id="teacher" name="teacher"
                                    value="{{ $link[0]->teacher }}">
                            </div>
                            <span>
                                @error('teacher')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <div class="mb-3">
                                <label for="type" class="form-label">Class type</label>
                                <select class="form-select" id="type" name="type" value="{{ $link[0]->type }}">
                                    @if ($link[0]->type == 'College')
                                        <option Selected value="College">College Class</option>
                                        <option value="Coaching">Coaching Class</option>
                                    @endif
                                    @if ($link[0]->type == 'Coaching')
                                        <option value="College">College Class</option>
                                        <option Selected value="Coaching">Coaching Class</option>
                                    @endif
                                </select>
                            </div>
                            <span>
                                @error('type')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <div class="mb-3">
                                <label for="link" class="form-label">Class Link</label>
                                <input type="text" class="form-control" id="link" name="link"
                                    value="{{ $link[0]->link }}">
                            </div>
                            <span>
                                @error('link')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <button type="submit" class="btn btn-primary">Update Class</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
