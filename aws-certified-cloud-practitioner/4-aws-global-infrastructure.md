# AWS Global Infrastructure

- [AWS Global Infrastructure Overview](#aws-global-infrastructure-overview)
  + [What is the AWS Global Infrastructure?](#what-is-the-aws-global-infrastructure)

- [AWS Global Infrastructure Follow Along](#aws-global-infrastructure-follow-along)

- [Regions](#regions)

- [Regions vs Global Services](#regions-vs-global-services)
  + [Regional Services](#regional-services)
  + [Global Services](#global-services)

- [Availability Zones (AZs)](#availability-zones-azs)
  + [Summary Table for clearer view](#summary-table-for-clearer-view)
  + [Visualization Representation](#visualization-representation)

- [Selecting Regions and AZs Follow Along](#selecting-regions-and-azs-follow-along)

- [Fault Tolerance](#fault-tolerance)
  + [What is a fault domain?](#what-is-a-fault-domain)
  + [What is a fault level?](#what-is-a-fault-level)
  + [Failure Zone](#failure-zone)
  + [Multi-AZ for High Availability](#multi-az-for-high-availability)

- [AWS Global Network](#aws-global-network)
  + [Edge Locations](#edge-locations)
    + [On ramps](#on-ramps)
    + [Off ramp](#off-ramps)
    + [VPC Endpoints](#vpc-endpoints)

- [Points of Presence (PoP)](#points-of-presence-pop)
  + [Points of Presence (PoP)](#points-of-presence-pop-1)
  + [AWS Point of Presence](#aws-point-of-presence)
  + [PoP resources are](#pop-resources-are)
    + [Edge Locations](#edge-locations)
    + [Regional Edge Locations](#regional-edge-locations)

- [Tier 1](#tier-1)

- [AWS Service using PoPs](#aws-services-using-pops)
  + [Amazon Cloudfront](#amazon-cloudfront)
  + [Amazon S3 Transfer Acceleration](#amazon-s3-transfer-acceleration)
  + [AWS Global Accelerator](#aws-global-accelerator)

- [AWS Direct Connect](#aws-direct-connect)

- [Direct Connect Locations](#direct-connect-locations)

- [AWS Local Zones](#aws-local-zones)

- [Wavelength Zones](#wavelength-zones)



## AWS Global Infrastructure Overview

### What is the AWS Global Infrastructure?

The AWS Global Infrastructure is **globally distributed hardware and datacenters** that *are physically networked together* to act as one large resource for the end customer. 

The AWS Global Infrastructure is made up of the following resources:
- **32** Launched Regions
- **102** Availability Zones
- **105** Direct Connection Locations
- **550+** Points of Presence (aka POPS)
- **35** Local Zone
- **29** Wavelength Zones

AWS has **millions** of active customers and **ten of thousands** of partners globally.



## AWS Global Infrastructure Follow Along 

You can check the link below that shows the global infrastructure and anything related to it.
https://aws.amazon.com/about-aws/global-infrastructure/

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **2:07:50 to 2:10:35**.



## Regions

> Update 08/16/2025: It seems like AWS has updated their UI again. Regardless the contents should be somewhat the same.

Regions are **geographically distinct locations** consisting of one or more Availability Zones. 

![AWS Regions](/aws-certified-cloud-practitioner/assets/regions.jpg "AWS Regions")

Every region is **physically isolated** from and independent of every other region in terms of **location, power, water supply**. 

- Each region generally has **three** Availability Zones.
  + Some new users are limited to two e.g. US-West

- New services almost always become available first in **US-EAST**.
- Not all AWS Services are available in all regions.
- All your billing information appears in **US-EAST-1** (North Virginia).
- The cost of AWS services vary per region.

When you choose a region there are four factors you need to consider:
1. What Regulatory Compliance does this region meet?
2. What is the cost of AWS services in this region?
3. What AWS services are available in this region?
4. What is the distance or latency to my end-users?



## Regions vs Global Services 

### Regional Services

AWS **scopes** their AWS Management Console on a selected Region. (in simpler terms, it basically means that services that are deployed and available in specific **regions** or **data centers**)

Scope: Their operations, resources, and data are **limited to a particular geographic area**.

Example:
- Amazon EC2 instances (your virtual machines are deployed in specific regions).
- AWS S3 (although it's global in namespace, the actual data is stored in the selected region).

This will determine where an AWS Services will be launched and what will be seen within an AWS Service's console.

![AWS Regional Services](/aws-certified-cloud-practitioner/assets/regional-services.jpg "AWS Regional Services")

You generally don't explicitly set the Region for a service at the time of creation.


### Global Services

Some AWS Services operate across multiple regions and the region will be fixed to "Global" e.g. Amazon S3, CloudFront, Route53, IAM. (in simpler terms, services that are **not bound to any single region** and operate globally).

Scope: Can be accessed and used from **any region**, often with **central management**.

Example:
- AWS IAM
- Amazon CloudFront

What this means is that if you search up CloudFront, and go into the CloudFront console, it will just say "Global", and you can't switch out of that.

![Example of an AWS Global Services](/aws-certified-cloud-practitioner/assets/cf-global.jpg "Example of an AWS Global Services")

For these global services at the time of creation:

- There is no concept of region because they're just globally available, so you don't have to determine a subset of regions e.g. IAM User.
- A single region must be explicitly chosen e.g. S3 Bucket.
  + You actually have to select a region at time of creation.
- A group of regions are chosen e.g. CloudFront Distribution



## Availability Zones (AZs)

An Availability Zone (AZ) is physical location made up of one or more data center.

A data center is a secured building that contains hundreds of thousands of computers. 

A region will **generally** contain **3 Availability Zones**.
> Here, we're saying *generally* because there are some cases where we will see less than 3, so there might be 2.

Data centers within a region will be isolate from each other (different buildings). But they will be close enough to provide low-latency (< 10 ms).

It's common practice to run workloads in at least 3 AZs to ensure services remain available in case one or two data centers fail. (High availability).

AZs are represented by a Region Code, followed by a letter identifier e.g. **us-east-1a**.
- `us-east-1` is the region
- `a` represents the particular AZ in that region

A Subnet is associated with an Availability Zone.

You never choose the AZ when launching resources. You choose the Subnet which is associated to the AZ (i.e. you choose `us-east-1a`, `us-east-1b`, `us-east-1c`, etc.).

A lot of services don't even require you to choose a subnet because they're fully managed by AWS. However, in cases like virtual machines, you're always choosing a subnet.

Example of an architectural diagram, representing two AZs, the Subnets associated with those AZs, and EC2 instances (Virtual Machines) launched in those subnets.

![Example of an Architectural Diagram mentioned above](/aws-certified-cloud-practitioner/assets/azs-with-subnets.jpg "Example of an Architectural Diagram mentioned above")
- `us-east-1` and `us-east-2` are regions
- our 2 AZs `1a`, and `1b`, and they're also subnets

### Summary Table for clearer view:

| Concept      | Description                                               | Example
| ------------ | --------------------------------------------------------- | -------------------------------------------
| Region       | Geographic area containing multiple AZs                   | US East (N. Virginia), Asia Pacific (Tokyo)
| AZ           | Logical group of 1+ data centers, isolated but connected  | us-east, us-west
| Data Center  | Physical building with servers, networking, storage       | Actual building in a city

### Visualization Representation:

- Say we have a AWS Region and in this particular one, we have Canada (Central), which is Montreal => `ca-central-1`.

  ![Visualization Representation part1](/aws-certified-cloud-practitioner/assets/repre-1.jpg "Visualization Representation part1")

- The idea here is that the region has multiple AZs, they are `ca-central-1a`, `ca-central-1b`, `ca-central-1d`.

  ![Visualization Representation part2](/aws-certified-cloud-practitioner/assets/repre-2.jpg "Visualization Representation part2")

- Within our AZs, they are made up of **one or more** data centers, not a single data centers, but a collection of buildings. 

  ![Visualization Representation part3](/aws-certified-cloud-practitioner/assets/repre-3.jpg "Visualization Representation part3")

- All AZs in an AWS Region are interconnected with high-bandwidth, low-latency networking, over fully redundant, dedicated metro fiber providing high-throughput, low-latency networking between (basically means very fast connection in between).

  ![Visualization Representation part4](/aws-certified-cloud-practitioner/assets/repre-4.jpg "Visualization Representation part4")

- All traffic between AZs is encrypted. 

- AZs are within 100km (60 miles) of each other.

  ![Visualization Representation part5](/aws-certified-cloud-practitioner/assets/repre-5.jpg "Visualization Representation part5")



## Selecting Regions and AZs Follow Along

You can check out the portion 2:18:32 til 2:22:04 in the video to see how Andrew did it. The current UI that you have right now with AWS might be a bit different from his video, but still you can check out his video to get the general idea. Everything except for the UI should mostly be the same.



## Fault Tolerance

### What is a fault domain?

- A fault domain is a section of a network that is vulnerable to damage if a critical device or system fails. The purpose of a fault domain is that if a failure occurs **it will not cascade outside that domain**, limiting the damage possible. 

  > So this is generally fine, because they know that this is a **fault domain** and nothing outside of this room is going to be affected.

- You can have fault domains nested inside fault domains.

### What is a fault level?

- A fault level is a collection of fault domains.

- The scope of a fault domain could be:
  - Specific servers in a rack
  - An entire rack in a data center
  - An entire room in a data center
  - The entire data center building

- It's up to the Cloud Service Provider (CSPs) to define the boundaries of a domain. AWS abstracts it all away so you don't have to think about it. But just to compare it against Azure, you actually define your fault domain. You might say that "make sure this workload is never running on the same VM on the same rack for these things", and you might like that level of control.

  ![Fault Level & Fault Domain Example](/aws-certified-cloud-practitioner/assets/fault-ex.jpg "Fault Level & Fault Domain Example")

- Data centers can also have fault domains within them. Maybe that have one particular room and that room is secure, so like if there's fire in that room, it's not going to affect the other rooms (Although realistically, if there’s a fire in one room, the whole data center would probably catch on fire 😂).

- Each Amazon Region is designed to be completely **isolated** from the other Amazon Regions.
  - This achieves the greatest possible fault tolerance and stability.

- Each AZ is **isolated**, but the AZs in a Region are connected through low-latency links.

- Each AZ is designed as an **independent failure zone**.
  > A *"Failure Zone"* is AWS describing a *Fault Domain*.

### Failure Zone
- AZs are physically separated within a typical metropolitan region and are located in lower risk flood plains.
- Discrete uninterruptible power supply (UPS) and onsite backup generation facilities.
- Data centers located in different AZs are designed to be supplied by independent substations to reduce the risk of an event on the power grid impacting more than one AZ. 
- AZs are all redundantly connected to multiple tier-1 transit providers. 

### Multi-AZ for High Availability

- If an application is partitioned across AZs, companies are better isolated and protected from issues such as **power outages, lightning strikes, tornadoes, earthquakes**, and more.
  > This is the reason why we want to run in multiple AZs, it is simply because of **fault domain**.



## AWS Global Network

The AWS Global Network, commonly referred to as *"The Backbone of AWS"*, that connects all the **AWS infrastructure** worldwide - Regions, AZs, and Edge Locations. 

Think of it as **private express way**, where data can move **very fast and securely** between AWS data centers, without relying on the slower public internet.

One key piece of this network is **Edge Locations**, which act like **on-ramps and off-ramps** for traffic entering or leaving AWS.

### Edge Locations

- Can act as **on and off ramps** for traffic entering or leaving AWS.

  #### On ramp

  - Let customer traffic enter AWS quickly through the nearest Edge Location. Once on AWS's private network, traffic moves faster and more reliably across Regions.

  - Examples:
    - AWS Global Accelerator: routes user traffic to the closest AWS Region effectively.
    - AWS S3 Transfer Acceleration: speeds up file uploads/downloads to S3 by using nearby Edge Locations.

    > Notice the names, they're like *"Accelerator"*, *"Accelerations"*, the idea here is that they are moving very fast.

  #### Off ramps 

  - Bring AWS services and content closer to end-users by delivering it from Edge Locations. Reduces latency because users don't have to reach all the way into a distant Region.

  - Examples:
    - Amazon CloudFront (CDN) (for context, it's a content distribution network)

  #### VPC Endpoints

  > Don't use Edge Locations, but are always utilized in the Global Network to avoid leaving the AWS Network.

  - Ensuring your resources stay within the AWS Network and do no traverse over the public Internet.
  - Keeps traffic private, secure, and faster by staying entirely inside the AWS backbone.
  - Ensuring your resources stay within the AWS Network and do no traverse over the Public Internet (i.e. VPC Endpoints make sure your resources talk to AWS services without ever going out to the public internet - the traffic stays entirely inside AWS's private network, making it faster and more secure).
    > **Example:** If you have resources in `us-east-1` that need to access S3 or DynamoDB, you can use a VPC Endpoint so that the traffic never leaves AWS's private network.

  | Concept       | Direction  | Purpose 
  | --------------| -----------| -------------------------------------------------------------------------
  | On-Ramps      | Into AWS   | Bring user traffic onto AWS's private backbone for speed & reliability
  | Off-Ramps     | Out of AWS | Deliver AWS services/content closer to end-users for lower latency
  | VPC Endpoints | Internal   | Keep communication between AWS resources and services private inside AWS


## Points of Presence (PoP)

### Points of Presence (PoP)

An intermediate location between an AWS Region and the end user, and this location could be a data center or collection of hardware. 

### AWS Point of Presence

For **AWS**, a Point of Presence is a data center **owned by AWS or a trusted partner** that is utilized by AWS Services related **for content delivery or expedited upload**.

### PoP resources are:

- #### Edge Locations
  + Data centers that hold cached (copy) on the most popular files (e.g. web pages, images, and videos) so that the delivery of distance to the end users are reduced.

- #### Regional Edge Caches
  + Data centers that hold much larger caches of less-popular files to reduce a full round-trip and also to reduce the cost of transfer fees.

- #### Example: 

  ![Example of an AWS PoP](/aws-certified-cloud-practitioner/assets/pop.jpg "Example of an AWS PoP")

  We're seeing an *"S3 Bucket"*, and it has to go through a *"Regional Edge Cache"*, then get to an *"Edge Location"*. 



## Tier 1

![tier diagram](/aws-certified-cloud-practitioner/assets/tier-dia.jpg "tier diagram")

As you can see, PoPs live at the edge/**intersection** of two networks.

So we can see that there's a PoP that's between Tier 2 Networks and Tier 3 Networks as an example.

**Tier 1 network** is a network that can reach every other network on the Internet **without purchasing IP transit or paying for peering**.

AWS AZs are all redundantly connected to multiple **tier-1 transit providers**.



## AWS Services using PoPs

The following AWS Services use PoPs **for content delivery or expedited upload**.

### Amazon Cloudfront 

- A **Content Delivery Network (CDN) service** that:
  - You point your website to CloudFront so that it will route requests to nearest Edge Location cache. 
  - Allows you to choose an **origin** (such as a web-server or storage) that will be source of cached.
  - Caches the contents of what origin would returned to various Edge Locations around the world.

### Amazon S3 Transfer Acceleration 

- Allows you to generate a special URL that can be used by end users to upload files to a nearby Edge Location. Once a file is uploaded to an Edge Location, it can move much faster within the AWS Network to reach S3. 

### AWS Global Accelerator

- Can find the optimal path from the end user to your web-servers. Global Accelerator are deployed within Edge Locations so you send user traffic to an Edge Location instead of directly to your web application.

  > Let's say you're running a web server in `us-east-1`, and you just don't have the time to set up infrastructure in other regions. You can turn this on and you'll basically get a boost. 



## AWS Direct Connect

A **private/dedicated connection between your data center, office, co-location and AWS**. 
> AWS mention that the connection is private, but that doesn't mean that it's secure. We'll talk about this once we've reached VPN, to make sure our connections are secure.
> A co-location (aka carrier-hotel) is a data center where equipment, space, and bandwidth are available for rental to retail customers.

![direct connect example diagram](/aws-certified-cloud-practitioner/assets/direct-con.jpg "direct connect example diagram")

Imagine you have a direct fiber cable that connects your data center to AWS. It’s like using your local servers - everything feels fast and smooth, with almost no delay.

**Direct Connect** has two **very-fast network** connection options:
1. Lower Bandwidth **50MBps - 500MBps**
2. Higher Bandwidth **1GBps or 10GBps**

Therefore, **Direct Connect**:
- Helps **reduce network costs** and **increase bandwidth throughput** (great for high traffic networks).
- Provides **a more consistent network experience** than a typical internet-based connection (reliable and secure).



## Direct Connect Locations

- **Direct Connect Locations** are **trusted partnered data centers** that you can establish **a dedicated high speed, low-latency connection from your on-premise to AWS**.  

- Example of a partnered data center in Toronto:
  - Allied Data Centers 

- You would use the **AWS Direct Connect** service to order and establish a connection. 



## AWS Local Zones

**Local Zones** are data centers located very close to a densely populated area to provide single-digit millisecond low latency performance (e.g. 7ms) for that area.  

To use a Local Zone, you need to opt in, probably open a support ticket to get access to it.

- **LA, California** was the first Local Zone to be deployed
  + It is a logical extension of the US-West Region
  + The Identifier looks like the following: `us-west-2-lax-1a`
- Only specific AWS Services have been made available
  + EC2 Instance Types (T3, C5, R5, R5d, I3en, G4)
  + EBS (io1 and gp2)
  + Amazon FSx
  + Application Load Balancer
  + Amazon VPC

The purpose of Local Zone is the support highly-demanding applications sensitive to latencies:
- Media & Entertainment
- Electronic Design Automation
- Ad-Tech
- Machine Learning 



## Wavelength Zones 

AWS Wavelength Zones allows for **edge-computing on 5G Networks**. Applications will have **ultra-low latency** being as close as possible to the users. 

AWS has partnered with various Telecom companies to utilize their 5G Networks. For example:
- verizon
- KDDI
- vodafone
- SK telecom

The idea here is that you create a Subnet tied to a Wavelength Zone and then you can launch VMs to the edge of the targeted 5G Networks.

Example:

Say you have the network, and you're using AWS to deploy an EC2 instance and then when users connect to those radio towers, they're going to be routed to nearby hardware that is running those VMs, the advantage here is that it's super super low latency.

![wavelength zones example](/aws-certified-cloud-practitioner/assets/radio.jpg "wavelength zones example")
