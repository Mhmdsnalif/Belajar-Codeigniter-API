<!DOCTYPE html>
<html>
<head>
    <title>Web info movie dengan OMDb API</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">

    <style>

    .search-container {
        text-align: center;
        margin-top: 20px;
    }

    #search-input {
        padding: 8px 16px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ccc;
        margin-right: 4px;
        width: 30%;
    }

    #search-button {
        padding: 8px 16px;
        font-size: 16px;
        border-radius: 8px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    #search-button:hover {
        background-color: #0069d9;
    }

    .movie-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 20px;
    }

    .movie-container > div {
        width: 30%;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .movie-container img {
        max-width: 100%;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .movie-container h2 {
        font-size: 24px;
        color: #333;
        margin-top: 10px;
        text-align: center;
    }

    .movie-container p {
        font-size: 16px;
        color: #666;
        margin-top: 5px;
        text-align: center;
    }
    p{
        align: center;
    }

    </style>
</head>
<body>

    <header>
          <h1>Cyber Security ID</h1>
          <?php $this->load->view('_partials/navbar.php'); ?>

      </header>
    <h1 align="center" id="judul">Database movie dari OMDb API</h1>
    <div class="search-container">
        <form action="<?php echo site_url('movie/search'); ?>" method="post">
            <input type="text" name="searchValue" id="search-input" placeholder="masukkan kata kunci film...">
            <button type="submit" id="search-button">Search</button>
        </form>
    </div>
    <div id="movie-list" class="movie-container">
    
            <!-- <?php foreach ($movies as $movie) { ?> -->
                <div>
                    <img src="<?php echo $movie->Poster; ?>" alt="<?php echo $movie->Title; ?>">
                    <h2><?php echo $movie->Title; ?> (<?php echo $movie->Year; ?>)</h2>
                    <p>IMDb ID: <?php echo $movie->imdbID; ?></p>
                </div>
            <!-- <?php } ?> -->
    </div>

    
</body>
</html>
