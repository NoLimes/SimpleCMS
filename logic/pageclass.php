<?php 
class page
{
     private $db;
 
     function __construct()
     {
         $this->db = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    if($this->db==false)
    {
      echo 'Blad';
    }
     }
 
     public function dataview($query)
     {
         $stmt = $this->db->prepare($query);
         $stmt->execute();
 
         if($stmt->rowCount()>0)
         {
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                   ?>
                   <div class="panel panel-default">
                   <div class="panel-heading">Author:<strong><?php echo $row['login']; ?></strong> <span  style="text-align:right;">             Date:<small><?php echo $row['czas']; ?></small></span></div>
                   <div class="panel-body"><div class="break"><?php echo $row['tresc']; ?></div></div>
                 </div>
                   <?php
                }
         }
         else
         {
                ?>
                <tr>
                <td>Nothing here...</td>
                </tr>
                <?php
         }
  
 }
 
 public function paging($query,$records_per_page)
 {
        $starting_position=0;
        if(isset($_GET["page_no"]))
        {
             $starting_position=($_GET["page_no"]-1)*$records_per_page;
        }
        $query2=$query." limit $starting_position,$records_per_page";
        return $query2;
 }
 
 public function paginglink($query,$records_per_page)
 {
  
        $self = $_SERVER['PHP_SELF'];
  
        $stmt = $this->db->prepare($query);
        $stmt->execute();
  
        $total_no_of_records = $stmt->rowCount();
  
        if($total_no_of_records > 0)
        {
            ?><tr><td colspan="3"><?php
            $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
            $current_page=1;
            if(isset($_GET["page_no"]))
            {
               $current_page=$_GET["page_no"];
            }
            if($current_page!=1)
            {
               $previous =$current_page-1;
               
               echo "<li class='visible-sm visible-md visible-lg'><a aria-label='Previous' href='".$self."?page_no=".$previous."'>&laquo;</a>";
            }
         
            for($i=1;$i<=$total_no_of_pages;$i++)
            {
            if($i==$current_page)
            {
                echo "<li class='active'><a href=".$self."?page_no=".$i.">".$i."</a></li>";
            }
            else
            {

                echo "<li><a href=".$self."?page_no=".$i.">".$i."</a></li>";
            }
   }
   if($current_page!=$total_no_of_pages)
   {
        $next=$current_page+1;
        echo "<li class='visible-sm visible-md visible-lg'><a aria-label='Next' href='".$self."?page_no=".$next."'>»</a></li>";
        
   }
   ?><?php
  }
 }
}
 ?>