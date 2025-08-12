# day-4 / AWS Global Infrastructure part 2

# AWS Global Infrastructure part 2

## AWS Global Network

The AWS Global Network represent the **interconnections between AWS Global Infrastructure**. Commonly referred to as *"The Backbone of AWS"*.

Think of it as private express way, where things can move very fast between data centers. 

One thing that's utilized a lot to get data in and out of AWS very quickly is **Edge Locations**.

### Edge Locations

Can act as **on and off ramps** to the AWS Global Network. 

#### On ramps

Uses Edge Locations as an **on-ramp** to quickly reach AWS resources in other regions by traversing the fast AWS Global Network.

Examples:
- AWS Global Accelerator
- AWS S3 Transfer Acceleration 

> Notice the names, they're like *"Accelerator"*, *"Accelerations"*, the idea here is that they are moving very fast.

#### Off ramps 

Uuses Edge Locations as an **off-ramp** to provide at the Edge storage and compute near the end user.

Examples:
- Amazon CloudFront (CDN) (for context, it's a content distribution network)

#### VPC Endpoints

> Another thing that is kind of always utilized in the Global Network
> Doesn't use Edge Locations

Ensuring your resources stay within the AWS Network and do no traverse over the Public Internet (i.e. if you have a resource running in `us-east-1` and 1 in `eu` and they never have to go to the Internet, it would make sense to always enforce it to stay within the AWS Network because it's going to be a lot faster).

## Points of Presence (PoP)

### Points of Presence (PoP)

An intermediate location between an AWS Region and the end user, and this location could be a data center or collection of hardware. 

### AWS Point of Presence

For **AWS**, a Point of Presence is a data center **owned by AWS or a trusted partner** that is utilized by AWS Services related **for content delivery or expediated upload**.

**PoP resources are:**
- Edge Locations
- Regional Edge Caches

Example: 

![Example of an AWS PoP](/ccp-module/assets/pop.jpg "Example of an AWS PoP")

We're seeing an *"S3 Bucket"*, and it has to go through a *"Regional Edge Cache"*, then get to an *"Edge Location"*. 

### Edge Locations

**Edge Locations** are data centers that hold cached (copy) on he most popylar files (e.g. web pages, images and videos) so that the delivery of distance to the end users are reduced.

### Regional Edge Locations

**Regional Edge Locations** are data enters that hold much larger caches of less-popular files to reduce a full roundtrip and also to reduce the cost of transfer fees.



## Tier 1

![tier diagram](/ccp-module/assets/tier-dia.jpg "tier diagram")

As you can see, PoPs live at the edge/**intersection** of two networks.

So we can see that there's a PoP that's between Tier 2 Networks and Tier 3 Networks as an example.

**Tier 1 network** is a network that can reach every other network on the Internet **without purchasing IP transit or paying for peering**.

AWS AZs are all redundantly connected to multiple **tier-1 transit providers**.



## AWS Services using PoPs

The following AWS Services use PoPs **for content delivery or expediated upload**.

### Amazon Cloudfront 

A **Content Delivery Network (CDN) service** that:
- You point your website to CloudFront so that it will route requests to nearest Edge Location cache. 
- Allows you to choose an **origin** (such as a web-server or storage) that will be source of cached.
- Caches the contents of what origin would returned to various Edge Locations around the world.

## Amazon S3 Transfer Acceleration 

Allows you to generate a special URL that can be used by end users to upload files to a nearby Edge Location. Once a file is uploaded to an Edge Location, it can move much faster within the AWS Network to reach S3. 

## AWS Global Accelerator

Can find the optimal path from the end user to your web-servers. Global Accelerator are deployed within Edge Locations so you send user traffic to an Edge Location instead of directly to your web application.

> Let's say you're running a web server in `us-east-1`, and you just don't have the time to set up infrastructure in other regions. You can turn this on and you'll basically get a boost. 



## AWS Direct Connect

A **private/dedicated connection between your data center, office, co-location and AWS**. 
> AWS mention that the connection is private, but that doesn't mean that it's secure. We'll talk about this once we've reached VPN, to make sure our connections are secure.
> A co-location (aka carrier-hotel) is a data center where equipment, space, and bandwidth are available for rental to retail customers.

![direct connect example diagram](/ccp-module/assets/direct-con.jpg "direct connect example diagram")

Imagine you have a direct fiber cable that connects your data center to AWS. It’s like using your local servers - everything feels fast and smooth, with almost no delay.

**Direct Connect** has two **very-fast network** connection options:
1. Lower Bandwidth **50MBps - 500MBps**
2. Higher Bandwidth **1GBps or 10GBps**

Therefore, **Direct Connect**:
- Helps **reduce network costs** and **increase bandwidth throughput** (great for high traffic networks).
- Provides **a more consistent network experience** than a typical internet-based connection (reliable and secure).



## Direct Connect Locations

**Direct Connect Locations** are **trusted partnered data centers** that you can establish **a dedicated high speed, low-latency connection from your on-premise to AWS**.  

Example of a partnered data center in Toronto:
- Allied Data Centers 

You would use th **AWS Direct Connect** service to order and establish a connection. 



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

AWS Wavelength Zones allows for **edge-computing on 5G Networks**. Applicatinos will have **ultra-low latency** being as close as possible to the users. 

AWS has partnered with various Telecom companies to utilize their 5G Networks. For example:
- verizon
- KDDI
- vodafone
- SK telecom

The idea here is that you create a Subnet tied to a Wavelength Zone and then you can launch VMs to the edge of the targeted 5G Networks.

Example:

Say you have the network, and you're using AWS to deploy an Ec2 instance and then when users connect to those radio towers, they're going to be routed to nearby hardware that is running those VMs, the advantage here is that it's super super low latency.

![wavelength zones example](/ccp-module/assets/radio.jpg "wavelength zones example")
