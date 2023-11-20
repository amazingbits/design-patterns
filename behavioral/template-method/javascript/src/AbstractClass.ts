export default abstract class AbstractClass {
  public templateMethod() {
    this.baseOperation1();
    this.requiredOperation1();
    this.baseOperation2();
    this.hook1();
    this.requiredOperation2();
    this.baseOperation3();
    this.hook2();
  }

  protected baseOperation1(): void {
    console.log("AbstractClass says: I'm doing the bulk of the work");
  }

  protected baseOperation2(): void {
    console.log(
      "AbstractClass says: But I let subclasses override some operations"
    );
  }

  protected baseOperation3(): void {
    console.log(
      "AbstractClass says: But I'm doing the bulk of the work anyway"
    );
  }

  protected abstract requiredOperation1(): void;

  protected abstract requiredOperation2(): void;

  protected hook1(): void {
    console.log("AbstractClass says: hook 1");
  }

  protected hook2(): void {
    console.log("AbstractClass says: hook 2");
  }
}
