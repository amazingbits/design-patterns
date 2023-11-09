export default class HouseBuilder {
  house;
  constructor() {
    this.house = {};
  }
  reset = () => {
    this.house = {};
  };
  buildFloor = (type) => {
    this.house.floor = type;
    return this;
  };
  buildWindows = (quantity) => {
    this.house.windows = quantity;
    return this;
  };
  buildDoors = (quantity) => {
    this.house.doors = quantity;
    return this;
  };
  buildBedrooms = (quantity) => {
    this.house.bedrooms = quantity;
    return this;
  };
  buildBathrooms = (quantity) => {
    this.house.bathrooms = quantity;
    return this;
  };
  buildArea = (area) => {
    this.house.area = area;
    return this;
  };
  buildPrice = (price) => {
    this.house.price = price;
    return this;
  };
  build = () => {
    return this.house;
  };
}
