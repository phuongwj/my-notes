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

- To accomplish **high availability** and avoid *a single point of failure*, we use something called **Elastic Load Balancer**

### Elastic Load Balancer

A load balancer allows you to evenly distribute traffic to multiple servers in one or more data center. If a data center or server becomes unavailable (unhealthy) the load balancer will route the traffic to only available data centers with servers.

> Understand that just because you have additional servers, that doesn't mean that you have high availability, you might need to meet a particular threshold availability. So you might need to have at least 2 servers to meet the demand of traffic.



## High Scalability