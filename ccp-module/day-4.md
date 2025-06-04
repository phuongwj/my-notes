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

An intermediate location between an AWS Region and the end user, and this locatino could be a data center or collection of hardware. 

### AWS Point of Presence

For **AWS**, a Point of Presence is a data center **owned by AWS or a trusted partner** that is utilized by AWS Services related ==**for content delivery or expediated upload**==.

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

to be continued.