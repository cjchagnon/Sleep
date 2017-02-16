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

      <div class="small-12 do-this-card shadow-d3" id="card-wake-up">
        <div class="do-this-bg pic-sleep">
          <div class="do-this-layer">
            <a class="do-this-text" href="#">
              <div class="do-this-text-flavor">Are you ready for the day?</div>
              <i class="fa fa-sun-o"></i> Wake Up</a>
          </div>
        </div>
      </div>
      <div class="small-12 do-this-card shadow-d3">
        <div class="do-this-bg pic-coffee">
          <div class="do-this-layer">
            <a class="do-this-text" href="?page=add">
              <div class="do-this-text-flavor">Have you had your morning cup yet?</div>
              <i class="fa fa-coffee"></i> Log Caffeine</a>
          </div>
        </div>
      </div>

    </div>
  </div>

<div class="small-12 medium-6 columns hide-for-small-only">
  <div class="card card-full shadow-d1">
    <h2>Your Week So Far</h2>
    <img style="width:100%"src="resources/img/graph.png">
  </div>
</div>
