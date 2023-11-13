import AbstractFactory from "./factory/AbstractFactory";
import ConcreteFactory1 from "./factory/ConcreteFactory1";
import ConcreteFactory2 from "./factory/ConcreteFactory2";

function clientCode(factory: AbstractFactory) {
  const productA = factory.createProductA();
  const productB = factory.createProductB();
  console.log(productA.usefulFunctionA());
  console.log(productB.anotherUsefulFunctionB(productA));
}

console.log("Client: Testing client code with the first factory type...");
clientCode(new ConcreteFactory1());

console.log("");

console.log(
  "Client: Testing the same client code with the second factory type..."
);
clientCode(new ConcreteFactory2());
