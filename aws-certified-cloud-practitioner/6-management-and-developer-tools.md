# Management and Developer Tools

- [AWS Application Programming Interface (API)](#aws-application-programming-interface-api)
    + [What is an Application Programming Interface (API)?](#what-is-an-application-programming-interface-api)
    + [AWS API Follow Along](#aws-api-follow-along)

- [AWS Management Console](#aws-management-console)
    + [AWS Management Console Follow Along](#aws-management-console-follow-along)

- [Service Console](#service-console)
    + [Service Console Follow Along](#service-console-follow-along)

- [AWS Account ID](#aws-account-id)
    + [AWS Account ID Follow Along](#aws-account-id-follow-along)

- [AWS Tools for PowerShell](#aws-tools-for-powershell)
    + [What is PowerShell?](#what-is-powershell)
    +   [AWS Tools for PowerShell Follow Along](#aws-tools-for-powershell-follow-along)

- [Amazon Resource Names (ARNs)](#amazon-resource-names-arns)
    + [Why do we need ARNs?](#why-do-we-need-arns)
    + [Structure and format of ARNs](#structure-and-format-of-arns)
    + [Paths in ARNs](#paths-in-arns)



## AWS Application Programming Interface (API)

### What is an Application Programming Interface (API)?

- An API is software that allows two applications/services to talk to each other. The most common type of API is via HTTP/S requests.
- AWS API is an HTTP API and you can interact by sending HTTPS requests, using an application interacting with APIs like **Postman**.
- Example of what a request would be:

    ![Example of a AWS API Request](/aws-certified-cloud-practitioner/assets/api-request.jpg "Example of a AWS API Request")

    - Each AWS Services has its own **Service Endpoint** (i.e. it's the **monitoring.us-east-1.amazonaws.com** in the picture above) which you send requests.
    - And of course we can't call an API without authenticating. Therefore, to authorize, you will need to generate a **signed request** (i.e. it's the long bold text under "Authorization"), and so that's a process of making a separate request with your AWS credentials and get back a token.
    - You need to also provide an **ACTION** and accompanying **parameters** as the payload. 

- Rarely do users directly send HTTP requests directly to the AWS API. It's much easier to interact with the API via a variety of Developer Tools. 

![Example of services that we can interact with the API](/aws-certified-cloud-practitioner/assets/api-rare.jpg "Example of services that we can interact with the API")

### AWS API Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:14:37 to 3:16:52**.



## AWS Management Console

The AWS Management Console is a **web-based** unified console. **Build, manage, and monitor everything** from simple web apps to complex cloud deployments. 

The AWS Management Console is located at [console.aws.amazon.com](console.aws.amazon.com)

Point and Click to manually launch and configure AWS resources with limited programming knowledge.
> This is known as **ClickOps** since you can perform all your system operations via clicks. 

### AWS Management Console Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:17:44 to 3:20:06**.

> A lot of people tend to also call the AWS Management Console as the Dashboard or the Homepage.



## Service Console

AWS Service each have their own customized console. You can access these consoles by **searching** the service name.

![Example of the service console](/aws-certified-cloud-practitioner/assets/serv-cons.jpg "Example of the service console")

Here we can see that we typed in EC2, and then it'll be showing the screen below, which is the EC2 console.

![Example of the EC2 Console](/aws-certified-cloud-practitioner/assets/ec2-cons.jpg "Example of the EC2 Console")

> A lot of times whenever you're going through labs or follow-alongs, you'll hear the instructor say "Go to the EC2 Console, go to the RDS Console". What they're telling you is to go type the name of the service to go to that particular service console.

Some AWS Service Console will act as an umbrella console containing many AWS services. Example:
- VPC Console
- EC2 Console
- Systems Manager Console
- SageMaker Console
- CloudWatch Console

> Say if you want to go the security group of EC2, there won't be any security group console, but it will be under the EC2 Console. 

### Service Console Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:21:10 to 3:24:28**.



## AWS Account ID

Every AWS Account has a unique Account ID. The **Account ID** can be easily found by dropping down the current user in the Global Navigation.

![Example of the Account ID](/aws-certified-cloud-practitioner/assets/acc-id.jpg "Example of the Account ID")

The AWS Account ID is composed of 12 digits. Example:
- 123456789012
- 121212121212
- 498241098510

The AWS Account ID is used
- When logging in with a non-root user account

    ![Example of the IAM user](/aws-certified-cloud-practitioner/assets/iam-user.jpg "Example of the IAM user")

- Cross-account roles
- Support cases (AWS will commonly ask what your Account ID is so they could identify the account that they want to look at)

It is generally good to keep your Account ID private as it is one of many components used to identify an account for attack by a malicious actor. 

### AWS Account ID Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:25:31 to 3:29:11**.



## AWS Tools for PowerShell

### What is PowerShell?

**PowerShell** is a task automation and configuration management framework. A **command-lind shell**and a **scripting language**.

Unlike most shells, which accept and return text, PowerShell is built on top of the .NET Common Language Runtime (CLR), and accepts and returns .NET objects.

**AWS Tools for Powershell** lets you interact ith the AWS API via PowerShell Cmdlets.
> Cmdlet is a special type of command in PowerShell in the form of capitalized verb-and-noun e.g. *New-S3Bucket*.

### AWS Tools for PowerShell Follow Along

> Andrew Brown said this is not included in the exam, but he still wanted to show us what it looks like, if you're interested, the time stamp is mentioned below.

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:30:18 to 3:37:36**.



## Amazon Resource Names (ARNs)

**Amazon Resource Names (ARNs)** uniquely identify AWS resources. ARNs are required to specify a resource unambiguously across all of AWS

> It's simply a **unique identifier** for *any* AWS resource. Think of it like a globally unique "full name" for something in AWS, not just "Bob" but "Mr. Bob Smith, living at 123 Street, in Halifax, Canada".

### Why do we need ARNs?

Because AWS has:
- **Billions of resources across accounts and regions**
- Names alone (like "Bob" or "mybucket") aren't enough.

So ARNs exist to **pinpoint a resource unambiguously**, no matter where it lives.

### Structure and format of ARNs

The ARN has the following **format variations**

- *arn:partition:service:region:account-id:resource-id*
- *arn:partition:service:region:account-id:resource-type/resource-id*
- *arn:partition:service:region:account-id:resource-type:resource-id*

Partition:

- aws - AWS Regions
- aws-cn - China Regions
- aws-us-gov - AWS GovCloud (US) Regions

Service - Identifies the service:

- ec2
- s3
- iam

Region - which AWS resource:

- us-east-1
- ca-central-1

Account ID:

- 121212121212
- 123456789012

Resource ID (could be a number name or path):
- user/Bob
- instance/i-1234567890abcdef0

In the AWS Management Console, it's common to be able to copy the ARN to your clipboard.

![Example of being able to copy the ARN to the clipboard](/aws-certified-cloud-practitioner/assets/arn-s3.jpg "Example of being able to copy the ARN to the clipboard")

Notice that the `arn:aws:s3:::my-bucket` is a little bit different. S3 is a global service in AWS, so there's not reason to specify to Region or the Account ID.

However in other cases, it's really long, here we have a load balancer, and it has all the information there.

![Example of the full information of a Load Balancer](/aws-certified-cloud-practitioner/assets/arn-lb.jpg "Example of the full information of a Load Balancer")

### Paths in ARNs

Resource ARNs can include a path. Paths can include a wildcard character, namely an asterisk (*)

Examples:
- **IAM Policy ARN Path**
    - arn:aws:iam::123456789012:user/Development/product_1234/*
- **S3 ARN Path**
    - arn:aws:s3:::my_corporate_bucket/Development/*

### ARN Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:39:35 to 3:41:52**.