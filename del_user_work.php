
<html>
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Библиотека</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="bg">
			<div id="outer">
				<div id="header">
					<div id="logo">
						<h1>
							<a href="index.html">Библиотека</a>
						</h1>
					</div>
					<div id="nav">
						<ul>
							<li>
								<a href="#">Главная</a>
							</li>
							<li>
								<a href="Books.html">Книги</a>
							</li>
							<li>
								<a href="Contacts.html">Контакты</a>
							</li>
							<li class="first active">
								<a href="reg.html">Авторизация</a>
							</li>
						</ul>
						<br class="clear" />
					</div>
				</div>
				<div id="banner">
					<img src="images/11.jpg" width="1120" height="200" alt="" />
				</div>
				<div id="main">
					
					<div id="content">
						<div id="box1">

							<?php
							require_once("MysqliClass.php");
							$myconnect = MysqliClass::createDB();

							$id = $_REQUEST['id'];

							$m = $myconnect -> delete_from_table("`User`", $id);
							echo "<h2>Пользователь с ID=".$id." успешно удален!</h2>";

							?>
							
							
						</div>
						<br class="clear" />
					</div>
					<br class="clear" />
				</div>
				<div id="footer">
					<div id="footerSidebar">
						<h3>
							Навигация по библиотеке
						</h3>
						<ul class="linkedList">
							<li class="first">
								<a href="Books.html">Книги</a>
							</li>
							<li>
								<a href="Contacts.html">Контакты</a>
							</li>
							<li class="last">
								<a href="reg.html">Авторизация</a>
							</li>
						</ul>
					</div>
					<div id="footerContent">
						
						<p>
							Наша библиотека в первую очередь является добровольным проектом, который призван помочь людям в поиске интересующих книг. Поэтому если есть возможность, а главное желание, то мы будем вовсе не против ваших пожертвований.
						</p>
					</div>
					<br class="clear" />
				</div>
			</div>
			
		</div>
    </body>
</html>
