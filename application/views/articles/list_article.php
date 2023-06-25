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
	  <h1 style="text-align: center;">List Artikel</h1>

<table>
  <thead>
    <tr>
      <th>Title</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($articles as $article) : ?>
      <tr>
        <td><a href="<?= site_url('article/'.$article->slug) ?>"><?= $article->title ? html_escape($article->title) : "No Title" ?></a></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

	
	<?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>