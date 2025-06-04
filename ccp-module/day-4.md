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