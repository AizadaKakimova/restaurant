<?session_start();?><form method="POST" action="comment.php">
                 <?php  
                
    $servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $name_db );
                  $sql="SELECT username FROM comments";
                  $result=$conn->query($sql);
                  if ($result->num_rows>0) {
                    while($row = $result->fetch_assoc()) {
                    $user=$row['username'];
                  ?>
                  <textarea style="display: none;" name="id"><?php echo $comment['id']; ?></textarea>
                  <textarea style="display: none;" name="username"><?php echo $comment['id']; ?></textarea>
                  <textarea style="display: none;" name="comment"><?php echo $comment['id']; ?></textarea>
                  <br>
                  <button type="submit" class="btn btn-primary" name="">Send</button>
                  <? 
                }}
                ?>
                </form>