import IStrategy from "./IStrategy";

export default class ConcreteStrategyA implements IStrategy {
  public doAlgorithm(data: string[]): string[] {
    return data.sort();
  }
}
