
@extends('layouts.medic')

@section('title')
    {{ config('app.name') }} | Create course
@endsection



@section('content')
    <div class="dashboard-header-wrap">
      <h2 class="dashboard">Create a Course</h2>
    </div>
    @if(session('success'))
    <h5 style="color: green">{{ session('success') }}</h5>
    @endif
    @if($errors->all())
    @foreach ($errors->all() as $item)
        <li style="color: red">{{ $item }}</li>
    @endforeach
    @endif
    <div class="module">
      <div class="w-form">
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data" class="create-course-form">
          @csrf
          <label for="Course-Name" class="field-label">Course Name</label>
          <input type="text" class="course-text-input w-input" maxlength="256" name="name" data-name="Course Name" placeholder="" id="Course-Name" required="">
          <label for="Categories-Name" class="field-label">Categories</label>
          <input type="text" class="course-text-input w-input" maxlength="256" name="category" data-name="Categories Name" placeholder="" id="Categories-Name" required="">
          <label for="Instructor-Name" class="field-label">Instructor</label>
          <input type="text" class="course-text-input w-input" maxlength="256" name="instructor" data-name="Instructor Name" placeholder="" id="Instructor-Name" required="">
          <label for="Total-Lectures" class="field-label">Total Lectures</label>
          <input type="number" class="course-text-input w-input" maxlength="256" name="number_of_lecture" data-name="Total Lectures" placeholder="" id="Total-Lectures" required="">
          <label for="Course-Duration" class="field-label">Course Duration</label>
          <input type="text" class="course-text-input w-input" maxlength="256" name="duration" data-name="Course Duration" placeholder="" id="Course-Duration" required="">
          <label for="Language-Name" class="field-label">Language</label>
          <input type="text" class="course-text-input w-input" maxlength="256" name="language" data-name="Language Name" placeholder="" id="Language-Name" required="">
          <label for="Price" class="field-label">Price</label>
          <input type="text" class="course-text-input w-input" maxlength="256" name="price" data-name="price" placeholder="$" id="Price" required="">
          <label for="email" class="field-label">Course Description</label>
          <textarea name="description" maxlength="5000" id="field" required="" class="description-input w-input"></textarea>
          <div class="upload-wrap">
            <div class="upload-left">
              <div class="settings-label">Course Video</div>
              <a onclick="event.preventDefault();document.getElementById('video').click()" class="back-button upload-videos w-button">Upload New Course</a>
              <input id="video" type="file" name="video" style="display: none;">
              <p class="paragraph-small">You can upload videos up to 1GB.</p>
            </div>
            <div class="upload-left">
              <div class="settings-label">Video Thumbnail</div>
              <a onclick="event.preventDefault();document.getElementById('image').click();" class="back-button upload-videos w-button">Upload Thumbnail</a>
              <input id="image" type="file" name="thumbnail" style="display: none;">
              <p class="paragraph-small">You can upload images up to 400x400px.</p>
            </div>
          </div><input type="submit" value="Submit" class="course-form-submit-button w-button">
        </form>
      </div>
    </div>
@endsection