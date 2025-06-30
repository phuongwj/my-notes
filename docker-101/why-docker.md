# Docker basically.

## Why Docker?

Say that you're building a web app with your friends, but then suddenly,

"hey it's not working for me..."
"idk bout you, but it works on my machine???"

So this is an issue that has happened or WILL happen to every programmer out there. To prevent this, we have something called **docker**.

You should know Docker because it makes **development & deployment** easier. It's basically a tool that helps you develop, ship, and run applications **within lightweight containers**.

## What makes Docker so good?

Docker allows us to package up our code. 

Imagine Lunchables, say we call it Docker Lunchables, it contains:
- Your code
- Code dependencies (frameworks/libraries, databases, caching, etc. i.e. nodejs or python)
- Environment settings
- Everythign else you need to run your code

Then now you have that lunchable, you can bring that to anywhere, to anyone, you can also let your friend have it. No matter **where** or **who** uses it, **IT WORKS**.

So basically Docker makes it easily to run your code on any computer because it has everything you need to run the code. No need to install anything, Docker does it all for you.

## Docker concepts

There are **two very important** concepts on Docker that you need to know, because everything revolves around these two concepts:
- Images 
- Containers

### Docker Images

You can think of **Images** like **Recipes**, it contains all the ingredients and instructions. This mean that a **Docker Image** contains:
- Technologies we need 
- Runtimes
- The tools/instructions to run our code

Now we need something to actually run the code, which is the **Container**

### Docker Container

A container is like an actual **Meal**, it's what gets made from the recipes. 

What's cool about containers is that with **1 image** you can create **multiple container instances**. What does this mean?

This means that as long as you have the **Docker Image**, you can create a **container** and run the code. 