@extends('layouts.medic')

@section('title')
    {{ config('app.name') }} | My Profile
@endsection

@section('content')
<div class="main-content">
    <h1 class="page-title">Your Profile</h1>
    <div class="profile-grid">
      <div id="w-node-_515adb48-2caf-530b-0d3b-108170a391a0-2e399ec3" class="profile">
        <div class="image-wrap"><img src="{{ asset('frontend_assets/images/Stijin.jpg') }}" loading="lazy" alt="" class="profile-image-m"></div>
        <h3 class="name">King Stijn</h3>
        <h5 class="position">Designer</h5>
      </div>
      <div class="about-profile">
        <div class="module">
          <div class="profile-title">Account Information</div>
          <div class="settings-label">Profile Picture</div>
          <a href="#" class="back-button upload w-button">Upload New Picture</a>
          <p class="paragraph-small">You can upload images up to 400x400px.</p>
          <div class="divider"></div>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form"><label for="name" class="field-label">Name</label><input type="text" class="text-input w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="King Stijn" id="name-2" required=""><label for="profile-email" class="field-label">Email </label><input type="email" class="text-input w-input" maxlength="256" name="profile-email" data-name="profile-email" placeholder="example@email.com" id="profile-email" required=""><label for="Username" class="field-label">Username</label><input type="text" class="text-input w-input" maxlength="256" name="Username" data-name="Username" placeholder="Foxtrot44" id="Username" required=""><label for="Role" class="field-label">Role</label><input type="text" class="text-input w-input" maxlength="256" name="Role" data-name="Role" placeholder="Designer" id="Role" required=""><label for="Bio" class="field-label">Bio</label><textarea placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare." maxlength="5000" id="Bio" name="Bio" data-name="Bio" class="textarea-2 w-input"></textarea><input type="submit" value="Update Profile" data-wait="Please wait..." class="back-button upload w-button"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="module">
          <div class="profile-title">Social Profiles</div>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form"><label for="Twitter" class="field-label">Twitter</label><input type="text" maxlength="256" name="Twitter" data-name="Twitter" id="Twitter" class="text-input w-input"><label for="Facebook" class="field-label">Facebook</label><input type="email" maxlength="256" name="Facebook" data-name="Facebook" id="Facebook" class="text-input w-input"><label for="Instagram" class="field-label">Instagram</label><input type="text" maxlength="256" name="Instagram" data-name="Instagram" id="Instagram" class="text-input w-input"><label for="Google" class="field-label">Google</label><input type="text" class="text-input w-input" maxlength="256" name="Google" data-name="Google" id="Google" required=""><input type="submit" value="Update" data-wait="Please wait..." class="back-button upload w-button"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection