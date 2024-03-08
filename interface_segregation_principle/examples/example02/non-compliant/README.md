Suppose we are developing a payment processing system that can handle credit card payments and payments through PayPal. In this system, there is an interface called `PaymentProcessor` that defines methods for processing credit card and PayPal payments.

1.  **PaymentProcessor.php:** Defines the `PaymentProcessor` interface with methods for processing credit card and PayPal payments.
2.  **PaymentGateway.php:** Implements the `PaymentGateway` class, which implements the `PaymentProcessor` interface. This class handles both credit card payments and payments through PayPal.

In this example, the `PaymentGateway` class implements the `PaymentProcessor` interface and provides implementations for the `processCreditCardPayment()` and `processPayPalPayment()` methods. However, this violates the Interface Segregation Principle because clients may depend on methods they do not use.

For example, if a client only needs to process credit card payments, they still have to depend on the implementation of `processPayPalPayment()` in the `PaymentGateway` class, which introduces unnecessary and potentially confusing dependency.
