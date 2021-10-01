<?php 
  require __DIR__ . '/connection.php';
  require __DIR__ . '/functions.php';

  ?>
   
   <!-- NEWS AREA -->

    <div class="news-container">
      <div class="news-latest-container">
        <div class="news-latest">Latest</div>
      </div>
      <div class="news-cards-container">
        <div class="news-cards-content">
          <?php
          foreach (pullNews($db2) as $key => $news) {
            
            $date = new DateTime($news['date']); 
            
            echo '<div class="news-card'. ($key+1) . '">';
            echo '<div class="img-container">';
            echo '<a href="#">';
            echo '<img src="' . $news['news_image'] . '" class="photo-hiring" alt="photo-hiring">';
            echo '</a>';
            echo '<div class="' . strtolower(str_replace(' ', '-', $news['category_name'])) . '">';
            echo '<a href="#" class="caption-link">' . $news['category_name'];
            echo '</a>';
            echo '</div>';    
            echo '</div>';
            echo '<article>';
            echo '<h3 class="news-title-container">';
            echo '<a href="#" class="' . strtolower(str_replace(' ', '-', $news['category_name'])) . '-title">' . $news['heading'] . '</a>';
            echo '</h3>';
            echo '<br>';      
            echo '<h6 class="news-text">' . $news['description'] . '</h6>';
            echo '<div class="btn ' . strtolower(str_replace(' ', '-', $news['category_name'])) . '-btn">';
            echo '<a href="#">Read more</a>';
            echo '</div>';  
            echo '<hr>';
            echo '<footer class="news-card-footer">';
            echo '<div style="text-align: left" class="photo-news">';
            echo '<img src="' . $news['profile_image'] . '" class="photo-news-1" alt="profile-image">';
            echo '</div>';   
            echo '<div class="author">';
            echo '<p class="posted-by">Posted by ' . $news['full_name'] . '</p>';
            echo '<p class="news-date">' . $date->format('jS F Y') . '</p>';
            echo '</div>';
            echo '</footer>';
            echo '</article>';
            echo '</div>';
          }
          ?>
        </div>
      </div>
    </div>

  

