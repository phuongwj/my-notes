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



## AWS Command Line Interface (CLI)

### What is a CLI?

A Command Line Interface (CLI) **processes commands to a computer program in the from of lines of text**. Opearting systems implement a command-line interface in a shell. 

### What is a Terminal?

A terminal is a text only interface (input/output environment)

### What is a Console?

A console is a physical computer to physically input information into a terminal

### What is a Shell?

A shell is the command line program that users interact with to input commands. Popular shell programs:
- Bash
- Zsh
- Powershell

> People commonly use **Terminal, Shell or Console** to generally describe interacting with a Shell. 

### AWS CLI

Allows users to programmatically interact with the AWS API via intering **single or multi-line commands** into a shell or terminal.

- The AWS CLi is a Pyhon executable program.
    + Python is required to install AWS CLI

- The AWS Cli can be installed on Windows, Mac or Linux/Unix
- The name of the CLI program is **aws**.

### AWS CLI Follow Along 

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:43:41 to 3:56:04**.



## AWS Software Development Kit (SDK)

A Software Development Kit (SDK) is **a collection of software development tools** in *one installable package*.

You can use the **AWS SDK** to programmaticallyc reate, modify, delete or interact with AWS resources.

AWS SDK is offered in various programming languages:
- Java
- Python
- Node.js
- Ruby
- Go
- .NET
- PHP
- JavaScript
- C++

### AWS SDK Follow Along 

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **3:56:51 to 4:11:51**.



## AWS CloudShell

**AWS CloudShell** is a **browser-based shell** built into the AWS Managemen Console. AWS CloudShell is scoped per region, same credentials as logged in user. Free service!

> If you have a hard time setting up your own shell or terminal on your computer, or maybe you just don't have access or privilege to do so, AWS has available to you, just click on the **shell icon**.

**Preinstalled Tools:** AWS CLI, Python, Node.js, git, make, pip, sudo, tar, tmux, vim, wget, and zip and more.

**Storage incuded:** 1 GB o fstorage free per AWS region.

**Saved files and settings:** Files saved in your home directory are available in future sessions for the same AWS region.

**Shell Environments**. Seamlessly switch between:
- Bash
- PowerShell
- Zsh



## Infrastructure as Code (IaC)

You write a configuration script to **automate creating, updating or destroying** cloud infrastructure. 
- IaC is a **blueprint** of your infrastructure.
- IaC allows you to easily **share, version or inventory** your cloud infrastructure.

AWS has two offerings for writing Infrastructure as Code.

### AWS CloudFormation (CFN)

CFN is a Declarative IaC tool.

**Declarative**
- What you see is what you get. ***Explicit***
- More verbose, but zero chance of mis-configuration
- Uses scripting languages e.g. JSON, YAML, XML 

### AWS Cloud Development Kit (CDK)

CDK is an Imperative IaC tool.

**Imperatiev**
- You say what you want, and the rest is filled in. ***Implicit***
- Less verbose, you could end up with misconfiguration
- Use programming languages e.g. Python, JavaScript



## CloudFormation

AWS CloudFormation allows you to write Infrastructure as Code (IaC) as either a **JSON** or **YAML** file.

![Example of the yaml code](/aws-certified-cloud-practitioner/assets/yaml.jpg "Example of the yaml code")

> Example of YAML file.

CloudFormation is simple but it can lead to large filesor is limited in some regard to creating dynamic or repeatable infrastructure compared to CDK.

CloudForamtion can be easier for DevOps Engineers who do not have a background in web programming languages.

Since CDK generates out CloudFormation, it's still important to be able to read and understand CloudFormation in order to debug IaC stacks. 

### CloudFormation Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **4:15:30 to 4:30:29**.



## Cloud Development Kit (CDK)

AWS CDK allows you to use your favorite programming language to write Infrastructure as Code (IaC), such as TypeScript, NodeJs, Python, Java, ASP.NET.

