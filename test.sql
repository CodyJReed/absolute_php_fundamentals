CREATE TABLE posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts (title, body) VALUES ('Post Two', 'This is Post Two.'), ('Post Three', 'This is Post Three.');