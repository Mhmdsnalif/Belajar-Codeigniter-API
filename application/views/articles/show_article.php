<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('/assets/style.css'); ?>">
	<title>artikel</title>
	<style>
		footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
	  height: 10%
    }
	</style>
</head>
<body>
	
<header>
          <h1>Cyber Security ID</h1>
          <?php $this->load->view('_partials/navbar.php'); ?>

      </header>
	
	<article class="article">
		<h1 class="post-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h1>
		<div class="post-meta">
			Published at <?= $article->created_at ?>
		</div>
		<div class="post-body">
			<?= $article->content ?>
		</div>
	</article>

	<?php $this->load->view('_partials/footer.php'); ?>
	
</body>
</html>