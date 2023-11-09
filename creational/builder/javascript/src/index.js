import HouseBuilder from "./builders/HouseBuilder.js";

const house1 = new HouseBuilder();
const house2 = new HouseBuilder();

house1
  .buildBathrooms(2)
  .buildDoors(4)
  .buildWindows(2)
  .buildFloor("stone")
  .buildPrice(150000);

house2.buildBathrooms(2).buildDoors(1).buildWindows(2).buildFloor("wood");

console.log("house 1", house1.build());
console.log("house 2", house2.build());
