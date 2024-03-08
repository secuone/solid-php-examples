Interface Segregation Principle (ISP)
====================================

* * *

The Interface Segregation Principle (ISP) states that no client should be forced to depend on methods it does not use. In other words, interfaces should be specific to the clients that use them, avoiding large and uncohesive interfaces.

#### Purpose of the Interface Segregation Principle:

To ensure that no client is obligated to depend on methods it does not use by designing interface contracts according to the clients' needs, rather than relying on available implementations. Interfaces should reflect the clients' needs. Additionally, it advocates avoiding Header Interfaces[^1] and preferring Role Interfaces[^2].

*   **Avoid Monolithic Interfaces**: ISP promotes the creation of small and cohesive interfaces that meet the specific needs of clients.
*   **Reduce Coupling**: By dividing interfaces into smaller and more specific parts, ISP reduces coupling between software components, facilitating modularity and system extensibility.
*   **Facilitate Implementation and Maintenance**: By providing more specific interfaces, ISP makes implementation and maintenance simpler and less error-prone.

#### Advantages of the Interface Segregation Principle:

1.  **Increased Coherence and Clarity**: ISP promotes more specific and cohesive interfaces, improving the coherence and clarity of software design.
2.  **Coupling Reduction**: By dividing interfaces into smaller and more specific parts, ISP reduces coupling between software components, facilitating modularity and system extensibility.
3.  **Facilitates Implementation and Maintenance**: By providing more specific interfaces, ISP makes implementation and maintenance simpler and less error-prone.

### Example of Applying the Interface Segregation Principle:

Let's suppose we have an `Printer` interface that defines a `printDocument()` method and a `scanDocument()` method. If we have a client that only needs to print documents, they should not be forced to implement the `scanDocument()` method. Instead, we could divide the interface into `Printer` and `Scanner` to meet the specific needs of clients.

#### Benefits of the Interface Segregation Principle:

*   **Increased Coherence and Clarity**: ISP promotes more specific and cohesive interfaces, improving the coherence and clarity of software design.
*   **Reduction of Coupling**: By dividing interfaces into smaller and more specific parts, ISP reduces coupling between software components, facilitating the modularity and extensibility of the system.
*   **Facilitates Implementation and Maintenance**: By providing more specific interfaces, ISP makes implementation and maintenance simpler and less error-prone.

In summary, the Interface Segregation Principle promotes a software design that provides specific and cohesive interfaces, enhancing the coherence, modularity, and ease of maintenance of the system.

[^1]: Header Interfaces: In this approach, interfaces are designed to include all methods that might be needed for any possible implementation of that interface. This means that an interface may contain a large number of methods, some of which may not be relevant to all implementing classes. This can lead to the "fat interface problem" where implementing classes must provide implementations for methods they do not use.

[^2]: Role Interfaces: In contrast, Role Interfaces are designed focusing on specific roles or responsibilities that a class must perform. Instead of including all possible methods, a role interface contains only the methods necessary to fulfill a specific role in the system. This promotes better cohesion and lower coupling, as classes only need to implement methods relevant to the role they play. In summary, while Header Interfaces tend to be more generic and comprehensive, Role Interfaces are more specific and designed to promote a more modular and responsibility-focused design.
