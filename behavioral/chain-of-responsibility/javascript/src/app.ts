import Handler from "./Handler";
import MonkeyHandler from "./MonkeyHandler";
import SquirreHandler from "./SquirreHandler";
import DogHandler from "./DogHandler";

function client(handler: Handler) {
  const foods = ["nut", "banana", "coffee"];
  for (const food of foods) {
    console.log(`Who wants a ${food}?`);
    const result = handler.handle(food);
    if (result) {
      console.log(result);
    } else {
      console.log(`${food} was left untouched`);
    }
  }
}

const monkey = new MonkeyHandler();
const squirrel = new SquirreHandler();
const dog = new DogHandler();

monkey.setNext(squirrel).setNext(dog);

console.log("Chain: Monkey > Squirrel > Dog\n");
client(monkey);
console.log("");

console.log("Subchain: Squirrel > Dog\n");
client(squirrel);
