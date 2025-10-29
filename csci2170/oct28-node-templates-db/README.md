# CSCI 2170: Intro to Server-Side Scripting

* Academic Term: Fall Semester 2025
* Lecture discussions: __Oct 28, 2025__
* Dr. Raghav Sampangi [[raghav@cs.dal.ca]](raghav@cs.dal.ca)

## Class topics

* Continuing our discussions with with core modules of __Node.js__
* Today, we will explore: `mysql` and revisit templating

## Things to note

* Remember, when using __Node.js modules__ like `nodemon` or `mysql`, there's a folder named `node_modules/` gets created with ALL the project dependency files.
* Create a file named `.gitignore` in your project folder, with one line entry `node_modules/` to ensure that these project dependencies are not uploaded to Git or other project versioning systems.
* This `.gitignore` file will ignore the specific files and/or folders from being uploaded as part of your repository and eventually people using or developing with your code, they can use `npm init` from the project folder to initialize the project with all the dependencies.

## Today's activities (submit these on Brightspace)

__Note__: For all these activities, you are only to create Node.js servers using only core modules (e.g., `http`, `fs`, `querystring`, `path`, `url`, `mysql`, etc.).

1. Create a simple to-do list using data from DB.
2. Use the steps written in `server.js`.

## Testing instructions

1. To execute the Node.js backend code (in `server.js`), run the following command from the `oct28-node-db` folder:

```js
> node server.js
```
