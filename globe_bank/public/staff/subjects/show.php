<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id =isset($_GET['id']) ? $_GET['id'] : '1'; 这个是7.0版本之前的用法
$id = $_GET['id'] ?? '1';

?>
<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

   <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">
   Subject ID: <?php echo h($id); ?>

  </div>
</div>

<a href="show.php?name=<?php u('John Doe'); ?>">Link</a><br />
<a href="show.php?company=<?php echo u('Widget&More'); ?>">Link</a><br />
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br />