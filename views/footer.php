<?php
session_start();
?>
<div class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="mainPage.php">Book of Wisdom</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="quotes.php">Quotes</a></li>
				<li><a href="authors.php">Authors</a></li>
				<li><a href="topics.php">Topics</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">+<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="addQuote.php">Add quote</a></li>
						<li><a href="addAuthor.php">Add author</a></li>
						<li><a href="addTopic.php">Add topic</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">GET JSON<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../MY_API/getAllQuotes">all quotes</a></li>
						<li><a href="../MY_API/getAllAuthors">all authors</a></li>
						<li><a href="../MY_API/getAllTopics">all topics</a></li>
					</ul>
				</li>
			</ul>
			<div class="logout">
				<form action="../models/testreg.php">					
					<?php
		  			if (!empty($_SESSION['login']) && !empty($_SESSION['id'])) {
		  				$temp = $_SESSION['login'];
      					echo "Вы вошли на сайт, как ";
      					?><b style="font-size: 16px"><?=$temp?></b><?php echo ".";
       				} else {
       					header("Location: http://phil0s0pher.tk/index.php");
       				}
       				?>
					<img type="button" class="reloadBut"  src="../img/reload.png" onclick="javascript:location.reload(); return false;">
					<button  name="logout" class="btn btn-danger">Log out</button>
				</form>
			</div>
		</div>
	</div>
</div>
