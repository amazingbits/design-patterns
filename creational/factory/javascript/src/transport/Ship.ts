import Transport from "./Transport";

export default class Ship extends Transport {
  deliver(): void {
    console.log("make deliver by ship");
  }
}
