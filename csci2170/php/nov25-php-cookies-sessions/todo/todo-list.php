<?php
/* 
 * CSCI 2170: Intro to Server-Side Scripting
 * Example from lecture discussion on Nov 20, 2025
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A simple to-do list</title>
</head>
<body>
    <h1>A simple to-do list</h1>

    <!--
        GOAL (25 Nov 2025):
        Make it possible to mark a to-do list item as "complete" or "not complete"
        and move it to the corresponding list section.

        SOLUTION STEPS:
        (a) Create a button or something to mark items complete or not
        (b) Add event listeners to the buttons to detect click and process request
        (c) Update entry in DB table to mark item as complete or not
        (d) Server sends acknowledge of DB update to client
    -->

    <section>
        <h2>Items to do</h2>
        <div id="todo"></div>
    </section>

    <hr>

    <section>
        <h2>Completed items</h2>
        <div id="completed"></div>
    </section>

    <script>
        function getLists() {
            // (1) Select sections and containers into constants/variables
            const todoSection = document.querySelector("#todo");
            const completed = document.querySelector("#completed");
            const todoUl = document.createElement("ul");
            const completedUl = document.createElement("ul");

            todoSection.textContent = "";
            completed.textContent = "";

            // (2) From get-list.php, read the list asynchronously
            fetch ("get-list.php")
            .then (result => result.json())
            .then (data => {

                // (3) Data is received as an array of objects
                //      so iterate over each item in the array
                //      and depending on whether the list item is
                //      marked as 'done' or 'not done' (i.e., 1 or 0 in DB),
                //      display in corresponding unordered list

                data.forEach( item => {
                    if (item.done == 0) {
                        // console.log("not done!");
                        const li = document.createElement("li");
                        li.textContent = item.list_item;

                        const button = document.createElement("button");
                        button.textContent = "mark as complete";
                        button.id = `btn-${item.id}`;

                        button.addEventListener("click", () => {
                            // send a request to the DB to update the item
                            updateItem(item.id);
                        })

                        li.appendChild(button);
                        todoUl.appendChild(li);
                    } else {
                        // console.log("done!");
                        const li = document.createElement("li");
                        li.textContent = item.list_item;

                        const button = document.createElement("button");
                        button.textContent = "mark as not-complete";
                        button.id = `btn-${item.id}`;

                        button.addEventListener("click", () => {
                            // send a request to the DB to update the item
                            updateItem(item.id);
                        })

                        li.appendChild(button);
                        completedUl.appendChild(li);
                    }
                    todoSection.appendChild(todoUl);
                    completed.appendChild(completedUl);
                });
            })
            .catch (err => console.error(err));
        }

        getLists();

        async function updateItem(itemId) {
            // We can either do this or the POST method to send the data to the server.
            // This is essentially doing the GET method?
            let result = await fetch(`update-list.php?id=${itemId}`); 
            let data = await result.text();
            console.log(data);
            getLists();
        }
    </script>
</body>
</html>