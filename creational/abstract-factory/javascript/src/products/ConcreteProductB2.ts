import AbstractProductA from "./AbstractProductA";
import AbstractProductB from "./AbstractProductB";

export default class ConcreteProductB2 implements AbstractProductB {
  public usefulFunctionB(): string {
    return "The result of product B2";
  }

  public anotherUsefulFunctionB(collaborator: AbstractProductA): string {
    const result = collaborator.usefulFunctionA();
    return `The result of the B2 collaborating with the (${result})`;
  }
}
