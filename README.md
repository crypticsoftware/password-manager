# Cryptic Password Manager 
## A simple PHP and HTML password manager meant to host locally. 

Thanks for using our project! This is a basic proof-of-concept password manager built and maintaned by Cryptic Software. This password manager in particular uses PHP for the backend and HTML for the frontend. 

## How this works

Users can enter a website name, email, login, and password into the PHP and HTML password manager we provided, and it shows the saved passwords in a table.

The password manager comprises of a password viewer that shows the saved passwords and an HTML form for entering the password information. The form asks for the name of the website, an optional email address, a username, and a password. The password is saved in JSON format to a cache file by the PHP code when the user submits the form.

A PHP foreach loop is used to read the cache file and show the passwords in a table. The table has separate columns for the website name, email, username, and password. 

The form and table can optionally be styled with JavaScript and Bootstrap CSS in the password manager. The JavaScript is added using script elements at the end of the HTML body, and the Bootstrap CSS is added using a link element in the HTML head.

## How to setup

Put the index.php into the root directory of your website, then create a folder called "cache", in that folder you create a file called "passwords.json". All done! Information on the form will appear on the right of the page in a table.

## The Risks

As said before, this project is proof-of-concept and is not meant to be used in the real world. This website is meant to be used (if at all) locally due to it storing passwords on a file in the root directory (letting anyone view your passwords). There is also no login system.
