import AbstractClass from "./AbstractClass";

export default class ConcreteClass2 extends AbstractClass {
  protected requiredOperation1(): void {
    console.log("ConcreteClass2 says: Implemented Operation1");
  }

  protected requiredOperation2(): void {
    console.log("ConcreteClass2 says: Implemented Operation2");
  }

  protected hook1(): void {
    console.log("ConcreteClass2 says: Overridden Hook1");
  }
}
