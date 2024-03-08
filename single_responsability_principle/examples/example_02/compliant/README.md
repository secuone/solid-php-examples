These classes adhere to the Single Responsibility Principle (SRP) because each of them has a clearly defined single responsibility:

1.  `Book`: This class is responsible for representing a book and providing methods to retrieve its title, author, and page content. All these responsibilities are related to managing specific information about a book.
    
2.  `StandardOutPutPrinter`: This class is responsible for printing content to the standard output. Its sole responsibility is handling the printing of content, without concerning itself with the specific details of what is being printed.
    

Each class has a clear reason to change and a single responsibility. If in the future we need to make changes in how books are printed, we will modify the `StandardOutPutPrinter` class, while if we need changes in the representation or retrieval of book information, we will modify the `Book` class. This demonstrates a design that respects the SRP.