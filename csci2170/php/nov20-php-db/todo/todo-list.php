<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A simple to-do list</title>
</head>
<body>
    <h1>A simple to-do list</h1>

    <section id="todo">
        <h2>Items to do</h2>
    </section>

    <hr>

    <section id="completed">
        <h2>Completed items</h2>
    </section>

    <script>
        const todoSection = document.querySelector("#todo");
        const completed = document.querySelector("#completed");
        const todoUl = document.createElement("ul");
        const completedUl = document.createElement("ul");

        fetch("get-list.php")
        .then(result => result.json())
        .then(data => {
            data.forEach(item => {
                if (item.done == 0) {
                    // console.log("NOT DONE!");
                    const li = document.createElement("li");
                    li.textContent = item.list_item;
                    todoUl.appendChild(li);
                } else {
                    // console.log("DONE!");
                    const li = document.createElement("li");
                    li.textContent = item.list_item;
                    completedUl.appendChild(li);
                }

                todoSection.appendChild(todoUl);
                completed.appendChild(completedUl);
            })
        })
        .catch(error => console.error(error));
    </script>
</body>
</html>