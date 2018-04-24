 <?php include "includes/header.php";?>
  

  
<!-- Grid -->
<div class="w3-row w3-padding w3-border">

<!-- Blog entries -->
<div class="w3-col l8 s12">

<!-- Blog entry -->
<div class="w3-container w3-white w3-margin w3-padding-large">
<div class="w3-center">
<?php            
$query = "SELECT * FROM posts";
$select_all_posts_query = mysqli_query($connection,$query);           


while ($row = mysqli_fetch_assoc($select_all_posts_query)) {

$post_id = $row['post_id'];  
$post_title = $row['post_title'];   
$post_author = $row['post_author'];  
$post_date = $row['post_date'];   
$post_image = $row['post_image']; 
$post_content = $row['post_content'];           
?>       
         
         
          
          
          
          
          <h3><a href="blog.php?p_id=<?php echo $post_id; ?>"> <?php echo $post_title ?></a></h3>
          <h5>Date: <span class="w3-opacity"><?php echo $post_date; ?></span></h5>
        </div>

        <div class="w3-justify">
          <a href="post.php?p_id=<?php echo $post_id; ?>">
          <img src="images/<?php echo $post_image; ?>"  style="width:80%" >
          <p><strong><?php echo $post_content; ?></strong> </p>
          <p></p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo3')"> <b>Author: <br> <?php echo $post_author;?></b><b>--Replies  </b> <span class="w3-tag w3-white">3</span></button></p>
          <p class="w3-clear"></p>
          
          
          
          
          <?php } ?>    
          
          
          
          <!-- Example of comment field -->
          <div id="demo3" style="display:none">
            <hr>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/girl_mountain.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Jane <span class="w3-opacity w3-medium">April 10, 2015, 7:22 PM</span></h4>
                <p>That was a great runway show! Thanks for everything.</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/boy.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>John <span class="w3-opacity w3-medium">April 8, 2015, 10:32 PM</span></h4>
                <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/girl_hood.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Anja <span class="w3-opacity w3-medium">April 7, 2015, 9:12 PM</span></h4>
                <p>Cant wait for the runway to start!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="images/syed.jpg" alt="Jane" style="width:100%" class="w3-grayscale">
        <div class="w3-container w3-black">
          <h4 style="color:yellow">SYED NAJAM</h4>
          <p>Iam an experienced full stack web developer who understands the synergy between great design and commercial effectiveness which shines through on every project i do .When it come to web development I love Front-End  Back-End and love exploring new technology Iam dependable and Creative A Good Team Player

</p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4 style="color:yellow" >POPULAR CATEGORIES</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
<!--IAM ADDING THE CATEGORIES PHP CODE HERE in the CATEGORIES SECTION -->
<?php         

$query = "SELECT * FROM categories";        
$select_all_categories_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_categories_query)){
$cat_title = $row['cat_title'];	
$cat_id = $row['cat_id'];	
echo "
          <li class='w3-padding-16'>
            <img src='/w3images/avatar_smoke.jpg' alt='Image' class='w3-left w3-margin-right w3-sepia' style='width:50px'>
            <span class='w3-large'><a href='category.php?category=$cat_id'></a>{$cat_title}</span>
            <br>
            <span></span>
          </li>";	

}
?>   
         
         
</ul>
</div>
<hr>

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4 style="color:yellow">Advertise</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
            <span class="w3-display-middle">Your AD Here</span>
          </div>
        </div>
      </div>
      <hr>

      <!-- Tags -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4 style="color:yellow">Tags</h4>
        </div>


<div class="w3-container w3-white">

<?php 
$query = "SELECT * FROM posts";        
$select_all_posts_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)){
$post_tags = $row['post_tags'];	

echo "<p>

<span class='w3-tag w3-black w3-margin-bottom'>{$post_tags}</span> <span class='w3-tag w3-light-grey w3-small w3-margin-bottom'>{$post_tags}</span> <span class='w3-tag w3-light-grey w3-small w3-margin-bottom'>{$post_tags}</span>";
}
?>           

</div>
</div>
<hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Inspiration Quotes</h4>
        </div>
        
        <?php 
          
          $query = "SELECT * FROM inspiration_quotes";
          $select_all_quotes = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($select_all_quotes)){
            $quotes = $row['inspiration_quotes']; 
          }
          
          ?>
        
        
         <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
           

            <h3 style="color:blue";><?php echo $quotes ?></h3>
          </div>
         
        
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Me</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
      <!-- Subscribe -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<?php include "includes/footer.php";?>