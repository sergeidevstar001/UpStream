<?php
// Prevent direct access.
if (!defined('ABSPATH')) exit;
?>

<?php if (!upstream_disable_discussions() && !upstream_are_comments_disabled()):
$pluginOptions = get_option('upstream_general');
$collapseBox = isset($pluginOptions['collapse_project_discussion']) && (bool)$pluginOptions['collapse_project_discussion'] === true;
?>

<div class="col-xs-12 col-sm-12 col-md-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>
        <i class="fa fa-comments"></i> <?php _e('Discussion', 'upstream'); ?>
      </h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link">
            <i class="fa fa-chevron-<?php echo $collapseBox ? 'down' : 'up'; ?>"></i>
          </a>
        </li>
        <?php do_action('upstream_project_discussion_top_right'); ?>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <?php upstream_admin_display_messages(); ?>
    </div>
  </div>
</div>
<?php endif; ?>
