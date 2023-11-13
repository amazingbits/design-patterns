import AbstractProductA from "../products/AbstractProductA";
import AbstractProductB from "../products/AbstractProductB";

export default interface AbstractFactory {
  createProductA(): AbstractProductA;
  createProductB(): AbstractProductB;
}
