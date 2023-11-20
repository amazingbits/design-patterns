import Handler from "./Handler";

export default abstract class AbstractHandler implements Handler {
  private nextHandler: Handler | null;

  constructor() {
    this.nextHandler = null;
  }

  public setNext(handler: Handler): Handler {
    this.nextHandler = handler;
    return handler;
  }

  public handle(request: string): string | null {
    if (this.nextHandler) {
      return this.nextHandler.handle(request);
    }
    return null;
  }
}
