import AbstractHandler from "./AbstractHandler";

export default class DogHandler extends AbstractHandler {
  public handle(request: string): string | null {
    if (request === "meatball") {
      return `Dog I'll eat the ${request}`;
    }
    return super.handle(request);
  }
}
