import AbstractFactory from "./AbstractFactory";
import AbstractProductA from "../products/AbstractProductA";
import AbstractProductB from "../products/AbstractProductB";
import ConcreteProductA1 from "../products/ConcreteProductA1";
import ConcreteProductB1 from "../products/ConcreteProductB1";

export default class ConcreteFactory1 implements AbstractFactory {
  createProductA(): AbstractProductA {
    return new ConcreteProductA1();
  }
  createProductB(): AbstractProductB {
    return new ConcreteProductB1();
  }
}
