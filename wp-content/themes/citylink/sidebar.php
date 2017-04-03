<?php
/**
* The sidebar containing the main widget area
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Citylink
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

  <aside id="secondary" class="widget-area" role="complementary">
    <div class="col-xs-12 col-md-3">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
      <!-- Blog Sidebar -->
      <div class="event_sidebar">
        <!-- Search Post -->
        <div class="search_post">
          <h4>Search <span>Post</span></h4>
          <form action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Enter Keyword...">
              <button type="submit" class="btn btn-default hidden">Submit</button>
            </div>
          </form>
        </div>
        <!-- Latest Post -->
        <div class="latest_post">
          <h4>Recent <span>Post</span></h4>
          <div class="single_latest_post">
            <img src="img/news-img/blog-2.jpg" alt="">
            <a href="#">
              <h5>7 Quick Ways to Make a Great Event Successful</h5>
            </a>
            <p>25 min ago</p>
          </div>
          <div class="single_latest_post">
            <img src="img/news-img/blog-3.jpg" alt="">
            <a href="#">
              <h5>Science &amp; IT Fair Coming to Your University</h5>
            </a>
            <p>48 min ago</p>
          </div>
          <div class="single_latest_post">
            <img src="img/news-img/blog-4.jpg" alt="">
            <a href="#">
              <h5>How to Pick the Right Event Titles for Your Events</h5>
            </a>
            <p>55 min ago</p>
          </div>
        </div>
        <!-- Catagory -->
        <div class="catagory_section">
          <h4>Catagory</h4>
          <ul>
            <li><a href="#">- Business</a></li>
            <li><a href="#">- Education</a></li>
            <li><a href="#">- Tourist</a></li>
            <li><a href="#">- Workshop</a></li>
            <li><a href="#">- Sports</a></li>
            <li><a href="#">- Fine Arts</a></li>
          </ul>
        </div>
        <!-- Achives -->
        <div class="achive_section">
          <h4>Achives</h4>
          <ul>
            <li><a href="#">October - 2016</a></li>
            <li><a href="#">November - 2016</a></li>
            <li><a href="#">December - 2016</a></li>
            <li><a href="#">January - 2017</a></li>
            <li><a href="#">February - 2017</a></li>
            <li><a href="#">March - 2017</a></li>
          </ul>
        </div>
        <!-- tages -->
        <div class="tag_section">
          <h4>Tags <span>Cloud</span></h4>
          <ul>
            <li><a href="#">Event</a></li>
            <li><a href="#">Workshop</a></li>
            <li><a href="#">E-commerce</a></li>
            <li><a href="#">Web</a></li>
            <li><a href="#">Apps</a></li>
            <li><a href="#">Development</a></li>
          </ul>
        </div>
      </div>
    </div>
  </aside>
  <!-- #secondary -->