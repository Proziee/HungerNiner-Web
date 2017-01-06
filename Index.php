<?php
        $server = 'localhost';
        $username='proziee';
        $password='';
        $database='c9';
        $table = 'event';
        $page=1;
        $port = 3306;
        $results_per_page = 20;
        $conn = mysqli_connect($server,$username,$password,$database,$port) or die(mysql_error());

        if (isset($_GET["page"])) 
        { 
            $page  = $_GET["page"]; 
        } else 
        {
            $page=1;
        }; 

        $start_from = ($page-1) * $results_per_page;
        $sql = "SELECT event_id, event_name, event_room, event_building, start_date, end_date, start_time, end_time FROM ".$table." ORDER BY event_id, event_building LIMIT ".$start_from.", ".$results_per_page;
        $result = mysqli_query($conn, $sql);
        
        
        echo "<a href='https://hungerniner-proziee.c9users.io/Map.html'>Home</a> <br><br>";
        
        echo "<table class='eventTable' border='1'>
        <tr>
        <th>Delete Entry</th>
        <th>Database EID</th>
        <!--<th>Event Number</th> -->
        <th>Event Name</th>
        <th>Event Room Number</th>
        <th>Event Building</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Start Time (24HR)</th>
        <th>End Time (24HR)</th>
        </tr>";
        
        //$x=$start_from;
        
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <tr>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="delete" value="<?php echo $row['event_id'];?>">
                    <input type="submit" name="deleteButton" value="Delete">
                </form>
            </td>
            <td><?php echo $row["event_id"];?></td>
            <!--<td><?php echo $x;?></td>-->
            <td><?php echo $row["event_name"];?></td>
            <td><?php echo $row["event_room"];?></td>
            <td><?php echo $row["event_building"];?></td>
            <td><?php echo $row["start_date"];?></td>
            <td><?php echo $row["end_date"];?></td>
            <td><?php echo $row["start_time"];?></td>
            <td><?php echo $row["end_time"];?></td>
        </tr>
<?php
        //$x++;
        }
        echo "</table>";
        
        $sql = "SELECT COUNT(event_building) AS total FROM ".$table;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_pages = ceil($row["total"] / $results_per_page);
        
        for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='Index.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
        } 
        ?>
        
        <footer>Copyright 2016 &copy;</footer>
        <?php
        mysqli_close($conn);
?>