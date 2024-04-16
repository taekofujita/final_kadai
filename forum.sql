CREATE TABLE Comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    text TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Replies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    comment_id INT,
    user_id INT,
    text TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (comment_id) REFERENCES Comments(id)
);