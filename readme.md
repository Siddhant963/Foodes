create database
create database foodes;

create table for db
CREATE TABLE foodes.Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each user
    Username VARCHAR(50) NOT NULL UNIQUE,  -- Unique username
    Password VARCHAR(255) NOT NULL,    -- Encrypted password
    Name VARCHAR(100) NOT NULL,            -- Full name of the user
    Address TEXT,                          -- Address (can be a large text field)
    Email VARCHAR(100) NOT NULL UNIQUE,    -- Unique email address
    PhoneNumber VARCHAR(15) NOT NULL UNIQUE, -- Unique phone number
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp of user creation
    UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Auto-update timestamp
);

CREATE TABLE foodes.Dishes (
    DishID INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each dish
    Name VARCHAR(100) NOT NULL,            -- Name of the dish
    Description TEXT,                      -- Description of the dish
    Type ENUM('Veg', 'Non-Veg') NOT NULL,  -- Type of the dish (Veg/Non-Veg)
    Price DECIMAL(10, 2) NOT NULL,         -- Price of the dish
    ImageURL VARCHAR(255),                 -- URL of the dish image
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp of record creation
    UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Auto-update timestamp
);

CREATE TABLE Orders (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,       -- Unique identifier for each order
    UserName VARCHAR(100) NOT NULL,               -- Name of the user who placed the order
    DishName VARCHAR(100) NOT NULL,               -- Name of the dish ordered
    Price DECIMAL(10, 2) NOT NULL,                -- Price of the ordered dish
    OrderDate timestamp DEFAULT current_timestamp ,          -- Date of the order
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp of order creation
);

CREATE TABLE Reviews (
    ReviewID INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each review
    UserName VARCHAR(100) NOT NULL,          -- Name of the user giving the review
    Review TEXT NOT NULL,                    -- Review text provided by the user
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp of when the review was created
);

when you use this website you have to setup database in mysql with the given querys

after that you have to create a user for add dishes username must be admin and another user for show the website 