- CDK is powered by CloudFormation (it generates out CloudFormation templates)
- CDK has a large library of reusable cloud components called CDK Construct [https://constructs.dev](https://constructs.dev)
- CDK comes with its own CLI
- CDK pipelines to quickly setup CI/CD pipelines for CDK projects
- CDK has a testing framework for Unit and Integration Testing

> AWS SDK looks similar, but the key difference is CDK ensures Idempotent of your Infrastructure.
> **Idempotent** means that if you use the CDK to say "give me virtual machines", you'll always have 1 virtual machines, because it's trying to manage the state of the file, whereas if you use SDK, you'll end up with more and more servers, and it's not a managing state. 

### CDK Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **4:32:44 to 4:41:23**.



## AWS Toolkit for VSCode

AWS Toolkit is an open-source plugin for VSCode to create, debug, deploy AWS resources.

### 1. AWS Explorer

Explore a wide range of AWS resources to your linked AWS Account (Sometimes you can view them, sometimes you can delete them, it varies because it's based on what's available there with the service).

![Example of AWS Explorer](/aws-certified-cloud-practitioner/assets/aws-exp.jpg "Example of the AWS Explorer")

### 2. AWS CDK Explorer

Allows you to explore your stacks defined by CDK.

![Example of the AWS CDK Explorer](/aws-certified-cloud-practitioner/assets/aws-cdk-exp.jpg "Example of the AWS CDK Explorer")

### 3. Amazon Elastic Container Service

Provides IntelliSense for ECS task-definitions files

> IntelliSense means that when you type, you'll get auto-completion but you'll also get description as to what it is that you're typing of 

![Example of the Amazon Elastic Container Service](/aws-certified-cloud-practitioner/assets/amazon-ec-serv.jpg "Example of the Amazon Elastic Container Service")

### 4. Serverless Applications

Create, debug and deploy serverless applications via SAM and CFN (pretty much the main reason to have AWS Toolkit)

![Example of the Serverless Applications](/aws-certified-cloud-practitioner/assets/serverless-app.jpg "Example of the Serverless Applications")



## Access Keys 

**Access Keys** is a ***key and secret*** required to have programmatic access to AWS resources wen interacting wth the AWS API outside of the AWS Managemenet Console.

> An Access Key is commonly referred to as **AWS Credentials** (not necessarily the username and password to login).

A user must be *granted access* to use Access Keys.

![Example of the Access Key](/aws-certified-cloud-practitioner/assets/acc-key.jpg "Example of the Access Key")

> When you're creating a user, you can just checkbox "Access Key". You can always do this after creating a user but it's good to do that as you're creating the user.

You can **generate** an Access Key and Secret

![Example of the Access Key and Secret](/aws-certified-cloud-practitioner/assets/acc-key-secret.jpg "Example of the Access Key and Secret")

- Never share your access keys
- Never commit access keys to a codebase
- You can have two active Access Keys
- You can deactive Access Keys
- Access Keys have whatever access a user has to AWS resources

Access Keys are to be stored in `~/.aws/credentials` and follow a TOML file format.

> The `~` represents your home folder `.aws` means it's a hidden folder.

![Example of the TOML file that stores aws credentials](/aws-certified-cloud-practitioner/assets/toml-file.jpg "Example of the TOML file that stores aws credentials")

> **Default** will be the access key used when no profile is specified.
> You can store multiple acess keys by giving the **profile** names

![Example of the `aws configure`](/aws-certified-cloud-practitioner/assets/aws-config.jpg "Example of the `aws configure`")

> You can use the **aws configure** CLI command to populate the credential file

![Example of the AWS SDK](/aws-certified-cloud-practitioner/assets/aws-sdk.jpg "Example of the the AWS SDK")

> The AWS SDK will automatically read from these environment variables.
> This is the safe way of using an Access Key within your code. 

### Access Keys Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **4:44:56 to 4:46:49**.



## AWS Documentation

**AWS Documentation** is *a large collection of technical documentation* on how to use AWS Services. You can find it at [docs.aws.amazon.com](docs.aws.amazon.com).

AWS is very good about providing detailed information about every AWS service.

The basis of this course and for any AWS Certification will derive mostly from the AWS Documentation.

### AWS Documentation Follow Along

Feel free to check the [freeCodeCamp Youtube video from Andrew Brown](https://www.youtube.com/watch?v=NhDYbskXRgc&t=7092s&ab_channel=freeCodeCamp.org) from **4:47:48 to 4:50:11**.