# Shared Responsibility Model

## Introduction to Shared Resonsibility Model 

The **Shared Responsibility Model** is a **cloud security framework** that defines the security obligations of the customer versa the Cloud Service Provider (CSP) e.g. AWS.

![Example of the AWS Shared Responsibility Model](/aws-certified-cloud-practitioner/assets/cus-aws-srm.jpg "Example of the AWS Shared Responsibility Model")

> Each CSP has their own variant of the Shared Responsibility Model but they are all generally the same.

There are also variants that are not just per CSP but also the ***type of cloud deployment model*** and/or ***the scope of cloud service category*** can result in specialized Shared Responsibility Models.



## AWS Shared Responsibility Model

There are 2 organizations that are responsible:
- Customer
- AWS 

### AWS

Responsible for:
- Hardware/Global Infrastructure:
    + Regions
    + Availability Zones
    + Edge Locations
    + Physical Security
- Software:
    + Compute
    + Storage
    + Database
    + Networking (we're talking about physically setting up the wires and also the routings, all kinds of stuffs there)

### Customer

Responsible for:
- Configuration of Managed Services or Third-Party Software:
    + Platforms
    + Applications
    + Identity and Access Management (IAM)
- Configuration of Virtual Infrastructure and Systems
    + Operating System
    + Network
    + Firewall
- Security Configuration of Data
    + Client-Side Data Encryption
    + Server-Side Encryption
    + Networking Traffic Protection
    + Customer Data

![Big diagram of the Customer and AWS Shared Responsibility Model](/aws-certified-cloud-practitioner/assets/cus-aws-big-srm.jpg "Big diagram of the Customer and AWS Shared Responsibility Mode")

The diagram above can also be brought down to this kind of diagram

![Small diagram of the Customer and AWS Shared Responsibility Model](/aws-certified-cloud-practitioner/assets/cus-aws-small-srm.jpg "Small diagram of the Customer and AWS Shared Responsibility Mode")

- ***IN:*** Customers are responsible for Security **in** the Cloud.
- ***OF:*** AWS is responsible for Security **of** the Cloud.

> These IN and OF are very important for the exam. So you should know the differences between these concepts. 