<script>
<?php
	$sql="select ID,categoryId,subject,subTitle from news order by categoryid asc, sortnum asc, id asc";
	$query=$this->db->query($sql);
	echo "var commentsAll = ".JSON_encode($query->result());
?>
</script>
<script>
	var nid=100;
	var arr=[];
	for(var i=0, len=commentsAll.length; i<len; i++){
		if(commentsAll[i].categoryId==nid){
			arr.push(commentsAll[i]);
		}
	}
	//alert(arr);
</script>
<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
</head>
<body>
  
<script id="movieTemplate" type="text/x-jquery-tmpl"> 
    <li><b>${subtitle}</b> (${categoryId})</li>
</script>

<ul id="movieList"></ul>

<script>
var movies = [
    { Name: "The Red Violin", ReleaseYear: "1998" },
    { Name: "Eyes Wide Shut", ReleaseYear: "1999" },
    { Name: "The Inheritance", ReleaseYear: "1976" }
];

/* Render the template with the movies data and insert
   the rendered HTML under the "movieList" element */
$( "#movieTemplate" ).tmpl( arr )
    .appendTo( "#movieList" );
</script>

</body>
</html>