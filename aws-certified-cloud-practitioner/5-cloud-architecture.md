# Cloud Architecture

- [Cloud Architecture Terminologies](#cloud-architecture-terminologies)
    + [What is a Solutions Architect?](#what-is-a-solutions-architect)
    + [What is a Cloud Architect?](#what-is-a-cloud-architect)
    + [Business Factors hat both Solutions Architect and Cloud Architect need to consider](#business-factors-that-both-solutions-architect-and-cloud-architect-need-to-consider)

- [High Availability](#high-availability)
    + [Elastic Load Balancer](#elastic-load-balancer)

- [High Scalability](#high-scalability)
    + [Vertical Scaling](#vertical-scaling)
    + [Horizontal Scaling](#horizontal-scaling)

- [High Elasticity](#high-elasticity)
    + [Horizontal Scaling](#horizontal-scaling-1)
    + [Vertical Scaling](#vertical-scaling-1)
    + [Auto Scaling Groups (ASG)](#auto-scaling-groups-asg)

- [Fault Tolerance](#fault-tolerance)
    + [Fail-overs](#fail-overs)
        + [RDS Multi-AZ](#rds-multi-az)

- [High Durability](#high-durability)
    + [CloudEndure Disaster Recovery](#cloudendure-disaster-recovery)

- [Business Continuity Plan (BCP)](#business-continuity-plan-bcp)
    + [Recovery Point Objective (RPO)](#recovery-point-objective-rpo)
    + [Recovery Time Objective (RTO)](#recovery-time-objective-rto)

- [Disaster Recovery Options](#disaster-recovery-options)
    + [Backup & Restore](#backup--restore)
    + [Pilot Light](#pilot-light)
    + [Warm Standby](#warm-standby)
    + [Multi-site Active/active](#multi-site-activeactive)

- [RTO Visualized](#rto-visualized)
    + [What the Graph Shows](#what-the-graph-shows)
    + [Where They Meet](#where-they-meet)
    + [Placement of the DR Strategies](#placement-of-the-dr-strategies)

- [RPO Visualized](#rpo-visualized)
    + [What the Graph Shows](#what-the-graph-shows-1)
    + [Where They Meet](#where-they-meet-1)
    + [Placement of the DR Strategies](#placement-of-the-dr-strategies-1)

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

There are multiple options for recovery that trade cost vs time to recover. Sometimes, this is represented vertically or even horizontally if you want.

![Example of a horizontally representation](/aws-certified-cloud-practitioner/assets/horizontal.jpg "Example of a horizontally representation")

The picture below will show the **Disaster Recovery strategies** in the AWS Cloud. Each option is a trade-off between **cost** (how much you spend to keep the backup resources running) and **recovery time** (how quickly you can get back online after a failure).

![Example of recovery strategies](/aws-certified-cloud-practitioner/assets/horizontal-strats.jpg "Example of recovery strategies")

> **Low** can also be represented as **Cold** and **High** can also be represented as **Hot**.

### Backup & Restore

- **How it works:** You backup your data and restore it onto new infrastructure
- **RPO/RTO:** *Hours*
- **Use cases:** Lower priority systems
- **Cost:** $ (lowest)
- **Drawback:** Infrastructure needs to be redeployed after the event

### Pilot Light

- **How it works:** Data is replicated to another region with the minimal services running
- **RPO/RTO:** *10 minutes*
- **Use cases:** Core services that must come back quickly but don't require full capacity right away
- **Cost:** $$
- **Drawback:** Scaling and deployment needed before returning to full operating

### Warm Standby

-**How it works:** Run a **scaled-down** but functional copy of your infrastructure. If disaster strikes, scale it up to full production capacity
- **RPO/RTO:** *Minutes*
- **Use cases:** Business-critical services that require faster recovery
- **Cost:** $$$
- **Drawback:** Still some scaling required before full recovery

### Multi-site Active/active

- **How it works:** Run full production environments in two (or more) regions simultaneously, sharing traffic. If one fails, traffic shifts instantly to the other
- **RPO/RTO:** *Real-time*
- **Use cases:** Mission-critical services where downtime and data loss are unacceptable
- **Cost:** $$$$
- **Benefit:** Zero downtime, near-zero data loss



## RTO Visualized

Recap: **Recovery Time Objective (RTO)** is the maximum acceptable delay between the interruption of service and restoration of service. This objective determines what is considered an acceptable time window when service is unavailable and is defined by the organization. 

![RTO Graph](/aws-certified-cloud-practitioner/assets/rto-visual.jpg "RTO Graph")

### What the Graph Shows

- **X-axis:** Length of Service Interruption (how long your system is down)
- **Y-axis:** Cost and Complexity
- Two main curves:
    1. Blue curve = Recovery Cost
        - How much it costs to **build and maintain** a recovery strategy.
        - Example: Multi-site active/active costs a lot upfront (duplicate infrastructure) while Backup & Restore is cheap.
    2. Red curve = Cost of Business Impact
        - How much money/business you lose the longer the system is unavailable.
        - Example: If Amazon.com goes down for 1 hour, they lose millions -> their curve rises steeply.

### Where They Meet:

- The point where the **Recovery Cost (blue)** and **Business Impact Cost (red)** intersect is the **optimal trade-off**.
- That's where your chosen **RTO* should sit.
- In other words:
    - Too far left -> You're overspending on recovery.
    - Too far right -> Downtime is too costly.

### Placement of the DR Strategies:
- **Backup & Restore** (Far right): cheap to maintain, but recovery takes hours, so business cost skyrockets.
- **Pilot Light** (Middle): moderate cost, recovery in minutes.
- **Warm Standby** (Left middle): higher cost, faster recovery
- **Multi-site Active/Active** (Far left): very high cost, but instant recovery (near zero downtime)



## RPO Visualized

Recap: **Recovery Point Objective (RPO)** is the maximum acceptable amount of time since the last data recovery point. This objective determines what is considered an acceptable loss of data between the last recovery point and the interruption of service and is defined by the organization.

![RTO Graph](/aws-certified-cloud-practitioner/assets/rpo-visual.jpg "RTO Graph")

### What the Graph Shows

- **X-axis:** Data Loss before Service Interruption (how much data are you willing to lose, measured in time since the last backup or replication)
- **Y-axis:** Cost and Complexity
- Two main curves:
    1. Blue curve = Recovery Cost
        - How much it costs to **build and maintain** a recovery solution that minimizes data loss.
        - Example: Multi-site active/active is expensive but minimizes data loss, while Backup & Restore is cheap but allows for more data loss.
    2. Red curve = Cost of Business Impact
        - How much money/business you lose as data loss increases.
        - Example: If you lose hours of data, the business impact can be severe, especially for critical systems.

### Where They Meet:

- The point where the **Recovery Cost (blue)** and **Business Impact Cost (red)** intersect is the **optimal trade-off**.
- That's where your chosen **RPO** should sit.
- In other words:
    - Too far left → You're overspending to prevent any data loss.
    - Too far right → Data loss is too costly for the business.

### Placement of the DR Strategies:
- **Backup & Restore** (Far right): cheapest to maintain, but you risk losing hours of data.
- **Pilot Light** (Middle): moderate cost, less data loss.
- **Warm Standby** (Left middle): higher cost, minimal data loss.
- **Multi-site Active/Active** (Far left): highest cost, but near-zero data loss.
