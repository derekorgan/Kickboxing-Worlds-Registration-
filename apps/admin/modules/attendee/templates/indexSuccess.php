<?php use_helper('I18N', 'Date') ?>
<?php include_partial('attendee/assets') ?>

<div id="sf_admin_container">
    <h1><?php echo __('Attendee List', array(), 'messages') ?>&nbsp; &gt; &nbsp;<a style="color: green" href="<?php echo url_for('@excel') ?>">Export to Excel</a>  <a style="float: right" href="<?php echo url_for('@sf_guard_signout') ?>">&lt;&nbsp;Logout</a></h1>

  <?php include_partial('attendee/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('attendee/list_header', array('pager' => $pager)) ?>
  </div>



  <div id="sf_admin_content">
    <form action="<?php echo url_for('attendee_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('attendee/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('attendee/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('attendee/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('attendee/list_footer', array('pager' => $pager)) ?>
  </div>
</div>

  <div id="sf_admin_bar">
    <?php include_partial('attendee/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>