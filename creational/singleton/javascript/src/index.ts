import Connection from "./core/connection.ts";

function Client() {
  const conn1 = Connection.getInstance();
  const conn2 = Connection.getInstance();
  if (conn1 === conn2) {
    console.log("Its singleton, same instance");
  } else {
    console.log("Its not singleton, different instances");
  }
}

Client();
