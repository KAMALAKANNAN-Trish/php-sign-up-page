CREATE TABLE users (
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL, 
	pwd VARCHAR(32) NOT NULL, 
	email VARCHAR(100) NOT NULL, 
	created_at DATETIME NOT NULL DEFAULT CURRENT_TIME);

CREATE TABLE comments (
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(30) NOT NULL, 
	comment_text TEXT NOT NULL, 
	created_at DATETIME NOT NULL DEFAULT CURRENT_TIME, users_id INT(11), 
	FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
	);