<?php
//=============================================================================
// WPI Sleep App
// _add_activity.php
//
// Screen for adding activity
//
//
//=============================================================================
?>
<div class="row">
  <div class="small-12 columns">

    <div class="row">
      <div class="small-12 medium-8 large-6 medium-centered columns">

        <div class="card shadow-d2">
          <h2 class="text-center"><i class="fa fa-heartbeat"></i> Log Activity</a></h2>
          <p class="text-center">When were you active?</P>
          <div class="row">
            <div class="small-6 columns">
              <div class="input-group">
                <span class="input-group-label"><i class="fa fa-calendar"></i></span>
                <input class="input-group-field" type="date">
              </div>
            </div>
            <div class="small-6 columns">
              <div class="input-group">
                <span class="input-group-label"><i class="fa fa-clock-o"></i></span>
                <input class="input-group-field" type="time">
              </div>
            </div>
          </div>
          <p class="text-center">What level of impact, and for how many hours was the activity?</P>

          <div class="text-center row">
            <div class="columns small-3">
              <a href=# class="choice-coffee choice-coffee-s">
                <img src="resources/img/fit-low.png" alt="">
                <p>Low</P>
              </a>
            </div>
            <div class="bump-down small-6 columns">
              <div class="slider" data-slider data-initial-start="0" data-step=".25" data-end="5">
                <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="slideractivity-small"></span>
                <span class="slider-fill" data-slider-fill></span>
              </div>
            </div>
            <div class="bump-down small-2 columns">
              <input class="text-center choice-input input-no-style" type="number" id="slideractivity-small">
            </div>
            <div class="bump-down small-1 columns choice-label">
              hours
            </div>
          </div>

          <div class="text-center row">
            <div class="columns small-3">
              <a href=# class="choice-coffee choice-coffee-m">
                <img src="resources/img/fit-med.png" alt="">
                <p>Medium</P>
              </a>
            </div>
            <div class="bump-down small-6 columns">
              <div class="slider" data-slider data-initial-start="0" data-step=".25" data-end="5">
                <span class="slider-handle"  data-slider-handle role="slider" tabindex="2" aria-controls="slideractivity-med"></span>
                <span class="slider-fill" data-slider-fill></span>
              </div>
            </div>
            <div class="bump-down small-2 columns">
              <input class="text-center choice-input input-no-style" type="number" id="slideractivity-med">
            </div>
            <div class="bump-down small-1 columns choice-label">
              hours
            </div>
          </div>

          <div class="text-center row">
            <div class="columns small-3">
              <a href=# class="choice-coffee choice-coffee-l">
                <img src="resources/img/fit-high.png" alt="">
                <p>High</P>
              </a>
            </div>
            <div class="bump-down small-6 columns">
              <div class="slider" data-slider data-initial-start="0" data-step=".25" data-end="5">
                <span class="slider-handle"  data-slider-handle role="slider" tabindex="3" aria-controls="slideractivity-large"></span>
                <span class="slider-fill" data-slider-fill></span>
              </div>
            </div>
            <div class="bump-down small-2 columns">
              <input class="text-center choice-input input-no-style" type="number" id="slideractivity-large">
            </div>
            <div class="bump-down small-1 columns choice-label">
              hours
            </div>
          </div>

          <a class="button large expanded default-button-login shadow-d2" href="?page=home">Submit</a>

        </div>
      </div>

    </div>

  </div>
</div>
