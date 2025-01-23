<?php
header("Content-type: text/css");
?>

/* General Styling */
body {
    font-family: 'Roboto', Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #e3f2fd;
    color:rgb(0, 0, 0);
    line-height: 1.6;
}

/* Header */
h1, h2 {
    text-align: center;
    color:rgb(2, 92, 114);
    margin: 20px 0;
    text-transform: uppercase;
    font-weight: bold;
}

/* Form Styling */
form {
    text-align: center;
    margin: 20px auto;
    padding: 20px;
    background:rgb(195, 221, 241);
    max-width: 500px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    border: 2px solidrgb(0, 128, 233);
}

form input[type="text"],
form input[type="file"],
form button {
    display: block;
    width: 85%;
    margin: 15px auto;
    padding: 12px;
    border: 2px solid #42a5f5;
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}

form input[type="text"]:focus,
form input[type="file"]:focus {
    border-color: #1e88e5;
    outline: none;
    box-shadow: 0 0 8px rgba(33, 150, 243, 0.6);
}

form button {
    background-color: #1e88e5;
    color: #fff;
    border: none;
    cursor: pointer;
    font-weight: bold;
    text-transform: uppercase;
}

form button:hover {
    background-color: #0d47a1;
    transform: scale(1.05);
}

/* Gallery Styling */
.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
    padding: 30px;
}

.gallery-item {
    text-align: center;
    background: #ffffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 220px;
    overflow: hidden;
}

.gallery-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
}

.gallery-item img {
    max-width: 100%;
    height: 180px;
    object-fit: cover;
    border-bottom: 2px solid #90caf9;
    border-radius: 10px 10px 0 0;
}

.gallery-item p {
    padding: 10px;
    margin: 0;
    font-size: 16px;
    font-weight: bold;
    color: #1565c0;
}

.gallery-item a {
    display: inline-block;
    margin: 10px 0;
    padding: 8px 12px;
    color: #ffffff;
    background-color: #e53935;
    text-decoration: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.gallery-item a:hover {
    background-color: #b71c1c;
    transform: scale(1.1);
}

/* Empty Gallery Message */
.no-photos {
    text-align: center;
    font-size: 20px;
    color: #757575;
    margin: 30px;
    font-style: italic;
    font-weight: bold;
}
