Liskov Substitution Principle (LSP)
===================================

* * *

The Liskov Substitution Principle (LSP) states that objects of a superclass should be replaceable with objects of its subclasses without affecting the correctness of the program. In other words, a subclass should behave in such a way that it does not surprise the client expecting superclass behavior.

For example, if S is a subtype of T, instances of T should be replaceable by instances of S without altering the properties of the program. That is, having a hierarchy implies that we are establishing a contract in the parent, so ensuring that this contract is maintained in the child allows us to substitute the parent and the application will continue to function perfectly 👌

#### Purpose of the Liskov Substitution Principle:

Applying the Liskov Substitution Principle ensures that we can correctly apply the Open Closed Principle (OCP).

*   **Extensibility**: OCP promotes software design in a way that new functionalities can be added without changing the existing code.
*   **Stability**: By avoiding direct modifications to existing code, OCP helps maintain system stability and reduces the risk of introducing errors.
*   **Code Reusability**: By allowing behavior extension without modifying the existing code, OCP fosters code reuse of software components.

#### Advantages of the Liskov Substitution Principle:

1.  **Interchangeability**: By following LSP, subclasses can be used in place of their superclasses, promoting code reuse and design flexibility.
2.  **Consistency of Behavior**: LSP ensures that clients can rely on consistent behavior across all subclasses, reducing the risk of errors and misunderstandings.
3.  **Simplified Maintenance**: By preserving behavioral consistency, LSP simplifies the task of maintaining and updating the software, as modifications in subclasses do not affect other parts of the system.

### Example Application of the Liskov Substitution Principle:

Suppose we have a `Shape` class with a `calculateArea()` method. If we create a subclass `Circle` that extends `Shape`, this subclass must implement `calculateArea()` in a way that meets the client's expectations without breaking the existing functionality of `Shape`.

#### Benefits of the Liskov Substitution Principle:

*   **Interchangeability**: LSP ensures that subclasses can be used in place of their superclasses, promoting code reuse and design flexibility.
*   **Consistency of Behavior**: LSP ensures consistent behavior across all subclasses, reducing the risk of errors and misunderstandings.
*   **Simplified Maintenance**: By preserving behavioral consistency, LSP simplifies the task of maintaining and updating the software, as modifications in subclasses do not affect other parts of the system.

In summary, the Liskov Substitution Principle promotes software design that ensures behavioral consistency between superclasses and their subclasses, facilitating system extension and maintenance.