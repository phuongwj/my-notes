# day-1 / Cloud Concepts
before reading, i recommend you to switch to a lighter appearance, since it will make reading this easier.

## What is Cloud Computing?

Cloud is a network of remote servers around the world that store data, run applications, and power services, so you don't have to. Think of it as renting a storage unit, except it's online, more flexible, and can do a lot more than just store things. 

Cloud computing is all about accessing these resources over the internet (instead of a physical computer or server that you have to maintain yourself).

#### Metaphor before diving into On-Premise and Cloud Providers
Imagine that you’re opening a bakery. You’d need a physical location, ovens, ingredients and employees. That’s a huge investment! Now, let’s say there’s a bakery service that provides all of these essentials without you having to own any of them. You just “pay as you bake.” That’s the cloud in a nutshell.

Instead of investing in and maintaining a fleet of servers (which, by the way, take up tons of space, energy, and attention), you rent what you need, use it, and leave the maintenance to the cloud provider. This approach means you can “scale” (make or serve more) without additional investments, making your life much easier and your work far more flexible.

#### On-Premise 
- You own the servers
- You hire the IT people
- You pay or rent the real-estate
- You take all the risk

#### Cloud Providers
- Someone else owns the servers
- Someone else hires the IT people
- Someone else pays or rents the real-estate
- You are responsible for configuring cloud services and code, someone else takes care of the rest

#### Example
For instance, when you upload a photo to Instagram or stream a show on Netflix, you're accessing files that are stored in the cloud. Instagram and Netflix don't store all of that data on your phone or laptop - they rely on massive, secure cloud servers to hold it all.



## The Evolution of Cloud Hosting

Back then if you want to **host your website or web app**, you'd have to **get a dedicated server**.

Cloud hosting is a way to make websites and applications accessible over the internet using the cloud.

#### Dedicated Server 
**One physical machine** dedicated **to a single business running a single project**.

Runs a single web-app/site.
- **Pros:** High security
- **Cons:** Very expensive, high maintenance

#### Virtual Private Server (VPS)
**One physical machine** dedicated **to a single business** but then our machine is virtualized **into sub-machines**.

Runs multiple web-apps/sites.
- **Pros:** Better Utilization and Isolation of Resources 
- **Cons:** Still expensive

#### Shared Hosting
**One physical machine**, shared by **hundred of businesses**.

Relies on most tenants under-utilizing their resources.

So you wouldn't have a sub-machine in there but you'd have a folder with permissions taht you could use, so you get to share the cost.
- **Pros:** Very cheap
- **Cons:** Limited functionality, poor isolation

#### Cloud Hosting
**Multiple physical machines** that act as one system.

The system is abstracted into multiple **cloud services**.
- **Pros:** Flexible, scalable, secure, cost-effective, high configurability



### What is Amazon Web Services (AWS)?

A collection of Cloud Services that can be used together under a single unified API to build a lot of different kinds of workload. 
 
- Simple Queue Service (SQS)
- Simple Storage Service (S3)
- Elastic Compute Cloud (EC2)



### What is Cloud Service Provider (CSP)?

A Cloud Service Provider (CSP) is a company which 
- provides multiple cloud services e.g. tens to hundreds of services
- those Cloud Services **can be chained together** to create cloud architectures
- those Cloud Services are accessible **via Single Unified API** eg. AWS API
- those Cloud Services utilized **metered billing** based on suage e.g. per second, per hour
- those Cloud Services have rich monitoring built in eg. AWS CloudTrail 
- those Cloud Services have an Infrastructure as a Service (IaaS) offering, that means they have things like:
  + networking
  + compute
  + storage
  + databases
- those Cloud Services offers **automation** via Infrastructure as Code (IaC) 
  + which means you can write code to set everything up 

If a company offers multiple cloud services under a single UI but do not meet most of or all of these requirements, it would be referred to as a Cloud Platform e.g. Twilio, HashiCorp, Databricks. 

Differences between Cloud Service Provider and Cloud Platform if you're wondering:
- Cloud Service Provider: The company offering cloud services (AWS, Azure, GCP)
- Cloud Platform: The environment/tools provided to build and deploy apps



