# Shared Responsibility Model

## Introduction to Shared Resonsibility Model 

The **Shared Responsibility Model** is a **cloud security framework** that defines the security obligations of the customer versa the Cloud Service Provider (CSP) e.g. AWS.

![Example of the AWS Shared Responsibility Model](/aws-certified-cloud-practitioner/assets/cus-aws-srm.jpg "Example of the AWS Shared Responsibility Model")

> Each CSP has their own variant of the Shared Responsibility Model but they are all generally the same.

There are also variants that are not just per CSP but also the ***type of cloud deployment model*** and/or ***the scope of cloud service category*** can result in specialized Shared Responsibility Models.

> i.e. *how much responsibility you have as a customer depends on the type of service you're using*.



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



## Types of Cloud Responsibilities

![Types of Cloud Responsibilities](/aws-certified-cloud-practitioner/assets/types-of-cloud-computing-respon.jpg "Types of Cloud Responsibilities")



## Shared Responsibility Model - Compute 

Let us take a look at **compute** as a comparison example of the Shared Responsibility Model. (i.e. here's how much you - the customer need to manage versus how much AWS manages - depending on **the type of service**).

### Infrastructure as a Service (IaaS)

#### Bare Metal (EC2 Bare Metal Instance) 

> you can configure the entire machine, with the exception of the physical machine itself.

Customer:
- The Host OS Configuration (the operating system that runs on the physical machine)
- Hypervisor 

AWS:
- Physical Machine

> Normally, the next step would be **Dedicated**, but dedicated doesn't exactly give you more responsibility, it gives you more assurance, because it's a single tenant virtual machine.

#### Virtual Machine (Elastic Cloud Compute - EC2)

Customer:
- The Guest OS Configuration (that means that you can choose the OS you want, whether it is Ubuntu, or Windows but that's not the actual OS running the machine, you're not going to have control have that, AWS will take care of that)
- Container Runtime (you can install Docker on this or any kind of container you want)

AWS:
- Hypervisor, Physical machine, Host OS

#### Containers (AWS Elastic Container Service - ECS)

Customer:
- Configuration of containers (you don't install the Guest OS, the Guest OS is already there for you)
- Deployment of Containers
- Storage of containeres

AWS: 
- The OS, The Hypervisor, Container Runtime

### Platform as a Service (PaaS)

#### Managed Platform (AWS Elastic Beanstalk)

Customer:
- Uploading your code
- Some configuration of environment
- Deployment strategies
- Configuration of associated services

AWS:
- Servers, OS, Networking, Storage, Security

### Software as a Service (SaaS)

#### Content Collaboration (Amazon WorkDocs)

> A competitor to Microsoft Sharepoint

Customer:
- Contents of documents
- Management of files
- Configuration of sharing access controls

AWS:
- Servers, OS, Networking, Storage, Security

### Function as a Service (FaaS)

#### Functions (AWS Lambda)

Customer:
- Upload your code

AWS:
- Deployment, Container Runtime, Networking, Storage, Security, Physical Machine, (basically everything)

![Types of Cloud Responsibilities](/aws-certified-cloud-practitioner/assets/quick-dia-srm.jpg "Types of Cloud Responsibilities")



## Shared Responsibility Model - Alternate

The **Shared Responsibility Model** is a simple visualization that helps determine what the customer is responsible for and what the CSP is responsible for related to AWS.

The customer is responsible for the data and the **configuration** of access controls that resides in AWS.

The customer is responsible or the **configuration** of cloud services and granting access to users via permissions.

CSP is generally responsible for the underlying Infrastructure.

**Responsibility ***in the*** cloud**

If you can configure or store it then you (the customer) are responsible for it.

**Responsibility ***of the*** cloud**

If you can not configure it then CSP is responsible for it.

![Alternate SRM](/aws-certified-cloud-practitioner/assets/alternate-srm.jpg "Alternate SRM")



## Shared Responsibility Model - Architecture

![Architecture SRM](/aws-certified-cloud-practitioner/assets/arc-srm.jpg "Architecture SRM")