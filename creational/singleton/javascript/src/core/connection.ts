export default class Connection {
  private static instance: Connection;

  private constructor() {}

  public static getInstance(): Connection {
    if (!Connection.instance) {
      Connection.instance = new Connection();
    }
    return Connection.instance;
  }
}
