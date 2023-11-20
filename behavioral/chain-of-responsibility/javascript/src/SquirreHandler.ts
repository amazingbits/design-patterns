import AbstractHandler from "./AbstractHandler";

export default class SquirreHandler extends AbstractHandler {
  public handle(request: string): string | null {
    if (request === "nut") {
      return `Squirre I'll eat the ${request}`;
    }
    return super.handle(request);
  }
}
