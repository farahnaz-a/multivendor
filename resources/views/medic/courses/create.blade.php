
@extends('layouts.medic')

@section('title')
    {{ config('app.name') }} | Create course
@endsection



@section('content')
    <div class="dashboard-header-wrap">
      <h2 class="dashboard">Create a Course</h2>
    </div>
    <div class="module">
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="create-course-form"><label for="Course-Name" class="field-label">Course Name</label><input type="text" class="course-text-input w-input" maxlength="256" name="Course-Name" data-name="Course Name" placeholder="" id="Course-Name" required=""><label for="Categories-Name" class="field-label">Categories</label><input type="text" class="course-text-input w-input" maxlength="256" name="Categories-Name" data-name="Categories Name" placeholder="" id="Categories-Name" required=""><label for="Instructor-Name" class="field-label">Instructor</label><input type="text" class="course-text-input w-input" maxlength="256" name="Instructor-Name" data-name="Instructor Name" placeholder="" id="Instructor-Name" required=""><label for="Total-Lectures" class="field-label">Total Lectures</label><input type="number" class="course-text-input w-input" maxlength="256" name="Total-Lectures" data-name="Total Lectures" placeholder="" id="Total-Lectures" required=""><label for="Course-Duration" class="field-label">Course Duration</label><input type="text" class="course-text-input w-input" maxlength="256" name="Course-Duration" data-name="Course Duration" placeholder="" id="Course-Duration" required=""><label for="Language-Name" class="field-label">Language</label><input type="text" class="course-text-input w-input" maxlength="256" name="Language-Name" data-name="Language Name" placeholder="" id="Language-Name" required=""><label for="Price" class="field-label">Price</label><input type="text" class="course-text-input w-input" maxlength="256" name="Price" data-name="Price" placeholder="$" id="Price" required=""><label for="email" class="field-label">Course Description</label><textarea name="field" maxlength="5000" id="field" required="" class="description-input w-input"></textarea>
          <div class="upload-wrap">
            <div class="upload-left">
              <div class="settings-label">Course Video</div>
              <a href="#" class="back-button upload-videos w-button">Upload New Course</a>
              <p class="paragraph-small">You can upload videos up to 1GB.</p>
            </div>
            <div class="upload-left">
              <div class="settings-label">Video Thumbnail</div>
              <a href="#" class="back-button upload-videos w-button">Upload Thumbnail</a>
              <p class="paragraph-small">You can upload images up to 400x400px.</p>
            </div>
          </div><input type="submit" value="Submit" data-wait="Please wait..." class="course-form-submit-button w-button">
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
@endsection