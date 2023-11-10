import Transport from "./Transport";
import Car from "./Car";
import Plane from "./Plane";
import Ship from "./Ship";
import Train from "./Train";

type TransportTypes = "car" | "plane" | "ship" | "train";

export default class TransportFactory {
  static createTransport(type: TransportTypes): Transport {
    const supportedTypes = {
      car: Car,
      plane: Plane,
      ship: Ship,
      train: Train,
    };
    if (!supportedTypes[type]) {
      throw new Error(`Type ${type} is not supported`);
    }
    return new supportedTypes[type]();
  }
}
