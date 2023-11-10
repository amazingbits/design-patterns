import Transport from "./Transport";

export default class Plane extends Transport {
  deliver(): void {
    console.log("make deliver by plane");
  }
}
