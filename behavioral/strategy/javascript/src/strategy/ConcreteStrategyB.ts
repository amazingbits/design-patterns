import IStrategy from "./IStrategy";

export default class ConcreteStrategyB implements IStrategy {
  public doAlgorithm(data: string[]): string[] {
    return data.reverse();
  }
}
