import AbstractProductA from "./AbstractProductA";

export default class ConcreteProductA1 implements AbstractProductA {
  public usefulFunctionA(): string {
    return "The result of product A1";
  }
}
