export default class Shipment {
  update({ id, username }) {
    console.log(`[${id}]: [shipment] will pack the users order to ${username}`);
  }
}
