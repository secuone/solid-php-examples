The Open-Closed Principle (OCP)
===============================

* * *

The Open-Closed Principle (OCP) states that software entities (classes, modules, functions, etc.) should be open for extension but closed for modification. In other words, the behavior of an entity should be extendable without modifying its source code.

#### Purpose of the Open-Closed Principle:

*   **Extensibility**: OCP promotes software design in a way that new functionalities can be added without changing the existing code.
*   **Stability**: By avoiding direct modifications to existing code, OCP helps maintain system stability and reduces the risk of introducing errors.
*   **Code Reusability**: By allowing behavior extension without modifying existing code, OCP fosters code reuse of software components.

#### Advantages of the Open-Closed Principle:

1.  **Facilitates Extension**: By designing components that can be extended without modifying their existing implementation, OCP facilitates the introduction of new functionalities.
2.  **Improves Maintainability**: By avoiding direct modification of existing code, OCP simplifies the task of maintaining and updating the software.
3.  **Promotes Code Reusability**: By designing components that can be extended and reused in different contexts, OCP promotes code reuse and system modularity.

### Example Application of the Open-Closed Principle:

Let's imagine a `Shape` class that has a method `calculateArea()`. If we want to add a new geometric shape without modifying the existing implementation of `Shape`, we could create a new `Circle` class that extends `Shape` and overrides the `calculateArea()` method to calculate the specific area of the circle.

#### Benefits of the Open-Closed Principle:

*   **Facilitates Extension**: OCP allows adding new functionalities without modifying existing code, facilitating software extension.
*   **Improves Maintainability**: By avoiding direct modification of existing code, OCP simplifies the task of maintaining and updating the software.
*   **Promotes Code Reusability**: By designing components that can be extended and reused in different contexts, OCP promotes code reuse and system modularity.

In summary, the Open-Closed Principle promotes software design that is extensible and easy to maintain by allowing the addition of new functionalities without modifying existing code.

### Interfaces 🆚 Abstract Class

#### Benefits of Interface:

*   Does not modify the hierarchy tree
*   Allows implementing N Interfaces

#### Benefits of Abstract Class:

*   Allows developing the Template Method pattern by pushing logic to the model
*   Issue: Difficulty of tracing
*   Private Getters (Tell don’t ask)

#### Conclusion

*   When do we use Interfaces?: When decoupling between layers
*   When do we use Abstract?: In certain cases for Domain Models