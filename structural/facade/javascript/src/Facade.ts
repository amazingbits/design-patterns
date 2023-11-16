import Subsystem1 from "./lib/Subsystem1";
import Subsystem2 from "./lib/Subsystem2";

export default class Facade {
  private subsystem1: Subsystem1;
  private subsystem2: Subsystem2;

  constructor(subsystem1?: Subsystem1, subsystem2?: Subsystem2) {
    this.subsystem1 = subsystem1 || new Subsystem1();
    this.subsystem2 = subsystem2 || new Subsystem2();
  }

  public operation(): string {
    let result = "Facade initializes subsystems: \\n";
    result += this.subsystem1.operation1() + "\\n";
    result += this.subsystem2.operation1() + "\\n";
    result += "Facade orders subsystems to perform the action: \\n";
    result += this.subsystem1.operationN() + "\\n";
    result += this.subsystem2.operationN() + "\\n";
    return result;
  }
}
