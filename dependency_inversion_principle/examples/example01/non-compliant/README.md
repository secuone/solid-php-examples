This example violates the Dependency Inversion Principle as it has a high-level class that directly depends on a low-level class instead of depending on an abstraction.

In this case, the class `SomeService` directly depends on the concrete class `FileLogger`. This makes `SomeService` tightly coupled to `FileLogger`, making it difficult to substitute `FileLogger` with another logger implementation in the future. Additionally, the `SomeService` class cannot be easily reused in other contexts that require different logger implementations.
