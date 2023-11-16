import Facade from "./Facade";
import Subsystem1 from "./lib/Subsystem1";
import Subsystem2 from "./lib/Subsystem2";

function client(facade: Facade) {
  console.log(facade.operation());
}

const facade = new Facade(new Subsystem1(), new Subsystem2());
client(facade);
