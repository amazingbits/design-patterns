import AbstractProductA from "./AbstractProductA";
import AbstractProductB from "./AbstractProductB";

export default class ConcreteProductB1 implements AbstractProductB {
  public usefulFunctionB(): string {
    return "The result of product B1";
  }

  public anotherUsefulFunctionB(collaborator: AbstractProductA): string {
    const result = collaborator.usefulFunctionA();
    return `The result of the B1 collaborating with the (${result})`;
  }
}