### Landscape of CSPs

**Tier-1 (Top Tier):**
Early to market, wide offering, strong synergies between services, well recognized in the industry.
- Amazon Web Services (AWS)
- Microsoft Azure
- Google Cloud Platform (GCP)
- Alibaba Cloud 

**Tier-2 (Mid Tier):**
Backed by well-known tech companies ,slow to innovate and turned to specialization.
- IBM Cloud
- Oracle Cloud
- Huawei Cloud
- Tencent Cloud

**Tier-3 (Light Tier):**
Virtual Private Servers (VPS) turned to offer core IaaS offering. Simple, cost-effective.
- Vultr
- Digital Ocean
- Akamai Connected Cloud (Linode)

**Tier-4 (Private Tier):**
Infrastructure as Service software edployed to run ni an organization's own private data center
- OpenStack (Rackspace)
- Apache CloudStack
- *Vmware vSphere



### Gartner Magic Quadrant for Cloud

**Magic Quadrant (MQ)** is a series of market research reports published by IT consulting firm Gartner that rely on proprietary qualitative data analysis methods to demonstrate market trends such as direction, maturity and participants. You might have to pay to access the report, it's not public.

![Gartner_mq_2023](/ccp/assets/gartner.png "Gartner diagram that summarizes all the information")



### Common Cloud Services

A cloud service provider **can have hundreds of cloud services** that are grouped into various types of services. The four most common types of cloud services (*the 4 core*) for Infrastructure as a Service (IaaS) would be:
- Compute 
  + Imagine having a virtual computer that can run application, programs and code.
- Networking
  + Imagine having virtual network defining internet connections or network isolations between services or outbound to the internet.
- Storage
  + Imagine having a virtual hard-drive that can store files.
- Databases
  + Imagine a virtual database for storing reporting data or a database for general purpose web-application. 

=> AWS has over **200+** cloud services. 



### AWS Technology Overview

CSPs that are IaaS will always have **4 core cloud service** offerings:
- **Compute:** **EC2** Virtual Machines
- **Storage:** **EBS** Virtual Hard Drives
- **Database:** **RDS** SQL databases
- **Networking and Content Delivery:** **VPC** Private Cloud Network
- etc.



### The Evolution of Computing

#### Dedicated
- A physical server wholly utilized by a single customer
- You have to guess your capacity
- You'll overpay for an underutlized server
- You can't vertical scale, you need a manual migration
- Replacing a server is very difficult
- Limited by your Host Operating system
- Multiple apps can result in conflicts in resource sharing
- You have a *guarantee of security, privacy, and full utility of underlying resources*.


#### Virtual Machines

A **virtual machine (VM)** is a software-based simulation of a physical computer. It allows you to run an operating system and applications just like you would on a real computer, but it's all happening inside another system.

**Example:** 
Let’s say your host machine runs Windows. You can create a VM that runs Ubuntu Linux on top of it. Inside that VM, you can write code, install software, and do everything you’d normally do on a Linux computer — all without leaving Windows.

**Analogy:**
Think of your host machine as a hotel building. Each virtual machine is like a guest room — it has its own bed (memory), bathroom (storage), and TV (CPU). The hypervisor is the hotel manager, making sure every guest room (VM) runs smoothly without interfering with the others.

**Metaphor:**
Lets say you have a completely overpowered computer with lots of RAM and lots of CPU cores and you have 4 people that need to use computers at the same time; you obviously need 4 monitors and 4 mice. You can divide the computer's resources to make 4 virtual machine. The 4 machines will operate independent of each other and work just like 4 separate computers.

- You can run multiple VMs on one machine
- **Hypervisor** is the software layer that lets you run the VMs
- A physical server shared by multiple customers
- You are to pay for a fraction of the server
- You'll overpay for an underutilized Virtual Machine
- You are limited by your Guest Operating System
- Multiple apps on a single Virtual Machine can result in conflicts in resource sharing
- Easy to to export or import images for migration
- Easy to Vertical or Horizontally scale


