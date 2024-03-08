These three classes adhere to the Open/Closed Principle (OCP) because they are extensible for modification without needing to alter their original source code.

1.  The `Measurable` interface defines a contract that classes can implement to provide measurement functionality. If we need to add new classes that implement `Measurable`, we can do so without modifying the interface itself.
    
2.  The `Song` class implements the `Measurable` interface and provides a concrete implementation of the `getTotalLength` and `getSentLength` methods. If we need to add specific functionalities for songs, we can extend this class without modifying its original code.
    
3.  The `Progress` class uses the `Measurable` interface in its `getSentLengthPercentage` method, allowing it to calculate the percentage of sent length for any object that implements `Measurable`. If we need to calculate progress for new types of measurable objects, we can do so without modifying the `Progress` class.
    

In summary, these classes are open for extension (we can add new functionalities without modifying them) but closed for modification (we don't need to change their original source code to extend their functionality), which complies with the Open/Closed Principle.
