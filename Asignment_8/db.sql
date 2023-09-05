CREATE DATABASE IF NOT EXISTS book_catalog;
USE book_catalog;

CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    publication_year INT NOT NULL
);

INSERT INTO books (title, author, publication_year) VALUES
    ('The Great Gatsby', 'F. Scott Fitzgerald', 1925),
    ('To Kill a Mockingbird', 'Harper Lee', 1960),
    ('1984', 'George Orwell', 1949),
    ('Pride and Prejudice', 'Jane Austen', 1813),
    ('The Catcher in the Rye', 'J.D. Salinger', 1951),
    ('The Hobbit', 'J.R.R. Tolkien', 1937),
    ('Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 1997),
    ('The Lord of the Rings', 'J.R.R. Tolkien', 1954),
    ('War and Peace', 'Leo Tolstoy', 1869),
    ('The Alchemist', 'Paulo Coelho', 1988);
