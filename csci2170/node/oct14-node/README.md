# CSCI 2170: Intro to Server-Side Scripting

* Academic Term: Fall Semester 2025
* Lecture discussions: __Oct 14, 2025__
* Dr. Raghav Sampangi [[raghav@cs.dal.ca]](raghav@cs.dal.ca)

## Class topics

* Continuing our discussions with with core modules of __Node.js__

## Today's activities (submit these on Brightspace)

__Note__: For all these activities, you are only to create Node.js servers using only core modules (e.g., `http`, `fs`, `querystring`, `path`, `url`, etc.).

0. What is the difference between using the synchronous (blocking) file read function and the asynchronous (non-blocking) file read function?

1. Create a simple Node.js server that responds to a `GET` request with a query string (e.g., `?course=2170`).

2. Create a simple Node.js server that extends your work for Q1 above and responds with an HTML file that is customized based on the query string.

3. Create a simple Node.js server that responds to a POST request (with empty request body), with customized response based on whether the request method is GET or POST.

## Testing instructions

1. To execute the Node.js backend code (in `server.js`), run the following command from the `oct14-node` folder:

```js
> node server.js
```
