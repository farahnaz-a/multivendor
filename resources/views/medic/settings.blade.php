@extends('layouts.medic')

@section('title')
    {{ config('app.name') }} | My Settings
@endsection



@section('content')
<div class="main-content">
    <h1 class="page-title">Settings</h1>
    <div class="profile-grid">
      <div id="w-node-_515adb48-2caf-530b-0d3b-108170a391a0-8cfa085f" class="menu-list-section">
        <a href="#Account-setting" class="menu-link w-inline-block">
          <div class="sidebar-link-text">Account Settings</div>
        </a>
        <a href="#Seller-Settings" class="menu-link w-inline-block">
          <div class="sidebar-link-text">Seller Settings</div>
        </a>
        <a href="#Password-Box" class="menu-link w-inline-block">
          <div class="sidebar-link-text">Password</div>
        </a>
        <a href="#Email-Notfy" class="menu-link w-inline-block">
          <div class="sidebar-link-text">Email Notifications</div>
        </a>
        <a href="#Desktop-Notify" class="menu-link w-inline-block">
          <div class="sidebar-link-text">Desktop Notifications</div>
        </a>
        <a href="#Delete-account" class="menu-link w-inline-block">
          <div class="sidebar-link-text">Close Account</div>
        </a>
      </div>
      <div class="about-profile">
        <div id="Account-setting" class="module">
          <div class="profile-title">Account Settings</div>
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><label for="name" class="settings-label">Language</label><select id="field" name="field" class="language w-select">
                <option value="">English</option>
                <option value="First">German</option>
                <option value="Second">Spanish</option>
                <option value="Third">English</option>
                <option value="Five">Dutch</option>
              </select><label for="name-3" class="settings-label">Country</label><select id="field-2" name="field-2" data-name="Field 2" class="language w-select">
                <option value="">Netherland</option>
                <option value="First">USA</option>
                <option value="Second">Denmark</option>
                <option value="Third">New Zealand</option>
                <option value="Five">Sweden</option>
              </select>
              <div class="divider"></div><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom box"></div><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">Block mature content</span>
              </label><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom box"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">Opt out of recommendations based on your activity</span>
              </label>
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div id="Seller-Settings" class="module">
          <div class="profile-title">Seller Settings</div>
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><label for="Name" class="settings-label">Seller Name</label><input type="text" class="language w-input" maxlength="256" name="Name" data-name="Name" id="Name" required=""><label for="name" class="settings-label">Stripe Connect ID</label><input type="text" class="language w-input" maxlength="256" name="Name-2" data-name="Name 2" id="Name-2" required=""></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div id="Password-Box" class="module">
          <div class="profile-title">Password</div>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form"><label for="Password" class="field-label">Old Password</label><input type="password" maxlength="256" name="Password" data-name="Password" id="Password" class="text-input w-input"><label for="Password-2" class="field-label">New Password</label><input type="password" maxlength="256" name="Password" data-name="Password" id="Password-2" class="text-input w-input"><input type="submit" value="Change" data-wait="Please wait..." class="back-button upload w-button"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div id="Email-Notfy" class="module">
          <div class="profile-title">Email Notifications</div>
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom box"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">Receive emails about a new order</span>
              </label><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom box w--redirected-checked"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" checked="" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">Receive emails about a new customer</span>
              </label><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom box"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">Receive emails when something in your account changes</span>
              </label><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom box"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">Receive emails when there is a new computer sign-on</span>
              </label><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom box"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">Receive emails from us about product updates</span>
              </label><label for="name" class="settings-label">Notification frequency</label><select id="field-2" name="field-2" data-name="Field 2" class="language w-select">
                <option value="">Weekly</option>
                <option value="First">Daily</option>
                <option value="Third">Monthly</option>
              </select></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div id="Desktop-Notify" class="module">
          <div class="profile-title">Desktop Notifications</div>
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom toogle w--redirected-checked"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" checked="" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">Enable desktop notificationse</span>
              </label><label for="name" class="settings-label">Notification frequency</label><select id="field-2" name="field-2" data-name="Field 2" class="language w-select">
                <option value="">Weekly</option>
                <option value="First">Daily</option>
                <option value="Third">Monthly</option>
              </select></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div id="Delete-account" class="module">
          <div class="profile-title red">Close Account</div>
          <p>Are you sure you want your account to be deleted? <br>This action can&#x27;t be undone.</p>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form"><label class="w-checkbox box-wrap">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom box"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label">I&#x27;m absolutely sure I want my account to be deleted</span>
              </label><input type="submit" value="Delete My Account" data-wait="Please wait..." class="back-button delete w-button"></form>
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