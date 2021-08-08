@extends('layouts.medic')

@section('title')
    {{ config('app.name') }} | Medic Dashboard
@endsection

@section('content')
    

<div class="dashboard-header-wrap">
    <h2 class="dashboard">Dashboard</h2>
    <a href="#" class="edit-button w-button">Edit Dashboard</a>
  </div>
  <div class="db-top-grid">
    <div class="single-block blue">
      <div class="grid-heading">New Orders</div>
      <div class="number color">4</div>
    </div>
    <div class="single-block">
      <div class="grid-heading">New Customers</div>
      <div class="number">12</div>
    </div>
    <div class="single-block">
      <div class="grid-heading">Open Courses</div>
      <div class="number">22</div>
    </div>
    <div class="single-block">
      <div class="grid-heading">On Hold</div>
      <div class="number">8</div>
    </div>
  </div>
  <div class="db-grid">
    <div class="single-block-wrap">
      <div class="header-block">
        <div class="grid-heading">Schedule</div>
        <div data-hover="" data-delay="0" class="filter-list w-dropdown">
          <div class="dropdown-toggle-2 w-dropdown-toggle">
            <div class="icon-2 w-icon-dropdown-toggle"></div>
            <div>Today</div>
          </div>
          <nav class="dropdown-list-2 w-dropdown-list">
            <a href="#" class="filter-option w-dropdown-link">Last Week</a>
            <a href="#" class="filter-option w-dropdown-link">This Month</a>
          </nav>
        </div>
      </div>
      <div class="block-main-wrap">
        <div class="schedule-grid">
          <div class="schedue-time">
            <div>9 AM</div>
          </div>
          <div class="schedule-div current">
            <div>Task Review</div>
          </div>
          <div class="schedue-time">
            <div>10 AM</div>
          </div>
          <div id="w-node-_63e97959-0ebc-5f0b-cb97-b9a932222efc-11a29d9c" class="schedule-div">
            <div>Prepare Orders</div>
          </div>
          <div class="schedue-time">
            <div>11 AM</div>
          </div>
          <div class="schedue-time">
            <div>12 AM</div>
          </div>
          <div class="schedule-div">
            <div>Update Website</div>
          </div>
          <div class="schedue-time">
            <div>1 PM</div>
          </div>
          <div class="schedue-time"></div>
          <div class="schedue-time">
            <div>2 PM</div>
          </div>
          <div class="schedule-div">
            <div>Skype with Jason</div>
          </div>
          <div class="schedue-time">
            <div>3 PM</div>
          </div>
          <div class="schedue-time"></div>
          <div class="schedue-time">
            <div>4 PM</div>
          </div>
          <div class="schedule-div">
            <div>Send Orders</div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-block-wrap">
      <div class="header-block">
        <div class="grid-heading">Tasks</div>
        <a href="#" class="task-button w-button">+</a>
      </div>
      <div class="block-main-wrap">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form">
            <div class="checkbox-element"><label data-w-id="d7f69ff2-ab7a-07d3-83f5-7124b9e36a39" class="w-checkbox checkbox-top">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox-wrap"></div><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="task-title w-form-label">It is a long established fact that a reader</span>
                <div class="tag">Urgent </div>
              </label>
              <p class="task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="checkbox-element"><label data-w-id="2fa595e0-7a74-c211-9d66-ca8c0c4a8e44" class="w-checkbox checkbox-top">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox-wrap"></div><input type="checkbox" id="checkbox-6" name="checkbox-6" data-name="Checkbox 6" style="opacity:0;position:absolute;z-index:-1"><span class="task-title w-form-label">It is a long established fact that a reader</span>
              </label></div>
            <div class="checkbox-element"><label data-w-id="c9a655ff-f0e8-7422-7dc4-012d289bf7fe" class="w-checkbox checkbox-top">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox-wrap"></div><input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" style="opacity:0;position:absolute;z-index:-1"><span class="task-title w-form-label">It is a long established fact that a reader</span>
                <div class="tag">Urgent </div>
              </label>
              <p class="task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="checkbox-element"><label data-w-id="5b38fa24-822c-f2a6-08e8-c45b4da61cda" class="w-checkbox checkbox-top">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox-wrap"></div><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="task-title w-form-label">It is a long established fact that a reader</span>
              </label></div>
            <div class="checkbox-element"><label data-w-id="59376b35-ee98-f3a7-8aa4-b210aea2237b" class="w-checkbox checkbox-top">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox-wrap"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="task-title w-form-label">It is a long established fact that a reader</span>
              </label></div>
            <div class="checkbox-element"><label data-w-id="b7693b84-423c-06a8-699a-6dae99b81a4f" class="w-checkbox checkbox-top">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox-wrap"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="task-title w-form-label">It is a long established fact that a reader</span>
                <div class="tag">Urgent </div>
              </label>
              <p class="task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
          </form>
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
  <div class="notification-grid">
    <div class="single-block-wrap">
      <div class="header-block">
        <div class="grid-heading">Latest Emails</div>
        <a href="#" class="task-button _14 w-button">See All</a>
      </div>
      <div class="block-main-wrap">
        <div class="email-element simple">
          <div class="notification-top">
            <div class="notification-dot"></div>
            <div class="notificaiton-title">AudioHunt</div>
            <div class="email-time">4 PM</div>
          </div>
          <p class="notification-subtitle">New music is out!</p>
          <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="email-element">
          <div class="notification-top">
            <div class="notification-dot"></div>
            <div class="notificaiton-title">AudioHunt</div>
            <div class="email-time">4 PM</div>
          </div>
          <p class="notification-subtitle">New music is out!</p>
          <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="email-element">
          <div class="notification-top">
            <div class="notification-dot"></div>
            <div class="notificaiton-title">AudioHunt</div>
            <div class="email-time">4 PM</div>
          </div>
          <p class="notification-subtitle">New music is out!</p>
          <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
    <div class="single-block-wrap">
      <div class="header-block">
        <div class="grid-heading">New Courses</div>
      </div>
      <div class="block-main-wrap">
        <div class="empty-insert"><img src="images/check-mark.svg" loading="lazy" alt="" class="check-image">
          <div>No new <br>Courses</div>
        </div>
      </div>
    </div>
  </div>
@endsection
