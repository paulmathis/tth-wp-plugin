<div class="wrap">

  <div id="icon-options-general" class="icon32"></div>
  <h1>The Official Treehoues Badges Plugin</h1>

  <div id="poststuff">

    <div id="post-body" class="metabox-holder columns-2">

      <!-- main content -->
      <div id="post-body-content">

        <div class="meta-box-sortables ui-sortable">

          <?php if (!isset($wptreehouse_username) || $wptreehouse_username == ''): ?>

          <div class="postbox">

            <h2 class="hndle">
              <span>Let's Get Started</span>
            </h2>

            <div class="inside">

              <form name="wptreehouse_username_form" method="post" action="">

                <input type="hidden" name="wptreehouse_form_submitted" value="Y">
                <table class="form-table">
                  <tr valign="top">
                    <td scope="row">
                      <label for="wptreehouse_username">Treehouse username</label>
                    </td>
                    <td>
                      <input name="wptreehouse_username" id="wptreehouse_username" type="text" value="" class="regular-text" />
                    </td>
                </table>

                <p>
                  <input class="button-primary" type="submit" name="wptreehouse_username_submit" value="Save" />
                </p>
              </form>
            </div>
            <!-- .inside -->
          </div>
          <!-- .postbox -->

          <?php else: ?>

          <div class="postbox">

            <h2 class="hndle">
              <span>Most Recent Badges</span>
            </h2>

            <div class="inside">

              <p>Below are your 20 most recent badges</p>

              <ul class="wptreehouse-badges">

                <?php for ($i = 0; $i < 20; $i++): ?>
                <?php 
                  $badge =  $wptreehouse_profile->{'badges'}[$i];
                  $courses = $badge->{'courses'}; ?>
                <li>
                  <ul>
                    <li>
                      <img class="wptreehouse-gravatar" width="120px" src="<?php echo $badge->{'icon_url'}?>">
                    </li>
                    <li class="wptreehouse-badge-name">
                      <a href="<?php echo $badge->{'url'}?>">
                        <?php echo $badge->{'name'}?>
                      </a>
                    </li>
                    <li class="wptreehouse-project-name">
                      <a href="<?php echo isset($courses[0]->{'url'}) ? $courses[0]->{'url'} : ''  ;?>">
                        <?php echo isset($courses[0]->{'title'}) ? $courses[0]->{'title'} : ''  ;?>
                      </a>
                    </li>
                  </ul>
                </li>
                <?php endfor; ?>

              </ul>
            </div>
            <!-- .inside -->

          </div>
          <!-- .postbox -->

          <div class="postbox">

            <h2 class="hndle">
              <span>Most Recent Badges</span>
            </h2>

            <div class="inside">
              <p>
                <?php echo $wptreehouse_profile->{'name'}; ?>
              </p>
              <p>
                <?php echo $wptreehouse_profile->{'profile_url'}; ?>
              </p>
              <pre><code><?php var_dump($wptreehouse_profile->{'badges'}[0]); ?></code></pre>
            </div>
          </div>

          <?php endif; ?>
        </div>
        <!-- .meta-box-sortables .ui-sortable -->

      </div>
      <!-- post-body-content -->

      <!-- sidebar -->
      <div id="postbox-container-1" class="postbox-container">

        <div class="meta-box-sortables">
          <?php if (isset($wptreehouse_username) && $wptreehouse_username != ''): ?>
          <div class="postbox">

            <h3>
              <span>Mike the Frog's Profile</span>
            </h3>
            <div class="inside">

              <p>
                <img width="100%" class="wptreehouse-gravatar" src="<?php echo $plugin_url . '/images/mike-the-frog.png'; ?>"
                  alt="Mike the Frog Gravatar">
              </p>

              <ul class="wptreehouse-badges-and-points">

                <li>Badges:
                  <strong>200</strong>
                </li>
                <li>Points:
                  <strong>10000</strong>
                </li>

              </ul>

              <form name="wptreehouse_username_form" method="post" action="">

                <input type="hidden" name="wptreehouse_form_submitted" value="Y">
                <p>
                  <label for="wptreehouse_username">Username</label>
                </p>

                <p>
                  <input name="wptreehouse_username" id="wptreehouse_username" type="text" value="<?php echo $wptreehouse_username; ?>"
                  />
                </p>

                <p>
                  <input class="button-primary" type="submit" name="wptreehouse_username_submit" value="Update" />
                </p>
              </form>

            </div>
            <!-- .inside -->



          </div>
          <!-- .postbox -->
          <?php endif; ?>
        </div>
        <!-- .meta-box-sortables -->

      </div>
      <!-- #postbox-container-1 .postbox-container -->

    </div>
    <!-- #post-body .metabox-holder .columns-2 -->

    <br class="clear">
  </div>
  <!-- #poststuff -->

</div>
<!-- .wrap -->