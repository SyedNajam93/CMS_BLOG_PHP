
<?php include "includes/header.php";?>  



 <!---------------------------PLACING THE POST CODE HERE ------------------------>   
<!--//THIS IS THE CODE FOR THE PAGINATION/////////////////

<?php  
        
$per_page = 5;


if(isset($_GET['page'])) {


$page = $_GET['page'];

} else {


$page = "";
}


if($page == "" || $page == 1) {

$page_1 = 0;

} else {

$page_1 = ($page * $per_page) - $per_page;

}


$post_query_count = "SELECT  * FROM posts";

$find_count = mysqli_query($connection,$post_query_count);
$count = mysqli_num_rows($find_count);  
$count = ceil($count/2);        
       
//////////////////////////////////////////////////////            
        
        
        
        
$query = "SELECT * FROM posts LIMIT $page_1, 4";
$select_all_posts_query = mysqli_query($connection,$query);           


while ($row = mysqli_fetch_assoc($select_all_posts_query)) {

$post_id = $row['post_id'];  
$post_title = $row['post_title'];   
$post_author = $row['post_author'];  
$post_date = $row['post_date'];   
$post_image = $row['post_image']; 
$post_content = $row['post_content'];           
$post_comment_count = $row['post_comment_count'];
?>                               
    
<div class="bg-content">       
  <!--  content  -->      
   <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
        <article class="span8">
         <div class="inner-1">         
          <ul class="list-blog">
            <li>  
            <h1><a href="post.php?p_id=<?php echo $post_id; ?>"> <?php echo $post_title ?></a></h1>     
            <time datetime="2012-11-09" class="date-1"><i class="icon-calendar icon-white"></i><h2><?php echo $post_date; ?></h2></time>
            <div class="name-author"><i class="icon-user icon-white"></i> <a href="#"><?php echo $post_author; ?></a></div>
            <a href="#" class="comments"><i class="icon-comment icon-white"></i> <?php echo $post_comment_count; ?></a> 
            <div class="clear"></div>            
             
               <img width="500"  alt="" src="images/<?php echo $post_image; ?>">                               
              <h1 style="color:red;" ><?php echo $post_content; ?></h1>
              <h1><a href="#" class="btn btn-1">Read More</a></h1>          
            </li>  
         
          </ul>
          </div>  
</div>
 </div>
       </div>
            
<?php } ?> 

<!--WE WILL BE ADDING PAGINATION HERE FOR THE BLOG PAGE -------------------------->
<ul class="pager">  
<?php   
for($i=1;  $i<= $count; $i++){
echo "<li><a href='blog.php?page={$i}'>{$i}</a></li>";
}
?>
</ul>

<!----------------------- footer---------------------------------------------  -->
<?php echo include("includes/footer.php");?>