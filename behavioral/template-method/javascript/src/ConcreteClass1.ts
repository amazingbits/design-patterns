import AbstractClass from "./AbstractClass";

export default class ConcreteClass1 extends AbstractClass {
  protected requiredOperation1(): void {
    console.log("ConcreteClass1 says: Implemented Operation1");
  }

  protected requiredOperation2(): void {
    console.log("ConcreteClass1 says: Implemented Operation2");
  }
}
