
<center>
    <div class="card grey lighten-3" style="float:left;border:1px solid black;margin:20px;margin-left:50px;width:400px;height:230px;">
                            
    <div class="card-content">
		<li><?php echo "BookName: ".$r['bookname']; ?></li>
		<li><?php echo "AuthorName: ".$r['authorname']; ?></li>
		<li><?php echo "Department: ".$r['deptname']; ?></li>
		<li><?php echo "Semester: ".$r['sem']; ?></li>
		<li><?php echo "Edition: ".$r['edition']; ?></li>
		<li><?php echo "Qauntity: ".$r['qauntity']; ?></li>	
			<input class="btn btn-info light blue"  type="submit" name=<?php echo $r['bookid'] ?> value="Request" />
	</div>
                            
    </div>
</center>