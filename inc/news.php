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


          <!-- NEWS CARD 1 -->

          <!-- <div class="news-card news-card-1">
            <div class="img-container">
              <a href="https://www.netmatters.co.uk/web-project-manager">
                <img src="img/hiring.jpg" class="photo-hiring" alt="photo-hiring">
              </a>
              <div class="image-caption-1">
                <a href="https://www.netmatters.co.uk/our-careers/web-design" class="caption-link">CAREERS
                </a>
              </div>    
            </div>
            <article>
              <h3 class="news-1-title">
                <a href="https://www.netmatters.co.uk/web-project-manager" class="news-1-title">Web Project Manager
                </a>
              </h3>
              <br>      
              <h6 class="news-text">Salary Ra...</h6>
              <div class="btn btn-news-card-1">
                <a href="https://www.netmatters.co.uk/web-project-manager">Read more
                </a>
              </div>  
              <hr>
              <footer class="news-card-footer">
                <div style="text-align: left" class="photo-news">
                  <img src="img/tom-lancaster-61K1.jpg" class="photo-news-1" alt="tom-lancaster-photo">
                </div>   
                <div class="author">
                  <p class="posted-by">Posted by Tom Lancaster</p>
                  <p class="news-date">23rd April 2021</p>
                </div>
              </footer>
            </article>
          </div> -->

          <?php
          foreach (pullNews($db2) as $key => $news) {
            
            $date = new DateTime($news['date']);
            
            echo '<div class="news-card">';
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
          <!-- NEWS CARD 2 -->
          


















          <!-- <div class="news-card news-card-2">
            <div class="img-container">
              <a href="https://www.netmatters.co.uk/news/rob-becomes-a-netmatters-director">
                <img src="https://www.netmatters.co.uk/uploads/article/2405/rob-becomes-a-JUTp.jpg" class="photo-rob" alt="photo-rob">
              </a>
              <div class="image-caption-2">
                <a href="https://www.netmatters.co.uk/news/it-support" class="caption-link">NEWS
                </a>
              </div>  
            </div>    
            <article> 
              <h3 class="news-2-title">
                <a href="https://www.netmatters.co.uk/news/rob-becomes-a-netmatters-director" class="news-2-title">Rob Becomes a Netmatters Director
                </a>
              </h3>
              <br>
              <h6 class="news-text">Netmatters is constantly evolving and day-by-day it continues to grow in every aspect. Despit...</h6>
              <div class="btn btn-news-card-2">
                <a href="https://www.netmatters.co.uk/news/rob-becomes-a-netmatters-director">Read more
                </a>
              </div>       
              <hr>
              <footer class="news-card-footer">
                <div style="text-align: left" class="photo-news">
                  <img src="img/netmatters-ltd-VXAv.jpg" class="photo-news-1" alt="netmatters-logo">
                </div>   
                <div class="author">
                  <p class="posted-by">Posted by Netmatters Ltd</p>
                  <p class="news-date">21st April 2021</p>
                </div>        
              </footer>
            </article>
          </div> -->


          <!-- NEWS CARD 3 -->

          <!-- <div class="news-card news-card-3">
            <div class="img-container">
              <a href="https://www.netmatters.co.uk/drowning-in-spreadsheets-a-business-system-may-be-the-answer">
                <img src="https://www.netmatters.co.uk/uploads/article/2399/drowning-in-spreadsheets-rGjA.jpg" class="photo-hand" alt="photo-hand">
              </a>
              <div class="image-caption-3">
                <a href="https://www.netmatters.co.uk/news/it-support" class="caption-link">NEWS
                </a>
              </div>   
            </div> 
            <article>
              <h3 class="news-3-title">
                <a href="https://www.netmatters.co.uk/drowning-in-spreadsheets-a-business-system-may-be-the-answer" class="news-3-title">Drowning in Spreadsheets? A ...
                </a>
              </h3>
              <br>
              <h6 class="news-text">If like many business owners you find yourself creating large numbers of spreadsheets to keep...
              </h6>
              <div class="btn btn-news-card-3">
                <a href="https://www.netmatters.co.uk/drowning-in-spreadsheets-a-business-system-may-be-the-answer">Read more
                </a>
              </div>  
              <hr>
              <footer class="news-card-footer">
                <div style="text-align: left" class="photo-news">
                  <img src="img/james-gulliver-rgmz.jpg" class="photo-news-1" alt="james-gulliver-photo">
                </div>
                <div class="author">
                  <p class="posted-by">Posted by James Gulliver</p>
                  <p class="news-date">20th April 2021</p>
                </div>              
              </footer>
            </article>
          </div> -->
        </div>
      </div>
    </div>

  

