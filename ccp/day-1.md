# day-1
before reading, i recommend you to switch to a light appearance, since it will make reading this easier.


## 1. Cloud Concepts


### What is Cloud Computing?

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


### The Evolution of Cloud Hosting

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
So you wouldn't have a submachine in there but you'd have a folder with permissions taht you could use, so you get to share the cost.
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

#### Tier-1 (Top Tier) 
Early to market, wide offering, strong synergies between services, well recognized in the industry 
- Amazon Web Services (AWS)
- Microsoft Azure
- Google Cloud Platform (GCP)
- Alibaba Cloud 

###