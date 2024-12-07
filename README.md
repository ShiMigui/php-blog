# PHP Blog

A lightweight and simple blog application built entirely with PHP, designed to run locally without a database. The project uses PHP classes such as `Post`, `Tag`, and the `Renderable` interface to manage and render content dynamically. 

## Features
- **No Database Required**: All data is managed locally using PHP objects and arrays, ensuring simplicity and ease of use.
- **OOP Architecture**: Built with clean object-oriented principles for better organization and maintainability.
- **Dynamic Functionality**: 
  - View all posts.
  - Search posts by keywords.
  - Display individual posts using a unique code.
- **Dockerized**: Easily deploy and run the application using Docker, without additional dependencies or complex setup.

## Getting Started

Run the project effortlessly using the Docker image hosted on Docker Hub:

### Run the Blog:
```bash
docker run -p 80:80 shimigui/php-blog
```

Alternatively, pull the image for later use:
```bash
docker pull shimigui/php-blog
```

## About the Project

This blog is ideal for understanding PHP fundamentals, as it showcases:
- Local data storage techniques.
- PHP scripting for content rendering.
- Clean separation of concerns with reusable classes and interfaces.

Get started now with the prebuilt Docker image available on [Docker Hub](https://hub.docker.com/r/shimigui/php-blog)!