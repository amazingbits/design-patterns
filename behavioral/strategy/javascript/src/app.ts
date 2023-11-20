import Context from "./Context";
import ConcreteStrategyA from "./strategy/ConcreteStrategyA";
import ConcreteStrategyB from "./strategy/ConcreteStrategyB";

const ctx = new Context(new ConcreteStrategyA());
console.log("Client: Strategy is set to normal sorting");
ctx.doSomeBusinessLogic();

console.log("");

console.log("Client: Strategy is set to reverse sorting");
ctx.setStrategy(new ConcreteStrategyB());
ctx.doSomeBusinessLogic();
