# Management and Developer Tools

- [AWS Application Programming Interface (API)](#aws-application-programming-interface-api)
    + [What is an Application Programming Interface (API)?](#what-is-an-application-programming-interface-api)

- [AWS API Follow Along](#aws-api-follow-along)

## AWS Application Programming Interface (API)

### What is an Application Programming Interface (API)?

- An API is software that allows two applications/services to talk to each other. The most common type of API is via HTTP/S requests.
- AWS API is an HTTP API and you can interact by sending HTTPS requests, using an application interacting with APIs like **Postman**.
- Example of what a request would be:

    ![Example of a AWS API Request](/aws-certified-cloud-practitioner/assets/api-request.jpg "Example of a AWS API Request")

    - Each AWS Services has its own **Service Endpoint** (i.e. it's the **monitoring.us-east-1.amazonaws.com** in the picture above) which you send requests.
    - And of course we can't call an API without authenticating. Therefore, to authorize, you will need to generate a **signed request** (i.e. it's the long bold text under "Authorization"), and so that's a process of making a separate request with your AWS credentials and get back a token.
    - You need to also provide an **ACTION** and accompanying **parameters** as the payload. 

- Rarely do users directly send HTTP requests directly to the AWS API. It's much easier to interact with the API via a variety of Developer Tools. 

![Example of services that we can interact with the API](/aws-certified-cloud-practitioner/assets/api-rare.jpg "Example of services that we can interact with the API")



## AWS API Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:14:37 to  **.