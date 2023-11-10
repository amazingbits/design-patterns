import Transport from "./Transport";

export default class Train extends Transport {
  deliver(): void {
    console.log("make deliver by train");
  }
}
