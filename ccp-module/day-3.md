# day-3 / Digital Transformation, The Benefits of Cloud, AWS Global Infrastructure
before reading, i recommend you to switch to a lighter appearance, since it will make reading this easier.

# Digital Transformation

## Innovation Waves 

When we're talking about **Innovation Waves**, we're talking about **Kondratiev waves** (aka Innovation Waves or K-Waves) are hypothesized cycle-like phenomena in the global world economy.

The phenomenno is closely connected with Technology life cycles. 

![Kondratiev waves](/ccp-module/assets/wave.png "Kondratiev waves")

Each awve irreversibly changes the society on a global scale. The idea here being said is that the latest wave is **Cloud Technology**, or other things like ML/AI but maybe they're all part of the same waves or separate waves, but general they're broken up based on the **PRDE**

This is a common pattern of a wave change of **supply** and **demand**:

![Wave pattern](/ccp-module/assets/wave-pattern.jpg "Common pattern of a wave")

So if we're seeing this, we know that we are in a wave and where we are in a wave.



## Burning Platform

**Burning Platform** is a term used when a company abandons old technology for new technology with the uncertainty of success and can be motivated by fear that the organization future survival hinges no its **digital transformation**.



## Digital Transformation Checklist 

You can get to this website by either searching "Digital Transformation Checklist", then it'll lead you to the "Public Sector Digital Transformation" page and you'll be able to get the pdf (however, as of the current time I'm writing this note, the pdf has been archived!).



## Evolution of Computing Power

### What is Computing Power?

The throughout measured at which a computer can complete a computational task. A few examples of computing:

- General Computing
- GPU Computing 
- Quantum Computing 

The idea is we're not done with the evolution of computing power, things are going to geta lot faster once we solve things. 

### AWS Service Offering

- Elastic Compute Cloud EC2.
- AWS Inferentiare (Inf1).
- AWS Brakcet (for this one, you can actually use Quantum Computing as a service).



## Amazon Bracket

You can use Quantum Computing on AWS! It is accessible. You just need to sign-in to AWS console and search *Bracket* then you'll be making your way over to something called *Amazon Bracket*.

On the side bar, you can set up *Quantum tasks* then do further stuffs if you need.



# The Benefits of Cloud 

The benefits of the cloud is a summary of reasons why an organization would consider adopting or migrating to utilizing public cloud.

- **Agility:** Increase speed and agility.
- **Pay-as-you-go pricing:** Trade capital expense for variable expense.
- **Economy of scale:** Benefit from massive economies of scale.
- **Global Reach:** Go global in minutes.
- **Security**
- **Reliability:** Stop spending money on running and maintaining data centers.
- **High Availability**
- **Scalability:** Benefit from massive economies of scale.
- **Elasticity**
- **Fault tolerance**
- **Disaster Recovery**

**The Benefits of Cloud** is a reworking and expansion of the **Six Advantages of Cloud**.



## The Six Advantages of Cloud 

1. Trade capital expense for variable expense.

    You can **Pay-On-Demand** meaning there is no upfront-cost and you pay for only what you consume or pay by the hour, minutes or seconds. *Instead of paying for upfront costs of data centerse and servers*.

2. Benefit from massive economies of scale.

    You are **sharing the cost with other customers** to get unbeatable savings. *Hundreds of thousands of customers utilizing a fraction of a server*.

3. Stop guessing capacity.

    **Scale up or down** to meet the current need. Launch and destroy services whenever. *Instead of paying for idle or underutilized servers*.

4. Increase speed and agility.

    **Launch resources within a few clicks in minutes** *instead of waiting days or weeks of your IT to implement the solution on-premise.

5. Stop spending money on running and maintaining data centers.

    **Focus on your own customers**, developing and configuring your applications. *Instead of operations such as of racking, stacking, and powering servers*.

6. Go global in minutes.

    **Deploy your app in multiple regions around the world with a few clicks*.
    Provide lower latency and a better experience for your customers at minimal cost.

References: https://docs.aws.amazon.com/whitepapers/latest/aws-overview/six-advantages-of-cloud-computing.html



## The Seven Advantages of Cloud

- Cost-effective: 

    You **pay for what you consume**, **no up-front cost**. On-demand pricing or Pay-as-you-go (PAYG) with thousands of customers sharing the cost of the resources.

- Global:

    Launch workloads **anywhere in the world**. Just choose a region.

- Secure:

    Cloud provider takes care of physical security. **Cloud services can be secure by default** or you have the ability to configure access down to a granular level.

- Reliable:

    Data backup, disaster recovery, data replication, and fault tolerance.

- Scalable:

    Increase or decrease resources and services based on demand.

- Elastic:

    **Automate** scaling during spikes and drop in demand.



# AWS Global Infrastructure

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

AWS has **millions** of active customers and **ten of thousansd** of partners globally.



## AWS Global Infrastructure Follow Along 

You can check the link below that shows the global infrastructure.
https://aws.amazon.com/about-aws/global-infrastructure/



## Regions

Regions are **geographically distinct locations** consisting of one or more Availability Zones. 

![AWS Regions](/ccp-module/assets/regions.jpg "AWS Regions")

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

![AWS Regional Services](/ccp-module/assets/regional-services.jpg "AWS Regional Services")

You generally don't explicitly set the Region for a service at the time of creation.


### Global Services

Some AWS Services operate across multiple regions and the region will be fixed to "Global" e.g. Amazon S3, CloudFront, Route53, IAM. (in simpler terms, services that are **not bound to any single region** and operate globally).

Scope: Can be accessed and used from **any region**, often with **central management**.

Example:
- AWS IAM
- Amazon CloudFront

What this means is that if you search up CloudFront, and go into the CloudFront console, it will just say "Global", and you can't switch out of that.

![Example of an AWS Global Services](/ccp-module/assets/cf-global.jpg "Example of an AWS Global Services")

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

AZs are represented by a Region Code, followed by a letter identifer e.g. **us-east-1a**.

### Summary Table for clearer view:

| Concept      | Description                                               | Example
| ------------ | --------------------------------------------------------- | -------------------------------------------
| Region       | Geographic area containing multiple AZs                   | US East (N. Virginia), Asia Pacific (Tokyo)
| AZ           | Logical group of 1+ data centers, isolated but connected  | us-east-1a, us-east-1b
| Data Center  | Physical building with servers, networking, storage       | Actual building in a city


