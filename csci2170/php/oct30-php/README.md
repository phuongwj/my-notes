# CSCI 2170: Intro to Server-Side Scripting

* Academic Term: Fall Semester 2025
* Lecture discussions: __Oct 30, 2025__
* Dr. Raghav Sampangi [[raghav@cs.dal.ca]](raghav@cs.dal.ca)

## Class topics

* Getting started with __PHP__

## Examples and exercises

Try to independently work on them (if you feel comfortable with this content) - this is what you will submit on Brightspace:

### Problem 1 - Create reusable templates

__Your task:__ Create reusable header and footer templates to be used in `index.php` and another file named `contact.php`, so that the structure and appearance of both files are very similar except for the main part. Store the templates in a folder named `templates/`.

### Problem 2 - Create a simple message submission form

__Your task:__ In `contact.php`, create a simple form that can be processed using another script named `process-form.php` stored within the folder named `admin/`. After the form is processed, the user must be redirected to `index.php`.

### Problem 3 - Change the year in the copyright statement

__Your task:__ In the page footer, make it so that the "Year" next to the copyright is automatically updated to the current year.

## Testing instructions

1. Download this folder into your localhost (i.e., folder named `htdocs` within XAMPP or similar folders named `public_html` or `www_root` depending on the local server installation).

2. Start the server (Apache Web Server in XAMPP) and then open `http://localhost` in your browser. Verify if this is showing the localhost dashboard or an empty file or list of files. If not, try selecting the option named `Go to Application` in the `Welcome` section within XAMPP (or the startup page of other apps). This should take you to the XAMPP dashboard.

3. Then, type in the name of this folder in the URL like this: `http://localhost/oct28-php-getting-started` that should bring you to `index.php` that says `Welcome`.
