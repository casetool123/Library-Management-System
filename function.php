    
<?php   
    function user_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$user_count = "";
		$query = "SELECT count(*) as user_count from users";
		$query_run = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
	}

	function book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$book_count = "";
		$query = "SELECT count(*) as book_count from books";
		$query_run = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($query_run)){
			$book_count = $row['book_count'];
		}
		return($book_count);
	}

	function category_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$category_count = "";
		$query = "SELECT count(*) as category_count from category";
		$query_run = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($query_run)){
			$category_count = $row['category_count'];
		}
		return($category_count);
	}

	function publisher_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$publisher_count = "";
		$query = "SELECT count(*) as publisher_count from publisher";
		$query_run = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($query_run)){
			$publisher_count = $row['publisher_count'];
		}
		return($publisher_count);
	}

	function issued_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$issued_book_count = "";
		$query = "SELECT count(*) as issued_book_count from issued_books";
		$query_run = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($query_run)){
			$issued_book_count = $row['issued_book_count'];
		}
		return($issued_book_count);
	}
?>