#### Containers

A container is a lightweight, portable, and isolated environment to run applications.

It packages your code, runtime, libraries, and dependencies together - so it runs the same everywhere: your computer, a server, or the cloud.

**Analogy:**
- A **physical server** is like a hotel building
- A **VM** is like renting a full apartment in that building
- **Containers** are like having organized toolboxes in your apartment - one for painting, one for fixing pipes, one for cooking
=> **Containers run inside VMs**
=> VMs give you a full (virtual) computer
=> Containers give you tiny, efficient app environments inside that computer

- Virtual Machine running multiple containers
- **Docker Deamon** is the name of the software layer that lets you run multiple containers
- You can maximize the utilize of the available capacity which is more cost-effective
- Your containers share the same underlying OS so containers are more efficient than multiple VMs
- Multiple apps can run side by side without being limited to the same OS requirements and will not cause conflicts during resource sharing


#### Functions
- Are managed VMs running managed containers
- Known as **Serverless Compute**
- You upload a piece of code, choose the amount of memory and duration
- You're only responsible for code and data, nothing else
- Very cost-effective, only pay for the time code is running, VMs only run when there is code to be executed
- Cold Starts is a side-effect of this setup



### Types of Cloud Computing

#### Software as a Service (SaaS) 
Designed for **Customers**. 

A product that is run and managed by the service provider.

**Idea:** Don't worry about how the service is maintained. It just works and remains available.

**Examples:**
- Salesforce
- Gmail
- Office 365 (Word, Excel, etc.)

#### Platform as a Service (PaaS)
Designed for **Developers**.

Focus on the deployment and management of your apps.

**Idea:** Don't worry about provisioning (means the activity of obtaining the equipment and resources you need for a particular activity), configuring or understanding the hardware or OS. 

**Examples:**
- Elastic Beanstalk
- Heroku
- Google App Engine

#### Infrastructure as a Service (IaaS)
Designed for **Administrators**

The basic building blocoks for Cloud IT. Provides access to networking features, computers and data storage space.

**Idea:** Don't worry about IT staff, data centers and hardware.

**Examples:**
- Microsoft Azure
- AWS
- Oracle Cloud



### Cloud Computing Deployment Models

#### Public Cloud
**Everything** (the workload or project) is built on the CSP.

Also known as: ***Cloud Native*** or ***Cloud First***.

Imagine renting shared spaces in a massive online “building,” like AWS (Amazon Web Services), Microsoft Azure, or Google Cloud. Here, anyone can rent space or resources, and it’s great for flexibility and cost efficiency.

#### Private Cloud
Everything built on company's data centers.

Also known as: ***On-Premise***.

Picture your own bakery setup where only your team has access. Companies set up private clouds for maximum control and privacy. Think of banks or government agencies, they often use private clouds for security reasons.

The cloud could be **Open-Stack**.

#### Hybrid Cloud
Using both **On-Premise** and a **Cloud Service Provider**

It’s like having a private room in a larger shared building, where you can access resources both privately and publicly, depending on your needs.

#### Cross-Cloud
Using **Multiple Cloud PRovders**.

Also known as: ***Multi-Cloud***.



### Cloud Computing Deployment Models Use Cases

**Cloud**

Fully utilize cloud computing.

For: Companies that are starting out today, or are small enoguh to make the leap from VPS to a CSP.
- Startups
- SaaS offerings
- New projects and companies 

**Hybrid**

Using both Cloud and On-Premise.

For: Organizations that started with their ow ndata center, can't fully move to cloud due to effort of migration or security compliance
- Banks
- FinTech, Investment Management
- Large Professional Service providers
- Legacy on-premise

**On-Premise**

Deploying resources on-premises, using virtualization and resource management tools, is sometimes called *private cloud*.

For: Organizatinos that cannot run on cloud due to strict regulatory compliance or the sheer size of their organization
- Public Sector e.g. Government
- Super Sensitive Data e.g. Hospital
- Large Enterprise with heavy regulation e.g. Insurance Companies