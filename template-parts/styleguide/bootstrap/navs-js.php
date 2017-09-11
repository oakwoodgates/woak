<h2>Navs - JS</h2>
<p class="lead">To extend our navigational tabs and pills to create tabbable panes of local content</p>

<h3>Tabs</h3>
<p>
  <nav class="nav nav-tabs" id="myTab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Profile</a>
    <div class="dropdown">
      <a class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
        Dropdown
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" id="nav-dropdown1-tab" href="#nav-dropdown1" role="tab" data-toggle="tab" aria-controls="nav-dropdown1">@fat</a>
        <a class="dropdown-item" id="nav-dropdown2-tab" href="#nav-dropdown2" role="tab" data-toggle="tab" aria-controls="nav-dropdown2">@mdo</a>
      </div>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">one</div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">two</div>
    <div class="tab-pane fade" id="nav-dropdown1" role="tabpanel" aria-labelledby="nav-dropdown1-tab">three</div>
    <div class="tab-pane fade" id="nav-dropdown2" role="tabpanel" aria-labelledby="nav-dropdown2-tab">four</div>
  </div>
</p>

<h3>Pills</h3>
<p>
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-expanded="true">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-expanded="true">Profile</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" id="pills-dropdown1-tab" href="#pills-dropdown1" role="tab" data-toggle="pill" aria-controls="pills-dropdown1">@fat</a>
        <a class="dropdown-item" id="pills-dropdown2-tab" href="#pills-dropdown2" role="tab" data-toggle="pill" aria-controls="pills-dropdown2">@mdo</a>
      </div>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">one</div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">two</div>
    <div class="tab-pane fade" id="pills-dropdown1" role="tabpanel" aria-labelledby="pills-dropdown1-tab">three</div>
    <div class="tab-pane fade" id="pills-dropdown2" role="tabpanel" aria-labelledby="pills-dropdown2-tab">four</div>
  </div>
</p>

<h3>Responsive variation - vertical to horizontal</h3>
<div class="row">
  <div class="col-xs-12 col-sm-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-expanded="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-expanded="true">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-expanded="true">Messages</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-expanded="true">Settings</a>
    </div>
  </div>
  <div class="col-xs-12 col-sm-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">one</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">two</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">three</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">four</div>
    </div>
  </div>
</div>
