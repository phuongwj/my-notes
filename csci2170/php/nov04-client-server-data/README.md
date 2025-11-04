# CSCI 2170: Intro to Server-Side Scripting

* Academic Term: Fall Semester 2025
* Lecture discussions: __Nov 04, 2025__
* Dr. Raghav Sampangi [[raghav@cs.dal.ca]](raghav@cs.dal.ca)

## Class topics

* Continuing server-side scripting with __PHP__
  * File IO for working with persistent data

## Examples and exercises

Try to independently work on them (if you feel comfortable with this content) - this is what you will submit on Brightspace:

### Problem 1 - Display quotes from file

__Your task:__ You are asked to implement a feature to read quotes given in a text file and display each quote in a paragraph, with a special CSS style class attached to each quote.

* Quotes are stored in the file (`content.txt`).

### Problem 2 - Process login information using PHP

__Your task:__ You are asked to implement a login page. Using data submitted through the HTML login form, validate a user's login information and redirect the user to the homepage with the name parameter set in the URL.

* Login data may be submitted either synchronously and asynchronously
* Login data is stored in the file (`users.csv`).

## Testing instructions

1. Download this folder into your localhost (i.e., folder named `htdocs` within XAMPP or similar folders named `public_html` or `www_root` depending on the local server installation).

2. Start the server (Apache Web Server in XAMPP) and then open `http://localhost` in your browser. Verify if this is showing the localhost dashboard or an empty file or list of files. If not, try selecting the option named `Go to Application` in the `Welcome` section within XAMPP (or the startup page of other apps). This should take you to the XAMPP dashboard.

3. Then, type in the name of this folder in the URL like this: `http://localhost/nov04-client-server-data` that should bring you to `index.php` that says `Welcome`.
