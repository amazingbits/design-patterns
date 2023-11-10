import TransportFactory from "./transport/TransportFactory";

// Creating a new Car Object
const car = TransportFactory.createTransport("car");
car.deliver(); // make delivery by car

// Creating a new Ship Object
const ship = TransportFactory.createTransport("ship");
ship.deliver(); // make delivery by ship

// Creating a new Plane Object
const plane = TransportFactory.createTransport("plane");
plane.deliver(); // make delivery by plane

// Creating a new Train Object
const train = TransportFactory.createTransport("train");
train.deliver(); // make delivery by train
