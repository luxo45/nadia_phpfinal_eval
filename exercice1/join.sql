//write the SQL query to display an article (id = 10) and its author using a join. 

SELECT * FROM articles
	JOIN users ON articles.id = users_name.articles_id
    WHERE articles.id = 10;
	
	