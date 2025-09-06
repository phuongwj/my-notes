# Understanding Docker: Dockerfile, Image, Container, and Docker Compose

- [Dockerfile](#dockerfile)
- [Image](#image)
- [Container](#container)
- [docker-compose.yaml](#docker-composeyaml)
- [Comparison between `Dockerfile` and `docker-compose.yaml`](#comparison-between-dockerfile-and-docker-composeyaml)

## Dockerfile
- A **Dockerfile** is a set of instructions that tells Docker how to build an **image** - it defines the environment, dependencies, files, and default commansd for an application.
- **"How to build a service"**



## Image
- An **image** is the built, portable snapshot of your application, it's read-only and can be shared or deployed anywhere.
- **"The built service"**



## Container
- A **container** is a running instance of that image - it executes your application in isolation with its own **filesystem, processes, and network**.
- **"The running service"**



## docker-compose.yaml
- A **docker-compose.yaml** file orchestrates multiple containers at once. It can specify which images or Dockerfiles ot use, how containers communicate, what ports and volumes to expose, and other runtime configurations.
- **"How multiple services work togeher"**



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