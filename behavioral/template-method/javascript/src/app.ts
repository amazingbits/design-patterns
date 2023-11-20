import AbstractClass from "./AbstractClass";
import ConcreteClass1 from "./ConcreteClass1";
import ConcreteClass2 from "./ConcreteClass2";

function client(abstractClass: AbstractClass): void {
  abstractClass.templateMethod();
}

console.log("Same client code can work with different subclasses:");
client(new ConcreteClass1());
console.log("");

console.log("Same client code can work with different subclasses:");
client(new ConcreteClass2());
