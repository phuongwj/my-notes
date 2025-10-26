# Understanding Docker: Dockerfile, Image, Container, and Docker Compose

- [Dockerfile](#dockerfile)
- [Image](#image)
- [Container](#container)
- [docker-compose.yaml](#docker-composeyaml)
- [Comparison between `Dockerfile` and `docker-compose.yaml`](#comparison-between-dockerfile-and-docker-composeyaml)

## Dockerfile
- A **Dockerfile** is a *text file with instructions* for building a Docker Image. It's essentially a script that tells Docker how to construct your image step by step.
- Key points:
    + Contains commands like `FROM`, `COP`, `RUN`, `CMD`, `EXPOSE`
    + Defines the base image, dependencies, files to include, and startup commands
    + Used to create custom images for your applications
- **"How to build a service"**



## Image
- An **image** is the built, portable snapshot of your application, it's a read-only template that contains everything needed to run an application, and can be shared or deployed anywhere.
    + Application Code
    + Runtime environment (like Node.js or Python);
    + System libraries and dependencies
    + Configuration files
- **"A recipe or blueprint. But it's just a static snapshot that doesn't execute anything by itself."**



## Container
- A **container** is a *running instance* of a Docker image. When you execute an image, it becomes a container.
- Key characteristics:
    + Isolated process running on your host machine
    + Has its own filesystem, networking, and process space
    + Can be started, stopped, restarted, or deleted
    + Multiple containers can run from the same image
- **"If an image is a recipe, a container is the actual cake you baked from it."**



## docker-compose.yaml
- A **docker-compose.yaml** file orchestrates multiple containers at once. It can specify which images or Dockerfiles to use, how containers communicate, what ports and volumes to expose, and other runtime configurations.
- **"How multiple services work together"**



## Comparison between `Dockerfile` and `docker-compose.yaml`

- The **Dockerfile** tells Docker **how to build the backend together**.
- The **docker-compose.yaml** tells Docker **how to run both frontend and backend together**, including port mapping, networking, and dependencies.


| Aspect | `Dockerfile` | `docker-compose.yaml` |
|--------|--------------|-----------------------|
| **Purpose**| Defines **how to build a single Docker image** (what goes inside a container). | Defines **how to run multiple containers together** and their relationships.|
| **Scope**  | One service or app (e.g. backend). | Multiple services (e.g. frontend + backend + database) |
| **Content**| Instructions like `FROM`, `COPY`, `RUN`, `CMD` to build the image. | Configurations like `build` (or image), `ports`, `volumes`, `environment variables`, `depends_on`, networks. |
| **Output** | A Docker image. | Running containers (from images), connected together. |
| **Usage**  | `docker build -t my-backend .` | `docker-compose up` (or `docker-compose up --build`) |
| **Focus**  | "How is this container made?" | "How do these containers work together?what 