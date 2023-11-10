import Transport from "./Transport";

export default class Car extends Transport {
  deliver(): void {
    console.log("make deliver by car");
  }
}
