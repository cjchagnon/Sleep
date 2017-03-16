<?php
//=============================================================================
// WPI Sleep App
// _dashboard.php
//
// main app screen
//
// vigilant dashboard with new info
//=============================================================================
?>
<div class="row">
  <!--Do This Cards-->
  <div class="small-12 medium-6 columns">
    <div class="row">
      <h3 class="greeting">Good Morning, <span class="color-dark-purple">Chris</span>!</h3>

      <div class="small-12 do-this-card shadow-d3" id="card-wake">
        <div class="do-this-bg pic-wake">
          <div class="do-this-layer">
            <a class="do-this-text" href="#">
              <i class="fa fa-sun-o"></i> Wake Up</a>
          </div>
        </div>
      </div>
      <div class="small-12 do-this-card shadow-d3 do-this-card-vis" id="card-sleep">
        <div class="do-this-bg pic-sleep">
          <div class="do-this-layer">
            <a class="do-this-text" href="#">
              <i class="fa fa-moon-o"></i> Go to Sleep</a>
          </div>
        </div>
      </div>
      <div class="small-12 do-this-card shadow-d3">
        <div class="do-this-bg pic-coffee">
          <div class="do-this-layer">
            <a class="do-this-text" href="?page=add">
              <i class="fa fa-coffee"></i> Log Caffeine</a>
          </div>
        </div>
      </div>
      <div class="small-12 do-this-card shadow-d3">
        <div class="do-this-bg pic-fit">
          <div class="do-this-layer">
            <a class="do-this-text" href="?page=add">
              <i class="fa fa-heartbeat"></i> Log Activity</a>
          </div>
        </div>
      </div>

    </div>
  </div>

<div class="small-12 medium-6 columns hide-for-small-only">
  <div class="card card-full shadow-d1">
    <h2>Your Week So Far</h2>
    <img style="width:100%"src="http://placehold.it/350x150">
  </div>
</div>
