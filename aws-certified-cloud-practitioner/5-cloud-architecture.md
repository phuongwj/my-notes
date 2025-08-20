# Cloud Architecture

- [Cloud Architecture Terminologies](#cloud-architecture-terminologies)
    + [What is a Solutions Architect?](#what-is-a-solutions-architect)
    + [What is a Cloud Architect?](#what-is-a-cloud-architect)
    + [Business Factors hat both Solutions Architect and Cloud Architect need to consider](#business-factors-that-both-solutions-architect-and-cloud-architect-need-to-consider)

- [High Availability](#high-availability)
    + [Elastic Load Balancer](#elastic-load-balancer)

- [High Scalability](#high-scalability)

## Cloud Architecture Terminologies

### What is a Solutions Architect?

- A role in a technical organization that architects a technical solution using multiple systems via researching, documentation, experimentation.

### What is a Cloud Architect?

- A solutions architect that is focused solely on architecting technical solutions using cloud services. 
- A cloud architect need to understand the following terms and factor them into their designed architecture based on the business requirements. 
    - **Availability:** Your ability to ensure a service remains available e.g. **Highly Available (HA)**
    - **Scalability:** Your ability to grow rapidly or unimpeded
    - **Elasticity:** Your ability to shrink and grow to meet the demand
    - **Fault Tolerance:** Your ability to prevent a failure 
    - **Disaster Recovery:** Your ability to recover from a failure e.g. **Highly Durable (DR)**

### Business Factors that both Solutions Architect and Cloud Architect need to consider

- (Security) How secure is this solution?
- (Cost) How much is this going to cost?



## High Availability

- Your ability for your service to **remain available** by ensuring there is *no single point of failure* and/or ensure a certain level of performance. 
- Running your workload across multiple **Availability Zones** ensures that if 1 or 2 **AZs** become unavailable, your service/applications remains available.

    ![Example of a service running across AZs](/aws-certified-cloud-practitioner/assets/high-avail.jpg "Example of a service running across AZs")

- To accomplish **high availability** and avoid *a single point of failure*, we use something called [**Elastic Load Balancer**](#elastic-load-balancer)

### Elastic Load Balancer

A load balancer allows you to evenly distribute traffic to multiple servers in one or more data center. If a data center or server becomes unavailable (unhealthy) the load balancer will route the traffic to only available data centers with servers.

> Understand that just because you have additional servers, that doesn't mean that you have high availability, you might need to meet a particular threshold availability. So you might need to have at least 2 servers to meet the demand of traffic.



## High Scalability

- Your ability to **increase your capacity** based on the increasing demand of traffic, memory and computing power.

### Vertical Scaling
- Scaling *Up* - Upgrade to a bigger server

### Horizontal Scaling
- Scaling *Out* - Add more servers of the same size

> The good thing about both Vertical and Horizontal Scaling is that you're also going to get **high availability**. So if you do need two servers, it's always better to add an additional server as oppose to having a larger server, but it's going to be very dependent on a lot of factors.



## High Elasticity

- Your ability to **automatically** increase or decrease your capacity based on the current demand of traffic, memory and computing power.
- To increase being **highly elastic**, we use [**Auto Scaling Groups (ASG)**](#auto-scaling-groups-asg).

### Horizontal Scaling
- Scaling **Out** - Add more servers of the same size
- Scaling **In** - Removing underutilized servers of the same size

### Vertical Scaling
- Generally hard for traditional architecture so you'll usually only see horizontal scaling described with **Elasticity**.

### Auto Scaling Groups (ASG)

A AWS feature that will automatically add or remove servers based on scaling rules you define based on metrics.



## Fault Tolerance

- Your ability for your service to ensure there is *no single point of failure*. **Preventing the chance of failure**.
- To prevent the chance of failure, we use [**Fail-overs**](#fail-overs)

### Fail-overs
- When you have a plan to **shift traffic** to a redundant system in case the primary system fails.
- Example:
    - Having a copy (secondary) of your database where all ongoing changes are synced. The secondary system is not in-use until a fail over occurs and it becomes the primary database.
        > When we're talking about a backup (copy) of databases on AWS, this is a concept of [**RDS Multi-AZ**](#rds-multi-az).

#### RDS Multi-AZ

- It is when you run a duplicate standby database in another Availability Zone in case your primary database fails.



## High Durability

- Your ability to **recover** from a disaster and to prevent **the loss** of data.
- Solution that recover from a disaster is known as **Disaster Recovery (DR)**.
    - Do you have a backup?
    - How fast can you restore that backup?
    - Does your backup still work?
    - How do you ensure current live data is not corrupt?
        > A solution to this in AWS is something called [**CloudEndure Disaster Recovery**](#cloudendure-disaster-recovery)

### CloudEndure Disaster Recovery

- It continuously replicates your machines into a low-cost staging area in your target AWS account and preferred Region enabling fast and reliable recovery in case of IT data center failures. 



## Business Continuity Plan (BCP)

- A **Business Continuity Plan (BCP)** is a document that outlines how a business will continue operating **during an unplanned disruption in services**.
- Example here we have a disaster, we can also see that there are chances of getting durations lik Data Loss and Downtime, and the two factors [**RPO**](#recovery-point-objective-rpo), [**RTO**](#recovery-time-objective-rto) are going to define the length of the durations.

    ![Example of a disaster](/aws-certified-cloud-practitioner/assets/disaster.jpg "Example of a disaster")

### Recovery Point Objective (RPO)

- The maximum acceptable amount of data loss after an unplanned data-loss incident, expressed as an amount of time.
- *"How much data are you willing to lose?"*

### Recovery Time Objective (RTO)

- The maximum amount of downtime your business can tolerate without incurring a significant financial loss. 
- *"How much time are you willing to go down?"*



## Disaster Recovery Options

