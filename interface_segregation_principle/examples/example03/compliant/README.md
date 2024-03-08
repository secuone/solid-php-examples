Our use case doesn't necessarily have to know what the implementation does behind the scenes, so it would simply call the `save` method.

Therefore, our interface wouldn't need to refer to the `flush` method either; it will be our `UserRepositoryMySql` implementation that internally ensures that the user is correctly persisted in the database.

Although the initial code might have seemed decoupled from the implementation thanks to the interface, it was structurally coupled 🧩:

*   From our use case, we knew that we had to call the `save` method first and then the `flush` method.

Be careful!👀 With this change, we manage to comply with the ISP, but in return, we are losing the advantages that the Unit of Work pattern can offer us. If, in the future, we needed to leverage it in our application, we would have to consider a different design.